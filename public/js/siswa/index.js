$(document).ready(function() {
  $('.container-fluid').on('click','#btn-create_siswa',(e) => {
    $('#createSiswaModal').modal({
      keyboard: false,
      backdrop: 'static'
    });
  });
  
  
});

// ---------------------------------------------------------------------------