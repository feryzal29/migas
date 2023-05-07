@extends('layout.adminLayout') 
 
 @section('container')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Header</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Header</li>
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
            <h3 class="card-title">Header</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="{{ route('header.update',$data->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('put')
            <div class="form-group">
              <label>Site Name</label>
              <input type="text" class="form-control" name="site_name" value="{{ $data->site_name }}">
            </div>
            <div class="form-group">
              <label>Tag Line</label>
              <input type="text" class="form-control" name="tag_line" value="{{ $data->tag_line }}">
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" rows="3" name="description">
                {{ $data->description }}
              </textarea>
            </div>
            <div class="form-group">
              <label>Logo</label>
              <input type="file" class="form-control" name="path_logo">
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