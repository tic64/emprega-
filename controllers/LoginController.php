<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginController
 *
 * @author Marcos Vinicius
 */
class LoginController extends Controller{
    //put your code here
    public function index() {
        $this->loadTemplate('login');
    }
}
