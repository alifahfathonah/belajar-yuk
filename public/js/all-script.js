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

  function readURL(input) {
    if (input.files && input.files[0]) {
      let reader = new FileReader();
      reader.readAsDataURL(input.files[0]);
      
      reader.onload = function (e) {
        $('.img_preview').attr('src', e.target.result);
      }
      
      $('.custom-file-label').html(input.files[0].name);
    }
  }
  
  $('.imageInput').change(function(){
   readURL(this);
  });
  
  let inputDate = $('.dateRangePicker');
  let midYear = parseInt($(inputDate).data('year') - 28);
  let maxYear = parseInt($(inputDate).data('year') - 18);
  
  if (inputDate) {
    $(inputDate).daterangepicker({
      singleDatePicker: true,
      showDropdowns: true,
      minYear: parseInt($(inputDate).data('year') - 40),
      maxYear: maxYear,
      "startDate": `11/11/${midYear}`,
      "opens": "right",
      locale: {
        format: 'DD/MM/YYYY'
      },
    });
  }
  
  let select2 = $('.select2');
  
  if(select2) {
    $(select2).select2({
      theme: "bootstrap4",
    });
  }
});