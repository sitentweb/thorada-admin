<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrderHistoryModel;
use App\Models\OrderModel;
use App\Models\ProductModel;
use App\Models\UserModel;

class Order extends BaseController
{
    public function index()
    {
        //
        $order = new OrderModel();
        $orderHistory = new OrderHistoryModel();
        $user = new UserModel();
        $product = new ProductModel();

        $all_orders = $order->findAll();

        $ordersList = [];

        foreach ($all_orders as $o) {

            $single_order = $orderHistory->where('oh_order_id', $o['order_id'])->findAll();
            $metadata = [];
            foreach ($single_order as $sOrder) {
                $sOrder['product'] = $product->find($sOrder['oh_product_id']);
                $metadata[] = $sOrder;
            }
            $o['user'] = $user->find($o['order_user_id']);
            $o['order_details'] = $metadata;

            $ordersList[] = $o;
        }

        // echo json_encode($ordersList);
        // return false;

        $data = [
            "orders" => $ordersList
        ];

        return view('order/order-list', $data);
    }
}
