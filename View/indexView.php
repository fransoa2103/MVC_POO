<?php
    $title = "FCBlog";
    ob_start();
        echo "<h1 class='text-light text-center fw-bolder w-100 m-auto'>WELCOME</h1>";
        echo "<p class='text-light text-center w-100 m-auto'>home page</p>";

    $content = ob_get_clean();
    require ('template.php');