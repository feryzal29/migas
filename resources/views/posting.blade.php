@extends('layout.templateWeb') 
 
@section('container')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url({{ asset('Images/migas.jpeg') }});">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>POSTINGAN</h2>
              
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Postingan</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->


    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>POSTINGAN</span>
          <h2>POSTINGAN</h2>

        </div>

        <div class="row gy-4">
            @foreach ($posting as $data)
            @php $path = Storage::url('images/'.$data->path_image); @endphp
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                  <div class="card-img">
                    <center>
                    <img src="{{ asset($data->path_image) }}" width="400" alt="" class="img-fluid">
                    </center>
                </div>
                  <h3><a href="{{ route('postdetail',$data->id) }}" class="stretched-link">{{ $data->judul }}</a></h3>
                  <p>{{ $data->isi }}</p>
                </div>
              </div><!-- End Card Item -->                
            @endforeach


        </div>

      </div>
    </section><!-- End Services Section -->



  </main><!-- End #main -->
  @endsection

  <script>

  </script>