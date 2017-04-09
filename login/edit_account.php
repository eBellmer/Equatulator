<?php 

    // First we execute our common code to connection to the database and start the session 
    require("common.php"); 
     
    // At the top of the page we check to see whether the user is logged in or not 
    if(empty($_SESSION['user'])) 
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
        if($_POST['email'] != $_SESSION['user']['email']) 
        { 
            // Define our SQL query 
            $query = "SELECT 1 FROM users WHERE email = :email "; 
             
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
                die("Failed to run query: " . $ex->getMessage()); 
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
        if(!empty($_POST['password'])) 
        { 
            $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
            $password = openssl_digest($_POST['password'] . $salt, 'sha512'); 
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
        $query_params = array(':email' => $_POST['email'], ':user_id' => $_SESSION['user']['id'],); 
         
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
        $query = "UPDATE users SET email = :email"; 
         
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
            die("Failed to run query: " . $ex->getMessage()); 
        } 
         
        // Now that the user's E-Mail address has changed, the data stored in the $_SESSION 
        // array is stale; we need to update it so that it is accurate.
        $_SESSION['user']['email'] = $_POST['email']; 
         
        // This redirects the user back to the members-only page after they register 
        header("Location: ./../index.php"); 
        exit();  
    }
		define("ROOT_DIR", "./../");
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


					<div class = "panel pn-1 panel-default">
						<div class = "panel-heading text-center">
							<h4>Register</h4>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
										<div class="form-login">
											<h4>Welcome back.</h4>
											<input type="text" name="username" value="" id="username" class="form-control input-sm chat-input" placeholder="username"/>
											</br>
	                    <input type="text" name="email" value="" id="email" class="form-control input-sm chat-input" placeholder="email"/>
	                    </br>
											<input type="password" name="password" value="" id="password" class="form-control input-sm chat-input" placeholder="password"/>
											</br>
											<div class="wrapper">
													<button type="submit" class="btn btn-primary btn-md" value="Register" name="submit"> register <i class="fa fa-sign-in"></i></button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class = "panel-footer text-center">
							<p>Hosted on The 3agle Network</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</body>
</html>