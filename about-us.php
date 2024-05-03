 <?php 
 $page='About Us';
 include ('inc/header.php');
 ?>
<style>
    p.subheading {
    font-weight: 500;
    font-size: 20px;
}
section.banner-sec.share-bg {
    margin-top: 0px;
    margin-bottom: 36px;
}

img.about-image.w-100 {
    width: 94% !important;
    height: 100%;
}

p.subheading-purple {
    color: #6B46F2;
    font-weight: 500;
    margin-bottom: 0px;
    text-transform: capitalize;
    font-size: 20px;
}

div#about-cols .col-md-6 {
    display: flex;
    align-items: center;
}

img.about-col-image.w-100 {
    width: 20% !important;
}

div#about-cols {
    box-shadow: 0px 4px 10px 0px #00000012;
    border-radius: 12px;
    /* padding: 9px 20px; */
    width: 95%;
    margin: 0;
}

div#happy-users {
    border-right: 2px solid #292929;
}

p.col-heading {
    margin-bottom: 0px;
    margin-top: 17px;
    font-weight: 600;
    font-size: 20px;
}

/*.about-col .fa-star:before {*/
/*    content: "★";*/
/*}*/

.about-col i {
    color: #FFC235;
    margin-right: 3px;
}

p.about-para {
    font-size: 18px;
    margin-bottom: 32px;
}

section.about-us {
    padding-top: 46px;
    padding-bottom: 40px;
}

div#right-content h2.heading {
    margin-top: 20px;
    margin-bottom: 20px;
}
.about-feature-img {
    text-align: center;
    margin-bottom: 25px;
}
.about-feature-img img {
    margin-left: -72px;
}
.love-youstale {
    padding: 70px 0 0 0;
}
section.customer-youstable {
    padding: 100px 0 50px 0;
}
p.about-paras {
    font-size: 16px;
    margin-bottom: 12px;
}

/*.history-borders {*/
/*    border: 1px solid #CACACA;*/
/*    padding: 16px 16px 30px 16px;*/
/*    border-radius: 12px;*/
/*    margin: 0 4px;*/
/*    height: 250px;*/
/*}*/
.history-borders {
    background-image: url("assets/img/aboutimg/bg-aim.png");
    background-size: 100%;
    background-repeat: round;
    height: 271px;
    padding: 45px 15px 19px  16px;
    margin: 0 5px;
}

.history-year h3 {
    background: #f6f6f6;
    width: fit-content;
    margin-left: -15px;
    padding: 4px 35px 4px 14px;
    font-size: 42px;
    font-weight: 700;
    line-height: 50.83px;
    border-radius: 0 12px 12px 0;
}
.dots-black {
    background: #000;
    height: 15px;
    width: 15px;
    border-radius: 50%;
}
p.aim-title {
    font-size: 16px;
    font-weight: 400;
    line-height: 20px;
    margin-top: 28px;
    padding: 0 28px 0 0;
}
.aim-bg-yellow {
    background: #FFFDF6;
    padding: 36px;
    border-radius: 26px;
}
.history-borders img {
    width: 42px;
    position: relative;
    top: -24px;
    visibility: hidden;
}
.about-us-review {
    padding-bottom: 136px;
}
.bg-greyy {
    background: #FAFAFA;
    padding: 23px 0;
    border-radius: 20px;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.bg-greyy:hover {
    -webkit-filter: grayscale(1);
    transform: translateY(-10px);
    transition: 0.5s;
}
 .trust-host{
     width:200px;
 }
button.slick-prev.slick-arrow {
    top: 6.4rem;
}
button.slick-next.slick-arrow {
    top: 6.4rem;
}
.margin-wall {
    margin: 50px 0;
}
</style>

 <!-- Banner section (shared hosting) -->
    <section class="banner-sec share-bg">
         <div class=" container">
             <div class="row align-items-center reverse-column">
                 <div class="col-md-6">
                   <div class="banner-left-content">
                       <!--<p class="experience">Experience</p>-->
                       <p class="subheading">About India’s</p>
                     <h1 class="Banner-Heading padding-heading about-us-heading-banner">Most Popular Web Hosting Provider</h1>
                     <p class="Banner-title p-0">We are #1 Web Hosting provider in India with more than thousands customer base.</p>
                      <!--<button class="btn-yellow btn-explore-plan" type="submit">Explore <i class="fa-solid fa-arrow-right"></i></button>-->
                   </div>
                 </div>
                 <div class="col-md-6">
                     <img class="affiliate-image about-hero-image floatings" src="assets/img/aboutimg/22379575_6610151-1.png" alt="Banner" srcset="">
                 </div>
             </div>
         </div>
    </section>

    <!-- About us section -->
    <section class="about-us">
         <div class=" container">
             <div class="row">
                 <div class="col-md-6">
                   <img class="about-image w-100" src="assets/img/aboutimg/youstable-team-1.png" alt="about" srcset="">
                 </div>
                  <div class="col-md-6" id="right-content">
                    <p class="subheading-purple">About youstable</p>
                    <h2 class="heading">An innovative team <br class="remove-mobile">that works back-stage for you</span></h2>
                    <p class="about-para">YouStable prioritizes hard work and sincerity. Our team works on these two formulas to ensure our users succeed. Hence, working with our innovative and passion-filled services, you will feel like you’re at the world's top. And, we are here to make that sure!</p>
                    <div class="row" id="about-cols">
                    <div class="col-md-6" id="happy-users">
                    <img class="about-col-image w-100" src="assets/img/aboutimg/2814585-200-1.png" alt="about" srcset="">
                    <div class="about-col">
                        <p class="col-heading">Thousands+</p>
                        <p style="font-weight: 500;">Happy Users</p>
                    </div>
                    </div>
                    <div class="col-md-6">
                   <img class="about-col-image w-100" src="assets/img/aboutimg/thumbs_up_icon_126802-1.png" alt="about" srcset="">
                   <div class="about-col">
                        <p class="col-heading" style="margin-top: 4px;">4.7/5 Rating on</p>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    </div>
                    </div>

                  </div>
             </div>
             </div>
    </section>
    
        
    <!--What Made Customer Love YouStable-->
    <section class="customer-youstable">
        <div class=" container">
      <div class="text-center">
        <h2 class="ay_heading">What Made Customer Love YouStable</h2>
        <p class="server-title title_sides_width pb-3">We have some terms, some rituals, some limits! Our team is totally dedicated to offer our customers the best in class hosting service with a very affordable price tag.</p>
      </div>
      
      <div class="love-youstale">
                 <div class="row text-left">
                      <div class="col-md-3 cols">
                        <div class="about-feature">
                            <div class="about-feature-img">
                           <img src="assets/img/aboutimg/all-customer.png" alt="ssd-storage">
                            </div>
                            
                           <h5 class="ay-heading">It's all about customer</h5>
                           <p class="aim-title">We Are Indians and we deal with our clients like God. These are our ceremonies and we....</p>
                         
                        </div>
                      </div>
                      <div class="col-md-3 cols-awesome-youstable">
                        <div class="about-feature">
                            <div class="about-feature-img">
                           <img src="assets/img/aboutimg/respect.png" alt="ssl-certificate">
                            </div>
                          
                           <h5 class="ay-heading">Respect</h5>
                           <p class="aim-title">We are not one-sided by any means, we offer regard to each race, shading, language....</p>
                       
                        </div>
                        </div>
                   
                      <div class="col-md-3 cols-awesome-youstable">
                        <div class="about-feature">
                            <div class="about-feature-img">
                           <img src="assets/img/aboutimg/knowledge-sharing.png" alt="speed-web-server">
                            </div>
                            
                           <h5 class="ay-heading">Knowledge Sharing</h5>
                           <p class="aim-title">Sharing is mindful, this term is in our DNA. We love to impart the information to you...</p>
                          
                        </div>
                      </div>
                      <div class="col-md-3 cols-awesome-youstable">
                        <div class="about-feature">
                            <div class="about-feature-img">
                           <img src="assets/img/aboutimg/independence.png" alt="speed-web-server">
                            </div>
                            
                           <h5 class="ay-heading">Independence From Heart!</h5>
                           <p class="aim-title">YouStable offers you a complete open environment to use Hosting...</p>
                         
                        </div>
                      </div>
              </div>
             
             </div>
             </div>
    </section>
    
        <!-- Most Popular Web Hosting Provider -->
    <section class="about-us">
         <div class=" container">
             <div class="row align-items-center" id="about">
                  <div class="col-md-6">
                    <p class="subheading-purple"  style="padding-bottom: 14px;">About India’s</p>
                    <h2 class="heading Popular-Web ">Most Popular Web Hosting Provider</span></h2>
                    <p class="about-paras">YouStable is among the most popular web hosting providers which has been working independently since 2015 and YouStable has been the best choice of more than thousands customers.</p>
                    <p class="about-paras">YouStable originated from the City of Nawabs also known as Lucknow. YouStable has more than 6 data centre locations for dedicated services.</p>
                  </div>
                 <div class="col-md-6">
                   <img class="about-image w-100" src="assets/img/aboutimg/popular-hosting.png" alt="about" srcset="">
                 </div>
             </div>
             </div>
    </section>
    
        <!-- What is our aim -->
    <section class="about-us pt-0">
         <div class=" container">
             <div class="aim-bg-yellow">
                <div class="row align-items-center" id="about">
                 <div class="col-md-6">
                   <img class="about-image w-100" src="assets/img/aboutimg/our-aim.png" alt="about" srcset="">
                 </div>
                  <div class="col-md-6">
                    <h2 class="heading-our-aim"  style="padding-bottom: 14px;">What Is Our Aim?</h2>
                    <p class="about-paras">YouStable was launched with a great mindset. The CEO Mr. Rajesh Chauhan aimed to offer premium Web Hosting at a very inexpensive price.</p>
                    <p class="about-paras">YouStable offers you premium web hosting starting from just ₹139/m and this made us different from others</p>
                    <p class="about-paras">YouStable is not just a brand that provides hosting services to clients. We are a team of passionate people who 
                    have a dream to provide the best possible services. The quality of services a customer gets from us is unparalleled and our clients know it.</p>
                  </div>
             </div>
             </div>
             </div>
    </section>
    
    <!---->
    <section class="history-wall">
        <div class="container">
           <div class="text-center">
        <h2 class="ay_heading">Our History Wall</h2>
      </div>
      <div class="margin-wall">
         <div class="width-slider">
           <div class=" row autoplay">
               <div class=" col-lg-4">
                  <div class="history-borders">
                      <img src="assets/img/aboutimg/black-dots.png">
              <div class="history-year">
              <h3>2015</h3>
              </div>
              <p class="aim-title p-0">Started with an aim to provide the best web hosting services at a low cost</p>
              <div class="tile-yellow"></div>
          </div>
               </div>
               <div class=" col-lg-4">
                  <div class="history-borders">
                      <img src="assets/img/aboutimg/black-dots.png">
              <div class="history-year">
              <h3>2016</h3>
              </div>
              <p class="aim-title p-0">Setting up of our ever office with a team of 4 close friends!</p>
              <div class="tile-yellow"></div>
          </div>
               </div>
               <div class=" col-lg-4">
                  <div class="history-borders">
                      <img src="assets/img/aboutimg/black-dots.png">
              <div class="history-year">
              <h3>2017</h3>
              </div>
              <p class="aim-title p-0">Started settling into the competition. Worked on website development and SEO. Welcomed some new employees</p>
              <div class="tile-yellow"></div>
          </div>
               </div>
               <div class=" col-lg-4">
                  <div class="history-borders">
                      <img src="assets/img/aboutimg/black-dots.png">
              <div class="history-year">
              <h3>2015</h3>
              </div>
              <p class="aim-title p-0">Started with an aim to provide the best web hosting services at a low cost</p>
              <div class="tile-yellow"></div>
          </div>
               </div>
               <div class=" col-lg-4">
                  <div class="history-borders">
                      <img src="assets/img/aboutimg/black-dots.png">
              <div class="history-year">
              <h3>2016</h3>
              </div>
              <p class="aim-title p-0">Setting up of our ever office with a team of 4 close friends!</p>
              <div class="tile-yellow"></div>
          </div>
               </div>
               <div class=" col-lg-4">
                  <div class="history-borders">
                      <img src="assets/img/aboutimg/black-dots.png">
              <div class="history-year">
              <h3>2017</h3>
              </div>
              <p class="aim-title p-0">Started settling into the competition. Worked on website development and SEO. Welcomed some new employees</p>
              <div class="tile-yellow"></div>
          </div>
               </div>
       
 
      </div>
      </div>
      </div>
        </div>
    </section>
    
    
    <section class="map-section about-maps">
        <div class="container">
            <div class="text-center">
                <h2 class="Banner-Heading shared-heading-plan">We Expanded Globally</h2>
                <p class="operating-title-width">Our State-of-the-art infrastructure defines success, with multiple data centre<br class="remove-mobile"> locations that offer top-notch hosting services.</p>
                <div class="row">
                    <div class="col">
                        <img src="assets/img/dedicatedhsotingimg/map-.png" alt="open cart" class="deploy-app-imgs">
                    </div>
                </div>
            </div>

        </div>
    </section>
    
    <section class="review-content">
        <div class="container">
        <div class="bg-purple-hex">
            <div class="text-center outer-anim">
            <!--<img src="assets/img/sharedhsotingimg/thin-thick-line.png" class="margin-bottom-line">-->
                 <p class="hosting-rating-title ">Youstable is rated Excellent <img src="assets/img/sharedhsotingimg/review-start-img.png" alt="white logo">
                 <span class="fw-bold font-style-italic purple-text_dark"><em> 4.7 </em>
                 </span>  out of based on more than<span class="fw-bold font-style-italic purple-text_dark"> 135+ reviews</span> Trustpilot</p>
             <!--<img src="assets/img/sharedhsotingimg/thin-thick-line.png" class="margin-top-line">-->
             </div>
        </div>
        </div>
        
    </section>
    
    <section class="operating-sytems">
        <div class="container">
            <div class="text-center">
                <h2 class="Banner-Heading">Why only trust us?</h2>
                <p class="operating-title-width">YouStable is proud to lay down the renowned portals who reviewed us and now trusts YouStable as<br class="remove-mobile"> one of India’s #1 Web Hosting Providers.</p>
                <div class="row">
                      <div class="col-md-3 server-cols">
                <div class="bg-greyy">
                        <img src="assets/img/aboutimg/trust-host-advice.png" alt="open cart" class="trust-host">
                </div>
              </div>
                      <div class="col-md-3 server-cols">
                <div class="bg-greyy">
                        <img src="assets/img/aboutimg/trust-your-story.png" alt="open cart" class="">
                </div>
              </div>
                    <div class="col-md-3 server-cols">
                <div class="bg-greyy">
                        <img src="assets/img/aboutimg/trust-guru.png" alt="open cart" class="">
                </div>
              </div>
                    <div class="col-md-3 server-cols">
                <div class="bg-greyy">
                        <img src="assets/img/aboutimg/trust-mashalle.png" alt="open cart" class="">
                </div>
              </div>
                    <div class="col-md-3 server-cols mt-2">
                <div class="bg-greyy">
                        <img src="assets/img/aboutimg/trust-radar.png" alt="open cart" class="">
                </div>
              </div>
                    <div class="col-md-3 server-cols mt-2">
                <div class="bg-greyy">
                        <img src="assets/img/aboutimg/trust-pilot.png" alt="open cart" class="">
                </div>
              </div>
                    <div class="col-md-3 server-cols mt-2">
                <div class="bg-greyy">
                        <img src="assets/img/aboutimg/yahoo.png" alt="open cart" class="">
                </div>
              </div>
                    <div class="col-md-3 server-cols mt-2">
                <div class="bg-greyy">
                        <img src="assets/img/aboutimg/trust-forbes.png" alt="open cart" class="">
                </div>
              </div>
                </div>
            </div>
            
              
               
        </div>
    </section>
    
    
        <!--(What our customer says) -->
    <section class="customer-review about-us-review">
        <div class="container">
      <div class="bg-purple">
           <div class="text-center customer-review-content">
              <h2>Confidence of Thousands+ Customers!</h2>
              <p class="server-title server-title-width my-0">Established in 2015, Youstable is an Indian brand that has come a long way and still striving its best to achieve perfection.</p>
           </div>
           <!--Review Slider -->
           <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <div class="carousal-cap">
                <img src="assets/img/dedicatedhsotingimg/akash-singh-1.png" class="review-img" alt="customer img">
                  <div class="bg-customer-review ">
                    <img src="assets/img/punctuation.png" alt="punchuation img" class="punctuation">
                    <h5 class=" cutomer-heading">Attractive Affiliates</h5>
                    <p class=" cutomer_review">I registered with YouStable affiliate program and with the help of the promotional material they provide I was able to get started to earn passively.</p>
                    <h5 class="fw-bold">Akash Singh Rajpoot</h5>  
                  <p class="fw-normal customer-profile m-0">Affiliates marketer</p>
                  <img src="assets/img/review-start-img.png" alt="" class="review-star" />
                  </div>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
               <div class="carousal-cap">
                <img src="assets/img/dedicatedhsotingimg/akash-singh-1.png" class="review-img" alt="customer img">
                  <div class="bg-customer-review ">
                    <img src="assets/img/punctuation.png" alt="punchuation img" class="punctuation">
                    <h5 class=" cutomer-heading">Attractive Affiliates</h5>
                    <p class=" cutomer_review">I registered with YouStable affiliate program and with the help of the promotional material they provide I was able to get started to earn passively.</p>
                    <h5 class="fw-bold">Akash Singh Rajpoot</h5>  
                  <p class="fw-normal customer-profile m-0">Affiliates marketer</p>
                  <img src="assets/img/review-start-img.png" alt="" class="review-star" />
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                 <div class="carousal-cap">
                <img src="assets/img/dedicatedhsotingimg/akash-singh-1.png" class="review-img" alt="customer img">
                  <div class="bg-customer-review ">
                    <img src="assets/img/punctuation.png" alt="punchuation img" class="punctuation">
                    <h5 class=" cutomer-heading">Attractive Affiliates</h5>
                    <p class=" cutomer_review">I registered with YouStable affiliate program and with the help of the promotional material they provide I was able to get started to earn passively.</p>
                    <h5 class="fw-bold">Akash Singh Rajpoot</h5>  
                  <p class="fw-normal customer-profile m-0">Affiliates marketer</p>
                  <img src="assets/img/review-start-img.png" alt="" class="review-star" />
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    
<script>
  $('.autoplay').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 20000,
    responsive: [
      {
        breakpoint: 768, // This is the breakpoint for mobile view (adjust as needed)
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true // Display arrows for navigation
        }
      }
    ]
  });
</script>



 <?php include ('inc/footer.php')?>