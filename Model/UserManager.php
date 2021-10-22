<?php
require_once 'ConnectDataBase.php';

class UserManager extends ConnectDataBase{
    // 
    // FUNCTION USER EXIST ?
    // 
    function userExistModel(){
        $dataBase      = $this->dbConnect();
        $nick_name     = htmlspecialchars($_POST['nick_name']); 
        $password_1    = $_POST['password_1']; 
        if ((isset($_POST) && !empty($nick_name)) && (!empty($password_1))){
            $req = $dataBase->prepare('SELECT * FROM users WHERE nick_name = ?');
            $req->execute([$nick_name]);
            $user = $req->fetch();
            if (isset($user) && $user){
                if (password_verify($password_1, $user['secretCode'])) {
                    $_SESSION['user'] = [
                        'id' => $user['id'],
                        'nick_name' => $user['nick_name']
                    ];
                    $_SESSION['logged'] = true;
                    header ('location: http://localhost/MVC_POO/?page=home');
                    exit();
                    return $req;
                }
            }
        }
        $_SESSION['logged'] = false;
        header ('location: http://localhost/MVC_POO/?page=login');
        exit();
    }
    // 
    // END FUNCTION USER EXIST?
    // 
    // ---------------------------------------------------------
    // 
    // FUNCTION CREATE USER
    // 
    function createNewAccount(){
        if (!empty($_POST) && !empty($_POST['nick_name']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password_1'])){
            $dataBase = $this->dbConnect();
            $req = $dataBase->prepare('INSERT INTO users(nick_name, first_name, last_name, email, secretCode) VALUES(?,?,?,?,?)');
            $req->execute([
                htmlspecialchars($_POST['nick_name']),
                htmlspecialchars($_POST['first_name']),
                htmlspecialchars($_POST['last_name']),
                htmlspecialchars($_POST['email']),
                password_hash($_POST['password_1'], PASSWORD_DEFAULT)
            ]);
            $_SESSION['success'] = true;
        }
        else {
            $_SESSION['success'] = false;
        }
    }
}