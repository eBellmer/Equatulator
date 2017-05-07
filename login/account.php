<?php
	define("ROOT_DIR", "./../");

  // First we execute our common code to connection to the database and start the session
  require("common.php");

  // At the top of the page we check to see whether the user is logged in or not
  if(empty($_SESSION['equatulatorUser']))
  {
    // If they are not, we redirect them to the login page.
    header("Location: login.php");

    // Remember that this exit statement is absolutely critical.  Without it,
    // people can view your members-only content without logging in.
    exit();
  }

  // This if statement checks to determine whether the edit form has been submitted
  // If it has, then the account updating code is run, otherwise the form is displayed
  if(!empty($_POST))
  {
    // Make sure the user entered a valid E-Mail address
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
      die("Invalid E-Mail Address");
    }

    // If the user is changing their E-Mail address, we need to make sure that
    // the new value does not conflict with a value that is already in the system.
    // If the user is not changing their E-Mail address this check is not needed.
    if($_POST['email'] != $_SESSION['equatulatorUser']['email'])
    {
        // Define our SQL query
        $query = "SELECT 1 FROM equ_users WHERE email = :email ";

        // Define our query parameter values
        $query_params = array(':email' => $_POST['email']);

        try
        {
          // Execute the query
          $stmt = $db->prepare($query);
          $result = $stmt->execute($query_params);
        }
        catch(PDOException $ex)
        {
          // Note: On a production website, you should not output $ex->getMessage().
          // It may provide an attacker with helpful information about your code.
          die("Failed to run query");
        }

        // Retrieve results (if any)
        $row = $stmt->fetch();
        if($row)
        {
          die("This E-Mail address is already in use");
        }
    }

    // If the user entered a new password, we need to hash it and generate a fresh salt
    // for good measure.
    if(!empty($_POST['pwd']))
    {
        $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647));
        $password = openssl_digest($_POST['pwd'] . $salt, 'sha512');
        for($round = 0; $round < 65536; $round++)
        {
          $password = openssl_digest($password . $salt, 'sha512');
        }
    }
    else
    {
      // If the user did not enter a new password we will not update their old one.
      $password = null;
      $salt = null;
    }

    // Initial query parameter values
    $query_params = array(':email' => $_POST['email'], ':user_id' => $_SESSION['equatulatorUser']['id'],);

    // If the user is changing their password, then we need parameter values
    // for the new password hash and salt too.
    if($password !== null)
    {
      $query_params[':password'] = $password;
      $query_params[':salt'] = $salt;
    }

    // Note how this is only first half of the necessary update query.  We will dynamically
    // construct the rest of it depending on whether or not the user is changing
    // their password.
    $query = "UPDATE equ_users SET email = :email";

    // If the user is changing their password, then we extend the SQL query
    // to include the password and salt columns and parameter tokens too.
    if($password !== null)
    {
      $query .= ", password = :password, salt = :salt";
    }

    // Finally we finish the update query by specifying that we only wish
    // to update the one record with for the current user.
    $query .= "WHERE id = :user_id";

    try
    {
      // Execute the query
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex)
    {
      // Note: On a production website, you should not output $ex->getMessage().
      // It may provide an attacker with helpful information about your code.
      die("Failed to run query: ");
    }

    // Now that the user's E-Mail address has changed, the data stored in the $_SESSION
    // array is stale; we need to update it so that it is accurate.
    $_SESSION['equatulatorUser']['email'] = $_POST['email'];

    // This redirects the user back to the members-only page after they register
    header("Location: ./../index.php");
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php require_once(ROOT_DIR . 'scripts/php/BSCSS.php');?>
	<link rel="stylesheet" href="<?= ROOT_DIR;?>scripts/css/style.css">

	<title>Account | Equatulator</title>
</head>
<body data-spy="scroll" data-offset="50">
	<?php include_once(ROOT_DIR . "scripts/php/analyticstracking.php") ?>
	<?php require_once(ROOT_DIR . 'scripts/php/nav.php');?>
	<div class="outer">
		<div class="middle">
			<div class="inner-1">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<?php
							require (ROOT_DIR . "scripts/php/mySQLiCon.php");
							$table = "history";
							$sql = "SELECT * FROM " . $table . " WHERE userID ='" . $_SESSION['equatulatorUser']['id'] . "'";
							echo '<h3>Saved Results</h3>';
							$result1 = mysqli_query($con, $sql);
							if($result1)
							{
							echo '
							<div ID = history_table class="table-responsive scroll-table-container">
								<table ID="tables" class="table scroll-table" cellpadding="10" cellspacing="10">';
									$column = mysqli_query($con, "SHOW COLUMNS FROM $table");
									echo '<tr>';
										while($row3 = mysqli_fetch_array($column) )
										{
										echo '<th>'.$row3[0].'</th>';
										}
										echo '</tr>';
									while($row2 = mysqli_fetch_row($result1) )
									{
									echo '<tr>';
										foreach($row2 as $key=>$value)
										{
										echo '<td>',htmlentities($value, ENT_QUOTES, 'UTF-8'),'</td>';
										}
										echo '</tr>';
									}
									echo '</table><br /></div>';
							}
							mysqli_close($con);
							?>
						</div>
					</div>
				</div>


				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">Account Details</div>
					</div>
					<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
						<div class="form-account">
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-4">
									<input type="text" name="username" value="" max="30" id="username" class="form-control input-sm chat-input" placeholder="Username"/>
								</div>
								<div class="col-md-4">
									<input type="email" name="email" value="" id="email" class="form-control input-sm chat-input" placeholder="Email Address"/>
								</div>
								<div class="col-md-2"></div>
							</div>
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-4">
									<input type="password" name="pwd" value="" min="6" max="50" id="pwd" class="form-control input-sm chat-input" placeholder="Password"/>
								</div>
								<div class="col-md-4">
									<input type="password" name="pwdConfirm" value="" min="6" max="50" id="pwdConfirm" class="form-control input-sm chat-input" placeholder="Confirm Password"/>
								</div>
								<div class="col-md-2"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<button type="submit" class="btn btn-default" value="Register" name="submit">Save<i class="fa fa-sign-in"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>