<?php
    session_start();
    include 'navbar.php';
    require 'Model\Class\ConnectDataBase.php';
    
    $alias         = htmlspecialchars($_POST['alias']); 
    $password_1    = $_POST['password_1']; 
    if ((isset($_POST) && !empty($alias)) && (!empty($password_1))){
        $dataBase = ConnectDataBase::dbConnect();
        $req = $dataBase->prepare('SELECT secretCode, alias FROM users WHERE alias = ?');
        $req->execute([$alias]);
        $user = $req->fetch();
        if ($user){
            if (password_verify($password_1, $user['secretCode'])) {
                $_SESSION['state_successOrError']   = true;
                $_SESSION['msg_successOrError']     = "<span class='display-6 bg-success p-1 rounded w-100 m-auto'>Bienvenue ".$user['alias']."</span>"; 
                $_SESSION['user'] = $user['alias'];
            } else {
                $_SESSION['state_successOrError']   = false;
                $_SESSION['msg_successOrError']     = "<span class='display-6 bg-danger p-1 rounded w-100 m-auto'>Error login</span>";
                header ('location: connect.php');
                exit();     
            }
        }
        else {
            $_SESSION['state_successOrError']   = false;
            $_SESSION['msg_successOrError']     = "<span class='display-6 bg-danger p-1 rounded w-100 m-auto'>Error login</span>";
            header ('location: connect.php');
            exit();     
        }
    }
    else {
        $_SESSION['state_successOrError']   = false;
        $_SESSION['msg_successOrError']     = "<span class='display-6 bg-danger p-1 rounded w-100 m-auto'>Error login</span>";
        header ('location: connect.php');
        exit();
    }
    ?>
<!DOCTYPE html>
<html lang="fr">
    <?php include 'head.php' ?>
    <body class="bg-dark w-50 m-auto text-light">
        <?php
            echo $_SESSION['msg_successOrError'];
        ?>
    </body>
</html>