<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSekolah extends Model
{
    public function getdata(){
        $query = $this->db->query("SELECT sekolah.*, bentuk_pendidikan.nm_bentuk_pendidikan, kecamatan.nm_kecamatan, yayasan.nm_yayasan
        FROM sekolah 
        JOIN kecamatan ON kecamatan.id_kecamatan = sekolah.id_kecamatan
        JOIN bentuk_pendidikan ON bentuk_pendidikan.id_bentuk_pendidikan = sekolah.id_bentuk_pendidikan
        LEFT JOIN yayasan ON sekolah.id_yayasan = yayasan.id_yayasan");
        return $query->getResult();
    }
    public function getdatases($seslevel){
        $query = $this->db->query("SELECT sekolah.*, bentuk_pendidikan.nm_bentuk_pendidikan, kecamatan.nm_kecamatan, yayasan.nm_yayasan
        FROM sekolah 
        JOIN kecamatan ON kecamatan.id_kecamatan = sekolah.id_kecamatan
        JOIN bentuk_pendidikan ON bentuk_pendidikan.id_bentuk_pendidikan = sekolah.id_bentuk_pendidikan
        LEFT JOIN yayasan ON sekolah.id_yayasan = yayasan.id_yayasan
        WHERE kecamatan.group ='$seslevel'");
        return $query->getResult();
    }
    public function detailSekolah($id_sekolah){
        $query = $this->db->query("SELECT sekolah.*, bentuk_pendidikan.nm_bentuk_pendidikan, kecamatan.nm_kecamatan, kecamatan.group, yayasan.nm_yayasan
        FROM sekolah 
        JOIN kecamatan ON kecamatan.id_kecamatan = sekolah.id_kecamatan
        JOIN bentuk_pendidikan ON bentuk_pendidikan.id_bentuk_pendidikan = sekolah.id_bentuk_pendidikan         
        LEFT JOIN yayasan ON sekolah.id_yayasan = yayasan.id_yayasan
        where sekolah.id_sekolah = '$id_sekolah'");
        return $query->getResult();
    }
    public function getdatasekolah($id_bentuk_pendidikan){
        $query = $this->db->query("SELECT sekolah.*, bentuk_pendidikan.nm_bentuk_pendidikan, kecamatan.nm_kecamatan, kecamatan.group
        FROM sekolah 
        JOIN kecamatan ON kecamatan.id_kecamatan = sekolah.id_kecamatan
        JOIN bentuk_pendidikan ON bentuk_pendidikan.id_bentuk_pendidikan = sekolah.id_bentuk_pendidikan
        WHERE sekolah.id_bentuk_pendidikan = '$id_bentuk_pendidikan'");
        return $query->getResult();
    }
    public function getdatasekolahses($id_bentuk_pendidikan,$seslevel){
        $query = $this->db->query("SELECT sekolah.*, bentuk_pendidikan.nm_bentuk_pendidikan, kecamatan.nm_kecamatan, kecamatan.group
        FROM sekolah 
        JOIN kecamatan ON kecamatan.id_kecamatan = sekolah.id_kecamatan
        JOIN bentuk_pendidikan ON bentuk_pendidikan.id_bentuk_pendidikan = sekolah.id_bentuk_pendidikan
        WHERE sekolah.id_bentuk_pendidikan = '$id_bentuk_pendidikan' AND kecamatan.group ='$seslevel'");
        return $query->getResult();
    }
    public function savesekolah($data){
        $query = $this->db->table('sekolah')->insert($data);
        return $query;
    } 
    public function saveeditsekolah($id_sekolah,$data){
        $query = $this->db->table('sekolah')
        ->where('id_sekolah',$id_sekolah)
        ->update($data);

        return $query;
    }
    public function savehapussekolah($id_sekolah){
        $query = $this->db->table('sekolah')
        ->where('id_sekolah',$id_sekolah)
        ->delete();

        // return $query;
    }

    
    public function getdatakemenag(){
        $query = $this->db->query("SELECT sekolah_kemenag.*, kecamatan.nm_kecamatan, bentuk_pendidikan.nm_bentuk_pendidikan, kecamatan.group
        FROM sekolah_kemenag
        JOIN kecamatan ON kecamatan.id_kecamatan = sekolah_kemenag.id_kecamatan
        JOIN bentuk_pendidikan on bentuk_pendidikan.id_bentuk_pendidikan = sekolah_kemenag.id_bentuk_pendidikan");
        return $query->getResult();
    }
    public function getdatakemenagses($seslevel){
        $query = $this->db->query("SELECT sekolah_kemenag.*, kecamatan.nm_kecamatan, bentuk_pendidikan.nm_bentuk_pendidikan, kecamatan.group
        FROM sekolah_kemenag
        JOIN kecamatan ON kecamatan.id_kecamatan = sekolah_kemenag.id_kecamatan
        JOIN bentuk_pendidikan on bentuk_pendidikan.id_bentuk_pendidikan = sekolah_kemenag.id_bentuk_pendidikan
        WHERE kecamatan.group ='$seslevel'");
        return $query->getResult();
    }
    public function detailSekolahkemenag($id_sekolah){
        $query = $this->db->query("SELECT sekolah_kemenag.*, kecamatan.nm_kecamatan, bentuk_pendidikan.nm_bentuk_pendidikan
        FROM sekolah_kemenag
        JOIN kecamatan ON kecamatan.id_kecamatan = sekolah_kemenag.id_kecamatan
        JOIN bentuk_pendidikan on bentuk_pendidikan.id_bentuk_pendidikan = sekolah_kemenag.id_bentuk_pendidikan 
        where sekolah_kemenag.id_sekolah_kemenag = '$id_sekolah'");
        return $query->getResult();
    }
    public function getdatasekolahkemenag($id_bentuk_pendidikan){
        $query = $this->db->query("SELECT sekolah_kemenag.*, kecamatan.nm_kecamatan, bentuk_pendidikan.nm_bentuk_pendidikan, kecamatan.group
        FROM sekolah_kemenag
        JOIN kecamatan ON kecamatan.id_kecamatan = sekolah_kemenag.id_kecamatan
        JOIN bentuk_pendidikan on bentuk_pendidikan.id_bentuk_pendidikan = sekolah_kemenag.id_bentuk_pendidikan
        where sekolah_kemenag.id_bentuk_pendidikan = '$id_bentuk_pendidikan'");
        return $query->getResult();
    }
    public function getdatasekolahkemenagses($id_bentuk_pendidikan,$seslevel){
        $query = $this->db->query("SELECT sekolah_kemenag.*, kecamatan.nm_kecamatan, bentuk_pendidikan.nm_bentuk_pendidikan, kecamatan.group
        FROM sekolah_kemenag
        JOIN kecamatan ON kecamatan.id_kecamatan = sekolah_kemenag.id_kecamatan
        JOIN bentuk_pendidikan on bentuk_pendidikan.id_bentuk_pendidikan = sekolah_kemenag.id_bentuk_pendidikan
        where sekolah_kemenag.id_bentuk_pendidikan = '$id_bentuk_pendidikan' AND kecamatan.group ='$seslevel'");
        return $query->getResult();
    }
    public function savesekolahkemenag($data){
        $query = $this->db->table('sekolah_kemenag')->insert($data);
        return $query;
    }
    public function saveeditsekolahkemenag($id_sekolah,$data){
        $query = $this->db->table('sekolah_kemenag')
        ->where('id_sekolah_kemenag',$id_sekolah)
        ->update($data);

        return $query;
    }
    public function savehapussekolahkemenag($id_sekolah){
        $query = $this->db->table('sekolah_kemenag')
        ->where('id_sekolah_kemenag',$id_sekolah)
        ->delete();

        // return $query;
    }

}
