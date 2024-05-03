 <?php 
 $page='Domain Registration';
 include ('inc/header.php');
 ?>
<style>
.bg-purple {
    margin-top: 76px;
}

    .banner-left-content h1 strong {
    font-weight: 800;
}

.banner-left-content h1 {
    font-weight: 400;
    padding-bottom: 26px;
}

input.form-control.find-domain {
    background: #FFFEFC;
    border: 1px solid #292929;
    width: 84%;
    border-radius: 100px;
    padding: 12px;
    padding-left: 50px;
}

    
input.form-control.find-domain::placeholder {
    text-align: start;
    color: #6D6D6D;
    font-size: 18px;
    font-weight: 400 !important;
}    

.row.banner-col {
    width: 83%;
}
.fa-magnifying-glass:before, .fa-search:before {
    content: "\f002";
    font-size: 24px;
}

.has-search .form-control {
    padding-left: 2.375rem;
}

.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 56px;
    
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
      color: #292929;
    margin-top: 6px;
}
.form-group.has-search {
    width: 100%;
    margin-top: 20px;
    margin-bottom: 20px;
}


div#domain-btn button {
    margin: auto;
    display: block;
    background: #EAE3FF;
    padding: 6px 15px;
    border: 0px;
    border-radius: 50px;
    color: #6B46F2;
    width: 16%;
}

.row.domain p {
    text-align: center;
}
.row.domain h3 {
    text-align: center;
    color: #000000;
    font-size: 52px;
}

p.price {
    border: 1px solid #CACACA;
    padding: 25px 0px;
    border-radius: 12px;
    color: #292929;
    font-size: 52px;
    font-weight: 700;
}

div#flex-div div {
    width: 50%;
}
div#flex-div {
    width: 95%;
    margin: 0 auto;
}

button.register-btn {
    width: 94%;
    background: #FFC235;
    border-radius: 100px;
    border: 0px;
    padding: 10px;
    color: #292929;
    font-size: 18px;
    font-weight: 600;
}

button.transfer-btn {
    width: 94%;
    background: #ffffff;
    border-radius: 100px;
    border: 1px solid #CACACA;
    padding: 10px;
    color: #292929;
    font-size: 18px;
    font-weight: 600;
}

button.domain-btn::after {
    content: '';
    position: absolute;
    left: 85px;
    top: 31px;
    border-top: 16px solid #eae3ff;
    border-left: 16px solid transparent;
    border-right: 16px solid transparent;
}

button.domain-btn {
    position: relative;
}

div#domain-btn {
    margin-bottom: 15px;
}

.domain-slide {
  display: none;
  animation: slideIn .8s ease-in-out forwards;
}

@keyframes slideIn {
  from {
    left: 100%;
  }
  to {
    left: 0;
  }
}

.domain-slide:first-child {
  display: block;
}

.domain-prev-btn,
.domain-next-btn {
  transform: translateY(-50%);
  background-color: transparent;
  border: none;
  cursor: pointer;
    font-size: 17px;
  color: #292929;
}

.buttons button {
    background: #F0ECFF;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    font-weight: 200;

}


.prev-btn {
  left: 10px;
}

.next-btn {
  right: 10px;
}

.cream-bg {
    background: #FFFDF6;
    padding: 80px 82px 0px 82px;
    border: 1px solid #CECECE;
    border-radius: 20px;
    margin-top: 100px;
    margin-bottom: 90px;
}

.domain-slide h2 {
    font-size: 38px;
    text-align: center;
}

.domain-slide p {
    text-align: center;
    font-size: 20px;
    color: #292929;
    padding-top: 10px;
}
 
.buttons {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin: 0 auto;
    justify-content: center;
        padding-top: 30px;
    padding-bottom: 30px;
}

span.slide-number {
    background: #6B46F2;
    padding: 7px 10px 10px 10px;
    border-radius: 50%;
    color: #fff;
    width: 40px;
    height: 40px;
    text-align: center;
    position: relative;
    top: -20px;
}
@media only screen and (max-width: 768px){
    input.form-control.find-domain {
    width: 100%;
}
.buttons {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin: 0 auto;
    justify-content: center;
    padding-top: 30px;
    padding-bottom: 0px;
}
.cream-bg {
    background: #FFFDF6;
    padding: 80px 82px 0px 82px;
    border: 1px solid #CECECE;
    border-radius: 20px;
    margin-top: 80px;
    margin-bottom: 36px;
}
}
img.dedi-image {
    margin-top: 0px;
}
section.awesome-youstable.affiliate-two {
    margin-top: 76px;
    margin-bottom: 82px !important;
}
</style>

  
    <!-- Banner section (shared hosting) -->
    <section class="banner-sec ">
         <div class=" container">
             <div class="row align-items-start reverse-column">
                 <div class="col-md-6">
                   <div class="banner-left-content margin-top dedicated-margin domain-reg">
                       <!--<p class="experience">Experience</p>-->
                     <h1 class="doamin-reg mobile-domain-heading desk-domain-heading "> <strong>Domain</strong><br> Registration</h1>
                     <p class="Banner-title p-0">Get a perfect domain name for your website that represents <br class="remove-mobile">your brand online.</p>
                           <div class="d-flex gap-3 lists-hosting server-listing">
                                       <div class="form-group has-search">
    <span class="fa fa-search form-control-feedback"></span>
    <input type="text" class="form-control find-domain " placeholder="Enter a desired domain name here" id="searchbox">
  </div>
                                       <!--<input type="text" class="form-control find-domain" placeholder="Enter a desired domain name here" aria-label="Selectlang" aria-describedby="basic-addon1">-->
                         </div>
                            </div>
                       <div class="row banner-col">
                      <div class="col-md-4 dom ">
                          <div class="box-ribbon">
                          <span class="wdp-ribbon wdp-ribbon-two fade-in-text">Sale</span>
                          
                          <p class="indian-host-price">.COM ₹873</p>
                          <p class="usa-host-price">.COM $10.99</p>

                          </div>
                      </div>
                      <div class="col-md-4 dom ">
                          <div class="box-ribbon purple-deal">
                          <span class="wdp-ribbons wdp-ribbon-two fade-in-text purple-light-color">Sale</span>
                          <p class="indian-host-price">.CO.in ₹476</p>
                          <p class="usa-host-price">.CO.in $5.99</p>
                          </div>
                      </div>
                      <div class="col-md-4 dom ">
                          <div class="box-ribbon">
                          <span class="wdp-ribbon wdp-ribbon-two fade-in-text">Sale</span>
                          <p class="indian-host-price">.Online ₹714</p>
                          <p class="usa-host-price">.Online $8.99</p>
                          </div>
                      </div>
                  </div>                 
                  </div>
                 <div class="col-md-6">
                     <img class="domain-reg-img floatings" src="assets/img/search-color.png" alt="Banner" srcset="">
                 </div>
             </div>
         </div>
    </section>
    

     <!--<div id="apiData"></div>-->
    
    <!--free service-->

    <section class="awesome-youstable affiliate-two affiliate-four">
      <div class="container">
            <div class="right-cols-awesome">
              <div class="text-center">
                <h2 class="ay_heading">Free Services Worth ₹5000 with Every<br class="remove-mobile"> Domain Purchase</h2>
              </div>
             <div class=" ">
                 <div class="row text-left cpanel-awe">
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/feaature-email-d.png" alt="ssd-storage">
                           <h5 class="ay-heading">Free Privacy Protection</h5>
                           <p class="ay-title m-0 w-100">Get two titan email accounts on a 90-day free trial with every domain name.</p>
                        </div>
                      </div>
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/ic_feature_dns_management.png" alt="ssl-certificate">
                           <h5 class="ay-heading">DNS Management</h5>
                           <p class="ay-title m-0 w-100">Easily manage your DNS records, website location, emails, sub-domains, aliases, FTP, and more.</p>
                        </div>
                      </div>
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/ic_feature_domain_forwarding.png" alt="speed-web-server">
                           <h5 class="ay-heading">Domain Forwarding</h5>
                           <p class="ay-title m-0 w-100">Redirect visitors to your desired URL so you don’t lose any site traffic while keeping the destination URL on their address bar.</p>
                        </div>
                      </div>
              </div>
                 <div class="row text-left mt-4">
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/ic_feature_protection.png" alt="Free Migration">
                           <h5 class="ay-heading">Domain Theft Protection</h5>
                           <p class="ay-title m-0 w-100">Lock your domain name so it won’t get transferred accidentally or without your permission.</p>
                        </div>
                      </div>
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/ic_feature_control_panel.png" alt="auto-backup">
                           <h5 class="ay-heading">Easy To Use сPanel</h5>
                           <p class="ay-title m-0 w-100">Easily manage your domain name and other products with our intuitive control panel.</p>
                        </div>
                      </div>

              </div>
            
             </div>
      </div>
      </div>
    </section>

<!--free service-->
 
<!--why domain-->
<section class="why-buy-domain">
    <div class="container">
        <div class="row why-buy-domain-one">
            <div class="col-lg-6">
                <div class="why-serve-domain">
                    <h3>Why buy a domain with Youstable.</h3>
                </div>
                <div class="d-flex gap-3 lists-hosting">
                             <ul class="banner-list list-unstyled"> 
                                  <div class="d-flex dedicate-mumbai-li">
                                      <div>
                                          <span class="tick-top-features"><img src="assets/img/tick-top-features.png"></span>
                                      </div>
                                      <div>
                                          <li class="purple-text_dark mb-3" style="color: #292929;">Youstable is the world's largest domain registrar, and 20+ million customers trust us with 84+ million domains.</li>
                                      </div>
                                  </div>
                                  <div class="d-flex dedicate-mumbai-li">
                                      <div>
                                         <span class="tick-top-features"><img src="assets/img/tick-top-features.png"></span>
                                      </div>
                                      <div>
                                          <li class="purple-text_dark mb-3" style="color: #292929;">Domains include free domain privacy forever.**</li>
                                      </div>
                                  </div>
                                  <div class="d-flex dedicate-mumbai-li">
                                      <div>
                                          <span class="tick-top-features"><img src="assets/img/tick-top-features.png"></span>
                                      </div>
                                      <div>
                                          <li class="purple-text_dark mb-3" style="color: #292929;">24/7 phone and chat support. Talk to a real person in your preferred language.</li>
                                      </div>
                                  </div>
                                  <div class="d-flex dedicate-mumbai-li">
                                      <div>
                                         <span class="tick-top-features"><img src="assets/img/tick-top-features.png"></span>
                                      </div>
                                      <div>
                                          <li class="purple-text_dark mb-3" style="color: #292929;">Simple domain set up. You don’t need any technical skills.</li>
                                      </div>
                                  </div>
                                  <div class="d-flex dedicate-mumbai-li">
                                      <div>
                                          <span class="tick-top-features"><img src="assets/img/tick-top-features.png"></span>
                                      </div>
                                      <div>
                                          <li class="purple-text_dark mb-3" style="color: #292929;">Easily find available domains from over 500 domain extensions.</li>
                                      </div>
                                  </div>
                                  <div class="d-flex dedicate-mumbai-li">
                                      <div>
                                         <span class="tick-top-features"><img src="assets/img/tick-top-features.png"></span>
                                      </div>
                                      <div>
                                          <li class="purple-text_dark mb-3" style="color: #292929;">Up to 100 subdomains to create a custom web address.</li>
                                      </div>
                                  </div>
                             </ul>
                         </div>
            </div>
            <div class="col-lg-6">
                <img src="assets/img/why-domain.png" class="why-domain-serv"/>
            </div>
        </div>
    </div>
</section>
<!--why domain-->

     <!--Review section-->
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
    
         <!--(What our customer says) -->
    <section class="customer-review">
        <div class="container">
      <div class="bg-purple">
           <div class="text-center customer-review-content">
              <h2>Confidence of Thousands Happy Customers!</h2>
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
    
    <!--(FAQ)-->
    <section class="faq">
      <div class="container">
        <h2 class="text-center faq-question">FAQs</h2>
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button acc-purple-bg" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Q 1. What is a domain name?
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">To simply explain a domain name, it is the name that is given to the website for its unique identification. The name after the “www” while searching for a website is known as a domain name.</div>
            </div>
          </div>
           
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Q 2. What is domain name registration?
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">You will need a registrar to get the available domain name registered on your name so that no one can obtain or steal it after you have your authority on it. So the process of getting your domain name registered is called domain name registration.</div>
            </div>
          </div>
          
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
               Q 3. If I register A domain, do I need web hosting to have a website?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Yes, you will need a domain in the first place, but after naming your website and getting it completed, you will need a web hosting provider and their services to get your website live and running on the internet.</div>
            </div>
          </div>
      
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingFour">
              <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
               Q 4. How can I get a free domain registration?
              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">If you buy one of the annual or triannual web hosting plans offered by YouStable, you’ll get a free domain name registration with it</div>
            </div>
          </div>
       
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingFive">
              <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFour">
                Q 5. Is it possible to modify a domain name once it has been registered?
              </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Once you get your domain namer registered, you will not be able to change it. You can either drop that domain name and get another one registered at any time; otherwise, you will have to continue with the same after registration.</div>
            </div>
          </div>
        </div>
      </div><br><br>

    </section>
    
  <!--   <script>-->
    <!--// Fetch API data using JavaScript-->
  <!--  fetch('api.php', {-->
  <!--    method: 'POST',-->
  <!--    headers: {-->
  <!--      'Content-Type': 'application/x-www-form-urlencoded',-->
  <!--    },-->
  <!--    body: new URLSearchParams({-->
  <!--      'action': 'GetTLDPricing',-->
  <!--      'username': 'IDENTIFIER_OR_ADMIN_USERNAME',-->
  <!--      'password': 'SECRET_OR_HASHED_PASSWORD',-->
  <!--      'currencyid': '1',-->
  <!--      'responsetype': 'json',-->
  <!--    }),-->
  <!--  })-->
  <!--  .then(response => response.json())-->
  <!--  .then(data => {-->
      <!--// Update HTML with API response-->
  <!--    const apiDataElement = document.getElementById('apiData');-->
  <!--    apiDataElement.innerHTML = `-->
  <!--      <h2>Currency: ${data.currency.code}</h2>-->
  <!--      <p>Pricing:</p>-->
  <!--      <ul>-->
  <!--        <li>com: ${data.pricing.com.register['1']}</li>-->
  <!--        <li>net: ${data.pricing.net.register['1']}</li>-->
  <!--        <li>org: ${data.pricing.org.register['1']}</li>-->
  <!--        <li>biz: ${data.pricing.biz.register['1']}</li>-->
  <!--        <li>info: ${data.pricing.info.register['1']}</li>-->
  <!--      </ul>-->
  <!--    `;-->
  <!--  })-->
  <!--  .catch(error => console.error('Error fetching API:', error));-->
  <!--</script>-->
 <?php include ('inc/footer.php')?>