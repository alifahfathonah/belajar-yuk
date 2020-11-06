$(document).ready(function() {
  // Modal Create Siswa
  $('.container-fluid').on('click','#btn-create_siswa', (e) => {
    $('#staticModalLabel').html(`Tambah data siswa/i`);
    $('.modal-body').html(`
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
          <textarea class="form-control" rows="2" placeholder="Alamat Lengkap" name="alamat"></textarea>
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
    `);
    
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
  
  $('.container-fluid').on('click','.btn-close_modal', (e) => {
    window.location.reload();
  });
});

// ---------------------------------------------------------------------------