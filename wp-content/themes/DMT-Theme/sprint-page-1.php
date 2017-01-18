<?php

  global $wp_session;
  $wp_session['searching'] = false;
/*
 Template Name: Sprint 1  Page
*/

 //TODO: Code refactpring
 //TODO: 

 //TURN INTO OPEN SOURCE PROJECT (send remote proceedure calls when when publishing to platform) system generates a file representation for them


 //semi open source: use remote procedure call 


 //ToDO: retrieve user details, retrieve projectt,
 //toDO

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
               <h2 style= "vertical-align: middle; width:80%; margin-bottom:1em; display:inline-block; margin-left:1em; "> <i><strong>The minimal viable product is</strong> a clickable prototype that shows how a chatbot could function in the SCREAM! app and in Slack</i></h2>
           </div>
                <div style = "padding-left:2em;">
                <p style = "color:grey; font-size:0.8em;"><i> Method - Clickable prototype</i></p>

                  <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:35%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    The clickable prototype were only created, because we wanted to end the sprint properly by creating the minimal viable product.</li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:35%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    We were already pretty sure we wanted to change the direction of our project. </li>
                   <br><br>

                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We created two prototypes. The first one was integrated in Slack. We created this prototype because our product owners asked for a chatbot that was integrated in Slack. The second prototype was integrated in the SCREAM app. We wanted to show how the chatbot would be part of the flow of the SCREAM app. </p>

                  <!-- Links/ photos/files -->
                  <p style = "font-size:1em;"><strong>LINKS/PHOTOS/FILES</strong></p>
                  
                  <div style = "border-left:solid; color:#66afad; padding:0px; padding-left:10px">
                      <p style = "color:black;"><i>http://8ldzl4.axshare.com/#g=1&p=home</i></p>
                      <p>PROTOTYPE - Chatbot integrated in Slack </p>
                  </div>  
                  
                  <div style = "border-left:solid; color:#66afad; padding:0px; padding-left:10px">
                      <p style = "color:black;"><i>https://xd.adobe.com/view/7a58d2f8-b8de-4158-9066-0450d17c4b0d/</i></p>
                         <p>PROTOTYPE - Chatbot integrated in the app </p>
                  </div> <br>
                </div>
        </div>
    </div><!-- END POP UP PAGE MVP--> 
        
 <!--KEY INSIGHT 1 - POP UP PAGE-->        
    <div class = "popupPage" id = "popupPage1">
        <div class = "popup-content">
            
            <!-- Popup header (yellow area)-->
           <div id = "popupHeader">
            <span class ="close" onclick = "hide('popupPage1')">&times;</span>
           <p><i>SCREAM! Tool project // Sprint 1</i></p> 
            <img id = "lightBulb" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/KeyInsight_new.svg"/>
               <h2 style= "vertical-align: middle; width:80%; margin-bottom:1em; display:inline-block; margin-left:1em; "><i>The behavior of the chatbot should not be human like and it should be easy to communicate with it and it should focus on 'follow-up, 'guidance' and 'motivation'.</i></h2>
           </div>
            
            <!-- popup tabs -->
            <div class="wrapper" style = "background-color:white; ">
            <ul class="tabs2 clearfix" data-tabgroup="second-tab-group" style="background-color:#f5da81; margin-top:0px;">
              <li><a href="#tab12" class="active2">LITERATURE REVIEW</a></li>
              <li><a href="#tab13">FLOWCHART</a></li>
              <li><a href="#tab14">WRITING SCENARIO</a></li>
              <li><a href="#tab15">ROEF FESTIVAL</a></li>
            </ul>

        <!-- Tab text here (inside)-->
            <section id="second-tab-group" class="tabgroup">
              <div id="tab12">
                <p style = "color:grey; font-size:0.8em;"><i> Method - Literature review</i></p>

                  <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    The scope of the literature review was too big, which did not allow us to create a coherent summary.</li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Don't try to make the bot too human, give it a machine personality. </li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    A bot should have a low cognitive load.</li>
                   <br><br>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Prove an out for the user of the bot. (If people feel annoyed by the bot, or just do not want to use it.)</li>
                   <br><br>

                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>Every member of the team took some time to seek for information about chatbots. The ‘Summary’ showes the most important functions for a chatbot. The ‘Bunch of links’ file is a document were every teammember added the links of interesting sources. And the ‘Why add a bot?’ is a file where we tried to find out why a bot is actually needed. This information will be used to create the script for the chatbot simulation.</p>

                  <!-- Links/ photos/files -->
                  <p style = "font-size:1em;"><strong>LINKS/PHOTOS/FILES</strong></p>
                 <div style = "border-left:solid; color:#66afad; padding:0px; padding-left:10px">
                      <p style = "color:black;"><i>https://drive.google.com/open?id=1H-SN-L_FqghTdbcFckDs7IUBy8h57xX97gi1ICxXrSk</i></p>
                      <p>LITERATURE REVIEW - Summary</p>
                  </div> 
                  
                 <div style = "border-left:solid; color:#66afad; padding:0px; padding-left:10px">
                      <p style = "color:black;"><i>https://drive.google.com/open?id=1kWJMha99C-GJLoSnchZQE8HfaE1ni1lkIEk22xPXbjM</i></p>
                      <p>LITERATURE REVIEW - Bunch of links </p>
                  </div>  
                  
                  <div style = "border-left:solid; color:#66afad; padding:0px; padding-left:10px">
                      <p style = "color:black;"><i>https://drive.google.com/open?id=14yOv0cnUxLuUr8cVq73IaBEwn0lRMl6G2DXPkP85lIA</i></p>
                      <p>LITERATURE REVIEW - Why add a bot?</p>
                  </div>
            </div>
                
            <div id = "tab13">
                <p style = "color:grey; font-size:0.8em;"> <i>Method - Flowchart</i></p> 
                 <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:35%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                       We created a list of interaction points based on the flowchart (such as: the onboarding, adding a goal/adding method/adding a task, when you haven’t finished your goal/method/task, when you haven’t updated the SCREAM app).</li>
                   <br><br>

                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We thought we would get a flowchart of the SCREAM app from the creators. We realized that they did not have a flowchart and therefore we reverse engineered one ourselves. Based on this flowchart we wanted to find out the possible interaction points between the chatbot and the SCREAM app user. </p>

                  <!-- Links/ photos/files -->
                  <p style = "font-size:1em;"><strong>LINKS/PHOTOS/FILES</strong></p>
                 <div style = "border-left:solid; color:#66afad; padding:0px; padding-left:10px">
                      <p style = "color:black;"><i>https://drive.google.com/open?id=0B1S0sQLj0CQJMVNZNjBlWE5UUVk</i></p>
                      <p>FLOWCHART SCREAM APP- We reverse engineered the flow of the SCREAM app</p>
                  </div> 
                
            </div>
            <div id = "tab14">
                 <p style = "color:grey; font-size:0.8em;"> <i>Method - Writing scenario</i></p>
                <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Based on the interaction points we made a list of possible scenarios:</li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Suggestions and help (from the SCREAM Design Method Toolkit) </li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Reminders to use the SCREAM app (within the SCREAM flow)</li>
                   <br><br>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Personal reminders to update progress, and reminders of personal tasks and deadlines</li>
                   <br><br>
                
                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Personal and group motivators</li>
                   <br><br>
                
                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    What happens when the user asks a question, and the bot is not able to answer?</li>
                   <br><br>

                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>Based on the interaction points and the literature review we created scenarios for our chatbot simulation. Based on these scenarios we created a script that we would use for our chatbot simulation (Wizard-of-Oz method)</p>

                  <!-- Links/ photos/files -->
                  <p style = "font-size:1em;"><strong>LINKS/PHOTOS/FILES</strong></p>
               <div style = "border-left:solid; color:#66afad; padding:0px; padding-left:10px">
                      <p style = "color:black;"><i>https://drive.google.com/open?id=1-q07mto1ZGYYT1RoHkzSmc5RaOGezTAYfVRwCtH3gdM</i></p>
                      <p>SCENARIOS- These scenarios show where the chatbot could interfere in the SCREAM app flow</p>
                  </div>  
                  
                 <div style = "border-left:solid; color:#66afad; padding:0px; padding-left:10px">
                      <p style = "color:black;"><i>https://drive.google.com/open?id=14yOv0cnUxLuUr8cVq73IaBEwn0lRMl6G2DXPkP85lIA</i></p>
                      <p>SCRIPT - This is the script that we wrote for our chatbot simulation</p>
                  </div> 
            </div>
            <div id = "tab15">
                <p style = "color:grey; font-size:0.8em;"><i> Activity - ROEF festival</i></p>  
                <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    The categories “Follow-up”, “Statistics” and “Guidance” were mostly covered by bots;</li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Participants seemed to agree that “Follow-up” is a task that a bot is able to do better than a human. There was not much discussion about this task;</li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                   Participants seemed to have certain assumptions about the function of a bot in a working sphere. When we started to ask them more in-depth questions, and gave them examples of scenarios, they saw things from a different perspective;</li>
                   <br><br>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    “Motivators”, “Networking” and “Suggestions” were often seen as tasks that need soft skills.</li>
                   <br><br>

                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>On Friday the 9th we were invited by the organizers of the ROEF festival, to present our visualization on the roof of the Benno Premsela building. Our visualization tried to find out which tasks should be taken over by bots and which should be left to humans. Paper was used to fold pyramid-like structures that represented humans and bots. Humans were yellow colored, while bots were grey colored. Users were presented with a set of six different team-work related tasks. Whenever a task is deemed more efficiently done by bots, a human pyramid is replaced by a bot pyramid.</p>

                  <!-- Links/ photos/files -->
                  <p style = "font-size:1em;"><strong>LINKS/PHOTOS/FILES</strong></p>
                  <div style = " color:#66afad; padding:0px;">
                       <img id = "profilePic" alt = "Add a project photo" width = "1000" height = "700px" src="https://i.gyazo.com/ce4403c06b097b08c4d10a42ecedc5f2.png"/>
                      <p>THE VISUALIZATION - This picture might give an idea of how our visualization looked like.</p><br>
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
           <p><i>SCREAM! Tool project // Sprint 1</i></p> 
            <img id = "lightBulb" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/KeyInsight_new.svg"/>
               <h2 style= "vertical-align: middle; width:80%; margin-bottom:1em; display:inline-block; margin-left:1em; "><i>The chatbot is not the solution for our problem.</i></h2>
           </div>
            
            <!-- popup tabs -->
            <div class="wrapper" style = "background-color:white; ">
            <ul class="tabs2 clearfix" data-tabgroup="second-tab-group" style="background-color:#f5da81; margin-top:0px;">
              <li><a href="#tab16" class="active2">WIZARD-OF-OZ</a></li>
              <li><a href="#tab17">GLOBAL GOALS JAM</a></li>
              <li><a href="#tab18">TRANSLATE SESSION</a></li>
              <li><a href="#tab19">WORKSHOP DEFINE INTENTIONS</a></li>
            </ul>

        <!-- Tab text here (inside)-->
            <section id="second-tab-group" class="tabgroup">
              <div id="tab16">
                <p style = "color:grey; font-size:0.8em;"> <i>Method - Wizard-of-Oz</i></p>

                  <!-- Reasons --> 
                  <p style = "font-size:1em;"><strong>WHAT ARE THE REASONS THIS EVENT WAS NOT INSIGHTFUL?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:35%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Difficulties with Slack and the SCREAM app made it almost impossible for the participants to actually use our chatbot simulation. Therefore we were not able to fully use the Wizard-of-Oz method.</li>
                   <br><br>

                  
            </div>
                
            <div id = "tab17">
                <p style = "color:grey; font-size:0.8em;"> <i>Activity - Global Goals Jam </i></p> 
                 <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:35%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                       We found out that there were some difficulties concerning the use of the Scream application and Slack (Technical difficulties, Usability difficulties, Time & space difficulties)</li>
                   <br><br>

                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>The #GlobalGoalsJam is a two day event consisting of short design sprints. Creative teams, with designers, developers and Jammers from the local community will work together using a tailored toolkit. The Scream application was tested for the first time at this event.We thought that the Global Goals Jam would be the perfect moment for us to get insights about how people react to a chatbot. That is why we prepared a chatbot simulation. We added our chatbot simulation to the Slack-channel of two Global Goals teams.</p>

                  <!-- Links/ photos/files 
                  <p style = "font-size:1em;"><strong>LINKS/PHOTOS/FILES</strong></p>
                  <div style = "border-left:solid; color:#66afad; padding:0px;">
                      <p style = "color:black;"><i>https://drive.google.com/open?id=0B1S0sQLj0CQJMVNZNjBlWE5UUVk</i></p>
                      <p>FLOWCHART SCREAM APP- We reverse engineered the flow of the SCREAM app</p>
                  </div> <br>-->
                
            </div>
            <div id = "tab18">
                <p style = "color:grey; font-size:0.8em;"> <i>Activity - Translate Session with Tamara and Irene</i></p>
                <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Maybe Slack is not usable for people that are working together in the same space</li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    We need to identify and build a good ‘information architecture’ for documentation to be effective and useful </li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    We need to figure out what the goal of the app is / what the role of the bot within the app is</li>
                   <br><br>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    We need to figure out what the added value of the SCREAM app is</li>
                   <br><br>

                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We met with both @Tamara (our coach) and @Irene (UX and Information Architecture teacher at HvA) to discuss our process. We explained the problems we had during the Global Goals Jam.</p>

                  <!-- Links/ photos/files -->
                  <p style = "font-size:1em;"><strong>LINKS/PHOTOS/FILES</strong></p>
                  <div style = "border-left:solid; color:#66afad; padding:0px; padding-left:10px">
                      <p style = "color:black;"><i>https://drive.google.com/open?id=0B1YtrVdQSLAXTzM2UHIxTGxkeDQ</i></p>
                      <p>ILLUSTRATION - We tried to visualize our process thus far</p>
                  </div>  
                  
            </div>
            <div id = "tab19">
             <p style = "color:grey; font-size:0.8em;"> <i>Activity - Workshop "Define intentions"</i></p>  
                <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                   Through this workshop we found out that it is important to look at what your product owners need and not just at what they want.</li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Through the Stakeholders map method we found out that one of the most important stakeholders is the end user. </li>
                    <br><br>


                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We had a workshop with @Charlie were we had to use the WWWWWH and the Stakeholders map to define who is involved with our product and what do they need/want from this product.</p>

                  <!-- Links/ photos/files -->
                  <p style = "font-size:1em;"><strong>LINKS/PHOTOS/FILES</strong></p>
                  <div style = " color:#66afad; padding:0px;">
                       <img id = "profilePic" alt = "Add a project photo" width = "1000" height = "700px" src="https://i.gyazo.com/54f62e38b30cf447892567ac985da937.png"/>
                      <p>WWWWWH - We had to use this method “to obtain a thorough understanding of a problem”.</p><br>
                  </div>  
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
           <p><i>SCREAM! Tool project // Sprint 1</i></p> 
            <img id = "lightBulb" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/KeyInsight_new.svg"/>
               <h2 style= "vertical-align: middle; width:80%; margin-bottom:1em; display:inline-block; margin-left:1em; "><i>The occurrence of design waste will not be solved by a chatbot, but could be solved by designing a better way for users to document their process.</i></h2>
           </div>
            
            <!-- popup tabs -->
            <div class="wrapper" style = "background-color:white; ">
            <ul class="tabs2 clearfix" data-tabgroup="second-tab-group" style="background-color:#f5da81; margin-top:0px;">
              <li><a href="#tab20" class="active2">PEER PITCH</a></li>
              <li><a href="#tab21">WORKSHOP DEFINE INTENTIONS</a></li>
            </ul>

        <!-- Tab text here (inside)-->
            <section id="second-tab-group" class="tabgroup">
                <div id="tab20">
                <p style = "color:grey; font-size:0.8em;"><i> Activity - Peer pitch </i></p>

                  <!-- Insights --> 
                   <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:35%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    The Design Method Toolkit creates a common language that allows the users (Multidisciplinary Design Teams) to communicate their documentation and create a network (community) that eventually will prevent Design Waste.</li>
                   <br><br>  
                    
                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:35%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    We found out that documentation needs context/templates/order to be useful. The SCREAM app does not provide this. </li>
                   <br><br> 
                    <!-- What happened --> 
                      <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                      <p>After the peer pitches we gathered as a team to try to visualize the problem. Based on the insights we got from visual thinking we created the partner review presentation.</p>

                      <!-- Links/ photos/files -->
                      <p style = "font-size:1em;"><strong>LINKS/PHOTOS/FILES</strong></p>
                       <div style = " color:#66afad; padding:0px;">
                       <img  alt = "Add a project photo" width = "1000" height = "700px" src="http://i64.tinypic.com/t7d5rk.jpg"/><br>
                      <p>VISUALIZING OUR PROBLEM - By collecting our thoughts through visual thinking we came to some important insights.</p><br><br><br>
                    </div> <br>
                 </div>
                
                <div id = "tab21">
                    <p style = "color:grey; font-size:0.8em;"> <i>Activity - Workshop "Define intentions"</i></p>  
                <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                   Through this workshop we found out that it is important to look at what your product owners need and not just at what they want.</li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Through the Stakeholders map method we found out that one of the most important stakeholders is the end user. </li>
                    <br><br>


                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We had a workshop with @Charlie were we had to use the WWWWWH and the Stakeholders map to define who is involved with our product and what do they need/want from this product.</p>

                  <!-- Links/ photos/files -->
                  <p style = "font-size:1em;"><strong>LINKS/PHOTOS/FILES</strong></p>
                  <div style = " color:#66afad; padding:0px;">
                       <img id = "profilePic" alt = "Add a project photo" width = "1000" height = "700px" src="https://i.gyazo.com/54f62e38b30cf447892567ac985da937.png"/>
                      <p>WWWWWH - We had to use this method “to obtain a thorough understanding of a problem”.</p><br>
                    </div>
            </div>
        </section>
        </div>
    </div>
</div> <!-- END OF POP UP PAGE 3 -->        
        
        
       <div class = "centeredContent" style = "width:50%;">


                  <!-- Normal content of the page -->  
            <div id = "sprintHeader" >

                <div id="sprintLeft" style = "display:inline-block; vertical-align:top;">
                    <p>SCREAM! TOOL</p>
                    <div  class = "tooltip">
                        <!--Sprint menu-->
                        <div style=" color:#66afad; border-bottom:solid; width:350px; "> 
                        <span style ="color:#66afad;">SPRINT 1</span> <span style ="color:#66afad; float:right;">▼</span>
                        </div>
                        <!-- Sprint menu text/options
                        Code from: http://www.w3schools.com/css/tryit.asp?filename=trycss_tooltip_bottom-->
                        <span class="tooltiptext">
                            <span><a href="/index.php?page_id=1419" style = "text-decoration:none; color:grey;">SPRINT 2</a>  </span> <br>
                            <span style = "color:grey;"> SPRINT 3 </span> <br>
                            <span style = "color:grey;"> SPRINT 4 </span> <br>
                            <span style = "color:grey;"> SPRINT 5 </span> <br>
                            <span style = "color:grey;"> SPRINT 6 </span> <br>

                        </span>
                    </div> 
                    <span style ="color:grey; font-size:0.8em;"> <br>Chatbot, DesignFeedback, UX, AI</span>   
                </div>
                
                <div id="sprintImage" style = "display:inline-block; vertical-align:top;" >
                       <img id = "profilePic" alt = "Add a project photo" width = "400" height = "200px"       src="https://i.gyazo.com/f81765beb534f96f5ed633f468563210.jpg"/>
                </div>       

            </div>
            
            <!-- Sprint Summary -->
           <div id= sprintSummary style = "text-align:left; display:inline-block; vertical-align:top; width:70% ">
               <br>
               
               <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; top:30%; left:1px;" id = "sprint_sum_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/aim.svg"/>
               <strong>The aim for this sprint is to</strong>  identify and validate a set of functional requirements for the chatbot, and translate the findings into a clickable prototype.  </li>
               <br><br><br>
               <li style=" position:relative; display:inline-block; padding-left:60px;" id = "mvpBtn"><img style = "position:absolute; top:30%; left:1px;" id = "sprint_sum_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/mvp.svg"/>
                   <strong>The minimal viable product is</strong> a clickable prototype that shows how a chatbot could function in the SCREAM! app and in Slack</li>
               <br><br><br>
               <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; top:30%; left:1px;" id = "sprint_sum_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/Conclusion_1.svg"/>
                   <strong>The conclusion for this sprint is</strong> the chatbot was not the solution for our problem, therefore we decided to focus on the way Multidisplinary Design Teams document their process</li>
                  
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

    The chatbot should focus on ‘follow-up’, ‘guidance’ and ‘motivation’. The behavior of the chatbot should not be human like and it should be easy to communicate with it.

      <span class="insightEvents"> 
        <div style="font-weight:bolder">EVENTS</div>
        <div>Literature Review -Method <br> Flow Chart -method</div>
      </span>
</div>  
      <div class="keyInsightItem" id="key2">The chatbot is not the solution for our problem.</div>
      <div class="keyInsightItem" id="key3">The occurrence of design waste will not be solved by a chatbot, but could be solved by designing a better way for users to document their process. 
</div>   
  </div>

</div>


<div id="tabContent2" class="tabBlock" style="display:none;">
            <p>This is the first sprint, therefore there are no previous steps.</p>
</div>
<div id="tabContent3" class="tabBlock" style="display:none;"><p>In the second sprint we investigate more thoroughly who the actual user of Scream is. Besides that, how do these users document their process (if, how, why, when)? Sharing is an important part of preventing design waste as well. Therefore we need to find out how and if we can motivate teams to share their process with the world. </p></div>

<!-- Tabs -->   
<!--     <div class="TabsWrapper">
    <ul class="tabs clearfix" data-tabgroup="second-tab-group">
      <li><a href="#tab6" class="active">THE KEY INSIGHTS</a></li>
      <li><a href="#tab7">PREVIOUS STEPS</a></li>
      <li><a href="#tab8">NEXT STEPS</a></li>
        
      <li style = " width:5%;"><a href="#tab9"> <img id = "tabIcon"  src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/Link_sprint.svg"/>  </a></li>
      <li style = " width:5%;"><a href="#tab10"> <img id = "tabIcon"  src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/Edit_sprint.svg"/> </a></li>
      <li style = " width:5%;"><a href="#tab11"> <img id = "tabIcon"  src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/Image_sprint.svg"/> </a></li>
    </ul>
       
<!-- Tab text here (inside)-->
    <section id="second-tab-group" class="tabgroup" style="display:none">
        <!--Key insights -->
      <div id="tab6">
        <div id = "keyInsight1">
            The chatbot should focus on ‘follow-up’, ‘guidance’ and ‘motivation’. The behavior of the chatbot should not be human like and it should be easy to communicate with it. 
        </div>
          
        <div id = "keyInsight2">
          The chatbot is not the solution for our problem.
        </div>
          
        <div id = "keyInsight3">
          The occurrence of design waste will not be solved by a chatbot, but could be solved by designing a better way for users to document their process. 
        </div>
      </div>
        <!-- Previous steps-->
      <div id="tab7">
          <p>This is the first sprint, therefore there are no previous steps.</p>
      </div>
        
        <!-- Next steps -->
      <div id="tab8">
         <p>In the second sprint we investigate more thoroughly who the actual user of Scream is. Besides that, how do these users document their process (if, how, why, when)? Sharing is an important part of preventing design waste as well. Therefore we need to find out how and if we can motivate teams to share their process with the world. </p>
      </div>
    </section>
    </div>
</div> <!-- End main content -->

        
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
        
<!-- Script for the tab functionality [Error: 2 tabs in page ruins other one..] -->
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
        <!-- Script for other tab  (popup)-->
    <script type="text/javascript">
        $('.tabgroup > div').hide();
        $('.tabgroup > div:first-of-type').show();
        $('.tabs2 a').click(function(e){
          e.preventDefault();
            var $this = $(this),
                tabgroup = '#'+$this.parents('.tabs2').data('tabgroup'),
                others = $this.closest('li').siblings().children('a'),
                target = $this.attr('href');
            others.removeClass('active2');
            $this.addClass('active2');
            $(tabgroup).children('div').hide();
            $(target).show();

    })
    </script>
        
<!--Script for the popup functionality-->
        <script>
        var popup1 = document.getElementById("popupPage1");
        var popup2 = document.getElementById("popupPage2");
        var popup3 = document.getElementById("popupPage3");
        var MVP = document.getElementById("MVP");
            
        var keyInsight1 = document.getElementById("keyInsight1");
        var keyInsight2 = document.getElementById("keyInsight2");
        var keyInisght3 = document.getElementById("keyInsight3");
        var mvpBtn = document.getElementById("mvpBtn");
        var closeBtn = document.getElementsByClassName("close")[0];
        
        //Shows key insight/MVP when pressed 
        key1.onclick = function() {
            popup1.style.display= "block";
        }
         key2.onclick = function() {
            popup2.style.display= "block";
        }
          key3.onclick = function() {
            popup3.style.display= "block";
        }
          
        mvpBtn.onclick = function() {
            MVP.style.display= "block";
        }
        
        //Function for hiding the popup
        function hide(popup){
            document.getElementById(popup).style.display="none";
        }
        </script>
