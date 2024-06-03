<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelYayasan extends Model
{
    public function getdata(){
        $query = $this->db->query("SELECT yayasan.*, kecamatan.nm_kecamatan, kecamatan.group
        FROM yayasan
        LEFT JOIN kecamatan ON kecamatan.id_kecamatan = yayasan.id_kecamatan  
        ORDER BY yayasan.id_kecamatan ASC");
        return $query->getResult();
    }
    public function getdatases($seslevel){
        $query = $this->db->query("SELECT yayasan.*, kecamatan.nm_kecamatan, kecamatan.group
        FROM yayasan
        LEFT JOIN kecamatan ON kecamatan.id_kecamatan = yayasan.id_kecamatan 
        WHERE kecamatan.group ='$seslevel'
        ORDER BY yayasan.id_kecamatan ASC");
        return $query->getResult();
    }
    public function getdatayyskec(){
        $query = $this->db->query("SELECT yayasan.id_kecamatan, kecamatan.nm_kecamatan,
        count(yayasan.id_kecamatan) as yys
        FROM yayasan
        left JOIN kecamatan ON kecamatan.id_kecamatan = yayasan.id_kecamatan
        GROUP BY kecamatan.nm_kecamatan  
        ORDER BY yayasan.id_kecamatan ASC");
        return $query->getResult();
    }
    public function getdatayyskecses($seslevel){
        $query = $this->db->query("SELECT yayasan.id_kecamatan, kecamatan.nm_kecamatan,
        count(yayasan.id_kecamatan) as yys
        FROM yayasan
        left JOIN kecamatan ON kecamatan.id_kecamatan = yayasan.id_kecamatan
        WHERE kecamatan.group ='$seslevel'
        GROUP BY kecamatan.nm_kecamatan  
        ORDER BY yayasan.id_kecamatan ASC");
        return $query->getResult();
    }
    public function getdetdatayyskec($id_kecamatan){
        $query = $this->db->query("SELECT yayasan.*, kecamatan.nm_kecamatan, kecamatan.group
        FROM yayasan
        LEFT JOIN kecamatan ON kecamatan.id_kecamatan = yayasan.id_kecamatan  
        WHERE yayasan.id_kecamatan ='$id_kecamatan'");
        return $query->getResult();
    }
    
    // detail yayasan 
    public function getdetailyayasan($id_yayasan){
        $query = $this->db->query("SELECT yayasan.*, kecamatan.nm_kecamatan, kecamatan.group
        FROM yayasan
        LEFT JOIN kecamatan ON kecamatan.id_kecamatan = yayasan.id_kecamatan  
        WHERE yayasan.id_yayasan ='$id_yayasan'");
        return $query->getResult();
    }
    //ambil sekolah untuk detail yayasan
    public function getsekolah($id_yayasan){
        $query = $this->db->query("SELECT sekolah.*, bentuk_pendidikan.nm_bentuk_pendidikan
        FROM sekolah
        JOIN bentuk_pendidikan ON bentuk_pendidikan.id_bentuk_pendidikan = sekolah.id_bentuk_pendidikan
        WHERE sekolah.id_yayasan = '$id_yayasan'");
        return $query->getResult();
    }

    public function getDataById($id_yayasan){
        $query = $this->db->query("SELECT yayasan.*, kecamatan.nm_kecamatan, kecamatan.group
        FROM yayasan
        LEFT JOIN kecamatan ON kecamatan.id_kecamatan = yayasan.id_kecamatan  
        WHERE yayasan.id_yayasan ='$id_yayasan'");
        return $query->getResult();
    }
    public function saveedityayasan($id_yayasan,$data){
        $query = $this->db->table('yayasan')
        ->where('id_yayasan',$id_yayasan)
        ->update($data);
        return $query;
    }
    public function saveinsertyayasan($data){
        $query = $this->db->table('yayasan')->insert($data);
        return $query;
    }
    public function savehapusyayasan($id_yayasan){
        $query = $this->db->table('yayasan')
        ->where('id_yayasan',$id_yayasan)
        ->delete();
    }
}
