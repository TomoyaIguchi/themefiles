<?php get_header(); ?>

<div id="container">

  <?php 
    // メインヴィジュアル
    $visual = get_field('visual');
    $visual_img = wp_get_attachment_image_src($visual, 'full');
    $visual_src = $visual_img[0];

    // 背景画像
    $background = get_field('background');
    $background_img = wp_get_attachment_image_src($background, 'full');
    $background_src = $background_img[0];

    // モーダル用imgを格納する配列
    $modalImgList = array();
    $side_modalImgList = array();
    $modalNum = 0;
    $imgNum = 0;

   ?>

  <div class="mainImg" style="background-image:url(<?php echo $background_src; ?>)">
    <p class="mainImg__main"><img src="<?php echo $visual_src; ?>" height="380" width="auto" alt="<?php the_title(); ?>"></p>
  </div><!-- /.mainImg -->

  <div class="mainArea">

    <div class="basicBlock">
      <h3 class="basicBlock__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/sub_tit01.png" height="19" width="82" alt="基本情報"></h3>
      <ul class="basicBlock__table">
        <li class="item">
          <p class="item__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/point.png" height="113" width="113" alt="特長"></p>
          <ul class="item__list">

        <?php while(the_repeater_field('features')): ?>
          <?php if(get_sub_field('feature')): ?>
            <li class="sub_item"><span class="list_type"><?php the_sub_field('feature'); ?></li>
          <?php endif; ?>
        <?php endwhile; ?>

          </ul>
        </li>
        <li class="item">
          <div class="basicBlock__list_wrap">
            <dl class="basicBlock__list">
              <dt class="basicBlock__list_item">基本仕様</dt>
              <dd class="basicBlock__list_item mt-5">

                <?php // 基本仕様 ?>
                <?php the_field('basic'); ?>

              </dd>
            </dl>
          </div>

        <?php // if( get_field('variation') ): ?>
          <div class="basicBlock__list_wrap">
            <dl class="basicBlock__list">
              <dt class="basicBlock__list_item lhAdjust">仕上・カラー<br>バリエーション</dt>
              <dd class="basicBlock__list_item mt-2">
                <?php the_field('variation'); ?>
              </dd>
            </dl>
          </div>
        <?php // endif; ?>

          <div class="basicBlock__list_wrap pdAdjust02">
            <dl class="basicBlock__list">
              <dt class="basicBlock__list_item">材質</dt>
              <dd class="basicBlock__list_item mt-6">
                <?php the_field('material'); ?>
              </dd>
            </dl>
          </div>

          <div class="basicBlock__list_wrap pdAdjust">
            <dl class="basicBlock__list">
              <dt class="basicBlock__list_item">
                標準扉厚
              </dt>
              <dd class="basicBlock__list_item">
                <?php the_field('thickness'); ?>
              </dd>
            </dl>
          </div>

        </li>
      </ul>
    </div><!-- /.basicBlock -->



    <div class="lineupBlock">
      <h3 class="lineupBlock__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/sub_tit02.png" height="20" width="121" alt="ラインナップ"></h3>
  <?php // ラインナップ

  $posts = get_field('lineup');



  if( $posts ): ?>
      <ul class="lineupBlock__list">
      <?php foreach( $posts as $post): ?>
          <?php setup_postdata($post); ?>

            <?php
              // バリエーションひとつめの画像2つを取得
              $rows = get_field('variation' );
              $first_row = $rows[0]; // リピーターフィールドの最初の1つめを取得

              $lineup_img1 = $first_row['variation_img1' ];
              $lineup_img2 = $first_row['variation_img2' ];

              $lineup_img1_large = wp_get_attachment_image_src( $lineup_img1, 'lineup_large1' );
              $lineup_img1_full = wp_get_attachment_image_src( $lineup_img1, 'full' );
              $lineup_img1_large_src = $lineup_img1_large[0];
              $lineup_img1_full_src = $lineup_img1_full[0];
              $lineup_img2_large = wp_get_attachment_image_src( $lineup_img2, 'lineup_large2' );
              $lineup_img2_large_src = $lineup_img2_large[0];
              $lineup_img2_full = wp_get_attachment_image_src( $lineup_img2, 'full' );
              $lineup_img2_full_src = $lineup_img2_full[0];

              // 図面画像
              $zumen_img1 = get_field('zumen_img1');
              $zumen_img2 = get_field('zumen_img2');

              $zumen_img1_img = wp_get_attachment_image_src( $zumen_img1, 'lineup_zumen' );
              $zumen_img1_full = wp_get_attachment_image_src( $zumen_img1, 'full' );
              $zumen_img1_src = $zumen_img1_img[0];
              $zumen_img1_full_src = $zumen_img1_full[0];
              $zumen_img2_img = wp_get_attachment_image_src( $zumen_img2, 'lineup_zumen' );
              $zumen_img2_full = wp_get_attachment_image_src( $zumen_img2, 'full' );
              $zumen_img2_src = $zumen_img2_img[0];
              $zumen_img2_full_src = $zumen_img2_full[0];

              $side_zumen_left = array($zumen_img1_src,$zumen_img1_full_src);
              $side_zumen_right = array($zumen_img2_src,$zumen_img2_full_src);

              $side_modalImg = array($side_zumen_left, $side_zumen_right);

              array_push($side_modalImgList,$side_modalImg);

            ?>

        <li class="item">
          <h4 class="lineupBlock__subTit"><?php the_field('name'); ?></h4>
          <p class="lineupBlock__suply"><?php the_field('type'); ?></p>
          <ul class="lineupBlock__row">
            <li class="row__item">
              <ul class="imgBox">
              <?php if($lineup_img1): ?>
                <li class="imgBox__item left" height="306" width="304" data-num="<?php echo $imgNum ?>"><img src="<?php echo $lineup_img1_large_src; ?>" alt=""></li>
              <?php else : ?>
                <li class="imgBox__item left" height="306" width="304" data-num="<?php echo $imgNum ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/imgBno.jpg" alt=""></li>
              <?php endif; ?>
              <?php if($lineup_img2): ?>
                <li class="imgBox__item right" height="306" width="306" data-num="<?php echo $imgNum ?>"><img src="<?php echo $lineup_img2_large_src; ?>" alt=""></li>
              <?php else : ?>
                <li class="imgBox__item right" height="306" width="306" data-num="<?php echo $imgNum ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/imgBno.jpg" alt=""></li>
              <?php endif; ?>
              </ul>

            <?php if( have_rows('variation') ): ?>

              <div class="sliderBox">
                <div class="sliderBox__inner">
                  <ul class="sliderBox__list">

                <?php while( have_rows('variation') ): the_row(); 

                  // バリエーションの数を取得
                  $variation = get_field('variation');
                  $variations = count($variation);

                  $rows = get_field('variation' );
                  $first_row = $rows[0];

                  // バリエーション
                  $variation_img1 = get_sub_field('variation_img1');
                  $variation_img1_img = wp_get_attachment_image_src($variation_img1, 'lineup_thumb');
                  $variation_img1_large_img = wp_get_attachment_image_src($variation_img1, 'lineup_large1');
                  $variation_img1_full_img = wp_get_attachment_image_src($variation_img1, 'full');
                  $variation_img1_large_src = $variation_img1_large_img[0];
                  $variation_img1_src = $variation_img1_img[0];
                  $variation_img1_full_src = $variation_img1_full_img[0];
                  $variation_img2 = get_sub_field('variation_img2');
                  $variation_img2_img = wp_get_attachment_image_src($variation_img2, 'lineup_thumb');
                  $variation_img2_large_img = wp_get_attachment_image_src($variation_img2, 'lineup_large2');
                  $variation_img2_full_img = wp_get_attachment_image_src($variation_img2, 'full');
                  $variation_img2_src = $variation_img2_img[0];
                  $variation_img2_large_src = $variation_img2_large_img[0];
                  $variation_img2_full_src = $variation_img2_full_img[0];
                  $variation_type = get_sub_field('variation_type');
                  $variation_spec = get_sub_field('variation_spec');

                  $visual = array($variation_img1_src,$variation_img1_large_src,$variation_img1_full_src);
                  $zumen = array($variation_img2_src,$variation_img2_large_src,$variation_img2_full_src);

                  $modalImg = array($visual, $zumen);

                  array_push($modalImgList,$modalImg);

                  ?>
                    <li class="sliderBox__list_item op" data-thumbnail="<?php echo $imgNum; ?>">

                    <?php if( $first_row ): ?>
                    <?php endif; ?>

                    <?php if( get_sub_field('variation_img1') ): ?>
                      <p class="thumbnail"><img src="<?php echo $variation_img1_src; ?>" height="98" width="98" alt="" class="thumbnail"><span class="bg"></span></p>
                    <?php else : ?>
                      <p class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/imgSno.jpg" height="98" width="98" alt="" class="thumbnail"><span class="bg"></span></p>
                    <?php endif; ?>
                      <p class="name"><?php echo $variation_type; ?></p>
                      <p><?php echo $variation_spec; ?></p>

                    </li>

                <?php 
                  $imgNum++;
                  endwhile; 
                ?>

                  </ul>
                </div><!-- /.sliderBox__inner -->
                <div class="nextprevBox">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/arrow-left.png" height="14" width="8" alt="" class="left">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/arrow-right.png" height="14" width="8" alt="" class="right">
                </div><!-- /.nextprevBox -->
              <?php if( $variations > 5 ): // バリエーションが6個以上だったらページャードット表示 ?>
                <div class="currentBox__wrap">
                  <ul class="currentBox">
                    <!--
                    <li class="currentBox__box on"></li>
                    <li class="currentBox__box"></li>
                    <li class="currentBox__box"></li>
                    <li class="currentBox__box"></li>
                    -->
                  </ul>
                </div><!-- /.currentBox__wrap -->

              <?php endif; ?>
              </div><!-- /.sliderBox -->

            <?php endif; ?>

            </li>
            <li class="row__item">
            
            <?php if(get_field('icon')): // 機能アイコン ?>
              <?php $icon = get_field('icon'); ?>
              <div class="row__item_icon">

              <?php if ( is_array($icon) && in_array('01', $icon )) :?>
                <span class="tipWrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon01.png" height="42" width="42" alt="取替OK" class="0"></span>
              <?php endif;?>
              <?php if ( is_array($icon) && in_array('02', $icon )) :?>
                <span class="tipWrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon02.png" height="42" width="42" alt="フェイルセーフ設計" class="1"></span>
              <?php endif;?>
              <?php if ( is_array($icon) && in_array('03', $icon )) :?>
                <span class="tipWrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon03.png" height="42" width="42" alt="ワンタッチ" class="2"></span>
              <?php endif;?>
              <?php if ( is_array($icon) && in_array('04', $icon )) :?>
                <span class="tipWrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon04.png" height="42" width="42" alt="バリアフリー" class="3"></span>
              <?php endif;?>
              <?php if ( is_array($icon) && in_array('05', $icon )) :?>
                <span class="tipWrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon05.png" height="42" width="42" alt="鍵なし" class="4"></span>
              <?php endif;?>
              <?php if ( is_array($icon) && in_array('06', $icon )) :?>
                <span class="tipWrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon06.png" height="42" width="42" alt="鍵つき" class="5"></span>
              <?php endif;?>
              <?php if ( is_array($icon) && in_array('07', $icon )) :?>
                <span class="tipWrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon07.png" height="42" width="42" alt="デッド" class="6"></span>
              <?php endif;?>
              <?php if ( is_array($icon) && in_array('08', $icon )) :?>
                <span class="tipWrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon08.png" height="42" width="42" alt="両面" class="7"></span>
              <?php endif;?>
              <?php if ( is_array($icon) && in_array('09', $icon )) :?>
                <span class="tipWrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon09.png" height="42" width="42" alt="カバー" class="8"></span>
              <?php endif;?>
              </div>
            <?php endif;?>

              <ul class="row__item_list">
              <?php if(get_field('zumen_img1')): // 図面画像1 ?>
                <li class="left" data-num="<?php echo $modalNum; ?>"><img src="<?php echo $zumen_img1_src; ?>" height="129" width="129" alt=""><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/glass.gif" alt="" width="25" height="25" class="glass"></li>

              <?php else : ?>
                <li class="left" data-num="-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/imgSpecno.jpg" alt="" height="129" width="129"></li>
              <?php endif;?>
              <?php if(get_field('zumen_img2')): // 図面画像2 ?>
                <li class="right" data-num="<?php echo $modalNum; ?>"><img src="<?php echo $zumen_img2_src; ?>" alt="" height="129" width="129"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/glass.gif" alt="" width="25" height="25" class="glass"></li>

              <?php else : ?>
                <li class="right" data-num="-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/imgSpecno.jpg" alt="" height="129" width="129"></li>
              <?php endif;?>
              </ul>
              <ul class="row__item_price">
                <li><?php the_field('spec'); ?></li>
              </ul>
              <ul class="row__item_action">
                <li><a href="<?php echo home_url(); ?>/shop/detail/ability/sell/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/buy.png" height="51" width="275" alt="商品のご購入" class="op"></a></li>
                <li><a href="<?php echo home_url(); ?>/shop/detail/ability/construction/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/request_construct.png" alt="取付工事のご依頼" height="51" width="275" class="op"></a></li>
                <li><a href="<?php echo home_url(); ?>/shop/detail/ability/repair/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/request_repair.png" alt="修理・交換のご依頼" height="51" width="275" class="op"></a></li>
              </ul>
            </li>
          </ul>

        <?php if(get_field('colors')): // 仕上げ・カラーバリエーション ?>
          <div class="boxModule">
            <h4 class="boxModule__tit">仕上げ・カラーバリエーション</h4>
            <ul class="boxModule__list">
            <?php $colors = get_field('colors'); ?>
            <?php if ( is_array($colors) && in_array('01', $colors )) :?>
              <li class="sub_item colorWB02">AB(アンティックブラス)メッキ</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('02', $colors )) :?>
              <li class="sub_item colorAB01">AB(アンバー)塗装</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('03', $colors )) :?>
              <li class="sub_item colorAS">AS(シルバー)塗装</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('04', $colors )) :?>
              <li class="sub_item colorBGT">BGT(鏡面チタンゴールド)メッキ</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('05', $colors )) :?>
              <li class="sub_item colorBL">BL(ブラックレザー)塗装</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('06', $colors )) :?>
              <li class="sub_item colorBN">BN(ブラック)メッキ・ショット仕上</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('07', $colors )) :?>
              <li class="sub_item colorBWB">BWB(鏡面ホワイトブロンズ)メッキ</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('08', $colors )) :?>
              <li class="sub_item colorDG">DG(木部：ダーク・金属部：鏡面ゴールドメッキ)</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('09', $colors )) :?>
              <li class="sub_item colorDW">DW(木部：ダーク・金属部：鏡面シルバーメッキ)</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('10', $colors )) :?>
              <li class="sub_item colorFG">FG(フラッシュゴールド)塗装</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('11', $colors )) :?>
              <li class="sub_item colorFL">FL(ラベンダー)塗装</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('12', $colors )) :?>
              <li class="sub_item colorFO">FO(オニキス)塗装</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('13', $colors )) :?>
              <li class="sub_item colorFR">FR(ローズ)塗装</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('14', $colors )) :?>
              <li class="sub_item colorFS">FS(フロストシルバー)塗装</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('15', $colors )) :?>
              <li class="sub_item colorGB">GB(ジャーマンブロンズ)メッキ</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('16', $colors )) :?>
              <li class="sub_item colorGN">GN(ゴールド)メッキ・ショット仕上</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('17', $colors )) :?>
              <li class="sub_item colorGT">GT(チタンゴールド)メッキ</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('18', $colors )) :?>
              <li class="sub_item colorHG">HG(ヘアラインゴールド)メッキ</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('19', $colors )) :?>
              <li class="sub_item colorLG">LG(木部：ライト・金属部：鏡面ゴールドメッキ)</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('20', $colors )) :?>
              <li class="sub_item colorLW">LW(木部：ライト・金属部：鏡面シルバーメッキ)</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('21', $colors )) :?>
              <li class="sub_item colorMG">MG(メタリックゴールド)塗装</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('22', $colors )) :?>
              <li class="sub_item colorMS">MS(メタリックシルバー)塗装</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('23', $colors )) :?>
              <li class="sub_item colorMU">MU(メタリックアンバー)塗装</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('24', $colors )) :?>
              <li class="sub_item colorNB">NB(つや消し黒)塗装</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('25', $colors )) :?>
              <li class="sub_item colorNG">NG(木部：ナチュラル・金属部：鏡面ゴールドメッキ)</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('26', $colors )) :?>
              <li class="sub_item colorNW">NW(木部：ナチュラル・金属部：鏡面シルバーメッキ)</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('27', $colors )) :?>
              <li class="sub_item colorSB">SB(ソフトブラック)メッキ</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('28', $colors )) :?>
              <li class="sub_item colorSN">SN(シルバー)メッキ・ショット仕上</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('29', $colors )) :?>
              <li class="sub_item colorWB01">WB(ホワイトブロンズ)メッキ</li>
            <?php endif;?>
            <?php if ( is_array($colors) && in_array('30', $colors )) :?>
              <li class="sub_item colorWB01">WB(シルバー)メッキ</li>
            <?php endif;?>
            </ul>
          </div>
        <?php endif;?>

          <div class="boxModule">
            <h4 class="boxModule__tit">資料ダウンロード</h4>

            <ul class="downloadBox__list">
            <?php if( get_field('attach_pdf') ): // 資料ダウンロード ?>
              <li class="sub_item op"><a href="<?php the_field('attach_pdf'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/download01.png" height="40" width="145" alt="取扱説明書PDF"></a></li>
            <?php else : ?>
              <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/download01.png" height="40" width="145" alt="取付説明書PDF" class="off"></li>
            <?php endif; ?>
            <?php if( get_field('manual') ): // 資料ダウンロード ?>
              <li class="sub_item op"><a href="<?php the_field('manual'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/download07.png" height="40" width="145" alt="取扱説明書PDF"></a></li>
            <?php else : ?>
              <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/download07.png" height="40" width="145" alt="取扱説明書PDF" class="off"></li>
            <?php endif; ?>
            <?php if( get_field('othermanual_pdf') ): ?>
              <li class="sub_item op"><a href="<?php the_field('othermanual_pdf'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/download02.png" height="40" width="145" alt="その他説明書PDF"></a></li>
            <?php else : ?>
              <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/download02.png" height="40" width="145" alt="その他説明書PDF" class="off"></li>
            <?php endif; ?>
            <?php if( get_field('spec_pdf') ): ?>
              <li class="sub_item op"><a href="<?php the_field('spec_pdf'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/download03.png" height="40" width="145" alt="仕様図PDF"></a></li>
            <?php else : ?>
              <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/download03.png" height="40" width="145" alt="仕様図PDF" class="off"></li>
            <?php endif; ?>
            <?php if( get_field('spec_dxf') ): ?>
              <li class="sub_item op"><a href="<?php the_field('spec_dxf'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/download04.png" height="40" width="145" alt="仕様図DXF"></a></li>
            <?php else : ?>
              <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/download04.png" height="40" width="145" alt="仕様図DXF" class="off"></li>
            <?php endif; ?>
            <?php if( get_field('kirikaki_pdf') ): ?>
              <li class="sub_item op"><a href="<?php the_field('kirikaki_pdf'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/download05.png" height="40" width="145" alt="切欠図PDF"></a></li>
            <?php else : ?>
              <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/download05.png" height="40" width="145" alt="切欠図PDF" class="off"></li>
            <?php endif; ?>
            <?php if( get_field('kirikaki_dxf') ): ?>
              <li class="sub_item op"><a href="<?php the_field('kirikaki_dxf'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/download06.png" height="40" width="145" alt="切欠図DXF"></a></li>
            <?php else : ?>
              <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex_detail/download06.png" height="40" width="145" alt="切欠図DXF" class="off"></li>
            <?php endif; ?>
            </ul>

          </div><!-- /.boxModule -->

        </li>
      <?php 

        $modalNum++;
        endforeach; 
        
      ?>
      </ul>



      <?php wp_reset_postdata(); ?>
  <?php endif; ?>

  <?php

    // モーダル用imgをjsに渡す
    $modalJson = json_encode($modalImgList); 
    $side_modalJson = json_encode($side_modalImgList); 

    echo '<script type="text/javascript">'. 
           'var modalImgList = '.$modalJson.';'.
           'var side_modalImgList = '.$side_modalJson.';'.
         '</script>';

  ?>

    </div><!-- /.lineupBlock -->

    <ul class="iconBlock">
      <li class="item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon01.png" height="42" width="42" alt="取替OK" class="left">
        <p class="right">今取り付けてあるドアノブ・円筒錠・錠（ラッチ）・玄関錠から取替・交換ができる製品です。</p>
      </li>
      <li class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon02.png" height="42" width="42" alt="フェイルセーフ" class="left">
        <p class="right">閉じ込め防止機能付。異常がおこると、安全側に機能するフェイルセーフ設計を取り入れた製品です。</p>
      </li>
      <li class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon03.png" height="42" width="42" alt="ワンタッチ方式 レバーハンドル" class="left">
        <p class="right">レバーの取り付けは差し込み押さえるだけで取付OK。固定ねじ不要で、ガタつきなく、誰でも簡単に固定できます。</p>
      </li>
      <li class="item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon04.png" height="42" width="42" alt="バリアフリー" class="left">
        <p class="right">ユニバーサルデザイン仕上げの製品は、お使いいただいてこそわかる使いやすさです。</p>
      </li>
      <li class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon05.png" height="42" width="42" alt="鍵なし" class="left">
        <p class="right">キーレックス本体に鍵（キー）がつかないタイプです。キーレックスのスタンダードタイプです。</p>
      </li>
      <li class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon06.png" height="42" width="42" alt="鍵つき" class="left">
        <p class="right">キーレックス本体に鍵（キー）がついたタイプです。鍵（キー）操作時は記憶番号を押さずに解錠できます。</p>
      </li>
      <li class="item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon07.png" height="42" width="42" alt="デッド" class="left">
        <p class="right">キーレックス本体のボタン操作を不能にし、鍵（キー）操作のみで解錠できる機能です。</p>
      </li>
      <li class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon08.png" height="42" width="42" alt="両面" class="left">
        <p class="right">キーレックスで外部、内部の両面がボタン錠のタイプです。別々の番号を記憶させられるので内外ともに施解錠を制限したい場所に最適です。</p>
      </li>
      <li class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon09.png" height="42" width="42" alt="カバー" class="left">
        <p class="right">キーレックス本体に取り付けできるカバー（別売）です。屋外での使用におすすめです。</p>
      </li>
    </ul><!-- /.iconBlock -->

    <div class="pageTit">
      <h3 class="pageTit__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/tit.png" height="47" width="90" alt="サポート SUPPORT"></h3>
    </div><!-- /.pageTit -->
    <ul class="mainArea__block mainArea__block_support">
      <li class="item">
        <a href="<?php echo home_url(); ?>/support/faq/" class="linkArea">
        <div class="item__inner">
        <p class="item__thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/support_qa.png" height="162" width="162" alt=""></p>
        <p class="item__tit"><span class="list-type-arrow link">よくあるご質問</span></p>
        </div>
        </a>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/support/trouble/" class="linkArea">
        <div class="item__inner">
        <p class="item__thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/support_trouble.png" height="164" width="162" alt=""></p>
        <p class="item__tit"><span class="list-type-arrow link">困ったときは</span></p>
        </div>
        </a>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/support/info/" class="linkArea">
        <div class="item__inner">
        <p class="item__thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/support_info.png" height="162" width="162" alt=""></p>
        <p class="item__tit"><span class="list-type-arrow link">廃番品/取替商品情報</span></p>
        </div>
        </a>
      </li>
    </ul><!-- /.mainArea__block.mainArea__block_support -->

  </div><!-- /.mainArea -->


  <div class="modalBg is-none">  
    <div class="modalBox">
      <div class="imgWrap">
        <img src="" alt="" class="modalImg">
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/close.png" height="24" width="24" alt="" class="close">
    </div>
  </div><!-- /.modalBg -->
  
  <div class="modalBg__spec is-none">  
    <div class="modalBox">
      <div class="imgWrap">
        <img src="" alt="" class="modalImg">
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/close.png" height="24" width="24" alt="" class="close">
    </div>
  </div><!-- /.modalBg__spec -->
  
</div><!-- /#container -->
<?php get_footer(); ?>