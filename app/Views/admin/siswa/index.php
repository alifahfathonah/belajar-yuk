<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper pb-4">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">data siswa</h1>
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
                        <button class="btn bg-indigo d-inline mb-2 btn-detail_siswa">
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
            <div class="modal-header bg-indigo">
              <h5 class="modal-title" id="staticModalLabel"></h5>
              <button type="button" class="close text-white btn-close_modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/admin/siswa/create" method="post" id="form-create_siswa">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-fw fa-user"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap">
                </div>
                <!-- /.input-group -->
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-fw fa-id-card"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="NIS/NISN" name="nis-nisn">
                </div>
                <!-- /.input-group -->
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-fw fa-restroom"></i></span>
                  </div>
                  <select class="custom-select form-control" name="jenis_kelamin">
                    <option value="" selected>laki-laki</option>
                    <option value="">perempuan</option>
                  </select>
                </div>
                <!-- /.input-group -->
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-fw fa-pen-alt"></i></span>
                  </div>
                  <select class="custom-select form-control" name="kelas">
                    <option selected>Kelas</option>
                    <option value="">X</option>
                    <option value="">XI</option>
                    <option value="">XII</option>
                  </select>
                </div>
                <!-- /.input-group -->
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-fw fa-industry"></i></span>
                  </div>
                  <select class="custom-select form-control text-capitalize" name="jurusan">
                    <option selected>Jurusan</option>
                    <option value="">rekayasa perangkat lunak</option>
                    <option value="">teknik komputer dan jaringan</option>
                    <option value="">teknik kendaraan ringan</option>
                    <option value="">desain pemodelan</option>
                    <option value="">teknik pendingin dan tata udara</option>
                    <option value="">teknik jaringan tenaga listrik</option>
                    <option value="">bisnis konstruksi dan properti</option>
                  </select>
                </div>
                <!-- /.input-group -->
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-fw fa-mobile-alt"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="No. HP" name="no_hp">
                </div>
                <!-- /.input-group -->
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-fw fa-calendar-alt"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Tempat, Tanggal Lahir" name="ttl">
                </div>
                <!-- /.input-group -->
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-fw fa-address-card"></i></span>
                  </div>
                  <textarea class="form-control" rows="2" placeholder="Alamat Lengkap" name="alamat"></textarea>
                </div>
                <!-- /.input-group -->
                
                <div class="text-right">
                  <button type="submit" class="btn bg-navy">
                    <i class="fa fa-fw fa-paper-plane align-middle"></i>
                    simpan
                  </button>
                </div>
              </form>
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
<script src="/js/siswa/index.js"></script>
<?= $this->endSection() ?>