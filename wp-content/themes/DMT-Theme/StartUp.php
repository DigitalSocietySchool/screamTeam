<?php
/*
 Template Name: Start Up Phase
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


 <?php get_header(); 

include '../../../wp-load.php';
 ?>



<!-- Include Required Prerequisites -->
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />

<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js">

</script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />


<!-- set page styles -->

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
    width: 23%;
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
  align-content: center;
  height: 40%;
  padding-left: .5em;
}



</style>

<img  id="startupRocket" src="<?php echo get_stylesheet_directory_uri(); ?>library/images/Scream%20icons/RocketGif.png" style="position: absolute;
    float: left;
    z-index: 5;
    width: 20%;
    margin-left: 90%;
    margin-top: 0%;">

<!-- white background -->
<div id="bigContainer" style="height: 100%;width:100%;background-color:white;">

 <!-- Side Bar -->
<div class="startUpBar">

<div class="startUpTitle">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/Scream%20icons/StartUp.svg" style="width:1em;height:1.2em;margin-right:.5em;margin-left:.5em; vertical-align:text-bottom;float:left;"> STARTING UP
 </div>
 <div class="startUpItem" id="join" style="font-weight:bold;" onclick="landing()">Join SCREAM <img id="check1" class="icon" style="display:none;"; src= "<?php echo get_stylesheet_directory_uri(); ?>/library/images/Scream%20icons/check.svg"></div>

 <div class="startUpItem" id="setup" onclick="completedJoin()">Set Up Project<img id="check2" class="icon" style="display:none;"; src= "<?php echo get_stylesheet_directory_uri(); ?>library/images/Scream%20icons/check.svg"></div>

 <div class="startUpItem" id="maketeam" onclick="completedSetup()">Create a team<img id="check3" class="icon" style="display:none;"; src= "<?php echo get_stylesheet_directory_uri(); ?>/library/images/Scream%20icons/check.svg"></div>

</div>

<!-- CONTAINERS: ONE FOR EACH STAGE -->

<!-- 'Join Scream' Container -->
<div id="joinContainer" class="startUpContainer" style="visibility:visibile;">
  <div class="startUpHeader">JOIN THE SCREAM COMMUNITY</div>
  <div class="startUpSubHeader">Connect with other creative teams, enrich your goals with insights and present your process as it unfolds</div>

  <div id="container1" style="display: -webkit-flex;
    -webkit-flex-direction: row;
    display: flex;
    width: 50%;
    border-bottom: solid 2px rgba(191, 191, 191, 0.75);">
        <div class="readOnly" style="    display: inline-block;
        border-bottom: 2px black;
        margin-top: 0;
        padding-top: 18%;
        font-size: 130%;">Hello,</div>
        <input type="text" class="scream_oneline" placeholder=" your first name" style="padding-top: 1em;
        display: inline-block;
        margin-top: 16.3%;
        margin-bottom: 0;
        border-bottom: 0;
        padding-left: 0;">
  </div>

    <input type="text" class="scream_oneline" placeholder=" your last name" style="padding-top:1em;">
  <input type="text" class="scream_oneline" placeholder=" your email" style="padding-top:1em;">


<span style="display:flex;flex-direction:row;">
 <input type="password" class="scream_oneline" placeholder=" your password" style="padding-top:1em;">
 <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/Scream%20icons/key.png" style="margin-top: 5em;
    margin-right: 14em;
    width: 2em;
    height: 2em;">
 </span>
 <span style="display:flex;flex-direction:row;">
  <input type="password" class="scream_oneline" placeholder=" Confirm your password" style="padding-top:1em;">
   <img class="icon" src= "<?php echo get_stylesheet_directory_uri(); ?>/library/images/Scream%20icons/key.png" style="margin-top: 5em;
    margin-right: 14em;
    width: 2em;
    height: 2em;">
 </span>

  <div id="setupproj_btn" class="next_btn" onclick="completedJoin()">set up the first project</div>
</div>

<!-- SetUp Container -->
<div id="setUpContainer" class="startUpContainer" style="display:none;"> <div class="startUpHeader">SET UP THE PROJECT</div>
  <div class="startUpSubHeader">what are you going to work on?</div>
  <input type="text" class="box_input" name="projectName" placeholder="Your project name">
  <comment style="color:lightgrey;font-size:smaller;"> Don't worry! you can always edit your name later</comment>
<div style="font-weight: 500; margin-top: 1.5%;">Project Goal</div>

<div id="inputContainer" style="display: flex;border: solid;border: solid lightgray 2px;">
<textarea rows="4" cols="7" readonly="" style="display: inline-block;float:right;font-weight:bold;border-right: 0px;width: 9.5%;padding-top: 1%;padding-right: 0;background-color: transparent;">Our aim is</textarea>
<textarea rows="4" cols="50" style="display: inline-block;float: right;border-left: 0px;z-index: auto;position: relative;line-height: 24px;font-size: 16px;transition: none;padding-top: 1%;padding-left: 0%;background: white;" placeholder="Explain how you're trying to solve this project's design problem" data-gramm="true" data-txt_gramm_id="eeaeee72-d55c-ccbb-2a7d-a8f18d216b25" data-gramm_id="eeaeee72-d55c-ccbb-2a7d-a8f18d216b25" spellcheck="false" data-gramm_editor="true"></textarea><grammarly-btn><div style="z-index: 2; transform: translate(1662px, 415.797px);" class="_9b5ef6-textarea_btn _9b5ef6-show _9b5ef6-anonymous _9b5ef6-field_hovered" data-grammarly-reactid=".0"><div class="_9b5ef6-transform_wrap" data-grammarly-reactid=".0.0"><div title="Protected by Grammarly" class="_9b5ef6-status" data-grammarly-reactid=".0.0.0">&nbsp;</div></div><span class="_9b5ef6-btn_text" data-grammarly-reactid=".0.1">Not signed in</span></div></grammarly-btn>

</div>
  <comment style="color:lightgrey;font-size:smaller;"> Don't worry! you can always edit your project goal later</comment>

  <div style="font-weight: 500; margin-top: 1.5%;" >Time Frame</div>
    <input type="text" name="daterange" id="datepicker" style="background-color:white;width:40%;border:solid lightgray 2px; padding:.75em" value="Start date -----> End date" >
    <div id="setupproj_btn" class="next_btn" onclick="completedSetup()">Create team</div>
  </div>


<!-- 'Create a team' Container -->
<div id="teamContainer" class="startUpContainer" style="display:none;"> <div class="startUpHeader">CREATE A TEAM</div>
  <div class="startUpSubHeader">with whom are you working?</div>
    <input id="email_input" type="text" class="scream_oneline" placeholder="+Invite a team member by email address" style="padding-top:1em; "onkeypress="handle(event)">
      <span id="membersArea" style="display: -webkit-flex;display: flex;   -webkit-justify-content: center;
          justify-content: center;flex-direction:column; overflow:auto;"></span>


      <span id="button_wrap" style="display: -webkit-flex;display: flex;   -webkit-justify-content: center;
          justify-content: center;flex-direction:row;">

      <div id="planSprint_btn" class="next_btn" onclick="completedTeam()">Plan the first sprint</div>
      <div id="viewProj_btn" class="scream_btn" onclick="completedTeam()" style="    /* text-align: center; */
        /* width: 250px; */
        padding-top: 20px;
        padding-bottom: 20px;
        font-size: 110%;
        font-weight: bold;
        color: black;
        text-align: center;
        background-color: white;
        width: 23em;
        height: 6em;
        margin-top: 3em;
        line-height: 300%;
        margin-left: 1pc;"
            >View the Project Page
        </div>
      </span>
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
function landing(){
          $("#joinContainer").fadeIn("300");
          $("#setUpContainer").fadeOut("300");
          $("#teamContainer").fadeOut("900");
 
          $("#join").css("font-weight", "bold");
          $("#setup").css("font-weight", "normal");
          $("#maketeam").css("font-weight", "normal");
}
    
function completedJoin(){
          $("#joinContainer").fadeOut("300");
          $("#teamContainer").fadeOut("300");

          $("#setUpContainer").fadeIn("900");
          $("#check1").fadeIn("50");
           //unbolden previous step

          $("#join").css("font-weight", "normal");
          $("#setup").css("font-weight", "bold");
          $("#maketeam").css("font-weight", "normal");
}
function completedSetup(){
          $("#joinContainer").fadeOut("300");
          $("#setUpContainer").fadeOut("300");
          $("#teamContainer").fadeIn("900");
           
          $("#join").css("font-weight", "normal");
          $("#setup").css("font-weight", "normal");
          $("#maketeam").css("font-weight", "bold");
          $("#check2").fadeIn("50");

}        
    
function completedTeam(){
document.getElementById('startupRocket').src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/Scream%20icons/RocketGif_foever.gif";
}
  
// handle pressing ENTER while typing email 
    function handle(e){
        //TODO some form of validation needed, if user has already been registered, or has been notified 
        if(e.keyCode === 13){
          $email=document.getElementById('email_input').value;
            e.preventDefault(); // Ensure it is only this code that rusn
              var div = document.createElement("div");
              div.style.width = "50%";
              div.style.height = "au";
              div.style.background = "transparent";
              div.style.color = "black";
              div.innerHTML = "<img class='icon' src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/man.svg"/>"+$email;
              document.getElementById('email_input').value='';
              document.getElementById('email_input').placeholder="add more members";
              document.getElementById("membersArea").appendChild(div);

                $.ajax ({
                        url: "../email.php",
                        // data: { email : $email }, //optional
                        success: function( result ) {
                            //do something after you receive the result
                        }
                });

    }}
</script>