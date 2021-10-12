<?php
    function autoload($class_name){
        require 'Class/'.$class_name.'.php';
    }
    spl_autoload_register('autoload');

    Connection_db::connection_db();
?>

<!DOCTYPE html>
<html lang="fr">
    <?php include 'head.php'; ?>
    <body class="text-dark bg-light">
        
        <?php
            $nav_menu_page_index = new Nav_menu($_SERVER['PHP_SELF'],Files_name::$brand_logo,'navbar-dark','bg-primary', [Files_name::$page_index, Files_name::$page_index2]);
        ?>
        <?php include 'script_js.php'; ?>
    </body>
</html>  