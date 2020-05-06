<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PostsController
 *
 * @author Marcos Vinicius
 */
class PostsController extends Controller {

    public function abrir($id) {
        $dados=[
            'posts'=>'posts'
        ];
        $this->loadTemplate('openposts', $dados);
    }

}
