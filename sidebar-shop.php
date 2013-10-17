<!-- Shop Sidebar -->
<aside id="sidebar">
	<h4>SHOP BY:</h4>
	<ul class="desktop linearTrans">
        <?php //List categories
        $args = array(
            'taxonomy' => 'product_cat',
            'child_of' => 13,            // Use ID of "Clothes" - Live is 13
            'hide_empty' => false        // For dev purposes
        );

        $categories = get_terms( 'product_cat', $args );

        foreach ($categories as $cat) {
        	echo '<li><a href="' . get_term_link( $cat ) . '" target="_top">' . $cat->name . '</a></li>';
        }
        ?>
    </ul>

    <select class="mobile">
        <?php //List categories
        foreach ($categories as $cat) {
            echo '<option id="' . get_term_link( $cat ) . '">' . $cat->name . '</option>';
        }
        ?>
    </select>
</aside>