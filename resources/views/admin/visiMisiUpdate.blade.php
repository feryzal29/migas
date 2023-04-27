@extends('layout.adminLayout') 
 
 @section('container')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Visi, Misi & Moto</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Visi, Misi & Moto</li>
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
            <h3 class="card-title">Visi, Misi & Moto</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="{{ route('visimisi.post') }}" method="post" enctype="multipart/form-data">
              @csrf
            <div class="form-group">
              <label>Visi</label>
              <textarea id="summernote" name="visi">
                @if ($data)
                    @if ($data->visi)
                        <p>{!! $data->visi !!}</p>
                    @else
                    <strong>Data Masih Kosong</strong>
                    @endif
                @else
                  <strong>Data Masih Kosong</strong>
                @endif
              </textarea>
            </div>
            <div class="form-group">
              <label>Misi</label>
              <textarea id="summernote2" name="misi">
                @if ($data)
                    @if ($data->misi)
                        <p>{!! $data->misi !!}</p>
                    @else
                    <strong>Data Masih Kosong</strong>
                    @endif
                @else
                  <strong>Data Masih Kosong</strong>
                @endif
              </textarea>
            </div>
            <div class="form-group">
              <label>Moto</label>
              <textarea id="summernote3" name="moto">
                @if ($data)
                @if ($data->moto)
                    <p>{!! $data->moto !!}</p>
                @else
                <strong>Data Masih Kosong</strong>
                @endif
            @else
              <strong>Data Masih Kosong</strong>
            @endif
              </textarea>
            </div>
            <div class="form-group">
              <label>Gambar</label>
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