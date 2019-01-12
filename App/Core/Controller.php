<?php

namespace App\Core;

class Controller {

    protected $data = [];
    

    public function __construct() {    
            
    }

    protected function getData() {
        return $this->data;
    }

    public function __call($name, $arguments) {
        $this->loadTemplate('error_404');
    }

    public function loadView($viewName, $viewData = array()) {
        extract($viewData);
        include 'App/Views/' . $viewName . '.php';
    }

    public function loadTemplate($viewName, $viewData = array()) {

        include 'App/Views/template.php';
    }

    public function loadViewInTemplate($viewName, $viewData) {
        extract($viewData);
        include 'App/Views/' . $viewName . '.php';
    }

    public function formatDate($value) {

        return date('d/m/Y', strtotime($value));
    
    }

    public function filter_input($value) {
        
        if(isset($value) && !empty($value)) {        
        
            $value = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);
        }

        return $value;
    
    }

    public function getPayment($i) {
        if(!empty($i)) {
           
            switch ($i)   
            {
            case 1:
               return 'CARTAO';
               break;

            case 2:
               return 'A VISTA';
               break;
            
            case 3:
               return 'A PRAZO';
               break;
            }      

        }  

        return false; 
    }

    public function getStatus($i) {
        if(!empty($i)) {
           
            switch ($i)   
            {
            case 1:
               return 'PAGO';
               break;

            case 2:
               return 'NAO PAGO';
               break;
            
            case 3:
               return 'PENDENTE';
               break;
            }      

        }  

        return false; 

    }

    public function redirect($url = null)
    {   
        header("Location: ".BASE."{$url}");
       
    }

}
