<?php
/**
 * The User class checks for user and password.
 * Creates object from the User class and an object from the Admin class. This Admin user, will receive
 * in the editUser method, one of the user created and modify it.
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
include ('Admin.php');

$User1 = new User("Kunitsa", "zachabc");
$User2 = new User("Bessy","123");

//testing User 1
echo "<br> <h3>Testing User 1</h3>";
echo $User1->getUsername();
echo $User1->setPassword("zachabc");
echo $User1->login("Kunitsa" , "zachabc");

//testing User 2
echo "<br> <h3>Testing User 2</h3>";
echo $User2->getUsername();
echo $User2->setPassword("123");
echo $User2->login("Bessy" , "123");

//testing admin user
echo "<br> <h3>Testing Admin Class</h3>";
$Admin = new Admin("Bessyto", "Lince123", "admin");
echo $Admin -> editUser($User1);  //pass an user to the Admin class
echo "<p> Getting Access Level : " . $Admin -> getAccessLevel() . "</p>";
echo "<p> Setting Access Level : " . $Admin -> setAccessLevel("admin") . "</p>";


