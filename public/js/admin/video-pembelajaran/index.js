$(document).ready(function() {
  const showModal = (target = '#staticModal') => {
    $(target).modal({ keyboard: false, backdrop: 'static' });
  }
  
  const setupModal = (modal, label, background, body) => {
    $(modal ? `${modal}Label` : `#staticModalLabel`).html(label);
    $('.modal-header').addClass(background ? background : 'bg-indigo');
    $('.modal-body').html(body);
  }
  
  // Modal Create Video Pembelajaran
  $('.container-fluid').on('click','#btn-create-video_pembelajaran', (e) => {
    e.preventDefault();
    setupModal(null, `tambah video pembelajaran`, null, `
      <form action="/admin/video-pembelajaran/create" method="post" id="form-create-video_pembelajaran">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-fw fa-edit"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="judul video" name="judul">
        </div>
        <!-- /.input-group -->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-fw fa-link"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="url/link video" name="url">
        </div>
        <!-- /.input-group -->
        
        <div class="text-right text-nowrap">
          <button type="button" class="btn text-navy d-inline btn-close_modal">
            kembali
          </button>
          
          <button type="submit" class="btn bg-navy d-inline">
            <i class="fa fa-fw fa-paper-plane align-middle"></i>
            simpan
          </button>
        </div>
      </form>
    `);
    showModal();
  });
  
  // Modal Detail Video Pembelajaran
  $('.container-fluid').on('click','.btn-detail-video_pembelajaran', (e) => {
    
  });
  
  // Modal Update Video Pembelajaran 
  $('.container-fluid').on('click','.btn-update-video_pembelajaran', (e) => {
    
  });
  
  $('.container-fluid').on('click','.btn-close_modal', (e) => {
    $('#staticModal').modal('hide');
    // window.location.reload();
  });
  
  // Chart Data Siswa
  let data_siswa = {
    labels: [
      'RPL', 
      'TKJ', 
      'TKR', 
      'DP',
      'TPTU',
      'TJTL',
      'BKP'
    ],
    datasets: [
      {
        data: [
          130,
          100,
          84,
          97,
          110,
          135,
          90 // total 746
        ],
        backgroundColor : [
          '#f56954', 
          '#00a65a', 
          '#f39c12', 
          '#00c0ef', 
          '#3c8dbc', 
          '#d2d6de',
          '#c678db'
        ],
      }
    ]
  }
  
  let ctx = $('#chart-video_pembelajaran').get(0).getContext('2d');
  let pieOptions = {
    maintainAspectRatio : false,
    responsive : true
  }
  
  let pieChart = new Chart(ctx, {
    type: 'pie',
    data: data_siswa,
    options: pieOptions      
  });
});

// ------------------------------------------------------------------------------------------------------------------