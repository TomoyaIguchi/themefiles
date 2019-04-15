<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>

<div id="container">

  <div class="pageTit">
    <h2 class="pageTit__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/inquiry/tit.png" height="46" width="142" alt="お問い合わせ"></h2>
  </div>

  <div class="mainArea">

<?php if (have_posts()): while (have_posts()): the_post();?>

      <?php the_content(); ?>
      
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

  </div><!-- /.mainArea -->
  
</div><!-- /#container -->

<?php get_footer(); ?>
