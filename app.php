<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $message = trim($_POST['message']);
        
        if(!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) { 
                $from = "$email";
                $to = "lis.gint@gmail.com";
                $subject = "New message";
                $client = 'Message from: ' . $name . ', ' . $email;
                $message = htmlspecialchars($message);
                mail($to,$subject,$client,$message,$from);
                echo "<script>alert('We have received your enquiry and will respond to you as soon as possible. For urgent enquiries please call us on one of the telephone numbers: +46 070 896 21 11 or +46 08 410 100 41.');</script>";
            }
        }
    }
    include('db.php');
?>

