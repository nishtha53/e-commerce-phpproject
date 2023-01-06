<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>E-commerce Project</title>
</head>

<body>
    <nav class="navbar  navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><img src="images/logo.jpeg" height="80px" width="150px" /> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">

            <ul class="navbar-nav mx-auto">
                <li class="nav-item active"> <a class="nav-link mx-4" href="#">Home </a> </li>
                <li class="nav-item"><a class="nav-link mx-4" href="about.php"> About </a></li>
                <li class="nav-item"><a class="nav-link mx-4" href="contact.php">Contact us</a></li>

            </ul>
            <ul style="list-style: none;">
                <li class="nav-item"><a class="nav-link" href="#"><img src="images/add-to-basket.png" width="40px" height="40px"></a></li>
            </ul>
            <a class="btn btn-warning mx-4" href="login.php">Login</a>
            <a class="btn btn-warning mx-4" href="register.php">Register</a>
        </div> <!-- navbar-collapse.// -->

        </div>
    </nav>

    <?php

include 'admin/connection.php';

$query = "SELECT * from product;";

$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

while ($result = mysqli_fetch_assoc($data)) {
    echo "
        <div class='col-md-3'>
        <div class='card' style='width: 20rem;'>
        <img class='card-img-top' src='./admin/" . $result["image"] . "' alt='Card image'>
        <div class='card-body'>
             <h5 class='card-title'>" . $result["prod_name"] . "</h5>
             <p class='card-text'>" . $result["description"] . "</p>
            <p class='card-text'>" . $result["unit"] . "</p>
            <h5 class='card-text'>" . $result["price"] . "</h5>
            <a href='addtocart.php' class='btn btn-primary'>Add to card</a>
        </div>
    </div>
    </div>
";
}
?>


    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">Medico shop- Your Health & Fitness Partner is an online portal for healthcare products brought to you by Medicare Products Inc. The company is managed by a team of two young & motivated entrepreneurs with an objective to provide and extend personalized and innovative healthcare services to its customers.</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links">
                        <li><a href="#">Syrup</a></li>
                        <li><a href="#">Tablet</a></li>
                        <li><a href="#">Ayurveda</a></li>
                        <li><a href="#">Hompyopethik</a></li>
                        <li><a href="#">Emulsions</a></li>
                        <li><a href="#">Inhalers</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
                        <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
                        <a href="#">Scanfcode</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>




