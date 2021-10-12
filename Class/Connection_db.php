<?php
class Connection_db {
    public static function connection_db() {
        try {
            $dataBase = new PDO('mysql:host=localhost;dbname=fcblog;charset=utf8', 'root', '');
            return '<p style="color: white;">connecté!</p>';
        }
        catch (Exception $e){
            return ('Erreur : ' . $e->getMessage());
        }
    }
}