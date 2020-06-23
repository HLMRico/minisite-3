<?php include("includes/header.php"); ?>
<title><?php echo $index_title ?></title>
<meta name="description" content="<?php echo $index_meta_desc ?>">
<meta name="keywords" content="<?php echo $meta_keywords ?>">
<meta name="author" content="<?php echo $seo_name ?>">
</head>

<body class="index">
    <?php include("includes/nav.php"); ?>
    <div class="container-fluid">        
        <div class="row screen-100">

            <div class="col-12 col-md-8 col-md-ln-12 col-lg-8 col-xl-10 offset-md-ln-0 offset-md-4 offset-lg-4 offset-xl-2 p-0 h-100" id="main">
                <div class="container-fluid p-0">
                    <div class="row d-flex flex-row h-100">
                        <div class="col-12 d-flex flex-column screen-50 parallax-window" data-parallax="scroll" data-image-src="assets/img/contact-hero.jpg">
                            <h1 class="text-center hero white mt-auto mb-2"><?php echo $company_name ?></h1>
                            <h3 class="text-center hero white mt-2 mb-auto">from Housemaster</h3>
                        </div>
                    </div>

                    <div class="container" id="content">
                        <div class="row content-inner">
                            <div class="col-12 col-md-ln-12 col-lg-8">
                                <h2 class="text-center text-md-left primary"><?php echo $company_name ?></h2>
                                <h3 class="text-center text-md-left secondary"><?php echo $seo_name ?></h3>
                                <p>When you are getting ready to purchase a home or commercial property in Kirkwood, MO you want the most independent, thorough property inspection possible at a reasonable price. That's why we are the one of the largest and most respected property inspection companies in <strong>Kirkwood</strong>, St. Louis, St. Charles and Jefferson Counties. High quality home inspections and pre-inspections...that's...what we do.</p>

                                <p>Wes Villhard is the local owner of Housemaster Home Inspections in <strong>Kirkwood</strong> and will provide you or your buyer with a complete inspection and highly qualified opinion of your property's condition. With nearly 30 years of experience, Wes Villhard is not only a licensed property inspector but also a Professional Engineer (P.E.). This means you will be getting a keen, critical eye when it comes to property conditions and what is required to remediate a problem should one exist.</p>

                                <p>For Realtors...Wes Villhard and his property inspection team will make sure your <strong>Kirkwood</strong> home buyers completely understand the condition of the home or commercial property they are planning to purchase. If it is in great shape...We'll let them know. If repairs need to be made or a certain aspect reveals problems or even code violations...We'll keep your buyers informed. Your recommendation to a high quality Home Inspector / Professional Engineer with experience in <strong>Kirkwood</strong> construction styles, soil conditions and other local characteristics means you respect your clients investment, satisfaction, and overall peace of mind.</p>

                                <p>For Buyers...a thorough, independent inspection plays no favorites nor holds any grudges. We give you the report and will provide a complete detailed list of explanations. If you're buying a great <strong>Kirkwood</strong> property (as many are!), we want you to know it, and we'll tell you so! And, you'll want to know about the warts too! Ask your realtor to give us a call if you buying a home anywhere around Kirkwood!</p>

                                <p>For Sellers...Wes Villhard, the premier Housemaster Home Inspection franchise holder in the Midwest has provided 100's of sellers with pre-listing inspections in <strong>Kirkwood</strong> and the surrounding St. Louis area A pre-inspection eliminates big surprises when it comes time to closing the deal. We will let you know exactly what needs to be done, before going on the market and can even recommend vendors to get the job done right.</p>

                                <p>For the best, most complete home inspection in <strong>Kirkwood</strong>, call us now at <a class="secondary" href="<?php echo $phone_href ?>"><?php echo $phone_display ?></a> to set up an appointment and free quote!</p>
                            </div>

                            <div class="col-12 col-lg-4 p-md-4 p-lg-2" id="testimonials">
                                <img class="d-block mx-auto mb-3 ashi" src="assets/img/ashi.png" alt="American Society of Home Inspectors Badge" />
                                <p class="text-center tertiary sans mb-3 mb-lg-5" style="font-size: 14px;">St. Louis Home Inspector<br>Certified, Licensed<br>Professional Engineer</p>
                                <h3 class="text-center secondary">Really Happy Clients</h3>

                                <!-- slick slider -->
                                <?php include("includes/testimonials.php"); ?>

                            </div>
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

        <!-- Slick Slider -->
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <!-- Custom JS -->
        <script src="../assets/js/custom.js"></script>
        <!-- Captcha -->

        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <!-- end scripts -->
</body>
</html>