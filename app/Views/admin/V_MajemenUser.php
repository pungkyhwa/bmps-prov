<?php echo view('layout/header');?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Pengguna BMPS</h1>
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
                  <div class="col-9"><p><h3 class="card-title">Seluruh Data Akun Pengguna BMPS</h3><p></div>
                  <div class="col-3"><a href="<?php echo base_url('user/insert')?>"><button class="btn btn-primary float-right">
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
                    <th>Nama Pengguna</th>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no = 1; 
                    foreach ($users as $row):
                      // $totSiswa[] = $row->jml_siswa; $total_siswa = array_sum($totSiswa);
                      
                  ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->username; ?></td>
                    <td><?php echo $row->level; ?></td>
                    <td>
                      <a href="<?php echo base_url('user/edit/'.$row->id_user); ?>"><i class="nav-icon fas fa-pen-square" title="Edit"></i></a> |
                      <a href="<?php echo base_url('user/hapus/'.$row->id_user); ?>"><i class="nav-icon fas fa-trash" title="Delete"></i></a>
                    </td>
                  </tr>
                  <?php $no++; endforeach; ?>
                  </tbody>
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

