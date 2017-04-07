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
		<?php require_once(ROOT_DIR . 'scripts/php/mathJax.php');?>
		<link rel="stylesheet" href="<?= ROOT_DIR;?>scripts/css/style.css">
		<!-- <link rel="apple-touch-icon" href="https://equatulator.me/media/atomApple.png" sizes="57x57"" />
		<link name="msapplication-square150x150logo" content="https://equatulator.me/media/atomUWP.png" /> //-->

		<title>Equatulator</title>
	</head>
	<body data-spy="scroll" data-offset="50">
    <?php include_once(ROOT_DIR . "scripts/php/analyticstracking.php") ?>
		<?php require_once(ROOT_DIR . 'scripts/php/nav.php');?>
		<div class="outer">
			<div class="middle">
				<div class="inner-1">
					<div class="container-fluid" id="home">
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
							<div class="col-md-3"></div>
							<div class="col-md-2">
								<a href="#equations"><h4>Equations</h4></a>
							</div>
							<div class="col-md-2">
								<a href="<?= ROOT_DIR;?>login/login.php"><h4>Login</h4></a>
							</div>
							<div class="col-md-2">
								<a href="<?= ROOT_DIR;?>about/"><h4>About</h4></a>
							</div>
							<div class="col-md-3"></div>
						</div>
					</div>
					<div class="container-fluid" id="equations">
						<div class="row row-heading">
							<div class="col-md-12">
								<h2>Equations</h2>
							</div>
						</div>
						<!-- Special Relativity Equations//-->
						<div class="row row-equationArea">
							<div class="col-md-4">
								<h3>Special Relativity:</h3>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								<a href="./calc/lContract.php">
									Lorrentz Contraction <br>
									<!-- Lorentz Contraction TeX//-->
									$$ L = {1\over L_0 \sqrt{1-v^2 c^2}} $$
								</a>
							</div>
							<div class="col-md-2">
								<a href="./calc/RelVelTD.php">
									Relative Velocity Time Dilation <br>
									<!-- Time Dilation RelVel TeX//-->
									$$ \Delta t' = {\Delta t \over \sqrt{1 - {v^2 \over c^2}}} $$
								</a>
							</div>
							<div class="col-md-2">
								<a href="./calc/schwRad.php">
									Schwarzschild Radius <br>
									<!-- Schwarzschild Radius TeX//-->
									$$ r_s = {2GM \over c^2} $$
								</a>
							</div>
							<div class="col-md-2">
								<a href="./calc/massEnergy.php">
									Mass-Energy
									<!-- Mass-Energy TeX//-->
									$$ E_0 = m_0 c^2 $$
									$$ E = {E_0 \over \sqrt{1 - {v^2 \over c^2}}} $$
								</a>
							</div>
							<div class="col-md-2"></div>
							<div class="col-md-2"></div>
						</div>
						<!-- End of Special Relativity Equations //-->
						<!-- Electrical Engineering Equations //-->
						<div class="row row-equationArea">
							<div class="col-md-4">
								<h3>Electrical Engineering:</h3>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								<a href="<?= ROOT_DIR;?>calc/ohmsLaw.php">
									Ohm's Law <br>
									<!-- Ohm's Law TeX//-->
									$$ V = {I \over R} $$
								</a>
							</div>
							<div class="col-md-2">
								<a href="<?= ROOT_DIR;?>calc/resistanceSP.php">
									Resistance in Series and Parallel <br>
									<!-- Resistance in Series TeX//-->
									$$ R_s = R_1 + R_2 $$
									<!-- Resistance in Parallel TeX//-->
									$$ R_p = {R_1 R_2 \over R_1 + R_2} $$
								</a>
							</div>
							<div class="col-md-2">
								<a href="<?= ROOT_DIR;?>calc/capacitanceSP.php">
									Capacitance in Series and Parallel <br>
									<!-- Capacitance in Series TeX//-->
									$$ C_s = {C_1 C_2 \over C_1 + C_2} $$
									<!-- Capacitance in Parallel TeX//-->
									$$ C_p = C_1 + C_2 $$
								</a>
							</div>
							<div class="col-md-2"></div>
							<div class="col-md-2"></div>
							<div class="col-md-2"></div>
						</div>
						<!-- End of Electrical Engineering Equations //-->
						<!-- Computing Equations //-->
						<div class="row row-equationArea">
							<div class="col-md-4">
								<h3>Computing:</h3>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
							</div>
							<div class="col-md-2">
							</div>
							<div class="col-md-2"></div>
							<div class="col-md-2"></div>
							<div class="col-md-2"></div>
							<div class="col-md-2"></div>
						</div>
						<!-- End of Computing Equations //-->
					</div>
				</div>
			</div>
		</div>
	</body>
</html>