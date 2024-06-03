<?php 
  echo view('layout/header');
  
?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile Yayasan</h1>
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
                <?php foreach ($datayayasan as $row):?>
                <h3 class="profile-username text-center"><?php echo $row->nm_yayasan;?></h3>

                <p class="text-muted text-center"><?php echo $row->nm_kecamatan;?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    Kecamatan : <b class="float-center"><?php echo $row->nm_kecamatan;?></b>
                  </li>
                  <li class="list-group-item">
                    Alamat : <b class="float-center"><?php echo $row->alamat_yayasan;?></b>
                  </li>
                </ul>
                <?php endforeach;?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              Daftar Sekolah Yang Dimiliki
            </div>
            <div class="card-body">
            <table class="table">
              <caption>List of Sekolah</caption>
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Sekolah</th>
                  <th scope="col">Bentuk</th>
                  <th scope="col">Kepsek</th>
                  <th scope="col">Guru</th>
                  <th scope="col">Siswa</th>
                </tr>
              </thead>
              <?php $no = 1; foreach ($datasekolah as $row1):?>
              <tbody>
                <tr>
                  <th scope="row"><?php echo $no;?></th>
                  <td><?php echo $row1->nama_sekolah;?></td>
                  <td><?php echo $row1->nm_bentuk_pendidikan;?></td>
                  <td><?php echo $row1->nama_kepsek;?></td>
                  <td><?php echo $row1->jml_guru;?></td>
                  <td><?php echo $row1->jml_siswa;?></td>
                </tr>
              </tbody>
              <?php $no++; endforeach;?>
            </table>
            </div>
          </div>
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
  echo view('layout/footer');
?>