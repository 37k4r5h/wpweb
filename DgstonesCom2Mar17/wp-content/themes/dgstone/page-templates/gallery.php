<?php
/**
 * Template Name: gallery page Template, No Sidebar
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<section id="banner" class="banner_wrap inner_bnr">
     <!--<img src="http://www.dgstones.com/wp-content/uploads/2016/08/banner2.jpg" alt="" />-->
<div style="height:426px; background-color:#000;">.</div>
      <div class="inner_bnr_cntbx">
          <div class="container no_padd">
          <h3><?php echo get_the_title(); ?></h3>
          <div class="breadcrumb">    <?php get_breadcrumb(); ?>      </div>
          </div>
      </div>
    </section>
    <div class="container no_padd" style="margin-top:214px;">
<!--        <h1 style="text-align: center;">GRANITE</h1>

<hr />

<h1 style="text-align: center;"></h1>
<h2 style="text-align: center;">[unitegallery our_product catid=1]</h2>
&nbsp;
<h2 style="text-align: center;"><img class="aligncenter wp-image-225 size-full" src="http://www.dgstones.com/wp-content/uploads/2016/08/technical.png" alt="technical" width="1440" height="321" /></h2>
<h2 style="text-align: center;"></h2>
<h1 style="text-align: center;">SANDSTONE</h1>

<hr />

<h1 style="text-align: center;"> [unitegallery our_product catid=3]</h1>-->
       <div class="gallery_wrap">
            <?php echo do_shortcode("[unitegallery galelry]"); ?>
       </div>





    </div>
<?php get_footer(); ?>