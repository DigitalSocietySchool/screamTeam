<?php

	global $wp_session;
	$wp_session['searching'] = false;
/*
 Template Name: Sprint 2  Page
 TODO: Change the tabs functionality to the working one ( See technical documentation)
*/
?>

<?php get_header(); ?>

    <div id= "main-content"><br><br>
  <!-- POP UP PAGE MVP-->        
    <div class = "popupPage" id = "MVP">
        <div class = "popup-content">
            
            <!-- Popup header (blue area)-->
           <div id = "popupHeader" style = "background-color:#c5e3e3">
           <span class ="close" onclick = "hide('MVP')" >&times;</span>
            <img id = "lightBulb" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/mvp.svg"/>
               <h2 style= "vertical-align: middle; width:80%; margin-bottom:1em; display:inline-block; margin-left:1em; "> <i><strong>The minimal viable product is</strong> an infographic that maps the target users’ documentation process.</i></h2>
           </div>
                <div style = "padding-left:2em;">
                   <p style = "color:grey; font-size:0.8em;"><i> Method - Infographic</i></p>  
                <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    People have personal preferences when it comes to documenting.</li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                   Customization of the platform is important, but an “easy to use platform” has more priority.</li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    People already document consistently, but not for the purpose of sharing (with the team and/or the world). This makes the documentation only understandable for themselves.</li>
                   <br><br>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                   It is hard to classify behavior, especially with teams that are multidisciplinary and international.</li>
                   <br><br>

                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We translated all the quantified data into an infographic. We also added the personas to this infographic. We presented this infographic to our product owners to show how our target users THINK they document, how they FEEL about documenting and how they actually DO document. </p>

                  <!-- Links/ photos/files -->
                  <p style = "font-size:1em;"><strong>LINKS/PHOTOS/FILES</strong></p>
                 <div style = "border-left:solid; color:#66afad; padding:0px; padding-left:10px">
                       <p style = "color:black;"><i>https://drive.google.com/open?id=0B2DcaGGKzkPxX19HOUpoeGZhNDA</i></p>
                      <p>THE INFOGRAPHIC - This is the whole presentation (with the infographic) that we had prepared for our product owners </p>
                 
                  </div>  <br><br>
                </div>
        </div>
</div> <!-- END POP UP PAGE MVP-->  
 <!--KEY INSIGHT 1 - POP UP PAGE-->        
    <div class = "popupPage" id = "popupPage1">
        <div class = "popup-content">
            
            <!-- Popup header (yellow area)-->
           <div id = "popupHeader">
            <span class ="close" onclick = "hide('popupPage1')">&times;</span>
           <p><i>SCREAM! Tool project // Sprint 2</i></p> 
            <img id = "lightBulb" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/KeyInsight_new.svg"/>
               <h2 style= "vertical-align: middle; width:80%; margin-bottom:1em; display:inline-block; margin-left:1em; "><i>People have personal preferences when it comes to documenting</i></h2>
           </div>
            
            <!-- popup tabs -->
            <div class="wrapper" style = "background-color:white; ">
            <ul class="tabs2 clearfix" data-tabgroup="second-tab-group" style="background-color:#f5da81; margin-top:0px;">
              <li><a href="#tab12" class="active2">MEETING </a></li>
              <li><a href="#tab13">WWWWWH</a></li>
              <li><a href="#tab14">ANALYZING TEAMS</a></li>
              <li><a href="#tab15">INFOGRAPHIC</a></li>
            </ul>

        <!-- Tab text here (inside)-->
            <section id="second-tab-group" class="tabgroup">
              <div id="tab12">
                <p style = "color:grey; font-size:0.8em;"> <i>Activity - Meeting with Marco and Gijs </i></p>

                  <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    The debate might be to fixed and people will be biased by other people's opinions. </li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Creating an interactive storyboard is a lot of work and the results are not very interesting. The participants will answer according to the story and not think for themselves.  </li>
                   <br><br>

                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We met with @Marco en @Gijs to talk about our progress thus far. Talking to them helped us finding a better method to get insights about our target user.</p>
                  <br>
            </div><br>
                
            <div id = "tab13">
                <p style = "color:grey; font-size:0.8em;"> <i>Method - Conversation tool based on the WWWWWH</i></p> 
                 <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                      Every user has its own personal preferences when it comes to documenting.</li>
                   <br><br>
                
                  <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                      People have both negative and positive feelings regarding the different documentation platforms</li>
                   <br><br>
                
                  <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                      Usability is very important when it comes to documenting.</li>
                   <br><br>
                  <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    People already document, but not for the purpose of sharing, this makes the documentation not understandable for others.</li>
                   <br><br>

                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We created a conversation tool based on the WWWWWH method to find out how people THINK they document and how people FEEL about documenting. Our conversation tool consisted of three elements: categories, cards, fill-in story.
                    We came up with 6 categories to get people to think about their documentation process:<br>
                    - Platforms;<br>
                    - Events (related to the Scream methodology);<br>
                    - Attitudes;<br>
                    - Sharing (with);<br>
                    - Problems;<br>
                    - Kind of documents.<br>
                    By giving them categories and cards we wanted to lower the barrier for them to talk about documentation. They could use the cards from the categories to fill in the gaps in the fill-in story.</p>

                 <p style = "font-size:1em;"><strong>Notes:</strong></p>
                <p>By giving them categories and cards we wanted to lower the barrier for them to talk about documentation. They could use the cards from the categories to fill in the gaps in the fill-in story. </p>
                
                  <!-- Links/ photos/files -->
                  <p style = "font-size:1em;"><strong>LINKS/PHOTOS/FILES</strong></p>
                   <div style = " color:#66afad; padding:0px;">
                       <img id = "profilePic" alt = "Add a project photo" width = "1000" height = "700px" src="https://i.gyazo.com/9b99627f95946b702133e4904ffa6035.png"/>
                      <p>CONVERSATION TOOL - This is an example of a filled in story about documentation</p><br><br><br>
                  </div> <br>
                
            </div>
            <div id = "tab14">
                 <p style = "color:grey; font-size:0.8em;"> <i>Method - Analyzing other team's documentation</i></p>
                <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Team creates their own structure.</li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    All teams divided their documents by sprints, but inside these sprints there was a different structure for each team. </li>
                   <br><br>

                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We asked the other MediaLAB teams to add us to their digital folders such as Google Drive and Dropbox. We tried to map the ways in which they structure their files. Besides that we looked at who uploaded what kinds of documents. </p>

                <p style = "font-size:1em;"><strong>Notes:</strong></p>
                <p>We only used data from sprint 1, so it's not an accurate representation of the actual data regarding the roles. Besides that, we did not inspect communication media that the team’s might use to document.</p>
                
            </div>
            <div id = "tab15">
             <p style = "color:grey; font-size:0.8em;"> <i>Method - Infographic</i> </p>  
                <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    People have personal preferences when it comes to documenting.</li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                   Customization of the platform is important, but an “easy to use platform” has more priority.</li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    People already document consistently, but not for the purpose of sharing (with the team and/or the world). This makes the documentation only understandable for themselves.</li>
                   <br><br>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                   It is hard to classify behavior, especially with teams that are multidisciplinary and international.</li>
                   <br><br>

                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We translated all the quantified data into an infographic. We also added the personas to this infographic. We presented this infographic to our product owners to show how our target users THINK they document, how they FEEL about documenting and how they actually DO document. </p>

                  <!-- Links/ photos/files -->
                  <p style = "font-size:1em;"><strong>LINKS/PHOTOS/FILES</strong></p>
                 <div style = "border-left:solid; color:#66afad; padding:0px; padding-left:10px">
                       <p style = "color:black;"><i>https://drive.google.com/open?id=0B2DcaGGKzkPxX19HOUpoeGZhNDA</i></p>
                      <p>THE INFOGRAPHIC - This is the whole presentation (with the infographic) that we had prepared for our product owners </p>
                  </div>       
            </div>
        </section>
        </div>
    </div>
</div> <!-- END POP UP PAGE 1--> 
        
 <!--KEY INSIGHT 2 - POP UP PAGE-->        
    <div class = "popupPage" id = "popupPage2">
        <div class = "popup-content">
            
            <!-- Popup header (yellow area)-->
           <div id = "popupHeader">
            <span class ="close" onclick = "hide('popupPage2')">&times;</span>
           <p><i>SCREAM! Tool project // Sprint 2</i></p> 
            <img id = "lightBulb" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/KeyInsight_new.svg"/>
               <h2 style= "vertical-align: middle; width:80%; margin-bottom:1em; display:inline-block; margin-left:1em; "><i>People already document consistently, but not for the purpose of sharing (with the team and/or the world). This makes the documentation only understandable for themselves.</i></h2>
           </div>
            
            <!-- popup tabs -->
            <div class="wrapper" style = "background-color:white; ">
            <ul class="tabs2 clearfix" data-tabgroup="second-tab-group" style="background-color:#f5da81; margin-top:0px;">
              <li><a href="#tab16" class="active2">WWWWWH</a></li>
              <li><a href="#tab17"> ANALYZING TEAMS</a></li>
            </ul>

        <!-- Tab text here (inside)-->
            <section id="second-tab-group" class="tabgroup">
              <div id="tab16">
               <p style = "color:grey; font-size:0.8em;"><i> Method - Conversation tool based on the WWWWWH</i></p> 
                 <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                      Every user has its own personal preferences when it comes to documenting.</li>
                   <br><br>
                
                  <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                      People have both negative and positive feelings regarding the different documentation platforms</li>
                   <br><br>
                
                  <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                      Usability is very important when it comes to documenting.</li>
                   <br><br>
                  <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    People already document, but not for the purpose of sharing, this makes the documentation not understandable for others.</li>
                   <br><br>

                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We created a conversation tool based on the WWWWWH method to find out how people THINK they document and how people FEEL about documenting. Our conversation tool consisted of three elements: categories, cards, fill-in story.
                    We came up with 6 categories to get people to think about their documentation process:<br>
                    - Platforms;<br>
                    - Events (related to the Scream methodology);<br>
                    - Attitudes;<br>
                    - Sharing (with);<br>
                    - Problems;<br>
                    - Kind of documents.<br>
                    By giving them categories and cards we wanted to lower the barrier for them to talk about documentation. They could use the cards from the categories to fill in the gaps in the fill-in story.</p>

                 <p style = "font-size:1em;"><strong>Notes:</strong></p>
                <p>By giving them categories and cards we wanted to lower the barrier for them to talk about documentation. They could use the cards from the categories to fill in the gaps in the fill-in story. </p>
                
                  <!-- Links/ photos/files -->
                  <p style = "font-size:1em;"><strong>LINKS/PHOTOS/FILES</strong></p>
                   <div style = " color:#66afad; padding:0px;">
                       <img id = "profilePic" alt = "Add a project photo" width = "1000" height = "700px" src="https://i.gyazo.com/9b99627f95946b702133e4904ffa6035.png"/>
                      <p>CONVERSATION TOOL - This is an example of a filled in story about documentation</p><br><br><br>
                  </div> <br>
                
                  
            </div>
                
            <div id = "tab17">
                <p style = "color:grey; font-size:0.8em;"> <i> Method - Analyzing other team's documentation</i></p>
                <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Team creates their own structure.</li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    All teams divided their documents by sprints, but inside these sprints there was a different structure for each team. </li>
                   <br><br>

                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We asked the other MediaLAB teams to add us to their digital folders such as Google Drive and Dropbox. We tried to map the ways in which they structure their files. Besides that we looked at who uploaded what kinds of documents. </p>

                <p style = "font-size:1em;"><strong>Notes:</strong></p>
                <p>We only used data from sprint 1, so it's not an accurate representation of the actual data regarding the roles. Besides that, we did not inspect communication media that the team’s might use to document.</p>
                
            </div>        
        </section>
        </div>
    </div>
</div> <!-- END OF POP UP PAGE 2 --> 
        
        
 <!--KEY INSIGHT 3 - POP UP PAGE-->        
    <div class = "popupPage" id = "popupPage3">
        <div class = "popup-content">
            
            <!-- Popup header (yellow area)-->
           <div id = "popupHeader">
             <span class ="close" onclick = "hide('popupPage3')">&times;</span>
           <p><i>SCREAM! Tool project // Sprint 2</i></p> 
            <img id = "lightBulb" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/KeyInsight_new.svg"/>
               <h2 style= "vertical-align: middle; width:80%; margin-bottom:1em; display:inline-block; margin-left:1em; "><i>It is hard to classify behavior, especially with teams that are multidisciplinary and international. </i></h2>
           </div>
            
            <!-- popup tabs -->
            <div class="wrapper" style = "background-color:white; ">
            <ul class="tabs2 clearfix" data-tabgroup="second-tab-group" style="background-color:#f5da81; margin-top:0px;">
              <li><a href="#tab18" class="active2">PERSONAS</a></li>
              <li><a href="#tab19">PEER PITCHS</a></li>
            </ul>

        <!-- Tab text here (inside)-->
            <section id="second-tab-group" class="tabgroup">
                <div id="tab18">
                <p style = "color:grey; font-size:0.8em;"><i>Method - Persona</i></p>

                  <!-- Insights --> 
                   <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:35%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    There are different kind of personas within the Multidisciplinary Design Team and it is difficult to please all of them.</li>
                   <br><br>  
                    
                    <!-- What happened --> 
                      <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                      <p>We created personas based on the results that we got from using the WWWWWH conversation tool and doing the analysis of the other MediaLAB team’s documentation. These became part of our infographic. </p>

                      <!-- Links/ photos/files -->
                      <p style = "font-size:1em;"><strong>LINKS/PHOTOS/FILES</strong></p>
                       <div style = " color:#66afad; padding:0px;">
                       <img id = "profilePic" alt = "Add a project photo" width = "1000" height = "700px" src="https://i.gyazo.com/789995eabccefa873700345c6e8fadde.png"/>
                      <p>Persona #1 - The lone wolf.</p><br>
                    </div> <br>
                 </div>
                
                <div id = "tab19">
                    <p style = "color:grey; font-size:0.8em;"><i> Activity - Peer pitch</i></p>  
                <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                   Look for the frictions between the behavior of the personas.</li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    How are you going to use the personas/target group? </li>
                    <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Focus on one persona that really benefits from it and then look at the other personas. </li>
                    <br><br>
                    
                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    What makes SCREAM! special? (What is the added value of this tool?) </li>
                    <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Try to focus on tangible conclusions/insights (Have a purpose, rather than “understanding” or “data collecting”)  </li>
                    <br><br>


                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We presented our insights to the other MediaLAB teams. They provided us with feedback that is very helpful to our project. We will keep this feedback in mind when we will plan our next sprint. </p>
           
            </div>
        </section>
        </div>
    </div>
</div> <!-- END OF POP UP PAGE 3 --> 
        
    <!--KEY INSIGHT 4 - POP UP PAGE-->        
<div class = "popupPage" id = "popupPage4">
    <div class = "popup-content">

        <!-- Popup header (yellow area)-->
       <div id = "popupHeader">
         <span class ="close" onclick = "hide('popupPage4')">&times;</span>
       <p><i>SCREAM! Tool project // Sprint 2</i></p> 
        <img id = "lightBulb" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/KeyInsight_new.svg"/>
           <h2 style= "vertical-align: middle; width:80%; margin-bottom:1em; display:inline-block; margin-left:1em; "><i>Quantifying qualitative data can be really hard, because it is subjected to interpretation.</i></h2>
       </div>

        <!-- popup tabs -->
        <div class="wrapper" style = "background-color:white; ">
        <ul class="tabs2 clearfix" data-tabgroup="second-tab-group" style="background-color:#f5da81; margin-top:0px;">
          <li><a href="#tab20" class="active2">QUANTIFY DATA</a></li>
          <li><a href="#tab21">TRANSLATE SESSION</a></li>
          <li><a href="#tab22">INFOGRAPHIC </a></li>
        </ul>

    <!-- Tab text here (inside)-->
        <section id="second-tab-group" class="tabgroup">
            <div id="tab20">
            <p style = "color:grey; font-size:0.8em;"> <i>Method - Quantify the data</i></p>

              <!-- Insights --> 
               <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

               <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:35%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                Google Drive, Slack,“My Notebook”, Trello and Pinterest were the most cited.</li>
               <br><br>  
                
                <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:35%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                Most platforms were mentioned in both a positive and a negative way.</li>
               <br><br> 

                <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:35%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                “My Notebook” was only mentioned in a positive way.</li>
                <br><br> 
                
                <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:35%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                Documentation (platforms) should be: usable, shareable and structured. </li>
                <br><br> 
                
                <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We collected all the results that we got from the WWWWWH conversation tool and the analysis of other MediaLAB team’s documentation and started to quantify them.  </p>

                  <!-- Links/ photos/files -->
                    <p style = "font-size:1em;"><strong>Notes:</strong></p>
                    <p>It can be hard to quantify qualitative information, because the data will be subjected to interpretation. </p>
             </div>

            <div id = "tab21">
             <p style = "color:grey; font-size:0.8em;"> <i> Activity - Translate session with Wouter Meys</i></p>  
            <!-- Insights --> 
              <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

               <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
               Our data is qualitative and not quantitative. Quantifying qualitative data is harder, because it is subjected to interpretation. </li>
               <br><br>

              <!-- What happened --> 
              <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
              <p>We met with @WouterMeys from the Citizen Data Lab. We showed him the results that we had thus far. He helped us realize that our results are all qualitative and not quantitative. </p>
            </div>
            
             <div id = "tab22">
               <p style = "color:grey; font-size:0.8em;"> <i> Method - Infographic</i></p>  
                <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    People have personal preferences when it comes to documenting.</li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                   Customization of the platform is important, but an “easy to use platform” has more priority.</li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    People already document consistently, but not for the purpose of sharing (with the team and/or the world). This makes the documentation only understandable for themselves.</li>
                   <br><br>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                   It is hard to classify behavior, especially with teams that are multidisciplinary and international.</li>
                   <br><br>

                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We translated all the quantified data into an infographic. We also added the personas to this infographic. We presented this infographic to our product owners to show how our target users THINK they document, how they FEEL about documenting and how they actually DO document. </p>

                  <!-- Links/ photos/files -->
                  <p style = "font-size:1em;"><strong>LINKS/PHOTOS/FILES</strong></p>
                  <div style = "border-left:solid; color:#66afad; padding:0px; padding-left:10px">
                       <p style = "color:black;"><i>https://drive.google.com/open?id=0B2DcaGGKzkPxX19HOUpoeGZhNDA</i></p>
                      <p>THE INFOGRAPHIC - This is the whole presentation (with the infographic) that we had prepared for our product owners </p>
                    </div>
            </div> 
    </section>
    </div>
</div>
</div> <!-- END OF POP UP PAGE 4 -->  
        
        
       <div class = "centeredContent" style = "width:50%;">


        <!--NORMAL CONTENT OF THE PAGE-->  
    <div id = "sprintHeader" >

        <div id="sprintLeft" style = "display:inline-block; vertical-align:top;">
            <p>SCREAM! TOOL</p>
            <div  class = "tooltip">
                <!--Sprint menu-->
                <div style=" color:#66afad; border-bottom:solid; width:350px; "> 
                <span style ="color:#66afad;">SPRINT 2</span> <span style ="color:#66afad; float:right;">▼</span>
                </div>
                <!-- Sprint menu text/options
                Code from: http://www.w3schools.com/css/tryit.asp?filename=trycss_tooltip_bottom-->
                <span class="tooltiptext">
                    <span><a href="/index.php?page_id=1416" style = "text-decoration:none; color:grey;">SPRINT 1</a>  </span> <br>
                    <span style = "color:grey;"> SPRINT 3 </span> <br>
                    <span style = "color:grey;"> SPRINT 4 </span> <br>
                    <span style = "color:grey;"> SPRINT 5 </span> <br>
                    <span style = "color:grey;"> SPRINT 6 </span> <br>

                </span>
            </div> 
            <span style ="color:grey; font-size:0.8em;"> <br>Documentation, Personal preferences</span>   
        </div>

        <div id="sprintImage" style = "display:inline-block; vertical-align:top;" >
               <img id = "profilePic" alt = "Add a project photo" width = "400" height = "200px"       src="http://i67.tinypic.com/14nkdqd.jpg"/>
        </div>       

    </div>

    <!-- Sprint Summary -->
   <div id= sprintSummary style = "text-align:left; display:inline-block; vertical-align:top; width:70% ">
       <br>

       <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; top:30%; left:1px;" id = "sprint_sum_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/aim.svg"/>
       <strong>The aim for this sprint is to</strong>  understand the setbacks and pleasures of the documentation process.</li>
       <br><br><br>
       <li style=" position:relative; display:inline-block; padding-left:60px;" id = "mvpBtn"><img style = "position:absolute; top:30%; left:1px;" id = "sprint_sum_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/mvp.svg"/>
           <strong>The minimal viable product is</strong> an infographic that maps the target users’ documentation process.</li>
       <br><br><br>
       <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; top:30%; left:1px;" id = "sprint_sum_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/Conclusion_1.svg"/>
           <strong>The conclusion for this sprint is</strong>  people have personal preferences when it comes to documenting, therefore we do not want to change the way people already document their process. </li>

    </div> 
</div>
<br>
             

<!-- REAL TABS -->
<div class="TabsWrapper">
  <li class="tabLiteral" id="tab1"> THE KEY INSIGHTS
  </li>
  <li class="tabLiteral" id="tab2"> PREVIOUS STEPS
  </li>
  <li class="tabLiteral" id="tab3" style="margin-right: 34%;"> NEXT STEP
  </li>

  <img id="icon1" class="tabIcon" src="http://localhost/wp-content/themes/DMT-Theme/library/images/Link_sprint.svg" data-pin-nopin="true">
    <img id="icon2" class="tabIcon" src="http://localhost/wp-content/themes/DMT-Theme/library/images/Edit_sprint.svg" data-pin-nopin="true">
  <img id="icon3" class="tabIcon" src="http://localhost/wp-content/themes/DMT-Theme/library/images/Image_sprint.svg" data-pin-nopin="true"> 
</div>

        <!-- TAB CONTENT -->
<!-- tab1: key inisght area -->
<div id="tabContent1" class="tabBlock">
  
  <div class="keyInsightContainer">
    <div class="keyInsightItem" id="key1">
        <img class="icon"  style="position:relative;float:right;"  src="http://localhost/wp-content/themes/DMT-Theme/library/images/KeyInsight_new.svg"/>
        People have personal preferences when it comes to documenting.
      <span class="insightEvents"> 
        <div style="font-weight:bolder">EVENTS</div>
        <div>Literature Review -Method <br> Flow Chart -method</div>
      </span>
      </div>  
      <div class="keyInsightItem" id="key2">People already document consistently, but not for the purpose of sharing (with the team and/or the world). This makes the documentation only understandable for themselves.</div>
      <div class="keyInsightItem" id="key3">It is hard to classify behavior, especially with teams that are multidisciplinary and international. 
      </div>
     <div class="keyInsightItem" id="key4"> Quantifying qualitative data can be really hard, because it is subjected to interpretation. 
      </div> 
  </div>

</div>

<!-- Previous steps -->
<div id="tabContent2" class="tabBlock" style="display:none;">
  <p>The chatbot was not the solution for our problem, therefore we decided to focus on the way Multidisciplinary Design Teams document their process.</p>
</div>
        
    <!--Next steps-->
    <div id="tabContent3" class="tabBlock" style="display:none;">
        <p>1.We will focus on “how do people look for and read documentation?”. <br>
        <p> 2.We will start on making and testing a specific part of our documentation tool. </p>
    </div>
</div>


        
<!-- Custom css changes for this page -->
    <style>
        .wrapper{
            float:left;
            width:100%;
            margin:0;
        }
          li {
            list-style-type:none;
        }
        
         a.active2 {
        background-color:white;
        font-weight: bold;
        }

    </style>
 <!-- Script for tab functionality -->       
<script type="text/javascript">
      

      var tab1 =document.getElementById("tab1");
      var tab2 =document.getElementById("tab2");
      var tab3 =document.getElementById("tab3");
    
      //on click functions for tabs
      tab1.onclick=function(){
        clearTabContent();
        activate("tabContent1");
      }

      tab2.onclick=function(){
                clearTabContent();

        activate("tabContent2");

      }
      tab3.onclick=function(){
        clearTabContent();
        activate("tabContent3");
      }


    //display tab which is passed as an argument
    function activate(tabID){
            document.getElementById(tabID).style.display="block";
        }
    //clear all tab containers from their contents
    function clearTabContent(){
      document.getElementById("tabContent1").style.display="none";
      document.getElementById("tabContent2").style.display="none";
      document.getElementById("tabContent3").style.display="none";
    }

</script>


        
<!--Script for the popup functionality-->
    <script>
            
        //Retrieve the popup containers
        var popup1 = document.getElementById("popupPage1");
        var popup2 = document.getElementById("popupPage2");
        var popup3 = document.getElementById("popupPage3");
        var popup4 = document.getElementById("popupPage4");
        var MVP = document.getElementById("MVP");
         
        //Retrieve the keyinsight boxes/buttons
        var keyInsight1 = document.getElementById("key1");
        var keyInsight2 = document.getElementById("key2");
        var keyInsight3 = document.getElementById("key3");
        var keyInsight4 = document.getElementById("key4");
        var mvpBtn = document.getElementById("mvpBtn");
        
        //Shows key insight when pressed 
        keyInsight1.onclick = function() {
            popup1.style.display= "block";
        }
         keyInsight2.onclick = function() {
            popup2.style.display= "block";
        }
          keyInsight3.onclick = function() {
            popup3.style.display= "block";
        }
        keyInsight4.onclick = function() {
            popup4.style.display= "block";
        }
        mvpBtn.onclick = function() {
            MVP.style.display= "block";
        }
        
        //Function for hiding the popup (usnig the closeBtn)
        function hide(popup){
            document.getElementById(popup).style.display="none";
        }
        
    </script>
