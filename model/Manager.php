<?php
class Manager {    
    protected $_connexion;
    public $_article_id;

    const DBNAME = "school";
    const HOST = "localhost";
    const LOGIN = "root";
    const PWD = "";

    protected function __construct() {
       $this->_connexion =  new PDO('mysql:host='.self::HOST.';dbname='.self::DBNAME.';charset=utf8', self::LOGIN, self::PWD);
    }
    
}