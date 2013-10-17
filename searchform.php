            <div class="search left">
                <form class="searchForm row" role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
                    <input name="s" type="text" placeholder="<?php esc_attr_e( 'Search &hellip;', 'shape' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>">
                    <input id="search-toggle" class="search-closed" type="submit" value="Search">
                </form>
            </div>