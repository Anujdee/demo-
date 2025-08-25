<?php
session_start();
include('config.php');
error_reporting(0);
// Get the product name from the query parameter
$product_name = isset($_GET['product_name']) ? htmlspecialchars($_GET['product_name']) : '';

 
 

if (isset($_POST['submit'])) {

    $clientname = $_POST['clientname'];
    $clientmail = $_POST['clientmail'];
    $clientcountry = $_POST['clientcountry'];
    $clientcity = $_POST['clientcity'];
    $clientphone = $_POST['clientphone'];
    $clientproduct = $_POST['clientproduct'];
    $clientquantity = $_POST['clientquantity'];
    $clientpiece = $_POST['clientpiece'];
    
     
    $sql = mysqli_query($conn, "INSERT INTO `tbl_quotes` (`fullname`,`email`,`country`,`state`,`number`,`product_name`,`product_quantity`,`product_piece`)
     VALUES ('$clientname','$clientmail','$clientcountry','$clientcity','$clientphone','$clientproduct','$clientquantity','$clientpiece')");
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
    <meta name="author" content="Global Connection21">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets\images\demos\demo14\site-icon.svg">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700'] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
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
        <?php include 'header.php' ;?>

        <!-- End of Header -->


        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">Confirmed Deals, Genuine Evidence!</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-10 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index">Home</a></li>
                        <li>Confirmed Deals, Genuine Evidence!</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
             
         <div class="container">
           <?php
                    // Fetch products from database
                    $query = mysqli_query($conn, "SELECT * FROM deals");
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
                                    <div class="" style="background-color:#16325B;padding:8px 25px;text-align:left">
                                        <h4 class="post-title" >
                                            <a href="contact-us?product_name=<?php echo urlencode($row['product']); ?>" style="color:#fff">
                                                <?php echo htmlspecialchars($row['product']); ?>
                                            </a>
                                        </h4>
                                        <p class="blog">
                                            <a href="contact-us?product_name=<?php echo urlencode($row['price']); ?>" style="color:#fff;margin-top:-5px">
                                                $<?php echo htmlspecialchars($row['price']); ?>
                                            </a>
                                        </p>
                                         
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                     </div>
             <!-- End of PageContent -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
        <?php include 'footer.php' ;?>

    <!-- End of Sticky Footer -->
    
    <!-- Start of Scroll Top -->
     
    <!-- End of Mobile Menu -->

    <!-- Plugin JS File -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/main.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key="></script>
   
</body>


</html>