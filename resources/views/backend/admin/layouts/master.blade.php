<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dr.Kine</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('admin_theme/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admin_theme/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin_theme/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- <link href="{{asset('css/form.css')}}" rel="stylesheet" id="bootstrap-css"> -->


 
  <!-- Custom styles for this template-->
  <link href="{{asset('admin_theme/css/sb-admin-2.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('dropify/dist/css/dropify.min.css')}}">
</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!------------------------------------------------------- Sidebar -->
  @include('backend.admin.layouts.sidebar')
    <!----------------------------------------------------------------------------------------- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        


          <!-------------------------------------------------------- Topbar Navbar -->
                      @include('backend.admin.layouts.navbar')
        <!-- End of Topbar------------------------------------------------------------------------------------ -->

        <!-- Begin Page Content------------------------------------------------------------------------------- -->
              @yield('content')
      <!-- End of Main Content -------------------------------------------------------------------------------->
</div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('admin_theme/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('admin_theme/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('admin_theme/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('admin_theme/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('admin_theme/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('admin_theme/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('admin_theme/js/demo/chart-pie-demo.js')}}"></script>

<!-- data table plugin  upload -->
  <script src="{{asset('admin_theme/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('admin_theme/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
          <!-- Page level custom scripts -->
                 <script src="{{asset('admin_theme/js/demo/datatables-demo.js')}}"></script>
           <!-- data table plugin End -->

   <!-- Image  upload -->
   <script src="{{asset('dropify/dist/js/dropify.min.js')}}"></script>
   <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>




<!-- <script>
  $(document).ready(function() {
    var t = $('#dataTable').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'desc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );
</script> -->

    <!-- <script> 

              $(document).ready(function() {
                $('dataTable').DataTable();
            } )


    </script> -->

</body>

</html>



