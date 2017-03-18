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
    
		<title>About Calculate</title>
  </head>
  <body>
		<?php require_once(ROOT_DIR . 'scripts/php/nav.php');?>
		<div class="outer">
			<div class="middle">
				<div class="inner-1">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-3">
								<h4>Special Thanks:</h4>
                                <p>Taylor for the inspiration behind the name.</p>
							</div>
							<div class="col-md-3"></div>
							<div class="col-md-3"></div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p>Special Thanks:</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
  </body>
</html>