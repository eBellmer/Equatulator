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
		<link rel="stylesheet" href="<?php echo ROOT_DIR;?>scripts/css/style.css">
    
		<title>About</title>
  </head>
  <body>
        <?php include_once(ROOT_DIR . "scripts/php/analyticstracking.php") ?>
        <?php require_once(ROOT_DIR . 'scripts/php/nav.php');?>
        <div class="outer">
            <div class="middle">
                <div class="inner-1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>About Equatulator</h1>
                                <div class="row row-equation">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-2">
                                        <h4><a href="aboutAccounts.php">Accounts</a></h4>
                                    </div>
                                    <div class="col-md-2">
                                        <h4><a href="aboutSecurity.php">Security</a></h4>
                                    </div>
                                    <div class="col-md-2">
                                        <h4><a href="faq.php">FAQ</a></h4>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <h4>About</h4>
                                <p class="aboutText">
                                    Equatulator is a system designed to make your life easier when dealing
                                    with those arduous scientific equations. <br>
                                    I hope you get some use out of it.
                                </p>
                            </div>
                            <div class="col-md-5">
                                <h4>Special Thanks</h4>
                                <p class="aboutText">
                                    -Taylor for the inspiration behind the name.<br>
                                    -That guy for the nav menu and shit<br>
                                    -That other guy for the login stuff<br>
                                </p>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <div class="row row-heading">
                            <div class="row-md-12">
                                <h4>Contact</h4>
                            </div>
                        </div>
                        <div class="row row-subheading">
                            <div class="col-md-3"></div>
                            <div class="col-md-3">
                                <p class="aboutText">Email: <br><a href="mailto:admin@equatulator.me">admin@equatulator.me</a></p>
                            </div>
                            <div class="col-md-2">
                                <p class="aboutText">Twitter: <br> Ok</p>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </body>
</html>