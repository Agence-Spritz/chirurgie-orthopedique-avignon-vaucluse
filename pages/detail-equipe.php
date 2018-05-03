<?php	// Requête pour récupérer le contenu de la page concernée
		list($id, $titrep, $date, $rub, $textep, $texte2, $texte3) = mysqli_fetch_array(mysqli_query($link, "SELECT ID, titre, dbu, rub, texte, texte2, texte3 FROM ".$table_prefix."_pages WHERE page='equipe' AND ID='$id' "));	
?>

<!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pt-60 pb-60">
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
      
    <!-- Section: Doctor Details -->
    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-sx-12 col-sm-4 col-md-4">
	            <div class="doctor-thumb">
	            <?php if (is_file('./images/equipe/'.$id.'.jpg')) { ?>
					<img src="<?php echo './images/equipe/'.$id.'.jpg'; ?>" title="<?php echo $titrep; ?>" alt="<?php echo $titrep; ?>"></a>
				<?php } else { ?>
					<img alt=""  src="http://placehold.it/400x400">
				<?php } ?>	
              	</div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 pl-20 pl-sm-15">
              <div>
                <h3 class="mt-0"><?php echo $titrep; ?></h3>
                <h5 class="text-theme-colored"><?php echo $texte2; ?></h5>
                <hr>
                
              </div>
              <div class="mt-30">
                <?php echo $textep; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Divider -->
    <section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="http://placehold.it/1920x1280" data-parallax-ratio="0.7">
      <div class="container pt-90 pb-90">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-12 text-center">
            <h2 class="font-28 text-white">Pour contacter le <?php echo $titrep; ?></h2>
            <h3 class="font-30 text-white"><i class="fa fa-phone-square"></i> <?php echo $texte3; ?></h3>
          </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Doctors -->
    <section>
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0 line-height-1">LES PRATICIENS</h2>
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

    
  </div>
  <!-- end main-content -->
