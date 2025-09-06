<?php

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');
use \Model\User;

class Home {

    use MainController;

    public function index($a = '', $b = '', $c = '') {
        $user = new User;
        $this->view('home');
    }
}
 
