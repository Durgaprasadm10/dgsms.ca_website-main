<?php
$language = (isset($_GET["lang"]) && (($_GET["lang"] == "en") || ($_GET["lang"] == "fr") )) ? $_GET["lang"] : "";
if($language == "en"){
	header("Location: ../");
}

$adPublisherUniqueID = filter_input(INPUT_GET, "adp");
if ($adPublisherUniqueID) {
	$siteNameForAds = "dgdox";
	require_once "../../dg_ads_analytics/update_ads_analytics.php";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>DGDOX Créer, Archiver les Déclarations Air, Mer & Route, Site Web</title>
               
        <meta name="description" content="Crée & Archive déclarations conformes DG/HAZMAT par voie de Mer, Air, Route via interface web. Profils des produits DG/HAZMAT. TDG, IMDG, IAT, DOT 49 CFR. ADR-Automne 2016">

        <meta name="keywords" content="Gratuit, web, Plaque-étiquette, ADR, SDS, TDG, Étiqueter, Emballage, MSDS, IATA, Étiquettes, Formateur, Chimique, Consultation, ICAO, Déclaration, EGR, hazmat, inspecteur, Consulter
Certifié, WHMIS, Règlements, Fiche de Sécurité, étiquetage, IMDG, 49 CFR, Document, Français, Espagnol, Ideabytes, DGSMS,1 888-409-8057, +91-40-6555-5959, 1-613-800-7368">
 <?php
		include "header_nav.php";
		$pageId = '1484';
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

<p>Le fait de générer une déclaration n'a jamais été si facile. Disponible sans frais avec le parrainage annoncé pour la première année, DGDOX va aider votre organisation à émettre des déclarations HAZMAT qui sont conformes à l'IATA, IMDG, TMD, DOT 49 CFR et de l'ADR (ADR seront disponibles  à l'automne 2016).</p>

<p>Faisant partie dans une logique de suite logicielle, DGDOX™ est fondé sur l'architecture SaaS et d’interconnexions avec DGSMS™ et DGVFF™ – rendant les données de transfert par voie électronique et efficace. Chaque entreprise obtient leur portail privé que nous pouvons accéder seulement avec autorisation.  Votre confidentialité est extrêmement importante pour nous</p>

<p>Le point central de la solution est la création d’un profil par un membre important d’un service d'expédition. Une fois cela fait, n’importe qui peut publier une déclaration pour un ensemble de produits determinés, et elle sera toujours correcte! Pour ceux qui ne veulent pas créer un profil, utilisez le Quick Form qui vous permet de saisir des articles à la volée.</p>

<p>DGDOX™ est disponible dans une multitude de langues d’interface - Anglais, Espagnol, Français, Chinois, Polonais, Hindi et Bengali, pour n’en nommer que quelques-uns. Bien sûr, il est facile d’y ajouter des langues, il suffit de nous demander et elle seront ajoutées dans une semaine.</p>

<p>DGDOX™ est parfait pour la planification des produits; il permet aux directeurs de produits de déterminer la meilleure taille de l'emballage pour répondre à tous les modes de transport. Compte tenu de la nécessité d'une satisfaction immédiate, Transport Aérien est important, et si les formats d'emballages ne sont pas conçus correctement et que les emballages n'ont pas le facteur de forme juste, ils seront tout simplement pas permis d'être expediés. DGDOX™ aide à utiliser toutes les définitions concernant les Special Provisions, Limited Quantities, Excepted Quantities pour donner une entreprise les avantages maximaux admissibles par les règlements. Si vous avez encore des questions, utilisez le DGSOS ™ notre service de deuxième opinion pour aider à mettre au point  le bon emballage.</p>

<p>DGDGOX™ utilise des Codes de Qr pour transférer des données entre les systèmes sans le besoin du système coûteux d'EDI. Ideabytes fournit également le logiciel pour scanners portables qui peuvent transférer les données vers une application ou un portail Web directement. Consultez ScioTy™ Tab pour en savoir plus sur ce sujet.</p>

<p>Générer des Documents rapidement et avec précision.</p>

 <h2 class="section-title font-alt align-left mt-60 mb-sm-40">
                   CARACTÉ RISTIQUES</h2>

<ul><li>L'utilisation gratuite pour la première année avec publicité commanditée</li>

<li>IATA, IMDG, TDG, DOT 49 - CFR, et ANR normes appuyées (ANR sera publié à l'automne 2016)</li>

<li>Fonctionne sur tout navigateur Web standard, et un dispositif qui prend en charge un navigateur Web</li>

<li>Des processus simples ou complexes sont traités par la solution. 3PL’s, les emballeurs et les transporteurs peuvent mettre à jour des sections dans la documentation pendant que le paquet est s'apprête pour l’expédition</li>

<li>Interfaces Multi-langues.</li>

<li>Transfert de données à DGSMS™ et DGVFF™</li>

<li>Tutoriel en ligne</li>

<li>Appellez nous maintenant pour l'essayer gratuitement</li>

<li>Formateurs qualifiés peuvent l'utiliser gratuitement dans le cadre de matériel du cours</li></ul>


<p><a rel="canonical" href="http://www.phmsa.dot.gov/staticfiles/PHMSA/DownloadableFiles/Files/shipping_papers_guide.pdf" target="_blank">Référence en ligne de Regulatory Authority </a>


										
                          </div>
      
                     
                            
                           
                            
                            
                            
                      </div>
                    </div>
                    
                </div>
               
                 <div class="hs-line-4 align-center mt-10">
                               Appelez pour un essai gratuit | <a rel="canonical" href="contact.php">Contactez-Nous</a> </div>

                              <div class="hs-line-3">
                                <ul class="nav tpl-alt-tabs  ">
                        
                        <li>
                                
                               CANADA<br>
								1-613-800-7368
                        </li>
                        <li>
                                
                                USA (Sans Frais)<br>
								+1 888-409-8057
                        </li>
                        <li>
                               
                               INDIA<br>
								+91-40-6555-5959
                        </li>
                        <li>                                
                               
                                Sans Frais<br>
								+1 888-409-8057
                                
                        </li>
                        <li> <a rel="canonical" href="http://www.ideabytes.com" target="_blank"><img src="../images/ideabytes.png" width="150" height="51" alt="Ideabytes logo Web/mobile Solutions Dangerous Goods/HAZMAT Air, Road Sea Transport (TDG, IATA, IMDG, 49-CFR, ADR)"/></a> </li>
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