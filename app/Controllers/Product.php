<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\ProductMediasModel;


class Product extends BaseController
{

    public function index()
    {

        $product = new ProductModel();
        $category = new CategoryModel();


        $all_products = $product->orderBy('p_id', 'desc')->findAll();
        $categories = $category->findAll();

        $total_products = [];

        foreach ($all_products as $pr) {

            $total_products[] = product_data($pr['p_id']);
        }


        $data = [
            "products" => $total_products,
            "categories" => $categories,
        ];


        return view('product/products-list', $data);
    }

    public function add()
    {

        $category = new CategoryModel();

        $categories = $category->findAll();

        $data = [
            "categories" => $categories
        ];

        return view('product/add-product', $data);
    }

    public function view($slug)
    {
        if ($slug != '') {

            $filterSlug = htmlspecialchars($slug);

            $product = new ProductModel();

            $p = $product->where('p_slug', $filterSlug)->first();

            $pr = product_data($p['p_id']);

            $data = [
                "product" => $pr
            ];

            return view('/product/view-product', $data);
        }
    }
}
    
    /* End of file Dashboard.php */
