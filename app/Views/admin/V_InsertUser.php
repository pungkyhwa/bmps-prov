<?php echo view('layout/header');?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data User</h1>
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
    <form name="tambahdata" method="POST" action="<?php echo base_url('user/saveinsert')?>">
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
                      <label>Nama Lengkap</label>
                      <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>No Telp</label>
                      <input type="text" name="no_telp" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Level</label>
                      <select name="lavel" class="form-control">
                        <option value="">- Pilih Level -</option>
                        <option value="admin">admin</option>
                        <option value="pantura">pantura</option>
                        <option value="barat">barat</option>
                        <option value="timur">timur</option>
                      </select>
                    </div>
                          
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                <!-- /.card-body -->
                
              
            </div>
            <!-- /.card -->      
            </div>
          </div>

      </form>
    </section>
  <div>

  </div>
  </div>


<?php echo view('layout/footer');?>
