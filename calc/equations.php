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
						<!-- Special Relativity Equations//-->
						<div class="row">
							<div class="col-md-4">
								<h3>Special Relativity:</h3>
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
								<a href="#">
									Mass-Energy
									<!-- Mass-Energy TeX//-->
									$$ E_0 = m_0 c^2 $$
									$$ E = {E_0 \over \sqrt{1 - {v^2 \over c^2}}} $$
								</a>
							</div>
							<div class="col-md-2">
								<a href="#">
									Composition of Velocities
									<!-- Composition of Velocities TeX//-->
									$$ v = {v_1 + v_2 \over 1 + {v_1 + v_2 \over c^2}} $$
								</a>
							</div>
							<div class="col-md-2">
								<a href="#">I don't know</a>
							</div>
						</div>
						<!-- End of Special Relativity Equations //-->

						<!-- Electrical Engineering Equations //-->
						<div class="row">
							<div class="col-md-4">
								<h3>Electronics:</h3>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								<a href="#">
									Ohm's Law </br>
									<!-- Ohm's Law TeX//-->
									$$ V = {I \over R} $$
								</a>
							</div>
							<div class="col-md-2">
								<a href="#">
									Resistance in Series and Parallel </br>
									<!-- Resistance in Series TeX//-->
									$$ R_s = R_1 + R_2 $$
									<!-- Resistance in Parallel TeX//-->
									$$ R_p = {R_1 R_2 \over R_1 + R_2} $$
								</a>
							</div>
							<div class="col-md-2">
								<a href="#">
									Capacitance in Series and Parallel </br>
									<!-- Capacitance in Series TeX//-->
									$$ C_s = {C_1 C_2 \over C_1 + C_2} $$
									<!-- Capacitance in Parallel TeX//-->
									$$ C_p = C_1 + C_2 $$
								</a>
							</div>
							<div class="col-md-2">
								<a href="#">Capacitance of a Capacitor</a>
							</div>
							<div class="col-md-2">
								<a href="#">Maybe</a>
							</div>
							<div class="col-md-2">
								<a href="#">I don't know</a>
							</div>
						</div>
						<!-- End of Electrical Engineering Equations //-->
					</div>
				</div>
			</div>
		</div>
  </body>
</html>