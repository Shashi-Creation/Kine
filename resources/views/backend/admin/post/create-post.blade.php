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


              <h6 class="m-0 font-weight-bold text-primary"><center>Add New Post</center></h6>

            </div>
            <div class="card-body">

              
 <!------------------------------------content --------------------------------------------------->

  <form method="post" action="{{url('/admin/post/store')}}" enctype="multipart/form-data" autocomplete="chrome-off">
   {{ csrf_field() }}  
   <input style="display: none" type="email" name="fakeusernameremembered" />
   <input style="display: none" type="password" name="fakepasswordremembered" />
   
  <div class="form-row">
      <div class="form-group col-md-1">
      </div>
    <div class="form-group col-md-10">
      <div class="form-group col-md-12">
        <label for="inputEmail4">Post Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Post Title">
        @error('name')
          <div class="alert" style="color: red;padding-left: 0px;">{{ $message }}</div>
            @enderror
      </div>

    <div class="form-group col-md-12">
      <label for="inputZip float-left" >Post Image</label>
      <input type="file" name="image" style="text-align: center;" id="input-file-now-custom-2 " class="dropify" data-max-height="30000" data-height="500" data-max-file-size="3M" />
      @error('image')
      <div class="alert" style="color: red;padding-left: 0px;">{{ $message }}</div>
      @enderror
    </div>

          <div class="form-group col-md-12">
        <label for="inputEmail4">You Tube URL</label>
        <input type="text" class="form-control" id="url" name="url" placeholder="Paste You Tube URL Here">
        @error('name')
          <div class="alert" style="color: red;padding-left: 0px;">{{ $message }}</div>
            @enderror
      </div>

    <div class="form-group col-md-12">
      <label for="inputEmail4">Content</label>
      <textarea class="form-control" id="content" name="content" rows="30"></textarea>
      @error('question')
      <div class="alert" style="color: red;padding-left: 0px;">{{ $message }}</div>
      @enderror
    </div>

   <div class="form-group col-md-12" style="padding-bottom: 10px;">
            <label for="inputState">State</label>
          <select id="inputState" class="form-control" name="status">
            <option value="">Choose ...</option>
            <option value="1">Active</option>
            <option value="2">Inactive</option>
          </select>
          @error('status')
        <div class="alert" style="color: red;padding-left: 0px;">{{ $message }}</div>
        @enderror
    </div>

  </div>
  <div class="form-group col-md-1">
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
    <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{url('admin/post')}}"  class="btn btn-info">Back</a>

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