 <?php 
 $page='Hosting Deals';
 include ('inc/header.php');
 ?>
 
 <style>
.hosting-deal-banner {
    background-image: url(assets/img/earth360.png);
    background-size: 100%;
    height: 600px;
}
.mid-content-deal {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 80vh;
}
    
    section.subscribe-sec {
    margin: 60px 0;
}
.bg-purples {
    background: #F2EEFF;
    padding: 30px;
    border-radius: 20px;
}
.rocket-img {
    width: 32px;
    margin-bottom: 11px;
}
input.search-subscribe {
    padding: 10px 31px;
    border: none;
    border-radius: 30px;
}
.subs-search-btn {
    border: none;
    padding: 10px 20px;
    border-radius: 30px;
    position: absolute;
    right: -17px;
    background: #6b46f2;
    color: #fff;
    z-index:36;
}
.sun-inp-container {
    width: 500px;
    margin: 0 auto;
}
.input-subscribe.position-relative {
    margin-top: 47px;
}
 </style>
 
 
 
<section class="hosting-deal-banner">
   <div class="container">
       <div class="banner-left-content mid-content-deal">
             <h1 class="Banner-Heading padding-heading text-white text-center">Check out all our<br> current deals</h1>
             <p class="Banner-title text-center text-white">Get ridiculously good hosting at a ridiculously low price.<br> Don't miss your chance to save!</p>
      </div>
   </div> 
</section>
 
 
 <!-- Fourth sec (Explore Plan section) -->
    <section class="explore-section mt-5 plans-mobile-one">
        <div class="container">
            <div class="row flex_unset">
                <div class="col-md-4 explore-cols">
                  <div class="position-relative">
                    <div class="upper-card">
                      <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                      <h4 class="hosting-heading">DEDICATED SERVER</h4>
                      <p class="hosting-price"><span class="hin-rs">₹</span>10,694</p>
                      <p class="per_month">/month</p>
                      <p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>
                      <a href="dedicated-servers.php"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                      
                      <div class="hosting_specification">
                          <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>1 CPU</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>50 GB NVMe SSD</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>Full Root Access</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>99.9% Uptime</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>4 GB Ram</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>750 GB Bandwidth</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p class="m-0">Free Control Panel</p>
                       </div>
                      </div>
                      <div class="free_setup btn-yellow ">
                          <p class="m-0">Free Set-up</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 explore-cols">
                  <div class="position-relative">
                      
                    <div class="upper-card" style="background: #FEFDFF;">
                        <div class="most-popular-hosting btn-light-purple">
                          <p class="m-0">Most Popular</p>
                      </div>
                      <!--<img class="hosting-icons" src="assets/img/vps-hosting.png" alt="vps hosting">-->
                      <h4 class="hosting-heading">VPS HOSTING</h4>
                      <p class="hosting-price"><span class="hin-rs">₹</span>574</p>
                      <p class="per_month">/month</p>
                      <p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p>
                      <a href="vps-hosting.php"><button class="btn-purple exploreplan-btn" type="submit">Get Started</button></a>
                      <div class="hosting_specification">
                          <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>1 CPU</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>50 GB NVMe SSD</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>Full Root Access</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>99.9% Uptime</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>4 GB Ram</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>750 GB Bandwidth</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p class="m-0">Free Control Panel</p>
                       </div>
                      </div>
                       <div class="free_setup btn-light-purple">
                          <p class="m-0">Sale 50%</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 explore-cols">
                  <div class="position-relative">
                    <div class="upper-card">
                      <!--<img class="hosting-icons" src="assets/img/shared-plan.png" alt="shared plan">-->
                      <h4 class="hosting-heading">SHARED PLAN</h4>
                      <p class="hosting-price"><span class="hin-rs">₹</span>49</p>
                      <p class="per_month">/month</p>
                      <p class="regular-price">Regular price<span class="cross-price"> ₹199/month</span></p>
                      <a href="shared-hosting.php"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                      <div class="hosting_specification">
                          <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>1 CPU</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>50 GB NVMe SSD</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>Full Root Access</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>99.9% Uptime</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>4 GB Ram</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p>750 GB Bandwidth</p>
                       </div>
                       <div class="d-flex gap-2 specifications">
                        <img src="assets/img/speci-tick.png" class="specification-tick"/>
                        <p class="m-0">Free Control Panel</p>
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
 
 <!---->
<section class="subscribe-sec">
    <div class="container">
<div class="bg-purples">
    <div class="text-center">
        <img class="rocket-img" src="assets/img/rocket.png">
        <h2 class="heading">Subscribe To Our Newsletter</h2>
        <p class="Banner-title text-center">Sign me up to receive e-mail notifications about active promotions and deals.</p>
         <div class="input-subscribe position-relative">
             <div class="input-group sun-inp-container">
                <input type="text" class="form-control search-subscribe" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                <span class="input-group-text subs-search-btn" id="basic-addon2">Search</span>
             </div>
         </div>
    </div>
    </div>
    </div>
</section>
 
     <!-- Fifth sction (What Makes YouStable Awesome?)-->
    <section class="  affiliate-four">
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
                               <img src="assets/img/refund.png" alt="refund">
                               <h5 class="ay-heading">45 Days Money-Back Guarantee</h5>
                               <p class="ay-title">If you’re not completely happy within your first 45 days with us, we’ll refund your money...</p>
                            </div>
                          </div>
                          <div class="col-md-4 cols-aws-you">
                            <div class="left-cols-awesome">
                               <img src="assets/img/uptime.png" alt="uptime">
                               <h5 class="ay-heading">99.99% Uptime Guarantee</h5>
                               <p class="ay-title">Our 99.99% uptime guarantee means your websites will always be available.</p>
                            </div>
                          </div>
                          <div class="col-md-4 cols-aws-you">
                            <div class="left-cols-awesome">
                               <img src="assets/img/honestyand trans.png" alt="support">
                               <h5 class="ay-heading">Honesty and Transparency</h5>
                               <p class="ay-title">We don’t believe in offering you “Unlimited plans” that actually require costly upgrades sooner or later...</p>
                            </div>
                          </div>
            </div>
                 <div class="row mt-4">
                          <div class="col-md-4 cols-aws-you">
                            <div class="left-cols-awesome">
                               <img src="assets/img/free-domain.png" alt="uptime">
                               <h5 class="ay-heading">Free Domain</h5>
                               <p class="ay-title">Get your first year of domain registration on us when you choose our annual hosting plans...</p>
                            </div>
                          </div>
                          <div class="col-md-4 cols-aws-you">
                            <div class="left-cols-awesome">
                               <img src="assets/img/reliable.png" alt="refund">
                               <h5 class="ay-heading">Reliable Cloud Platform</h5>
                               <p class="ay-title">Our cloud hosting infrastructure keeps your data safe. By distributing server data across redundant servers...</p>
                            </div>
                          </div>
                          <div class="col-md-4 cols-aws-you">
                            <div class="left-cols-awesome">
                               <img src="assets/img/world-wide-w.png" alt="support">
                               <h5 class="ay-heading">Worldwide Server Locations</h5>
                               <p class="ay-title">Host your website close to its visitors for the best possible latency and faster page load times. Choose from 8 server locations around the world.</p>
                            </div>
                          </div>
            </div>
             </div>
      </div>
      </div>
    </section>
 
 <!---->
<section class="customer-support mb-5">
         <div class="container">
             <div class="bg-light-yellow">
                 <div class="row align-items-center">
                     <div class="col-lg-6">
                        <div class="">
                            <img class="customer-support" src="assets/img/sharedhsotingimg/customer-support.png" alt="customer-support">
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="">
                            <h2 class="ay_heading text-start">Get Worry-Free<br class="remove-mobile"> Web Hosting Today!</h2>
                            <p class="cus-support-title">Hosting is the process of making a website accessible to users over the internet. It involves storing website files and data on servers that are connected to the internet,...</p>
                        </div>
                        <div>
            <a href="vps-hosting.php"><button class=" btn-purple exploreplan-btn hosting-deal-button" type="submit">Get Started</button></a>
        </div>
                     </div>
                 </div>
             </div>
         </div>
    </section>
 
 
 <?php include ('inc/footer.php')?>