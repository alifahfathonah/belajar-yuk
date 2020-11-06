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
    
    $('#staticModal').modal({ keyboard: false, backdrop: 'static' });
  });
  
  $('.container-fluid').on('click','.btn-close_modal', (e) => {
    window.location.reload();
  });
});

// ---------------------------------------------------------------------------