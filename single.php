<?php get_header(); ?>
    <!-- HEAD section and NAVIGATION end-->
    <h1>single.PHP</h1>
              <h1><?php the_title(); ?></h1>

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
              <p>Skriven av <?php the_author()?>. den <?php the_date(); ?></p>
              </article>
               <?php
            }
          }    
     ?>
       
      </main>

      <section style="display: none">
    
    
    
    </section>
          <aside > </aside>
      
      <?php get_footer(); ?>
<!-- FOOTER section start-->
