<?php
// ===== Detect Visitor IP =====
if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
    $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ipList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
    $ip = trim($ipList[0]);
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

// ===== Local Testing =====
if ($ip == '127.0.0.1' || $ip == '::1') {
    $ip = '103.159.47.58'; // India ka example IP
}

// ===== IPSTACK API CALL =====
$access_key = "b9902ea3ee355d19d934775329d65da5";
$ch = curl_init("http://api.ipstack.com/{$ip}?access_key={$access_key}&fields=country_code");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$locationData = json_decode($response, true);

// ===== Default Currency =====
$currency = "USD";
if (!empty($locationData['country_code']) && strtoupper($locationData['country_code']) == 'IN') {
    $currency = "INR";
}

// ===== Prices =====
$prices = [
    "Elite"     => ["USD" => 1199.00, "INR" => 95000],
    "Platinum"  => ["USD" => 1999.00, "INR" => 160000],
    "Diamond"   => ["USD" => 2999.00, "INR" => 240000]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Global Connection21</title>
    <meta name="keywords" content="Global Connection21" />
    <meta name="description" content="Global Connection21">
    <meta name="author" content="D-THEMES">

    <link rel="icon" type="image/png" href="assets/images/demos/demo14/site-icon.svg">

    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700,800', 'Seoge Script:400,500,600,700,800'] }
        };
        (function(d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LDFNSHR99H"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-LDFNSHR99H');
    </script>
    
</head>
<body>
<div class="page-wrapper">

    <?php include 'header.php'; ?>

    <main class="main login-page">
        <div class="page-header">
            <div class="container">
                <h1 class="page-title mb-0" style="color:#fff;font-family:Georgia,'Times New Roman',Times,serif;">Get plan</h1>
            </div>
        </div>

        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index">Home</a></li>
                    <li>Get plan</li>
                </ul>
            </div>
        </nav>

        <section class="pricing-section">
            <div class="container">
                <div class="outer-box">
                    <div class="row">

                        <!-- Elite Plan -->
                        <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <div class="icon-outer"><i class="fas fa-paper-plane"></i></div>
                                </div>
                                <div class="price-box">
                                    <div class="title">Elite Plan</div>
                                    <h4 class="price">
                                        <?php
                                        echo ($currency == "INR")
                                            ? "₹" . number_format($prices["Elite"]["INR"], 0, '.', ',')
                                            : "$" . number_format($prices["Elite"]["USD"], 2);
                                        ?>
                                    </h4>
                                </div>
                                <ul class="features">
                                    <li class="true">Verified And Genuine Order</li>
                                    <li class="true">Dedicated Catalogue Page</li>
                                    <li class="true">Business Website</li>
                                    <li class="true">Domain and Hosting Services</li>
                                    <li class="true">Live Chat on the Website</li>
                                    <li class="true">Google My Business Listing</li>
                                    <li class="true">Priority Listings</li>
                                    <li class="true">Dedicated Account Manager</li>
                                    <li class="true">Trade Analyst Data</li>
                                    <li class="false">SSL (Secure Socket Layer)</li>
                                    <li class="false">Mobile Responsive Website</li>
                                    <li class="false">Language Convert</li>
                                    <li class="false">Account Manager</li>
                                </ul>
                                <div class="btn-box">
                                    <a href="signin?plan_name=Elite+Plan" class="theme-btn">BUY ELITE PLAN</a>
                                </div>
                            </div>
                        </div>

                        <!-- Platinum Plan -->
                        <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <div class="icon-outer"><i class="fas fa-gem"></i></div>
                                </div>
                                <div class="price-box">
                                    <div class="title">Platinum Plan</div>
                                    <h4 class="price">
                                        <?php
                                        echo ($currency == "INR")
                                            ? "₹" . number_format($prices["Platinum"]["INR"], 0, '.', ',')
                                            : "$" . number_format($prices["Platinum"]["USD"], 2);
                                        ?>
                                    </h4>
                                </div>
                                <ul class="features">
                                    <li class="true">Verified And Genuine Order</li>
                                    <li class="true">Dedicated Catalogue Page</li>
                                    <li class="true">Business Website</li>
                                    <li class="true">Domain and Hosting Services</li>
                                    <li class="true">Live Chat on the Website</li>
                                    <li class="true">Google My Business Listing</li>
                                    <li class="true">Priority Listings</li>
                                    <li class="true">Dedicated Account Manager</li>
                                    <li class="true">Trade Analyst Data</li>
                                    <li class="true">SSL (Secure Socket Layer)</li>
                                    <li class="true">Mobile Responsive Website</li>
                                    <li class="false">Language Convert</li>
                                    <li class="false">Account Manager</li>
                                </ul>
                                <div class="btn-box">
                                    <a href="signin?plan_name=Platinum+Plan" class="theme-btn">PLATINUM PLAN</a>
                                </div>
                            </div>
                        </div>

                        <!-- Diamond Plan -->
                        <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <div class="icon-outer"><i class="fas fa-rocket"></i></div>
                                </div>
                                <div class="price-box">
                                    <div class="title">Diamond Plan</div>
                                    <h4 class="price">
                                        <?php
                                        echo ($currency == "INR")
                                            ? "₹" . number_format($prices["Diamond"]["INR"], 0, '.', ',')
                                            : "$" . number_format($prices["Diamond"]["USD"], 2);
                                        ?>
                                    </h4>
                                </div>
                                <ul class="features">
                                    <li class="true">Verified And Genuine Order</li>
                                    <li class="true">Dedicated Catalogue Page</li>
                                    <li class="true">Business Website</li>
                                    <li class="true">Domain and Hosting Services</li>
                                    <li class="true">Live Chat on the Website</li>
                                    <li class="true">Google My Business Listing</li>
                                    <li class="true">Priority Listings</li>
                                    <li class="true">Dedicated Account Manager</li>
                                    <li class="true">Trade Analyst Data</li>
                                    <li class="true">Digital Catalogue (Flipbook)</li>
                                    <li class="true">Banner Advertisement</li>
                                    <li class="true">Language Convert</li>
                                    <li class="true">Account Manager</li>
                                </ul>
                                <div class="btn-box">
                                    <a href="signin?plan_name=Diamond+Plan" class="theme-btn">DIAMOND PLAN</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

</div>

<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/js/main.min.js"></script>
</body>
</html>
