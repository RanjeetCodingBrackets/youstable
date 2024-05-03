<?php
// Assuming the meta file is meta_data.php
include 'meta.php';
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--old meta-->
    <script type="application/ld+json">
    {"@context":"http://schema.org/","@type":"Product","name":"Web Hosting","image":"https://youstable.com/assets/img/youstable-logo-white.png","description":"#YouStable® Web Hosting Leader Since 2015 - Offers India's Best Web Hosting Plans with NVme SSD, LiteSpeed Web Servers, Free Domains, SSL, 24x7 Priority Support","sku":"Web Hosting in India","mpn":"Web Hosting India With Free Domain","review":{"@type":"Review","reviewRating":{"@type":"Rating","ratingValue":"4.9","bestRating":"5"},"author":{"@type":"Organization","name":"YouStable"}},"brand":{"@type":"Brand","name":"YouStable"},"aggregateRating":{"@type":"AggregateRating","ratingValue":"4.9","bestRating":"5","reviewCount":"450"},"offers":{"@type":"AggregateOffer","priceCurrency":"INR","offerCount":"5","highprice":"463","lowprice":"139","seller":{"@type":"Organization","name":"YouStable"}}}
    </script>
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="youstable.com">
<meta property="twitter:url" content="https://www.youstable.com/">
<meta name="twitter:title" content="#1 India’s Best Web Hosting Plans - from YouStable ₹49/month">
<meta name="twitter:description" content="YouStable® Web Hosting Leader Since 2015 - Offers India's Best Web Hosting Plans with NVme SSD, LiteSpeed Web Servers, Free Domains, SSL, 24x7 Priority Support">
<meta name="twitter:image" content="https://www.youstable.com/assets/assets/youstable-share.jpg">
    <!--old meta-->
    <!--<title>Youstable</title>-->
    
    <title><?php echo $meta_data[$page]['title']; ?></title>
<meta name="keywords" content="<?php echo $meta_data[$page]['keywords']; ?>">
<meta name="description" content="<?php echo $meta_data[$page]['description']; ?>">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- stylesheet link -->
    <link rel="stylesheet" href="assets/css/stylesheet.css">
    <!-- Bootstrap 5 CDN link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <!--Font awesome CDN link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Slick slider css (index)-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-w6rlxx1o3vh+gj0sB5XkdzpaZOy4LQv6c0U3oC7qFv/zmXJ0J8HDn8Nck3o4/+GQ4u6pVs1W+UzV0YGKr4rvlw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Bootstrap Bundle (Bootstrap + Popper.js) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  </head>
  
  <style>

  </style>
  <body>
    <div class="main-container">
      <!-- Header (navbar) -->
      <header class="header">
          <nav class="top-nav">
              <div class="container">
                  <div class="d-flex justify-content-between   top-nav-items">
                      <div class="d-flex gap-2" style="align-items: baseline;">
                          <div>
                              <img src="assets/img/phone.png" class="phone-thumb" style="vertical-align: sub;"/>
                         </div>
                          <div>
                             <a href="#" class="text-white phone-1">+919616782253</a>
                         </div>
                          
                      </div>
                      
                      <p class="youstable-offer m-0 text-white offer-off" style="text-align: center;padding-left: 8px;">YOUSTABLE VPS Hosting Offer 50%</p>
                      <div class="d-flex align-items-center position-relative">
                          <div class="d-flex gap-2 remove-margin" style="align-items: baseline;margin-right: 26px;">
                          <div>
                              <img src="assets/img/login-vector.png" class="male-thumb" style="vertical-align: sub;"/>
                         </div>
                          <div>
                              <a href="#" class="text-white phone-1" >My Account</a>
                         </div>
                          
                      </div>
                       <!--flag-->
<span class="select" id="select">
    <img src="assets/img/india-f.png" alt="" class="flag-i">
    <span></span>
</span>
<ul class="list" id="list">
    <li id="rupee"><img src="assets/img/india-f.png" title="RUPEE" alt="" class="flag-i"/></li>
    <li id="usd"><img src="assets/img/usd-f.png" alt="" title="USD" class="flag-i"/></li>
</ul>
                       
                       <!--flag-->
                        <!-- HTML dropdown and image display -->
                     
                      </div>

                        
                  </div>
              </div>
          </nav>
          <nav class="navbar navbar-expand-lg bg-white">
            <div class="container">
              <a class="navbar-brand" href="index.php"><img src="assets/img/logo_youstable.svg" alt="logo" ></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0 ">
            
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle header-links" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Web Hosting 
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="shared-hosting.php"><Span Class="icon-drop"><img src="assets/img/shared.png" alt="hosting-icon"/></Span> Shared Hosting</a></li>
                      <li><a class="dropdown-item" href="wordpress-hosting.php"><Span Class="icon-drop"><img src="assets/img/wordpress.png" alt="hosting-icon"/></Span> Wordpress Hosting</a></li>
                      <li><a class="dropdown-item" href="cpanel-hosting.php"><Span Class="icon-drop"><img src="assets/img/cpanel.png" alt="hosting-icon"/></Span> cPanel Hosting</a></li>
                      <li><a class="dropdown-item" href="python-hosting.php" style="border-bottom:0px;"><Span Class="icon-drop"><img src="assets/img/python.png" alt="hosting-icon"/></Span> Python Hosting</a></li>
                      
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle header-links" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        VPS
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="vps-hosting.php"><span class="icon-drop"><img src="assets/img/VPS-server.png" alt="hosting-icon"></span> VPS Server</a></li>
                      <li><a class="dropdown-item" href="cyberpanel-vps.php"><span class="icon-drop"><img src="assets/img/cyberpanel.png" alt="hosting-icon"></span> CyberPanel VPS</a></li>
                      <li><a class="dropdown-item" href="directadmin-vps.php"><span class="icon-drop"><img src="assets/img/direct.png" alt="hosting-icon"></span> DirectAdmin VPS</a></li>
                      <li><a class="dropdown-item" href="cpanel-vps.php" style="border-bottom:0px;"><span class="icon-drop"><img src="assets/img/cpanel.png" alt="hosting-icon"></span> cPanel VPS</a></li>
                      
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link header-links" href="dedicated-servers.php">Dedicated</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle header-links" href="domain-registration.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Domain
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="domain-registration.php" style="border-bottom:0px;"><span class="icon-drop"><img src="assets/img/search-icon.png" alt="hosting-icon"></span> Search Domain</a></li>
                     
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link header-links" href="affiliate.php">Affiliates</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
      </header>
      
      
      <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      
  <!--slick slider js (index)-->
      <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
      <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
