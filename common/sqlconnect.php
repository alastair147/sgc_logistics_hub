<?php

class Connection
{
    private $connection = null;
    public function getConnection(){
        try{
            return new PDO("mysql:host=localhost;dbname=sgc_hub", 'root', '');
        }catch(Exception $e){
            echo "Can't connect to DATABASE!";
            return null;
        }
    }
}
