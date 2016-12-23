<?php 
	$currentQuery = esc_attr(get_search_query());
	$searchTerms = array();
	if(!(isset($_COOKIE['searchTerms']))) {
		$searchTerms[] = $currentQuery;
	} else {
		$searchTerms = json_decode(stripslashes($_COOKIE['searchTerms']));
		$searchTerms[] = $currentQuery;
	}
	setcookie('searchTerms', json_encode($searchTerms), (time()+3600), "/");


	get_header(); 
	global $wp_session;
	
	$wp_session['currentSearchQuery'] = $currentQuery;
	$wp_session['searching'] = true;
	if($wp_session['searching'] == false) {
		$wp_session['searching'] = true;
	}





	$search_count = 0;
	
	if(have_posts()) : while(have_posts()) : the_post();
		$search_count++;
	endwhile; endif;
	?>

			<div id="content">

				<div id="inner-content" class="wrap cf">
				
				 <div class="card_page">

					<div id="main" class="m-all t-2of3 d-5of7 cf search_results" role="main">
						<h1 class="archive-title"><span><?php _e( 'Search', 'bonestheme' ); ?></span></h1>
						<?php 
							$methodCards = array();
						?>
						<h2> Matches <?php pagination_result_count(); ?> with <span class="black"> <?php echo esc_attr(get_search_query()); ?> </span></h2>

						<?php if (have_posts()) : while (have_posts()) : the_post(); 
							$tempLink = get_permalink( get_the_ID(), false );
							$methodCards[] = $tempLink;
						?>
			
							<div class="search_item" id="post-<?php the_ID(); ?>">

								<header class="article-header">
									<h3 class="search-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
								</header>

								<section class="entry-content">
										<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'bonestheme' ) . '</span>' ); ?>
										<!--a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="black">read more</a-->
								</section>

								<footer class="article-footer">
									
									<?php if(get_the_category_list(', ') != ''): ?>
                  					<?php printf( __( 'Filed under: %1$s', 'bonestheme' ), get_the_category_list(', ') ); ?>
                  					<?php endif; ?>

                 					<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

								</footer> <!-- end article footer -->

							</div>

						<?php endwhile; 
							$wp_session['searchResults'] = $methodCards;
						?>

								<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="search_results">
										
											<h1><?php _e( 'Sorry, No Results.', 'bonestheme' ); ?></h1>
										
											<h2><?php _e( 'Try your search again.', 'bonestheme' ); ?></h2>
								
										
									</article>

							<?php endif; ?>

						</div>

							
				 </div>
				</div> 
			</div>

<?php get_footer(); ?>
