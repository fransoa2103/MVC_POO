<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
    <?php include 'head.php' ?>
    <body class="bg-dark w-50 m-auto text-light">
        <?php include 'navbar.php';
        
        echo "<p class='p-1 m-1 rounded bg-warning text-dark'>Confirm log-out</p>";

        if ($_SESSION['user']!=null) { ?>
            <form action="confirm_logout.php" method="POST">
                <div>
                    <input type="radio" id="yes" name="logoutYesOrNo" value="yes"> 
                    <label for="yes">YES</label>
                </div>
                <div>
                    <input type="radio" id="no" name="logoutYesOrNo" value="no"d> 
                    <label for="yes">NO</label>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
            </form>
           <?php
        }
        else
        {
            header ('location: index.php');
            exit();
        }
        ?>

    </body>
</html>

