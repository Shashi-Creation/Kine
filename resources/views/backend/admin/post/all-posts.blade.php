@extends('backend.admin.layouts.master')

  @section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <a href="{{url('/admin/post/create')}}" class="btn btn-success btn-circle btn-lg"><i class="fas fa-plus"></i></a>
                  
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Company Table</h6>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th></th>
                      <th>Post Title</th>
                      <th>Image</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	                @foreach($view as $value)
                  <tr>
                    <td></td>
                    <td>{{$value->title}}</td>
                    <td><img src="{{asset('upload/post/'.$value->image)}}" width="80px" height="50px"></td>
                    <td>{{$value->created_at}}</td>

                    <td>
                         @if ($value->status == 1)
                     <span class="badge badge-success">Active</span>
                    @elseif ($value->status == 2)
                      <span class="badge badge-danger">Inactive</span>
                    @endif
                    </td>
                    
                    <td class="project-actions">
                          <a class="btn btn-info btn-circle btn-sm" href="{{url('/admin/post/view')}}/{{$value->id}}">
                              <i class="fa fa-eye">
                              </i>
                          </a>
                          <a class="btn btn-danger btn-circle btn-sm" href="{{url('/admin/post/edit')}}/{{$value->id}}">
                              <i class="fa fa-edit" aria-hidden="true"></i>
                              </i>
                          </a>
                         
                      </td>
                  </tr>
                  @endforeach


                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

@stop