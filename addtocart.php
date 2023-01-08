
<?php

    session_start();
    include './admin/connection.php';  
        $result = mysqli_query($conn, 'SELECT * FROM product WHERE prod_no = '.$_GET['id'].'');

        $product = mysqli_fetch_assoc($result);

        $_SESSION['product'] = $product;

        header('location: addtocart_main.php');

?>