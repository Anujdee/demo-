<?php
include "config.php";
if (isset($_POST['submit'])) {

    $pname = $_POST['p_name'];

    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'img/' . $file_name;


    $pmain = $_POST['p_main_cat'];
    $psub = $_POST['p_sub_cat'];
    $pquantity = $_POST['p_quantity'];
    $pprice = $_POST['p_price'];
    $pdescr = $_POST['p_desc'];
    $pcname = $_POST['p_cname'];
    $ppoints = $_POST['p_points'];
    $ptype = $_POST['p_type'];
    $pcountry = $_POST['p_country'];
    $sql = mysqli_query($conn, "INSERT INTO `tbl_product` (`image`,`product_name`, `main_cat`, `sub_cat`, `quantity`, `business_type`, `company_name`, `desc`, `points`, `price`, `country`)
     VALUES ('$file_name','$pname','$pmain','$psub','$pquantity','$ptype','$pcname','$pdescr','$ppoints','$pprice','$pcountry')");
    // if ($sql) {
    //     echo "<script>alert('Your product detail has been submitted !');window.location.href='View-Products';</script>";
    // } else {
    //     echo "error" . mysqli_error($conn);
    // }

    if (move_uploaded_file($tempname, $folder)) {
        echo "<script>alert('Your image has been submitted !');window.location.href='View-Products';</script>";
    } else {
        echo "<h2>File not Uploaded</h2>";
    }
}


?>




<!DOCTYPE html>
<html lang="en" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Global Connection 21 </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="assets/images/site-icon.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/perfect-scrollbar.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    <link defer rel="stylesheet" type="text/css" media="screen" href="assets/css/animate.css" />
    <script src="assets/js/perfect-scrollbar.min.js"></script>
    <script defer src="assets/js/popper.min.js"></script>
    <script defer src="assets/js/tippy-bundle.umd.min.js"></script>
    <script defer src="assets/js/sweetalert.min.js"></script>


</head>

<body
    x-data="main"
    class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased"
    :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ?  'dark' : '', $store.app.menu, $store.app.layout,$store.app.rtlClass]">
    <!-- sidebar menu overlay -->
    <div x-cloak class="fixed inset-0 z-50 bg-[black]/60 lg:hidden" :class="{'hidden' : !$store.app.sidebar}" @click="$store.app.toggleSidebar()"></div>

    <!-- screen loader -->
    <div class="screen_loader animate__animated fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <svg width="64" height="64" viewBox="0 0 135 135" xmlns="http://www.w3.org/2000/svg" fill="#4361ee">
            <path
                d="M67.447 58c5.523 0 10-4.477 10-10s-4.477-10-10-10-10 4.477-10 10 4.477 10 10 10zm9.448 9.447c0 5.523 4.477 10 10 10 5.522 0 10-4.477 10-10s-4.478-10-10-10c-5.523 0-10 4.477-10 10zm-9.448 9.448c-5.523 0-10 4.477-10 10 0 5.522 4.477 10 10 10s10-4.478 10-10c0-5.523-4.477-10-10-10zM58 67.447c0-5.523-4.477-10-10-10s-10 4.477-10 10 4.477 10 10 10 10-4.477 10-10z">
                <animateTransform attributeName="transform" type="rotate" from="0 67 67" to="-360 67 67" dur="2.5s" repeatCount="indefinite" />
            </path>
            <path
                d="M28.19 40.31c6.627 0 12-5.374 12-12 0-6.628-5.373-12-12-12-6.628 0-12 5.372-12 12 0 6.626 5.372 12 12 12zm30.72-19.825c4.686 4.687 12.284 4.687 16.97 0 4.686-4.686 4.686-12.284 0-16.97-4.686-4.687-12.284-4.687-16.97 0-4.687 4.686-4.687 12.284 0 16.97zm35.74 7.705c0 6.627 5.37 12 12 12 6.626 0 12-5.373 12-12 0-6.628-5.374-12-12-12-6.63 0-12 5.372-12 12zm19.822 30.72c-4.686 4.686-4.686 12.284 0 16.97 4.687 4.686 12.285 4.686 16.97 0 4.687-4.686 4.687-12.284 0-16.97-4.685-4.687-12.283-4.687-16.97 0zm-7.704 35.74c-6.627 0-12 5.37-12 12 0 6.626 5.373 12 12 12s12-5.374 12-12c0-6.63-5.373-12-12-12zm-30.72 19.822c-4.686-4.686-12.284-4.686-16.97 0-4.686 4.687-4.686 12.285 0 16.97 4.686 4.687 12.284 4.687 16.97 0 4.687-4.685 4.687-12.283 0-16.97zm-35.74-7.704c0-6.627-5.372-12-12-12-6.626 0-12 5.373-12 12s5.374 12 12 12c6.628 0 12-5.373 12-12zm-19.823-30.72c4.687-4.686 4.687-12.284 0-16.97-4.686-4.686-12.284-4.686-16.97 0-4.687 4.686-4.687 12.284 0 16.97 4.686 4.687 12.284 4.687 16.97 0z">
                <animateTransform attributeName="transform" type="rotate" from="0 67 67" to="360 67 67" dur="8s" repeatCount="indefinite" />
            </path>
        </svg>
    </div>

    <!-- scroll to top button -->
    <div class="fixed bottom-6 z-50 ltr:right-6 rtl:left-6" x-data="scrollToTop">
        <template x-if="showTopButton">
            <button
                type="button"
                class="btn btn-outline-primary animate-pulse rounded-full bg-[#fafafa] p-2 dark:bg-[#060818] dark:hover:bg-primary"
                @click="goToTop">
                <svg width="24" height="24" class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        opacity="0.5"
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M12 20.75C12.4142 20.75 12.75 20.4142 12.75 20L12.75 10.75L11.25 10.75L11.25 20C11.25 20.4142 11.5858 20.75 12 20.75Z"
                        fill="currentColor" />
                    <path
                        d="M6.00002 10.75C5.69667 10.75 5.4232 10.5673 5.30711 10.287C5.19103 10.0068 5.25519 9.68417 5.46969 9.46967L11.4697 3.46967C11.6103 3.32902 11.8011 3.25 12 3.25C12.1989 3.25 12.3897 3.32902 12.5304 3.46967L18.5304 9.46967C18.7449 9.68417 18.809 10.0068 18.6929 10.287C18.5768 10.5673 18.3034 10.75 18 10.75L6.00002 10.75Z"
                        fill="currentColor" />
                </svg>
            </button>
        </template>
    </div>



    <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
        <!-- start sidebar section -->
        <?php include 'sidebar.php' ?>
        <!-- end sidebar section -->

        <div class="main-content flex min-h-screen flex-col">
            <!-- start header section -->
            <?php include 'header.php' ?>
            <!-- end header section -->

            <div class="dvanimation animate__animated p-6" :class="[$store.app.animation]">
                <!-- start main content section -->
                <div>
                    <ul class="flex space-x-2 rtl:space-x-reverse">
                        <li>
                            <a href="Home" class="text-primary hover:underline">Home</a>
                        </li>
                        <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                            <span>Add New Products</span>
                        </li>
                    </ul>
                    <div class="pt-5">
                        <div class="flex flex-wrap items-center justify-between gap-4">
                            <h2 class="text-xl mb-2">Add New Products</h2>
                            <div class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                <div class="flex gap-3">
                                    <div>
                                        <a href="View-Products">
                                            <button type="button" class="btn btn-primary mb-2">

                                                View All Product
                                            </button>
                                        </a>

                                    </div>

                                </div>


                            </div>
                        </div>
                        <div x-data="{tab: 'home'}">
                            <ul class="mb-5 overflow-y-auto whitespace-nowrap border-b border-[#ebedf2] font-semibold dark:border-[#191e3a] sm:flex">
                                <li class="inline-block">
                                    <a
                                        href="javascript:;"
                                        class="flex gap-2 border-b border-transparent p-4 hover:border-primary hover:text-primary"
                                        :class="{'!border-primary text-primary' : tab == 'home'}"
                                        @click="tab='home'">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                            <path
                                                opacity="0.5"
                                                d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                                stroke="currentColor"
                                                stroke-width="1.5" />
                                            <path d="M12 15L12 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                        Home
                                    </a>
                                </li>

                            </ul>
                            <template x-if="tab === 'home'">
                                <div>
                                    <form method="post" enctype="multipart/form-data" class="mb-5 rounded-md border border-[#ebedf2] bg-white p-4 dark:border-[#191e3a] dark:bg-[#0e1726]">
                                        <h6 class="mb-5 text-lg font-bold">Add New Product</h6>
                                        <div class="flex flex-col sm:flex-row">

                                            <div class="grid flex-1 grid-cols-1 gap-5 sm:grid-cols-2">
                                                <div>
                                                    <label for="name">Product Image</label>
                                                    <input type="file" id="name" name="image" placeholder="only jpeg file support" class="form-input" />
                                                </div>
                                                <div>
                                                    <label for="profession">Product Name</label>
                                                    <input id="profession" type="text" name="p_name" placeholder="Jinger" class="form-input" />
                                                </div>
                                                <div>
    <label for="product_main_cat">Product Main Category</label>
    <select id="product_main_cat" name="p_main_cat" class="form-select text-white-dark">
        <option value="">Main Category(s)</option>
        <option value="Agriculture">Agriculture</option>
        <option value="Food & Beverages">Food & Beverages</option>
        <option value="Construction & real estate">Construction & real estate</option>
        <option value="Electronic & Electrical">Electronic & Electrical</option>
        <option value="Apparel & fashion accessories">Apparel & fashion accessories</option>
        <option value="Home furnishing & supplies">Home furnishing & supplies</option>
        <option value="Industrial goods & chemical">Industrial goods & chemical</option>
        <option value="Minerals & Metals">Minerals & Metals</option>
        <option value="Miscellaneous">Miscellaneous</option>
    </select>
</div>
<div>
    <label for="product_sub_cat">Product Sub Category</label>
    <select id="product_sub_cat" name="p_sub_cat" class="form-select text-white-dark" disabled>
        <option value="">Sub Category</option>
    </select>
</div>


                                                <div>
                                                    <label for="country">Product Quantity</label>
                                                    <select id="country" name="p_quantity" class="form-select text-white-dark">
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
                                                <div>
                                                    <label for="address">Product Price</label>
                                                    <input id="address" name="p_price" type="number" placeholder="230" class="form-input" />
                                                </div>
                                                <div>
                                                    <label for="location">Product Discription</label>
                                                    <input id="location" name="p_desc" type="text" placeholder="Product Discription" class="form-input" />
                                                </div>
                                                <div>
                                                    <label for="phone">Company Name</label>
                                                    <input id="phone" name="p_cname" type="text" placeholder="Company Name" class="form-input" />
                                                </div>
                                                <div>
                                                    <label for="email">Total Points</label>
                                                    <input id="email" name="p_points" type="number" placeholder="Total Points" class="form-input" />
                                                </div>
                                                <div>
                                                    <label for="country">Business Type</label>
                                                    <select id="country" name="p_type" class="form-select text-white-dark">
                                                        <option>Select Business Type</option>

                                                        <option value="Supplier">Supplier</option>
                                                        <option value="Not available">Not available</option>

                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="country">Select Country</label>
                                                    <select id="country" name="p_country" class="form-select text-white-dark">
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
                                                <div class="mt-3 sm:col-span-2">
                                                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </template>

                        </div>
                    </div>
                </div>
                <!-- end main content section -->
            </div>

            <!-- start footer section -->
                  <div class="mt-auto p-6 pt-0 text-center dark:text-white-dark ltr:sm:text-left rtl:sm:text-right">
                © <span id="footer-year">2024</span>.<a href="https://ddarkinnovations.com" style="color:#da2d5b;" >   DDark Innovations  </a> All rights reserved.
            </div>
            <!-- end footer section -->
        </div>
    </div>

    <script src="assets/js/alpine-collaspe.min.js"></script>
    <script src="assets/js/alpine-persist.min.js"></script>
    <script defer src="assets/js/alpine-ui.min.js"></script>
    <script defer src="assets/js/alpine-focus.min.js"></script>
    <script defer src="assets/js/alpine.min.js"></script>
    <script src="assets/js/custom.js"></script>


    <script>
        function updateClock() {
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            const time = `${hours}:${minutes}:${seconds}`;
            document.getElementById('clock').textContent = time;
        }

        // Update the clock every second
        setInterval(updateClock, 1000);

        // Initialize clock on page load
        updateClock();
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Subcategories for each main category
        const subCategories = {
            "Agriculture": ["Agriculture Machinery & Equipment", "Agriculture Fertilizers & Pesticides", "Agriculture Products", "Flowers & Plants Related Products"],
            "Food & Beverages": ["Alcoholic Beverages Tobacco & Related Products", "Bar Products", "Seafood Supplies", "Livestock & Animal Products", "Processed Food"],
            "Construction & real estate": ["Building Material & Equipment", "Elevators & Escalators", "Glass & Ceramics Related Products", "Heating, Air Conditioner & Ventilation", " Wood and Lumber"],
            "Electronic & Electrical": [" Computer Peripherals & Software", "Electric Circuit Components & Accessories", " Networking & Communications Devices"],
            "Apparel & fashion accessories": ["Cosmetics Products", "Gems &amp; Jewellery", "Garment &amp; Fashion Accessories", " Digital, Analog Watches &amp; Clocks"],
            "Home furnishing & supplies": ["Carpets, Rugs & Floorings", " Home Furniture & Interior Decoration", "Household Merchandise", "Commercial & Office Furniture"],
            "Industrial goods & chemical": ["Jute Raw Material & Machinery", "Chemicals & Allied Products", "Packaging Products", "Industrial Supplies", "Industrial Machinery"],
            "Minerals & Metals": ["Metal & Metal Products", "Ores & Minerals"],
            "Miscellaneous": ["Paper & Paper Products", " Automobile & Auto Accessories", "Fuel &amp; Energy Resources", "Plastic Products", "Hotel & Restaurant - Equipments Products"]
        };

        // Reference dropdowns
        const mainCategory = document.getElementById('product_main_cat');
        const subCategory = document.getElementById('product_sub_cat');

        // Add event listener to the main category dropdown
        mainCategory.addEventListener('change', function () {
            const selectedMainCategory = mainCategory.value;

            // Clear and reset the subcategory dropdown
            subCategory.innerHTML = '<option value="">Sub Category</option>';

            if (selectedMainCategory && subCategories[selectedMainCategory]) {
                // Populate subcategory options
                subCategories[selectedMainCategory].forEach(sub => {
                    const option = document.createElement('option');
                    option.value = sub;
                    option.textContent = sub;
                    subCategory.appendChild(option);
                });

                // Enable the subcategory dropdown
                subCategory.disabled = false;
            } else {
                // Disable the subcategory dropdown if no valid main category is selected
                subCategory.disabled = true;
            }
        });
    });
</script>



</body>

</html>