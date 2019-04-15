<?php get_header(); ?>

<div id="container">
  <h2 class="mainImg">

    <div id="js-slide" class="main-slide">
      <div class="slide-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/top/img_slide_01.jpg" alt=""></div>
      <div class="slide-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/top/img_slide_02.jpg" alt=""></div>
      <div class="slide-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/top/img_slide_03.jpg" alt=""></div>
      <div class="slide-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/top/img_slide_04.jpg" alt=""></div>
    </div>

  </h2>

  <div class="mainArea">

    <div class="block">
      <div class="block__bar">
        <div class="block__bar_left"></div>
        <div class="block__bar_middle"></div>
      </div>
      
      <div class="block__news">
        <div class="block__news_header">
          <div class="block__news_title"><a href="<?php echo home_url(); ?>/news/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/top/news.png" height="93" width="156" alt="お知らせ" class="op"></a></div>
        </div>
        <ul class="block__news_list">
          <?php // トップお知らせ
            query_posts(array(
              'post_type' =>'news',
              'posts_per_page'=> 3
            ));
            if(have_posts()): while(have_posts()): the_post(); ?>
            
            <?php
              $post_title;
              $max_len = 60;

              if(mb_strlen($post->post_title, 'UTF-8')>$max_len){
                $post_title = mb_substr($post->post_title, 0, $max_len, 'UTF-8').'…';
              }else{
                $post_title = $post->post_title;
              }
            ?>

            <li class="item news_title"><a href="<?php the_permalink(); ?>"><span class="date"><?php the_time('Y/m/d'); ?></span><span class="title"><?php echo $post_title; ?></span></a></li>
            
          <?php endwhile; endif; ?>
          <?php wp_reset_query(); ?>
          </ul>
      </div>

      <ul class="block__products" id="block__products">
        <li class="item"><a href="<?php echo home_url(); ?>/products/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/top/products.png" height="250" width="156" alt="" class="op"></a></li>
        <li class="item"><a href="<?php echo home_url(); ?>/products/keylex/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/top/keylex.jpg" height="250" width="254" alt="キーレックス KEYLEX" class="op"></a></li>
        <li class="item"><a href="<?php echo home_url(); ?>/products/handle/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/top/handle.jpg" height="250" width="253" alt="レバーハンドル LEVER HANDLE" class="op"></a></li>
        <li class="item"><a href="<?php echo home_url(); ?>/products/kodai/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/top/kodai.jpg" height="250" width="253" alt="古代・古代NEO KODAI・KODAINEO" class="op"></a></li>
      </ul>
    </div>

    <div class="pageTit">
      <h3 class="pageTit__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/tit.png" height="47" width="90" alt="サポート SUPPORT"></h3>
    </div>
    <ul class="mainArea__block mainArea__block_support">
      <li class="item">
        <a href="<?php echo home_url(); ?>/support/faq/" class="linkArea">
          <div class="item__inner">
          <p class="item__thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/support_qa.png" height="162" width="162" alt="よくあるご質問"></p>
          <p class="item__tit"><span class="list-type-arrow link">よくあるご質問</span></p>
          </div>
        </a>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/support/trouble/" class="linkArea">
          <div class="item__inner">
          <p class="item__thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/support_trouble.png" height="164" width="162" alt="困ったときは"></p>
          <p class="item__tit"><span class="list-type-arrow link">困ったときは</span></p>
          </div>
        </a>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/support/info/" class="linkArea">
          <div class="item__inner">
          <p class="item__thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/support_info.png" height="162" width="162" alt="廃番品・取替商品情報"></p>
          <p class="item__tit"><span class="list-type-arrow link">廃番品/取替商品情報</span></p>
          </div>
        </a>
      </li>
    </ul>

  </div>
  
</div>

<?php get_footer(); ?>