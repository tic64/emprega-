<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HomeController
 *
 * @author Francisco Silva
 */
class HomeController extends Controller {
    public function index(){
        $this->loadTemplate('posts');
    }
    
   
}
