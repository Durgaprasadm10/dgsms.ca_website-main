<?php
include "../cache_clear.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAZMAT & Dangerous Goods Shipping Compliance Software | DGSMS</title>
    <meta name="description"
        content="HAZMAT hauling help HAZMAT emergency consultation IATA, IMDG, 49CFR, TDG, Dangerous Goods hauling consultation">
    <link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <link rel="shortcut icon" href="../icn/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_DGdox.css?ver=<?php echo filemtime("../css/style_DGdox.css");?>">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177256159-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-177256159-1');
</script>
<script type="text/javascript"> window.$crisp=[];window.CRISP_WEBSITE_ID="9f521e67-7326-41bf-8dac-e6518d8bd805";(function(){ d=document;s=d.createElement("script"); s.src="https://client.crisp.chat/l.js"; s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})(); </script>
</head>

<body>
    <header>
		<div class="container">
			<div class="header-social-links">
                        
                        <a rel="canonical" href="https://www.facebook.com/DGMOBI" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a rel="canonical" href="https://www.facebook.com/dgsmsproducts" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a rel="canonical" href="https://twitter.com/DGSMS_r" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a rel="canonical" href="https://in.linkedin.com/company/ideabytes-inc" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                        
                        
                    </div>
			</div>
        <nav>
            <div class="container">
                <a href="https://www.ideabytes.com" target="_blank"><img src="../icn/IB_logo_white.png"
                        alt="Ideabytes logo Web/mobile Solutions Dangerous Goods/HAZMAT Air, Sea, Road Transport (TDG, IATA, IMDG, 49-CFR)"
                        class="logo"></a>
                <ul class="menu">
                    <li class="menu_item"><a href="../index.php" class="link">home</a></li>
                    <li class="menu_item"><a href="../pages/about_eng.html" class="link">about</a></li>
                    <li class="menu_item"><a href="#" class="link_submenu">products</a>
                        <ul class="submenu">
                            <li class="product_link"><a href="../pages/dgmobi_eng.php" class="link_submenu2" target="_blank">DGMobi
                                    <sup><small>tm</small></sup></a></li>
                            <li class="product_link"><a href="../pages/DGsms_eng.php"
                                    class="link_submenu2">DGSMS<sup>®</sup></a></li>
                            <li class="product_link"><a href="../pages/DGCheck_eng.php"
                                    class="link_submenu2">DGCheck<sup><small>tm</small></sup></a></li>
                            <li class="product_link"><a href="../pages/DGdox_eng.php"
                                    class="link_submenu2">DGDOX<sup><small>tm</small></sup></a></li>
                            <li class="product_link"><a href="../pages/DGRMA_eng.php"
                                    class="link_submenu2">DGRMA<sup><small>tm</small></sup></a></li>
                            <li class="product_link"><a href="../pages/DGVFF_eng.php"
                                    class="link_submenu2">DGVFF<sup><small>tm</small></sup></a></li>
                            <li class="product_link"><a href="../pages/DGSDS_eng.php"
                                    class="link_submenu2">DGSDS<sup><small>tm</small></sup></a></li>
                            <li class="product_link"><a href="../pages/DGSOS_eng.php"
                                    class="link_submenu2">DGSOS<sup><small>tm</small></sup></a></li>
                        </ul>
                    </li>
                    <li class="menu_item"><a href="../pages/Checklists_eng.html" class="link">checklist</a></li>
                    <li class="menu_item"><a href="../pages/blog.html" class="link">blog</a></li>
                    <li class="menu_item"><a href="../pages/FAQ.html" class="link">FAQ</a></li>
                    <li class="menu_item"><a href="../fr/pages/DGSOS_fr.php" class="link_lang"><img
                                src="../icn/french-flag.png" alt="english lnguage" class="eng"></a></li>
                    <!-- <ul class="lang_menu">
                <li>
                    <a href="../fr/pages/DGSOS_fr.html" class="eng">fr</a>
                </li>
            </ul> -->
                </ul>
            </div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>
    <section class="banner_SOS">
        <div class="container">
            <img src="../icn/Dgsos-logo.png" alt="Logo DGsos" class="logoDG">
            <div class="slogan"> <span class="h1">We will </span>be there for you
            </div>
           
                <a href="tel:+18884098057" class="contact_phone_btn">Call Us</a>

        </div>
    </section>
    <section class="S0S">
        <div class="container">
            <div class="header_SOS">Apply for a consultation </div>
            <div class="subheader_SOS">Want more, in-depth information? DGSOS offers a 2nd Opinion Service, where
                a dispatcher or a manager may ask for a ruling on a disputed placarding or segregation issue.
                The service affords access to a HAZMAT expert that will give a ruling quickly and accurately.</div>
        </div>
    </section>

    <section class="application_form">
        <div class="container">

            <div id="successdisp" style="display:none;">
                <div id="successmsg"></div>
            </div>

            <div id="formdisp">
                <form method="POST" id="trail_dg_form1">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="1name">First Name <br>
                                <input class="input_SOS" name="firstname" id=firstname type="text" required>
                                <input class="input_SOS" id=product value="dgsos" name="product" type="hidden" required>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label  class="lname">Last Name<br>
                                <input class="input_SOS" name="lastname" id="lastname" type="text" required>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label  class="email_r">Email<br>
                                <input class="input_SOS" name="email" type="email" id="email"
                                    placeholder="example@email.com" required>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="Phone_number">Phone Number <br>
                                <input class="input_SOS" type="text" name="phone_number_trial" id="phone_number_trial"
                                    placeholder="X XXX XXX XXXX" required>
                            </label>
                        </div>
                    </div>

                    <div class="country">
                        <label class="Phone_number">Country <br>
                            <select class="select_SOS" name="country" id=country>
                                <option value="empty">-</option>
                                <option value="ca">Canada</option>
                                <option value="us">USA</option>
                                <option value="india">India</option>
                                <option value="other">Other</option>
                            </select>
                        </label>
                    </div>
                    <div class="request">
                        <div class="submit"><input class="r_consult" type="submit" value="Send Request"></div>
                    </div>
              
                </form>
</div>
            </div>
    </section>

    <section class="team">
        <div class="container">
            <div class="team_header">First Line Support</div>
            <div class="team_subheader">Our HAZMAT Experts are Committed to delivering the best <br>
                service for your compliance and success </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="team_item">
                        <div class="team_photo"><img src="../icn/support1.png" alt=""></div>
                        <div class="team_dscr"> <span class="name">Sridevi Akurathi</span> <br>
                            Support Manager <br>
                            6 years of HAZMAT
                            Clients support</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="team_item">
                        <div class="team_photo"><img src="../icn/george.png" alt=""></div>
                        <div class="team_dscr"> <span class="name">George Kongalath</span> <br>
                            CEO <br>
                            8 years of HAZMAT <br>
                            Key Clients support</div>
                    </div>
                </div>
                <!--  <div class="col-md-4 offset-md-1">
                    <div class="team_item">
                        <div class="team_photo"><img src="/dist/src/icn/support copy.png" alt=""></div>
                        <div class="team_dscr"> <span class="name">Sridevi Akurathi</span> <br>
                            Support Manager <br>
                            6 years of HAZMAT 
                            Clients support</div>
                    </div>
                </div>
                <div class="col-md-4 offset-md-1">
                    <div class="team_item">
                        <div class="team_photo"><img src="/dist/src/icn/support copy.png" alt=""></div>
                        <div class="team_dscr"> <span class="name">Sridevi Akurathi</span> <br>
                            Support Manager <br>
                            6 years of HAZMAT 
                            Clients support</div>
                    </div>
                </div>  -->
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="container">
            <div class="contact_header">Not sure what you need?</div>
            <div class="contact_subheader">Contact US</div>
            <div class="row">
                <div class="col-md-4">
                    <div class="contact_item">
                        <div class="contact_contry1">Canada</div>
                        <a href="tel:+18884098057" class="contact_phone">Toll Free: +1 888 409 8057</a>
                        <a href="tel:+16138007368" class="contact_phone">Landline: +1 613 800 7368</a>
                        <a href="mailto:sales@dgsms.ca" class="contact_phone">Email: sales@dgsms.ca</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact_item">
                        <div class="contact_contry1">North America</div>
                        <a href="tel:+18884098057" class="contact_phone">Toll Free: +1 888 409 8057</a>
                        <a href="tel:+14088247667" class="contact_phone">Landline: +1 408 824 7667</a>
                        <a href="mailto:sales@dgsmsusa.com" class="contact_phone">Email: sales@dgsmsusa.com</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact_item">
                        <div class="contact_contry1">India</div>
                        <a href="tel:+18001025079" class="contact_phone">Toll Free: 1800 102 5079</a>
                        <a href="tel:+918885835959" class="contact_phone">Landline: +91 888 583 5959</a>
                        <a href="mailto:sales@dgsms.ca" class="contact_phone">Email: sales@dgsms.ca</a>
                    </div>
                </div>
            </div>
            <div class="contact_iteml">
                <a href="https://www.ideabytes.com" target="_blank" class="logo_black"><img class="black_logo"
                        src="../icn/IDEABYTES_black.png"
                        alt="Ideabytes logo Web/mobile Solutions Dangerous Goods/HAZMAT Air, Sea, Road Transport (TDG, IATA, IMDG, 49-CFR)"></a>
            </div>
        </div>
        
    </section>
    <footer>
        <div class="container">
             <div class="footer-social-links">
                        
                        <a rel="canonical" href="https://www.facebook.com/DGMOBI" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a rel="canonical" href="https://www.facebook.com/dgsmsproducts" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a rel="canonical" href="https://twitter.com/DGSMS_r" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a rel="canonical" href="https://in.linkedin.com/company/ideabytes-inc" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
            <div class="links_main">
                <a href="../pages/technical_eng.html" class="licence">Licensing Terms</a>
                <a href="../pages/technical_eng.html" class="requirements">System Requirements</a>
                <a href="../pages/technical_eng.html" class="privacy">Privacy Policy</a>
            </div>
        </div>
        <div class="final">Ⓒ Images and text are copyright of Ideabytes® Inc.</div>
    </footer>
    <script src="../js/script.js?ver=<?php echo filemtime("../js/script.js");?>"></script>
</body>



</html>
