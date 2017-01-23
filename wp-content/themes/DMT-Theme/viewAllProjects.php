<?php
/*
 Template Name: Reader Projects Page
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/

/* 

TODO:


general:
1) all projects creted by the user
2) user profile page [already generated, need to be customized]
3) list of all projects and their keywords. [high priority]
4) 

- add support for custom fields

*/
/*$user = wp_get_current_user();
$user_id = $user -> ID;
$user_proj = array("1403","1393");
update_user_meta( $user_id, 'user_projects', $user_proj);
 ?> */
 ?>






 <?php get_header(); ?>

 <style> 
.flex-container {
    display: -webkit-flex;
    flex-wrap: wrap;
    flex-direction: row;
    display: flex;
    width: 100%;
    height: auto;
    background-color: transparent;
}

.flex-item {
    background-color: lightgray;
    height: 23em;
    margin: 10px;

}

.flex-item:hover {
	    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
	    background-color:rgb(255, 230, 255);

}
.projThumb{
  height:50%;
  align: center;
  background-color: transparent;
    padding: 3px;

}
.projTitle {
  text-align: center;
  font-weight: bold;
  font-size: 200%;
  height:15%;
}
.projGoal {
  text-align:center;
  height: 40%;
  padding-left: .5em;
}

</style>



 <div id="content">
<!-- <?php
$blogusers = get_users( 'blog_id=1' );
// Array of WP_User objects.
foreach ( $blogusers as $user ) {
	echo '<span> <p>' . esc_html( $user->first_name) . '</p></span>';
}

?> -->

<h1><center>Projects</center></h1>
<div class="flex-container">

 	<?php
// 	$methodCards = array();
			$type = 'project';
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
 	$loop = new WP_Query($args);
 	if ( $loop->have_posts() ) :
 		while ( $loop->have_posts() ) : $loop->the_post();
 	$goal= get_the_terms( $post -> ID, 'wpcf-project-goal');
 	$ID= get_the_ID();


 	//get the user ID
 	//use userID to find out related project IDs
 	//load project IDs



  /*echo $user_id;
  $key = 'user_projects';
  $single = false;
  echo '</br>'; */

  /*$userprojectlist = get_user_meta( $user_id, $key, $single ); 
  foreach ($userprojectlist[0] as $value) {
     // echo $value;
    echo 'project : ', get_the_title($value);
      echo '</br>';
} */



$custom_fields = get_post_custom(get_the_ID());
if (!isset($custom_fields['wpcf-project-goal'])){
	$project_goal ="no goal :(";
} else{
	$project_goal = $custom_fields['wpcf-project-goal'];


}
//  echo 'goal is : ', $project_goal[0];
 		 ?>
        <a href="/index.php?page_id=1445" style="
    width: 23%;
    height: 23em;
    margin: 10px;
}">

 		 <div class="flex-item">
 		 	<div><?php echo get_the_ID(); ?></div>
 		 	<div class="projThumb"></div>
 		 	<div class="projTitle"><?php if (get_the_title()==''){echo 'Untitled Project';} else {
 		 	echo get_the_title();} ?></div>
 		 	<div class="projGoal"><?php echo $project_goal[0]; ?></div>
     	 </div>
       </a>

 	<?php endwhile;
 	if (  $loop->max_num_pages > 1 ) : ?>
 	<div id="nav-below" class="navigation">
 		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Previous', 'domain' ) ); ?></div>
 		<div class="nav-next"><?php previous_posts_link( __( 'Next <span class="meta-nav">&rarr;</span>', 'domain' ) ); ?></div>
 	</div>
 <?php endif;
 endif;
 wp_reset_postdata();

 ?>
 </div> 
</div>


<?php get_footer(); ?>
