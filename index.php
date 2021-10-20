<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <?php include 'head.php' ?>
    <body class="bg-dark w-50 m-auto text-light">
        
    <?php
        include 'navbar.php';
        if (isset($_SESSION['logged']) && !$_SESSION['logged']) { 
            echo "<span class='bg-danger p-1 rounded w-100 m-auto'>Error login</span>";
            ?>
            <form action="connect_control.php" method="POST">
                <div class="my-3">
                    <label for="alias" class="form-label text-light">Pseudo
                        <input type="text" class="form-control" name="alias" id="alias" value="">
                    </label>
                </div>
                <div class="mb-3">
                    <label for="password_1" class="form-label">Password
                        <input type="password" class="form-control" name="password_1" id="password_1">
                    </label>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
            </form><?php
        }
        else {
            if (isset($_SESSION['logged']) && !$_SESSION['logged']){
            ?>
            <form action="connect_control.php" method="POST">
                <div class="my-3">
                    <label for="alias" class="form-label text-light">Pseudo
                        <input type="text" class="form-control" name="alias" id="alias" value="">
                    </label>
                </div>
                <div class="mb-3">
                    <label for="password_1" class="form-label">Password
                        <input type="password" class="form-control" name="password_1" id="password_1">
                    </label>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
            </form><?php
         } }
        ?>

    </body>
</html>