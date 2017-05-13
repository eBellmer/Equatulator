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
		<link rel="stylesheet" href="<?= ROOT_DIR;?>scripts/css/style.css">
    
		<title>FAQ | Equatulator</title>
  </head>
  <body>
  <?php include_once(ROOT_DIR . "scripts/php/analyticstracking.php") ?>
		<?php require_once(ROOT_DIR . 'scripts/php/nav.php');?>
  </body>
</html>