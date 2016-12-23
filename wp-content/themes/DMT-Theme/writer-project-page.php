<?php

	global $wp_session;
	$wp_session['searching'] = false;
/*
 Template Name: Writer Project Page
 * TODO: Two sidebars?
*/
?>

<?php get_header(); ?>

<div id ="right-sidebar">
    <ul>
        <?php
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('right-sidebar') ) :
      endif; ?>



    </ul>
</div>


    <div id= "main-content"><br><br>
        
        
        <div class = "centeredContent">
             <!--<div class = "containerBox" id = "container_proj"> -->
        <!--    <label for="file-upload" class = "custom-file-upload">
                
            Add a project photo
            </label>
            
            
           <input type="file" class="upload" onchange="setPicture(this)" />
            
            <img id= "projectPic" src = "#">
         <!--   </div>
            
            
            <div class= "fileUpload btn btn-primary">
            <span>Add a project photo</span>
                <input type = "file" class = " upload"/>
            </div>-->
            <input type="file" name="file" id="file" class="inputfile" />
            <label for="file">Add a project photo</label>                                     
                                                     
                                                     
            <script>
            function setPicture(pic)
                {
                    if(pic.files && pic.files[0])
                    var reader = new FileReader();
                    
                    reader.onload = function(e)
                    {
                        $('#projectPic')
                        .attr('src', e.target.result)
                        .width(400)
                        .height(200);
                    };
                    reader.readAsDataURL(pic.files[0]);
                }
            
            </script>
       
           
            
            <br><br>
        
        <h3> YOUR PROJECT NAME</h3>
        <!-- progress bar-->
        </div>
        <br><br>
        
        <p><strong>Our aim for this project is </strong></p>
        <!-- Project goal variabele-->
        
        <!-- http://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tabulators-->
       <nav class="menu menu--alonso">
        <ul class="menu__list">
            <li class="menu__item menu__item--current">
                <a class="menu__link" href="#">The process</a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="javascript:void(0)" onclick = "openTab('tab-brief')"> The brief</a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="#">The topic</a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="#">The target user</a>
            </li>
            <li class = "menu__line"></li>
        </ul>
        </nav>
           
           <script>$(document).ready(
                $(".menu__item").click('.menu__link',function(e){
                $(".menu__item").removeClass("menu__item--current");
                $(this).addClass("menu__item--current");
                })
            );
           </script>
           
           <script>
           function openTab(tabName)
               {
                   var i;
                   var x = document.getElementById("tab")
                   for (i=0, i<x.length; i++){
                       x[i].style.display = "none";
                   }
                   document.getElementById(tabName).style.display = "block";
               }
           
           
           </script>
       <!-- <div class="tab-container">
           
        <div class = "tab-content" id = "tab-process">
          <button type="button" id = "add-process" class = "scream_btn">Start 'communicating your process' by planning your first sprint</button>
        </div>   
        
        <div class = "tab-content" id = "tab-brief">
          <p> Stuff</p>
        </div> 
            
        <div class = "tab-content" id = "tab-topic">
           <textarea id = "project-topic" class = "scream_textarea"  placeholder = "Explain important concepts related to your project"></textarea>
            
        </div> 
            
        <div class = "tab-content" id = "tab-targeruser">
           <textarea id = "project-topic" class = "scream_textarea"  placeholder = "Who is your target user?"></textarea>
            
        </div>   
            
        </div> -->
        
        
</div>

<?php get_footer(); ?>
