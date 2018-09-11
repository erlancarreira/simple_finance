<?php

namespace App\Models;

use App\Core\Model;

// use App\Core\Entities\Client;

class Balance extends Model
{

    public function create($clientId, $total)
    {

        $sql = "INSERT INTO balance (client_id, total) VALUES (:clientId, :total)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':clientId', $clientId);
        $sql->bindValue(':total', $total);

        try {

            $sql->execute();

        } catch (PDOException $e) {

            die($e->getMessage());
        }

    }

}
