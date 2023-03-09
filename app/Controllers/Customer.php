<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Customer extends BaseController
{
    public function index()
    {
        //
        $status = $this->request->getVar('status');

        $user = new UserModel();

        $users = [];

        if ($status != '') {

            if ($status == 'active') {
                $users = $user->where('u_status', '1')->findAll();
            }

            if ($status == 'inactive') {
                $users = $user->where('u_status', '0')->findAll();
            }
        } else {
            $users = $user->findAll();
        }

        $data = [
            "customers" => $users
        ];

        return view('/customer/customers-list', $data);
    }
}
