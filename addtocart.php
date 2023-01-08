<?php

session_start();
include './admin/connection.php';
$result = mysqli_query($conn, 'SELECT * FROM product WHERE prod_no = ' . $_GET['id'] . '');


//saving result in product 
$product = mysqli_fetch_assoc($result);



//if cart contains some items phle se then by default the array variable will be initialised by SESSION cart item
if (isset($_SESSION['cart'])) {
    $arr = $_SESSION['cart'];
} else {
    //if cart is empty than it make an empty array
    $arr = array();
}

//this will be add new items into the array and save into session
array_push($arr, $product);
$_SESSION['cart'] = $arr;

header('location: addtocart_main.php');

?>