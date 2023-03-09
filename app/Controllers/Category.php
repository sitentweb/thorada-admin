<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;

class Category extends BaseController
{
    public function index()
    {
        //

        $category = new CategoryModel();

        $categories = $category->findAll();

        $data = [
            "categories" => $categories
        ];

        return view('category/category', $data);
    }
}
