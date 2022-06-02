<?php get_header(); ?>
    <!-- HEAD section and NAVIGATION end-->
    <h1>front-Page.PHP</h1>
              <h1><?php the_title(); ?></h1>

    <div class="container" >
    <!--  <main style="grid-template-columns: 1fr"> -->
    <main> 

        <?php 
  query_posts('category_name=nyheter&posts_per_page=2');

          if(have_posts()) {
            while(have_posts()) {
              the_post();
              ?>
              <article >
              <h2><?php the_title(); ?></h2>
              <?php if(has_post_thumbnail()) {the_post_thumbnail('custom-large'); } ?>
           
              <?php the_content(); ?>
              </article>
               <?php
            }
          }    
     ?>
       
    <?php 
  query_posts('category_name=boende&posts_per_page=2');

         if(have_posts()) {
            while(have_posts()) {
              the_post();

              ?>
              <article>
               
                    <br>
              <h2><?php the_title(); ?></h2>
              <?php if(has_post_thumbnail()) {the_post_thumbnail('custom-large'); } ?>
                <?php the_excerpt(); ?>

              <br>

              <a href="<?php the_permalink(); ?>"> Boka här!</a>

              </article>
               <?php
            }
          }  

     ?>
     
        <?php 
  query_posts('category_name=aktiviteter&posts_per_page=2');

          if(have_posts()) {
            while(have_posts()) {
              the_post();
              ?>
              <article >
              <h2><?php the_title(); ?></h2>
              <?php if(has_post_thumbnail()) {the_post_thumbnail('custom-large'); } ?>
           
              <?php the_content(); ?>
              </article>
               <?php
            }
          }    
     ?>
       
       
      </main>

      <!--<section style="display: none">-->
      <section >
  
    
    
    
    </section>

          <aside >
            <h3>Nyheter</h3>
            <hr style="margin-bottom:20px;">
           <?php 
             wp_reset_query();//Nollställ custom query
  query_posts('category_name=nyheter&posts_per_page=2');

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
          <h3>Boende</h3>
          <hr>
          <br>
        <?php 
        wp_reset_query();
  query_posts('category_name=boende&posts_per_page=2');
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

          <h3>Aktiviteter</h3>
          <hr>
          <br>
        <?php 
        wp_reset_query();
  query_posts('category_name=aktiviteter&posts_per_page=2');
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
