<?php 
require_once('recaptchalib.php');

function SendContactEmail() {

    //$human = $_POST['human'];

    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        // your site secret key
        // public:  6LfTGBMUAAAAAEbGluBBA-mJdHPIPCcu1OS6dAyk
        // local:   6LfTDhMUAAAAAGHBcDEMhBlzZo44T8dE2DZE97zA
        $secret = '6LfTDhMUAAAAAGHBcDEMhBlzZo44T8dE2DZE97zA';
        
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);

        $responseData = json_decode($verifyResponse);

        if($responseData->success) {
            //$body = "From: $name\n E-Mail: $email\n Message:\n $message";
            $name = !empty($_POST['name'])?$_POST['name']:'';
            $email = !empty($_POST['email'])?$_POST['email']:'';
            $message = !empty($_POST['message'])?$_POST['message']:'';
            $from = 'From: ReLatIBaS';
            
            $to = 'power500@gmail.com'; 
            $subject = 'Contact';

            $htmlContent = "
                <h1>Contact request details</h1>
                <p><b>Name: </b>".$name."</p>
                <p><b>Email: </b>".$email."</p>
                <p><b>Message: </b>".$message."</p>
            ";

            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // More headers
            $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";

            if (mail ($to, $subject, $body, $from)) { 
                echo 'ok';  // Your message has been sent!
            } else { 
                echo 'error';   // Something went wrong, go back and try again!
            }
        } else {
             echo 'humanFail'; // Robot verification failed, please try again.
        }
    } else {
         echo 'humanEmpty';  // Please click on the reCAPTCHA box.
    }

}

?>