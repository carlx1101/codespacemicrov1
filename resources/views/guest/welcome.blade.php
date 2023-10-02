

<!DOCTYPE html>
<html lang="en" dir="">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Course | Front - Multipurpose Responsive Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{asset('assets2/vendor/bootstrap-icons/font/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets2/vendor/hs-mega-menu/dist/hs-mega-menu.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets2/vendor/swiper/swiper-bundle.min.css')}}">


  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{asset('assets2/css/theme.min.css')}}">
</head>

<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="navbar navbar-expand-lg navbar-end navbar-light">
    

    <div class="container">
      <nav class="js-mega-menu navbar-nav-wrap">
        <!-- Default Logo -->
        <a class="navbar-brand" href="../demo-course/index.html" aria-label="Front">
          <img class="navbar-brand-logo" src="../assets/svg/logos/logo.svg" alt="Logo">
        </a>
        <!-- End Default Logo -->

        <!-- Secondary Content -->
        <div class="navbar-nav-wrap-secondary-content">
          <!-- Search -->
          <div class="dropdown dropdown-course-search d-lg-none d-inline-block">
            <a class="btn btn-ghost-secondary btn-sm btn-icon" href="#" id="navbarCourseSearchDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi-search"></i>
            </a>

            <div class="dropdown-menu dropdown-card" aria-labelledby="navbarCourseSearchDropdown">
              <!-- Card -->
              <div class="card card-sm">
                <div class="card-body">
                  <form class="input-group input-group-merge">
                    <input type="text" class="form-control" placeholder="What do you want to learn?" aria-label="What do you want to learn?">
                    <div class="input-group-append input-group-text">
                      <i class="bi-search"></i>
                    </div>
                  </form>
                </div>
              </div>
              <!-- End Card -->
            </div>
          </div>
          <!-- End Search -->

          <div class="d-inline-block ml-auto">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarSignup" aria-controls="offcanvasNavbarSignup">
              <span class="d-none d-lg-inline-block">Get started</span>
              <i class="bi-person-fill d-lg-none"></i>
            </button>
          </div>
        </div>
        <!-- End Secondary Content -->

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-default">
            <i class="bi-list"></i>
          </span>
          <span class="navbar-toggler-toggled">
            <i class="bi-x"></i>
          </span>
        </button>
        <!-- End Toggler -->
      
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="../demo-course/index.html">Home</a>
            </li>
          
            <!-- Courses -->
            <li class="hs-has-sub-menu nav-item">
              <a id="coursesMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi-journals me-2"></i> Courses</a>

              <!-- Mega Menu -->
              <div class="hs-sub-menu dropdown-menu" aria-labelledby="coursesMegaMenu" style="min-width: 17rem;">
                <!-- Development -->
                <div class="hs-has-sub-menu nav-item">
                  <a id="developmentMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi-code-slash dropdown-item-icon"></i> Development</a>

                  <div class="hs-sub-menu dropdown-menu" aria-labelledby="developmentMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item" href="#">All Business</a>
                    <a class="dropdown-item" href="#">Finance</a>
                    <a class="dropdown-item" href="#">Entrepreneurship</a>
                    <a class="dropdown-item" href="#">Communications</a>
                    <a class="dropdown-item" href="#">Management</a>
                    <a class="dropdown-item" href="#">Sales</a>
                    <a class="dropdown-item" href="#">Strategy</a>
                    <a class="dropdown-item" href="#">Operations</a>
                    <a class="dropdown-item" href="#">Project management</a>
                    <a class="dropdown-item" href="#">Business law</a>
                    <a class="dropdown-item" href="#">Data &amp; Analytics</a>
                    <a class="dropdown-item" href="#">Other</a>
                  </div>
                </div>
                <!-- End Development -->

                <!-- Business -->
                <div class="hs-has-sub-menu nav-item">
                  <a id="businessMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi-briefcase dropdown-item-icon"></i> Business</a>

                  <div class="hs-sub-menu dropdown-menu" aria-labelledby="businessMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item" href="#">All Finance &amp; Accounting</a>
                    <a class="dropdown-item" href="#">Accounting &amp; Bookkeeping</a>
                    <a class="dropdown-item" href="#">Compliance</a>
                    <a class="dropdown-item" href="#">Economics</a>
                    <a class="dropdown-item" href="#">Finance</a>
                    <a class="dropdown-item" href="#">Other</a>
                  </div>
                </div>
                <!-- End Business -->

                <!-- Finance & Accounting -->
                <div class="hs-has-sub-menu nav-item">
                  <a id="financeAccountingMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi-graph-up dropdown-item-icon"></i> Finance &amp; Accounting</a>

                  <div class="hs-sub-menu dropdown-menu" aria-labelledby="financeAccountingMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item" href="#">All IT &amp; Software</a>
                    <a class="dropdown-item" href="#">IT Sertification</a>
                    <a class="dropdown-item" href="#">Network &amp; security</a>
                    <a class="dropdown-item" href="#">Hardware</a>
                    <a class="dropdown-item" href="#">Operating systems</a>
                    <a class="dropdown-item" href="#">Other</a>
                  </div>
                </div>
                <!-- End Finance & Accounting -->

                <!-- IT & Software -->
                <div class="hs-has-sub-menu nav-item">
                  <a id="ITSoftwareMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi-laptop dropdown-item-icon"></i> IT &amp; Software</a>

                  <div class="hs-sub-menu dropdown-menu" aria-labelledby="ITSoftwareMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item" href="#">All Design</a>
                    <a class="dropdown-item" href="#">Web design</a>
                    <a class="dropdown-item" href="#">Graphic design</a>
                    <a class="dropdown-item" href="#">Design tools</a>
                    <a class="dropdown-item" href="#">User experience</a>
                    <a class="dropdown-item" href="#">Game design</a>
                    <a class="dropdown-item" href="#">Design thinking</a>
                    <a class="dropdown-item" href="#">3D &amp; animation</a>
                    <a class="dropdown-item" href="#">Fashion</a>
                    <a class="dropdown-item" href="#">Architectural design</a>
                    <a class="dropdown-item" href="#">Interior design</a>
                    <a class="dropdown-item" href="#">Other</a>
                  </div>
                </div>
                <!-- End IT & Software -->

                <!-- Design -->
                <div class="hs-has-sub-menu nav-item">
                  <a id="designMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi-bezier2 dropdown-item-icon"></i> Design</a>

                  <div class="hs-sub-menu dropdown-menu" aria-labelledby="designMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item" href="#">All Marketing</a>
                    <a class="dropdown-item" href="#">Digital marketing</a>
                    <a class="dropdown-item" href="#">Branding</a>
                    <a class="dropdown-item" href="#">Advertising</a>
                    <a class="dropdown-item" href="#">Other</a>
                  </div>
                </div>
                <!-- End Design -->

                <!-- Music -->
                <div class="hs-has-sub-menu nav-item">
                  <a id="musicMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi-music-note-list dropdown-item-icon"></i> Music</a>

                  <div class="hs-sub-menu dropdown-menu" aria-labelledby="musicMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item" href="#">All Musics</a>
                    <a class="dropdown-item" href="#">Instrument</a>
                    <a class="dropdown-item" href="#">Production</a>
                    <a class="dropdown-item" href="#">Music fundamentals</a>
                    <a class="dropdown-item" href="#">Vocal</a>
                    <a class="dropdown-item" href="#">Music techniques</a>
                    <a class="dropdown-item" href="#">Music software</a>
                    <a class="dropdown-item" href="#">Other</a>
                  </div>
                </div>
                <!-- End Music -->
              </div>
              <!-- End Mega Menu -->
            </li>
            <!-- End Courses -->

            <!-- Search Form -->
            <li class="nav-item flex-grow-1 d-none d-lg-inline-block ">
              <form class="input-group input-group-merge">
                <div class="input-group-prepend input-group-text">
                  <i class="bi-search"></i>
                </div>
                <input type="text" class="form-control" placeholder="What do you want to learn?" aria-label="What do you want to learn?">
              </form>
            </li>
            <!-- End Search Form -->

            <!-- Dropdown -->
            <li class="hs-has-sub-menu nav-item">
              <a id="listingsDropdown" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
              <div class="hs-sub-menu hs-position-right dropdown-menu" aria-labelledby="listingsDropdown" style="min-width: 14rem;">
                <a class="dropdown-item " href="../demo-course/courses.html">Courses</a>
                <a class="dropdown-item " href="../demo-course/course-overview.html">Course Overview</a>
                <a class="dropdown-item " href="../demo-course/author-profile.html">Author Profile</a>
              </div>
            </li>
            <!-- End Dropdown -->
          </ul>
        </div>
        <!-- End Collapse -->
      </nav>
    </div>
  </header>

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero -->
    <div class="container content-space-2">
      <div class="row justify-content-md-between align-items-sm-center">
        <div class="col-8 col-sm-6 col-md-5 mb-5 mb-sm-0">
          <img class="img-fluid" src="../assets/svg/illustrations/oc-growing.svg" alt="Image Description">
        </div>
        <!-- End Col -->

        <div class="col-sm-6">
          <div class="mb-5">
            <h1 class="display-4 mb-3">
              Unlock your
              <br>
              <span class="text-primary text-highlight-warning">
                <span class="js-typedjs"
                      data-hs-typed-options='{
                        "strings": ["future.", "potential.", "skills.","career."],
                        "typeSpeed": 90,
                        "loop": true,
                        "backSpeed": 30,
                        "backDelay": 2500
                      }'></span>
              </span>
            </h1>
            <p class="lead">
              Unlock your tech career potential with CodeSpace, where you can enhance your skills, advance your role, and stay current on vital topics.
            </p>
          </div>

          <div class="d-grid d-md-flex gap-3 align-items-md-center">
            <a class="btn btn-primary" href="../page-login.html">Start a free trial</a>

            <!-- Fancybox -->
            <a class="video-player video-player-btn" href="https://www.youtube.com/watch?v=d4eDWc8g0e0" role="button" data-fslightbox="youtube-video">
              <span class="video-player-icon shadow-sm me-2">
                <i class="bi-play-fill"></i>
              </span>
              How it works
            </a>
            <!-- End Fancybox -->
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Hero -->

    <!-- Card Grid -->
    <div class="content-space-b-2 content-space-b-lg-3 bg-img-start" style="background: url(../assets/svg/components/shape-5.svg) center no-repeat;">
      <div class="position-relative">
        <div class="container content-space-2">
          <div class="row align-items-md-center mb-7">
            <div class="col-md-6 mb-4 mb-md-0">
              <h2>Check out our newest and most popular programs</h2>
            </div>
            <!-- End Col -->

            <div class="col-md-6 text-md-end">
              <a class="link" href="#">See all programs <i class="bi-chevron-right small ms-1"></i></a>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <!-- Swiper Slider -->
          <div class="swiper-center-mode-end">
            <div class="js-swiper-course-hero swiper">
              <div class="swiper-wrapper">
                <!-- Slide -->
                <div class="swiper-slide pt-2">
                  <!-- Card -->
                  <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="{{asset('asset2/demo-course/course-overview.html')}}" style="background-image: url({{asset('asset2/img/400x500/img14.jpg)')}}; min-height: 15rem;">
                    <div class="card-body">
                      <span class="card-subtitle text-white-70">New</span>
                      <h4 class="card-title text-white">Cloud computing</h4>
                      
                      <div class="card-footer pt-0">
                        <span class="card-link text-white">Read now</span>
                      </div>
                    </div>
                  </a>
                  <!-- End Card -->
                </div>
                <!-- End Slide -->

                <!-- Slide -->
                <div class="swiper-slide pt-2">
                  <!-- Card -->
                  <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img13.jpg); min-height: 15rem;">
                    <div class="card-body">
                      <span class="card-subtitle text-white-70">Phython</span>
                      <h4 class="card-title text-white">What's new in Phython 3.7.2</h4>
                      
                      <div class="card-footer pt-0">
                        <span class="card-link text-white">Read now</span>
                      </div>
                    </div>
                  </a>
                  <!-- End Card -->
                </div>
                <!-- End Slide -->

                <!-- Slide -->
                <div class="swiper-slide pt-2">
                  <!-- Card -->
                  <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img15.jpg); min-height: 15rem;">
                    <div class="card-body">
                      <span class="card-subtitle text-white-70">Tooling</span>
                      <h4 class="card-title text-white">Build a staging server</h4>
                      
                      <div class="card-footer pt-0">
                        <span class="card-link text-white">Read now</span>
                      </div>
                    </div>
                  </a>
                  <!-- End Card -->
                </div>
                <!-- End Slide -->

                <!-- Slide -->
                <div class="swiper-slide pt-2">
                  <!-- Card -->
                  <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img16.jpg); min-height: 15rem;">
                    <div class="card-body">
                      <span class="card-subtitle text-white-70">JavaScript</span>
                      <h4 class="card-title text-white">Laravel, Vue and SPAs</h4>
                      
                      <div class="card-footer pt-0">
                        <span class="card-link text-white">Read now</span>
                      </div>
                    </div>
                  </a>
                  <!-- End Card -->
                </div>
                <!-- End Slide -->

                <!-- Slide -->
                <div class="swiper-slide pt-2">
                  <!-- Card -->
                  <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img17.jpg); min-height: 15rem;">
                    <div class="card-body">
                      <span class="card-subtitle text-white-70">Popular</span>
                      <h4 class="card-title text-white">Artificial Intelligence</h4>
                      
                      <div class="card-footer pt-0">
                        <span class="card-link text-white">Read now</span>
                      </div>
                    </div>
                  </a>
                  <!-- End Card -->
                </div>
                <!-- End Slide -->

                <!-- Slide -->
                <div class="swiper-slide pt-2">
                  <!-- Card -->
                  <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img18.jpg); min-height: 15rem;">
                    <div class="card-body">
                      <span class="card-subtitle text-white-70">PHP</span>
                      <h4 class="card-title text-white">Programming terms explained</h4>
                      
                      <div class="card-footer pt-0">
                        <span class="card-link text-white">Read now</span>
                      </div>
                    </div>
                  </a>
                  <!-- End Card -->
                </div>
                <!-- End Slide -->
              </div>

              <!-- Arrows -->
              <div class="js-swiper-course-hero-button-next swiper-button-next"></div>
              <div class="js-swiper-course-hero-button-prev swiper-button-prev"></div>
            </div>
          </div>
          <!-- End Swiper Slider -->
        </div>

        <div class="w-100 w-md-65 bg-light position-absolute top-0 end-0 bottom-0 zi-n1"></div>
      </div>
    </div>
    <!-- End Card Grid -->

    <!-- Card Grid -->
    <div class="container content-space-sm-2">
      <!-- Title -->
      <div class="w-md-75 text-center mx-md-auto mb-9">
        <h2>Featured courses</h2>
        <p>Discover your perfect program in our courses.</p>
      </div>
      <!-- End Title -->

      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 mb-5">


  
        @foreach($latestCourses as $course)

        <div class="col mb-5">
          <!-- Card -->
          <div class="card card-bordered h-100">
            <!-- Card Pinned -->
            <div class="card-pinned">

              @foreach (json_decode($course->photo_path) as $path)
              <img class="card-img-top" src="{{ asset('storage/'. $path) }}" alt="Image Description">

             @endforeach

              <div class="card-pinned-top-start">
                <small class="badge bg-success rounded-pill">Hot</small>
              </div>

              <div class="card-pinned-bottom-start">
                <div class="d-flex align-items-center flex-wrap">
                  <!-- Rating -->
                  <div class="d-flex gap-1">
                    <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                    <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                    <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                    <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                    <img src="../assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                  </div>
                  <!-- End Rating -->
                  <div class="ms-1">
                    <span class="fw-semibold text-white me-1">4.9</span>
                    <span class="text-white-70">(961 reviews)</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Card Pinned -->

            <!-- Card Body -->
            <div class="card-body">
              <small class="card-subtitle">{{$course->category}} > {{$course->subcategory}}</small>

              <div class="mb-3">
                <h3 class="card-title">
                  <a class="text-dark" href="../demo-course/course-overview.html">{{$course->title}}</a>
                </h3>
              </div>

              <div class="row align-items-center">
                <div class="col">
                  <div class="avatar-group avatar-group-xs">
                    <a class="avatar avatar-xs avatar-circle" data-toggle="tooltip" data-placement="top" title="Hanna Wolfe" href="#">
                      <img class="avatar-img" src="../assets/img/160x160/img7.jpg" alt="Image Description">
                    </a>
                  </div>
                </div>
                <!-- End Col --> 
                
                <div class="col-auto">
                  <ul class="list-inline list-separator small ms-auto">
                    <li class="list-inline-item">
                      <i class="bi-book me-1"></i> 35 lessons
                    </li>
                    <li class="list-inline-item">
                      <i class="bi-clock me-1"></i> 21h
                    </li>
                  </ul>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
            <!-- End Card Body -->

            <!-- Card Footer -->
            <div class="card-footer pt-0">
              <div class="d-flex justify-content-between align-items-center">
                <div class="me-2">
                  <span class="d-block text-muted small"><del>$179.99</del></span>
                  <h5 class="card-title">{{$course->price}}</h5>
                </div>
                <a class="btn btn-primary btn-sm btn-transition" href="{{ route('course.overview', ['id' => $course->id]) }}">Preview</a>
              </div>
            </div>
            <!-- End Card Footer -->
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        @endforeach

      </div>
      <!-- End Row -->

      <div class="text-center">
        <a class="btn btn-link" href="../demo-course/courses.html">See all courses <i class="bi-chevron-right small ms-1"></i></a>
      </div>
    </div>
    <!-- End Card Grid -->

    <!-- Testimonials -->
    <div class="overflow-hidden content-space-2">
      <div class="position-relative bg-light text-center rounded-2 zi-2 mx-3 mx-md-10">
        <div class="container content-space-2">
          <div class="text-center mb-5">
            <img class="avatar avatar-lg avatar-4x3" src="../assets/svg/illustrations/oc-person-2.svg" alt="Illustration">
          </div>
          
          <!-- Blockquote -->
          <figure class="w-md-75 text-center mx-md-auto">
            <blockquote class="blockquote mb-7">“ The best part about Front Course is the selection. You can find a course for anything you want to learn! Thank you Front Course! You've renewed my passion for learning and my dream of becoming a web developer. ”</blockquote>

            <figcaption class="blockquote-footer mt-2">
              Martin
              <span class="blockquote-footer-source">Happy customer</span>
            </figcaption>
          </figure>
          <!-- End Blockquote -->
        </div>

        <!-- SVG Shape -->
        <figure class="position-absolute top-0 start-0 mt-10 ms-10">
          <svg width="70" height="70" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M60.6655 74.9992C80.4557 74.9992 96.4988 58.9561 96.4988 39.1659C96.4988 19.3757 80.4557 3.33252 60.6655 3.33252C40.8753 3.33252 24.8322 19.3757 24.8322 39.1659C24.8322 58.9561 40.8753 74.9992 60.6655 74.9992Z" stroke="#97a4af" stroke-width="5" stroke-miterlimit="10"/>
            <path d="M158.5 197.5C168.165 197.5 176 189.665 176 180C176 170.335 168.165 162.5 158.5 162.5C148.835 162.5 141 170.335 141 180C141 189.665 148.835 197.5 158.5 197.5Z" stroke="#97a4af" stroke-width="5" stroke-miterlimit="10"/>
          </svg>
        </figure>
        <!-- End SVG Shape -->

        <!-- SVG Shape -->
        <figure class="position-absolute bottom-0 end-0 mb-n7 me-n7" style="width: 10rem;">
          <img class="img-fluid" src="../assets/svg/components/dots.svg" alt="Image Description">
        </figure>
        <!-- End SVG Shape -->
      </div>
    </div>
    <!-- End Testimonials -->

    <!-- Clients -->
    <div class="container content-space-t-1 content-space-t-lg-0">
      <div class="w-lg-75 mx-lg-auto">
        <div class="row">
          <div class="col text-center py-3">
            <img class="avatar avatar-lg avatar-4x3" src="../assets/svg/brands/capsule-dark.svg" alt="Logo">
          </div>
          <!-- End Col -->

          <div class="col text-center py-3">
            <img class="avatar avatar-lg avatar-4x3" src="../assets/svg/brands/fitbit-dark.svg" alt="Logo">
          </div>
          <!-- End Col -->

          <div class="col text-center py-3">
            <img class="avatar avatar-lg avatar-4x3" src="../assets/svg/brands/forbes-dark.svg" alt="Logo">
          </div>
          <!-- End Col -->

          <div class="col text-center py-3">
            <img class="avatar avatar-lg avatar-4x3" src="../assets/svg/brands/mailchimp-dark.svg" alt="Logo">
          </div>
          <!-- End Col -->

          <div class="col text-center py-3">
            <img class="avatar avatar-lg avatar-4x3" src="../assets/svg/brands/layar-dark.svg" alt="Logo">
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
    </div>
    <!-- End Clients -->

    <!-- Signup Form -->
    <div class="container content-space-2 content-space-lg-3">
      <div class="row justify-content-lg-between align-items-md-center">
        <div class="col-md-5 mb-7 mb-md-0">
          <div class="mb-5">
            <h2>Thousands of experts around the world ready to help you.</h2>
            <p>See why leading organizations choose Front Course for Business as their destination for employee learning.</p>
          </div>

          <h4>Learn more about:</h4>

          <!-- List Checked -->
          <ul class="list-checked list-checked-primary">
            <li class="list-checked-item">Unlimited access to the top 3,500+ courses</li>
            <li class="list-checked-item">Fresh content taught by 1,300+ experts – for any learning style</li>
            <li class="list-checked-item">Actionable learning insights <span class="badge bg-warning text-dark rounded-pill ms-1">Beta</span></li>
          </ul>
          <!-- End List Checked -->
        </div>
        <!-- End Col -->

        <div class="col-md-7 col-lg-6">
          <!-- Form -->
          <form class="js-validate needs-validation" novalidate>
            <!-- Card -->
            <div class="card">
              <div class="card-header bg-primary text-center">
                <h4 class="card-header-title text-white">Try it free for 7 days <span class="badge bg-warning text-dark rounded-pill ms-1">starting at $59</span></h4>
              </div>

              <div class="card-body">
                <div class="row gx-3">
                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label class="form-label" for="signupHeroFormFirstName">First name</label>
                      <input type="text" class="form-control form-control-lg" name="signupHeroFormNameFirstName" id="signupHeroFormFirstName" placeholder="First name" aria-label="First name" required>
                      <span class="invalid-feedback">Please enter your first name</span>
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->

                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label class="form-label" for="signupHeroFormLasttName">Last name</label>
                      <input type="text" class="form-control form-control-lg" name="signupHeroFormNameLastName" id="signupHeroFormLasttName" placeholder="Last name" aria-label="Last name" required>
                      <span class="invalid-feedback">Please enter your last name</span>
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->

                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="signupHeroFormWorkEmail">Email address</label>
                  <input type="email" class="form-control form-control-lg" name="signupHeroFormNameWorkEmail" id="signupHeroFormWorkEmail" placeholder="email@site.com" aria-label="email@site.com" required>
                  <span class="invalid-feedback">Please enter your email address</span>
                </div>
                <!-- End Form -->

                <div class="row gx-3">
                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label class="form-label" for="signupHeroFormSignupPassword">Password</label>
                      <input type="password" class="form-control form-control-lg" name="password" id="signupHeroFormSignupPassword" placeholder="8+ characters required" aria-label="8+ characters required" required>
                      <span class="invalid-feedback">Your password must include 8+ characters</span>
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->

                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4" data-hs-validation-validate-class>
                      <label class="form-label" for="signupHeroFormSignupConfirmPassword">Confirm password</label>
                      <input type="password" class="form-control form-control-lg" name="confirmPassword" id="signupHeroFormSignupConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required
                             data-hs-validation-equal-field="#signupHeroFormSignupPassword">
                      <span class="invalid-feedback">Password does not match the confirm password</span>
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->

                <!-- Check -->
                <div class="form-check mb-4">
                  <input type="checkbox" class="form-check-input" id="signupHeroFormPrivacyCheck" name="signupFormPrivacyCheck" required>
                  <label class="form-check-label small" for="signupHeroFormPrivacyCheck"> By submitting this form I have read and acknowledged the <a href=../page-privacy.html>Privacy Policy</a></label>
                  <span class="invalid-feedback">Please accept our Privacy Policy.</span>
                </div>
                <!-- End Check -->

                <div class="row align-items-center">
                  <div class="col-sm-7 mb-3 mb-sm-0">
                    <p class="card-text small">Already have an account? <a class="link" href="../page-login.html">Log In</a></p>
                  </div>
                  <!-- End Col -->
                  
                  <div class="col-sm-5 text-sm-end">
                    <button type="submit" class="btn btn-primary btn-lg">Sign up now</button>
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>
            </div>
            <!-- End Card -->
          </form>
          <!-- End Form -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Signup Form -->

    <!-- CTA -->
    {{-- <div class="container content-space-b-2">
      <div class="text-center bg-img-start py-6" style="background: url(../assets/svg/components/shape-6.svg) center no-repeat;">
        <div class="mb-5">
          <h2>Find the right learning path for you</h2>
          <p>Answer a few questions and match your goals to our programs.</p>
        </div>
        
        <a class="btn btn-primary btn-transition" href="#">Explore by category</a>
      </div>
    </div> --}}
    <!-- End CTA -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="bg-dark">
    <div class="container pb-1 pb-lg-5">
      <div class="row content-space-t-2">
        <div class="col-lg-3 mb-7 mb-lg-0">
          <!-- Logo -->
          <div class="mb-5">
            <a class="navbar-brand" href="../index.html" aria-label="Space">
              <img class="navbar-brand-logo" src="../assets/svg/logos/logo-white.svg" alt="Image Description">
            </a>
          </div>
          <!-- End Logo -->

          <!-- List -->
          <ul class="list-unstyled list-py-1">
            <li><a class="link-sm link-light" href="#"><i class="bi-geo-alt-fill me-1"></i> 153 Williamson Plaza, Maggieberg</a></li>
            <li><a class="link-sm link-light" href="tel:1-062-109-9222"><i class="bi-telephone-inbound-fill me-1"></i> +1 (062) 109-9222</a></li>
          </ul>
          <!-- End List -->
        
        </div>
        <!-- End Col -->

        <div class="col-sm mb-7 mb-sm-0">
          <h5 class="text-white mb-3">Company</h5>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-0">
            <li><a class="link-sm link-light" href="#">About</a></li>
            <li><a class="link-sm link-light" href="#">Careers <span class="badge bg-warning text-dark rounded-pill ms-1">We're hiring</span></a></li>
            <li><a class="link-sm link-light" href="#">Blog</a></li>
            <li><a class="link-sm link-light" href="#">Customers <i class="bi-box-arrow-up-right small ms-1"></i></a></li>
            <li><a class="link-sm link-light" href="#">Hire us</a></li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->

        <div class="col-sm mb-7 mb-sm-0">
          <h5 class="text-white mb-3">Features</h5>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-0">
            <li><a class="link-sm link-light" href="#">Press <i class="bi-box-arrow-up-right small ms-1"></i></a></li>
            <li><a class="link-sm link-light" href="#">Release Notes</a></li>
            <li><a class="link-sm link-light" href="#">Integrations</a></li>
            <li><a class="link-sm link-light" href="#">Pricing</a></li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->

        <div class="col-sm mb-7 mb-sm-0">
          <h5 class="text-white mb-3">Documentation</h5>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-0">
            <li><a class="link-sm link-light" href="#">Support</a></li>
            <li><a class="link-sm link-light" href="#">Docs</a></li>
            <li><a class="link-sm link-light" href="#">Status</a></li>
            <li><a class="link-sm link-light" href="#">API Reference</a></li>
            <li><a class="link-sm link-light" href="#">Tech Requirements</a></li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->

        <div class="col-sm">
          <h5 class="text-white mb-3">Resources</h5>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-5">
            <li><a class="link-sm link-light" href="#"><i class="bi-question-circle-fill me-1"></i> Help</a></li>
            <li><a class="link-sm link-light" href="#"><i class="bi-person-circle me-1"></i> Your Account</a></li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <div class="border-top border-white-10 my-7"></div>

      <div class="row mb-7">
        <div class="col-sm mb-3 mb-sm-0">
          <!-- Socials -->
          <ul class="list-inline list-separator list-separator-light mb-0">
            <li class="list-inline-item">
              <a class="link-sm link-light" href="#">Privacy &amp; Policy</a>
            </li>
            <li class="list-inline-item">
              <a class="link-sm link-light" href="#">Terms</a>
            </li>
            <li class="list-inline-item">
              <a class="link-sm link-light" href="#">Site Map</a>
            </li>
          </ul>
          <!-- End Socials -->
        </div>

        <div class="col-sm-auto">
          <!-- Socials -->
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-soft-light btn-xs btn-icon" href="#">
                <i class="bi-facebook"></i>
              </a>
            </li>
          
            <li class="list-inline-item">
              <a class="btn btn-soft-light btn-xs btn-icon" href="#">
                <i class="bi-google"></i>
              </a>
            </li>
          
            <li class="list-inline-item">
              <a class="btn btn-soft-light btn-xs btn-icon" href="#">
                <i class="bi-twitter"></i>
              </a>
            </li>
          
            <li class="list-inline-item">
              <a class="btn btn-soft-light btn-xs btn-icon" href="#">
                <i class="bi-github"></i>
              </a>
            </li>
          
            <li class="list-inline-item">
              <!-- Button Group -->
              <div class="btn-group">
                <button type="button" class="btn btn-soft-light btn-xs dropdown-toggle" id="footerSelectLanguage" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                  <span class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-circle me-2" src="../assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16"/>
                    <span>English (US)</span>
                  </span>
                </button>

                <div class="dropdown-menu" aria-labelledby="footerSelectLanguage">
                  <a class="dropdown-item d-flex align-items-center active" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="../assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16"/>
                    <span>English (US)</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="../assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Image description" width="16"/>
                    <span>Deutsch</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="../assets/vendor/flag-icon-css/flags/1x1/es.svg" alt="Image description" width="16"/>
                    <span>Español</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="../assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Image description" width="16"/>
                    <span>中文 (繁體)</span>
                  </a>
                </div>
              </div>
              <!-- End Button Group -->
            </li>
          </ul>
          <!-- End Socials -->
        </div>
      </div>

      <!-- Copyright -->
      <div class="w-md-85 text-lg-center mx-lg-auto">
        <p class="text-white-50 small">&copy; Front. 2021 Htmlstream. All rights reserved.</p>
        <p class="text-white-50 small">When you visit or interact with our sites, services or tools, we or our authorised service providers may use cookies for storing information to help provide you with a better, faster and safer experience and for marketing purposes.</p>
      </div>
      <!-- End Copyright -->
    </div>
  </footer>

  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Go To -->
  {{-- <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
     data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": "2rem"
         },
         "show": {
           "bottom": "2rem"
         },
         "hide": {
           "bottom": "-2rem"
         }
       }
     }'>
    <i class="bi-chevron-up"></i>
  </a> --}}

  <!-- Offcanvas Signup -->
  {{-- <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbarSignup">
    <div class="offcanvas-header justify-content-end border-0 pb-0">
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
      <!-- Log in -->
      <div id="loginOffcanvasFormLogin">
        <!-- Heading -->
        <div class="text-center mb-7">
          <h3 class="modal-title">Log in to Front</h3>
          <p>Login to manage your account</p>
        </div>
        <!-- End Heading -->

        <form class="js-validate needs-validation" novalidate>
          <!-- Form -->
          <div class="mb-3">
            <label class="form-label" for="loginOffcanvasFormLoginEmail">Your email</label>
            <input type="email" class="form-control form-control-lg" name="email" id="loginOffcanvasFormLoginEmail" placeholder="email@site.com" aria-label="email@site.com" required>
            <span class="invalid-feedback">Please enter a valid email address.</span>
          </div>
          <!-- End Form -->

          <!-- Form -->
          <div class="mb-3">
            <div class="d-flex justify-content-between align-items-center">
              <label class="form-label" for="loginOffcanvasFormLoginPassword">Password</label>

              <a class="js-animation-link form-label-link" href="javascript:;"
                 data-hs-show-animation-options='{
                   "targetSelector": "#loginOffcanvasFormResetPassword",
                   "groupName": "idForm"
                 }'>Forgot Password?</a>
            </div>

            <input type="password" class="form-control form-control-lg" name="password" id="loginOffcanvasFormLoginPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8">
            <span class="invalid-feedback">Please enter a valid password.</span>
          </div>
          <!-- End Form -->

          <div class="d-grid gap-3 text-center">
            <button type="submit" class="btn btn-primary btn-lg">Log in</button>
          
            <span class="divider-center">OR</span>
          
            <button type="submit" class="btn btn-ghost-secondary">
              <span class="d-flex justify-content-center align-items-center">
                <img class="avatar avatar-xss me-2" src="../assets/svg/brands/google-icon.svg" alt="Image Description">
                Log in with Google
              </span>
            </button>

            <p>Don't have an account yet?
              <a class="js-animation-link link" href="javascript:;" role="button"
                 data-hs-show-animation-options='{
                   "targetSelector": "#loginOffcanvasFormSignup",
                   "groupName": "idForm"
                 }'>Sign up</a>
            </p>
          </div>
        </form>
      </div>
      <!-- End Log in -->

      <!-- Log in -->
      <div id="loginOffcanvasFormSignup" style="display: none; opacity: 0;">
        <!-- Heading -->
        <div class="text-center mb-7">
          <h3 class="modal-title">Sign up</h3>
          <p>Fill out the form to get started</p>
        </div>
        <!-- End Heading -->

        <form class="js-validate needs-validation" novalidate>
          <!-- Form -->
          <div class="mb-3">
            <label class="form-label" for="loginOffcanvasFormSignupEmail">Your email</label>
            <input type="email" class="form-control form-control-lg" name="email" id="loginOffcanvasFormSignupEmail" placeholder="email@site.com" aria-label="email@site.com" required>
            <span class="invalid-feedback">Please enter a valid email address.</span>
          </div>
          <!-- End Form -->

          <!-- Form -->
          <div class="mb-3">
            <label class="form-label" for="loginOffcanvasFormSignupPassword">Password</label>
            <input type="password" class="form-control form-control-lg" name="password" id="loginOffcanvasFormSignupPassword" placeholder="8+ characters required" aria-label="8+ characters required" required>
            <span class="invalid-feedback">Your password is invalid. Please try again.</span>
          </div>
          <!-- End Form -->

          <!-- Form -->
          <div class="mb-3" data-hs-validation-validate-class>
            <label class="form-label" for="loginOffcanvasFormSignupConfirmPassword">Confirm password</label>
            <input type="password" class="form-control form-control-lg" name="confirmPassword" id="loginOffcanvasFormSignupConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required
                   data-hs-validation-equal-field="#loginOffcanvasFormSignupPassword">
            <span class="invalid-feedback">Password does not match the confirm password.</span>
          </div>
          <!-- End Form -->

          <div class="text-center mb-3">
            <p class="small mb-0">By continuing you agree to our <a href="#">Terms and Conditions</a></p>
          </div>

          <div class="d-grid gap-3 text-center">
            <button type="submit" class="btn btn-primary btn-lg">Sign up</button>
          
            <span class="divider-center">OR</span>
          
            <button type="submit" class="btn btn-ghost-secondary">
              <span class="d-flex justify-content-center align-items-center">
                <img class="avatar avatar-xss me-2" src="../assets/svg/brands/google-icon.svg" alt="Image Description">
                Sign up with Google
              </span>
            </button>

            <p>Already have an account?
              <a class="js-animation-link link" href="javascript:;" role="button"
                 data-hs-show-animation-options='{
                   "targetSelector": "#loginOffcanvasFormLogin",
                   "groupName": "idForm"
                 }'>Log in</a>
            </p>
          </div>
        </form>
      </div>
      <!-- End Log in -->

      <!-- Reset Password -->
      <div id="loginOffcanvasFormResetPassword" style="display: none; opacity: 0;">
        <!-- Heading -->
        <div class="text-center mb-7">
          <h3 class="modal-title">Forgot password</h3>
          <p>Instructions will be sent to you</p>
        </div>
        <!-- End Heading -->

        <form class="js-validate needs-validation" novalidate>
          <!-- Form -->
          <div class="mb-3">
            <div class="d-flex justify-content-between align-items-center">
              <label class="form-label" for="signupModalFormResetPasswordEmail" tabindex="0">Your email</label>

              <a class="js-animation-link form-label-link" href="javascript:;"
                 data-hs-show-animation-options='{
                     "targetSelector": "#loginOffcanvasFormLogin",
                     "groupName": "idForm"
                   }'>
                <i class="bi-chevron-left small"></i> Back to Log in
              </a>
            </div>

            <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormResetPasswordEmail" tabindex="1" placeholder="Enter your email address" aria-label="Enter your email address" required>
            <span class="invalid-feedback">Please enter a valid email address.</span>
          </div>
          <!-- End Form -->

          <div class="d-grid gap-3 text-center">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
          </div>
        </form>
      </div>
      <!-- End Reset Password -->
    </div>
  </div> --}}
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="{{asset('assets2/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{asset('assets2/vendor/hs-header/dist/hs-header.min.js')}}"></script>
  <script src="{{asset('assets2/vendor/hs-mega-menu/dist/hs-mega-menu.min.js')}}"></script>
  <script src="{{asset('assets2/vendor/hs-show-animation/dist/hs-show-animation.min.js')}}"></script>
  <script src="{{asset('assets2/vendor/hs-go-to/dist/hs-go-to.min.js')}}"></script>
  <script src="{{asset('assets2/vendor/typed.js/lib/typed.min.js')}}"></script>
  <script src="{{asset('assets2/vendor/fslightbox/index.js')}}"></script>
  <script src="{{asset('assets2/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- JS Front -->
  <script src="{{asset('assets2/js/theme.min.js')}}"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF HEADER
      // =======================================================
      new HSHeader('#header').init()


      // INITIALIZATION OF MEGA MENU
      // =======================================================
      new HSMegaMenu('.js-mega-menu', {
          desktop: {
            position: 'left'
          }
        })


      // INITIALIZATION OF SHOW ANIMATIONS
      // =======================================================
      new HSShowAnimation('.js-animation-link')


      // INITIALIZATION OF BOOTSTRAP VALIDATION
      // =======================================================
      HSBsValidation.init('.js-validate', {
        onSubmit: data => {
          data.event.preventDefault()
          alert('Submited')
        }
      })


      // INITIALIZATION OF BOOTSTRAP DROPDOWN
      // =======================================================
      HSBsDropdown.init()


      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')


      // INITIALIZATION OF TEXT ANIMATION (TYPING)
      // =======================================================
      HSCore.components.HSTyped.init('.js-typedjs')


      // INITIALIZATION OF SWIPER
      // =======================================================
      var swiper = new Swiper('.js-swiper-course-hero',{
        preloaderClass: 'custom-swiper-lazy-preloader',
        navigation: {
          nextEl: '.js-swiper-course-hero-button-next',
          prevEl: '.js-swiper-course-hero-button-prev',
        },
        slidesPerView: 1,
        loop: 1,
        breakpoints: {
          380: {
            slidesPerView: 2,
            spaceBetween: 15,
          },
          580: {
            slidesPerView: 3,
            spaceBetween: 15,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 15,
          },
          1024: {
            slidesPerView: 6,
            spaceBetween: 15,
          },
        },
        on: {
          'imagesReady': function (swiper) {
            const preloader = swiper.el.querySelector('.js-swiper-course-hero-preloader')
            preloader.parentNode.removeChild(preloader)
          }
        }
      });
    })()
  </script>
</body>
</html>