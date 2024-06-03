<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKecamatan extends Model
{
    // untuk mendapatkan data sekolah berdasarkan kecamatan
    public function getdata(){
        $query = $this->db->query("SELECT sekolah.id_kecamatan, kecamatan.nm_kecamatan,
        count(case when sekolah.id_bentuk_pendidikan = '1' then '1' end) as tk,
        count(case when sekolah.id_bentuk_pendidikan = '2' then '1' end) as sd,
        count(case when sekolah.id_bentuk_pendidikan = '3' then '1' end) as smp,
        count(case when sekolah.id_bentuk_pendidikan = '4' then '1' end) as spk_sd,
        count(case when sekolah.id_bentuk_pendidikan = '5' then '1' end) as spk_smp,
        count(case when sekolah.id_bentuk_pendidikan = '6' then '1' end) as sma,
        count(case when sekolah.id_bentuk_pendidikan = '7' then '1' end) as spk_sma,
        count(case when sekolah.id_bentuk_pendidikan = '8' then '1' end) as smk,
        count(case when sekolah.id_bentuk_pendidikan = '9' then '1' end) as slb
        FROM sekolah
        left JOIN kecamatan ON kecamatan.id_kecamatan = sekolah.id_kecamatan
        GROUP BY kecamatan.nm_kecamatan  
        ORDER BY sekolah.id_kecamatan ASC");
        return $query->getResult();
    }
    public function getdatases($seslevel){
        $query = $this->db->query("SELECT sekolah.id_kecamatan, kecamatan.nm_kecamatan,
        count(case when sekolah.id_bentuk_pendidikan = '1' then '1' end) as tk,
        count(case when sekolah.id_bentuk_pendidikan = '2' then '1' end) as sd,
        count(case when sekolah.id_bentuk_pendidikan = '3' then '1' end) as smp,
        count(case when sekolah.id_bentuk_pendidikan = '4' then '1' end) as spk_sd,
        count(case when sekolah.id_bentuk_pendidikan = '5' then '1' end) as spk_smp,
        count(case when sekolah.id_bentuk_pendidikan = '6' then '1' end) as sma,
        count(case when sekolah.id_bentuk_pendidikan = '7' then '1' end) as spk_sma,
        count(case when sekolah.id_bentuk_pendidikan = '8' then '1' end) as smk,
        count(case when sekolah.id_bentuk_pendidikan = '9' then '1' end) as slb
        FROM sekolah
        left JOIN kecamatan ON kecamatan.id_kecamatan = sekolah.id_kecamatan
        WHERE kecamatan.group = '$seslevel'
        GROUP BY kecamatan.nm_kecamatan  
        ORDER BY sekolah.id_kecamatan ASC");
        return $query->getResult();
    }
    public function detailkecamatan($id_kecamatan){
        $query = $this->db->query("SELECT sekolah.*, bentuk_pendidikan.nm_bentuk_pendidikan, kecamatan.nm_kecamatan
        FROM sekolah 
        JOIN kecamatan ON kecamatan.id_kecamatan = sekolah.id_kecamatan
        JOIN bentuk_pendidikan ON bentuk_pendidikan.id_bentuk_pendidikan = sekolah.id_bentuk_pendidikan
        where sekolah.id_kecamatan = '$id_kecamatan'");
        return $query->getResult();
    }

    
    public function getdatakemenag(){
        $query = $this->db->query("SELECT sekolah_kemenag.id_kecamatan, kecamatan.nm_kecamatan,
        count(case when sekolah_kemenag.id_bentuk_pendidikan = '10' then '1' end) as ma,
        count(case when sekolah_kemenag.id_bentuk_pendidikan = '11' then '1' end) as mi,
        count(case when sekolah_kemenag.id_bentuk_pendidikan = '12' then '1' end) as mts,
        count(case when sekolah_kemenag.id_bentuk_pendidikan = '13' then '1' end) as mtss,
        count(case when sekolah_kemenag.id_bentuk_pendidikan = '14' then '1' end) as ra
        FROM sekolah_kemenag
        left JOIN kecamatan ON kecamatan.id_kecamatan = sekolah_kemenag.id_kecamatan
        GROUP BY kecamatan.nm_kecamatan  
        ORDER BY sekolah_kemenag.id_kecamatan");
        return $query->getResult();
    }
    public function detailkecamatankemenag($id_kecamatan){
        $query = $this->db->query("SELECT sekolah_kemenag.*, bentuk_pendidikan.nm_bentuk_pendidikan, kecamatan.nm_kecamatan
        FROM sekolah_kemenag 
        JOIN kecamatan ON kecamatan.id_kecamatan = sekolah_kemenag.id_kecamatan
        JOIN bentuk_pendidikan ON bentuk_pendidikan.id_bentuk_pendidikan = sekolah_kemenag.id_bentuk_pendidikan
        where sekolah_kemenag.id_kecamatan = '$id_kecamatan'");
        return $query->getResult();
    }
    

    // untuk crud data tabel kecamatan
    public function getkecamatan(){
        $query = $this->db->query("SELECT * FROM kecamatan");
        return $query->getResult();
    }
}