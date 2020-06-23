<img src="<?php echo $logo ?>" alt="<?php echo $company_name ?> Logo" class="text-center d-block mx-auto" />
<form action="forms/quick/quick-process.php" id="quick" method="post">
	<h2 class="pb-2 white">Yes, Let's Talk!</h2>
	<p class="text-center white">Wow, we're glad to see you're so excited to work with us. Leave your information below and we will reach out to you as soon as possible!</p>
	<span class="mx-auto my-lg-3 separator white"></span>
	<div class="row">
		<div class="col-12" style="z-index: 2;">
			<input type="text" id="quick_fullName" name="quick_name" placeholder="Name" required>
		</div>

		<div class="col-12 col-lg-6" style="z-index: 2;">
			<input type="email" id="quick_userEmail" name="quick_email" placeholder="Email" required>
		</div>
		
		<div class="col-12 col-lg-6" style="z-index: 2;">
			<input type="tel" id="quick_userPhone" name="quick_phone" placeholder="Phone" required>
		</div>
	</div>
	
	<div class="row">	
		<div class="col-12" style="z-index: 1;">
			<textarea name="quick_comments" id="quick_comments" placeholder="Fill us in on any other details..." required></textarea>
		</div>

        <div class="col-12 text-center" style="z-index: 2;">
            <div class="g-recaptcha" data-sitekey="<?php echo $site_key ?>"></div>
        </div>
        
		<div class="col-12" style="z-index: 2;">
			<button type="submit" id="quick_submit" name="quick_submitButton">Send <i class="fas fa-angle-double-right" style="font-size: 18px;"></i></button>
		</div>
	</div>
</form>