<?php

namespace App\Models\Entities;

use DateTime;

class Product
{
    private $id;
    private $name;
    private $price;
    private $quantity;
    private $dateRegister;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getdateRegister()
    {
        return new DateTime($this->dateregister);
    }

    public function setdateRegister($dateregister)
    {
        $this->dateregister = $dateregister;
    }

}