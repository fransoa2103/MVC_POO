<?php
    $title = "FCBlog";
    ob_start();
        if (isset($_SESSION['logged']) && $_SESSION['logged']){ 
            echo "<span class='bg-warning text-dark p-1 rounded w-100 m-auto'>You're already login</span>";
        }   
            else if ($_SESSION['success']){
                echo "<p class='bg-success p-1 rounded w-100 m-auto'>Congrats, your registration is confirmed! Now, log-in please!</p>";
                session_destroy();
            }
                else {
                    echo "<span class='bg-danger p-1 rounded w-100 m-auto'>Missing or incorrect entry</span>";
                    session_destroy();
                }

    $content = ob_get_clean();
    require ('template.php');
