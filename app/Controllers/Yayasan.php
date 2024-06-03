<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelYayasan;
use App\Models\ModelKecamatan;


class Yayasan extends BaseController
{
    public function __construct()
    {
        $this->yayasan = new ModelYayasan;
        $this->kecamatan = new ModelKecamatan;
        $session = \Config\Services::session();
        
    }
    public function index()
    {
        $session = session();
        $seslevel = $_SESSION['seslevel'];
        if($seslevel == 'admin'){
            $getdata = $this->yayasan->getdata();
        }else{
            $getdata = $this->yayasan->getdatases($seslevel);
        }  
        
        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => 'Kecamatan',
            'datayayasan' => $getdata,
        );
        return view('admin/V_Yayasan',$data); 
    }
    public function kecamatan()
    {
        $session = session();
        $seslevel = $_SESSION['seslevel'];
        if($seslevel == 'admin'){
            $getdata = $this->yayasan->getdatayyskec();
        }else{
            $getdata = $this->yayasan->getdatayyskecses($seslevel);
        }        
        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => 'yys|Kecamatan',
            'datayayasan' => $getdata,
        );
        return view('admin/V_YayasanKec',$data); 
    }
    public function detailkecamatan($id_kecamatan)
    {
        $session = session();
        $seslevel = $_SESSION['seslevel'];
        $getdata = $this->yayasan->getdetdatayyskec($id_kecamatan);
        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => 'yys|Kecamatan',
            'datayayasan' => $getdata,
        );
        return view('admin/V_YayasanDetKecamatan',$data); 
    }
    public function detailyayasan($id_yayasan)
    {
        $session = session();
        $seslevel = $_SESSION['seslevel'];
        $getdata = $this->yayasan->getdetailyayasan($id_yayasan);
        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => 'yys|Kecamatan',
            'datayayasan' => $getdata,
            'datasekolah' => $this->yayasan->getsekolah($id_yayasan),
        );
        return view('admin/V_DetailYayasan',$data); 
    }

    public function editYayasan($id_yayasan)
    {
        $session = session();
        $seslevel = $_SESSION['seslevel'];
        $getdata = $this->yayasan->getDataById($id_yayasan);
        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => '|edit Yayasan',
            'kecamatan' => $this->kecamatan->getkecamatan(),
            'datayayasan' => $getdata,
        );
        return view('admin/V_Edityayasan',$data); 
    }
    public function saveedityayasan($id_yayasan)
    {
        $data = array (
            'nm_yayasan'        => $this->request->getVar('nm_yayasan'),
            'alamat_yayasan'    => $this->request->getVar('alamat'),
            'id_kecamatan' 		=> $this->request->getVar('id_kecamatan'),
        );
        session()->setFlashdata('berhasil', 'Behasill di Update..');
        $getdata = $this->yayasan->saveedityayasan($id_yayasan,$data);
        return redirect()->to(base_url('yayasan'));
    }
    public function insertyayasan()
    {
        $session = session();
        $seslevel = $_SESSION['seslevel'];
        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => '|Insert Yayasan',
            'kecamatan' => $this->kecamatan->getkecamatan(),
        );
        return view('admin/V_Insertyayasan',$data); 
    }
    public function saveinsertyayasan()
    {
        // dd($this->request->getVar());
        $data = array (
            'nm_yayasan'        => $this->request->getVar('nm_yayasan'),
            'alamat_yayasan'    => $this->request->getVar('alamat'),
            'id_kecamatan' 		=> $this->request->getVar('id_kecamatan'),
        );
        session()->setFlashdata('berhasil', 'Behasill di Ditambahkan..');
        $getdata = $this->yayasan->saveinsertyayasan($data);
        return redirect()->to(base_url('yayasan'));
    }
    public function hapusYayasan($id_yayasan)
    {
        session()->setFlashdata('berhasil', 'Behasill di Hapus..');
        $getdata = $this->yayasan->savehapusyayasan($id_yayasan);
        return redirect()->to(base_url('yayasan'));
    }
}
