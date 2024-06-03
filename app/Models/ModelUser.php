<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    public function getdata(){
        $query = $this->db->query("SELECT * FROM user");
        return $query->getResult();
    }
    public function getdatadetail($id_user){
        $query = $this->db->query("SELECT * FROM user where id_user = '$id_user'");
        return $query->getResult();
    }
    public function saveedit($id_user,$data){
        $query = $this->db->table('user')
        ->where('id_user',$id_user)
        ->update($data);
        return $query;
    }
    public function saveinsert($data){
        $query = $this->db->table('user')->insert($data);
        return $query;
    }
}
