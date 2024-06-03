<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelSekolah;

class Dasboard extends BaseController
{
    protected $session;
     public $sekolah;
    public function __construct()
    {
        $session = \Config\Services::session();
        $this->sekolah = new ModelSekolah;
    }

    public function index()
    {   
        $session = session();
        $seslevel = $_SESSION['seslevel'];

        $cekSession = $session->get('logged_in');
        $getdata = $this->sekolah->getdata($seslevel);

        if($cekSession == false){
            return redirect()->to('login');
        }else{
            $data = array (
                'title' => 'DB BMPS',
                'subtitle' => 'Dasboard',
                'getdata' => $getdata,
            );           
            return view('dasboard',$data);
        }
    }
}
