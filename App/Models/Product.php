<?php

namespace App\Models;

use App\Core\Model;

class Product extends Model {

    public function create($clientId, $productName, $price, $quantity)
    {
        $sql = "INSERT INTO products (client_id, name, price, quantity, created_at) VALUES (:clientId, :productName, :price, :quantity, now())";
        $sql = $this->db->prepare($sql);
        
        $sql->bindValue(':clientId', $clientId);
        $sql->bindValue(':productName', $productName);
        $sql->bindValue(':price', $price);
        $sql->bindValue(':quantity', $quantity);    

        try {

            $sql->execute();
            
        } catch (PDOException $e) {

            die($e->getMessage());
        }

    }
}
