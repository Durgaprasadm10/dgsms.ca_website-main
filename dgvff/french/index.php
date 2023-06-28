<?php
$language = (isset($_GET["lang"]) && (($_GET["lang"] == "en") || ($_GET["lang"] == "fr") )) ? $_GET["lang"] : "";
if($language == "en"){
	header("Location: ../");
}

$adPublisherUniqueID = filter_input(INPUT_GET, "adp");
if ($adPublisherUniqueID) {
	$siteNameForAds = "dgvff";
	require_once "../../dg_ads_analytics/update_ads_analytics.php";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <title>DGVFF sépare et consolide fret maritime selon IMDG. Vite, Précis</title>
               
        <meta name="description" content="DGVFF – outil Web à multi-site sépare et consolide charges HAZMAT/DG vite avec précision selon IMDG. Calcule placardage. IMDG conforme. Transporteur accepte manifeste">

        <meta name="keywords" content="EMS, Plaque, Conteneur, Dangereux, transporteur, étiqueter, Étiquettes, Séparation, Chimique, hazmat, Consulter, 3PL, expéditeur, Débardeur, Règlements, étiquetage, Rangement, Français, Espagnole, Ideabytes, DGSMS, 1 888-409-8057, +91-40-6555-5959, 1-613-800-7368">
 <?php
		include "header_nav.php";
		$pageId = '1490';
		?>
		
		 <!-- Page Wrap -->
        <div class="page" id="top">
          
            
            <!-- About Section -->
            <section class="dgvffpage-section">
                <div class="container relative">

                    
                                       
                    <div class="section-text mb-30 mb-sm-20">
                        <div class="row">
                               <div class="col-md-3 mt-10 mb-xs-30"> <h2 class="section-title font-alt align-left mt-10 mb-sm-40">

                    <img src="images/dgvff-logo.png" width="250" height="49" class="dgvfflogobg" alt="DGVFF – application to segregate a LTC load for ocean going freight. Calculates placarding required for Container. Validates LQ and EQ limits for the goods. Quick – segregate 100’s of DG loads in seconds. Ideal for freight forwarders, 3PL’s, Carriers and Stevedores."/> </h2>
</div>                    
                            <div class="col-md-9 mb-xs-30">
                            <h1 class="white-hs-line-2 mt-10 ">NE MANQUEZ PAS LE BATEAU!</h1>
<h1 class="white-hs-line-3">Ségrégation d'IMDG en quelques secondes<br>

100% d'Acceptation de l'envoi par le transporteur
</h1></div>

							 <div class="col-md-4  mt-30 mb-xs-30">
                            
                              <img src="images/container1.jpg" width="400" height="351" alt="container1" /> </div>
                              
                           
                            
                             <div class="col-md-4  mt-30 mb-xs-30">
                            
                              <img src="images/container2.jpg" width="400" height="351" alt="container2" /> </div>
                              
                              
							

<div class="col-md-4  mt-30 mb-xs-30">
                            <img src="images/container3.jpg" width="400" height="351" alt="container3" /> </div>
                            
                            
                          <div class="col-md-6 align-lefr mt-10  mb-xs-30">
	                          
                             
                               
                                <p class="whitetext">
                                • Chargement de la ségrégation dans des conteneurs optimals
<br>
                                • Financement par Répartition ou Licence Annuelle
<br>
                                • Pas d'infos sur les clients nécessaires, seulement les ports de chargement et déchargement
<br>
                                • Valide le connaissement unique
<br>
                                
                                
                                </p>

									
                          </div>
                            <div class="col-md-6 align-right mt-10  mb-xs-30">
	                        <p class="whitetext">

                                • Pour les Expéditeurs,Débardeurs, 3P'sL, les Emballeurs et les Transporteurs
<br>
                                • Validation rapide et efficace des conteneurs à la ségrégation IMDG
<br>
                                • Valide, sépare, charge le LCL<br>
                                • Utilise le scanner ScioTy™ pour transférer les informations du DG à partir de DGDOX™, DGSMS™
<br>
                                </p>
                                                                        
                          </div>
                          </div>
                          <div class="row">
                           <div class="col-md-3 mb-xs-30"></div>
                          
                          <div class="col-md-12 mt-10 mb-xs-30 align-center">
                          <h1 class="white-hs-line-4"><strong>Vérifie 50 Charges de DG dans un conteneur en 17 secondes!
</strong></h1>
	                        
                               <span class="whitetext">
Appelez pour un essai gratuit | <a rel="canonical" href="contact.php" class="whitecolor">Contactez-Nous</a> </span>
<div class="hs-line-3">
                                <ul class="nav tpl-alt-tabsw">
                        
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
                    
                   <h2 class="section-title font-alt align-left mt-10 mb-sm-40">
                    DGVFF™</h2>
                    
                    <div class="section-text mb-30 mb-sm-20">
                        <div class="row">
                                                    
                            <div class="col-md-12  mb-xs-30">
	                            
                                <p>La sécurité d’un navire en mer est de la plus haute importance, ce qui signifie que les règlements de l’IMDG pour expédier HAZMAT doivent être suivis méticuleusement. Il serait facile si chaque docker était un avocat et un chimiste tout à la fois. Si ce n’était qu’un seul chargement de HAZMAT dans le conteneur, ce serait une tâche facile, toutefois, dans la pratique, il faut un regroupement par chargements pour remplir un conteneur de 20', 40' ou 60'.

</p>

								<p>Cela signifie que sur le quai, on doit s’assurer que les chargements de HAZMAT qui peuvent interagir et provoquer une explosion ou un environnement toxique, doivent être séparés. On peut essayer de mettre la même classe de marchandises dans un conteneur, mais cela ne fonctionne vraiment pas.
Par exemple les matières corrosives de la classe 8 contiennent des alcalis et des acides – et ce serait mieux de les tenir séparées. En cas d'une fuite, un feu, une explosion ou une libération d'un gaz toxique serait possible.
</p>
                                
                                <p>DGVFF™ a été conçu pour s'assurer que toutes les charges qui lui sont données seront séparées dans le plus petit nombre possible de conteneurs. Une fois que le HAZMAT a été séparé, il attribue alors des charges Non HAZMAT pour maximiser la capacité des conteneurs. Là encore, il veille à ce que toutes les marchandises non HAZMAT qui pourraient être consommées par les humains ou les animaux sont tenues à l'écart des charges HAZMAT toxiques.

.</p>
                                <blockquote class="blockquotem">
                                <p>Le capitaine Koshy, un Harbour Master du port de Doha à la retraite raconte le cas d'un ferry-boat en Inde qui transportait du riz et des poisons. Les matières toxiques se sont échappées dans la cargaison de riz, et le résultat a causé la mort de plusieurs personnes. C'est arrivé au cours des années 1970. Depuis lors, nous avons parcouru un long chemin. DGVFF™ prend la mesure ultime et rend le transport de HAZMAT par mer aussi sûr que défini selon les règlements IMDG.

</p>	</blockquote>
                                <p>DGVFF™ gère également les Limited Quantities et Excepted Quanties. Il a une option qui permet la vérification de la masse ou volume de la quantité limitée et les quantités exemptées qui a trait à la même règlementation. Les transporteurs qui cherchent une conformité absolue ont la possibilité de décider comment stricte qu’ils veulent de conformité.

</p>

<p>Comme la plupart des matières de HAZMAT qui sont consolidés dans un port de chargement, en général, ils voyagent par la voie de Route. Les Entreprises qui se servent de DGSMS™ ou DGDOX™ peuvent transférer les données directement à un Transporteur ou 3PL électroniquement. Résultat : Conformité Garantie. Garantie d’acceptation et vous placez votre cargaison devant ceux qui ne s'en servent pas.
</p>

<p>DGVFF™ est rapide. Si on a à traiter 100 charges de HAZMAT et les séparer manuellement, il prendrait quelques homme/jours pour accomplir la tâche. Avec DGVFF il peut être accompli en moins de 2 heures, qui comprend la saisie manuelle dans des données. Lorsque les données sont transférées via des scanners ScioTy ou par voie électronique à partir de DGSMS™ et de DGDOX™ – la tâche est accomplie en moins de 5 minutes.
</p>

<p>Pour les camionneurs, 3PL’s., les expéditeurs – cela veut dire faire accepter le Chargement rapidement et dépasser ceux qui n'utilisent pas le système. Plus important – moins de temps, ce qui signifie une baisse des  coûts, ce qui implique une plus grande rentabilité et un avantage sur la concurrence
</p>

<p>DGVFF™ est abordable et dispose d'une option de Financement par Répartition - idéal pour les petites et moyennes entreprises.
</p>

<p>Les licences annuelles pour les grandes entreprises sont également disponibles.
</p>

<p>Il faut le voir pour le croire. Essayez-le gratuitement.
</p>

<p>Des formateurs qualifiés peuvent l'utiliser sans frais dans leurs programmes de formation.
</p>	
                                
                                	                 										
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