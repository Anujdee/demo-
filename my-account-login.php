<?php
session_start();
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $plan = mysqli_real_escape_string($conn, $_POST['plan']);

    // Query to check the login details
    $query = "SELECT * FROM tbl_subscription_user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['plan'] = $plan;

        // Redirect to the buyer page
        header('Location: my-account');
        exit;
    } else {
        $error_message = "Invalid username or password.";
    }
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
    <script>
        // JavaScript function to display an alert if there's an error
        function showAlert(message) {
            alert(message);
        }
    </script>

    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
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
        <h1 class="d-none">Welcome to Global Connection 21 message or remove it!</h1>

        <!-- Start of Header -->
        <?php include 'header.php'; ?>

        <!-- End of Header -->

        <!-- Start of Main -->
        <main class="main login-page">
            <!-- Start of Page Header -->
            <div class="page-header">

                <div class="container">
                    <h1 class="page-title mb-0" style="color: #ffffff;font-family: Georgia, 'Times New Roman', Times, serif;">Log In Account</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index">Home</a></li>
                        <li>Log In</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->
            <div class="page-content">
                <div class="container">
                    <div class="login-popup">
                        <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
                            <ul class="nav nav-tabs text-uppercase" role="tablist" style="border-bottom: none;">
                                <a href="index" class="logo ml-lg-0">
                                    <img src="assets\images\demos\demo14\1.svg" alt="logo" width="230" height="45" />
                                </a>
                                <!-- <li class="nav-item">
                                    <a href="#sign-in" class="nav-link">Log In</a>
                                </li> -->
                                <!-- <li class="nav-item">
                                    <a href="#sign-up" class="nav-link">Sign Up</a>
                                </li> -->
                            </ul>
                            <div class="tab-content">

                                <div class="tab-pane active">
                                <form action="" method="POST">
    <div>
        <label>Registered Username</label>
        <input type="text" class="form-control" name="username" id="username" required>
    </div>
    <div>
        <label>Password *</label>
        <input type="password" class="form-control" name="password" id="password" required>
    </div>
    <div>
        <label>Select Plan *</label>
        <select name="plan" required class="form-control mb-5">
            <option value="">Select Plan</option>
            <option value="Elite Plan">Elite Plan</option>
            <option value="Platinum Plan">Platinum Plan</option>
            <option value="Diamond Plan">Diamond Plan</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Sign In</button>
</form>

<?php if (!empty($error_message)) : ?>
    <script>
        // Trigger alert with the error message
        alert("<?php echo htmlspecialchars($error_message, ENT_QUOTES, 'UTF-8'); ?>");
    </script>
<?php endif; ?>


                                </div>

                            </div>
                            <p class="text-center">Sign in with <a href="signin">Create New Account</a></p>
                            <div class="social-icons social-icon-border-color d-flex justify-content-center">
                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                <a href="#" class="social-icon social-google fab fa-google"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
        <?php include 'footer.php'; ?>

        <!-- End of Sticky Footer -->

        <!-- Start of Scroll Top -->

        <!-- End of Mobile Menu -->

        <!-- Plugin JS File -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/main.min.js"></script>

</body>

</html>