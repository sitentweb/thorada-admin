<?php

use App\Models\UserModel;

if (!function_exists('price')) {

    function price($price)
    {

        return RUPEE . '' . $price;
    }
}

if (!function_exists('full_name')) {

    function user_full_name($user_id)
    {

        $user = new UserModel();

        $u = $user->find($user_id);

        $user_name = $u['u_first_name'] . " " . $u['u_last_name'];

        return $user_name;
    }
}
