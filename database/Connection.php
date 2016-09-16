<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connection
 *
 * @author rodri
 */
class Connection extends PDO {
    
    private $dbhost;
    private $dbname;
    private $dbuser;
    private $dbpass;
    
    public function __construct($dbhost, $dbname, $dbuser, $dbpass) {
        try {
            parent::__construct('mysql' . ':host=' . $dbhost . ';dbname=' . $dbname, $dbuser, $dbpass);
            $this->dbhost = $dbhost;
            $this->dbname = $dbname;
            $this->dbuser = $dbuser;
            $this->dbpass = $dbpass; 
        } catch (Exception $ex) {

        } 
    }
    
    
    
}
