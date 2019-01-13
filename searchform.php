<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" class="field" name="s" placeholder="<?php the_search_query(); ?>"  />
		<input type="submit" class="submit"  id="searchsubmit" value="Search"  />
	</form>