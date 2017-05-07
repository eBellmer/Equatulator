<?php
/**
 * Created by PhpStorm.
 * User: ebell
 * Date: 25/03/2017
 * Time: 01:14 AM
 */
session_start();
define("ROOT_DIR", "./../");

$equationName = "Schwarzschild Radius";

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
	$input = $_POST['gravConstant'] . ", " . $_POST['objectMass'];
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
    <script src="<?= ROOT_DIR;?>scripts/js/schwRad.js"></script>
    <!-- Page Stylesheet //-->
    <link rel="stylesheet" href="<?= ROOT_DIR;?>scripts/css/style.css">

	  <script type="text/javascript">
		  var usr = "<?php echo $usr ?>";
	  </script>

    <title>Schwarzschild Radius | Equatulator</title>
  </head>
  <body>
    <?php include_once(ROOT_DIR . "scripts/php/analyticstracking.php");?>
    <?php require_once(ROOT_DIR . 'scripts/php/nav.php');?>
    <!-- R(s)=2GM/C^2
    G is the gravitational constant, M is the object mass and c is the speed of light.
    G= gravitational constant 6.7x10^-11? //-->
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
                <!-- Schwarzschild Radius TeX//-->
                $$ r_s = {2GM \over c^2} $$
              </div>
            </div>
	          <form name="equation" id="equation" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" onsubmit=" return process();">
		          <input type="hidden" id="hidden" name="outputs" value="" />
	            <div class="row row-inputs">
                <div class="col-md-2">
                </div>
                <div class="col-md-4">
                  <input type="number" name="gravConstant" value="" id="gravConstant" class="form-control input-sm chat-input" placeholder="Gravitational Constant ()"/>
                </div>
                <div class="col-md-4">
                  <input type="number" name="objectMass" value="" id="objectMass" class="form-control input-sm chat-input" placeholder=" Object Mass ()"/>
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
	                    The Schwarzschild radius (sometimes historically referred to as the gravitational radius)
	                    is the radius of a sphere such that, if all the mass of an object were to be compressed within that sphere,
	                    the escape velocity from the surface of the sphere would equal the speed of light. <br>
	                    An example of an object where the mass is within its Schwarzschild radius is a black hole. <br>
	                    Once a stellar remnant collapses to or below this radius, light cannot escape and the object is no longer directly visible outside,
	                    thereby forming a black hole.[1] It is a characteristic radius associated with every quantity of mass. <br>
	                    The Schwarzschild radius was named after the German astronomer Karl Schwarzschild,
	                    who calculated this exact solution for the theory of general relativity in 1916.
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
