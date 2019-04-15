<?php
/*
Template Name: 資料請求
*/
?>
<?php get_header(); ?>

<div id="container" class="request">

  <div class="pageTit">
    <h2 class="pageTit__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/request/tit.png" height="47" width="187" alt="資料請求はこちら"></h2>
  </div>

  <div class="mainArea">

<?php if (have_posts()): while (have_posts()): the_post();?>

      <?php the_content(); ?>
      
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

  </div><!-- /.mainArea -->
  
</div><!-- /#container -->

<?php get_footer(); ?>
