<?php
/**
 * Created by PhpStorm.
 * User: PCC
 * Date: 2/8/2018
 * Time: 11:15 AM
 */

//Error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

include ('User.php');

$User1 = new User("username1", "zachabc");
$User2 = new User("Annie","123");


//testing the dog class
echo "<br> <h3>Testing the User 1</h3>";
echo $User1->getUsername()." user name. <br>" ;
echo $User1->setPassword("zachabc")." password <br>";
echo $User1->login("username1" , "zachabc"). "<br>";

echo "<br> <h3>Testing the User 2</h3>";
echo $User2->setPassword("zach")." password <br>";


