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

  <form method="post
  " action="{{url('/admin/user/store')}}" enctype="multipart/form-data" autocomplete="chrome-off">
   {{ csrf_field() }}  
   <input style="display: none" type="email" name="fakeusernameremembered" />
   <input style="display: none" type="password" name="fakepasswordremembered" />
   
  <div class="form-row">
      <div class="form-group col-md-1">
      </div>
    <div class="form-group col-md-6">
      <div class="form-group col-md-12">
        <label for="inputEmail4">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="name"   value="{{$data->name}}">
        @error('name')
          <div class="alert" style="color: red;padding-left: 0px;">{{ $message }}</div>
            @enderror
      </div>
      <div class="form-group col-md-12">
        <label for="inputEmail4">E Mail</label>
        <input type="email" class="form-control" id="student_email" name="email" placeholder="E Mail" autocomplete="nope" value="{{$data->email}}">
        @error('email')
        <div class="alert" style="color: red;padding-left: 0px;">{{ $message }}</div>
        @enderror
      </div>
    <div class="form-group col-md-12">
      <label for="inputEmail4">Country</label>
      <input type="text" class="form-control" id="country" name="country" placeholder="Country" value="{{$data->country}}">
      @error('country')
      <div class="alert" style="color: red;padding-left: 0px;">{{ $message }}</div>
      @enderror
    </div>

   <div class="form-group col-md-12" style="padding-bottom: 10px;">
            <label for="inputState">State</label>
          <select id="inputState" class="form-control" name="status">
       <option value="1" {{$data->status=='1'?'selected':''}}>Active</option>
          <option value="2" {{$data->status=='2'?'selected':''}}>Inactive</option>
          </select>
          @error('status')
        <div class="alert" style="color: red;padding-left: 0px;">{{ $message }}</div>
        @enderror
    </div>

  </div>
  <div class="form-group col-md-1">
  </div>
  <div class="form-group col-md-4">
      <label for="inputZip float-left" style="align-center">User Image</label>
      <input type="file" name="image" style="text-align: center;" id="input-file-now-custom-2 " value="{{$data->image}}" data-default-file="{{url('upload/user/'.$data->image)}}" class="dropify" data-max-height="3000" data-height="350" />
      @error('image')
      <div class="alert" style="color: red;padding-left: 0px;">{{ $message }}</div>
      @enderror
    </div>
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
