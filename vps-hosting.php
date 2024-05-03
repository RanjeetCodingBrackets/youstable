 <?php 
 $page='VPS Hosting';
 include ('inc/header.php');
 ?>
 
  
  <style>
  
  .row.align-items-center.reverse-column {
    margin-top: 68px;
}
          .contact-hosting {
    font-size: 20px;
    font-weight: 400;
    line-height: 38.73px;
    color: #292929;
}
.border-box {
    padding-left: 10px;
    padding-right: 10px;
}
.why-choose {
    padding-top: 100px;
}
.upper-card {
    padding: 32px 18px;
    border-radius: 18px;
    border: 1px solid #CACACA; 
    background: #FFFDF9;
    height: 100%;
    transition: 0.3s;
}
.hosting_specification {
    margin-top: 52px;
}
img.specification-tick {
    width: 22px;
    margin-right: 8px;
}
.specifications p {
    font-size: 19px;
}
.lists-hosting {
    margin-top: 28px;
}
.padding-heading {
    padding: 0 30px 15px 0;
}
/*unknown css*/
.awesome-youstable {
    margin: 82px 0;
}

/*unknown css*/
  </style>
  
  
  
   <!-- Banner section (shared hosting) -->
    <section class="banner-sec share-bg">
         <div class=" container">
             <div class="row align-items-center reverse-column">
                 <div class="col-md-6">
                   <div class="banner-left-content">
                       <!--<p class="experience">Powerful VPS Servers</p>-->
                     <h1 class="Banner-Heading padding-heading robust">For Your Way to Success!</h1>
                     <p class="Banner-title p-0">Easily manage your website on flexible VPS servers built with the latest hardware technologies and experience.</p>
                         <div class="d-flex gap-3 lists-hosting">
                             <ul class="banner-list list-unstyled"> 
                                 <li class="purple-text_dark mb-3"><img src="assets/img/sharedhsotingimg/tick-purple.png" alt="tick" class="tick-square"> 1 IPv4 IP Address</li>
                                 <li class="purple-text_dark"><img src="assets/img/sharedhsotingimg/tick-purple.png" alt="tick" class="tick-square"> US, NL & India Locations</li>
                             </ul>
                             <ul class="banner-list list-unstyled">
                                 <li class="purple-text_dark mb-3"><img src="assets/img/sharedhsotingimg/tick-purple.png" alt="tick" class="tick-square"> Easy to scale</li>
                                 <li class="purple-text_dark"><img src="assets/img/sharedhsotingimg/tick-purple.png" alt="tick" class="tick-square"> Free Migration</li>
                             </ul>
                         </div>
                   </div>
                    <a href="#explore"><button class="btn-yellow btn-explore-plan">Get Started Today <i class="fa-solid fa-arrow-right"></i></button></a>
                   <p class="Money-Back-Guarantee"><img src="assets/img/ic-shield.png" alt="shield">30-Day Money-Back Guarantee</p>
                 </div>
                 <div class="col-md-6">
                     <img class="w-100 image-none floatings" src="assets/img/vps-hosting-server.png" alt="Banner" srcset="">
                 </div>
             </div>
         </div>
    </section>
    
    <!--Explore Section-->
    <section class="explore-section vps hosting-plan mt-4" id="explore">
        <div class="container">
            <div class="text-center margin-top-bottom ideak-choice">
              <h2 class="server-heading shared-heading-plan">Choose the Best Plan For Your Success</h2>
              <p class="server-title">Customise the Best KVM VPS hosting servers resources for your website as per your needs and make it ultra-smooth on the internet without any hidden or additional charges.</p>
            </div>
            
            
            <div class="row nav nav-pills plan-tab mb-5 wid-more" id="pills-tab" role="tablist">
                  <div class="col-lg-4">
                        <p class="nav-item" role="presentation">
                          <button class="nav-link montly-btn" id="pills-monthly-tab" data-bs-toggle="pill" data-bs-target="#pills-monthly" type="button" role="tab" aria-controls="pills-monthly" aria-selected="true">Monthly</button>
                       </p>
                  </div>
                    <div class="col-lg-4">
                        <p class="nav-item half-yearly-btn" role="presentation">
                          <button class="nav-link " id="pills-half-yearly-tab" data-bs-toggle="pill" data-bs-target="#pills-half-yearly" type="button" role="tab" aria-controls="pills-half-yearly" aria-selected="false">Half-Yearly</button>
                       </p> 
                    </div>
                    <div class="col-lg-4">
                        <p class="nav-item" role="presentation">
                           <button class="nav-link yearly-btn active" id="pills-yearly-tab" data-bs-toggle="pill" data-bs-target="#pills-yearly" type="button" role="tab" aria-controls="pills-yearly" aria-selected="false">Yearly</button>
                        </p>
                    </div>
            </div>
 
            
           <div class="tab-content" id="pills-tabContent"> <!-- start tab content -->
            
            <div class="tab-pane fade tab-titles" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab"> <!-- start monthly tab plan -->
              <div class="row flex_unset">
                <div class="col-md-3 explore-cols">
                  <div class="position-relative h-100">
                    <div class="upper-card">
                      <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                      <h4 class="hosting-heading">vStart</h4>
                     <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1149</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>14.46</p>
                      <p class="per_month">/month</p>
                      <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                      <p></p>
                       <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=341&billingcycle=monthly" class="" target="_blank" class="link-color-black"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                      
                      <div class="hosting_specification">
                          <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>1 CPU</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>4 GB RAM</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>50 GB NVMe SSD</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>1 TB Bandwidth</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Dedicated IPv4</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Full Root Access</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Free Control Panel*</p>
                       </div>
                      </div>
                      
                      <!--<div class="free_setup btn-yellow " bis_skin_checked="1">-->
                      <!--    <p class="m-0">50% Off</p>-->
                      <!--</div>-->
                      
                    </div>
                  </div>
                </div>
                
                <div class="col-md-3 explore-cols">
                  <div class="position-relative h-100">
                      <!--<div class="most-popular-hosting btn-light-purple">-->
                      <!--    <p class="m-0">Experts Choice</p>-->
                      <!--</div>-->
                    <div class="upper-card" style="background: #FEFDFF;">
                      <!--<img class="hosting-icons" src="assets/img/vps-hosting.png" alt="vps hosting">-->
                      <h4 class="hosting-heading">vProfessional</h4>
                   
                      <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1999</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>25.14</p>
                      <p class="per_month">/month</p>
                      <p></p>
                      <!--<p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p>-->
                      <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=342&billingcycle=monthly" class="text-white" target="_blank"><button class="btn-purple exploreplan-btn" type="submit">Get Started</button></a>
                      <div class="hosting_specification">
                          <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>2 CPU</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>6 GB RAM</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>100 GB NVMe SSD</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>1.5 TB Bandwidth</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Dedicated IPv4</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Full Root Access</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Free Control Panel*</p>
                       </div>
                      </div>
                      
                      <!--<div class="free_setup btn-light-purple" bis_skin_checked="1">-->
                      <!--    <p class="m-0">50% Off</p>-->
                      <!--</div>-->
                   
                    </div>
                  </div>
                </div>
                
                <div class="col-md-3 explore-cols">
                  <div class="position-relative h-100">
                    <div class="upper-card">
                      <!--<img class="hosting-icons" src="assets/img/shared-plan.png" alt="shared plan">-->
                      <h4 class="hosting-heading ">vPopular</h4>
                      
                      <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>3499</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>44.02</p>
                     
                      <p class="per_month">/month</p>
                      <p></p>
                      <!--<p class="regular-price">Regular price<span class="cross-price"> ₹199/month</span></p>-->
                      <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=343&billingcycle=monthly" class="" target="_blank"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                      <div class="hosting_specification">
                          <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>4 CPU</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>12 GB RAM</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>150 GB NVMe SSD</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>2.0 TB Bandwidth</p>
                       </div>
                                <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Dedicated IPv4</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Full Root Access</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Free Control Panel*</p>
                       </div>
                      </div>
                      
                      <!--<div class="free_setup btn-yellow " bis_skin_checked="1"> -->
                      <!--    <p class="m-0">50% Off</p>-->
                      <!--</div>-->
                       
                    </div>
                  </div>
                </div>
                
                
                <div class="col-md-3 explore-cols">
                  <div class="position-relative h-100">
                    <div class="upper-card">
                      <!--<img class="hosting-icons" src="assets/img/shared-plan.png" alt="shared plan">-->
                      <h4 class="hosting-heading">vStable</h4>
 
                    <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>4699</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>59.11</p>
                     
                      <p class="per_month">/month</p>
                      <p></p>
                      <!--<p class="regular-price">Regular price<span class="cross-price"> ₹199/month</span></p>-->
                      <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=344&billingcycle=monthly" class="" target="_blank"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                      <div class="hosting_specification">
                          <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>6 CPU</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>16 GB RAM</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                       <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>200 GB NVMe SSD</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>2.5 TB Bandwidth</p>
                       </div>
                                 <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Dedicated IPv4</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Full Root Access</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Free Control Panel*</p>
                       </div>
                      </div>
                      
                      <!--<div class="free_setup btn-yellow " bis_skin_checked="1">-->
                      <!--    <p class="m-0">50% Off</p>-->
                      <!--</div>-->
                       
                    </div>
                  </div>
                </div>
            </div>
          </div> 
          <!-- close monthly plan -->
          
          
          <div class="tab-pane fade tab-titles" id="pills-half-yearly" role="tabpanel" aria-labelledby="pills-half-yearly-tab"> <!-- start Half Yearly tab plan -->
              <div class="row flex_unset">
                <div class="col-md-3 explore-cols">
                  <div class="position-relative h-100">
                    <div class="upper-card">
                      <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                      <h4 class="hosting-heading">vStart</h4>
                      
                      <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>804</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>10.12</p>
                     
                      <p class="per_month">/month</p>
                      <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                      <p></p>
                    <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=341&billingcycle=semiannually&promocode=VPS30" class="link-color-black" target="_blank"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>

                      
                      <div class="hosting_specification">
                          <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>1 CPU</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>4 GB RAM</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>50 GB NVMe SSD</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>1 TB Bandwidth</p>
                       </div>
                          <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Dedicated IPv4</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Full Root Access</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Free Control Panel*</p>
                       </div>
                      </div>
                    
                      
                      <div class="free_setup btn-yellow " bis_skin_checked="1">
                          <p class="m-0">30% Off</p>
                      </div>
                      
                    </div>
                  </div>
                </div>
                
                <div class="col-md-3 explore-cols">
                  <div class="position-relative h-100">
                      <!--<div class="most-popular-hosting btn-light-purple">-->
                      <!--    <p class="m-0">Experts Choice</p>-->
                      <!--</div>-->
                    <div class="upper-card" style="background: #FEFDFF;">
                      <!--<img class="hosting-icons" src="assets/img/vps-hosting.png" alt="vps hosting">-->
                      <h4 class="hosting-heading">vProfessional</h4>
                      
                       <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1399</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>17.59</p>
                     
                      <p class="per_month">/month</p>
                      <p></p>
                      <!--<p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p>-->
                    <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=342&billingcycle=semiannually&promocode=VPS30" class="text-white" target="_blank"><button class="btn-purple exploreplan-btn" type="submit">Get Started</button></a>
                      <div class="hosting_specification">
                          <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>2 CPU</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>6 GB RAM</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>100 GB NVMe SSD</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>1.5 TB Bandwidth</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Dedicated IPv4</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Full Root Access</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Free Control Panel*</p>
                       </div>
                      </div>
                      
                      <div class="free_setup btn-light-purple" bis_skin_checked="1">
                          <p class="m-0">30% Off</p>
                      </div>
                   
                    </div>
                  </div>
                </div>
                
                 <div class="col-md-3 explore-cols">
                  <div class="position-relative h-100">
                    <div class="upper-card">
                      <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                      <h4 class="hosting-heading">vPopular</h4>
                      
                      <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>2449</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>30.81</p>
                     
                      <p class="per_month">/month</p>
                      <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                      <p></p>
                      <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=343&billingcycle=semiannually&promocode=VPS30" class="link-color-black" target="_blank"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                      
                      <div class="hosting_specification">
                          <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>4 CPU</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>12 GB RAM</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>150 GB NVMe SSD</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>2.0 TB Bandwidth</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Dedicated IPv4</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Full Root Access</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Free Control Panel*</p>
                       </div>
                      </div>
                      
                      <div class="free_setup btn-yellow " bis_skin_checked="1">
                          <p class="m-0">30% Off</p>
                      </div>
                      
                    </div>
                  </div>
                </div>
                
                
                 <div class="col-md-3 explore-cols">
                  <div class="position-relative h-100">
                    <div class="upper-card">
                      <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                      <h4 class="hosting-heading">vStable</h4>

                      <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>3289</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>41.37</p>
                     
                      <p class="per_month">/month</p>
                      <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                      <p></p>
                      <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=344&billingcycle=semiannually&promocode=VPS30" class="link-color-black" target="_blank"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                      
                      <div class="hosting_specification">
                          <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>6 CPU</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>16 GB RAM</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                       <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>200 GB NVMe SSD</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>2.5 TB Bandwidth</p>
                       </div>
                        <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Dedicated IPv4</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Full Root Access</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Free Control Panel*</p>
                       </div>
                      </div>
                      
                      <div class="free_setup btn-yellow " bis_skin_checked="1">
                          <p class="m-0">30% Off</p>
                      </div>
                      
                    </div>
                  </div>
                </div>
                
            </div>
          </div> <!-- Close Half Yearly Plan -->
          
          
          
         <div class="tab-pane fade show active tab-titles" id="pills-yearly" role="tabpanel" aria-labelledby="pills-yearly-tab"> <!-- start Yearly tab plan -->
              <div class="row flex_unset">
                
                <div class="col-md-3 explore-cols">
                  <div class="position-relative h-100">
                    <div class="upper-card">
                      <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                      <h4 class="hosting-heading">vStart</h4>
              
                      <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>574</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>7.23</p>
                     
                      <p class="per_month">/month</p>
                      <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                      <p></p>
                      <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=341&billingcycle=annually&promocode=VPS50" class="link-color-black" target="_blank"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                      
                      <div class="hosting_specification">
                          <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>1 CPU</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>4 GB RAM</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>50 GB NVMe SSD</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>1 TB Bandwidth</p>
                       </div>
                        <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Dedicated IPv4</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Full Root Access</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Free Control Panel*</p>
                       </div>
                      </div>
                      
                      <div class="free_setup btn-yellow " bis_skin_checked="1">
                          <p class="m-0">50% Off</p>
                      </div>
                      
                    </div>
                  </div>
                </div>
                
                <div class="col-md-3 explore-cols">
                  <div class="position-relative h-100">
                      <!--<div class="most-popular-hosting btn-light-purple">-->
                      <!--    <p class="m-0">Experts Choice</p>-->
                      <!--</div>-->
                    <div class="upper-card" style="background: #FEFDFF;">
                      <!--<img class="hosting-icons" src="assets/img/vps-hosting.png" alt="vps hosting">-->
                      <h4 class="hosting-heading">vProfessional</h4>

                      <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>999</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>12.57</p>
                      <p class="per_month">/month</p>
                      <p></p>
                      <!--<p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p>-->
                      <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=342&billingcycle=annually&promocode=VPS50" class="text-white" target="_blank"><button class="btn-purple exploreplan-btn" type="submit">Get Started</button></a>
                      <div class="hosting_specification">
                          <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>2 CPU</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>6 GB RAM</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>100 GB NVMe SSD</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>1.5 TB Bandwidth</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Dedicated IPv4</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Full Root Access</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Free Control Panel*</p>
                       </div>
                      </div>
                      
                      <div class="free_setup btn-light-purple" bis_skin_checked="1">
                          <p class="m-0">50% Off</p>
                      </div>
                   
                    </div>
                  </div>
                </div>
                
                 <div class="col-md-3 explore-cols">
                  <div class="position-relative h-100">
                    <div class="upper-card">
                      <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                      <h4 class="hosting-heading">vPopular</h4>

                       <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1749</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>22.01</p>
                      <p class="per_month">/month</p>
                      <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                      <p></p>
                      <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=343&billingcycle=annually&promocode=VPS50" class="link-color-black" target="_blank"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                      
                      <div class="hosting_specification">
                          <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>4 CPU</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>12 GB RAM</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>150 GB NVMe SSD</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>2.0 TB Bandwidth</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Dedicated IPv4</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Full Root Access</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Free Control Panel*</p>
                       </div>
                      </div>
                      
                      <div class="free_setup btn-yellow " bis_skin_checked="1">
                          <p class="m-0">50% Off</p>
                      </div>
                      
                    </div>
                  </div>
                </div>
                
                
                 <div class="col-md-3 explore-cols">
                  <div class="position-relative h-100">
                    <div class="upper-card">
                      <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                      <h4 class="hosting-heading">vStable</h4>

                       <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>2349</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>29.55</p>
                      <p class="per_month">/month</p>
                      <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                      <p></p>
                      <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=344&billingcycle=annually&promocode=VPS50" class="link-color-black" target="_blank"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                      
                      <div class="hosting_specification">
                          <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>6 CPU</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>16 GB RAM</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                       <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>200 GB NVMe SSD</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>2.5 TB Bandwidth</p>
                       </div>
                        <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Dedicated IPv4</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Full Root Access</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick">
                        <p>Free Control Panel*</p>
                       </div>
                      </div>
                      
                      <div class="free_setup btn-yellow " bis_skin_checked="1">
                          <p class="m-0">50% Off</p>
                      </div>
                      
                    </div>
                  </div>
                </div>
                
            </div>
          </div> <!-- Close Yearly Plan -->
            
          </div> <!-- close all tab content -->
        </div>
    </section>
    
    
    
      <!--Feature in Market-->
 
    <section class="awesome-youstable affiliate-two affiliate-four">
      <div class="container">
            <div class="right-cols-awesome">
              <div class="text-center">
                <h2 class="ay_heading">Why Choose YouStable for Your VPS Hosting Needs?</span></h2>
                <p class="server-title title_sides_width pb-3">Our budget-friendly fast VPS server hosting comes with robust features tailored to enhance your website's speed, security, and stability, ensuring top-notch quality without compromise.</p>
                <!--<p class="server-title title_sides_width pb-3">Our services are backed by strong features that are especially focused on making your website more fast, secure and steady on the internet so that you can enjoy uncompromised quality.</p>-->
              </div>
             <div class="why-choose">
                 <div class="row text-left">
                      <div class="col-md-4 cols">
                        <div class="feature_cols_dedicated">
                           <img src="assets/img/vpshostingimg/nvme.svg" alt="nvme-ssd" class="python-feature">
                           <div class="border-box">
                           <h5 class="ay-heading">Powerful NVMe SSD</h5>
                           <p class="ay-title m-0 w-100">Get faster access and superior storage with NVMe Drives. Boost your website’s performance dramatically by reducing latency and delivering high IOPS</p>
                        </div>
                        </div>
                      </div>
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_dedicated">
                           <img src="assets/img/vpshostingimg/protected.svg" alt="ddos-protected" class="python-feature">
                         <div class="border-box">
                           <h5 class="ay-heading">DDos Protected</h5>
                           <p class="ay-title m-0 w-100">With the industry’s best DDoS Protected VPS Servers, you can protect your website proactively from malicious and unwanted attacks that drain your resources with illegitimate traffic.</p>
                      </div>
                        </div>
                      </div>
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_dedicated">
                           <img src="assets/img/vpshostingimg/migration.svg" alt="migration" class="python-feature">
                           <div class="border-box">
                           <h5 class="ay-heading">Effortless Migration</h5>
                           <p class="ay-title m-0 w-100">Our team of Technical hosting professionals will seamlessly transfer all your websites to the new server at a date & time that aligns with your preferences, completely free of cost.</p>
                        </div>
                        </div>
                      </div>
              </div>

            
             </div>
      </div>
      </div>
    </section>
    
    
 
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

    <!--Feature in Market-->
 
    <section class="awesome-youstable affiliate-two affiliate-four">
      <div class="container">
            <div class="right-cols-awesome">
              <div class="text-center">
                <h2 class="ay_heading">Powerful Features For Your Unstoppable Growth</span></h2>
                <p class="server-title title_sides_width pb-3">We have equipped our servers with the most advanced features so that you can experience both high performance and super security for your website because we understand the value your data security</p>
                <!--<p class="purple-text_dark see-yourself">See for yourself!</p>-->
                <P></P>
              </div>
             <div class="features-vps">
                 <div class="row text-left">
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/vpshostingimg/root-access.svg" alt="root-access">
                           <h5 class="ay-heading">Root Access</h5>
                           <p class="ay-title m-0 w-100">Full admin access allows you to manage your VPS hosting easily. It allows you to authorise any modification on your website.</p>
                        </div>
                      </div>
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/pythonhosting/miration.svg" alt="free-migration">
                           <h5 class="ay-heading">Free Migration</h5>
                           <p class="ay-title m-0 w-100">YouStable offers free migration of up to 5 GB of data to its Virtual Private Servers with NVMe SSD drive and user-friendly control panel.</p>
                        </div>
                      </div>
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/vpshostingimg/ecp.svg" alt="enhance-control-panel">
                           <h5 class="ay-heading">Enhanced Control Panel</h5>
                           <p class="ay-title m-0 w-100">Availability of multiple control panels like cPanel, DirectAdmin and more. They give an enhanced user interface....</p>
                        </div>
                      </div>
              </div>
                 <div class="row text-left mt-4">
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/vpshostingimg/ssl.svg" alt="ssl">
                           <h5 class="ay-heading">Let’s Encrypt SSL Certificates</h5>
                           <p class="ay-title m-0 w-100">Ensure the trustworthiness of your website and keep your customer’s data safe. SSL adds to the authenticity of a website....</p>
                        </div>
                      </div>
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/vpshostingimg/granted-resources.png" alt="granted-resources">
                           <h5 class="ay-heading">Guaranteed Resources</h5>
                           <p class="ay-title m-0 w-100">Important resources like bandwidth, storage, RAM, and CPU have been optimized to guarantee the best VPS Hosting.</p>
                        </div>
                      </div>
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/vpshostingimg/monitoring-alerts.png" alt="monitoring-alerts">
                           <h5 class="ay-heading">Monitoring & Alerts</h5>
                           <p class="ay-title m-0 w-100">Monitor your website and get important alerts and updates about our best VPS hosting directly in your mailbox.</p>
                        </div>
                      </div>
              </div>
            
             </div>
      </div>
      </div>
    </section>
    
    <!--customer support-->
    <section class="customer-support">
         <div class="container">
             <div class="bg-light-yellow">
                 <div class="row align-items-center">
                     <div class="col-lg-6">
                        <div class="">
                            <img class="customer-image-support" src="assets/img/sharedhsotingimg/customer-support.png" alt="customer-support">
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="">
                            <h2 class="ay_heading text-start">24/7 Friendly<br>Customer Support</h2>
                            <p class="cus-support-title">YouStable’s dedicated team of professionals support hundreds of customers daily. Connect our support team and scale your website traffic to next level with KVM Managed VPS Hosting servers.</p>
                            <div class="d-flex justify-content-between blocks">
                            <div class="mr-l"> <a href="https://wa.me/+919616782253"  class="phone-num server-title p-0 cus-sup-num contact-hosting" data-toggle="tooltip" data-placement="top" target="_blank" data-bs-original-title="Chat On Whatsapp"><img src="assets/img/phone-call.png">+919616782253</a></div> 
                            <div><a href="javascript:void(Tawk_API.toggle())" class="livechat server-title p-0 cus-sup-num contact-hosting" data-toggle="tooltip" data-placement="top" target="_blank" data-bs-original-title="Click to Chat" ><img src="assets/img/live-chat.png">Live Chat with Experts</a></div>
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
      <div class="bg-purple purple" style="background: #fff;">
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
    
    <!--(What our customer says) -->
    <section class="customer-review">
        <div class="container">
      <div class="bg-purple vps-puple">
           <div class="text-center customer-review-content">
              <h2>Happy Users</h2>
              <p class="server-title server-title-width my-0">Confidently claim the title of the best shared hosting service provider backed by thousands of satisfied customers.</p>
           </div>
           <!--Review Slider -->
           <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <div class="carousal-cap">
                <img src="assets/img/vpshostingimg/akash-singh-img.png" class="review-img" alt="customer img">
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
                <img src="assets/img/vpshostingimg/akash-singh-img.png" class="review-img" alt="customer img">
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
                <img src="assets/img/vpshostingimg/akash-singh-img.png" class="review-img" alt="customer img">
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
    
    
    <section class="operating-sytems">
        <div class="container">
            <div class="text-center">
                <h2 class="Banner-Heading">Operating Systems, Apps For Your <br>Virtual Private Server</h2>
                <p class="operating-title-width">Work with your desired Operating system smoothly to manage your website without any restrictions, all thanks to<br> flexible KVM VPS servers which are compatible with all the OS available in the market.</p>
                <div class="row">
                      <div class="col-md-3 server-cols">
                <div class="bg-lt-blacks">
                        <img src="assets/img/dedicatedhsotingimg/alma-1.png" alt="open cart" class="">
                </div>
              </div>
                      <div class="col-md-3 server-cols">
                <div class="bg-lt-blacks">
                        <img src="assets/img/dedicatedhsotingimg/centos-2.png" alt="open cart" class="">
                </div>
              </div>
                    <div class="col-md-3 server-cols">
                <div class="bg-lt-blacks">
                        <img src="assets/img/dedicatedhsotingimg/ubuntu-3.png" alt="open cart" class="">
                </div>
              </div>
                    <div class="col-md-3 server-cols">
                <div class="bg-lt-blacks">
                        <img src="assets/img/dedicatedhsotingimg/windows-4.png" alt="open cart" class="">
                </div>
              </div>
                </div>
            </div>
            
               <div class="text-center mt-5 choose-plan-now">
                <button class="btn-yellow   get-tarted-table get-tarted-table-one" type="submit">Choose Plan Now</button>
              </div>
               
        </div>
    </section>
    
    <!--(FAQ)-->
    <section class="faq faq-1">
      <div class="container">
        <h2 class="text-center faq-question">FAQs</h2>
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button acc-purple-bg" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Q 1. What is Managed VPS Hosting?
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">As you may infer from its name, managed VPS servers are specially designed for beginners so that you can easily host, manage or modify your website on the high-quality KVM VPS servers even if you have no technical knowledge.</div>
            </div>
          </div>
           
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Q 2. Which operating system should I choose for my VPS Server?
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">It totally depends upon your needs and requirements. For example, if you want your server to be fast and quick, then you can choose Linux for your VPS servers because it is very lightweight, making it quite fast. But Linux is not easy to use, so we will recommend you choose Windows OS, all thanks to its GUI-based interface, which does not require any technical knowledge to operate.</div>
            </div>
          </div>
          
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
               Q 3. Is a managed VPS better than shared hosting?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Yes, as the name suggests, the shared servers are distributed with multiple users so the performance is too!! That’s why shared servers can not provide high performance to your website. But VPS servers come with fixed resources so that you can enjoy the optimum and unrestricted performance for your website.</div>
            </div>
          </div>
      
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingFour">
              <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
               Q 4. Do you provide Windows VPS hosting?
              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Yes, our servers are flexible enough to let you enjoy any operating system or application you want for your managed VPS hosting servers. Hence, no matter whether you are comfortable with Linux, Windows or any other popular operating systems to manage your website, you can easily choose our VPS hosting plans.</div>
            </div>
          </div>
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingFive">
              <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
               Q 5. How many IPs are included with VPS hosting?
              </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">We offer you 1 IP with our normal VPS hosting plans, but you can also get extra IPs by paying $5/mo to manage your website easily without facing any issues. For example, if your one IP is under a DDoS attack, then you can immediately switch to different IP to bypass that attack.</div>
            </div>
          </div>
       
        </div>
      </div><br><br>
    </section>
 
  <?php include ('inc/footer.php')?>