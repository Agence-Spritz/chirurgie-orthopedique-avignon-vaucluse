<!-- PAGE CONTENU
================================================== -->
<?	// CONTENU
	list($titrep, $textep, $texte2p) = mysqli_fetch_array(mysqli_query($link, "SELECT titre,texte,texte2 FROM ".$table_prefix."_pages WHERE page='page' AND ID='$id' "));
	$titred = preg_replace('/##PRIXTITRE##/',$prixtitre,trim($titred));
	$titred = preg_replace('/##PRIXTITRE2##/',$prixtitre2,trim($titred));
?>

		<section class="inner-header divider parallax layer-overlay overlay-dark-6" <?php if (is_file('./images/pages-chirurgie-genou-hanche-orthopedie-84-vaucluse-avignon/'.$id.'.jpg')) { ?>data-bg-img="<?php echo './images/pages-chirurgie-genou-hanche-orthopedie-84-vaucluse-avignon/'.$id.'.jpg'; ?>"<?php } ?>>
	      <div class="container pt-200 pb-200">
	        <!-- Section Content -->
	        <div class="section-content">
	          <div class="row"> 
	            <div class="col-md-12 xs-text-center">
	              <h3 class="title text-white"><?php echo $titrep; ?></h3>
	              <ol class="breadcrumb mt-10 white">
	                <li><a class="text-white" href="<?php echo $defaultpg; ?>.php">Accueil</a></li>
	                <?php if($id_page_parente) { ?>
	                	<li><a class="text-white" href="#"><?php echo $page_parente; ?></a></li>
	                <?php } ?>
	                <li class="active text-theme-colored"><?php echo $titrep; ?></li>
	              </ol>
	            </div>
	          </div>
	        </div>
	      </div>
	    </section>
	
	<!-- Section: Les praticiens -->
    <section>
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0 line-height-1">Les praticiens</h2>
              <div class="title-icon">
                <img class="mb-10" src="images/title-icon.png" alt="">
              </div>
              <p>Le personnel soignant de la clinique est à votre service pour vous informer</p>
            </div>
          </div>
        </div>
        
        <div class="section-content">
	      <div class="row mtli-row-clearfix">
          <div class="col-md-12">
            <div class="owl-carousel-4col">
	            
	            <?php $req = mysqli_query($link,"SELECT ID, titre, dbu, rub, texte, texte2 FROM ".$table_prefix."_pages WHERE page='equipe' AND modele_de_page = 1 AND masquer <> '1' ORDER BY ID DESC "); 
			 		while ($data = mysqli_fetch_array($req)) {
	  			?>
	  		
	              <div class="item">
	                <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
	                  <div class="team-thumb">
	                    <?php if (is_file('./images/equipe/'.$data['ID'].'.jpg')) { ?>
							<a href="<?php echo './images/equipe/'.$data['ID'].'.jpg'; ?>" data-lightbox="image"><img class="img-fullwidth" src="<?php echo './images/equipe/'.$data['ID'].'.jpg'; ?>" title="<?php echo $data['titre']; ?>" alt="<?php echo $data['titre']; ?>"></a>
						<?php } else { ?>
							<img alt="" class="img-fullwidth" src="http://placehold.it/400x400">
						<?php } ?>
	                    <div class="team-overlay"></div>
	                  </div>
	                  <div class="team-details bg-silver-light pt-10 pb-10">
	                    <h4 class="text-uppercase font-weight-600 m-5"><?php echo $data['titre']; ?></h4>
	                    <h6 class="text-theme-colored font-15 font-weight-400 mt-0 mb-25"><?php echo $data['texte2']; ?></h6>                    
	                    <div class="">
	                      <a class="btn btn-theme-colored btn-sm flip" href="<?php echo slugify($data['titre']); ?>--<?php echo $data['ID']; ?>--detail-equipe">En savoir plus sur ce praticien</a>
	                    </div>
	                  </div>
	                </div>
	              </div>
	              
              <?php } ?>
              
            </div>
          </div>
        </div>
          
          
      </div>
    </section>
    
    <!-- Section: Personnel administratif -->
    <section>
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0 line-height-1">Le personnel administratif</h2>
              <div class="title-icon">
                <img class="mb-10" src="images/title-icon.png" alt="">
              </div>
              <p>Le personnel administratif de la clinique est à votre disposition pour vous accompagner </p>
            </div>
          </div>
        </div>
        <div class="section-content">
	      <div class="row mtli-row-clearfix">
          <div class="col-md-12">
            <div class="owl-carousel-4col">
	            
	            <?php $req = mysqli_query($link,"SELECT ID, titre, dbu, rub, texte, texte2 FROM ".$table_prefix."_pages WHERE page='equipe' AND modele_de_page = 2 AND masquer <> '1' ORDER BY ID DESC "); 
			 		while ($data = mysqli_fetch_array($req)) {
	  			?>
	  		
	              <div class="item">
	                <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
	                  <div class="team-thumb">
	                    <?php if (is_file('./images/equipe/'.$data['ID'].'.jpg')) { ?>
							<a href="<?php echo './images/equipe/'.$data['ID'].'.jpg'; ?>" data-lightbox="image"><img class="img-fullwidth" src="<?php echo './images/equipe/'.$data['ID'].'.jpg'; ?>" title="<?php echo $data['titre']; ?>" alt="<?php echo $data['titre']; ?>"></a>
						<?php } else { ?>
							<img alt="" class="img-fullwidth" src="http://placehold.it/400x400">
						<?php } ?>
	                    <div class="team-overlay"></div>
	                  </div>
	                  <div class="team-details bg-silver-light pt-10 pb-10">
	                    <h4 class="text-uppercase font-weight-600 m-5"><?php echo $data['titre']; ?></h4>
	                    <h6 class="text-theme-colored font-15 font-weight-400 mt-0 mb-25"><?php echo $data['texte2']; ?></h6>                    
	                    <div class="">
	                      <a class="btn btn-theme-colored btn-sm flip" href="<?php echo slugify($data['titre']); ?>--<?php echo $data['ID']; ?>--detail-equipe">En savoir plus sur ce praticien</a>
	                    </div>
	                  </div>
	                </div>
	              </div>
	              
              <?php } ?>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    
  </div>
  <!-- end main-content -->      


