<?php
    session_start();
    require ('Controller\rooter.php') ;

    if (isset($_GET['page'])){
        switch ($_GET['page']){
            case "login":       login();        break;
            case "userExist":   userExist();    break;
            case "logout":      logout();       break;
            case "logoutValid": logoutValid();  break;
            case "blog":        blog();         break;
            case "newAccount":  newAccount();   break;
            case "newAccountCtrl":  newAccountCtrl();   break;
            default:            home();
        }
    }
    else {
        home();
    }