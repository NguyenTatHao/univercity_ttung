<?php

get_header();
?>
<?php
while (have_posts()):
  the_post();
?>
  <div class="page-banner">
    <?php echo get_the_post_thumbnail_url(); ?>
    <div class="page-banner__bg-image" style="background-image: url(<?php
                                                                    if (has_post_thumbnail())
                                                                      echo get_the_post_thumbnail_url();
                                                                    else
                                                                      echo get_theme_file_uri('images/ocean.jpg')
                                                                    ?>)"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php echo get_the_title() ?></h1>
      <div class="page-banner__intro">
        <p>
          <?php
          // the_excerpt(); 
          the_field('des_header');
          ?></p>
      </div>
    </div>
  </div>

  <div class="container container--narrow page-section">
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p>
        <a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('event'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Events Home</a>
        <span class="metabox__main"><?php the_title(); ?></span>
      </p>
    </div>



    <div class="generic-content">
      <?php the_post_thumbnail('medium') ?>
      <?php the_content();  ?>
    </div>
  </div>


<?php endwhile; ?>


<?php

get_footer();
