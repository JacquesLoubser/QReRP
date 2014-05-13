<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "jacquesloubser1@gmail.com";
 
    $email_subject = "Email Subscriber";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['email'])
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
    $email_from = $_POST['email']; // required
 
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
   
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
 
<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Federo' rel='stylesheet' type='text/css'>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	

    <title>QReRP - ERP for Mobile</title>
  </head>

  <body>
<div class="container-narrow">
     <div id="space"></div> 
     <div id="pill-bar">
      <ul class="nav nav-pills">
      <li><a href="index.html">QReRP</a></li>
  <li class="pull-right"><a href="https://github.com/JacquesLoubser/QReRP"><i class="fa fa-github fa-lg"></i>View on Github</a></li>
  <li class="pull-right"><a href="#" onClick="alert('This page is coming soon')">About</a></li>
  <li class="pull-right"><a href="#" onClick="alert('This page is coming soon')">Features</a></li>
  <li class="active pull-right"><a href="index.html">Home</a></li>
</ul>
</div>
      <div id="space"></div>
<img class="centre" src="images/logo-lg.png" alt="QReRP Logo">
       <div id="space"></div>
       <h1>Take your business with you.</h1>     

<h3> Thank you for your intrest!</h3>
</div>
  </body>
</html>
 
 
 
<?php
 
}
 
?>