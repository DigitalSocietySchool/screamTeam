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

<!-- Include Required Prerequisites -->
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />

<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

    <div id= "main-content">
        <div id = "sidebar_box">
          
          <?php get_sidebar('create_project_sidebar');?>
        </div>
      <div id = "main_pcontent">
        <h3>STARTING A PROJECT</h3>
        <em>What are you going to work on?</em>
        <br>
        <br>
        <input class="scream_oneline" name="projectName" type="text" placeholder="Your project name" id = "scream_oneline"/>
        <br>

        <p>PROJECT GOAL</p> 
        
        <div class = "containerBox" id = "container_proj">
        <div id = "readOnly" class = "readOnly">   Our aim is to</div>
        <textarea id = "project_goal" class = "scream_textarea" size = 50 rows=50  placeholder = "Explain how you are planning to solve this project's design challenge. IT WEOOOOOOOOOOORKS"></textarea>

        </div>
        
        <span id = "chars">50</span> words remaining
         <!-- script to enforce word count -->
    <script>        
        var maxLength = 50; 
        $(project_goal).keydown(function(e){
                    text = document.getElementById("project_goal").value;
                var count= text.split(' ').length;
        if (e.keyCode==8){
                console.log('bs keypressed ', e.keyCode );
                text = document.getElementById("project_goal").value;
                var count= text.split(' ').length;
                console.log("count is ", count)
                document.getElementById("chars").innerText = maxLength-count+1;
            }
        else if (count >50){
                    e.preventDefault();
                }
      
            if (e.keyCode==32){
                text = document.getElementById("project_goal").value;
                var count= text.split(' ').length;
            document.getElementById("chars").innerText = maxLength-count;
            }
  
        })
    </script>
        
        <p style = "color:#a8aaab;"> Don't worry! You can always edit your project goal later.</p>

        <p>TIME FRAME</p>
           <input type="text" name="daterange" value="input date values" id="datepicker" />
        <br>

        <button type="button" id = "createteam_btn" class = "scream_btn">Create a team</button>
    </div>
        </div>

<script type="text/javascript">
//Declare Date range picker
  $('input[name="daterange"]').daterangepicker(
  {
    locale: {
      format: 'DD/MM/YYYY'
  }
});
</script>




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
