<?php
/**
 * Template Name: sandstone page Template, No Sidebar
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
    <div class="container no_padd">
         <div class="pro_box_wrap">
          <ul>
              <li>
                    <div class="pro_box">
                     <div class="pro_imgbox"><img src="<?php echo get_template_directory_uri(); ?>/images/Sandstone-1.jpg" alt="" />  </div>
                     <div class="pro_dtls">

<p><strong>Name</strong>:DG Black flag stone</p>
<p><strong>Quarry Location</strong>: Sagar, (Madhya Pradesh), India</p>







                     </div>

<div class="container no_padd">
         <div class="pro_box_wrap">
          <ul>
              <li>
                    <div class="pro_box">
                     <div class="pro_imgbox"><img src="<?php echo get_template_directory_uri(); ?>/images/Sandstone-2.jpg" alt="" /> </div>
                     <div class="pro_dtls">

<p><strong>Name</strong>:DG White flag stone</p>
<p><strong>Quarry Location</strong>:Madhya Pradesh, India</p>







                     </div>
                  </div>
              </li>

          </ul>
          </div>


       <div class="dtls_accord">
            <?php echo do_shortcode(" [WPSM_AC_SH id=246]"); ?>
       </div>





    </div>
<?php get_footer(); ?>