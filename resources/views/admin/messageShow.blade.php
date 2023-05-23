@extends('layout.adminLayout') 
 
 @section('container')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Pertanyaan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Detail Pertanyaan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
  
      <div class="container-fluid">
        <div class="mb-3">
          <a href="{{ route('message.index') }}" class="btn btn-success">Back</a>
        </div>
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Detail Pertanyaan</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div>
              <h2>subject : {{ $message->subject }}</h2>
            <h6>Dari : {{ $message->name }}</h6>
            <h6>Email : {{ $message->email }}</h6>
            </div>
            <div style="float-left">
              <p>Pertanyaan : {{ $message->message }}</p>
            </div>
          </div>
            
          </div>
          <!-- /.card-body -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection