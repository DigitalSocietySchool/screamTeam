<?php


  global $wp_session;
    $wp_session['searching'] = false;
/*
 Template Name: Landing Page
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
 add_action("wp_enqueue_scripts", "enqueue_");
function enqueue_() {
    wp_enqueue_script( 'wp-api', plugins_url( 'build/js/wp-api.js', __FILE__ ), array( 'jquery', 'underscore', 'backbone' ), '1.0', true );
    $settings = array( 'root' => esc_url_raw( get_rest_url() ), 'nonce' => wp_create_nonce( 'wp_rest' ) );
    wp_localize_script( 'wp-api', 'WP_API_Settings', $settings );
    wp_register_script('wp-api');

}

?>

<?php get_header(); ?>

			<div id= "main-content">
    <div id = "sidebar_box">

        <?php get_sidebar('create_project_sidebar');?>
    </div>
    <div id = "main_pcontent">


        <h1>Set your goals, choose your methods, work your magic</h1>
        <h3>Design Method Toolkit for agile, team-based projects</h3>


            <p class="scream_wide_box" name="Explore Toolkit" onclick="gotoPage()">Explore Design Method Toolkit</p>


            <button type="button" id = "createteam_btn" class = "scream_btn">Create a team</button>
            </h3>
        </div>
    </div>





    <script>
    function gotoPage() {
     window.location.href = 'http://localhost/create-project/';
 }
 //make 
 $.ajax({
        type: "POST",
        url: "/webservices/PodcastService.asmx/CreateMarkers",
        data: markers,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function(data){alert(data);},
        failure: function(errMsg) {
            alert(errMsg);
        }
  });
</script>

<?php get_footer(); ?>
