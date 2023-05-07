@extends('layout.adminLayout') 
 
 @section('container')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Contact</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact</li>
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
            <h3 class="card-title">Contact</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="{{ route('contact.update',$data->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('put')
            <div class="form-group">
              <label>Location</label>
              <input type="text" class="form-control" name="location" value="{{ $data->location }}">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="email" value="{{ $data->email }}">
            </div>
            <div class="form-group">
              <label>phone</label>
              <input type="text" class="form-control" name="phone" value="{{ $data->phone }}">
            </div>
            <div class="form-group">
              <label>Map</label>
              <textarea class="form-control" rows="3" name="map">
                {{ $data->map }}
              </textarea>
              <p>
                <a href="https://1map.com/map-embed">Ambil Script Location google map di link.</a>
              </p>
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