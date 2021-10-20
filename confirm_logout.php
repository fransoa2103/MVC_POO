<?php
    session_start();
    if ($_POST['logoutYesOrNo'] === "yes") {
        session_destroy();
    }
    header ('location: index.php');
    exit();


