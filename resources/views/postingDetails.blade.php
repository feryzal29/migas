@extends('layout.templateWeb') 
 
@section('container')
  
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url({{ asset('Images/migas.jpeg') }});">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Service Details</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Service Details</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="services-list">
            @foreach ($post_all as $item)
                <a href="{{ route('postdetail',$item->id) }}">{{ $item->judul }}</a>
            @endforeach
            </div>

          </div>

          <div class="col-lg-8">
            @php $path = Storage::url('images/'.$posting->path_image); @endphp
            <img src="{{ asset($posting->path_image) }}" width="800" alt="" class="img-fluid services-img">
            <h3>{{ $posting->judul }}</h3>
            <p>
              {!! $posting->isi !!}
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Service Details Section -->

  </main><!-- End #main -->

  @endsection


