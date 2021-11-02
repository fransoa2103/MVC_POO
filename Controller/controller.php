<?php
use fcb\{UserManager, BlogManager};
// ---------------------------------------------------------------------
// CONTROLER INDEX HOME PAGE
function home(){
    require 'View\indexView.php';
}

// ---------------------------------------------------------------------
// CONTROLER USER LOGIN AND LOGOUT
function login(){
    require 'View\loginView.php';
}
function userExist(){
    $location_header = "";
    $userManager = new UserManager();
    $req = $userManager->userExist();
    var_dump($_SESSION);
    die;
    header ('location: '.$_SESSION['page']);

}
function logout(){
    require 'View\logoutView.php';
}
function logoutValid(){
    if ($_POST['logoutYesOrNo'] === "yes") {
        session_destroy();
    }
    header ('location: home');
    exit();
}

// ---------------------------------------------------------------------
//  CONTROLER NEW ACCOUNT
function newAccount(){
    if (isset($_SESSION['logged']) && $_SESSION['logged']) {
        require 'View\resultNewAccountView.php';
    }
    else{
        require 'View\setNewAccountView.php';
    }
}
function newAccountCtrl(){
    $newAccount = new UserManager();
    $req = $newAccount->createNewAccount();
    require 'View\resultNewAccountView.php';
}

// ---------------------------------------------------------------------
// CONTROLER BLOG MANAGER DISPLAY POSTS
function blog(){
    $blogManager = new BlogManager();
    $req = $blogManager->displayPosts();
    require 'View\blogView.php';
}