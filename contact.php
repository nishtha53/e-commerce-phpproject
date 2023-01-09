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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            background: #f2f4f6;
        }

        .footer_get_touch_outer {
            margin-top: 80px;
        }

        .container {
            width: 95%;
            max-width: 1140px;
            margin: auto;
        }

        .grid-70-30 {
            display: grid;
            grid-template-columns: 70% 30%;
        }

        .get_form_inner {
            display: block;
            padding: 50px 40px;
            background: #fff;
            box-shadow: -4px -2px 20px -7px #cfd5df;
        }

        input[type="text"],
        input[type="text"],
        input[type="email"],
        input[type="number"] {
            border: 1px solid #dbdbdb;
            border-radius: 2px;
            color: #333;
            height: 42px;
            padding: 0 0 0 20px;
            width: 100%;
            outline: 0;
        }

        .grid-50-50 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 20px;
        }

        .grid-full {
            margin: 20px 0;
        }

        textarea {
            border: 1px solid #dbdbdb;
            border-radius: 2px;
            color: #333;
            padding: 12px 0 0 20px;
            width: 100%;
            outline: 0;
            margin-bottom: 20px;
        }

        .get_form_inner_text h3 {
            color: #333;
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 40px;
        }

        input[type="submit"] {
            display: inline-block;
            font-size: 16px;
            text-transform: uppercase;
            background: transparent;
            border: 2px solid;
            font-weight: 500;
            padding: 10px 20px;
            outline: 0;
            cursor: pointer;
            color: #E85B72;
            transition: all 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
            -webkit-transition: all 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
            -moz-transition: all 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
            -ms-transition: all 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
            -o-transition: all 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
        }

        input[type="submit"]:hover {
            background-color: #f85508;
            border-color: #E85B72;
            color: #fff;
        }

        .get_say_form {
            display: inline-block;
            padding: 45px 0 25px 30px;
            background: #E85B72;
            position: relative;
        }

        .get_say_form h5 {
            color: #fff;
            font-size: 26px;
            margin: 0 0 40px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .get_say_social-icn {
            display: flex;
            position: absolute;
            bottom: 40px;
        }

        .get_say_social-icn a {
            font-size: 22px;
            color: #fff;
            padding: 0 20px 0 0;
        }

        .get_say_info_sec i {
            color: #fff;
            font-size: 32px;
        }

        .get_say_info_sec>li {
            display: grid;
            grid-template-columns: 40px auto;
            align-items: center;
            margin-bottom: 40px;
        }

        .get_say_info_sec>li a {
            width: 100%;
            display: block;
            padding: 15px 25px;
            color: #fff;
            font-size: 16px;
            text-decoration: unset;
            font-weight: 500;
            background: #E85B72;
            border-radius: 5px 0 0 5px;
            transition: background 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
            -webkit-transition: background 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
            -moz-transition: background 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
            -ms-transition: background 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
            -o-transition: background 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
        }

    
    </style>

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
                <li class="nav-item active"> <a class="nav-link mx-4" href="home.php">Home </a> </li>
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

    <section class="footer_get_touch_outer">
        <div class="container">
            <div class="footer_get_touch_inner grid-70-30">
                <div class="colmun-70 get_form">
                    <div class="get_form_inner">
                        <div class="get_form_inner_text">
                            <h3>Get In Touch</h3>
                        </div>
                        <form method="POST" >
                            <div class="grid-50-50">
                                <input type="text" placeholder="First Name" name="fname">
                                <input type="text" placeholder="Last Name" name="lname">
                                <input type="email" placeholder="Email" name="email">
                                <input type="number" placeholder="Phone" name="phoneno">
                            </div>
                            <div class="grid-full">
                                <textarea placeholder="Send Message" cols="30" rows="10" name="description"></textarea>
                                <input type="submit" value="Submit" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="colmun-30 get_say_form">
                    <h5>Say Hi!</h5>
                    <ul class="get_say_info_sec">
                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:">info@medico.com</a>
                        </li>
                        <li>
                            <i class="fa fa-whatsapp"></i>
                            <a href="tel:">+91 898084504</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

<?php

include "./admin/connection.php";
if (isset($_POST["submit"])) {
 $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];
  $contact = $_POST["phoneno"];
  $description = $_POST["description"];

  $qry = "insert into contact(fname,lname,email,contact,message) values('$fname','$lname','$email',$contact,'$description')";
  $sql = mysqli_query($conn, $qry);
  if ($sql) {
    echo "<script>alert('Your query is submitted');</script>";
  }
}

?>
