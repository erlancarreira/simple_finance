<?php

namespace App\Controllers;

use App\Models\Users;
use App\Core\Controller;

class homeController extends Controller {

    private $User;
  
    public function __construct() { // Roda o construtor padrão que é o de controller
        // parent::construct();

        $this->User = new Users(); //Instância o usuário
        
        // Verifica o login   
        if(!$this->User->verifyLogin()) { // Se deu algum problema no login redireciona para a página de login
        	$this->redirect('login?error=2');
        }  
    }

    public function index() {
        
        $this->data['id'] = $this->User->getUid();
        $this->loadTemplate('painel/index', $this->getData());
    }

}
