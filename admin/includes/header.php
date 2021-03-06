<?php
session_start();
if(!isset($_SESSION['admin_id'])){
    header('location:login.php');
}

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Curtains</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="images/icon/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/metisMenu.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="css/typography.css">
    <link rel="stylesheet" href="css/default-css.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>
   <!--  <div id="preloader">
        <div class="loader"></div>
    </div> -->
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.php"><b style="font-size: 20px; color: #fff ">MH <span style="color: #ffff99">Books</span></b></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <li><a href="index.php"><i class="fa fa-user-secret"></i> <span>Manage Admin</span></a></li>
                            </li>
                            <li class="active">
                                <li><a href="manage_category.php"><i class="ti-receipt"></i> <span>Manage category</span></a></li>
                            </li>
                             <li class="active">
                                <li><a href="manage_subcat.php"><i class="ti-receipt"></i> <span>Manage sub category</span></a></li>
                            </li>
                            <li class="active">
                                <li><a href="manage_product.php"><i class="ti-receipt"></i> <span>Manage product</span></a></li>
                            </li>
                               <li class="active">
                                <li><a href="customer.php"><i class="fa fa-user"></i> <span> Manage customer</span></a></li>
                            </li>
                             <li class="active">
                                <li><a href="manage_order.php"><i class="ti-receipt"></i> <span>Manage Order</span></a></li>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
         <!-- main content area start -->
        <div class="main-content">
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                           
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="<?php echo $_SESSION['admin_image'] ?>">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['fullName'] ?> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><?php echo $_SESSION['admin_email'] ?></a>
                                <a class="dropdown-item" href="editacount.php?id=<?php echo $_SESSION['admin_id'];?>">Edit Acount</a>
                                <a class="dropdown-item" href="logout.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
           
