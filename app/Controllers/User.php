<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;
use App\Models\ModelKecamatan;

class User extends BaseController
{
    public function __construct()
    {
        $this->user = new ModelUser;
        $session = \Config\Services::session();
    }
    public function index()
    {
        $session = session();
        $seslevel = $_SESSION['seslevel'];

        $getdata = $this->user->getdata();
        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => 'Managemen User',
            'users' => $getdata,
        );
        // var_dump($getdata);
        return view('admin/V_MajemenUser',$data); 
    }
    public function edit($id_user)
    {
        $session = session();
        $seslevel = $_SESSION['seslevel'];

        $getdata = $this->user->getdatadetail($id_user);
        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => 'Managemen User',
            'users' => $getdata,
        );
        // var_dump($getdata);
        return view('admin/V_EditUser',$data); 
    }
    public function saveedit($id_user)
    {
        $data = array (
            'username'  => $this->request->getVar('username'),
            'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'nama' 		=> $this->request->getVar('nama'),
            'level'     => $this->request->getVar('lavel'),
            'no_telp'   => $this->request->getVar('no_telp'),
            'email'     => $this->request->getVar('email'),
        );
        session()->setFlashdata('berhasil', 'Behasill di Update..');
        $getdata = $this->user->saveedit($id_user,$data);
        return redirect()->to(base_url('user'));
    }
    public function insert()
    {
        $session = session();
        $seslevel = $_SESSION['seslevel'];
        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => '|Insert User',
        );
        return view('admin/V_InsertUser',$data); 
    }
    public function saveinsert()
    {
        $data = array (
            'username'  => $this->request->getVar('username'),
            'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'nama' 		=> $this->request->getVar('nama'),
            'level'     => $this->request->getVar('lavel'),
            'no_telp'   => $this->request->getVar('no_telp'),
            'email'     => $this->request->getVar('email'),
        );
        session()->setFlashdata('berhasil', 'Behasill di Ditambahkan..');
        $getdata = $this->user->saveinsert($data);
        return redirect()->to(base_url('user'));
    }
}
