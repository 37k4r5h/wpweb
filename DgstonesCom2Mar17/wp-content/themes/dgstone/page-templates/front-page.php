<?php

/**

 * Template Name: Front Page Template

 *

 * Description: A page template that provides a key component of WordPress as a CMS

 * by meeting the need for a carefully crafted introductory page. The front page template

 * in Twenty Twelve consists of a page content area for adding text, images, video --

 * anything you'd like -- followed by front-page-only widgets in one or two columns.

 *

 * @package WordPress

 * @subpackage Twenty_Twelve

 * @since Twenty Twelve 1.0

 */



get_header(); ?>

<section id="banner" class="banner_wrap"> <?php echo do_shortcode('[metaslider id=30]'); ?> </section>

<!-- banner -->

<section id="aboutus" class="pan about_wrap">
  <div class="container no_padd">
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
      <div class="about_content_area">
        <h3 class="heading">
          <?php the_field('about_heding'); ?>
        </h3>
        <div class="description">
          <?php the_field('about_content'); ?>
        </div>
        <div class="about_btn"><a href="#" class="toggle-link">THE MORE YOU KNOW &rarr;</a></div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 no_padd">
      <div class="vis_mis_area">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="vis_mis_box">
            <h4>
              <?php the_field('mission_heading'); ?>
            </h4>
            <?php the_field('mission_content'); ?>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="vis_mis_box">
            <h4>
              <?php the_field('vision_heading'); ?>
            </h4>
            <?php the_field('vision_content'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- aboutus -->

<section id="corporate_profile" class="pan corporate_profile">
  <div class="container no_padd">
    <h3 class="heading">Management & Team</h3>
    <div class="copr_pro_list"> <?php echo do_shortcode("[pt_view id=39115bfu8y]"); ?> <?php echo do_shortcode("[pt_view id=895e3ed20y]"); ?> </div>
  </div>
</section>

<!-- /corporate_profile --> 

<!--<section id="icon_area" class="pan icon_wrap">

  <div class="container no_padd">

    <div class="col-md-3 col-md-offset-2 col-sm-4 col-xs-12">

      <div class="icon_box">

        <div class="icon_box_img"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_1.png" alt="icon1" /></div>

        <div class="icon_box_content">

          <h3>1000+</h3>

          <h4>Happy Clients</h4>

        </div>

      </div>

    </div>

    <div class="col-md-3 col-sm-4 col-xs-12">

      <div class="icon_box">

        <div class="icon_box_img"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_2.png" alt="icon2" /></div>

        <div class="icon_box_content">

          <h3>200 Ton</h3>

          <h4>Sold products</h4>

        </div>

      </div>

    </div>

    <div class="col-md-3 col-sm-4 col-xs-12">

      <div class="icon_box">

        <div class="icon_box_img"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_3.png" alt="icon3" /></div>

        <div class="icon_box_content">

          <h3>5632</h3>

          <h4>Reviews</h4>

        </div>

      </div>

    </div>

  </div>

</section>--> 

<!-- icon_area -->

<section id="product" class="pan product_wrap">
  <div class="container no_padd">
    <h3 class="heading">Our Stones</h3>
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <div class="our_stone_box">
         <img src="http://www.dgstones.com/wp-content/uploads/2016/10/DG-RED-375.png" alt="Granite"  />
         <div class="overlay_box">
            <h3><a href="granite-3" title="Granite" target="_self">Granite</a></h3>
              <a class="view_btn" title="Granite" href="granite-/" class="">View</a>
         </div>
     </div>
 </div>
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <div class="our_stone_box">
         <img src="http://www.dgstones.com/wp-content/uploads/2016/10/white-sandstone.jpg" alt="Sandstone"  />
         <div class="overlay_box">
            <h3><a href="sandstone" title="Sandstone" target="_self">Sandstone</a></h3>
              <a class="view_btn" title="Sandstone" href="sandston/" class="">View</a>
         </div>
      </div>
 </div>
 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
     <div class="our_stone_box">
         <img src="http://www.dgstones.com/wp-content/uploads/2016/10/granit-tasi-2.jpg" alt="gallery"  />
         <div class="overlay_box">
            <h3><a href="gallery/" title="gallery" target="_self">Gallery</a></h3>
              <a class="view_btn" title="gallery" href="granite/" class="">View</a>
         </div>
     </div>
 </div>
  <!--<div class="pro_gallery"> <?php echo do_shortcode(''); ?> </div>-->
  <!--<div class="pro_cont">
    <div class="container no_padd">
      <div class="col-sm-6 col-xs-12">
        <?php the_field('product_left_content'); ?>
         </div>
      <div class="col-sm-6 col-xs-12">
        <?php the_field('product_right_content'); ?>
        
      </div>
    </div> -->
  </div>
</section>

<!-- product -->

<section id="csr" class="pan parallax_1">
  <div class="container no_padd">
    <h3 class="heading">
      <?php the_field('csr_heading'); ?>
      </h3>
    <?php the_field('csr_content'); ?>
    
    <?php //dynamic_sidebar('hm_news'); ?>
    <div class="col-xs-12">
      <div class="parallax_1_box">
        <?php the_field('csr_content_box'); ?>
       
      </div>
    </div>
  </div>
</section>

<!-- parallax_2 -->

<section id="policy" class="pan parallax_2">
  <div class="container no_padd">
    <h3 class="heading">
      <?php the_field('policy_heading'); ?>
      DG Group’s Environment Policy</h3>
    <?php the_field('policy_content'); ?>
    
    <?php //dynamic_sidebar('hm_news'); ?>
    <div class="col-xs-12 ">
      <div class="parallax_2_box">
        <?php the_field('policy_content_box'); ?>
        
      </div>
    </div>
    
    <!--<div class="col-md-offset-5 col-md-7 col-sm-7 col-xs-12">

      <h3 class="heading">News</h3>

      <div class="news_accordian"> <?php  //echo do_shortcode('[WPSM_AC_SH id=62]'); ?> </div>

    </div>--> 
    
  </div>
</section>

<!-- news -->

<section id="services" class="pan services">
  <div class="container no_padd">
    <h3 class="heading">
      <?php the_field('services_heading'); ?>
      </h3>
    <div class="col-md-3 col-sm-6 col-xs-12 no_padd">
      <div class="serv_box">
        <div class="serv_img_box"> <img src="<?php the_field('services_1_image'); ?>" alt="services" /> </div>
        <div class="serv_cnt_box">
          <h3>
            <?php the_field('services_1_text'); ?>
            </h3>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12 no_padd">
      <div class="serv_box">
        <div class="serv_img_box"> <img src="<?php the_field('services_2_image'); ?>" alt="services" /> </div>
        <div class="serv_cnt_box">
          <h3>
            <?php the_field('services_2_text'); ?>
            </h3>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12 no_padd">
      <div class="serv_box">
        <div class="serv_img_box"> <img src="<?php the_field('services_3_image'); ?>" alt="services" /> </div>
        <div class="serv_cnt_box">
          <h3>
            <?php the_field('services_3_text'); ?>
            </h3>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12 no_padd">
      <div class="serv_box">
        <div class="serv_img_box"> <img src="<?php the_field('services_4_image'); ?>" alt="services" /> </div>
        <div class="serv_cnt_box">
          <h3>
            <?php the_field('services_4_text'); ?>
            </h3>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- news -->

<section id="contact" class="pan contact_wrap">
  <div class="container no_padd">
    <h3 class="heading">
      <?php the_field('contact_heading'); ?>
      </h3>
    <?php the_field('contact_content'); ?>
    
    <div class="row cont_details_wrap">
      <div class="col-md-4 col-sm-12 col-xs-12 no_padd">
        <?php the_field('contact_details'); ?>
        
      </div>
      <div class="col-md-8 col-sm-12 col-xs-12"><?php echo do_shortcode('[contact-form-7 id="61" title="Contact form 1"]'); ?></div>
    </div>
  </div>
</section>
<section id="map" class="map_wrap">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.3564883242834!2d77.43296001449258!3d23.230111214369852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c425d37595271%3A0x6c11db894afe710b!2s158%2C+Zone-II%2C+Maharana+Pratap+Nagar%2C+Bhopal%2C+Madhya+Pradesh+462023!5e0!3m2!1sen!2sin!4v1470338066668" width="800" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
<?php get_footer(); ?>
