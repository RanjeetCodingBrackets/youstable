 <?php 
 $page='Dedicated Servers';
 include ('inc/header.php');
 ?>

<style>
.contact-hosting {
    font-size: 20px;
}
 
.country-choose-btn.dedicated-button-click {
    padding: 10px;
    font-size: 18px;
    font-weight: 400;
    line-height: 26px;
    width: 172px;
    border: 1px solid #e5e5e5;
}
.country-choose-btn.active {
   color:#fff !important;
}
.choose-country-btn1 {
    border-radius: 30px 0 0 30px !important;
 
}
.choose-country-btn2 {
    border-radius:0 30px 30px 0 !important;
    border-right:none !important;
    border-left:none !important;
}
tr.country-server-specs-head th {
    font-size: 20px;
    font-weight: 500;
    line-height: 24.2px;
    color: #292929;
    padding: 18px 8px 18px 8px;
    text-align:center;
}
.country-server-specs-head {
    border-bottom: 1px solid #CACACA;
}
.country-server-specs td {
    font-family: Inter;
    font-size: 16px;
    font-weight: 400;
    line-height: 26px;
    color: #292929;
    padding-bottom: 0;
    padding-left: 0;
     text-align:center;
    
}

.top-specs td {
    padding: 8px 8px 8px 8px !important;
    vertical-align: middle;
    font-weight: 500;
}
.buy-now-btn {
    border: none;
    background: #ffc235;
    font-size: 15px;
    font-weight: 400;
    line-height: 19.36px;
    color: #292929;
    padding: 8px 32px 8px 32px;
    border-radius: 38px;
    transition:0.3s;
}
button.buy-now-btn:hover {
    background: #292929;
    color: #fff;
}
.actual-prize {
    font-size: 14px;
    font-weight: 400;
    line-height: 19px;
    color: #FF2121;
    text-decoration: line-through;
}
td.purple-color-server {
    font-size: 17px;
    color:#6b46f2;
    text-align: start;
}
.margin-top {
    margin-top: 42px;
}
tr.border-white.country-server-specs {
    border-bottom: 1px solid #cacaca !important;
}
td.purple-color-server {
    width: 300px;
}
/*.responsive-specs-table{*/
/*        border-bottom: 1px solid #CACACA;*/
/*}*/
/*MEDIA QUERY*/

</style>

   <!-- Banner section (shared hosting) -->
    <section class="banner-sec">
         <div class=" container">
             <div class="row align-items-center reverse-column">
                 <div class="col-md-6">
                   <div class="banner-left-content margin-top dedicated-margin">
                       <!--<p class="experience">Experience</p>-->
                     <h1 class="Banner-Heading padding-heading robust"> Robust Powerful Dedicated Servers</h1>
                     <p class="Banner-title p-0">Total Control and Privacy on your Server with YouStable’s Quality Driven Dedicated Servers with features filled plan...</p>
                         <div class="d-flex gap-3 lists-hosting">
                             <ul class="banner-list list-unstyled"> 
                                 <li class="purple-text_dark mb-3 color-black-1"><img src="assets/img/sharedhsotingimg/tick-purple.png" alt="tick" class="tick-square"> Premium Latest Hardware</li>
                                 <li class="purple-text_dark color-black-1"><img src="assets/img/sharedhsotingimg/tick-purple.png" alt="tick" class="tick-square"> DDoS Protection</li>
                             </ul>
                             <ul class="banner-list list-unstyled">
                                 <li class="purple-text_dark mb-3 color-black-1"><img src="assets/img/sharedhsotingimg/tick-purple.png" alt="tick" class="tick-square"> Multiple Server Location</li>
                                 <li class="purple-text_dark color-black-1"><img src="assets/img/sharedhsotingimg/tick-purple.png" alt="tick" class="tick-square"> 1 Gbps uplink</li>
                             </ul> 
                         </div>
                   </div>
                    <a href="#explore"><button class="btn-yellow btn-explore-plan">Get Started Today <i class="fa-solid fa-arrow-right"></i></button></a>
                   <p class="Money-Back-Guarantee"><img src="assets/img/ic-shield.png" alt="shield">30-Day Money-Back Guarantee</p>
                 </div>
                 <div class="col-md-6">
                     <img class="dedicated-server-hero floatings" src="assets/img/dedicated-image-serverer.png" alt="Banner" srcset="">
                 </div>
             </div>
         </div>
    </section>
    
    
    
      <!--Explore Section-->
    <section class="explore-section mt-5 decdicated-plans-server" id="explore">
        <div class="container">
            <div class="text-center">
              <h2 class="server-heading shared-heading-plan">What if we say you are getting all in one here?</h2>
              <p class="server-title">What makes you choose to host? The rich quality, enough quantity, reasonable prices and extraordinary features? What if we say you are getting all in one here?</p>
            </div>
            
            <div class="choose-country-tab">
                 <ul class="nav nav-pills my-5 justify-content-center country-choose-pill" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active country-choose-btn choose-country-btn1 text-dark dedicated-button-click" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><span class="flag-icons-country"><img src="assets/img/206606.png" alt=""/></span> India   </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link country-choose-btn choose-country-btn3 text-dark dedicated-button-click" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><span class="flag-icons-country"><img src="assets/img/412828.png" alt=""/></span> USA</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link country-choose-btn choose-country-btn2 text-dark dedicated-button-click" id="pills-country-tab" data-bs-toggle="pill" data-bs-target="#pills-country" type="button" role="tab" aria-controls="pills-country" aria-selected="false"><span class="flag-icons-country"><img src="assets/img/2151356.png" alt=""/></span> Netherlands</button>
                      </li>
                    </ul>
                    <div class="tab-content pt-4" id="pills-tabContent">
                        <!--India-->
                      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                         <div class="table-responsive responsive-specs-table">
                  <table class="table mb-2">
                      <thead>
                        <tr class="country-server-specs-head">
                          <th scope="col" style="color: #6b46f2;width: 24%;text-align: start;">Server Name</th>
                          <th scope="col" style="color: #292929;width: 12%;" class="wid-space">CPU</th>
                          <th scope="col" style="color: #292929;width: 12%;">Memory</th>
                          <th scope="col" style="color: #292929;width: 12%;">Storage</th>
                          <th scope="col" style="color: #292929;width: 12%;">Bandwidth</th>
                          <th scope="col" style="color: #292929;width: 12%;">Price</th>
                          <th scope="col" style="color: #292929;width: 12%;">Get Started</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">E3-1230v3-3.30Ghz</td>
                          <td>4</td>
                          <td>32GB DDR4</td>
                          <td>480GB SSD</td>
                          <td>10 TB/1Gbps</td>
                          <td class="indian-host-price">₹4999/mo<p class="actual-prize m-0">₹6665/Mo</p></td>
                          <td class="usa-host-price">$60.00/mo<p class="actual-prize m-0">$79.97/Mo</p></td>

                          <td><a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=354" class="link-color-black" target="_blank"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">E3-123x v5/v6-3.2Ghz</td>
                          <td>4</td>
                          <td>32GB DDR4</td>
                          <td>480GB SSD</td>
                          <td>10 TB/1Gbps</td>
                          <td class="indian-host-price">₹6999/mo<p class="actual-prize m-0">₹9332/Mo</p></td>
                          <td class="usa-host-price">$84.01/mo<p class="actual-prize m-0">$111.98/Mo</p></td>
                          <td><a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=346" class="link-color-black" target="_blank"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">E-2136-3.30Ghz</td>
                          <td>6</td>
                          <td>32GB DDR4</td>
                          <td>480GB SSD</td>
                          <td>10 TB/1Gbps</td>
                          
                          <td class="indian-host-price">₹7999/mo<p class="actual-prize m-0">₹10666/Mo</p></td>
                          <td class="usa-host-price">$96.01/mo<p class="actual-prize m-0">$127.98/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=355" class="link-color-black" target="_blank"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">E-2286G - HEXA CORE-4.0Ghz</td>
                          <td>6</td>
                          <td>32GB DDR4</td>
                          <td>480GB SSD</td>
                          <td>10 TB/1Gbps</td>
                          
                          <td class="indian-host-price">₹9999/mo<p class="actual-prize m-0">₹13332/Mo</p></td>
                          <td class="usa-host-price">$120.01/mo<p class="actual-prize m-0">₹159.97/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=348" class="link-color-black" target="_blank"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">E5-2667v4-3.2Ghz</td>
                          <td>8</td>
                          <td>32GB DDR4</td>
                          <td>960GB SSD</td>
                          <td>10 TB/1Gbps</td>

                          <td class="indian-host-price">₹11999/mo<p class="actual-prize m-0">₹15999/Mo</p></td>
                          <td class="usa-host-price">$144.02/mo<p class="actual-prize m-0">$191.98/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=347" class="link-color-black" target="_blank"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">Dual E5-2680v4-3.2Ghz</td>
                          <td>28</td>
                          <td>128GB DDR4</td>
                          <td>960GB SSD</td>
                          <td>10 TB/1Gbps</td>

                          <td class="indian-host-price">₹15999/mo<p class="actual-prize m-0">₹21332/Mo</p></td>
                          <td class="usa-host-price">$192.03/mo<p class="actual-prize m-0">$255.97/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=349" class="link-color-black" target="_blank"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">Dual E5-2680v4-3.2Ghz</td>
                          <td>28</td>
                          <td>256GB DDR4</td>
                          <td>1.92TB SSD</td>
                          <td>10 TB/1Gbps</td>

                           <td class="indian-host-price">₹18999/mo<p class="actual-prize m-0">₹25332/Mo</p></td>
                          <td class="usa-host-price">$228.03/mo<p class="actual-prize m-0">$303.96/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=350" class="link-color-black" target="_blank"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">AMD EPYC 7313-3.0Ghz</td>
                          <td>16</td>
                          <td>64GB DDR4</td>
                          <td>1.92TB SSD</td>
                          <td>10 TB/1Gbps</td>
                          
                           <td class="indian-host-price">₹24999/mo<p class="actual-prize m-0">₹33332/Mo</p></td>
                          <td class="usa-host-price">$300.05/mo<p class="actual-prize m-0">$399.96/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=351" class="link-color-black" target="_blank"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">AMD EPYC 7543-2.8Ghz</td>
                          <td>32</td>
                          <td>128GB DDR4</td>
                          <td>1.92TB SSD</td>
                          <td>10 TB/1Gbps</td>

                           <td class="indian-host-price">₹27999/mo<p class="actual-prize m-0">₹33332/Mo</p></td>
                          <td class="usa-host-price">$336.06/mo<p class="actual-prize m-0">$447.96/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=352" class="link-color-black" target="_blank"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">2X AMD EPYC 7543-2.8Ghz</td>
                          <td>64</td>
                          <td>256GB DDR4</td>
                          <td>1.92TB SSD</td>
                          <td>10 TB/1Gbps</td>

                           <td class="indian-host-price">₹37999/mo<p class="actual-prize m-0">₹50665/Mo</p></td>
                          <td class="usa-host-price">$456.08/mo<p class="actual-prize m-0">$607.94/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=353" class="link-color-black" target="_blank"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>

                      </tbody>
                    </table>
              </div>
                      </div>
                      <!--USA-->
                      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="table-responsive responsive-specs-table">
                  <table class="table mb-2">
                      <thead>
                        <tr class="country-server-specs-head">
                          <th scope="col" style="color: #6b46f2;width: 24%;text-align: start;">Server Name</th>
                          <th scope="col" class="wid-space">CPU</th>
                          <th scope="col">Memory</th>
                          <th scope="col">Storage</th>
                          <th scope="col">Bandwidth</th>
                          <th scope="col">Price</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">Intel Quad-Core Xeon E-2274G</td>
                          <td>4 x 4.0GHz</td>
                          <td>32GB DDR4</td>
                          <td>2x480GB SSD</td>
                          <td>10 TB</td>

                           <td class="indian-host-price">₹10,694/mo<p class="actual-prize m-0">₹14259/Mo</p></td>
                          <td class="usa-host-price">$134.0/mo<p class="actual-prize m-0">$171.10/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/index.php?rp=/store/dedicated-servers/xeon-e3-1230-intel-quad-core-xeon-e3-1230-2" class="link-color-black" target="_blank"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">Intel Hexa-Core Xeon E-2286G</td>
                          <td>6 x 4.0GHz</td>
                          <td>64GB DDR4</td>
                          <td>2x480GB SSD</td>
                          <td>10 TB</td>

                          <td class="indian-host-price">₹14,000/mo<p class="actual-prize m-0">₹18667/Mo</p></td>
                          <td class="usa-host-price">$170.0/mo<p class="actual-prize m-0">$223.99/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/index.php?rp=/store/dedicated-servers/xeon-e3-1230-intel-quad-core-xeon-e3-1230-3" class="link-color-black" target="_blank"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">Intel Octa-Core Xeon E-2278G</td>
                          <td>8 x 3.40GHz</td>
                          <td>64GB DDR4</td>
                          <td>2x480 GB SSD</td>
                          <td>10 TB</td>

                          <td class="indian-host-price">₹14,250/mo<p class="actual-prize m-0">₹19000/Mo</p></td>
                          <td class="usa-host-price">$173.0/mo<p class="actual-prize m-0">$227.9/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/index.php?rp=/store/dedicated-servers/xeon-e3-1230-intel-quad-core-xeon-e3-1230-4" class="link-color-black" target="_blank"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">2x Intel Deca-Core Xeon E5-2630v4</td>
                          <td>2x 10 cores - 2.20GHz</td>
                          <td>64GB DDR4</td>
                          <td>4x2TB SATA</td>
                          <td>10 TB</td>

                          <td class="indian-host-price">₹22,300/mo<p class="actual-prize m-0">₹29733/Mo</p></td>
                         <td class="usa-host-price">$246.0/mo<p class="actual-prize m-0">$356.77/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/index.php?rp=/store/dedicated-servers/xeon-e3-1230-intel-quad-core-xeon-e3-1230-6" class="link-color-black" target="_blank"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">AMD 16-Core EPYC 7302P</td>
                          <td>16 Cores 3.06GHz</td>
                          <td>64GB DDR4</td>
                          <td>2x480GB SSD</td>
                          <td>10 TB</td>

                          <td class="indian-host-price">₹22,900/mo<p class="actual-prize m-0">₹30533/Mo</p></td>
                          <td class="usa-host-price">$279.0/mo<p class="actual-prize m-0">$366.37/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/index.php?rp=/store/dedicated-servers/xeon-e3-1230-intel-quad-core-xeon-e3-1230-5" class="link-color-black" target="_blank"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">2x Intel 12-Core Xeon Silver 4214</td>
                          <td>2x 12 cores - 2.20GHz</td>
                          <td>128GB DDR4</td>
                          <td>2x480GB SSD</td>
                          <td>10 TB</td>

                          <td class="indian-host-price">₹34,600/mo<p class="actual-prize m-0">₹46133/Mo</p></td>
                          <td class="usa-host-price">$420.0/mo<p class="actual-prize m-0">$553.56/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/index.php?rp=/store/dedicated-servers/xeon-e3-1230-intel-quad-core-xeon-e3-1230-8" class="link-color-black" target="_blank"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">2x Intel 16-Core Xeon Gold 5218</td>
                          <td>2x 16 cores - 2.30GHz</td>
                          <td>128GB DDR4</td>
                          <td>2x960GB SSD</td>
                          <td>10 TB</td>

                          <td class="indian-host-price">₹41,700/mo<p class="actual-prize m-0">₹55600/Mo</p></td>
                          <td class="usa-host-price">$507.0/mo<p class="actual-prize m-0">$667.16/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/index.php?rp=/store/dedicated-servers/intel-quad-core-xeon-e5-1620v4" class="link-color-black" target="_blank"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">2x AMD 24-Core EPYC 7402</td>
                          <td>2x 24 cores - 2.80GHz</td>
                          <td>128GB DDR4</td>
                          <td>2x960GB SSD</td>
                          <td>10 TB</td>

                          <td class="indian-host-price">₹47,500/mo<p class="actual-prize m-0">₹63333/Mo</p></td>
                          <td class="usa-host-price">$577.0/mo<p class="actual-prize m-0">$759.95/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/index.php?rp=/store/dedicated-servers/intel-quad-core-xeon-e5-1620v4-1" class="link-color-black" target="_blank"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>

                      </tbody>
                    </table>
            </div>
                      </div>
                      <!--Netherlands-->
                      <div class="tab-pane fade" id="pills-country" role="tabpanel" aria-labelledby="pills-country-tab">
                     <div class="table-responsive responsive-specs-table">
  <table class="table mb-2">
                      <thead>
                        <tr class="country-server-specs-head">
                          <th scope="col" style="color: #6b46f2;width: 24%;text-align: start;">Server Name</th>
                          <th scope="col" class="wid-space">CPU</th>
                          <th scope="col">Memory</th>
                          <th scope="col">Storage</th>
                          <th scope="col">Bandwidth</th>
                          <th scope="col">Price</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">E3-1230v3-3.30Ghz</td>
                          <td>4</td>
                          <td>32GB DDR4</td>
                          <td>480GB SSD</td>
                          <td>10 TB/1Gbps</td>
                          <td>₹4999/mo<p class="actual-prize m-0">₹6665/Mo</p></td>
                          <td><button class="buy-now-btn">Buy Now</button></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">E3-123x v5/v6-3.2Ghz</td>
                          <td>4</td>
                          <td>32GB DDR4</td>
                          <td>480GB SSD</td>
                          <td>10 TB/1Gbps</td>
                          <td>₹6999/mo<p class="actual-prize m-0">₹9332/Mo</p></td>
                          <td><button class="buy-now-btn">Buy Now</button></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">E-2136-3.30Ghz</td>
                          <td>6</td>
                          <td>32GB DDR4</td>
                          <td>480GB SSD</td>
                          <td>10 TB/1Gbps</td>
                          <td>₹7999/mo<p class="actual-prize m-0">₹10666/Mo</p></td>
                          <td><button class="buy-now-btn">Buy Now</button></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">E-2286G - HEXA CORE-4.0Ghz</td>
                          <td>6</td>
                          <td>32GB DDR4</td>
                          <td>480GB SSD</td>
                          <td>10 TB/1Gbps</td>
                          <td>₹9999/mo<p class="actual-prize m-0">₹13332/Mo</p></td>
                          <td><button class="buy-now-btn">Buy Now</button></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">E5-2667v4-3.2Ghz</td>
                          <td>8</td>
                          <td>32GB DDR4</td>
                          <td>960GB SSD</td>
                          <td>10 TB/1Gbps</td>
                          <td>₹11999/mo<p class="actual-prize m-0">₹15999/Mo</p></td>
                          <td><button class="buy-now-btn">Buy Now</button></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">Dual E5-2680v4-3.2Ghz</td>
                          <td>28</td>
                          <td>128GB DDR4</td>
                          <td>960GB SSD</td>
                          <td>10 TB/1Gbps</td>
                          <td>₹15999/mo<p class="actual-prize m-0">₹21332/Mo</p></td>
                          <td><button class="buy-now-btn">Buy Now</button></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">Dual E5-2680v4-3.2Ghz</td>
                          <td>28</td>
                          <td>256GB DDR4</td>
                          <td>1.92TB SSD</td>
                          <td>10 TB/1Gbps</td>
                          <td>₹18999/mo<p class="actual-prize m-0">₹25332/Mo</p></td>
                          <td><button class="buy-now-btn">Buy Now</button></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">AMD EPYC 7313-3.0Ghz</td>
                          <td>16</td>
                          <td>64GB DDR4</td>
                          <td>1.92TB SSD</td>
                          <td>10 TB/1Gbps</td>
                          <td>₹24999/mo<p class="actual-prize m-0">₹33332/Mo</p></td>
                          <td><button class="buy-now-btn">Buy Now</button></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">2X AMD EPYC 7543-2.8Ghz</td>
                          <td>64</td>
                          <td>256GB DDR4</td>
                          <td>1.92TB SSD</td>
                          <td>10 TB/1Gbps</td>
                          <td>₹37999/mo<p class="actual-prize m-0">₹50665/Mo</p></td>
                          <td><button class="buy-now-btn">Buy Now</button></td>
                        </tr>

                      </tbody>
                    </table>
            </div>
                      </div>
                    </div>
            </div>
 
        </div>
    </section>
    
    
      <!--Feature in Market-->
 
    <section class="awesome-youstable affiliate-two affiliate-four">
      <div class="container">
            <div class="right-cols-awesome">
              <div class="text-center">
                <h2 class="ay_heading">Why Choose YouStable’s Dedicated Server?</span></h2>
                <p class="server-title title_sides_width pb-3">We offer a lot more than what you are expecting!</p>
              </div>
             <div class="why-choose">
                 <div class="row text-left">
                      <div class="col-md-4 cols">
                        <div class="feature_cols_dedicated">
                           <img src="assets/img/call-center-copy-2.png" alt="ssd-storage">
                           <div class="border-box">
                           <h5 class="ay-heading">Technical Support</h5>
                           <p class="ay-title dedicate-content">YouStable’s dedicated team is ready to solve <br>any problem before or after it occurs with its <br>premium round-the-clock technical support.</p>
                        </div>
                        </div>
                      </div>
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_dedicated">
                           <img src="assets/img/CONTROL-1.png" alt="ssl-certificate">
                         <div class="border-box">
                           <h5 class="ay-heading">Total Control</h5>
                           <p class="ay-title dedicate-content">You can control your whole hosting infrastructure <br>from a single interface through YouStable’s simple<br> client portal and API. It’s easy!</p>
                      </div>
                        </div>
                      </div>
                      <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_dedicated">
                           <img src="assets/img/115803-1.png" alt="speed-web-server">
                           <div class="border-box">
                           <h5 class="ay-heading">Monitoring</h5>
                           <p class="ay-title dedicate-content">Our team of Technical hosting professionals will <br>seamlessly transfer all your websites to the new<br> server at a date & time that aligns with your<br> preferences, completely free of cost.</p>
                        </div>
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
                            <img class="customer-support" src="assets/img/sharedhsotingimg/customer-support.png" alt="customer-support">
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="">
                            <h2 class="ay_heading text-start">24/7 Friendly<br>Customer Support</h2>
                            <p class="cus-support-title">YouStable knows the importance of prioritising customers and their needs. In order to maintain integrity and offer the customers the best of services, our team of professionals is always up and running to provide assistance and solve your queries in no time!</p>
                            <div class="d-flex justify-content-between blocks">
                            <div class="mr-l"> <a href="https://wa.me/+919616782253" data-toggle="tooltip" data-placement="top" target="_blank" data-bs-original-title="Chat On Whatsapp" class="phone-num server-title p-0 cus-sup-num contact-hosting"><img src="assets/img/phone-call.png">+919616782253</a></div> 
                            <div><a href="javascript:void(Tawk_API.toggle())" data-toggle="tooltip" data-placement="top" target="_blank" data-bs-original-title="Click to Chat" class="livechat server-title p-0 cus-sup-num contact-hosting"><img src="assets/img/live-chat.png">Live Chat with Experts</a></div>
                            </div>
                        </div>

                     </div>
                 </div>
             </div>
         </div>
    </section>
    
      <!--Operating-systems-->
    <section class="operating-sytems">
        <div class="container">
            <div class="text-center">
                <h2 class="Banner-Heading">Maximum Operating System Support!</h2>
                <p class="operating-title-width"> YouStable offers custom operating system installation support! No matter which OS you need in our<br class="remove-mobile"> CyberPanel VPS hosting server, YouStable has got it all for you.</p>
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
            
              <!-- <div class="text-center mt-5 choose-plan-now">-->
              <!--  <button class="btn-yellow   get-tarted-table get-tarted-table-one" type="submit">Choose Plan Now</button>-->
              <!--</div>-->
               
        </div>
    </section>
    
      <!--Operating-systems-->
      
    <section class="map-section about-maps">
        <div class="container">
            <div class="text-center">
                <h2 class="Banner-Heading">Lowest Latency Guarantee From Every Corner</h2>
                <p class="operating-title-width">Our State-of-the-art infrastructure defines success, with multiple data centre<br> locations that offer top-notch hosting services.</p>
                <div class="row">
                    <div class="col">
                        <img src="assets/img/dedicatedhsotingimg/map-.png" alt="open cart" class="deploy-app-imgs">
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
    
    
     <!--(What our customer says) -->
    <section class="customer-review dedicated-server-purple">
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
    
 <!--(What our customer says) -->
    <section class="customer-review">
                  <div class="container">
                    <div class="available">
                      <div class="row"> 
                        <div class="col-md-3 available-cols">    
                        <ul class="available-points">
         
                      
                            <li class="indian-host-price">BitNinja Server Security <span class="purple-bg">₹1220</span></li>
                            <li class="usa-host-price">BitNinja Server Security <span class="purple-bg">$14.9</span></li>
                            <li class="indian-host-price">Blesta (unbranded) <span class="purple-bg">₹400</span></li>
                            <li class="usa-host-price">Blesta (unbranded) <span class="purple-bg">$5</span></li>
                            <li class="indian-host-price">SEO <br>  <span class="purple-bg">₹800</span></li>
                            <li class="usa-host-price">SEO <br>  <span class="purple-bg">$9.9</span></li>
                            </ul>
                        </div>
                        
                            <div class="col-md-3 available-cols">    
                        <ul class="available-points">
                            <li class="indian-host-price">Performance Boost <span class="purple-bg">₹4000</span></li>
                            <li class="usa-host-price">Performance Boost <span class="purple-bg">$49</span></li>
                            <li class="indian-host-price">VPS Cloud Backup <span class="purple-bg">₹1600</span></li>
                            <li class="usa-host-price">VPS Cloud Backup <span class="purple-bg">$19.9</span></li>
                            <li class="indian-host-price">Litespeed 2-CPU <span class="purple-bg">₹400</span></li>
                            <li class="usa-host-price">Litespeed 2-CPU <span class="purple-bg">$5</span></li>
                            </ul>
                        </div>
                        
                            <div class="col-md-6 available-cols">    
                         <h2>Available Add-Ons!</h2>
                         <p class="server-title server-title-width my-0 enhance">Enhance your server with these software addons and upgrades.

All upgrades and addons can be added or removed from by simply emailing our sales team. No downtime is involved during any upgrade process. The only requirement is the addon must remain on your account for the minimum of 30 days.</p>
</div>
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
                Q 1. What is Dedicated Server Hosting?
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Dedicated Server Hosting implies when the whole (physical) server is offered and owned by the business owner who bought the hosting. The owner has full control over the server and can customize as well as scale their server as per their needs and make the best out of it, with full self-choice and privacy.</div>
            </div>
          </div>
           
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Q 2. What can you do with a Dedicated Server?
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Basically with dedicated servers you can ensure that your website has unhindered performance on the internet, all thanks to the unlimited resources you get to manage your website files and traffic.</div>
            </div>
          </div>
          
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
               Q 3. What are the reasons for choosing a Dedicated Server?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">One of the best aspects of a dedicated server is that you get an amazing level of resources to maintain and maintain your website. Such as dedicated server comes with unlimited resources that allows you to attract as much traffic as you want.</div>
            </div>
          </div>
      
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingFour">
              <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
               Q 4. Do I need a Dedicated Server for my website?
              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Well this totally depends upon your website, future plans, needs and requirements . For example if your website has really high traffic and high content and you want to scale it more than dedicated servers will be the best pick for you.</div>
            </div>
          </div>
       
          <div class="accordion-item faq-items">
            <h2 class="accordion-header" id="flush-headingFive">
              <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFour">
                Q 5. What is the difference between VPS and a Dedicated Server?
              </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">The basic difference between a VPS and a dedicated server is that VPS servers have little limited resources but dedicated servers have unlimited resources which makes your website lightning fast on the internet.</div>
            </div>
          </div>
        </div>
      </div>
         </section><br><br>

  <?php include ('inc/footer.php')?>