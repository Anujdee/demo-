<?php
// Include database connection
include('config.php');

// Fetch search query if provided
$search_query = isset($_GET['search']) ? trim($_GET['search']) : '';

// Prepare SQL query
if (!empty($search_query)) {
    // Search query with ordering by CreatedAt
    $stmt = $conn->prepare("SELECT * FROM tbl_product 
                            WHERE product_name LIKE ? OR main_cat LIKE ? OR sub_cat LIKE ? 
                            ORDER BY CreatedAt DESC 
                            LIMIT 12");
    $search_term = '%' . $search_query . '%';
    $stmt->bind_param("sss", $search_term, $search_term, $search_term);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    // Default query with ordering by CreatedAt
    $result = $conn->query("SELECT * FROM tbl_product ORDER BY CreatedAt DESC LIMIT 12");
}
?>


    <?php
include "config.php";
if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    $name = $_POST['p-name'];
    $quantity = $_POST['p-quantity'];
    $piece = $_POST['p-piece'];
    $terms = $_POST['p-terms'];
    $payment = $_POST['p-payment'];
    $about = $_POST['about'];
    $sql = mysqli_query($conn, "INSERT INTO `tbl_enquiry` (`p_name`, `user_number`, `p_quantity`, `p_Piece`, `p_Terms`, `p_payments`, `p_about`) 
    VALUES ('$name', '$number', '$quantity', '$piece', '$terms','$payment', '$about') 
    ON DUPLICATE KEY UPDATE 
    `p_name` = '$name', `user_number` = '$number', `p_quantity` = '$quantity', `p_Piece` = '$piece', `p_Terms` = '$terms', `p_payments` = '$payment'");

    if ($sql) {
        echo "<script>alert('Your detail submitted');window.location.href='index';</script>";
    } else {
        echo "error" . mysqli_error($conn);
    }
}


if (isset($_POST['submit1'])) {

    $clientname = $_POST['clientname'];
    $clientmail = $_POST['clientmail'];
    $clientcountry = $_POST['clientcountry'];
    $clientcity = $_POST['clientcity'];
    $countrycode = $_POST['countrycode'];
    $clientphone = $_POST['clientphone'];
    $clientproduct = $_POST['clientproduct'];
    $clientquantity = $_POST['clientquantity'];
    $clientpiece = $_POST['clientpiece'];


    $sql = mysqli_query($conn, "INSERT INTO `tbl_quotes` (`fullname`,`email`,`country`,`state`,`code`,`number`,`product_name`,`product_quantity`,`product_piece`)
     VALUES ('$clientname','$clientmail','$clientcountry','$clientcity','$countrycode','$clientphone','$clientproduct','$clientquantity','$clientpiece')");
    if ($sql) {
        echo "<script>alert('Your product detail has been submitted !');window.location.href='index';</script>";
    } else {
        echo "error" . mysqli_error($conn);
    }

    // if(move_uploaded_file($tempname, $folder)){
    //     echo "<script>alert('Your image has been submitted !');window.location.href='index';</script>";
    // } else {
    //     echo "<h2>File not Uploaded</h2>";
    // }


}


?>


        <!DOCTYPE html>
        <html lang="en">
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

            <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
            <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin="anonymous">
            <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
            <link rel="preload" href="assets/fonts/wolmart87d5.ttf?png09e" as="font" type="font/ttf" crossorigin="anonymous">

            <!-- Vendor CSS -->
            <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">

            <!-- Plugins CSS -->
            <link rel="stylesheet" type="text/css" href="assets/vendor/swiper/swiper-bundle.min.css">
            <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css">
            <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

            <!-- Default CSS -->
            <link rel="stylesheet" type="text/css" href="assets/css/demo14.min.css">
            <link rel="stylesheet" type="text/css" href="assets/css/alibaba-theme.css">
            <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
              <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />




            <script async src="https://www.googletagmanager.com/gtag/js?id=G-LDFNSHR99H"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                  function gtag(){dataLayer.push(arguments);}
                  gtag('js', new Date());
                
                  gtag('config', 'G-LDFNSHR99H');
            </script>

            <style>
                .form-control {
                    height: 40px;
                    border: 1px solid var(--primary);
                    border-radius: 3px;
                }
        
                .form .form-control {
                    margin-bottom: 5px;
                }
        
                input::placeholder {
                    color: gray;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    font-size: 14px;
                    font-weight: 200;
                }
        
                :root {
                    --primary: #ff6a00;
                    --primary-hover: #e65500;
                    --bg-overlay: rgba(0, 0, 0, 0.4);
                    --transition: all 0.3s ease;
                }
        
                .gdpr-consent {
                    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
                    position: fixed;
                    bottom: 2rem;
                    left: 50%;
                    transform: translateX(-50%) translateY(200%);
                    width: 90%;
                    max-width: 32rem;
                    background: white;
                    border-radius: 1rem;
                    box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
                    opacity: 0;
                    transition: var(--transition);
                    z-index: 1000;
                }
        
                .gdpr-consent.active {
                    transform: translateX(-50%) translateY(0);
                    opacity: 1;
                }
        
                .gdpr-content {
                    padding: 1.5rem;
                }
        
                .gdpr-header {
                    margin-bottom: 1rem;
                }
        
                .gdpr-title {
                    font-size: 1.25rem;
                    font-weight: 600;
                    color: #1f2937;
                    margin: 0 0 0.5rem 0;
                }
        
                .gdpr-description {
                    font-size: 0.875rem;
                    line-height: 1.5;
                    color: #4b5563;
                    margin: 0;
                }
        
                .gdpr-preferences {
                    margin: 1.5rem 0;
                }
        
                .preference-item {
                    display: flex;
                    align-items: center;
                    gap: 0.75rem;
                    margin-bottom: 0.75rem;
                }
        
                .switch {
                    position: relative;
                    display: inline-block;
                    width: 3rem;
                    height: 1.5rem;
                }
        
                .switch input {
                    opacity: 0;
                    width: 0;
                    height: 0;
                }
        
                .slider {
                    position: absolute;
                    cursor: pointer;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background-color: #e5e7eb;
                    transition: var(--transition);
                    border-radius: 1rem;
                }
        
                .slider:before {
                    position: absolute;
                    content: "";
                    height: 1.25rem;
                    width: 1.25rem;
                    left: 0.125rem;
                    bottom: 0.125rem;
                    background-color: white;
                    transition: var(--transition);
                    border-radius: 50%;
                }
        
                input:checked+.slider {
                    background-color: var(--primary);
                }
        
                input:checked+.slider:before {
                    transform: translateX(1.5rem);
                }
        
                .preference-label {
                    font-size: 0.875rem;
                    color: #4b5563;
                }
        
                .gdpr-actions {
                    display: flex;
                    gap: 1rem;
                    padding-top: 1rem;
                    border-top: 1px solid #e5e7eb;
                }
        
                .botn {
                    flex: 1;
                    padding: 0.75rem 1rem;
                    border-radius: 0.5rem;
                    font-size: 0.875rem;
                    font-weight: 500;
                    cursor: pointer;
                    transition: var(--transition);
                    border: none;
                }
        
                .botn-primary {
                    background-color: var(--primary);
                    color: white;
                }
        
                .botn-primary:hover {
                    background-color: var(--primary-hover);
                }
        
                .botn-secondary {
                    background-color: #f3f4f6;
                    border: 1.5px solid var(--primary);
                    color: #4b5563;
                }
        
                .botn-secondary:hover {
                    background-color: #e5e7eb;
                }
        
                .overlay {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: var(--bg-overlay);
                    opacity: 0;
                    visibility: hidden;
                    transition: var(--transition);
                    z-index: 999;
                }
        
                .overlay.active {
                    opacity: 1;
                    visibility: visible;
                }
        
                @media (max-width: 640px) {
                    .gdpr-actions {
                        flex-direction: column;
                    }
        
                    .gdpr-consent {
                        bottom: 0;
                        border-radius: 1rem 1rem 0 0;
                        max-width: 100%;
                    }
                }
        
                #sy-whatshelp {
                    right: 25px;
                    bottom: 25px;
                    position: fixed;
                    z-index: 9999;
                }
        
                #sy-whatshelp a {
                    position: relative;
                }
        
                #sy-whatshelp a.sywh-open-services {
                    background-color: var(--primary);
                    color: #fff;
                    line-height: 55px;
                    margin-top: 10px;
                    border: none;
                     margin-bottom: 60px;
                    cursor: pointer;
                    font-size: 23px;
                    width: 55px;
                    height: 55px;
                    text-align: center;
                    box-shadow: 2px 2px 8px -3px #000;
                    border-radius: 100%;
                    -webkit-border-radius: 100%;
                    -moz-border-radius: 100%;
                    -ms-border-radius: 100%;
                    display: inline-block;
                }
        
                #sy-whatshelp a.sywh-open-services i {
                    line-height: 55px;
                }
        
                #sy-whatshelp a.sywh-open-services i.fa-times {
                    display: none;
                }
        
                #sy-whatshelp .sywh-services {
                    width: 55px;
                    height: auto;
                }
        
                #sy-whatshelp .sywh-services a {
                    display: none;
                }
        
                #sy-whatshelp .sywh-services a i {
                    background-color: var(--primary);
                    color: #fff;
                    line-height: 55px;
                    margin-top: 10px;
                    border: none;
                    cursor: pointer;
                    font-size: 23px;
                    width: 55px;
                    height: 55px;
                    text-align: center;
                    box-shadow: 2px 2px 8px -3px #000;
                    border-radius: 100%;
                    -webkit-border-radius: 100%;
                    -moz-border-radius: 100%;
                    -ms-border-radius: 100%;
                }
        
                #sy-whatshelp .sywh-services a.email i {
                    background-color: #b92b27;
                }
        
                #sy-whatshelp .sywh-services a.instagram i {
                    background-color: #e4405f;
                }
        
                #sy-whatshelp .sywh-services a.messenger i {
                    background-color: #0084ff;
                }
        
                #sy-whatshelp .sywh-services a.whatsapp i {
                    background-color: #25d366;
                }
        
                #sy-whatshelp .sywh-services a.call i {
                    background-color: var(--primary);
                }
        
                a[data-tooltip] {
                    position: relative;
                }
        
                a[data-tooltip]::before,
                a[data-tooltip]::after {
                    position: absolute;
                    display: none;
                    opacity: 0.85;
                    transition: all 0.3s ease-in-out;
                }
        
                a[data-tooltip]::before {
                    content: attr(data-tooltip);
                    background: #000;
                    color: #fff;
                    font-size: 13px;
                    padding: 7px 11px;
                    border-radius: 5px;
                    white-space: nowrap;
                    text-decoration: none;
                }
        
                a[data-tooltip]::after {
                    width: 0;
                    height: 0;
                    border: 6px solid transparent;
                    content: "";
                }
        
                a[data-tooltip]:hover::before,
                a[data-tooltip]:hover::after {
                    display: block;
                }
        
                a.sywh-open-services[data-tooltip]::before,
                a.sywh-open-services[data-tooltip]::after {
                    display: block;
                }
        
                a.data-tooltip-hide[data-tooltip]::before,
                a.data-tooltip-hide[data-tooltip]::after {
                    display: none !important;
                }
        
                a.sywh-open-services[data-tooltip][data-placement="left"]::before {
                    top: 11px;
                }
        
                a[data-tooltip][data-placement="left"]::before {
                    top: -7px;
                    right: 100%;
                    line-height: normal;
                    margin-right: 10px;
                }
        
                a[data-tooltip][data-placement="left"]::after {
                    border-left-color: #000;
                    border-right: none;
                    top: 50%;
                    right: 100%;
                    margin-top: -6px;
                    margin-right: 4px;
                }
        
                a[data-tooltip][data-placement="right"]::before {
                    top: -7px;
                    left: 100%;
                    line-height: normal;
                    margin-left: 10px;
                }
        
                a[data-tooltip][data-placement="right"]::after {
                    border-right-color: #000;
                    border-left: none;
                    top: 50%;
                    left: 100%;
                    margin-top: -6px;
                    margin-left: 4px;
                }
        
                a[data-tooltip][data-placement="top"]::before {
                    bottom: 100%;
                    left: 0;
                    margin-bottom: 10px;
                }
        
                a[data-tooltip][data-placement="top"]::after {
                    border-top-color: #000;
                    border-bottom: none;
                    bottom: 100%;
                    left: 10px;
                    margin-bottom: 4px;
                }
        
                a[data-tooltip][data-placement="bottom"]::before {
                    top: 100%;
                    left: 0;
                    margin-top: 10px;
                }
        
                a[data-tooltip][data-placement="bottom"]::after {
                    border-bottom-color: #000;
                    border-top: none;
                    top: 100%;
                    left: 10px;
                    margin-top: 4px;
                }
                 .swiper {
                    width: 100%;
                    max-width: 900px;
                    height: 400px;
                    margin: auto;
                    overflow: hidden;
                    border-radius: 10px;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
                }
        
                /* Style the slides */
                .swiper-slide {
                    background-size: cover;
                    background-position: center;
                }
        
                /* Center pagination dots */
                .swiper-pagination {
                    position: absolute;
                    bottom: 10px;
                    text-align: center;
                }
                 .deals-section {
                    background: #fddc5c;
                    text-align: center;
                    padding: 40px 20px;
                }
                .deals-section h2 {
                    font-size: 24px;
                    font-weight: bold;
                    color: #000;
                }
                .deals-section p {
                    margin: 10px 0;
                    font-size: 16px;
                    color: #333;
                }
                .amount {
                    font-size: 30px;
                    font-weight: bold;
                    background: #ffcc00;
                    padding: 10px 20px;
                    display: inline-block;
                    margin: 20px 0;
                }
                .slider-container {
                    position: relative;
                    max-width: 100%;
                    overflow: hidden;
                    margin: auto;
                }
                .slider {
                    display: flex;
                    transition: transform 0.5s ease-in-out;
                }
                .slide {
                    min-width: 25%;
                    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
                    margin: 10px;
                    background: #fff;
                    border-radius: 10px;
                    overflow: hidden;
                    text-align: left;
                }
                .slide img {
                    width: 100%;
                    display: block;
                }
                .slide-info {
                    padding: 10px;
                    background: #001f4d;
                    color: #fff;
                }
                .prev, .next {
                    position: absolute;
                    top: 50%;
                    transform: translateY(-50%);
                    background-color: rgba(0, 0, 0, 0.5);
                    color: white;
                    border: none;
                    padding: 10px;
                    cursor: pointer;
                    z-index: 10;
                    border-radius: 50%;
                }
                .prev { left: 10px; }
                .next { right: 10px; }
                @media (max-width: 768px) {
                    .slide { min-width: 50%; }
                }
                @media (max-width: 480px) {
                    .slide { min-width: 100%; }
                }
                .center-button {
                    margin-top: 20px;
                    padding: 10px 20px;
                    font-size: 16px;
                    font-weight: bold;
                    background: #001f4d;
                    color: #fff;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }
                .swiper {
      width: 100%;
      height: 400px;
    }
    .swiper-slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
      .ad-popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .ad-popup-overlay.active {
            display: flex;
            opacity: 1;
        }

        .ad-popup-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.3);
            width: 90%;
            max-width: 600px;
            position: relative;
            transform: scale(0.9);
            transition: transform 0.3s ease;
            overflow: hidden;
        }

        .ad-popup-overlay.active .ad-popup-container {
            transform: scale(1);
        }

        .ad-banner {
            width: 100%;
            display: block;
            cursor: default;
        }

        .ad-content {
            padding: 20px;
            text-align: center;
        }

        .ad-content h3 {
            color: #e74c3c;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .ad-content p {
            color: #7f8c8d;
            margin-bottom: 20px;
            font-size: 16px;
        }

        .ad-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }

        .ad-cta {
            display: inline-block;
            background-color: var(--primary);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 1px;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            flex: 1;
            min-width: 150px;
        }

        .ad-cta.secondary {
            background-color: #fff;
            color: var(--primary);
            border:2px solid var(--primary);
        }

        .ad-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .ad-cta.primary:hover {
            background-color: var(--primary-hover);
            box-shadow: 0 5px 15px rgba(255, 106, 0, 0.4);
        }

        .ad-cta.secondary:hover {
            background-color: var(--primary);
            color: #fff;
        }

        .ad-timer {
            color: #95a5a6;
            font-size: 12px;
            margin-top: 10px;
        }

        @media (max-width: 480px) {
            .ad-content {
                padding: 15px;
            }
            
            .ad-content h3 {
                font-size: 20px;
            }
            
            .ad-content p {
                font-size: 14px;
            }
            
            .ad-buttons {
                flex-direction: column;
                gap: 10px;
            }
            
            .ad-cta {
                width: 100%;
                padding: 10px 20px;
                font-size: 12px;
            }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .special-offer {
            animation: pulse 2s infinite;
            color: #e74c3c;
            font-weight: bold;
        }
            </style>
        </head>

        <body class="home">
            <div class="overlay"></div>

            <div id="sy-whatshelp">
                <div class="sywh-services">
                    <a href="contact-us" class="messenger" data-tooltip="Livechat" data-placement="left">
                        <i class="fa fa-comments"></i>
                    </a>
                    <a href="https://wa.me/917351042162" class="whatsapp" data-tooltip="WhatsApp" data-placement="left" target="_blank">
                        <i class="fa fa-whatsapp"></i>
                    </a>
                    <a href="tel:917351042162" class="call" data-tooltip="Call" data-placement="left">
                        <i class="fa fa-phone"></i>
                    </a>
                </div>
                <a class="sywh-open-services" data-tooltip="Contact Us" data-placement="left">
                    <i class="fa fa-comments"></i>
                    <i class="fa fa-times"></i>
                </a>
            </div>
            <div class="page-wrapper">
                <h1 class="d-none">Build Your Amazing Marketplace With Global Connection21</h1>

                <!-- Start of Header -->
                <header class="header">
                    <div class="header-top">
                        <div class="container">
                            <div class="header-left">
                                <p class="welcome-msg">Build Your Amazing Marketplace With Global Connection21</p>
                            </div>

                            <div class="header-right">
                                <!-- <p class="welcome-msg" style="color: #ffcc01;font-weight:700"> Build Your Amazing Marketplace With Global Connection2</p> -->

                                <!-- End of Dropdown Menu -->
                                <span class="divider d-lg-show"></span>
                                <a href="blog" class="d-lg-show">News</a>
                                <a href="certificate" class="d-lg-show"><i class="w-icon-honour"></i> Trust Certificate</a>
                                <a href="about-us" class="d-lg-show">About Us</a>
                                <a href="requirement" class="d-lg-show">
                                    <i class="w-icon-exclamation-circle"></i> Need Help
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Header Top -->

                    <div class="header-middle">
                        <div class="container">
                            <div class="header-left mr-md-4">
                                <a href="#" class="mobile-menu-toggle  w-icon-hamburger">
                                </a>
                                <a href="index" class="logo ml-lg-0">
                                    <img src="assets\images\demos\demo14\2.svg" alt="logo" width="230" height="45" />
                                </a>
                                <nav class="main-nav">
                                    <ul class="menu">
                                        <li class="active">
                                            <a href="Subscription">Advertise with us</a>
                                        </li>
                                        <li>
                                            <a href="index">Home</a>

                                        </li>
                                        <li>
                                            <a href="product">Products</a>

                                        </li>
                                        <li>
                                            <a href="buyer">Buyers</a>

                                        </li>
                                        <li>
                                            <a href="supplier">Suppliers</a>

                                        </li>
                                        <li>
                                            <a href="contact-us">Contact</a>

                                        </li>
                                        <li>
                                            <a href="about-us">About</a>

                                        </li>
                                        <li>
                                            <a href="signin">Register</a>

                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right ml-4">

                                <span class="divider mr-6 d-xl-show"></span>
                                <!-- <a class="wishlist label-down link d-xs-show" href="login">
                            <i class="w-icon-plus"></i>
                            <span class="wishlist-label d-lg-show">Login</span>
                        </a> -->
                                <!-- <a class="compare label-down link d-xs-show" href="faq">
                            <i class="w-icon-headphone">
                            </i>
                            <span class="cart-label">Support</span>

                        </a> -->
                                <div class="account align-items-center d-sm-show">
                                    <a class="login inline-type d-flex ls-normal" href="my-account-login">
                                        <i class="w-icon-account d-flex align-items-center justify-content-center br-50"></i>
                                        <span class="d-flex flex-column justify-content-center ml-3 d-xl-show">Account
                                    <b class="d-block font-weight-bold ls-25">Log In</b>
                                </span>
                                    </a>
                                </div>
                                <!-- <div class="  cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                            <div class="cart-overlay"></div>
                            <a href="signin" label-down link">
                                <i class="w-icon-account"></i>
                                <span class="cart-label">Register</span>
                            </a>
                             
                           
                        </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- End of Header Middle -->

                    <div class="header-bottom sticky-content fix-top sticky-header has-dropdown">
                        <div class="container">
                            <div class="inner-wrap">
                                <div class="header-left flex-1">
                                    <div class="dropdown category-dropdown show-dropdown" data-visible="true">
                                        <a href="#" class="category-toggle text-white" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-display="static" title="All Departments">
                                            <i class="w-icon-category"></i>
                                            <span>All Categories</span>
                                        </a>
                                        <div class="dropdown-box">
                                            <ul class="menu vertical-menu category-menu menu-item">
                                                <li>
                                                    <a href="product">
                                                        <i class="w-icon-sofa"></i> Miscellaneous

                                                    </a>
                                                    <ul class="megamenu type2" style="overflow-y: auto;">
                                                        <li class="row">
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Paper &amp; Paper Products</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li><a href="product">Absorbent
                                                                    Paper</a></li>
                                                                    <li><a href="product">Adhesive
                                                                    Paper</a></li>
                                                                    <li><a href="product">Air
                                                                    Filter Paper</a></li>
                                                                    <li><a href="product">Anti
                                                                    Rust Paper</a></li>
                                                                    <li><a href="product">Art
                                                                    Paper</a></li>
                                                                    <li><a href="product"><b>See more</b></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Plastic Products</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li><a href="product">Bio-Degradable
                                                                    Plastic
                                                                    Product</a></li>
                                                                    <li><a href="product">Extrusion
                                                                    Plants</a></li>
                                                                    <li><a href="product">Injection
                                                                    Moulded Products</a>
                                                                    </li>
                                                                    <li><a href="product">Injection
                                                                    Moulding
                                                                    Machinery</a></li>
                                                                    <li><a href="product">Plastic
                                                                    Items</a></li>
                                                                    <li><a href="product"><b>See more</b></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Automobile &amp; Auto
                                                            Accessories</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li><a href="product">Aeroplane
                                                                    Models</a></li>
                                                                    <li><a href="product">Aerospace
                                                                    -
                                                                    Commercial &amp; Military</a></li>
                                                                    <li><a href="product">Aircraft</a>
                                                                    </li>
                                                                    <li><a href="product">Aircraft
                                                                    &amp; Aerospace</a>
                                                                    </li>
                                                                    <li><a href="product">Aircraft
                                                                    Engines &amp;
                                                                    Spares</a></li>
                                                                    <li><a href="product"><b>See more</b></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Fuel &amp; Energy Resources</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li><a href="product">Anthracite
                                                                    Coal</a></li>
                                                                    <li><a href="product">Bamboo
                                                                    Charcoal</a></li>
                                                                    <li><a href="product">Bituminous
                                                                    Coal</a></li>
                                                                    <li><a href="product">Briquette</a>
                                                                    </li>
                                                                    <li><a href="product">Charcoal</a>
                                                                    </li>
                                                                    <li><a href="product"><b>See more</b></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Hotel &amp;
                                                            Restaurant - Equipments &amp; Products</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li class="go-back"> <a href="product">Clothing</a></li>
                                                                    <li><a href="product">Catering
                                                                    Equipments</a></li>
                                                                    <li><a href="product"><b>See more</b></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Medical &amp; HealthCare</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li><a href="product">1
                                                                    Ply Face Mask</a></li>
                                                                    <li><a href="product">2
                                                                    Ply Face Mask</a></li>
                                                                    <li><a href="product">3
                                                                    Ply Face Mask</a></li>
                                                                    <li><a href="product">4
                                                                    Ply Face Mask</a></li>
                                                                    <li><a href="product">5
                                                                    Ply Face Mask</a></li>
                                                                    <li><a href="product"><b>See more</b></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Pollution Control
                                                            Equipments</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li class="go-back"> <a href="product">Clothing</a></li>
                                                                    <li><a href="product">Air
                                                                    Filters</a></li>
                                                                    <li><a href="product">Air
                                                                    Fresheners</a></li>
                                                                    <li><a href="product"><b>See more</b></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Safety &amp; Security
                                                            Equipment</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li>
                                                                        <a href="product"></a>
                                                                    </li>
                                                                    <li><a href="product">Army
                                                                    &amp; Police
                                                                    Equipment</a></li>
                                                                    <li><a href="product">CCTV
                                                                    &amp; Accessories</a></li>
                                                                    <li><a href="product">Fire
                                                                    Extinguishers
                                                                    &amp; Products</a></li>
                                                                    <li><a href="product">Surveillance
                                                                    Equipments</a></li>
                                                                    <li><a href="product"><b>See more</b></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Books,
                                                            Music &amp; Entertainment</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li><a href="product">Accordion</a>
                                                                    </li>
                                                                    <li><a href="product">Acoustic
                                                                    Guitar</a>
                                                                    </li>
                                                                    <li><a href="product">Books,
                                                                    Textbooks &amp; Magazines</a></li>
                                                                    <li><a href="product">Clarinet</a>
                                                                    </li>
                                                                    <li><a href="product">Dholak</a>
                                                                    </li>
                                                                    <li><a href="product"><b>See more</b></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Fitness Equipment &amp;
                                                            Sports Goods</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li><a href="product">Acupressure
                                                                    And Massage Balls</a></li>
                                                                    <li><a href="product">Acupressure
                                                                    Rollers</a>
                                                                    </li>
                                                                    <li><a href="product">Archery
                                                                    Accessories</a>
                                                                    </li>
                                                                    <li><a href="product">Archery
                                                                    Arrows</a></li>
                                                                    <li><a href="product">Archery
                                                                    Bows</a></li>
                                                                    <li><a href="product"><b>See more</b></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Gifts &amp; Decorative</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li><a href="product">Artificial
                                                                    Flower</a></li>
                                                                    <li><a href="product">Brass
                                                                    Handicrafts</a></li>
                                                                    <li><a href="product">Candle
                                                                    Holder</a></li>
                                                                    <li><a href="product">Candles</a>
                                                                    </li>
                                                                    <li><a href="product">Christmas
                                                                    Tree &amp;
                                                                    Decoratives</a></li>
                                                                    <li><a href="product"><b>See more</b></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Pets &amp; Pet Supplies</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li><a href="product">Animal
                                                                    Food</a></li>
                                                                    <li><a href="product">Aquariums
                                                                    &amp; Equipments</a></li>
                                                                    <li><a href="product">Dog
                                                                    Clothing &amp; Strapping</a>
                                                                    </li>
                                                                    <li><a href="product">Horse
                                                                    Equipments, Saddles
                                                                    &amp; Tacks</a></li>
                                                                    <li><a href="product">Pet
                                                                    Cages</a></li>
                                                                    <li><a href="product"><b>See more</b></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title"> Photographic &amp; Optical
                                                            Equipment</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li><a href="product">Optical
                                                                    Brightening Agent</a></li>
                                                                    <li><a href="product">Optical
                                                                    Lenses</a></li>
                                                                    <li><a href="product">Optical
                                                                    Machinery &amp; Equipment</a></li>
                                                                    <li><a href="product">Photo
                                                                    Film Roll</a></li>
                                                                    <li><a href="product">Photographic
                                                                    Equipment</a></li>
                                                                    <li><a href="product"><b>See more</b></a>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                        </li>

                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="product">
                                                        <i class="w-icon-social"></i>Industrial goods &amp; chemical
                                                    </a>
                                                    <ul class="megamenu type2" style="overflow-y: auto;">
                                                        <li class="row">
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Jute Raw Material
                                                            &amp; Machinery</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li><a href="product">Coir
                                                                    Fibers</a></li>
                                                                    <li><a href="product">Coir
                                                                    Machinery</a>
                                                                    </li>
                                                                    <li><a href="product">Coir
                                                                    Mat</a></li>
                                                                    <li><a href="product">Coir
                                                                    Yarn</a></li>
                                                                    <li><a href="product">Jute
                                                                    Boards</a></li>
                                                                    <li><a href="product"><b>See
                                                                        more</b></a></li>

                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Chemicals &amp;
                                                            Allied Products</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li><a href="product">Aluminum
                                                                    Oxide</a>
                                                                    </li>
                                                                    <li><a href="product">Aluminum
                                                                    Sulfate</a>
                                                                    </li>
                                                                    <li><a href="product">Anionic
                                                                    Polyacrylamide</a></li>
                                                                    <li><a href="product">Aromatic
                                                                    Chemicals</a></li>
                                                                    <li><a href="">Azo
                                                                    Compounds</a></li>
                                                                    <li><a href="product"><b>See
                                                                        more</b></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Industrial Supplies</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li><a href="product">Abrasives</a>
                                                                    </li>
                                                                    <li><a href="product">Anchors</a>
                                                                    </li>
                                                                    <li><a href="product">Battery
                                                                    Scraps</a></li>
                                                                    <li><a href="product">Bearing</a>
                                                                    </li>
                                                                    <li><a href="product">Bolts</a>
                                                                    </li>
                                                                    <li><a href="product"><b>See
                                                                        more</b></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Industrial Machinery</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li><a href="product">CNC
                                                                    Machines
                                                                    &amp; Spare Parts</a></li>
                                                                    <li><a href="product">Dispensing
                                                                    Systems</a>
                                                                    </li>
                                                                    <li><a href="product">Extrusion
                                                                    Machines</a>
                                                                    </li>
                                                                    <li><a href="product">Heavy
                                                                    Machinery</a></li>
                                                                    <li><a href="product">Industrial
                                                                    Pumps</a></li>
                                                                    <li><a href="product"><b>See
                                                                        more</b></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Marine Equipment
                                                            &amp; Machinery</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li><a href="product">Boats
                                                                    &amp;
                                                                    Vessels</a></li>
                                                                    <li><a href="product">Marine
                                                                    Chemicals</a></li>
                                                                    <li><a href="product">Marine
                                                                    Engines</a>
                                                                    </li>
                                                                    <li><a href="product">Marine
                                                                    Equipments &amp; Spare Parts</a></li>
                                                                    <li><a href="">Marine
                                                                    Oil</a></li>
                                                                    <li><a href="product"><b>See
                                                                        more</b></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Non Metallic
                                                            Elements</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li><a href="product">Silicon</a>
                                                                    </li>
                                                                    <li><a href="product">Silicon
                                                                    Plates</a></li>
                                                                    <li><a href="product">Silicon
                                                                    Sealants</a>
                                                                    </li>
                                                                    <li><a href="product">Silicon
                                                                    Sheets</a></li>
                                                                    <li><a href="product">Silicon
                                                                    Tubes</a></li>
                                                                    <li><a href="product"><b>See
                                                                        more</b></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Petroleum, Oil
                                                            &amp; Related Products</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li><a href="product">Bitumen,
                                                                    Asphalt</a></li>
                                                                    <li><a href="product">Carbon</a>
                                                                    </li>
                                                                    <li><a href="product">Crude
                                                                    Oil</a></li>
                                                                    <li><a href="product">LPG/LNG
                                                                    &amp; CNG</a>
                                                                    </li>
                                                                    <li><a href="product">Lubricants</a>
                                                                    </li>
                                                                    <li><a href="product"><b>See
                                                                        more</b></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Power Plants</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li><a href="product">Power
                                                                    Plant Spares</a></li>
                                                                    <li><a href="product"><b>See
                                                                        more</b></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Refrigeration, Cold
                                                            Storage</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li><a href="product">Compressors</a>
                                                                    </li>
                                                                    <li><a href="product">Refrigerator
                                                                    Tubes</a></li>
                                                                    <li><a href="product"><b>See
                                                                        more</b></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Rubber &amp; Related
                                                            Items</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li><a href="product">Raw
                                                                    Rubber</a></li>
                                                                    <li><a href="product">Rubber
                                                                    Chemicals</a></li>
                                                                    <li><a href="product">Rubber
                                                                    Items</a></li>
                                                                    <li><a href="product">Rubber
                                                                    Machinery</a></li>
                                                                    <li><a href="product">Rubber
                                                                    Scrap</a></li>
                                                                    <li><a href="product"><b>See
                                                                        more</b></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Tools &amp; Instruments</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li><a href="product">Scientific
                                                                    Instruments</a></li>
                                                                    <li><a href="product">Tool
                                                                    Bags</a></li>
                                                                    <li><a href="product">Tool
                                                                    Box</a></li>
                                                                    <li><a href="product"><b>See
                                                                        more</b></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Raw &amp; Processed
                                                            Leather</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li><a href="product">Animal
                                                                    Leather</a></li>
                                                                    <li><a href="product">Bonded
                                                                    Leather</a></li>
                                                                    <li><a href="product">Buffalo
                                                                    Leather</a></li>
                                                                    <li><a href="product">Chamois
                                                                    Leather</a></li>
                                                                    <li><a href="product">Cow
                                                                    Leather</a></li>
                                                                    <li><a href="product"><b>See
                                                                        more</b></a></li>
                                                                </ul>
                                                            </div>


                                                        </li>

                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="product">
                                                        <i class="w-icon-tshirt"></i>Apparel & fashion Product
                                                    </a>
                                                    <ul class="megamenu type2" style="overflow-y: auto;height: 350px;">
                                                        <li class="row">
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title"> Suitcases, Briefcases &amp;
                                                            Bags</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li> <a href="product">Air Bags</a></li>
                                                                    <li> <a href="product">Backpacks</a></li>
                                                                    <li> <a href="product">Bags &amp; Baggage Accessories</a></li>
                                                                    <li> <a href="product">Briefcases</a></li>
                                                                    <li> <a href="product">Canvas Bags</a></li>
                                                                    <li> <a href="product"><b>See more</b></a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Cosmetics
                                                            Products</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li> <a href="product">Agarwood Oil (Oud Oil)</a></li>
                                                                    <li> <a href="product">Alcohol Based Hand Sanitizer</a></li>
                                                                    <li> <a href="product">Alcohol Disinfectant Wipes</a></li>
                                                                    <li> <a href="product">Antibacterial Hand Wash</a></li>
                                                                    <li> <a href="product">Antibacterial Wipes</a></li>
                                                                    <li> <a href="product"><b>See more</b></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Gems &amp;
                                                            Jewellery</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li> <a href="product">Amber Gemstones</a></li>
                                                                    <li> <a href="product">Aquamarine Gemstones</a></li>
                                                                    <li> <a href="product">Artificial Bracelets</a></li>
                                                                    <li> <a href="product">Artificial Earrings</a></li>
                                                                    <li> <a href="product">Artificial Jewellery</a></li>
                                                                    <li> <a href="product"><b>See more</b></a></li>
                                                                </ul>

                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Garment &amp; Fashion
                                                            Accessories</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li> <a href="product">Abaya</a></li>
                                                                    <li> <a href="product">Acrylic Yarn</a></li>
                                                                    <li> <a href="product">Aprons</a></li>
                                                                    <li> <a href="product">Wool Yarn</a></li>
                                                                    <li> <a href="product">Bath Towels</a></li>
                                                                    <li> <a href="product"><b>See more</b></a></li>
                                                                </ul>

                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Digital, Analog Watches
                                                            &amp; Clocks</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li> <a href="product">Clock Movements &amp; Parts</a></li>
                                                                    <li> <a href="product">Clocks</a></li>
                                                                    <li> <a href="product">Leather Watch Straps</a></li>
                                                                    <li> <a href="product">Smart Watches</a></li>
                                                                    <li> <a href="product">Solar Watches</a></li>
                                                                    <li> <a href="product"><b>See more</b></a></li>
                                                                </ul>

                                                            </div>



                                                        </li>

                                                    </ul>
                                                </li>

                                                <li>
                                                    <a href="product">
                                                        <i class="w-icon-rice-cooker"></i>Agriculture
                                                    </a>
                                                    <ul class="megamenu type2" style="overflow-y: auto;height: 300px;">
                                                        <li class="row">
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Agriculture Machinery
                                                            &amp; Equipment</h4>
                                                                <hr class="divider">
                                                                <ul>
                                                                    <li> <a href="product">Agriculture Farm Tractors</a></li>
                                                                    <li> <a href="product">Agriculture Grinders, Multures</a></li>
                                                                    <li> <a href="product">Agriculture Threshers</a></li>
                                                                    <li> <a href="product">Agriculture Bags</a></li>
                                                                    <li> <a href="product">Agriculture Choppers, Shredders &amp; Cutters</a></li>
                                                                    <li> <a href="product"><b>See more</b></a></li>
                                                                </ul>

                                                            </div>

                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title mt-1">Agriculture
                                                            Fertilizers &amp; Pesticides</h4>
                                                                <hr class="divider">
                                                                <ul>
                                                                    <li> <a href="product">Agriculture Seeds</a></li>
                                                                    <li> <a href="product">Bactericides</a></li>
                                                                    <li> <a href="product">DAP (Diammonium Phosphate)</a></li>
                                                                    <li> <a href="product">Fertilizers</a></li>
                                                                    <li> <a href="product">Flower Seeds</a></li>
                                                                    <li> <a href="product"><b>See more</b></a></li>
                                                                </ul>

                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Agriculture Products</h4>
                                                                <hr class="divider">
                                                                <ul>
                                                                    <li> <a href="product">1121 Basmati Rice</a></li>
                                                                    <li> <a href="product">Ajwa Dates</a></li>
                                                                    <li> <a href="product">Almonds</a></li>
                                                                    <li> <a href="product">Amaranth Seeds</a></li>
                                                                    <li> <a href="product">Apple</a></li>
                                                                    <li> <a href="product"><b>See more</b></a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title mt-1">Flowers And Plants Related Products</h4>
                                                                <hr class="divider">
                                                                <ul>
                                                                    <li> <a href="product">Aloe Vera</a></li>
                                                                    <li> <a href="product">Artificial Grass, Synthetic Turf</a></li>
                                                                    <li> <a href="product">Ashwagandha</a></li>
                                                                    <li> <a href="product">Basil Leaf</a></li>
                                                                    <li> <a href="product">Bitter Kola, Garcinia Kola</a></li>
                                                                    <li> <a href="product"><b>See more</b></a></li>
                                                                </ul>
                                                            </div>




                                                        </li>

                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="product">
                                                        <i class="w-icon-dish"></i>Food &amp; Beverages
                                                    </a>
                                                    <ul class="megamenu type2" style="overflow-y: auto;height: 250px;">
                                                        <li class="row">
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Alcoholic Beverages, Tobacco &amp; Related Products</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li> <a href="product">Beedies &amp; Beedi Leaves</a></li>
                                                                    <li> <a href="product">Beer Mugs</a></li>
                                                                    <li> <a href="product">Food Grade Alcohol</a></li>
                                                                    <li> <a href="product">Industrial Alcohol</a></li>
                                                                    <li> <a href="product">Raw Tobacco, Leaves &amp; Related Products</a></li>
                                                                    <li> <a href="product"><b>See more</b></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Bar Products</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li> <a href="product">Bar Bucket</a></li>
                                                                    <li> <a href="product">Bar Equipments</a></li>
                                                                    <li> <a href="product">Bar Glass Holder</a></li>
                                                                    <li> <a href="product">Bar Glasses &amp; Mugs</a></li>
                                                                    <li> <a href="product">Beer Mugs</a></li>
                                                                    <li> <a href="product"><b>See more</b></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Seafood Supplies</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li> <a href="product">Canned Fish</a></li>
                                                                    <li> <a href="product">Canned Seafood</a></li>
                                                                    <li> <a href="product">Crabs, Fillets, Lobsters &amp; Other Sea Creatures</a></li>
                                                                    <li> <a href="product">Dried Fish</a></li>
                                                                    <li> <a href="product">Dried Seafood</a></li>
                                                                    <li> <a href="product"><b>See more</b></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Livestock &amp; Animal Products</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li> <a href="product">Alfalfa Hay</a></li>
                                                                    <li> <a href="product">Animal &amp; Cattle Feed</a></li>
                                                                    <li> <a href="product">Animal By Products</a></li>
                                                                    <li> <a href="product">Bees By-Product &amp; Wax</a></li>
                                                                    <li> <a href="product">Canned Beef</a></li>
                                                                    <li> <a href="product"><b>See more</b></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Processed Food</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li> <a href="product">All Purpose Flour</a></li>
                                                                    <li> <a href="product">Arabic Gum</a></li>
                                                                    <li> <a href="product">Arabica Coffee</a></li>
                                                                    <li> <a href="product">Assam Tea</a></li>
                                                                    <li> <a href="product">Avocado Oil</a></li>
                                                                    <li> <a href="product"><b>See more</b></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <a href="product">
                                                        <i class="w-icon-bridge-lamp"></i> Electronic &amp; Electrical
                                                    </a>
                                                    <ul class="megamenu type2" style="overflow-y: auto;height: 250px;">
                                                        <li class="row">
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Computer Peripherals &amp; Software</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li> <a href="product">Computer CPU</a></li>
                                                                    <li> <a href="product">Accounting, Financial &amp; Banking Software</a></li>
                                                                    <li> <a href="product">CD-ROMs</a></li>
                                                                    <li> <a href="product">Communication Software</a></li>
                                                                    <li> <a href="product">Computer - Motherboards</a></li>
                                                                    <li> <a href="product"><b>See more</b></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Electric Circuit Components &amp; Accessories</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li> <a href="product">Adaptors</a></li>
                                                                    <li> <a href="product">Batteries &amp; Chargers</a></li>
                                                                    <li> <a href="product">Cable Assemblies</a></li>
                                                                    <li> <a href="product">Cable Glands &amp; Reels</a></li>
                                                                    <li> <a href="product">Capacitors</a></li>
                                                                    <li> <a href="product"><b>See more</b></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Networking &amp; Communications Devices</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li class="go-back"> <a href="product">Clothing</a></li>
                                                                    <li> <a href="product">Amplifiers</a></li>
                                                                    <li> <a href="product">ATM - Automated Teller Machines</a></li>
                                                                    <li> <a href="product">Audio &amp; Video Broadcasting Equipments</a></li>
                                                                    <li> <a href="product">Audio Amplifier &amp; Mixer</a></li>
                                                                    <li> <a href="product">Audio Cassette Parts</a></li>
                                                                    <li> <a href="product"><b>See more</b></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <a href="product">
                                                        <i class="w-icon-store"></i>Constructions &amp; Real Estate
                                                    </a>
                                                    <ul class="megamenu type2" style="overflow-y: auto;height: 250px;">
                                                        <li class="row">
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Building Material &amp; Equipment</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li> <a href="product">Aggregates</a></li>
                                                                    <li> <a href="product">Angles, Frames</a></li>
                                                                    <li> <a href="product">Bathroom Accessories</a></li>
                                                                    <li> <a href="product">Bathtubs</a></li>
                                                                    <li> <a href="product">Blocks, Tiles &amp; Slabs</a></li>
                                                                    <li> <a href="product"><b>See more</b></a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Glass &amp; Ceramics Related Products</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li> <a href="product">Ceramic Filters</a></li>
                                                                    <li> <a href="product">Ceramic Handicrafts</a></li>
                                                                    <li> <a href="product">Ceramic Kitchenware</a></li>
                                                                    <li> <a href="product">Ceramic Knobs</a></li>
                                                                    <li> <a href="product">Ceramic Raw Materials</a></li>
                                                                    <li> <a href="product"><b>See more</b></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Wood and Lumber</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li> <a href="product">Ash Wood</a></li>
                                                                    <li> <a href="product">Bamboo Products</a></li>
                                                                    <li> <a href="product">Chopsticks</a></li>
                                                                    <li> <a href="product">Eucalyptus Wood</a></li>
                                                                    <li> <a href="product">Lumber</a></li>
                                                                    <li> <a href="product"><b>See more</b></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-6">
                                                                <h4 class="menu-title">Elevators &amp; Escalators</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li> <a href="product"><b>See more</b></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>


                                                <li>
                                                    <a href="product">
                                                        <i class="w-icon-furniture"></i>Home Furnishing & Supplies
                                                    </a>
                                                    <ul class="megamenu type2" style="height: 250px;">
                                                        <li class="row">
                                                            <div class="col-md-3 col-lg-3 col-6">
                                                                <h4 class="menu-title">Furniture</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li> <a href="product">Sofas & Couches</a></li>
                                                                    <li> <a href="product">Armchairs</a></li>
                                                                    <li> <a href="product">Bed Frames</a></li>
                                                                    <li> <a href="product">Beside Tables</a></li>
                                                                    <li> <a href="product">Dressing Tables</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3 col-lg-3 col-6">
                                                                <h4 class="menu-title">Lighting</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li> <a href="product">Light Bulbs</a></li>
                                                                    <li> <a href="product">Lamps</a></li>
                                                                    <li> <a href="product">Celling Lights</a></li>
                                                                    <li> <a href="product">Wall Lights</a></li>
                                                                    <li> <a href="product">Bathroom Lighting</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3 col-lg-3 col-6">
                                                                <h4 class="menu-title">Home Accessories</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li> <a href="product">Decorative Accessories</a></li>
                                                                    <li> <a href="product">Candals & Holders</a></li>
                                                                    <li> <a href="product">Home Fragrance</a></li>
                                                                    <li> <a href="product">Mirrors</a></li>
                                                                    <li> <a href="product">Clocks</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3 col-lg-3 col-6">
                                                                <h4 class="menu-title">Home Accessories</h4>
                                                                <hr class="divider" />
                                                                <ul>
                                                                    <li> <a href="product">Decorative Accessories</a></li>
                                                                    <li> <a href="product">Candals & Holders</a></li>
                                                                    <li> <a href="product">Home Fragrance</a></li>
                                                                    <li> <a href="product">Mirrors</a></li>
                                                                    <li> <a href="product">Clocks</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <a href="product">
                                                        <i class="w-icon-ice-cream"></i>Ores and Minerals
                                                    </a>
                                                    <ul class="megamenu" style="width: 35rem;">
                                                        <li>
                                                            <h4 class="menu-title">Women</h4>
                                                            <hr class="divider">
                                                            <ul>
                                                                <li> <a href="product">Antimony Ore</a></li>
                                                                <li> <a href="product">Asbestos</a></li>
                                                                <li> <a href="product">Barite Ore</a></li>
                                                                <li> <a href="product">Bauxite &amp; Aluminium Ore</a></li>
                                                                <li> <a href="product">Bentonite</a></li>
                                                                <li> <a href="product"><b>See more</b></a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>






                                            </ul>
                                        </div>
                                    </div>
                                    <form method="get" action="" class="header-search hs-expanded hs-round bg-white br-xs d-md-flex input-wrapper mr-4 ml-4">
                                        <input type="text" class="form-control text-light border-no" name="search" id="search" placeholder="Search in..." value="<?php echo htmlspecialchars($search_query); ?>" required />

                                        <button class="btn btn-search" type="submit" style="border: none; background-color: var(--primary); color: white;">
                                            <i class="w-icon-search"></i>
                                    </form>
                                </div>
                                <div class="header-right ml-4">
                                    <a href="contact-us" class="d-xl-show" style="background-color:var(--primary);padding: 10px 5px;border-radius:3px"><i class="w-icon-gift"></i> &nbsp; Post Buy Requirement</a>
                                    <a href="product"> <i class="w-icon-sale"></i>Daily Deals</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- End of Header -->
                <!-- Start of Main -->
                <main class="main">
                    <div class="container pb-10 mb-2">
                        <div class="intro-wrapper mt-4">
                            <div class="row">
                                <div class="intro-slide-wrapper col-md-8 mb-4">
                                    <div class="swiper">
  <div class="swiper-wrapper">
    <?php
      $sql = "SELECT * FROM banners ORDER BY created_at DESC";
      $result = $conn->query($sql);
      while ($row = $result->fetch_assoc()) {
        // Updated image path
        echo '<div class="swiper-slide"><img src="Adminstrator/img/' . htmlspecialchars($row['banner']) . '" alt="Banner" ></div>';
      }
    ?>
  </div>

  <!-- Navigation buttons -->
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>

  <!-- Pagination -->
  <div class="swiper-pagination"></div>
</div>
                                </div>
                                <div class="intro-banner-wrapper col-md-4" style="background-color: #ffffff;">
                                    <div class="row">
                                        <h4 class="title mb-3" style="color: var(--primary);font-weight: 500;">What's Your Looking!</h4>
                                        <form id="registrationForm" method="post" enctype="multipart/form-data" class="form contact-us-form" >
                                            <div style="display: flex;">
                                            <div class="col-lg-6" style="margin-right:3px">
                                                <input type="text" id="username" name="clientname" class="form-control" placeholder="Full Name*">
                                            </div>

                                            <div class="col-lg-6">
                                                <input type="email" placeholder="Enter your email" class="form-control" name="clientmail" required>
                                            </div>
                                             </div>

                                            <div class="col-lg-12">

                                                <select id="country" name="clientcountry" style="width: 100%;height: 48px;margin-bottom: 5px;border: 1px solid var(--primary);border-radius: 3px;background:transparent" required>
                                                    <option value="">Select Country</option>
                                                    <option value="India">India</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Åland Islands">Åland Islands</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern Territories</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guernsey">Guernsey</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Isle of Man">Isle of Man</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jersey">Jersey</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macao">Macao</option>
                                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montenegro">Montenegro</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn">Pitcairn</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russian Federation">Russian Federation</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Helena">Saint Helena</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Serbia">Serbia</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Timor-leste">Timor-leste</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Viet Nam">Viet Nam</option>
                                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                    <!-- Add more countries as needed -->
                                                </select>
                                            </div>
                                            <div class="col-lg-12">

                                                <input type="text" placeholder="City Name*" class="form-control" name="clientcity" style="margin-top: 0px;" required>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div style="display: flex;">
                                                        <div class="col-lg-2 col-3">
                                                            <select id="phoneCode" name="countrycode" style="width: 100%;height: 40px;border: 1px solid var(--primary);border-radius: 3px;background:transparent">
                                                                <option data-countryCode="IND" value="91">(+91)</option>
                                                                <option data-countryCode="DZ" value="213">(+213)</option>
                                                                <option data-countryCode="AD" value="376">(+376)</option>
                                                                <option data-countryCode="AO" value="244">(+244)</option>
                                                                <option data-countryCode="AI" value="1264">(+1264)</option>
                                                                <option data-countryCode="AG" value="1268">(+1268)</option>
                                                                <option data-countryCode="AR" value="54">(+54)</option>
                                                                <option data-countryCode="AM" value="374">(+374)</option>
                                                                <option data-countryCode="AW" value="297">(+297)</option>
                                                                <option data-countryCode="AU" value="61">(+61)</option>
                                                                <option data-countryCode="AT" value="43">(+43)</option>
                                                                <option data-countryCode="AZ" value="994">(+994)</option>
                                                                <option data-countryCode="BS" value="1242">(+1242)</option>
                                                                <option data-countryCode="BH" value="973">(+973)</option>
                                                                <option data-countryCode="BD" value="880">(+880)</option>
                                                                <option data-countryCode="BB" value="1246">(+1246)</option>
                                                                <option data-countryCode="BY" value="375">(+375)</option>
                                                                <option data-countryCode="BE" value="32">(+32)</option>
                                                                <option data-countryCode="BZ" value="501">(+501)</option>
                                                                <option data-countryCode="BJ" value="229">(+229)</option>
                                                                <option data-countryCode="BM" value="1441">(+1441)</option>
                                                                <option data-countryCode="BT" value="975">(+975)</option>
                                                                <option data-countryCode="BO" value="591">(+591)</option>
                                                                <option data-countryCode="BA" value="387">(+387)</option>
                                                                <option data-countryCode="BW" value="267">(+267)</option>
                                                                <option data-countryCode="BR" value="55">(+55)</option>
                                                                <option data-countryCode="BN" value="673">(+673)</option>
                                                                <option data-countryCode="BG" value="359">(+359)</option>
                                                                <option data-countryCode="BF" value="226">(+226)</option>
                                                                <option data-countryCode="BI" value="257">(+257)</option>
                                                                <option data-countryCode="KH" value="855">(+855)</option>
                                                                <option data-countryCode="CM" value="237">(+237)</option>
                                                                <option data-countryCode="CA" value="1">(+1)</option>
                                                                <option data-countryCode="CV" value="238">(+238)</option>
                                                                <option data-countryCode="KY" value="1345">(+1345)</option>
                                                                <option data-countryCode="CF" value="236">(+236)</option>
                                                                <option data-countryCode="CL" value="56">(+56)</option>
                                                                <option data-countryCode="CN" value="86">(+86)</option>
                                                                <option data-countryCode="CO" value="57">(+57)</option>
                                                                <option data-countryCode="KM" value="269">(+269)</option>
                                                                <option data-countryCode="CG" value="242">(+242)</option>
                                                                <option data-countryCode="CK" value="682">(+682)</option>
                                                                <option data-countryCode="CR" value="506">(+506)</option>
                                                                <option data-countryCode="HR" value="385">(+385)</option>
                                                                <option data-countryCode="CU" value="53">(+53)</option>
                                                                <option data-countryCode="CY" value="90392">(+90392)</option>
                                                                <option data-countryCode="CY" value="357">(+357)</option>
                                                                <option data-countryCode="CZ" value="42">(+42)</option>
                                                                <option data-countryCode="DK" value="45">(+45)</option>
                                                                <option data-countryCode="DJ" value="253">(+253)</option>
                                                                <option data-countryCode="DM" value="1809">(+1809)</option>
                                                                <option data-countryCode="DO" value="1809">(+1809)</option>
                                                                <option data-countryCode="EC" value="593">(+593)</option>
                                                                <option data-countryCode="EG" value="20">(+20)</option>
                                                                <option data-countryCode="SV" value="503">(+503)</option>
                                                                <option data-countryCode="GQ" value="240">(+240)</option>
                                                                <option data-countryCode="ER" value="291">(+291)</option>
                                                                <option data-countryCode="EE" value="372">(+372)</option>
                                                                <option data-countryCode="ET" value="251">(+251)</option>
                                                                <option data-countryCode="FK" value="500">(+500)</option>
                                                                <option data-countryCode="FO" value="298">(+298)</option>
                                                                <option data-countryCode="FJ" value="679">(+679)</option>
                                                                <option data-countryCode="FI" value="358">(+358)</option>
                                                                <option data-countryCode="FR" value="33">(+33)</option>
                                                                <option data-countryCode="GF" value="594">(+594)</option>
                                                                <option data-countryCode="PF" value="689">(+689)</option>
                                                                <option data-countryCode="GA" value="241">(+241)</option>
                                                                <option data-countryCode="GM" value="220">(+220)</option>
                                                                <option data-countryCode="GE" value="7880">(+7880)</option>
                                                                <option data-countryCode="DE" value="49">(+49)</option>
                                                                <option data-countryCode="GH" value="233">(+233)</option>
                                                                <option data-countryCode="GI" value="350">(+350)</option>
                                                                <option data-countryCode="GR" value="30">(+30)</option>
                                                                <option data-countryCode="GL" value="299">(+299)</option>
                                                                <option data-countryCode="GD" value="1473">(+1473)</option>
                                                                <option data-countryCode="GP" value="590">(+590)</option>
                                                                <option data-countryCode="GU" value="671">(+671)</option>
                                                                <option data-countryCode="GT" value="502">(+502)</option>
                                                                <option data-countryCode="GN" value="224">(+224)</option>
                                                                <option data-countryCode="GW" value="245">(+245)</option>
                                                                <option data-countryCode="GY" value="592">(+592)</option>
                                                                <option data-countryCode="HT" value="509">(+509)</option>
                                                                <option data-countryCode="HN" value="504">(+504)</option>
                                                                <option data-countryCode="HK" value="852">(+852)</option>
                                                                <option data-countryCode="HU" value="36">(+36)</option>
                                                                <option data-countryCode="IS" value="354">(+354)</option>
                                                                <option data-countryCode="IN" value="91">(+91)</option>
                                                                <option data-countryCode="ID" value="62">(+62)</option>
                                                                <option data-countryCode="IR" value="98">(+98)</option>
                                                                <option data-countryCode="IQ" value="964">(+964)</option>
                                                                <option data-countryCode="IE" value="353">(+353)</option>
                                                                <option data-countryCode="IL" value="972">(+972)</option>
                                                                <option data-countryCode="IT" value="39">(+39)</option>
                                                                <option data-countryCode="JM" value="1876">(+1876)</option>
                                                                <option data-countryCode="JP" value="81">(+81)</option>
                                                                <option data-countryCode="JO" value="962">(+962)</option>
                                                                <option data-countryCode="KZ" value="7">(+7)</option>
                                                                <option data-countryCode="KE" value="254">(+254)</option>
                                                                <option data-countryCode="KI" value="686">(+686)</option>
                                                                <option data-countryCode="KP" value="850">(+850)</option>
                                                                <option data-countryCode="KR" value="82">(+82)</option>
                                                                <option data-countryCode="KW" value="965">(+965)</option>
                                                                <option data-countryCode="KG" value="996">(+996)</option>
                                                                <option data-countryCode="LA" value="856">(+856)</option>
                                                                <option data-countryCode="LV" value="371">(+371)</option>
                                                                <option data-countryCode="LB" value="961">(+961)</option>
                                                                <option data-countryCode="LS" value="266">(+266)</option>
                                                                <option data-countryCode="LR" value="231">(+231)</option>
                                                                <option data-countryCode="LY" value="218">(+218)</option>
                                                                <option data-countryCode="LI" value="417">(+417)</option>
                                                                <option data-countryCode="LT" value="370">(+370)</option>
                                                                <option data-countryCode="LU" value="352">(+352)</option>
                                                                <option data-countryCode="MO" value="853">(+853)</option>
                                                                <option data-countryCode="MK" value="389">(+389)</option>
                                                                <option data-countryCode="MG" value="261">(+261)</option>
                                                                <option data-countryCode="MW" value="265">(+265)</option>
                                                                <option data-countryCode="MY" value="60">(+60)</option>
                                                                <option data-countryCode="MV" value="960">(+960)</option>
                                                                <option data-countryCode="ML" value="223">(+223)</option>
                                                                <option data-countryCode="MT" value="356">(+356)</option>
                                                                <option data-countryCode="MH" value="692">(+692)</option>
                                                                <option data-countryCode="MQ" value="596">(+596)</option>
                                                                <option data-countryCode="MR" value="222">(+222)</option>
                                                                <option data-countryCode="YT" value="269">(+269)</option>
                                                                <option data-countryCode="MX" value="52">(+52)</option>
                                                                <option data-countryCode="FM" value="691">(+691)</option>
                                                                <option data-countryCode="MD" value="373">(+373)</option>
                                                                <option data-countryCode="MC" value="377">(+377)</option>
                                                                <option data-countryCode="MN" value="976">(+976)</option>
                                                                <option data-countryCode="MS" value="1664">(+1664)</option>
                                                                <option data-countryCode="MA" value="212">(+212)</option>
                                                                <option data-countryCode="MZ" value="258">(+258)</option>
                                                                <option data-countryCode="MN" value="95">(+95)</option>
                                                                <option data-countryCode="NA" value="264">(+264)</option>
                                                                <option data-countryCode="NR" value="674">(+674)</option>
                                                                <option data-countryCode="NP" value="977">(+977)</option>
                                                                <option data-countryCode="NL" value="31">(+31)</option>
                                                                <option data-countryCode="NC" value="687">(+687)</option>
                                                                <option data-countryCode="NZ" value="64">(+64)</option>
                                                                <option data-countryCode="NI" value="505">(+505)</option>
                                                                <option data-countryCode="NE" value="227">(+227)</option>
                                                                <option data-countryCode="NG" value="234">(+234)</option>
                                                                <option data-countryCode="NU" value="683">(+683)</option>
                                                                <option data-countryCode="NF" value="672">(+672)</option>
                                                                <option data-countryCode="NP" value="670">(+670)</option>
                                                                <option data-countryCode="NO" value="47">(+47)</option>
                                                                <option data-countryCode="OM" value="968">(+968)</option>
                                                                <option data-countryCode="PW" value="680">(+680)</option>
                                                                <option data-countryCode="PA" value="507">(+507)</option>
                                                                <option data-countryCode="PG" value="675">(+675)</option>
                                                                <option data-countryCode="PY" value="595">(+595)</option>
                                                                <option data-countryCode="PE" value="51">(+51)</option>
                                                                <option data-countryCode="PH" value="63">(+63)</option>
                                                                <option data-countryCode="PL" value="48">(+48)</option>
                                                                <option data-countryCode="PT" value="351">(+351)</option>
                                                                <option data-countryCode="PR" value="1787">(+1787)</option>
                                                                <option data-countryCode="QA" value="974">(+974)</option>
                                                                <option data-countryCode="RE" value="262">(+262)</option>
                                                                <option data-countryCode="RO" value="40">(+40)</option>
                                                                <option data-countryCode="RU" value="7">(+7)</option>
                                                                <option data-countryCode="RW" value="250">(+250)</option>
                                                                <option data-countryCode="SM" value="378">(+378)</option>
                                                                <option data-countryCode="ST" value="239">(+239)</option>
                                                                <option data-countryCode="SA" value="966">(+966)</option>
                                                                <option data-countryCode="SN" value="221">(+221)</option>
                                                                <option data-countryCode="CS" value="381">(+381)</option>
                                                                <option data-countryCode="SC" value="248">(+248)</option>
                                                                <option data-countryCode="SL" value="232">(+232)</option>
                                                                <option data-countryCode="SG" value="65">(+65)</option>
                                                                <option data-countryCode="SK" value="421">(+421)</option>
                                                                <option data-countryCode="SI" value="386">(+386)</option>
                                                                <option data-countryCode="SB" value="677">(+677)</option>
                                                                <option data-countryCode="SO" value="252">(+252)</option>
                                                                <option data-countryCode="ZA" value="27">(+27)</option>
                                                                <option data-countryCode="ES" value="34">(+34)</option>
                                                                <option data-countryCode="LK" value="94">(+94)</option>
                                                                <option data-countryCode="SH" value="290">(+290)</option>
                                                                <option data-countryCode="KN" value="1869">(+1869)</option>
                                                                <option data-countryCode="SC" value="1758">(+1758)</option>
                                                                <option data-countryCode="SD" value="249">(+249)</option>
                                                                <option data-countryCode="SR" value="597">(+597)</option>
                                                                <option data-countryCode="SZ" value="268">(+268)</option>
                                                                <option data-countryCode="SE" value="46">(+46)</option>
                                                                <option data-countryCode="CH" value="41">(+41)</option>
                                                                <option data-countryCode="SI" value="963">(+963)</option>
                                                                <option data-countryCode="TW" value="886">(+886)</option>
                                                                <option data-countryCode="TJ" value="7">(+7)</option>
                                                                <option data-countryCode="TH" value="66">(+66)</option>
                                                                <option data-countryCode="TG" value="228">(+228)</option>
                                                                <option data-countryCode="TO" value="676">(+676)</option>
                                                                <option data-countryCode="TT" value="1868">(+1868)</option>
                                                                <option data-countryCode="TN" value="216">(+216)</option>
                                                                <option data-countryCode="TR" value="90">(+90)</option>
                                                                <option data-countryCode="TM" value="7">(+7)</option>
                                                                <option data-countryCode="TM" value="993">(+993)</option>
                                                                <option data-countryCode="TC" value="1649">(+1649)</option>
                                                                <option data-countryCode="TV" value="688">(+688)</option>
                                                                <option data-countryCode="UG" value="256">(+256)</option>
                                                                <option data-countryCode="GB" value="44">(+44)</option>
                                                                <option data-countryCode="UA" value="380">(+380)</option>
                                                                <option data-countryCode="AE" value="971">(+971)</option>
                                                                <option data-countryCode="UY" value="598">(+598)</option>
                                                                <option data-countryCode="US" value="1">(+1)</option>
                                                                <option data-countryCode="UZ" value="7">(+7)</option>
                                                                <option data-countryCode="VU" value="678">(+678)</option>
                                                                <option data-countryCode="VA" value="379">(+379)</option>
                                                                <option data-countryCode="VE" value="58">(+58)</option>
                                                                <option data-countryCode="VN" value="84">(+84)</option>
                                                                <option data-countryCode="VG" value="84">(+1284)</option>
                                                                <option data-countryCode="VI" value="84">(+1340)</option>
                                                                <option data-countryCode="WF" value="681">(+681)</option>
                                                                <option data-countryCode="YE" value="969">(+969)</option>
                                                                <option data-countryCode="YE" value="967">(+967)</option>
                                                                <option data-countryCode="ZM" value="260">(+260)</option>
                                                                <option data-countryCode="ZW" value="263">(+263)</option>
                                                                <!-- Add more phone codes as needed -->
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-10  col-9" style="margin-left: 8px;">
                                                            <input type="number" placeholder="Enter phone number" name="clientphone" style="flex: 1;height: 40px;width: 97%;border: 1px solid var(--primary);border-radius: 3px;" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
 <div style="display: flex;">
                                            <div class="col-lg-6" style="margin-right:3px">
                                                <input type="text" placeholder="Product Name*" class="form-control" name="clientproduct" style="margin-top: 5px;" required>
                                            </div>

                                            <div class="col-lg-6">
                                                <input type="number" placeholder="Product Quantity in no" class="form-control" name="clientquantity" style="margin-top: 5px;" required>
                                            </div>
 </div>
                                            <div class="col-lg-12">
                                                <select name="clientpiece" style="width: 100%;height: 48px;margin-bottom: 5px;margin-top:1px;border: 1px solid var(--primary);border-radius: 3px;background:transparent" required>
                                                    <option value="default" selected="selected">Select Piece
                                                    </option>
                                                    <option value="Bags">Bags</option>
                                                    <option value="Carton">Carton</option>
                                                    <option value="Dozen">Dozen</option>
                                                    <option value="Feet">Feet</option>
                                                    <option value="Kilogram">Kilogram</option>
                                                    <option value="Meter">Meter</option>
                                                    <option value="Metric Ton">Metric Ton</option>
                                                    <option value="Pieces">Pieces</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                            <input type="checkbox" id="terms" required style="margin-top: 3px;">
                                            <label for="terms">I agree with <a href="#">terms and conditions</a></label>


                                            <button type="submit" name="submit1" class="btn btn-dark btn-rounded btn-sm mb-4" style="padding: 0.93em 6.08em;width: 100%;">Join now Free</button>
                                        </form>
                                    </div>
                                    <!-- End of Intro Banner -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Intro-wrapper -->
                    <div class="swiper-container swiper-theme icon-box-wrapper appear-animate br-sm bg-white mt-2 mb-8" data-swiper-options="{
                    'spaceBetween': 0,
                    'slidesPerView': 1,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '992': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }}">
                        <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                            <div class="swiper-slide icon-box icon-box-side text-dark">
                                <span class="icon-box-icon icon-shipping">
                            <i class="w-icon-truck"></i>
                        </span>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title font-weight-bolder">Conduct business confidently</h4>
                                    <p class="text-default">Transact with trust</p>
                                </div>
                            </div>
                            <div class="swiper-slide icon-box icon-box-side text-dark">
                                <span class="icon-box-icon icon-payment">
                            <i class="w-icon-bag"></i>
                        </span>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title font-weight-bolder">Secure Payment</h4>
                                    <p class="text-default">We ensure secure payment</p>
                                </div>
                            </div>
                            <div class="swiper-slide icon-box icon-box-side text-dark icon-box-money">
                                <span class="icon-box-icon icon-money">
                            <i class="w-icon-money"></i>
                        </span>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title font-weight-bolder">Money Back Guarantee</h4>
                                    <p class="text-default">Any back within 30 days</p>
                                </div>
                            </div>
                            <div class="swiper-slide icon-box icon-box-side text-dark icon-box-chat">
                                <span class="icon-box-icon icon-chat">
                            <i class="w-icon-chat"></i>
                        </span>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title font-weight-bolder">Customer Support</h4>
                                    <p class="text-default">Call or email us 24/7</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Icon Box Wrapper -->
                    <div class="title-link-wrapper title-deals after-none appear-animate">
                        <h2 class="title">Top Deals of the Products</h2>
                        <div class="product-countdown-container d-flex font-size-sm text-white bg-dark br-xs align-items-center mr-auto mt-1 mb-1">
                            <label>Offer Ends in: </label>
                            <div class="product-countdown countdown-compact ml-1 font-weight-bold" data-until="+10h" data-relative="true" data-compact="true" data-format="HMS">00:00:00</div>
                        </div>
                        <a href="product.php" class="ml-0 mb-0 ls-normal">
                    More Products
                    <i class="w-icon-long-arrow-right"></i>
                </a>
                    </div>


                    <div class="swiper-wrapper row cols-lg-6 cols-md-4 cols-sm-3 cols-2">
                        <?php if ($result->num_rows > 0): ?>
                            <?php while ($row = $result->fetch_assoc()): ?>
                                <div class="swiper-slide product-wrap">
                                    <div class="banner banner-fixed overlay-dark br-sm mt-4">
                                        <figure class="product-media">
                                            <a href="contact-us">
                                        <img src="Adminstrator/img/<?php echo $row['image']; ?>" alt="Product"
                                            style="height:250px;width:100%;">
                                    </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                        <a href="contact-us?product_name=<?php echo urlencode($row['product_name']); ?>">
                                            <?php echo htmlspecialchars($row['product_name']); ?>
                                        </a>
                                    </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="contact-us" class="rating-reviews">(1 Reviews)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                                    <?php else: ?>
                                        <p class="no-results">No products found for "
                                            <?php echo htmlspecialchars($search_query); ?>"</p>
                                        <?php endif; ?>
                    </div>
                    <!-- End of Prodcut Deals Wrapper -->
                    <div class="row grid banner-grid pt-1 appear-animate">
                        <div class="grid-item grid-item1 banner banner-fixed overlay-dark  col-lg-8 height-x1">
                            <figure class="banner-media">
                                <img src="assets\images\demos\demo14\banner\p1.svg" alt="Category Banner" width="900" height="290" style="background-color: #373538;">
                            </figure>
                            <div class="banner-content y-50">
                                <h4 class="banner-subtitle text-capitalize font-weight-normal ls-normal">Trending Collection
                        </h4>
                                <h3 class="banner-title text-white text-capitalize font-weight-bold ls-normal">Furniture
                            Sale</h3>
                                <h5 class="banner-price-info text-white font-weight-normal ls-25">
                            Up to
                            <span class="text-primary font-weight-bolder">25% OFF</span>
                        </h5>
                                <a href="contact-us" class="btn btn-white btn-link btn-underline btn-icon-right">
                            Shop Now
                            <i class="w-icon-long-arrow-right"></i>
                        </a>
                            </div>
                        </div>
                        <div class="grid-item grid-item3 banner banner-fixed overlay-dark col-lg-4 col-md-6 col-6 height-x2">
                            <figure class="banner-media">
                                <img src="assets\images\demos\demo14\banner\p4.svg" alt="Category Banner" width="440" height="290" style="background-color: #D3D3D5;">
                            </figure>
                            <div class="banner-content">
                                <h4 class="banner-subtitle text-white text-capitalize font-weight-normal ls-normal">New
                            Collection</h4>
                                <h3 class="banner-title text-white text-capitalize font-weight-bold ls-25">Women Sale</h3>
                                <a href="contact-us" class="btn btn-white btn-link btn-underline btn-icon-right">
                            Shop Now
                            <i class="w-icon-long-arrow-right"></i>
                        </a>
                            </div>
                        </div>
                        <div class="grid-item grid-item4 banner banner-fixed overlay-dark col-lg-4 col-md-6 col-6  height-x1">
                            <figure class="banner-media">
                                <img src="assets\images\demos\demo14\banner\p3.svg" alt="category" width="440" height="600" style="background-color: #ADB5BF;">
                            </figure>
                            <div class="banner-content">
                                <h4 class="banner-subtitle text-white text-capitalize font-weight-normal ls-normal">New
                            Arrivals</h4>
                                <h3 class="banner-title text-white text-capitalize ls-25">Sweet Cookies</h3>
                                <a href="contact-us" class="btn btn-white btn-link btn-underline btn-icon-right">
                            Shop Now
                            <i class="w-icon-long-arrow-right"></i>
                        </a>
                            </div>
                        </div>
                        <div class="grid-item grid-item2 banner banner-fixed overlay-light col-lg-4 col-md-6   height-x1">
                            <figure class="banner-media">
                                <img src="assets\images\demos\demo14\banner\p2.svg" alt="category" width="440" height="290" style="background-color: #272624;">
                            </figure>
                            <div class="banner-content x-50 y-50 text-center">
                                <h4 class="banner-subtitle text-light text-uppercase font-weight-bold ls-15">30% Off Our
                            Entire Shop</h4>
                                <h3 class="banner-title text-white text-capitalize font-secondary font-weight-bolder ls-normal mb-0">
                            Black Friday</h3>
                                <p class="text-uppercase text-center font-weight-normal">
                                    Use Code
                                    <strong class="text-white">Blkfr123</strong> at Checkout
                                </p>
                                <a href="contact-us" class="btn btn-primary btn-rounded text-white">
                            Shop Now
                        </a>
                            </div>
                        </div>
                        <div class="grid-space col-1"></div>
                    </div>
                    <!-- End of Banner Grid -->
            </div>

            <div class="bg-grey how-trade pt-5 pb-5 pb-lg-5 mt-10">
                <div class="container mt-2 mt-lg-10 mb-0 mb-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-5 mb-4 mb-lg-0">
                            <figure class="br-sm">
                                <img src="assets/images/pages/become/2.jpg" alt="Banner" width="610" height="520" style="background-color: #C9C8CD;" />
                            </figure>
                        </div>
                        <div class="col-lg-7 pl-lg-8">
                            <h4 class="text-primary font-weight-bold ls-25">What are you looking for?</h4>
                            <p class="mb-6"> We connect you with suppliers who perfectly match your buying needs. Backed by the trust of hundreds of manufacturers, exporters, and buyers, we ensure you receive top-quality products at competitive prices.</p>
                            <form class="form checkout-form global-form" method="post">
                                <div class="row mb-9">
                                    <div class="col-lg-12 pr-lg-4 mb-4">



                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for=""> Product Name </label>
                                                <input type="text" class="form-control form-control-md" name="p-name" placeholder="Product Name*">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for=""> Contact Number </label>
                                                <input type="text" class="form-control form-control-md" name="number" placeholder="Product Name*">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for=""> Product Quantity </label>

                                                <input type="text" class="form-control form-control-md" name="p-quantity" placeholder="Quantity*">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for=""> Product Piece </label>

                                                <select name="p-piece" class="form-control form-control-md">
                                                    <option value="default" selected="selected">Select Piece
                                                    </option>
                                                    <option value="Bags">Bags</option>
                                                    <option value="Carton">Carton</option>
                                                    <option value="Dozen">Dozen</option>
                                                    <option value="Feet">Feet</option>
                                                    <option value="Kilogram">Kilogram</option>
                                                    <option value="Meter">Meter</option>
                                                    <option value="Metric Ton">Metric Ton</option>
                                                    <option value="Pieces">Pieces</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for=""> Product Shipping Terms </label>

                                                <select name="p-terms" class="form-control form-control-md">
                                                    <option value="default" selected="selected">Select Shipping Terms
                                                    </option>
                                                    <option value="Delivered At Place">Delivered At Place</option>
                                                    <option value="Delivered Duty Paid">Delivered Duty Paid</option>
                                                    <option value="Free Alongside Ship">Free Alongside Ship</option>
                                                    <option value="Free on Board">Free on Board</option>
                                                    <option value="Cost, Insurance &amp; Freight">Cost, Insurance &amp; Freight
                                                    </option>
                                                </select>
                                            </div>

                                            <div class="col-lg-6">
                                                <label for=""> Product Payments Option </label>

                                                <select name="p-payment" class="form-control form-control-md">
                                                    <option value="default" selected="selected">Select Shipping Terms
                                                    </option>
                                                    <option value="T/T"> T/T</option>
                                                    <option value="D/A">D/A </option>
                                                    <option value="L/C"> L/C</option>
                                                    <option value="D/P">D/P </option>
                                                    <option value="PayPal">PayPal </option>
                                                    <option value="Western Union">Western Union </option>
                                                    <option value="Money Gram">Money Gram</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-12">
                                                <label for=""> Product Name </label>
                                                <input type="text" class="form-control form-control-md" name="about" placeholder="Let us know what you need*">
                                            </div>


                                            <div class="col-lg-12">
                                                <button type="submit" name="submit" class="btn btn-dark btn-block btn-rounded">Send my requirements
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End of Row -->
                </div>
                <!-- End of Container -->
            </div>

            <div class="special-offer">
                <div class="container">
                    <div class="title-link-wrapper title-post mb-4 after-none appear-animate">
                        <h2 class="title ls-normal pt-1 pb-1 mb-0">Agricultural Goods & Products</h2>
                        <a href="product.php" class="font-weight-bold font-size-normal ls-normal">
                    View All Products
                    <i class="w-icon-long-arrow-right"></i>
                </a>
                    </div>
                    <div class="bg-white">
                        <div class="banner-wrapper appear-animate row cols-md-2 mb-6 ">
                            <div class="banner banner-fixed overlay-dark br-sm mt-4">
                                <figure>
                                    <img src="assets\images\demos\demo14\banner\1.svg" alt="Banner" width="680" height="180" style="background-color: #E5E6E8;" />
                                </figure>
                                <div class="banner-content y-50">
                                    <h2 class="banner-title text-dark font-weight-bolder ls-normal">
                                Fitness Products<br>
                                For Health
                            </h2>
                                    <p class="text-dark">Only until the end of this week.</p>
                                    <a href="contact-us" class="btn btn-sm btn-outline btn-dark btn-rounded slide-animate">
                                Shop Now
                            </a>
                                </div>
                            </div>
                            <div class="banner banner-fixed overlay-light br-sm mt-4 ">
                                <figure>
                                    <img src="assets\images\demos\demo14\banner\2.svg" alt="Banner" width="680" height="180" style="background-color: #565960;" />
                                </figure>
                                <div class="banner-content y-50">
                                    <h2 class="banner-title text-white font-weight-bold ls-normal mb-0">
                                Electrolux Sale
                            </h2>
                                    <h4 class="banner-price-info text-white font-weight-bold">
                                <span class="text-primary font-weight-bolder">30%</span>
                                Flat
                            </h4>
                                    <p>Washing machine at low prices.</p>
                                    <a href="contact-us" class="btn btn-sm btn-white btn-outline btn-rounded slide-animate">
                                Discover Now
                            </a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Banner-wrapper -->
                        <?php
                // Fetch products from database
                $query = mysqli_query($conn, "SELECT * FROM tbl_product WHERE main_cat = 'Agriculture' LIMIT 8");
                ?>

                            <div class="row cols-lg-4 cols-md-4 cols-sm-3 cols-2">
                                <?php while ($row = mysqli_fetch_array($query)) { ?>
                                    <div class="swiper-slide product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="contact-us">
                                        <img src="Adminstrator/img/<?php echo $row['image']; ?>" style="height:250px;width:100%;">

                                    </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                        <a href="contact-us?product_name=<?php echo urlencode($row['product_name']); ?>">
                                            <?php echo htmlspecialchars($row['product_name']); ?>
                                        </a>
                                    </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="contact-us" class="rating-reviews">(1 Reviews)</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                            </div>
                            <!-- End of Carousel -->
                    </div>
                </div>
            </div>




            <div class="special-offer">
                <div class="container">
                    <div class="title-link-wrapper title-post mb-4 after-none appear-animate">
                        <h2 class="title ls-normal pt-1 pb-1 mb-0">Livestock & Animal Products</h2>
                        <a href="product" class="font-weight-bold font-size-normal ls-normal">
                    View All Products
                    <i class="w-icon-long-arrow-right"></i>
                </a>
                    </div>
                    <div class="bg-white">

                        <div class="row">


                            <div class="col-lg-4">
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="contact-us">
                                                <img src="assets\images\demos\demo14\products\11.svg" alt="Product" width="300" height="338">
                                            </a>

                                        </figure>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">


                                <div class="product-wrapper row cols-lg-4 cols-md-3 cols-sm-2 cols-2">
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="contact-us">
                                                    <img src="assets\images\demos\demo14\products\12.svg" alt="Product" width="300" height="338">

                                                </a>

                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="contact-us">Fresh Chicken</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Wrap -->
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="contact-us">
                                                    <img src="assets\images\demos\demo14\products\13.svg" alt="Product" width="300" height="338">
                                                </a>

                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="contact-us">Eggs</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="contact-us">
                                                    <img src="assets/images/demos/demo14/products/14.svg" alt="Product" width="300" height="338">
                                                </a>

                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="contact-us">Frozen Meet</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="contact-us">
                                                    <img src="assets/images/demos/demo14/products/15.svg" alt="Product" width="300" height="338">
                                                </a>

                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="contact-us">Duck Eggs</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Wrap -->
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="contact-us">
                                                    <img src="assets/images/demos/demo14/products/16.svg" alt="Product" width="300" height="338">
                                                </a>

                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="contact-us">Frozen Mutton</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Wrap -->
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="contact-us">
                                                    <img src="assets/images/demos/demo14/products/17.svg" alt="Product" width="300" height="338">
                                                </a>

                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="contact-us">Frozen Chicken</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Wrap -->
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="contact-us">
                                                    <img src="assets/images/demos/demo14/products/18.svg" alt="Product" width="300" height="338">
                                                </a>

                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="contact-us">Fresh Eggs</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Wrap -->
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="contact-us">
                                                    <img src="assets/images/demos/demo14/products/19.svg" alt="Product" width="300" height="338">

                                                </a>

                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="contact-us">Fresh Mutton</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Wrap -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section>
                <div class="special-offer">
                    <div class="container">
                        <div class="title-link-wrapper title-post mb-4 after-none appear-animate">
                            <h2 class="title ls-normal pt-1 pb-1 mb-0">Electronic & Electrical</h2>
                            <a href="product.php" class="font-weight-bold font-size-normal ls-normal">
                        View All Products
                        <i class="w-icon-long-arrow-right"></i>
                    </a>
                        </div>
                        <div class="bg-white">

                            <!-- End of Banner-wrapper -->
                            <?php
                    // Fetch products from database
                    $query = mysqli_query($conn, "SELECT * FROM tbl_product WHERE main_cat = 'Electronic' LIMIT 6");
                    ?>

                                <div class="swiper-wrapper row cols-lg-6 cols-md-4 cols-sm-3 cols-2">
                                    <?php while ($row = mysqli_fetch_array($query)) { ?>
                                        <div class="swiper-slide product-wrap">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="contact-us">
                                            <img src="Adminstrator/img/<?php echo $row['image']; ?>" style="height:250px;width:100%;">

                                        </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                            <a href="contact-us?product_name=<?php echo urlencode($row['product_name']); ?>">
                                                <?php echo htmlspecialchars($row['product_name']); ?>
                                            </a>
                                        </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="contact-us" class="rating-reviews">(1 Reviews)</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                </div>
                                <!-- End of Carousel -->
                        </div>
                    </div>
                </div>
            </section>





            <div class="deals-section">
                <h2>SEALED DEALS, REAL PROOF!</h2>
                <p>Witness Our Track Record of Success.</p>
                <p>Every deal showcased here is a testament to our commitment to genuine business partnerships.</p>
                <div class="amount">$725,034.78</div>

                <!-- End of Banner-wrapper -->
                <?php
                    // Fetch products from database
                    $query = mysqli_query($conn, "SELECT * FROM deals ORDER BY created_at DESC LIMIT 4");
                    ?>

                    <div class="row cols-lg-4 cols-md-4 cols-sm-3 cols-2">
                        <?php while ($row = mysqli_fetch_array($query)) { ?>
                            <div class="swiper-slide product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="contact-us">
                                            <img src="Adminstrator/img/<?php echo $row['bill']; ?>" style="height:250px;width:100%;">

                                        </a>
                                    </figure>
                                    <div class="product-details" style="background-color:#16325B;">
                                        <h4 class="icon-box-title font-weight-bolder">
                                            <a href="contact-us?product_name=<?php echo urlencode($row['product']); ?>" style="color:#fff">
                                                <?php echo htmlspecialchars($row['product']); ?>
                                            </a>
                                        </h4>
                                        <p class="text-default">
                                            <a href="contact-us?product_name=<?php echo urlencode($row['price']); ?>" style="color:#fff;margin-top:-5px">
                                                $<?php echo htmlspecialchars($row['price']); ?>
                                            </a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                    </div>
                    <a href="deals">
                        <button class="center-button">View All</button>
                    </a>
            </div>

            <div class="container">




                <div class="vendor-wrapper mt-10 mb-6">

                    <div class="title-link-wrapper title-post mb-4 after-none appear-animate">
                        <h2 class="title ls-normal pt-1 pb-1 mb-0">Top selling Products</h2>
                        <a href="product.php" class="font-weight-bold font-size-normal ls-normal">
                    View All
                    <i class="w-icon-long-arrow-right"></i>
                </a>
                    </div>
                    <div class="swiper-container swiper-theme" data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 1,
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 2
                            },
                            '768': {
                                'slidesPerView': 3
                            },
                            '992': {
                                'slidesPerView': 4
                            }
                        }
                        }">
                        <div class="swiper-wrapper row gutter-lg cols-xl-8 cols-lg-7 cols-md-6 cols-sm-4 cols-xs-3 cols-2">
                            <?php
                    // Fetch products from database
                    $query = mysqli_query($conn, "SELECT * FROM tbl_product    ");
                    ?>
                                <?php while ($row = mysqli_fetch_array($query)) { ?>
                                    <div class="swiper-slide vendor-widget vendor-widget-1">

                                        <div class="vendor-products ">
                                            <div class="vendor-product lg-item">
                                                <figure class="product-media">
                                                    <a href="contact-us">

                                            <img src="Adminstrator/img/<?php echo $row['image']; ?>" alt="Vendor Product"
                                                style="width:100%;height:120px;border-radius:50%" />
                                        </a>
                                                </figure>
                                            </div>

                                        </div>

                                    </div>
                                    <?php } ?>
                                        <!-- End of Vendor widget 1 -->

                                        <!-- End of Vendor widget 1 -->
                        </div>

                    </div>
                </div>

            </div>

            <div class="container mt-10">


                <!-- End of Brands Wrapper -->
                <div class="title-link-wrapper title-post mb-4 after-none appear-animate">
                    <h2 class="title ls-normal pt-1 pb-1 mb-0">From Our Blog</h2>
                    <a href="blog" class="font-weight-bold font-size-normal ls-normal">
                View All Articles
                <i class="w-icon-long-arrow-right"></i>
            </a>
                </div>
                <div class="swiper-container swiper-theme post-wrapper pb-2 appear-animate" data-swiper-options="{
                    'slidesPerView': 1,
                    'spaceBetween': 20,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '992': {
                            'slidesPerView': 4,
                            'dots': false
                        }
                    }
                }">
                    <div class="swiper-wrapper row cols-lg-4 cols-md-3 cols-sm-2 cols-1">

                        <div class="swiper-slide post text-center overlay-zoom">
                            <figure class="post-media">
                                <a href="blog">
                                    <img src="assets/images/demos/demo14/blog/post-1.jpg" alt="Post" width="325" height="220" style="background-color: #DBE0E4;" />
                                </a>
                            </figure>
                            <div class="post-details pb-5">
                                <div class="post-meta">
                                    by <a href="blog" class="post-author">GlobalConnection21</a> - <a href="blog" class="post-date mr-0">10. 12. 2024</a>
                                </div>
                                <h4 class="post-title"><a href="blog">Crafting Your Perfect Look, One Piece at a Time</a>
                        </h4>
                                <a href="blog" class="btn btn-link btn-dark btn-underline">
                            Read More<i class="w-icon-long-arrow-right"></i>
                        </a>
                            </div>
                        </div>
                        <div class="swiper-slide post text-center overlay-zoom">
                            <figure class="post-media">
                                <a href="blog">
                                    <img src="assets/images/demos/demo14/blog/post-2.jpg" alt="Post" width="325" height="220" style="background-color: #E7E5E8;" />
                                </a>
                            </figure>
                            <div class="post-details pb-5">
                                <div class="post-meta">
                                    by <a href="blog" class="post-author">GlobalConnection21</a> - <a href="blog" class="post-date mr-0">05. 12. 2024</a>
                                </div>
                                <h4 class="post-title"><a href="blog">New found the men's watch for summer
                                season</a></h4>
                                <a href="blog" class="btn btn-link btn-dark btn-underline">
                            Read More<i class="w-icon-long-arrow-right"></i>
                        </a>
                            </div>
                        </div>
                        <div class="swiper-slide post text-center overlay-zoom">
                            <figure class="post-media">
                                <a href="blog">
                                    <img src="assets/images/demos/demo14/blog/post-3.jpg" alt="Post" width="325" height="220" style="background-color: #F0F0F2;" />
                                </a>
                            </figure>
                            <div class="post-details pb-5">
                                <div class="post-meta">
                                    by <a href="blog" class="post-author">GlobalConnection21</a> - <a href="blog" class="post-date mr-0">20. 11. 2024</a>
                                </div>
                                <h4 class="post-title"><a href="blog">We want to be different and fashion
                                gives to me that outlet</a></h4>
                                <a href="blog" class="btn btn-link btn-dark btn-underline">
                            Read More<i class="w-icon-long-arrow-right"></i>
                        </a>
                            </div>
                        </div>
                        <div class="swiper-slide post text-center overlay-zoom">
                            <figure class="post-media">
                                <a href="blog">
                                    <img src="assets/images/demos/demo14/blog/post-4.jpg" alt="Post" width="325" height="220" style="background-color: #E3E8EB;" />
                                </a>
                            </figure>
                            <div class="post-details pb-5">
                                <div class="post-meta">
                                    by <a href="blog" class="post-author">GlobalConnection21</a> - <a href="blog" class="post-date mr-0">22. 121. 2024</a>
                                </div>
                                <h4 class="post-title"><a href="blog">Step into Fashion, Step into Confidence.</a></h4>
                                <a href="blog" class="btn btn-link btn-dark btn-underline">
                            Read More<i class="w-icon-long-arrow-right"></i>
                        </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Blog Post -->
                <div class="container">
                    <div class="vendor-wrapper mt-10 mb-6">

                        <div class="title-link-wrapper title-post mb-4 after-none appear-animate">
                            <h2 class="title ls-normal pt-1 pb-1 mb-0">Top Searching Products</h2>
                            <a href="product.php" class="font-weight-bold font-size-normal ls-normal">
                        View All
                        <i class="w-icon-long-arrow-right"></i>
                    </a>
                        </div>
                        <div class="swiper-container swiper-theme" data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 1,
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 2
                            },
                            '768': {
                                'slidesPerView': 3
                            },
                            '992': {
                                'slidesPerView': 4
                            }
                        }
                        }">
                            <div class="swiper-wrapper row gutter-lg cols-xl-8 cols-lg-7 cols-md-6 cols-sm-4 cols-xs-3 cols-2">
                                <?php
                        // Fetch products from database
                        $query = mysqli_query($conn, "SELECT * FROM tbl_product WHERE main_cat = 'Miscellaneous' LIMIT 5");
                        ?>
                                    <?php while ($row = mysqli_fetch_array($query)) { ?>
                                        <div class="swiper-slide vendor-widget vendor-widget-1">

                                            <div class="vendor-products ">
                                                <div class="vendor-product lg-item">
                                                    <figure class="product-media">
                                                        <a href="contact-us">

                                                <img src="Adminstrator/img/<?php echo $row['image']; ?>" alt="Vendor Product"
                                                    style="width:100%;height:120px;border-radius:50%" />
                                            </a>
                                                    </figure>
                                                </div>

                                            </div>

                                        </div>
                                        <?php } ?>
                                            <!-- End of Vendor widget 1 -->

                                            <!-- End of Vendor widget 1 -->
                            </div>

                        </div>
                    </div>

                </div>
                <!-- End of Recently View -->
            </div>
            </main>
            <!-- End of Main -->

            <!-- Start of Footer -->
            <?php include 'footer.php' ?>
                <!-- End of Mobile Menu -->

                <!-- Start of Newsletter popup -->
                <div class="newsletter-popup mfp-hide">

                </div>
                <!-- End of Newsletter popup -->

                <!-- Start of Quick View -->
                <div class="product product-single product-popup">
                    <div class="row gutter-lg">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="product-gallery product-gallery-sticky">
                                <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                                    <div class="swiper-wrapper row cols-1 gutter-no">
                                        <div class="swiper-slide">
                                            <figure class="product-image">
                                                <img src="assets/images/products/popup/1-440x494.jpg" data-zoom-image="assets/images/products/popup/1-800x900.jpg" alt="Water Boil Black Utensil" width="800" height="900">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="product-image">
                                                <img src="assets/images/products/popup/2-440x494.jpg" data-zoom-image="assets/images/products/popup/2-800x900.jpg" alt="Water Boil Black Utensil" width="800" height="900">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="product-image">
                                                <img src="assets/images/products/popup/3-440x494.jpg" data-zoom-image="assets/images/products/popup/3-800x900.jpg" alt="Water Boil Black Utensil" width="800" height="900">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="product-image">
                                                <img src="assets/images/products/popup/4-440x494.jpg" data-zoom-image="assets/images/products/popup/4-800x900.jpg" alt="Water Boil Black Utensil" width="800" height="900">
                                            </figure>
                                        </div>
                                    </div>
                                    <button class="swiper-button-next"></button>
                                    <button class="swiper-button-prev"></button>
                                </div>
                                <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                        'navigation': {
                            'nextEl': '.swiper-button-next',
                            'prevEl': '.swiper-button-prev'
                        }
                    }">
                                    <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm">
                                        <div class="product-thumb swiper-slide">
                                            <img src="assets/images/products/popup/1-103x116.jpg" alt="Product Thumb" width="103" height="116">
                                        </div>
                                        <div class="product-thumb swiper-slide">
                                            <img src="assets/images/products/popup/2-103x116.jpg" alt="Product Thumb" width="103" height="116">
                                        </div>
                                        <div class="product-thumb swiper-slide">
                                            <img src="assets/images/products/popup/3-103x116.jpg" alt="Product Thumb" width="103" height="116">
                                        </div>
                                        <div class="product-thumb swiper-slide">
                                            <img src="assets/images/products/popup/4-103x116.jpg" alt="Product Thumb" width="103" height="116">
                                        </div>
                                    </div>
                                    <button class="swiper-button-next"></button>
                                    <button class="swiper-button-prev"></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End of Quick view -->
  <div class="ad-popup-overlay" id="adPopup">
        <div class="ad-popup-container">
            <!-- Banner Image -->
            <img src="assets/ads.png" alt="Special Offer" class="ad-banner">
            
            <!-- Ad Content -->
            <div class="ad-content">
                 <p>Get <strong>Select the Right Portal for You</strong>  – Whether You're Shopping for Yourself or Your Business, We've Got You Covered!</p>
                
                <div class="ad-buttons">
                    <button class="ad-cta primary" id="primaryBtn">B2B Portal <i class="w-icon-cart"></i></button>
<a href="https://d2c.globalconnection21.com" class="ad-cta secondary" id="secondaryBtn" target="_blank">D2C Portal <i class="w-icon-visit"></i></a>
                </div>
                
                <div class="ad-timer">Offer ends in 23:59:59</div>
            </div>
        </div>
    </div>
                <!-- Plugin JS File -->
                <script src="assets/vendor/jquery/jquery.min.js"></script>
                <script src="assets/vendor/parallax/parallax.min.js"></script>
                <script src="assets/vendor/jquery.plugin/jquery.plugin.min.js"></script>
                <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
                <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
                <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
                <script src="assets/vendor/skrollr/skrollr.min.js"></script>
                <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
                <script src="assets/vendor/zoom/jquery.zoom.js"></script>
                <script src="assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>
                <script>
                    let currentIndex = 0;
                    function moveSlide(direction) {
                        const slider = document.querySelector(".slider");
                        const slides = document.querySelectorAll(".slide");
                        const slideWidth = slides[0].offsetWidth + 20; // Includes margin
                        const maxIndex = slides.length - Math.floor(document.querySelector(".slider-container").offsetWidth / slideWidth);
                        currentIndex += direction;
                        if (currentIndex < 0) currentIndex = maxIndex;
                        if (currentIndex > maxIndex) currentIndex = 0;
                        slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
                    }
                </script>

                <!-- Main JS -->
                <script src="assets/js/main.min.js"></script>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const consent = document.querySelector('.gdpr-consent');
                        const overlay = document.querySelector('.overlay');
                        const acceptAllBtn = document.getElementById('acceptAll');
                        const rejectAllBtn = document.getElementById('rejectAll');
                        const analyticsCheckbox = document.getElementById('analytics');
                        const marketingCheckbox = document.getElementById('marketing');
            
                        // Show consent form after a short delay
                        setTimeout(() => {
                            consent.classList.add('active');
                            overlay.classList.add('active');
                        }, 1000);
            
                        // Helper function to safely store preferences
                        function safeStorage(key, value) {
                            try {
                                localStorage.setItem(key, value);
                                return true;
                            } catch (e) {
                                console.log('Storage not available, preferences will not persist');
                                return false;
                            }
                        }
            
                        function savePreferences(analytics, marketing) {
                            const preferences = {
                                essential: true, // Always required
                                analytics: analytics,
                                marketing: marketing,
                                timestamp: new Date().toISOString()
                            };
            
                            // Try to save to localStorage, but continue even if it fails
                            safeStorage('gdprPreferences', JSON.stringify(preferences));
            
                            // Hide consent form with animation
                            consent.classList.remove('active');
                            overlay.classList.remove('active');
            
                            // Show thank you message
                            const message = analytics || marketing ?
                                'Thank you for accepting cookies!' :
                                'Preferences saved. Only essential cookies will be used.';
            
                            showNotification(message);
            
                            // You could also emit a custom event here for other scripts to react to
                            const event = new CustomEvent('gdprPreferencesSaved', {
                                detail: preferences
                            });
                            document.dispatchEvent(event);
                        }
            
                        function showNotification(message) {
                            const notification = document.createElement('div');
                            notification.style.cssText = `
                                position: fixed;
                                top: 1rem;
                                right: 1rem;
                                background: #10B981;
                                color: white;
                                padding: 1rem;
                                border-radius: 0.5rem;
                                box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
                                font-family: inherit;
                                font-size: 0.875rem;
                                z-index: 1000;
                                opacity: 0;
                                transform: translateY(-1rem);
                                transition: all 0.3s ease;
                            `;
            
                            notification.textContent = message;
                            document.body.appendChild(notification);
            
                            // Trigger animation
                            setTimeout(() => {
                                notification.style.opacity = '1';
                                notification.style.transform = 'translateY(0)';
                            }, 100);
            
                            // Remove notification after 3 seconds
                            setTimeout(() => {
                                notification.style.opacity = '0';
                                notification.style.transform = 'translateY(-1rem)';
                                setTimeout(() => notification.remove(), 300);
                            }, 3000);
                        }
            
                        acceptAllBtn.addEventListener('click', () => {
                            analyticsCheckbox.checked = true;
                            marketingCheckbox.checked = true;
                            savePreferences(true, true);
                        });
            
                        rejectAllBtn.addEventListener('click', () => {
                            analyticsCheckbox.checked = false;
                            marketingCheckbox.checked = false;
                            savePreferences(false, false);
                        });
                    });
                </script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
                <script>
                    "use strict";
                    jQuery(function($) {
                        $('a.sywh-open-services').click(function() {
                            if ($('.sywh-services').hasClass('active')) {
                                $('.sywh-services').removeClass('active');
                                $('a.sywh-open-services i.fa-times').hide();
                                $('a.sywh-open-services i.fa-comments').show();
                                $('a.sywh-open-services').removeClass('data-tooltip-hide');
                                $('.sywh-services a:nth-child(1)').delay(0).fadeOut();
                                $('.sywh-services a:nth-child(2)').delay(100).fadeOut();
                                $('.sywh-services a:nth-child(3)').delay(200).fadeOut();
                                $('.sywh-services a:nth-child(4)').delay(300).fadeOut();
                                $('.sywh-services a:nth-child(5)').delay(400).fadeOut();
                            } else {
                                $('.sywh-services').addClass('active');
                                $('a.sywh-open-services i.fa-comments').hide();
                                $('a.sywh-open-services i.fa-times').show();
                                $('a.sywh-open-services').addClass('data-tooltip-hide');
                                $('.sywh-services a:nth-child(5)').delay(0).fadeIn();
                                $('.sywh-services a:nth-child(4)').delay(100).fadeIn();
                                $('.sywh-services a:nth-child(3)').delay(200).fadeIn();
                                $('.sywh-services a:nth-child(2)').delay(300).fadeIn();
                                $('.sywh-services a:nth-child(1)').delay(400).fadeIn();
                            }
                        });
                    });
                </script>
                <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

                <script>
                    // Initialize Swiper
                    document.addEventListener("DOMContentLoaded", function () {
                        var swiper = new Swiper(".mySwiper", {
                            slidesPerView: 1,
                            autoplay: {
                                delay: 3000,
                                disableOnInteraction: false,
                            },
                            pagination: {
                                el: ".swiper-pagination",
                                clickable: true,
                            },
                            loop: true
                        });
                    });
                </script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper('.swiper', {
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const adPopup = document.getElementById('adPopup');
        const primaryBtn = document.getElementById('primaryBtn');
        const secondaryBtn = document.getElementById('secondaryBtn');
        let popupClosed = false;

        // Show popup after 1 second if not already closed
        setTimeout(function() {
            if (!popupClosed) {
                adPopup.classList.add('active');
            }
        }, 1000);
        
        // Close function
        function closePopup() {
            adPopup.classList.remove('active');
            popupClosed = true;
        }

        // Shop Now button - just closes popup (no redirect)
        primaryBtn.addEventListener('click', function() {
            closePopup();
        });

        // Maybe Later button - just closes popup
        secondaryBtn.addEventListener('click', closePopup);

        // Countdown timer
        function updateTimer() {
            const timerElement = document.querySelector('.ad-timer');
            if (timerElement) {
                const offerEnd = new Date();
                offerEnd.setDate(offerEnd.getDate() + 1);
                offerEnd.setHours(23, 59, 59, 0);
                
                const now = new Date();
                const diff = offerEnd - now;
                
                if (diff <= 0) {
                    timerElement.textContent = "Offer has expired!";
                    timerElement.style.color = "#e74c3c";
                    timerElement.style.fontWeight = "bold";
                    return;
                }
                
                const hours = Math.floor(diff / (1000 * 60 * 60));
                const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((diff % (1000 * 60)) / 1000);
                
                timerElement.textContent = `Offer ends in ${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
                
                if (hours < 1) {
                    timerElement.style.color = "#e74c3c";
                    timerElement.style.fontWeight = "bold";
                }
            }
        }

        setInterval(updateTimer, 1000);
        updateTimer();
    });
</script>


        </body>



        </html>