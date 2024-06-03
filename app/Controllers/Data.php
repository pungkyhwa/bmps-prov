<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Data extends BaseController
{
    public function __construct()
    {
        $session = \Config\Services::session();
    }

    public function index()
    {
        $session = session();
        $data = [
            'title' => 'DB BMPS',
            'subtitle' => 'Data'
        ];
        return view('data',$data);
    }
}
