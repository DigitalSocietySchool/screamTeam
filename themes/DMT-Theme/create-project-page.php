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
        <textarea id = "project_goal" class = "scream_textarea" size = 50   placeholder = "Explain how you are planning to solve this project's design challenge."></textarea>
    </div>

    <span id = "chars">50</span> characters remaining

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

    Start date -----> End date
    <br>
    <input type="text" name="daterange" value="input date values" id="datepicker" />

    <br>

    <button type="button" id = "createteam_btn" class = "scream_btn">Create a team</button>
    <p id="warning"><p>




</script> 
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
 
  //declare global variables
    var projectName;
    var projectGoal;   
    var parsedStartDate;
    var parsedEndDate;
    var dates;
    var validatation=false;


$(function() {
        //when submit button is clicked
            $('#createteam_btn').click(function(){
            
            get_values();
            validate();
            submit();
            //get values from form and save into the global scripts variable
            function get_values(){


                projectGoal= document.getElementById("project_goal").value;
                projectName= document.getElementById("scream_oneline").value;
                dates = document.getElementById("datepicker").value;
                convertUNIXDate(dates);

                function convertUNIXDate(dates){
                console.log("getting values")  
                    var dateArray = dates.split("-");
                    var date1= dateArray[0];
                    var date2= dateArray[1];
                    date1=parseDate(date1);
                    date2=parseDate(date2);
                    parsedStartDate= Date.parse(date1);
                    parsedEndDate= Date.parse(date2);
                    function parseDate(input) {
                    var parts = input.split('/');
                    // new Date(year, month [, day [, hours[, minutes[, seconds[, ms]]]]])
                    //return new Date(parts[2], parts[1]-1, parts[0]); // Note: months are 0-based
                }
            }


        }
            

            //vallidate the input 
            function validate(){
                                console.log("validating")  

                if (projectName== ""){
                    document.getElementById('warning').innerText="Do you really want to start a nameless project?";

                }
 
                else if ((parsedStartDate||parsedEndDate)== 0){
                    document.getElementById('warning').innerText="please input a date range for your project";
                }
                else {
                    validatation= true;
                    document.getElementById('warning').innerText="";

                }



            }

            //pasrse JSON object and submit
            function submit(){

                if(validatation== true){
                                    console.log("submitting")  


                   var jsonObj={
                    "title": { "raw": projectName}, 
                    "type": "project",
                    "slug": "alien-team-2",
                    "status": "publish",

                    "wpcf-project-goal": projectGoal,
                    "wpcf-start-date" : parsedStartDate,
                    "wpcf-end-date": parsedEndDate

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

                    }, // on failure do the following 
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        console.log(XMLHttpRequest);
                        console.log(textStatus);
                        console.log(errorThrown);}
                    });

                window.location.href = 'http://localhost/create-team/';

            }
        }


    });


        });




</script>

<?php get_footer(); ?>
