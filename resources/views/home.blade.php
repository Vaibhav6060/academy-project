@include('includes.header')
<main class="main">

    <!-- Hero Section -->
    @if($hero)
    <section id="hero" class="hero section dark-background">

      <img src="{{ asset('storage/' . $hero->image) }}" alt="Competitive Exam Coaching in Rajgurunagar - Police, Army, Talathi, MPSC" style="filter: blur(2px);" data-aos="fade-in">

      <div class="container">
        <h2 data-aos="fade-up" data-aos-delay="100">
          {{ $hero->heading }}
        </h2>
        <p data-aos="fade-up" data-aos-delay="200" class="text-white">
          {{ $hero->subheading }}
        </p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="{{ $hero->button_url }}" class="btn-get-started" title="Explore Competitive Exam Courses">{{ $hero->button_text }}</a>
        </div>
      </div>

    </section>
    @endif

    @if($batches->isNotEmpty())
      <section class="marquee-section py-2 text-white" style="background-color: #1C00B8;">
        <div class="container">
          <marquee behavior="scroll" direction="left" scrollamount="10" onmouseover="this.stop();" onmouseout="this.start();">
            @foreach($batches as $batch)
              <span class="me-5">
                📣 <strong>{{ $batch->batch_name }}</strong> | 
                Duration: {{ $batch->batch_duration }} | 
                Launch Date: {{ \Carbon\Carbon::parse($batch->batch_launch_date)->format('d M Y') }} | 
                Timing: {{ $batch->batch_timing }}
              </span>
            @endforeach
          </marquee>
        </div>
      </section>
    @endif



    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/about-3.jpg" class="img-fluid" alt="Best Coaching for Police Bharti, Army, Talathi, MPSC in Rajgurunagar - Gagan Bharari Academy">
          </div>

          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Gagan Bharari Academy – Your Success Partner for Government Exam</h3>
            <p class="fst-italic">
                Trusted coaching institute in Rajgurunagar, Pune for competitive government exams preparation.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Expert faculty for Police Bharti & Army Recruitment exams.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Comprehensive syllabus for Talathi Bharti & MPSC Foundation.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Daily practice sessions and doubt-solving classes.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Regular mock tests to enhance exam readiness.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Physical training sessions for Bharti-focused batches.</span></li>
            </ul>
            <a href="{{ url('/about') }}" class="read-more"><span>Explore More</span><i class="bi bi-arrow-right mt-1"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->





    <!-- Counts Section -->
    <section id="counts" class="section counts light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Students Enrolled</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
              <p>Services Offered</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
              <p>Successful Events</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
              <p>Experienced Trainers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Counts Section -->




    <!-- Why Us Section -->
    <section id="why-us" class="section why-us">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Why Choose Gagan Bharari Academy?</h3>
              <p>
                At Gagan Bharari Academy, we offer an immersive learning experience with a focus on excellence, innovation, and personalized attention. Our dedicated team of educators ensures that each student receives quality guidance, empowering them to achieve their academic goals and succeed in competitive exams.
              </p>
              <div class="text-center">
                <a href="{{ url('about')}}" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

              <div class="col-xl-4">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Expert Faculty</h4>
                  <p>Our highly experienced and qualified faculty members provide in-depth knowledge and mentorship, ensuring that students are well-prepared for exams and their future careers.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Comprehensive Curriculum</h4>
                  <p>We offer a well-rounded curriculum that not only covers the core subjects but also focuses on developing critical thinking, problem-solving, and time management skills to excel in competitive exams.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>State-of-the-Art Facilities</h4>
                  <p>Our academy is equipped with modern teaching aids, interactive classrooms, and online resources that enhance the learning experience and make studying enjoyable.</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Why Us Section -->





   <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="features-item">
              <i class="bi bi-eye" style="color: #ffbb2c;"></i>
              <h3>Personalized Learning</h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="features-item">
              <i class="bi bi-infinity" style="color: #5578ff;"></i>
              <h3>Unlimited Resources</h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="features-item">
              <i class="bi bi-mortarboard" style="color: #e80368;"></i>
              <h3>Expert Faculty</h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="features-item">
              <i class="bi bi-nut" style="color: #e361ff;"></i>
              <h3>Holistic Growth</h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="features-item">
              <i class="bi bi-shuffle" style="color: #47aeff;"></i>
              <h3>Flexible Timings</h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="features-item">
              <i class="bi bi-star" style="color: #ffa76e;"></i>
              <h3>Result-Oriented</h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
            <div class="features-item">
              <i class="bi bi-x-diamond" style="color: #11dbcf;"></i>
              <h3>Modern Infrastructure</h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
            <div class="features-item">
              <i class="bi bi-camera-video" style="color: #4233ff;"></i>
              <h3>Online Classes</h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
            <div class="features-item">
              <i class="bi bi-command" style="color: #b2904f;"></i>
              <h3>Interactive Workshops</h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1000">
            <div class="features-item">
              <i class="bi bi-dribbble" style="color: #b20969;"></i>
              <h3>Mock Tests</h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1100">
            <div class="features-item">
              <i class="bi bi-activity" style="color: #ff5828;"></i>
              <h3>Peer Collaboration</h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1200">
            <div class="features-item">
              <i class="bi bi-brightness-high" style="color: #29cc61;"></i>
              <h3>Parent Engagement</h3>
            </div>
          </div><!-- End Feature Item -->

        </div>

      </div>

    </section><!-- /Features Section -->





    <!-- Courses Section -->
    <section id="courses" class="courses section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Popular Services</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row">

                @foreach($services->take(3) as $service)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4 {{ !$loop->first ? '' : '' }} {{ $loop->iteration > 2 ? 'mt-lg-0' : '' }}" data-aos="zoom-in" data-aos-delay="{{ 100 * $loop->iteration }}">
                        <div class="course-item d-flex flex-column h-100">
                            <img src="{{ asset('storage/' . $service->image) }}" class="img-fluid" alt="{{ $service->title }}">
                            <div class="course-content d-flex flex-column flex-grow-1">
                                <h3><a href="#">{{ $service->title }}</a></h3>
                                <p class="description">{{ $service->description }}</p>
                                <div class="trainer mt-auto d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn category enquiry-btn" data-service="{{ $service->title }}">Enquiry</button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->
                @endforeach

            </div>

            <!-- See All Services Button -->
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <a href="{{ url('/services') }}" class="btn btn-primary themecolorbutton">See All Services</a>
                </div>
            </div>

        </div>
    </section><!-- /Courses Section -->




    <!-- Faculties Section -->
    <section id="trainers-index" class="section trainers-index">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Faculties</h2>
        <p>Our Faculties</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row">
          @foreach($faculties->take(3) as $key => $faculty)
            <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="{{ ($key + 1) * 100 }}">
              <div class="member">
                <img src="{{ asset('storage/' . $faculty->faculty_image) }}" class="img-fluid" alt="{{ $faculty->faculty_name }}">
                <div class="member-content">
                  <h4>{{ $faculty->faculty_name }}</h4>
                  <span>{{ $faculty->faculty_experience }}</span>
                  <p>{{ $faculty->faculty_description }}</p>
                  <!-- <div class="social">
                    <a href="{{ $faculty->twitter }}"><i class="bi bi-twitter-x"></i></a>
                    <a href="{{ $faculty->facebook }}"><i class="bi bi-facebook"></i></a>
                    <a href="{{ $faculty->instagram }}"><i class="bi bi-instagram"></i></a>
                    <a href="{{ $faculty->linkedin }}"><i class="bi bi-linkedin"></i></a>
                  </div> -->
                </div>
              </div>
            </div><!-- End Team Member -->
          @endforeach
        </div>

        <!-- See All Services Button -->
        <div class="row mt-4">
          <div class="col-12 text-center">
            <a href="{{ url('/faculties') }}" class="btn btn-primary themecolorbutton">See All Faculties</a>
          </div>
        </div>
      </div>
    </section><!-- /Trainers Index Section -->

    <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Testimonials</h2>
      <p>What are they saying</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 1,
                "spaceBetween": 40
              },
              "1200": {
                "slidesPerView": 2,
                "spaceBetween": 20
              }
            }
          }
        </script>

        <div class="swiper-wrapper">

          @foreach($testimonials as $testimonial)
          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{ asset('storage/' . $testimonial->photo) }}" class="testimonial-img" alt="{{ $testimonial->name }}">
                <h3>{{ $testimonial->name }}</h3>
                <h4>{{ $testimonial->designation ?? 'Student' }}</h4>
                <div class="stars">
                  @for($i = 0; $i < 5; $i++)
                    <i class="bi bi-star-fill"></i>
                  @endfor
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>{{ $testimonial->testimonial }}</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->
          @endforeach

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- /Testimonials Section -->
</main>

@include('includes.footer')
