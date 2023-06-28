<?php
$language = (isset($_GET["lang"]) && (($_GET["lang"] == "en") || ($_GET["lang"] == "fr") )) ? $_GET["lang"] : "";
if($language == "fr"){
	header("Location: french/");
}

$adPublisherUniqueID = filter_input(INPUT_GET, "adp");
if ($adPublisherUniqueID) {
	$siteNameForAds = "dgvff";
	require_once "../dg_ads_analytics/update_ads_analytics.php";
}
?>
<!DOCTYPE html>
<html lang="en">
    

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>DGVFF Segregate and Consolidate IMDG Sea Freight Fast, Accurate</title>
          
        <meta name="description" content="DGVFF – Muti-location Web tool segregates and consolidates loads HAZMAT/DG Quickly, Accurately per IMDG. Calculates Placarding. IMDG compliant. Carriers accept Manifest">

        <meta name="keywords" content="EMS, Placard, Container, Dangerous, carrier, label, Labels, Segregation, Chemical, hazmat, Consult, 3PL, shipper, Stevedore, Regulations, labeling, Stowage, French, Spanish, Ideabytes, DGSMS,1 888-409-8057, +91-40-6555-5959, 1-613-800-7368">     
       
        <?php
		include "header_nav.php";
		$pageId = 1477;
		?>
		   <!-- About Section -->
            <section class="dgvffpage-section">
                <div class="container relative">

                    
                                       
                    <div class="section-text mb-30 mb-sm-20">
                        <div class="row">
                               <div class="col-md-3 mt-10 mb-xs-30"> <h2 class="section-title font-alt align-left mt-10 mb-sm-40">

                    <img src="images/dgvff-logo.png" width="250" height="49" class="dgvfflogobg" alt="DGVFF – application to segregate a LTC load for ocean going freight. Calculates placarding required for Container. Validates LQ and EQ limits for the goods. Quick – segregate 100’s of DG loads in seconds. Ideal for freight forwarders, 3PL’s, Carriers and Stevedores."/> </h2>
</div>                    
                            <div class="col-md-9 mb-xs-30">
                            <h1 class="white-hs-line-2 mt-10 ">Don’t Miss The Boat!</h1>
<h1 class="white-hs-line-3">IMDG Segregation in seconds<br>

100% Acceptance by carrier</h1></div>

							 <div class="col-md-4  mt-30 mb-xs-30">
                            
                              <img src="images/container1.jpg" width="400" height="351" alt="container1"/> </div>
                              
                           
                            
                             <div class="col-md-4  mt-30 mb-xs-30">
                            
                              <img src="images/container2.jpg" width="400" height="351" alt="container2" /> </div>
                              
                              
							

<div class="col-md-4  mt-30 mb-xs-30">
                            <img src="images/container3.jpg" width="400" height="351" alt= "container3" /> </div>
                            
                            
                          <div class="col-md-6 align-lefr mt-10  mb-xs-30">
	                          
                             
                               
                                <p class="whitetext">
                                • Optimum container loading with segreation<br>
                                • Pay as you go or Annual License<br>
                                • No customer info required, only port of loading and discharge<br>
                                • Validates single bill of lading<br>
                                
                                
                                </p>

									
                          </div>
                            <div class="col-md-6 align-right mt-10  mb-xs-30">
	                        <p class="whitetext">

                                • For Shippers, Stevedores, 3PL’s, Packers and Carriers<br>
                                • Quick and efficient validation of containers to IMDG Segregation<br>
                                • Validates, segregates, LCL Loads<br>
                                • Uses ScioTy™ scanner to transfer DG info from DGDOX™, DGSMS<sup>&reg;</sup><br>
                                </p>
                                                                        
                          </div>
                          </div>
                          <div class="row">
                           <div class="col-md-3 mb-xs-30"></div>
                          
                          <div class="col-md-12 mt-10 mb-xs-30 align-center">
                          <h1 class="white-hs-line-3"><strong>Verify 50 HAZMAT Loads in a Container in 17 Seconds!</strong></h1>
	                        
                               <span class="whitetext">
Call us for free trial | <a rel="canonical" href="contact.php" class="whitecolor">Contact Us</a> </span><div class="hs-line-3">
                                <ul class="nav tpl-alt-tabsw">
                        
                        <li>
                                
                               CANADA<br>
								1-613-800-7368
                        </li>
                        <li>
                                
                                USA (Toll Free)<br>
								+1 888-409-8057
                        </li>
                        <li>
                               
                               INDIA<br>
								+91-888-583-5959
                        </li>
                        <li>                                
                               
                                TOLL FREE<br>
								+1 888-409-8057
                                
                        </li>
                        <li> <a rel="canonical" href="http://www.ideabytes.com" target="_blank"><img src="images/ideabytes-white.png" width="150" height="51" alt="Ideabytes logo Web/mobile Solutions Dangerous Goods/HAZMAT Air, Road Sea Transport (TDG, IATA, IMDG, 49-CFR, ADR)"/></a> </li>
                        
                    </ul>
                            </div>



								
                                										
                          </div>
                            
                           </div>
                            
                            
                            
                        
                    </div>
                    
                </div>
               
                 
            </section>
            <!-- End About Section -->
            
            <section class="page-section">
                <div class="container relative">
                    
                   <h1 class="section-title font-alt align-left mt-10 mb-sm-40">
                    DGVFF<sup>&trade;</sup></h1>
                    
                    <div class="section-text mb-30 mb-sm-20">
                        <div class="row">
                                                    
                            <div class="col-md-12  mb-xs-30">
	                            
                                <p>The safety of a ship at sea is of the utmost importance, which means that the IMDG regulations for shipping HAZMAT need to be followed meticulously. If it were only one HAZMAT item in the container it would be a trivial task, however in reality, it takes a consolidation of loads to fill a 20’, 40’ or 60’ container. </p>

								<p>This means at the dock one needs to make sure HAZMAT loads that can interact and cause an explosion or a toxic environment, need to be segregated. One can try putting the same class of goods on one container but that really does not work. For example, Class 8 corrosives have alkalis and acids - and these must be kept apart in the event of a leakage, a fire, explosion or release of a toxic gas is possible. </p>
                                
                                <p>DGVFF<sup>&trade;</sup> has been designed to ensure that all loads given to it will be segregated into the least possible number of containers. Once the HAZMAT has been segregated, in then assigns Non-HAZMAT loads to maximize the containers capacity. Here again, it ensures that any Non-HAZMAT goods that could be consumed by humans or animals are kept away from poisonous HAZMAT loads.</p>
                               
<p>Most HAZMAT material are consolidated at a port of loading. They generally travel by road transport companies using DGSMS<sup>&reg;</sup> or DGDOX™ can transfer the data directly to a 3PL or carrier electronic. Result: Guaranteed compliance. Guaranteed acceptance and place your cargo ahead of those that don’t</p>

<p>DGVFF<sup>&trade;</sup> is fast if one had to process a 100 HAZMAT loads and segregate them manually. It would take a few man days to achieve the task. With DGVFF<sup>&trade;</sup> it can be achieved in less than 2 hours which includes the manual keying in of data. When data is transferred via ScioTy scanners or electronically for DGSMS<sup>&reg;</sup> and DGDOX™ - the task is achieved in under 5 minutes. </p>

<p>For carriers, 3PL’s., shippers – it means getting the Cargo accepted quickly and leap-frogging those that don’t use the system. More important – less time, means lower cost, which implies greater profitability and an edge over the competition.</p>

<p>DGVFF<sup>&trade;</sup> is affordable and has a Pay as you Go option – ideal for small to medium businesses.</p>

<p>Annual licences for large companies are also available.</p>

<p>Seeing is believing. Try it for free.</p>

<p>Qualified trainers can use it at no charge in their training programms</p>	
                                
                                	                 										
                            </div>
                            
                           
                            
                            
                            
                        </div>
                    </div>
                    
                </div>
               
                 
            </section>
            
            <!-- Divider -->
            <hr class="mt-0 mb-0 "/>
            <!-- End Divider -->
            
			<?php
			include "footer.php";
			?>