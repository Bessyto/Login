<?php
/**
 * Created by Bessy Torres-Miller.
 * User: Bessyto
 * Date: 2/11/2018
 * Time: 5:38 PM
 *
 * An Admin user that extends from User class. Modify one of the objects created for the User class
 */

include('users.php');

class Admin extends User
{
    //variables
    private $_accessLevel;

    //constructor
    /*
     * Constructor of the class. Inherit the userName and Password variables from its parent User
     * and add a new field
     */
    function __constructor($_userName, $_password, $_accessLevel)
    {
        //parent::_constructor;
        $this->_accessLevel = $_accessLevel;

        $this->setUserName($_userName);
        $this->setPassword($_password);
    }

    /**
     * Getter for Access Level
     * @return mixed
     */
    public function getAccessLevel()
    {
        return $this->_accessLevel;
    }

    /**
     * Setter for Access Level
     * @param mixed $accessLevel
     */
    public function setAccessLevel($_accessLevel)
    {
        $this->_accessLevel = $_accessLevel;

    }

    /**
     * This method receives an user object (when I call the method in test class) and gets his name
     * @param $user user object created in User class
     */
    public function editUser($user)
    {
        $_userName = $user -> getUsername();
        echo "Editing " . $_userName;

    }

}