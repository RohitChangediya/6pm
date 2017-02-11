<script src="assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="assets/vendors/jquery-ui-1.12.0/jquery-ui.js"></script>
<script src="assets/vendors/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/vendors/material.min.js" type="text/javascript"></script>
<script src="assets/vendors/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="assets/vendors/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="assets/vendors/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="assets/vendors/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="assets/vendors/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/vendors/bootstrap-notify.js"></script>
<!-- DateTimePicker Plugin -->
<script src="assets/vendors/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="assets/vendors/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="assets/vendors/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8n7MgIqAxtfPjslr5aIJWi_xf9huw__0"></script>
<!-- Select Plugin -->
<script src="assets/vendors/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="assets/vendors/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="assets/vendors/sweetalert2.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="assets/vendors/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="assets/vendors/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="assets/vendors/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="assets/js/turbo.js"></script>
<script src="assets/vendors/dropzone/dropzone.min.js"></script>

<!--Js for exporting tables-->
<script type="text/javascript" src="assets/js/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="assets/js/jspdf/jspdf.js"></script>
<script type="text/javascript" src="assets/js/jspdf/libs/base64.js"></script>
<script type="text/javascript" src="assets/js/tableExport.js"></script>
<script type="text/javascript" src="assets/js/jquery.base64.js"></script>
<script type="text/javascript" src="assets/js/html2canvas.js"></script>


<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>


<script>
    function logfunc()
    {
        swal({
          title: 'Are you sure?',
          text: "Confirm To Logout",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Confirm',
          cancelButtonText: 'No, cancel!',
          confirmButtonClass: 'btn btn-success',
          cancelButtonClass: 'btn btn-danger',
          buttonsStyling: false
        }).then(function () {
          swal(
            'Logging Out Successfully !'
          )
        }, function (dismiss) {
          // dismiss can be 'cancel', 'overlay',
          // 'close', and 'timer'
          if (dismiss === 'cancel') {
            swal(
              'Logout Cancelled'
            )
          }
        })
    };
</script>
