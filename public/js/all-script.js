$(document).ready(function() {
  
  // Data Table
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
  
  // Select 2
  if($('select')) {
    $('select').select2({ theme: 'bootstrap4' });
  }
  
  // dateRangePicker
  const dateRangePicker = (target = '.dateRangePicker') => {
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
  
  $('.dateRangePicker') && dateRangePicker();
  
  $('.summernote') && $('.summernote').summernote();
});
/* +================================================++================================================++================================================++================================================+ */