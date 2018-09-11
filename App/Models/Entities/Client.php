<?php

namespace App\Models\Entities;

use DateTime;

class Client
{
    private $id;
    private $name;
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

    public function getdateRegister()
    {
        return new DateTime($this->dateregister);
    }

    public function setdateRegister($dateregister)
    {
        $this->dateregister = $dateregister;
    }
}