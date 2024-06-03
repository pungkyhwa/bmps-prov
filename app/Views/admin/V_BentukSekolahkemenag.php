<?php echo view('layout/header');?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bentuk Sekolah Kemenag</h1>
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
                    <th>sekolah</th>
                    <th>bentuk</th>
                    <th>Jml Guru</th>
                    <th>Jml Tendik</th>
                    <th>Jml Siswa</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no = 1; 
                    foreach ($detailbentuksekolah as $row):
                      $totSiswa[] = $row->jml_siswa; $total_siswa = array_sum($totSiswa);
                      $totTendik[] = $row->jml_tendik; $total_tendik = array_sum($totTendik);
                      $totGuru[] = $row->jml_guru; $total_guru = array_sum($totGuru);                      
                  ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $row->nm_kecamatan; ?></td>
                    <td><?php echo $row->nm_sekolah_kemenag; ?></td>
                    <td><?php echo $row->nm_bentuk_pendidikan; ?></td>
                    <td><?php echo $row->jml_guru; ?></td>
                    <td><?php echo $row->jml_tendik; ?></td>
                    <td><?php echo $row->jml_siswa; ?></td>
                    <td><a href="<?php echo base_url('sekolah/detailSekolahkemenag/'.$row->id_sekolah_kemenag); ?>">detail</a></td>
                  </tr>
                  <?php $no++; endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th colspan="4" class="text-center">Total</th>
                    <th class="text-center"><?php echo $total_guru; ?></th>
                    <th class="text-center"><?php echo $total_tendik; ?></th>
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