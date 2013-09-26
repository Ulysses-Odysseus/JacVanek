<!-- Shop Sidebar -->
<aside id="sidebar">
	<h4>SHOP BY</h4>
	<ul class="linearTrans">
        <?php //List categories
        $args = array(
            'title_li'   => __(''), // Remove default title
            'child_of'   => 16,
            'hide_empty' => false
        );

        $categories = get_terms( 'product_cat', $args );

        foreach ($categories as $cat) {
        	echo '<li><a href="' . $cat->permalink . '" target="_top">' . $cat->name . '</a></li>';
        }
        ?>
    </ul>
</aside>