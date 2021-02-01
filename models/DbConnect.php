<?php
class DbConnect{

protected $connectObj;

function __construct(){

    $this->connectObj = new PDO("mysql:host=localhost:3306;dbname=tp012021;charset=utf8", "root","");
}

}