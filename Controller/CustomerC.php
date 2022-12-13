<?php
include '../config.php';
include '../Model/Customer.php';

class CustomerC
{
    public function listCustomers()
    {
        $sql = "SELECT * FROM customer";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteCustomer($id)
    {
        $sql = "DELETE FROM customer WHERE idCustomer = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addCustomer($customer)
    {
        $sql = "INSERT INTO customer  
        VALUES (NULL, :fn,:ln, :un,:pw ,:rl)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $customer->getFirstName(),
                'ln' => $customer->getLastName(),
                'un' => $customer->getUsername(),
                'pw' => $customer->getPassword(),
                'rl' => $customer->getRole()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateCustomer($customer, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE customer SET 
                    firstName = :firstName, 
                    lastName  = :lastName, 
                    Username  = :Username, 
                    Password  = :Password,
                    Role      = :Role
                WHERE idCustomer= :idCustomer'
            );
            $query->execute([
                'idCustomer' => $id,
                'firstName'  => $customer->getFirstName(),
                'lastName'   => $customer->getLastName(),
                'Username'   => $customer->getUsername(),
                'Password'   => $customer->getPassword(),
                'Role'       => $customer->getRole()
            ]);
            echo $query->rowCount() . "UPDATED successfully <br>";
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    function Update($id,$Role,$customer)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE customer SET 
                    firstName = :firstName, 
                    lastName  = :lastName, 
                    Username  = :Username, 
                    Password  = :Password,
                    Role      = :Role
                WHERE idCustomer= :idCustomer'
            );
            $query->execute([
                'idCustomer' => $id,
                'firstName'  => $customer->getFirstName(),
                'lastName'   => $customer->getLastName(),
                'Username'   => $customer->getUsername(),
                'Password'   => $customer->getPassword(),
                'Role'       => $Role
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    function showCustomer($id)
    {
        $sql = "SELECT * from customer where idCustomer = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $customer = $query->fetch();
            return $customer;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function findCustomer($username,$password)
    {   
        $sql = "SELECT * from customer where Username = :username and Password = :pass";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(["username" => $username,"pass" => $password]);

            $customer = $query->fetch();
            return $customer;
        } catch (Exception $e) {
            die('Error : ' .$e->getMessage());
        }

    }

    function isLoggedIn($username , $Password)
    {
        return (isset($_SESSION[$username]) &&  isset($_SESSION[$Password]) ) ? true : false;
    }

    public function SortByName () {
        $sql = "SELECT * FROM customer ORDER BY firstName";
        $db  = config ::getConnexion();
        try {
         $list = $db->query($sql);
         return $list;
        }
    
    catch (Exception $e){
        echo($e->getMessage());
    }
    }
     

}