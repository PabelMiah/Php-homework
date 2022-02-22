<?php

require_once 'vendor/autoload.php';

use App\classes\uploadProducts;
use App\classes\Auth;

if(isset($_GET['pages']))
{
    if($_GET['pages'] == 'upload-products')
    {
        include 'pages/uploadProducts.php';
    }
    elseif ($_GET['pages'] == 'view-products')
    {
        $uploadProduct = new uploadProducts();
        $products = $uploadProduct->getAllStudentInfo();
        include 'pages/viewProducts.php';
    }
    elseif ($_GET['pages'] == 'login')
    {
        include 'pages/login.php';

    }
    elseif ($_GET['pages'] == 'logout')
    {
        $auth = new Auth($_POST);
        $auth->logout();

    }
}
elseif (isset($_POST['uploadBtn']))
{
    $uploadProduct = new uploadProducts($_POST,$_FILES);
    $message = $uploadProduct->index();
    include 'pages/uploadProducts.php';
}
elseif (isset($_POST['loginBtn']))
{
    $auth = new Auth($_POST);
    $message = $auth->login();
    include 'pages/login.php';
}