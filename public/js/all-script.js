$(document).ready(function() {
  
  let dataTable = $('#dataTable').html();
  
  if(dataTable) {
    $('#dataTable').DataTable({
      info          : true,
      stateSave     : true,
      "pagingType"  : 'first_last_numbers',
      "language"    : {
        "decimal"     : ",",
        "thousands"   : ".",
        "lengthMenu"  : "Tampilkan: _MENU_",
        "zeroRecords" : "Maaf data yang anda cari tidak ditemukan.",
        "info"        : "_PAGE_ dari _PAGES_ halaman.",
        "infoEmpty"   : "Tidak terdapat data saat ini.",
        "infoFiltered": "(ditelusuri dari _MAX_ total data.)"
      },
    });
  }
  
  if($('select')) { $('select').select2({ theme: 'bootstrap4' }) };
});