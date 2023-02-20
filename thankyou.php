<?php
    require "phpmailer/send_email.php";
  if(isset($_POST['sendmail'])){
    $email = $_POST['email'];
    $fullname = $_POST['name'];
    $location = $_POST['location'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
   $isSent = sendEmail($email,$location,$subject,$message);
   if($isSent){
    echo '<div style="text-align:center;">
    <h1>Thank you!</h1>
    <p>Your submission has been received.</p>
    <span id="timer"></span></div>
    <script type="text/javascript">
    var count = 5;
    var redirect = "home.html";
    function countDown(){
    var timer = document.getElementById("timer");
    if(count > 0){
    count--;
    timer.innerHTML = "This page will redirect in "+count+" seconds.";
    setTimeout("countDown()", 1000);
    }else{
    window.location.href = redirect;
    }
    }
    countDown();
    </script>';
   }
  }
?>
