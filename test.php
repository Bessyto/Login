<?php
/**
 * The User class checks for user and password
 *
 * @author Zach Kunitsa
 * @author Bessy Torres-Miller
 * @copyright 2018
 *
 */

//Error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

include ('User.php');

$User1 = new User("Kunitsa", "zachabc");
$User2 = new User("Bessy","123");


//testing User 1
echo "<br> <h3>Testing the User 1</h3>";
echo $User1->getUsername(); //." user name. <br>" ;
echo $User1->setPassword("zachabc"); //." password <br>";
echo $User1->login("Kunitsa" , "zachabc"). "<br>";

echo "<br> <h3>Testing the User 2</h3>";
echo $User2->getUsername(); //." user name. <br>" ;
echo $User2->setPassword("123"); //." password <br>";
echo $User2->login("Bessy" , "123"). "<br>";


