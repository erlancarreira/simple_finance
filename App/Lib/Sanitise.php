<?php

namespace App\Lib;

class Sanitise
{
    public function get($name, $filter, $options=null)
    {
        return $this->sanitise(INPUT_GET, $name, $filter, $options);
    }
    
    public function post($name, $filter, $options=null)
    {
        return $this->sanitise(INPUT_POST, $name, $filter, $options);
    }
    
    public function cookie($name, $filter, $options=null)
    {
        return $this->sanitise(INPUT_COOKIE, $name, $filter, $options);
    }
    
    public function server($name, $filter, $options=null)
    {
        return $this->sanitise(INPUT_SERVER, $name, $filter, $options);
    }
    
    public function env($name, $filter, $options=null)
    {
        return $this->sanitise(INPUT_ENV, $name, $filter, $options);
    }
    
    private function sanitise($type, $name, $filter, $options=null)
    {
        return filter_input($type, $name, $filter, $options);
    }
}