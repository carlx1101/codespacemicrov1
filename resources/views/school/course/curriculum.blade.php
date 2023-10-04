<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Manage Course</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-icons/font/bootstrap-icons.css')}}">

  <link rel="stylesheet" href="{{asset('assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css')}}">

  <!-- CSS Front Template -->

  <link rel="preload" href="{{asset('assets/css/theme.min.css')}}" data-hs-appearance="default" as="style">
  <link rel="preload" href="{{asset('assets/css/theme-dark.min.css')}}" data-hs-appearance="dark" as="style">

  <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

  <style data-hs-appearance-onload-styles>
    *
    {
      transition: unset !important;
    }

    body
    {
      opacity: 0;
    }
  </style>

  <script>
            window.hs_config = {"autopath":"@@autopath","deleteLine":"hs-builder:delete","deleteLine:build":"hs-builder:build-delete","deleteLine:dist":"hs-builder:dist-delete","previewMode":false,"startPath":"/index.html","vars":{"themeFont":"https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap","version":"?v=1.0"},"layoutBuilder":{"extend":{"switcherSupport":true},"header":{"layoutMode":"default","containerMode":"container-fluid"},"sidebarLayout":"default"},"themeAppearance":{"layoutSkin":"default","sidebarSkin":"default","styles":{"colors":{"primary":"#377dff","transparent":"transparent","white":"#fff","dark":"132144","gray":{"100":"#f9fafc","900":"#1e2022"}},"font":"Inter"}},"languageDirection":{"lang":"en"},"skipFilesFromBundle":{"dist":["assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","assets/js/demo.js"],"build":["assets/css/theme.css","assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js","assets/js/demo.js","assets/css/theme-dark.css","assets/css/docs.css","assets/vendor/icon-set/style.css","assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js","assets/js/demo.js"]},"minifyCSSFiles":["assets/css/theme.css","assets/css/theme-dark.css"],"copyDependencies":{"dist":{"*assets/js/theme-custom.js":""},"build":{"*assets/js/theme-custom.js":"","node_modules/bootstrap-icons/font/*fonts/**":"assets/css"}},"buildFolder":"","replacePathsToCDN":{},"directoryNames":{"src":"./src","dist":"./dist","build":"./build"},"fileNames":{"dist":{"js":"theme.min.js","css":"theme.min.css"},"build":{"css":"theme.min.css","js":"theme.min.js","vendorCSS":"vendor.min.css","vendorJS":"vendor.min.js"}},"fileTypes":"jpg|png|svg|mp4|webm|ogv|json"}
            window.hs_config.gulpRGBA = (p1) => {
  const options = p1.split(',')
  const hex = options[0].toString()
  const transparent = options[1].toString()

  var c;
  if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)){
    c= hex.substring(1).split('');
    if(c.length== 3){
      c= [c[0], c[0], c[1], c[1], c[2], c[2]];
    }
    c= '0x'+c.join('');
    return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+',' + transparent + ')';
  }
  throw new Error('Bad Hex');
}
            window.hs_config.gulpDarken = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = -parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            window.hs_config.gulpLighten = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            </script>
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">

  <script src="{{asset('assets/js/hs.theme-appearance.js')}}"></script>

  <script src="{{asset('assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js')}}"></script>

  <!-- ========== HEADER ========== -->
  @include('school.layouts.header')

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <!-- Navbar Vertical -->

  @include('school.layouts.sidebar')
 
  <main id="content" role="main" class="main">
    <!-- Content  table-->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-end">
          <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-no-gutter">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Courses</a></li>
                <li class="breadcrumb-item active" aria-current="page">Overview</li>
              </ol>
            </nav>

            <h1 class="page-header-title">Courses</h1>
          </div>
          <!-- End Col -->

          <div class="col-sm-auto">
            <a class="btn btn-primary" href="{{route('courses.create')}}">
              <i class="bi-person-plus-fill me-1"></i> Add course
            </a>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <!-- Card -->
    <div class="card">
      <div class="card-header card-header-content-md-between">
        <h3 class="card-header-title">Sections & Lessons</h3>
        <small class="text-muted">2 days ago</small>
      </div>
      <div class="card-body">
        
        <div class="container text-center my-3">


          
          @if ($sections === null)
          <!-- Content to display when $sections is null -->
            <img class="mb-3" src="{{ asset('assets/svg/illustrations/oc-error.svg') }}" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium tempore provident, laborum ratione expedita reprehenderit nostrum natus aperiam suscipit distinctio..</p>
          @else
              <!-- Content to display when $sections is not null -->
              @foreach ($sections as $section)


              <!-- Card -->
              {{-- <div class="card p-3 mb-2 bg-soft-primary text-primary ">
                <div class="card-body">
                  {{$section->title}}
                </div>
              </div> --}}
              <!-- End Card -->


              <!-- Accordion -->
              <div class="accordion mb-2" id="accordion{{$section->id}}">
                <div class="accordion-item">
                  <div class="accordion-header" id="heading{{$section->id}}">
                    <a class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$section->id}}" aria-expanded="true" aria-controls="collapse{{$section->id}}">
                      {{$section->title}}
               
                                                                                                                                                                                                                                                                                                  
                    </a>
                  </div>
                  <div id="collapse{{$section->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$section->id}}" data-bs-parent="#accordion{{$section->id}}">
                    <div class="accordion-body">
                      
                      @if ($section->lessons->isEmpty())
                      <p>No lessons found for this section.</p>
                      @else
                          <ul>
                              @foreach ($section->lessons as $lesson)
                                  <!-- Display other lesson information here -->
                                  <!-- Card -->
                                  <div class="card mb-1" style="text-align: left;">
                                    <div class="card-body">
                                      {{ $lesson->title }}
                                    </div>
                                  </div>
                                  <!-- End Card -->
                              @endforeach
                          </ul>
                      @endif
                      {{-- <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addLessonModal{{$section->id}}">
                         New Lesson
                      </button> --}}

                      <!-- Inside your loop -->
                    <button type="button" class="btn btn-outline-primary open-lesson-modal" data-bs-toggle="modal" data-bs-target="#addLessonModal" data-section-id="{{$section->id}}">
                      New Lesson
                    </button>


                    </div>
                  </div>
                </div>

              </div>
              <!-- End Accordion -->
       
   


              @endforeach
              <!-- Button trigger modal -->
         
          @endif
           <br>
              <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addSectionModal">
                  New Section
              </button>
        
        </div>
       
      </div>
    </div>
    <!-- End Card -->

    </div>
    <!-- End Content -->


    <!-- Footer -->

    @include('school.layouts.footer')

    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->


  <!--Section Modal -->
  <div id="addSectionModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Section</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form method="POST" action="{{ route('sections.store', $course->id) }}">
            @csrf 
            <div class="mb-3">
              <label class="form-label" for="title">Title</label>
              <input type="text" id="title" class="form-control" name="title" placeholder="Title">
            </div>

            <div class="mb-3">
              <label class="form-label" for="description">Description</label>
              <input type="text" id="description" name="learning_objective" class="form-control" placeholder="Describe what student will learn in this section">
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>

      </div>
    </div>
  </div>
  <!-- End Modal -->



    <!-- lesson -->
    <div id="addLessonModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg	" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Lesson</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  
         
            <form method="POST" action="">
              @csrf

              <div class="row">
                <div class="mb-3 " style="text-align: left">
                  <label class="form-label" for="title">Title</label>
                  <input type="text" id="title" class="form-control" name="title" placeholder="Title">
                </div>
              </div>
    
              <div class="row">
                <div class="mb-3 " style="text-align: left">                          
                <label class="form-label" for="description">Description</label>
              <input type="text" id="description" name="description" class="form-control" placeholder="Describe what student will learn in this lesson">
            </div>
              </div>
    

                <div class="row mb-2">
                  <div class="mb-2 " style="text-align: left">        
                  <label class="form-label" for="description">Lesson Type</label>
                </div>
          
                <div class="col-sm mb-2 mb-sm-0">
                  <!-- Form Radio -->
                  <label class="form-control" for="formControlRadioEg1">
                    <span class="form-check">
                      <input type="radio" class="form-check-input" name="lesson_type" id="formControlRadioEg1" value="video">
                      <span class="form-check-label">Video</span>
                    </span>
                  </label>
                  <!-- End Form Radio -->
                </div>
              
                <div class="col-sm mb-2 mb-sm-0">
                  <!-- Form Radio -->
                  <label class="form-control" for="formControlRadioEg2">
                    <span class="form-check">
                      <input type="radio" class="form-check-input" name="lesson_type" id="formControlRadioEg2" value="article">
                      <span class="form-check-label">Article </span>
                    </span>
                  </label>
                  <!-- End Form Radio -->
                </div>
      
                <div class="col-sm mb-2 mb-sm-0">
                  <!-- Form Radio -->
                  <label class="form-control" for="formControlRadioEg2">
                    <span class="form-check">
                      <input type="radio" class="form-check-input" name="lesson_type" id="formControlRadioEg2" value="assessment">
                      <span class="form-check-label">Assessmemt </span>
                    </span>
                  </label>
                  <!-- End Form Radio -->
                </div>
      

                <br>
                <div class="row mt-2">
                  <div class="mb-3 " id="videoFields" style="display: none; text-align: left;">
                    <label class="form-label" for="video_url">Video</label>
                    <input type="text" id="title" class="form-control"  name="video_url" id="video_url">
                  </div>
                </div>

            
              
                <div class="row mt-2">
                  <div class="mb-3 " id="articleFields" style="display: none; text-align: left;">
                  <!-- Article-specific fields go here -->
                  <label for="article_content">Article Content</label>

                  <textarea name="article_content" id="article_content"></textarea>
                  <script>
                          CKEDITOR.replace( 'article_content' );
                  </script>

                </div>
                </div>



              
              <div class="form-group" id="assessmentFields" style="display: none;">
                  <!-- Assessment-specific fields go here -->
                  <label for="assessment_questions">Assessment Questions</label>
                  <textarea name="assessment_questions" id="assessment_questions"></textarea>
              </div>
              

        
                </div>
                <!-- End Row -->

  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
  
      </div>
    </div>
  </div>
  <!-- End Modal -->

  




  <!-- End Edit user -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{asset('assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js')}}"></script>
  <script src="{{asset('assets/vendor/hs-form-search/dist/hs-form-search.min.js')}}"></script>

  <script src="{{asset('assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js')}} "></script>
  <script src="{{asset('assets/vendor/hs-file-attach/dist/hs-file-attach.min.js')}} "></script>
  <script src="{{asset('assets/vendor/hs-nav-scroller/dist/hs-nav-scroller.min.js')}} "></script>
  <script src="{{asset('assets/vendor/hs-step-form/dist/hs-step-form.min.js')}} "></script>
  <script src="{{asset('assets/vendor/hs-counter/dist/hs-counter.min.js')}} "></script>
  <script src="{{asset('assets/vendor/appear/dist/appear.min.js')}} "></script>
  <script src="{{asset('assets/vendor/imask/dist/imask.min.js')}} "></script>
  <script src="{{asset('assets/vendor/tom-select/dist/js/tom-select.complete.min.js')}} "></script>
  <script src="{{asset('assets/vendor/datatables/media/js/jquery.dataTables.min.js')}} "></script>
  <script src="{{asset('assets/vendor/datatables.net.extensions/select/select.min.js')}} "></script>
  <script src="{{asset('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}} "></script>
  <script src="{{asset('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js')}} "></script>
  <script src="{{asset('assets/vendor/jszip/dist/jszip.min.js')}} "></script>
  <script src="{{asset('assets/vendor/pdfmake/build/pdfmake.min.js')}} "></script>
  <script src="{{asset('assets/vendor/pdfmake/build/vfs_fonts.js')}} "></script>
  <script src="{{asset('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js')}} "></script>
  <script src="{{asset('assets/vendor/datatables.net-buttons/js/buttons.print.min.js')}} "></script>
  <script src="{{asset('assets/vendor/datatables.net-buttons/js/buttons.colVis.min.js')}} "></script>

  <!-- JS Front -->
  <script src="{{asset('assets/js/theme.min.js')}} "></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF DATATABLES
      // =======================================================
      HSCore.components.HSDatatables.init($('#datatable'), {
        dom: 'Bfrtip',
        buttons: [
          {
            extend: 'copy',
            className: 'd-none'
          },
          {
            extend: 'excel',
            className: 'd-none'
          },
          {
            extend: 'csv',
            className: 'd-none'
          },
          {
            extend: 'pdf',
            className: 'd-none'
          },
          {
            extend: 'print',
            className: 'd-none'
          },
        ],
        select: {
          style: 'multi',
          selector: 'td:first-child input[type="checkbox"]',
          classMap: {
            checkAll: '#datatableCheckAll',
            counter: '#datatableCounter',
            counterInfo: '#datatableCounterInfo'
          }
        },
        language: {
          zeroRecords: `<div class="text-center p-4">
              <img class="mb-3" src="./assets/svg/illustrations/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
              <img class="mb-3" src="./assets/svg/illustrations-light/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
            <p class="mb-0">adata to show</p>
            </div>`
        }
      })

      const datatable = HSCore.components.HSDatatables.getItem(0)

      $('#export-copy').click(function() {
        datatable.button('.buttons-copy').trigger()
      });

      $('#export-excel').click(function() {
        datatable.button('.buttons-excel').trigger()
      });

      $('#export-csv').click(function() {
        datatable.button('.buttons-csv').trigger()
      });

      $('#export-pdf').click(function() {
        datatable.button('.buttons-pdf').trigger()
      });

      $('#export-print').click(function() {
        datatable.button('.buttons-print').trigger()
      });

      $('.js-datatable-filter').on('change', function() {
        var $this = $(this),
          elVal = $this.val(),
          targetColumnIndex = $this.data('target-column-index');

        if (elVal === 'null') elVal = ''

        datatable.column(targetColumnIndex).search(elVal).draw();
      });
    });
  </script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function () {
        

        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside').init()


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        new HSFormSearch('.js-form-search')


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')


        // INITIALIZATION OF INPUT MASK
        // =======================================================
        HSCore.components.HSMask.init('.js-input-mask')


        // INITIALIZATION OF NAV SCROLLER
        // =======================================================
        new HsNavScroller('.js-nav-scroller')


        // INITIALIZATION OF COUNTER
        // =======================================================
        new HSCounter('.js-counter')


        // INITIALIZATION OF TOGGLE PASSWORD
        // =======================================================
        new HSTogglePassword('.js-toggle-password')


        // INITIALIZATION OF FILE ATTACHMENT
        // =======================================================
        new HSFileAttach('.js-file-attach')
      }
    })()
  </script>

  <!-- Style Switcher JS -->

  <script>
      (function () {
        // STYLE SWITCHER
        // =======================================================
        const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
        const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

        // Function to set active style in the dorpdown menu and set icon for dropdown trigger
        const setActiveStyle = function () {
          $variants.forEach($item => {
            if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
              $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
              return $item.classList.add('active')
            }

            $item.classList.remove('active')
          })
        }

        // Add a click event to all items of the dropdown to set the style
        $variants.forEach(function ($item) {
          $item.addEventListener('click', function () {
            HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
          })
        })

        // Call the setActiveStyle on load page
        setActiveStyle()

        // Add event listener on change style to call the setActiveStyle function
        window.addEventListener('on-hs-appearance-change', function () {
          setActiveStyle()
        })
      })()
    </script>

  <!-- End Style Switcher JS -->


  <script>
    $(document).ready(function() {
        // Listen for changes in the radio inputs
        $('input[type=radio][name=lesson_type]').change(function() {
            var selectedType = $(this).val();
    
            // Hide all form fields
            $('#videoFields, #articleFields, #assessmentFields').hide();
    
            // Show the form fields for the selected type
            $('#' + selectedType + 'Fields').show();
        });
    });
    </script>


<script>
  document.addEventListener('DOMContentLoaded', function () {
    const openLessonModalButtons = document.querySelectorAll('.open-lesson-modal');
    const modalForm = document.querySelector('#addLessonModal form');

    openLessonModalButtons.forEach(function (button) {
      button.addEventListener('click', function () {
        const sectionId = this.getAttribute('data-section-id');
modalForm.setAttribute('action', "{{ route('lessons.store', ['sectionId']) }}".replace('sectionId', sectionId));





      });
    });
  });
</script>

    
</body>
</html>