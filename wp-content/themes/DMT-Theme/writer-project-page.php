<?php

	global $wp_session;
	$wp_session['searching'] = false;
/*
 Template Name: Writer Project Page
 * TODO: Add progress bar
   TODO: Retrieve the values which are already filled in from the startup phase in their fields
   TODO: Enable editing and save the values
   TODO: Make the checklist (WIP) work.( Check whether the fields have been filled in and add a checkmark if it is)
   TODO: The code for saving the project photo has not been tested and might not work. 
*/
?>

<?php get_header(); ?>

    <div id= "main-content"><br><br>        
        
<!-- Contains Title, picture, timeline and work in progress. Source from image set to transparent to remove default border displayed in some browsers-->
       
        <div id = "projectHeader">
                <div id = "WIP">
                    <div  class = "tooltip">
                        <!--Tooltip-->
                        <div style=" color:#66afad; border-bottom:solid; width:350px; "> 
                        <span style ="color:#66afad;">WORK IN PROGRESS</span> <span style ="color:#66afad; float:right;">▼</span>
                        </div>
                        <!--Tooltip text
                        Code from: http://www.w3schools.com/css/tryit.asp?filename=trycss_tooltip_bottom-->
                        <span class="tooltiptext">
                            
                            <span id = "WIP1" style = "color:grey;"> Create a sprint </span> 
                            <span id ="WIP1CHECK"style= "float:right; padding-right:10px; color:grey; ">✓</span><br> 
                            
                            <span id = "WIP2"style = "color:grey;">Add team members</span>
                            <span id ="WIP2CHECK"style= "float:right; padding-right:10px; color:grey;" >✓</span><br>
                            
                            <span id ="WIP3">Add keywords</span> 
                            <!--<span id ="WIP3CHECK"style= "float:right; padding-right:10px; color:grey;" >✓</span>--><br>
                            
                            <span id ="WIP4">Add location</span>
                             <!--<span id ="WIP4CHECK"style= "float:right; padding-right:10px; color:grey;" >✓</span>--><br>
                            
                            <span id ="WIP5">Add info about the topic</span>
                             <!--<span id ="WIP5CHECK"style= "float:right; padding-right:10px; color:grey;" >✓</span>--><br>
                            
                            <span id ="WIP6">Add info about your target user</span>
                             <!--<span id ="WIP6CHECK"style= "float:right; padding-right:10px; color:grey;" >✓</span>--><br>
                            
                            <span id ="WIP7"> Add a photo</span>
                           <!-- <span id ="WIP7CHECK"style= "float:right; padding-right:10px; color:grey;" >✓</span>--><br>
                        </span>
                    </div> 
                       <span style ="color:grey; font-size:0.8em;"> <br>See what is missing on your project page</span>   
                </div>
            
               <div class = "centeredContent">
                <label for ="file-upload" class = "customFileUploadBlock" >   
                    <input id = "realFileUploadBtn"  style = "width:400px; height:200px"type = "file" onchange =  "document.getElementById('profilePic').src= window.URL.createObjectURL(this.files[0])">
                   <img id = "profilePic" alt = "Add a project photo" width = "400" height = "200px"       src="https://i.gyazo.com/e046e150975aafe3a208aa30411275cb.png"/>
                </label> 
               <br><br><br>
               <h3 style="font-size:1.5em;"> <strong>YOUR PROJECT NAME</strong></h3>
                 <br>
                <!-- Add progress bar-->
            </div>
       
        </div>   
    
<!-- Project Goal. TODO: Retrieve the value from the database. Enable editing and save changes -->
        <div class = "project_goal">
            <div id = "readOnly" class = "readOnly"> <h3><strong><em> Our aim for this project is to </em></strong>
            </h3></div>
            <textarea id = "project_goal" class = "scream_textarea" size = 50   placeholder = "Explain how you are planning to solve this project's design challenge." style = "font-style:italic;">find an alternative solution for dogwalkers in urban environments to encourage their hounds to urinate in a way that is less time consuming.
            </textarea>
        </div>
        
 <!-- Team Information -->       
    <div class = "team_info">
        
        <!-- List of team members -->
        <div class = "oneLineBorder"> <p style="color:grey;">THE TEAM</p></div>
  
        <li><img id = "member_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/man.svg"/><em> <strong>Name,</strong><br>email@gmail.com</em></li>
        
        <li><img id = "member_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/man.svg"/><em><strong>Name,</strong><br>email@gmail.com</em></li>
         <input class="scream_oneline" placeholder="+ Invite a team member by e-mailadress" type="text"  id = "scream_oneline"/>
        
        <!-- List of companies and locations -->
         <div class = "oneLineBorder"><p style="color:grey;">COMPANIES/ORGANIZATIONS</p></div>
        <input class="scream_oneline" placeholder="+ Add companies/organizations seperated by commas" type="text"  id = "scream_oneline"/>
        
        <img id = "location" class = "location_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/Location.svg"/>
        <input  id = "location" class="scream_oneline"  placeholder="+ Add locations" type="text"/>

        
        <!-- List of keywords -->
        <div class = "oneLineBorder"><p style="color:grey;">KEYWORDS</p></div>
        <input class="scream_oneline" placeholder="+ Add keywords seperated by commas" type="text"  id = "tag_input"/>
        

    </div>
             
<!-- Tabs -->   
    <div class="wrapper">
    <ul class="tabs clearfix" data-tabgroup="second-tab-group">
      <li><a href="#tab6" class="active">THE PROCESS</a></li>
      <li><a href="#tab7">THE BRIEF</a></li>
      <li><a href="#tab8">THE TOPIC</a></li>
      <li><a href="#tab9">THE TARGET USER</a></li>
    </ul>
        
    <section id="second-tab-group" class="tabgroup">
      <div id="tab6">
        <p> <button type="button" class = "scream_btn_blue"><strong><em> Start 'communicating your process'by planning your first sprint</em></strong></button></p>
      </div>
      <div id="tab7">
          <p>It's really cold here. Please find a solution to make it warmer.</p>
      </div>
      <div id="tab8">
        <textarea class = "scream_textarea_border" size = 50   placeholder = "Explain important concepts related to your project"></textarea>
          <button type="button" class = "scream_btn">Skip</button>
          <button type="button" class = "scream_btn_orange">Next</button>
         
      </div>
      <div id="tab9">
        <textarea class = "scream_textarea_border" size = 50   placeholder = "Who is your target user?"></textarea>
          <button type="button" class = "scream_btn">Skip</button>
          <button type="button" class = "scream_btn_orange">Next</button>
       
      </div>
    </section>
    </div>

        
<!-- Custom css changes for this page -->
    <style>

        .wrapper{
            float:left;
            margin-left: 350px;
            width: 50%;
        }
        .scream_btn_orange{
            float:right;
            width:20%;
            height:5%;
            margin: 10px;
            
        }
         .scream_btn{
            float:right;
             width:20%;
            height:5%;
             margin:10px;
        }
        .scream_btn_blue{
            width:auto;
        }
        li {
            list-style-type:none;
        }
        
      input[type="text"].scream_oneline {
            border-bottom: none;
            margin-right: 0px;
        }
             
        
    </style>
        
<!-- Script for the tab functionality -->
    <script type="text/javascript">
        $('.tabgroup > div').hide();
        $('.tabgroup > div:first-of-type').show();
        $('.tabs a').click(function(e){
          e.preventDefault();
            var $this = $(this),
                tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
                others = $this.closest('li').siblings().children('a'),
                target = $this.attr('href');
            others.removeClass('active');
            $this.addClass('active');
            $(tabgroup).children('div').hide();
            $(target).show();

    })
    </script>
        
<!--Script for saving the project picture -->
    <script>
       $('input[type="file"]').change(function(){
           var file = this.files[0]; // Retrieve value
            /*alert('Filename : ' + file.name + '<br />Filesize : ' + file.size);*/

               var jsonObj={
                "title": "Project Photo" ,
                "slug": "project-photo", 
                "type": "project",
                "status": "publish",
                "wpcf-project-photo": file,
            }
            $.ajax({
                type: "POST",
            url:   "http://localhost/wp-json/wp/v2/project",  //to be changed into dynamic url relative to directory
            dataType:'jsonp',
            data: jsonObj,
            beforeSend: function ( xhr ) {
                xhr.setRequestHeader( 'X-WP-Nonce', wpApiSettings.nonce );
                }, //on success do the following
                success: function(data){
                    alert('Succesfully send');

                }, // on failure do the following 
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    console.log(XMLHttpRequest);
                    console.log(textStatus);
                    console.log(errorThrown);}
                });

            e.preventDefault();

        });
    </script>
      </div> 

<?php get_footer(); ?>
