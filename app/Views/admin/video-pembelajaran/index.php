<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper pb-4">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Video Pembelajaran</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Video Pembelajaran</li>
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
              <div class="text-right mb-4 mt-2">
                <div class="btn-group" role="group">
                  <button class="btn bg-indigo shadow-md" id="btn-print-video_pembelajaran">
                    <i class="fa fa-fw fa-print align-middle"></i>
                    print
                  </button>
                  <button class="btn bg-indigo shadow-md" id="btn-create-video_pembelajaran">
                    <i class="fa fa-fw fa-save align-middle"></i>
                    tambah
                  </button>
                </div>
              </div>
              
              <div class="table-responsive">
                
                <table class="table table-striped table-hover" id="dataTable">
                  
                  <thead class="bg-navy text-center text-nowrap text-uppercase">
                    <tr>
                      <th scope="col">no</th>
                      <th scope="col">Judul Video</th>
                      <th scope="col">Thumbnail</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <tr>
                      <th class="align-middle text-center" scope="row">1</th>
                      <td class="align-middle">Mengenal Jaringan Komputer LAN (Local Area Network)</td>
                      <td class="align-middle">
                        <img src="https://i.ytimg.com/vi/OXyweS45dy4/sddefault.jpg" 
                        class="img-thumbnail" alt="mengenal jaringan lan"
                        data-video_id="OXyweS45dy4" />
                      </td>
                      <td class="text-nowrap align-middle">
                        <button class="btn bg-indigo d-inline btn-detail-video_pembelajaran">
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
              <h3 class="card-title">statistik video pembelajaran</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <canvas id="chart-video_pembelajaran" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
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
<script src="/js/admin/video-pembelajaran/index.js"></script>
<?= $this->endSection() ?>