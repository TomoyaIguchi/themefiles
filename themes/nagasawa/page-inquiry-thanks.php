<?php
/*
Template Name: お問い合わせ＞完了
*/
?>
<?php get_header(); ?>

<div id="container">

<?php
  // 現在表示しているページの投稿IDから投稿情報を取得
  $page = get_post( get_the_ID() );
  // 投稿のスラッグを取得
  $slug = $page->post_name;
?>
<?php if (have_posts()): while (have_posts()): the_post();?>

  <div class="pageTit">
    <h2 class="pageTit__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/inquiry/tit.png" alt="<?php the_title(); ?>"></h2>
  </div>

  <div class="mainArea">

    <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/request/subTit.png" height="19" width="81" alt=""></h3>
    <p class="text">
      フォームにご入力頂いた内容を送信いたしました。<br>
      ※お問合せや質問の内容等によっては、弊社からの回答を数日から約1週間ほど<br>
      お待ちいただく場合も御座います。予めご了承ください。
    </p>
    
    <div class="btnArea">
      <p class="btnArea__inquiry-wrap">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/request/btn_back_to_top.png" height="47" width="293" alt="戻る" class="op"></a>
      </p>
    </div>

  </div><!-- /.mainArea -->

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
  
</div><!-- /#container -->

<?php get_footer(); ?>
