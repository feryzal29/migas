@extends('layout.adminLayout') 
 
 @section('container')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">List Posting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List Posting</li>
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
            <h3 class="card-title">List Postingan</h3>
            {{-- <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Data</button> --}}
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="tambahcategories" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Gambar</th>
                <th>Slug</th>
                <th>Tanggal</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($data as $item)
                 @php $path = Storage::url('images/'.$item->path_image); @endphp
                <tr>
                  <td>{{ $item->judul }}</td>
                  <td>{{ $item->categories->name }}</td>
                  <td><img src="{{ asset($item->path_image) }}" width="80" height="80" alt="" srcset=""></td>
                  <td>{{ $item->slug }}</td>
                  <td>{{ $item->created_at }}</td>
                  <td>
                    <a href="" class="btn btn-primary">Show</a>
                    <a href="{{ route('posting.show',$item->id) }}" class="btn btn-success">Edit</a>
                    <a onclick="return confirm('Are you sure?')" href="{{ route('posting.delete',$item->id) }}" class="btn btn-danger">Delete</a>
                  </td>
                </tr>  
                @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Gambar</th>
                <th>Slug</th>
                <th>Tanggal</th>
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