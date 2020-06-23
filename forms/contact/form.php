<form action="forms/contact/process.php" id="contact" method="post">
    <div class="row">
        <div class="col-12" style="z-index: 2;">
            <input type="text" id="fullName" name="name" placeholder="Name" required>
        </div>

        <div class="col-12 col-lg-6" style="z-index: 2;">
            <input type="email" id="userEmail" name="email" placeholder="Email" required>
        </div>
        
        <div class="col-12 col-lg-6" style="z-index: 2;">
            <input type="tel" id="userPhone" name="phone" placeholder="Phone" required>
        </div>
    </div>
    
    <div class="row">   
        <div class="col-12" style="z-index: 1;">
            <textarea name="comments" id="comments" placeholder="Fill us in on any other details..." required></textarea>
        </div>

        <div class="col-12 text-center" style="z-index: 2;">
            <div class="g-recaptcha" data-sitekey="<?php echo $site_key ?>"></div>
        </div>

        <div class="col-12" style="z-index: 2;">
            <button type="submit" id="submit" name="submitButton">Send <i class="fas fa-angle-double-right" style="font-size: 18px;"></i></button>
        </div>
    </div>
</form>