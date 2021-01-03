<?php
/**
 * Created by PhpStorm.
 * User: ebell
 * Date: 05/05/2017
 * Time: 12:43 AM
 */

define("DB_HOST", '');
define("DB_USER", '');
define("DB_PASSWORD", '');
define("DB_DATABASE", '');

$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
/* if (mysqli_connect_errno($con))
{
	exit();
} */
