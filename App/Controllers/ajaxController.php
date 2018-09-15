<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Users;
use App\Models\Debit;

class ajaxController extends Controller {

	private $Debit;

    public function __construct() {
      parent::__construct();
      $this->User = new Users(); 
      $this->Debit = new Debit(); 
      // $this->User->verifyLogin();   
    }

    public function index() {}

    public function login() {

        // var_dump($_POST);
        // exit;
        $data = array();
        $dados_form = filter_input_array(INPUT_POST,FILTER_SANITIZE_MAGIC_QUOTES);

        if(isset($dados_form['email']) && !empty($dados_form['email'])) {

            $dados_form['email'] = strtolower($dados_form['email']);


            // var_dump($dados_form); exit;
            // $this->User->login($email, $password); 
            if($this->User->login($dados_form['email'], $dados_form['password'])) {
               $data['return'] = ["alert-success","Login efetuado com sucesso!"];
               $data['redirect'] = ["",5000];    
            } else {
               $data['return'] = ["alert-warning","Login issue - Invalid email or password"];
            }          

        } else {
            $data['return'] = ["alert-warning", "Fill in all the fields"];
        }
        echo json_encode($data); 

        // print_r($_POST); exit;
        // if(isset($_POST['email']) && !empty($_POST['email'])) {

        // 	$email = $_POST['email'];
        // 	$password = $_POST['password'];

        //     if($this->User->login($email, $password)) {
            	
        //     	echo "Entrou"; //$this->data['msg'] = 
            
        //     } else {
            
        //     	echo "Algo deu errado!"; //$this->data['msg'] = 
            
        //     }


        // }

    }

    public function list() {

    $data = array();  

     // var_dump($_POST); exit;  

    $dados_form = filter_input_array(INPUT_POST,FILTER_SANITIZE_MAGIC_QUOTES);

        if($data = $this->Debit->getClient($dados_form['clientId'])) {
            // $data['return'] = ["alert-success","Login efetuado com sucesso!"];
            echo json_encode($data); 
        }

    }

}
