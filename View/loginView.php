<?php
    use fcb\Form;
    $title = "FCBlog";
    ob_start();
        if (isset($_SESSION['logged']) && $_SESSION['logged'] == false) { 
            echo "<span class='bg-danger p-1 rounded w-100 m-auto'>Error login</span>";
            session_destroy();
            Form::formConnection();
        }
        else {
            if (!isset($_SESSION['logged']) || $_SESSION['logged'] == false){
                session_destroy();
                Form::formConnection();
            }
            else { 
                echo "<span class='bg-warning text-dark p-1 rounded w-100 m-auto'>You're already login</span>";
            }
        }
    $content = ob_get_clean();
    require ('template.php');