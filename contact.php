<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["contact_name"];
	$email = $_POST["contact_email"];
	$phone = $_POST["contact_phone"];
	$message = $_POST["contact_message"];

	$email_body = $email_body . "Name: " . $name . "\n";
	$email_body = $email_body . "Email: " . $email . "\n";
	$email_body = $email_body . "Phone: " . $phone . "\n";
	$email_body = $email_body . "Message: " . $message;
	
	$to = "NickCellino@CashRecoveryNow.com";
	$subject = "Contact From CashRecoveryNow.com";

	mail($to, $subject, $email_body);
	header("Location: contact.php?status=thanks");
	exit;
}
?>

<!doctype html>
<html>
<head>
<title>Contact - Cash Recovery Now</title>
<meta charset="utf-8">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/contact.css">
<link rel="stylesheet" href="css/common.css">

<link href='https://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>

</head>

<!--________________________

HTML markup by Zeshan Ahmed.

	fiverr: www.fiverr.com/zeshanshani
	facebook: www.facebook.com/zak.donnay
	website: www.zeshanahmed.com 
	email: premiumsrapidshares@gmail.com

 ___________________________-->

<body>
<div id="container">
	<!-- header starts here -->
	<div class="header">	
		<div class="top-header center">
			
		</div>
		<!-- /.top-header -->
		<div class="clearfix main-header center">
			<h1 class="logo"><a href="index.html"><img src="images/logo.png" alt="Cash Recovery Now"></a></h1>
			<ul class="navbar">
				<li><a href="index.html">Home</a></li>
				<li><a href="is-this-real.html">Is This Real?</a></li>
				<li><a href="about.html">Our Company</a></li>
				<li><a href="received_a_letter.html">Received a Letter?</a></li>
				<li><a href="faq.html">FAQ's</a></li>
				<li><a href="cash_guarantee.html">Our Agreement</a></li>
				<li><a href="news.html">Privacy Policy</a></li>
				<li class="active"><a href="">Contact Us</a></li>
			</ul>
		</div>
                
                <div class="clearfix main-header center report_links" >
                    Report 
                    <a href="report-11.php">11 </a>,
                    <a href="report-12.php">12 </a>,
                    <a href="report-13.php">13 </a>,
                    <a href="report-14.php">14 </a>,
                    <a href="report-15.php">15 </a>,
                    <a href="report-16.php">16 </a>,
                    <a href="report-17.php">17 </a>
                </div>
                
		<!-- /.main-header -->
	</div>
	<!-- header ends here -->

	<!-- main starts here -->
	<div class="main center clearfix">
		<div class="content-area">
			<p>For your protection, our site employs Secure Sockets Layering (SSL) to encrypt all your personal information such as name, message, phone number and e-mail address before it travels over the Internet.<p>
			<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
				<p>Thanks for the email! We'll respond today as soon as possible.</p>
			<?php } else { ?>
				<form method="post" action="contact.php" class="contact-form">
					<ul>
						<li><label for="contact_name">Name:</label><input type="text" id="contact_name" name="contact_name"></li>
						<li><label for="contact_email">Email:</label><input type="text" id="contact_email" name="contact_email"></li>
						<li><label for="contact_phone">Phone:</label><input type="text" id="contact_phone" name="contact_phone"></li>
						<li><label for="contact_message">Message:</label><textarea id="contact_message" name="contact_message"></textarea></li>
						<li><input type="submit" value="Send Your Message"></li>
					</ul>
				</form>
			<?php } ?>
			<div class="contact-sec">
				<p>
					Cash Recovery Now
					<br>
					808 N Spring St, Suite 412
					<br>
					Los Angeles, CA 90012
				</p>
				<p>

					Phone: (800) 579-5050 Toll Free
					<br>
					FAX: (323) 204-0553  
					<br>
					E-mail: <strong><a href="mailto: NickCellino@CashRecoveryNow.com">NickCellino@CashRecoveryNow.com</a></strong></span>
					<br>
					Text Messages: (213) 618-1241
					<br>
					Text Messages by e-mail: 2136181241@tmomail.net
					<br>
					Website: <strong><a href="https://CashRecoveryNow.com"> https://CashRecoveryNow.com</a><strong>
					</p>
			</div>
		</div>
		<!-- /.content-area -->
	</div>
	<!-- Main ends here -->

	<!-- footer starts here -->
	<div class="footer">
		<div class="footer-inner center clearfix">
			<div class="footer-logo">
				<h3>CashRecovery<span>Now</span></h3>
			</div>
			<!-- /.footer-logo -->
			<div class="footer-credits">
				<p>&copy; 2012-2025&nbsp;<a href="https://CashRecoveryNow.com"> Cash Recovery Now</a> All rights reserved.</p>
				<p>
					Phone: <strong><span class="ph-no">(800) 579-5050</span></strong> <span class="f-email">Email: <strong><a href="mailto: NickCellino@CashRecoveryNow.com">NickCellino@CashRecoveryNow.com</a></strong></span>
				</p>
			</div>
			<!-- /.footer-credits -->
		</div>
	</div>
	<!-- footer ends here -->

</div><!-- container ends here -->

</body>
</html>