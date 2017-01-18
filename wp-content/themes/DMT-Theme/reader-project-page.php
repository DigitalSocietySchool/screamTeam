<?php

	global $wp_session;
	$wp_session['searching'] = false;
/*
 Template Name: Reader Project Page
*/
?>

<?php get_header(); ?>

    <div id= "main-content"><br><br>
  
        <!-- POP UP PAGE REQUEST-->        
    <div class = "popupPage" id = "request">
        <div class = "popup-content">
            
                <div style = "padding-left:2em; height:280px; padding-top:10px; margin-top:25%; padding-right:2em;">

                  <!-- Insights --> 
                  <p style = "font-size:1em;"><strong>THANK YOU FOR SENDING A REQUEST TO THE TEAM</strong></p>
                  <textarea id = "requestMsg" class = "scream_textarea_border" size = 50   placeholder = "Add a personal message"></textarea>
                  <button type="button" class = "scream_btn_orange" style = " float:right; width:20%;"onclick = "hide('request')">Done</button>

       
                </div>
        </div>
    </div><!-- END POP UP PAGE REQUEST--> 
<!-- Contains Title, picture-->
       
        <div id = "projectHeader">
               <div class = "centeredContent">
                   <img id = "profilePic" alt = "Add a project photo" width = "400" height = "200px"       src="http://i64.tinypic.com/t7d5rk.jpg"/>
               <br><br><br>
               <h3 style="font-size:1.5em;"> <strong>SCREAM! TOOL</strong></h3>
                 <br>
            </div>
       
        </div>   
    
        <div class = "project_goal">
            <div id = "readOnly" class = "readOnly"> <h3><em><strong> The aim for this project is to</strong> add a stand-alone component to the existing SCREAM! platform to digitize, organize and prioritize the way people document their (non-)digital artifacts. </em>
            </h3></div>
        </div>

        
 <!-- Team Information -->   
        <br><br><br><br>
    <div class = "team_info">
        
        <!-- List of team members -->
        <div class = "oneLineBorder"> <p style="color:grey;">THE TEAM</p></div>
    <!-- NOTE: IMAGES FOR THE MEMBERS ARE FROM A TEMPORARILY WEBSITE AND WILL EXPIRE AFTER A WEEK -->
        <li><img id = "member_icon" src = "http://cutmypic.com/uploads/title897983179.png"/> <p style = "display:inline-block;
            vertical-align:middle;"><em> <strong>Naoya Nishiyama</strong><br>naoya@gmail.com</em></p></li>
        
        <li style = "vertical-align:top;"><img id = "member_icon" src = "http://cutmypic.com/uploads/title124330475.png"/><p style = "display:inline-block;
            vertical-align:middle;"><em><strong>Lisa The</strong><br>lisa@gmail.com</em></p></li>
        
        <li><img id = "member_icon" src = "http://cutmypic.com/uploads/title164424667.png"/><p style = "display:inline-block;
            vertical-align:middle;"><em><strong>Abdo Hassan</strong><br>abdo@gmail.com</em></p></li>
        
        <li><img id = "member_icon" src = "http://cutmypic.com/uploads/title542073627.png"/><p style = "display:inline-block;
            vertical-align:middle;"><em><strong>Inge van Ee</strong><br>inge@gmail.com</em></p></li>
        
        <li><img id = "member_icon" src = "http://cutmypic.com/uploads/title417163540.png"/><p style = "display:inline-block;
            vertical-align:middle;"><em><strong>Gal Agmon</strong><br>gal@gmail.com</em></p></li>
        
        
   
        
        <!-- List of companies and locations -->
         <div class = "oneLineBorder"><p style="color:grey;">COMPANIES/ORGANIZATIONS</p></div>
        <p>MediaLab, HvA Amsterdam </p>
        
        <img id = "location" class = "location_icon" src = "<?php echo get_stylesheet_directory_uri(); ?>/library/images/Location.svg"/>
        <p id = "location">Amsterdam, The Netherlands</p>

        
        <!-- List of keywords -->
        <div class = "oneLineBorder"><p style="color:grey;">KEYWORDS</p></div>
        <p>Documentation, SCREAM!, Multidisciplinary Design Teams, Design waste, Community</p>

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
          <!-- Sprint 1 page -->
          <a href="/index.php?page_id=1416">
            <div style = "border:solid #d3d3d3; width:100%; height:203px; padding:0px">
            
              <img  style ="display:inline-block; width:30%; float:left; " alt = "Add a project photo" width = "150px" height = "200px"       src="http://i66.tinypic.com/ot2h3a.png"/>
              
              <div style ="display:inline-block; width:70%; float:right; padding:0; padding-left:10px;">
                  <h2 style = "color:#66afad; margin:0px;">SPRINT 1</h2>
                  <p style = "color:grey; font-size:0.8em;"><i>Chatbot, DesignFeedback, UX, AI </i></p>
                  <p><strong>The aim of this sprint is to </strong>identify and validate a set of functional requirements for the chatbot, and translate the findings into a clickable prototype.</p>
               </div>
            </div>
          </a
        ><br>
          <!-- Sprint 2 page -->
          <a href="/index.php?page_id=1419">
          <div style = "border:solid #d3d3d3; width:100%; height:203px; padding:0px">
            
              <img  style ="display:inline-block; width:30%; float:left; vert" alt = "Add a project photo" width = "150px" height = "200px"       src="http://i67.tinypic.com/14nkdqd.jpg"/>
              
              <div style ="display:inline-block; width:70%; float:right; padding:0; padding-left:10px;">
                  <h2 style = "color:#66afad; margin:0px;">SPRINT 2</h2>
                    <p style = "color:grey; font-size:0.8em;"><i>Documentation, Personal preferences</i></p>
                    <p><strong>The aim of this sprint is to </strong>understand the setbacks and pleasures of the documentation process.</p>
               </div>
              </div>
          </a>
          </div>
      <div id="tab7">
          <p>Bots have many of the same qualities as their human counterparts.You will develop a bot that integrates or Design Method Toolkit and app with services like SPARK, SLACK. The bot facilitates collaboration and the use of design methods in team projects. The bot has the personality to communicate with different cultures, uses appropriate instructional language and is able to motivate and guide users to document their design process.</p>
      </div>
      <div id="tab8">
        <p>An occurring problem in the design process of Multidisciplinary Design Teams is the notion of design waste.<br>
            - Design waste happens when parts of the valuable work of the Multidisciplinary Design Team are lost or unavailable for creative reuse. <br>

            - Documentation: the collection of documents produced throughout the creative process of solving a design challenge. <br>

            - "Communicating the process": adding a layer of context to the documentation.<br>

            - Added layer of context: (key) insights that are gained through events.<br>

            - Events: moments in the process that help you gain insights. This can be design and research methods, but as well meetings, activities, workshops, discussions, presentations, inspirational moments etc.<br></p>
         
      </div>
      <div id="tab9">
        <p>There if no information about the target user from SCREAM! team yet...</p>
          <button type="button" class = "scream_btn_orange" id = "rqBtn">Send the team a request for more information</button>
       
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
            width:auto;
        }
        li {
            list-style-type:none;
        }
        
      input[type="text"].scream_oneline {
            border-bottom: none;
        }
        
        #member_icon{
            height: 60px;
            width: 60px;
            display:inline-block;
            vertical-align:middle;
            margin-right: 10px;
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
       
        <!--Script for the popup functionality -->
        <script>
          
        var requestMsg = document.getElementById("requestMsg");
        var rqBtn = document.getElementById("rqBtn");
        var request = document.getElementById("request");
            
        rqBtn.onclick = function() {
            request.style.display= "block";
        }
        
         //Function for hiding the popup
        function hide(popup){
            document.getElementById(popup).style.display="none";
            requestMsg.value = "";
        }
        
        </script>
</div> 