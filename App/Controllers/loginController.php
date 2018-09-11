<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Users;

class loginController extends Controller {

    public function __construct() {
        // parent::construct();
    
    }

    public function index() {

    	if(!empty($_GET['error'])) {
    		if($_GET['error'] == '1') {
    			$this->data['msg'] = 'Usuário e/ou senha inválido!';
    		}

    		if($_GET['error'] == '2') {
    			$this->data['msg'] = 'Você precisa está logado para acessar esta página!';
    		}
    	}

        $this->loadView('login/index', $this->getData());
    }

    public function signin() 
    {
        if(!empty($_POST['email'])) {
        	$username = strtolower($_POST['email']);
        	$pass = $_POST['password'];

        	$users = new Users();
        	if($users->validateUser($username, $pass)) {
        		$this->data['msg'] = "Login feito com sucesso";
        		$this->redirect();
        		// $this->loadTemplate('login/index', $this->getData());

        	} else {
        	    $this->redirect('login?error=1');
        	    // header("Location: ".BASE."login?error=1");
             //    exit; 	
        	}
        
        }  else {

            $this->redirect('login');
            // header("Location: ".BASE."login");
            // exit; 
        } 
    }

    public function signup() 
    {
        if(!empty($_POST['username'])) {
        	$username = strtolower($_POST['username']);
        	$email = strtolower($_POST['email']);
        	$pass = $_POST['password'];

        	$users = new Users();

        	if(empty($email)) {

        		$this->data["msg"] = "Digite o seu email!";
        		$this->loadView('signup/index', $this->getData());
        		die;
        	}

        	if($users->validateUserName($username)) 
        	{ 
                if(!$users->userExists($username)) {                     
                    $users->registerUser($username, $email, $pass);

                    header("Location: ".BASE."login");
                } else {

                	$this->data["msg"] = "Usuário já cadastrado!";
                }

        	} else {

        		$this->data['msg'] = 'Usuário não válido (Digite apenas letras e números).';
        	
        	}
        }

        $this->loadView('signup/index', $this->getData());
    }

}
