<?php get_header(); ?>

<div id="container">

<?php
  // 現在表示しているページの投稿IDから投稿情報を取得
  $page = get_post( get_the_ID() );
  // 投稿のスラッグを取得
  $slug = $page->post_name;
?>

<?php if (have_posts()): ?>

  <div class="pageTit">
    <h2 class="pageTit__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/recruit/<?php echo $slug ?>/tit.png" alt="<?php the_title(); ?>"></h2>
  </div>

  <div class="mainArea">

  <?php if(get_field('recruit_accept')): // チェックボックスがchecked ?>

    <p class="recruite__desc">
      <?php the_field('recruit_desc'); ?>
    </p>

    <table class="table">
    <?php while (have_posts()): the_post();?>

      <?php // 要項のRepeaterのループ
        while( have_rows('recruit_summary') ): the_row(); ?>
      <tr class="table__tr">
        <td class="table__td"><?php the_sub_field('recruit_summary_title'); ?></td>
        <td class="table__td"><?php the_sub_field('recruit_summary_text'); ?></td>
      </tr>
      <?php endwhile; ?>

    <?php endwhile; ?>
    </table>

    <div class="btnArea">
      <p class="btnArea__inquiry-wrap"><a href="<?php echo home_url(); ?>/inquiry/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/recruit/new_graduates/btn_inquiry.png" height="47" width="293" alt="お問い合わせ" class="op"></a></p>
    </div>

  <?php else:  // チェックボックスがcheckedされてない ?>
    <div class="btnArea" id="notRecruit">
      <p class="btnArea__inquiry-wrap">現在、募集受付は行っておりません。</p>
    </div>
  <?php endif;  // チェックボックス ?>

  </div><!-- /.mainArea -->

<?php endif; ?>
<?php wp_reset_query(); ?>
  
</div><!-- /#container -->

<?php get_footer(); ?>
