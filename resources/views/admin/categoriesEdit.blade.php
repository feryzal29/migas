@extends('layout.adminLayout') 
 
 @section('container')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Categories</li>
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
            <h3 class="card-title">Categories</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="{{ route('categories.update',$data->id) }}" method="post">
              @csrf
              @method('put')
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" name="name" value="{{ $data->name }}">
            </div>
            <div class="form-group">
              <label>Slug</label>
              <input type="text" class="form-control" name="slug" value="{{ $data->slug }}">
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

  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Categories</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('categories.store') }}" method="POST">
            @csrf
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="name" placeholder="Nama">
          </div>
          <div class="form-group">
            <label>Slug</label>
            <input type="text" class="form-control" name="slug" placeholder="Slug">
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="SIMPAN">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  

  @endsection