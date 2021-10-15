<?php
    require_once 'Model/autoload.php';
    new NavMenu($_SERVER['PHP_SELF'],FilesName::$brand_logo,'navbar-dark','bg-primary',
    [
        FilesName::$page_menu[0],
    ]);
?>

<!DOCTYPE html>
<html lang="fr">
    <?php include 'head.php'; ?>
    <body class="text-dark bg-light">
        <h1>WELCOME TO THE HOME PAGE</h1>
        <?php include 'script_js.php'; ?>
    </body>
</html>  