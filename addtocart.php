<?php

session_start();
include './admin/connection.php';

$pid = $_POST["pid"];
$qty = $_POST["qty"];

if (isset($_SESSION['productcart'])) {

    $currentno = $_SESSION["counter"]+1;
    $_SESSION['productcart'][$currentno] = $pid;
    $_SESSION['qtycart'][$currentno] = $qty;

    $_SESSION["counter"] = $currentno;

} else {
    
    //if cart is empty than it make an empty array
    $productcart = array();
    $qtycart = array();

    $_SESSION["productcart"][0] = $pid;
    $_SESSION["qtycart"][0] = $qty;
    $_SESSION["counter"] = 0;
}


// $result = mysqli_query($conn, 'SELECT * FROM product WHERE prod_no = ' . $_GET['id'] . '');


// //saving result in product 
// $product = mysqli_fetch_assoc($result);



// //if cart contains some items phle se then by default the array variable will be initialised by SESSION cart item


// //this will be add new items into the array and save into session
// array_push($arr, $product);
// $_SESSION['cart'] = $arr;

header('location: addtocart_main.php');

?>