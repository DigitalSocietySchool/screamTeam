<?php

	global $wp_session;
	$wp_session['searching'] = false;
/*
 Template Name: Custom Create Team page
 *
*/
?>

<?php get_header(); ?>

    <div id= "main-content">
        <div id = "sidebar_box">
          
          <?php get_sidebar('create_project_sidebar');?>
        </div>
      <div id = "main_pcontent">
        <h3>CREATING A TEAM</h3>
        <em>With whom are you working on this project?</em>
        <br>
        <br>
        <input class="scream_oneline" value = "INVITE TEAM MEMBERS" type="text" readonly id = "scream_oneline"/>
        <br>
          <!--TODO: Make a button, fill in var with the team info and add another button once a team member is added -->
            <div class = "add_teammembers_list">
                <ul>
                <li><img class = "style.svg" src = "/library/images/man.svg"/> Name, email@gmail.com</li>
                <li><img class = "style.svg" src = "/library/images/man.svg"/> Add a team member</li> 
                </ul>
            </div>
        <button type="button" id = "plansprint_btn" class = "scream_btn">Plan your first sprint</button>
        <button type="button" id = "viewproj_btn" class = "scream_btn">View your project page</button>
    </div>
        </div>

<?php get_footer(); ?>
