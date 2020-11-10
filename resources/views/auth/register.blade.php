<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dr.Kine</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{asset('login_theam/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_theam/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_theam/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_theam/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_theam/vendor/animate/animate.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('login_theam/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_theam/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_theam/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('login_theam/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_theam/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('login_theam/css/main1.css')}} ">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- <link href="{{asset('css/form.css')}}" rel="stylesheet" id="bootstrap-css"> -->


 
  <!-- Custom styles for this template-->
  <link href="{{asset('admin_theme/css/sb-admin-2.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('dropify/dist/css/dropify.min.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--========================================================login_theam=======================================-->
</head>
<body>
    <div class="limiter"> 
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form"  method="POST" action="{{ url('user/register/save') }}"  enctype="multipart/form-data" >
                    @csrf 
                    
                    <span class="login100-form-title p-b-34">
                        Account Sign Up
                    </span>
                        <input style="display: none" type="email" name="fakeusernameremembered" />
                       <input style="display: none" type="password" name="fakepasswordremembered" />
                       
                      <div class="form-row "style="width:100%; margin-right: 10px;">

                        <div class="form-group col-md-6 ">
                          <div class="form-group col-md-12">
                            <label for="inputEmail4">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            <span class="focus-input100"></span>
                            @error('name')
                              <div class="alert" style="color: red;padding-left: 0px;">{{ $message }}</div>
                                @enderror
                          </div>
                          <div class="form-group col-md-12">
                            <label for="inputEmail4">E Mail</label>
                            <input type="email" class="form-control" id="student_email" name="email" placeholder="E Mail" autocomplete="nope">
                            @error('email')
                            <div class="alert" style="color: red;padding-left: 0px;">{{ $message }}</div>
                            @enderror
                          </div>
                        <div class="form-group col-md-12">
                          <label for="inputEmail4">Country</label>
                          <input type="text" class="form-control" id="country" name="country" placeholder="Country">
                          @error('country')
                          <div class="alert" style="color: red;padding-left: 0px;">{{ $message }}</div>
                          @enderror
                        </div>




                        <div class="form-group col-md-12">
                          <label for="inputEmail4">Password</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="new-password">
                          @error('password')
                          <div class="alert" style="color: red;padding-left: 0px;">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group col-md-12">
                          <label for="inputEmail4">Confirm Password</label>
                          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                          @error('password_confirmation')
                          <div class="alert" style="color: red;padding-left: 0px;">{{ $message }}</div>
                          @enderror
                        </div>

                       
                      </div>
                      
                      <div class="form-group col-md-6">
                          <label for="inputZip float-left" >User Image</label>
                          <input type="file" name="image" style="text-align: center;" id="input-file-now-custom-2 " class="dropify" data-max-height="3000" data-height="300" />
                          @error('image')
                          <div class="alert" style="color: red;padding-left: 0px;">{{ $message }}</div>
                          @enderror
                        </div>
                         
                        <div class="form-group col-md-4">
                        <button type="submit" class="btn" style="color: ">Submit</button>
                     

                        </div>
                      </div>


                   <!--  <div class="w-full text-center">
                        <a href="#" class="txt3">
                            Sign Up
                        </a>
                    </div> -->
                </form>

                <div class="login100-more" style="background-image: url('Image/kine.jpeg');">
                    <a href="{{url('/')}}" class="btn  btn-lg txt3">
                              <i class="fa fa-chevron-left" style="" ></i> Back
                    </a>
                </div>
            </div>

        </div>

    </div>
    
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="{{asset('login_theam/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('login_theam/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('login_theam/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('login_theam/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('login_theam/vendor/select2/select2.min.js')}}"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
<!--===============================================================================================-->
    <script src="{{asset('login_theam/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('login_theam/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('login_theam/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('login_theam/js/main.js')}}"></script>



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


</body>
</html>