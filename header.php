<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/icofont/icofont/icofont.min.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/css/style.css" type="text/css" />
    <?php wp_head(); ?>
    <title><?php echo $title; ?></title>
    <title><?php  bloginfo('name'); ?></title>

    <div class="scroll-top"><|></div>
  
  </head>
  <body>

    <header>
      <section class="hero">
        <div class="left">
          <img id="left-image" src="<?= get_template_directory_uri();?>/images/header.jpg" alt="" />
        </div>
        <div class="right">
          <div class="content-box">
            <div class="logo">
              <a href="<?= get_home_url(); ?>">
                <img src="<?= get_template_directory_uri();?>/images/bg.jpg" alt=""
              /></a>

            </div>

          </div>
        </div>
      </section>
    </header>
    <nav class="nav">
        <?php wp_nav_menu(array('theme_location' => 'main-nav')); ?>

      <div class="mobile-menu">
        <i class="icofont-navigation-menu"></i>
      </div>
    </nav>