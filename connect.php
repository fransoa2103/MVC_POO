<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<?php
    include 'head.php'
?>
<body class="bg-dark text-light w-50 m-auto">
<?php
    include 'navbar.php';
    if (isset($_SESSION) && ($_SESSION != null)){
        if ($_SESSION['state_successOrError'] == false){
            echo $_SESSION['msg_successOrError'];
            session_destroy();
        }
    }
?>
    <form action="connect_control.php" method="POST">
        <div class="my-3">
            <label for="alias" class="form-label text-light">Pseudo
                <input type="text" class="form-control" name="alias" id="alias">
            </label>
        </div>
        <div class="mb-3">
            <label for="password_1" class="form-label">Password
                <input type="password" class="form-control" name="password_1" id="password_1">
            </label>
        </div>
        <input type="submit" class="btn btn-primary" value="Submit">
    </form>
</body>
</html>