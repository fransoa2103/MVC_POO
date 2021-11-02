<?php
namespace fcb;
class UserManager extends ConnectDataBase{
    // 
    // function control user exist in database
    //
    function userExist(){
        if (isset($_POST)){
            FormInputControl::form_input_control($result = true);
            if ($result && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $nick_name      = htmlspecialchars($_POST['nick_name']); 
                $email          = htmlspecialchars($_POST['email']); 
                $password_1     = $_POST['password_1']; 

                $dataBase       = $this->dbConnect();
                $req = $dataBase->prepare('SELECT * FROM users WHERE nick_name = ? AND email = ?');
                $req->execute([$nick_name, $email]);
                $user = $req->fetch();

                if (isset($user) && $user){
                    if (password_verify($password_1, $user['secretCode'])) {
                        $_SESSION['user'] = [
                            'id' => $user['id'],
                            'nick_name' => $user['nick_name']
                        ];
                        $_SESSION['logged'] = true;
                        $_SESSION['page'] = 'home';
                    }
                }
            }       
        }
        $_SESSION['logged'] = false;
        $_SESSION['page'] = 'login';


    }
    // 
    // FORM INPUT CONTROL
    // control all inputs step by step and return boolean 
    
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
    // 
    // END FUNCTION CREATE USER ?
    // 
}