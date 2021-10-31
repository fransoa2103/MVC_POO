<?php
    require 'Model\Autoloader.php';
    session_start();
    Autoloader::register();

    require ('Controller\controller.php') ;
    try {
        if (isset($_GET['page'])){
            switch ($_GET['page']){
                case "home":            home();             break;
                case "login":           login();            break;
                case "userExist":       userExist();        break;
                case "logout":          logout();           break;
                case "logoutValid":     logoutValid();      break;
                case "blog":            blog();             break;
                case "newAccount":      newAccount();       break;
                case "newAccountCtrl":  newAccountCtrl();   break;
                default: home();  
            }
        }
        else {
            header ('location: ?page=home');
            exit();
        }
    }
    catch(Exception $php_errormsg){
        $php_errormsg = $php_errormsg->getmessage();
        require 'View\errorView.php';
    }