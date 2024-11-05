<!doctype html>
<html lang="en">


<!-- Mirrored from shreethemes.net/hiredio-landing/hiredio/freelancing-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Oct 2024 21:05:53 GMT -->
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

	<body>
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
			<div class="header header-transparent">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="#">
								<img style="width: 50px" src="assets/front/img/logo-light.png" class="logo main-logo" alt="">
								<img style="width: 50px" src="assets/front/img/logo.png" class="logo change-logo" alt="">
								<img  style="width: 50px" src="assets/front/img/logo.png" class="logo mobile-logo" alt="">
							</a>
							<div class="nav-toggle"></div>
							<div class="mobile_nav">
								<ul>
									<li>
										<a href="#" class="d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#login"><i class="bi bi-person-circle me-1"></i></a>
									</li>
									<li>
										<a href="#" data-bs-toggle="modal" data-bs-target="#search"><i class="bi bi-search me-1"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="nav-menus-wrapper">
							<ul class="nav-menu">

								<li><a href="JavaScript:Void(0);">Accueil<span class="submenu-indicator"></span></a></li>

                                <li><a href="JavaScript:Void(0);">Blog<span class="submenu-indicator"></span></a></li>

                                <li><a href="JavaScript:Void(0);">Contactez-nous<span class="submenu-indicator"></span></a></li>


								<li class="mob-addproject"><a class="add" href="post-job.html">Post Your Job</a></li>

							</ul>

							<ul class="nav-menu nav-menu-social align-to-right">
								<li>
									<a href="#" data-bs-toggle="modal" data-bs-target="#login"><i class="bi bi-person-circle me-1"></i>Se connecter</a>
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


			<!-- ============================ Hero Banner  Start================================== -->
			<div class="hero-header full-height freelancing-2 bg-secondary position-relative" data-overlay="0">
				<div class="container">

					<!-- Search Form -->
					<div class="row justify-content-between align-items-center g-4">
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
							<div class="position-relative mb-5">
							  <h1 class="fw-normal">Embauchez les meilleurs freelances pour vos <span class="text-success">projets de rêve</span></h1>
							  <p class="banner-subtitle fw-light">Rejoignez une communauté de professionnels où les opportunités sont illimitées et où la collaboration est la clé du succès.</p>
							</div>
							<div class="smartSearch">
								<div class="row g-0">

									<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
										<div class="form-search withIcon border-sm-0">
											<input type="text" class="form-control" placeholder="Titre du service ou mot-clé...">
											<span class="icons"><i class="bi bi-search"></i></span>
										</div>
									</div>

									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
										<div class="form-search btn-box">
											<button type="button" class="btn btn-primary rounded-pill">Recherche</button>
										</div>
									</div>

								</div>
							</div>
							<div class="d-block position-relative mt-5">
								<div class="banner-info-caps">

									<div class="infoFlex">
										<div class="counter-head"><h4 class="ctrTitle"><span class="text-success">4.8</span></h4></div>
										<div class="caps text-light opacity-75">Valeur évaluée par trustpilot, Netflix, Paypal</div>
									</div>

									<div class="infoFlex">
										<div class="counter-head"><h4 class="ctrTitle"><span class="text-success">8K+</span></h4></div>
										<div class="caps text-light opacity-75">La confiance des grandes marques d'employeurs</div>
									</div>

								</div>
							</div>
						</div>
						<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 z-2">
							<div class="freeThumbes-wrap">
								<div class="thumb-wrap">
									<div class="freelancing_Slider">
										<div class="single"><figure><img src="assets/front/img/freelancer-1.png" class="img-fluid" alt="img"></figure></div>
										<div class="single"><figure><img src="assets/front/img/freelancer-2.png" class="img-fluid" alt="img"></figure></div>
										<div class="single"><figure><img src="assets/front/img/freelancer-3.png" class="img-fluid" alt="img"></figure></div>
										<div class="single"><figure><img src="assets/front/img/freelancer-4.png" class="img-fluid" alt="img"></figure></div>
									</div>
								</div>
								<div class="projectComp">
									<div class="ico"><i class="bi bi-patch-check-fill"></i></div>
									<div class="caps">
										<h5 class="tlt">200+</h5>
										<p class="subs">Les meilleurs free-lances</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- </row> -->

				</div>
			</div>
			<!-- ============================ Hero Banner End ================================== -->


			<!-- ============================= Our Partner Start =============================== -->
			<section class="py-5 border-bottom">
				<div class="container">
					<div class="row align-items-center justify-content-center">

						<div class="col-xl-12 col-lg-12 col-md-12 col-12">
							<div class="brand_slider">

								<div class="singlecol">
									<div class="brand-groups"><img src="assets/front/img/brand/dark-1.png" class="img-fluid" alt=""></div>
								</div>
								<div class="singlecol">
									<div class="brand-groups"><img src="assets/front/img/brand/dark-2.png" class="img-fluid" alt=""></div>
								</div>
								<div class="singlecol">
									<div class="brand-groups"><img src="assets/front/img/brand/dark-3.png" class="img-fluid" alt=""></div>
								</div>
								<div class="singlecol">
									<div class="brand-groups"><img src="assets/front/img/brand/dark-4.png" class="img-fluid" alt=""></div>
								</div>
								<div class="singlecol">
									<div class="brand-groups"><img src="assets/front/img/brand/dark-5.png" class="img-fluid" alt=""></div>
								</div>
								<div class="singlecol">
									<div class="brand-groups"><img src="assets/front/img/brand/dark-6.png" class="img-fluid" alt=""></div>
								</div>
								<div class="singlecol">
									<div class="brand-groups"><img src="assets/front/img/brand/dark-7.png" class="img-fluid" alt=""></div>
								</div>
								<div class="singlecol">
									<div class="brand-groups"><img src="assets/front/img/brand/dark-8.png" class="img-fluid" alt=""></div>
								</div>
								<div class="singlecol">
									<div class="brand-groups"><img src="assets/front/img/brand/dark-9.png" class="img-fluid" alt=""></div>
								</div>
								<div class="singlecol">
									<div class="brand-groups"><img src="assets/front/img/brand/dark-4.png" class="img-fluid" alt=""></div>
								</div>
								<div class="singlecol">
									<div class="brand-groups"><img src="assets/front/img/brand/dark-1.png" class="img-fluid" alt=""></div>
								</div>
								<div class="singlecol">
									<div class="brand-groups"><img src="assets/front/img/brand/dark-2.png" class="img-fluid" alt=""></div>
								</div>
								<div class="singlecol">
									<div class="brand-groups"><img src="assets/front/img/brand/dark-3.png" class="img-fluid" alt=""></div>
								</div>
								<div class="singlecol">
									<div class="brand-groups"><img src="assets/front/img/brand/dark-4.png" class="img-fluid" alt=""></div>
								</div>
								<div class="singlecol">
									<div class="brand-groups"><img src="assets/front/img/brand/dark-5.png" class="img-fluid" alt=""></div>
								</div>
								<div class="singlecol">
									<div class="brand-groups"><img src="assets/front/img/brand/dark-6.png" class="img-fluid" alt=""></div>
								</div>
								<div class="singlecol">
									<div class="brand-groups"><img src="assets/front/img/brand/dark-7.png" class="img-fluid" alt=""></div>
								</div>
								<div class="singlecol">
									<div class="brand-groups"><img src="assets/front/img/brand/dark-8.png" class="img-fluid" alt=""></div>
								</div>
								<div class="singlecol">
									<div class="brand-groups"><img src="assets/front/img/brand/dark-9.png" class="img-fluid" alt=""></div>
								</div>
								<div class="singlecol">
									<div class="brand-groups"><img src="assets/front/img/brand/dark-4.png" class="img-fluid" alt=""></div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ============================= Our Partner End =============================== -->


			<!-- =========================== Start Popular Services =========================== -->
            <section>
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
                            <div class="moder-heading">
                                <div class="subtitleHeading-wrap">
                                    <h6 class="subtitle-heading">Services Tendances</h6>
                                </div>
                                <h2 class="main-heading">Explorez les Meilleurs Services</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <ul class="nav nav-pills outline centered mid mb-4" id="pills-tab">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link rounded-pill active" id="pills-featured-tab" data-bs-toggle="pill" data-bs-target="#pills-featured" type="button" role="tab" aria-selected="true">À la une</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link rounded-pill" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-selected="false">Populaire</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link rounded-pill" id="pills-recent-tab" data-bs-toggle="pill" data-bs-target="#pills-recent" type="button" role="tab" aria-selected="false">Récent</button>
                                </li>
                            </ul>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="services_slider">
                                    <div class="singleItem">
                                        <div class="servicesBoxs hiredioShdaow">
                                            <div class="servicesCard">
                                                <div class="serviceThumbs">
                                                    <a href="#" class="thumbLink"><img src="assets/front/img/services-4.jpg" class="img-fluid" alt="Thumb"></a>
                                                </div>
                                                <div class="serviceCaption">
                                                    <div class="captionHead">
                                                        <div class="captionFlex">
                                                            <div class="capCats"><span class="cats">Développement</span></div>
                                                            <div class="catReviews">
                                                                <div class="additionalDetails">
                                                                    <span class="star"><i class="bi bi-star-fill"></i></span>
                                                                    <span class="rating">4.6</span><span class="reviews">11K+ Avis</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="serviceTitlewrap">
                                                        <h4 class="title"><a href="#" class="titleLink">Personnalisation de WordPress pour Blog Personnel</a></h4>
                                                        <p class="serviceExeption">Maîtrise de la suite Adobe Creative Cloud et logiciels de design incluant Photoshop..</p>
                                                    </div>
                                                    <div class="servicesSkill">
                                                        <span class="singleSkill">WordPress</span>
                                                        <span class="singleSkill">Conception Figma</span>
                                                        <span class="singleSkill">CSS3</span>
                                                    </div>
                                                </div>
                                                <div class="serviceFooter">
                                                    <div class="footerFlex">
                                                        <div class="serviceauthorInfo">
                                                            <div class="authorFlex">
                                                                <div class="authorImg">
                                                                    <a href="#" class="authorLink"><img src="assets/front/img/team-9.jpg" class="img-fluid" alt=""></a>
                                                                </div>
                                                                <div class="authorName">
                                                                    <h6 class="authorTitle"><a href="#" class="authorLink">Teresa M. Lane</a></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="serviceRates">
                                                            <span class="starter">À partir de</span>
                                                            <span class="priceRate">$75</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="hiredioLink"></a>
                                        </div>
                                    </div>

                                    <div class="singleItem">
                                        <div class="servicesBoxs hiredioShdaow">
                                            <div class="servicesCard">
                                                <div class="serviceThumbs">
                                                    <a href="#" class="thumbLink"><img src="assets/front/img/services-1.jpg" class="img-fluid" alt="Thumb"></a>
                                                </div>
                                                <div class="serviceCaption">
                                                    <div class="captionHead">
                                                        <div class="captionFlex">
                                                            <div class="capCats"><span class="cats">Saisie de Données</span></div>
                                                            <div class="catReviews">
                                                                <div class="additionalDetails">
                                                                    <span class="star"><i class="bi bi-star-fill"></i></span>
                                                                    <span class="rating">4.1</span><span class="reviews">22K+ Avis</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="serviceTitlewrap">
                                                        <h4 class="title"><a href="#" class="titleLink">Saisie de Données pour Annonces Immobilières</a></h4>
                                                        <p class="serviceExeption">Maîtrise de la suite Adobe Creative Cloud et logiciels de design incluant Photoshop..</p>
                                                    </div>
                                                    <div class="servicesSkill">
                                                        <span class="singleSkill">Saisie de Données</span>
                                                        <span class="singleSkill">Dactylographie</span>
                                                        <span class="singleSkill">MS Word</span>
                                                    </div>
                                                </div>
                                                <div class="serviceFooter">
                                                    <div class="footerFlex">
                                                        <div class="serviceauthorInfo">
                                                            <div class="authorFlex">
                                                                <div class="authorImg">
                                                                    <a href="#" class="authorLink"><img src="assets/front/img/team-1.jpg" class="img-fluid" alt=""></a>
                                                                </div>
                                                                <div class="authorName">
                                                                    <h6 class="authorTitle"><a href="#" class="authorLink">Jasmin S. Kivi</a></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="serviceRates">
                                                            <span class="starter">À partir de</span>
                                                            <span class="priceRate">$85</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="hiredioLink"></a>
                                        </div>
                                    </div>

                                    <div class="singleItem">
                                        <div class="servicesBoxs hiredioShdaow">
                                            <div class="servicesCard">
                                                <div class="serviceThumbs">
                                                    <a href="#" class="thumbLink"><img src="assets/front/img/services-5.jpg" class="img-fluid" alt="Thumb"></a>
                                                </div>
                                                <div class="serviceCaption">
                                                    <div class="captionHead">
                                                        <div class="captionFlex">
                                                            <div class="capCats"><span class="cats">Marketing</span></div>
                                                            <div class="catReviews">
                                                                <div class="additionalDetails">
                                                                    <span class="star"><i class="bi bi-star-fill"></i></span>
                                                                    <span class="rating">4.3</span><span class="reviews">14K+ Avis</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="serviceTitlewrap">
                                                        <h4 class="title"><a href="#" class="titleLink">Campagne Email Marketing pour ONG</a></h4>
                                                        <p class="serviceExeption">Maîtrise de la suite Adobe Creative Cloud et logiciels de design incluant Photoshop..</p>
                                                    </div>
                                                    <div class="servicesSkill">
                                                        <span class="singleSkill">Marketing</span>
                                                        <span class="singleSkill">Mailchimp</span>
                                                        <span class="singleSkill">Corals</span>
                                                    </div>
                                                </div>
                                                <div class="serviceFooter">
                                                    <div class="footerFlex">
                                                        <div class="serviceauthorInfo">
                                                            <div class="authorFlex">
                                                                <div class="authorImg">
                                                                    <a href="#" class="authorLink"><img src="assets/front/img/team-2.jpg" class="img-fluid" alt=""></a>
                                                                </div>
                                                                <div class="authorName">
                                                                    <h6 class="authorTitle"><a href="#" class="authorLink">John I. Phillips</a></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="serviceRates">
                                                            <span class="starter">À partir de</span>
                                                            <span class="priceRate">$75</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="hiredioLink"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			<!-- =========================== End Popular Services ============================ -->



			<!-- =========================== Start High Rated Freelancers =========================== -->
            <section class="bg-lighten">
                <div class="container">

                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
                            <div class="moder-heading">
                                <div class="subtitleHeading-wrap">
                                    <h6 class="subtitle-heading">Freelancers en Vedette</h6>
                                </div>
                                <h2 class="main-heading">Freelancer Très Évalué</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center g-4">

                        <!-- Élément Unique -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">

                            <div class="freelancerWraps hiredioShdaow">

                                <div class="freelancer-body">
                                    <div class="freelancerHeadwrap">
                                        <div class="freelancerHead">
                                            <div class="avatarBlock">
                                                <a href="#" class="link"><img src="assets/front/img/team-4.jpg" class="img-fluid" alt=""></a>
                                                <span class="user-status available" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Disponible"></span>
                                            </div>

                                            <div class="avatarInfo">
                                                <div class="avatartile"><a href="#" class="link"><h4 class="avatarTitle">John V. Brewer</h4></a></div>
                                                <div class="additionalWrap">
                                                    <div class="avatarPost"><p>Expert en SEO/SMO</p></div>
                                                    <div class="additionalDetails">
                                                        <span class="star"><i class="bi bi-star-fill"></i></span>
                                                        <span class="rating">4.2</span><span class="reviews">12K+ Avis</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="freelancerSkills">
                                        <div class="skill-wraps">
                                            <span class="singleTag">Design Figma</span>
                                            <span class="singleTag">Expert Drupal</span>
                                            <span class="singleTag">Design UI/UX</span>
                                            <span class="singleTag">Sketch</span>
                                            <span class="singleTag">Design de Marque</span>
                                        </div>
                                    </div>

                                    <div class="freelancerAbout">
                                        <p>Les garnitures que vous pouvez choisir pour cette part de pizza de dîner télé lorsque vous avez oublié de faire des courses, la peinture que vous pouvez mettre sur votre visage pour impressionner le nouveau patron, c'est votre affaire.</p>
                                    </div>

                                    <div class="freelancerMiddlewrap">
                                        <div class="freelancerMiddle">
                                            <div class="singleBoxer"><p class="catTitle">Tarifs</p><h6 class="capInfo">$40/h</h6></div>
                                            <div class="singleBoxer"><p class="catTitle">Localisation</p><h6 class="capInfo">Canada</h6></div>
                                            <div class="singleBoxer"><p class="catTitle">Travail Réalisé</p><h6 class="capInfo">75%</h6></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="freelancerFooter">
                                    <a href="#" class="btn btn-light-primary">Voir le Profil<i class="bi bi-arrow-up-right"></i></a>
                                </div>

                                <a href="#" class="hiredioLink"></a>
                            </div>

                        </div>

                        <!-- Élément Unique -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">

                            <div class="freelancerWraps hiredioShdaow">

                                <div class="freelancer-body">
                                    <div class="freelancerHeadwrap">
                                        <div class="freelancerHead">
                                            <div class="avatarBlock">
                                                <a href="#" class="link"><img src="assets/front/img/team-5.jpg" class="img-fluid" alt=""></a>
                                                <span class="user-status busy" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Occupé"></span>
                                            </div>

                                            <div class="avatarInfo">
                                                <div class="avatartile"><a href="#" class="link"><h4 class="avatarTitle">Kenneth B. Strub</h4></a></div>
                                                <div class="additionalWrap">
                                                    <div class="avatarPost"><p>Responsable de Marque</p></div>
                                                    <div class="additionalDetails">
                                                        <span class="star"><i class="bi bi-star-fill"></i></span>
                                                        <span class="rating">4.7</span><span class="reviews">12K+ Avis</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="freelancerSkills">
                                        <div class="skill-wraps">
                                            <span class="singleTag">Design Figma</span>
                                            <span class="singleTag">Expert Drupal</span>
                                            <span class="singleTag">Design UI/UX</span>
                                            <span class="singleTag">Sketch</span>
                                            <span class="singleTag">Design de Marque</span>
                                        </div>
                                    </div>

                                    <div class="freelancerAbout">
                                        <p>Les garnitures que vous pouvez choisir pour cette part de pizza de dîner télé lorsque vous avez oublié de faire des courses, la peinture que vous pouvez mettre sur votre visage pour impressionner le nouveau patron, c'est votre affaire.</p>
                                    </div>

                                    <div class="freelancerMiddlewrap">
                                        <div class="freelancerMiddle">
                                            <div class="singleBoxer"><p class="catTitle">Tarifs</p><h6 class="capInfo">$50/h</h6></div>
                                            <div class="singleBoxer"><p class="catTitle">Localisation</p><h6 class="capInfo">Las Vegas</h6></div>
                                            <div class="singleBoxer"><p class="catTitle">Travail Réalisé</p><h6 class="capInfo">96%</h6></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="freelancerFooter">
                                    <a href="#" class="btn btn-light-primary">Voir le Profil<i class="bi bi-arrow-up-right"></i></a>
                                </div>

                                <a href="#" class="hiredioLink"></a>
                            </div>

                        </div>

                        <!-- Élément Unique -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">

                            <div class="freelancerWraps hiredioShdaow">

                                <div class="freelancer-body">
                                    <div class="freelancerHeadwrap">
                                        <div class="freelancerHead">
                                            <div class="avatarBlock">
                                                <a href="#" class="link"><img src="assets/front/img/team-6.jpg" class="img-fluid" alt=""></a>
                                                <span class="user-status available" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Disponible"></span>
                                            </div>

                                            <div class="avatarInfo">
                                                <div class="avatartile"><a href="#" class="link"><h4 class="avatarTitle">Robert D. Hawkins</h4></a></div>
                                                <div class="additionalWrap">
                                                    <div class="avatarPost"><p>Marketing Digital</p></div>
                                                    <div class="additionalDetails">
                                                        <span class="star"><i class="bi bi-star-fill"></i></span>
                                                        <span class="rating">4.3</span><span class="reviews">11K+ Avis</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="freelancerSkills">
                                        <div class="skill-wraps">
                                            <span class="singleTag">Design Figma</span>
                                            <span class="singleTag">Expert Drupal</span>
                                            <span class="singleTag">Design UI/UX</span>
                                            <span class="singleTag">Sketch</span>
                                            <span class="singleTag">Design de Marque</span>
                                        </div>
                                    </div>

                                    <div class="freelancerAbout">
                                        <p>Les garnitures que vous pouvez choisir pour cette part de pizza de dîner télé lorsque vous avez oublié de faire des courses, la peinture que vous pouvez mettre sur votre visage pour impressionner le nouveau patron, c'est votre affaire.</p>
                                    </div>

                                    <div class="freelancerMiddlewrap">
                                        <div class="freelancerMiddle">
                                            <div class="singleBoxer"><p class="catTitle">Tarifs</p><h6 class="capInfo">$45/h</h6></div>
                                            <div class="singleBoxer"><p class="catTitle">Localisation</p><h6 class="capInfo">Houston</h6></div>
                                            <div class="singleBoxer"><p class="catTitle">Travail Réalisé</p><h6 class="capInfo">87%</h6></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="freelancerFooter">
                                    <a href="#" class="btn btn-light-primary">Voir le Profil<i class="bi bi-arrow-up-right"></i></a>
                                </div>

                                <a href="#" class="hiredioLink"></a>
                            </div>

                        </div>

                    </div>
                </div>
            </section>
			<!-- =========================== End High Rated Freelancers ============================ -->


			<!-- =========================== Start Categories =========================== -->
            <section>
                <div class="container">

                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
                            <div class="moder-heading">
                                <div class="subtitleHeading-wrap">
                                    <h6 class="subtitle-heading">Catégories en Vedette</h6>
                                </div>
                                <h2 class="main-heading">Parcourez les Principales Catégories</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 g-4">

                        <!-- Élément Unique -->
                        <div class="col">
                            <div class="modernCategory-wrap">
                                <a href="#" class="modernCategory style-2">
                                    <div class="modernCategory-icons mb-3">
                                        <i class="fa-solid fa-pen-ruler fs-2"></i>
                                    </div>
                                    <div class="modernCategory-titlecaps">
                                        <h6 class="catTitle">Design Graphique & Art</h6>
                                        <p class="text-md mb-0">102 Talents</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Élément Unique -->
                        <div class="col">
                            <div class="modernCategory-wrap">
                                <a href="#" class="modernCategory style-2">
                                    <div class="modernCategory-icons mb-3">
                                        <i class="fa-brands fa-node-js fs-2"></i>
                                    </div>
                                    <div class="modernCategory-titlecaps">
                                        <h6 class="catTitle">Codage & Développement</h6>
                                        <p class="text-md mb-0">75 Talents</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Élément Unique -->
                        <div class="col">
                            <div class="modernCategory-wrap">
                                <a href="#" class="modernCategory style-2">
                                    <div class="modernCategory-icons mb-3">
                                        <i class="fa-regular fa-lightbulb fs-2"></i>
                                    </div>
                                    <div class="modernCategory-titlecaps">
                                        <h6 class="catTitle">Marketing Digital</h6>
                                        <p class="text-md mb-0">68 Talents</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Élément Unique -->
                        <div class="col">
                            <div class="modernCategory-wrap">
                                <a href="#" class="modernCategory style-2">
                                    <div class="modernCategory-icons mb-3">
                                        <i class="fa-solid fa-mortar-pestle fs-2"></i>
                                    </div>
                                    <div class="modernCategory-titlecaps">
                                        <h6 class="catTitle">Santé & Médecine</h6>
                                        <p class="text-md mb-0">35 Talents</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Élément Unique -->
                        <div class="col">
                            <div class="modernCategory-wrap">
                                <a href="#" class="modernCategory style-2">
                                    <div class="modernCategory-icons mb-3">
                                        <i class="fa-solid fa-server fs-2"></i>
                                    </div>
                                    <div class="modernCategory-titlecaps">
                                        <h6 class="catTitle">Hébergement & Serveur</h6>
                                        <p class="text-md mb-0">80 Talents</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Élément Unique -->
                        <div class="col">
                            <div class="modernCategory-wrap">
                                <a href="#" class="modernCategory style-2">
                                    <div class="modernCategory-icons mb-3">
                                        <i class="fa-solid fa-clapperboard fs-2"></i>
                                    </div>
                                    <div class="modernCategory-titlecaps">
                                        <h6 class="catTitle">Vidéo & Animation</h6>
                                        <p class="text-md mb-0">52 Talents</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Élément Unique -->
                        <div class="col">
                            <div class="modernCategory-wrap">
                                <a href="#" class="modernCategory style-2">
                                    <div class="modernCategory-icons mb-3">
                                        <i class="fa-solid fa-music fs-2"></i>
                                    </div>
                                    <div class="modernCategory-titlecaps">
                                        <h6 class="catTitle">Audio & Musique</h6>
                                        <p class="text-md mb-0">34 Talents</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Élément Unique -->
                        <div class="col">
                            <div class="modernCategory-wrap">
                                <a href="#" class="modernCategory style-2">
                                    <div class="modernCategory-icons mb-3">
                                        <i class="fa-solid fa-signal fs-2"></i>
                                    </div>
                                    <div class="modernCategory-titlecaps">
                                        <h6 class="catTitle">Banque & Comptabilité</h6>
                                        <p class="text-md mb-0">25 Talents</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Élément Unique -->
                        <div class="col">
                            <div class="modernCategory-wrap">
                                <a href="#" class="modernCategory style-2">
                                    <div class="modernCategory-icons mb-3">
                                        <i class="fa-solid fa-business-time fs-2"></i>
                                    </div>
                                    <div class="modernCategory-titlecaps">
                                        <h6 class="catTitle">Affaires & Services</h6>
                                        <p class="text-md mb-0">40 Talents</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Élément Unique -->
                        <div class="col">
                            <div class="modernCategory-wrap">
                                <a href="#" class="modernCategory style-2">
                                    <div class="modernCategory-icons mb-3">
                                        <i class="fa-solid fa-car fs-2"></i>
                                    </div>
                                    <div class="modernCategory-titlecaps">
                                        <h6 class="catTitle">Automobile & Pièces</h6>
                                        <p class="text-md mb-0">28 Talents</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                            <div class="exploreMore text-center mt-5">
                                <a href="#" class="btn btn-more btn-outline-primary rounded-pill">Charger Plus de Catégories</a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
			<!-- =========================== End Categories ============================ -->


			<!-- ============================ Users Reviews Start ================================== -->
            <section class="bg-light">
                <div class="container">

                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="moder-heading">
                                <div class="subtitleHeading-wrap">
                                    <h6 class="subtitle-heading">Nos Avis</h6>
                                </div>
                                <h2 class="main-heading">Avis Principaux de Nos Clients</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                            <div class="reviews_slider">

                                <!-- Éléments Individuels -->
                                <div class="singleItem">
                                    <div class="reviewsCard">
                                        <div class="reviewsBody">

                                            <div class="reviews-topHeader">
                                                <div class="reviewsStar">
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                </div>
                                                <div class="revws-desc">
                                                    <h5 class="reviewsTitle">"Une Plateforme Superbe"</h5>
                                                    <p class="text">J'adore Hiredio ! Chaque fois que j'ai besoin de trouver un emploi, Hiredio est mon premier choix ! Je ne chercherais pas ailleurs.</p>
                                                </div>
                                            </div>

                                            <div class="reviewerInfo">
                                                <div class="reviewerFlex">
                                                    <div class="revws-pic"><img src="assets/front/img/team-1.jpg" class="img-fluid circle" alt=""></div>
                                                    <div class="revws-caps">
                                                        <h6 class="reviewerTitle">Aman Diwakar</h6>
                                                        <p class="reviewerSubtitle">Directeur Général</p>
                                                    </div>
                                                </div>

                                                <div class="employerLogo"><img src="assets/front/img/brand/color-1.png" class="img-fluid" alt=""></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Éléments Individuels -->
                                <div class="singleItem">
                                    <div class="reviewsCard">
                                        <div class="reviewsBody">

                                            <div class="reviews-topHeader">
                                                <div class="reviewsStar">
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                </div>
                                                <div class="revws-desc">
                                                    <h5 class="reviewsTitle">"Une Plateforme Superbe"</h5>
                                                    <p class="text">J'aime cette application et ce service, cela rend la candidature à un emploi tellement plus facile, vous pouvez créer votre CV aussi facilement que de remplir une candidature...</p>
                                                </div>
                                            </div>

                                            <div class="reviewerInfo">
                                                <div class="reviewerFlex">
                                                    <div class="revws-pic"><img src="assets/front/img/team-2.jpg" class="img-fluid circle" alt=""></div>
                                                    <div class="revws-caps">
                                                        <h6 class="reviewerTitle">Ridhika K. Sweta</h6>
                                                        <p class="reviewerSubtitle">PDG de Agreeo</p>
                                                    </div>
                                                </div>

                                                <div class="employerLogo"><img src="assets/front/img/brand/color-2.png" class="img-fluid" alt=""></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Éléments Individuels -->
                                <div class="singleItem">
                                    <div class="reviewsCard">
                                        <div class="reviewsBody">

                                            <div class="reviews-topHeader">
                                                <div class="reviewsStar">
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                </div>
                                                <div class="revws-desc">
                                                    <h5 class="reviewsTitle">"Une Plateforme Superbe"</h5>
                                                    <p class="text">Hiredio est la meilleure application de recherche d'emploi actuellement... elle vous protège également des spammeurs, donc les seuls e-mails que je reçois sont ceux de...</p>
                                                </div>
                                            </div>

                                            <div class="reviewerInfo">
                                                <div class="reviewerFlex">
                                                    <div class="revws-pic"><img src="assets/front/img/team-3.jpg" class="img-fluid circle" alt=""></div>
                                                    <div class="revws-caps">
                                                        <h6 class="reviewerTitle">Shushil Kumar Yadav</h6>
                                                        <p class="reviewerSubtitle">Responsable de Marque</p>
                                                    </div>
                                                </div>

                                                <div class="employerLogo"><img src="assets/front/img/brand/color-3.png" class="img-fluid" alt=""></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Éléments Individuels -->
                                <div class="singleItem">
                                    <div class="reviewsCard">
                                        <div class="reviewsBody">

                                            <div class="reviews-topHeader">
                                                <div class="reviewsStar">
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                </div>
                                                <div class="revws-desc">
                                                    <h5 class="reviewsTitle">"Une Plateforme Superbe"</h5>
                                                    <p class="text">J'adore cette application Hiredio. Elle est plus légitime que les autres avec publicité. Une fois que j'ai téléchargé mon CV, les employeurs...</p>
                                                </div>
                                            </div>

                                            <div class="reviewerInfo">
                                                <div class="reviewerFlex">
                                                    <div class="revws-pic"><img src="assets/front/img/team-4.jpg" class="img-fluid circle" alt=""></div>
                                                    <div class="revws-caps">
                                                        <h6 class="reviewerTitle">Ritika K. Mishra</h6>
                                                        <p class="reviewerSubtitle">Responsable RH chez Google</p>
                                                    </div>
                                                </div>

                                                <div class="employerLogo"><img src="assets/front/img/brand/color-4.png" class="img-fluid" alt=""></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Éléments Individuels -->
                                <div class="singleItem">
                                    <div class="reviewsCard">
                                        <div class="reviewsBody">

                                            <div class="reviews-topHeader">
                                                <div class="reviewsStar">
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                    <span class="star fill"><i class="fa-solid fa-star"></i></span>
                                                </div>
                                                <div class="revws-desc">
                                                    <h5 class="reviewsTitle">"Une Plateforme Superbe"</h5>
                                                    <p class="text">Dans l'ensemble, l'application Hiredio est un outil puissant pour quiconque sur le marché de l'emploi. Sa fiabilité, son vaste choix d'offres d'emploi et sa facilité d'utilisation...</p>
                                                </div>
                                            </div>

                                            <div class="reviewerInfo">
                                                <div class="reviewerFlex">
                                                    <div class="revws-pic"><img src="assets/front/img/team-5.jpg" class="img-fluid circle" alt=""></div>
                                                    <div class="revws-caps">
                                                        <h6 class="reviewerTitle">Sarwan Kumar Patel</h6>
                                                        <p class="reviewerSubtitle">Directeur Exécutif</p>
                                                    </div>
                                                </div>

                                                <div class="employerLogo"><img src="assets/front/img/brand/color-5.png" class="img-fluid" alt=""></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </section>
			<!-- ============================ Users Reviews End ================================== -->


			<!-- ============================== Trusted & Popular Platform ======================================= -->
            <section>
                <div class="container">
                    <div class="row align-items-center justify-content-between g-4">

                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="servicesTags">

                                <div class="headingBloc d-block mb-4">
                                    <div class="d-flex mb-2"><span class="badge badge-danger">Choisissez Hiredio</span></div>
                                    <h2 class="fw-normal mb-3">Faciliter la collaboration et la croissance grâce à un <span class="text-primary">placement stratégique de talents</span></h2>
                                    <p class="subtitle">Il existe de nombreuses variations de passages de Lorem Ipsum disponibles, mais la majorité a subi des modifications sous une forme ou une autre, par l'humour injecté.</p>
                                </div>

                                <div class="whyList">
                                    <ul>
                                        <li><i class="bi bi-patch-check-fill"></i>Découvrez notre sélection des meilleures émissions</li>
                                        <li><i class="bi bi-patch-check-fill"></i>Un extrait standard utilisé est reproduit ci-dessous pour votre intérêt</li>
                                        <li><i class="bi bi-patch-check-fill"></i>Il a des racines dans un ouvrage de littérature classique</li>
                                    </ul>
                                </div>

                                <div class="d-flex align-items-center justify-content-start gap-3 mt-4">

                                    <div class="clorioAchivement me-lg-5">
                                        <h2 class="fw-normal"><span class="text-seegreen ctr">20</span>K</h2>
                                        <p class="subtitle">Talents Experts</p>
                                    </div>

                                    <div class="clorioAchivement me-lg-5">
                                        <h2 class="fw-normal"><span class="text-seegreen ctr">40</span>K</h2>
                                        <p class="subtitle">Projets Terminés</p>
                                    </div>

                                    <div class="clorioAchivement me-lg-5">
                                        <h2 class="fw-normal">$<span class="text-seegreen ctr">80</span>M</h2>
                                        <p class="subtitle">Rémunéré aux Freelancers</p>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-xl-5 col-lg-6 col-md-12">
                            <div class="appThumb">
                                <img src="assets/front/img/creatives.png" class="img-fluid" alt="">
                            </div>
                        </div>

                    </div>
                    <!-- Fin de la ligne -->
                </div>
            </section>
			<!-- ============================== Trusted & Popular Platform ======================================= -->


			<!-- ============================ Active Services Start ================================== -->
            <section class="bg-light">
                <div class="container">

                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="moder-heading">
                                <div class="subtitleHeading-wrap">
                                    <h6 class="subtitle-heading">Services Actifs</h6>
                                </div>
                                <h2 class="main-heading">Parcourez les Services Récents</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center justify-content-center g-4">

                        <!-- Élément Unique -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <div class="taskWrapper hiredioShdaow">

                                <div class="taskHeader">
                                    <div class="taskHeaderwrap">
                                        <div class="taskAuthor">
                                            <a href="#" class="avatar-link"><img src="assets/front/img/team-7.jpg" class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="authorInfo">
                                            <h4 class="name"><a href="#" class="name-link">Kevin L. Bennett</a></h4>
                                            <p class="publishedTime">Publié il y a 1 heure</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="task-body">

                                    <div class="taskContent">
                                        <div class="taskSkills">
                                            <span class="skillTag">IOS</span>
                                            <span class="skillTag">Adobe XD</span>
                                            <span class="skillTag">HTML</span>
                                            <span class="skillTag">WordPress</span>
                                        </div>
                                        <div class="taskDescription">
                                            <h6 class="taskTitle">Développement d'Application Mobile pour Tracker de Fitness</h6>
                                            <p class="desc">Compétence avec Adobe Creative Cloud, tels que les logiciels de design incluant Photoshop, Illustrator</p>
                                        </div>
                                    </div>

                                    <div class="taskPricing">
                                        <div class="ratesBox">
                                            <div class="rates">
                                                <h5 class="price">$500</h5>
                                            </div>
                                            <div class="typesrates"><span>Fixe</span></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="task-footer">
                                    <button type="button" class="btn btn-light-primary btn-viewTask">Voir la Tâche<i class="bi bi-arrow-up-right"></i></button>
                                </div>

                                <a href="#" class="hiredioLink"></a>
                            </div>
                        </div>

                        <!-- Élément Unique -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <div class="taskWrapper hiredioShdaow">

                                <div class="taskHeader">
                                    <div class="taskHeaderwrap">
                                        <div class="taskAuthor">
                                            <a href="#" class="avatar-link"><img src="assets/front/img/team-8.jpg" class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="authorInfo">
                                            <h4 class="name"><a href="#" class="name-link">Dollie O. Smith</a></h4>
                                            <p class="publishedTime">Publié il y a 2 heures</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="task-body">

                                    <div class="taskContent">
                                        <div class="taskSkills">
                                            <span class="skillTag">Figma Design</span>
                                            <span class="skillTag">Coral Draw</span>
                                            <span class="skillTag">Photoshop</span>
                                        </div>
                                        <div class="taskDescription">
                                            <h6 class="taskTitle">Design Graphique pour Affiche d'Événement</h6>
                                            <p class="desc">Compétence avec Adobe Creative Cloud, tels que les logiciels de design incluant Photoshop, Illustrator</p>
                                        </div>
                                    </div>

                                    <div class="taskPricing">
                                        <div class="ratesBox">
                                            <div class="rates">
                                                <h5 class="price">$60</h5>
                                            </div>
                                            <div class="typesrates"><span>Horaire</span></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="task-footer">
                                    <button type="button" class="btn btn-light-primary btn-viewTask">Voir la Tâche<i class="bi bi-arrow-up-right"></i></button>
                                </div>

                                <a href="#" class="hiredioLink"></a>
                            </div>
                        </div>

                        <!-- Élément Unique -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <div class="taskWrapper hiredioShdaow">

                                <div class="taskHeader">
                                    <div class="taskHeaderwrap">
                                        <div class="taskAuthor">
                                            <a href="#" class="avatar-link"><img src="assets/front/img/team-9.jpg" class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="authorInfo">
                                            <h4 class="name"><a href="#" class="name-link">Jimmy E. Clary</a></h4>
                                            <p class="publishedTime">Publié il y a 5 heures</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="task-body">

                                    <div class="taskContent">
                                        <div class="taskSkills">
                                            <span class="skillTag">WordPress</span>
                                            <span class="skillTag">CSS3</span>
                                            <span class="skillTag">HTML5</span>
                                            <span class="skillTag">Photoshop</span>
                                        </div>
                                        <div class="taskDescription">
                                            <h6 class="taskTitle">Personnalisation de WordPress pour Blog Personnel</h6>
                                            <p class="desc">Compétence avec Adobe Creative Cloud, tels que les logiciels de design incluant Photoshop, Illustrator</p>
                                        </div>
                                    </div>

                                    <div class="taskPricing">
                                        <div class="ratesBox">
                                            <div class="rates">
                                                <h5 class="price">$50</h5>
                                            </div>
                                            <div class="typesrates"><span>Horaire</span></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="task-footer">
                                    <button type="button" class="btn btn-light-primary btn-viewTask">Voir la Tâche<i class="bi bi-arrow-up-right"></i></button>
                                </div>

                                <a href="#" class="hiredioLink"></a>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                            <div class="exploreMore text-center mt-5">
                                <a href="#" class="btn btn-more btn-outline-primary rounded-pill">Charger Plus de Services</a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
			<!-- ============================  Active Services End ================================== -->


			<!-- ============================ Call To Action Start ================================== -->
            <section class="calltoAction bg-secondary border-light border-bottom border-opacity-25 py-4">
                <div class="container">
                    <!-- Zones supérieures du pied de page -->
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="d-block ftr-top-wrap">
                                <div class="row align-items-center justify-content-between gy-3">

                                    <div class="col-xl-6 col-lg-6 col-md-5 col-sm-12">
                                        <div class="beforefooterCaps">
                                            <h4 class="text-light">Téléchargez nos applications IOS et Android</h4>
                                            <p class="m-0 text-light opacity-75">Téléchargez nos applications officielles pour plus de facilité.</p>
                                        </div>
                                    </div>

                                    <div class="col-xl-5 col-lg-6 col-md-7 col-sm-12">
                                        <div class="appsWraps">
                                            <div class="d-flex align-items-center justify-content-start justify-content-md-end gap-3">

                                                <div class="singleApps">
                                                    <a href="JavaScript:Void(0);" class="d-block">
                                                        <div class="d-flex align-items-center justify-content-start gap-2 bg-transparents py-3 px-4 rounded">
                                                            <div class="appsIcon"><i class="bi bi-apple h-auto fs-3 text-light"></i></div>
                                                            <div class="appsCaps">
                                                                <h6 class="text-light fw-bold text-uppercase mb-0">Application IOS</h6>
                                                                <span class="text-light opacity-75">Téléchargez maintenant</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="singleApps">
                                                    <a href="JavaScript:Void(0);" class="d-block">
                                                        <div class="d-flex align-items-center justify-content-start gap-2 bg-transparents py-3 px-4 rounded">
                                                            <div class="appsIcon"><i class="bi bi-google-play h-auto fs-3 text-light"></i></div>
                                                            <div class="appsCaps">
                                                                <h6 class="text-light fw-bold text-uppercase mb-0">Application Android</h6>
                                                                <span class="text-light opacity-75">Téléchargez maintenant</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			<!-- ============================ Call To Action Start ================================== -->


			<!-- ============================ Footer Start ================================== -->
            <footer class="footer skin-dark-footer bg-secondary">
                <div class="container">

                    <div class="row mb-5">

                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="footer-widget pe-xl-5 mb-5 mb-md-0">
                                <div class="footerLogo">
                                    <img src="assets/front/img/logo-light.png" class="img-fluid" alt="Logo du pied de page">
                                </div>
                                <div class="footerText pe-xl-3">
                                    <p>Nous rendons vos rêves plus beaux et agréables avec beaucoup de bonheur.</p>
                                </div>
                                <form class="d-block mt-3">
                                    <div class="newsllerForm">
                                        <div class="inputBox">
                                            <input type="text" class="form-control" placeholder="Entrez votre email !">
                                        </div>
                                        <div class="btnWrap">
                                            <button type="button" class="btn btn-primary"><i class="fa-solid fa-location-arrow"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-2">
                            <div class="footer-widget mb-5 mb-md-5 mb-lg-0">
                                <h4 class="widget-title">À propos de nous</h4>
                                <ul class="footer-menu">
                                    <li><a href="JavaScript:Void(0);">Nos partenaires</a></li>
                                    <li><a href="JavaScript:Void(0);">Notre mission</a></li>
                                    <li><a href="JavaScript:Void(0);">Actualités et mises à jour</a></li>
                                    <li><a href="JavaScript:Void(0);">Carrières</a></li>
                                    <li><a href="JavaScript:Void(0);">Tarification</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-2">
                            <div class="footer-widget mb-5 mb-md-5 mb-lg-0">
                                <h4 class="widget-title">Catégories</h4>
                                <ul class="footer-menu">
                                    <li><a href="JavaScript:Void(0);">Design et Art</a></li>
                                    <li><a href="JavaScript:Void(0);">Compte de Chercheur<span class="badge bg-success badge-xs rounded-pill ms-2">Nouveau</span></a></li>
                                    <li><a href="JavaScript:Void(0);">Musique et Audio</a></li>
                                    <li><a href="JavaScript:Void(0);">Banques</a></li>
                                    <li><a href="JavaScript:Void(0);">Programmation et Tech</a></li>
                                    <li><a href="JavaScript:Void(0);">IT et Logiciel</a></li>
                                    <li><a href="JavaScript:Void(0);">Santé</a></li>
                                    <li><a href="JavaScript:Void(0);">Assurance</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 offset-md-4 col-lg-2 offset-lg-0">
                            <div class="footer-widget">
                                <h4 class="widget-title">Le Support</h4>
                                <ul class="footer-menu">
                                    <li><a href="JavaScript:Void(0);">Aide et Support</a></li>
                                    <li><a href="JavaScript:Void(0);">Notre empreinte</a></li>
                                    <li><a href="JavaScript:Void(0);">Support vendeur<span class="badge bg-warning badge-xs rounded-pill ms-2">Recrutement</span></a></li>
                                    <li><a href="JavaScript:Void(0);">Devenir vendeur</a></li>
                                    <li><a href="JavaScript:Void(0);">Discuter avec nous</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-2">
                            <div class="footer-widget">
                                <h4 class="widget-title">Légal</h4>
                                <ul class="footer-menu">
                                    <li><a href="JavaScript:Void(0);">Documentations</a></li>
                                    <li><a href="JavaScript:Void(0);">Conditions et Politique</a></li>
                                    <li><a href="JavaScript:Void(0);">Cookies</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="footerBottom">
                                <div class="d-flex align-items-center justify-content-center justify-content-md-between gap-3">

                                    <div class="copyrightCaps">
                                        <p class="copyright-text">© Hiredio. 2024 Themezhub. Tous droits réservés.</p>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-start gap-2">
                                        <div class="ftr-select language-select">
                                            <select class="form-select">
                                                <option selected>Anglais</option>
                                                <option value="1">Hindi</option>
                                                <option value="2">Français</option>
                                                <option value="3">Espagnol</option>
                                                <option value="4">Chinois</option>
                                            </select>
                                        </div>
                                        <div class="ftr-select currency-select">
                                            <select class="form-select">
                                                <option selected>USD</option>
                                                <option value="1">EURO</option>
                                                <option value="2">GBP</option>
                                                <option value="3">INR</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </footer>
			<!-- ============================ Footer End ================================== -->

			<!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content custom-modal" id="loginmodal">
						<div class="modal-header">
							<a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></a>
						</div>
						<div class="modal-body">

							<ul class="nav nav-tabs" id="loginTab" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" id="logint" data-bs-toggle="tab" data-bs-target="#logint-pane" type="button" role="tab" aria-controls="logint-pane" aria-selected="true">Sign In</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="signupt" data-bs-toggle="tab" data-bs-target="#signupt-pane" type="button" role="tab" aria-controls="signupt-pane" aria-selected="false">Sign Up</button>
								</li>
							</ul>
							<div class="tab-content" id="loginTabContent">

								<!-- Login Content -->
								<div class="tab-pane fade show active" id="logint-pane" role="tabpanel" aria-labelledby="logint" tabindex="0">
									<div class="loginForm">

										<div class="form-group">
											<label>User or Email</label>
											<input type="text" class="form-control" placeholder="Enter User or Email">
										</div>

										<div class="form-group">
											<label>Password</label>
											<input type="password" class="form-control" placeholder="Enter Password">
										</div>

										<div class="forgetWrap">
											<div class="modal-flex-first">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" id="savepassword" value="option1">
													<label class="form-check-label" for="savepassword">Save Password</label>
												</div>
											</div>
											<div class="modal-flex-last">
												<a href="JavaScript:Void(0);" class="text-primary fw-medium">Forget Password?</a>
											</div>
										</div>

										<div class="form-group">
											<button type="submit" class="btn btn-primary submitButton">Sign In</button>
										</div>

										<div class="prixer">
											<div class="devider-wraps position-relative">
												<div class="devider-text text-muted-2 text-md">Or signin with email</div>
											</div>
										</div>

										<div class="socialAuth">
											<ul>
												<li><a href="#" class="loginBtn facebook"><img src="assets/front/img/emp-8.png" class="img-fluid" alt="Google">Continue with Google</a></li>
												<li><a href="#" class="loginBtn google"><img src="assets/front/img/linkedin.png" class="img-fluid" alt="LinkedIn">Continue with LinkedIn</a></li>
											</ul>
										</div>

									</div>
								</div>

								<!-- SignUp Content -->
								<div class="tab-pane fade" id="signupt-pane" role="tabpanel" aria-labelledby="signupt" tabindex="0">
									<div class="loginForm">

										<div class="optionFlex full">

											<div class="flex-fill">
												<div class="form-checks">
													<input type="radio" class="btn-check" name="signas" id="candidate" checked>
													<label class="btn btn-light-primary" for="candidate"><i class="bi bi-person"></i>Candidate</label>
												</div>
											</div>

											<div class="flex-fill">
												<div class="form-checks">
													<input type="radio" class="btn-check" name="signas" id="employer">
													<label class="btn btn-light-primary" for="employer"><i class="bi bi-briefcase"></i>Employer</label>
												</div>
											</div>

										</div>

										<div class="nameWrap">
											<div class="row gx-4">

												<div class="col-6">
													<div class="form-group">
														<label>First Name</label>
														<input type="text" class="form-control" placeholder="Your First Name">
													</div>
												</div>

												<div class="col-6">
													<div class="form-group">
														<label>Last Name</label>
														<input type="text" class="form-control" placeholder="Your Last Name">
													</div>
												</div>

											</div>
										</div>

										<div class="form-group">
											<label>Username</label>
											<input type="text" class="form-control" placeholder="Username">
										</div>

										<div class="form-group">
											<label>Email</label>
											<input type="text" class="form-control" placeholder="Enter Your Email">
										</div>

										<div class="form-group">
											<label>Password</label>
											<input type="password" class="form-control" placeholder="Enter Password">
										</div>

										<div class="form-group mb-0">
											<button type="submit" class="btn btn-primary submitButton">Create Account</button>
										</div>

									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->

			<!-- Search Modal -->
			<div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="searchmodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content custom-modal" id="searchmodal">
						<div class="modal-header">
							<a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></a>
						</div>
						<div class="modal-body p-4">

							<div class="searchForm">

								<div class="optionFlex">

									<div class="flex-fill">
										<div class="form-checks">
											<input type="radio" class="btn-check" name="chooseOption" id="fjob" checked>
											<label class="btn btn-light-primary" for="fjob"><i class="bi bi-briefcase"></i>Find Jobs</label>
										</div>
									</div>

									<div class="flex-fill">
										<div class="form-checks">
											<input type="radio" class="btn-check" name="chooseOption" id="ffreelancers">
											<label class="btn btn-light-primary" for="ffreelancers"><i class="bi bi-person"></i>Find Talents</label>
										</div>
									</div>

								</div>

								<div class="formField icons mb-4">
									<input type="text" class="form-control lights" placeholder="Job Title or Keyword..">
									<i class="icon bi bi-search"></i>
								</div>

								<div class="formField icons right mb-4">
									<input type="text" class="form-control lights" placeholder="City, Country or zip">
									<i class="icon bi bi-crosshair"></i>
								</div>

								<div class="formField lights mb-4">
									<select class="select form-control">
									  <option value="all">All Categories</option>
									  <option value="it">IT & Software</option>
									  <option value="hlt">Healthcare</option>
									  <option value="ban">Bankings</option>
									  <option value="dm">Digital Marketing</option>
									  <option value="in">Insurence</option>
									  <option value="gp">Graphic Design</option>
									  <option value="cv">Video Promotion</option>
									</select>
								</div>

								<div class="formField icons right">
									<button type="button" class="btn btn-dark">Submit & Search</button>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->


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

</html>
