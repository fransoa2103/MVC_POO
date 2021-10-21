
<?php

function createNewAccount(){
    if (!empty($_POST) && !empty($_POST['nick_name']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password_1'])){
        $dataBase = ConnectDataBase::dbConnect();
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