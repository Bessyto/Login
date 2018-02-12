<?php
/**
 * The User class checks for user and password
 *
 * @author Zach Kunitsa
 * @author Bessy Torres-Miller
 * @copyright 2018
 *
 */


class User
{
    //variables
    private $_username;
    private $_password;
    private $_loggedIn;

    //Default constructor
    function __construct($_username = "", $_password = "", $_loggedIn = false)
    {
        $this->_username = $_username;
        $this->_password = $_password;
        $this->_loggedIn = $_loggedIn;
    }

    //methods---------------------------------------------------------------------------------------
    /*
    * The getter for user name
    */
    function getUsername()
    {
        return $this->_username;
    }

    /**
     * Sets the username
     * @param string $_username pass the name of the user
     */
    function setUsername($_username)
    {
        $this->_username = $_username;
    }

    /*
     * Setter for the password
     * and checks if the password has 6 or more characters
     */
    function setPassword($_password)
    {
        if(strlen($_password) >= 6)
        {
            $this->_password = $_password;
        }
    }

    /*
     * Prints if the password match with the array
     *
     * @param username
     * @param password
     */
    function login($_username , $_password)
    {
        $isValid=true;
        $arrays = array();
        include ('users.php');

        if(key_exists($_username , $arrays))
            {
                if($arrays[$_username]==$_password) {
                    echo "<p>" . $_username . " is logged in </p>";
                    $_loggedIn = true;
                }
            }
            else
            {
                echo "<p> Login error </p>";
                $isValid = false;
            }
    }

    /*
     * Reinitialize the variables when user logout
     */
    function logout()
    {
        $_loggedIn = false;
        $_username = "";
        $_password = "";
    }

}