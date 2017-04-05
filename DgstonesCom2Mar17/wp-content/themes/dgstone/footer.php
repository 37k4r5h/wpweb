<?php

/**

 * The template for displaying the footer

 *

 * Contains footer content and the closing of the #main and #page div elements.

 *

 * @package WordPress

 * @subpackage Twenty_Twelve

 * @since Twenty Twelve 1.0

 */

?>

	</div><!-- #main .wrapper -->

	<footer id="footer" class="footer_wrap">

    <div class="container no_padd">

    <div class="col-md-5 col-sm-5 col-xs-12">

    <div class="social"><?php echo do_shortcode('[aps-social id="1"]')?></div>

		</div>

     <div class="col-md-2 col-sm-2 col-xs-12">

     <div class="ftr_logo"><?php dynamic_sidebar('logo'); ?></div>

		</div> 

        <div class="col-md-5 col-sm-5 col-xs-12">

        <div class="copyright"><p>&copy; Copyright 2016, design by shadesmarcomm@gmail.com</p></div>

		</div>

</div><!-- #page -->



<?php wp_footer(); ?>

</body>

</html>