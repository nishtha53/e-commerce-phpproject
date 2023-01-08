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
    <div class="row">
        <?php

        session_start();

        // require('addtocart.php?id='.$_SESSION['prod_no'].'');



        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
        ?>
                <div class='col-md-4'>
                    <div class='card' style='width: 22rem;'>
                        <img class='card-img-top' src='./admin/<?php echo $item["image"];  ?>' alt='Card image'>
                        <div class='card-body'>
                            <h5 class='card-title text-center'>Product Name: <?php echo $item["prod_name"];  ?></h5>
                            <p class='card-text text-muted text-center'>Description: <?php echo $item["description"];  ?></p>
                            <h5 class='card-text text-center'>₹ <?php echo $item["price"];  ?></h5>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>

</body>

</html>
