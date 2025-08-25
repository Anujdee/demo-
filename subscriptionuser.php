<?php
include "config.php"; // Include database connection file

// Default value for contact

// Start the session to access session variables
session_start();

?>



<?php
include "config.php";


$products_per_page = 15;

// Get the current page from the query string, default to 1 if not set
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max(1, $page); // Ensure the page is at least 1

// Calculate the starting record for the current page
$start = ($page - 1) * $products_per_page;

// Get the total number of products
$total_products_query = mysqli_query($conn, "SELECT COUNT(*) as total FROM tbl_product");
$total_products_row = mysqli_fetch_assoc($total_products_query);
$total_products = $total_products_row['total'];

// Calculate the total number of pages
$total_pages = ceil($total_products / $products_per_page);

// Fetch the products for the current page
$query = mysqli_query($conn, "SELECT * FROM tbl_product ORDER BY CreatedAt DESC LIMIT $start, $products_per_page");
?>



<!DOCTYPE html>
<html lang="en">


<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Global Connection21</title>

    <meta name="keywords" content="Global Connection21" />
    <meta name="description" content="Global Connection21">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets\images\demos\demo14\site-icon.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: {
                families: ['Poppins:400,500,600,700,800', 'Seoge Script:400,500,600,700,800']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/wolmart87d5.ttf?png09e" as="font" type="font/ttf" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css">

    <!-- preloading link
 
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
    <style>
        .tab-pane {
            font-size: 2.3rem;
            line-height: 1.7;
            padding: 1.3rem 0;
            color: #da2d5b;

        }

        .top-back {
            background-color: rgba(245, 245, 220, 0.896);
            padding: 20px 0px 0 40px;
            border-radius: 25px;
            border-bottom: 2px solid black;
        }

        .product-wrapper.row [class*=col-] {
            margin-bottom: 9px;
        }

        article {
            background-color: rgba(245, 245, 220, 0.896);
            border-radius: 10px;
            margin-bottom: -10px;
        }

        .flags img {
            width: 150px;
        }
    </style>

</head>

<body>
    <!-- Start of Pgae Wrapper -->
    <div class="page-wrapper">
        <?php include 'header.php'; ?>
        <!-- End of Header -->


        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="index">Home</a></li>
                        <!-- <li><a href="#">Vendor</a></li>
                        <li><a href="#">WCFM</a></li> -->
                        <li>Store</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Pgae Contetn -->
            <div class="page-content mb-8">
                <div class="container">
                    <div class="store store-wcfm-banner">
                        <figure class="store-media">
                            <img src="assets/images/pages/coming/1.png" alt="Vendor" width="1240" height="460"
                                style="background-color: #40475e;" />
                        </figure>
                        <!--   -->
                    </div>
                    <!-- End of Store WCMP Banner -->

                    <div class="row gutter-lg">
                        <aside class="sidebar left-sidebar vendor-sidebar sticky-sidebar-wrapper sidebar-fixed">
                            <!-- Start of Sidebar Overlay -->
                            <div class="sidebar-overlay"></div>
                            <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                            <a href="#" class="sidebar-toggle"><i class="w-icon-angle-right"></i></a>
                            <div class="sidebar-content">
                                <div class="sticky-sidebar">
                                    <div class="widget widget-collapsible widget-categories">
                                        <h3 class="widget-title"><span>All Categories</span></h3>
                                        <ul class="widget-body filter-items search-ul">
                                            <form class="form contact-us-form" action="" method="POST">
                                                <div class="row">
                                                    <!-- Main Category Select -->
                                                    <div class="form-group col-lg-12">
                                                        <label for="main_category">Select Main Category</label>
                                                        <select name="main_category" id="main_category" style="width: 230px; height: 48px; border: 1px solid #da2d5b;border-radius:4px">
                                                            <option value="">Category(s)</option>
                                                            <option value="Agriculture">Agriculture</option>
                                                            <option value="Food & Beverages">Food & Beverages</option>

                                                            <option value="Construction & real estate">
                                                                Construction & real estate</option>
                                                            <option value="Electronic & Electrical">
                                                                Electronic & Electrical</option>
                                                            <option value="Apparel & fashion accessories">Apparel & fashion accessories</option>
                                                            <option
                                                                value="Home furnishing & supplies">Home furnishing & supplies</option>
                                                            <option value="Industrial goods & chemical">
                                                                Industrial goods & chemical</option>
                                                            <option value="Minerals & Metals">
                                                                Minerals & Metals</option>
                                                            <option value="Miscellaneous">Miscellaneous
                                                            </option>

                                                        </select>
                                                    </div>

                                                    <!-- Sub Category Select -->
                                                    <div class="form-group col-lg-12">
                                                        <label for="sub_category">Select Sub Category</label>
                                                        <select id="sub_category" name="sub_category" style="width: 230px; height: 48px; border: 1px solid #da2d5b;border-radius:4px">
                                                            <option value="">Sub Category</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <button type="submit" name="search" class="btn btn-dark btn-rounded" style="width: 230px;margin-top:10px">Find Products</button>
                                            </form>

                                        </ul>
                                    </div>
                                    <!-- End of Widget -->

                                    <!-- End of Widget -->
                                    <div class="widget widget-collapsible widget-time">
                                        <h3 class="widget-title"><span><i class="far fa-clock"></i>Store Time</span>
                                        </h3>
                                        <ul class="widget-body">
                                            <li>
                                                <span>Monday:</span>9:00 - 10:00 pm
                                            </li>
                                            <li>
                                                <span>Tuesday:</span>9:00 - 10:00 pm
                                            </li>
                                            <li>
                                                <span>Wednesday:</span>9:00 - 10:00 pm
                                            </li>
                                            <li>
                                                <span>Thursday:</span>9:00 - 2:00 pm
                                            </li>
                                            <li>
                                                <span>Friday:</span>9:00 - 10:00 pm
                                            </li>
                                            <li>
                                                <span>Saturday:</span>9:00 - 10:00 pm
                                            </li>
                                            <li>
                                                <span>Sunday:</span>9:00 - 10:00 pm
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End of Widget -->
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title"><span><i class="w-icon-truck"></i>Shipping Rules</span>
                                        </h3>
                                        <div class="widget-body">
                                            <p class="mb-0">Delivery Time: 1-2 business days</p>
                                        </div>
                                    </div>
                                    <!-- End of Widget -->
                                    <div class="widget widget-collapsible widget-location">
                                        <h3 class="widget-title"><span>Top Selling Products</span></h3>
                                        <div class="widget-body">
                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="contact-us">
                                                        <img src="assets\images\demos\demo14\products\6.svg"
                                                            alt="Product" width="100" height="106" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="contact-us">Ajwa Dates</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">Canada</div>
                                                </div>
                                            </div>
                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="contact-us">
                                                        <img src="assets\images\demos\demo14\products\7.svg"
                                                            alt="Product" width="100" height="106" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="contact-us">Fresh Basmati Rice</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <ins class="new-price">India</ins>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="contact-us">
                                                        <img src="assets\images\demos\demo14\products\8.svg"
                                                            alt="Product" width="100" height="106" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="contact-us">Season Corn</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">Egypt</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Widget -->
                                    <div class="widget widget-collapsible widget-products">
                                        <h3 class="widget-title"><span>Best Food Product</span></h3>
                                        <div class="widget-body">

                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="contact-us">
                                                        <img src="assets\images\demos\demo14\products\1.svg"
                                                            alt="Product" width="100" height="106" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="contact-us">Fresh Ginger</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">USA</div>
                                                </div>
                                            </div>

                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="contact-us">
                                                        <img src="assets\images\demos\demo14\products\3.svg"
                                                            alt="Product" width="100" height="106" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="contact-us">Mango</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">USA</div>
                                                </div>
                                            </div>
                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="contact-us">
                                                        <img src="assets\images\demos\demo14\products\2.svg"
                                                            alt="Product" width="100" height="106" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="contact-us">Mint Oil</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">USA</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End of Widget -->
                                </div>
                            </div>
                        </aside>
                        <!-- End of Sidebar -->
                        <div class="main-content">
                            <div class="tab tab-nav-underline tab-nav-boxed tab-vendor-wcfm">
                                <ul class="nav nav-tabs" style="background-color: #da2d5b;padding-left:5px">
                                    <li class="nav-item">
                                        <a href="#tab-1" class="nav-link ">Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab-2" class="nav-link active ml-3">Buyer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab-3" class="nav-link">Suppliers</a>
                                    </li>


                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane " id="tab-1">
                                        <div class="product-wrapper row cols-md-12 cols-sm-12 cols-12">
                                            <?php
                                            include "config.php"; // Database connection

                                            // Pagination variables
                                            $products_per_page = 20; // Number of products per page
                                            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Current page
                                            $page = max($page, 1); // Ensure $page is at least 1
                                            $start = ($page - 1) * $products_per_page; // Offset for SQL query

                                            // Base query to fetch products
                                            $query_base = "SELECT * FROM tbl_product";
                                            $conditions = [];

                                            // Check if the search form is submitted
                                            if (isset($_POST['search'])) {
                                                // Add main category condition
                                                if (!empty($_POST['main_category'])) {
                                                    $main_category = mysqli_real_escape_string($conn, $_POST['main_category']);
                                                    $conditions[] = "main_cat = '$main_category'";
                                                }

                                                // Add subcategory condition
                                                if (!empty($_POST['sub_category'])) {
                                                    $sub_category = mysqli_real_escape_string($conn, $_POST['sub_category']);
                                                    $conditions[] = "sub_cat = '$sub_category'";
                                                }
                                            }

                                            // Append WHERE clause if conditions exist
                                            if (!empty($conditions)) {
                                                $query_base .= " WHERE " . implode(" AND ", $conditions);
                                            }

                                            // Get total number of products
                                            $query_total = $query_base;
                                            $result_total = mysqli_query($conn, $query_total);
                                            $total_products = mysqli_num_rows($result_total);

                                            // Calculate total pages
                                            $total_pages = ceil($total_products / $products_per_page);

                                            // Add LIMIT and OFFSET for pagination
                                            $query = $query_base . " LIMIT $start, $products_per_page";
                                            $result = mysqli_query($conn, $query);

                                            // Display products
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                                    <!-- Product Card -->
                                                    <article class="post row post-listing mb-md-5 mb-6 pb-2 overlay-zoom">
                                                        <figure class="post-media br-sm col-lg-3 col-12">
                                                            <a href="contact-us?product_name=<?php echo urlencode($row['product_name']); ?>">
                                                                <img src="Adminstrator/img/<?php echo $row['image']; ?>" width="930" height="400" alt="product" style="height: 220px;">
                                                            </a>
                                                        </figure>
                                                        <div class="post-details col-lg-9 col-12">
                                                            <h4 class="post-title">
                                                                <a href="contact-us?product_name=<?php echo urlencode($row['product_name']); ?>">
                                                                    <?php echo htmlspecialchars($row['product_name']); ?>
                                                                </a>
                                                            </h4>
                                                            <div class="post-content">
                                                                <p><?php echo htmlspecialchars($row['desc']); ?></p>
                                                            </div>
                                                            <div class="post-cats text-primary">
                                                                <a href="contact-us?product_name=<?php echo urlencode($row['product_name']); ?>">
                                                                    <?php echo htmlspecialchars($row['company_name']); ?>
                                                                </a>
                                                            </div>
                                                            <div class="post-meta">
                                                                <i class="w-icon-honour"></i>
                                                                <a href="#" class="post-author"><?php echo htmlspecialchars($row['points']); ?></a> &nbsp;&nbsp;
                                                                <i class="w-icon-bag"></i>
                                                                <a href="#" class="post-author">Business Type :</a>
                                                                <a href="#" class="post-date"><?php echo htmlspecialchars($row['business_type']); ?></a>
                                                                <i class="w-icon-map-marker"></i>
                                                                <a href="#" class="post-date"><?php echo htmlspecialchars($row['country']); ?></a>
                                                            </div>
                                                            <div class="col-lg-3 bottom-back mt-4">
                                                                <a href="contact-us?product_name=<?php echo urlencode($row['product_name']); ?>" style="width: 100%;" class="btn btn-dark btn-rounded btn-sm ml-lg-2 btn-cart">
                                                                    Get Query Now <i class="w-icon-shipping"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </article>
                                            <?php
                                                }
                                            } else {
                                                echo "<p style='color:red; text-align:center;'>No products found.</p>";
                                            }
                                            ?>
                                        </div>

                                        <!-- Pagination -->
                                        <div class="toolbox toolbox-pagination justify-content-between">
                                            <p class="showing-info mb-2 mb-sm-0">
                                                Showing <span><?php echo ($start + 1); ?>-<?php echo min($start + $products_per_page, $total_products); ?></span>
                                                of <?php echo $total_products; ?> Products
                                            </p>
                                            <ul class="pagination">
                                                <!-- Previous Page -->
                                                <li class="prev <?php echo ($page <= 1) ? 'disabled' : ''; ?>">
                                                    <a href="<?php echo ($page > 1) ? '?page=' . ($page - 1) : '#'; ?>" <?php echo ($page <= 1) ? 'tabindex="-1" aria-disabled="true"' : ''; ?>>
                                                        <i class="w-icon-long-arrow-left"></i>Prev
                                                    </a>
                                                </li>

                                                <!-- Page Numbers -->
                                                <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                                                    <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                                                        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                                    </li>
                                                <?php } ?>

                                                <!-- Next Page -->
                                                <li class="next <?php echo ($page >= $total_pages) ? 'disabled' : ''; ?>">
                                                    <a href="<?php echo ($page < $total_pages) ? '?page=' . ($page + 1) : '#'; ?>" <?php echo ($page >= $total_pages) ? 'tabindex="-1" aria-disabled="true"' : ''; ?>>
                                                        Next<i class="w-icon-long-arrow-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>




                                    </div>

                                    <div class="tab-pane active" id="tab-2">
                                        <div class="container">

                                            <div class="card shadow-sm border-0">
                                                <?php
// Start session to check login status
require 'config.php';

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

// Fetch the logged-in user's plan from `tbl_subscription_user`
$username = $_SESSION['username']; // Assuming username is stored in session after login
$userQuery = mysqli_query($conn, "SELECT plan_type FROM tbl_subscription_user WHERE username = '$username'");

if ($userQuery && mysqli_num_rows($userQuery) > 0) {
    $user = mysqli_fetch_assoc($userQuery);
    $plan = $user['plan_type'];
} else {
    $plan = 'Unknown Plan'; // Default if no plan is found
}

// Determine the buyer limit based on the user's plan
$buyerLimit = 0;

switch ($plan) {
    case 'Elite Plan':
        $buyerLimit = 1; // 1 buyer for Elite users
        break;
    case 'Platinum Plan':
        $buyerLimit = 2; // 2 buyers for Platinum users
        break;
    case 'Diamond Plan':
        $buyerLimit = 9999; // Show all buyers for Diamond users
        break;
    default:
        $buyerLimit = 0; // Default for unknown or no plan
        break;
}

// Get the search term if available
$searchTerm = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';

// Modify the query based on the search term
$query = "SELECT * FROM tbl_buyer WHERE heading LIKE '%$searchTerm%' ORDER BY CreatedAt DESC LIMIT $buyerLimit";

// Execute the query
$result = mysqli_query($conn, $query);

?>

<div>
    <h3>Buyers for <?php echo htmlspecialchars($plan); ?> </h3>

    <?php if (mysqli_num_rows($result) > 0) { ?>
        <?php while ($row = mysqli_fetch_array($result)) { ?>
            <div class="mb-4 p-3 rounded shadow" style="background-color: #f8f9fa;">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <img src="Adminstrator/img/<?php echo $row['flag']; ?>" alt="Product Image" style="width: 50px; height: 35px; margin-right: 8px;">
                    <h5 class="card-title mb-0 align-items-left">
                        <?php echo htmlspecialchars($row['heading']); ?>
                    </h5>
                    <span class="badge bg-warning text-dark fw-bold">VIP Buyer</span>
                </div>
                <p class="card-text text-muted mb-4">
                    <?php echo htmlspecialchars($row['passage']); ?>
                </p>
                <div class="row text-left">
                    <div class="col-md-3 col-6">
                        <div class="d-flex flex-column align-items-center">
                            <span class="buyer-head">
                                <h5>Buyer Company</h5>
                            </span>
                            <div class="post-cats-1 text-primary">
                                <?php echo htmlspecialchars($row['company_name']); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="d-flex flex-column align-items-center">
                            <span class="buyer-head">
                                <h5>Buyer Contact</h5>
                            </span>
                            <div class="post-cats-1 text-primary">
                                <?php echo htmlspecialchars($row['contact']); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="d-flex flex-column align-items-center">
                            <span class="buyer-head">
                                <h5>Buyer Name</h5>
                            </span>
                            <div class="post-cats-1 text-primary">
                                <?php echo htmlspecialchars($row['join_date']); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="d-flex flex-column align-items-center">
                            <div class="text-end mt-4">
                                <a href="login"> <button class="btn btn-primary">Quote now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>
        <p>No buyers available for your selected plan or no matching results found.</p>
    <?php } ?>
</div>




                                            </div>

                                        </div>






                                        <!-- Pagination Section -->

                                    </div>

                                    <div class="tab-pane" id="tab-3">
                                        <div class="product-wrapper row">
                                            <?php
                                            // Fetch products from database
                                            $query = mysqli_query($conn, "SELECT * FROM tbl_suppliers");
                                            ?>
                                            <div class="col-lg-12">
                                                <?php while ($row = mysqli_fetch_array($query)) { ?>
                                                    <div class="supplier-section mb-4 p-3 rounded" style="background-color: #f8f9fa;"> <!-- Added background color and bottom margin -->
                                                        <div class="row">
                                                            <div class="col-lg-2">
                                                                <img src="assets/images/demos/demo14/site-icon.svg" alt="Supplier Icon" srcset="" style="width: 100%; max-width: 70px;">
                                                            </div>
                                                            <div class="col-lg-10">
                                                                <h5 class="mb-2"><?php echo htmlspecialchars($row['suppliername']); ?></h5>
                                                                <div class="post-meta">
                                                                    <i class="w-icon-star-square-full"></i>
                                                                    <a href="#" class="post-author"><?php echo htmlspecialchars($row['points']); ?></a> &nbsp;&nbsp;
                                                                    <i class="w-icon-map-marker"></i>
                                                                    <a href="#" class="post-date"><?php echo htmlspecialchars($row['country']); ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row product-wrap mt-3">
                                                            <div class="col-lg-9">
                                                                <p><?php echo htmlspecialchars($row['CreatedAt']); ?></p>
                                                                <div class="post-meta">
                                                                    <a href="#" class="post-author">Business type-</a> &nbsp;&nbsp;
                                                                    <a href="#" class="post-date"><?php echo htmlspecialchars($row['business_type1']); ?> | <?php echo htmlspecialchars($row['business_type2']); ?></a>
                                                                    <br>
                                                                    <a href="#" class="post-author">Major Markets-</a> &nbsp;&nbsp;
                                                                    <a href="#" class="post-date">WorldWide | <?php echo htmlspecialchars($row['major_market']); ?></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 text-right mt-3">
                                                                <a href="contact-us" class="btn btn-dark btn-rounded btn-sm btn-cart" style="width: 100%;">
                                                                    View Suppliers <i class="w-icon-truck2"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>

                                        <div class="toolbox toolbox-pagination justify-content-between">
                                            <p class="showing-info mb-2 mb-sm-0">
                                                Showing<span>1-12 of 60</span>Products
                                            </p>
                                            <ul class="pagination">
                                                <li class="prev disabled">
                                                    <a href="#" aria-label="Previous" tabindex="-1"
                                                        aria-disabled="true">
                                                        <i class="w-icon-long-arrow-left"></i>Prev
                                                    </a>
                                                </li>
                                                <li class="page-item active">
                                                    <a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">2</a>
                                                </li>
                                                <li class="next">
                                                    <a href="#" aria-label="Next">
                                                        Next<i class="w-icon-long-arrow-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End of Main Content -->
                    </div>
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->
        <section style="background-color: #cccccc37;padding: 10px;">
            <div class="title-link-wrapper recent-view mb-6 after-none appear-animate">
                <h2 class="title mb-0 ls-normal appear-animate pb-1">&nbsp;&nbsp; Companies by country</h2>
                <a href="country" class="font-weight-bold font-size-normal ls-normal">
                    More Countries
                    <i class="w-icon-long-arrow-right"></i>
                </a>
            </div>
            <div class="swiper-container swiper-theme recent-view shadow-swiper appear-animate mb-6 pt-2 pb-2"
                data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 5
                                },
                                '992': {
                                    'slidesPerView': 6
                                },
                                '1200': {
                                    'slidesPerView': 10
                                }
                            }
                        }">
                <div class="row">
                    <div class="row cols-xl-12 cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                        <div class="vendor-brand-wrap mb-8">
                            <div class="vendor-brand">
                                <a href="country">
                                    <figure class="">
                                        <img src="assets\video\flags\ad.svg" alt="Brand" width="150"
                                            height="150" style="width: 50px;height: 50px;" />
                                    </figure>
                                    <h4 class="vendor-name">Andorra</h4>
                                </a>
                            </div>
                        </div>
                        <div class="vendor-brand-wrap mb-8">
                            <div class="vendor-brand">
                                <a href="country">
                                    <figure class="">
                                        <img src="assets\video\flags\az.svg" alt="Brand" width="150"
                                            height="150" style="width: 50px;height: 50px;" />
                                    </figure>
                                    <h4 class="vendor-name">Azerbaijan</h4>
                                </a>
                            </div>
                        </div>
                        <div class="vendor-brand-wrap mb-8">
                            <div class="vendor-brand">
                                <a href="country">
                                    <figure class="">
                                        <img src="assets\video\flags\af.svg" alt="Brand" width="150"
                                            height="150" style="width: 50px;height: 50px;" />
                                    </figure>
                                    <h4 class="vendor-name">Afghanistan</h4>
                                </a>
                            </div>
                        </div>
                        <div class="vendor-brand-wrap mb-8">
                            <div class="vendor-brand">
                                <a href="country">
                                    <figure class="">
                                        <img src="assets\video\flags\aw.svg" alt="Brand" width="150"
                                            height="150" style="width: 50px;height: 50px;" />
                                    </figure>
                                    <h4 class="vendor-name">Aruba</h4>
                                </a>
                            </div>
                        </div>
                        <div class="vendor-brand-wrap mb-8">
                            <div class="vendor-brand">
                                <a href="country">
                                    <figure class="">
                                        <img src="assets\video\flags\ai.svg" alt="Brand" width="150"
                                            height="150" style="width: 50px;height: 50px;" />
                                    </figure>
                                    <h4 class="vendor-name">Anguilla</h4>
                                </a>
                            </div>
                        </div>
                        <div class="vendor-brand-wrap mb-8">
                            <div class="vendor-brand">
                                <a href="country">
                                    <figure class="">
                                        <img src="assets\video\flags\al.svg" alt="Brand" width="150"
                                            height="150" style="width: 50px;height: 50px;" />
                                    </figure>
                                    <h4 class="vendor-name">Albania</h4>
                                </a>
                            </div>
                        </div>
                        <div class="vendor-brand-wrap mb-8">
                            <div class="vendor-brand">
                                <a href="country">
                                    <figure class="">
                                        <img src="assets\video\flags\am.svg" alt="Brand" width="150"
                                            height="150" style="width: 50px;height: 50px;" />
                                    </figure>
                                    <h4 class="vendor-name">Armenia</h4>
                                </a>
                            </div>
                        </div>
                        <div class="vendor-brand-wrap mb-8">
                            <div class="vendor-brand">
                                <a href="country">
                                    <figure class="">
                                        <img src="assets\video\flags\ao.svg" alt="Brand" width="150"
                                            height="150" style="width: 50px;height: 50px;" />
                                    </figure>
                                    <h4 class="vendor-name">Angola</h4>
                                </a>
                            </div>
                        </div>
                        <div class="vendor-brand-wrap mb-8">
                            <div class="vendor-brand">
                                <a href="country">
                                    <figure class="">
                                        <img src="assets\video\flags\aq.svg" alt="Brand" width="150"
                                            height="150" style="width: 50px;height: 50px;" />
                                    </figure>
                                    <h4 class="vendor-name">Antarctica</h4>
                                </a>
                            </div>
                        </div>
                        <div class="vendor-brand-wrap mb-8">
                            <div class="vendor-brand">
                                <a href="country">
                                    <figure class="">
                                        <img src="assets\video\flags\ar.svg" alt="Brand" width="150"
                                            height="150" style="width: 50px;height: 50px;" />
                                    </figure>
                                    <h4 class="vendor-name">Argentina</h4>
                                </a>
                            </div>
                        </div>
                        <div class="vendor-brand-wrap mb-8">
                            <div class="vendor-brand">
                                <a href="country">
                                    <figure class="">
                                        <img src="assets\video\flags\as.svg" alt="Brand" width="150"
                                            height="150" style="width: 50px;height: 50px;" />
                                    </figure>
                                    <h4 class="vendor-name">American Samoa</h4>
                                </a>
                            </div>
                        </div>
                        <div class="vendor-brand-wrap mb-8">
                            <div class="vendor-brand">
                                <a href="country">
                                    <figure class="">
                                        <img src="assets\video\flags\at.svg" alt="Brand" width="150"
                                            height="150" style="width: 50px;height: 50px;" />
                                    </figure>
                                    <h4 class="vendor-name">Austria</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->

                    <!-- End of Product Wrap -->
                </div>
            </div>

        </section>
        <!-- Start of Footer -->
        <?php include 'footer.php'; ?>
    </div>
    <!-- End of Mobile Menu -->

    <!-- Start of Quick View -->
    <div class="product product-single product-popup">
        <div class="row gutter-lg">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="product-gallery product-gallery-sticky mb-0">
                    <div class="product-single-swiper swiper-container swiper-theme nav-inner row cols-1 gutter-no">
                        <figure class="product-image">
                            <img src="assets/images/products/popup/1-440x494.jpg"
                                data-zoom-image="assets/images/products/popup/1-800x900.jpg"
                                alt="Water Boil Black Utensil" width="800" height="900">
                        </figure>
                        <figure class="product-image">
                            <img src="assets/images/products/popup/2-440x494.jpg"
                                data-zoom-image="assets/images/products/popup/2-800x900.jpg"
                                alt="Water Boil Black Utensil" width="800" height="900">
                        </figure>
                        <figure class="product-image">
                            <img src="assets/images/products/popup/3-440x494.jpg"
                                data-zoom-image="assets/images/products/popup/3-800x900.jpg"
                                alt="Water Boil Black Utensil" width="800" height="900">
                        </figure>
                        <figure class="product-image">
                            <img src="assets/images/products/popup/4-440x494.jpg"
                                data-zoom-image="assets/images/products/popup/4-800x900.jpg"
                                alt="Water Boil Black Utensil" width="800" height="900">
                        </figure>
                    </div>
                    <div class="product-thumbs-wrap">
                        <div class="product-thumbs">
                            <div class="product-thumb active">
                                <img src="assets/images/products/popup/1-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                            <div class="product-thumb">
                                <img src="assets/images/products/popup/2-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                            <div class="product-thumb">
                                <img src="assets/images/products/popup/3-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                            <div class="product-thumb">
                                <img src="assets/images/products/popup/4-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                        </div>
                        <button class="thumb-up disabled"><i class="w-icon-angle-left"></i></button>
                        <button class="thumb-down disabled"><i class="w-icon-angle-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 overflow-hidden p-relative">
                <div class="product-details scrollable pl-0">
                    <h2 class="product-title">Electronics Black Wrist Watch</h2>
                    <div class="product-bm-wrapper">
                        <figure class="brand">
                            <img src="assets/images/products/brand/brand-1.jpg" alt="Brand" width="102" height="48" />
                        </figure>
                        <div class="product-meta">
                            <div class="product-categories">
                                Category:
                                <span class="product-category"><a href="#">Electronics</a></span>
                            </div>
                            <div class="product-sku">
                                SKU: <span>MS46891340</span>
                            </div>
                        </div>
                    </div>

                    <hr class="product-divider">

                    <div class="product-price">$40.00</div>

                    <div class="ratings-container">
                        <div class="ratings-full">
                            <span class="ratings" style="width: 80%;"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <a href="#" class="rating-reviews">(3 Reviews)</a>
                    </div>

                    <div class="product-short-desc">
                        <ul class="list-type-check list-style-none">
                            <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                            <li>Volutpat ac tincidunt vitae semper quis lectus.</li>
                            <li>Aliquam id diam maecenas ultricies mi eget mauris.</li>
                        </ul>
                    </div>

                    <hr class="product-divider">

                    <div class="product-form product-variation-form product-color-swatch">
                        <label>Color:</label>
                        <div class="d-flex align-items-center product-variations">
                            <a href="#" class="color" style="background-color: #ffcc01"></a>
                            <a href="#" class="color" style="background-color: #ca6d00;"></a>
                            <a href="#" class="color" style="background-color: #1c93cb;"></a>
                            <a href="#" class="color" style="background-color: #ccc;"></a>
                            <a href="#" class="color" style="background-color: #333;"></a>
                        </div>
                    </div>
                    <div class="product-form product-variation-form product-size-swatch">
                        <label class="mb-1">Size:</label>
                        <div class="flex-wrap d-flex align-items-center product-variations">
                            <a href="#" class="size">Small</a>
                            <a href="#" class="size">Medium</a>
                            <a href="#" class="size">Large</a>
                            <a href="#" class="size">Extra Large</a>
                        </div>
                        <a href="#" class="product-variation-clean">Clean All</a>
                    </div>

                    <div class="product-variation-price">
                        <span></span>
                    </div>

                    <div class="product-form">
                        <div class="product-qty-form">
                            <div class="input-group">
                                <input class="quantity form-control" type="number" min="1" max="10000000">
                                <button class="quantity-plus w-icon-plus"></button>
                                <button class="quantity-minus w-icon-minus"></button>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-cart">
                            <i class="w-icon-cart"></i>
                            <span>Add to Cart</span>
                        </button>
                    </div>

                    <div class="social-links-wrapper">
                        <div class="social-links">
                            <div class="social-icons social-no-color border-thin">
                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                            </div>
                        </div>
                        <span class="divider d-xs-show"></span>
                        <div class="product-link-wrapper d-flex">
                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"></a>
                            <a href="#" class="btn-product-icon btn-compare btn-icon-left w-icon-compare"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Quick view -->

    <!-- Plugin JS File -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery.plugin/jquery.plugin.min.js"></script>
    <script src="assets/vendor/sticky/sticky.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor/jquery.gmap/jquery.gmap.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key="></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // JavaScript to dynamically update subcategory options based on selected main category
        const mainCategorySelect = document.getElementById('main_category');
        const subCategorySelect = document.getElementById('sub_category');

        const subcategories = {
            "Agriculture": ["Agriculture Machinery & Equipment", "Agriculture Fertilizers & Pesticides", "Agriculture Products", "Flowers & Plants Related Products"],
            "Food & Beverages": ["Alcoholic Beverages Tobacco & Related Products", "Bar Products", "Seafood Supplies", "Livestock & Animal Products", "Processed Food"],
            "Construction & real estate": ["Building Material & Equipment", "Elevators & Escalators", "Glass & Ceramics Related Products", "Heating, Air Conditioner & Ventilation", " Wood and Lumber"],
            "Electronic & Electrical": [" Computer Peripherals & Software", "Electric Circuit Components & Accessories", " Networking & Communications Devices"],
            "Apparel and fashion accessories": ["Cosmetics Products", "Gems &amp; Jewellery", "Garment &amp; Fashion Accessories", " Digital, Analog Watches &amp; Clocks"],
            "Home furnishing & supplies": ["Carpets, Rugs & Floorings", " Home Furniture & Interior Decoration", "Household Merchandise", "Commercial & Office Furniture"],
            "Industrial goods & chemical": ["Jute Raw Material & Machinery", "Chemicals & Allied Products", "Packaging Products", "Industrial Supplies", "Industrial Machinery"],
            "Minerals & Metals": ["Metal & Metal Products", "Ores & Minerals"],
            "Miscellaneous": ["Paper & Paper Products", " Automobile & Auto Accessories", "Fuel &amp; Energy Resources", "Plastic Products", "Hotel & Restaurant - Equipments Products"]



        };

        mainCategorySelect.addEventListener('change', function() {
            const selectedCategory = mainCategorySelect.value;
            subCategorySelect.innerHTML = '<option value="">Sub Category</option>'; // Reset subcategory options

            if (subcategories[selectedCategory]) {
                subcategories[selectedCategory].forEach(subCat => {
                    const option = document.createElement('option');
                    option.value = subCat;
                    option.textContent = subCat;
                    subCategorySelect.appendChild(option);
                });
            }
        });
    </script>
</body>


</html>