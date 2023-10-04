

<!DOCTYPE html>
<html lang="en" dir="">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>CodeSpace</title>

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
  @include('guest.layouts.navbar')

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
