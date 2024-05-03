 <?php 
 $page='Home';
 include ('inc/header.php');
 ?>
 
    <!-- Banner section -->
    <section class="banner-sec">
         <div class=" container">
             <div class="row reverse">
                 <div class="col-md-6">
                   <div class="banner-left-content margin-top">
                     <h1 class="Banner-Heading padding-heading">Cloud Hosting Solutions</h1>
                     <p class="Banner-title">Start your journey with robust VPS servers to experience optimum 
                         performance and maximum uptime at a very reasonable price!</p>
                         <div class="d-flex gap-3 lists-hosting">
                             <ul class="banner-list list-unstyled"> 
                                 <li class="purple-text_dark mb-3 color-black-1"><span class="text-dark dot"><img src="assets/img/bi_device-ssd.svg" alt="ssd"></span> Latest NVMe SSD storage</li>
                                 <li class="purple-text_dark color-black-1" ><span class="text-dark dot"><img src="assets/img/freemigration.svg" alt="manage"></span> Free Migration</li>
                             </ul>
                             <ul class="banner-list list-unstyled">
                                 <li class="purple-text_dark mb-3 color-black-1"><span class="text-dark dot"><img src="assets/img/file.svg" alt="migration"></span> Easy to Manage</li>
                                 <li class="purple-text_dark color-black-1" ><span class="text-dark dot"><img src="assets/img/24hours.svg" alt="support"></span> 24*7 Helpful Technical Staff</li>
                             </ul>
                         </div>
                   </div>
                   <a href="#explore"><button class="btn-yellow btn-explore-plan">Get Started Today <i class="fa-solid fa-arrow-right"></i></button></a>
                   <p class="Money-Back-Guarantee"><img src="assets/img/ic-shield.png" alt="shield">30-Day Money-Back Guarantee</p>
                 </div>
                 <div class="col-md-6">
                     <!--<img class="banner_img" src="assets/img/hero-image-1.png" alt="Banner" srcset="">-->
                     <img class="banner_img floatings" src="assets/img/hero-image-girll.png" alt="Banner">
                 </div>
             </div>
         </div>
    </section>

    <!-- Third section (Rating section) -->
    <section class="rating-section">
      <div class="container">
        <div class="row ">
            <div class="col-md-4 rating-cols">
                <div class="rating-outer-card">
                    <img class="rating-img" src="assets/img/trustpilot.png" alt="trust pilot">
                    <div>
                     <p class="mb-2 mt-1">Rated <span class="rating-count">4.7/5</span></p>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 rating-cols margin--top">
                <div class="rating-outer-card">
                    <img class="rating-img-host" src="assets/img/host-advice.png" alt="host advice">
                    <div>
                     <p class="mb-2 mt-1">Rated <span class="rating-count">4.6/5</span></p>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                    </div>
                    </div>
            </div>
            <div class="col-md-4 rating-cols margin--top">
                <div class="rating-outer-card">
                    <img  class="rating-img" src="assets/img/google-logo.png" alt="google">
                    <div>
                     <p class="mb-2 mt-1">Rated <span class="rating-count">4.6/5</span></p>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                    </div>
                    </div>
            </div>
        </div>
      </div>
    </section>

    <!-- Fourth sec (Explore Plan section) -->
    <section class="explore-section mt-5 plans-mobile-one"  id="explore">
        <div class="container">
            <div class="row flex_unset">
                <div class="col-md-4 explore-cols">
                  <div class="position-relative h-100">
                    <div class="upper-card home-uppercard">
                      <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                      <h4 class="hosting-heading">DEDICATED SERVER</h4>
                      <p class="hosting-price indian-host-price"><span class="hin-rs">₹</span>4999</p>
                       <p class="hosting-price usa-host-price"><span class="hin-rs">$</span>60.00</p>

                      <p class="per_month">/month</p>
                      <p class="regular-price regular-indian-price">Regular price<span class="cross-price"> ₹6,665/month</span></p>
                      <p class="regular-price regular-usa-price">Regular price<span class="cross-price"> $79.97/month</span></p>

                      <a href="dedicated-servers.php"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                      
                      <div class="hosting_specification">
                          <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>4 CPU</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>32 GB DDR4</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>480 GB SSD</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>10TB/1Gbps Bandwidth</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>Full Root Access</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>Multiple Location</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p class="m-0">Free Direct Admin</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p class="m-0">Zero setup fees</p>
                       </div>
                      </div>
                      <div class="free_setup btn-yellow ">
                          <p class="m-0">Free Set-up</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 explore-cols">
                  <div class="position-relative h-100">
                      
                    <div class="upper-card home-uppercard" style="background: #FEFDFF;">
                        <div class="most-popular-hosting btn-light-purple">
                          <p class="m-0">Most Popular</p>
                      </div>
                      <!--<img class="hosting-icons" src="assets/img/vps-hosting.png" alt="vps hosting">-->
                      <h4 class="hosting-heading">VPS HOSTING</h4>
                      <p class="hosting-price indian-host-price"><span class="hin-rs">₹</span>574</p>
                      <p class="hosting-price usa-host-price"><span class="hin-rs">$</span>7.23</p>
                      <p class="per_month">/month</p>
                      <p class="regular-price regular-indian-price">Regular price<span class="cross-price"> ₹1,149/month</span></p>
                      <p class="regular-price regular-usa-price">Regular price<span class="cross-price"> $13.779/month</span></p>
                      <a href="vps-hosting.php"><button class="btn-purple exploreplan-btn" type="submit">Get Started</button></a>
                      <div class="hosting_specification">
                          <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>1 CPU</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>4 GB RAM</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>50 GB NVMe SSD</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>750 GB Bandwidth</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>Full Root Access</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>Free Control Panel</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p class="m-0">99.9% Uptime</p>
                       </div>
                      </div>
                       <div class="free_setup btn-light-purple">
                          <p class="m-0">Sale 50%</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 explore-cols">
                  <div class="position-relative h-100">
                    <div class="upper-card home-uppercard">
                      <!--<img class="hosting-icons" src="assets/img/shared-plan.png" alt="shared plan">-->
                      <h4 class="hosting-heading">SHARED PLAN</h4>
                      <p class="hosting-price indian-host-price"><span class="hin-rs">₹</span>49</p>
                      <p class="hosting-price usa-host-price"><span class="hin-rs">$</span>0.6</p>
                      <p class="per_month">/month</p>
                      <p class="regular-price regular-indian-price">Regular price<span class="cross-price"> ₹199/month</span></p>
                      <p class="regular-price regular-usa-price">Regular price<span class="cross-price"> $2.38/month</span></p>
                      <a href="shared-hosting.php"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                      <div class="hosting_specification">
                          <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>Host 1 Website</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>50 GB NVMe SSD</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>Unmetered Bandwidth</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>512MB RAM</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>DirectAdmin Panel</p>
                       </div>
                       
                      </div>
                      <div class="free_setup btn-yellow ">
                          <p class="m-0">Sale 75%</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
 
    <!-- Fifth sction (What Makes YouStable Awesome?)-->
    <section class="awesome-youstable affiliate-two affiliate-four">
      <div class="container">
            <div class="right-cols-awesome">
              <div class="padding-r-l text-center">
                <h2 class="ay_heading">What Makes YouStable<span class="awesome-q line-1 anim-typewriter"> Awesome?</span></h2>
                <p class="server-title title-sides-width">Grab the best web hosting services with guaranteed uptime, blazing fast 
                  performance and<br class="remove-mobile"> on-demand technical support.</p>
              </div>
             <div class="sides-width">
                 <div class="row">
                          <div class="col-md-4 cols-aws-you">
                            <div class="left-cols-awesome">
                               <img src="assets/img/uptime.png" alt="uptime">
                               <h5 class="ay-heading">99.99% Uptime</h5>
                               <p class="ay-title">Get 99.99% uptime assurance for your website, running non-stop.</p>
                            </div>
                          </div>
                          <div class="col-md-4 cols-aws-you">
                            <div class="left-cols-awesome">
                               <img src="assets/img/refund.png" alt="refund">
                               <h5 class="ay-heading">30 Days Refund Policy</h5>
                               <p class="ay-title">We offer hassle-free 30-day money-back guarantee on our services for your peace of mind.</p>
                            </div>
                          </div>
                          <div class="col-md-4 cols-aws-you">
                            <div class="left-cols-awesome">
                               <img src="assets/img/support.png" alt="support">
                               <h5 class="ay-heading">24/7/365 Support</h5>
                               <p class="ay-title">Our expert team works tirelessly day and night to support you throughout your online journey.</p>
                            </div>
                          </div>
            </div>
             </div>
      </div>
      </div>
    </section>

    <!--Sixth section (High quality Server) -->
    <section class="high-q-server">
        <div class=" container">
      <div class="bg-purple">
          <div class="text-center">
            <h2 class="server-heading">High Quality Servers with Industry Leading Technologies</h2>
            <p class="server-title title_sides-width">YouStable relies on the most renowned and trusted technologies to provide<br class="remove-mobile"> better uptime, unbeatable performance and quality services.</p>
            <div class="width-slider">
            <div class="row autoplay autoplay_slider">
              <div class="col-lg-3 server-cols">
                <div class="bg-lt-black">
                   <img src="assets/img/directadmin.png" alt="directadmin">
                </div>
              </div>
              <div class="col-lg-3 server-cols">
                <div class="bg-lt-black">
                   <img src="assets/img/CloudLinux.png" class="cloud-linux" alt="CloudLinux">
                </div>
              </div>
              <div class="col-lg-3 server-cols">
                <div class="bg-lt-black">
                   <img src="assets/img/encrypt.png" alt="encrypt">
                </div>
              </div>
              <div class="col-lg-3 server-cols">
                <div class="bg-lt-black">
                   <img src="assets/img/directadmin.png" alt="directadmin">
                </div>
              </div>
              <div class="col-lg-3 server-cols">
                <div class="bg-lt-black">
                   <img src="assets/img/CloudLinux.png" class="cloud-linux" alt="CloudLinux">
                </div>
              </div>
              <div class="col-lg-3 server-cols">
                <div class="bg-lt-black">
                   <img src="assets/img/encrypt.png" alt="encrypt">
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Seventh sction (Features that Make Your Website Powerful)-->
    <section class="awesome-youstable affiliate-two affiliate-four">
      <div class="container">
            <div class="right-cols-awesome">
              <div class="text-center">
                <h2 class="ay_heading">Features that Make Your Website Powerful</span></h2>
                <p class="server-title title_sides_width">Our hosting is focused on your success! That’s why we provide the best<br class="remove-mobile"> quality features 
to make you stand apart from the competition.</p>
              </div>
             <div class="features-awesome ">
                 <div class="row text-left">
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/ssd-storage.png" alt="ssd-storage">
                           <h5 class="ay-heading">NVMe SSD Powered Servers</h5>
                           <p class="ay-title m-0 w-100">Get more efficient data transport with the latest NVMe SSD storage drives that make website loading speed much faster!</p>
                        </div>
                      </div>
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/ssl-certificate.png" alt="ssl-certificate">
                           <h5 class="ay-heading">Free SSL Certificate</h5>
                           <p class="ay-title m-0 w-100">Gain your customers trust with a free industry standard SSL certificate that provides you an encryption....</p>
                        </div>
                      </div>
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/speed-web-server.png" alt="speed-web-server">
                           <h5 class="ay-heading">LiteSpeed Web Server</h5>
                           <p class="ay-title m-0 w-100">LiteSpeed web server is one of the fastest webservers that makes your website lightening fast on the internet with smart cache storage!</p>
                        </div>
                      </div>
              </div>
                 <div class="row text-left mt-4">
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/uptime99.png" alt="Free Migration">
                           <h5 class="ay-heading">Free Site Migration</h5>
                           <p class="ay-title m-0 w-100">Not happy with your existing service provider? No worries!! We provide you completely free of cost website....</p>
                        </div>
                      </div>
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/auto-backup.png" alt="auto-backup">
                           <h5 class="ay-heading">Daily Backups</h5>
                           <p class="ay-title m-0 w-100">Your website is completely safe in our hands, all thanks to our smart features that automatically creates....</p>
                        </div>
                      </div>
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/support24.png" alt="support24">
                           <h5 class="ay-heading">Advanced Security</h5>
                           <p class="ay-title m-0 w-100">We provide Imunify360 which includes Antivirus, Firewall, Multi-Layer security, Domain Reputation, and more.</p>
                        </div>
                      </div>
              </div>
            
             </div>
      </div>
      </div>
    </section>

    <!-- eight section (Find Your Perfect Domain Name) -->
    <section class="choose-domain">
          <div class=" container">
           <div class="bg-light-yellow" style="border: 1px solid #292929;">
              <div class="text-center">
                <h2 class="server-heading">Find Your Perfect Domain Name</h2>
                <p class="server-title title_sides-width">A perfect domain, now rightfully yours.</p>
                    <div class="input-group search-domain">
                      <input type="text" class="form-control border-0 search-domain-inp" placeholder="Enter Your Domain Name Here" name="search" id="searchDomain">
                      <button class="search_domain-btn btn-yellow" id="basic-addon2">Search</button>
                    </div>
              </div>
              <div class="domain-cost-container">
                  <div class="row block">
                      <div class="col">
                          <p class="domain-amount">.COM ₹873</p>
                      </div>
                      <div class="col">
                          <p class="domain-amount">.CO.in ₹476</p>
                      </div>
                      <div class="col">
                          <p class="domain-amount">.Online ₹714</p>
                      </div>
                      <div class="col">
                          <p class="domain-amount">.in ₹635</p>
                      </div>
                      <div class="col">
                          <p class="domain-amount">.info ₹794</p>
                      </div>
                      <div class="col">
                          <p class="domain-amount">.org ₹1,350</p>
                      </div>
                  </div>
              </div>
           </div>
      </div>
    </section>

    <!-- ninth section (Hosting rating) -->
     <section class="hosting-rating">
         <div class="container">
             
             <div class="d-flex justify-content-between">
             <span class="text-start">
             <!--<img src="assets/img/floating-imgs.png" class="floating">-->
             <img src="assets/img/yellow-circle.png" class="floating yellow-circle">
             </span>
             <span class="text-end">
             <!--<img src="assets/img/floating-imgs.png" class="floating">-->
             <img src="assets/img/cloud-circle.png" class="movingcloud">
             </span>
             </div>
             
             <!--<div class="text-center outer-anim highlight-on-scroll">-->
             <!--    <p class="hosting-rating-title">Experience's top-rated SMB Hosting provider with a <span class="fw-bold font-style-italic purple-text_dark"><em>4.7-star rating</em></span>, powering websites from over 200 countries.</p>-->
             <!--</div>-->
              <!--<section class="highlight-text-scroll">-->
                   
              <!-- <p class="reveal-type" data-bg-color="#cccccc" data-font-family="poppins" data-fg-color="#6B46F2">Experience's top-rated SMB Hosting provider with a <em class="fw-bold" style="color:#6B46F2;">4.7-star rating</em> powering websites from over 200 countries.</p>-->
             
              <!--</section>-->
             <?php include ('animate-text.php')?>
             
        <!--<div class="text-start">-->
        <!--     <img src="assets/img/floating-imgs2.png" class="floating">-->
        <!--     </div>-->
             
             <div class="d-flex justify-content-between">
             <span class="text-start">
             <!--<img src="assets/img/floating-imgs.png" class="floating">-->
             <img src="assets/img/cloud-wave.png" class="movingclouds">
             </span>
             <span class="text-end">
             <!--<img src="assets/img/floating-imgs.png" class="floatingcloud">-->
             <img src="assets/img/wave-yellow.png" class="floating">
             </span>
             </div>
         
         
           </div>
     </section>
     <section class="established">
        <div class="container">
         <div class="border text-center gap-top ">
             <div class=" years-with-customer">
             <div class="row row-up">
                 <div class="col-md-4">
                     <div class="customer-rating-hosting">
                       <img src="assets/img/happy.png" alt="" class="customer-attach-img">
                       <p class="purple-text_dark fw-bold working-counter mb-1">100k</p>
                       <p class="how-much-time">Happy Customers</p>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="customer-rating-hosting">
                       <img src="assets/img/data-center.png" alt="" class="customer-attach-img">
                       <p class="purple-text_dark fw-bold working-counter mb-1">5</p>
                       <p class="how-much-time">Data Center</p>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="customer-rating-hosting">
                       <img src="assets/img/established.png" alt="" class="customer-attach-img">
                       <p class="purple-text_dark fw-bold working-counter mb-1">2015</p>
                       <p class="how-much-time">Established</p>
                     </div>
                 </div>
             </div>
             </div>
         </div>
         </div>
         </section>
         
         
     <div class="sea">
        <div class="wave"></div>
    </div>
    <!-- Tenth section (What our customer says) -->
    <section class="customer-review">
        <div class="container">
      <div class="bg-purple">
           <div class="text-center customer-review-content">
              <h2>What Our Customer Says</h2>
              <p class="server-title">We confidently say that your success is our achievement! And we are proving 
                it since 2015, by serving thousands of customers with best in class services 
                for complete satisfaction.</p>
           </div>
           <!--Review Slider -->
           <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <div class="carousal-cap">
                <img src="assets/img/customer-img.png" class="review-img" alt="customer img">
                  <div class="bg-customer-review ">
                    <img src="assets/img/punctuation.png" alt="punchuation img" class="punctuation">
                    <h5 class=" cutomer-heading">Fastest Hosting</h5>
                    <p class=" cutomer_review">I'm quite impressed with their customer support team, who helped me with an issue I was experiencing while uploading files on my website.</p>
                    <h5 class="fw-bold">Satish Kushwaha</h5>  
                  <p class="fw-normal customer-profile m-0">Youtuber | Content Creator</p>
                  <img src="assets/img/review-start-img.png" alt="" class="review-star" />
                  </div>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <div class="carousal-cap">
                <img src="assets/img/customer-img.png" class="review-img" alt="customer img">
                  <div class="bg-customer-review ">
                    <img src="assets/img/punctuation.png" alt="punchuation img" class="punctuation">
                    <h5 class=" cutomer-heading">Customer Support</h5>
                    <p class=" cutomer_review">I'm quite impressed with their customer support team, who helped me with an issue I was experiencing while uploading files on my website.</p>
                          <h5 class="fw-bold">Satish Kushwaha</h5>  
                  <p class="fw-normal customer-profile m-0">Youtuber | Content Creator</p>
                  <img alt="" src="assets/img/review-start-img.png" class="review-star" />
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousal-cap">
                <img src="assets/img/customer-img.png" class="review-img" alt="customer img">
                  <div class="bg-customer-review ">
                    <img src="assets/img/punctuation.png" alt="punchuation img" class="punctuation">
                    <h5 class="cutomer-heading">Customer Support</h5>
                    <p class=" cutomer_review">I'm quite impressed with their customer support team, who helped me with an issue I was experiencing while uploading files on my website.</p>
                         <h5 class="fw-bold">Satish Kushwaha</h5>  
                  <p class="fw-normal customer-profile m-0">Youtuber | Content Creator</p>
                  <img alt="" src="assets/img/review-start-img.png" class="review-star" />
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      
    </section>

    <!-- Eleventh section (FAQ) -->
    <section class="faq">
      <div class="container">
        <h2 class="text-center faq-question">FAQs</h2>
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button acc-purple-bg" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Q 1. Where YouStable is located?
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Despite YouStable providing its high-quality web hosting services to all across the globe, 
                it has located its headquarters in Lucknow, India.</div>
            </div>
          </div>
           
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Q 2. Why choose YouStable hosting services?
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">YouStable is especially popular for providing high-quality web hosting services and blazing-fast performance at very affordable rates. Hence if you want both quality and affordability then YouStable will be a suitable pick for you!</div>
            </div>
          </div>
          
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
               Q 3. What features are offered in YouStable web hosting Plan?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">One of the best aspects of YouStable is that we host your website on servers equipped with the latest and the most advanced hardware equipment, making your website blazing fast on the internet.</div>
            </div>
          </div>
      
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingFour">
              <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
               Q 4. Can I upgrade my web hosting plan Later?
              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Yes, Our servers are resilient enough to allow you anytime upgradation of your resources, so no matter whether you are planning to start a new business or you want to scale your business you can upgrade to any plan without any hidden charges.</div>
            </div>
          </div>
       
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingFive">
              <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFour">
                Q 5. Does YouStable provide different types 
                of web hosting services?
              </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Yes, YouStable has bundled up multiple web hosting services that you can choose as per your needs and requirements such as Shared, VPS and dedicated Server and many more web hosting services.</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--Twelveth section-->
        <div class="container">
    <section class="bg-light-yellow-img">
            <div class="row reverse">
              <div class="col-lg-6">
        <div class="mt-4">
            <h2 class="ay_heading text-start">Questions about Hosting</h2>
            <p class="server-titles py-4">Contact one of our technical experts now. Our team is available chat and is ready to answer any questions you may have.</p>
        </div>
        <div class="d-flex">
        <div class="contact-hosting one">
          <img src="assets/img/phone-call.png">
        </div>
        <div class="mb-4">
          <a href="https://wa.me/+919616782253" class="contact-hosting one" data-toggle="tooltip" data-placement="top" title="Chat On Whatsapp" target="_blank" >+919616782253</a>
        </div>
        </div>
        <div class="d-flex">
        <div class="contact-hosting one">
          <img src="assets/img/live-chat.png">
        </div>
        <div class="mb-4">
          <a href="javascript:void(Tawk_API.toggle())" class="contact-hosting one" data-toggle="tooltip" data-placement="top" title="Click to Chat" target="_blank">Live Chat with Experts</a>
        </div>
        </div>
        <div>
         
        </div>
            </div>
              <div class="col-lg-6">
                  <img class="thinking-girl" src="assets/img/thinking -girl.png">
            </div>
            </div>
    </section>
        </div>
    
 
  <?php include ('inc/footer.php')?>