<?php
/*
Template name: No sidebar
*/

get_header(); ?>
    <!-- HEAD section and NAVIGATION end-->
    <h1>nosidebar.PHP</h1>
              <h1><?php the_title(); ?></h1>

    <div class="container" >
    <!--  <main style="grid-template-columns: 1fr"> -->
    <main  style="grid-template-columns: 1fr">

        <?php 
          if(have_posts()) {
            while(have_posts()) {
              the_post();
              ?>
              <article ">
              <h2><?= the_title(); ?></h2>
           
              <?php the_content(); ?>
              </article>
               <?php
            }
          }    
     ?>
       
      </main>

      <section >
    <!-- Widget area-->
   <!-- check if the page is the contact page-->
    <?php if(is_page('kontakt')) : ?>
      <?php
if (is_active_sidebar('widget-area'))  : ?>
<div id="widget-area">
    <?php dynamic_sidebar('widget-area'); ?>
</div>
<?php endif; ?>

      
       <?php echo do_shortcode('
  [wpgmza id="1"]
'); ?>
    </div>
    <?php endif; ?>


    <!-- Widget area end-->



    
    
    </section>

    
      
      <?php get_footer(); ?>
<!-- FOOTER section start-->
