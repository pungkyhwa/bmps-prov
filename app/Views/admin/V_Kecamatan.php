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
                <h3 class="card-title">DataTable kecamatan dari database</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kecamatan</th>
                    <th>Jumlah Tk</th>
                    <th>Jumlah SD</th>
                    <th>Jumlah SMP</th>
                    <th>Jumlah SMA</th>
                    <th>Jumlah SMK</th>
                    <th>Jumlah SLB</th>
                    <th>Jumlah SPK SD</th>
                    <th>Jumlah SPK SMP</th>
                    <th>Jumlah SPK SMA</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no = 1; 
                    foreach ($dataKecamatan as $row):
                      $tottk[] = $row->tk; $total_tk = array_sum($tottk);
                      $totsd[] = $row->sd; $total_sd = array_sum($totsd);
                      $totsmp[] = $row->smp; $total_smp = array_sum($totsmp);
                      $totsma[] = $row->sma; $total_sma = array_sum($totsma);
                      $totsmk[] = $row->smk; $total_smk = array_sum($totsmk);
                      $totslb[] = $row->slb; $total_slb = array_sum($totslb);
                      $totspksd[] = $row->spk_sd; $total_spk_sd = array_sum($totspksd);
                      $totspksmp[] = $row->spk_smp; $total_spk_smp = array_sum($totspksmp);
                      $totspksma[] = $row->spk_sma; $total_spk_sma = array_sum($totspksma);
                  ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><b><?php echo $row->nm_kecamatan; ?></b></td>
                    <td class="text-center"><?php echo $row->tk; ?></td>
                    <td class="text-center"><?php echo $row->sd; ?></td>
                    <td class="text-center"><?php echo $row->smp; ?></td>
                    <td class="text-center"><?php echo $row->sma; ?></td>
                    <td class="text-center"><?php echo $row->smk; ?></td>
                    <td class="text-center"><?php echo $row->slb; ?></td>
                    <td class="text-center"><?php echo $row->spk_sd; ?></td>
                    <td class="text-center"><?php echo $row->spk_smp; ?></td>
                    <td class="text-center"><?php echo $row->spk_sma; ?></td>
                    <td><a href="<?php echo base_url('kecamatan/detail/'.$row->id_kecamatan); ?>">detail</a></td>
                  </tr>
                  <?php $no++; endforeach; ?>
                  </tbody>
                  <tfoot>
                    <th colspan="2" class="text-center">Total</td>
                    <th class="text-center"><?php echo $total_tk; ?></th>
                    <th class="text-center"><?php echo $total_sd; ?></th>
                    <th class="text-center"><?php echo $total_smp; ?></th>
                    <th class="text-center"><?php echo $total_sma; ?></th>
                    <th class="text-center"><?php echo $total_smk; ?></th>
                    <th class="text-center"><?php echo $total_slb; ?></th>
                    <th class="text-center"><?php echo $total_spk_sd; ?></th>
                    <th class="text-center"><?php echo $total_spk_smp; ?></th>
                    <th class="text-center"><?php echo $total_spk_sma; ?></th>
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