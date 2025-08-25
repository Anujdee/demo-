<?php 
session_start();
include('config.php');
error_reporting(0);

// SQL queries to count rows
$sqlUsers = "SELECT COUNT(*) AS total_users FROM tbl_subscription_user";
$sqlProducts = "SELECT COUNT(*) AS total_products FROM tbl_product";
$sqlSuppliers = "SELECT COUNT(*) AS total_suppliers FROM tbl_suppliers";
$sqlBuyers = "SELECT COUNT(*) AS total_buyers FROM tbl_buyer";

// Execute queries and fetch results
$totalUsers = $conn->query($sqlUsers)->fetch_assoc()['total_users'];
$totalProducts = $conn->query($sqlProducts)->fetch_assoc()['total_products'];
$totalSuppliers = $conn->query($sqlSuppliers)->fetch_assoc()['total_suppliers'];
$totalBuyers = $conn->query($sqlBuyers)->fetch_assoc()['total_buyers'];

// Close the connection
$conn->close();
?>
 
 <?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['login'])) {
    // If not logged in, redirect to the login page
    $_SESSION['status'] = "";
    $_SESSION['status_code'] = "error";
    header("Location: index");  // Redirect to login page
    exit();
}

// Your protected content goes here
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Added by HTTrack -->
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

    <!-- start theme customizer section -->
     
    <!-- end theme customizer section -->

    <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
        <!-- start sidebar section -->
       <?php include 'sidebar.php'?>
        <!-- end sidebar section -->

        <div class="main-content flex min-h-screen flex-col">
            <!-- start header section -->
            <?php include 'header.php'?>

            <!-- end header section -->

            <div class="dvanimation animate__animated p-6" :class="[$store.app.animation]">
                <div x-data="finance">
                    <ul class="flex space-x-2 rtl:space-x-reverse">
                        <li>
                            <a href="javascript:;" class="text-primary hover:underline">Home</a>
                        </li>
                        
                    </ul>
                    <div class="pt-5">
                        <div class="mb-6 grid grid-cols-1 gap-6 text-white sm:grid-cols-2 xl:grid-cols-4">
                            <!-- Users Visit -->
                            <div class="panel bg-gradient-to-r from-cyan-500 to-cyan-400">
                                <div class="flex justify-between">
                                    <div class="text-md font-semibold ltr:mr-1 rtl:ml-1">Total Subscription <br> User</div>
                                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                                        <a href="javascript:;" @click="toggle">
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5 opacity-70 hover:opacity-80">
                                                <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                                <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                                <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                            </svg>
                                        </a>
                                        <ul
                                            x-cloak
                                            x-show="open"
                                            x-transition
                                            x-transition.duration.300ms
                                            class="text-black ltr:right-0 rtl:left-0 dark:text-white-dark">
                                            <li><a href="view-subscription-user" @click="toggle">View Subscription</a></li>
                                            <li><a href="add-subscriptions" @click="toggle">Add Subscription</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-5 flex items-center">
                                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3"><?php echo $totalUsers; ?></div>
                                    <div class="badge bg-white/30">Subscription User</div>
                                </div>
                                <div class="mt-5 flex items-center font-semibold">
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 shrink-0 ltr:mr-2 rtl:ml-2">
                                        <path
                                            opacity="0.5"
                                            d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"></path>
                                        <path
                                            d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"></path>
                                    </svg>
                                    Last Year 44
                                </div>
                            </div>

                            <!-- Sessions -->
                            <div class="panel bg-gradient-to-r from-violet-500 to-violet-400">
                                <div class="flex justify-between">
                                    <div class="text-md font-semibold ltr:mr-1 rtl:ml-1">All <br> Buyers</div>
                                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                                        <a href="javascript:;" @click="toggle">
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5 opacity-70 hover:opacity-80">
                                                <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                                <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                                <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                            </svg>
                                        </a>
                                        <ul
                                            x-cloak
                                            x-show="open"
                                            x-transition
                                            x-transition.duration.300ms
                                            class="text-black ltr:right-0 rtl:left-0 dark:text-white-dark">
                                            <li><a href="view-buyer" @click="toggle">View Buyer</a></li>
                                            <li><a href="add-buyer" @click="toggle">Add Buyer</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-5 flex items-center">
                                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3"><?php echo $totalBuyers; ?></div> 
                                    <div class="badge bg-white/30">All Buyers</div>
                                </div>
                                <div class="mt-5 flex items-center font-semibold">
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 shrink-0 ltr:mr-2 rtl:ml-2">
                                        <path
                                            opacity="0.5"
                                            d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"></path>
                                        <path
                                            d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"></path>
                                    </svg>
                                    Last Year 69
                                </div>
                            </div>

                            <!-- Time On-Site -->
                            <div class="panel bg-gradient-to-r from-blue-500 to-blue-400">
                                <div class="flex justify-between">
                                    <div class="text-md font-semibold ltr:mr-1 rtl:ml-1">All <br> Suppliers</div>
                                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                                        <a href="javascript:;" @click="toggle">
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5 opacity-70 hover:opacity-80">
                                                <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                                <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                                <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                            </svg>
                                        </a>
                                        <ul
                                            x-cloak
                                            x-show="open"
                                            x-transition
                                            x-transition.duration.300ms
                                            class="text-black ltr:right-0 rtl:left-0 dark:text-white-dark">
                                            <li><a href="add-supplier" @click="toggle">View Supplier</a></li>
                                            <li><a href="view_supplier" @click="toggle">Add Supplier</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-5 flex items-center">
                                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3"><?php echo $totalSuppliers; ?></div>
                                    <div class="badge bg-white/30">All Supplier</div>
                                </div>
                                <div class="mt-5 flex items-center font-semibold">
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 shrink-0 ltr:mr-2 rtl:ml-2">
                                        <path
                                            opacity="0.5"
                                            d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"></path>
                                        <path
                                            d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"></path>
                                    </svg>
                                    Last Year 894
                                </div>
                            </div>

                            <!-- Bounce Rate -->
                            <div class="panel bg-gradient-to-r from-fuchsia-500 to-fuchsia-400">
                                <div class="flex justify-between">
                                    <div class="text-md font-semibold ltr:mr-1 rtl:ml-1">All <br> Products</div>
                                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                                        <a href="javascript:;" @click="toggle">
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5 opacity-70 hover:opacity-80">
                                                <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                                <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                                <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                            </svg>
                                        </a>
                                        <ul
                                            x-cloak
                                            x-show="open"
                                            x-transition
                                            x-transition.duration.300ms
                                            class="text-black ltr:right-0 rtl:left-0 dark:text-white-dark">
                                            <li><a href="View-Products" @click="toggle">View Product</a></li>
                                            <li><a href="Add-Products" @click="toggle">Add Product</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-5 flex items-center">
                                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3"> <?php echo $totalProducts; ?></div>
                                    <div class="badge bg-white/30">All Products</div>
                                </div>
                                <div class="mt-5 flex items-center font-semibold">
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 shrink-0 ltr:mr-2 rtl:ml-2">
                                        <path
                                            opacity="0.5"
                                            d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"></path>
                                        <path
                                            d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"></path>
                                    </svg>
                                    Last Year 5204
                                </div>
                            </div>
                        </div>

                         

                         
                    </div>
                </div>
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
    <script defer src="assets/js/apexcharts.js"></script>
    <script>
        // main section
        document.addEventListener('alpine:init', () => {
            Alpine.data('scrollToTop', () => ({
                showTopButton: false,
                init() {
                    window.onscroll = () => {
                        this.scrollFunction();
                    };
                },

                scrollFunction() {
                    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                        this.showTopButton = true;
                    } else {
                        this.showTopButton = false;
                    }
                },

                goToTop() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                },
            }));

            // theme customization
            Alpine.data('customizer', () => ({
                showCustomizer: false,
            }));

            // sidebar section
            Alpine.data('sidebar', () => ({
                init() {
                    const selector = document.querySelector('.sidebar ul a[href="' + window.location.pathname + '"]');
                    if (selector) {
                        selector.classList.add('active');
                        const ul = selector.closest('ul.sub-menu');
                        if (ul) {
                            let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                            if (ele) {
                                ele = ele[0];
                                setTimeout(() => {
                                    ele.click();
                                });
                            }
                        }
                    }
                },
            }));

            // header section
            Alpine.data('header', () => ({
                init() {
                    const selector = document.querySelector('ul.horizontal-menu a[href="' + window.location.pathname + '"]');
                    if (selector) {
                        selector.classList.add('active');
                        const ul = selector.closest('ul.sub-menu');
                        if (ul) {
                            let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                            if (ele) {
                                ele = ele[0];
                                setTimeout(() => {
                                    ele.classList.add('active');
                                });
                            }
                        }
                    }
                },

                notifications: [{
                        id: 1,
                        profile: 'user-profile.jpeg',
                        message: '<strong class="text-sm mr-1">John Doe</strong>invite you to <strong>Prototyping</strong>',
                        time: '45 min ago',
                    },
                    {
                        id: 2,
                        profile: 'profile-34.jpeg',
                        message: '<strong class="text-sm mr-1">Adam Nolan</strong>mentioned you to <strong>UX Basics</strong>',
                        time: '9h Ago',
                    },
                    {
                        id: 3,
                        profile: 'profile-16.jpeg',
                        message: '<strong class="text-sm mr-1">Anna Morgan</strong>Upload a file',
                        time: '9h Ago',
                    },
                ],

                messages: [{
                        id: 1,
                        image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-success-light dark:bg-success text-success dark:text-success-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></span>',
                        title: 'Congratulations!',
                        message: 'Your OS has been updated.',
                        time: '1hr',
                    },
                    {
                        id: 2,
                        image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-info-light dark:bg-info text-info dark:text-info-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg></span>',
                        title: 'Did you know?',
                        message: 'You can switch between artboards.',
                        time: '2hr',
                    },
                    {
                        id: 3,
                        image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-danger-light dark:bg-danger text-danger dark:text-danger-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>',
                        title: 'Something went wrong!',
                        message: 'Send Reposrt',
                        time: '2days',
                    },
                    {
                        id: 4,
                        image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-warning-light dark:bg-warning text-warning dark:text-warning-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">    <circle cx="12" cy="12" r="10"></circle>    <line x1="12" y1="8" x2="12" y2="12"></line>    <line x1="12" y1="16" x2="12.01" y2="16"></line></svg></span>',
                        title: 'Warning',
                        message: 'Your password strength is low.',
                        time: '5days',
                    },
                ],

                languages: [{
                        id: 1,
                        key: 'Chinese',
                        value: 'zh',
                    },
                    {
                        id: 2,
                        key: 'Danish',
                        value: 'da',
                    },
                    {
                        id: 3,
                        key: 'English',
                        value: 'en',
                    },
                    {
                        id: 4,
                        key: 'French',
                        value: 'fr',
                    },
                    {
                        id: 5,
                        key: 'German',
                        value: 'de',
                    },
                    {
                        id: 6,
                        key: 'Greek',
                        value: 'el',
                    },
                    {
                        id: 7,
                        key: 'Hungarian',
                        value: 'hu',
                    },
                    {
                        id: 8,
                        key: 'Italian',
                        value: 'it',
                    },
                    {
                        id: 9,
                        key: 'Japanese',
                        value: 'ja',
                    },
                    {
                        id: 10,
                        key: 'Polish',
                        value: 'pl',
                    },
                    {
                        id: 11,
                        key: 'Portuguese',
                        value: 'pt',
                    },
                    {
                        id: 12,
                        key: 'Russian',
                        value: 'ru',
                    },
                    {
                        id: 13,
                        key: 'Spanish',
                        value: 'es',
                    },
                    {
                        id: 14,
                        key: 'Swedish',
                        value: 'sv',
                    },
                    {
                        id: 15,
                        key: 'Turkish',
                        value: 'tr',
                    },
                    {
                        id: 16,
                        key: 'Arabic',
                        value: 'ae',
                    },
                ],

                removeNotification(value) {
                    this.notifications = this.notifications.filter((d) => d.id !== value);
                },

                removeMessage(value) {
                    this.messages = this.messages.filter((d) => d.id !== value);
                },
            }));

            // finance
            Alpine.data('finance', () => ({
                init() {
                    const bitcoin = null;
                    const ethereum = null;
                    const litecoin = null;
                    const binance = null;
                    const tether = null;
                    const solana = null;

                    setTimeout(() => {
                        this.bitcoin = new ApexCharts(this.$refs.bitcoin, this.bitcoinOptions);
                        this.bitcoin.render();

                        this.ethereum = new ApexCharts(this.$refs.ethereum, this.ethereumOptions);
                        this.ethereum.render();

                        this.litecoin = new ApexCharts(this.$refs.litecoin, this.litecoinOptions);
                        this.litecoin.render();

                        this.binance = new ApexCharts(this.$refs.binance, this.binanceOptions);
                        this.binance.render();

                        this.tether = new ApexCharts(this.$refs.tether, this.tetherOptions);
                        this.tether.render();

                        this.solana = new ApexCharts(this.$refs.solana, this.solanaOptions);
                        this.solana.render();
                    }, 300);
                },

                get bitcoinOptions() {
                    return {
                        series: [{
                            data: [21, 9, 36, 12, 44, 25, 59, 41, 25, 66],
                        }, ],
                        chart: {
                            height: 45,
                            type: 'line',
                            sparkline: {
                                enabled: true,
                            },
                        },
                        stroke: {
                            width: 2,
                        },
                        markers: {
                            size: 0,
                        },
                        colors: ['#00ab55'],
                        grid: {
                            padding: {
                                top: 0,
                                bottom: 0,
                                left: 0,
                            },
                        },
                        tooltip: {
                            x: {
                                show: false,
                            },
                            y: {
                                title: {
                                    formatter: (formatter = () => {
                                        return '';
                                    }),
                                },
                            },
                        },
                        responsive: [{
                            breakPoint: 576,
                            options: {
                                chart: {
                                    height: 95,
                                },
                                grid: {
                                    padding: {
                                        top: 45,
                                        bottom: 0,
                                        left: 0,
                                    },
                                },
                            },
                        }, ],
                    };
                },

                get ethereumOptions() {
                    return {
                        series: [{
                            data: [44, 25, 59, 41, 66, 25, 21, 9, 36, 12],
                        }, ],
                        chart: {
                            height: 45,
                            type: 'line',
                            sparkline: {
                                enabled: true,
                            },
                        },
                        stroke: {
                            width: 2,
                        },
                        markers: {
                            size: 0,
                        },
                        colors: ['#e7515a'],
                        grid: {
                            padding: {
                                top: 0,
                                bottom: 0,
                                left: 0,
                            },
                        },
                        tooltip: {
                            x: {
                                show: false,
                            },
                            y: {
                                title: {
                                    formatter: (formatter = () => {
                                        return '';
                                    }),
                                },
                            },
                        },
                        responsive: [{
                            breakPoint: 576,
                            options: {
                                chart: {
                                    height: 95,
                                },
                                grid: {
                                    padding: {
                                        top: 45,
                                        bottom: 0,
                                        left: 0,
                                    },
                                },
                            },
                        }, ],
                    };
                },

                get litecoinOptions() {
                    return {
                        series: [{
                            data: [9, 21, 36, 12, 66, 25, 44, 25, 41, 59],
                        }, ],
                        chart: {
                            height: 45,
                            type: 'line',
                            sparkline: {
                                enabled: true,
                            },
                        },
                        stroke: {
                            width: 2,
                        },
                        markers: {
                            size: 0,
                        },
                        colors: ['#00ab55'],
                        grid: {
                            padding: {
                                top: 0,
                                bottom: 0,
                                left: 0,
                            },
                        },
                        tooltip: {
                            x: {
                                show: false,
                            },
                            y: {
                                title: {
                                    formatter: (formatter = () => {
                                        return '';
                                    }),
                                },
                            },
                        },
                        responsive: [{
                            breakPoint: 576,
                            options: {
                                chart: {
                                    height: 95,
                                },
                                grid: {
                                    padding: {
                                        top: 45,
                                        bottom: 0,
                                        left: 0,
                                    },
                                },
                            },
                        }, ],
                    };
                },

                get binanceOptions() {
                    return {
                        series: [{
                            data: [25, 44, 25, 59, 41, 21, 36, 12, 19, 9],
                        }, ],
                        chart: {
                            height: 45,
                            type: 'line',
                            sparkline: {
                                enabled: true,
                            },
                        },
                        stroke: {
                            width: 2,
                        },
                        markers: {
                            size: 0,
                        },
                        colors: ['#e7515a'],
                        grid: {
                            padding: {
                                top: 0,
                                bottom: 0,
                                left: 0,
                            },
                        },
                        tooltip: {
                            x: {
                                show: false,
                            },
                            y: {
                                title: {
                                    formatter: (formatter = () => {
                                        return '';
                                    }),
                                },
                            },
                        },
                        responsive: [{
                            breakPoint: 576,
                            options: {
                                chart: {
                                    height: 95,
                                },
                                grid: {
                                    padding: {
                                        top: 45,
                                        bottom: 0,
                                        left: 0,
                                    },
                                },
                            },
                        }, ],
                    };
                },

                get tetherOptions() {
                    return {
                        series: [{
                            data: [21, 59, 41, 44, 25, 66, 9, 36, 25, 12],
                        }, ],
                        chart: {
                            height: 45,
                            type: 'line',
                            sparkline: {
                                enabled: true,
                            },
                        },
                        stroke: {
                            width: 2,
                        },
                        markers: {
                            size: 0,
                        },
                        colors: ['#00ab55'],
                        grid: {
                            padding: {
                                top: 0,
                                bottom: 0,
                                left: 0,
                            },
                        },
                        tooltip: {
                            x: {
                                show: false,
                            },
                            y: {
                                title: {
                                    formatter: (formatter = () => {
                                        return '';
                                    }),
                                },
                            },
                        },
                        responsive: [{
                            breakPoint: 576,
                            options: {
                                chart: {
                                    height: 95,
                                },
                                grid: {
                                    padding: {
                                        top: 45,
                                        bottom: 0,
                                        left: 0,
                                    },
                                },
                            },
                        }, ],
                    };
                },

                get solanaOptions() {
                    return {
                        series: [{
                            data: [21, -9, 36, -12, 44, 25, 59, -41, 66, -25],
                        }, ],
                        chart: {
                            height: 45,
                            type: 'line',
                            sparkline: {
                                enabled: true,
                            },
                        },
                        stroke: {
                            width: 2,
                        },
                        markers: {
                            size: 0,
                        },
                        colors: ['#e7515a'],
                        grid: {
                            padding: {
                                top: 0,
                                bottom: 0,
                                left: 0,
                            },
                        },
                        tooltip: {
                            x: {
                                show: false,
                            },
                            y: {
                                title: {
                                    formatter: (formatter = () => {
                                        return '';
                                    }),
                                },
                            },
                        },
                        responsive: [{
                            breakPoint: 576,
                            options: {
                                chart: {
                                    height: 95,
                                },
                                grid: {
                                    padding: {
                                        top: 45,
                                        bottom: 0,
                                        left: 0,
                                    },
                                },
                            },
                        }, ],
                    };
                },
            }));
        });
    </script>
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
</body>

 
</html>