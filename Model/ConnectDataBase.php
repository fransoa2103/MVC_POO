<?php

class ConnectDataBase{
    protected function dbConnect() {
        $dataBase = new PDO('mysql:host=localhost;dbname=fcblog;charset=utf8', 'root', '');
        return $dataBase;
    }
}