<?php

namespace App\Models\Entities;

use DateTime;

class Debit
{
    private $id;
    private $paygament_method;
    private $date;
    private $balance;
    private $status;
    private $dateRegister;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPaygament_method()
    {
        return $this->paygament_method;
    }

    public function setPaygament_method($paygament_method)
    {
        $this->paygament_method = $paygament_method;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getDateRegister()
    {
        return new DateTime($this->dateRegister);
    }

    public function setDateRegister($dateRegister)
    {
        $this->dateRegister = $dateRegister;
    }

}