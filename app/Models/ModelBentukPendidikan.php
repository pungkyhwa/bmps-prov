<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBentukPendidikan extends Model
{
    public function getbentukpendidikan(){
        $query = $this->db->query("SELECT * FROM bentuk_pendidikan");
        return $query->getResult();
    }
}
