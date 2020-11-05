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
                      <th scope="col">nis/nisn</th>
                      <th scope="col">nama lengkap</th>
                      <th scope="col">ttl</th>
                      <th scope="col">alamat</th>
                      <th scope="col">no. hp</th>
                      <th scope="col">aksi</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <tr>
                      <th class="align-middle text-center" scope="row">1</th>
                      <td class="align-middle">103/rpl/2017</td>
                      <td class="align-middle">Nova Ardiansyah</td>
                      <td class="align-middle">Tangerang, 11 november 2020</td>
                      <td class="align-middle">LK III Simbarwaringin, Kec. Trimurjo, Kab. LamTeng</td>
                      <td class="text-nowrap align-middle">0895 0666 8480</td>
                      <td class="text-nowrap align-middle">
                        <button class="btn btn-primary d-inline">
                          <i class="fa fa-fw fa-edit"></i>
                        </button>
                        
                        <button class="btn btn-danger d-inline">
                          <i class="fa fa-fw fa-trash"></i>
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
      </div>
      <!-- /.row -->
    </div>
    <!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal -->
<!-- Create Siswa -->
<div class="modal fade" id="createSiswaModal" tabindex="-1" aria-labelledby="createSiswaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-indigo">
        <h5 class="modal-title" id="createSiswaModalLabel">Tambah data siswa/i</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/admin/siswa/create" method="post" id="form-create_siswa">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-id-card"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="NIS/NISN" name="nis-nisn">
          </div>
          <!-- /.input-group -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-fw fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap">
          </div>
          <!-- /.input-group -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-restroom"></i></span>
            </div>
            <select class="custom-select form-control" name="jenis_kelamin">
              <option selected>Jenis Kelamin</option>
              <option value="1">laki-laki</option>
              <option value="2">perempuan</option>
            </select>
          </div>
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
            <textarea class="form-control" rows="5" placeholder="Alamat Lengkap" name="alamat"></textarea>
          </div>
          <!-- /.input-group -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-fw fa-mobile-alt"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="No. HP" name="no_hp">
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

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="/js/siswa/index.js"></script>
<?= $this->endSection() ?>