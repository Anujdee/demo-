<?php
// Get the plan name from the URL
$plan_name = isset($_GET['plan_name']) ? htmlspecialchars($_GET['plan_name']) : '';
?>

<?php
session_start();
include('config.php');
error_reporting(0);
// Get the product name from the query parameter
// $product_name = isset($_GET['product_name']) ? htmlspecialchars($_GET['product_name']) : '';

 
 

if (isset($_POST['submit'])) { 

    $clientname = $_POST['clientname'];
    $clientmail = $_POST['clientmail'];
    $clientcountry = $_POST['clientcountry'];
    $clientcity = $_POST['clientcity'];
    $clientphone = $_POST['clientphone'];
    $clientquantity = $_POST['clientquantity'];
    $clientpiece = $_POST['clientpiece'];
    $plan_name = $_POST['plan_name'];
    $plan_type = $_POST['plan_type'];

    
     
    $sql = mysqli_query($conn, "INSERT INTO `tbl_quotes` (`fullname`,`email`,`country`,`state`,`number`,`subscriptio`,`code`,`plan_name`,`pay_type`)
     VALUES ('$clientname','$clientmail','$clientcountry','$clientcity','$clientphone','$clientquantity','$clientpiece',' $plan_name','$plan_type')");
    if ($sql) {
        echo "<script>alert('Your Subscription detail has been submitted !');window.location.href='index';</script>";
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
                    <h1 class="page-title mb-0" style="color: #ffffff;font-family: Georgia, 'Times New Roman', Times, serif;">Register Account</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index">Home</a></li>
                        <li>Sign In</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-popup">
                                <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
                                    <ul class="nav nav-tabs text-uppercase" role="tablist" style="border-bottom: none;">
                                        <a href="index" class="logo ml-lg-0">
                                            <img src="assets\images\demos\demo14\1.svg" alt="logo" width="230" height="45" />
                                        </a>
                                        <!-- <li class="nav-item">
                                    <a href="#sign-up" class="nav-link">Sign Up</a>
                                </li> -->
                                    </ul>
                                    <div class="tab-content">

                                        <div class="tab-pane active" id="sign-in">
                                            <form class="form checkout-form" action="#" method="post">
                                                <div class="row mb-9">
                                                    <div class="col-lg-12 pr-lg-4 mb-4">



                                                        <div class="row">

                                                        <div class="col-lg-6">
                                                                <label for="username">Plan Name*</label>

                                                                <input type="text" id="plan" class="form-control form-control-md" name="plan_name" value="<?php echo $plan_name; ?>"   />
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <label for="username">Select Payment Method*</label>

                                                                <select name="plan_type" class="form-control form-control-md" required>
                                                                   
                                                                    <option value="">Select payment method</option>
                                                                    <option value="T/T">T/T</option>
                                                                    <option value="D/A">D/A</option>
                                                                    <option value="L/C">L/C</option>
                                                                    <option value=" D/P"> D/P </option>
                                                                    <option value="PayPal">PayPal</option>
                                                                    <option value="Western Union">Western Union</option>
                                                                    <option value="Money Gram">Money Gram</option>

                                                                    </select> </div>
                                                            <div class="col-lg-6">
                                                                <label for="username">Full Name*</label>

                                                                <input type="text" class="form-control form-control-md" name="clientname" required
                                                                    placeholder="Full Name*">
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="username">Email Address*</label>

                                                                <input type="text" class="form-control form-control-md" name="clientmail" required
                                                                    placeholder="Email Address*">
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="username">Select Country*</label>

                                                                <select name="clientcountry" class="form-control form-control-md" required>
                                                                    <option value="default" selected="selected">Select Country
                                                                    </option>
                                                                    <option value="">Select a country</option>
                                                                    <option value="AF">Afghanistan</option>
                                                                    <option value="AL">Albania</option>
                                                                    <option value="DZ">Algeria</option>
                                                                    <option value="AS">American Samoa</option>
                                                                    <option value="AD">Andorra</option>
                                                                    <option value="AO">Angola</option>
                                                                    <option value="AG">Antigua and Barbuda</option>
                                                                    <option value="AR">Argentina</option>
                                                                    <option value="AM">Armenia</option>
                                                                    <option value="AU">Australia</option>
                                                                    <option value="AT">Austria</option>
                                                                    <option value="AZ">Azerbaijan</option>
                                                                    <option value="BS">Bahamas</option>
                                                                    <option value="BH">Bahrain</option>
                                                                    <option value="BD">Bangladesh</option>
                                                                    <option value="BB">Barbados</option>
                                                                    <option value="BY">Belarus</option>
                                                                    <option value="BE">Belgium</option>
                                                                    <option value="BZ">Belize</option>
                                                                    <option value="BJ">Benin</option>
                                                                    <option value="BT">Bhutan</option>
                                                                    <option value="BO">Bolivia</option>
                                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                                    <option value="BW">Botswana</option>
                                                                    <option value="BR">Brazil</option>
                                                                    <option value="BN">Brunei</option>
                                                                    <option value="BG">Bulgaria</option>
                                                                    <option value="BF">Burkina Faso</option>
                                                                    <option value="BI">Burundi</option>
                                                                    <option value="KH">Cambodia</option>
                                                                    <option value="CM">Cameroon</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="CV">Cape Verde</option>
                                                                    <option value="CF">Central African Republic</option>
                                                                    <option value="TD">Chad</option>
                                                                    <option value="CL">Chile</option>
                                                                    <option value="CN">China</option>
                                                                    <option value="CO">Colombia</option>
                                                                    <option value="KM">Comoros</option>
                                                                    <option value="CG">Congo (Brazzaville)</option>
                                                                    <option value="CD">Congo (Kinshasa)</option>
                                                                    <option value="CR">Costa Rica</option>
                                                                    <option value="CI">Côte d'Ivoire</option>
                                                                    <option value="HR">Croatia</option>
                                                                    <option value="CU">Cuba</option>
                                                                    <option value="CY">Cyprus</option>
                                                                    <option value="CZ">Czech Republic</option>
                                                                    <option value="DK">Denmark</option>
                                                                    <option value="DJ">Djibouti</option>
                                                                    <option value="DM">Dominica</option>
                                                                    <option value="DO">Dominican Republic</option>
                                                                    <option value="EC">Ecuador</option>
                                                                    <option value="EG">Egypt</option>
                                                                    <option value="SV">El Salvador</option>
                                                                    <option value="GQ">Equatorial Guinea</option>
                                                                    <option value="ER">Eritrea</option>
                                                                    <option value="EE">Estonia</option>
                                                                    <option value="SZ">Eswatini</option>
                                                                    <option value="ET">Ethiopia</option>
                                                                    <option value="FJ">Fiji</option>
                                                                    <option value="FI">Finland</option>
                                                                    <option value="FR">France</option>
                                                                    <option value="GA">Gabon</option>
                                                                    <option value="GM">Gambia</option>
                                                                    <option value="GE">Georgia</option>
                                                                    <option value="DE">Germany</option>
                                                                    <option value="GH">Ghana</option>
                                                                    <option value="GR">Greece</option>
                                                                    <option value="GD">Grenada</option>
                                                                    <option value="GT">Guatemala</option>
                                                                    <option value="GN">Guinea</option>
                                                                    <option value="GW">Guinea-Bissau</option>
                                                                    <option value="GY">Guyana</option>
                                                                    <option value="HT">Haiti</option>
                                                                    <option value="HN">Honduras</option>
                                                                    <option value="HU">Hungary</option>
                                                                    <option value="IS">Iceland</option>
                                                                    <option value="IN">India</option>
                                                                    <option value="ID">Indonesia</option>
                                                                    <option value="IR">Iran</option>
                                                                    <option value="IQ">Iraq</option>
                                                                    <option value="IE">Ireland</option>
                                                                    <option value="IL">Israel</option>
                                                                    <option value="IT">Italy</option>
                                                                    <option value="JM">Jamaica</option>
                                                                    <option value="JP">Japan</option>
                                                                    <option value="JO">Jordan</option>
                                                                    <option value="KZ">Kazakhstan</option>
                                                                    <option value="KE">Kenya</option>
                                                                    <option value="KI">Kiribati</option>
                                                                    <option value="KP">North Korea</option>
                                                                    <option value="KR">South Korea</option>
                                                                    <option value="KW">Kuwait</option>
                                                                    <option value="KG">Kyrgyzstan</option>
                                                                    <option value="LA">Laos</option>
                                                                    <option value="LV">Latvia</option>
                                                                    <option value="LB">Lebanon</option>
                                                                    <option value="LS">Lesotho</option>
                                                                    <option value="LR">Liberia</option>
                                                                    <option value="LY">Libya</option>
                                                                    <option value="LI">Liechtenstein</option>
                                                                    <option value="LT">Lithuania</option>
                                                                    <option value="LU">Luxembourg</option>
                                                                    <option value="MG">Madagascar</option>
                                                                    <option value="MW">Malawi</option>
                                                                    <option value="MY">Malaysia</option>
                                                                    <option value="MV">Maldives</option>
                                                                    <option value="ML">Mali</option>
                                                                    <option value="MT">Malta</option>
                                                                    <option value="MH">Marshall Islands</option>
                                                                    <option value="MR">Mauritania</option>
                                                                    <option value="MU">Mauritius</option>
                                                                    <option value="MX">Mexico</option>
                                                                    <option value="FM">Micronesia</option>
                                                                    <option value="MD">Moldova</option>
                                                                    <option value="MC">Monaco</option>
                                                                    <option value="MN">Mongolia</option>
                                                                    <option value="ME">Montenegro</option>
                                                                    <option value="MA">Morocco</option>
                                                                    <option value="MZ">Mozambique</option>
                                                                    <option value="MM">Myanmar</option>
                                                                    <option value="NA">Namibia</option>
                                                                    <option value="NR">Nauru</option>
                                                                    <option value="NP">Nepal</option>
                                                                    <option value="NL">Netherlands</option>
                                                                    <option value="NZ">New Zealand</option>
                                                                    <option value="NI">Nicaragua</option>
                                                                    <option value="NE">Niger</option>
                                                                    <option value="NG">Nigeria</option>
                                                                    <option value="NO">Norway</option>
                                                                    <option value="OM">Oman</option>
                                                                    <option value="PK">Pakistan</option>
                                                                    <option value="PW">Palau</option>
                                                                    <option value="PS">Palestine</option>
                                                                    <option value="PA">Panama</option>
                                                                    <option value="PG">Papua New Guinea</option>
                                                                    <option value="PY">Paraguay</option>
                                                                    <option value="PE">Peru</option>
                                                                    <option value="PH">Philippines</option>
                                                                    <option value="PL">Poland</option>
                                                                    <option value="PT">Portugal</option>
                                                                    <option value="QA">Qatar</option>
                                                                    <option value="RO">Romania</option>
                                                                    <option value="RU">Russia</option>
                                                                    <option value="RW">Rwanda</option>
                                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                                    <option value="LC">Saint Lucia</option>
                                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                                    <option value="WS">Samoa</option>
                                                                    <option value="SM">San Marino</option>
                                                                    <option value="ST">Sao Tome and Principe</option>
                                                                    <option value="SA">Saudi Arabia</option>
                                                                    <option value="SN">Senegal</option>
                                                                    <option value="RS">Serbia</option>
                                                                    <option value="SC">Seychelles</option>
                                                                    <option value="SL">Sierra Leone</option>
                                                                    <option value="SG">Singapore</option>
                                                                    <option value="SK">Slovakia</option>
                                                                    <option value="SI">Slovenia</option>
                                                                    <option value="SB">Solomon Islands</option>
                                                                    <option value="SO">Somalia</option>
                                                                    <option value="ZA">South Africa</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="username">Enter State (optional)</label>

                                                                <input type="text" class="form-control form-control-md" name="clientcity" required
                                                                    placeholder="State (optional)">
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="username">Country Code* & Phone*</label>

                                                                <div class="row">
                                                                    <div class="col-lg-2 col-3">
                                                                        <select name="clientpiece" required class="form-control form-control-md">
                                                                            <option value="default" selected="selected">Country Code
                                                                            </option>
                                                                            <option value="+93">Afghanistan (+93)</option>
                                                                            <option value="+355">Albania (+355)</option>
                                                                            <option value="+213">Algeria (+213)</option>
                                                                            <option value="+1-684">American Samoa (+1-684)</option>
                                                                            <option value="+376">Andorra (+376)</option>
                                                                            <option value="+244">Angola (+244)</option>
                                                                            <option value="+1-264">Anguilla (+1-264)</option>
                                                                            <option value="+1-268">Antigua and Barbuda (+1-268)</option>
                                                                            <option value="+54">Argentina (+54)</option>
                                                                            <option value="+374">Armenia (+374)</option>
                                                                            <option value="+61">Australia (+61)</option>
                                                                            <option value="+43">Austria (+43)</option>
                                                                            <option value="+994">Azerbaijan (+994)</option>
                                                                            <option value="+1-242">Bahamas (+1-242)</option>
                                                                            <option value="+973">Bahrain (+973)</option>
                                                                            <option value="+880">Bangladesh (+880)</option>
                                                                            <option value="+1-246">Barbados (+1-246)</option>
                                                                            <option value="+375">Belarus (+375)</option>
                                                                            <option value="+32">Belgium (+32)</option>
                                                                            <option value="+501">Belize (+501)</option>
                                                                            <option value="+229">Benin (+229)</option>
                                                                            <option value="+1-441">Bermuda (+1-441)</option>
                                                                            <option value="+975">Bhutan (+975)</option>
                                                                            <option value="+591">Bolivia (+591)</option>
                                                                            <option value="+387">Bosnia and Herzegovina (+387)</option>
                                                                            <option value="+267">Botswana (+267)</option>
                                                                            <option value="+55">Brazil (+55)</option>
                                                                            <option value="+673">Brunei (+673)</option>
                                                                            <option value="+359">Bulgaria (+359)</option>
                                                                            <option value="+226">Burkina Faso (+226)</option>
                                                                            <option value="+257">Burundi (+257)</option>
                                                                            <option value="+855">Cambodia (+855)</option>
                                                                            <option value="+237">Cameroon (+237)</option>
                                                                            <option value="+1">Canada (+1)</option>
                                                                            <option value="+238">Cape Verde (+238)</option>
                                                                            <option value="+1-345">Cayman Islands (+1-345)</option>
                                                                            <option value="+236">Central African Republic (+236)</option>
                                                                            <option value="+235">Chad (+235)</option>
                                                                            <option value="+56">Chile (+56)</option>
                                                                            <option value="+86">China (+86)</option>
                                                                            <option value="+61">Christmas Island (+61)</option>
                                                                            <option value="+61">Cocos (Keeling) Islands (+61)</option>
                                                                            <option value="+57">Colombia (+57)</option>
                                                                            <option value="+269">Comoros (+269)</option>
                                                                            <option value="+242">Congo (+242)</option>
                                                                            <option value="+243">Congo, Democratic Republic of the (+243)</option>
                                                                            <option value="+682">Cook Islands (+682)</option>
                                                                            <option value="+506">Costa Rica (+506)</option>
                                                                            <option value="+385">Croatia (+385)</option>
                                                                            <option value="+53">Cuba (+53)</option>
                                                                            <option value="+599">Curaçao (+599)</option>
                                                                            <option value="+357">Cyprus (+357)</option>
                                                                            <option value="+420">Czech Republic (+420)</option>
                                                                            <option value="+45">Denmark (+45)</option>
                                                                            <option value="+253">Djibouti (+253)</option>
                                                                            <option value="+1-767">Dominica (+1-767)</option>
                                                                            <option value="+1-809">Dominican Republic (+1-809)</option>
                                                                            <option value="+593">Ecuador (+593)</option>
                                                                            <option value="+20">Egypt (+20)</option>
                                                                            <option value="+503">El Salvador (+503)</option>
                                                                            <option value="+240">Equatorial Guinea (+240)</option>
                                                                            <option value="+291">Eritrea (+291)</option>
                                                                            <option value="+372">Estonia (+372)</option>
                                                                            <option value="+251">Ethiopia (+251)</option>
                                                                            <option value="+500">Falkland Islands (+500)</option>
                                                                            <option value="+298">Faroe Islands (+298)</option>
                                                                            <option value="+679">Fiji (+679)</option>
                                                                            <option value="+358">Finland (+358)</option>
                                                                            <option value="+33">France (+33)</option>
                                                                            <option value="+594">French Guiana (+594)</option>
                                                                            <option value="+689">French Polynesia (+689)</option>
                                                                            <option value="+241">Gabon (+241)</option>
                                                                            <option value="+220">Gambia (+220)</option>
                                                                            <option value="+995">Georgia (+995)</option>
                                                                            <option value="+49">Germany (+49)</option>
                                                                            <option value="+233">Ghana (+233)</option>
                                                                            <option value="+350">Gibraltar (+350)</option>
                                                                            <option value="+30">Greece (+30)</option>
                                                                            <option value="+299">Greenland (+299)</option>
                                                                            <option value="+1-473">Grenada (+1-473)</option>
                                                                            <option value="+590">Guadeloupe (+590)</option>
                                                                            <option value="+1-671">Guam (+1-671)</option>
                                                                            <option value="+502">Guatemala (+502)</option>
                                                                            <option value="+44">Guernsey (+44)</option>
                                                                            <option value="+224">Guinea (+224)</option>
                                                                            <option value="+245">Guinea-Bissau (+245)</option>
                                                                            <option value="+592">Guyana (+592)</option>
                                                                            <option value="+509">Haiti (+509)</option>
                                                                            <option value="+504">Honduras (+504)</option>
                                                                            <option value="+852">Hong Kong (+852)</option>
                                                                            <option value="+36">Hungary (+36)</option>
                                                                            <option value="+354">Iceland (+354)</option>
                                                                            <option value="+91">India (+91)</option>
                                                                            <option value="+62">Indonesia (+62)</option>
                                                                            <option value="+98">Iran (+98)</option>
                                                                            <option value="+964">Iraq (+964)</option>
                                                                            <option value="+353">Ireland (+353)</option>
                                                                            <option value="+44">Isle of Man (+44)</option>
                                                                            <option value="+972">Israel (+972)</option>
                                                                            <option value="+39">Italy (+39)</option>
                                                                            <option value="+1-876">Jamaica (+1-876)</option>
                                                                            <option value="+81">Japan (+81)</option>
                                                                            <option value="+44">Jersey (+44)</option>
                                                                            <option value="+962">Jordan (+962)</option>
                                                                            <option value="+7">Kazakhstan (+7)</option>
                                                                            <option value="+254">Kenya (+254)</option>
                                                                            <option value="+686">Kiribati (+686)</option>
                                                                            <option value="+850">Korea, Democratic People's Republic of (+850)</option>
                                                                            <option value="+82">Korea, Republic of (+82)</option>
                                                                            <option value="+965">Kuwait (+965)</option>
                                                                            <option value="+996">Kyrgyzstan (+996)</option>
                                                                            <option value="+856">Lao People's Democratic Republic (+856)</option>
                                                                            <option value="+371">Latvia (+371)</option>
                                                                            <option value="+961">Lebanon (+961)</option>
                                                                            <option value="+266">Lesotho (+266)</option>
                                                                            <option value="+231">Liberia (+231)</option>
                                                                            <option value="+218">Libya (+218)</option>
                                                                            <option value="+423">Liechtenstein (+423)</option>
                                                                            <option value="+370">Lithuania (+370)</option>
                                                                            <option value="+352">Luxembourg (+352)</option>
                                                                            <option value="+853">Macao (+853)</option>

                                                                        </select>
                                                                    </div>
                                                                    <div class="col-lg-10 col-9">
                                                                        <input type="text" required class="form-control form-control-md" name="clientphone"
                                                                            placeholder="Phone*">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="username">Company Name*</label>

                                                                <input type="text" required class="form-control form-control-md" name="clientquantity"
                                                                    placeholder="Company Name*">
                                                            </div>
                                                             


                                                            <p>Your personal data will be used to support your experience
                                                                throughout this website, to manage access to your account,
                                                                and for other purposes described in our privacy policy.</p>
                                                            <div class="form-checkbox d-flex align-items-center justify-content-between mb-5">
                                                                <input type="checkbox" class="custom-checkbox" id="remember"   required>
                                                                <label for="remember" class="font-size-md">I agree to the <a href="privacypolicy" class="text-primary font-size-md">privacy policy</a></label>
                                                            </div>
                                                            <button type="submit" name="submit" class="btn btn-dark btn-rounded">Send Now</button>                                                        </div>
                                                    </div>
                                                    <p class="text-center">Sign in with social account <a href="login">Log In</a></p>
                                                    <div class="social-icons social-icon-border-color d-flex justify-content-center">
                                                        <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                                        <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                                        <a href="#" class="social-icon social-google fab fa-google"></a>
                                                    </div>
                                                </div>

                                        </div>

                                    </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>
    </div>
    <div class="modal fade" id="otpModal" tabindex="-1" aria-labelledby="otpModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="">
          <h5 class="modal-title mt-5" id="otpModalLabel">Verify Your Identity with OTP</h5>
          <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        </div>
        <div class="modal-body ">
          <form class="top-place">
            <div class="mb-3">
              <label for="otpInput" class="form-label">Enter OTP *</label>
              <input type="text" class="form-control" id="otpInput" placeholder="* * * * *" maxlength="6">
            </div>
            <a href="Subscription" class="btn btn-primary w-100"  >Verify Accounts</a>
            </form>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>