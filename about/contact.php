<?php
/**
 * Created by PhpStorm.
 * User: ebell
 * Date: 18/04/2017
 * Time: 08:07 PM
 */
session_start();
define("ROOT_DIR", "./../")
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php require_once(ROOT_DIR . 'scripts/php/BSCSS.php');?>
	<link rel="stylesheet" href="<?= ROOT_DIR;?>scripts/css/style.css">

	<title>Contact | Equatulator</title>
</head>
<body>
<?php include_once(ROOT_DIR . "scripts/php/analyticstracking.php") ?>
<?php require_once(ROOT_DIR . 'scripts/php/nav.php');?>
<div class="outer">
	<div class="middle">
		<div class="inner-1">
			<div class="container-fluid">
				<section id="contact" class="content-section text-center">
					<!-- <div class="contact-section">
						<div class="container"> //-->
							<h2>Contact Us</h2>
							<p>Feel free to shout us by feeling the contact form or visiting our social network sites like Fackebook,Whatsapp,Twitter.</p>
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
										<div class="form-group">
											<label for="exampleInputName2">Name</label>
											<input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
										</div>
										<div class="form-group">
											<label for="exampleInputEmail2">Email</label>
											<input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
										</div>
										<div class="form-group ">
											<label for="exampleInputText">Your Message</label>
											<textarea  class="form-control" placeholder="Description"></textarea>
										</div>
										<button type="submit" class="btn btn-default">Send Message</button>
									</form>

									<hr>
									<h3>Our Social Sites</h3>
									<ul class="list-inline banner-social-buttons">
										<li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter"> <span class="network-name">Twitter</span></i></a></li>
										<li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a></li>
										<li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-youtube-play"> <span class="network-name">Youtube</span></i></a></li>
									</ul>
								</div>
							</div>
						<!-- </div>
					</div> //-->
				</section>
			</div>
		</div>
	</div>
</div>
</body>
</html>