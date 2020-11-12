@extends('backend.admin.layouts.master')

  @section('content')



<!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            
                  
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
              
            <div class="card-header py-3">


              <h6 class="m-0 font-weight-bold text-primary">View User</h6>

            </div>
            <div class="card-body">

              
              

 <!------------------------------------content --------------------------------------------------->

  <form method="post" action="{{url('/admin/user/edit/pwd/update')}}/{{$data->id}}" enctype="multipart/form-data" autocomplete="chrome-off">
   {{ csrf_field() }}  


    <div class="form-group col-md-12">
      <label for="inputEmail4">Password</label>
      <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password" autocomplete="new-password">
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
  <div class="form-group col-md-1">
  </div>

   

  <div class="form-row">
    
    
  </div>

  <div class="form-row">
    
  </div>
  <div class="form-group">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
    </div>
    <div class="form-group col-md-4">
      <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{url('/admin/user')}}"  class="btn btn-info">Back</a>

    </div>
    <div class="form-group col-md-4">
    </div>

  </div>
</form>

<!---------------------------------------------------------------- content ------------------------------------------------------------------>


            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

  @stop