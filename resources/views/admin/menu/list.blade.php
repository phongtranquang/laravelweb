@extends('admin.home')
@section('head')
   
@endsection
@section('dashboardcontent')
    {{-- <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Active</th>
                <th>Update</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            {{!! \App\Helpers\Helper::menu($menus) !!}}
        </tbody>
    </table>
    --}}
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Danh sách danh mục</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Active</th>
                <th>Update</th>
                <th>&nbsp;</th>
              </tr>
            </thead>
            <tbody>
                {{!! \App\Helpers\Helper::menu($menus) !!}}
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
@endsection

