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
  
  // Modal Create Siswa
  $('.container-fluid').on('click','#btn-create_siswa', (e) => {
    setupModal(null, 'tambah data siswa/i', null, `
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
          <select class="custom-select form-control" name="jurusan">
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
            <span class="input-group-text"><i class="fa fa-fw fa-hospital"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="Tempat Lahir" name="tmp_lahir">
        </div>
        <!-- /.input-group -->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-fw fa-calendar-alt"></i></span>
          </div>
          <input type="text" class="form-control dateRangePicker" placeholder="Tanggal Lahir" name="tgl_lahir">
        </div>
        <!-- /.input-group -->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-fw fa-address-card"></i></span>
          </div>
          <textarea class="form-control" rows="2" placeholder="Alamat Lengkap" name="alamat"></textarea>
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
  
  // Modal Detail Siswa
  $('.container-fluid').on('click','.btn-detail_siswa', (e) => {
    setupModal(null, 'detail data siswa/i', 'bg-indigo', `
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
            <div class="col-5 text-nowrap text-right">Tempat Lahir:</div>
            <div class="col">Tangerang</div>
          </div>
        </li>
        <!-- /.list-group-item -->
        <li class="list-group-item">
          <div class="row">
            <div class="col-5 text-nowrap text-right">Tanggal Lahir:</div>
            <div class="col">11/11/2001</div>
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
  
  // Modal Update Siswa 
  $('.container-fluid').on('click','.btn-update_siswa', (e) => {
    setupModal(null, 'perbarui data siswa/i', 'bg-navy', `
      <form action="/admin/siswa/update" method="post" id="form-update_siswa">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-fw fa-user"></i></span>
          </div>
          <input type="text" class="form-control" value="Nova Ardiansyah" placeholder="Nama Lengkap" name="nama_lengkap">
        </div>
        <!-- /.input-group -->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-fw fa-id-card"></i></span>
          </div>
          <input type="text" class="form-control" value="103/RPL/2017" placeholder="NIS/NISN" name="nis-nisn">
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
            <option value="">X</option>
            <option value="">XI</option>
            <option value="" selected>XII</option>
          </select>
        </div>
        <!-- /.input-group -->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-fw fa-industry"></i></span>
          </div>
          <select class="custom-select form-control" name="jurusan">
            <option value="" selected>rekayasa perangkat lunak</option>
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
          <input type="text" class="form-control" value="0895 0666 8480" placeholder="No. HP" name="no_hp">
        </div>
        <!-- /.input-group -->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-fw fa-hospital"></i></span>
          </div>
          <input type="text" class="form-control" value="Tangerang" placeholder="Tempat Lahir" name="tmp_lahir">
        </div>
        <!-- /.input-group -->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-fw fa-calendar-alt"></i></span>
          </div>
          <input type="text" class="form-control dateRangePicker" value="11/11/2001" placeholder="Tanggal Lahir" name="tgl_lahir">
        </div>
        <!-- /.input-group -->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-fw fa-address-card"></i></span>
          </div>
          <textarea class="form-control" rows="2" placeholder="Alamat Lengkap" 
          name="alamat">LK III, Simbarwaringin, Kec. Trimurjo, Kab. LamTeng</textarea>
        </div>
        <!-- /.input-group -->
        
        <div class="text-right text-nowrap">
          <button type="button" class="btn text-indigo d-inline btn-detail_siswa">
            kembali
          </button>
          
          <button type="submit" class="btn bg-indigo d-inline">
            <i class="fa fa-fw fa-paper-plane align-middle"></i>
            simpan
          </button>
        </div>
      </form>
    `);
    showModal();
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
          90
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