<?php get_header(); ?>
<?php
  // 現在表示しているページの投稿IDから投稿情報を取得
  $page = get_post( get_the_ID() );
  // 投稿のスラッグを取得
  $slug = $page->post_name;

?>
<div id="container">

  <div class="pageTit">
    <h2 class="pageTit__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/<?php echo $slug ?>/tit.png" alt="<?php the_title(); ?>"></h2>
  </div>

  <div class="mainArea">


<?php if (is_single(array('faq','trouble'))) : ?>

    <!-- キーレックス -->
    <div id="tab__keylex" class="tabPanel">

      <ul class="tabArea">
        <li class="item on"><a href="#tab__keylex" class="tabList noScroll"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/keylex_on.png" height="50" width="296" alt="キーレックス"></a></li>
        <li class="item"><a href="#tab__handle" class="tabList noScroll"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/handle.png" height="50" width="296" alt="レバーハンドル"></a></li>
        <li class="item"><a href="#tab__kodai" class="tabList noScroll"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/kodai.png" height="50" width="296" alt="古代"></a></li>
      </ul>

    <?php if(have_rows('support_keylex')): ?>

      <div class="contentsArea">

        <ul class="listBlock">
          <li class="item op"><a href="#replace" data-diff="20"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/faq/btn_replace.png" height="33" width="293" alt="交換・取付"></a></li>
          <li class="item op"><a href="#buy" data-diff="20"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/faq/btn_buy.png" height="33" width="293" alt="購入・価格"></a></li>
          <li class="item op"><a href="#func" data-diff="20"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/faq/btn_func.png" height="33" width="293" alt="機能"></a></li>
        </ul>
      <?php
      $support_posts = array();
      while(have_rows('support_keylex')): the_row();
        $support_cat = get_sub_field_object('support_cat');
        $support_cat_value = get_sub_field('support_cat');
        $support_cat_label = $support_cat['choices'][$support_cat_value];
        $support_posts[$support_cat_value][] = array(
          'support_cat_label' => $support_cat_label,
          'support_q' => get_sub_field("support_q"),
          'support_a' => get_sub_field('support_a'),
          'have_image' => get_sub_field('support_img') ? true : false,
          'support_img' => wp_get_attachment_image_src(get_sub_field('support_img'),"full")
        );
      endwhile;
      ?>
      <?php if(isset($support_posts['exchange'])): ?>
        <h3 class="block__list_tit" id="replace"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/faq/sub_tit01.png" height="19" width="98" alt="交換・取付"></h3>
        <ul class="block">
      <?php foreach($support_posts['exchange'] as $row):?>
          <?php get_template_part("content","support-list") ?>
      <?php endforeach; ?>
        </ul>
      <?php endif; /* isset exchange */ ?>
      <?php if(isset($support_posts['price'])): ?>
        <h3 class="block__list_tit" id="buy"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/faq/sub_tit02.png" height="19" width="98" alt="購入・価格"></h3>
        <ul class="block">
          <?php foreach($support_posts['price'] as $row):?>
            <?php get_template_part("content","support-list") ?>
          <?php endforeach; ?>
        </ul>
      <?php endif; /* isset price */ ?>
      <?php if(isset($support_posts['function'])): ?>
        <h3 class="block__list_tit" id="func"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/faq/sub_tit03.png" height="19" width="42" alt="機能"></h3>
        <ul class="block">
          <?php foreach($support_posts['function'] as $row):?>
            <?php get_template_part("content","support-list") ?>
          <?php endforeach; ?>
        </ul>
      <?php endif; /* isset function */ ?>

      </div><!-- /.contentsArea -->
    <?php endif; ?>

    </div><!-- /#tab__keylex.tabPanel -->
  
    <!-- レバーハンドル -->
    <div id="tab__handle" class="tabPanel">

      <ul class="tabArea">
        <li class="item"><a href="#tab__keylex" class="tabList noScroll"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/keylex.png" height="50" width="296" alt=""></a></li>
        <li class="item on"><a href="#tab__handle" class="tabList noScroll"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/handle_on.png" height="50" width="296" alt=""></a></li>
        <li class="item"><a href="#tab__kodai" class="tabList noScroll"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/kodai.png" height="50" width="296" alt=""></a></li>
      </ul>
    <?php if(have_rows('support_handle')): ?>

      <div class="contentsArea">

        <ul class="listBlock">
          <li class="item op"><a href="#replace_handle" data-diff="20"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/faq/btn_replace.png" height="33" width="293" alt="交換・取付"></a></li>
          <li class="item op"><a href="#buy_handle" data-diff="20"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/faq/btn_buy.png" height="33" width="293" alt="購入・価格"></a></li>
          <li class="item op"><a href="#func_handle" data-diff="20"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/faq/btn_func.png" height="33" width="293" alt="機能"></a></li>
        </ul>
        <?php
        $support_posts = array();
        while(have_rows('support_handle')): the_row();
          $support_cat = get_sub_field_object('support_cat');
          $support_cat_value = get_sub_field('support_cat');
          $support_cat_label = $support_cat['choices'][$support_cat_value];
          $support_posts[$support_cat_value][] = array(
              'support_cat_label' => $support_cat_label,
              'support_q' => get_sub_field("support_q"),
              'support_a' => get_sub_field('support_a'),
              'have_image' => get_sub_field('support_img') ? true : false,
              'support_img' => wp_get_attachment_image_src(get_sub_field('support_img'),"full")
          );
        endwhile;
        ?>
        <?php if(isset($support_posts['exchange'])): ?>
          <h3 class="block__list_tit" id="replace_handle"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/faq/sub_tit01.png" height="19" width="98" alt="交換・取付"></h3>
          <ul class="block">
            <?php $cnt = 0;?>
            <?php foreach($support_posts['exchange'] as $row):?>
              <?php get_template_part("content","support-list") ?>
              <?php $cnt++; ?>
            <?php endforeach; ?>
          </ul>
        <?php endif; /* isset exchange */ ?>
        <?php if(isset($support_posts['price'])): ?>
          <h3 class="block__list_tit" id="buy_handle"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/faq/sub_tit02.png" height="19" width="98" alt="購入・価格"></h3>
          <ul class="block">
            <?php foreach($support_posts['price'] as $row):?>
              <?php get_template_part("content","support-list") ?>
            <?php endforeach; ?>
          </ul>
        <?php endif; /* isset price */ ?>
        <?php if(isset($support_posts['function'])): ?>
          <h3 class="block__list_tit" id="func_handle"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/faq/sub_tit03.png" height="19" width="42" alt="機能"></h3>
          <ul class="block">
            <?php foreach($support_posts['function'] as $row):?>
              <?php get_template_part("content","support-list") ?>
            <?php endforeach; ?>
          </ul>
        <?php endif; /* isset function */ ?>

      </div><!-- /.contentsArea -->
    <?php endif; ?>
    </div><!-- /#tab__handle.tabPanel -->

    <!-- 古代 -->
    <div id="tab__kodai" class="tabPanel">

      <ul class="tabArea">
        <li class="item"><a href="#tab__keylex" class="tabList noScroll"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/keylex.png" height="50" width="296" alt=""></a></li>
        <li class="item"><a href="#tab__handle" class="tabList noScroll"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/handle.png" height="50" width="296" alt=""></a></li>
        <li class="item on"><a href="#tab__kodai" class="tabList noScroll"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/kodai_on.png" height="50" width="296" alt=""></a></li>
      </ul>

      <?php if(have_rows('support_kodai')): ?>

        <div class="contentsArea">

          <ul class="listBlock">
            <li class="item op"><a href="#replace_kodai" data-diff="20"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/faq/btn_replace.png" height="33" width="293" alt="交換・取付"></a></li>
            <li class="item op"><a href="#buy_kodai" data-diff="20"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/faq/btn_buy.png" height="33" width="293" alt="購入・価格"></a></li>
            <li class="item op"><a href="#func_kodai" data-diff="20"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/faq/btn_func.png" height="33" width="293" alt="機能"></a></li>
          </ul>
          <?php
          $support_posts = array();
          while(have_rows('support_kodai')): the_row();
            $support_cat = get_sub_field_object('support_cat');
            $support_cat_value = get_sub_field('support_cat');
            $support_cat_label = $support_cat['choices'][$support_cat_value];
            $support_posts[$support_cat_value][] = array(
                'support_cat_label' => $support_cat_label,
                'support_q' => get_sub_field("support_q"),
                'support_a' => get_sub_field('support_a'),
                'have_image' => get_sub_field('support_img') ? true : false,
                'support_img' => wp_get_attachment_image_src(get_sub_field('support_img'),"full")
            );
          endwhile;
          ?>
          <?php if(isset($support_posts['exchange'])): ?>
            <h3 class="block__list_tit" id="replace_kodai"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/faq/sub_tit01.png" height="19" width="98" alt="交換・取付"></h3>
            <ul class="block">
              <?php foreach($support_posts['exchange'] as $row):?>
                <?php get_template_part("content","support-list") ?>
              <?php endforeach; ?>
            </ul>
          <?php endif; /* isset exchange */ ?>
          <?php if(isset($support_posts['price'])): ?>
            <h3 class="block__list_tit" id="buy_kodai"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/faq/sub_tit02.png" height="19" width="98" alt="購入・価格"></h3>
            <ul class="block">
              <?php foreach($support_posts['price'] as $row):?>
                <?php get_template_part("content","support-list") ?>
              <?php endforeach; ?>
            </ul>
          <?php endif; /* isset price */ ?>
          <?php if(isset($support_posts['function'])): ?>
            <h3 class="block__list_tit" id="func_kodai"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/faq/sub_tit03.png" height="19" width="42" alt="機能"></h3>
            <ul class="block">
              <?php foreach($support_posts['function'] as $row):?>
                <?php get_template_part("content","support-list") ?>
              <?php endforeach; ?>
            </ul>
          <?php endif; /* isset function */ ?>

        </div><!-- /.contentsArea -->
      <?php endif; ?>

    </div><!-- /#tab__kodai.tabPanel -->

<?php else: //廃盤品・取替商品情報 ?>

    <div id="tab__keylex" class="tabPanel">

      <ul class="tabArea">
        <li class="item on"><a href="#tab__keylex" class="tabList noScroll"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/keylex_on.png" height="50" width="296" alt="キーレックス"></a></li>
        <li class="item"><a href="#tab__handle" class="tabList noScroll"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/handle.png" height="50" width="296" alt="レバーハンドル"></a></li>
        <li class="item"><a href="#tab__kodai" class="tabList noScroll"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/kodai.png" height="50" width="296" alt="古代"></a></li>
      </ul>

      <div class="contentsArea">

    <?php // キーレックス：廃盤シリーズ
      $posts = get_field('keylex_out_item_series');
      // モーダル用imgを格納する配列

      $modalContentsKeylex = array();
      $imgList_normal = array();
      $imgList_modal = array();
      $keylexID = 0;

      if( $posts ): ?>

      <?php if( have_rows('keylex_out_item_series') ): ?>
        <?php while( have_rows('keylex_out_item_series') ): the_row();

          // 廃盤シリーズ：商品画像
          $out_item_img = get_sub_field('out_item_img');
          $out_item_img_src = wp_get_attachment_image_src($out_item_img, 'full');
          $out_item_img_url = $out_item_img_src[0];

          // 廃盤シリーズ：タイプ画像
          $out_item_type_img1 = get_sub_field('out_item_type_img1');
          $out_item_type_img1_src = wp_get_attachment_image_src($out_item_type_img1, 'full');
          $out_item_type_img1_url = $out_item_type_img1_src[0];
          $out_item_type_img2 = get_sub_field('out_item_type_img2');
          $out_item_type_img2_src = wp_get_attachment_image_src($out_item_type_img2, 'full');
          $out_item_type_img2_url = $out_item_type_img2_src[0];

          $imgList_normal[] = array(
                                $out_item_img_url,
                                $out_item_type_img1_url,
                                $out_item_type_img2_url
                              );


        ?>

        <div class="blockWrap" data-id="<?php echo $keylexID; ?>">
          <h3 class="block__list_tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/info/go_out.jpg" height="23" width="68" alt="廃盤"><?php the_sub_field('out_item_series_name'); ?></h3>
          <ul class="block">
            <li class="block__list">        
              <ul class="block__list_inner">
                <li class="block__list_item"><img src="<?php echo $out_item_img_url; ?>" height="249" width="258" alt="" data-num="0"></li>
                <li class="block__list_item">
                  <ul class="block__list_subList">
                    <li class="subItem"><img src="<?php echo $out_item_type_img1_url; ?>" height="121" width="126" data-num="1"></li>
                    <li class="subItem"><img src="<?php echo $out_item_type_img2_url; ?>" height="121" width="126" data-num="2"></li>
                  </ul>
                </li>
              </ul>
              <p class="modalOpen op"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/info/btn_exchange.png" height="37" width="258" alt="取替商品はこちら"></p>
            </li>
            <li class="block__list">
              <h4 class="tit">製品概要</h4>
              <p class="text">
                <?php the_sub_field('out_item_desc'); ?>
              </p>
              <ul class="block__list_inner block__list_inner_row">
                <li class="item">
                  <h5 class="tit">商品名</h5>
                  <p class="text">
                    <?php the_sub_field('out_item_name'); ?>
                  </p>
                </li>
                <li class="item">
                  <h5 class="tit">品番</h5>
                  <p class="text">
                    <?php the_sub_field('out_item_number'); ?>
                  </p>
                </li>
              </ul>
            </li>
          </ul>

        <?php // 取替商品
          $posts = get_sub_field('out_item_exchange');
          if( $posts ):

        ?>
          <?php foreach( $posts as $post):

            // 取替商品：タイトル
            $title = get_the_title( $p->ID );
            // 取替商品：商品画像
            $exchange_item_img = get_field('exchange_item_img');
            $exchange_item_img_src = wp_get_attachment_image_src($exchange_item_img, 'full');
            $exchange_item_img_url = $exchange_item_img_src[0];
            // 取替商品：タイプ画像
            $exchange_item_type_img1 = get_field('exchange_item_type_img1');
            $exchange_item_type_img1_src = wp_get_attachment_image_src($exchange_item_type_img1, 'full');
            $exchange_item_type_img1_url = $exchange_item_type_img1_src[0];
            $exchange_item_type_img2 = get_field('exchange_item_type_img2');
            $exchange_item_type_img2_src = wp_get_attachment_image_src($exchange_item_type_img2, 'full');
            $exchange_item_type_img2_url = $exchange_item_type_img2_src[0];
            // 取替商品：URL
            $exchange_item_url = get_field('exchange_item_url');
            // 取替商品：製品概要
            $exchange_item_desc = get_field('exchange_item_desc');
            // 取替商品：商品名
            $exchange_item_name = get_field('exchange_item_name');
            // 取替商品：品番
            $exchange_item_number = get_field('exchange_item_number');

            $modalContentsKeylex[$keylexID][] = array(
                                          $title,
                                          $exchange_item_img_url,
                                          $exchange_item_type_img1_url,
                                          $exchange_item_type_img2_url,
                                          $exchange_item_url,
                                          $exchange_item_desc,
                                          $exchange_item_name,
                                          $exchange_item_number
                                        );


            $imgList_modal[] = array(
                                  $exchange_item_img_url,
                                  $exchange_item_type_img1_url,
                                  $exchange_item_type_img2_url,
                                );

           ?>

          <?php endforeach; 
          ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        </div><!-- /.blockWrap -->

        <?php 
        $keylexID++;
        endwhile; 
        ?>
      <?php endif; ?>

    <?php endif; ?>

      </div><!-- /.contentsArea -->

    </div><!-- /#tab__keylex.tabPanel -->
  
    <div id="tab__handle" class="tabPanel">

      <ul class="tabArea">
        <li class="item"><a href="#tab__keylex" class="tabList noScroll"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/keylex.png" height="50" width="296" alt=""></a></li>
        <li class="item on"><a href="#tab__handle" class="tabList noScroll"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/handle_on.png" height="50" width="296" alt=""></a></li>
        <li class="item"><a href="#tab__kodai" class="tabList noScroll"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/kodai.png" height="50" width="296" alt=""></a></li>
      </ul>

      <div class="contentsArea">

    <?php // レバーハンドル：廃盤シリーズ
      $posts = get_field('handle_out_item_series');

      $modalContentsHandle = array();
      // $modalImgListKeylex_spec = array();
      $handleID = 0;

      if( $posts ): ?>

      <?php if( have_rows('handle_out_item_series') ): ?>
        <?php while( have_rows('handle_out_item_series') ): the_row();

          // 廃盤シリーズ：商品画像
          $out_item_img = get_sub_field('out_item_img');
          $out_item_img_src = wp_get_attachment_image_src($out_item_img, 'full');
          $out_item_img_url = $out_item_img_src[0];

          // 廃盤シリーズ：タイプ画像
          $out_item_type_img1 = get_sub_field('out_item_type_img1');
          $out_item_type_img1_src = wp_get_attachment_image_src($out_item_type_img1, 'full');
          $out_item_type_img1_url = $out_item_type_img1_src[0];
          $out_item_type_img2 = get_sub_field('out_item_type_img2');
          $out_item_type_img2_src = wp_get_attachment_image_src($out_item_type_img2, 'full');
          $out_item_type_img2_url = $out_item_type_img2_src[0];


          $imgList_normal[] = array(
                                $out_item_img_url,
                                $out_item_type_img1_url,
                                $out_item_type_img2_url
                              );

          $modalContentsHandle[$handleID] = array();

        ?>

        <div class="blockWrap" data-id="<?php echo $handleID; ?>">
          <h3 class="block__list_tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/info/go_out.jpg" height="23" width="68" alt="廃盤"><?php the_sub_field('out_item_series_name'); ?></h3>
          <ul class="block">
            <li class="block__list">        
              <ul class="block__list_inner">
                <li class="block__list_item"><img src="<?php echo $out_item_img_url; ?>" height="249" width="258" alt="" data-num="0"></li>
                <li class="block__list_item">
                  <ul class="block__list_subList">
                    <li class="subItem"><img src="<?php echo $out_item_type_img1_url; ?>" height="121" width="126" data-num="1"></li>
                    <li class="subItem"><img src="<?php echo $out_item_type_img2_url; ?>" height="121" width="126" data-num="2"></li>
                  </ul>
                </li>
              </ul>
              <p class="modalOpen op"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/info/btn_exchange.png" height="37" width="258" alt="取替商品はこちら"></p>
            </li>
            <li class="block__list">
              <h4 class="tit">製品概要</h4>
              <p class="text">
                <?php the_sub_field('out_item_desc'); ?>
              </p>
              <ul class="block__list_inner block__list_inner_row">
                <li class="item">
                  <h5 class="tit">商品名</h5>
                  <p class="text">
                    <?php the_sub_field('out_item_name'); ?>
                  </p>
                </li>
                <li class="item">
                  <h5 class="tit">品番</h5>
                  <p class="text">
                    <?php the_sub_field('out_item_number'); ?>
                  </p>
                </li>
              </ul>
            </li>
          </ul>

        <?php // 取替商品
          $posts = get_sub_field('out_item_exchange');
          if( $posts ):
        ?>
          <?php foreach( $posts as $post):

            // 取替商品：タイトル
            $title = get_the_title( $p->ID );
            // 取替商品：商品画像
            $exchange_item_img = get_field('exchange_item_img');
            $exchange_item_img_src = wp_get_attachment_image_src($exchange_item_img, 'full');
            $exchange_item_img_url = $exchange_item_img_src[0];
            // 取替商品：タイプ画像
            $exchange_item_type_img1 = get_field('exchange_item_type_img1');
            $exchange_item_type_img1_src = wp_get_attachment_image_src($exchange_item_type_img1, 'full');
            $exchange_item_type_img1_url = $exchange_item_type_img1_src[0];
            $exchange_item_type_img2 = get_field('exchange_item_type_img2');
            $exchange_item_type_img2_src = wp_get_attachment_image_src($exchange_item_type_img2, 'full');
            $exchange_item_type_img2_url = $exchange_item_type_img2_src[0];
            // 取替商品：URL
            $exchange_item_url = get_field('exchange_item_url');
            // 取替商品：製品概要
            $exchange_item_desc = get_field('exchange_item_desc');
            // 取替商品：商品名
            $exchange_item_name = get_field('exchange_item_name');
            // 取替商品：品番
            $exchange_item_number = get_field('exchange_item_number');

            $modalContentsHandle[$handleID][] = array(
                                          $title,
                                          $exchange_item_img_url,
                                          $exchange_item_type_img1_url,
                                          $exchange_item_type_img2_url,
                                          $exchange_item_url,
                                          $exchange_item_desc,
                                          $exchange_item_name,
                                          $exchange_item_number
                                        );

            $imgList_modal[] = array(
                                  $exchange_item_img_url,
                                  $exchange_item_type_img1_url,
                                  $exchange_item_type_img2_url,
                                );

           ?>

          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        </div><!-- /.blockWrap -->

        <?php 
        $handleID++;
        endwhile; 
        ?>
      <?php endif; ?>

    <?php endif; ?>

      </div><!-- /.contentsArea -->

    </div><!-- /#tab__handle.tabPanel -->
  
    <div id="tab__kodai" class="tabPanel">

      <ul class="tabArea">
        <li class="item"><a href="#tab__keylex" class="tabList noScroll"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/keylex.png" height="50" width="296" alt=""></a></li>
        <li class="item"><a href="#tab__handle" class="tabList noScroll"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/handle.png" height="50" width="296" alt=""></a></li>
        <li class="item on"><a href="#tab__kodai" class="tabList noScroll"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/kodai_on.png" height="50" width="296" alt=""></a></li>
      </ul>

      <div class="contentsArea">

    <?php // 古代・古代NEO：廃盤シリーズ
      $posts = get_field('kodai_out_item_series');

      $modalContentsKodai = array();
      // $modalImgListKeylex_spec = array();
      $kodaiID = 0;

      if( $posts ): ?>

      <?php if( have_rows('kodai_out_item_series') ): ?>
        <?php while( have_rows('kodai_out_item_series') ): the_row();

          // 廃盤シリーズ：商品画像
          $out_item_img = get_sub_field('out_item_img');
          $out_item_img_src = wp_get_attachment_image_src($out_item_img, 'full');
          $out_item_img_url = $out_item_img_src[0];

          // 廃盤シリーズ：タイプ画像
          $out_item_type_img1 = get_sub_field('out_item_type_img1');
          $out_item_type_img1_src = wp_get_attachment_image_src($out_item_type_img1, 'full');
          $out_item_type_img1_url = $out_item_type_img1_src[0];
          $out_item_type_img2 = get_sub_field('out_item_type_img2');
          $out_item_type_img2_src = wp_get_attachment_image_src($out_item_type_img2, 'full');
          $out_item_type_img2_url = $out_item_type_img2_src[0];


          $imgList_normal[] = array(
                                $out_item_img_url,
                                $out_item_type_img1_url,
                                $out_item_type_img2_url
                              );
          
          $modalContentsKodai[$kodaiID] = array();

        ?>

        <div class="blockWrap" data-id="<?php echo $kodaiID; ?>">
          <h3 class="block__list_tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/info/go_out.jpg" height="23" width="68" alt="廃盤"><?php the_sub_field('out_item_series_name'); ?></h3>
          <ul class="block">
            <li class="block__list">        
              <ul class="block__list_inner">
                <li class="block__list_item"><img src="<?php echo $out_item_img_url; ?>" height="249" width="258" alt="" data-num="0"></li>
                <li class="block__list_item">
                  <ul class="block__list_subList">
                    <li class="subItem"><img src="<?php echo $out_item_type_img1_url; ?>" height="121" width="126" data-num="1"></li>
                    <li class="subItem"><img src="<?php echo $out_item_type_img2_url; ?>" height="121" width="126" data-num="2"></li>
                  </ul>
                </li>
              </ul>
              <p class="modalOpen op"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/info/btn_exchange.png" height="37" width="258" alt="取替商品はこちら"></p>
            </li>
            <li class="block__list">
              <h4 class="tit">製品概要</h4>
              <p class="text">
                <?php the_sub_field('out_item_desc'); ?>
              </p>
              <ul class="block__list_inner block__list_inner_row">
                <li class="item">
                  <h5 class="tit">商品名</h5>
                  <p class="text">
                    <?php the_sub_field('out_item_name'); ?>
                  </p>
                </li>
                <li class="item">
                  <h5 class="tit">品番</h5>
                  <p class="text">
                    <?php the_sub_field('out_item_number'); ?>
                  </p>
                </li>
              </ul>
            </li>
          </ul>

        <?php // 取替商品
          $posts = get_sub_field('out_item_exchange');
          if( $posts ):
        ?>
          <?php foreach( $posts as $post):

            // 取替商品：タイトル
            $title = get_the_title( $p->ID );
            // 取替商品：商品画像
            $exchange_item_img = get_field('exchange_item_img');
            $exchange_item_img_src = wp_get_attachment_image_src($exchange_item_img, 'full');
            $exchange_item_img_url = $exchange_item_img_src[0];
            // 取替商品：タイプ画像
            $exchange_item_type_img1 = get_field('exchange_item_type_img1');
            $exchange_item_type_img1_src = wp_get_attachment_image_src($exchange_item_type_img1, 'full');
            $exchange_item_type_img1_url = $exchange_item_type_img1_src[0];
            $exchange_item_type_img2 = get_field('exchange_item_type_img2');
            $exchange_item_type_img2_src = wp_get_attachment_image_src($exchange_item_type_img2, 'full');
            $exchange_item_type_img2_url = $exchange_item_type_img2_src[0];
            // 取替商品：URL
            $exchange_item_url = get_field('exchange_item_url');
            // 取替商品：製品概要
            $exchange_item_desc = get_field('exchange_item_desc');
            // 取替商品：商品名
            $exchange_item_name = get_field('exchange_item_name');
            // 取替商品：品番
            $exchange_item_number = get_field('exchange_item_number');

            $modalContentsKodai[$kodaiID][] = array(
                                          $title,
                                          $exchange_item_img_url,
                                          $exchange_item_type_img1_url,
                                          $exchange_item_type_img2_url,
                                          $exchange_item_url,
                                          $exchange_item_desc,
                                          $exchange_item_name,
                                          $exchange_item_number
                                        );


            $imgList_modal[] = array(
                                  $exchange_item_img_url,
                                  $exchange_item_type_img1_url,
                                  $exchange_item_type_img2_url,
                                );

           ?>

          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        </div><!-- /.blockWrap -->

        <?php 
        $kodaiID++;
        endwhile; 
        ?>
      <?php endif; ?>

    <?php endif; ?>

      </div><!-- /.contentsArea -->

    </div><!-- /#tab__kodai.tabPanel -->

    <!-- //
    //
    // keylex用のmodal
    //
    // -->

    <div class="modalKeylex modalProduct">

    <!-- ループ -->
    <?php
      // include_once("dBug.php");
      // new dBug($modalContentsKeylex);
      // var_dump($modalContentsKeylex);
      for ($i=0; $i < count($modalContentsKeylex); $i++) { 
    ?>

      <div class="modalBg modalBg<?php echo $i; ?> is-none">  
        <div class="modalWrap">

          <p class="close"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/info/close.png" height="24" width="24" alt=""></p>

          <?php for ($j=0; $j < count($modalContentsKeylex[$i]); $j++) { ?>

          <div class="blockWrap modal">
            <h3 class="block__list_tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/info/budge_exchange.png" height="23" width="68" alt="取替"><?php echo $modalContentsKeylex[$i][$j][0]; ?></h3>
            <ul class="block">
              <li class="block__list">        
                <ul class="block__list_inner">
                  <li class="block__list_item"><img src="<?php echo $modalContentsKeylex[$i][$j][1]; ?>" height="249" width="258" alt="" data-num="0"></li>
                  <li class="block__list_item">
                    <ul class="block__list_subList">
                      <li class="subItem"><?php if ($modalContentsKeylex[$i][$j][2]) echo '<img src="' . $modalContentsKeylex[$i][$j][2] . '" height="121" width="126" alt="自動施錠タイプ" data-num="1">'; ?></li>
                      <li class="subItem"><?php if ($modalContentsKeylex[$i][$j][3]) echo '<img src="' . $modalContentsKeylex[$i][$j][3] . '" height="121" width="126" alt="ケースロックタイプ" data-num="2">'; ?></li>
                    </ul>
                  </li>
                </ul>
                <p><a href="<?php echo $modalContentsKeylex[$i][$j][4]; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/info/btn_detail.png" height="37" width="258" alt="製品詳細はこちら" class='op'></a></p>
              </li>
              <li class="block__list">
                <h4 class="tit">製品概要</h4>
                <p class="text">
                  <?php echo $modalContentsKeylex[$i][$j][5]; ?>
                </p>
                <ul class="block__list_inner block__list_inner_row">
                  <li class="item">
                    <h5 class="tit">商品名</h5>
                    <p class="text">
                      <?php echo $modalContentsKeylex[$i][$j][6]; ?>
                    </p>
                  </li>
                  <li class="item">
                    <h5 class="tit">品番</h5>
                    <p class="text">
                      <?php echo $modalContentsKeylex[$i][$j][7]; ?>
                    </p>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="listBlock actionList">
              <li class="item op"><a href="<?php echo home_url(); ?>/shop/detail/ability/sell/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/actionList01.png" height="51" width="293" alt="商品のご購入"></a></li>
              <li class="item op"><a href="<?php echo home_url(); ?>/shop/detail/ability/construction/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/actionList02.png" height="51" width="293" alt="取付工事のご依頼"></a></li>
              <li class="item op"><a href="<?php echo home_url(); ?>/shop/detail/ability/repair/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/actionList03.png" height="51" width="293" alt="修理・交換のご依頼"></a></li>
            </ul>
          </div>

          <?php } ?>

        </div><!-- /.modalWrap -->
      </div><!-- /.modalBg -->

      <?php } ?>

    </div>

    <!-- //
    //
    //  handle用のmodal
    //
    // -->

    <div class="modalHandle modalProduct">

    <!-- ループ -->
    <?php
      // include_once("dBug.php");
      // new dBug($modalContentsHandle);
      // var_dump($modalContentsKeylex);
      for ($i=0; $i < count($modalContentsHandle); $i++) { 
    ?>

      <div class="modalBg modalBg<?php echo $i; ?> is-none">  
        <div class="modalWrap">

          <p class="close"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/info/close.png" height="24" width="24" alt=""></p>

          <?php for ($j=0; $j < count($modalContentsHandle[$i]); $j++) { ?>

          <div class="blockWrap modal">
            <h3 class="block__list_tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/info/budge_exchange.png" height="23" width="68" alt="取替"><?php echo $modalContentsHandle[$i][$j][0]; ?></h3>
            <ul class="block">
              <li class="block__list">        
                <ul class="block__list_inner">
                  <li class="block__list_item"><img src="<?php echo $modalContentsHandle[$i][$j][1]; ?>" height="249" width="258" alt="" data-num="0"></li>
                  <li class="block__list_item">
                    <ul class="block__list_subList">
                      <li class="subItem"><?php if ($modalContentsHandle[$i][$j][2]) echo '<img src="' . $modalContentsHandle[$i][$j][2] . '" height="121" width="126" alt="自動施錠タイプ" data-num="1">'; ?></li>
                      <li class="subItem"><?php if ($modalContentsHandle[$i][$j][3]) echo '<img src="' . $modalContentsHandle[$i][$j][3] . '" height="121" width="126" alt="ケースロックタイプ" data-num="2">'; ?></li>
                    </ul>
                  </li>
                </ul>
                <p><a href="<?php echo $modalContentsHandle[$i][$j][4]; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/info/btn_detail.png" height="37" width="258" alt="製品詳細はこちら" class='op'></a></p>
              </li>
              <li class="block__list">
                <h4 class="tit">製品概要</h4>
                <p class="text">
                  <?php echo $modalContentsHandle[$i][$j][5]; ?>
                </p>
                <ul class="block__list_inner block__list_inner_row">
                  <li class="item">
                    <h5 class="tit">商品名</h5>
                    <p class="text">
                      <?php echo $modalContentsHandle[$i][$j][6]; ?>
                    </p>
                  </li>
                  <li class="item">
                    <h5 class="tit">品番</h5>
                    <p class="text">
                      <?php echo $modalContentsHandle[$i][$j][7]; ?>
                    </p>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="listBlock actionList">
              <li class="item op"><a href="<?php echo home_url(); ?>/shop/detail/ability/sell/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/actionList01.png" height="51" width="293" alt="商品のご購入"></a></li>
              <li class="item op"><a href="<?php echo home_url(); ?>/shop/detail/ability/construction/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/actionList02.png" height="51" width="293" alt="取付工事のご依頼"></a></li>
              <li class="item op"><a href="<?php echo home_url(); ?>/shop/detail/ability/repair/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/actionList03.png" height="51" width="293" alt="修理・交換のご依頼"></a></li>
            </ul>
          </div>

          <?php } ?>

        </div><!-- /.modalWrap -->
      </div><!-- /.modalBg -->

      <?php } ?>

    </div>
    
    <!-- //
    //
    //  handle用のmodal
    //
    // -->

    <div class="modalKodai modalProduct">

    <!-- ループ -->
    <?php
      // include_once("dBug.php");
      // new dBug($modalContentsKodai);
      // var_dump($modalContentsKeylex);
      for ($i=0; $i < count($modalContentsKodai); $i++) { 
    ?>

      <div class="modalBg modalBg<?php echo $i; ?> is-none">  
        <div class="modalWrap">

          <p class="close"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/info/close.png" height="24" width="24" alt=""></p>

          <?php for ($j=0; $j < count($modalContentsKodai[$i]); $j++) { ?>

          <div class="blockWrap modal">
            <h3 class="block__list_tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/info/budge_exchange.png" height="23" width="68" alt="取替"><?php echo $modalContentsKodai[$i][$j][0]; ?></h3>
            <ul class="block">
              <li class="block__list">        
                <ul class="block__list_inner">
                  <li class="block__list_item"><img src="<?php echo $modalContentsKodai[$i][$j][1]; ?>" height="249" width="258" alt="" data-num="0"></li>
                  <li class="block__list_item">
                    <ul class="block__list_subList">
                      <li class="subItem"><?php if ($modalContentsKodai[$i][$j][2]) echo '<img src="' . $modalContentsKodai[$i][$j][2] . '" height="121" width="126" alt="自動施錠タイプ" data-num="1">'; ?></li>
                      <li class="subItem"><?php if ($modalContentsKodai[$i][$j][3]) echo '<img src="' . $modalContentsKodai[$i][$j][3] . '" height="121" width="126" alt="ケースロックタイプ" data-num="2">'; ?></li>
                    </ul>
                  </li>
                </ul>
                <p><a href="<?php echo $modalContentsKodai[$i][$j][4]; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/info/btn_detail.png" height="37" width="258" alt="製品詳細はこちら" class='op'></a></p>
              </li>
              <li class="block__list">
                <h4 class="tit">製品概要</h4>
                <p class="text">
                  <?php echo $modalContentsKodai[$i][$j][5]; ?>
                </p>
                <ul class="block__list_inner block__list_inner_row">
                  <li class="item">
                    <h5 class="tit">商品名</h5>
                    <p class="text">
                      <?php echo $modalContentsKodai[$i][$j][6]; ?>
                    </p>
                  </li>
                  <li class="item">
                    <h5 class="tit">品番</h5>
                    <p class="text">
                      <?php echo $modalContentsKodai[$i][$j][7]; ?>
                    </p>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="listBlock actionList">
              <li class="item op"><a href="<?php echo home_url(); ?>/shop/detail/ability/sell/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/actionList01.png" height="51" width="293" alt="商品のご購入"></a></li>
              <li class="item op"><a href="<?php echo home_url(); ?>/shop/detail/ability/construction/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/actionList02.png" height="51" width="293" alt="取付工事のご依頼"></a></li>
              <li class="item op"><a href="<?php echo home_url(); ?>/shop/detail/ability/repair/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/actionList03.png" height="51" width="293" alt="修理・交換のご依頼"></a></li>
            </ul>
          </div>

          <?php } ?>

        </div><!-- /.modalWrap -->
      </div><!-- /.modalBg -->

      <?php } ?>

    </div>
    
  
  </div>

  </div>

  <?php
    // モーダル用imgをjsに渡す
    $modalJson = json_encode($imgList_normal);
    $modalJsonModal = json_encode($imgList_modal);

    echo '<script type="text/javascript">'. 
           'var imgList_normal = '.$modalJson.';'.
           'var imgList_modal = '.$modalJsonModal.';'.
         '</script>';

  ?>

  <div class="modalBgSupport is-none">  
    <div class="modalBox">
      <div class="imgWrap">
        <img src="" alt="" class="modalImg">
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/close.png" height="24" width="24" alt="" class="close">
    </div>
  </div><!-- /.modalBg -->
  
  <div class="modalBgSupport__modal is-none">  
    <div class="modalBox">
      <div class="imgWrap">
        <img src="" alt="" class="modalImg">
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/close.png" height="24" width="24" alt="" class="close">
    </div>
  </div><!-- /.modalBg__spec -->

<?php endif; ?>


  </div><!-- /.mainArea -->
  
</div><!-- /#container -->

<?php get_footer(); ?>
