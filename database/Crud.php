<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Crud
 *
 * @author rodri
 */

header('Content-Type: text/html; charset=utf-8');

class Crud {

    // PDO connection
    private $pdo = null;

    // Table name
    private $table = null;

    // Static instance for Crud class
    private static $crud = null;

    /**
    *
    * @param type $conn = PDO Connection
    * @param type $table = Table Name
    */
    private function __construct($conn, $table = NULL) {
        if (!empty($conn)) {
            $this->pdo = $conn;
        } else {
            echo "<p>There is no connection!</p>";
            exit();
        }

        if (!empty($table)) {
            $this->table = $table;
        }
    }

}
