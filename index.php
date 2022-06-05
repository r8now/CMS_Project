<?php get_header(); ?>
    <!-- HEAD section and NAVIGATION end-->
              <H1><?php the_title(); ?></H1>

    <div class="container" >
    <!--  <main style="grid-template-columns: 1fr"> -->
    <main > 

        <?php 
          if(have_posts()) {
            while(have_posts()) {
              the_post();
              ?>
              <article ">
              <h2><?php the_title(); ?></h2>
           
              <?php the_content(); ?>
              </article>
               <?php
            }
          }    
     ?>
       
      </main>

      <section style="display: none">SECTION -Maybe widget AREA</section>
    
      <!-- sidebar start -->

     
          <aside >
            <H3>Nyheter</H3>
            <hr style="margin-bottom:20px;">
           <?php 
             wp_reset_query();//Nollställ custom query
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
      

      <!-- sidebar end -->
      
      <?php get_footer(); ?>
<!-- FOOTER section start-->
