 <?php 
 $page='Cyber Panel Hosting';
 include ('inc/header.php');
 ?>
 
  
  <style>
  
  .row.align-items-center.reverse-column {
    margin-top: 36px;
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
  </style>
  
  
  
   <!-- Banner section (shared hosting) -->
    <section class="banner-sec share-bg">
         <div class=" container">
             <div class="row align-items-center reverse-column">
                 <div class="col-md-6">
                   <div class="banner-left-content">
                       
                     <h1 class="Banner-Heading padding-heading robust">Premium CyberPanel VPS</h1>
                     <p class="Banner-title p-0">Control Panel that comes with Open LiteSpeed, WordPress Manager, Staging and Backup for ultimate performance.</p>
                         <div class="d-flex gap-3 lists-hosting">
                             <ul class="banner-list list-unstyled"> 
                                 <li class="purple-text_dark mb-3"><img src="assets/img/sharedhsotingimg/tick-purple.png" alt="tick" class="tick-square">Open LiteSpeed Optimised VPS</li>
                                 <li class="purple-text_dark"><img src="assets/img/sharedhsotingimg/tick-purple.png" alt="tick" class="tick-square">Easy to Manage Control Panel</li>
                             </ul>
                             <ul class="banner-list list-unstyled">
                                 <li class="purple-text_dark mb-3"><img src="assets/img/sharedhsotingimg/tick-purple.png" alt="tick" class="tick-square">Managed Security Modules</li>
                                 <li class="purple-text_dark"><img src="assets/img/sharedhsotingimg/tick-purple.png" alt="tick" class="tick-square">Easy Scalability of resources</li>
                             </ul>
                         </div>
                   </div>
                   <a href="#explore"><button class="btn-yellow btn-explore-plan">Get Started Today <i class="fa-solid fa-arrow-right"></i></button></a>
                   <p class="Money-Back-Guarantee"><img src="assets/img/ic-shield.png" alt="shield">30-Day Money-Back Guarantee</p>
                 </div>
                 <div class="col-md-6">
                     <img class="w-100 image-none floatings" src="assets/img/vps-server.png" alt="Banner" srcset="">
                 </div>
             </div>
         </div>
    </section>
    
    <!--Explore Section-->
    <section class="explore-section vps hosting-plan mt-4" id="explore">
        <div class="container">
            <div class="text-center margin-top-bottom ideak-choice">
              <h2 class="server-heading shared-heading-plan">Pick the Best CyberPanel VPS Hosting plan</h2>
              <p class="server-title">You were looking for CyberPanel VPS Hosting; we got that and a lot more for you!.</p>
            </div>
            
            
            <div class="row nav nav-pills plan-tab mb-3 wid-more" id="pills-tab" role="tablist">
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
            
            <div class="tab-pane fade  tab-titles" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab"> <!-- start monthly tab plan -->
              <div class="row flex_unset">
                <div class="col-md-3 explore-cols">
                  <div class="position-relative h-100">
                    <div class="upper-card">
                      <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                      <h4 class="hosting-heading">vStart-Cyber</h4>
                      <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1149</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>14.46</p>
                      <p class="per_month">/month</p>
                      <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                      <p></p>
                      <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=306&billingcycle=monthly" class="link-color-black" target="_blank"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                      
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
                      <h4 class="hosting-heading">vPro-Cyber</h4>
                      <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1999</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>25.14</p>
                      <p class="per_month">/month</p>
                      <p></p>
                      <!--<p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p>-->
                      <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=307&billingcycle=monthly" class="text-white" target="_blank"><button class="btn-purple exploreplan-btn" type="submit">Get Started</button></a>
                      
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
                      
                    </div>
                  </div>
                </div>
                
                <div class="col-md-3 explore-cols">
                  <div class="position-relative h-100">
                    <div class="upper-card">
                      <!--<img class="hosting-icons" src="assets/img/shared-plan.png" alt="shared plan">-->
                      <h4 class="hosting-heading ">vPopular-Cyber</h4>
                      <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>3499</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>44.02</p>
                      <p class="per_month">/month</p>
                      <p></p>
                      <!--<p class="regular-price">Regular price<span class="cross-price"> ₹199/month</span></p>-->
                      <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=308&billingcycle=monthly" class="link-color-black" target="_blank"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                      
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
 
                       
                    </div>
                  </div>
                </div>
                
                
                <div class="col-md-3 explore-cols">
                  <div class="position-relative h-100">
                    <div class="upper-card">
                      <!--<img class="hosting-icons" src="assets/img/shared-plan.png" alt="shared plan">-->
                      <h4 class="hosting-heading">vStable-Cyber</h4>
                      <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>4699</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>59.11</p>
                      <p class="per_month">/month</p>
                      <p></p>
                      <!--<p class="regular-price">Regular price<span class="cross-price"> ₹199/month</span></p>-->
                      <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=310&billingcycle=monthly" class="link-color-black" target="_blank"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                      
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
      
                    </div>
                  </div>
                </div>
            </div>
          </div> <!-- close monthly plan -->
          
          
          <div class="tab-pane fade   tab-titles" id="pills-half-yearly" role="tabpanel" aria-labelledby="pills-half-yearly-tab"> <!-- start Half Yearly tab plan -->
              <div class="row flex_unset">
                <div class="col-md-3 explore-cols">
                  <div class="position-relative h-100">
                    <div class="upper-card">
                      <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                      <h4 class="hosting-heading">vStart-Cyber</h4>
                      <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>804</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>10.12</p>
                      <p class="per_month">/month</p>
                      <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                      <p></p>
                     <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=306&billingcycle=semiannually&promocode=VPS30" class="link-color-black" target="_blank"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                      
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
                      <h4 class="hosting-heading">vPro-Cyber</h4>
                       <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1399</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>17.59</p>
                      <p class="per_month">/month</p>
                      <p></p>
                      <!--<p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p>-->
                      <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=307&billingcycle=semiannually&promocode=VPS30" class="text-white" target="_blank"><button class="btn-purple exploreplan-btn" type="submit">Get Started</button></a>
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
                      <h4 class="hosting-heading">vPopular-Cyber</h4>
                     <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>2449</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>30.81</p>
                      <p class="per_month">/month</p>
                      <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                      <p></p>
                     <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=308&billingcycle=semiannually&promocode=VPS30" class="link-color-black" target="_blank"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                      
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
                      <h4 class="hosting-heading">vStable-Cyber</h4>
                       <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>3289</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>41.37</p>
                      <p class="per_month">/month</p>
                      <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                      <p></p>
                      <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=310&billingcycle=semiannually&promocode=VPS30" class="link-color-black" target="_blank"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                      
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
                      <h4 class="hosting-heading">vStart-Cyber</h4>
                     <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>574</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>7.23</p>
                      <p class="per_month">/month</p>
                      <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                      <p></p>
                      <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=306&billingcycle=annually&promocode=VPS50" class="link-color-black" target="_blank"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                      
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
                      <h4 class="hosting-heading">vPro-Cyber</h4>
                      <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>999</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>12.57</p>
                      <p class="per_month">/month</p>
                      <p></p>
                      <!--<p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p>-->
                      <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=307&billingcycle=annually&promocode=VPS50" class="text-white" target="_blank"><button class="btn-purple exploreplan-btn" type="submit">Get Started</button></a>
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
                      <h4 class="hosting-heading">vPopular-Cyber</h4>
                       <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1749</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>22.01</p>
                      <p class="per_month">/month</p>
                      <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                      <p></p>
                      <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=308&billingcycle=annually&promocode=VPS50" class="link-color-black" target="_blank"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                      
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
                      <h4 class="hosting-heading">vStable-Cyber</h4>
                      <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>2349</p>
                     <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>29.55</p>
                      <p class="per_month">/month</p>
                      <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                      <p></p>
                      <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=310&billingcycle=annually&promocode=VPS50" class="link-color-black" target="_blank"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                      
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
                <h2 class="ay_heading">CyberPanel VPS Premium Add-ons​</span></h2>
                <p class="server-title title_sides_width pb-3">YouStable, in partnership with CyberPanel, is thrilled to boost your CP VPS experience by adding Premium Addon options at Zero Cost. Get top-performing features & enhance your web presence Now!</p>
              </div>
             <div class="why-choose">
                 <div class="row text-left">
                      <div class="col-md-4 cols">
                        <div class="feature_cols_dedicated">
                           <img src="assets/img/autologin.png" alt="nvme-ssd" class="python-feature">
                           <div class="border-box">
                           <h5 class="ay-heading">Auto Login</h5>
                           <p class="ay-title m-0 w-100">Finding it Challenging to Recall Your Login Credentials? Do not worry! CyberPanel VPS hosting service does away with such issues as here, we offer an amazing Auto Login feature ensuring VPS Hosting account accessibility 24/7.</p>
                        </div>
                        </div>
                      </div>
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_dedicated">
                           <img src="assets/img/auto-backup.png" alt="ddos-protected" class="python-feature">
                         <div class="border-box">
                           <h5 class="ay-heading">1 Click Backups</h5>
                           <p class="ay-title m-0 w-100">Anxious about your Archival Data? CyberPanel VPS hosting solution allows you to Retrieve your crucial website Data with the Single Click BackUp option, thereby assuring swift & secure access to your BackUp data with minimum risk.</p>
                      </div>
                        </div>
                      </div>
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_dedicated">
                           <img src="assets/img/oneclick-staging.png" alt="migration" class="python-feature">
                           <div class="border-box">
                           <h5 class="ay-heading">1 Click Staging Sites</h5>
                           <p class="ay-title m-0 w-100">Develop a Staging Site simply in just One Click to Check How your Post will look when it Goes live. CyberPanel’s Staging Site provides a testing ground for your Post before actually Publishing it online.</p>
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
                 </span>  out of based on more than <span class="fw-bold font-style-italic purple-text_dark"> 135+ reviews</span> Trustpilot</p>
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
                <h2 class="ay_heading">Configured CyberPanel VPS Hosting Features</span></h2>
                <p class="server-title title_sides_width pb-3">Industry-leading technology with faster loading sites, YouStable is ready to support you in all ways.</p>
                <!--<p class="purple-text_dark see-yourself">See for yourself!</p>-->
                <P></P>
              </div>
             <div class="features-vps">
                 <div class="row text-left">
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/open-source.png" alt="root-access">
                           <h5 class="ay-heading">Free and Open Source</h5>
                           <p class="ay-title m-0 w-100">The first open-source control panel that supports LiteSpeed Enterprise and OpenLiteSpeed- CyberPanel. Manage your hosting quite easily.</p>
                        </div>
                      </div>
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/intsall-on-click.png" alt="free-migration">
                           <h5 class="ay-heading">Install with one click</h5>
                           <p class="ay-title m-0 w-100">Offer one-click setup for well-known frameworks like WordPress, Joomla, Drupal, Mautic, and many other CMS platforms.</p>
                        </div>
                      </div>
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/vpshostingimg/ssl.svg" alt="enhance-control-panel">
                           <h5 class="ay-heading">Let's Encrypt SSL</h5>
                           <p class="ay-title m-0 w-100">CyberPanel VPS Hosting will automatically renew your Certificates before they expire because auto-renewal is activated by default!</p>
                        </div>
                      </div>
              </div>
                 <div class="row text-left mt-4">
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/lightspeed.png" alt="ssl">
                           <h5 class="ay-heading">Cache LiteSpeed</h5>
                           <p class="ay-title m-0 w-100">On a Litespeed server, the LSCache plugin is unmatched. Your websites will load quickly using page and server-level caching!</p>
                        </div>
                      </div>
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/unlimited-install.png" alt="granted-resources">
                           <h5 class="ay-heading">Unlimited installations</h5>
                           <p class="ay-title m-0 w-100">There are no restrictions on the number of installations or websites under the free CyberPanel control panel.</p>
                        </div>
                      </div>
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                           <img src="assets/img/vpshostingimg/monitoring-alerts.png" alt="monitoring-alerts">
                           <h5 class="ay-heading">Monitor Easy Resources</h5>
                           <p class="ay-title m-0 w-100">You have the authority to restart the LiteSpeed server or suspend the problematic website. You can also check the usage of your CPU, memory, and disc usage anytime.</p>
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
                            <h2 class="ay_heading text-start">24/7 Friendly<br class="remove-mobile">Customer Support</h2>
                            <p class="cus-support-title">YouStable knows the importance of prioritising customers and their needs. In order to maintain integrity and offer the customers the best of services, our team of professionals is always up and running to provide assistance and solve your queries in no time!</p>
                            <div class="d-flex justify-content-between blocks">
                            <div class="mr-l"> <a href="#" class="phone-num server-title p-0 cus-sup-num contact-hosting"><img src="assets/img/phone-call.png">+919616782253</a></div> 
                            <div><a href="#" class="livechat server-title p-0 cus-sup-num contact-hosting"><img src="assets/img/live-chat.png">Live Chat with Experts</a></div>
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
            <h2 class="server-heading">Industry-leading Technologies For Your Website!!</h2>
            <p class="server-title title_sides-width">YouStable relies on the most renowned and trusted technologies to provide better and<br class="remove-mobile">unbeatable services</p>
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
              <h2>Confidence of Thousands Happy Customers!</h2>
              <p class="server-title server-title-width my-0">Established in 2015, Youstable is an Indian brand that has come a long way and still striving its best to achieve perfection.</p>
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
                <h2 class="Banner-Heading">Maximum Operating System Support!</h2>
                <p class="operating-title-width"> YouStable offers custom operating system installation support! No matter which OS you need in our<br class="remove-mobile"> CyberPanel VPS hosting server, YouStable has got it all for you.</p>
                <div class="row">
                      <div class="col-md-4 server-cols">
                <div class="bg-lt-blacks">
                        <img src="assets/img/dedicatedhsotingimg/alma-1.png" alt="open cart" class="">
                </div>
              </div>
                      <div class="col-md-4 server-cols">
                <div class="bg-lt-blacks">
                        <img src="assets/img/dedicatedhsotingimg/centos-2.png" alt="open cart" class="">
                </div>
              </div>
                    <div class="col-md-4 server-cols">
                <div class="bg-lt-blacks">
                        <img src="assets/img/dedicatedhsotingimg/ubuntu-3.png" alt="open cart" class="">
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
                Q 1. What is CyberPanel VPS hosting?
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">VPS Stands for Virtual Private Server. With CyberPanel VPS hosting you get a private space for your site. In other words, when you get a separate space in a dedicated server it is said to be VPS Hosting. You can find Cheap CyberPanel VPS hosting for your site, but for that, you need to do an in-depth research. Here are the most important features of reliable CyberPanel VPS hosting.</div>
            </div>
          </div>
           
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Q 2. How many inodes for CyberPanel VPS hosting?
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">The best part about YouStable is, we do not place any limits on Inode. It totally depends upon the specifications of the server. There’s no limit on Inode making YouStable one of the best CyberPanel VPS hosting providers available on the internet.</div>
            </div>
          </div>
          
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
               Q 3. What is CyberPanel VPS hosting used for?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">YouStable recommends CyberPanel VPS hosting when you need better reliability, dedicated resources, dedicated IP, better efficiency, improved performance, easily scalable resources and most important fully self managed VPS Hosting KVM.</div>
            </div>
          </div>
      
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingFour">
              <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
               Q 4. Does YouStable offer CyberPanel VPS hosting with root access?
              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Yes. YouStable offers full root access VPS which gives you a totally open and separate environment. You can even install the operating system of your choice, all the essentials like PHP, Database, & Web Server. YouStable offers VPS hosting with root access to ensure that you get premium private space at afforable prices.</div>
            </div>
          </div>
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingFive">
              <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
               Q 5. How to point my domain to YouStable VPS hosting?
              </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">When you purchase KVM VPS hosting from YouStable, we will send you an email and in that email, you will get 3 important details: Username, Password and IP. This IP will help you point your domain to YouStable. You have to copy-paste that IP in your DNS settings. And this will redirect your VPS hosting server to your Domain.</div>
            </div>
          </div>
       
        </div>
      </div><br><br>
    </section>
 
  <?php include ('inc/footer.php')?>