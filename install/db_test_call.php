<?php
/*
 *  © CryptoDice 
 *  
 *  
 *    



if (@!mysql_connect($_GET['db_host'],$_GET['db_user'],$_GET['db_pass']) || @!mysql_select_db($_GET['db_db']))
echo json_encode(array('error'=>'yes'));
else echo json_encode(array('error'=>'no'));*/

# Fill our vars and run on cli
# $ php -f db-connect-test.php

$dbname = $_GET['db_db'];
$dbuser = $_GET['db_user'];
$dbpass = $_GET['db_pass'];
$dbhost = $_GET['db_host'];

$link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");
echo json_encode(array('error'=>'no'));

?>