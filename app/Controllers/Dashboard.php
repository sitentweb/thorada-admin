<?php

namespace App\Controllers;


class Dashboard extends BaseController
{

    public function index()
    {
        $data = [
            "analytics" => dashboard_analytics()
        ];

        return view('dashboard/dashboard', $data);
    }
}
    
    /* End of file Dashboard.php */
