<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelSekolah;
use App\Models\ModelKecamatan;
use App\Models\ModelBentukPendidikan;
use App\Models\ModelYayasan;


class Sekolah extends BaseController
{
    public function __construct()
    {
        $this->sekolah = new ModelSekolah;
        $this->kecamatan = new ModelKecamatan;
        $this->bentukpendidikan = new ModelBentukPendidikan;
        $this->yayasan = new ModelYayasan;
        $session = \Config\Services::session();
        
    }
    public function index()
    {
        $session = session();
        $seslevel = $_SESSION['seslevel'];
        if($seslevel == 'admin'){
            $getdata = $this->sekolah->getdata();
            if($getdata == null){
                echo "data kosong";
            }else{
                echo "data ada isinua";
            }        
        }else{            
            $getdata = $this->sekolah->getdatases($seslevel);
        }
        // $getdata = $this->sekolah->getdatases($seslevel);
        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => 'Kecamatan',
            'datasekolah' => $getdata,
        );
        // var_dump($getdata);
        return view('admin/V_Sekolah',$data); 
    }
    public function detailSekolah($id_sekolah)
    {
        $getdata = $this->sekolah->detailSekolah($id_sekolah);
        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => 'detail-sekolah',
            'detailsekolah' => $getdata,
        );
        // var_dump($getdata);
        return view('admin/V_DetailSekolah',$data);
    }
    public function bentuksekolah($id_bentuk_pendidikan)
    {   
        $session = session();
        $seslevel = $_SESSION['seslevel'];

        $getdata = $this->sekolah->getdatasekolah($id_bentuk_pendidikan,$seslevel);
        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => 'detail-sekolah',
            'detailbentuksekolah' => $getdata,
        );
        // var_dump($getdata);
        return view('admin/V_BentukSekolah',$data);
    }
    public function insersekolah()
    {
           
        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => 'tambah-sekolah',
            'kecamatan' => $this->kecamatan->getkecamatan(),
            'bentukpendidikan' => $this->bentukpendidikan->getbentukpendidikan(),
            'yayasan' => $this->yayasan->getdata(),
        );
        return view('admin/V_InsertSekolah',$data);
    }
    public function savesekolah()
    {
        // dd($this->request->getVar());
        $data = array (
            'nama_sekolah' 					=> $this->request->getVar('nama_sekolah'),
            'nama_kepsek' 					=> $this->request->getVar('nama_kepsek'),
            'operator' 						=> $this->request->getVar('operator'),
            'akreditasi' 					=> $this->request->getVar('akreditasi'),
            'kurikulum' 					=> $this->request->getVar('kurikulum'),
            'waktu' 						=> $this->request->getVar('waktu'),
            'npsn' 							=> $this->request->getVar('npsn'),
            'status' 						=> $this->request->getVar('status'),
            'id_bentuk_pendidikan' 			=> $this->request->getVar('id_bentuk_pendidikan'),
            'status_kepemilikan' 			=> $this->request->getVar('status_kepemilikan'),
            'sk_pendirian_sekolah' 			=> $this->request->getVar('sk_pendirian_sekolah'),
            'tanggal_sk_pendirian' 			=> $this->request->getVar('tanggal_sk_pendirian'),
            'sk_izin_operasional' 			=> $this->request->getVar('sk_izin_operasional'),
            'tanggal_sk_izin_operasional' 	=> $this->request->getVar('tanggal_sk_izin_operasional'),
            'kebutuhan_khusus_dilayani' 	=> $this->request->getVar('kebutuhan_khusus_dilayani'),
            'nama_bank' 					=> $this->request->getVar('nama_bank'),
            'cabang_kcp_unit'				=> $this->request->getVar('cabang_kcp_unit'),
            'rekening_atas_nama' 			=> $this->request->getVar('rekening_atas_nama'),
            'status_bos' 					=> $this->request->getVar('status_bos'),
            'waku_penyelenggaraan' 			=> $this->request->getVar('waku_penyelenggaraan'),
            'sertifikasi_iso'				=> $this->request->getVar('sertifikasi_iso'),
            'sumber_listrik'				=> $this->request->getVar('sumber_listrik'),
            'daya_listrik'					=> $this->request->getVar('daya_listrik'),
            'akses_internet'				=> $this->request->getVar('akses_internet'),
            'alamat'						=> $this->request->getVar('alamat'),
            'rt_rw'							=> $this->request->getVar('rt_rw'),
            'dusun'							=> $this->request->getVar('dusun'),
            'desa_kelurahan' 				=> $this->request->getVar('desa_kelurahan'),
            'id_kecamatan' 					=> $this->request->getVar('id_kecamatan'),
            'kabupaten' 					=> $this->request->getVar('kabupaten'),
            'provinsi'						=> $this->request->getVar('provinsi'),
            'kode_pos'						=> $this->request->getVar('kode_pos'),
            'lintang'						=> $this->request->getVar('lintang'),
            'bujur'							=> $this->request->getVar('bujur'),
            'jml_guru'						=> $this->request->getVar('jml_guru'),
            'jml_tendik'					=> $this->request->getVar('jml_tendik'),
            'jml_ptk'						=> $this->request->getVar('jml_ptk'),
            'jml_siswa' 					=> $this->request->getVar('jml_siswa'),
            'yayasan' 					    => $this->request->getVar('yayasan'),
        );
        session()->setFlashdata('berhasil', 'Behasill di Ditambahkan..');
        $getdata = $this->sekolah->savesekolah($data);
        return redirect()->to(base_url('sekolah'));
    }
    public function editsekolah($id_sekolah)
    {
        $getdata = $this->sekolah->detailSekolah($id_sekolah);
        $datayayasan = $this->yayasan->getdata();

        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => 'Edit-sekolah',
            'kecamatan' => $this->kecamatan->getkecamatan(),
            'bentukpendidikan' => $this->bentukpendidikan->getbentukpendidikan(),
            'yayasan' => $this->yayasan->getdata(),
            'sekolah' => $getdata,
        );
        return view('admin/V_EditSekolah',$data);
    }
    public function saveeditsekolah($id_sekolah)    
    {
        // dd($this->request->getVar());
        $data = array (
            'nama_sekolah' 					=> $this->request->getVar('nama_sekolah'),
            'nama_kepsek' 					=> $this->request->getVar('nama_kepsek'),
            'operator' 						=> $this->request->getVar('operator'),
            'akreditasi' 					=> $this->request->getVar('akreditasi'),
            'kurikulum' 					=> $this->request->getVar('kurikulum'),
            'waktu' 						=> $this->request->getVar('waktu'),
            'npsn' 							=> $this->request->getVar('npsn'),
            'status' 						=> $this->request->getVar('status'),
            'id_bentuk_pendidikan' 			=> $this->request->getVar('id_bentuk_pendidikan'),
            'status_kepemilikan' 			=> $this->request->getVar('status_kepemilikan'),
            'sk_pendirian_sekolah' 			=> $this->request->getVar('sk_pendirian_sekolah'),
            'tanggal_sk_pendirian' 			=> $this->request->getVar('tanggal_sk_pendirian'),
            'sk_izin_operasional' 			=> $this->request->getVar('sk_izin_operasional'),
            'tanggal_sk_izin_operasional' 	=> $this->request->getVar('tanggal_sk_izin_operasional'),
            'kebutuhan_khusus_dilayani' 	=> $this->request->getVar('kebutuhan_khusus_dilayani'),
            'nama_bank' 					=> $this->request->getVar('nama_bank'),
            'cabang_kcp_unit'				=> $this->request->getVar('cabang_kcp_unit'),
            'rekening_atas_nama' 			=> $this->request->getVar('rekening_atas_nama'),
            'status_bos' 					=> $this->request->getVar('status_bos'),
            'waku_penyelenggaraan' 			=> $this->request->getVar('waku_penyelenggaraan'),
            'sertifikasi_iso'				=> $this->request->getVar('sertifikasi_iso'),
            'sumber_listrik'				=> $this->request->getVar('sumber_listrik'),
            'daya_listrik'					=> $this->request->getVar('daya_listrik'),
            'akses_internet'				=> $this->request->getVar('akses_internet'),
            'alamat'						=> $this->request->getVar('alamat'),
            'rt_rw'							=> $this->request->getVar('rt_rw'),
            'dusun'							=> $this->request->getVar('dusun'),
            'desa_kelurahan' 				=> $this->request->getVar('desa_kelurahan'),
            'id_kecamatan' 					=> $this->request->getVar('id_kecamatan'),
            'kabupaten' 					=> $this->request->getVar('kabupaten'),
            'provinsi'						=> $this->request->getVar('provinsi'),
            'kode_pos'						=> $this->request->getVar('kode_pos'),
            'lintang'						=> $this->request->getVar('lintang'),
            'bujur'							=> $this->request->getVar('bujur'),
            'jml_guru'						=> $this->request->getVar('jml_guru'),
            'jml_tendik'					=> $this->request->getVar('jml_tendik'),
            'jml_ptk'						=> $this->request->getVar('jml_ptk'),
            'jml_siswa' 					=> $this->request->getVar('jml_siswa'),
            'id_yayasan' 					    => $this->request->getVar('yayasan'),
        );
        session()->setFlashdata('berhasil', 'Behasill di Update..');
        $getdata = $this->sekolah->saveeditsekolah($id_sekolah,$data);
        return redirect()->to(base_url('sekolah'));
    }
    public function hapussekolah($id_sekolah)
    {
        session()->setFlashdata('berhasil', 'Behasill di Hapus..');
        $getdata = $this->sekolah->savehapussekolah($id_sekolah);
        return redirect()->to(base_url('sekolah'));
    }












// untuk sekolah kemenag
    public function sekolahKemenag()
    {
        $session = session();
        $seslevel = $_SESSION['seslevel'];
        if($seslevel == 'admin'){
            $getdata = $this->sekolah->getdatakemenag();        
        }else{            
            $getdata = $this->sekolah->getdatakemenagses($seslevel);
        }
        // $getdata = $this->sekolah->getdatakemenag($seslevel);
        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => 'Kecamatan',
            'datasekolah' => $getdata,
        );
        // var_dump($getdata);
        return view('admin/V_SekolahKemenag',$data); 
    }
    public function detailSekolahKemenag($id_sekolah)
    {
        $getdata = $this->sekolah->detailSekolahkemenag($id_sekolah);
        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => 'detail-sekolah',
            'detailsekolah' => $getdata,
        );
        // var_dump($getdata);
        return view('admin/V_DetailSekolahKemenag',$data);
    }
    public function bentuksekolahkemenag($id_bentuk_pendidikan)
    {   
        $session = session();
        $seslevel = $_SESSION['seslevel'];
        
        if($seslevel == 'admin'){
            $getdata = $this->sekolah->getdatasekolahkemenag($id_bentuk_pendidikan);
        }else{
            $getdata = $this->sekolah->getdatasekolahkemenagses($id_bentuk_pendidikan,$seslevel);
        }
        // $getdata = $this->sekolah->getdatasekolahkemenag($id_bentuk_pendidikan,$seslevel);
        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => 'detail-sekolah',
            'detailbentuksekolah' => $getdata,
        );
        // var_dump($getdata);
        return view('admin/V_BentukSekolahkemenag',$data);
    }
    public function insertsekolahkemenag()
    {           
        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => 'tambah-sekolah-Kemenag',
            'kecamatan' => $this->kecamatan->getkecamatan(),
            'bentukpendidikan' => $this->bentukpendidikan->getbentukpendidikan(),
        );
        return view('admin/V_InsertSekolahKemenag',$data);
    }
    public function savesekolahkemenag()
    {
        // dd($this->request->getVar());
        $data = array (
            'nm_sekolah_kemenag'            => $this->request->getVar('nama_sekolah'),
            'kepala_madrasah'               => $this->request->getVar('kepala_madrasah'),
            'akreditasi' 					=> $this->request->getVar('akreditasi'),
            'kurikulum' 					=> $this->request->getVar('kurikulum'),
            'waktu_belajar' 			    => $this->request->getVar('waktu_belajar'),
            'npsn' 							=> $this->request->getVar('npsn'),
            'nsm' 						    => $this->request->getVar('nsm'),
            'status' 						=> $this->request->getVar('status'),
            'id_bentuk_pendidikan' 			=> $this->request->getVar('id_bentuk_pendidikan'),
            'penyelenggara' 			    => $this->request->getVar('penyelenggara'),
            'sk_pendirian_sekolah' 			=> $this->request->getVar('sk_pendirian_sekolah'),
            'tanggal_sk_pendirian' 			=> $this->request->getVar('tanggal_sk_pendirian'),
            'sk_izin_operasional' 			=> $this->request->getVar('sk_izin_operasional'),
            'tanggal_sk_izin_operasional' 	=> $this->request->getVar('tanggal_sk_izin_operasional'),
            'nama_bank' 					=> $this->request->getVar('nama_bank'),
            'rekening_atas_nama' 			=> $this->request->getVar('rekening_atas_nama'),
            'status_bos' 					=> $this->request->getVar('status_bos'),
            'sertifikasi_iso'				=> $this->request->getVar('sertifikasi_iso'),
            'sumber_listrik'				=> $this->request->getVar('sumber_listrik'),
            'daya_listrik'					=> $this->request->getVar('daya_listrik'),
            'akses_internet'				=> $this->request->getVar('akses_internet'),
            'id_kecamatan' 					=> $this->request->getVar('id_kecamatan'),
            'kabupaten_kota' 				=> $this->request->getVar('kabupaten_kota'),
            'prov'						    => $this->request->getVar('prov'),
            'luas_tanah_milik'				=> $this->request->getVar('luas_tanah_milik'),
            'luas_tanah_bukan_milik'        => $this->request->getVar('luas_tanah_bukan_milik'),
            'jml_guru'						=> $this->request->getVar('jml_guru'),
            'jml_tendik'					=> $this->request->getVar('jml_tendik'),
            'jml_siswa' 					=> $this->request->getVar('jml_siswa'),
            'alamat1'						=> $this->request->getVar('alamat'),
            'telepon'					    => $this->request->getVar('telepon'),
            'fax'						    => $this->request->getVar('fax'),
            'website'					    => $this->request->getVar('website'),
            'email'							=> $this->request->getVar('email'),
            'yayasan'						=> $this->request->getVar('yayasan'),
        );
        session()->setFlashdata('berhasil', 'Behasill di Tambahkan..');
        $getdata = $this->sekolah->savesekolahkemenag($data);
        return redirect()->to(base_url('sekolah/sekolahkemenag'));
    }
    public function editsekolahkemenag($id_sekolah)
    {
        $getdata = $this->sekolah->detailSekolahKemenag($id_sekolah);
        $data = array (
            'title' => 'DB BMPS',
            'subtitle' => 'Edit-sekolah Kemenag',
            'kecamatan' => $this->kecamatan->getkecamatan(),
            'bentukpendidikan' => $this->bentukpendidikan->getbentukpendidikan(),
            'sekolah' => $getdata,
        );
        return view('admin/V_EditSekolahKemenag',$data);
    }
    public function saveeditsekolahkemenag($id_sekolah)
    {
        // dd($this->request->getVar());
        $data = array (
            'nm_sekolah_kemenag'            => $this->request->getVar('nama_sekolah'),
            'kepala_madrasah'               => $this->request->getVar('kepala_madrasah'),
            'akreditasi' 					=> $this->request->getVar('akreditasi'),
            'kurikulum' 					=> $this->request->getVar('kurikulum'),
            'waktu_belajar' 			    => $this->request->getVar('waktu_belajar'),
            'npsn' 							=> $this->request->getVar('npsn'),
            'nsm' 						    => $this->request->getVar('nsm'),
            'status' 						=> $this->request->getVar('status'),
            'id_bentuk_pendidikan' 			=> $this->request->getVar('id_bentuk_pendidikan'),
            'penyelenggara' 			    => $this->request->getVar('penyelenggara'),
            'sk_pendirian_sekolah' 			=> $this->request->getVar('sk_pendirian_sekolah'),
            'tanggal_sk_pendirian' 			=> $this->request->getVar('tanggal_sk_pendirian'),
            'sk_izin_operasional' 			=> $this->request->getVar('sk_izin_operasional'),
            'tanggal_sk_izin_operasional' 	=> $this->request->getVar('tanggal_sk_izin_operasional'),
            'nama_bank' 					=> $this->request->getVar('nama_bank'),
            'rekening_atas_nama' 			=> $this->request->getVar('rekening_atas_nama'),
            'status_bos' 					=> $this->request->getVar('status_bos'),
            'sertifikasi_iso'				=> $this->request->getVar('sertifikasi_iso'),
            'sumber_listrik'				=> $this->request->getVar('sumber_listrik'),
            'daya_listrik'					=> $this->request->getVar('daya_listrik'),
            'akses_internet'				=> $this->request->getVar('akses_internet'),
            'id_kecamatan' 					=> $this->request->getVar('id_kecamatan'),
            'kabupaten_kota' 				=> $this->request->getVar('kabupaten_kota'),
            'prov'						    => $this->request->getVar('prov'),
            'luas_tanah_milik'				=> $this->request->getVar('luas_tanah_milik'),
            'luas_tanah_bukan_milik'        => $this->request->getVar('luas_tanah_bukan_milik'),
            'jml_guru'						=> $this->request->getVar('jml_guru'),
            'jml_tendik'					=> $this->request->getVar('jml_tendik'),
            'jml_siswa' 					=> $this->request->getVar('jml_siswa'),
            'alamat1'						=> $this->request->getVar('alamat'),
            'telepon'					    => $this->request->getVar('telepon'),
            'fax'						    => $this->request->getVar('fax'),
            'website'					    => $this->request->getVar('website'),
            'email'							=> $this->request->getVar('email'),
            'yayasan'						=> $this->request->getVar('yayasan'),
        );
        session()->setFlashdata('berhasil', 'Behasill di Ubah..');
        $getdata = $this->sekolah->saveeditsekolahkemenag($id_sekolah,$data);
        return redirect()->to(base_url('sekolah/sekolahkemenag'));
    }
    public function hapussekolahkemenag($id_sekolah)
    {
        session()->setFlashdata('berhasil', 'Behasill di Hapus..');
        $getdata = $this->sekolah->savehapussekolahkemenag($id_sekolah);
        return redirect()->to(base_url('sekolah/sekolahkemenag'));
    }
}
