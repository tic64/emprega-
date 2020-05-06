<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CadastroController
 *
 * @author Marcos Vinicius
 */
class CadastroController extends Controller {
    public function index() {
        $cidades=new ManipulacaoJson();
        $cidades=$cidades::cidades();
        sort($cidades);
        $dados=[
            'cidades'=>$cidades
        ];
        $this->loadTemplate('cadastro', $dados);
    }
}
