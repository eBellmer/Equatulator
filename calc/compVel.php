<?php
/**
 * Created by PhpStorm.
 * User: ebell
 * Date: 01/04/2017
 * Time: 04:07 AM
 */
session_start();
define("ROOT_DIR", "./../");
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
	<script src="<?php echo ROOT_DIR;?>scripts/js/compVel.js"></script>
	<!-- Page Stylesheet //-->
	<link rel="stylesheet" href="<?php echo ROOT_DIR;?>scripts/css/style.css">

	<title>Composition of Velocities</title>
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
						<h2>Composition of Velocities</h2>
					</div>
				</div>
				<div class="row row-equation">
					<div class="col-md-12">
						<!-- Composition of Velocities TeX//-->
						$$ v = {v_1 + v_2 \over 1 + {v_1 + v_2 \over c^2}} $$
					</div>
				</div>
				<div class="row row-inputs">
					<form id="lCont">
						<div class="col-md-2">
						</div>
						<div class="col-md-4">
							<input type="number" name="velocityA" value="" id="velocityA" class="form-control input-sm chat-input" placeholder="Velocity of Object A"/>
						</div>
						<div class="col-md-4">
							<input type="number" name="velocityB" value="" id="velocityB" class="form-control input-sm chat-input" placeholder="Velocity of Object B"/>
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
						<h4>Result:</h4><p id="result"></p>
					</div>
				</div>
				<div class="row row-options">
					<div class="col-md-3"></div>
					<div class="col-md-3">
						<div class="panel-group">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">
										<h3><a data-toggle="collapse" href="#description">Description</a></h3>
									</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<!-- Trigger the modal with a button -->
						<h3><a data-toggle="modal" data-target="#options">Options</a></h3>
						<!-- Modal -->
						<div id="options" class="modal fade" role="dialog">
							<div class="modal-dialog modal-sm">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close btn-link" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Options</h4>
									</div>
									<div class="modal-body">
										<p>
											Some options here.<br>
											Yes <br>
											No <br>
										</p>
									</div>
									<div class="modal-footer">
										<a href="#"><h4 data-dismiss="modal">Close</h4></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3"></div>
				</div>
				<div class="row row-description">
					<div id="description" class="panel-collapse collapse">
						<div class="panel-body">
							<p>
								Ok!
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>