$(document).ready(function() {
  // Modal Create Siswa
  $('.container-fluid').on('click','#btn-create_siswa', (e) => {
    $('#staticModalLabel').html(`Tambah data siswa/i`);
    // $('.modal-body').html();
    
    $('#staticModal').modal({ keyboard: false, backdrop: 'static' });
  });
  
  // Modal Detail Siswa
  $('.container-fluid').on('click','.btn-detail_siswa', (e) => {
    $('#staticModalLabel').html(`detail data siswa/i`)
    $('.modal-body').html(`
      <ul class="list-group">
        <li class="list-group-item">
          <div class="row">
            <div class="col-5 text-nowrap text-right">Nama Lengkap:</div>
            <div class="col">Nova Ardiansyah</div>
          </div>
        </li>
        <!-- /.list-group-item -->
        <li class="list-group-item">
          <div class="row">
            <div class="col-5 text-nowrap text-right">NIS/NISN:</div>
            <div class="col">103/RPL/2017</div>
          </div>
        </li>
        <!-- /.list-group-item -->
        <li class="list-group-item">
          <div class="row">
            <div class="col-5 text-nowrap text-right">Jenis Kelamin:</div>
            <div class="col">Laki-Laki</div>
          </div>
        </li>
        <!-- /.list-group-item -->
        <li class="list-group-item">
          <div class="row">
            <div class="col-5 text-nowrap text-right">Kelas:</div>
            <div class="col">XII</div>
          </div>
        </li>
        <!-- /.list-group-item -->
        <li class="list-group-item">
          <div class="row">
            <div class="col-5 text-nowrap text-right">Jurusan:</div>
            <div class="col">Rekayasa Perangkat Lunak</div>
          </div>
        </li>
        <!-- /.list-group-item -->
        <li class="list-group-item">
          <div class="row">
            <div class="col-5 text-nowrap text-right">No. Hp:</div>
            <div class="col">0895 0666 8480</div>
          </div>
        </li>
        <!-- /.list-group-item -->
        <li class="list-group-item">
          <div class="row">
            <div class="col-5 text-nowrap text-right">TTL:</div>
            <div class="col">Tangerang, 11 november 2001</div>
          </div>
        </li>
        <!-- /.list-group-item -->
        <li class="list-group-item">
          <div class="row">
            <div class="col-5 text-nowrap text-right">Alamat:</div>
            <div class="col">LK III Simbarwaringin, Kec. Trimurjo, Kab. LamTeng</div>
          </div>
        </li>
        <!-- /.list-group-item -->
      </ul>
      
      <div class="text-right mt-3">
        <button class="btn bg-navy">
          <i class="fa fa-fw fa-edit"></i>
          edit
        </button>
        <button class="btn btn-danger">
          <i class="fa fa-fw fa-trash-alt"></i>
          hapus
        </button>
      </div>
    `);
    
    $('#staticModal').modal({ keyboard: false, backdrop: 'static' });
  });
  
  // $('.container-fluid').on('click','.btn-close_modal', (e) => {
  //   window.location.reload();
  // });
  
  // Chart Data Siswa
  let data_siswa = {
    labels: [
      'RPL', 
      'DP',
      'TKJ', 
      'TKR', 
      'Listrik', 
      'AC',
      'Pertanian'
    ],
    datasets: [
      {
        data: [125,100,79,90,80,65,95],
        backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de','#c678db'],
      }
    ]
  }
  
  let ctx = $('#chart-data_siswa').get(0).getContext('2d');
  let pieOptions = {
    maintainAspectRatio : false,
    responsive : true,
  }
  
  let pieChart = new Chart(ctx, {
    type: 'pie',
    data: data_siswa,
    options: pieOptions      
  });
});

// ------------------------------------------------------------------------------------------------------------------