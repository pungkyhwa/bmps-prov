<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLogin extends Model
{
    public function cekData($table,$where)
    {
        $builder = $this->db->table($table);
        $builder->where($where);
        return $builder->countAllResults();
    }
    public function getDataId($table,$where)
    {
        $builder = $this->db->table($table);
        $builder->where($where);
        return $builder->get()->getResult();
    }
    
}
