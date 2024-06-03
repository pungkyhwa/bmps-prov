<?php echo view('layout/header');?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Yayasan</h1>
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
    <?php foreach ($datayayasan as $row): ?>
    <!-- Main content -->
    <section class="content">
    <form name="tambahdata" method="POST" action="<?php echo base_url('yayasan/saveedityayasan/'.$row->id_yayasan.'')?>">
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
                      <label>Nama Yayasan</label>
                      <input type="text" name="nm_yayasan" class="form-control" value="<?php echo $row->nm_yayasan?>">
                    </div>
                    <div class="form-group">
                      <label>Kecamatan</label>
                        <select class="form-control select2" name="id_kecamatan">
                          <option value="<?php echo $row->id_kecamatan?>"><?php echo $row->nm_kecamatan?></option>
                          <?php
                            foreach ($kecamatan as $kec) {
                            echo "<option value=".$kec->id_kecamatan.">".$kec->nm_kecamatan."</option>";
                          } 
                          ?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <textarea name="alamat" class="form-control" cols="30" rows="10"><?php echo $row->alamat_yayasan?></textarea>
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
      <?php endforeach; ?>
    </section>
  <div>

  </div>
  </div>


<?php echo view('layout/footer');?>
