<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelKecamatan;

class Kecamatan extends BaseController
{
    
    public function __construct()
    {
        $this->kecamatan = new ModelKecamatan;
        $session = \Config\Services::session();
    }

    public function index()
    {
        $session = session();
        $seslevel = $_SESSION['seslevel'];

        if($seslevel == 'admin'){
            $getdata = $this->kecamatan->getdata();        
        }else{            
            $getdata = $this->kecamatan->getdatases($seslevel);
        }

        // $getdata = $this->kecamatan->getdata();
        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => 'Kecamatan',
            'dataKecamatan' => $getdata,
        );
        // var_dump($getdata);
        return view('admin/V_Kecamatan',$data); 
    }
    public function detail($id_kecamatan)
    {
        $getdata = $this->kecamatan->detailkecamatan($id_kecamatan);

        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => 'kecamatan-sekolah',
            'datasekolah' => $getdata,
        );
        // var_dump($getdata);
        return view('admin/V_kecamatanSekolah',$data); 
    }


    public function kecamatankemenag()
    {
        $session = session();
        $getdata = $this->kecamatan->getdatakemenag();
        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => 'Kecamatan',
            'dataKecamatan' => $getdata,
        );
        // var_dump($getdata);
        return view('admin/V_KecamatanKemenag',$data); 
    }
    public function detailkeckemenag($id_kecamatan)
    {
        $getdata = $this->kecamatan->detailkecamatankemenag($id_kecamatan);

        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => 'kecamatan-sekolah',
            'datasekolah' => $getdata,
        );
        // var_dump($getdata);
        return view('admin/V_kecamatanSekolahkemenag',$data); 
    }
}
