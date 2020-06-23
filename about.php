<?php include("includes/header.php"); ?>
<title><?php echo $about_title ?></title>
<meta name="description" content="<?php echo $about_meta_desc ?>">
<meta name="keywords" content="<?php $meta_keywords ?>">
<meta name="author" content="<?php echo $seo_name ?>">
</head>

<body class="about">
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
                            <div class="col-12">
                                <h2 class="text-center text-md-left primary">
                                    <?php echo $company_name ?>
                                </h2>
                                <h3 class="text-center text-md-left secondary">A Kirkwood Home Inspector You Can Rely On!</h3>
                                <p>Wes Villhard combines nearly 30 years of experience as a commercial &amp; residential inspector, Professional Engineer, and builder to deliver the most comprehensive inspection reports for buyers, sellers and agents across Kirkwood, St. Louis, and St. Charles Missouri. Our office is centrally located in Kirkwood MO, allowing us to provide convenient scheduling for your home inspection.</p>
                                <p>As a regular guest on The Doug Haldeman Show, Sunday mornings on 97.1 FM, Wes' candid discussions of inspection techniques, experiences and repair tips will provide home buyers with practical advice for your typical and not so typical home repairs. Real estate agents depend on Wes for a detailed evaluation of a building's condition. These are individuals that consistently rely on a trusted, professional, un-biased opinion of a homes condition. They choose Wes Villhard of HouseMaster.</p>
                                <p>Please call us now to schedule an inspection at <a class="secondary" href="<?php echo $phone_href ?>"><?php echo $phone_display ?></a>.</p>
                                <p>Home Inspections. Done Right. Since 1979.</p>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="btn-wrapper">
                                    <a href="javascript:void(0);" id="form-trigger" class="btn-solid secondary">Request a Quote</a>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="btn-wrapper">
                                    <a href="/contact" class="btn-solid primary">Contact Us</a>
                                </div>
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