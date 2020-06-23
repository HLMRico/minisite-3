<?php include("includes/header.php"); ?>
	<title><?php echo $contact_title ?></title>
	<meta name="description" content="<?php echo $contact_meta_desc ?>">
	<meta name="keywords" content="<?php echo $meta_keywords ?>">
	<meta name="author" content="<?php echo $seo_name ?>">
</head>

<body class="contact">
    <?php include("includes/nav.php"); ?>

    <div class="container-fluid">
        <div class="row screen-100">
            <div class="col-12 col-md-8 col-md-ln-12 col-lg-8 col-xl-10 offset-md-ln-0 offset-md-4 offset-lg-4 offset-xl-2 p-0 h-100" id="main">
                <div class="container-fluid p-0">
                    <div class="row d-flex flex-row h-100">
                        <div class="col-12 d-flex flex-column screen-50 parallax-window" data-parallax="scroll" data-image-src="assets/img/contact-hero.jpg">
                            <h1 class="text-center hero white mt-auto mb-2">
                                <?php echo $company_name ?>
                            </h1>
                            <h3 class="text-center hero white mt-2 mb-auto">from Housemaster</h3>
                        </div>
                    </div>
                    <div class="container" id="content">
                        <div class="row content-inner">
							<div class="col-12 col-ln-12 col-pt-md-12 col-md-6">
								<h2 class="text-center text-md-left primary">Contact <?php echo $company_name ?></h2>
								<h3 class="text-center text-md-left secondary	">Request Your Inspection Quote</h3>

								<p class="text-left">Get a quick, accurate property inspection quote by simply filling out this form. A member of our team will give you a call at your convenience!</p>								
							</div>
							
							<div class="col-12 col-ln-12 col-pt-md-12 col-md-6">
								<ul class="contact-info">
									<li class="contact-info-item"><strong><?php echo $company_name ?></strong></li>
									<li class="contact-info-item"><i class="primary fas fa-phone"></i><a class="secondary" href="<?php echo $phone_href ?>"><?php echo $phone_display ?></a></li>
									<li class="contact-info-item"><i class="primary fas fa-envelope"></i><a class="secondary" href="mailto:<?php echo $company_email ?>"><?php echo $company_email ?></a></li>
								</ul>
								<?php include 'forms/contact/form.php' ?>
							</div>
                        </div>
                    </div>

                    <div class="container-fluid" id="areas">
                        <div class="row content-inner">
                            <div class="col-12">
                                <h2 class="text-center secondary">Serving the home inspection needs for buyers, sellers and realtors in the following communities, and beyond:</h2>
                                <ul class="service-area">
                                    <li class="service-area-item">Kirkwood</li>
                                    <li class="service-area-item">Creve Coeur</li>
                                    <li class="service-area-item">Brentwood</li>
                                    <li class="service-area-item">South County</li>
                                    <li class="service-area-item">Bridgeton</li>
                                    <li class="service-area-item">Webster Groves</li>
                                    <li class="service-area-item">Glendale</li>
                                    <li class="service-area-item">St. Louis City</li>
                                    <li class="service-area-item">Ladue</li>
                                    <li class="service-area-item">Maryland Heights</li>
                                    <li class="service-area-item">St. Louis County</li>
                                    <li class="service-area-item">Rock Hill</li>
                                    <li class="service-area-item">University City</li>
                                    <li class="service-area-item">Sappington</li>
                                    <li class="service-area-item">Chesterfield</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php include("includes/footer.php"); ?>
                </div>
                <?php include("includes/sidebar.php") ?>
            </div>
        </div>
        <!-- scripts -->
        <!-- Parallax -->
        <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
        <!-- Custom JS -->
        <script src="../assets/js/custom.js"></script>
        <!-- Captcha -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <!-- end scripts -->
</body>

</html>