<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Authentication extends BaseController
{
    public function index()
    {
        //
    }

    public function login()
    {
        $data = [];

        return view('/auth/login');
    }

    public function checkLogin()
    {

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = new UserModel();

        $u = $user->where('u_email_address', $email)->asObject()->first();

        if ($u) {


            if ($u->u_password == md5($password)) {

                if ($u->u_role != 0) {

                    if ($u->u_status == 1) {

                        return $this->response->setJSON([
                            "status" => true,
                            "message" => "Welcome " . user_full_name($u->u_id),
                            "data" => $u
                        ]);
                    } else {
                        return $this->response->setJSON([
                            "status" => false,
                            "message" => "You have been blocked by Admin",
                            "data" => []
                        ]);
                    }
                } else {
                    return $this->response->setJSON([
                        "status" => false,
                        "message" => "You are not Authorized User",
                        "data" => []
                    ]);
                }
            } else {
                return $this->response->setJSON([
                    "status" => false,
                    "message" => "Incorrect Password",
                    "data" => []
                ]);
            }
        } else {
            return $this->response->setJSON([
                "status" => false,
                "message" => "Incorrect Email Address",
                "data" => []
            ]);
        }
    }
}
