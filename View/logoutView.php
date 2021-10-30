<?php
    use fcb\Form;
    $title = "FCBlog";
    ob_start();
        if (isset($_SESSION['logged']) && $_SESSION['logged']){
            echo "<p class='w-25 p-1 m-1 rounded bg-info text-dark'>Confirm log-out</p>";
            Form::formLogout();
        }
        else {
            echo "<span class='bg-warning text-dark p-1 rounded w-100 m-auto'>You're not connected</span>";
        }
    $content = ob_get_clean();
    require 'template.php';