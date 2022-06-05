<?php get_header(); ?>
    <!-- HEAD section and NAVIGATION end-->
    <!--  get the category name-->
    <?php 
      $category = get_the_category();
 ?>
    <h1><?php echo $category[0]->cat_name; ?></h1>



    <div class="container" >
    <main > 

        <?php 
         if(have_posts()) {
            while(have_posts()) {
              the_post();

              ?>
              <article>
               
                    <br>
              <H2><?php the_title(); ?></H2>
              <?php if(has_post_thumbnail()) {the_post_thumbnail('custom-large'); } ?>
                <?php the_excerpt(); ?>

              <br>

              <a href="<?php the_permalink(); ?>"> Boka här!</a>

              </article>
               <?php
            }
          }  

     ?>


      
       
      </main>

      <section style="display: none">SECTION -widget AREA</section>
    
      <!-- sidebar start -->

     
          <aside >
            <h3>Boende</h3>
            <hr style="margin-bottom:20px;">
           <?php 
             wp_reset_query();//Nollställ custom query
             // put a variable in the query
              query_posts('category_name='.$category[0]->name.'&posts_per_page=6');

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
