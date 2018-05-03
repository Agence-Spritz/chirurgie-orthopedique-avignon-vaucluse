<!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider" data-version="5.0">
            <ul>
	            
	            <?php $req = mysqli_query($link,"SELECT ID, titre, texte2 FROM ".$table_prefix."_pages WHERE page='diapo' AND masquer <> '1'  ORDER BY dbu DESC");
				  	while ($data = mysqli_fetch_array($req)) { 
				?>

	              <!-- SLIDE -->
	              <li data-index="rs-<?php echo $data['ID']; ?>" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="images/slides/<?php echo $data['ID']; ?>.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
	                <!-- MAIN IMAGE -->
	                <img src="images/slides/<?php echo $data['ID']; ?>.jpg" alt="<?php echo $data['titre']; ?>"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
	                <!-- LAYERS -->
	
	                <!-- LAYER NR. 1 -->
	                <div class="tp-caption tp-resizeme text-uppercase text-white bg-dark-transparent-5 pl-30 pr-30"
	                  id="rs-<?php echo $data['ID']; ?>-layer-1"
	                
	                  data-x="['center']"
	                  data-hoffset="['0']"
	                  data-y="['middle']"
	                  data-voffset="['-90']" 
	                  data-fontsize="['28']"
	                  data-lineheight="['54']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1000" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 7; white-space: nowrap; font-weight:600; border-radius:45px;">Avignon Vaucluse
	                </div>
	
	                <!-- LAYER NR. 2 -->
	                <div class="tp-caption tp-resizeme text-uppercase text-white bg-theme-colored-transparent pl-40 pr-40"
	                  id="rs-<?php echo $data['ID']; ?>-layer-2"
	
	                  data-x="['center']"
	                  data-hoffset="['0']"
	                  data-y="['middle']"
	                  data-voffset="['-20']"
	                  data-fontsize="['48']"
	                  data-lineheight="['70']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1000" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 7; white-space: nowrap; font-weight:600; border-radius:45px;">Hanche et genou 
	                </div>
	
	                <!-- LAYER NR. 3 -->
	                <div class="tp-caption tp-resizeme text-center text-black" 
	                  id="rs-<?php echo $data['ID']; ?>-layer-3"
	
	                  data-x="['center']"
	                  data-hoffset="['0']"
	                  data-y="['middle']"
	                  data-voffset="['50','60','70']"
	                  data-fontsize="['16','18','24']"
	                  data-lineheight="['28']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1400" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Spécialisé en chirurgie du membre inférieur
	                </div>
	
	                <!-- LAYER NR. 4 -->
	                <div class="tp-caption tp-resizeme" 
	                  id="rs-<?php echo $data['ID']; ?>-layer-4"
	
	                  data-x="['center']"
	                  data-hoffset="['0']"
	                  data-y="['middle']"
	                  data-voffset="['135','145','155']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;"
	                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
	                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
	                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1400" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20" href="<?php echo $data['texte2']; ?>">En savoir +</a> 
	                </div>
	              </li>

              <?php } ?>

            </ul>
          </div><!-- end .rev_slider -->
        </div>
        <!-- end .rev_slider_wrapper -->
        <script>
          $(document).ready(function(e) {
            var revapi = $(".rev_slider").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                  arrows: {
                      style: "zeus",
                      enable: true,
                      hide_onmobile: true,
                      hide_under:600,
                      hide_onleave: true,
                      hide_delay: 200,
                      hide_delay_mobile: 1200,
                      tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                      left: {
                          h_align: "left",
                          v_align: "center",
                          h_offset: 30,
                          v_offset: 0
                      },
                      right: {
                          h_align: "right",
                          v_align: "center",
                          h_offset: 30,
                          v_offset: 0
                      }
                  },
                    bullets: {
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 600,
                    style: "hebe",
                    hide_onleave: false,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 5,
                    tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [680, 500, 400, 400],
              lazyType: "none",
              parallax: {
                  origo: "slidercenter",
                  speed: 1000,
                  levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                  type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->

      </div>
    </section>

    <!-- Section: home-boxes -->
    <section class="">
      <div class="container pt-0 pb-0">
        <div class="section-content">
          <div class="row equal-height-inner home-boxes mt-sm-20" data-margin-top="-80px">
            <div class="col-sm-12 col-md-3 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
              <a href="sejour-clinique-avignon--188--page" class="text-white">
	              <div class="sm-height-auto bg-theme-colored">
	                <div class="text-center pt-30 pb-30">
	                  <i class="fa medical-history text-white font-64"></i>
	                  <h5 class="text-uppercase text-white">Prise en charge<br /> globale</h5>
	                </div>
	              </div>
              </a>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <a href="recuperation-rapide-rrac--195--page" class="text-white">
	              <div class="sm-height-auto bg-theme-colored-darker2">
	                <div class="text-center pt-30 pb-30">
	                  <i class="fa walker-or-runner text-white font-64"></i>
	                  <h5 class="text-uppercase text-white">Récupération rapide<br /> Label RRAC</h5>
	                </div>
	              </div>
              </a>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
              <a href="equipe-chirurgicale-hanche-genou--186--page" class="text-white">
	              <div class="sm-height-auto bg-theme-colored-darker3">
	                <div class="text-center pt-30 pb-30">
	                  <i class="fa stethoscope text-white font-64"></i>
	                  <h5 class="text-uppercase text-white">Chirurgiens<br /> expérimentés</h5>
	                </div>
	              </div>
              </a>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
              <a href="chirurgie-de-la-hanche-et-genou---196--hanche-genou" class="text-white">
	              <div class="sm-height-auto bg-theme-colored-darker4">
	                <div class="text-center pt-30 pb-30">
	                  <i class="fa femur text-white font-64"></i>
	                  <h5 class="text-uppercase text-white">Orthopédie &<br /> traumatologie</h5>
	                </div>
	              </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: about -->
    <section class="">
      <div class="container pt-0">
        <div class="row">
	        
        <?php 
        	$req = mysqli_query($link,"SELECT ID, titre, rub, texte, texte2 FROM ".$table_prefix."_pages WHERE page='page' and rub='edito'");
			$data = mysqli_fetch_assoc($req);
		?>
						
          <div class="col-md-4 pt-60">
            <h3 class="text-gray mt-0 mt-sm-30 mb-0">A votre écoute</h3>
            <h2 class="text-theme-colored mt-0"><?php echo $data['titre']; ?></h2>
            <span class="font-weight-600"><?php echo $data['texte']; ?></span>
            <span class="mt-20"><?php echo $data['texte2']; ?></span>
            <p class="mt-20"><img src="images/signature.png" alt="La clinique Fontvert"></p>
          </div>
          <div class="col-md-4">
            <img src="images/pages-chirurgie-genou-hanche-orthopedie-84-vaucluse-avignon/<?php echo $data['ID']; ?>.jpg" alt="<?php echo $nom_titre_meta; ?>">
          </div>
          <div class="col-md-4 pt-60">
            <div class="border-10px p-30">
              <h5><i class="fa walker-or-runner-pt"></i> LA RRAC, récupération rapide</h5>
              <div class="opening-hours text-left">
                <p>
	                La Récupération Rapide Après Chirurgie (RRAC) vise à optimiser les techniques et soins, avant, pendant et après l’intervention, afin de:
                </p>
              </div>
              <div class="text-left">
	            <ul class="list-fleches">
	              	<li>Limiter la douleur par une prise en charge multimodale.</li>
	              	<li>Réduire le risque de complications.</li>
	              	<li>Rendre le patient autonome plus rapidement.</li>
              	</ul>
              </div>
              <a href="recuperation-rapide-rrac--195--page" class="btn btn-dark btn-theme-colored mt-15">Découvrir en détails</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Services -->
    <section class=" bg-lighter">
      <div class="container pb-20">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0 line-height-1">Chirurgie</h2>
              <div class="title-icon">
                <img class="mb-10" src="images/title-icon.png" alt="Spécialisé en chirurgie du membre inférieur">
              </div>
              <p>Présentation des différentes interventions de nos chirurgiens<br />
				  dans la clinique Fondvert Avignon / Vaucluse (84)</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box left media p-0"> <a href="#" class="media-left pull-left"><i class="flaticon-medical-ambulance14 text-theme-colored"></i></a>
                <div class="media-body">
                  <h5 class="media-heading heading">Prothèse Totale de hanche</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box left media p-0"> <a href="#" class="media-left pull-left"><i class="flaticon-medical-illness text-theme-colored"></i></a>
                <div class="media-body">
                  <h5 class="media-heading heading">Rupture du moyen fessier</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box left media p-0"> <a href="#" class="media-left pull-left"><i class="flaticon-medical-stethoscope10 text-theme-colored"></i></a>
                <div class="media-body">
                  <h5 class="media-heading heading">Prothèse du genou ambulatoire</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box left media p-0"> <a href="#" class="media-left pull-left"><i class="flaticon-medical-medical51 text-theme-colored"></i></a>
                <div class="media-body">
                  <h5 class="media-heading heading">L’arthrose de la hanche</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box left media p-0"> <a href="#" class="media-left pull-left"><i class="flaticon-medical-hospital35 text-theme-colored"></i></a>
                <div class="media-body">
                  <h5 class="media-heading heading">Dysplasie de hanche</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box left media p-0"> <a href="#" class="media-left pull-left"><i class="flaticon-medical-tablets9 text-theme-colored"></i></a>
                <div class="media-body">
                  <h5 class="media-heading heading">Prothèse Totale du Genou</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
  </div>
  <!-- end main-content -->