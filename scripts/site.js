
$(function(){
  $('#ddlInitProgram').change(function() {
      var prog = this.value;
      if (prog == "1") {
          $('#cbSSID').prop('checked', true);
      }
      else {
          $('#cbSSID').prop('checked', false);
      }
  });
});

$(function() {
     $( ".DatePicker" ).datepicker();
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
