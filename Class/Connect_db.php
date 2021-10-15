<?php
class Connect_db {
    public static function Connect_db() {
        try {
            $dataBase = new PDO('mysql:host=localhost;dbname=fcblog;charset=utf8', 'root', '');
        }
        catch (Exception $e){
        }
    }
}