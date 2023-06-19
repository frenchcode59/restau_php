<?php

class BDD
{
    private $bdd;
    public function __construct()
    {
        try {
            $this->bdd = new PDO('mysql:host=localhost;dbname=coursmvcsofip;charset=utf8', 'root', '');
        }catch (PDOException $e){
            print($e);
        }
    }

    public function getBdd()
    {
        return $this->bdd;
    }


}