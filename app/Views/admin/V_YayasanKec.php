<?php echo view('layout/header');?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Yayasan dibawah naungan kemendigbud</h1>
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
        



      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Yayasan Sesuai Kecamatan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nama Kecamatan</th>
                    <th>Progress</th>
                    <th style="width: 40px">Total</th>
                  </tr>
                </thead>
                
                <?php 
                  $no = 1; 
                  foreach ($datayayasan as $row):
                    $totyys[] = $row->yys; $total_yys = array_sum($totyys);
                    // var_dump($total_yys);
                    
                ?>

                <tbody>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td> 
                      <a href="<?php echo base_url('yayasan/detailkecamatan/'.$row->id_kecamatan); ?>">
                        <?php if($row->id_kecamatan == '0'){ echo"Belum Tedaftar"; }else{ echo $row->nm_kecamatan;}?>
                      </a>
                    </td>
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width: <?php echo $row->yys;?>%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-danger"><?php echo $row->yys;?></span></td>
                  </tr>
                </tbody>
                <?php $no++; endforeach; ?>
                <tfooter>
                  <tr>
                    <th colspan="3" class="text-center">Total</th>
                    <th><?php echo $total_yys;?></th>
                  </tr>
                </tfooter>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
            



      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
<?php echo view('layout/footer');?>

