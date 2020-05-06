<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuarios
 *
 * @author Marcos Vinicius
 */
class Usuarios {
   private $crud;
    public function __construct($crud) {
        $this->crud=$crud;
    }
    public function autenticacaoLogin($dados){
        extract($dados);
        $senha= md5($senha);
        $sql="select * from usuarios where email= ? and senha=?";
        $arrayParams=[$email, $senha];
        $retorno=$this->crud->getSQLGeneric($sql, $arrayParams,false);
        $_SESSION['CPF']=$retorno->cpf;
        header("Location: ".BASE_URL.'Painel');
        
    }
    public function destroiSessao(){
        
    }
    public function esqueciSenha(){
        
    }
}
