<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Core
 *
 * @author Francisco Silva
 */
class Core {

    public function run() {
        $params=[];
        $url='/';
        if(!empty($_GET['url'])){
            $url.=$_GET['url'];
        }
       
        
        if(!empty($url) && $url !='/'){
            $url= explode("/",$url,);
            array_shift($url);
            $currentController= ucfirst($url[0]).'Controller';
             array_shift($url);
             if(!empty($url[0])){
                 $currentAction=$url[0]; 
                 array_shift($url);
             }else{
                 $currentAction='index';
             }
             if(count($url)>0){
                 $params=$url;
             }
            
            
        }else{
            $currentController="HomeController";
            $currentAction="index";
        }
        
        $controler=new $currentController();
        call_user_func_array(array($controler, $currentAction),$params);
    }

}
