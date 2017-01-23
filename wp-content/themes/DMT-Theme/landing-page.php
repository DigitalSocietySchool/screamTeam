<?php
/*
 Template Name: Landing-Page
 *
*/


get_header(); ?>

    <div id="bigcontainer" style="background-color: #F4F4F4;width:100%;height:100%;">

        <div id="innerContainer1" style="height: 50%;width: 100%;display:flex;flex-direction:row;padding-left: 3em;/* width: 50%; */background-color: #E0E0E0;">
                <img src= "<?php echo get_stylesheet_directory_uri(); ?>/library/images/landing1.png" style="width: 100%;padding-top: 0%;z-index: 2;position: absolute;height: 50%;">
                <div id="innerinner" style="height: 100%;width: 50%;display:flex;flex-direction:column;padding-top: 5em;float: left;z-index: 3;position: relative;">
                     <div class="boldTitle">Set your goals, choose your methods, work your magic</div>
                      <div class="subheader" style="padding-left: 10%;font-size: 100%;line-height: 1.1em;color: grey;padding-top: 3%;">Design Method Toolkit for Agile,team-based project</div>
                     <div class="next_btn" id="gotoDMT" style="width: 50%;height: 20%;box-shadow: black;margin-left: 10%;margin-top: 5%;line-height: 550%;font-size: 100%;background-color: #E6706A;">EXPLORE DESIGN METHOD TOOLKIT</div>
                </div>   
                <div id="innerinner2" style=""></div>
         </div>

        <div id="innerContainer2" style="height: 50%;width: 100%;display:flex;flex-direction:row;position: absolute;">
            <img src= "<?php echo get_stylesheet_directory_uri(); ?>/library/images/landing2.png" style="width: 100%;z-index: 1;position: absolute;height: 100%;/* margin-right: 45%; */">
            <div id="innerinner2" style="height: 100%;/* width: 50%; */display:flex;flex-direction:column;/* padding-top: 5em; */padding-left: 50%;z-index: 2;float: right;position: relative;" class="">
                     <div class="boldTitle" style="color:#95CBC8;">Build upon each other's creative work, apply, store, share and 'communicate your process'</div>
                      <div class="subheader" style="padding-left: 10%;font-size: 100%;line-height: 1.1em;color: grey;padding-top: 3%;padding-bottom: 4%;">Search through projects, goals, and results from applied design methods</div>
                       <div id="btn-container" style="height:100%;width: 100%;display:flex;padding-left: 10%;padding-right: 10%;flex-direction:row;">
                            <div class="next_btn" id="gotoProjects" style="width: 220%;height: 35%;box-shadow: black;margin-left: 0%;margin-top: 2%;line-height: 500%;font-size: 100%; background-color: #95CBC8;s">EXPLORE ALL PROJECTS</div>
                            <div class="next_btn" id="gotoAddProject" style="width: 220%;height: 35%;box-shadow: black;margin-left: 5%;margin-top: 2%;line-height: 500%;font-size: 100%;background-color: #95CBC8;">ADD YOUR PROJECT</div>
                        </div>
            </div> 
        </div>
    </div>

    <script type="text/javascript">
        $(function() {
        //when 'EXPLORE DESIGN METHOD TOOLKIT' button is clicked
            $('#gotoDMT').click(function(e){
                window.location.href = 'http://localhost/DMT/';

            })
               $('#gotoAddProject').click(function(e){
                window.location.href = 'http://localhost/startupphase/';

            })
               $('#gotoProjects').click(function(e){
                window.location.href = 'http://localhost/viewallprojects/';

            })
        });
    </script>