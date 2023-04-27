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
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="{{ route('myteams.update',$data->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('put')
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" name="name" value="{{ $data->name }}">
            </div>
            <div class="form-group">
              <label>Jabatan</label>
              <input type="text" class="form-control" name="jabatan" value="{{ $data->jabatan }}">
            </div>
            <div class="form-group">
              <label>Moto</label>
              <input type="text" class="form-control" name="moto" value="{{ $data->moto }}">
            </div>
            <div class="form-group">
              <label>Foto</label>
              <input type="file" class="form-control" name="path_image">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary float-right" value="Ganti">
            </div>
            </form>
          </div>
            
          </div>
          <!-- /.card-body -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection