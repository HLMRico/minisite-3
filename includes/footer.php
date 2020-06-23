

<footer>
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-12 my-auto text-center">
				<img src="<?php echo $logo ?>" alt="<?php echo $company_name ?> logo">
			</div>

			<div class="col-12 text-center mt-3">
				<h2 class="hero white"><?php echo $seo_name ?></h2>
				<h2 class="hero white"><a class="phone-no" style="font-family:'Open Sans', sans-serif;" href="<?php echo $phone_href ?>">Call Now! <?php echo $phone_display ?></a></h2>
			</div>

			<div class="col-12 col-md-4 text-center pb-4">
				<div class="row" style="padding: 1rem 2rem 0 2rem;">

					<div class="col">
						<a href="<?php echo $fb ?>" target="_blank"><span class="sm-icon fab fa-facebook"></span></a>
					</div>

					<div class="col">
						<a href="<?php echo $linkedin ?>" target="_blank"><span class="sm-icon fab fa-linkedin"></span></a>
					</div>
				</div>
			</div>
		
			<div class="col-12 text-center">
				<p class="mb-1 white">&copy; <?php echo date("Y"); ?> <?php echo $company_name ?>. All Rights Reserved.</p>
				<p class="mt-1 white"><?php echo $seo_name ?> is part of <a class="phone-no" href="<?php echo $company_site ?>" target="_blank"><?php echo $company_name ?></a>.</p>
			</div>
		</div>
	</div>
</footer>

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