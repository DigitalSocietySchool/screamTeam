
              <?php
			  
					global $wp_session;
					if(isset($wp_session['searchResults'])) {
						$results = $wp_session['searchResults']->toArray();
					}
					$currentMethod = get_permalink(get_the_ID(), false);
					$nextMethodIndex = (array_search($currentMethod, $results) + 1);
					$nextMethod = $results[$nextMethodIndex];
					if($nextMethod >= count($results)) {
						$nextMethod = false;
					}
							
					$previousMethodIndex = (array_search($currentMethod, $results) - 1);
					$previousMethod = $results[$previousMethodIndex];
					if($previousMethod < 0) {
						$previousMethod = false;
					}
						
					
                /*
                 * This is the post format used for the individual CARD page.
                 *
                */
                
                $effort= types_render_field("effort", array("output"=>"raw"));
                $source = types_render_field("org-source", array("output"=>"raw")); 
                $logoIcon = types_render_field("icon", array("size"=>"large"));
                $sub_categories = get_the_terms( get_the_ID(), 'sub-category' );
                $categories = get_the_terms( $post->ID, 'category_si' );
              ?>

              <article class="card_page" id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
			
      <div id="card-desktop-layout"> <!-- Open desktop layout-->

        <header class="card_title">
            <h1 itemprop="headline"><?php the_title(); ?></h1> <!-- Title -->
             <h3>  <!-- Summary -->
              <?php echo types_render_field("summary", array("output"=>"raw")); ?>
            </h3>
          </header> 

        <section class="card_graph" ><!-- card -->
          <div class="share_card"> <!-- share -->
            <p> share this method on</p>
          </div>
          <div class="share_bar"> 
            <?php echo '<div class="a2a_kit addtoany_list">';
              if ( function_exists( 'ADDTOANY_SHARE_SAVE_ICONS' ) ) { ADDTOANY_SHARE_SAVE_ICONS(); }
             echo '</div>'; ?>
          </div>
          
          <div class="card_container"> <!-- card-container -->
            <div id="card_fixed"> <!-- card content -->
                    <div class="title"> <h1>
                      <?php the_title(); ?>
                    </h1> </div>         
                    
                    <div class="card_front">
                      <div class="icon">
                        <?php
                        $icon = types_render_field("icon", array("width"=>"120px"));
                        echo $icon; ?>
                      </div>
                    </div>
                    
                    <div class="card_bottom">
                      <?php
                        if ( !empty( $sub_categories ) ) {
                          foreach ( $sub_categories as $sub_category ) {
                            $sub_category_name=$sub_category->slug;
                            if('market-customers'==$sub_category_name){
                              echo '<div class="cat-left market-customers_box">';
                            } else if('stakeholders-money'==$sub_category_name){
                              echo '<div class="cat-left stakeholders-money_box">';
                            } else  if('product-services'==$sub_category_name){  
                              echo '<div class="cat-left product-services_box">';
                            } else if('organization-culture'==$sub_category_name){
                              echo '<div class="cat-left organization-culture_box">';
                            } else if('sales-distribution'==$sub_category_name){
                              echo '<div class="cat-left sales-distribution_box">';
                            } else {
                              echo '<div class="cat-left undefined_box">';
                            }     
                          }
                        echo '</div><!-- closes the sub-category div-->';
                        } else {
                          echo '<div class="cat-left undefined_box"> </div>';
                        }
                        ?>
                        
                      
                      <div class="time">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/clock.svg">
                        <h2><?php echo types_render_field("duration", array("output"=>"raw")); ?></h2> 
                      </div>

                      <?php
                        if ( !empty( $categories ) ) { 
                          foreach ( $categories as $category_si ) {
                            $category_si_name=$category_si->slug;
                            if('impact'==$category_si_name){  
                              echo '<div class="cat-right impact_box">';
                            } else {
                              echo '<div class="cat-right strategy_box">';
                            }
                            
                          }
                        echo '</div><!-- closes the category div-->';
                        }?>
    
                    </div>
            </div> <!-- close card content -->
          </div><!-- close card-container -->

          <div class="card_go"> <!-- prev, next -->

          <!-- Card Go Back option 
          <div class="card_go_back">  
            <?php if($wp_session['searching'] == true) { ?>
                <a href="<?php echo get_site_url(); ?>/?post_type=method-card&s=<?php echo $wp_session['currentSearchQuery']; ?>"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/card_back.png" alt="back"></a>
            <?php } else { ?>
                <a href="<?php echo get_site_url(); ?>"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/card_back.png" alt="back"></a>
            <?php } ?>
                <p>go back</p>
            
          </div>  
          -->
           <div class="card_go_back">  
              <?php if($previousMethod != false) { ?>
                <a href="<?php echo $previousMethod; ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/arrow_left.svg" alt="back"></a>
                <p>Previous Method</p>
              <?php } ?>
            </div>

            <div class="card_dmt">  <!-- DMT logo -->
                <a href="<?php echo get_site_url(); ?>"><img width="70px" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/about_page/BMT_logo.svg" alt="back"></a>
            </div>

            <div class="card_go_next">  
              <?php if($nextMethod != false) { ?>
                <a href="<?php echo $nextMethod; ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/arrow_right.svg" alt="back"></a>
                <p>Next Method</p>
              <?php } ?>
            </div>
              
            
          </div><!-- end prev, next -->


          
        </section><!-- Close card -->

        <section class="card_tasks"><!-- Tasks -->
         
            <p class="bold"> <!-- Title -->
              TASKS
            </p>

            <div class="card_text">   
              <p><!-- Tasks content -->
              <?php the_content();?>
              </p>  
            </div>
          
        </section><!-- Close Tasks -->


        <section class="card_ww"><!-- When, Why, etc -->
          <?php
            $when = types_render_field("when", array("output"=>"raw")); 
            if($when != null){
          ?>
          <div class="feature"><!-- When content -->
            <h2>WHEN</h2> <!-- When Title -->
            <p><?php echo $when;?></p>
          </div><!-- end When content -->
          <?php } ?>

          <?php
            $why = types_render_field("why", array("output"=>"raw")); 
            if($why != null){
          ?>
          <div class="feature"><!-- Why content -->
            <h2>WHY</h2> <!-- Why Title -->
            <p><?php echo $why;?></p>
          </div><!-- end Why content -->
          <?php } ?>

          <?php
            $note = types_render_field("note", array("output"=>"raw")); 
            if($note != null){
          ?>
          <div class="feature"><!-- Note content -->
            <h2>NOTE!</h2> <!-- Note Title -->
            <p><?php echo $note;?></p>
          </div><!-- end Note content -->
          <?php } ?>

          <?php
            $output = types_render_field("output", array("output"=>"raw")); 
            if($output != null){
          ?>
          <div class="feature"><!-- Output content -->
            <h2>OUTPUT</h2> <!-- Output Title -->
            <p><?php echo $output;?></p>
          </div><!-- end Output content -->
          <?php } ?>

          <?php
            $next = types_render_field("next", array("output"=>"raw")); 
            if($next != null){
          ?>
          <div class="feature"><!-- Next content -->
            <h2>Next</h2> <!-- Next Title -->
            <p><?php echo $next;?></p>
          </div><!-- end Next content -->
          <?php } ?>

          <?php
            $reference = types_render_field("reference", array("output"=>"raw")); 
            if($reference != null){
          ?>
          <div class="feature"><!-- Resource content -->
            <h2>Reference</h2> <!-- Resource Title -->
            <p><?php echo $reference;?></p>
          </div><!-- end Resource content -->
          <?php } ?>
          
        </section><!-- Close When, Why, etc -->

      </div> <!-- Close desktop layout-->


      <!-- MOBILE LAYOUT!!!!! -->

      <div id="card-mobile-layout"> <!-- Start Mobile Layout ...card_title-->
        <div class="main_content">
          <header class="mobile_header">

            <div class="card_go_back previousMethod">  
              <?php if($previousMethod != false) { ?>
                <a href="<?php echo $previousMethod; ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/mobile_arrow_left.svg" alt="back"></a>
              <?php } ?>
            </div>

            <div class="card_page_icon">
              <?php 
                
                echo $logoIcon;
              ?>
            </div>

					  <div class="card_mobile_title">
  					  <h1 itemprop="headline"><?php the_title(); ?></h1>
              <div class="card_page_time">
               <?php
                  if ( !empty( $sub_categories ) ) {
                    foreach ( $sub_categories as $sub_category ) {
                      $sub_category_name=$sub_category->slug;
                      if('market-customers'==$sub_category_name){
                        echo '<div class="cat-left market-customers_box">';
                      } else if('stakeholders-money'==$sub_category_name){
                        echo '<div class="cat-left stakeholders-money_box">';
                      } else  if('product-services'==$sub_category_name){  
                        echo '<div class="cat-left product-services_box">';
                      } else if('organization-culture'==$sub_category_name){
                        echo '<div class="cat-left organization-culture_box">';
                      } else if('sales-distribution'==$sub_category_name){
                        echo '<div class="cat-left sales-distribution_box">';
                      } else {
                        echo '<div class="cat-left undefined_box">';
                      }     
                    }
                  echo '</div><!-- closes the sub-category div-->';
                  } else {
                    echo '<div class="cat-left undefined_box"> </div>';
                  }
                        
                  if ( !empty( $categories ) ) { 
                    foreach ( $categories as $category_si ) {
                      $category_si_name=$category_si->slug;
                      if('impact'==$category_si_name){  
                        echo '<div class="cat-right impact_box">';
                      } else {
                        echo '<div class="cat-right strategy_box">';
                      }
                      
                    }
                  echo '</div><!-- closes the category div-->';
                }?>
              
                <h2> <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/clock.svg"> <?php echo types_render_field("duration", array("output"=>"raw")); ?></h2>
              </div>
            </div>

            <div class="card_go_next nextMethod">  
              <?php if($nextMethod != false) { ?>
                <a href="<?php echo $nextMethod; ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/mobile_arrow_right.svg" alt="back"></a>
              <?php } ?>
            </div>

					</header> <?php // end article header ?>

				</div> <!-- close main content -->


        <section class="card_text" itemprop="articleBody"> <!-- card body -->
          <div class="card_text">
            <h3>  <!-- Summary -->
              <?php echo types_render_field("summary", array("output"=>"raw")); ?>
            </h3>

            <div class="feature">
              TASKS 
            </div>
    
            <p class="card_text">
            <?php the_content();?>
            </p>  
          </div>
          
          <section><!-- When, Why, etc -->
          <?php
            $when = types_render_field("when", array("output"=>"raw")); 
            if($when != null){
          ?>
          <div class="feature"><!-- When content -->
            <h2>WHEN</h2> <!-- When Title -->
            <p><?php echo $when;?></p>
          </div><!-- end When content -->
          <?php } ?>

          <?php
            $why = types_render_field("why", array("output"=>"raw")); 
            if($why != null){
          ?>
          <div class="feature"><!-- Why content -->
            <h2>WHY</h2> <!-- Why Title -->
            <p><?php echo $why;?></p>
          </div><!-- end Why content -->
          <?php } ?>

          <?php
            $note = types_render_field("note", array("output"=>"raw")); 
            if($note != null){
          ?>
          <div class="feature"><!-- Note content -->
            <h2>NOTE!</h2> <!-- Note Title -->
            <p><?php echo $note;?></p>
          </div><!-- end Note content -->
          <?php } ?>

          <?php
            $output = types_render_field("output", array("output"=>"raw")); 
            if($output != null){
          ?>
          <div class="feature"><!-- Output content -->
            <h2>OUTPUT</h2> <!-- Output Title -->
            <p><?php echo $output;?></p>
          </div><!-- end Output content -->
          <?php } ?>

          <?php
            $next = types_render_field("next", array("output"=>"raw")); 
            if($next != null){
          ?>
          <div class="feature"><!-- Next content -->
            <h2>Next</h2> <!-- Next Title -->
            <p><?php echo $next;?></p>
          </div><!-- end Next content -->
          <?php } ?>

          <?php
            $reference = types_render_field("reference", array("output"=>"raw")); 
            if($reference != null){
          ?>
          <div class="feature"><!-- Resource content -->
            <h2>Reference</h2> <!-- Resource Title -->
            <p><?php echo $reference;?></p>
          </div><!-- end Resource content -->
          <?php } ?>
          
        </section><!-- Close When, Why, etc -->

            <div class="other_content">           
            <div class="share_card share_bar">
              <p> share this method on
            
              <?php echo '<div class="a2a_kit addtoany_list">';
                if ( function_exists( 'ADDTOANY_SHARE_SAVE_ICONS' ) ) { ADDTOANY_SHARE_SAVE_ICONS(); }
              echo '</div>'; ?>
              </p>
            </div>
          </div>
						

      </div>
						

					<div class="case_study_container">
					
					<?php
					$child_posts = types_child_posts('user-case');
					foreach ($child_posts as $child_post) {
					?>						
					<div class="case_study_section">
					<div class="case_study_title">
						<h2><?php echo $child_post->post_title; ?></h2>	
						</div>	
						<div class="case_study_text">
						<p><?php echo $child_post->fields['description']; ?>
						</p>	
						</div>	
					</div>

					<div class="case_study_section">
						<div class="case_study_title">
							<h2>Goal of the project</h2>	
						</div>	
						<div class="case_study_text">
							<p><?php echo $child_post->fields['goal-of-the-project']; ?>
						</p>	
						</div>	
					</div>
					<?php 
						if( $child_post->fields['image1']!=null){
					?>
					<div class="case_study_section">
						<img src="<?php echo $child_post->fields['image1']; ?>">
					</div>
					<?php 
						}
						if( $child_post->fields['image2']!=null){
					?>
					<div class="case_study_section">
						<img src="<?php echo $child_post->fields['image2']; ?>">
					</div>
					<?php
						}
						if( $child_post->fields['image3']!=null){
					?>
					<div class="case_study_section">
						<img src="<?php echo $child_post->fields['image3']; ?>">
					</div>
					<?php
						}
					?>

					<div class="case_study_section">
						<div class="case_study_title">
						<h2>Process outline</h2>	
						</div>	
						<div class="case_study_text">
						<p><?php echo $child_post->fields['process-outline']; ?>
						</p>	
						</div>	
					</div>
						
					<?php
					}
					?>
					</div>
					
                  
                </section> <?php // end article section ?>

                <footer class="article-footer">

                </footer> <?php // end article footer ?>

               

              </article> <?php // end article ?>