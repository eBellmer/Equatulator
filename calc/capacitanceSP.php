<?php
/**
 * Created by PhpStorm.
 * User: ebell
 * Date: 01/04/2017
 * Time: 04:09 AM
 */
session_start();
define("ROOT_DIR", "./../");

$equationName = "Capacitance in Series and Parallel";

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
	$input = $_POST['capacitor1'] . ", " . $_POST['capacitor2'];
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
	<script src="<?= ROOT_DIR;?>scripts/js/capacitanceSP.js"></script>
	<!-- Page Stylesheet //-->
	<link rel="stylesheet" href="<?= ROOT_DIR;?>scripts/css/style.css">

	<script type="text/javascript">
		var usr = "<?php echo $usr ?>";
	</script>

	<title>Capacitance in Series and Parallel | Equatulator</title>
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
						<!-- Capacitance in Series TeX//-->
						$$ C_s = {C_1 C_2 \over C_1 + C_2} $$
						<!-- Capacitance in Parallel TeX//-->
						$$ C_p = C_1 + C_2 $$
					</div>
				</div>
				<form name="equation" id="equation" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" onsubmit=" return process();">
					<input type="hidden" id="hidden" name="outputs" value="" />
					<div class="row row-inputs">
						<div class="col-md-2">
						</div>
						<div class="col-md-4">
							<input type="number" name="capacitor1" value="" id="capacitor1" class="form-control input-sm chat-input" placeholder="Capacitor 1 (farads)"/>
						</div>
						<div class="col-md-4">
							<input type="number" name="capacitor2" value="" id="capacitor2" class="form-control input-sm chat-input" placeholder="Capacitor 2 (farads)"/>
						</div>
						<div class="col-md-2">
						</div>
					</div>
					<div class="row row-btn">
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
								Stuff
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