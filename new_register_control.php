
<?php include 'navbar.php';
require 'Model\Class\ConnectDataBase.php';
    if (!empty($_POST) && (!empty($_POST['alias'])) && (!empty($_POST['email'])) && (!empty($_POST['password_1']))){
        $dataBase = ConnectDataBase::dbConnect();
        $req = $dataBase->prepare('INSERT INTO users(alias, first_name, last_name, email, secretCode) VALUES(?,?,?,?,?)');
        $req->execute([
            htmlspecialchars($_POST['alias']),
            htmlspecialchars($_POST['first_name']),
            htmlspecialchars($_POST['last_name']),
            htmlspecialchars($_POST['email']),
            password_hash($_POST['password_1'], PASSWORD_DEFAULT)
        ]);
        echo "<p class='bg-success p-1 rounded w-100 m-auto'>Congrats, your registration is confirmed! Now, log-in please!</p>";
    }
    else {
        echo "<span class='display-6 bg-danger p-1 rounded w-100 m-auto'>Error new register</span>";
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <?php include 'head.php' ?>
    <body class="bg-dark w-50 m-auto text-light">
    
    </body>
</html>