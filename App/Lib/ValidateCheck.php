<?php
namespace App\Lib;

use App\Lib\Validate;

class ValidateCheck extends Validate {

	public $clientId;
	public $clientIdMin;
	public $clientIdMax;
	public $debitName;
	public $debitNameMin;
	public $debitNameMax;
	public $pag_method;
	public $pag_methodMin;
	public $pag_methodMax;
	public $date;
	public $dateMin;
	public $dateMax;
	public $status;
	public $statusMin;
	public $statusMax;
	public $value;
	public $valueMin;
	public $valueMax;
	public function __construct(){

	}

}