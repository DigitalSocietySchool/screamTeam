<?php

global $wp_session;
$wp_session['searching'] = false;
/*
 Template Name: Custom Create Project Page
 *
*/
add_action("wp_enqueue_scripts", "enqueue_");
function enqueue_() {
    wp_enqueue_script( 'wp-api', plugins_url( 'build/js/wp-api.js', __FILE__ ), array( 'jquery', 'underscore', 'backbone' ), '1.0', true );
    $settings = array( 'root' => esc_url_raw( get_rest_url() ), 'nonce' => wp_create_nonce( 'wp_rest' ) );
    wp_localize_script( 'wp-api', 'WP_API_Settings', $settings );
    wp_register_script('wp-api');

}


 get_header(); ?>


    <div id= "main-content">
        <div id = "sidebar_box">
          
          <?php get_sidebar('create_project_sidebar');?>
        </div>
      <div id = "main_pcontent">
        <h3>STARTING A PROJECT</h3>
        <em>What are you doing to work on?</em>
        <br>
        <br>
        <input class="scream_oneline" name="projectName" type="text" placeholder="Your project name" id = "scream_oneline"/>
        <br>

        <p>PROJECT GOAL</p> 
        
        <div class = "containerBox" id = "container_proj">
        <div id = "readOnly" class = "readOnly">   Our aim is to</div>
        <textarea id = "project_goal" class = "scream_textarea" size = 50 maxLength = "50"  onkeyup="updateCharacterCounter()" placeholder = "Explain how you are planning to solve this project's design challenge."></textarea>
        </div>
        
        <span id = "chars">50</span> characters remaining
        <script>        
        var maxLength = 50; 
            
         function updateCharacterCounter()
        {
        var pgoal = document.getElementById("project_goal");
        document.getElementById("chars").innerText = (maxLength - pgoal.value.length);
        }   
                       
        </script>
        
        <p style = "color:#a8aaab;"> Don't worry! You can always edit your project goal later.</p>

        <p>TIME FRAME</p>

        Start date -----> End date
        <br>
        <br>

        <button type="button" id = "createteam_btn" class = "scream_btn">Create a team</button>
    </div>
        </div>

 <script type="text/javascript">


var jsonObj={
    "title": { "raw": "Alien Team9"}, 
    "type": "project",
    "slug": "alien-team-2",
      "status": "publish",
                
    "wpcf-project-goal": "to make a good website",
    "wpcf-start-date" : "1480550400",
    "wpcf-end-date": "1483056000"
}
    $(function() {
        $('#createteam_btn').click(function(){
            console.log("clicked");
      $.ajax({

            type: "POST",
           url:   "http://localhost/wp-json/wp/v2/project",  //to be changed into dynamic url relative to directory
           dataType:'jsonp',
           data: jsonObj,
           beforeSend: function ( xhr ) {
        xhr.setRequestHeader( 'X-WP-Nonce', wpApiSettings.nonce );

       },
       success: function(data){console.log(data) },
       error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log(XMLHttpRequest);
            console.log(textStatus);
            console.log(errorThrown);}
    
});
   });
  });
    </script> 

<?php get_footer(); ?>
