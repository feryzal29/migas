@extends('layout.templateWeb') 
 
 @section('container')
 <div class="margin-top:20"></div>
 <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
  <div class="container">
      <div class="row">

          <div class="col-lg-8 col-12 mx-auto">
              <h1 class="text-white text-center">{{ $header->tag_line }}</h1>

              <h6 class="text-center">{{ $header->description }}</h6>
          </div>

      </div>
  </div>
</section>


<section class="featured-section">
  <div class="container">
      <div class="row justify-content-center">

          <div class="col-lg-4 col-12 mb-4 mb-lg-0">
              <div class="custom-block bg-white shadow-lg">
                  <a href="topics-detail.html">
                      <div class="d-flex">
                          <div>
                              <h5 class="mb-2">Profile</h5>

                              <p class="mb-0">Profile Kurva</p>
                          </div>
                      </div>

                      <img src="{{ asset('kurva/images/topics/undraw_Remote_design_team_re_urdx.png') }}" class="custom-block-image img-fluid" alt="">
                  </a>
              </div>
          </div>

          <div class="col-lg-6 col-12">
              <div class="custom-block custom-block-overlay">
                  <div class="d-flex flex-column h-100">
                      <img src="{{ asset('kurva/images/businesswoman-using-tablet-analysis.jpg') }}" class="custom-block-image img-fluid" alt="">

                      <div class="custom-block-overlay-text d-flex">
                          <div>
                              <h5 class="text-white mb-2">Visi dan Misi</h5>

                              <p class="text-white">Topic Listing Template includes homepage, listing page, detail page, and contact page. You can feel free to edit and adapt for your CMS requirements.</p>

                              <a href="topics-detail.html" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                          </div>
                      </div>

                      <div class="social-share d-flex">
                          {{-- <p class="text-white me-4">Share:</p> --}}

                          {{-- <ul class="social-icon">
                              <li class="social-icon-item">
                                  <a href="#" class="social-icon-link bi-twitter"></a>
                              </li>

                              <li class="social-icon-item">
                                  <a href="#" class="social-icon-link bi-facebook"></a>
                              </li>

                              <li class="social-icon-item">
                                  <a href="#" class="social-icon-link bi-pinterest"></a>
                              </li>
                          </ul> --}}

                          {{-- <a href="#" class="custom-icon bi-bookmark ms-auto"></a> --}}
                      </div>

                      <div class="section-overlay"></div>
                  </div>
              </div>
          </div>

      </div>
  </div>
</section>


<section class="explore-section section-padding" id="section_2">
  <div class="container">
      <div class="row">

          <div class="col-12 text-center">
              <h2 class="mb-4">Portofolio</h1>
          </div>

      </div>
  </div>

  <div class="container-fluid">
      <div class="row">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">Design</button>
              </li>

              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Marketing</button>
              </li>

              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance-tab-pane" type="button" role="tab" aria-controls="finance-tab-pane" aria-selected="false">Finance</button>
              </li>

              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="music-tab" data-bs-toggle="tab" data-bs-target="#music-tab-pane" type="button" role="tab" aria-controls="music-tab-pane" aria-selected="false">Music</button>
              </li>

              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education-tab-pane" type="button" role="tab" aria-controls="education-tab-pane" aria-selected="false">Education</button>
              </li>
          </ul>
      </div>
  </div>

  <div class="container">
      <div class="row">

          <div class="col-12">
              <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                      <div class="row">
                          <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                              <div class="custom-block bg-white shadow-lg">
                                  <a href="topics-detail.html">
                                      <div class="d-flex">
                                          <div>
                                              <h5 class="mb-2">Web Design</h5>

                                              <p class="mb-0">Topic Listing Template based on Bootstrap 5</p>
                                          </div>

                                          <span class="badge bg-design rounded-pill ms-auto">14</span>
                                      </div>

                                      <img src="{{ asset('kurva/images/topics/undraw_Remote_design_team_re_urdx.png') }}" class="custom-block-image img-fluid" alt="">
                                  </a>
                              </div>
                          </div>

                          <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                              <div class="custom-block bg-white shadow-lg">
                                  <a href="topics-detail.html">
                                      <div class="d-flex">
                                          <div>
                                              <h5 class="mb-2">Graphic</h5>

                                                  <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                          </div>

                                          <span class="badge bg-design rounded-pill ms-auto">75</span>
                                      </div>

                                      <img src="{{ asset('images/topics/undraw_Redesign_feedback_re_jvm0.png') }}" class="custom-block-image img-fluid" alt="">
                                  </a>
                              </div>
                          </div>

                          <div class="col-lg-4 col-md-6 col-12">
                              <div class="custom-block bg-white shadow-lg">
                                  <a href="topics-detail.html">
                                      <div class="d-flex">
                                          <div>
                                              <h5 class="mb-2">Logo Design</h5>

                                                  <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                          </div>

                                          <span class="badge bg-design rounded-pill ms-auto">100</span>
                                      </div>

                                      <img src="{{ asset('kurva/images/topics/colleagues-working-cozy-office-medium-shot.png') }}" class="custom-block-image img-fluid" alt="">
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
                      <div class="row">
                          <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                  <div class="custom-block bg-white shadow-lg">
                                      <a href="topics-detail.html">
                                          <div class="d-flex">
                                              <div>
                                                  <h5 class="mb-2">Advertising</h5>

                                                  <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                              </div>

                                              <span class="badge bg-advertising rounded-pill ms-auto">30</span>
                                          </div>

                                          <img src="{{ asset('images/topics/undraw_online_ad_re_ol62.png') }}" class="custom-block-image img-fluid" alt="">
                                      </a>
                                  </div>
                              </div>

                              <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                  <div class="custom-block bg-white shadow-lg">
                                      <a href="topics-detail.html">
                                          <div class="d-flex">
                                              <div>
                                                  <h5 class="mb-2">Video Content</h5>

                                                  <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                              </div>

                                              <span class="badge bg-advertising rounded-pill ms-auto">65</span>
                                          </div>

                                          <img src="{{ asset('kurva/images/topics/undraw_Group_video_re_btu7.png') }}" class="custom-block-image img-fluid" alt="">
                                      </a>
                                  </div>
                              </div>

                              <div class="col-lg-4 col-md-6 col-12">
                                  <div class="custom-block bg-white shadow-lg">
                                      <a href="topics-detail.html">
                                          <div class="d-flex">
                                              <div>
                                                  <h5 class="mb-2">Viral Tweet</h5>

                                                  <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                              </div>

                                              <span class="badge bg-advertising rounded-pill ms-auto">50</span>
                                          </div>

                                          <img src="images/topics/undraw_viral_tweet_gndb.png" class="custom-block-image img-fluid" alt="">
                                      </a>
                                  </div>
                              </div>
                          </div>
                    </div>

                  <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab" tabindex="0">   <div class="row">
                          <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                              <div class="custom-block bg-white shadow-lg">
                                  <a href="topics-detail.html">
                                      <div class="d-flex">
                                          <div>
                                              <h5 class="mb-2">Investment</h5>

                                              <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                          </div>

                                          <span class="badge bg-finance rounded-pill ms-auto">30</span>
                                      </div>

                                      <img src="images/topics/undraw_Finance_re_gnv2.png" class="custom-block-image img-fluid" alt="">
                                  </a>
                              </div>
                          </div>

                          <div class="col-lg-6 col-md-6 col-12">
                              <div class="custom-block custom-block-overlay">
                                  <div class="d-flex flex-column h-100">
                                      <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                                      <div class="custom-block-overlay-text d-flex">
                                          <div>
                                              <h5 class="text-white mb-2">Finance</h5>

                                              <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint animi necessitatibus aperiam repudiandae nam omnis</p>

                                              <a href="topics-detail.html" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                          </div>

                                          <span class="badge bg-finance rounded-pill ms-auto">25</span>
                                      </div>

                                      <div class="social-share d-flex">
                                          <p class="text-white me-4">Share:</p>

                                          <ul class="social-icon">
                                              <li class="social-icon-item">
                                                  <a href="#" class="social-icon-link bi-twitter"></a>
                                              </li>

                                              <li class="social-icon-item">
                                                  <a href="#" class="social-icon-link bi-facebook"></a>
                                              </li>

                                              <li class="social-icon-item">
                                                  <a href="#" class="social-icon-link bi-pinterest"></a>
                                              </li>
                                          </ul>

                                          <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                                      </div>

                                      <div class="section-overlay"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab" tabindex="0">
                      <div class="row">
                          <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                              <div class="custom-block bg-white shadow-lg">
                                  <a href="topics-detail.html">
                                      <div class="d-flex">
                                          <div>
                                              <h5 class="mb-2">Composing Song</h5>

                                              <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                          </div>

                                          <span class="badge bg-music rounded-pill ms-auto">45</span>
                                      </div>

                                      <img src="images/topics/undraw_Compose_music_re_wpiw.png" class="custom-block-image img-fluid" alt="">
                                  </a>
                              </div>
                          </div>

                          <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                              <div class="custom-block bg-white shadow-lg">
                                  <a href="topics-detail.html">
                                      <div class="d-flex">
                                          <div>
                                              <h5 class="mb-2">Online Music</h5>

                                              <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                          </div>

                                          <span class="badge bg-music rounded-pill ms-auto">45</span>
                                      </div>

                                      <img src="images/topics/undraw_happy_music_g6wc.png" class="custom-block-image img-fluid" alt="">
                                  </a>
                              </div>
                          </div>

                          <div class="col-lg-4 col-md-6 col-12">
                              <div class="custom-block bg-white shadow-lg">
                                  <a href="topics-detail.html">
                                      <div class="d-flex">
                                          <div>
                                              <h5 class="mb-2">Podcast</h5>

                                              <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                          </div>

                                          <span class="badge bg-music rounded-pill ms-auto">20</span>
                                      </div>

                                      <img src="images/topics/undraw_Podcast_audience_re_4i5q.png" class="custom-block-image img-fluid" alt="">
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="tab-pane fade" id="education-tab-pane" role="tabpanel" aria-labelledby="education-tab" tabindex="0">
                      <div class="row">
                          <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                              <div class="custom-block bg-white shadow-lg">
                                  <a href="topics-detail.html">
                                      <div class="d-flex">
                                          <div>
                                              <h5 class="mb-2">Graduation</h5>

                                              <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                          </div>

                                          <span class="badge bg-education rounded-pill ms-auto">80</span>
                                      </div>

                                      <img src="images/topics/undraw_Graduation_re_gthn.png" class="custom-block-image img-fluid" alt="">
                                  </a>
                              </div>
                          </div>

                          <div class="col-lg-6 col-md-6 col-12">
                              <div class="custom-block bg-white shadow-lg">
                                  <a href="topics-detail.html">
                                      <div class="d-flex">
                                          <div>
                                              <h5 class="mb-2">Educator</h5>

                                              <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                          </div>

                                          <span class="badge bg-education rounded-pill ms-auto">75</span>
                                      </div>

                                      <img src="images/topics/undraw_Educator_re_ju47.png" class="custom-block-image img-fluid" alt="">
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

      </div>
  </div>
</section>


<section class="timeline-section section-padding" id="section_3">
  <div class="section-overlay"></div>

  <div class="container">
      <div class="row">

          <div class="col-12 text-center">
              <h2 class="text-white mb-4">How does it work?</h1>
          </div>

          <div class="col-lg-10 col-12 mx-auto">
              <div class="timeline-container">
                  <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                      <div class="list-progress">
                          <div class="inner"></div>
                      </div>

                      @foreach ($works as $key => $item)

                      <li>
                        <h4 class="text-white mb-3">{{ $item->name }}</h4>

                        <p class="text-white">{{ $item->desc }}</p>

                        <div class="icon-holder">
                          <i @if ($key === 0)
                            class="bi-search"
                            @elseif ($key === 1)
                            class="bi-bookmark"
                            @elseif ($key === 2)
                            class="bi-book"
                            @endif
                            ></i>
                          {{-- <i class="bi-search"></i> --}}
                        </div>
                    </li>    

                      @endforeach

                      
                      {{-- <li>
                          <h4 class="text-white mb-3">The team implements the proposed system</h4>

                          <p class="text-white">The team makes the clients dream come true by creating the system based on the agreed requirement.</p>

                          <div class="icon-holder">
                            <i class="bi-bookmark"></i>
                          </div>
                      </li>

                      <li>
                          <h4 class="text-white mb-3">Client gives feedback about the finished system.</h4>

                          <p class="text-white">The team improve the system based on the client's feedback.</p>

                          <div class="icon-holder">
                            <i class="bi-book"></i>
                          </div>
                      </li> --}}
                  </ul>
              </div>
          </div>

      </div>
  </div>
</section>





<section class="contact-section section-padding section-bg" id="section_5">
  <div class="container">
      <div class="row">

          <div class="col-lg-12 col-12 text-center">
              <h2 class="mb-5">Get in touch</h2>
          </div>

          <div class="col-lg-5 col-12 mb-4 mb-lg-0">
              {{-- <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.065641062665!2d-122.4230416990949!3d37.80335401520422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858127459fabad%3A0x808ba520e5e9edb7!2sFrancisco%20Park!5e1!3m2!1sen!2sth!4v1684340239744!5m2!1sen!2sth" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
              {!! $contact->map !!}
          </div>

          <div class="col-lg-4 ">
              <h4 class="mb-3">Head office</h4>

              <p>{{ $contact->location }}</p>

              <hr>

              <p class="d-flex align-items-center mb-1">
                  <span class="me-2">Phone</span>

                  <a href="tel: 305-240-9671" class="site-footer-link">
                    {{ $contact->phone }}
                  </a>
              </p>

              <p class="d-flex align-items-center">
                  <span class="me-2">Email</span>

                  <a href="mailto:{{ $contact->email }}" class="site-footer-link">
                    {{ $contact->email }}
                  </a>
              </p>
          </div>


      </div>
  </div>
</section>
 
 @endsection
