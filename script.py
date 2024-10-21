import aiohttp
import asyncio
from bs4 import BeautifulSoup
import random
import os
from aiohttp import ClientTimeout

async def parse_product(session, li_element):
    # Парсинг SKU
    sku = li_element['data-sku']
    
    # Парсинг изображения
    img_url = li_element.select_one('.lazy')['data-src']
    img_filename = f"{sku}.jpg"
    
    # Парсинг имени
    name = li_element.select_one('.searchtresult_productdetail_link').text.strip()
    
    # Генерация случайной цены
    price = random.randint(50, 2000)
    
    # Парсинг ссылки на детали продукта
    product_url = li_element.select_one('.searchtresult_productdetail_link')['href']
    
    # Парсинг атрибутов
    attributes = await parse_product_attributes(session, product_url)
    
    return {
        'sku': sku,
        'name': name,
        'price': price,
        'image': img_url,
        'attributes': attributes
    }

async def download_image(session, url, filename):
    async with session.get(url) as response:
        if response.status == 200:
            os.makedirs('public/storage', exist_ok=True)
            with open(os.path.join('public/storage', filename), 'wb') as f:
                f.write(await response.read())

async def parse_product_attributes(session, url):
    timeout = ClientTimeout(total=30)  # Увеличиваем время ожидания до 30 секунд
    proxy = "http://tnsdDK:wePhaZ@45.142.31.29:8000"
    retries = 3  # Добавляем возможность повторных попыток
    
    for attempt in range(retries):
        try:
            async with session.get(url, timeout=timeout, proxy=proxy) as response:
                html = await response.text()
                break  # Если успешно получили ответ, выходим из цикла
        except asyncio.TimeoutError:
            if attempt < retries - 1:
                print(f"Попытка {attempt + 1} не удалась. Повторная попытка для URL: {url}")
                await asyncio.sleep(2)  # Ждем 2 секунды перед повторной попыткой
            else:
                print(f"Время ожидания истекло для URL после {retries} попыток: {url}")
                return {}
        except aiohttp.ClientProxyConnectionError:
            print(f"Ошибка подключения к прокси для URL: {url}")
            return {}
    
    soup = BeautifulSoup(html, 'html.parser')
    attributes_table = soup.select_one('.attributes.table')
    
    if not attributes_table:
        return {}
    
    attributes = {}
    rows = attributes_table.select('tr')
    for row in rows:
        key = row.select_one('th').text.strip()
        value = row.select_one('td').text.strip()
        attributes[key] = value
    
    return attributes

async def parse_all_products(html_content):
    soup = BeautifulSoup(html_content, 'html.parser')
    product_elements = soup.select('li.sppl-entry')
    
    products = []
    total_products = len(product_elements)
    print(f"Количество продуктов: {total_products}")
    
    async with aiohttp.ClientSession() as session:
        tasks = [parse_product(session, element) for element in product_elements]
        for i, future in enumerate(asyncio.as_completed(tasks), 1):
            product = await future
            products.append(product)
            print(f"Обработано продуктов: {i}/{total_products} ({i/total_products*100:.2f}%)")
    
    return products

async def main():
    with open('index.html', 'r', encoding='utf-8') as file:
        html_content = file.read()

    products = await parse_all_products(html_content)

    # Запись продуктов в файл
    with open('products.txt', 'w', encoding='utf-8') as output_file:
        for product in products:
            # Форматирование данных продукта для записи
            product_str = f"SKU: {product['sku']}\n"
            product_str += f"Название: {product['name']}\n"
            product_str += f"Цена: {product['price']}\n"
            product_str += f"Изображение: {product['image']}\n"
            product_str += "Атрибуты:\n"
            for key, value in product['attributes'].items():
                product_str += f"  {key}: {value}\n"
            product_str += "\n"  # Пустая строка между продуктами
            
            # Запись в файл
            output_file.write(product_str)

    print("Данные о продуктах записаны в файл 'products.txt'")

if __name__ == "__main__":
    asyncio.run(main())
