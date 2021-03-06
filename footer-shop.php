    </div>
    <!-- End Container -->

    <!-- Footer -->
    <footer class="clearfix">
    	<div class="container">
    		<div class="left">
    			<div class="block">
    				<h4>Customer Care</h4>
    				<ul>
                        <?php //List pages
                        $excl = '89'; //Live is 101
                        $args = array(
                            'title_li' => __(''), //Remove default title
                            'depth'    => 0,      //Allow sub-pages
                            'child_of' => 89
                            // 'exclude'  => $excl
                        );
                        wp_list_pages($args);
                        ?>
                    </ul>
    			</div>
    			<div class="block">
    				<h4>About</h4>
    				<ul>
                        <?php //List pages
                        $excl = '91'; //Live is 103
                        $args = array(
                            'title_li' => __(''), //Remove default title
                            'depth'    => 0,      //Allow sub-pages
                            'child_of' => 91
                            // 'exclude'  => $excl
                        );
                        wp_list_pages($args);
                        ?>
                    </ul>
    			</div>
    			<div class="block">
    				<h4>Follow us</h4>
    				<ul>
                        <li><a href="http://www.pinterest.com/jacvanek/" target="_blank" title="Pinterest">Pinterest</a></li>
                        <li><a class="inst" href="http://instagram.com/jacvanek" target="_blank" title="Instagram" >Instagram</a></li>
                        <li><a class="twit" href="https://twitter.com/jacvanek" target="_blank" title="Twitter" >Twitter</a></li>
                        <li><a class="face" href="https://www.facebook.com/OfficialJacVanek" target="_blank" title="Facebook">Facebook</a></li>
                    </ul>
    			</div>
    		</div>
    		<div class="newsletter right">
                <h4>JOIN OUR MAILING LIST</h4>
                <form>
                    <input class="" type="text" placeholder="Enter Email...">
                    <input class="" type="submit" value="SIGN UP">
                </form>
    		</div>
            <div class="row clearfix">
                <div class="left">
                    <p>&copy;Jac Vanek 2006-<?php echo date('Y'); ?></p>
                </div>
                <div class="right">
                    <p>Site by: <a href="" target="_blank" title="Fat Cat Web Design">FatCat</a></p>
                </div>
            </div>
    	</div>
    </footer>
    <!-- END: Footer -->

    </div> <!-- END: Outer Wrap -->

    <!-- Functionality
    ---------------------->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

    <?php wp_footer(); ?>
</body>
</html>