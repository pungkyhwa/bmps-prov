<?php echo view('layout/header');?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sekolah dibawah naungan kemendigbud</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <?php 
        if(session()->get('berhasil')){
      ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
          <strong>Success</strong> <?php echo session()->getFlashdata('berhasil');?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php
        }
      ?>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-9"><p><h3 class="card-title">Seluruh Data Sekolah dari Kabupaten Tangerang</h3><p></div>
                  <div class="col-3"><a href="<?php echo base_url('sekolah/insersekolah')?>"><button class="btn btn-primary float-right">
                    <i class="nav-icon fas fa-plus"></i> Tambah Data</button></a>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kecamatan</th>
                    <th>Nama Sekolah</th>
                    <th>Yayasan</th>
                    <th>bentuk</th>
                    <th>Jml Guru</th>
                    <th>Jml Tendik</th>
                    <th>Jml PTK</th>
                    <th>Jml Siswa</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no = 1; 
                  
                    foreach ($datasekolah as $row):
                      $totSiswa[] = $row->jml_siswa; $total_siswa = array_sum($totSiswa);
                      $totPtk[] = $row->jml_ptk; $total_ptk = array_sum($totPtk);
                      $totTendik[] = $row->jml_tendik; $total_tendik = array_sum($totTendik);
                      $totGuru[] = $row->jml_guru; $total_guru = array_sum($totGuru);
                      
                  ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $row->nm_kecamatan; ?></td>
                    <td><?php echo $row->nama_sekolah; ?></td>
                    <td><?php echo $row->nm_yayasan; ?></td>
                    <td><?php echo $row->nm_bentuk_pendidikan; ?></td>
                    <td><?php echo $row->jml_guru; ?></td>
                    <td><?php echo $row->jml_tendik; ?></td>
                    <td><?php echo $row->jml_ptk; ?></td>
                    <td><?php echo $row->jml_siswa; ?></td>
                    <td>
                      <a href="<?php echo base_url('sekolah/detailSekolah/'.$row->id_sekolah); ?>"><i class="nav-icon fas fa-info-circle" title="Detail"></i></a> |
                      <a href="<?php echo base_url('sekolah/editsekolah/'.$row->id_sekolah); ?>"><i class="nav-icon fas fa-pen-square" title="Edit"></i></a> |
                      <a href="<?php echo base_url('sekolah/hapussekolah/'.$row->id_sekolah); ?>"><i class="nav-icon fas fa-trash" title="Delete"></i></a>
                    </td>
                  </tr>
                  <?php $no++; endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th colspan="5" class="text-center">Total</th>
                    <th class="text-center"><?php echo $total_guru; ?></th>
                    <th class="text-center"><?php echo $total_tendik; ?></th>
                    <th class="text-center"><?php echo $total_ptk; ?></th>
                    <th class="text-center"><?php echo $total_siswa; ?></th>
                    <th></th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
<?php echo view('layout/footer');?>

