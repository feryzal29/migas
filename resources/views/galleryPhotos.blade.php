@extends('layout.templateWeb') 
 
@section('container')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url({{ asset('Images/migas.jpeg') }});">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>GALLERY PHOTOS</h2>
              
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Gallery Photos</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->


    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Gallery Photos</span>
          <h2>Gallery Photos</h2>

        </div>

        <div class="row gy-4">
          @foreach ($photo as $item)
            @php $path = Storage::url('images/'.$item->path_image); @endphp
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card" style="border: 0;">
                  <div class="card-img">
                    <div class="thumbnail">
                      <img src="{{ asset($item->path_image) }}" width="400">
                    </div> 
                  </div>
                  
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