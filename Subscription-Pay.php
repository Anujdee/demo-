<?php
// Get the plan name from the URL
$plan_name = isset($_GET['plan_name']) ? htmlspecialchars($_GET['plan_name']) : '';
?>


<!DOCTYPE html>
<html lang="en">


 
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />  

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Global Connection21</title>

    <meta name="keywords" content="Global Connection21"  />
    <meta name="description" content="Global Connection21" >
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
                    <h1 class="page-title mb-0">Package Enquiry</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-10 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index">Home</a></li>
                        <li>Package Enquiry</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            <div class="page-content contact-us">
                <div class="container">

                    <!-- End of Contact Title Section -->


                    <!-- End of Contact Information section -->

 
                    <section class="contact-section">
                        <div class="bg-grey how-trade pt-5 pb-5 pb-lg-5 mt-10">
                            <div class="container mt-2 mt-lg-10 mb-0 mb-lg-10">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <figure class="br-sm">
                                            <img src="assets/images/1.png" alt="Banner" width="610" height="520"
                                                style="background-color: #C9C8CD;" />
                                        </figure>
                                    </div>
                                    <div class="col-lg-8 pl-lg-8">
                                        <h4 class="text-primary font-weight-bold ls-25">Choose the Right Plan for You.</h4>
                                        <p class="mb-6"> We connect you with suppliers who perfectly match your buying needs. Backed by the
                                            trust of hundreds of manufacturers, exporters, and buyers, we ensure you receive top-quality
                                            products at competitive prices.</p>
                                        <form class="form checkout-form" action="#" method="post">
                                            <div class="row mb-9">
                                                <div class="col-lg-12 pr-lg-4 mb-4">


                                                
                                                    <div class="row">
                                                    <div class="col-lg-6 col-12">
                                                    <input type="text" class="form-control form-control-md" name="id="plan" name="plan" value="<?php echo $plan_name; ?>" readonly>
                                                        </div>
                                                        
                                                        <div class="col-lg-4 col-12">
                                                        <input type="text" class="form-control form-control-md" name="company-name"
                                                        placeholder="Full Name*">
                                                        </div>
                                                        <div class="col-lg-4 col-12">
                                                        <input type="text" class="form-control form-control-md" name="company-name"
                                                        placeholder="Contact Email*">
                                                        </div>
                                                        <div class="col-lg-4 col-12">
                                                        <input type="text" class="form-control form-control-md" name="company-name"
                                                        placeholder="Company Name*">
                                                        </div>
                                                        <div class="col-lg-4 col-12">
                                                        <input type="text" class="form-control form-control-md" name="company-name"
                                                        placeholder="Contact Number*">
                                                        </div>
                                                        

                                                        <div class="col-lg-4 col-12">
                                                            <select name="country" class="form-control form-control-md">
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
                                                        <div class="col-lg-4 col-12">
                                                        <input type="text" class="form-control form-control-md" name="company-name"
                                                        placeholder="Complete Address*">
                                                        </div>
                                                        <div class="row" style="margin-top: 10px;">
                                                            <label><b>Select Payment Terms*</b></label>
                                                            <div class="col-lg-12">
                                                                <label class="checkbox">
                                                                    <input type="checkbox">
                                                                    <span></span> T/T &nbsp;
                                                                </label>
                                                                <label class="checkbox">
                                                                    <input type="checkbox">
                                                                    <span></span> D/A &nbsp;
                                                                </label>
                                                                <label class="checkbox">
                                                                    <input type="checkbox">
                                                                    <span></span> L/C &nbsp;
                                                                </label>
                                                                <label class="checkbox">
                                                                    <input type="checkbox">
                                                                    <span></span> D/P &nbsp;
                                                                </label>
                                                                <label class="checkbox">
                                                                    <input type="checkbox">
                                                                    <span></span>PayPal &nbsp;
                                                                </label>
                                                                <label class="checkbox">
                                                                    <input type="checkbox">
                                                                    <span></span> Western Union &nbsp;
                                                                </label>
                                                                <label class="checkbox">
                                                                    <input type="checkbox">
                                                                    <span></span> Money Gram
                                                                </label>

                                                            </div>

                                                        </div>
                                                        <div class="col-lg-12">
                                                            <textarea name="" id="" cols="3" rows="5"
                                                                placeholder="  Let us know what you need*"
                                                                style="background-color: transparent;border: 1px solid #da2d5b;margin-top: 20px;"></textarea>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <button type="submit" class="btn btn-dark btn-block btn-rounded">Send Package
                                                                requirements</button>
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
                    </section>
                    <!-- End of Contact Section -->
                </div>

                <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                <div class="google-map contact-google-map" id="googlemaps"></div>
                <!-- End Map Section -->
            </div>
            <!-- End of PageContent -->
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
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/main.min.js"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key="></script>

</body>


</html>