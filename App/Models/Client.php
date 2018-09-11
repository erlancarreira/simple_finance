<?php

namespace App\Models;

use App\Core\Model;

// use App\Core\Entities\Client;

class Client extends Model
{
    public function checkClient($email) 
    {
        $sql = "SELECT id, email FROM client WHERE email = :email";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();
       
        if($sql->rowCount() > 0) {
            $client_id = $sql->fetch(\PDO::FETCH_ASSOC)['id'];
            return $client_id;
        }

        return false;

    }

    public function registerClient($name, $email)
    {        
            
        $sql = "INSERT INTO client (name, email) VALUES (:name, :email)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':name', $name);
        !$sql->bindValue(':email', $email);
        
        try {

            $sql->execute();
            $client_id = $this->db->lastInsertId();
            return $client_id;

        } catch (PDOException $e) {

            die($e->getMessage());
        }
        

       
        
    }

    public function getList() 
    {
        $sql = "SELECT * FROM client"; 
        $sql = $this->db->prepare($sql);

        try {

            $sql->execute();
            
            if($sql->rowCount() > 0) {
                $data = $sql->fetchAll(\PDO::FETCH_ASSOC);
                return $data;
            }

        } catch (PDOException $e) {

            die($e->getMessage());
        }
        
        
    }

    public function update($value) 
    {
        
        /* Begin a transaction, turning off autocommit */
       //We start our transaction.
        
        $this->db->beginTransaction();

        
        $sql = "UPDATE client SET name = :name, email = :email WHERE id = :id"; 
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $value['id']);
        $sql->bindValue(':name', strtolower($value['name']));
        $sql->bindValue(':email', strtolower($value['email']));

        try {

            $sql->execute();
            
            $this->db->commit();
            return true;

        } catch (PDOException $e) {
            
            $this->db->rollBack();   
            die($e->getMessage());
            
        }

        
    }

    public function delete($value) 
    {
        
       //We start our transaction.
        
        $this->db->beginTransaction();
         
        
        $sql = "DELETE FROM client WHERE id = :id"; 
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $value);

        try {

            $sql->execute();
            
            $this->db->commit();
            return true;
            
        } catch (PDOException $e) {
            
            $this->db->rollBack();   
            die($e->getMessage());
            
        }

        
    }


    


}
