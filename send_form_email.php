<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "finallyfreerec@gmail.com";
 
    $email_subject = "FFP Contacts";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['full_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $full_name = $_POST['full_name']; // required

 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$full_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Full Name: ".clean_string($full_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
<!-- include your own success html here -->
<!DOCTYPE html>
<html lang="en">
  <head>
  <link href='http://fonts.googleapis.com/css?family=Amatic+SC:700,400' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
	
    <title>Contact | Finally Free Productions</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet">
	<link href="css/style2.css" rel="stylesheet">
	
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
	

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	
<div class="container"> 
	<div class="row main2"> 
		<nav class="navbar navbar-static top navbar-inverse" style="background:none;border:none;">
		
			<a class="navbar-brand" href="index.html"><img src="img/revamp_ffp_logo_final.png" style="max-width:320px;"/></a>
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			 </button>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-left show-desktop">
				<li class="current"><a href="works.html">Our
				Work</a></li>
				<li><a href="artist_development.html">Artist
				Development</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right show-desktop">
				<li><a href="services.html">Our	
				Services</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
			<ul class="nav navbar-nav hide">
				<li class="current"><a href="works.html">Our Work</a></li>
				<li><a href="artist_development.html">Artist Development</a></li>
				<li><a href="services.html">Our Services</a></li>
				<li><a href="contact.html">Contact</a></li>
			<ul>
			</div>
	   </nav>
	   
	</div>
<div>

    <div class="container">

	<p style="text-align:center;font-weight:bold;font-size:20px; margin-top:10%; ">Thank you for contacting us. We will be in touch with you very soon.</p>

	</div>
	
	<div class="footer">    
        <div class="row">
			<div class="col-md-4 col-sm-6">
				Call us at <span>(917) 722-8972</span> to set up a free consultation
			</div>
			<div class="col-md-4 col-sm-6">
				Email us at <span>contact@finallyfreeproductions.com</span>
			</div>
			<div class="col-md-4">
				<span>67 West Street, Brooklyn, NY 11222</span>
				<span class="social-icons">
					<a href="https://www.facebook.com/finallyfreerecords?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a> 
					<a href="https://twitter.com/SARGchante" target="_blank"><i class="fa fa-twitter"></i></a> 
					<!--<a href="" target="_blank"><i class="fa fa-instagram"></i></a> 
					<a href="" target="_blank"><i class="fa fa-tumblr"></i></a> 
					<a href="" target="_blank"><i class="fa fa-youtube"></i></a> -->
				</span>
			</div>
		</div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
 
 
 
<?php
 
}
 
?>