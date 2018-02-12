<?php
/**
 * Created by PhpStorm.
 * User: PCC
 * Date: 2/11/2018
 * Time: 5:38 PM
 */

include('users.php');

class Admin extends User
{
    //variables
    private $_accessLevel;

    //constructor
    function __constructor($_userName, $_password, $_accessLevel)
    {
        //parent::_constructor;
        $this->_accessLevel = $_accessLevel;

        $this->setUserName($_userName);
        $this->setPassword($_password);
    }

    /**
     * @return mixed
     */
    public function getAccessLevel()
    {
        return $this->_accessLevel;
    }

    /**
     * @param mixed $accessLevel
     */
    public function setAccessLevel($_accessLevel)
    {
        $this->_accessLevel = $_accessLevel;
        echo $_accessLevel;

    }

    public function editUser($user)
    {
        $_userName = $user -> getUsername();
        echo "Editing " . $_userName;

    }

}