<?php

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    $username = null;
}

?>
 <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">-->
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

 <style>
    #sy-whatshelp {
  right: 25px;
  bottom: 25px;
  position: fixed;
  z-index: 9999;
}

#sy-whatshelp a {
  position: relative;
}

#sy-whatshelp a.sywh-open-services {
  background-color: #129bf4;
  color: #fff;
  line-height: 55px;
  margin-top: 10px;
  border: none;
  margin-bottom: 60px;
  cursor: pointer;
  font-size: 23px;
  width: 55px;
  height: 55px;
  text-align: center;
  box-shadow: 2px 2px 8px -3px #000;
  border-radius: 100%;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  -ms-border-radius: 100%;
  display: inline-block;
}

#sy-whatshelp a.sywh-open-services i {
  line-height: 55px;
}

#sy-whatshelp a.sywh-open-services i.fa-times {
  display: none;
}

#sy-whatshelp .sywh-services {
  width: 55px;
  height: auto;
}

#sy-whatshelp .sywh-services a {
  display: none;
}

#sy-whatshelp .sywh-services a i {
  background-color: #129bf4;
  color: #fff;
  line-height: 55px;
  margin-top: 10px;
  border: none;
  cursor: pointer;
  font-size: 23px;
  width: 55px;
  height: 55px;
  text-align: center;
  box-shadow: 2px 2px 8px -3px #000;
  border-radius: 100%;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  -ms-border-radius: 100%;
}

#sy-whatshelp .sywh-services a.email i {
  background-color: #b92b27;
}

#sy-whatshelp .sywh-services a.instagram i {
  background-color: #e4405f;
}

#sy-whatshelp .sywh-services a.messenger i {
  background-color: #0084ff;
}

#sy-whatshelp .sywh-services a.whatsapp i {
  background-color: #25d366;
}

#sy-whatshelp .sywh-services a.call i {
  background-color: #da2d5b;
}

a[data-tooltip] {
  position: relative;
}

a[data-tooltip]::before,
a[data-tooltip]::after {
  position: absolute;
  display: none;
  opacity: 0.85;
  transition: all 0.3s ease-in-out;
}

a[data-tooltip]::before {
  content: attr(data-tooltip);
  background: #000;
  color: #fff;
  font-size: 13px;
  padding: 7px 11px;
  border-radius: 5px;
  white-space: nowrap;
  text-decoration: none;
}

a[data-tooltip]::after {
  width: 0;
  height: 0;
  border: 6px solid transparent;
  content: "";
}

a[data-tooltip]:hover::before,
a[data-tooltip]:hover::after {
  display: block;
}

a.sywh-open-services[data-tooltip]::before,
a.sywh-open-services[data-tooltip]::after {
  display: block;
}

a.data-tooltip-hide[data-tooltip]::before,
a.data-tooltip-hide[data-tooltip]::after {
  display: none !important;
}

a.sywh-open-services[data-tooltip][data-placement="left"]::before {
  top: 11px;
}

a[data-tooltip][data-placement="left"]::before {
  top: -7px;
  right: 100%;
  line-height: normal;
  margin-right: 10px;
}

a[data-tooltip][data-placement="left"]::after {
  border-left-color: #000;
  border-right: none;
  top: 50%;
  right: 100%;
  margin-top: -6px;
  margin-right: 4px;
}

a[data-tooltip][data-placement="right"]::before {
  top: -7px;
  left: 100%;
  line-height: normal;
  margin-left: 10px;
}

a[data-tooltip][data-placement="right"]::after {
  border-right-color: #000;
  border-left: none;
  top: 50%;
  left: 100%;
  margin-top: -6px;
  margin-left: 4px;
}

a[data-tooltip][data-placement="top"]::before {
  bottom: 100%;
  left: 0;
  margin-bottom: 10px;
}

a[data-tooltip][data-placement="top"]::after {
  border-top-color: #000;
  border-bottom: none;
  bottom: 100%;
  left: 10px;
  margin-bottom: 4px;
}

a[data-tooltip][data-placement="bottom"]::before {
  top: 100%;
  left: 0;
  margin-top: 10px;
}

a[data-tooltip][data-placement="bottom"]::after {
  border-bottom-color: #000;
  border-top: none;
  top: 100%;
  left: 10px;
  margin-top: 4px;
}
 </style>

<h1 class="d-none"> Build Your Amazing Marketplace With Global Connection21</h1>
<!-- Start of Header -->
<header class="header header-border">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <h1 class="d-none">Build Your Amazing Marketplace With Global Connection21</h1>
            </div>
            <div class="header-right">
                <p class="welcome-msg"> Build Your Amazing Marketplace With Global Connection21</p>

                <!-- End of Dropdown Menu -->
                <span class="divider d-lg-show"></span>
                <a href="blog" class="d-lg-show">News</a>
                <a href="certificate" class="d-lg-show">Trust Certificate</a>
                <a href="about-us" class="d-lg-show">About Us</a>
                <a href="faq" class="d-lg-show">
                    <i class="w-icon-exclamation-circle"></i>
                    Need Help
                </a>
            </div>
        </div>
    </div>
    <!-- End of Header Top -->

    <div class="header-middle">
        <div class="container">
            <div class="header-left mr-md-4">
                <a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle">
                </a>
                <a href="index" class="logo ml-lg-0">
                    <img src="assets\images\demos\demo14\1.svg" alt="logo" width="230" height="45" />
                </a>
               <form method="get" action="#" style="border: 1.5px solid #da2d5b; border-radius: 5px;" class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
    <input type="text" class="form-control" style="border:none" name="search" id="search" placeholder="Search in..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>" required />
    <button class="btn btn-search" type="submit" style="border: none; background-color: #da2d5b; color: white;">
        <i class="w-icon-search"></i>
    </button>
</form>
            </div>
            <div class="header-right ml-4">
                <div class="header-call d-xs-show d-lg-flex align-items-center">
                    <a href="tel:#" class="w-icon-call"></a>
                    <div class="call-info d-lg-show">
                        <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                            <a href="https://wa.me/+917251042162"
                                class="text-capitalize">Live Chat</a> or :
                        </h4>
                        <a href="tel:+91 725-104-2162" class="phone-number font-weight-bolder ls-50">+91-735-104-2162 </a>
                    </div>
                </div>
                <!-- <a class="wishlist label-down link d-xs-show" href="login">
                            <i class="w-icon-plus"></i>
                            <span class="wishlist-label d-lg-show">Login</span>
                        </a> -->
                <div class="account align-items-center d-sm-show">
                    <a class="login inline-type d-flex ls-normal" href="my-account-login" style="color:crimson">
                        <i class="w-icon-account d-flex align-items-center justify-content-center br-50" style="color:crimson"></i>
                        <span class="d-flex flex-column justify-content-center ml-3 d-xl-show">Account
                            
                            <b class="d-block font-weight-bold ls-25" style="color:crimson">
                               Login
                            </b>
                        </span>
                    </a>

                </div>

            </div>
        </div>
    </div>
    <!-- End of Header Middle -->

    <div class="header-bottom sticky-content fix-top sticky-header">
        <div class="container">
            <div class="inner-wrap">
                <div class="header-left">
                    <div class="dropdown category-dropdown has-border" data-visible="true">
                        <a href="#" class="category-toggle" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="true" data-display="static"
                            title="Browse Categories">
                            <i class="w-icon-category"></i>
                            <span>Browse Categories</span>
                        </a>

                        <div class="dropdown-box">
                            <ul class="menu vertical-menu category-menu menu-item">
                                <li>
                                    <a href="product">
                                        <i class="w-icon-sofa"></i> Miscellaneous

                                    </a>
                                    <ul class="megamenu type2" style="overflow-y: auto;">
                                        <li class="row">
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Paper &amp; Paper Products</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product">Absorbent
                                                            Paper</a></li>
                                                    <li><a
                                                            href="product">Adhesive
                                                            Paper</a></li>
                                                    <li><a
                                                            href="product">Air
                                                            Filter Paper</a></li>
                                                    <li><a
                                                            href="product">Anti
                                                            Rust Paper</a></li>
                                                    <li><a
                                                            href="product">Art
                                                            Paper</a></li>
                                                    <li><a href="product"><b>See more</b></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Plastic Products</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product">Bio-Degradable
                                                            Plastic
                                                            Product</a></li>
                                                    <li><a
                                                            href="product">Extrusion
                                                            Plants</a></li>
                                                    <li><a
                                                            href="product">Injection
                                                            Moulded Products</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Injection
                                                            Moulding
                                                            Machinery</a></li>
                                                    <li><a
                                                            href="product">Plastic
                                                            Items</a></li>
                                                    <li><a href="product"><b>See more</b></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Automobile &amp; Auto
                                                    Accessories</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product">Aeroplane
                                                            Models</a></li>
                                                    <li><a
                                                            href="product">Aerospace
                                                            -
                                                            Commercial &amp; Military</a></li>
                                                    <li><a
                                                            href="product">Aircraft</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Aircraft
                                                            &amp; Aerospace</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Aircraft
                                                            Engines &amp;
                                                            Spares</a></li>
                                                    <li><a href="product"><b>See more</b></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Fuel &amp; Energy Resources</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product">Anthracite
                                                            Coal</a></li>
                                                    <li><a
                                                            href="product">Bamboo
                                                            Charcoal</a></li>
                                                    <li><a
                                                            href="product">Bituminous
                                                            Coal</a></li>
                                                    <li><a
                                                            href="product">Briquette</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Charcoal</a>
                                                    </li>
                                                    <li><a href="product"><b>See more</b></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Hotel &amp;
                                                    Restaurant - Equipments &amp; Products</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li class="go-back"> <a href="product">Clothing</a></li>
                                                    <li><a
                                                            href="product">Catering
                                                            Equipments</a></li>
                                                    <li><a href="product"><b>See more</b></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Medical &amp; HealthCare</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product">1
                                                            Ply Face Mask</a></li>
                                                    <li><a
                                                            href="product">2
                                                            Ply Face Mask</a></li>
                                                    <li><a
                                                            href="product">3
                                                            Ply Face Mask</a></li>
                                                    <li><a
                                                            href="product">4
                                                            Ply Face Mask</a></li>
                                                    <li><a
                                                            href="product">5
                                                            Ply Face Mask</a></li>
                                                    <li><a href="product"><b>See more</b></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Pollution Control
                                                    Equipments</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li class="go-back"> <a href="product">Clothing</a></li>
                                                    <li><a
                                                            href="product">Air
                                                            Filters</a></li>
                                                    <li><a
                                                            href="product">Air
                                                            Fresheners</a></li>
                                                    <li><a href="product"><b>See more</b></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Safety &amp; Security
                                                    Equipment</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product"></a>
                                                    </li>
                                                    <li><a
                                                            href="product">Army
                                                            &amp; Police
                                                            Equipment</a></li>
                                                    <li><a
                                                            href="product">CCTV
                                                            &amp; Accessories</a></li>
                                                    <li><a
                                                            href="product">Fire
                                                            Extinguishers
                                                            &amp; Products</a></li>
                                                    <li><a
                                                            href="product">Surveillance
                                                            Equipments</a></li>
                                                    <li><a href="product"><b>See more</b></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Books,
                                                    Music &amp; Entertainment</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product">Accordion</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Acoustic
                                                            Guitar</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Books,
                                                            Textbooks &amp; Magazines</a></li>
                                                    <li><a
                                                            href="product">Clarinet</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Dholak</a>
                                                    </li>
                                                    <li><a href="product"><b>See more</b></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Fitness Equipment &amp;
                                                    Sports Goods</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product">Acupressure
                                                            And Massage Balls</a></li>
                                                    <li><a
                                                            href="product">Acupressure
                                                            Rollers</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Archery
                                                            Accessories</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Archery
                                                            Arrows</a></li>
                                                    <li><a
                                                            href="product">Archery
                                                            Bows</a></li>
                                                    <li><a href="product"><b>See more</b></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Gifts &amp; Decorative</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product">Artificial
                                                            Flower</a></li>
                                                    <li><a
                                                            href="product">Brass
                                                            Handicrafts</a></li>
                                                    <li><a
                                                            href="product">Candle
                                                            Holder</a></li>
                                                    <li><a
                                                            href="product">Candles</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Christmas
                                                            Tree &amp;
                                                            Decoratives</a></li>
                                                    <li><a href="product"><b>See more</b></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Pets &amp; Pet Supplies</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product">Animal
                                                            Food</a></li>
                                                    <li><a
                                                            href="product">Aquariums
                                                            &amp; Equipments</a></li>
                                                    <li><a
                                                            href="product">Dog
                                                            Clothing &amp; Strapping</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Horse
                                                            Equipments, Saddles
                                                            &amp; Tacks</a></li>
                                                    <li><a
                                                            href="product">Pet
                                                            Cages</a></li>
                                                    <li><a href="product"><b>See more</b></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title"> Photographic &amp; Optical
                                                    Equipment</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product">Optical
                                                            Brightening Agent</a></li>
                                                    <li><a
                                                            href="product">Optical
                                                            Lenses</a></li>
                                                    <li><a
                                                            href="product">Optical
                                                            Machinery &amp; Equipment</a></li>
                                                    <li><a
                                                            href="product">Photo
                                                            Film Roll</a></li>
                                                    <li><a
                                                            href="product">Photographic
                                                            Equipment</a></li>
                                                    <li><a href="product"><b>See more</b></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="product">
                                        <i class="w-icon-social"></i>Industrial goods &amp; chemical
                                    </a>
                                    <ul class="megamenu type2" style="overflow-y: auto;">
                                        <li class="row">
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Jute Raw Material
                                                    &amp; Machinery</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product">Coir
                                                            Fibers</a></li>
                                                    <li><a
                                                            href="product">Coir
                                                            Machinery</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Coir
                                                            Mat</a></li>
                                                    <li><a
                                                            href="product">Coir
                                                            Yarn</a></li>
                                                    <li><a
                                                            href="product">Jute
                                                            Boards</a></li>
                                                    <li><a href="product"><b>See
                                                                more</b></a></li>

                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Chemicals &amp;
                                                    Allied Products</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product">Aluminum
                                                            Oxide</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Aluminum
                                                            Sulfate</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Anionic
                                                            Polyacrylamide</a></li>
                                                    <li><a
                                                            href="product">Aromatic
                                                            Chemicals</a></li>
                                                    <li><a
                                                            href="">Azo
                                                            Compounds</a></li>
                                                    <li><a href="product"><b>See
                                                                more</b></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Industrial Supplies</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product">Abrasives</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Anchors</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Battery
                                                            Scraps</a></li>
                                                    <li><a
                                                            href="product">Bearing</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Bolts</a>
                                                    </li>
                                                    <li><a href="product"><b>See
                                                                more</b></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Industrial Machinery</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product">CNC
                                                            Machines
                                                            &amp; Spare Parts</a></li>
                                                    <li><a
                                                            href="product">Dispensing
                                                            Systems</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Extrusion
                                                            Machines</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Heavy
                                                            Machinery</a></li>
                                                    <li><a
                                                            href="product">Industrial
                                                            Pumps</a></li>
                                                    <li><a href="product"><b>See
                                                                more</b></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Marine Equipment
                                                    &amp; Machinery</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product">Boats
                                                            &amp;
                                                            Vessels</a></li>
                                                    <li><a
                                                            href="product">Marine
                                                            Chemicals</a></li>
                                                    <li><a
                                                            href="product">Marine
                                                            Engines</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Marine
                                                            Equipments &amp; Spare Parts</a></li>
                                                    <li><a
                                                            href="">Marine
                                                            Oil</a></li>
                                                    <li><a href="product"><b>See
                                                                more</b></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Non Metallic
                                                    Elements</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product">Silicon</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Silicon
                                                            Plates</a></li>
                                                    <li><a
                                                            href="product">Silicon
                                                            Sealants</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Silicon
                                                            Sheets</a></li>
                                                    <li><a
                                                            href="product">Silicon
                                                            Tubes</a></li>
                                                    <li><a href="product"><b>See
                                                                more</b></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Petroleum, Oil
                                                    &amp; Related Products</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product">Bitumen,
                                                            Asphalt</a></li>
                                                    <li><a
                                                            href="product">Carbon</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Crude
                                                            Oil</a></li>
                                                    <li><a
                                                            href="product">LPG/LNG
                                                            &amp; CNG</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Lubricants</a>
                                                    </li>
                                                    <li><a href="product"><b>See
                                                                more</b></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Power Plants</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product">Power
                                                            Plant Spares</a></li>
                                                    <li><a href="product"><b>See
                                                                more</b></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Refrigeration, Cold
                                                    Storage</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product">Compressors</a>
                                                    </li>
                                                    <li><a
                                                            href="product">Refrigerator
                                                            Tubes</a></li>
                                                    <li><a href="product"><b>See
                                                                more</b></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Rubber &amp; Related
                                                    Items</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product">Raw
                                                            Rubber</a></li>
                                                    <li><a
                                                            href="product">Rubber
                                                            Chemicals</a></li>
                                                    <li><a
                                                            href="product">Rubber
                                                            Items</a></li>
                                                    <li><a
                                                            href="product">Rubber
                                                            Machinery</a></li>
                                                    <li><a
                                                            href="product">Rubber
                                                            Scrap</a></li>
                                                    <li><a href="product"><b>See
                                                                more</b></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Tools &amp; Instruments</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product">Scientific
                                                            Instruments</a></li>
                                                    <li><a
                                                            href="product">Tool
                                                            Bags</a></li>
                                                    <li><a
                                                            href="product">Tool
                                                            Box</a></li>
                                                    <li><a href="product"><b>See
                                                                more</b></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Raw &amp; Processed
                                                    Leather</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a
                                                            href="product">Animal
                                                            Leather</a></li>
                                                    <li><a
                                                            href="product">Bonded
                                                            Leather</a></li>
                                                    <li><a
                                                            href="product">Buffalo
                                                            Leather</a></li>
                                                    <li><a
                                                            href="product">Chamois
                                                            Leather</a></li>
                                                    <li><a
                                                            href="product">Cow
                                                            Leather</a></li>
                                                    <li><a href="product"><b>See
                                                                more</b></a></li>
                                                </ul>
                                            </div>


                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="product">
                                        <i class="w-icon-tshirt"></i>Apparel &
                                        fashion Product
                                    </a>
                                    <ul class="megamenu type2" style="overflow-y: auto;height: 350px;">
                                        <li class="row">
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title"> Suitcases, Briefcases &amp;
                                                    Bags</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li> <a href="product">Air Bags</a></li>
                                                    <li> <a href="product">Backpacks</a></li>
                                                    <li> <a href="product">Bags &amp; Baggage Accessories</a></li>
                                                    <li> <a href="product">Briefcases</a></li>
                                                    <li> <a href="product">Canvas Bags</a></li>
                                                    <li> <a href="product"><b>See more</b></a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Cosmetics
                                                    Products</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li> <a href="product">Agarwood Oil (Oud Oil)</a></li>
                                                    <li> <a href="product">Alcohol Based Hand Sanitizer</a></li>
                                                    <li> <a href="product">Alcohol Disinfectant Wipes</a></li>
                                                    <li> <a href="product">Antibacterial Hand Wash</a></li>
                                                    <li> <a href="product">Antibacterial Wipes</a></li>
                                                    <li> <a href="product"><b>See more</b></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Gems &amp;
                                                    Jewellery</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li> <a href="product">Amber Gemstones</a></li>
                                                    <li> <a href="product">Aquamarine Gemstones</a></li>
                                                    <li> <a href="product">Artificial Bracelets</a></li>
                                                    <li> <a href="product">Artificial Earrings</a></li>
                                                    <li> <a href="product">Artificial Jewellery</a></li>
                                                    <li> <a href="product"><b>See more</b></a></li>
                                                </ul>

                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Garment &amp; Fashion
                                                    Accessories</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li> <a href="product">Abaya</a></li>
                                                    <li> <a href="product">Acrylic Yarn</a></li>
                                                    <li> <a href="product">Aprons</a></li>
                                                    <li> <a href="product">Wool Yarn</a></li>
                                                    <li> <a href="product">Bath Towels</a></li>
                                                    <li> <a href="product"><b>See more</b></a></li>
                                                </ul>

                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Digital, Analog Watches
                                                    &amp; Clocks</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li> <a href="product">Clock Movements &amp; Parts</a></li>
                                                    <li> <a href="product">Clocks</a></li>
                                                    <li> <a href="product">Leather Watch Straps</a></li>
                                                    <li> <a href="product">Smart Watches</a></li>
                                                    <li> <a href="product">Solar Watches</a></li>
                                                    <li> <a href="product"><b>See more</b></a></li>
                                                </ul>

                                            </div>



                                        </li>

                                    </ul>
                                </li>

                                <li>
                                    <a href="product">
                                        <i class="w-icon-rice-cooker"></i>Agriculture
                                    </a>
                                    <ul class="megamenu type2" style="overflow-y: auto;height: 300px;">
                                        <li class="row">
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Agriculture Machinery
                                                    &amp; Equipment</h4>
                                                <hr class="divider">
                                                <ul>
                                                    <li> <a href="product">Agriculture Farm Tractors</a></li>
                                                    <li> <a href="product">Agriculture Grinders, Multures</a></li>
                                                    <li> <a href="product">Agriculture Threshers</a></li>
                                                    <li> <a href="product">Agriculture Bags</a></li>
                                                    <li> <a href="product">Agriculture Choppers, Shredders &amp; Cutters</a></li>
                                                    <li> <a href="product"><b>See more</b></a></li>
                                                </ul>

                                            </div>

                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title mt-1">Agriculture
                                                    Fertilizers &amp; Pesticides</h4>
                                                <hr class="divider">
                                                <ul>
                                                    <li> <a href="product">Agriculture Seeds</a></li>
                                                    <li> <a href="product">Bactericides</a></li>
                                                    <li> <a href="product">DAP (Diammonium Phosphate)</a></li>
                                                    <li> <a href="product">Fertilizers</a></li>
                                                    <li> <a href="product">Flower Seeds</a></li>
                                                    <li> <a href="product"><b>See more</b></a></li>
                                                </ul>

                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Agriculture Products</h4>
                                                <hr class="divider">
                                                <ul>
                                                    <li> <a href="product">1121 Basmati Rice</a></li>
                                                    <li> <a href="product">Ajwa Dates</a></li>
                                                    <li> <a href="product">Almonds</a></li>
                                                    <li> <a href="product">Amaranth Seeds</a></li>
                                                    <li> <a href="product">Apple</a></li>
                                                    <li> <a href="product"><b>See more</b></a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title mt-1">Flowers And Plants Related Products</h4>
                                                <hr class="divider">
                                                <ul>
                                                    <li> <a href="product">Aloe Vera</a></li>
                                                    <li> <a href="product">Artificial Grass, Synthetic Turf</a></li>
                                                    <li> <a href="product">Ashwagandha</a></li>
                                                    <li> <a href="product">Basil Leaf</a></li>
                                                    <li> <a href="product">Bitter Kola, Garcinia Kola</a></li>
                                                    <li> <a href="product"><b>See more</b></a></li>
                                                </ul>
                                            </div>




                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="product">
                                        <i class="w-icon-dish"></i>Food &amp; Beverages
                                    </a>
                                    <ul class="megamenu type2" style="overflow-y: auto;height: 250px;">
                                        <li class="row">
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Alcoholic Beverages, Tobacco &amp; Related Products</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li> <a href="product">Beedies &amp; Beedi Leaves</a></li>
                                                    <li> <a href="product">Beer Mugs</a></li>
                                                    <li> <a href="product">Food Grade Alcohol</a></li>
                                                    <li> <a href="product">Industrial Alcohol</a></li>
                                                    <li> <a href="product">Raw Tobacco, Leaves &amp; Related Products</a></li>
                                                    <li> <a href="product"><b>See more</b></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Bar Products</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li> <a href="product">Bar Bucket</a></li>
                                                    <li> <a href="product">Bar Equipments</a></li>
                                                    <li> <a href="product">Bar Glass Holder</a></li>
                                                    <li> <a href="product">Bar Glasses &amp; Mugs</a></li>
                                                    <li> <a href="product">Beer Mugs</a></li>
                                                    <li> <a href="product"><b>See more</b></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Seafood Supplies</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li> <a href="product">Canned Fish</a></li>
                                                    <li> <a href="product">Canned Seafood</a></li>
                                                    <li> <a href="product">Crabs, Fillets, Lobsters &amp; Other Sea Creatures</a></li>
                                                    <li> <a href="product">Dried Fish</a></li>
                                                    <li> <a href="product">Dried Seafood</a></li>
                                                    <li> <a href="product"><b>See more</b></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Livestock &amp; Animal Products</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li> <a href="product">Alfalfa Hay</a></li>
                                                    <li> <a href="product">Animal &amp; Cattle Feed</a></li>
                                                    <li> <a href="product">Animal By Products</a></li>
                                                    <li> <a href="product">Bees By-Product &amp; Wax</a></li>
                                                    <li> <a href="product">Canned Beef</a></li>
                                                    <li> <a href="product"><b>See more</b></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Processed Food</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li> <a href="product">All Purpose Flour</a></li>
                                                    <li> <a href="product">Arabic Gum</a></li>
                                                    <li> <a href="product">Arabica Coffee</a></li>
                                                    <li> <a href="product">Assam Tea</a></li>
                                                    <li> <a href="product">Avocado Oil</a></li>
                                                    <li> <a href="product"><b>See more</b></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="product">
                                        <i class="w-icon-bridge-lamp"></i> Electronic &amp; Electrical
                                    </a>
                                    <ul class="megamenu type2" style="overflow-y: auto;height: 250px;">
                                        <li class="row">
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Computer Peripherals &amp; Software</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li> <a href="product">Computer CPU</a></li>
                                                    <li> <a href="product">Accounting, Financial &amp; Banking Software</a></li>
                                                    <li> <a href="product">CD-ROMs</a></li>
                                                    <li> <a href="product">Communication Software</a></li>
                                                    <li> <a href="product">Computer - Motherboards</a></li>
                                                    <li> <a href="product"><b>See more</b></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Electric Circuit Components &amp; Accessories</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li> <a href="product">Adaptors</a></li>
                                                    <li> <a href="product">Batteries &amp; Chargers</a></li>
                                                    <li> <a href="product">Cable Assemblies</a></li>
                                                    <li> <a href="product">Cable Glands &amp; Reels</a></li>
                                                    <li> <a href="product">Capacitors</a></li>
                                                    <li> <a href="product"><b>See more</b></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Networking &amp; Communications Devices</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li class="go-back"> <a href="product">Clothing</a></li>
                                                    <li> <a href="product">Amplifiers</a></li>
                                                    <li> <a href="product">ATM - Automated Teller Machines</a></li>
                                                    <li> <a href="product">Audio &amp; Video Broadcasting Equipments</a></li>
                                                    <li> <a href="product">Audio Amplifier &amp; Mixer</a></li>
                                                    <li> <a href="product">Audio Cassette Parts</a></li>
                                                    <li> <a href="product"><b>See more</b></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="product">
                                        <i class="w-icon-store"></i>Constructions &amp; Real Estate
                                    </a>
                                    <ul class="megamenu type2" style="overflow-y: auto;height: 250px;">
                                        <li class="row">
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Building Material &amp; Equipment</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li> <a href="product">Aggregates</a></li>
                                                    <li> <a href="product">Angles, Frames</a></li>
                                                    <li> <a href="product">Bathroom Accessories</a></li>
                                                    <li> <a href="product">Bathtubs</a></li>
                                                    <li> <a href="product">Blocks, Tiles &amp; Slabs</a></li>
                                                    <li> <a href="product"><b>See more</b></a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Glass &amp; Ceramics Related Products</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li> <a href="product">Ceramic Filters</a></li>
                                                    <li> <a href="product">Ceramic Handicrafts</a></li>
                                                    <li> <a href="product">Ceramic Kitchenware</a></li>
                                                    <li> <a href="product">Ceramic Knobs</a></li>
                                                    <li> <a href="product">Ceramic Raw Materials</a></li>
                                                    <li> <a href="product"><b>See more</b></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Wood and Lumber</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li> <a href="product">Ash Wood</a></li>
                                                    <li> <a href="product">Bamboo Products</a></li>
                                                    <li> <a href="product">Chopsticks</a></li>
                                                    <li> <a href="product">Eucalyptus Wood</a></li>
                                                    <li> <a href="product">Lumber</a></li>
                                                    <li> <a href="product"><b>See more</b></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6">
                                                <h4 class="menu-title">Elevators &amp; Escalators</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li> <a href="product"><b>See more</b></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>


                                <li>
                                    <a href="product">
                                        <i class="w-icon-furniture"></i>Home Furnishing & Supplies
                                    </a>
                                    <ul class="megamenu type2" style="height: 250px;">
                                        <li class="row">
                                            <div class="col-md-3 col-lg-3 col-6">
                                                <h4 class="menu-title">Furniture</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li> <a href="product">Sofas & Couches</a></li>
                                                    <li> <a href="product">Armchairs</a></li>
                                                    <li> <a href="product">Bed Frames</a></li>
                                                    <li> <a href="product">Beside Tables</a></li>
                                                    <li> <a href="product">Dressing Tables</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-6">
                                                <h4 class="menu-title">Lighting</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li> <a href="product">Light Bulbs</a></li>
                                                    <li> <a href="product">Lamps</a></li>
                                                    <li> <a href="product">Celling Lights</a></li>
                                                    <li> <a href="product">Wall Lights</a></li>
                                                    <li> <a href="product">Bathroom Lighting</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-6">
                                                <h4 class="menu-title">Home Accessories</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li> <a href="product">Decorative Accessories</a></li>
                                                    <li> <a href="product">Candals & Holders</a></li>
                                                    <li> <a href="product">Home Fragrance</a></li>
                                                    <li> <a href="product">Mirrors</a></li>
                                                    <li> <a href="product">Clocks</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-6">
                                                <h4 class="menu-title">Home Accessories</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li> <a href="product">Decorative Accessories</a></li>
                                                    <li> <a href="product">Candals & Holders</a></li>
                                                    <li> <a href="product">Home Fragrance</a></li>
                                                    <li> <a href="product">Mirrors</a></li>
                                                    <li> <a href="product">Clocks</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="product">
                                        <i class="w-icon-ice-cream"></i>Ores and Minerals
                                    </a>
                                    <ul class="megamenu" style="width: 35rem;">
                                        <li>
                                            <h4 class="menu-title">Women</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li> <a href="product">Antimony Ore</a></li>
                                                <li> <a href="product">Asbestos</a></li>
                                                <li> <a href="product">Barite Ore</a></li>
                                                <li> <a href="product">Bauxite &amp; Aluminium Ore</a></li>
                                                <li> <a href="product">Bentonite</a></li>
                                                <li> <a href="product"><b>See more</b></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>






                            </ul>
                        </div>
                    </div>
                    <nav class="main-nav">
                        <ul class="menu">
                            <li class="active">
                                <a href="Subscription">Advertise with us</a>
                            </li>
                            <li>
                                <a href="index">Home</a>

                            </li>
                            <li>
                                <a href="product">Products</a>

                            </li>
                            <li>
                                <a href="buyer">Buyers</a>

                            </li>
                            <li>
                                <a href="supplier">Suppliers</a>

                            </li>
                            <li>
                                <a href="contact-us">Contact</a>

                            </li>
                            <li>
                                <a href="about-us">About</a>

                            </li>
                            <li>
                                <a href="signin">Register</a>

                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <a href="product" class="d-xl-show"><i class="w-icon-gift"></i> &nbsp;&nbsp; Daily Deals</a>
                    <!-- <a href="#"><i class="w-icon-sale"></i>Daily Deals</a> -->
                </div>
            </div>
        </div>
    </div>
</header>
<div id="sy-whatshelp">
  <div class="sywh-services">
    <a href="contact-us" class="messenger" data-tooltip="Livechat" data-placement="left" >
      <i class="fa fa-comments"></i>
    </a>
    <a href="https://wa.me/917351042162" class="whatsapp" data-tooltip="WhatsApp" data-placement="left" target="_blank">
      <i class="fa fa-whatsapp"></i>
    </a>
    <a href="tel:917351042162" class="call" data-tooltip="Call" data-placement="left">
      <i class="fa fa-phone"></i>
    </a>
  </div>
  <a class="sywh-open-services" data-tooltip="Contact Us" data-placement="left">
				<i class="fa fa-comments"></i>
    <i class="fa fa-times"></i>
  </a>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script>
    "use strict";
jQuery(function ($) {
    $('a.sywh-open-services').click(function () {
        if ($('.sywh-services').hasClass('active')) {
            $('.sywh-services').removeClass('active');
            $('a.sywh-open-services i.fa-times').hide();
            $('a.sywh-open-services i.fa-comments').show();
            $('a.sywh-open-services').removeClass('data-tooltip-hide');
            $('.sywh-services a:nth-child(1)').delay(0).fadeOut();
            $('.sywh-services a:nth-child(2)').delay(100).fadeOut();
            $('.sywh-services a:nth-child(3)').delay(200).fadeOut();
            $('.sywh-services a:nth-child(4)').delay(300).fadeOut();
            $('.sywh-services a:nth-child(5)').delay(400).fadeOut();
        }
        else {
            $('.sywh-services').addClass('active');
            $('a.sywh-open-services i.fa-comments').hide();
            $('a.sywh-open-services i.fa-times').show();
            $('a.sywh-open-services').addClass('data-tooltip-hide');
            $('.sywh-services a:nth-child(5)').delay(0).fadeIn();
            $('.sywh-services a:nth-child(4)').delay(100).fadeIn();
            $('.sywh-services a:nth-child(3)').delay(200).fadeIn();
            $('.sywh-services a:nth-child(2)').delay(300).fadeIn();
            $('.sywh-services a:nth-child(1)').delay(400).fadeIn();
        }
    });
});
  </script>