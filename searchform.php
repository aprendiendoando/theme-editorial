<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
    <input type="search" id="query"
            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
</form>
