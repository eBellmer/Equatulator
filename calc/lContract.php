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
		
		<!-- Bootstrap CSS //-->
		<?php require_once(ROOT_DIR . 'scripts/php/BSCSS.php');?>
		<!-- MathJax //-->
		<?php require_once(ROOT_DIR . 'scripts/php/mathJax.php');?>
		<!-- MathJS //-->
		<?php require_once(ROOT_DIR . 'scripts/php/mathJS.php');?>
		<script src="<?php echo ROOT_DIR;?>scripts/js/lCont.js"></script>
		<!-- Page Stylesheet //-->
		<link rel="stylesheet" href="<?php echo ROOT_DIR;?>scripts/css/style.css">

		<title>Lorentz Contraction</title>
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
								<h2>Lorentz Contraction</h2>
							</div>
						</div>
						<div class="row row-equation">	
							<div class="col-md-12">
								<!-- Lorentz Contraction TeX//-->
								$$ L = {L_0 \sqrt{1- {v^2 \over c^2}}} $$
							</div>
						</div>
						<div class="row row-inputs">
							<form id="lCont">
								<div class="col-md-2">
								</div>
								<div class="col-md-4">
									<input type="number" name="aLength" value="" id="aLength" class="form-control input-sm chat-input" placeholder="Actual Length (metres)"/>
								</div>
								<div class="col-md-4">
									<input type="number" name="rVelocity" value="" id="rVelocity" class="form-control input-sm chat-input" placeholder="Relative Velocity (m/s)"/>
								</div>
								<div class="col-md-2">
								</div>
							</form>
						</div>
						<div class="row row-btn">
							<div class="col-md-12">
								<button type="button" class="btn btn-default" onclick="calculate()">Calculate</button>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
                <p id="error-msg"></p>
								<h3 id="result"></h3>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h3>Description:</h3>
								<p>
                  Length contraction is the phenomenon of a decrease in length of an object as measured by an observer who is traveling at any non-zero velocity relative to the object.
									This contraction (more formally called Lorentz contraction or Lorentz–FitzGerald contraction after Hendrik Lorentz and George Francis FitzGerald) is usually only 
									noticeable at a substantial fraction of the speed of light.</br>
									Length contraction is only in the direction parallel to the direction in which the observed body is travelling.</br>
									For standard objects, this effect is negligible at everyday speeds, and can be ignored for all regular purposes. Only at greater speeds, or for electron motion, does it become significant.</br>
									At a speed of 13,400,000 m/s (30 million mph, 0.0447c) contracted length is 99.9% of the length at rest; at a speed of 42,300,000 m/s (95 million mph, 0.141c), the length is still 99%. 
									As the magnitude of the velocity approaches the speed of light, the effect becomes dominant.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>