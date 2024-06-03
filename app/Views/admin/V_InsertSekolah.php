<?php echo view('layout/header');?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Sekolah Kemendigbud</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form name="tambahdata" method="POST" action="<?php echo base_url('sekolah/savesekolah')?>">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Segmen 1</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
                <div class="card-body">
                <div class="form-group">
                    <label>Nama Sekolah</label>
                    <input type="text" name="nama_sekolah" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>NPSN</label>
                    <input type="text" name="npsn" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Nama Kepsek</label>
                    <input type="text" name="nama_kepsek" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Nama Operator</label>
                    <input type="text" name="operator" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Akreditasi</label>
                    <input type="text" name="akreditasi" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Kurikulum</label>
                    <input type="text" name="kurikulum" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Waktu</label>
                    <input type="text" name="waktu" class="form-control">
                  </div>
                </div>
                <!-- /.card-body -->
               
              
            </div>
            <!-- /.card -->

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Lengkap</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="form-group">
                    <label>Kebutuhan Khusus Dilayani</label>
                    <input type="text" name="kebutuhan_khusus_dilayani" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Nama Bank</label>
                    <input type="text" name="nama_bank" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Cabang KCP/Unit</label>
                    <input type="text" name="cabang_kcp_unit" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Rekening Atas Nama</label>
                    <input type="text" name="rekening_atas_nama" class="form-control">
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Input addon -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Data PTK dan PD</h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Jumlah Guru</label>
                  <input type="text" name="jml_guru" class="form-control">
                </div>
                <div class="form-group">
                  <label>Jumlah Tendik</label>
                  <input type="text" name="jml_tendik" class="form-control">
                </div>
                <div class="form-group">
                  <label>Jumlah PTK</label>
                  <input type="text" name="jml_ptk" class="form-control">
                </div>
                <div class="form-group">
                  <label>Jumlah PD</label>
                  <input type="text" name="jml_siswa" class="form-control">
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>


          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Identitas Sekolah</h3>
              </div>
              <div class="card-body">
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                      <option value="">---- pilih ----</option>
                      <option value="Swasta">Swasta</option>
                      <option value="Negri">Negri</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Bentuk Pendidikan</label>
                    <!-- <select class="form-control"> -->
                    <select class="form-control select2" style="width: 100%;" name="id_bentuk_pendidikan">
                      <option value="">------pilih------</option>
                        <?php
                          foreach ($bentukpendidikan as $key) {
                          echo "<option value=".$key->id_bentuk_pendidikan .">".$key->nm_bentuk_pendidikan."</option>";
                          }
                        ?> 
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Status Kepemilikan</label>
                    <input type="text" name="status_kepemilikan" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Nama Yayasan</label>
                      <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" name="yayasan" style="width: 100%;">
                        <option value="0">-pilh yayasan-<option>
                          <?php
                            foreach ($yayasan as $key2) {
                            echo "<option value=".$key2->id_yayasan .">".$key2->nm_yayasan."</option>";
                            }
                          ?> 
                      </select>
                  </div>
                  <div class="form-group">
                    <label>SK Pendirian Sekolah</label>
                    <input type="text" name="sk_pendirian_sekolah" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Sk Pendirian</label>
                    <input type="text" name="tanggal_sk_pendirian" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>SK Izin Oprasional</label>
                    <input type="text" name="sk_izin_operasional" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>TGL SK Izin Oprasional</label>
                    <input type="text" name="tanggal_sk_izin_operasional" class="form-control">
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Data Rinci</h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Status BOS</label>
                  <input type="text" name="status_bos" class="form-control"  placeholder="">
                </div>
                <div class="form-group">
                  <label>Waktu Penyelenggaraan</label>
                  <input type="text" name="waku_penyelenggaraan" class="form-control"  placeholder="">
                </div>
                <div class="form-group">
                  <label>Sertifikasi ISO</label>
                  <input type="text" name="sertifikasi_iso" class="form-control"  placeholder="">
                </div>
                <div class="form-group">
                  <label>Sumber Listrik</label>
                  <input type="text" name="sumber_listrik" class="form-control"  placeholder="">
                </div>
                <div class="form-group">
                  <label>Daya Listrik</label>
                  <input type="text" name="daya_listrik" class="form-control"  placeholder="">
                </div>
                <div class="form-group">
                  <label>Akses Internet</label>
                  <input type="text" name="akses_internet" class="form-control"  placeholder="">
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

    <div class="container-fluid">
      <!-- general form elements disabled -->
      <div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">Kontak Utama</h3>
        </div>
                  <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control"  placeholder="">
              </div>
              <div class="form-group">
                <label>RT / RW</label>
                <input type="text" name="rt_rw" class="form-control"  placeholder="">
              </div>
              <div class="form-group">
                <label>Dusun</label>
                <input type="text" name="dusun" class="form-control"  placeholder="">
              </div>
              <div class="form-group">
                <label>Desa / Kelurahan</label>
                <input type="text" name="desa_kelurahan" class="form-control"  placeholder="">
              </div>
              <div class="form-group">
                <label>Kecamatan</label>
                  <select class="form-control select2bs4" name="id_kecamatan">
                    <option value="">------pilih------</option>
                    <?php
                      foreach ($kecamatan as $kec) {
                       echo "<option value=".$kec->id_kecamatan.">".$kec->nm_kecamatan."</option>";
                     } 
                    ?>
                  </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Kabupaten</label>
                <input type="text" name="kabupaten" class="form-control"  value="Kab. Tangerang" disabled>
              </div>
              <div class="form-group">
                <label>Provinsi</label>
                <input type="text" name="provinsi" class="form-control"  value="Prov. Banten" disabled>
              </div>
              <div class="form-group">
                <label>Kode Pos</label>
                <input type="text" name="kode_pos" class="form-control"  placeholder="">
              </div>
              <div class="form-group">
                <label>Lintang</label>
                <input type="text" name="lintang" class="form-control"  placeholder="">
              </div>
              <div class="form-group">
                <label>Bujur</label>
                <input type="text" name="bujur" class="form-control"  placeholder="">
              </div>
            </div>
          </div>
        </div>
                  <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
    <!-- /.card -->
      
  </div>
</div>

      </form>
    </section>
  <div>

<?php echo view('layout/footer');?>
