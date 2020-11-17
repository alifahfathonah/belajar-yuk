$(document).ready(function() {
  const dateRangePicker = (target) => {
    // max age = 40 years old
    // min age = 18 years old
    let year    = new Date().getFullYear();
    let minYear = parseInt(year - 40);
    let maxYear = parseInt(year - 18);
    
    $(target).daterangepicker({
      singleDatePicker: true,
      showDropdowns: true,
      minYear: minYear,
      maxYear: maxYear,
      opens: 'center',
      drops: 'up',
      locale: {
        format: 'DD/MM/YYYY'
      },
    });
  }
  
  const showModal = (target = '#staticModal') => {
    $(target).modal({ keyboard: false, backdrop: 'static' });
    
    $('select') && $('select').select2({ theme: 'bootstrap4' });
    $('.dateRangePicker') && dateRangePicker('.dateRangePicker')
  }
  
  const setupModal = (modal, label, background, body) => {
    $(modal ? `${modal}Label` : `#staticModalLabel`).html(label);
    $('.modal-header').attr('class', background ? `modal-header ${background}` : 'modal-header bg-indigo');
    $('.modal-body').html(body ? body : $('.modal-body').html());
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
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-fw fa-pen"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="catatan (opsional)" name="catatan">
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
    e.preventDefault();
    setupModal(null, 'detail video pembelajaran', null, `
      <ul class="list-group">
        <li class="list-group-item">
          <div class="row">
            <div class="col-5 text-nowrap text-right">Judul Video:</div>
            <div class="col">Mengenal Jaringan Komputer LAN (Local Area Network)</div>
          </div>
        </li>
        <!-- /.list-group-item -->
        <li class="list-group-item">
          <div class="row">
            <div class="col-5 text-nowrap text-right">Channel:</div>
            <div class="col">Surya S.Kom, Gr</div>
          </div>
        </li>
        <!-- /.list-group-item -->
        <li class="list-group-item">
          <div class="row">
            <div class="col-5 text-nowrap text-right">Catatan:</div>
            <div class="col">Setelah menonton videonya harap konfirmasi 
            kepada guru pembimbing, untuk mengerjakan soal latihan.</div>
          </div>
        </li>
        <!-- /.list-group-item -->
        <li class="list-group-item">
          <div class="row">
            <div class="col-5 text-nowrap text-right">Thumbnail:</div>
            <div class="col">
              <img 
                src="https://i.ytimg.com/vi/OXyweS45dy4/sddefault.jpg" 
                class="img-thumbnail" width="100"
                alt="mengenal jaringan lan"
              />
            </div>
          </div>
        </li>
        <!-- /.list-group-item -->
        <li class="list-group-item">
          <div class="row">
            <div class="col-5 text-nowrap text-right">Created At:</div>
            <div class="col">16 November 2020</div>
          </div>
        </li>
        <!-- /.list-group-item -->
        <li class="list-group-item">
          <div class="row">
            <div class="col-5 text-nowrap text-right">Updated At:</div>
            <div class="col">16 November 2020</div>
          </div>
        </li>
        <!-- /.list-group-item -->
      </ul>
      
      <div class="text-right mt-3">
        <button type="button" class="btn bg-navy btn-update_siswa">
          <i class="fa fa-fw fa-edit"></i>
          edit
        </button>
        <button type="button" class="btn btn-danger btn-delete_siswa">
          <i class="fa fa-fw fa-trash-alt"></i>
          hapus
        </button>
      </div>
    `);
    showModal();
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
      'PAI', 
      'Bahasa Inggris', 
      'Sastra', 
      'Seni Budaya',
      'Matematika',
      'Biologi',
      'Fisika'
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