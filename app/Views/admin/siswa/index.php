<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper pb-4">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data Siswa</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin/siswa">Siswa</a></li>
            <li class="breadcrumb-item active">Data Siswa</li>
          </ol>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  
  <!-- Main content -->
  <section class="content pb-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          
          <div class="card">
            <div class="card-body">
              
              <button class="btn bg-indigo mb-4 shadow-md" id="btn-create_siswa">tambah siswa</button>
              
              <div class="table-responsive">
                
                <table class="table table-striped table-hover" id="dataTable">
                  
                  <thead class="bg-navy text-center text-nowrap text-uppercase">
                    <tr>
                      <th scope="col">no</th>
                      <th scope="col">nama lengkap</th>
                      <th scope="col">nis/nisn</th>
                      <th scope="col">jenkel</th>
                      <th scope="col">aksi</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <tr>
                      <th class="align-middle text-center" scope="row">1</th>
                      <td class="align-middle">Nova Ardiansyah</td>
                      <td class="align-middle">103/RPL/2017</td>
                      <td class="align-middle">Laki-Laki</td>
                      <td class="text-nowrap align-middle">
                        <button class="btn bg-indigo d-inline btn-detail_siswa">
                          <i class="fa fa-fw fa-eye"></i>
                          detail
                        </button>
                      </td>
                    </tr>
                  </tbody>
                  
                </table>
                
              </div>
              <!-- /.table-responsive -->
              
            </div>
          </div>
          <!-- /.card -->
          
        </div>
        <!-- /.col-md-6 -->
        
        <div class="col-md-6">
          <div class="card">
            <div class="card-header bg-navy">
              <h3 class="card-title">statistik data siswa/i</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <canvas id="chart-data_siswa" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              
              <h5 class="mt-3">keterangan:</h5>
              <ul class="list-group">
                <li class="list-group-item">
                  <i class="fa fa-fw fa-square mr-1" style="color: #f56954"></i> 
                  Rekayasa Perangkat Lunak
                </li>
                <li class="list-group-item">
                  <i class="fa fa-fw fa-square mr-1" style="color: #00a65a"></i> 
                  Teknik Komputer dan Jaringan
                </li>
                <li class="list-group-item">
                  <i class="fa fa-fw fa-square mr-1" style="color: #f39c12"></i> 
                  Teknik Kendaraan Ringan
                </li>
                <li class="list-group-item">
                  <i class="fa fa-fw fa-square mr-1" style="color: #00c0ef"></i> 
                  Desain Pemodelan
                </li>
                <li class="list-group-item">
                  <i class="fa fa-fw fa-square mr-1" style="color: #3c8dbc"></i> 
                  Teknik Pendingin dan Tata Udara
                </li>
                <li class="list-group-item">
                  <i class="fa fa-fw fa-square mr-1" style="color: #d2d6de"></i> 
                  Teknik Jaringan Tenaga Listrik
                </li>
                <li class="list-group-item">
                  <i class="fa fa-fw fa-square mr-1" style="color: #c678db"></i> 
                  Bisnis Konstruksi dan Properti
                </li>
              </ul>
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <!-- .col-md-6 -->
      </div>
      <!-- /.row -->
      
      <!-- Static Modal -->
      <div class="modal fade" id="staticModal" tabindex="-1" aria-labelledby="staticModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticModalLabel"></h5>
              <button type="button" class="close text-white btn-close_modal">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <!-- /.modal-body -->
          </div>
        </div>
      </div>
      
    </div>
    <!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

    

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="/js/admin/siswa/index.js"></script>
<?= $this->endSection() ?>