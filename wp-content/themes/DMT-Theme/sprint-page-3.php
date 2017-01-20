<?php

	global $wp_session;
	$wp_session['searching'] = false;
/*
 Template Name: Sprint 3  Page
 TODO: Change the tabs functionality to the working one ( See technical documentation)
 TODO: Add the key insight boxes ( See sprint-page-1)
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
                   <p style = "color:grey; font-size:0.8em;"><i> Method - Wireframes</i></p> 
                 <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                     We decided to focus only on the SCREAM! file for the reader for this sprint.</li>
                   <br><br>
                
                  <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                   If we have the “perfect” SCREAM! file for the reader, then we are able to test ways the documenter will fill this in. </li>
                   <br><br>
                
                  <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                   We think that a file tree (visual connections between files and folder) might be helpful for the reader.</li>
                   <br><br>
        
                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We all had a morning to come up with a idea for the ideal SCREAM! file. In the end we decided that we did not know how people are looking for information. So we decided to create multiple prototypes to test this. Each prototype has a different lay-out which shows the same information. We want to find out which form works best for reading. This makes it more understandable for us what we want from the documenter. </p>
                
                  <!-- Links/ photos/files -->
                  <p style = "font-size:1em;"><strong>LINKS/PHOTOS/FILES</strong></p>
                   <div style = " color:#66afad; padding:0px;">
                       <img id = "profilePic" width = "1000" height = "700px" src="http://i63.tinypic.com/5p0f2f.jpg"/>
                      <p>WIREFRAMES - Intuitive flow and clear links, but very linear and too much scrolling</p><br><br><br>
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
           <p><i>SCREAM! Tool project // Sprint 3</i></p> 
            <img id = "lightBulb" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/KeyInsight_new.svg"/>
               <h2 style= "vertical-align: middle; width:80%; margin-bottom:1em; display:inline-block; margin-left:1em; "><i>We need to create incentive for the documenter to fill in the SCREAM! file</i></h2>
           </div>
            
            <!-- popup tabs -->
            <div class="wrapper" style = "background-color:white; ">
            <ul class="tabs2 clearfix" data-tabgroup="second-tab-group" style="background-color:#f5da81; margin-top:0px;">
              <li><a href="#tab12" class="active2">WORKSHOP FRAMING INSIGHTS </a></li>
              <li><a href="#tab13">PARTNER REVIEW</a></li>
            </ul>

        <!-- Tab text here (inside)-->
            <section id="second-tab-group" class="tabgroup">
              <div id="tab12">
                <p style = "color:grey; font-size:0.8em;"> <i>Activity - Workshop framing insights </i></p>

                  <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Our design challenge is: how can we create a tool that is useful for the documenter and understandable for the reader. </li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Being useful for the documenter means: order / structure, prioritizing, recognition, create an accurate representation of your insights.   </li>
                   <br><br>
                  
                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Being understandable for the reader means: common language / conventions, systematic, reliable / accurate information, demonstration / example.</li>
                   <br><br>
                  
                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    We need to define all the definitions that are related to our project </li>
                   <br><br>

                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We had to list all the our insights, and think about them in different ways. After this we had to pick the most important insight that we got and transform it into a design challenge.</p>
                  <br>
                  
                    <!-- Links/ photos/files -->
                  <p style = "font-size:1em;"><strong>LINKS/PHOTOS/FILES</strong></p>
                   <div style = " color:#66afad; padding:0px;">
                       <img id = "profilePic" alt = "Add a project photo" width = "1000" height = "700px" src="https://i.gyazo.com/60bf42cc13624d18f95348442620fedb.jpg"/>
                      <p>WORKSHOP FRAMING INSIGHTS  - We needed to list our insights based on “what we know that we know”, “what we know that we don’t know”, “what we don’t know that we know”  and “what we don’t know that we don’t know”.</p>
                    </div> <br>
            </div><br>
                
            <div id = "tab13">
                <p style = "color:grey; font-size:0.8em;"> <i>Activity - Partner review</i></p> 
                 <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    The tool is thus far way too complex and too cluttered.</li>
                   <br><br>
                
                  <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                   The tool thus far does not create incentive for the documenter to fill in all the information that the reader needs</li>
                   <br><br>

                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We met with our product owners to discuss our process and our prototypes. </p>               
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
           <p><i>SCREAM! Tool project // Sprint 3</i></p> 
            <img id = "lightBulb" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/KeyInsight_new.svg"/>
               <h2 style= "vertical-align: middle; width:80%; margin-bottom:1em; display:inline-block; margin-left:1em; "><i>The current prototype is too complex for the reader</i></h2>
           </div>
            
            <!-- popup tabs -->
            <div class="wrapper" style = "background-color:white; ">
            <ul class="tabs2 clearfix" data-tabgroup="second-tab-group" style="background-color:#f5da81; margin-top:0px;">
              <li><a href="#tab14" class="active2">WIREFRAMES</a></li>
              <li><a href="#tab15">CLICKABLE PROTOTYPE</a></li>
              <li><a href="#tab16">PARTNER REVIEW</a></li>
          
            </ul>

        <!-- Tab text here (inside)-->
            <section id="second-tab-group" class="tabgroup">
              <div id="tab14">
               <p style = "color:grey; font-size:0.8em;"><i> Method - Wireframes</i></p> 
                 <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                     We decided to focus only on the SCREAM! file for the reader for this sprint.</li>
                   <br><br>
                
                  <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                   If we have the “perfect” SCREAM! file for the reader, then we are able to test ways the documenter will fill this in. </li>
                   <br><br>
                
                  <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                   We think that a file tree (visual connections between files and folder) might be helpful for the reader.</li>
                   <br><br>
        
                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We all had a morning to come up with a idea for the ideal SCREAM! file. In the end we decided that we did not know how people are looking for information. So we decided to create multiple prototypes to test this. Each prototype has a different lay-out which shows the same information. We want to find out which form works best for reading. This makes it more understandable for us what we want from the documenter. </p>
                
                  <!-- Links/ photos/files -->
                  <p style = "font-size:1em;"><strong>LINKS/PHOTOS/FILES</strong></p>
                   <div style = " color:#66afad; padding:0px;">
                       <img id = "profilePic" width = "1000" height = "700px" src="http://i63.tinypic.com/5p0f2f.jpg"/>
                      <p>WIREFRAMES - Intuitive flow and clear links, but very linear and too much scrolling</p><br><br><br>
                  </div> <br>  
            </div>
                
            <div id = "tab15">
                <p style = "color:grey; font-size:0.8em;"> <i> Method -  Clickable prototype</i></p>
                <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Participants reacted most positive towards the ‘timeline’ and ‘report’ prototypes.</li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    The ‘timeline’ prototype was perceived as intuitive and had a good flow.</li>
                   <br><br>
                
                    <li style=" position:relative; display:inline-block; padding-  left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    The ‘timeline’ prototype was perceived as intuitive and had a good flow.</li>
                   <br><br>
                
                    <li style=" position:relative; display:inline-block; padding-  left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    The ‘report’ prototype was perceived as accessible and structured, but at the same time very dense. </li>
                   <br><br>

                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We tested the first versions of the prototypes by ourselves. This, to see what was missing or what we could change. Because we had a lot of prototypes we decided to merge some of them. The 4 that we kept were tested with the other teams at the MediaLAB.   </p>

                <p style = "font-size:1em;"><strong>Notes:</strong></p>
                <p>Participants had very different opinions towards the prototypes. We think that the opinions were affected by the order of the prototypes. </p>
                
            </div> 
                
            <div id = "tab16">
                <p style = "color:grey; font-size:0.8em;"> <i>Activity - Partner review</i></p> 
                 <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    The tool is thus far way too complex and too cluttered.</li>
                   <br><br>
                
                  <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                   The tool thus far does not create incentive for the documenter to fill in all the information that the reader needs</li>
                   <br><br>

                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We met with our product owners to discuss our process and our prototypes. </p>               
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
           <p><i>SCREAM! Tool project // Sprint 3</i></p> 
            <img id = "lightBulb" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/KeyInsight_new.svg"/>
               <h2 style= "vertical-align: middle; width:80%; margin-bottom:1em; display:inline-block; margin-left:1em; "><i>We have to create a coherent vision for this project </i></h2>
           </div>
            
            <!-- popup tabs -->
            <div class="wrapper" style = "background-color:white; ">
            <ul class="tabs2 clearfix" data-tabgroup="second-tab-group" style="background-color:#f5da81; margin-top:0px;">
              <li><a href="#tab17" class="active2">PERSONAS</a></li>
              <li><a href="#tab18">PEER PITCHS</a></li>
            </ul>

        <!-- Tab text here (inside)-->
            <section id="second-tab-group" class="tabgroup">
                <div id="tab17">
                <p style = "color:grey; font-size:0.8em;"><i>Method - Literature review</i></p>

                  <!-- Insights --> 
                   <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:35%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    A common language/understanding is very important when it comes to sharing data/information.</li>
                   <br><br>  
                    
                    <!-- What happened --> 
                      <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                      <p>We did researched different documentation standards such as: UML, APA and MLA and the Design Process Documentation Template. These are standards from different disciplines. We did get some insights, but we did not find the concrete tips and tricks that we can use in our documentation tool. </p> <br>
                 </div>
                
                <div id = "tab18">
                     <p style = "color:grey; font-size:0.8em;"> <i>Activity - Workshop framing insights </i></p>

                  <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Our design challenge is: how can we create a tool that is useful for the documenter and understandable for the reader. </li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Being useful for the documenter means: order / structure, prioritizing, recognition, create an accurate representation of your insights.   </li>
                   <br><br>
                  
                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    Being understandable for the reader means: common language / conventions, systematic, reliable / accurate information, demonstration / example.</li>
                   <br><br>
                  
                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    We need to define all the definitions that are related to our project </li>
                   <br><br>

                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We had to list all the our insights, and think about them in different ways. After this we had to pick the most important insight that we got and transform it into a design challenge.</p>
                  <br>
                  
                    <!-- Links/ photos/files -->
                  <p style = "font-size:1em;"><strong>LINKS/PHOTOS/FILES</strong></p>
                   <div style = " color:#66afad; padding:0px;">
                       <img id = "profilePic" alt = "Add a project photo" width = "1000" height = "700px" src="https://i.gyazo.com/60bf42cc13624d18f95348442620fedb.jpg"/>
                      <p>WORKSHOP FRAMING INSIGHTS  - We needed to list our insights based on “what we know that we know”, “what we know that we don’t know”, “what we don’t know that we know”  and “what we don’t know that we don’t know”.</p>
                    </div> <br>
           
            </div>
             <div id = "tab19">
                <p style = "color:grey; font-size:0.8em;"> <i>Activity - Partner review</i></p> 
                 <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    The tool is thus far way too complex and too cluttered.</li>
                   <br><br>
                
                  <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                   The tool thus far does not create incentive for the documenter to fill in all the information that the reader needs</li>
                   <br><br>

                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We met with our product owners to discuss our process and our prototypes. </p>               
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
       <p><i>SCREAM! Tool project // Sprint 3</i></p> 
        <img id = "lightBulb" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/KeyInsight_new.svg"/>
           <h2 style= "vertical-align: middle; width:80%; margin-bottom:1em; display:inline-block; margin-left:1em; "><i>The SCREAM! file has have layers of information. The first layer should be some sort of summary (abstract). This affects the design, the text framing and the structure. .</i></h2>
       </div>

        <!-- popup tabs -->
        <div class="wrapper" style = "background-color:white; ">
        <ul class="tabs2 clearfix" data-tabgroup="second-tab-group" style="background-color:#f5da81; margin-top:0px;">
          <li><a href="#tab20" class="active2">IDENTIFYING ELEMENTS </a></li>
          <li><a href="#tab21">TRANSLATE SESSION</a></li>
          <li><a href="#tab22">ELEMENTS OF USER EXPERIENCE </a></li>
          <li><a href="#tab23">MEETING </a></li>
        </ul>

    <!-- Tab text here (inside)-->
        <section id="second-tab-group" class="tabgroup">
            <div id="tab20">
            <p style = "color:grey; font-size:0.8em;"> <i>Method - Identifying the elements for the SF</i></p>

              <!-- Insights --> 
               <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

               <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:35%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
               The SCREAM! file must have the following elements: the goals/subgoals, the methods and the conclusions (insights) </li>
               <br><br>  
                
                <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:35%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                We decided that artifacts (results/outcomes of the methods used) have the lowest priority.</li>
               <br><br> 
                
                <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>Based on our own experiences and the elements of the Design Method Toolkit we created a list of elements that should be integrated into the SCREAM! file. We then prioritized them, based on what we think is most important. We will test if these elements are actually relevant later. </p>

             </div>

            <div id = "tab21">
             <p style = "color:grey; font-size:0.8em;"> <i> Activity - Translate session with Irene Kamp</i></p>  
            <!-- Insights --> 
              <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

               <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                It is important to find out what the readers find important (Maybe use cardsorting again). </li>
               <br><br>
                
                <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
               Look at information patterns, how other websites (such as bol.com) sorted their information in categories etc. </li>
               <br><br>
                
                <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                Look at interface patterns (look at Jesse James Garrett’s “Elements of User Experience”). </li>
               <br><br>
                
                <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                Look at how users read things on the web (content design). </li>
               <br><br>

              <!-- What happened --> 
              <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
              <p>We met with @Irene again for our translate session. We discussed our process and showed her the final 4 prototypes that we tested with the other MediaLAB teams.  </p>
            </div>
            
             <div id = "tab22">
               <p style = "color:grey; font-size:0.8em;"> <i> Method -Filling in the “Elements of User Experience” </i></p>  
                <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

                   <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    We think that it is very helpful for the readers if the SCREAM! file has some sort of “abstract”.</li>
                   <br><br>

                    <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                    The first level of the information architecture exists of: the method, the summary (abstract), navigation bar. </li>
                   <br><br>


                  <!-- What happened --> 
                  <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
                  <p>We tried to fill in the “Elements of User Experience” that @Irene suggested to us. This helped us define the ‘user needs’, the ‘site objectives’, the ‘content requirements’, the ‘ functional specifications’ and the first part of the ‘information architecture’. We will try to fill it in further in the next sprints. </p>

                  <!-- Links/ photos/files -->
                  <p style = "font-size:1em;"><strong>LINKS/PHOTOS/FILES</strong></p>
               <!-- Links/ photos/files -->
                  <p style = "font-size:1em;"><strong>LINKS/PHOTOS/FILES</strong></p>
                   <div style = " color:#66afad; padding:0px;">
                       <img id = "profilePic" alt = "Add a project photo" width = "1000" height = "700px" src="http://i67.tinypic.com/30jnzi9.jpg"/>
                      <p>ELEMENTS OF USER EXPERIENCE  - We  tried to fill in as much as we could and we will refine it later.</p>
                    </div> 
            </div> 
            
              <div id = "tab23">
             <p style = "color:grey; font-size:0.8em;"> <i> Activity - Meeting with Silvio Lorusso</i></p>  
            <!-- Insights --> 
              <p style = "font-size:1em;"><strong>WHAT WERE THE INSIGHTS FROM THIS EVENT?</strong></p>

               <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                How people look for information can be influenced by the design that we gave the prototypes, which makes it hard to test which prototype works best. </li>
               <br><br>
                
                <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; bottom:2%; left:1px;" id = "insight_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/bookmark.svg"/>
                Text framing is very important for our tool </li>
               <br><br>
                

              <!-- What happened --> 
              <p style = "font-size:1em;"><strong>WHAT HAPPENED IN THIS EVENT?</strong></p>
              <p>We met with @silvio, because he has knowledge about how people read the web. </p>
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
                <span style ="color:#66afad;">SPRINT 3</span> <span style ="color:#66afad; float:right;">▼</span>
                </div>
                <!-- Sprint menu text/options
                Code from: http://www.w3schools.com/css/tryit.asp?filename=trycss_tooltip_bottom-->
                <span class="tooltiptext">
                    <span><a href="/index.php?page_id=1416" style = "text-decoration:none; color:grey;">SPRINT 1</a>  </span><br>
                    <span><a href="/index.php?page_id=1419" style = "text-decoration:none; color:grey;">SPRINT 2</a>  </span> <br>
                    <span style = "color:grey;"> SPRINT 4 </span> <br>
                    <span style = "color:grey;"> SPRINT 5 </span> <br>
                    <span style = "color:grey;"> SPRINT 6 </span> <br>

                </span>
            </div> 
            <span style ="color:grey; font-size:0.8em;"> <br>Documentation, Personal preferences</span>   
        </div>

        <div id="sprintImage" style = "display:inline-block; vertical-align:top;" >
               <img id = "profilePic" alt = "Add a project photo" width = "400" height = "200px"       src="http://i68.tinypic.com/2uztstw.png"/>
        </div>       

    </div>

    <!-- Sprint Summary -->
   <div id= sprintSummary style = "text-align:left; display:inline-block; vertical-align:top; width:70% ">
       <br>

       <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; top:30%; left:1px;" id = "sprint_sum_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/aim.svg"/>
       <strong>The aim for this sprint is to</strong> formulate and test a standard SCREAM! file and validate that it is both helpful for the documenter and understandable for the reader. </li>
       <br><br><br>
       <li style=" position:relative; display:inline-block; padding-left:60px;" id = "mvpBtn"><img style = "position:absolute; top:30%; left:1px;" id = "sprint_sum_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/mvp.svg"/>
           <strong>The minimal viable product is</strong>  a sufficiently-structured SCREAM! file validated by readers and documenters.</li>
       <br><br><br>
       <li style=" position:relative; display:inline-block; padding-left:60px;"><img style = "position:absolute; top:30%; left:1px;" id = "sprint_sum_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/Conclusion_1.svg"/>
           <strong>The conclusion for this sprint is</strong> that we need to clarify our vision for this project and, based on this vision, prioritize what we want to achieve
 </li>

    </div> 
</div>
<br>
             
<!-- Tabs -->   
    <div class="wrapper">
    <ul class="tabs clearfix" data-tabgroup="second-tab-group">
      <li><a href="#tab6" class="active">THE KEY INSIGHTS</a></li>
      <li><a href="#tab7">PREVIOUS STEPS</a></li>
      <li><a href="#tab8">NEXT STEPS</a></li>
        
      <li style = " width:5%;"><a href="#tab9"> <img id = "tabIcon"  src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/Link_sprint.svg"/>  </a></li>
      <li style = " width:5%;"><a href="#tab10"> <img id = "tabIcon"  src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/Edit_sprint.svg"/> </a></li>
      <li style = " width:5%;"><a href="#tab11"> <img id = "tabIcon"  src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/Image_sprint.svg"/> </a></li>
    </ul>
       
<!-- Tab text here (inside)-->
    <section id="second-tab-group" class="tabgroup">
        <!-- Key Insights --> 
      <div id="tab6">
        <div id = "keyInsight1">
           We need to create incentive for the documenter to fill in the SCREAM! file
        </div>
          
        <div id = "keyInsight2">
           The current prototype is too complex for the reader
        </div>
          
        <div id = "keyInsight3">
           We have to create a coherent vision for this project 
        </div>
          
        <div id = "keyInsight4">
             The SCREAM! file has have layers of information. The first layer should be some sort of summary (abstract). This affects the design, the text framing and the structure.  
        </div>
      </div>
        <!-- Previous steps -->
      <div id="tab7">
          <p>People have personal preferences when it comes to documenting, therefore we do not want to change the way people already document their process.</p>
      </div>
        <!--Next steps -->
      <div id="tab8">
         <p> 1. We want to figure out what people want to read<br>
             2. We want to create the first prototype for the documenter<br>
             3. How are we going to encourage the documenter to provide the information that the reader wants?<br>
             4. Will our SCREAM! file be method oriented or sprint oriented?<br>
             5. We need to decide on which platform this tool will be built<br>
</p>
      </div>
    </section>
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

    
        <!-- Replace this code with the working tabs code-->
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
        var popup4 = document.getElementById("popupPage4");
        var MVP = document.getElementById("MVP");
            
        var keyInsight1 = document.getElementById("keyInsight1");
        var keyInsight2 = document.getElementById("keyInsight2");
        var keyInsight3 = document.getElementById("keyInsight3");
        var keyInsight4 = document.getElementById("keyInsight4");
        var closeBtn = document.getElementsByClassName("close")[0];
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
</div> <!-- End main content -->
