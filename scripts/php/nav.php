<link rel="stylesheet" href=<?php echo'"' . ROOT_DIR .'scripts/css/nav.css" type="text/css"'?>>

<div id="wrapper">
		<!-- Sidebar -->
		<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper">
			<ul class="nav sidebar-nav">
				<li class="sidebar-brand"><a href="<?php echo ROOT_DIR;?>">Equatulator.me</a></li>
				<li><a href="<?php echo ROOT_DIR;?>">Home</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li class="dropdown-header">Give us your soul.</li>
						<li><a href="<?php echo ROOT_DIR;?>SecureLogin/login.php">Login</a></li>
						<li><a href="<?php echo ROOT_DIR;?>SecureLogin/register.php">Register</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Equations<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li class="dropdown-header">Special Relativity</li>
						<li><a href="<?php echo ROOT_DIR;?>calc/lContract.php">Lorentz Contraction</a></li>
						<li><a href="<?php echo ROOT_DIR;?>calc/RelVelTD.php">Relative Velocity Time Dilation</a></li>
						<li><a href="<?php echo ROOT_DIR;?>calc/schwRad.php">Schwarzschild Radius</a></li>
						<li><a href="<?php echo ROOT_DIR;?>calc/massEnergy.php">Mass-Energy</a></li>
						<li class="dropdown-header">Electrical Engineering</li>
						<li><a href="#">Ohm's Law</a></li>
						<li><a href="#">Resistance: Series & Parallel</a></li>
						<li><a href="#">Capacitance: Series & Parallel</a></li>
						<li><a href="#">Capacitance of a Capacitor</a></li>
						<li class="dropdown-header">Computing</li>
						<li><a href="#">A converter of some sort</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">About<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li class="dropdown-header">Would you like to know more?</li>
						<li><a href="<?php echo ROOT_DIR;?>about/">About</a></li>
						<li><a href="<?php echo ROOT_DIR;?>about/aboutAccounts.php">About Accounts</a></li>
						<li><a href="<?php echo ROOT_DIR;?>about/aboutSecurity.php">About Security</a></li>
						<li><a href="<?php echo ROOT_DIR;?>about/faq.php">FAQ</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<!-- /#sidebar-wrapper -->
		<!-- Page Content -->
		<div id="page-content-wrapper">
			<button type="button" class="hamburger is-closed" data-toggle="offcanvas">
				<span class="hamb-top"></span>
				<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
			</button>
		</div>
		<!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->

<script>
	$(document).ready(function () {
  var trigger = $('.hamburger'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
	});
</script>