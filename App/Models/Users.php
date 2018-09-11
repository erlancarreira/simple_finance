<?php

namespace App\Models;

use App\Core\Model;

class Users extends Model {

    private $HashLogin;
    private $Table = "usuarios";
    private $Result = null;
    private $Uid;
    private $Info;
    private $data;

    public function getInfo() 
    {
        return $this->Info;
    }

    public function getHashLogin() 
    {
        return $this->HashLogin;
    }

    public function getResult() 
    {
        return $this->Result;
    }

    public function getUid() 
    {
        return $this->Uid;
    }

    public function getData() 
    {
        return $this->data;
    }


    public function getList() {
        $sql = $this->db->prepare("SELECT * FROM " . $this->Table);
        try {
            $sql->execute();
            if ($sql->rowCount() > 0) {
                $this->Result = $sql->fetchAll(\PDO::FETCH_ASSOC);
                return true;
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    // try {
        
    // } catch (PDOException $e) {

    //     echo "ERRO: ".$e->getMessage();
    //     exit;
        
    // }

    public function validateUserName($value) 
    {
        if(preg_match('/^[a-z0-9]+$/', $value)) {
            return true;
        } else {
            return false;
        }
    }

    public function userExists($value) 
    {
        $sql = "SELECT * FROM users WHERE username = :value";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":value", $value, \PDO::PARAM_STR);
        $sql->execute();

        if($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function registerUser($username, $email, $pass) 
    {
        $newPass = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, email, password, created_at) VALUES (:username, :email, :pass, NOW())";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":username", $username, \PDO::PARAM_STR);
        $sql->bindValue(":email", $email, \PDO::PARAM_STR);
        $sql->bindValue(":pass", $newPass, \PDO::PARAM_BOOL);
        $sql->execute();
    }

    public function verifyLogin() 
    {
       
        if(!empty($_SESSION['hashLogin'])) { // Verifica se existe uma sessão e está preenchida
            
            $this->HashLogin = $_SESSION['hashLogin']; // Se houver a sessão armazena aqui
            //Armazena para verificar se é uma sessão válida

            //Verifica no banco de dados se existe um usuário relacionado a esse hash 
            $sql = "SELECT * FROM users WHERE hashlogin = :hash";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":hash", $this->HashLogin, \PDO::PARAM_BOOL);
            $sql->execute();
            
            // print_r($sql); exit;
            if($sql->rowCount() > 0) { // É maior que ZERO? Se for entra no IF
                
                // Se existir vamos armazenar os dados deste usuário em Uid e retornar TRUE 
                $this->data = $sql->fetchObject();

                $this->Uid = $this->data->id;

                return true;

            } else {
                // O usuário pode ter até uma sessão mas é uma sessão que não existe nem um usuário com ela, então por isso retornamos false.
                return false;
            }

        } else { //Se não existir a sessão retorna falso
            
            return false;
        
        }
    }

    public function validateUser($username, $pass) 
    {
        // print_r($username, $pass); exit;
        $sql = "SELECT * FROM users WHERE username = :username OR email = :username";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":username", $username, \PDO::PARAM_STR);
        $sql->execute();

        if($sql->rowCount() > 0) {
            
            $this->Info = $sql->fetchObject(); 

            if(password_verify($pass, $this->Info->password)) {
                 
                $this->HashLogin = md5(rand(0,99999).time().$this->Info->id.$this->Info->username);

                $this->setHashLogin($this->Info->id, $this->HashLogin);
                $_SESSION['hashLogin'] = $this->HashLogin;

                return true;

            } else {

                return false;
            
            }

        } else {
            return false;
        }
    }

    private function setHashLogin($uid, $hash) 
    {
        $sql = "UPDATE users SET hashlogin = :hash WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":hash", $hash, \PDO::PARAM_BOOL);
        $sql->bindValue(":id", $uid, \PDO::PARAM_INT);
        $sql->execute();
    }

    public function login($email, $password) 
    { 

        $sql = "SELECT * FROM users WHERE email = :email AND password = :password";

                $sql = $this->db->prepare($sql);

                $sql->bindValue(":email", $email);

                $sql->bindValue(":password", $password);
                
                try {

                    $sql->execute();

                    if($sql->rowCount() > 0) {

                        // echo "Login Feito com Sucesso";
                        return true;

                    } else {

                        // echo "Problema no login";
                        return false;
                    
                    }
                } catch (PDOException $e) {
            die($e->getMessage());
        }    

    }        

}
