<?php

defined('ROOTPATH') OR exit('Access Denied!');

class Home {

    use Controller;
    
    public function index($a = '', $b = '', $c = '') {

        $this->view('home');
    }
}

