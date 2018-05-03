<!-- PAGE CONTENU
================================================== -->
<?php	// CONTENU
	list($titrep, $id_page_parente, $textep, $texte2p, $texte3p, $modele_de_page) = mysqli_fetch_array(mysqli_query($link, "SELECT titre,id_page_parente,texte,texte2,texte3,modele_de_page FROM ".$table_prefix."_pages WHERE page='page' AND ID='$id' "));
		
		if($id_page_parente) {
		// On va chercher la page parente
	        $req_parente = mysqli_query($link,"SELECT ID, titre FROM ".$table_prefix."_pages WHERE page='page' and ID='".$id_page_parente."'");
			$data_parente = mysqli_fetch_assoc($req_parente);
			
			$page_parente = $data_parente['titre'];
		} ?>

	<!-- Start main-content -->
	<div class="main-content">
    
    <!-- ---------------
	
	Modèle de page : 1
	
	------------------ -->
	
	    <!-- Section: inner-header -->
	    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="<?php if (is_file('./images/pages-chirurgie-genou-hanche-orthopedie-84-vaucluse-avignon/'.$id.'.jpg')) {  echo './images/pages-chirurgie-genou-hanche-orthopedie-84-vaucluse-avignon/'.$id.'.jpg'; } ?>">
	      <div class="container pt-60 pb-60">
	        <!-- Section Content -->
	        <div class="section-content">
	          <div class="row">
	            <div class="col-md-12 text-center">
	              <h2 class="title"><?php echo $titrep; ?></h2>
	              <ol class="breadcrumb text-center text-black mt-10">
	                <li><a href="<?php echo $defaultpg; ?>.php">Accueil</a></li>
	                <?php if($id_page_parente) { ?>
	                	<li><a href="#"><?php echo $page_parente; ?></a></li>
		            <?php } ?>
	                <li class="active text-theme-colored"><?php echo $titrep; ?></li>
	              </ol>
	            </div>
	          </div>
	        </div>
	      </div>
	    </section>
    
	    <!-- Section: Pricing -->
    <section id="pricing" class="bg-silver-light">
      <div class="container pb-30">
        
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 hvr-float-shadow mb-sm-30 wow fadeInLeft animation-delay1">
              <div class="pricing-table style1 bg-white border-10px text-center">
                <div class="pricing-icon">
                  <i class="flaticon-medical-teeth1"></i>
                </div>
                <div class="p-40">
                  <h3 class="package-type mt-90">Tout savoir sur la chirurgie de la hanche</h3>
                  <p>Des réponses à toutes les questions que vous vous posez quant à la chirurgie de la hanche, avant, pendant et après l'opération.</p>
                  
                  <a class="btn btn-colored btn-theme-colored text-uppercase mt-30" href="chirurgie-de-la-hanche-avignon---184--page">Chirurgie de la hanche</a><br>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 hvr-float-shadow mb-sm-30 wow fadeInUp animation-delay1">
              <div class="pricing-table style1 bg-white border-10px text-center">
                <div class="pricing-icon">
                  <i class="flaticon-medical-hospital35"></i>
                </div>
                <div class="p-40">
                  <h3 class="package-type mt-90">La chirurgie du Genou expliquée</h3>
                  <p>Pour tout connaitre sur la chirurgie du genou, afin de préparer au mieux une éventuelle intervention.</p>
                  
                  <a class="btn btn-colored btn-theme-colored text-uppercase mt-30" href="chirurgie-du-genou-avignon--185--page">Chirurgie du genou</a><br>
                </div>
              </div>
            </div>
            
            
          </div>
        </div>
      </div>
    </section>

    
  </div>
  <!-- end main-content -->            
			
