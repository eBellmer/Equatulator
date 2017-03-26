<?php
/**
 * Created by PhpStorm.
 * User: ebell
 * Date: 25/03/2017
 * Time: 01:14 AM
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

    <!-- Bootstrap CSS //-->
    <?php require_once(ROOT_DIR . 'scripts/php/BSCSS.php');?>
    <!-- MathJax //-->
    <?php require_once(ROOT_DIR . 'scripts/php/mathJax.php');?>
    <!-- MathJS //-->
    <?php require_once(ROOT_DIR . 'scripts/php/mathJS.php');?>
    <script src="<?php echo ROOT_DIR;?>scripts/js/lCont.js"></script>
    <!-- Page Stylesheet //-->
    <link rel="stylesheet" href="<?php echo ROOT_DIR;?>scripts/css/style.css">

    <title>Schwarzschild Radius</title>
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
                <h2>Schwarzschild Radius</h2>
              </div>
            </div>
            <div class="row row-equation">
              <div class="col-md-12">
                <!-- Schwarzschild Radius TeX//-->
                $$ r_s = {2GM \over c^2} $$
              </div>
            </div>
            <div class="row row-inputs">
              <form id="schRadius">
                <div class="col-md-2">
                </div>
                <div class="col-md-4">
                  <input type="number" name="gravConstant" value="" id="gravConstant" class="form-control input-sm chat-input" placeholder="Gravitational Constant ()"/>
                </div>
                <div class="col-md-4">
                  <input type="number" name="objectMass" value="" id="objectMass" class="form-control input-sm chat-input" placeholder=" ObjectMass (m/s)"/>
                </div>
                <div class="col-md-2">
                </div>
              </form>
            </div>
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
              <div class="panel-group">
                <div class="panel">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <h3><a data-toggle="collapse" href="#collapse1">Description :></a></h3>
                    </h4>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>
                        Schwibble
                      </p>
                    </div>
                    <div class="panel-footer">Panel Footer</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
