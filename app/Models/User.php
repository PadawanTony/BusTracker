<?php namespace HubIT\Models;

/**
 * Created by PhpStorm.
 * User: Rizart
 * Date: 6/14/2015
 * Time: 6:48 PM
 */
class User
{
    private $fName, $lName, $avatar, $website, $role;

    function __construct($data)
    {
        $this->setFName($data['fName']);
        $this->setLName($data['lName']);
        $this->setAvatar($data['avatar']);
        $this->setWebsite($data['website']);
        $this->setRole($data['role']);
    }

    /**
     * @param null $lName
     */
    public function setLName($lName)
    {
        $this->lName = $lName;
    }

    /**
     * @param null $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * @param null $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return mixed
     */
    public function getFName()
    {
        return $this->fName;
    }

    /**
     * @param mixed $fName
     */
    public function setFName($fName)
    {
        $this->fName = $fName;
    }

    /**
     * @return null
     */
    public function getLName()
    {
        return $this->lName;
    }

    /**
     * @return null
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @return null
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }
}