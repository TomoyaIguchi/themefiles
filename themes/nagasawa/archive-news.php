<?php
/*
Template Name: お知らせ一覧
*/

$year = get_query_var("year");
$news_cat = get_query_var("news-cat");
$paged = get_query_var("paged") ? get_query_var("paged") : 1;

$categories = get_categories( array(
    "parent" => 0,
    "hide_empty" => 0,
    "orderby" => "id",
    "order" => "asc",
    "taxonomy" => "news-cat"
));

?>
<?php get_header(); ?>

<div id="container">

<?php
$args = array(
    'post_type' => 'news',
    // 'posts_per_page' => 1,
    'paged' => $paged
);
if($year) $args['year'] = $year;
if($news_cat) $args['news-cat'] = $news_cat;

  query_posts($args);
  if(have_posts()): ?>

  <div class="pageTit">
    <h2 class="pageTit__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/news/tit.png" height="46" width="141" alt="お知らせ一覧"></h2>
  </div>

  <div class="mainArea">
    <ul class="listBlock listBlock__yearList">
      <?php
      $year_archives = get_news_yearly_archive_array(array("type" => "yearly"));
      if(!empty($year_archives)):
        foreach($year_archives as $year_archive):
          $link_class = ($year_archive == $year) ? "on" : "link";
      ?>
      <li class="item"><a href="<?php echo home_url("/news/").$year_archive ?>" class="arrow <?php echo $link_class; ?>"><?php echo $year_archive ?>年</a></li>
      <?php endforeach; endif; ?>
    </ul>

    <div class="selectBoxArea">
      <div class="selectBoxArea__display">以下から選択して下さい</div>
      <div class="selectBoxArea__listWrap">
        <ul class="selectBoxArea__list">
          <?php foreach($categories as $category):?>
          <li class="selectBoxArea__listItem"><span class="hoverArea"><?php echo $category->name; ?></span></li>
          <?php endforeach; ?>
        </ul>
        <!-- <div class="barArea"><div class="scrollBar"></div></div> -->
      </div>
    </div>
    <select class="selectBox" name="industry">
      <?php foreach($categories as $category):?>
      <option value="<?php echo $category->name; ?>" data-id="<?php echo $category->term_id; ?>" data-slug="<?php echo $category->slug; ?>"><?php echo $category->name; ?></option>
      <?php endforeach; ?>
    </select>

    <ul class="block block__shopList">

    <?php while(have_posts()): the_post(); ?>

      <?php
        // お知らせのタクソノミーを取得
        $terms = get_the_terms($post -> ID, 'news-cat');
        foreach($terms as $term){
          $term_slug = $term -> slug;
          $term_name = $term -> name;
        }
      ?>

      <li class="block__list">
        <ul class="block__list_inner">
          <li class="block__list_item"><?php the_time('Y/m/d'); ?></li>
          <li class="block__list_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/news/<?php echo $term_slug; ?>.png" height="21" width="68" alt="<?php echo $term_name; ?>"></li>
          <li class="block__list_item"><a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a></li>
        </ul>
      </li>
    <?php endwhile; ?>

    </ul>

    <div class="article__pager">
      <?php
        if(function_exists('wp_pagenavi')) {
          wp_pagenavi();
        }
      ?>
    </div>

  </div><!-- /.mainArea -->

<?php endif; ?>
<?php wp_reset_query(); ?>
  
</div><!-- /#container -->

<?php get_footer(); ?>
