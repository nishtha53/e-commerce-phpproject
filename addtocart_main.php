<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>E-commerce Project</title>
</head>
<body>


<?php
include './admin/connection.php';
session_start();

if(isset($_GET["id"])){
    unset($_SESSION["productcart"][$_GET["id"]]);
    unset($_SESSION["qtycart"][$_GET["id"]]);
}
if(isset($_SESSION["productcart"]) && !empty($_SESSION["productcart"])){

    echo "
    <div class='container'>
    <table class='table'>
        <tr>
             <th>No</th>
             <th>Product Name</th>
             <th>Description</th>
             <th>Price</th>
             <th>Quantity</th>
             <th>Image</th>
             <th>Subtotal</th>
             <th>Remove</th>
        </tr>
    ";
    $i = 0;

    $grandtotal = array();

    foreach($_SESSION["productcart"] as $key => $value){

        $productq = mysqli_query($conn, "SELECT * FROM product WHERE prod_no = '{$value}'") or die(mysqli_error($conn));
        $pdetails = mysqli_fetch_array($productq);
        $i++;

        $qty = $_SESSION["qtycart"][$key];
        $subtotal = $pdetails["price"] * $qty;
        
        echo "<tr>
            <td>".$i."</td>
            <td>".$pdetails['prod_name']."</td>
            <td>".$pdetails['description']."</td>
            <td>".$pdetails['price']."</td>
            <td>".$qty."</td>
            <td><img src='./admin/{$pdetails['image']}' style='height:100px;width:100px;'></td>
            <td align='center'>".$subtotal."</td>
            <td><a href='?id=$key' class='btn btn-danger'>Remove</a></td>
            </tr>
            </div>
        ";

        $grandtotal[] = $subtotal;
    }   
    $finalgrandtotal = array_sum($grandtotal);

    echo "<tr><td></td><td></td><td></td><td></td><td>Grand total is = ".$finalgrandtotal."</td></tr></table>";

    echo "<a href='home.php' class='btn btn-info mb-5'>Buy More products </a>";
}
else{
    echo "<center><h1>cart is empty</h1></center>";
    echo "<a href='home.php' class='btn btn-primary'>Buy Now</a>";
}

?>
</body>
</html>