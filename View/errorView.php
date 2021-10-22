<?php
    $title = "FCBlog";
    ob_start();
        echo "<p class='bg-danger text-light text-center fw-bolder w-100 m-auto'>FAIL</p>";
        echo "<p class='text-danger text-center w-100 m-auto'>".$php_errormsg."</p>";
    $content = ob_get_clean();
    require ('template.php');