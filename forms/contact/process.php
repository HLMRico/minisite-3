<?php
    if (!isset($_SESSION)) session_start();
    if(!$_POST) exit;

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require dirname(__FILE__,3).'/phpmailer/vendor/autoload.php';

    include dirname(__FILE__,3).'/includes/var.php';
    include dirname(__FILE__,2).'/validate.php';
    
    $receiver_name = $seo_name;
    $receiver_subject = "New Lead from " . $seo_name;
    $receiver_email = $company_email;
    $autoRedirectForm = true;
    $autoRedirectForm_URL = "../../index.php";
    $autoResponder = true;

    $form_name = strip_tags(trim($_POST["name"]));
    $form_email = strip_tags(trim($_POST["email"]));
    $form_phone = strip_tags(trim($_POST["phone"]));
    $form_comments = strip_tags(trim($_POST["comments"]));
    
//  $captcha = strip_tags(trim($_POST["g-recaptcha-response"]));
    
    // Dynamic subject
    // Reports the department selected ($department)
    // And also reports the sender / persons name ($form_name)
        $receiver_subject = 'New Lead from ' . $seo_name;
    
    /*  -------------------------------------------------------------------------
    : Prepare serverside validation
    ------------------------------------------------------------------------- */
    
    $errors = array();
    
    /* validate firstname
    ------------------------------------ */
    if(isset($_POST["name"])) {
        if (!$form_name) {
            $errors[] = "Enter your name";
        } elseif(strlen($form_name) < 2)  {
            $errors[] = "Enter at least 2 characters";
        }
    }
    
    /* validate email address
    -------------------------------------- */
    if(isset($_POST["email"])) {
        if (!$form_email) {
            $errors[] = "Enter your email address";
        } else if (!validEmail($form_email)) {
            $errors[] = "Enter a VALID email address";
        }
    }
    
    /* validate telephone
    -------------------------------------- */
    if(isset($_POST["phone"])) {
        if (!$form_phone) {
            $errors[] = "Enter your telephone number";
        }
        }

    /* validate security captcha
    --------------------------------------- */
    $email;$comment;$captcha;
    if(isset($_POST['email'])) {
      $email=$_POST['email'];
    }
    if(isset($_POST['comments'])) {
      $comment=$_POST['comments']; 
    }


    if(isset($_POST['g-recaptcha-response'])) {
      $captcha=$_POST['g-recaptcha-response'];
    }



    if(!$captcha) {
      echo '<h2>Please check the the captcha form.</h2>';
      exit;
    }
    $secretKey = $secret_key;
    $ip = $_SERVER['REMOTE_ADDR'];
    // post request to server
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
    $response = file_get_contents($url);
    $responseKeys = json_decode($response,true);
    // should return JSON with success as true
    if($responseKeys["success"]) {
            echo '<h2>Thanks for your submission!</h2>';
    } else {
            echo '<h2>Validation Failed. Please try again.</h2>';
    }

    /* output all errors as a list
        -------------------------------------- */
    if ($errors) {
        $errortext = "Oops! Something went wrong.";
        foreach ($errors as $error) {
            $errortext .= '<li>'. $error . "</li>";
        }
        echo '<div class="alert-error"><strong>The following errors occured:</strong><br><ul>'. $errortext .'</ul></div>';
    
        } else {

            include 'form-message.php';
                
            $mail = new PHPMailer();
            $mail->isSendmail();
            $mail->IsHTML(true);
            $mail->From = $form_email;
            $mail->CharSet = "UTF-8";
            $mail->FromName = $form_name;
            $mail->Encoding = "base64";
            $mail->Timeout = 200;
            $mail->ContentType = "text/html";
            $mail->addAddress($receiver_email, $receiver_name);
            $mail->Subject = $receiver_subject;
            $mail->Body = $goldmessage;
            $mail->AltBody = $form_name . " would like to get in touch";
            
            /*  -------------------------------------------------------------------
            : Prepare sending to multiple  addresses / recepients if true
            ------------------------------------------------------------------- */
            $extra_recipients = false;
            if($extra_recipients == true) {
                $recipients = array(
                    $company_email => "Admin"
                );
                
                foreach($recipients as $email => $name) {
                    $mail->AddBCC($email, $name);
                }
            }
            
            if($mail->Send()) {
            
                /*  ---------------------------------------------------------------------
                : Send the auto responder message if its true
                --------------------------------------------------------------------- */
                if($autoResponder == true) {
                
                    include dirname(__FILE__).'/templates/autoresponder.php';
                    
                    $automail = new PHPMailer();
                    $automail->isSendmail();
                    $automail->From = $receiver_email;
                    $automail->FromName = $receiver_name;
                    $automail->isHTML(true);
                    $automail->CharSet = "UTF-8";
                    $automail->Encoding = "base64";
                    $automail->Timeout = 200;
                    $automail->ContentType = "text/html";
                    $automail->AddAddress($form_email, $form_name);
                    $automail->Subject = "Thank you for contacting us";
                    $automail->Body = $automessage;
                    $automail->AltBody = "Use an HTML compatible email client";
                    $automail->Send();

                }
                
                if($autoRedirectForm == true) {
                
                    echo '<script>
                             setTimeout(function () {window.location.replace("'.$autoRedirectForm_URL.'") }, 1000);
                          </script>';
                
                }

            echo '<div class="alert flo-notification alert-success">Message has been sent successfully!</div>';
            
            } else {
                echo '<div class="alert flo-notification alert-error">Message not sent - an error occured!</div>';
            }
        }
?>