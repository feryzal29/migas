@extends('layout.adminLayout') 
 
 @section('container')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Gallery Video POST</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Gallery Video POST</li>
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
            <h3 class="card-title">Gallery Video POST</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="{{ route('gallery-video.post') }}" method="post" enctype="multipart/form-data">
              @csrf
            <div class="form-group">
              <label>Judul</label>
              <input type="text" class="form-control" name="judul">
            </div>
            <div class="form-group">
              <label>Link Video</label>
              <input type="text" class="form-control" name="link_video">
            </div>
              <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status">
                  <option value="1">Bottom</option>
                  <option value="2">Top</option>
                </select>
              </div>
            <div class="form-group">
              <label>Foto</label>
              <input type="file" class="form-control" name="path_image">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary float-right" value="Simpan">
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