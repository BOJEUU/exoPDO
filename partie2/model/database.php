<?php 

class DataBase {
    protected $dataBase;
    public function __construct()
    {
        try{
            $this->dataBase = new PDO('mysql:host=localhost;dbname=hospitale2n','BOJEU','dd');
        }
        catch (Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }
}