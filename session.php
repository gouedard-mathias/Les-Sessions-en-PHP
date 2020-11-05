<?php
session_start();
require 'inc/data/products.php';

$loginname = trim($_POST['loginname']);

if($loginname !== "" || !isset($loginname)) {
    $_SESSION['username'] = $loginname;
}
//var_dump($_SESSION);die;

$count = $_POST['add_to_cart'];
//var_dump($count);die;
if (isset($count)) {
    //var_dump($_SESSION, $catalog[$count]);
    $_SESSION["product"][$count] = $catalog[$count];
    //echo '<pre>';
    //var_dump($_SESSION);die;
}


if ($loginname !== "" || !isset($loginname)){
    if (isset($_POST['cart_cookie_count'])){
        $_SESSION["count"][$count]++;
        //var_dump($_SESSION["count"][$count]);die;
    }
}


if ($_SESSION['username'] === "" || !isset($_SESSION['username'])) {
    header('Location: login.php');
} else {
    header('Location: index.php');
}
