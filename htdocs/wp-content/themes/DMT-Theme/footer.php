			<footer class="footer" role="contentinfo">
    			
	
					<div class="footer_text">
						<p>share the toolkit</p>
					</div>

					<div class="share_bar">	
							
							<?php
							if ( function_exists( 'ADDTOANY_SHARE_SAVE_ICONS' ) ) {
								echo '<div class="a2a_kit a2a_kit_size_32 addtoany_list">';
								ADDTOANY_SHARE_SAVE_ICONS( array(
									'linkname' => 'Design Methods - toolkit', 'linkurl' => 'http://medialabamsterdam.com/toolkit'
								) );
								echo '</div>';
							} ?>
						
					</div>

					<div class="footer_colophon">
						<p><span class="serif">Design Methods - </span><span class="serifitalic">toolkit</span> is a project by <a href="http://www.medialabamsterdam.com" rel="nofollow">MediaLAB Amsterdam </a></p>
					</div>
				

				<div id="logo_acin">
					<img width="70px" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/ACIN_logo.svg" alt="back"></a>
				</div>

			</footer>

      <div class="mobile-footer">
      <ul class="mobile-footer-nav">
        <a href="<?php echo get_site_url(); ?>/using-the-toolkit"><li id="aboutFooterItem"><span>about</span></li></a><a href="<?php if (is_single() || is_page('using-the-toolkit') || is_search()) { echo get_site_url(); ?><?php } else { ?>#<?php } ?>"><li id="filterFooterItem"><span>filter</span></li></a><li id="searchFooterItem"><span>search</span></li>
      </ul>
    </div>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
