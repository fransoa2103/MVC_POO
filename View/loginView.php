<?php
    $title = "FCBlog";
    ob_start();
        if (isset($_SESSION['logged']) && $_SESSION['logged'] == false) { 
            echo "<span class='bg-danger p-1 rounded w-100 m-auto'>Error login</span>";
            Form::formConnection();
        }
        else {
            if (!isset($_SESSION['logged']) || $_SESSION['logged'] == false){
                Form::formConnection();
            }
            else { 
                echo "<span class='bg-warning p-1 rounded w-100 m-auto'>You're already login</span>";
            }
        }
    $content = ob_get_clean();
    require ('template.php');