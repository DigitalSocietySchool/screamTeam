<?php

	global $wp_session;
	$wp_session['searching'] = false;
/*
 Template Name: Awesome page
 *
*/
?>

<?php get_header(); ?>
  	<div id="filter-content">

  		<div id="filter-top">
  			<div id="filter-left">

	        	<div class="filter-categories">
		        	<div class="filter-dot-row">
			            <div class="filter-dot left">
			              <div class="filter-goal"  data-filter=".research">
			              	<img class="filter-mobile-image" data-filter=".research" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/filter_category_icons/research_deactivated.svg" onerror="this.src='<?php echo get_stylesheet_directory_uri(); ?>/library/images/filter_category_icons/research_deactivated.png'">
			              </div>
			            </div>
			            <div class="filter-dot right">
			              <div class="filter-goal" data-filter=".create">
			                <img class="filter-mobile-image" data-filter=".create" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/filter_category_icons/create_deactivated.svg" onerror="this.src='<?php echo get_stylesheet_directory_uri(); ?>/library/images/filter_category_icons/create_deactivated.png'">
			              </div>
			            </div>
			        </div>
	        	</div> <!-- close filter-categories -->
        	</div><!-- close filter-left -->
			<div id="filter-right">
	        	<div id="filter-selections">
		            <div id="select-all-button" class="selection-button">
		              <span>Select All</span>
		            </div>
		            <div id="unselect-all-button" class="selection-button">
		              <span>Unselect All</span>
		            </div>
		         </div> <!-- close filter-selections -->
		    </div><!-- filter-right -->

  		</div><!-- close filter-top -->

  		<div id="filter-middle">
  			<div id="filter-left">
	  			<div class="filter-sub-categories">
		          <div class="filter-dot-row">
		            <div class="filter-dot left">
		              <div class="filter-goal"  data-filter=".define-intentions">
		              	<img id="filter_define-intentions_m" class="filter-sub filter-mobile-image" data-filter=".define-intentions" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/filter_category_icons/define_intentions_deactivated.svg" onerror="this.src='<?php echo get_stylesheet_directory_uri(); ?>/library/images/filter_category_icons/define_intentions_deactivated.png'">
		              </div>
		            </div>
		            <div class="filter-dot right">
		              <div class="filter-goal" data-filter=".ideation-concept">
		                <img id="filter_ideation-concept_m" class="filter-sub filter-mobile-image" data-filter=".ideation-concept" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/filter_category_icons/ideation_and_concepts_deactivated.svg" onerror="this.src='<?php echo get_stylesheet_directory_uri(); ?>/library/images/filter_category_icons/ideation_and_concepts_activated.png'">
		                
		              </div>
		            </div>
		          </div>

		          <div class="filter-dot-row">
		            <div class="filter-dot left">
		              <div class="filter-goal" data-filter=".know-user">
		                <img id="filter_know-user_m" class="filter-sub filter-mobile-image" data-filter=".know-user" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/filter_category_icons/know_user_deactivated.svg" onerror="this.src='<?php echo get_stylesheet_directory_uri(); ?>/library/images/filter_category_icons/know_user_activated.png'">
		                
		              </div>
		            </div>
		            <div class="filter-dot right">
		              <div class="filter-goal" data-filter=".frame-insights">
		                <img id="filter_frame-insights_m" class="filter-sub filter-mobile-image" data-filter=".frame-insights" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/filter_category_icons/frame_insights_deactivated.svg" onerror="this.src='<?php echo get_stylesheet_directory_uri(); ?>/library/images/filter_category_icons/frame_insights_activated.png'">
		                
		              </div>
		            </div>
		          </div>
		          <div class="filter-dot-row">
		            
		            <div class="filter-dot">
		              <div class="filter-goal" data-filter=".prototype-test">
		                <img id="filter_prototype-test_m" class="filter-sub filter-mobile-image" data-filter=".prototype-test" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/filter_category_icons/prototype_and_test_deactivated.svg" onerror="this.src='<?php echo get_stylesheet_directory_uri(); ?>/library/images/filter_category_icons/prototype_and_test_activated.png'">
		                
		              </div>
		            </div>
		          </div>
		        </div><!-- close filter-sub-categories -->
  			</div><!-- filter-left -->

  			<div id="filter-right">
  				<div id="filter-statistics">
		            <div class="filter-sort-container" id="filter-name">
		              	<div id="filter-sort-name-asc" class="filter-sort left active" data-desktop-sort="sort-name-asc" data-sort="name:asc">
		                	<span class="filter-sort-title">NAME</span>
		                	<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/az_white_selected.svg" onerror="this.src='<?php echo get_stylesheet_directory_uri(); ?>/library/images/az_white_selected.png'"/>
		              	</div>
			             <div id="filter-sort-name-desc" class="filter-sort right" data-desktop-sort="sort-name-desc" data-sort="name:desc">
			                <span class="filter-sort-title">NAME</span>
			                <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/za_unselected.svg" onerror="this.src='<?php echo get_stylesheet_directory_uri(); ?>/library/images/za_unselected.png'"/>
			             </div>
		            </div>

		            <div class="filter-sort-container" id="filter-effort"> <!-- TODO Effort maybe use something else? -->
		              
		            </div>

		            <div class="filter-sort-container" id="filter-time">
		              	<div id="filter-sort-time-desc" class="filter-sort left" data-desktop-sort="sort-time-desc" data-sort="duration:desc">
			                <span class="filter-sort-title">TIME</span>
			                <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/time_hi_unselected.svg" onerror="this.src='<?php echo get_stylesheet_directory_uri(); ?>/library/images/time_hi_unselected.png'">
			             </div>

			             <div id="filter-sort-time-asc" class="filter-sort right" data-desktop-sort="sort-time-asc" data-sort="duration:asc">
			                <span class="filter-sort-title">TIME</span>
			                <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/time_low_unselected.svg" onerror="this.src='<?php echo get_stylesheet_directory_uri(); ?>/library/images/time_low_unselected.png'">
			             </div>
		            </div>
	          	</div><!-- close filter-statistics -->
  			</div><!-- filter-right -->
  		</div> <!-- close filter-middle -->
  		<div id="filter-bottom">
  			<div id="filter-left">
  				<div id="return-button" class="selection-button">
	              <span>APPLY FILTERS</span>
	            </div>
  			</div><!-- filter-left -->
  			<div id="filter-right">
  				<div id="return-button" class="selection-button">
	              <span>CANCEL</span>
	            </div>
  			</div><!-- filter-right -->
  		</div><!-- close filter-bottom -->
  	</div> <!-- filter-top -->

	<div id="header_bg">
		
		<span>Set your goals, choose your methods, work your magic.</span>
		<div>Design Method Toolkit for agile, team-based projects</div>
		
  	</div>

	<div id="content">
		<span class="helper"></span>
		<?php 
			$methodCards = array();
			$type = 'method-card';
			$orderby = 'title';
			$order = 'ASC';
			$args = array (
			 'post_type' => $type,
			 'post_status' => 'publish',
			 'paged' => $paged,
			 'posts_per_page' => 100,
			 'ignore_sticky_posts'=> 1,
			 'orderby' => $orderby,
			 'order' => $order
			);
			$temp = $wp_query; // assign ordinal query to temp variable for later use  
			$wp_query = null;
			$wp_query = new WP_Query($args); 
			if ( $wp_query->have_posts() ) :
				while ( $wp_query->have_posts() ) : $wp_query->the_post();
					$tempLink = get_permalink( $post->ID, false );
					$methodCards[] = $tempLink;
					
					$categories = get_the_terms( $post->ID, 'category_rc' );
					$sub_categories = get_the_terms( $post->ID, 'sub-category' );

					$goals = get_the_terms( $post->ID, 'goal' );
					/*$goals_class=" ";
					foreach ( $goals as $goal ) {
						$goals_class=$goals_class." ".$goal->slug;
					}*/

					$categories_class=" ";
					foreach ( $categories as $category ) {
						$categories_class=$categories_class." ".$category->slug;
						
					}

					$sub_categories_class=" ";
					foreach ( $sub_categories as $sub_category ) {
						$sub_categories_class=$sub_categories_class." ".$sub_category->slug;
						
					}
					
					
					
					
					$duration= strtoupper(types_render_field("duration", array("output"=>"raw")));
					$duration_num=0;
					
					if(strcmp($duration,"2 HOURS")==0){
						$duration_num=1;
					} else if(strcmp($duration,"4 HOURS")==0){
						$duration_num=2;
					} else if(strcmp($duration,"1 DAY")==0){
						$duration_num=3;
					} else if(strcmp ($duration,"2 DAYS")==0){
						$duration_num=4;
					} else if(strcmp($duration,"3 DAYS")==0){
						$duration_num=5;
					} else if(strcmp($duration,"4 DAYS")==0){
						$duration_num=6;
					} else if(strcmp($duration,"A WEEK")==0){
						$duration_num=7;
					}

					$timeMin= " timeMin-".strtoupper(types_render_field("time-min", array("output"=>"raw")));
					$timeMax= " timeMax-".strtoupper(types_render_field("time-max", array("output"=>"raw")));
		
					echo '<div class="flip-container mix '.$timeMin.$timeMax.$categories_class.$sub_categories_class.'" data-name="'.get_the_title().'" data-duration="'.$duration_num.'">';
						echo '<a href="'.get_permalink( $post->ID ).'">';
						?>
						
						 <div class="card">
							<div class="title"> <h1>
								<?php 
              						the_title();
            					?>
							</h1> </div>
														
							<div class="flip">
								<div class="card_front card">
									<div class="icon">
									<?php
										$icon = types_render_field("icon", array("size"=>"thumbnail"));
										echo $icon; ?>
									</div>
								</div>
							
								<div class="card_back card">
									<div class="back_text">
									<?php
									$summary = substr(types_render_field("summary", array("output"=>"raw")),0,114);
									echo '<p>'.$summary;
								
									if(strlen($summary) >=114){
										echo " ...";
									}
									?>
									</p></div>
								</div>
							</div>
							
							<div class="card_bottom">
								<?php
									if ( !empty( $sub_categories ) ) {
										foreach ( $sub_categories as $sub_category ) {
											$sub_category_name=$sub_category->slug;
											if('define-intentions'==$sub_category_name){
												echo '<div class="cat-left define-intentions_box">';
											} else if('ideation-concept'==$sub_category_name){
												echo '<div class="cat-left ideation-concept_box">';
											} else  if('know-user'==$sub_category_name){	
												echo '<div class="cat-left know-user_box">';
											} else if('frame-insights'==$sub_category_name){
												echo '<div class="cat-left frame-insights_box">';
											} else if('prototype-test'==$sub_category_name){
												echo '<div class="cat-left prototype-test_box">';
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
									<h2>
										<?php echo $duration; ?>
									</h2>
									
								</div>

								<?php
									if ( !empty( $categories ) ) {
										
										foreach ( $categories as $category_rc ) {
											$category_rc_name=$category_rc->slug;
											if('create'==$category_rc_name){	
												echo '<div class="cat-right create_box">';
											} else {
												echo '<div class="cat-right research_box">';
											}
											
										}
									echo '</div><!-- closes the category div-->';
									}
								
									
									?>
								
									
								
							</div>
						
							
						
							<?php
							
							
						echo '</div>';	
					echo '</a>';
					echo '<a href="'.get_permalink( $post->ID ).'"> <div class="mobile-view-method"><img width="60px" src="'.get_stylesheet_directory_uri().'/library/images/view_method.svg" alt="back"> </div> </a>';
					echo '</div>';
				endwhile;
			else :
				echo '<h2>Not Found</h2>';
				get_search_form();
			endif;
			$wp_query = $temp;
			$wp_session['searchResults'] = $methodCards;
			?>
			<span class="helper"></span>
	</div>


<?php get_footer(); ?>
