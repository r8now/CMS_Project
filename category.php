<?php get_header(); ?>
    <!-- HEAD section and NAVIGATION end-->
    <!--  get the category name-->
    <?php 
      $category = get_the_category();
    ?>
    <H1><?php echo $category[0]->cat_name; ?></H1>





    <div class="container" >
    <!--  <main style="grid-template-columns: 1fr"> -->
    <main>

        <?php 
          if(have_posts()) {
            while(have_posts()) {
              the_post();
        ?>
              <article>
               
                    <br>
              <h2><?php the_title(); ?></h2>
              <?php if(has_post_thumbnail()) {the_post_thumbnail('custom-large'); } ?>

              <?php the_content(); ?>
            
               <i><?=the_time('Y-m-d \k\l H:i'); ?></i>
                <i><?=the_author(); ?></i>
              <br>

              <a href="<?php the_permalink(); ?>"> Läs mer</a>

              </article>
               <?php
            }
          }    
               ?>
       
      </main>

      <section style="display: none">SECTION -widget AREA</section>
    
      <!-- sidebar start -->

     
          <aside >
            <H3>Nyheter</H3>
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
