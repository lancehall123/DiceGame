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

$dbname = 'dice';
$dbuser = 'root';
$dbpass = 'B@ssFishing29';
$dbhost = 'localhost';

$link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");

$test_query = "SHOW TABLES FROM $dbname";
$result = mysqli_query($link, $test_query);

$tblCnt = 0;
while($tbl = mysqli_fetch_array($result)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
}

if (!$tblCnt) {
  echo "There are no tables<br />\n";
} else {
  echo "There are $tblCnt tables<br />\n";
} 

?>