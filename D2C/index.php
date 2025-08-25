<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D2C-Globalconnection21</title>

    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="assets/img/site-icon.svg" type="image/x-icon">


    <!--=====CSS=======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/slick-slider.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/mobile-menu.css">
    <link rel="stylesheet" href="assets/css/main.css">



    <!--=====JQUERY=======-->
    <script src="assets/js/jquery-3-6-0.min.js"></script>
    <script>
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('success') === '1') {
        alert("Thank you! Your message has been sent.");
        // Clear the query string from the URL
        window.history.replaceState(null, null, window.location.pathname);
    }
</script>

    <style>
        .stats-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            background-color: #111;
            color: white;
            padding: 40px 20px;
            text-align: center;
        }

        .stat-box {
            flex: 1 1 200px;
            margin: 20px;
        }

        .stat-box h2 {
            font-size: 3rem;
            color: #ffc74a;
            margin: 0;
            font-weight: 800;
        }

        .stat-box p {
            font-size: 1.6rem;
            margin-top: 10px;
            font-weight: 500;
        }

        .faqs-section {
            padding: 60px 20px;
            background: #fdfdfd;
            margin-bottom: 10px;
        }



        .faq-image img {
            max-width: 350px;
            width: 100%;
        }

        .faq-list {
            flex: 1;
        }

        .faq-list h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .faq-item {
            border-bottom: 1px solid #ddd;
            margin-bottom: 15px;
        }

        .faq-question {
            background: #f0f4f7;
            color: #222;
            padding: 15px 20px;
            width: 100%;
            text-align: left;
            border: none;
            font-weight: bold;
            font-size: 1rem;
            cursor: pointer;
            position: relative;
        }

        .faq-question::after {
            content: "⌄";
            position: absolute;
            right: 20px;
            transition: transform 0.3s;
        }

        .faq-question.active::after {
            transform: rotate(180deg);
        }

        .faq-answer {
            display: none;
            padding: 10px 20px;
            background: #fff;
            color: #555;
        }

        .accordion-item {
            margin-bottom: 10px;
            background-color: #f0f4f7;
            border-radius: 8px;
        }

        /* Make text black when the accordion is active (open) */
        .accordion-button:not(.collapsed) {
            color: #000 !important;
            background-color: #e2e8ec;
            /* Optional: slight highlight when active */
            box-shadow: none;
        }

        .accordion-item h2 {
            font-weight: 600;
        }

        .popup {
            display: none;
            position: fixed;
            top: 53%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background: white;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            width: 500px;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            background-color: black ;
            color: white;
        }
        .popup {
            display: none;
             position: fixed;
            top: 56%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            max-width: 600px;
            min-height: 50vh;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            z-index: 1000;
            overflow: hidden;
            animation: fadeInUp 0.5s ease-out;
            border: 1px solid #e0e0e0;
        }
        
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(5px);
            z-index: 999;
        }
        
        .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 24px;
            color: #777;
            cursor: pointer;
            transition: all 0.3s;
            z-index: 10;
            background: rgba(141, 132, 132, 0.8);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .close-btn:hover {
            color:rgb(249, 248, 248);
            transform: rotate(90deg);
        }
        
        /* Form Styles */
        .contact1-form {
            padding: 20px;
        }
        
        .heading1 {
            text-align: center;
            margin-bottom: 15px;
        }
        
        .heading1 h3 {
            font-size: 28px;
            color: #2c3e50;
            margin-bottom: -5px;
            font-weight: 700;
            position: relative;
            display: inline-block;
        }
        
        .heading1 h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #3498db, #9b59b6);
            border-radius: 3px;
        }
        
        .heading1 p {
            color: #7f8c8d;
            font-size: 16px;
            line-height: 1.6;
        }
        
        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -15px;
        }
        
       
        
        .single-input {
            position: relative;
        }
        
        .single-input input, 
        .single-input textarea {
            width: 100%;
            height: 50px;
            padding: 15px 20px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s;
            background-color: #f9f9f9;
            margin-bottom: 15px;
        }
        
        .single-input input:focus, 
        .single-input textarea:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
            background-color: white;
        }
        
        .single-input textarea {
            resize: vertical;
            min-height: 120px;
        }
        
        .popup-btn1 {
            background: linear-gradient(45deg, #3498db, #9b59b6);
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: auto;
            margin-top: -20px;
        }
        
        .theme-btn1 span {
            margin-left: 10px;
            transition: transform 0.3s;
        }
        
        .theme-btn1:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .theme-btn1:hover span {
            transform: translateX(5px);
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translate(-50%, -40%);
            }
            to {
                opacity: 1;
                transform: translate(-50%, -50%);
            }
        }
        
        /* Floating Labels Effect */
        .single-input label {
            position: absolute;
            left: 20px;
            top: 15px;
            color: #95a5a6;
            transition: all 0.3s;
            pointer-events: none;
            background: #f9f9f9;
            padding: 0 5px;
        }
        
        .single-input input:focus + label,
        .single-input input:not(:placeholder-shown) + label,
        .single-input textarea:focus + label,
        .single-input textarea:not(:placeholder-shown) + label {
            top: -10px;
            left: 15px;
            font-size: 12px;
            color: #3498db;
            background: white;
        }
    </style>
</head>

<body class="body">


    <!-- Preloader Start -->

    <!-- Preloader End -->
    <div class="overlay" id="overlay"></div>
    <div class="popup" id="popup">
        <span class="close-btn" onclick="closePopup()">×</span>

        <div class="contact1-form">
            <div class="heading1">
                <h3>Send us a Message</h3>
                <div class="space16"></div>
                <p>Feel free to reach out to us with any questions, inquiries, or staffing requirements you may have. Our team is ready to assist you.</p>
            </div>

            <form action="submit_form.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-input">
                            <input type="text" id="firstName" placeholder=" " name="first_name" required>
                            <label for="firstName">First Name</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="single-input">
                            <input type="text" id="lastName" placeholder=" " name="last_name" required>
                            <label for="lastName">Last Name</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="single-input">
                            <input type="email" id="email" placeholder=" " name="email"
 required>
                            <label for="email">Email</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="single-input">
                            <input type="tel" id="phone" placeholder=" " name="phone" required>
                            <label for="phone">Phone</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="single-input">
                            <input type="text" id="subject" placeholder=" " name="subject" required>
                            <label for="subject">Subject</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="single-input">
                            <textarea id="message" placeholder=" " name="message" required></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="button">
                            <button class="popup-btn1" type="submit">Register Query &nbsp; <span><i class="fas fa-arrow-right"></i></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--=====progress END=======-->

    <div class="paginacontainer">

        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

    </div>

    <!--=====progress END=======-->

    <!--=====HEADER START=======-->
    <?php include 'header.php'; ?>


    <!--=====Mobile header end=======-->


    <!--=====HERO AREA START =======-->

    <div class="hero-area1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="main-heading">
                        <span class="span" data-aos="fade-right" data-aos-duration="800">Master the Art of Online Selling </span>
                        <h1 class="text-anime-style-3">Confidently Navigate the Online Retail World</h1>
                        <div class="space16"></div>
                        <p data-aos="fade-right" data-aos-duration="1000">Globalconnection21 empowers your online sales journey with comprehensive e-commerce and digital marketing solutions. From crafting impactful websites to implementing effective strategies, we help boost your brand and sales. Thrive in the digital sphere with confidence!</p>

                        <div class="space30"></div>
                        <div class="hero1-buttons" data-aos="fade-right" data-aos-duration="1200">
                            <a class="theme-btn1" href="contact">Start Your Search <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            <a class="theme-btn2" href="about">Discover More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero1-images">
                        <div class="image1">
                        </div>
                        <div class="image2 overlay-anim" data-aos="zoom-in-up" data-aos-duration="700">
                            <img src="assets/img/d2c2.png" alt="" style="border-radius: 50%;">
                        </div>
                        <div class="image3 shape-animaiton2" data-aos="zoom-in-up" data-aos-duration="700">
                            <img src="assets/img/d2c1.png" alt="">
                        </div>
                        <div class="image4 shape-animaiton3">
                            <img src="assets/img/shapes/hero1-shape.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====HERO AREA END=======-->

    <!--=====HERO SLIDER AREA END=======-->



    <!--=====HERO SLIDER AREA END=======-->

    <!--=====ABOUT AREA START=======-->

    <div class="chosse1 sp">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="image reveal overlay-anim">
                        <img src="assets/img/d2c3.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="heading1 choose1-heading">
                        <span class="span" data-aos="fade-left" data-aos-duration="700">Why Choose Us</span>
                        <h2 class="text-anime-style-3">About Us Globalconnection21</h2>
                        <div class="space16"></div>
                        <p data-aos="fade-left" data-aos-duration="900">At Globalconnection21, we don't just offer services; we create possibilities. Our tailored e-commerce and digital marketing strategies are designed to turn your challenges into opportunities for success. From smart PPC campaigns to innovative content marketing and impactful social media management, we ensure measurable results that help your business soar in the digital landscape. Partner with us and let’s transform your online presence into a powerful engine of growth!</p>

                        <div class="space10"></div>
                        <div class="row" data-aos="fade-left" data-aos-duration="800">
                            <div class="col-lg-6">
                                <ul class="icon-list">
                                    <li><span><i class="fa-solid fa-check"></i></span> Range Of Services</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="icon-list">
                                    <li><span><i class="fa-solid fa-check"></i></span> Professional Expertise</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="icon-list">
                                    <li><span><i class="fa-solid fa-check"></i></span> Online Recourses</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="icon-list">
                                    <li><span><i class="fa-solid fa-check"></i></span> Client Success Stories</li>
                                </ul>
                            </div>
                        </div>
                        <div class="space30"></div>
                        <div class="" data-aos="fade-left" data-aos-duration="1100">
                            <a class="theme-btn1" href="about">About US <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====ABOUT AREA END=======-->

    <!--=====SERVICE AREA START=======-->



    <!--=====SERVICE AREA END=======-->

    <!--=====PROJECT AREA START=======-->



    <!--=====PROJECT AREA END=======-->


    <!--=====PROJECT AREA START=======-->

    <section class="project-two d-lg-block d-lg-none">
        <div class="project-two__bottom">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 m-auto text-center">
                        <div class="heading1">
                            <span class="span" data-aos="zoom-in-left" data-aos-duration="700">Our Project</span>
                            <h2 class="text-anime-style-3">Successes A Look at Our Projects</h2>
                            <div class="space16"></div>
                            <p>Explore our portfolio of successful projects that showcase the impact we've made <br> in connecting top talent with leading organizations. From small-scale placements</p>
                        </div>
                    </div>
                </div>

                <div class="space60"></div>

                <div class="project-two__carousel-container">
                    <div class="project-two__carousel owl-carousel owl-theme thm-owl__carousel project-style1-carousel owl-dot-style1">

                        <!--Portfolio Two Single Start-->
                        <div class="project-two__single-box">
                            <ul class="project-two__box project-two__box2 list-unstyled">
                                <li class="active">
                                    <div class="project-two__box-content project-two__box-content2">
                                        <div class="single-project-two__bg"
                                            style="background-image: url(assets/img/project/project1-img1.png);">
                                        </div>
                                        <div class="img-holder-img-bg"></div>
                                        <div class="project-two__box-content-inner-icon">
                                            <a href="#" class="img-popup"><i
                                                    class="icon-next"></i></a>
                                        </div>
                                        <div class="project-two__box-content-inner">
                                            <div class="project-two__box-content-inner-wrapper">
                                                <p>Staffing Service </p>
                                                <h4><a href="">Demonstrating Our Expertise</a></h4>
                                            </div>
                                            <div class="icon">
                                                <a href=""><i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--Portfolio Two Single End-->
                        <!--Portfolio Two Single Start-->
                        <div class="project-two__single-box">
                            <ul class="project-two__box project-two__box2 list-unstyled">
                                <li class="active">
                                    <div class="project-two__box-content project-two__box-content2">
                                        <div class="single-project-two__bg"
                                            style="background-image: url(assets/img/project/project1-img2.png);">
                                        </div>
                                        <div class="img-holder-img-bg"></div>
                                        <div class="project-two__box-content-inner-icon">
                                            <a href="assets/img/service/service1-img1.png" class="img-popup"><i
                                                    class="icon-next"></i></a>
                                        </div>
                                        <div class="project-two__box-content-inner">
                                            <div class="project-two__box-content-inner-wrapper">
                                                <p>Staffing Service </p>
                                                <h4><a href="">Demonstrating Our Expertise</a></h4>
                                            </div>
                                            <div class="icon">
                                                <a href=""><i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--Portfolio Two Single End-->
                        <!--Portfolio Two Single Start-->
                        <div class="project-two__single-box">
                            <ul class="project-two__box project-two__box2 list-unstyled">
                                <li class="active">
                                    <div class="project-two__box-content project-two__box-content2">
                                        <div class="single-project-two__bg"
                                            style="background-image: url(assets/img/project/project1-img3.png);">
                                        </div>
                                        <div class="img-holder-img-bg"></div>
                                        <div class="project-two__box-content-inner-icon">
                                            <a href="assets/img/service/service1-img1.png" class="img-popup"><i
                                                    class="icon-next"></i></a>
                                        </div>
                                        <div class="project-two__box-content-inner">
                                            <div class="project-two__box-content-inner-wrapper">
                                                <p>Staffing Service </p>
                                                <h4><a href="">Demonstrating Our Expertise</a></h4>
                                            </div>
                                            <div class="icon">
                                                <a href=""><i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--Portfolio Two Single End-->


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=====PROJECT AREA END=======-->

    <!--=====WORK AREA START=======-->

    <div class="work1 sp">
        <h1 class="text-anime-style-4 text-center " style="margin-bottom: 30px;"> We Power Your Brand Across Top Marketplaces</h1>

        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="heading1 work1-heading">
                         <span class="span" data-aos="zoom-in-left" data-aos-duration="700">International Services</span>

                        <p data-aos="fade-left" data-aos-duration="900">We connect your business globally with seamless, professional, and efficient international services.</p>
                        <div class="space10"></div>
                        <div class="" data-aos="fade-left" data-aos-duration="900">
                            <div class="work1-box">
                                <div class="">
                                    <div class="icon">
                                        <img src="assets/img/icons/work1-icon1.png" alt="">
                                    </div>
                                </div>
                                <div class="heading1">
                                    <h4><a href="">Sourcing the Best</a></h4>
                                    <p>Stay tuned for regular updates and valuable insights from our team of staffing experts.</p>
                                </div>
                            </div>
                        </div>

                        <div class="" data-aos="fade-left" data-aos-duration="700">
                            <div class="work1-box">
                                <div class="">
                                    <div class="icon">
                                        <img src="assets/img/icons/work1-icon2.png" alt="">
                                    </div>
                                </div>
                                <div class="heading1">
                                    <h4><a href="">Volume Hiring</a></h4>
                                    <p>Remember to keep your blog content informative, engaging, and relevant to your target audience</p>
                                </div>
                            </div>
                        </div>

                        <div class="" data-aos="fade-left" data-aos-duration="1100">
                            <div class="work1-box">
                                <div class="">
                                    <div class="icon">
                                        <img src="assets/img/icons/work1-icon3.png" alt="">
                                    </div>
                                </div>
                                <div class="heading1">
                                    <h4><a href="">Partners in Team Building</a></h4>
                                    <p>This will help drive traffic to your website & establish your agency as a trusted authority</p>
                                </div>
                            </div>
                        </div>
                        <div class="" data-aos="fade-left" data-aos-duration="1100">
                            <div class="work1-box">
                                <div class="">
                                    <div class="icon">
                                        <img src="assets/img/icons/work1-icon3.png" alt="">
                                    </div>
                                </div>
                                <div class="heading1">
                                    <h4><a href="">Partners in Team Building</a></h4>
                                    <p>This will help drive traffic to your website & establish your agency as a trusted authority</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="heading1 work1-heading">
                       
                        <span class="span" data-aos="zoom-in-left" data-aos-duration="700">Domestic Services</span>

                        <div class="space16"></div>
                        <p data-aos="fade-left" data-aos-duration="900">Our Domestic Services ensure a seamless, stress-free home experience with top-quality support and care.</p>


                        <div class="space10"></div>
                        <div class="" data-aos="fade-left" data-aos-duration="900">
                            <div class="work1-box">
                                <div class="">
                                    <div class="">
                                        <img src="assets/img/amazon.png" alt="" style="width: 120px;">
                                    </div>
                                </div>
                                <div class="heading1">
                                    <h4><a href="">Sourcing the Best</a></h4>
                                    <p>Stay tuned for regular updates and valuable insights from our team of staffing experts.</p>
                                </div>
                            </div>
                        </div>

                        <div class="" data-aos="fade-left" data-aos-duration="700">
                            <div class="work1-box">
                                <div class="">
                                    <div class=" ">
                                        <img src="assets/img/flipkart.png" alt="" style="width: 120px;">
                                    </div>
                                </div>
                                <div class="heading1">
                                    <h4><a href="">Volume Hiring</a></h4>
                                    <p>Remember to keep your blog content informative, engaging, and relevant to your target audience</p>
                                </div>
                            </div>
                        </div>

                        <div class="" data-aos="fade-left" data-aos-duration="1100">
                            <div class="work1-box">
                                <div class="">
                                    <div class=" ">
                                        <img src="assets/img/Meesho.png" alt="" style="width: 120px;border-radius:50%">
                                    </div>
                                </div>
                                <div class="heading1">
                                    <h4><a href="">Partners in Team Building</a></h4>
                                    <p>This will help drive traffic to your website & establish your agency as a trusted authority</p>
                                </div>
                            </div>
                        </div>
                        <div class="" data-aos="fade-left" data-aos-duration="1100">
                            <div class="work1-box">
                                <div class="">
                                    <div class=" ">
                                        <img src="assets/img/tax.png" alt="" style="width: 120px;">
                                    </div>
                                </div>
                                <div class="heading1">
                                    <h4><a href="">Partners in Team Building</a></h4>
                                    <p>This will help drive traffic to your website & establish your agency as a trusted authority</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <section class="stats-section">
        <div class="stat-box">
            <h2>+79</h2>
            <p>Happy Clients</p>
        </div>
        <div class="stat-box">
            <h2>+8</h2>
            <p>Hard Worker</p>
        </div>
        <div class="stat-box">
            <h2>+129</h2>
            <p>Complete Project</p>
        </div>
        <div class="stat-box">
            <h2>3+</h2>
            <p>Years Of Experience</p>
        </div>
    </section>
    <!--=====WORK AREA END=======-->






    <!--=====TESTIMONIAL AREA START=======-->

    <div class="tes1 sp">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="heading1">
                        <span class="span" data-aos="zoom-in-left" data-aos-duration="800">Testimonial</span>
                        <h2 class="text-anime-style-4">Your Trusted, Business Partner </h2>
                        <div class="space16"></div>
                        <p data-aos="fade-left" data-aos-duration="800">Discover why businesses trust us to find the right talent and candidates trust us to find the perfect fit.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tes7-buttons" data-aos="fade-right" data-aos-duration="900">
                        <button class="testimonial-prev-arrow1"><i class="fa-regular fa-arrow-left"></i></button>
                        <button class="testimonial-next-arrow1"><i class="fa-regular fa-arrow-right"></i></button>
                    </div>
                </div>

            </div>

            <div class="space30"></div>
            <div class="row">
                <div class="tes1-slider" data-aos="fade-up" data-aos-duration="900">
                    <div class="single-slider">
                        <div class="row">
                            <div class="col-md-8">
                                <ul class="stars">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <div class="pera">
                                    <p>“But don't just take our word for it—hear what our satisfied clients have to say. From Fortune 500 companies to small”</p>
                                </div>
                                <div class="bottom-heading">
                                    <h4><a href="#">Amir Jamil</a></h4>
                                    <p>Vp,Daily Naws</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="tes1-image">
                                    <img src="assets/img/testimonial/tes1-img1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-slider">
                        <div class="row">
                            <div class="col-md-8">
                                <ul class="stars">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <div class="pera">
                                    <p>“Our dedication to excellence, and commitment to building long-lasting partnerships have”</p>
                                </div>
                                <div class="bottom-heading">
                                    <h4><a href="#">Usman Khan</a></h4>
                                    <p>Co Funder</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="tes1-image">
                                    <img src="assets/img/testimonial/tes1-img2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="single-slider">
                        <div class="row">
                            <div class="col-md-8">
                                <ul class="stars">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <div class="pera">
                                    <p>“But don't just take our word for it—hear what our satisfied clients have to say. From Fortune 500 companies to small”</p>
                                </div>
                                <div class="bottom-heading">
                                    <h4><a href="#">Amir Jamil</a></h4>
                                    <p>Vp,Daily Naws</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="tes1-image">
                                    <img src="assets/img/testimonial/tes1-img1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-slider">
                        <div class="row">
                            <div class="col-md-8">
                                <ul class="stars">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <div class="pera">
                                    <p>“Our dedication to excellence, and commitment to building long-lasting partnerships have”</p>
                                </div>
                                <div class="bottom-heading">
                                    <h4><a href="#">Usman Khan</a></h4>
                                    <p>Co Funder</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="tes1-image">
                                    <img src="assets/img/testimonial/tes1-img2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--=====TESTIMONIAL AREA END=======-->

    <!--=====CONTACT AREA START=======-->

    <div class="contact1 sp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="heading1-w">
                        <span class="span" data-aos="zoom-in-left" data-aos-duration="700">Contact Us</span>
                        <h2 class="text-anime-style-3">Get in Touch Let's Start the Conversation</h2>
                        <div class="space16"></div>
                        <p data-aos="fade-right" data-aos-duration="900">We're here to help you find the right staffing solutions for your needs. Whether you're a company looking to hire top talent or a candidate seeking your next career opportunity,</p>

                        <div class="" data-aos="fade-right" data-aos-duration="800">
                            <div class="contact1-box">
                                <div class="icon">
                                    <img src="assets/img/icons/contact-icon1.png" alt="">
                                </div>
                                <div class="heading">
                                    <p>Gives us a Call</p>
                                    <a href="tel:+91 735 104 2162"> +91 735 104 2162</a> &&
                                                                        <a href="tel:+31 97010268384">+31 97010268384</a>

                                </div>
                            </div>
                        </div>

                        <div class="" data-aos="fade-right" data-aos-duration="1100">
                            <div class="contact1-box">
                                <div class="icon">
                                    <img src="assets/img/icons/contact-icon2.png" alt="">
                                </div>
                                <div class="heading">
                                    <p>Send me Mail</p>
                                    <a href="mailto:help@globalconnection21.com">help@globalconnection21.com</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact1-form" data-aos="zoom-out" data-aos-duration="900">
                        <div class="heading1">
                            <h3>Send us a Message</h3>
                            <div class="space16"></div>
                            <p>Feel free to reach out to us with any questions, inquiries, or staffing requirements you may have. Our experienced</p>
                        </div>
                        <div class="space10"></div>

                        <form action="submit_form.php" method="POST">
    <div class="row">
        <div class="col-md-6">
            <div class="single-input">
                <input type="text" name="first_name" placeholder="First Name" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="single-input">
                <input type="text" name="last_name" placeholder="Last Name" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="single-input">
                <input type="email" name="email" placeholder="Email" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="single-input">
                <input type="number" name="phone" placeholder="Phone" required>
            </div>
        </div>

        <div class="col-md-12">
            <div class="single-input">
                <input type="text" name="subject" placeholder="Subject" required>
            </div>
        </div>

        <div class="col-md-12">
            <div class="single-input">
                <textarea rows="4" name="message" placeholder="Message" required></textarea>
            </div>
        </div>

        <div class="col-md-12">
            <div class="button">
                <button class="theme-btn1" type="submit">Submit Now <span><i class="fa-solid fa-arrow-right"></i></span></button>
            </div>
        </div>
    </div>
</form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--=====CONTACT AREA END=======-->

    <!--=====TEAM AREA START=======-->

    <div class="team1 sp">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="heading1">
                        <span class="span" data-aos="zoom-in-left" data-aos-duration="800">Portfolio</span>
                        <h2 class="text-anime-style-3">Our Portfolio</h2>
                        <div class="space16"></div>
                        <p data-aos="fade-up" data-aos-duration="700">A glance at the work we’ve done — real results, happy clients, and growing businesses.

                        </p>
                    </div>
                </div>
            </div>

            <div class="space30"></div>
            <div class="row">
                <div class="col-lg-4 col-md-6" style="margin-bottom: 25px;">
                    <div class="" data-aos="zoom-in-up" data-aos-duration="700">
                        <div class="image">
                            <img src="assets/img/team/team1-img1.png" alt="" style="height:150px;width:100%">
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="" data-aos="zoom-in-up" data-aos-duration="900">
                        <div class="image">
                            <img src="assets/img/team/team1-img2.png" alt="" style="height:150px;width:100%">
                        </div>

                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class=" " data-aos="zoom-in-up" data-aos-duration="1100">
                        <div class="image">
                            <img src="assets/img/team/team1-img1.png" alt="" style="height:150px;width:100%">
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class=" " data-aos="zoom-in-up" data-aos-duration="1100">
                        <div class="image">
                            <img src="assets/img/team/team1-img1.png" alt="" style="height:150px;width:100%">
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class=" " data-aos="zoom-in-up" data-aos-duration="1100">
                        <div class="image">
                            <img src="assets/img/team/team1-img1.png" alt="" style="height:150px;width:100%">
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class=" " data-aos="zoom-in-up" data-aos-duration="1100">
                        <div class="image">
                            <img src="assets/img/team/team1-img1.png" alt="" style="height:150px;width:100%">
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <!--=====TEAM AREA END=======-->

    <!--=====BLOG AREA START=======-->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center g-5">
                <!-- Left Image -->
                <div class="col-md-5 text-center">
                    <img src="assets/img/faqs.png" alt="FAQs" class="img-fluid" style="max-width: 350px;">
                </div>

                <!-- Right Accordion -->
                <div class="col-md-7">
                    <h2 class="mb-4 fw-bold">FAQs</h2>
                    <div class="accordion" id="faqAccordion">

                        <div class="accordion-item" style="margin-bottom: 10px;">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    How can I book the given services?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    You can book services via our website or call our support directly.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Why do I pay GST on it? Will I be able to avail the GST credit while filing return?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, if you are GST-registered, you can claim input credit when eligible.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    How do I pay for the services?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Payments can be made via UPI, credit/debit cards, or bank transfer.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                    What would happen after booking the monthly services?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our team will onboard you and initiate service delivery promptly.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                    I have more questions, where can I ask?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Reach us anytime via our contact form or live support chat.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--=====BLOG AREA END=======-->

    <!--===== CTA AREA START =======-->

    <div class="cta">
        <div class="container">
            <div class="row cta-border align-items-center">
                <div class="col-lg-6">
                    <div class="heading1-w">
                        <h2>Ready to Power up your Savings and Reliability?</h2>
                        <div class="space16"></div>
                        <p>Feel free to customize this paragraph to better reflect the <br> specific services offered by your IT solution & the unique </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="subscribe-area">
                        <form action="#">
                            <input type="email" placeholder="Email Address">
                            <div class="button">
                                <button type="submit" class="theme-btn1">Subscribe Now <span><i class="fa-solid fa-arrow-right"></i></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===== CTA AREA START =======-->

    <!--===== FOOTER AREA START =======-->

    <?php include 'footer.php'; ?>

    </div>

    <!--===== FOOTER AREA END =======-->



    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/fontawesome.js"></script>
    <script src="assets/js/mobile-menu.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/jquery.countup.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/Splitetext.js"></script>
    <script src="assets/js/SmoothScroll.js"></script>
    <script src="assets/js/text-animation.js"></script>
    <script src="assets/js/jquery.lineProgressbar.js"></script>
    <script src="assets/js/tilt.jquery.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        const questions = document.querySelectorAll('.faq-question');

        questions.forEach(q => {
            q.addEventListener('click', () => {
                q.classList.toggle('active');
                const answer = q.nextElementSibling;
                answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
            });
        });
    </script>
    <script>
        // Open popup after 1 second
        setTimeout(function() {
            document.getElementById('overlay').style.display = 'block';
            document.getElementById('popup').style.display = 'block';
        }, 1000);

        // Close popup function
        function closePopup() {
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('popup').style.display = 'none';
        }
        
        // Close when clicking outside
        document.getElementById('overlay').addEventListener('click', closePopup);
        
        // Prevent form submission for demo
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message!');
            closePopup();
        });
    </script>


</body>

</html>