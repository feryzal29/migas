@extends('layout.templateWeb') 
 
 @section('container')
     <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">{{ $header->tag_line }}</h2>
          <p data-aos="fade-up" data-aos-delay="100">{{ $header->description }}</p>

          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Clients</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                <p>Support</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                <p>Workers</p>
              </div>
            </div><!-- End Stats Item -->

          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">


      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="{{ asset('Images/migas.jpeg') }}" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=_1ZWYKnak9k" class="glightbox play-btn"></a>
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

    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>LAST POST</span>
          <h2>LAST POST</h2>

        </div>

        <div class="row gy-4">

          @foreach ($posting as $item)
          @php $path = Storage::url('images/'.$item->path_image); @endphp
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <center>
                <div class="card-img">
                  <img src="{{ asset($item->path_image) }}" alt="" class="img-fluid">
                </div>
              </center>
              <h3><a href="{{ route('postdetail',$item->id) }}" class="stretched-link">{{ $item->judul }}</a></h3>
              <p>{!! $item->isi !!}</p>
            </div>
          </div><!-- End Card Item -->
          @endforeach
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

          <div class="col-md-5">
            <img src="assets/img/features-1.jpg" class="img-fluid" alt="">
          </div>


      </div>
    </section><!-- End Features Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Frequently Asked Questions</span>
          <h2>Frequently Asked Questions</h2>

        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-10">

            <div class="accordion accordion-flush" id="faqlist">

              @foreach ($faq as $key=>$item)
            
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-{{ $key }}">
                    <i class="bi bi-question-circle question-icon"></i>
                    {{ $item->judul }}
                  </button>
                </h3>
                <div id="faq-content-{{ $key }}" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    {!! $item->isi !!}
                  </div>
                </div>
              </div><!-- # Faq item-->
              @endforeach

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->

 
 @endsection
