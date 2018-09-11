<?php

namespace App\Controllers;

use App\Core\Controller;

class signupController extends Controller {

    public function index() {

        $this->loadView('signup/index', $this->getData());
    }

}
