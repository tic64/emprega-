<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author Francisco Silva
 */
class Model {
    protected $pdo;
    public function __construct() {
        global $pdo;
        try {

            $pdo = new PDO("mysql:host=" . $config['host'] . ";dbname=" . $config['dbname'], $config['dbuser'], $config['dbpass']);
            $this->pdo=$pdo;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            exit();
        }
    }

}
