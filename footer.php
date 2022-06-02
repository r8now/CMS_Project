
      <footer>

    <section class="footer">

  <div class="social">
    <!-- import from icofonts-->
    <a href="#"><i class="icofont-facebook"></i></a>
    <a href="#"><i class="icofont-twitter"></i></a>
    <a href="#"><i class="icofont-instagram"></i></a>
    <a href="#"><i class="icofont-linkedin"></i></a>
    
  </div>
  <nav class="footer-nav" id="footer-nav">
 
           <?php wp_nav_menu(array('theme_location' => 'Footermeny')); ?>

  </nav>
  <p class="copyright">Copyright hotell @ 2022 Skapad av Hosein Moustafa</p>

    </section>
    <script src="<?= get_template_directory_uri();?>/js/app.js"></script>
    </footer>
    </div>
    <?php wp_footer(); ?>
    
  </body>
</html>