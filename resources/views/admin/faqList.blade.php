@extends('layout.adminLayout') 
 
 @section('container')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">List FAQ</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List FAQ</li>
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
            <h3 class="card-title">List FAQ</h3>
            <a href="{{ route('faq-create.create') }}" class="btn btn-success float-right">Tambah Data</a>
            {{-- <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Data</button> --}}
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="tambahcategories" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Judul</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($data as $item)
                <tr>
                  <td>{{ $item->judul }}</td>
                  <td>
                    <a href="{{ route('faq-view.view',$item->id) }}" class="btn btn-success">Preview</a>
                    <a onclick="return confirm('Are you sure?')" href="{{ route('faq-delete.delete',$item->id) }}" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Judul</th>
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