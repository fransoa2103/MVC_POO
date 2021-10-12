<?php
    require_once 'Class/Nav_menu.php';
?> 
<!DOCTYPE html>
<html lang="fr">
    <?php include 'head.php'; ?>
    <body>
        <?php
            $nav_menu_page_index = new Nav_menu($_SERVER['PHP_SELF'],Files_name::$brand_logo,'navbar-dark','bg-primary', [Files_name::$page_index, Files_name::$page_index3]);
            include 'script_js.php';
        ?>
    </body>
</html>
