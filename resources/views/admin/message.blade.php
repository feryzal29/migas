@extends('layout.adminLayout') 
 
 @section('container')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">List Pertanyaan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List Pertanyaan</li>
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
            <h3 class="card-title">List Pertanyaan</h3>
            {{-- <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Data</button> --}}
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="d-flex">
              <a href="{{ route('message.index') }}" class="btn btn-success">Semua</a>
              <div class="mr-3"></div>
              <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{ route('message.index',['status'=>'sudah-dibaca']) }}" class="btn btn-primary">Dibaca</a>
                <a href="{{ route('message.index',['status'=>'belum-dibaca']) }}" class="btn btn-secondary">Belum Dibaca</a>
              </div>

            </div>
            
            <table id="messagesDataTables" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($data as $item)
                <tr>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->subject }}</td>
                  <td>{!! !is_null($item->read_at) ? '<span class="badge bg-primary">Sudah Dibaca</span>' : '<span class="badge bg-secondary">Belum Dibaca</span>' !!}</td>
                  <td>
                    <a href="{{ route('message.show',$item->id) }}" class="btn btn-success">View</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Status</th>
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