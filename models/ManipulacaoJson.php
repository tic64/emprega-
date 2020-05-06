<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ManipulacaoJson
 *
 * @author Marcos Vinicius
 */
class ManipulacaoJson {

    public static function cidades() {
        $json = file_get_contents(BASE_URL . 'assets/json/cidades.json');
        $json = json_decode($json);
        $cidades = array();
        foreach ($json as $value) {

            array_push($cidades, $value->nome, $value->microrregiao->nome);
        }
        return $cidades = array_unique($cidades);
    }

}
