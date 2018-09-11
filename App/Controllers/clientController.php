<?php

namespace App\Controllers;
use App\Core\Controller;

use App\Models\Client;
use App\Models\Debit;

class clientController extends Controller {

    
    private $Client;
    private $Debit;
    
    public function __construct() { // Roda o construtor padrão que é o de controller
        // parent::construct();

        $this->Client = new Client(); //Instância todos os clientes
        $this->Debit = new Debit(); //Instância todos os clientes
        
    }   
    
    public function index() {
        
        $this->data['list'] = $this->Client->getList();
        $this->loadTemplate('client/index', $this->getData());
    
    }

    // public function show() {
        
    //     $this->data['list'] = $this->Client->getList();
    //     $this->loadTemplate('client/show/index', $this->getData());
    
    // }

    public function add() {
        
        if(isset($_POST['clientName']) && !empty($_POST['clientName'])  && isset($_POST['clientEmail']) && !empty($_POST['clientEmail'])) {
            // POST da tabela Cliente
            $clientName = strtolower($_POST['clientName']);
            $clientEmail = strtolower($_POST['clientEmail']);
            
            if(!$this->data['clientId'] = $this->Client->checkClient($clientEmail)) { 
                
                
                $this->Client->registerClient($clientName, $clientEmail);

                $this->data['msg']['success'] = 'Cliente cadastrado com Sucesso!'; 
                $this->loadTemplate('client/add/index', $this->getData());
                die();
                
                
            } else {
                
                //Se o cliente ja existe eu redireciono ele para pagina de cadastrar debito
                $this->data['client'] = $this->Debit->getClient($this->data['clientId']);
                $this->loadTemplate('client/debit/index', $this->getData());
                die();

            }

             
        } else {

            if($_POST) { 
            
                $this->data['msg']['danger'] = 'Preencha todos os campos!';
        
            }
        }




        $this->loadTemplate('client/add/index', $this->getData());
    }

    // public function create()
    // {
    //     if(!empty($_POST['clientName'])) {         
    //         // POST da tabela Cliente
    //         $clientName = strtolower($_POST['clientName']);
    //         $clientEmail = strtolower($_POST['clientEmail']);
            
    //         if(!$this->data['clientId'] = $this->Client->checkClient($clientEmail)) { 
                
                
    //             $this->Client->registerClient($clientName, $clientEmail);

    //             $this->data['msg']['success'] = 'Cliente cadastrado com Sucesso!'; 
    //             $this->loadTemplate('client/create', $this->getData());
    //             die();
                
                
    //         } else {
                
    //             //Se o cliente ja existe eu redireciono ele para pagina de cadastrar debito
    //             $this->data['client'] = $this->Debit->getClient($this->data['clientId']);
    //             $this->loadTemplate('client/debit/index', $this->getData());
    //             die();

    //         }


               
    //     } else {

    //         $this->data['msg']['danger'] = 'Preencha todos os campos!'; 
            
    //     }
            
         

    //     $this->loadTemplate('client/index', $this->getData());
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
        
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {   
        
        if(isset($_POST) && !empty($_POST)) {

            if($this->Client->update($_POST)) {
                
                $this->redirect('client');
            } 
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function delete()
    {   

        if(isset($_POST['id']) && !empty($_POST['id'])) {

            if($this->Client->delete($_POST['id'])) {
                
                $this->redirect('client/index');
            } 
        }
    }

    


    

    

}
