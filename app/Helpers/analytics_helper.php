<?php

use App\Models\CategoryModel;
use App\Models\ProductModel;

if (!function_exists('product_ananlytics')) {
    function product_analytics()
    {


        $analytics = [
            "total" => 0,
            "active" => 0,
            "inactive" => 0,
            "in_stock" => 0,
            "out_of_stock" => 0,
            "special_today" => 0,
            "analytics" => []
        ];

        $product = new ProductModel();

        $products = $product->findAll();

        $active_products = $product->where('p_is_live', 1)->findAll();

        $inactive_products = $product->where('p_is_live', 0)->findAll();

        $special_products = $product->where('p_is_special_today', 1)->findAll();

        $analytics_data = $product->get_monthly_data();

        $analytics['total'] = count($products);
        $analytics['active'] = count($active_products);
        $analytics['inactive'] = count($inactive_products);
        $analytics['special_today'] = count($special_products);
        $analytics['analytics'] = $analytics_data;

        return $analytics;
    }
}

if (!function_exists('order_analytics')) {
    function order_analytics()
    {
    }
}

if (!function_exists('category_analytics')) {
    function category_analytics()
    {

        $analytics = [
            "total" => 0,
            "active" => 0,
            "inactive" => 0,
        ];

        $category = new CategoryModel();

        $all_categories = $category->findAll();

        $analytics['total'] = count($all_categories);

        return $analytics;
    }
}


if (!function_exists('dashboard_analytics')) {

    function dashboard_analytics()
    {
        $analytics = [
            "product" => product_analytics(),
            "category" => category_analytics()
        ];

        return $analytics;
    }
}


if (!function_exists('sales_analytics')) {
}
