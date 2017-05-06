<?php
/**
 * Created by PhpStorm.
 * User: ebell
 * Date: 05/05/2017
 * Time: 12:43 AM
 */

define("DB_HOST", '192.168.1.50');
define("DB_USER", 'equSQLUser');
define("DB_PASSWORD", 'bAd93B#1y9r%9xZvj5gT%*mh7gK9y!');
define("DB_DATABASE", 'equatulator');

$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
/* if (mysqli_connect_errno($con))
{
	exit();
} */