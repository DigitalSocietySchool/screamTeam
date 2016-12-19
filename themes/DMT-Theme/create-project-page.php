<?php

	global $wp_session;
	$wp_session['searching'] = false;
/*
 Template Name: Custom Create Project Page
 *
*/
?>

<?php get_header(); ?>

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

<?php get_footer(); ?>
