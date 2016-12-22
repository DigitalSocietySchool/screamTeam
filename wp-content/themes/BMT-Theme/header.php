<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Merriweather:400,900,900italic' rel='stylesheet' type='text/css'>

    <script src="https://code.jquery.com/jquery-2.1.1.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/flick/jquery-ui.css">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		 
		  ga('create', 'UA-29289194-3', 'auto');
		  ga('send', 'pageview');
		 
		</script>
		<?php // end analytics ?>
	</head>

	<body <?php body_class(); ?>>

		<div id="container">
      <div class="mobile-header">
        <a href="http://www.medialabamsterdam.nl">
          <img class="mobile-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/medialab-logo.svg" alt="logo from the Amsterdam MediaLAB" title="Amsterdam mediaLAB logo" onerror="this.src='<?php echo get_stylesheet_directory_uri(); ?>/library/images/medialab-logo.png'"/>
        </a>
          
          <div class="mobile-header-dots">
            <a href="<?php echo get_site_url(); ?>">
            <img width="60px" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/about_page/BMT_logo.svg" alt="back"></a>
            <!--
            <?php if (is_single()) { ?>
              <div class="header_go_back"> 
              <span>go back </span>
              <?php if($wp_session['searching'] == true) { ?>
                  <a href="<?php echo get_site_url(); ?>/?post_type=method-card&s=<?php echo $wp_session['currentSearchQuery']; ?>"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/card_back.png" alt="back"></a>
              <?php } else { ?>
                  <a href="<?php echo get_site_url(); ?>"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/card_back.png" alt="back"></a>
              <?php } ?>
                  
                
              </div>
            <?php } ?>
            -->
          </div>
      </div>
			<header class="header" role="banner">

				<div id="inner-header">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					
					<div id="logo">
						<p><a href="http://www.medialabamsterdam.com" rel="nofollow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/medialab-logo.svg" alt="MediaLAB Amsterdam"/></a></p>
					</div>

					<div id="dm">
						<h1><a class="title-site" href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
					</div>

          <a href="https://docs.google.com/forms/d/1Lm_6h3AlFZjXxDk8GfXkRyUK19fFBrtj0t22ZO7m8yw/viewform?embedded=true" target="_blank" rel="nofollow">
            <div id="order">
            <h3>order</h3>
            </div>
          </a>
					<div id="search">
						<h3>search</h3>
					</div>

					<div id="filter">
						<h3>filter methods</h3>
					</div>

					<a href="<?php echo get_site_url(); ?>/using-the-toolkit" rel="nofollow">
						<div id="howto">
						<h3>about</h3>
						</div>
					</a>
					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>


					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => false,                           // remove nav container
    					'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					'theme_location' => 'main-nav',                 // where it's located in the theme
    					'before' => '',                                 // before the menu
        			'after' => '',                                  // after the menu
        			'link_before' => '',                            // before each link
        			'link_after' => '',                             // after each link
        			'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

					</nav>

				</div>

			</header>
			<!-- FILTER MENU -->
      <div class="desktop-filter-sort-menu">
        <div class="desktop-filter-sort-row">
    			<div id="filter_menu">
            <div class="filter-sub-cat-container">
              <section class="filter-catg-box-left">
      					<div id="filter_market-customers" class="mixFilter filter-circle filter" data-filter=".market-customers">
      					</div>

                <div id="filter_product-services" class="mixFilter filter-circle filter" data-filter=".product-services">
                </div>

                <div id="filter_organization-culture" class="mixFilter filter-circle filter" data-filter=".organization-culture">
                </div>
      				
                <div id="filter_stakeholders-money" class="mixFilter filter-circle filter" data-filter=".stakeholders-money">
                </div>
      					
      					<div id="filter_sales-distribution" class="mixFilter filter-circle filter" data-filter=".sales-distribution">
      					</div>
               </section>
            </div>

          
            <div class="desktop-filter-select-container">
                <div id="filter-unselect-all" class="filter" data-filter="none">
                  <span class="helper"></span>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/deselect_all.svg"/> 
                  <span>unselect all</span>
                </div>
            </div>

             <div class="desktop-filter-category-container">
                <section class="filter-catg-box-right">
                  <div id="strategy" class="mixFilter filter" data-filter=".strategy">
                  </div>
                  <div id="impact" class=" mixFilter filter" data-filter=".impact">
                  </div>
                </section>
             </div>
             <div class="close-filter-container">
                <img id="close" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/close.png">
             </div>

            
    			</div>
        </div>

        <div class="desktop-filter-sort-row">
          <div id="desktop-sort-menu">
            <div class="sort-container">
              <span class="sort-main-title">Sort By</span>
            </div>
            
             <div class="name sort-container">
              <span class="sort-title">NAME</span>
              <img id="sort-name-asc" sort-type="name" data-mobile-sort="filter-sort-name-asc" data-sort="name:asc" class="desktop-sort active" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/az_selected.svg" onerror="this.src='<?php echo get_stylesheet_directory_uri(); ?>/library/images/az_selected.png'">
              <img id="sort-name-desc" sort-type="name" data-mobile-sort="filter-sort-name-desc" data-sort="name:desc" class="desktop-sort" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/za_unselected.svg" onerror="this.src='<?php echo get_stylesheet_directory_uri(); ?>/library/images/za_unselected.png'">
            </div>
          </div>
          <div class="desktop-filter-menu-spacer">
            <div class="sort-container">
              <span class="sort-main-title">Filter by </span>
              
            </div>

            <div class="sort-container time-label">
              <span class="sort-title">TIME</span>
            </div>
            <div class="sort-container time-slider">
              <div class="slider"></div>
            </div>
              

           
          </div>
        </div>
      </div>
			
			
			<div id="search_menu">
				<?php include ('searchform.php'); ?>
				<div id="closeSearch">
				</div>
			</div>

      <div class="mobile-search-container">
        <?php include ('searchform.php'); ?>
      </div>
