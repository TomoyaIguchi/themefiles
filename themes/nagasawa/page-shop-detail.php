<?php
/*
Template Name: KSS加盟店・取扱店情報＞詳細
*/

// カテゴリタイプとterm_idを取る
$shop_cat_id = null;
$shop_pref_id = null;
$shop_ability = null;

// jsに渡すよう変数
$shopUrl = null;

if(get_query_var('shop-cat')) {
  $shop_cat_id = intval(get_query_var('shop-cat'));
  $shopUrl = $shop_cat_id;
}
if(get_query_var('shop-pref')) {
  $shop_pref_id = get_query_var('shop-sub-pref') ? intval(get_query_var('shop-sub-pref')) : intval(get_query_var('shop-pref'));
}
if(get_query_var('shop_ability')) {
  $shop_ability = get_query_var('shop_ability');
  $shopUrl = 'ability/' . $shop_ability;
}

if(is_null($shop_cat_id) && is_null($shop_pref_id) && is_null($shop_ability)) {
  wp_redirect( home_url("/shop/"), 301);
  exit();
}

$prefecture = get_categories( array(
  "parent" => 0,
  "hide_empty" => 0,
  "orderby" => "id",
  "order" => "asc",
  "taxonomy" => "shop-pref"
));
$prefecture_child = get_sub_categories($prefecture);
?>
<?php get_header(); ?>

<?php
// jsの変数に入れる
echo '<script type="text/javascript">'. 
       'var shopUrl = "'.$shopUrl.'";'.
     '</script>';
?>

<div id="container">

  <div class="pageTit">
    <h2 class="pageTit__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/detail/tit.png" height="46" width="466" alt="取扱 修理・交換 販売 工事取付 対応店情報"></h2>
  </div>

  <div class="mainArea">
    
    <div class="searchArea">
    <?php if($shop_ability): get_template_part("content", "shop-ability-menu"); endif ?>
    <?php if($shop_cat_id): get_template_part("content", "shop-cat-menu"); endif; ?>
    <?php if(!$shop_ability && !$shop_cat_id): get_template_part("content", "shop-cat-menu"); get_template_part("content", "shop-ability-menu"); endif; ?>

    <table class="selectArea">
      <tr>
        <td class="item" id="prefecture">
          <dl>
            <dt class="subItem"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/detail/select_prefecture.png" height="33" width="151" alt="都道府県選択"></dt>
            <dd class="subItem right">
              <div class="selectBoxArea">
                <div class="selectBoxArea__display">以下から選択して下さい</div>
                <div class="selectBoxArea__listWrap">
                  <ul class="selectBoxArea__list">
                    <?php foreach($prefecture as $pref): ?>
                    <li class="selectBoxArea__listItem"><span class="hoverArea"><?php echo $pref->name; ?></span></li>
                    <?php endforeach; ?>
                  </ul>
                  <!-- <div class="barArea"><div class="scrollBar"></div></div> -->
                </div>
              </div>
              <select class="selectBox" name="industry">
                <?php foreach($prefecture as $pref): ?>
                <option value="<?php echo $pref->term_id; ?>"><?php echo $pref->name; ?></option>
                <?php endforeach; ?>
              </select>
            </dd>
          </dl>
        </td>
        <td class="item" id="area">
          <dl>
            <dt class="subItem"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/detail/select_area.png" height="33" width="149" alt="エリア選択"></dt>
            <dd class="subItem right">
              <div class="selectBoxArea">
                <div class="selectBoxArea__display">以下から選択して下さい</div>
                <div class="selectBoxArea__listWrap">
                  <ul class="selectBoxArea__list">
                    <?php foreach($prefecture_child as $pref_term_id => $children): ?>
                      <?php foreach($children as $child): ?>
                    <li class="selectBoxArea__listItem" data-parent-id="<?php echo $pref_term_id; ?>"><span class="hoverArea"><?php echo $child->name; ?></span></li>
                      <?php endforeach; ?>
                    <?php endforeach; ?>
                  </ul>
                  <!-- <div class="barArea"><div class="scrollBar"></div></div> -->
                </div>
              </div>
              <select class="selectBox" name="industry">
                <?php foreach($prefecture_child as $pref_term_id => $children): ?>
                    <optgroup label="area_<?php echo $pref_term_id; ?>" data-parent-id="<?php echo $pref_term_id; ?>">
                <?php foreach($children as $child): ?>
                      <option value="<?php echo $child->name; ?>" data-id="<?php echo $child->term_id; ?>"><?php echo $child->name; ?></option>
                <?php endforeach; ?>
                    </optgroup>
                <?php endforeach; ?>
              </select>
            </dd>
          </dl>
        </td>
      </tr>
    </table>
    </div>

    <ul class="block">
<?php
$tax_query = array();
$args = array(
    'post_type' => 'shop',
    'posts_per_page' => -1,
);
if($shop_cat_id) {
  $tax_query[] = array(
      'taxonomy' => 'shop-cat',
      'field' => "term_id",
      'terms' => $shop_cat_id
  );
}
if($shop_pref_id) {
  $tax_query[] = array(
      'taxonomy' => 'shop-pref',
      'field' => "term_id",
      'terms' => $shop_pref_id
  );
}
if(!empty($tax_query)) {
  if(count($tax_query) > 1) $tax_query["relation"] =  "AND";

  $args = array_merge($args,array(
      'tax_query' => $tax_query
  ));
}
if($shop_ability) {
  $args = array_merge($args, array(
      'meta_query' => array(
          array(
              'key' => 'shop_ability',
              'value'=> $shop_ability,
              'compare' => 'LIKE'
          )
      ),
  ));
}

query_posts($args);
if(have_posts()):
while (have_posts()): the_post();

    // 店舗画像を取得
    $shop_img = get_field('shop_img');
    $shop_img_full = wp_get_attachment_image_src($shop_img, 'full');
    $shop_img_src = $shop_img_full[0];

?>
      <li class="block__list">
        <ul class="block__list_inner">
        <?php // 店舗画像
          $image = get_field('shop_img');
          if( !empty($image) ): ?>
          <li class="block__list_item"><img src="<?php echo $shop_img_src; ?>" height="137" width="206" alt=""></li>
        <?php else: ?>
          <li class="block__list_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/detail/img.jpg" height="137" width="206" alt=""></li>
        <?php endif; ?>
          <li class="block__list_item">
            <h3 class="block__list_item_tit"><?php the_title(); ?></h3>
            <p class="block__list_item_text">
              <?php the_field('shop_info'); ?>
            </p>
            <ul class="block__list_item_action">
            <?php $ability = get_field("shop_ability"); ?>
              <li class="sub_item"><span class="bg<?php if(!in_array("sell",(array)$ability)): ?> off<?php endif; ?>">販売可</span></li>
              <li class="sub_item"><span class="bg<?php if(!in_array("construction",(array)$ability)): ?> off<?php endif; ?>">工事・取付可</span></li>
              <li class="sub_item"><span class="bg<?php if(!in_array("repair",(array)$ability)): ?> off<?php endif; ?>">修理・交換可</span></li>
            </ul>
          </li>
        </ul>
        <p>
          <?php the_field('shop'); ?>
        </p>
      </li>
<?php endwhile; endif; wp_reset_query(); ?>
    </ul>

  </div><!-- /.mainArea -->
  
</div><!-- /#container -->

<?php get_footer(); ?>
