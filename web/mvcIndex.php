<?php
session_start();

// Displaying errors in production mode is very bad
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require_once(__DIR__ . '/../vendor/autoload.php');


use dec\controllers\AppController;
use dec\components\AppFactory;
use dec\components\DbHelper;




ActiveRecord\Config::initialize(function($cfg)
{
	require_once __DIR__.'/../app/dec/config/db.php';
	$connString = DbHelper::connString($db);
    $cfg->set_model_directory('../app/dec/models');
    $cfg->set_connections(array(
        'development' => $connString));
});


$controller = isset($_GET['c']) ? $_GET['c'] : 'app';
$action = isset($_GET['a']) ? $_GET['a'] : 'index';

$controller = AppFactory::getController($controller, $action);

$controller->run();




<?php

/**
 * Implement the utility methods by writing code
 * where it says 'add code here'
 */

  /**
    * TEST 1:
    * Remove all spaces and dots (.) surronding the text
    * (' ... Test    .    ' => 'Test')
    */
   function makeNice($text) {

     return trim(str_replace(".", "", $text));

   }

  /**
    * TEST 2:
    * Explode a string into a list of substrings which in the original string is
    * separated by the given separator
    */
   function explodeText($text, $separator) {

     $parts = Array();
     $delimiter = (string)$separator;
     $string = (string)$text;

     $parts = explode($delimiter, $string);

     return $parts;
   }

   /**
    * TEST 3:
    * Make a string's first character uppercase
    */
   function uppercaseFirst($text) {

     $text = ucfirst($text);

     return $text;
   }

   /**
    * TEST 4:
    * Uppercase the first character of each word in a string
    */
   function uppercaseWords($text) {

     $text = ucwords($text);

     return $text;
   }

   /**
    * TEST 5:
    * Extract all numbers from a string
    * Hint: Regex
    */
   function extractIntegers($text) {
	$numbers = Array();
  $string = (string)$text;

	$amount = preg_match_all('!\d+!', $string, $numbers)

	return $numbers;
  }




$testTxt1 = "....         Morten        ..    .";
$testTxt2 = "hello world! where art thou?";
$testTxt3 = "Test 10- and 6 other of 2a";


echo "\n--------------- TEST 1 ----------------<br>";
echo "<br>BEFORE: " . $testTxt1;
echo "<br>AFTER: " . makeNice($testTxt1);

echo"<br><br>--------------- TEST 2 ----------------";
echo "<br>BEFORE: " . $testTxt2;
foreach(explodeText($testTxt2, " ") as $part) {
	echo "<br>" . $part;
}

echo "<br><br>--------------- TEST 3 ----------------";
echo "<br>BEFORE: " . $testTxt2;
echo "<br>AFTER: " . uppercaseFirst($testTxt2);

echo "<br><br>--------------- TEST 4 ----------------";
echo "<br>BEFORE: " . $testTxt2;
echo "<br>AFTER: " . uppercaseWords($testTxt2);

echo"<br><br>--------------- TEST 5 ----------------";
echo "<br>BEFORE: " . $testTxt3;
foreach(extractIntegers($testTxt3) as $part) {
	echo "<br>" . $part;
}


?>