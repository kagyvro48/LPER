<!doctype html>
<html lang="en">


<!-- Mirrored from shreethemes.net/hiredio-landing/hiredio/post-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Oct 2024 21:08:29 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hiredio - Job Board & Freelance Marketplace HTML Template</title>
    <link rel="icon" type="image/x-icon" href="assets/front/img/favicon.png">

    <!-- All Plugins -->
    <link href="assets/front/css/animation.css" rel="stylesheet">
    <link href="assets/front/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/front/css/dropzone.min.css" rel="stylesheet">
    <link href="assets/front/css/flatpickr.min.css" rel="stylesheet">
    <link href="assets/front/css/slick.css" rel="stylesheet">
    <link href="assets/front/css/slick-theme.css" type="text/css" rel="stylesheet">
    <link href="assets/front/css/rangeSlider.min.css" rel="stylesheet">
    <link href="assets/front/css/select2.min.css" rel="stylesheet">
    <link href="assets/front/css/prism.css" rel="stylesheet">

    <!-- Icons CSS -->
    <link href="assets/front/css/fontawesome.css" rel="stylesheet">
    <link href="assets/front/css/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/front/css/style.css" rel="stylesheet">
</head>

<body class="candidate-dashboard bg-light">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div id="preloader">
    <div class="preloader"><span></span><span></span></div>
</div>

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    <div class="header header-light head-fixed">
        <div class="container-fluid">
            <nav id="navigation" class="navigation navigation-landscape">
                <div class="nav-header">
                    <a class="nav-brand" href="#">
                        <img style="width: 50px;" src="assets/front/img/logo.png" class="logo main-logo" alt="">
                        <img style="width: 50px;" src="assets/front/img/logo.png" class="logo change-logo" alt="">
                        <img style="width: 50px;" src="assets/front/img/logo.png" class="logo mobile-logo" alt="">
                    </a>
                    <div class="nav-toggle"></div>
                    <div class="mobile_nav">
                        <ul>

                            <li>
                                <div class="btn-group account-drop">
                                    <a href="#" class="nav-link btn-order-by-filt" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="d-inline-flex w-10 h-10 circle overflow-hidden"><img src="assets/front/img/com-3.png" class="img-fluid" alt=""></div>
                                    </a>
                                    <div class="dropdown-menu pull-right animated flipInX">
                                        <div class="drp_menu_headr bg-primary">
                                            <h4>Hi, Employer</h4>
                                            <div class="drp_menu_headr-right"><button type="button"
                                                                                      class="btn btn-whites text-dark">Logout</button></div>
                                        </div>
                                        <ul>
                                            <li class="active"><a href="employer-dashboard.html"><i class="fa-solid fa-gauge-high me-2"></i>Dashboard</a></li>
                                            <li><a href="employer-jobs.html"><i class="bi bi-droplet-half me-2"></i>My Jobs</a></li>
                                            <li><a href="employer-applicants.html"><i class="bi bi-person-vcard me-2"></i>Applicants</a></li>
                                            <li><a href="employer-candidates.html"><i class="bi bi-people me-2"></i>Candidates</a></li>
                                            <li><a href="employer-packages.html"><i class="fa-regular fa-paper-plane me-2"></i>Packages</a></li>
                                            <li><a href="employer-company.html"><i class="bi bi-buildings me-2"></i>Company</a></li>
                                            <li><a href="employer-messages.html"><i class="bi bi-chat-dots me-2"></i>Messages<span class="notti_coun style-1">4</span></a></li>
                                            <li><a href="employer-settings.html"><i class="bi bi-gear me-2"></i>Settings</a></li>
                                            <li><a href="index-2.html"><i class="bi bi-power me-2"></i>Log Out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="nav-menus-wrapper">
                    <ul class="nav-menu">

                        <li><a href="{{ route('welcome')  }}">Accueil<span class="submenu-indicator"></span></a></li>

                        <li><a href="JavaScript:Void(0);">Blog<span class="submenu-indicator"></span></a></li>

                        <li><a href="JavaScript:Void(0);">Contactez-nous<span class="submenu-indicator"></span></a></li>


                        <li class="mob-addproject"><a class="add" href="post-job.html">Post Your Job</a></li>


                    </ul>

                    <ul class="nav-menu nav-menu-social align-to-right">

                        <li>
                            <div class="btn-group account-drop drk">
                                <a href="#" class="nav-link btn-order-by-filt border-0 pe-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="d-inline-flex w-10 h-10 circle overflow-hidden"><img src="assets/front/img/com-3.png" class="img-fluid" alt=""></div>
                                    <span class="fw-medium d-inline-flex ms-2">Employer<i class="fa-solid fa-sort-down ms-1"></i></span>
                                </a>
                                <div class="dropdown-menu pull-right animated flipInX">
                                    <div class="drp_menu_headr bg-primary">
                                        <h4>Hi, Employer</h4>
                                        <div class="drp_menu_headr-right"><button type="button"
                                                                                  class="btn btn-whites text-dark">Logout</button></div>
                                    </div>
                                    <ul>
                                        <li class="active"><a href="employer-dashboard.html"><i class="fa-solid fa-gauge-high me-2"></i>Dashboard</a></li>
                                        <li><a href="employer-jobs.html"><i class="bi bi-droplet-half me-2"></i>My Jobs</a></li>
                                        <li><a href="employer-applicants.html"><i class="bi bi-person-vcard me-2"></i>Applicants</a></li>
                                        <li><a href="employer-candidates.html"><i class="bi bi-people me-2"></i>Candidates</a></li>
                                        <li><a href="employer-packages.html"><i class="fa-regular fa-paper-plane me-2"></i>Packages</a></li>
                                        <li><a href="employer-company.html"><i class="bi bi-buildings me-2"></i>Company</a></li>
                                        <li><a href="employer-messages.html"><i class="bi bi-chat-dots me-2"></i>Messages<span class="notti_coun style-1">4</span></a></li>
                                        <li><a href="employer-settings.html"><i class="bi bi-gear me-2"></i>Settings</a></li>
                                        <li><a href="index-2.html"><i class="bi bi-power me-2"></i>Log Out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="list-buttons">
                            <a href="{{ route('lper.post.job') }}">Publiez votre offre</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->


    <!-- ======================= Dashboard Content Start ======================== -->
    <div class="dashboard-wrap">
        <a class="mobNavigation btn btn-primary" data-bs-toggle="collapse" href="#MobNav" role="button" aria-expanded="false" aria-controls="MobNav">
            <i class="fas fa-bars me-2"></i>Dashboard Navigation
        </a>
        <div class="collapse" id="MobNav">
            <div class="dashboard-nav">

                <div class="dash-user-blocks pt-5 px-3">
                    <div class="thumbwrap">
                        <figure class="figure"><img src="assets/front/img/com-3.png" class="img-fluid" alt=""></figure>
                    </div>
                    <div class="userCaption">
                        <div class="captionWrap">
                            <h4 class="title">Employer</h4>
                            <div class="subtitle"><span>San Antonio</span></div>
                        </div>
                    </div>
                </div>

                <div class="dashboard-inner">
                    <ul data-submenu-title="Main Navigation">
                        <li><a href="employer-dashboard.html"><i class="fa-solid fa-gauge-high me-2"></i>Dashboard</a></li>
                        <li><a href="employer-jobs.html"><i class="bi bi-droplet-half me-2"></i>My Jobs</a></li>
                        <li><a href="employer-applicants.html"><i class="bi bi-person-vcard me-2"></i>Applicants</a></li>
                        <li><a href="employer-candidates.html"><i class="bi bi-people me-2"></i>Candidates</a></li>
                        <li><a href="employer-packages.html"><i class="fa-regular fa-paper-plane me-2"></i>Packages</a></li>
                        <li><a href="employer-company.html"><i class="bi bi-buildings me-2"></i>Company</a></li>
                        <li><a href="employer-messages.html"><i class="bi bi-chat-dots me-2"></i>Messages<span class="notti_coun style-1">4</span></a></li>
                        <li><a href="employer-settings.html"><i class="bi bi-gear me-2"></i>Settings</a></li>
                        <li><a href="index-2.html"><i class="bi bi-power me-2"></i>Log Out</a></li>
                    </ul>
                </div>

                <!-- Post Job  -->
                <div class="prf-completion-wrap">

                    <div class="caption">
                        <h5 class="title">Post your first job!</h5>
                        <p class="subtitle">Your first 03 job postings for just $10 each.</p>
                    </div>

                    <div class="button">
                        <button type="button" class="btn btn-primary">Post Your Job</button>
                    </div>

                </div>

                <!-- Help Center -->
                <div class="help-center-wrap">
                    <div class="help-center">
                        <div class="icons"><i class="bi bi-chat-dots"></i></div>
                        <div class="caps">
                            <h6 class="title">Help Center</h6>
                            <p class="desc">Get Answer Here</p>
                        </div>
                    </div>
                    <div class="arrow"><a href="#" class="link"><i class="bi bi-arrow-right-circle"></i></a></div>
                </div>

            </div>
        </div>

        <div class="dashboard-content">
            <div class="dashboard-tlbar d-block mb-4">
                <div class="row">
                    <div class="colxl-12 col-lg-12 col-md-12">
                        <h1 class="mb-1 fs-3 fw-medium">Submit job</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item text-muted"><a href="#">Employer</a></li>
                                <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="text-primary">Submit job</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="dashboard-widg-bar d-block">

                <!-- Row Start -->
                <div class="row align-items-start g-4">
                    <div class="col-xl-9 col-lg-8 col-md-12 col-12">

                        <!-- Choose Company Start -->
                        <div class="card rounded-3 mb-4">
                            <div class="card-header">
                                <h4>Choose Company</h4>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-start justify-content-start g-3">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                        <div class="formField">
                                            <label class="label">Company name</label>
                                            <select class="form-control select">
                                                <option value="">Select Company</option>
                                                <option value="1">Netflix Tech</option>
                                                <option value="2">Doodle Infratech</option>
                                                <option value="3">Microsoft</option>
                                                <option value="4">Medico Healthy</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                        <div class="alert alert-primary mb-0" role="alert">You need to select company before adding job listing. If you didn't add company profile yet click button below.</div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                        <a href="employer-add-company.html" class="btn btn-primary btn-md"><i class="fa-solid fa-circle-plus me-2"></i>Add Company</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Basic Detail Start -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Basic Detail</h4>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-start justify-content-start g-4">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                        <div class="formField">
                                            <label class="label">Job Title<sup>*</sup></label>
                                            <input type="text" class="form-control" placeholder="Job Title">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                                        <div class="formField">
                                            <label class="label">Job Category<sup>*</sup></label>
                                            <select class="select">
                                                <option value="0">Design & Development</option>
                                                <option value="1">Constructions</option>
                                                <option value="2">IT & Software</option>
                                                <option value="3">Technology</option>
                                                <option value="4">Banking & Insurence</option>
                                                <option value="5">Health & Medical</option>
                                                <option value="6">Customer Services</option>
                                                <option value="7">Marketing & Sales</option>
                                                <option value="8">Internet & Clouding</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                                        <div class="formField">
                                            <label class="label">Job Type<sup>*</sup></label>
                                            <select class="select">
                                                <option value="0">Full Time</option>
                                                <option value="1">Part Time</option>
                                                <option value="2">Internship</option>
                                                <option value="3">Contract</option>
                                                <option value="4">Hourly Basis</option>
                                                <option value="5">Daily Basis</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                        <div class="formField">
                                            <label class="label">Skills<sup>*</sup></label>
                                            <select class="form-control select" multiple="multiple">
                                                <option value="1">Bootstrap</option>
                                                <option value="2" selected>Photoshop</option>
                                                <option value="3">Figma</option>
                                                <option value="4">Web Design</option>
                                                <option value="5">WordPress</option>
                                                <option value="6">Front-End Design</option>
                                                <option value="7">Ecommerce Development</option>
                                                <option value="8">Python</option>
                                                <option value="9">Magento</option>
                                                <option value="10">Customer Services</option>
                                                <option value="11">Drupal</option>
                                                <option value="12">Internet Marketing</option>
                                                <option value="13">Web Design</option>
                                                <option value="14">Banking</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                        <div class="formField">
                                            <label class="label">Description<sup>*</sup></label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                                        <div class="formField">
                                            <label class="label">Career Lavel</label>
                                            <select class="select">
                                                <option value="0">Junior</option>
                                                <option value="1">Senior</option>
                                                <option value="2">Middle</option>
                                                <option value="3">Manager</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                                        <div class="formField">
                                            <label class="label">Experience</label>
                                            <select class="select">
                                                <option value="0">Fresher</option>
                                                <option value="1">1 - 2 Year</option>
                                                <option value="2">3 - 5 Year</option>
                                                <option value="3">6 - 9 Year</option>
                                                <option value="4">10 - 15 Year</option>
                                                <option value="5">15+ Year</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                                        <div class="formField">
                                            <label class="label">Qualification</label>
                                            <select class="select">
                                                <option value="0">Intermediate</option>
                                                <option value="1">Bachelor Degree</option>
                                                <option value="2">Master Degree</option>
                                                <option value="3">Post Graduate</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                                        <div class="formField">
                                            <label class="label">Gender</label>
                                            <select class="select">
                                                <option value="0">Male</option>
                                                <option value="1">Female</option>
                                                <option value="2">Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                                        <div class="formField">
                                            <label class="label">Start Date</label>
                                            <input type="text" class="form-control choosedate" placeholder="Start Date">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                                        <div class="formField">
                                            <label class="label">Close Date</label>
                                            <input type="text" class="form-control choosedate" placeholder="End Date">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Salary Start -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Salary Detail</h4>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-start justify-content-start g-4">

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                                        <div class="formField">
                                            <label class="label">Rate</label>
                                            <select class="select">
                                                <option value="0">Per Hour</option>
                                                <option value="1">Per Day</option>
                                                <option value="2">Per Week</option>
                                                <option value="3">Par Month</option>
                                                <option value="4">Per Year</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                                        <div class="formField">
                                            <label class="label">Currency</label>
                                            <select class="select">
                                                <option value="0">USD ($)</option>
                                                <option value="1">Euro (€)</option>
                                                <option value="2">Pound (£)</option>
                                                <option value="3">INR (₹)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                                        <div class="formField">
                                            <label class="label">Minimum</label>
                                            <input type="text" class="form-control choosedate" placeholder="5000">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                                        <div class="formField">
                                            <label class="label">Maximum</label>
                                            <input type="text" class="form-control choosedate" placeholder="6000">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Address Start -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Location</h4>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-start justify-content-start g-4">

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                                        <div class="formField">
                                            <label class="label">Location</label>
                                            <select class="select">
                                                <option value="0">Choose Location</option>
                                                <option value="1">Oberoy Kurt, New Orleans United States</option>
                                                <option value="2">Operio Merch, Long Beach, United States</option>
                                                <option value="3">Zinas Market, San Antonio, United States</option>
                                                <option value="4">Kapurth Chawk, San Francisco, United States</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                                        <div class="formField">
                                            <label class="label">Maps location</label>
                                            <input type="text" class="form-control choosedate" placeholder="Your Map Location">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                                        <div class="formField">
                                            <label class="label">Longtitude</label>
                                            <input type="text" class="form-control choosedate" placeholder="-88.0616189">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                                        <div class="formField">
                                            <label class="label">Latitude</label>
                                            <input type="text" class="form-control choosedate" placeholder="41.8337734">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Cover Image Start -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Cover Image</h4>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-start justify-content-start g-4">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Cover Image</label>
                                            <div class="rounded-3 border d-flex align-items-center gap-3 px-3 py-4">
                                                <div class="upload-btn-wrapper small">
                                                    <button class="btn btn-md btn-light-seegreen fw-medium">Browse Image</button>
                                                    <input type="file" name="myfile">
                                                </div>
                                                <div class="fs-md">Maximum file size: 100 MB.</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Photo Gallery Info -->
                        <div class="card mb-4">

                            <div class="card-header"><h4 class="title">Gallery</h4></div>

                            <div class="card-body">
                                <div class="row align-items-start gy-2">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <div class="upload-galleryWrap">

                                                <div class="single-upload">
                                                    <figure><img src="assets/front/img/photo-1.jpg" class="img-fluid" alt="img"></figure>
                                                    <a href="#" class="delete-img"><i class="bi bi-trash3"></i></a>
                                                </div>

                                                <div class="single-upload">
                                                    <figure><img src="assets/front/img/photo-2.jpg" class="img-fluid" alt="img"></figure>
                                                    <a href="#" class="delete-img"><i class="bi bi-trash3"></i></a>
                                                </div>

                                                <div class="single-upload">
                                                    <figure><img src="assets/front/img/photo-3.jpg" class="img-fluid" alt="img"></figure>
                                                    <a href="#" class="delete-img"><i class="bi bi-trash3"></i></a>
                                                </div>

                                                <div class="single-upload">
                                                    <figure><img src="assets/front/img/photo-4.jpg" class="img-fluid" alt="img"></figure>
                                                    <a href="#" class="delete-img"><i class="bi bi-trash3"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="label">Upload Images</label>
                                            <div class="uploadBox">
                                                <div class="upload-btn-wrapper small">
                                                    <button class="btn uploadbtn"><i class="bi bi-cloud-arrow-up"></i></button>
                                                    <input type="file" name="myfile">
                                                </div>
                                                <p class="tag">Click & Upload: jpg, jpeg, png</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="w-100 d-block">
                            <div class="d-flex align-items-center justify-content-start gap-3">
                                <button type="button" class="btn btn-md btn-primary rounded-pill">Publish Job</button>
                                <button type="button" class="btn btn-md btn-outline-dark rounded-pill">Save as Draft</button>
                                <button type="button" class="btn btn-md btn-light-danger rounded-pill">Cancel</button>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12">
                        <div class="submit-job-status">

                            <div class="company-thumb-wrap">
                                <div class="thumb"><figure><img src="assets/front/img/com-2.png" class="img-fluid" alt="Image"></figure></div>
                            </div>

                            <div class="submit-job-info">
                                <div class="submit-job-type"><span class="jobType">Full Time</span></div>
                                <h4 class="job-title">Your Job Title Here</h4>
                                <p class="sub-job-location">In Los Angels</p>
                            </div>

                            <div class="submit-job-list-status">
                                <ul>
                                    <li class="complete"><i class="ico bi bi-patch-check-fill"></i>Company Details</li>
                                    <li class="complete"><i class="ico bi bi-patch-check-fill"></i>Basic Job Info</li>
                                    <li><i class="ico bi bi-patch-check-fill"></i>Job Location</li>
                                    <li><i class="ico bi bi-patch-check-fill"></i>Salary Details</li>
                                    <li><i class="ico bi bi-patch-check-fill"></i>Photo Gallery</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- End Row -->

            </div>

            <!-- footer -->
            <div class="row">
                <div class="col-md-12">
                    <div class="py-3 text-center">© 2024 Hiredio® Design By Themezhub.</div>
                </div>
            </div>

        </div>

    </div>
    <!-- ======================= dashboard Detail End ======================== -->

    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="fa-solid fa-caret-up"></i></a>


</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="assets/front/js/jquery.min.js"></script>
<script src="assets/front/js/popper.min.js"></script>
<script src="assets/front/js/bootstrap.min.js"></script>
<script src="assets/front/js/flatpickr.js"></script>
<script src="assets/front/js/dropzone.min.js"></script>
<script src="assets/front/js/counterup.min.js"></script>
<script src="assets/front/js/rangeslider.js"></script>
<script src="assets/front/js/select2.min.js"></script>
<script src="assets/front/js/slick.min.js"></script>

<script src="assets/front/js/custom.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

</body>


<!-- Mirrored from shreethemes.net/hiredio-landing/hiredio/post-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Oct 2024 21:08:29 GMT -->
</html>
