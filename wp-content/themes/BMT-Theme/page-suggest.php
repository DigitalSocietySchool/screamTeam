<?php
/*
Template Name: Suggest a Card
*/
?>
<?php get_header() ?>

<div id="content">
				
		<div id="container-left">
		<header class="card_title">
			<h1 itemprop="headline"><?php the_title(); ?></h1>
		</header>
            <?php the_post() ?>       
                <div class="entry-content"> 
                <script type="text/javascript" src="http://form.jotformeu.com/jsform/50181725722350"></script>
                </div>
              
		</div><!-- #content -->
		<div id="container-right" class="suggestmethod">
	    <div id="contact">
	       <h2>
                Suggest a new method
            </h2>
            <?php the_content() ?>
	    </div>    
	</div><!-- #container-right -->
    <div class="clearfooter"></div>
</div>



<?php get_footer() ?>