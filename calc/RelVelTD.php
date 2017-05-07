<?php 
session_start();
define("ROOT_DIR", "./../");

$equationName = "Relative Velocity Time Dilation";

if (isset($_SESSION['equatulatorUser']))
{
	$usr = $_SESSION['equatulatorUser']['username'];
}
else
{
	$usr = "NULL";
}

if (isset($_POST['submit']) && isset($_SESSION['equatulatorUser']))
{
	require (ROOT_DIR . "scripts/php/mySQLiCon.php");
	$input = $_POST['rVelocity'] . ", " . $_POST['aTime'];
	$output = $_POST['outputs'];
	$userID = $_SESSION['equatulatorUser']['id'];

	$sql = "INSERT INTO history (Equation, Inputs, Outputs, userID) VALUES('$equationName', '$input', '$output', '$userID')";

	$result1 = mysqli_query($con, $sql);
	mysqli_close($con);
	unset($_POST['submit']);
}
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
		<script src="<?= ROOT_DIR;?>scripts/js/RelVelTD.js"></script>
		<!-- Page Stylesheet //-->
		<link rel="stylesheet" href="<?= ROOT_DIR;?>scripts/css/style.css">

		<script type="text/javascript">
			var usr = "<?php echo $usr ?>";
		</script>

		<title>Relative Velocity Time Dilation | Equatulator</title>
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
								<h2><?=$equationName?></h2>
							</div>
						</div>
						<div class="row row-equation">	
							<div class="col-md-12">
								<!-- Time Dilation RelVel TeX//-->
									$$ \Delta t' = {\Delta t \over \sqrt{1 - {v^2 \over c^2}}} $$
							</div>
						</div>
						<form name="equation" id="equation" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" onsubmit=" return process();">
							<input type="hidden" id="hidden" name="outputs" value="" />
							<div class="row row-inputs">
								<div class="col-md-2">
								</div>
								<div class="col-md-4">
									<input type="text" name="rVelocity" value="" id="rVelocity" class="form-control input-sm chat-input" placeholder="Relative Velocity (m/s)"/>
								</div>
								<div class="col-md-4">
									<input type="text" name="aTime" value="" id="aTime" class="form-control input-sm chat-input" placeholder="Time Interval (seconds)"/>
								</div>
								<div class="col-md-2">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12" id="btns">
									<button type="button" class="btn btn-default" onclick="calculate()">Calculate</button>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<p id="error-msg"></p>
									<h4 id="resultHeader"></h4><p id="result"></p>
								</div>
							</div>
						</form>
						<div class="row row-options">
							<div class="col-md-3"></div>
							<div class="col-md-3">
								<div class="panel-group">
									<div class="panel">
										<div class="panel-heading">
											<div class="panel-title">
												<h3><a data-toggle="collapse" href="#description">Description</a></h3>
											</div>
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
												<button type="button" class="btn btn-link btn-options" data-dismiss="modal">Close</button>
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
										When two observers are in relative uniform motion and uninfluenced by any gravitational mass, the point of view of each will be that
										the other's (moving) clock is ticking at a slower rate than the local clock.<br>
										The faster the relative velocity, the greater the magnitude of time dilation. This case is sometimes called special relativistic time dilation.<br>
										For instance, two rocket ships (A and B) speeding past one another in space would experience time dilation.<br>
										If they could see inside each other's ships, they would see the other ships' clocks as going more slowly. That is, inside the frame of reference of Ship A,
										everything is moving normally, but everything over on Ship B appears to be moving more slowly (and vice versa).<br>
										From a local perspective, time registered by clocks that are at rest with respect to the local frame of reference (and far from any gravitational mass) always appears to pass at the same rate.<br>
										In other words, if a new ship, Ship C, travels alongside Ship A, it is "at rest" relative to Ship A. From the point of view of Ship A, new Ship C's time would appear normal too.<br>
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