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
            <div class="modal-body"></div>
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