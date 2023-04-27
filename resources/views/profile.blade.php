@extends('layout.templateWeb') 
 
 @section('container')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url({{ asset('Images/migas.jpeg') }});">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>{{ $profil->judul }}</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>About</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="{{ asset('Images/migas.jpeg') }}" class="img-fluid" alt="">
            <a href="{{ $videos->link_video }}" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>Profile</h3>
            <p>
              {!! $profil->isi !!}
            </p>
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>VISI</h5>
                  <p>{!! $visi->visi !!}</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>MISI</h5>
                  <p>{!! $visi->misi !!}</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>MOTO</h5>
                  <p>{!! $visi->moto !!}</p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Our Team</span>
          <h2>Our Team</h2>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
        
            @foreach ($myteams as $item)
            @php $path = Storage::url('images/'.$item->path_image); @endphp
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="member">
                  <img src="{{ asset($item->path_image) }}" width="300" class="img-fluid" alt="">
                  <div class="member-content">
                    <h4>{{ $item->name }}</h4>
                    <span>{{ $item->jabatan }}</span>
                    <p>
                      {{ $item->moto }}
                    </p>
                  </div>
                </div>
              </div><!-- End Team Member -->
            @endforeach

        </div>

      </div>
    </section><!-- End Our Team Section -->




  </main><!-- End #main -->
@endsection
