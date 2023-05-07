@extends('layout.adminLayout') 
 
 @section('container')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dokumen</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dokumen</li>
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
            <h3 class="card-title">Dokumen</h3>
            
            <a href="{{ route('dokumen.create') }}" class="btn btn-success float-right">Tambah Data</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="tambahcategories" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Jenis</th>
                <th>path</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($data as $item)
                @php $path = Storage::url('images/'.$item->path_foto); @endphp
                @php $path = Storage::url('files/'.$item->path_file); @endphp
                <tr>
                  <td>{{ $item->judul }}</td>
                  <td><img src="{{ asset($item->path_foto) }}" width="80" height="80" alt="" srcset=""></td>
                  <td>{{ $item->jenis }}</td>
                  <td><a href="{{ route('dokumen.download',$item->id) }}">{{ $item->judul }}</a></td>
                  {{-- <td><img src="{{ asset($item->path_image) }}" width="80" height="80" alt="" srcset=""></td> --}}
                  <td>
                    <a onclick="return confirm('Are you sure?')" href="{{ route('dokumen.destroy',$item->id) }}" class="btn btn-danger">Delete</a>
                  </td>
                </tr>  
                @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Jenis</th>
                <th>path</th>
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