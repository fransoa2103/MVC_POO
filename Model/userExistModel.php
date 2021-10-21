<?php
    $nick_name         = htmlspecialchars($_POST['nick_name']); 
    $password_1    = $_POST['password_1']; 
    if ((isset($_POST) && !empty($nick_name)) && (!empty($password_1))){
        $req = $dataBase->prepare('SELECT * FROM users WHERE nick_name = ?');
        $req->execute([$nick_name]);
        $user = $req->fetch();
        if ($user){
            if (password_verify($password_1, $user['secretCode'])) {
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'nick_name' => $user['nick_name']
                ];
                $_SESSION['logged'] = true;
            }
            else {
                $_SESSION['logged'] = false;
            }
        }
        else {
            $_SESSION['logged'] = false;
        }
    }
    else {
        $_SESSION['logged'] = false;
    }
    header ('location: http://localhost/MVC_POO/?page=login');
    exit();
