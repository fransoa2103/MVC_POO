<?php
    session_start();
    require 'Model\Class\ConnectDataBase.php';
    $alias         = htmlspecialchars($_POST['alias']); 
    $password_1    = $_POST['password_1']; 
    if ((isset($_POST) && !empty($alias)) && (!empty($password_1))){
        $dataBase = ConnectDataBase::dbConnect();
        $req = $dataBase->prepare('SELECT * FROM users WHERE alias = ?');
        $req->execute([$alias]);
        $user = $req->fetch();
        if ($user){
            if (password_verify($password_1, $user['secretCode'])) {
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'alias' => $user['alias']
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
    header ('location: index.php');
    exit();
