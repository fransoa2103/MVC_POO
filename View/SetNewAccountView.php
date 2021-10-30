<?php
    use fcb\Form;
    $title = "FCBlog";
    ob_start();
        if (isset($_SESSION['success']) && !$_SESSION['success']){
            echo "<span class='text-danger'>all input fields must be completed!</span>";
        }
        else {
            echo "<span class='fw-bolder text-success'>fill in the form, please.</span>";
        }
        Form::formNewAccount();
    $content = ob_get_clean();
    require ('template.php');