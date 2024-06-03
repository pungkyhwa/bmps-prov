<?php echo view('layout/header');?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
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
          <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data sekolah kemenag berdasarkan kecamatan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kecamatan</th>
                    <th class="text-center">Jumlah MA </th>
                    <th class="text-center">Jumlah MI </th>
                    <th class="text-center">Jumlah MTS</th>
                    <th class="text-center">Jumlah MTsS</th>
                    <th class="text-center">Jumlah RA </th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no = 1; 
                    foreach ($dataKecamatan as $row):
                      $totma[] = $row->ma; $total_ma = array_sum($totma);
                      $totmi[] = $row->mi; $total_mi = array_sum($totmi);
                      $totmts[] = $row->mts; $total_mts = array_sum($totmts);
                      $totmtss[] = $row->mtss; $total_mtss = array_sum($totmtss);
                      $totra[] = $row->ra; $total_ra = array_sum($totra);
                  ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><b><?php echo $row->nm_kecamatan; ?></b></td>
                    <td class="text-center"><?php echo $row->ma; ?></td>
                    <td class="text-center"><?php echo $row->mi; ?></td>
                    <td class="text-center"><?php echo $row->mts; ?></td>
                    <td class="text-center"><?php echo $row->mtss; ?></td>
                    <td class="text-center"><?php echo $row->ra; ?></td>
                    <td><a href="<?php echo base_url('kecamatan/detailkeckemenag/'.$row->id_kecamatan); ?>">detail</a></td>
                  </tr>
                  <?php $no++; endforeach; ?>
                  </tbody>
                  <tfoot>
                    <th colspan="2" class="text-center">Total</td>
                    <th class="text-center"><?php echo $total_ma; ?></th>
                    <th class="text-center"><?php echo $total_mi; ?></th>
                    <th class="text-center"><?php echo $total_mts; ?></th>
                    <th class="text-center"><?php echo $total_mtss; ?></th>
                    <th class="text-center"><?php echo $total_ra; ?></th>
                    <th class="text-center"></th>
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