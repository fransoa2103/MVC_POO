<?php
require_once 'Class\Form.php';
require_once 'Class\ConnectDataBase.php';

// INDEX HOME PAGE
function home(){
    include 'View\indexView.php';
}

// LOGIN-LOGOUT USER CONTROLER
function login(){
    include 'View\loginView.php';
}
function userExist(){
    $dataBase = ConnectDataBase::dbConnect();
    include 'Model\userExistModel.php';
}
function logout(){
    require 'View\logoutView.php';
    if (isset($_SESSION['logged']) && $_SESSION['logged']){
    }

}
function logoutValid(){
    if ($_POST['logoutYesOrNo'] === "yes") {
        session_destroy();
    }
    header ('location: index.php');
    exit();
}

// DISPLAY POSTS BLOG
function blog(){
    $dataBase = ConnectDataBase::dbConnect();
    require 'Model\blogModel.php';
    require 'View\blogView.php';
}

// SET NEW ACCOUNT AND CONTROL
function newAccount(){
    if (isset($_SESSION['logged']) && $_SESSION['logged']) {
        require 'View\resultNewAccountView.php';
    }
    else{
        require 'View\setNewAccountView.php';
    }
}
function newAccountCtrl(){
    require 'Model\newAccountModel.php';
    createNewAccount();
    require 'View\setNewAccountView.php';
}