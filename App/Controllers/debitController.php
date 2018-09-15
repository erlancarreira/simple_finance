<?php

namespace App\Controllers;
use App\Core\Controller;

use App\Lib\Validate;

use App\Models\Debit;
use App\Models\Client;

class debitController extends Controller {

    
    private $Debit;
    private $Client;
    private $Validate;
      
    
  
    public function __construct() { // Roda o construtor padrão que é o de controller
        // parent::construct();

        $this->Debit = new Debit(); //Instância todos os debitos
        $this->Client = new Client(); //Instância todos os clientes
        $this->Validate = new Validate(); //Instância todos os clientes
        
    }    

    public function index() {

        $id = null;

        $this->data['listClient'] = (!empty($id) ? $this->Debit->getClient($id) : $this->Debit->getClient());

        $this->loadTemplate('client/debit/index', $this->getData());
    }

    public function create()
    {   
       
        if( $_POST['debitName'] && $_POST['pag_method'] && $_POST['date'] && $_POST['status'] && $_POST['value'] )  {
            
            if($this->data['clientId'] = $this->Debit->create($_POST)) {
                
                $this->data['client'] = $this->Debit->getClient($this->data['clientId']);
                
                $this->data['total'] = $this->Debit->getTotal($this->data['clientId']);
                
                $this->data['msg']['success'] = 'Debito cadastrado com Sucesso!'; 


            
            } 

        } 

        if(empty($this->data['client'])) {
            
            $this->data['client'] = $this->Debit->getClient($_POST['clientId']);
            $this->data['msg']['danger'] = 'Preencha todos os campos!';
            
            
             
        }
        
        $this->loadTemplate('client/debit/index', $this->getData());
        
    }

    public function list() 
    {
        
        $value = $this->filter_input($_POST);
       
        !$this->data['debitList'] = $this->Debit->getList(!empty($value['clientId']) ? $value : '');
          
        $this->loadTemplate('client/debit/list/index', $this->getData());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($request)
    {
        var_dump($request); die;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }

}
