<?php 
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
		<?php require_once(ROOT_DIR . 'scripts/php/mathJax.php');?>
		<link rel="stylesheet" href="<?php echo ROOT_DIR;?>scripts/css/style.css">
    
		<title>Equations</title>
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
								<h2>Equations</h2>
							</div>
						</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								<h3>Relativity:</h3>
							</div>
						</div>
						<div class="row">	
							<div class="col-md-2">
								<a href="./lContract.php">
									Lorrentz Contraction </br>
									<!-- Lorentz Contraction TeX//-->
									$$ L = {1\over L_0 \sqrt{1-v^2 c^2}} $$ 
								</a>
							</div>
							<div class="col-md-2">
								<a href="./RelVelTD.php">
									Relative Velocity Time Dilation </br>
									<!-- Time Dilation RelVel TeX//-->
									$$ \Delta t' = {\Delta t \over \sqrt{1 - {v^2 \over c^2}}} $$
								</a>
							</div>
							<div class="col-md-2">
								<a href="./schwRad.php">
									Schwarzschild Radius </br>
									<!-- Schwarzschild Radius TeX//-->
									$$ r_s = {2GM \over c^2} $$
								</a>
							</div>
							<div class="col-md-2">
								<a href="#">No</a>
							</div>
							<div class="col-md-2">
								<a href="#">Maybe</a>
							</div>
							<div class="col-md-2">
								<a href="#">I don't know</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								Can you repeat the question?
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
  </body>
</html>