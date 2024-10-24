<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Attribute;
use App\Models\AttributeValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductSearchController extends Controller
{
    public function results(Request $request)
    {
        $query = $request->input('q');
        $perPage = 20;

        $productsQuery = Product::query();

        // Отладочное сообщение для проверки запроса
        Log::info('Поиск по запросу: ' . $query);

        if (!empty($query)) {
            $productsQuery->where('name', 'LIKE', '%' . $query . '%');
        }

        foreach ($request->except('q', 'page') as $key => $values) {
            $key = str_replace('_', ' ', $key); // Заменяем + на пробел
            $values = is_array($values) ? $values : [$values];
            $productsQuery->whereHas('attributeValues', function ($q) use ($key, $values) {
                $q->whereHas('attribute', function ($subQ) use ($key) {
                    $subQ->where('name', $key);
                })->whereIn('value', $values);
            });
        }

        // Получаем результаты
        $products = $productsQuery->paginate($perPage);

        // Отладочное сообщение для проверки найденных товаров
        Log::info('Найденные товары: ', $products->toArray());

        $attributeValueIds = DB::table('attribute_product')
            ->whereIn('product_id', $products->pluck('id')->toArray())
            ->pluck('attribute_value_id')
            ->toArray();

        $productAttributes = AttributeValue::whereIn('id', $attributeValueIds)
            ->with('attribute')
            ->get()
            ->groupBy(function ($item) {
                return $item->attribute->name;
            })
            ->map(function ($group) {
                return $group->pluck('value')->unique()->values()->all();
            });

        $attributes = Attribute::whereIn('name', $productAttributes->keys())->get();

        return view('results', compact('products', 'query', 'attributes', 'productAttributes'));
    }

    public function loadMore(Request $request)
    {
        $perPage = 20;
        $page = $request->input('page', 1);
        $query = $request->input('q');

        $productsQuery = Product::query();

        if (!empty($query)) {
            $productsQuery->where('name', 'LIKE', '%' . $query . '%');
        }

        // Здесь можно добавить фильтрацию по атрибутам, если нужно

        $products = $productsQuery->paginate($perPage, ['*'], 'page', $page);

        return response()->json($products);
    }

    public function product($id)
    {
        return view('product');
    }
}
