<form class="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="search-field" name="s" placeholder="Search" value="<?php echo get_search_query(); ?>">
    <button class="searchbutton" type="submit"><i class="fa fa-search"></i></button>
</form>