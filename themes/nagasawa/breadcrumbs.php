  <div class="header__breadcrumb">
   <ul class="header__breadcrumb_wrap l-header">

     <li class="item"><a href="<?php echo home_url(); ?>" class="link">トップ</a><span class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/bread-arrow.png" height="9" width="5" alt=""></span></li>

   <?php if (is_singular('products')): ?>

    <?php if (have_posts()): while (have_posts()): the_post();
      // カテゴリー（タクソノミー取得）
      $terms = get_the_terms( $post->ID, 'products-cat' );
        $terms = wp_get_object_terms($post->ID,'products-cat');
        foreach($terms as $term){
        }
      ?>
    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>
     <li class="item"><a href="<?php echo home_url(); ?>/products/" class="link">製品一覧</a><span class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/bread-arrow.png" height="9" width="5" alt=""></span></li>
     <li class="item"><a href="<?php echo home_url(); ?>/products/<?php echo $term->slug; ?>/" class="link"><?php echo $term->name; ?></a><span class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/bread-arrow.png" height="9" width="5" alt=""></span></li>
     <li class="item"><?php the_title(); ?></li>
    <?php elseif (is_page(array('keylex','handle','kodai'))): ?>
     <li class="item"><a href="<?php echo home_url(); ?>/products/" class="link">製品一覧</a><span class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/bread-arrow.png" height="9" width="5" alt=""></span></li>
     <li class="item"><?php the_title(); ?></li>

   <?php elseif (is_singular('recruit')): ?>
     <li class="item">採用情報<span class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/bread-arrow.png" height="9" width="5" alt=""></span></li>
     <li class="item"><?php the_title(); ?></li>

   <?php elseif (is_post_type_archive('news')): ?>
     <li class="item">お知らせ一覧</li>
   <?php elseif (is_singular('news')): ?>
     <li class="item"><a href="<?php echo home_url(); ?>/news/">お知らせ一覧</a><span class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/bread-arrow.png" height="9" width="5" alt=""></span></li>
     <li class="item"><?php the_title(); ?></li>

   <?php elseif (is_singular('support')): ?>
     <li class="item"><a href="<?php echo home_url(); ?>/support/" class="link">サポート</a><span class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/bread-arrow.png" height="9" width="5" alt=""></span></li>
     <li class="item"><?php the_title(); ?></li>

   <?php elseif (is_page('case_study')): ?>
     <li class="item">導入事例</li>

   <?php elseif (is_singular('case_study')): ?>
     <li class="item"><a href="/case_study/" class="link">導入事例</a><span class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/bread-arrow.png" height="9" width="5" alt=""></span></li>
     <li class="item"><?php the_title(); ?></li>

    <?php elseif ((is_parent_slug() == 'company') && is_page(array('info','business','csr'))) : ?>
     <li class="item">会社概要<span class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/bread-arrow.png" height="9" width="5" alt=""></span></li>
     <li class="item"><?php the_title(); ?></li>

  <?php elseif ((is_parent_slug() == 'shop') && is_page('detail')) : ?>
     <li class="item"><a href="<?php echo home_url(); ?>/shop/" class="link">KSS加盟店・取扱店情報</a><span class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/bread-arrow.png" height="9" width="5" alt=""></span></li>
     <li class="item"><?php the_title(); ?></li>

  <?php elseif ((is_parent_slug() == 'inquiry') && is_page('thanks')) : ?>
     <li class="item">お問い合わせ<span class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/bread-arrow.png" height="9" width="5" alt=""></span></li>
     <li class="item"><?php the_title(); ?></li>

  <?php elseif ((is_parent_slug() == 'document_request') && is_page('thanks')) : ?>
     <li class="item">資料請求はこちら<span class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/bread-arrow.png" height="9" width="5" alt=""></span></li>
     <li class="item"><?php the_title(); ?></li>

  <?php elseif (is_404()) : ?>
     <li class="item">404</li>

   <?php elseif (is_page()): ?>
     <li class="item"><?php the_title(); ?></li>
   <?php endif; ?>

   </ul>
  </div>


