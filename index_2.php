<?php
    require_once 'Model/autoload.php';
    new NavMenu($_SERVER['PHP_SELF'],0,'navbar-dark','bg-primary',[1,1,1]);
?>
<!DOCTYPE html>
<html lang="fr">
    <?php include 'head.php'; ?>
    <body class="text-dark bg-light">
        <?= "<h1>WELCOME TO THE PAGE 2</h1>"?>
        <?php include 'script_js.php'; ?>
    </body>
</html>  