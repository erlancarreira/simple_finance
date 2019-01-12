<?php

namespace App\Models;

use App\Core\Model;


class Debit extends Model
{

    public function create($data)
    {
             
        $sql = "INSERT INTO debit
        (client_id, name, payment_method, date, status, value)
        
        VALUES 
        (:clientId, :name, :paymentMethod, :date, :status, :value)";
        
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':clientId', $data['clientId']);
        $sql->bindValue(':name', strtolower($data['debitName']));
        $sql->bindValue(':paymentMethod', $data['pag_method']);
        $sql->bindValue(':date', $data['date']); 
        $sql->bindValue(':status', $data['status']);
        $sql->bindValue(':value', $data['value']);

        try {

            $sql->execute();
            return $data['clientId'];

        } catch (PDOException $e) {

            die($e->getMessage());
        }
         

    }

    public function getClient($clientId = null)
    {

        $sql = "SELECT id, name, email FROM client ";
        
        if (!empty($clientId)) { 
            $sql .= "WHERE id = :clientId";
        }
        
        $sql = $this->db->prepare($sql);
        !$sql->bindValue(':clientId', $clientId);

        try {

            $sql->execute();
            if($sql->rowCount() > 0 && empty($clientId)) {
                 
                return $sql->fetchAll(\PDO::FETCH_ASSOC); 
            
            } else {
                
                return $sql->fetch(\PDO::FETCH_ASSOC); 
            }    

        } catch (PDOException $e) {

            die($e->getMessage());
        }

       

    }

    public function getList($id = null) {

        $sql = "SELECT c.id, c.name, c.email, d.client_id, d.name description, d.payment_method, d.date, d.status, d.value  
                FROM debit AS d 
                JOIN client AS c 
                ON c.id = d.client_id ";
        
        (!empty($id)) ? $sql .= "WHERE client_id = :id" : '';

        $sql = $this->db->prepare($sql);
        !$sql->bindValue(':id', $id);

        try {

            $sql->execute();

            if($sql->rowCount() > 0 && empty($id)) {
            
                return $sql->fetchAll(\PDO::FETCH_ASSOC); 
            
            } else {
                
                return $sql->fetchAll(\PDO::FETCH_ASSOC); 
            }    

        } catch (PDOException $e) {

            die($e->getMessage());
        }



           


    }

    public function getTotal($id = null) {
        $sql = "SELECT SUM(value) as value FROM debit ";
        
        
        if (!empty($id)) { 
            $sql .= "WHERE client_id = :id";
        }
   
        $sql = $this->db->prepare($sql);
        !$sql->bindValue(':id', $id);

        try {

            $sql->execute();
            if($sql->rowCount() > 0 && empty($id)) {

                
                return $sql->fetchAll(\PDO::FETCH_ASSOC); 
            
            } else {
                
                return $sql->fetch(\PDO::FETCH_ASSOC); 
            }    

        } catch (PDOException $e) {

            die($e->getMessage());
        }

    } 

}
