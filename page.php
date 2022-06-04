<?php get_header(); ?>
    <!-- HEAD section and NAVIGATION end-->
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
              <?php if(has_post_thumbnail()) {the_post_thumbnail('custom-large'); } ?>
           
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
<h2>Här hittar du oss!</h2>

      
       <?php echo do_shortcode('
  [mappress mapid="1"]

'); ?>
    </div>
    <?php endif; ?>


    <!-- Widget area end-->



    
    
    </section>

    
         
      <!-- sidebar start -->

     
          <aside >
            <h3>Nyheter</h3>
            <hr style="margin-bottom:20px;">
           <?php 
             wp_reset_query();//Nollställ custom query
             // put a variable in the query
            query_posts('category_name=nyheter&posts_per_page=6'); 


          if(have_posts()) {
            while(have_posts()) {
              the_post();
              ?>
              <article>
              
           
              <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>

              
              </article>
               <?php
            }
          }    
     ?>
          
    
        </aside>
      
      <?php get_footer(); ?>
<!-- FOOTER section start-->
