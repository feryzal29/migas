@extends('layout.adminLayout') 
 
 @section('container')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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
            <h3 class="card-title">Profile</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="{{ route('profile.update',$data->id ) }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('put')
            <div class="form-group">
              <label>Judul</label>
              <input type="text" class="form-control" name="judul" value="{{ $data->judul }}">
            </div>
            <div class="form-group">
              <label>Isi</label>
              <textarea id="summernote" name="isi">
                {{ $data->isi }}
              </textarea>
            </div>
            <div class="form-group">
              <label>Slug</label>
              <input type="text" class="form-control" name="slug" value="{{ $data->slug }}">
            </div>
            <div class="form-group">
              <label>Gambar</label>
              <input type="file" class="form-control" name="path_image">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-success float-right" value="Ganti">
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