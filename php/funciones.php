<?php 

function SendContactEmail() {

	$name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: ReLatIBaS'; 
    $to = 'power500@gmail.com'; 
    $subject = 'Hallo';
    //$human = $_POST['human'];
    $human = 4;
            
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
                
    if ($human == '4') {
        
        if (mail ($to, $subject, $body, $from)) { 
            echo '<p>Your message has been sent!</p>';
        } else { 
            echo '<p>Something went wrong, go back and try again!</p>'; 
        } 
    //} else if ($_POST['submit'] && $human != '4') {
    } else if ($human != '4') {
        echo '<p>You answered the anti-spam question incorrectly!</p>';
    }

}

?>