<?php

use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\ProductMediasModel;

if (!function_exists('product_data')) {

    function product_data($product_id)
    {

        $product = new ProductModel();
        $category = new CategoryModel();
        $brand = new BrandModel();

        $pr = $product->find($product_id);

        $cat = $category->find(json_decode($pr['p_categories'])[0]);

        $pr['category'] = $cat;

        $br = $brand->find($pr['p_brands']);
        $pr['brand'] = $br;

        foreach (json_decode($pr['p_media_ids']) as $pm) {
            $product_media = new ProductMediasModel();

            $pr['media'][] = $product_media->find($pm);
        }

        return $pr;
    }
}
