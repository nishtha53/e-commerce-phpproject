<?php
include("./connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <span class="d-none d-lg-block">Admin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->
  <li class="nav-item">
    <a class="nav-link " href="user_admin.php">
      <i class="bi bi-grid"></i>
      <span>Users</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="product.php">
      <i class="bi bi-grid"></i>
      <span>Product</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="contact_admin.php">
      <i class="bi bi-grid"></i>
      <span>Contact us</span>
    </a>
  </li>


</ul>

</aside><!-- End Sidebar-->


    <main id="main" class="main">
        <h2>Add Product</h2><br>
        <div class="container">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="productname">Product Name:</label><br>
                    <input type="text" class="form-control" id="product" placeholder="Product name" name="pname">
                </div><br>
                <div class="form-group">
                    <label for="productname">Description</label><br>
                    <input type="text" class="form-control" id="description" placeholder="Enter Description" name="description">
                </div><br>
                <div class="form-group">
                    <label for="productname">Unit</label><br>
                    <input type="text" class="form-control" id="unit" placeholder="Enter Unit" name="unit">
                </div><br>
                <div class="form-group">
                    <label for="productname">Price</label><br>
                    <input type="number" class="form-control" id="price" placeholder="Enter Price" name="price">
                </div><br>
                <div class="form-group">
                    <input type="file" class="form-control" id="image" name="upload">
                </div><br>
                <input type="submit" class="btn btn-primary btn-lg  float-right" value="Add Product" name="submit"  />

                <?php


                if (isset($_POST['submit'])) {
                    $pname = $_POST['pname'];
                    $description = $_POST['description'];
                    $unit = $_POST['unit'];
                    $price = $_POST['price'];
                    $filename = $_FILES['upload']['name'];
                    $temp_name = $_FILES['upload']['tmp_name'];
                    $folder = "assets/img/" . $filename;
                    move_uploaded_file($temp_name, $folder);
                    $q1 = "INSERT into product(prod_name,description,unit,price,image)values('$pname','$description','$unit','$price','$folder');";
                    $qq = mysqli_query($conn, $q1);

                    if ($qq) {
                        //echo "Data inserted!";
                        echo "<script>alert('Product Added!');location='product.php';</script>";
                       
                    } else {
                        echo "data not inserted";
                    }
                }

                ?>
            </form>
        </div><br><br><br><br>
    </main>



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

