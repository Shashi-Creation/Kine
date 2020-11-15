<style type="text/css">
  .content {
    width: 200px;
}
</style>

@extends('backend.admin.layouts.master')

  @section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><Center>Visitors Table</Center></h6>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>IP Adrress</th>
                      <th>Country</th>
                      <th style="width:50px;height: 50px;">Image</th>
                      <th >Time</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($view as $value)
                  <tr height="20">
                    <td>{{$value->id}}</td>
                    <td>{{$value->ip_address}}</td>
                    <td>{{$value->country}}</td>
                    <td width="20" height="20">
                      <div class="content" style="width: 100px; height: 20px;">
                     
                    </div>
                     
                    </td>
                    <td>{{$value->created_at}}</td>
                  </tr>
                  @endforeach
                    
               
                  </tbody>
                </table>
                 {!! $view->links() !!}
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

@stop