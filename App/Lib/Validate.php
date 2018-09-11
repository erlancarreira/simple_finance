<?php

namespace App\Lib;

class Validate {

private $clientId;
private $debitName;
private $pag_method;
private $date;
private $status;
private $value;

public function __construct($clientId = 0,$debitName= "" ,$pag_method = 0,$date = "0000-00-00 00:00:00",$status = 0,$value= 0.0){
$this->clientId = $clientId;
$this->debitName = $debitName;
$this->pag_method = $pag_method;
$this->date = $date;
$this->status = $status;
$this->value = $value;

}

public static function construct($array){
$obj = new validate();
$obj->setClientId( $array['clientId']);
$obj->setDebitName( $array['debitName']);
$obj->setPag_method( $array['pag_method']);
$obj->setDate( $array['date']);
$obj->setStatus( $array['status']);
$obj->setValue( $array['value']);
return $obj;

}

public function getClientId(){
return $this->clientId;
}

public function setClientId($clientId){
 $this->clientId=$clientId;
}

public function getDebitName(){
return $this->debitName;
}

public function setDebitName($debitName){
 $this->debitName=$debitName;
}

public function getPag_method(){
return $this->pag_method;
}

public function setPag_method($pag_method){
 $this->pag_method=$pag_method;
}

public function getDate(){
return $this->date;
}

public function setDate($date){
 $this->date=$date;
}

public function getStatus(){
return $this->status;
}

public function setStatus($status){
 $this->status=$status;
}

public function getValue(){
return $this->value;
}

public function setValue($value){
 $this->value=$value;
}
public function equals($object){
if($object instanceof validate){

if($this->clientId!=$object->clientId){
return false;

}

if($this->debitName!=$object->debitName){
return false;

}

if($this->pag_method!=$object->pag_method){
return false;

}

if($this->date!=$object->date){
return false;

}

if($this->status!=$object->status){
return false;

}

if($this->value!=$object->value){
return false;

}

return true;

}
else{
return false;
}

}
public function toString(){

 return "  [clientId:" .$this->clientId. "]  [debitName:" .$this->debitName. "]  [pag_method:" .$this->pag_method. "]  [date:" .$this->date. "]  [status:" .$this->status. "]  [value:" .$this->value. "]  " ;
}

}