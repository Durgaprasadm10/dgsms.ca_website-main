<?php
$language = (isset($_GET["lang"]) && (($_GET["lang"] == "en") || ($_GET["lang"] == "fr") )) ? $_GET["lang"] : "";
if($language == "fr"){
	header("Location: french/");
}

$adPublisherUniqueID = filter_input(INPUT_GET, "adp");
if ($adPublisherUniqueID) {
	$siteNameForAds = "dgdox";
	require_once "../dg_ads_analytics/update_ads_analytics.php";
}
?>
<!DOCTYPE html>
<html lang="en">
    

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>DGDOX Generate, Archive Declarations Air, Sea & Road, Web based</title>
               <?php //header("X-XSS-Protection: 0"); ?>  
        <meta name="description" content="Generate & Archive compliant DG/HAZMAT declarations for Air, Sea, Road transport via web interface. Profiles DG/HAZMAT Products, IMDG, IATA, DOT 49 CFR. ADR-fall 2016">

        <meta name="keywords" content="Free, web, Placard, ADR, SDS, TDG, label, Packaging, MSDS, IATA, Labels, Trainer, Chemical, Consultation, ICAO, Declaration, EGR, hazmat, inspector, Consult Certified, WHMIS, Regulations, Safety Data Sheet, labelling, IMDG, 49 CFR, Document, French, Spanish, Ideabytes, DGSMS,1 888-409-8057, +91-40-6555-5959, 1-613-800-7368">     
        <?php
		include "header_nav.php";
		$pageId = '1460';
		?>
		 <!-- About Section -->
            <section class="page-section">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt align-left mb-sm-40">
                    <img src="images/dgdox-logo.png" width="266" height="58" alt="DGDOX – A solution to generate Declarations for Air,. Sea and Road transportation, in compliance with ADR, TDG, IATA, IMDG, DOT – 49 CFR"/> </h2>
                    
                    <div class="section-text mb-30 mb-sm-20">
                        <div class="row">
                                                    
                            <div class="col-md-12  mb-xs-30">
                            <img src="images/dgdox-banner.jpg" width="1100" height="400" class="marbot" alt="Free Web based DGDOX, Quick, Accurate Declaration generator compliant to ADR, TDG, IMDG, IATA, DOT 49 CFR"/>

<p>
<h1 class="section-title font-alt align-left mb-sm-10">Quick, Accurate, Compliant</h1>

<p>Generating a declaration has never been so easy. DGDOX™ will help your organization issue HAZMAT declarations that are compliant with IATA, IMDG, TDG, DOT 49CFR.</p>

<p>DGDOX™ is grounded in SaaS architecture ad interconnects with DGSMS<sup>&reg;</sup> and DGVFF™ -- making data transfer electronic and efficient. </p>

<p>Every company gets their private portal. Your privacy is very important to us!</p>

<p>The core of the solution in creating a product profile by a senior member of a shipping department. Once this is done, anyone can issue a declaration for a given set of products, and it will always be correct. For those who do not want to create product profiles, use the Quick Form which lets you enter items on the fly. </p>

<p>DGDOX™ is available in a multitude of interface languages – English, Spanish, French, Chinese, Polish, Hindi and Bengali. Additional languages available upon request.</p>

<p>DGDOX™ is perfect for product planning, it allows product managers determine the best package size to fit all modes of transport. Given the need for instant gratification, Air Shipping is important and if package sizes are not designed correctly and packaging is not the right form factor, DGDOX™ helps to use all the Special Provisions, Limited Quantities (LQ), Excepted Quantities (EQ) definitions to give a company the maximum benefits permissible by the regulations.</p>

<p>DGDOX™ generates documents quickly and accurately. It utilizes Qr codes to transfer data between systems without the need for expensive EDI system. Ideabytes also provides scanning software on mobile devices that can transfer the data to an application or a web portal directly. More about this on ScioTy™ tab.</p>

 <h2 class="section-title font-alt align-left mt-10 mb-sm-40">
                   Features </h2>

 <ul>


<li> IATA, IMDG, TDG and DOT 49 CFR standards are supported (ADR will be released Fall 2020)</li>

<li>Works on any standard web browser, and device that supports a web browser</li>

<li>Simple to complex workflows are handled by the solution 3PL’s, packers and carriers can update sections in the documentation as the package is prepared for shipment</li>

<li>Multi-lingual interfaces</li>

<li>Transfer of Data to DGSMS<sup>&reg;</sup> and DGVFF™</li>

<li>Online tutorial</li>
</ul>
										
                          </div>
      
                     
                            
                           
                            
                            
                            
                      </div>
                    </div>
                    
                </div>
               
                 <div class="hs-line-4 align-center mt-10">
                               Call for a free trial | <a rel="canonical" href="contact.php">Contact Us</a> </div>

                              <div class="hs-line-3">
                                <ul class="nav tpl-alt-tabs  ">
                        
                        <li>
                                
                               CANADA<br>
								+1 613-355-0411
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
                        <li> <a rel="canonical" href="http://www.ideabytes.com" target="_blank"><img src="images/ideabytes.png" width="150" height="51" alt="Ideabytes logo Web/mobile Solutions Dangerous Goods/HAZMAT Air, Road Sea Transport (TDG, IATA, IMDG, 49-CFR, ADR)"/></a> </li>
                    </ul>
                            </div>
            </section>
            
            <!-- End About Section -->
            
            <!-- Divider -->
            <hr class="mt-0 mb-0 "/>
            <!-- End Divider -->
			<?php
			include "footer.php";
			?>
