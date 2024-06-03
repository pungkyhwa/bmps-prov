<?php 
  echo view('layout/header');
  foreach ($detailsekolah as $row):
?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile Sekolah Kemenag</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid"
                       src="<?php echo base_url('assets/dist/img/user4-128x128.jpg');?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $row->nm_sekolah_kemenag;?></h3>

                <p class="text-muted text-center"><?php echo $row->npsn;?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    Kepsek : <b class="float-center"><?php echo $row->kepala_madrasah;?></b>
                  </li>
                  <li class="list-group-item">
                    NSM : <b class="float-center"><?php echo $row->nsm;?></b>
                  </li>
                  <li class="list-group-item">
                    Akreditasi : <b class="float-center"><?php echo $row->akreditasi;?></b>
                  </li>
                  <li class="list-group-item">
                    Kurikulum : <b class="float-center"><?php echo $row->kurikulum;?></b>
                  </li>
                  <li class="list-group-item">
                    Waktu : <b class="float-center"><?php echo $row->waktu_belajar;?></b>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Profil</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Rekapitulasi</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Kontak</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">



                    <!-- Profil -->
                    <div class="row">
                      <!-- .col -->
                      <div class="col-md-4">
                        <div class="card card-primary">
                          <div class="card-header">
                            <h3 class="card-title">Identitas Sekolah</h3>
                          </div>
                          <!-- /.card-body -->
                          
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item"><b>Status :</b> <?php echo $row->status; ?></li>
                              <li class="list-group-item"><b>Bentuk Pendidikan :</b> <?php echo $row->nm_bentuk_pendidikan; ?></li>
                              <li class="list-group-item"><b>Penyelenggara :</b> <?php echo $row->penyelenggara; ?></li>
                              <li class="list-group-item"><b>SK Pendirian Sekolah :</b> <?php echo $row->sk_pendirian_sekolah; ?></li>
                              <li class="list-group-item"><b>Tanggal SK Pendirian :</b> <?php echo $row->tanggal_sk_pendirian; ?></li>
                              <li class="list-group-item"><b>SK Izin Operasional :</b> <?php echo $row->sk_izin_operasional; ?></li>
                              <li class="list-group-item"><b>TGL SK Izin Operasional :</b> <?php echo $row->tanggal_sk_izin_operasional; ?></li>
                            </ul>                         
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- /.col -->
                      <!-- .col -->
                      <div class="col-md-4">
                        <div class="card card-primary">
                          <div class="card-header">
                            <h3 class="card-title">Data Pelengkap</h3>
                          </div>
                          <!-- /.card-body -->
                          
                            <ul class="list-group list-group-flush">
                              <!-- <li class="list-group-item"><b>Kebutuhan Khusus Dilayani :</b> <?php //echo $row->kebutuhan_khusus_dilayani;?></li> -->
                              <li class="list-group-item"><b>Nama Bank :</b> <?php echo $row->nama_bank;?></li>
                              <!-- <li class="list-group-item"><b>Cabang KCP/Unit :</b> <?php //echo $row->cabang_kcp_unit;?></li> -->
                              <li class="list-group-item"><b>Rekening Atas Nama :</b> <?php echo $row->rekening_atas_nama;?></li>
                            </ul>                         
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- /.col -->
                      <!-- .col -->
                      <div class="col-md-4">
                        <div class="card card-primary">
                          <div class="card-header">
                            <h3 class="card-title">Data Rinci</h3>
                          </div>
                          <!-- /.card-body -->
                          
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item"><b>Status BOS :</b> <?php echo $row->status_bos;?></li>
                              <!-- <li class="list-group-item"><b>Waku Penyelenggaraan :</b> <?php //echo $row->waku_penyelenggaraan;?></li> -->
                              <li class="list-group-item"><b>Sertifikasi ISO :</b> <?php echo $row->sertifikasi_iso;?></li>
                              <li class="list-group-item"><b>Luas Tanah Milik :</b> <?php echo $row->luas_tanah_milik;?></li>
                              <li class="list-group-item"><b>Luas Tanah Bukan Milik :</b> <?php echo $row->luas_tanah_bukan_milik;?></li>                             
                              <li class="list-group-item"><b>Sumber Listrik :</b> <?php echo $row->sumber_listrik;?></li>
                              <li class="list-group-item"><b>Daya Listrik :</b> <?php echo $row->daya_listrik;?></li>
                              <li class="list-group-item"><b>Akses Internet :</b> <?php echo $row->akses_internet;?></li>
                            </ul>                         
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <!-- /.post -->
                  </div>



                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                     <!-- .col -->
                     <div class="col-md-4">
                        <div class="card card-primary">
                          <div class="card-header">
                            <h3 class="card-title">Data PTK dan PD</h3>
                          </div>
                          <!-- /.card-body -->
                          
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item"><b>Guru :</b> <?php echo $row->jml_guru;?> Orang</li>
                              <li class="list-group-item"><b>Tendik :</b> <?php echo $row->jml_tendik;?> Orang</li>
                              <!-- <li class="list-group-item"><b>PTK :</b> <?php //echo $row->jml_ptk;?> Orang</li> -->
                              <li class="list-group-item"><b>PD :</b> <?php echo $row->jml_siswa;?> Orang</li>
                            </ul>                         
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- /.col -->
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <!-- .col -->
                    <div class="col-md-6">
                        <div class="card card-primary">
                          <div class="card-header">
                            <h3 class="card-title">Kontak Utama</h3>
                          </div>
                          <!-- /.card-body -->
                          
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item"><b>Alamat :</b> <?php echo $row->alamat1;?></li>
                              <!-- <li class="list-group-item"><b>RT/RW :</b> <?php //echo $row->rt_rw;?></li>
                              <li class="list-group-item"><b>Dusun :</b> <?php //echo $row->dusun;?></li>
                              <li class="list-group-item"><b>Desa / Kelurahan :</b> <?php //echo $row->desa_kelurahan;?></li> -->
                              <li class="list-group-item"><b>Kecamatan :</b> <?php echo $row->nm_kecamatan;?></li>
                              <li class="list-group-item"><b>Kabupaten :</b> <?php echo $row->kabupaten_kota;?></li>
                              <li class="list-group-item"><b>Provinsi :</b> <?php echo $row->prov;?></li>
                              <li class="list-group-item"><b>Telepon :</b> <?php echo $row->telepon;?></li>
                              <li class="list-group-item"><b>Fax :</b> <?php echo $row->fax;?></li>
                              <li class="list-group-item"><b>Website :</b> <?php echo $row->website;?></li>
                              <li class="list-group-item"><b>Email :</b> <?php echo $row->email;?></li>
                            </ul>                         
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- /.col -->
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php 
  endforeach;
  echo view('layout/footer');
?>