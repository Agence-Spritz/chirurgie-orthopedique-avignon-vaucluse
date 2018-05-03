<?php // On démarre la session AVANT d'écrire du code HTML
session_start(); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	
	<!-- Ajouts liés à l'admin Remixweb -->	
	
		<!-- GOOGLE ANALYTICS -->
		<?	list($mail1, $script_google, $nom_titre_meta, $url_site, $url_facebook, $url_linkedin, $url_twitter, $url_instagram, $adresse, $cp, $ville, $pays, $tel) = mysqli_fetch_array(mysqli_query($link, "SELECT mail1, google_stats, nom_titre_meta, url_site, url_facebook, url_linkedin, url_twitter, url_instagram, adresse, cp, ville, pays, tel FROM ".$table_prefix."_divers WHERE ID=1 "));
	        echo ("$script_google"); 
	    ?>
	    <?php include ("inc/meta.php"); ?>
	    <?php 
		setlocale(LC_TIME, 'fr','fr_FR','fr_FR@euro','fr_FR.utf8','fr-FR','fra');
		?>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

<meta name="author" content="Remixweb" />

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet" type="text/css">
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-blue.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->

<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="has-side-panel side-panel-right fullwidth-page side-push-panel">
<div class="body-overlay"></div>
<div id="side-panel" class="dark" data-bg-img="http://placehold.it/1920x1280">
  <div class="side-panel-wrap">
    <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="pe-7s-close font-36"></i></a></div>
    <a href="<?php echo $defaultpg; ?>.php"><img alt="logo" src="images/logo.png"></a>
    <div class="side-panel-nav mt-30">
      <div class="widget no-border"> 
	      <a class="bg-light p-5 text-theme-colored font-11 ajaxload-popup" href="ajax-load/form-appointment.html">Prendre RDV</a>       
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="side-panel-widget mt-30">
      <div class="widget no-border">
        <ul>
          <li class="font-14 mb-5"> <i class="fa fa-phone text-theme-colored"></i> <a href="callto:0826108666" class="text-gray"><?php echo $tel; ?></a> </li>
          <li class="font-14 mb-5"> <i class="fa fa-clock-o text-theme-colored"></i> Lun-Sam 8h-18h </li>
        </ul>      
      </div>
      <div class="widget">
        <ul class="styled-icons icon-dark icon-theme-colored icon-sm">
          <li><a href="<?php echo $url_facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="<?php echo $url_twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li><a href="<?php echo $url_linkedin; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <p>&copy;2018 Chirurgie orthopedique Avignon Vaucluse</p>
    </div>
  </div>
</div>
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img src="images/preloaders/1.gif" alt="">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Passer l'introduction</div>
  </div>

  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-colored sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="widget no-border m-0">
              <ul class="styled-icons icon-dark icon-theme-colored icon-sm sm-text-center">
                <li><a href="<?php echo $url_facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="<?php echo $url_twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="<?php echo $url_linkedin; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-9">
            <div class="widget no-border m-0">
              <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="callto:0826108666"><?php echo $tel; ?></a> </li>
                <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-white"></i> Lun-Sam 8h-18h </li>
                <li class="sm-display-block mt-sm-10 mb-sm-10">
                  <!-- Modal: Appointment Starts -->
                  <a class="bg-light p-5 text-theme-colored font-11 ajaxload-popup" href="ajax-load/prise-rdv.php">Prendre RDV</a>
                  <!-- Modal: Appointment End -->
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-lightest">
        <div class="container">
          <nav id="menuzord-right" class="menuzord blue bg-lightest" href="<?php echo $defaultpg; ?>.php" <?php if ($pg==$defaultpg) { echo 'active'; } else { echo ''; } ?>>
            <a class="menuzord-brand pull-left flip" href="<?php echo $defaultpg; ?>.php">
              <img src="images/logo.png" alt="">
            </a>
            <div id="side-panel-trigger" class="side-panel-trigger"><a href="#"><i class="fa fa-bars font-24 text-gray"></i></a></div>
            
            <ul class="menuzord-menu">
	            
	          <li class="<?php if ($pg==$defaultpg) { echo 'active'; } else { echo ''; } ?>"><a href="<?php echo $defaultpg; ?>.php">Accueil</a></i>
	           
              <li class="<?php if ($id==184) { echo 'active'; } ?>"><a href="chirurgie-de-la-hanche-avignon---184--page">Hanche</a></li>

              <li class="<?php if ($id==185) { echo 'active'; } ?>"><a href="chirurgie-du-genou-avignon--185--page">Genou</a></li>

                <li class="<?php if ($id==186) { echo 'active'; } ?>"><a href="equipe-chirurgicale-hanche-genou--186--equipe">Equipe</a></li>

                <li class="<?php if ($id==187) { echo 'active'; } ?>"><a href="clinique-fontvert-avignon-vauclude--187--page">La clinique</a></li>

                <li class="<?php if ($id==188) { echo 'active'; } ?>"><a href="sejour-clinique-avignon--188--page">Votre séjour</a></i>
                
                <li class="<?php if ($id==135) { echo 'active'; } ?>"><a href="contacter-la-clinique---135--contact" title="Contactez-nous">Contact</a></li>
            </ul>
            
          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- Contenu principal
	================================================== -->
   <div> <?php include ("pages/".$pg.".php"); ?></div>

  <!-- Footer -->
  <footer id="footer" class="footer pb-0" data-bg-img="images/footer-bg.png" data-bg-color="#25272e">
    <div class="container pt-90 pb-60">

      <div class="row">
        <div class="col-md-12">
          <div class="horizontal-contact-widget mt-30 pt-30 text-center">
            <div class="col-sm-12 col-sm-4">
              <div class="each-widget"> <i class="pe-7s-phone font-36 mb-10"></i>
                <h5 class="text-white">Nous joindre</h5>
                <p><a href="callto:0826108666"><?php echo $tel; ?></a></p>
              </div>
            </div>
            <div class="col-sm-12 col-sm-4 mt-sm-50">
              <div class="each-widget"> <i class="pe-7s-map font-36 mb-10"></i>
                <h5 class="text-white">Adresse</h5>
                <p><?php echo $adresse; ?><br />
                <?php echo $cp.' - '.$ville; ?></p>
              </div>
            </div>
            <div class="col-sm-12 col-sm-4 mt-sm-50">
              <div class="each-widget"> <i class="pe-7s-mail font-36 mb-10"></i>
                <h5 class="text-white">Contact</h5>
                <p><a href="contacter-la-clinique---135--contact">Merci de remplir ce formulaire</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
		    <ul class="list-inline styled-icons icon-hover-theme-colored icon-gray icon-circled text-center mt-30 mb-10">
				<li><a target="_blank" href="http://twitter.com/intent/tweet/?url=<?=$_SERVER[HTTP_HOST]?><?=$_SERVER[REQUEST_URI]?>&text=<?=$ogtitre?>">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
				<li><a target="_blank" href="http://www.facebook.com/sharer.php?u=http://<?=$_SERVER[HTTP_HOST]?><?=$_SERVER[REQUEST_URI]?>&t=<?=$ogtitre?>">
						<i class="fa fa-facebook"></i>
					</a>
				</li>
				<li><a target="_blank" href="https://plus.google.com/share?url=<?=$_SERVER[HTTP_HOST]?><?=$_SERVER[REQUEST_URI]?>">
						<i class="fa fa-google-plus"></i>
					</a>
				</li>
				<li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?=$_SERVER[HTTP_HOST]?><?=$_SERVER[REQUEST_URI]?>&title=<?=$ogtitre?>">
						<i class="fa fa-linkedin"></i>
					</a>
				</li>
			</ul>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-theme-colored p-20 subfooter">
      <div class="row text-center">
        <div class="col-md-12">
          <p class="text-white font-11 m-0">&copy;2018 Chirurgie orthopedique Avignon Vaucluse - <a href="mentions-legales-chirurgie-hanche-genou-avignon--1--page" title="Contactez-nous">Mentions</a> - Made with love by <a href="https://www.remixweb.eu" title="Création de sites" target="_blank">Remix Web</a> <img src='images/Salamandre.png'></p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a></div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>
</html>
