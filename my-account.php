<?php
include "config.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<?php
include "config.php";
if (isset($_POST['submit'])) {



    $file_name = $_FILES['pimage']['name'];
    $tempname = $_FILES['pimage']['tmp_name'];
    $folder = 'Adminstrator/img/' . $file_name;

    $uname = $_POST['username'];
    $mail = $_POST['mail'];
    $pname = $_POST['product_name'];
    $pmain = $_POST['main_cat'];
    $psub = $_POST['sub_cat'];
    $pquantity = $_POST['p_quantity'];
    $pprice = $_POST['price'];
    $pdescr = $_POST['pdesc'];
    $pcname = $_POST['cname'];
    $ppoints = $_POST['points'];
    $ptype = $_POST['b_type'];
    $pcountry = $_POST['country'];
    $sql = mysqli_query($conn, "INSERT INTO tbl_product (`image`,`product_name`, `main_cat`, `sub_cat`, `quantity`, `business_type`, `company_name`, `desc`, `points`, `price`, `country`, `user_name`, `mail`)
     VALUES ('$file_name','$pname','$pmain','$psub','$pquantity','$ptype','$pcname','$pdescr','$ppoints','$pprice','$pcountry','$uname','$mail')");
    // if ($sql) {
    //     echo "<script>alert('Your product detail has been submitted !');window.location.href='View-Products';</script>";
    // } else {
    //     echo "error" . mysqli_error($conn);
    // }

    if (move_uploaded_file($tempname, $folder)) {
        echo "<script>alert('Your product details has been submitted !');window.location.href='my-account';</script>";
    } else {
        echo "<h2>File not Uploaded</h2>";
    }

    $ToEmail = 'help@globalconnection21.com';
    $EmailSubject = 'One User add a product, please verify !!!';
    // $mailheader =  "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = ' 
        Contact New Member On Website
        
        
        Username :-- ' . $uname . '
        User Mail    :-- ' . $mail . '
        Product Name         :-- ' . $pname . '
        Product Main Caetgory   :-- ' . $pmain . '
        Product Sub Category :-- ' . $psub . '
        Prodduct Quantity    :-- ' . $pquantity . '
        Business Type         :-- ' . $ptype . '
        Company Name   :-- ' . $pcname . '
        Product Description :-- ' . $pdescr . '
        Total Points    :-- ' . $ppoints . '
        Product Price         :-- ' . $pprice . '
        Product Upload Country   :-- ' . $pcountry . '
       
        
          
          
        If you have any trouble during this Enquiry process or
        using our website, you can always contact us at:  
        We hope that youll have a wonderful experience using 
        our website. Any suggestions or feedback is more than
        welcome, were always
        happy to hear from you in order to improve our 
        services 
         
        Kind Regards, 
        GlobalConnection21,
        Requesting A Call:
       +91 735 104 2162;
       help@globalconnection21.com';


    mail($ToEmail, $EmailSubject, $MESSAGE_BODY) or die("Failure");
}


?>


<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>My Account </title>

    <meta name="keywords" content="Global Connection21" />
    <meta name="description" content="Global Connection21">
    <meta name="author" content="Global Connection21">

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
    <style>
        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-item .nav-link.active,
        .nav-tabs .nav-item:hover .nav-link {
            color: #da2d5b;
            background-color: transparent;
            padding: 10px 10px;
            border-radius: 5px;
            margin-left: 5px;
            margin-top: 5px;
        }

        .user-tab th {
            text-align: left;
        }
    </style>
</head>

<body class="my-account">
    <div class="page-wrapper">
        <!-- Start of Header -->
        <?php include 'header.php'; ?>

        <!-- End of Header -->


        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">My Account</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index">Home</a></li>
                        <li>My account</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            <div class="page-content pt-2">
                <div class="container">
                    <div class="tab tab-vertical row gutter-lg">
                        <ul class="nav nav-tabs mb-6" role="tablist">
                            <li class="nav-item">
                                <a href="my-account-login" class="nav-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                        <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5" />
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                    </svg> &nbsp;&nbsp; My Account </a>
                            </li>
                            <li class="nav-item">
                                <a href="#account-details" class="nav-link active">Add New Products</a>
                            </li>
                            <li class="nav-item">
                                <a href="#account-orders" class="nav-link">My Product</a>
                            </li>
                            <li class="nav-item">
                                <a href="#account-profile" class="nav-link">Account Deatils</a>
                            </li>

                            <li class="link-item">
                                <a href="buyer">Logout</a>
                            </li>
                        </ul>

                        <div class="tab-content mb-6">


                            <div class="tab-pane mb-4" id="account-orders">
                                <div class="icon-box icon-box-side icon-box-light">
                                    <span class="icon-box-icon icon-orders">
                                        <i class="w-icon-orders"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title text-capitalize ls-normal mb-0">Orders</h4>
                                    </div>
                                </div>
                                <?php if (isset($_SESSION['username'])): ?>
                                    <table class="shop-table account-orders-table mb-6">
                                        <thead>
                                            <tr class="user-tab">


                                                <th class="order-status">Product Name</th>
                                                <th class="order-total">Sell Price</th>
                                                <th class="order-status">Company</th>
                                                <th class="order-date">Country</th>
                                                <th class="order-date">Upload Date</th>



                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Get the logged-in user's username
                                            $loggedInUser = mysqli_real_escape_string($conn, $_SESSION['username']);

                                            // Query to fetch products uploaded by the logged-in user
                                            $query = mysqli_query($conn, "SELECT * FROM tbl_product WHERE user_name = '$loggedInUser'");

                                            // Check if any product is found
                                            if (mysqli_num_rows($query) > 0) {
                                                while ($row = mysqli_fetch_array($query)) {
                                                    // Ensure all required fields have data
                                                    if (
                                                        !empty($row['p_ID']) && !empty($row['product_name']) && !empty($row['price']) &&
                                                        !empty($row['company_name']) && !empty($row['country']) && !empty($row['CreatedAt'])
                                                    ) {
                                            ?>
                                                        <tr>
                                                            <td class="whitespace-nowrap"><?php echo htmlspecialchars($row['product_name']); ?></td>
                                                            <td><?php echo htmlspecialchars($row['price']); ?></td>
                                                            <td><?php echo htmlspecialchars($row['company_name']); ?></td>
                                                            <td><?php echo htmlspecialchars($row['country']); ?></td>
                                                            <td><?php echo htmlspecialchars($row['CreatedAt']); ?></td>
                                                        </tr>
                                            <?php
                                                    }
                                                }
                                            } else {
                                                // If no products are found for the user
                                                echo "<tr><td colspan='5' class='center-message'>No products found.</td></tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                <?php else: ?>
                                    <!-- If the user is not logged in -->
                                    <p class="center-message">Please log in to view your products.</p>
                                <?php endif; ?>

                                <a href="login" class="btn btn-dark btn-rounded btn-icon-right">Login Now<i class="w-icon-long-arrow-right"></i></a>
                            </div>

                            <div class="tab-pane" id="account-profile">
                                <div class="icon-box icon-box-side icon-box-light">
                                    <span class="icon-box-icon icon-map-marker mb-5">
                                        <i class="w-icon-account"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title mb-5 ls-normal">Profile Details</h4>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 mb-12">
                                        <div class="ecommerce-address billing-address pr-lg-8">
                                            <address class="mb-4">
                                                <?php

                                                // Ensure the user is logged in
                                                if (!isset($_SESSION['username'])) {
                                                    echo "Error: User is not logged in.";
                                                    exit;
                                                }

                                                $loggedInUser = $_SESSION['username']; // Now it will be available safely

                                                // Your query logic
                                                $query = mysqli_query($conn, "SELECT * FROM tbl_product WHERE user_name = '$loggedInUser'");

                                                // Start your table and display logic
                                                ?>
                                                <table class="shop-table account-orders-table mb-6">
                                                    <thead>
                                                        <tr class="user-tab">
                                                            <th class="order-status">User Name</th>
                                                            <th class="order-total">Email</th>
                                                            <th class="order-status">Company</th>
                                                            <th class="order-date">Country</th>
                                                            <th class="order-date">Created Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
    <?php
    // Modify the query to limit the results to 1
    $query = mysqli_query($conn, "SELECT * FROM tbl_product WHERE user_name = '$loggedInUser' LIMIT 1");

    // Check if any product is found
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query); // Fetch the first (and only) row
        if (
            !empty($row['p_ID']) && !empty($row['user_name']) && !empty($row['mail']) &&
            !empty($row['company_name']) && !empty($row['country']) && !empty($row['CreatedAt'])
        ) {
    ?>
            <tr>
                <td class="whitespace-nowrap"><?php echo htmlspecialchars($row['user_name']); ?></td>
                <td><?php echo htmlspecialchars($row['mail']); ?></td>
                <td><?php echo htmlspecialchars($row['company_name']); ?></td>
                <td><?php echo htmlspecialchars($row['country']); ?></td>
                <td><?php echo htmlspecialchars($row['CreatedAt']); ?></td>
            </tr>
    <?php
        }
    } else {
        echo "<tr><td colspan='5' class='center-message'>No products found.</td></tr>";
    }
    ?>
</tbody>

                                                </table>

                                            </address>

                                        </div>
                                    </div>

                                </div>
                            </div>



                            <div class="tab-pane active in" id="account-details">
                                <div class="icon-box icon-box-side icon-box-light">
                                    <span class="icon-box-icon icon-orders">
                                        <i class="w-icon-orders"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title mb-0 ls-normal">Add New Products</h4>
                                    </div>
                                </div>
                                <form class="form account-details-form" action="#" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="username">Username *</label>
                                                <input
                                                    type="text"
                                                    id="username"
                                                    name="username"
                                                    placeholder="Enter Username"
                                                    value="<?php echo $username; ?>"
                                                    readonly
                                                    required
                                                    class="form-control form-control-md">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="lastname">Mail Address *</label>
                                                <input type="text" id="lastname" name="mail" placeholder="xyz123@gmail.com" required
                                                    class="form-control form-control-md">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="lastname">Select Country *</label>
                                                <select name="country" required style="display: block;width: 100%;min-height: 4.2rem;padding: 0.85rem 2rem;border: 1px solid #da2d5b;margin-bottom:20px;font-size: 1.4rem;font-family: Poppins, sans-serif;line-height: 1.5;font-weight: 400;color: #999;background-color: transparent;border-radius: 0;-webkit-box-shadow: none;box-shadow: none;outline: 0;">
                                                    <option value="">-- Select Country --</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
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
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="Brunei">Brunei</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cabo Verde">Cabo Verde</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Central African Republic">Central African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czechia (Czech Republic)">Czechia (Czech Republic)</option>
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
                                                    <option value="Eswatini (fmr. Swaziland)">Eswatini (fmr. Swaziland)</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Holy See">Holy See</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran">Iran</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libya">Libya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia">Micronesia</option>
                                                    <option value="Moldova">Moldova</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montenegro">Montenegro</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar (formerly Burma)">Myanmar (formerly Burma)</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="North Korea">North Korea</option>
                                                    <option value="North Macedonia">North Macedonia</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Palestine State">Palestine State</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russia">Russia</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
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
                                                    <option value="South Korea">South Korea</option>
                                                    <option value="South Sudan">South Sudan</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syria">Syria</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Timor-Leste">Timor-Leste</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Vietnam">Vietnam</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>


                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="lastname">Product Image * (Large size not accepted only .jpeg)</label>
                                                <input type="file" id="lastname" name="pimage" placeholder="Doe" required
                                                    class="form-control form-control-md">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="lastname">Product name *</label>
                                                <input type="text" id="lastname" name="product_name" placeholder="Mustard Oil" required
                                                    class="form-control form-control-md">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="lastname">Product Main Category *</label>
                                                <select name="main_cat" id="main_category" required style="display: block;width: 100%;min-height: 4.2rem;padding: 0.85rem 2rem;border: 1px solid #da2d5b;margin-bottom:20px;font-size: 1.4rem;font-family: Poppins, sans-serif;line-height: 1.5;font-weight: 400;color: #999;background-color: transparent;border-radius: 0;-webkit-box-shadow: none;box-shadow: none;outline: 0;">
                                                    <option value="">Category(s)</option>
                                                    <option value="Agriculture">Agriculture</option>
                                                    <option value="Food & Beverages">Food & Beverages</option>

                                                    <option value="Construction & real estate">
                                                        Construction & real estate</option>
                                                    <option value="Electronic & Electrical">
                                                        Electronic & Electrical</option>
                                                    <option value="Apparel and fashion accessories">Apparel & fashion accessories</option>
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
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="lastname">Product Sub Category *</label>
                                                <select name="sub_cat" id="sub_category" required style="display: block;width: 100%;min-height: 4.2rem;padding: 0.85rem 2rem;border: 1px solid #da2d5b;margin-bottom:20px;font-size: 1.4rem;font-family: Poppins, sans-serif;line-height: 1.5;font-weight: 400;color: #999;background-color: transparent;border-radius: 0;-webkit-box-shadow: none;box-shadow: none;outline: 0;">


                                                    <option value="">Sub Category</option>


                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="lastname">Product Quantity *</label>
                                                <select name="p_quantity" required style="display: block;width: 100%;min-height: 4.2rem;padding: 0.85rem 2rem;border: 1px solid #da2d5b;margin-bottom:20px;font-size: 1.4rem;font-family: Poppins, sans-serif;line-height: 1.5;font-weight: 400;color: #999;background-color: transparent;border-radius: 0;-webkit-box-shadow: none;box-shadow: none;outline: 0;">
                                                    <option>Select Sub Category</option>
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
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="lastname">Price with Currency *</label>
                                                <input type="text" id="lastname" required name="price" placeholder="$$$ ₹₹₹"
                                                    class="form-control form-control-md">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="lastname">Product Description *</label>
                                                <input type="text" id="lastname" required name="pdesc" placeholder="Description"
                                                    class="form-control form-control-md">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="lastname">Company name *</label>
                                                <input type="text" id="lastname" required name="cname" placeholder="Company"
                                                    class="form-control form-control-md">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="lastname">MOQ *</label>
                                                <input type="text" id="lastname" required name="points" placeholder="Doe"
                                                    class="form-control form-control-md">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="lastname">Business Type *</label>
                                                <select name="b_type" required style="display: block;width: 100%;min-height: 4.2rem;padding: 0.85rem 2rem;border: 1px solid #da2d5b;margin-bottom:20px;font-size: 1.4rem;font-family: Poppins, sans-serif;line-height: 1.5;font-weight: 400;color: #999;background-color: transparent;border-radius: 0;-webkit-box-shadow: none;box-shadow: none;outline: 0;">
                                                    <option>Select Business Type</option>

                                                    <option value="Supplier">Supplier</option>
                                                   <option value="Trader">Trader</option>
                                                    <option value="Manufacturer">Manufacturer</option>
                                                    <option value="Grower">Grower</option>
                                                    <option value="Not available">Not available</option>


                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit" name="submit" class="btn btn-dark btn-rounded btn-sm mb-4">Save Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
        <?php include 'footer.php'; ?>

        <!-- End of Mobile Menu -->

        <!-- Plugin JS File -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/main.min.js"></script>

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


        <?php
        session_start();
        session_unset(); // Unset all session variables
        session_destroy(); // Destroy the session
        header("Location: login.php"); // Redirect to login page
        exit();
        ?>

        <?php
        include "config.php"; // Database connection

        // Start session if not already started
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Fetch the logged-in user's ID from the session
        $userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
        $username = "";

        // Fetch the username from the database
        if ($userId) {
            $query = "SELECT username FROM tbl_subscription_user WHERE id = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("i", $userId);
            $stmt->execute();
            
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $username = htmlspecialchars($row['username']); // Safely escape output
            }
        }
        ?>





</body>




</html>