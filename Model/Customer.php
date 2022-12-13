<?php
class Customer
{
    private $idCustomer = null;
    private $lastName = null;
    private $firstName = null;
    private $Username = null;
    private $Password = null;
    private $Role= null;

    public function __construct($id = null, $n, $p, $a, $d,$r)
    {
        $this->idCustomer = $id;
        $this->lastName = $n;
        $this->firstName = $p;
        $this->Username= $a;
        $this->Password = $d;
        $this->Role = $r;
    }

    /**
     * Get the value of idCustomer
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setUsername($Username)
    {
        $this->Username = $Username;

        return $this;
    }

    /**
     * Get the value of dob
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;

        return $this;
    }

    public function getRole()
    {
        return $this->Role;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setRole($Role)
    {
        $this->Role = $Role;

        return $this;
    }
}