<?php
	define("ROOT_DIR", "./../");

  // First we execute our common code to connection to the database and start the session
  require("common.php");

  // At the top of the page we check to see whether the user is logged in or not
  if(empty($_SESSION['user']) && $_SESSION['user']['auth_level'] != "admin")
  {
    // If they are not, we redirect them to the login page.
    header("Location: login.php");

    // Remember that this die statement is absolutely critical.  Without it,
    // people can view your members-only content without logging in.
    exit();
  }

  // Everything below this point in the file is secured by the login system

  // We can retrieve a list of members from the database using a SELECT query.
  // In this case we do not have a WHERE clause because we want to select all
  // of the rows from the database table.
  $query = "SELECT id, username, email, authLevel FROM equ_users";

  try
  {
    // These two statements run the query against your database table.
    $stmt = $db->prepare($query);
    $stmt->execute();
  }
  catch(PDOException $ex)
  {
    // Note: On a production website, you should not output $ex->getMessage().
    // It may provide an attacker with helpful information about your code.
    die("Failed to run query: " . $ex->getMessage());
  }

  // Finally, we can retrieve all of the found rows into an array using fetchAll
  $rows = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php require_once(ROOT_DIR . 'scripts/php/BSCSS.php');?>
		<link rel="stylesheet" href="<?= ROOT_DIR;?>scripts/css/style.css">

		<title>Members | Equatulator</title>
	</head>
	<body data-spy="scroll" data-offset="50">
		<?php include_once(ROOT_DIR . "scripts/php/analyticstracking.php") ?>
		<?php require_once(ROOT_DIR . 'scripts/php/nav.php');?>
		<div class="outer">
			<div class="middle">
				<div class="inner-1">
					<div class="container-fluid">
					</div>
				</div>
			</div>
		</div>



	  <h1>Members</h1>
	  <table>
		  <tr>
		    <th>ID</th>
		    <th>Username</th>
		    <th>E-Mail Address</th>
			  <th>Auth Level</th>
		  </tr>
		  <?php foreach($rows as $row): ?>
		    <tr>
	        <td><?= $row['id']; ?></td> <!-- htmlentities is not needed here because $row['id'] is always an integer -->
	        <td><?= htmlentities($row['username'], ENT_QUOTES, 'UTF-8'); ?></td>
	        <td><?= htmlentities($row['email'], ENT_QUOTES, 'UTF-8'); ?></td>
			    <td><?= htmlentities($row['auth_level'], ENT_QUOTES, 'UTF-8'); ?></td>
		    </tr>
		  <?php endforeach; ?>
	  </table>
	  <a href="<?= ROOT_DIR?>index.php">Go Back</a><br />


	</body>
</html>