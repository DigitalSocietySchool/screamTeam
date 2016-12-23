<?php
/*
 Template Name: Test
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






 ?>



 <?php get_header(); ?>

<style type="text/css">
	.wrapper {
  margin: 30px auto;
  width: 80%;
  color: #555;
  font-size: 14px;
  line-height: 24px;
}
h1 {
  font-size: 20px;
  text-align: center;
  text-transform: uppercase;
}
h1 + p {
  text-align: center;
  margin: 20px 0;
  font-size: 16px;
}
.tabs li {
  float: left;
  width: 25%;
}
.tabs a {
  display: block;
  text-align: center;
  text-decoration: none;
  text-transform: uppercase;
  border-bottom: 2px solid #888;

  color: #888;
  padding: 20px 0;
  background: transparent;
}
.tabs a:hover,
.tabs a.active {
    border-bottom: 4px solid #888;
      font-weight: bold;


}
.tabgroup div {
  padding: 30px;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
}
.clearfix:after {
  content: "";
  display: table;
  clear: both;
}





</style>
<div class="wrapper">
<ul class="tabs clearfix" data-tabgroup="second-tab-group">
  <li><a href="#tab6" class="active">THE PROCESS</a></li>
  <li><a href="#tab7">THE BRIEF</a></li>
  <li><a href="#tab8">THE TOPIC</a></li>
  <li><a href="#tab9">THE TARGET USER</a></li>
</ul>
<section id="second-tab-group" class="tabgroup">
  <div id="tab6">
    <p> <button type="button" id = "createteam_btn2" class = "scream_btn">Create a team</button></p>
  </div>
  <div id="tab7">
    <h2>Heading 2</h2>
    <p><input type="button" name="button" class="scream_btn">>/p>
  </div>
  <div id="tab8">
    <h2>Heading 3</h2>
    <p>Atque ratione soluta laboriosam illo inventore amet ipsum aliquam assumenda harum provident nam accusantium neque debitis obcaecati maxime officia saepe ad ducimus in quam libero vero quasi. Saepe sit nisi?</p>
  </div>
  <div id="tab9">
    <h2>Heading 4</h2>
    <p>Quidem perferendis id sapiente cumque ullam repellendus dolorum odit rerum quibusdam tempora voluptatibus ipsum. Maiores laborum velit aperiam dicta quisquam assumenda at esse exercitationem culpa sequi porro minus ipsa aut.</p>
  </div>
</section>
</div>


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
    


</script>>

<?php get_footer(); ?>
