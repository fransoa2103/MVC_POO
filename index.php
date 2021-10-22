<?php
    session_start();
    require ('Controller\controller.php') ;
    try {
        if (isset($_GET['page'])){
            switch ($_GET['page']){
                case "home":        home();         break;
                case "login":       login();        break;
                case "userExist":   userExist();    break;
                case "logout":      logout();       break;
                case "logoutValid": logoutValid();  break;
                case "blog":        blog();         break;
                case "newAccount":  newAccount();   break;
                case "newAccountCtrl":  newAccountCtrl();   break;
                default: throw new Exception ("file doesn't exist or unknow error");
            }
        }
        else {
            throw new Exception ("file doesn't exist or unknow error");
        }
    }
    catch(Exception $php_errormsg){
        $php_errormsg = $php_errormsg->getmessage();
        require 'View\errorView.php';
    }