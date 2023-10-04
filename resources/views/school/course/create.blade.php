<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Title -->
  <title>Add Course</title>

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
    <!-- Content -->
    <div class="content container-fluid">


      <!-- Step Form -->
<form  id="courseDetails" class="js-step-form"
data-hs-step-form-options='{
  "progressSelector": "#basicVerStepFormProgress",
  "stepsSelector": "#basicVerStepFormContent",
  "endSelector": "#basicVerStepFinishBtn"
}'>
<div class="row">
<div class="col-lg-3" >
<!-- Step -->
<ul id="basicVerStepFormProgress" class="js-step-progress step step-icon-sm mb-7 ">
  <li class="step-item">
    <a class="step-content-wrapper" href="javascript:;"
       data-hs-step-form-next-options='{
        "targetSelector": "#basicVerStepDetails"
      }'>
      <span class="step-icon step-icon-soft-dark">1</span>
      <div class="step-content pb-5">
        <span class="step-title">Course Information </span>
      </div>
    </a>
  </li>

  <li class="step-item">
    <a class="step-content-wrapper" href="javascript:;"
       data-hs-step-form-next-options='{
         "targetSelector": "#basicVerStepTerms"
       }'>
      <span class="step-icon step-icon-soft-dark">2</span>
      <div class="step-content pb-5">
        <span class="step-title">Learning Outcomes & Objectives</span>
      </div>
    </a>
  </li>

  <li class="step-item">
    <a class="step-content-wrapper" href="javascript:;"
       data-hs-step-form-next-options='{
         "targetSelector": "#basicVerStepPricing"
       }'>
      <span class="step-icon step-icon-soft-dark">3</span>
      <div class="step-content pb-5">
        <span class="step-title">Pricing</span>
      </div>
    </a>
  </li>

  <li class="step-item">
    <a class="step-content-wrapper" href="javascript:;"
       data-hs-step-form-next-options='{
         "targetSelector": "#basicVerStepCourseMessages"
       }'>
      <span class="step-icon step-icon-soft-dark">4</span>
      <div class="step-content pb-5">
        <span class="step-title">Course Messages</span>
      </div>
    </a>
  </li>

  
</ul>
<!-- End Step -->
</div>

<div class="col-lg-9">
<!-- Content Step Form -->
<div id="basicVerStepFormContent">
  <div id="basicVerStepDetails" class="card card-body active" style="min-height: 15rem;">
    
    <div class="my-2">
      <h2>Basic Infomation</h2>
      <hr>
    </div>




      <!-- Form -->
      <div class="row mb-4">
        <label for="courseTitleLabel" class="col-sm-3 col-form-label form-label">Course Title</label>

        <div class="col-sm-9">
          <input type="text" class="form-control" name="title" id="courseTitleLabel" placeholder="Insert your course title.">
        </div>
      </div>
      <!-- End Form -->

      <!-- Form -->
      <div class="row mb-4">
        <label for="courseSubtitleLabel" class="col-sm-3 col-form-label form-label">Course Subtitle</label>

        <div class="col-sm-9">
          <input type="text" class="form-control" name="subtitle" id="courseSubtitleLabel" placeholder="Insert your course sub-title.">
        </div>
      </div>
      <!-- End Form -->


      <!-- Form -->
      <div class="row mb-4">
        <label for="courseSubtitleLabel" class="col-sm-3 col-form-label form-label">Course Description</label>

        <div class="col-sm-9">
        <!-- Form -->
              <textarea name="description"></textarea>
                <script>
                        CKEDITOR.replace( 'description' );
                </script>
              <!-- End Form -->

        </div>
      </div>
      <!-- End Form -->


     

      
      <!-- Form -->
      <div class="row mb-4">
        <label for="courseCategoryLabel" class="col-sm-3 col-form-label form-label">Category & Sub-Category</label>

        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-6">
                    <!-- Select -->
                    <div class="tom-select-custom">
                        <select name="category" class="js-select form-select" autocomplete="off" id="courseCategoryLabel" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "placeholder": "Select category"
                                }'>
                            <option label="empty"></option>
                            <option value="IT & Software">Information Technology & Software </option>
                            <option value="Business Development">Business Development </option>
                 
                        </select>
                    </div>
                    <!-- End Select -->
                </div>

                <div class="col-sm-6">
                    <!-- Select -->
                    <div class="tom-select-custom">
                        <select name="subcategory" class="js-select form-select" autocomplete="off" id="courseSubCategoryLabel" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "placeholder": "Select subcategory"
                                }'>
                            <option label="empty"></option>
       
                        </select>
                    </div>
                    <!-- End Select -->
                </div>
            </div>
        </div>
      </div>
      <!-- End Form -->

      <!-- Form -->
      <div class="row mb-4">
        <label for="coursePhoto" class="col-sm-3 col-form-label form-label">Course Photo</label>
        <div class="col-sm-9">

          <!-- Dropzone -->
               <div id="coursePhoto" class="js-dropzone dz-dropzone dz-dropzone-card">
                <div class="dz-message">
                  <img class="avatar avatar-xl avatar-4x3 mb-3" src="{{asset('assets/svg/illustrations/oc-browse.svg')}}" alt="Image Description" data-hs-theme-appearance="default">
                  <img class="avatar avatar-xl avatar-4x3 mb-3" src="{{asset('assets/svg/illustrations-light/oc-browse.svg')}}" alt="Image Description" data-hs-theme-appearance="dark">

                  <h5>Drag and drop your file here</h5>

                  <p class="mb-2">or</p>

                  <span class="btn btn-white btn-sm">Browse files</span>
                </div>
              </div>
              <!-- End Dropzone -->
        </div>
      </div>
      <!-- End Form -->


      
      <!-- Form -->
      <div class="row mb-4">
        <label for="coursePromotionVideo" class="col-sm-3 col-form-label form-label">Promotional Video</label>
        <div class="col-sm-9">

          <!-- Dropzone -->
                <div id="coursePromotionVideo" class="js-dropzone dz-dropzone dz-dropzone-card">
                <div class="dz-message">
                  <img class="avatar avatar-xl avatar-4x3 mb-3" src="{{asset('assets/svg/illustrations/oc-browse.svg')}}" alt="Image Description" data-hs-theme-appearance="default">
                  <img class="avatar avatar-xl avatar-4x3 mb-3" src="{{asset('assets/svg/illustrations-light/oc-browse.svg')}}" alt="Image Description" data-hs-theme-appearance="dark">

                  <h5>Drag and drop your file here</h5>

                  <p class="mb-2">or</p>

                  <span class="btn btn-white btn-sm">Browse files</span>
                </div>
              </div>
              <!-- End Dropzone -->
        </div>
      </div>
      <!-- End Form -->
     




        <!-- Footer -->
        <div class="d-flex align-items-center mt-auto">
          <div class="ms-auto">
            <button type="button" class="btn btn-white me-2"  >Save in drafts</button>
            <button type="button" class="btn btn-primary"
                    data-hs-step-form-next-options='{
                      "targetSelector": "#basicVerStepTerms"
                    }'>
              Next <i class="bi-chevron-right small"></i>
            </button>
          </div>
        </div>
        <!-- End Footer -->
      </div>










  <div id="basicVerStepTerms" class="card card-body" style="display: none; min-height: 15rem;">
    <h2>Learning Objective & Outcomes</h2>
    <hr>
    <!-- Form -->

  <div class="row mb-4">
    <div class="js-add-field row mb-4"
      data-hs-add-field-options='{
        "template": "#addLearningOutcomes",
        "container": "#addLearningOutcomesFieldContainer",
        "defaultCreated": 0
      }'>
      <label for="learningOutcomesLabel" class="col-sm-3 col-form-label form-label">Learning Outcomes</label>

      <div class="col-sm-9">
        <!-- Use "[]" in the name attribute to make it an array -->
        <input type="text" class="form-control" name="learning_objectives[]" placeholder="Enter learning outcomes">
        
        <!-- Container For Input Field -->
        <div id="addLearningOutcomesFieldContainer"></div>
        
        <a href="javascript:;" class="js-create-field form-link">
          <i class="bi-plus-circle me-1"></i> Add field
        </a>
      </div>
    </div>
  </div>

<!-- End Form -->

<!-- Add learning outcomes Input Field -->
<div id="addLearningOutcomes" style="display: none;">
  <div class="input-group-add-field">
    <!-- Use "[]" in the name attribute to make it an array -->
    <input type="text" class="form-control" name="learning_objectives[]" placeholder="Enter learning outcomes">
  </div>

  <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
    <i class="bi-x-lg"></i>
  </a>
</div>
<!-- End learning outcome Input Field -->

      
        <!-- Form -->
        <div class="row mb-4">
          <div class="js-add-field row mb-4"
          data-hs-add-field-options='{
            "template": "#addPrerequisites",
            "container": "#addPrerequisitesFieldContainer",
            "defaultCreated": 0
          }'>
          <label for="prerequisitesLabel" class="col-sm-3 col-form-label form-label">Prerequisites</label>
      
          <div class="col-sm-9">
          <input type="text" class=" form-control" name="prerequisites[]" id="prerequisitesLabel" placeholder="Enter prerequisites" >
      
          <!-- Container For Input Field -->
          <div id="addPrerequisitesFieldContainer"></div>
      
          <a href="javascript:;" class="js-create-field form-link">
          <i class="bi-plus-circle me-1"></i> Add field
          </a>
          </div>
          </div>
          <!-- End Form -->
      
          <!-- Add prerequisites Input Field -->
          <div id="addPrerequisites" style="display: none;">
          <div class="input-group-add-field">
          <input type="text" class=" form-control"  name="prerequisites[]"  placeholder="Enter prerequisites" >
          </div>
        
          <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
          <i class="bi-x-lg"></i>
          </a>
          </div>
          <!-- End prerequisites Input Field -->
        </div>

             <!-- Form -->
             <div class="row mb-4">
              <div class="js-add-field row mb-4"
              data-hs-add-field-options='{
                "template": "#addTargetAudience",
                "container": "#addTargetAudienceFieldContainer",
                "defaultCreated": 0
              }'>
              <label for="targetAudienceLabel" class="col-sm-3 col-form-label form-label">Target Audience</label>
          
              <div class="col-sm-9">
              <input type="text" class="form-control"  name="target_audiences[]" id="targetAudienceLabel" placeholder="Enter Target Audience" >
          
              <!-- Container For Input Field -->
              <div id="addTargetAudienceFieldContainer"></div>
          
              <a href="javascript:;" class="js-create-field form-link">
              <i class="bi-plus-circle me-1"></i> Add field
              </a>
              </div>
              </div>
              <!-- End Form -->

                  <!-- Add prerequisites Input Field -->
                <div id="addTargetAudience" style="display: none;">
                  <div class="input-group-add-field">
                  <input type="text" class=" form-control" name="target_audiences[]"  placeholder="Enter Target Audience" >
                  </div>
                
                  <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                  <i class="bi-x-lg"></i>
                  </a>
                  </div>
                  <!-- End prerequisites Input Field -->
            </div>

      

    <!-- Footer -->
    <div class="d-flex align-items-center mt-auto">
      <button type="button" class="btn btn-ghost-secondary me-2"
         data-hs-step-form-prev-options='{
           "targetSelector": "#basicVerStepDetails"
         }'>
        <i class="bi-chevron-left small"></i> Previous step
      </button>

      <div class="ms-auto">
        <button type="button" class="btn btn-primary"
                data-hs-step-form-next-options='{
                  "targetSelector": "#basicVerStepPricing"
                }'>
          Next <i class="bi-chevron-right small"></i>
        </button>
      </div>
    </div>
    <!-- End Footer -->
  </div>

  <div id="basicVerStepPricing" class="card card-body" style="display: none; min-height: 15rem;">
    <h2>Pricing</h2>
    <hr>
    
      <!-- Form -->
      <div class="row mb-4">
        <label for="price" class="col-sm-3 col-form-label form-label">Original Price</label>

        <div class="col-sm-9">
          <div class="input-group">
            <input type="number" class="form-control" id="price" name="price" >

            <div class="input-group-append">
              <!-- Select -->
              <div class="tom-select-custom">
                <select name="currency" class="js-select form-select" data-hs-tom-select-options='{
                          "searchInDropdown": false,
                          "hideSearch": true,
                          "dropdownWidth": "7rem",
                          "dropdownWrapperClass": "tom-select-custom tom-select-custom-end"
                        }'>
                  <option value="USD" selected>USD</option>
                  <option value="AED">AED</option>
                  <option value="AFN">AFN</option>
                  <option value="ALL">ALL</option>
                  <option value="AMD">AMD</option>
                  <option value="ANG">ANG</option>
                  <option value="AOA">AOA</option>
                  <option value="ARS">ARS</option>
                  <option value="AUD">AUD</option>
                  <option value="AWG">AWG</option>
                  <option value="AZN">AZN</option>
                  <option value="BAM">BAM</option>
                  <option value="BBD">BBD</option>
                  <option value="BDT">BDT</option>
                  <option value="BGN">BGN</option>
                  <option value="BIF">BIF</option>
                  <option value="BMD">BMD</option>
                  <option value="BND">BND</option>
                  <option value="BOB">BOB</option>
                  <option value="BRL">BRL</option>
                  <option value="BSD">BSD</option>
                  <option value="BWP">BWP</option>
                  <option value="BZD">BZD</option>
                  <option value="CAD">CAD</option>
                  <option value="CDF">CDF</option>
                  <option value="CHF">CHF</option>
                  <option value="CLP">CLP</option>
                  <option value="CNY">CNY</option>
                  <option value="COP">COP</option>
                  <option value="CRC">CRC</option>
                  <option value="CVE">CVE</option>
                  <option value="CZK">CZK</option>
                  <option value="DJF">DJF</option>
                  <option value="DKK">DKK</option>
                  <option value="DOP">DOP</option>
                  <option value="DZD">DZD</option>
                  <option value="EGP">EGP</option>
                  <option value="ETB">ETB</option>
                  <option value="EUR">EUR</option>
                  <option value="FJD">FJD</option>
                  <option value="FKP">FKP</option>
                  <option value="GBP">GBP</option>
                  <option value="GEL">GEL</option>
                  <option value="GIP">GIP</option>
                  <option value="GMD">GMD</option>
                  <option value="GNF">GNF</option>
                  <option value="GTQ">GTQ</option>
                  <option value="GYD">GYD</option>
                  <option value="HKD">HKD</option>
                  <option value="HNL">HNL</option>
                  <option value="HRK">HRK</option>
                  <option value="HTG">HTG</option>
                  <option value="HUF">HUF</option>
                  <option value="IDR">IDR</option>
                  <option value="ILS">ILS</option>
                  <option value="INR">INR</option>
                  <option value="ISK">ISK</option>
                  <option value="JMD">JMD</option>
                  <option value="JPY">JPY</option>
                  <option value="KES">KES</option>
                  <option value="KGS">KGS</option>
                  <option value="KHR">KHR</option>
                  <option value="KMF">KMF</option>
                  <option value="KRW">KRW</option>
                  <option value="KYD">KYD</option>
                  <option value="KZT">KZT</option>
                  <option value="LAK">LAK</option>
                  <option value="LBP">LBP</option>
                  <option value="LKR">LKR</option>
                  <option value="LRD">LRD</option>
                  <option value="LSL">LSL</option>
                  <option value="MAD">MAD</option>
                  <option value="MDL">MDL</option>
                  <option value="MGA">MGA</option>
                  <option value="MKD">MKD</option>
                  <option value="MMK">MMK</option>
                  <option value="MNT">MNT</option>
                  <option value="MOP">MOP</option>
                  <option value="MRO">MRO</option>
                  <option value="MUR">MUR</option>
                  <option value="MVR">MVR</option>
                  <option value="MWK">MWK</option>
                  <option value="MXN">MXN</option>
                  <option value="MYR">MYR</option>
                  <option value="MZN">MZN</option>
                  <option value="NAD">NAD</option>
                  <option value="NGN">NGN</option>
                  <option value="NIO">NIO</option>
                  <option value="NOK">NOK</option>
                  <option value="NPR">NPR</option>
                  <option value="NZD">NZD</option>
                  <option value="PAB">PAB</option>
                  <option value="PEN">PEN</option>
                  <option value="PGK">PGK</option>
                  <option value="PHP">PHP</option>
                  <option value="PKR">PKR</option>
                  <option value="PLN">PLN</option>
                  <option value="PYG">PYG</option>
                  <option value="QAR">QAR</option>
                  <option value="RON">RON</option>
                  <option value="RSD">RSD</option>
                  <option value="RUB">RUB</option>
                  <option value="RWF">RWF</option>
                  <option value="SAR">SAR</option>
                  <option value="SBD">SBD</option>
                  <option value="SCR">SCR</option>
                  <option value="SEK">SEK</option>
                  <option value="SGD">SGD</option>
                  <option value="SHP">SHP</option>
                  <option value="SLL">SLL</option>
                  <option value="SOS">SOS</option>
                  <option value="SRD">SRD</option>
                  <option value="STD">STD</option>
                  <option value="SZL">SZL</option>
                  <option value="THB">THB</option>
                  <option value="TJS">TJS</option>
                  <option value="TOP">TOP</option>
                  <option value="TRY">TRY</option>
                  <option value="TTD">TTD</option>
                  <option value="TWD">TWD</option>
                  <option value="TZS">TZS</option>
                  <option value="UAH">UAH</option>
                  <option value="UGX">UGX</option>
                  <option value="UYU">UYU</option>
                  <option value="UZS">UZS</option>
                  <option value="VND">VND</option>
                  <option value="VUV">VUV</option>
                  <option value="WST">WST</option>
                  <option value="XAF">XAF</option>
                  <option value="XCD">XCD</option>
                  <option value="XOF">XOF</option>
                  <option value="XPF">XPF</option>
                  <option value="YER">YER</option>
                  <option value="ZAR">ZAR</option>
                  <option value="ZMW">ZMW</option>
                </select>
              </div>
              <!-- End Select -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Form -->


        <!-- Form -->
        <div class="row mb-4">
          <label for="discount_price" class="col-sm-3 col-form-label form-label">Discounted Price</label>
  
          <div class="col-sm-9">
            <div class="input-group">
              <input type="number" class="form-control" id="discount_price" name="discounted_price" >

            </div>
          </div>
        </div>
        <!-- End Form -->
        <p id="discount_percentage">Discount: 0%</p>

    <!-- Footer -->
    <div class="d-sm-flex align-items-center mt-auto">
      <button type="button" class="btn btn-ghost-secondary mb-3 mb-sm-0 me-2"
         data-hs-step-form-prev-options='{
           "targetSelector": "#basicVerStepTerms"
         }'>
        <i class="bi-chevron-left small"></i> Previous step
      </button>

      <div class="d-flex justify-content-end ms-auto">
        {{-- <button type="button" class="btn btn-white me-2" data-dismiss="modal" aria-label="Close">Cancel</button> --}}
        <button id="basicVerStepFinishBtn" type="button" class="btn btn-primary">Create project</button>
      </div>
    </div>
    <!-- End Footer -->
  </div>

  <div id="basicVerStepCourseMessages" class="card card-body" style="display: none; min-height: 15rem;">
    <h2>Course Messages</h2>
    <hr>

      <!-- Form -->
      <div class="row mb-4">
        <label for="courseSubtitleLabel" class="col-sm-3 col-form-label form-label">Welcome Message</label>

        <div class="col-sm-9">
        <!-- Form -->
              <textarea name="welcome_message"></textarea>
                <script>
                        CKEDITOR.replace( 'welcome_message' );
                </script>
              <!-- End Form -->

        </div>
      </div>
      <!-- End Form -->


            <!-- Form -->
            <div class="row mb-4">
              <label for="courseSubtitleLabel" class="col-sm-3 col-form-label form-label">Congratualations Message</label>
      
              <div class="col-sm-9">
              <!-- Form -->
                    <textarea name="congratulations_message"></textarea>
                      <script>
                              CKEDITOR.replace( 'congratulations_message' );
                      </script>
                    <!-- End Form -->
      
              </div>
            </div>
            <!-- End Form -->

            




    <!-- Footer -->
    <div class="d-sm-flex align-items-center mt-auto">
      <button type="button" class="btn btn-ghost-secondary mb-3 mb-sm-0 me-2"
         data-hs-step-form-prev-options='{
           "targetSelector": "#basicVerStepPricing"
         }'>
        <i class="bi-chevron-left small"></i> Previous step
      </button>

      <div class="d-flex justify-content-end ms-auto">
        <button type="button" class="btn btn-white me-2" data-dismiss="modal" aria-label="Close">Cancel</button>
        <button id="basicVerStepFinishBtn" type="submit" class="btn btn-primary">Create Course</button>
      </div>
    </div>
    <!-- End Footer -->
  </div>




</div>
<!-- End Content Step Form -->
</div>
</div>
<!-- End Row -->

<!-- Message Body -->
<div id="basicVerStepSuccessMessage" class="js-success-message" style="display:none;">
<div class="text-center">
<img class="img-fluid mb-3" src="../assets/svg/illustrations/oc-hi-five.svg" alt="Image Description" style="max-width: 15rem;">

<div class="mb-4">
  <h2>Successful!</h2>
  <p>New project has been successfully created.</p>
</div>

<div class="d-flex justify-content-center">
  <a class="btn btn-white me-3" href="#">
    <i class="bi-chevron-left small ms-1"></i> Back to projects
  </a>
  <a class="btn btn-primary" href="#">
    <i class="tio-city me-1"></i> Add new project
  </a>
</div>
</div>
</div>
<!-- End Message Body -->
</form>
<!-- End Step Form -->


    </div>
    <!-- End Content -->

    <!-- Footer -->

    @include('school.layouts.footer')


    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Keyboard Shortcuts -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasKeyboardShortcuts" aria-labelledby="offcanvasKeyboardShortcutsLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasKeyboardShortcutsLabel" class="mb-0">Keyboard shortcuts</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Formatting</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="fw-semibold">Bold</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">b</kbd>
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <em>italic</em>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">i</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <u>Underline</u>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">u</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <s>Strikethrough</s>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
              <!-- End Col -->
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="small">Small text</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <mark>Highlight</mark>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">e</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Insert</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Mention person <a href="#">(@Brian)</a></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">@</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Link to doc <a href="#">(+Meeting notes)</a></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">+</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <a href="#">#hashtag</a>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">#hashtag</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Date</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/date</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Time</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/time</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Note box</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/note</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Editing</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find and replace</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">r</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find next</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find previous</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Indent</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Un-indent</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line up</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1"><i class="bi-arrow-up-short"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line down</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1"><i class="bi-arrow-down-short fs-5"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Add a comment</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">m</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Undo</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">z</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Redo</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">y</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
        <div class="list-group-item">
          <h5 class="mb-1">Application</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Create new doc</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Present</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Share</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Search docs</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">o</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Keyboard shortcuts</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">/</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>
    </div>
  </div>
  <!-- End Keyboard Shortcuts -->

  <!-- Activity -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivityStream" aria-labelledby="offcanvasActivityStreamLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasActivityStreamLabel" class="mb-0">Activity stream</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <!-- Step -->
      <ul class="step step-icon-sm step-avatar-sm">
        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar" src="./assets/img/160x160/img9.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Iana Robinson</h5>

              <p class="fs-5 mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fd-7</a></p>

              <ul class="list-group list-group-sm">
                <!-- List Item -->
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                          <span class="d-block small text-muted">12kb</span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->

                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="./assets/svg/brands/word-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                          <span class="d-block small text-muted">4kb</span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </li>
                <!-- End List Item -->
              </ul>

              <span class="small text-muted text-uppercase">Now</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-dark">B</span>

            <div class="step-content">
              <h5 class="mb-1">Bob Dean</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-6</a> as <span class="badge bg-soft-success text-success rounded-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

              <span class="small text-muted text-uppercase">Today</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="h5 mb-1">Crane</h5>

              <p class="fs-5 mb-1">Added 5 card to <a href="#">Payments</a></p>

              <ul class="list-group list-group-sm">
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-1.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-2.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-3.svg" alt="Image Description">
                    </div>
                    <div class="col-auto align-self-center">
                      <div class="text-center">
                        <a href="#">+2</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>

              <span class="small text-muted text-uppercase">May 12</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-info">D</span>

            <div class="step-content">
              <h5 class="mb-1">David Lidell</h5>

              <p class="fs-5 mb-1">Added a new member to Front Dashboard</p>

              <span class="small text-muted text-uppercase">May 15</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Rachel King</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-3</a> as <span class="badge bg-soft-success text-success rounded-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

              <span class="small text-muted text-uppercase">Apr 29</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Finch Hoot</h5>

              <p class="fs-5 mb-1">Earned a "Top endorsed" <i class="bi-patch-check-fill text-primary"></i> badge</p>

              <span class="small text-muted text-uppercase">Apr 06</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">
              <i class="bi-person-fill"></i>
            </span>

            <div class="step-content">
              <h5 class="mb-1">Project status updated</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-3</a> as <span class="badge bg-soft-primary text-primary rounded-pill"><span class="legend-indicator bg-primary"></span>"In progress"</span></p>

              <span class="small text-muted text-uppercase">Feb 10</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->
      </ul>
      <!-- End Step -->

      <div class="d-grid">
        <a class="btn btn-white" href="javascript:;">View all <i class="bi-chevron-right"></i></a>
      </div>
    </div>
  </div>
  <!-- End Activity -->

  <!-- Welcome Message Modal -->
  <div class="modal fade" id="welcomeMessageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm" data-bs-dismiss="modal" aria-label="Close">
            <i class="bi-x-lg"></i>
          </button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body p-sm-5">
          <div class="text-center">
            <div class="w-75 w-sm-50 mx-auto mb-4">
              <img class="img-fluid" src="./assets/svg/illustrations/oc-collaboration.svg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid" src="./assets/svg/illustrations-light/oc-collaboration.svg" alt="Image Description" data-hs-theme-appearance="dark">
            </div>

            <h4 class="h1">Welcome to Front</h4>

            <p>We're happy to see you in our community.</p>
          </div>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer d-block text-center py-sm-5">
          <small class="text-cap text-muted">Trusted by the world's best teams</small>

          <div class="w-85 mx-auto">
            <div class="row justify-content-between">
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/gitlab-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/fitbit-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/layar-gray.svg" alt="Image Description">
              </div>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>

  <!-- End Welcome Message Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/dropzone/dist/min/dropzone.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{asset('assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js')}}"></script>
  <script src="{{asset('assets/vendor/hs-form-search/dist/hs-form-search.min.js')}}"></script>

  <script src="{{asset('assets/vendor/hs-file-attach/dist/hs-file-attach.min.js')}}"></script>
  <script src="{{asset('assets/vendor/hs-step-form/dist/hs-step-form.min.js')}}"></script>
  <script src="{{asset('assets/vendor/hs-add-field/dist/hs-add-field.min.js')}}"></script>
  <script src="{{asset('assets/vendor/imask/dist/imask.min.js')}}"></script>
  <script src="{{asset('assets/vendor/tom-select/dist/js/tom-select.complete.min.js')}}"></script>
 

  <!-- JS Front -->
  <script src="{{asset('assets/js/theme.min.js')}}"></script>

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


        // INITIALIZATION OF FILE ATTACH
        // =======================================================
        new HSFileAttach('.js-file-attach')


        // INITIALIZATION OF STEP FORM
        // =======================================================
        new HSStepForm('.js-step-form', {
          finish: () => {
            document.getElementById("addUserStepFormProgress").style.display = 'none'
            document.getElementById("addUserStepProfile").style.display = 'none'
            document.getElementById("addUserStepBillingAddress").style.display = 'none'
            document.getElementById("addUserStepConfirmation").style.display = 'none'
            document.getElementById("successMessageContent").style.display = 'block'
            scrollToTop('#header');
            const formContainer = document.getElementById('formContainer')
          },
          onNextStep: function () {
            scrollToTop()
          },
          onPrevStep: function () {
            scrollToTop()
          }
        })

        function scrollToTop(el = '.js-step-form') {
          el = document.querySelector(el)
          window.scrollTo({
            top: (el.getBoundingClientRect().top + window.scrollY) - 30,
            left: 0,
            behavior: 'smooth'
          })
        }


  

        


        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select', {
          render: {
            'option': function (data, escape) {
              return data.optionTemplate || `<div>${data.text}</div>>`
            },
            'item': function (data, escape) {
              return data.optionTemplate || `<div>${data.text}</div>>`
            }
          }
        })








                        // INITIALIZATION OF DROPZONE
        // =======================================================
        HSCore.components.HSDropzone.init('.js-dropzone')
        var dropzoneElement = $('.js-dropzone')[0].dropzone;

        // Access Dropzone data
        if (dropzoneElement) {
          // You can access various properties and methods of the Dropzone instance here
          // For example, you can get the files that have been dropped or selected:
          var uploadedFiles = dropzoneElement.files;
          
          // You can also bind events to the Dropzone instance:
          dropzoneElement.on('addedfile', function(file) {
            // This event is triggered when a file is added to the Dropzone
            console.log('File added:', file);
          });
        }


        var promotionalVideoDropzoneElement = $('#coursePromotionVideo')[0].dropzone;
        if (promotionalVideoDropzoneElement) {
            promotionalVideoDropzoneElement.on('addedfile', function (file) {
                // This event is triggered when a file is added to the PromotionalVideo Dropzone
                console.log('Promotional Video File added:', file);
            });
        }
                
        // INITIALIZATION OF QUILLJS EDITOR
        // =======================================================
        // HSCore.components.HSQuill.init('.js-quill')


                // INITIALIZATION OF INPUT MASK
        // =======================================================
        // HSCore.components.HSMask.init('.js-input-mask')


              // INITIALIZATION OF ADD FIELD
        // =======================================================
        new HSAddField('.js-add-field', {
          addedField: field => {
            HSCore.components.HSTomSelect.init(field.querySelector('.js-select-dynamic'))
            // HSCore.components.HSMask.init(field.querySelector('.js-input-mask'))
          }
        })


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



<script>
  $(document).ready(function () {
      // Listen for the form submission
      $("#courseDetails").submit(function (event) {
          event.preventDefault(); // Prevent the default form submission

          // Create a new FormData object and append form data to it
          var formData = new FormData(this);
          var csrfToken = $('meta[name="csrf-token"]').attr('content');

          // Get the Dropzone element
          var dropzoneElement = $('.js-dropzone')[0].dropzone;

          // Check if Dropzone has files
          // if (dropzoneElement.files.length > 0) {
          //     // Iterate through the files in Dropzone and append them to formData
          //     for (var i = 0; i < dropzoneElement.files.length; i++) {
          //         formData.append('photo_path[]', dropzoneElement.files[i]); // 'photo_path[]' should match your Laravel request field name
          //     }
          // }

          dropzoneElement.files.forEach(function (file) {
            formData.append("photo_path[]", file); // Use an array if you expect multiple files
        });
        console.log("FormData:", formData);

        
        // Get the 'PromotionalVideo' Dropzone element
          var promotionalVideoDropzoneElement = $('#coursePromotionVideo')[0].dropzone;

          // Check if 'PromotionalVideo' Dropzone has files
          if (promotionalVideoDropzoneElement) {
              promotionalVideoDropzoneElement.files.forEach(function (file) {
                  formData.append("promo_video_path[]", file); // Use an array if you expect multiple files
              });
          }
          console.log("video success");

          console.log("FormData:", formData);

          
         
          // Make an AJAX request
          $.ajax({
            headers: {'X-CSRF-TOKEN': csrfToken},
              url: "{{route('courses.store')}}",
              type: "POST",
              data: formData,
              contentType: false,
              
              processData: false,
              success: function (response) {
                  // Handle success response
                  console.log("Success:", response);
                
              },
              error: function (xhr, status, error) {
                  // Handle error response
                  console.log("Error:", error);
              }
          });
      });
  });
</script>

<script>
  // Get the input fields
  const originalPriceInput = document.getElementById("price");
  const discountedPriceInput = document.getElementById("discount_price");

  // Get the p tag for displaying the discount percentage
  const discountPercentageElement = document.getElementById("discount_percentage");

  // Add an event listener to both input fields to calculate the discount
  originalPriceInput.addEventListener("input", updateDiscountPercentage);
  discountedPriceInput.addEventListener("input", updateDiscountPercentage);

  // Function to update the discount percentage
  function updateDiscountPercentage() {
    const originalPrice = parseFloat(originalPriceInput.value) || 0;
    const discountedPrice = parseFloat(discountedPriceInput.value) || 0;

    if (originalPrice > 0) {
      const discount = ((originalPrice - discountedPrice) / originalPrice) * 100;
      discountPercentageElement.textContent = `Discount: ${discount.toFixed(2)}%`;
    } else {
      discountPercentageElement.textContent = "Discount: 0%";
    }
  }
</script>

  <!-- End Style Switcher JS -->
</body>
</html>