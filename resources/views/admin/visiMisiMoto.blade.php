@extends('layout.adminLayout') 
 
 @section('container')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Visi, Misi dan Moto</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Visi, Misi dan Moto</li>
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
            <h2>PT Gresik Migas</h2>
            <div style="float-left">
              <img src="" width="500" alt="" srcset="">
            </div>
            <div>
             <h4>VISI</h4>
             <p>
              @if ($data)
                  @if ($data->visi)
                    <p>{!! $data->visi !!}</p>                      
                  @else
                      <p>Data Tidak Ditemukan</p>
                  @endif
              @else
                <p>Data Tidak Ditemukan</p>
              @endif
             </p>
            </div>
            <div>
              <h4>MISI</h4>
             <p>
              @if ($data)
                  @if ($data->misi)
                    <p>{!! $data->misi !!}</p>                      
                  @else
                      <p>Data Tidak Ditemukan</p>
                  @endif
              @else
                <p>Data Tidak Ditemukan</p>
              @endif
             </p>
             </div>
             <div>
              <h4>MOTO</h4>
             <p>
              @if ($data)
                  @if ($data->moto)
                    <p>{!! $data->moto !!}</p>                      
                  @else
                      <p>Data Tidak Ditemukan</p>
                  @endif
              @else
                <p>Data Tidak Ditemukan</p>
              @endif
             </p>
             </div>
            <div>
              @php
                $id = 1;   
              @endphp
              <a href="{{ route('visimisi.show',$id) }}" class="btn btn-success float-right">Update</a>
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