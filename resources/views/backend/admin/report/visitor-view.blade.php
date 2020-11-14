
@extends('backend.admin.layouts.master')

  @section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><Center>Posts Table</Center></h6>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>IP Adrress</th>
                      <th>Country</th>
                      <th>Image</th>
                    </tr>
                  </thead>
                  <tbody>
                  	                @foreach($view as $value)
                  <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->ip_address}}</td>
                    <td>{{$value->country}}</td>
                    <td></td>
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