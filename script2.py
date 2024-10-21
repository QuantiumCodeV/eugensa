import re

def parse_product_data(file_path):
    products = []
    attributes_set = set()  # Для уникальных атрибутов
    attribute_values = []  # Для значений атрибутов

    with open(file_path, 'r', encoding='utf-8') as file:
        content = file.read()
        # Разделяем данные по товарам
        items = content.strip().split("\n\n")
        
        for item in items:
            product = {}
            lines = item.split("\n")
            for line in lines:
                line = line.strip()  # Удаляем лишние пробелы
                if line.startswith("SKU:"):
                    product['unique_identifier'] = line.split(": ", 1)[1].strip()
                elif line.startswith("Название:"):
                    product['name'] = line.split(": ", 1)[1].strip()
                elif line.startswith("Цена:"):
                    product['price'] = line.split(": ", 1)[1].strip()
                elif line.startswith("Изображение:"):
                    product['photo'] = line.split(": ", 1)[1].strip()
                elif line.startswith("Атрибуты:"):
                    attributes = lines[lines.index(line) + 1:]  # Получаем все строки после "Атрибуты:"
                    for attribute in attributes:
                        attribute = attribute.strip()
                        if attribute:  # Проверяем, что строка не пустая
                            attr_name, attr_values = attribute.split(": ", 1)
                            attr_values_list = [value.strip() for value in attr_values.split(", ")]
                            for value in attr_values_list:
                                attributes_set.add(attr_name.strip())
                                attribute_values.append((attr_name.strip(), value.strip()))  # Сохраняем как единое значение
                    product['attributes'] = attributes

            if product:  # Добавляем продукт только если он не пустой
                products.append(product)
    
    return products, attributes_set, attribute_values

import re



def generate_sql(products, attributes_set, attribute_values):
    sql_statements = []

    # SQL для вставки атрибутов
    for attribute in attributes_set:
        sql_attribute = f"INSERT INTO attributes (name, created_at, updated_at) VALUES ('{attribute}', NOW(), NOW());"
        sql_statements.append(sql_attribute)

    # SQL для вставки значений атрибутов
    for attr_name, attr_value in attribute_values:
        print(attr_name)
        print(attr_value)
        # Сохраняем значение как единое целое
        sql_value = f"INSERT INTO attribute_values (attribute_id, value, created_at, updated_at) VALUES ((SELECT id FROM attributes WHERE name = '{attr_name}' LIMIT 1), '{attr_value}', NOW(), NOW());"
        sql_statements.append(sql_value)

    # SQL для вставки продуктов
    for product in products:
        sql_product = f"INSERT INTO products (name, unique_identifier, price, photo, description, created_at, updated_at) VALUES ('{product['name']}', '{product['unique_identifier']}', {product['price']}, '{product['photo']}', NULL, NOW(), NOW());"
        sql_statements.append(sql_product)

    # SQL для вставки связей между продуктами и значениями атрибутов
    for product in products:
        for attribute in product['attributes']:
            attr_name, attr_values = attribute.split(": ", 1)
            attr_values_list = [value.strip() for value in attr_values.split(', ')]  # Разделяем значения по запятой
            print(attr_values_list)
            for attr_value in attr_values_list:
                attr_value = attr_value.strip()  # Убираем лишние пробелы
                print(attr_value)
                sql_relation = f"INSERT INTO attribute_product (product_id, attribute_value_id, created_at, updated_at) VALUES ((SELECT id FROM products WHERE unique_identifier = '{product['unique_identifier']}' LIMIT 1), (SELECT id FROM attribute_values WHERE value = '{attr_value}' LIMIT 1), NOW(), NOW());"
                sql_statements.append(sql_relation)
    return sql_statements




def main():
    file_path = 'products.txt'  # Укажите путь к вашему файлу
    products, attributes_set, attribute_values = parse_product_data(file_path)
    sql_statements = generate_sql(products, attributes_set, attribute_values)

    # Сохраняем SQL-запросы в файл
    with open('insert_products.sql', 'w', encoding='utf-8') as sql_file:
        for statement in sql_statements:
            sql_file.write(statement + "\n")

if __name__ == "__main__":
    main()
