<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author Francisco Silva
 */
class Controller {

    public function loadView($viewName, $viewData = []) {
        extract($viewData);
        require './views/' . $viewName . '.php';
   
    }

    public function loadTemplate($viewName, $viewData = []) {
        extract($viewData);
        require './views/template.php';
    }

    public function loadViewInTemplate($viewName, $viewData = []) {
         extract($viewData);
        require './views/' . $viewName . '.php';
    }

}
