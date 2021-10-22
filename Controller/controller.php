<?php
require_once 'Model\Form.php';

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
    require 'Model\UserManager.php';
    $userManager = new UserManager();
    $req = $userManager->userExistModel();
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
    require 'Model\UserManager.php';
    $newAccount = new UserManager();
    $req = $newAccount->createNewAccount();
    require 'View\resultNewAccountView.php';
}

// ---------------------------------------------------------------------
// CONTROLER BLOG MANAGER DISPLAY POSTS
function blog(){
    require 'Model\BlogManager.php';
    $blogManager = new BlogManager();
    $req = $blogManager->displayPosts();
    require 'View\blogView.php';
}