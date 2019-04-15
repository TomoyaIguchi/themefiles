<?php get_header(); ?>

<div id="container">


  <div class="pageTit">
    <h2 class="pageTit__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/news/tit.png" height="46" width="141" alt="お知らせ一覧"></h2>
  </div>

  <div class="mainArea article">

<?php if(have_posts()): while (have_posts()): the_post(); ?>
  
  <?php
    // お知らせのタクソノミーを取得
    $terms = get_the_terms($post -> ID, 'news-cat');
    foreach($terms as $term){
      $term_slug = $term -> slug;
      $term_name = $term -> name;
    }

    // アイキャッチ画像をimgタグで取得
    $thumbnail_img = get_the_post_thumbnail($post->ID, 'full');
    // アイキャッチ画像のURLを取得
    $thumbnail = get_post_thumbnail_id();
    $thumbnail_id = wp_get_attachment_image_src($thumbnail, 'full');
    $thumbnail_url = $thumbnail_id[0];

    // 前後の記事のURLを取得
    $next_post = get_next_post();
    $prev_post = get_previous_post();
    $next_post_url = get_permalink( $next_post->ID ); 
    $prev_post_url = get_permalink( $prev_post->ID ); 
  ?>

    <div class="artcile__tit-block">
      <h3 class="article__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/news/<?php echo $term_slug; ?>.png" height="21" width="68" alt="イベント" class="category"><span><?php the_title(); ?></span></h3>
      <p class="article__date"><?php the_time('Y/m/d'); ?></p>
<!--       <div class="sns">
        <a href="https://twitter.com/share" class="twitter-share-button"></a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        <div class="fb-like"></div>
      </div> -->
    </div><!-- /.sns -->

    <div class="article__para">

      <?php if (has_excerpt()): ?>
      <div class="article__text">
        <?php the_excerpt(); ?>
      </div>
      <?php endif; ?>

      <?php if (has_post_thumbnail()): ?>
      <div class="article__img">
        <?php echo $thumbnail_img; ?>
      </div>
      <?php endif; ?>
      
      <div class="article__text">
        <?php the_content(); ?>
      </div>

    </div><!-- /.article__para -->

    <div class="article__pager">
      <ul class="article__pager_block">
      <?php if (!empty($prev_post)): ?>
        <li class="item"><a href="<?php echo $prev_post_url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/news/news_detail/arrow-left.png" height="35" width="35" alt="" class="op"></a></li>
      <?php endif; ?>
      <?php if (!empty($next_post)): ?>
        <li class="item"><a href="<?php echo $next_post_url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/news/news_detail/arrow-right.png" height="35" width="35" alt="" class="op"></a></li>';
      <?php endif; ?>
      </ul>
    </div>

  </div><!-- /.mainArea -->

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
  
</div><!-- /#container -->

<?php get_footer(); ?>
