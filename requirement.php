<?php
session_start();
include('config.php');
error_reporting(0);
// Get the product name from the query parameter

 
 

if (isset($_POST['submit'])) {

    $firstname = $_POST['first-name'];
    $lastmail = $_POST['last-name'];
    $number = $_POST['number'];
    $mail = $_POST['mail'];
    $complaint = $_POST['complaint'];
    
    
     
    $sql = mysqli_query($conn, "INSERT INTO `tbl_complaint` (`first_name`,`last_name`,`number`,`mail`,`complaint`)
     VALUES ('$firstname','$lastmail','$number','$mail','$complaint')");
    if ($sql) {
        echo "<script>alert('Your complaint detail has been submitted !');window.location.href='index';</script>";
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

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: {
                families: ['Poppins:400,500,600,700']
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
    <link rel="preload" href="assets/fonts/wolmart87d5.woff?png09e" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
</head>

<body>
    <div class="page-wrapper">
        <!-- Start of Header -->
        <?php include 'header.php'; ?>

        <!-- End of Header -->


        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">Post Complaint</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="index">Home</a></li>
                        <li>Post Complaint</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content mb-8">
                <div class="container">
                    <div class="row gutter-lg">
                        <div class="main-content ">

                            <!-- End Post -->

                            <!-- End Post Navigation -->

                            <!-- End Related Posts -->


                            <!-- End Comments -->
                            <form class="form contact-us-form" action="" method="post">
                                <div class="row mb-9">
                                    <div class="col-lg-12 pr-lg-4 mb-4">



                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="">First Name*</label>
                                                <input type="text" class="form-control form-control-md" name="first-name" required
                                                    placeholder="First Name*">
                                            </div>
                                            <div class="col-lg-6">
                                            <label for="">Last Name*</label>

                                                <input type="text" class="form-control form-control-md" name="last-name"
                                                    placeholder="Last Name">
                                            </div>
                                            <div class="col-lg-6">
                                            <label for="">Contact Number*</label>

                                                <input type="number" class="form-control form-control-md" name="number" required
                                                    placeholder="Contact Number*">
                                            </div>
                                            <div class="col-lg-6">
                                            <label for="">E-Mail*</label>

                                                <input type="mail" class="form-control form-control-md" name="mail" required
                                                    placeholder="Email Address*">
                                            </div>

                                            


                                            <div class="col-lg-12">
                                            <label for="">Post Complaint*</label>

                                                <textarea name="complaint" id="" cols="3" rows="5" required
                                                    placeholder="  Post Complaint*"
                                                    style="background-color: transparent;border: 1px solid #da2d5b;margin-top: 20px;"></textarea>
                                            </div>
                                            <div class="col-lg-12 mt-5">
                                                <button name="submit" type="submit" class="btn btn-dark btn-block btn-rounded">Send my
                                                    requirements</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </form>
                        </div>
                        <!-- End of Main Content -->
                        <aside class="sidebar right-sidebar blog-sidebar sidebar-fixed sticky-sidebar-wrapper">
                            <div class="sidebar-overlay">
                                <a href="#" class="sidebar-close">
                                    <i class="close-icon"></i>
                                </a>
                            </div>
                            <a href="#" class="sidebar-toggle">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <div class="sidebar-content">
                                <div class="sticky-sidebar">

                                    <!-- End of Widget categories -->
                                    <div class="widget widget-posts">
                                        <h3 class="widget-title bb-no">Popular Products</h3>
                                        <div class="widget-body">
                                            <div class="swiper">
                                                <div class="swiper-container swiper-theme nav-top" data-swiper-options="{
                                                    'spaceBetween': 20,
                                                    'slidesPerView': 1
                                                }">
                                                    <div class="swiper-wrapper row cols-1">
                                                        <div class="swiper-slide widget-col">
                                                            <div class="post-widget mb-4">
                                                                <figure class="post-media br-sm">
                                                                    <img src="assets\images\demos\demo14\products\5.svg" alt="150" height="150" />
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">Nov 1, 2024</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="contact-us"> Fox Nuts </a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="post-widget mb-4">
                                                                <figure class="post-media br-sm">
                                                                    <img src="assets\images\demos\demo14\products\4.svg" alt="150" height="150" />
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">Des 5, 2024</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="contact-us">Basmati Rice</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="post-widget mb-2">
                                                                <figure class="post-media br-sm">
                                                                    <img src="assets\images\demos\demo14\products\6.svg" alt="150" height="150" />
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">Des 10, 2024</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="contact-us">Ajwa Dates</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Widget posts -->


                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
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
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
        <?php include 'footer.php'; ?>

    </div>
    <!-- End of Mobile Menu -->
    <!-- Plugin JS File -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/sticky/sticky.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/main.min.js"></script>
</body>


</html>