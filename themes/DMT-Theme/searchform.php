<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
	<div class="search_text">
		<input type="hidden" value="method-card" name="post_type" id="post_type" />
		<input type="search_card" size="put_a_size_here" name="s" id="s" value="Type a word" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
	 <input id="search-submit-button" type="submit" value="Search">
  </div>
</form>