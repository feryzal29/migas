@extends('layout.adminLayout') 
 
 @section('container')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">My Teams</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">My Teams</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
  
      <div class="container-fluid">
        
        <div class="card">
          <div class="card-header">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>	
                  <strong>{{ $message }}</strong>
                </div>  
              @endif
            <h3 class="card-title">My Teams</h3>
            
            <a href="{{ route('myteams.create') }}" class="btn btn-success float-right">Tambah Data</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="tambahcategories" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Moto</th>
                <th>Foto</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($data as $item)
                 @php $path = Storage::url('images/'.$item->path_image); @endphp
                <tr>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->jabatan }}</td>
                  <td>{{ $item->moto }}</td>
                  <td><img src="{{ asset($item->path_image) }}" width="80" height="80" alt="" srcset=""></td>
                  <td>
                    <a href="{{ route('myteams.show',$item->id) }}" class="btn btn-success">Edit</a>
                    <a onclick="return confirm('Are you sure?')" href="{{ route('myteams.delete',$item->id) }}" class="btn btn-danger">Delete</a>
                  </td>
                </tr>  
                @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Moto</th>
                <th>Foto</th>
                <th>Action</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection