<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLogin;

class Login extends BaseController
{   
    protected $mlogin,$session;
    protected $table = "user";
    public function __construct()
    {
        $this->mlogin = new ModelLogin;
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        echo password_hash("admin", PASSWORD_DEFAULT)."<br>";
        return view("admin/V_login");
    }
    public function prosesLogin(){
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $where = [
            'username' => $username,
            // 'password' => $password,

        ];
        // $cekData = $this->mlogin->cekData($this->table,$where);
        $getDataId = $this->mlogin->getDataId($this->table,$where);
        if($getDataId == null){
            session()->setFlashdata('message', 'Username atau Password tidak ditemukan');
            return redirect()->to('login');
        }
        foreach($getDataId as $data):    
            if(password_verify($password,$data->password)){
                $dataSession = [
                    'sesnama'       => $data->nama,
                    'sesid_user'    => $data->id_user,
                    'seslevel'      => $data->level,
                    'logged_in'     => true,
                ];
                
                $this->session->set($dataSession);
                return redirect()->to('dasboard');
            }else{
                session()->setFlashdata('message', 'cek kembali Username atau Password anda');
                return redirect()->to('login');
                // echo "gagal"; 
            }
        endforeach;
    }
    public function logout()
    {
        $this->session->destroy();
        return view("admin/V_login");
    }
}
