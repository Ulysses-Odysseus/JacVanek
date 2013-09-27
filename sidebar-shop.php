<!-- Shop Sidebar -->
<aside id="sidebar">
	<h4>SHOP BY:</h4>
	<ul class="linearTrans">
        <?php //List categories
        $args = array(
            'taxonomy' => 'product_cat',
            'child_of' => 16,            // Use ID of "Clothes"
            'hide_empty' => false        // For dev purposes
        );

        $categories = get_terms( 'product_cat', $args );

        foreach ($categories as $cat) {
        	echo '<li><a href="' . get_term_link( $cat ) . '" target="_top">' . $cat->name . '</a></li>';
        }
        ?>
    </ul>
</aside>