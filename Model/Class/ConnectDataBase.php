<?php

class ConnectDataBase{
    public static function dbConnect() {
        try {
            $dataBase = new PDO('mysql:host=localhost;dbname=fcblog;charset=utf8', 'root', '');
            return $dataBase;
        }
        catch (Exception $e){
            return($e);
        }
    }
}