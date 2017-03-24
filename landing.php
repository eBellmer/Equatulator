<?php 
session_start();
define("ROOT_DIR", "./") 
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php require_once(ROOT_DIR . 'scripts/php/BSCSS.php');?>
		<link rel="stylesheet" href="<?php echo ROOT_DIR;?>scripts/css/style.css">

		<title>Equatulate</title>
	</head>
	<body>
        <?php include_once(ROOT_DIR . "scripts/php/analyticstracking.php") ?>
		<?php require_once(ROOT_DIR . 'scripts/php/nav.php');?>

		<div class="outer">
			<div class="middle">
				<div class="inner-1">
					<div class="container-fluid">
						<div class="row row-heading">
							<div class="col-md-12">
								<h2>Equatulator.me</h2>
							</div>
						</div>
						<div class="row row-subtitle">
							<div class="col-md-12">
								<p>The Bootstrap/JS Equation Calculator</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<a href="<?php echo ROOT_DIR;?>calc/equations.php"><h3>Equation List</h3></a>
							</div>
							<div class="col-md-4">
								<a href="<?php echo ROOT_DIR;?>SecureLogin/login.php"><h3>Login</h3></a>
							</div>
							<div class="col-md-4">
								<a href="<?php echo ROOT_DIR;?>about/"><h3>About</h3></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>