<?php
// php info
echo phpinfo();
echo "<br>****************************************************************************<br>";
//display error= 1

 error_reporting(E_ALL);
  ini_set('display_errors', 1);    

/*
//display_errors = 1
echo ini_get('display_errors');

if (!ini_get('display_errors')) {
    ini_set('display_errors', '1');
}
*/
echo ini_get('display_errors');
echo "<br>****************************************************************************<br>";
//constant
define("KAIZEN", "KAIZEN");
echo KAIZEN ;
//server name,address, port,filename and path 
echo "<br>****************************************************************************<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>****************************************************************************<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>****************************************************************************<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br>****************************************************************************<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>****************************************************************************<br>";
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>****************************************************************************<br>";
// echo $_SERVER['HTTP_REFERER'];
// switch case
$BRO_AGE = 10;
switch ($BRO_AGE) {
  case  $BRO_AGE <5:
    echo "Stay at home";
    break;
  case  $BRO_AGE == 5:
    echo "Go to Kindergarden";
    break;
  case $BRO_AGE > 5 && $BRO_AGE < 12:
    $grade = $BRO_AGE - 5;
    echo "Go to grade : $grade";
    break;
  default:
    echo "Your age not much any of that!";
  }
echo "<br>****************************************************************************<br>";

