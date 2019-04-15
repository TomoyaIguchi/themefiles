<?php

// アイキャッチ設定 -----------------------------------------------

// アイキャッチ有効化
add_theme_support('post-thumbnails');

// オリジナルサムネイルサイズ
add_image_size('lineup_large1', 304, 306, true);
add_image_size('lineup_large2', 306, 306, true);
add_image_size('lineup_thumb', 98, 98, true);
add_image_size('lineup_zumen', 129, 129, true);
add_image_size('case_thumb', 174, 174, true );


// テンプレート用変数 -----------------------------------------------

// 固定ページの親ページのスラッグを取得
function is_parent_slug() {
  global $post;
  if ($post->post_parent) {
    $post_data = get_post($post->post_parent);
    return $post_data->post_name;
  }
}

/**
 * カスタムタクソノミーの親カテゴリ配列から、小カテゴリー配列を作成する
 *
 * @param $parent_categories array List of categories.
 *
 * @return array
 */
function get_sub_categories($parent_categories) {
  $ret = array();
  foreach($parent_categories as $cat) {
    $ret[$cat->term_id] = get_categories(array(
      'taxonomy' => $cat->taxonomy,
      "hide_empty" => 0,
      "orderby" => "id",
      "order" => "asc",
      'parent' => $cat->term_id
    ));
  }

  return $ret;
}

/**
 * タクソノミー名とカスタムタクソノミーからIDを返す
 *
 * @param null $name
 * @param null $custom_taxonomy
 *
 * @return string
 */
function get_the_custom_term_id($name = null, $custom_taxonomy = null) {
  if(is_null($name) || is_null($custom_taxonomy)) return "";

  $term = get_term_by("name", $name, $custom_taxonomy);
  return isset($term->term_id) ? $term->term_id : "";
}

/**
 * タクソノミー名とカスタムタクソノミーからIDをecho
 *
 * @param null $name
 * @param null $custom_taxonomy
 */
function the_custom_term_id($name = null, $custom_taxonomy = null) {
  echo get_the_custom_term_id($name, $custom_taxonomy);
}

/**
 * カスタムポストタイプのアーカイブを取得する
 */
function get_news_yearly_archive_array($args) {
  $args['echo'] = false;
  $args['format'] = "html";
  add_filter( 'getarchives_where' , 'news_getarchives_where_filter' , 10 , 2 );
  $archives = wp_get_archives($args);
  remove_filter('getarchives_where' , 'news_getarchives_where_filter' , 10 );

  $archives = explode( '</li>' , $archives );
  $links = array();
  foreach( $archives as $link ) {
    $link = str_replace( array( '<li>' , "\n" , "\t" , "\s" ), '' , $link );
    if( '' != $link  && preg_match("#>([0-9]+)</a>$#", $link, $matches)){
      $links[] = $matches[1];
    }
    else
      continue;
  }
  return $links;
}


function news_getarchives_where_filter($where, $r) {
  $post_type = 'news';
  return str_replace( "post_type = 'post'" , "post_type = '$post_type'" , $where );
}

// リライト設定 -----------------------------------------------

/**
 * 加盟店の固定ページでカスタムタクソノミーを取得できるようにする
 */
function add_shop_detail_rewrite() {
  add_rewrite_rule('^shop/detail/ability/([^/]*)/([0-9]+)/([0-9]+)/?', 'index.php?pagename=shop/detail&shop_ability=$matches[1]&shop-pref=$matches[2]&shop-sub-pref=$matches[3]', 'top');
  add_rewrite_rule('^shop/detail/ability/([^/]*)/([0-9]+)/?', 'index.php?pagename=shop/detail&shop_ability=$matches[1]&shop-pref=$matches[2]', 'top');
  add_rewrite_rule('^shop/detail/ability/([^/]*)/?', 'index.php?pagename=shop/detail&shop_ability=$matches[1]', 'top');
  add_rewrite_rule('^shop/detail/([0-9]+)/([0-9]+)/([0-9]+)/?', 'index.php?pagename=shop/detail&shop-cat=$matches[1]&shop-pref=$matches[2]&shop-sub-pref=$matches[3]', 'top');
  add_rewrite_rule('^shop/detail/([0-9]+)/([0-9]+)/?', 'index.php?pagename=shop/detail&shop-cat=$matches[1]&shop-pref=$matches[2]', 'top');
  add_rewrite_rule('^shop/detail/([0-9]+)/?', 'index.php?pagename=shop/detail&shop-cat=$matches[1]', 'top');

  flush_rewrite_rules();
}
add_action("init", "add_shop_detail_rewrite");

/**
 * products/xxxxx/yyyyy　の時は
 * カスタム投稿タイプproductsのpost_name yyyyy を表示する。
 */
function add_product_single_rewrite() {
  add_rewrite_rule('^products/([^/]*)/([^/]*)/?', 'index.php?post_type=products&name=$matches[2]', 'top');
  add_rewrite_rule('^products/([^/]*)/?', 'index.php?pagename=products/$matches[1]', 'top');
  add_rewrite_rule('^products/?', 'index.php?pagename=products', 'top');

  flush_rewrite_rules();
}
add_action("init", "add_product_single_rewrite");

/**
 * お知らせ
 */
function add_news_rewrite() {
  //newsの一覧ページ
  add_rewrite_rule('^news/page/([0-9]{1,})/?', 'index.php?post_type=news&paged=$matches[1]', 'top');
  //newsの詳細ページ
  add_rewrite_rule('^news/([^/]*)/([0-9]+)/?', 'index.php?post_type=news&news-cat=$matches[1]&p=$matches[2]', 'top');
  //newsの年別
  add_rewrite_rule('^news/([0-9]{4})/page/([0-9]{1,})/?', 'index.php?post_type=news&year=$matches[1]&paged=$matches[2]', 'top');
  add_rewrite_rule('^news/([0-9]{4})/?', 'index.php?post_type=news&year=$matches[1]', 'top');
  //newsのカテゴリ別
  add_rewrite_rule('^news/([^/]*)/page/([0-9]{1,})/?', 'index.php?post_type=news&news-cat=$matches[1]&paged=$matches[2]', 'top');
  add_rewrite_rule('^news/([^/]*)/?', 'index.php?post_type=news&news-cat=$matches[1]', 'top');

  flush_rewrite_rules();
}
add_action("init", "add_news_rewrite");

/**
 * add query vars
 *
 * @param $query_vars
 *
 * @return array
 */
function add_routes_query_vars( $query_vars ) {
  $query_vars[] = 'shop_ability';
  $query_vars[] = 'shop-sub-pref';
  return $query_vars;
}
add_filter('query_vars', 'add_routes_query_vars');

// カスタム投稿 -----------------------------------------------

// カスタム投稿 製品
add_action( 'init', 'products_post_type' );
function products_post_type() {
  register_post_type( 'products', /* post-type */
    array(
      'labels' => array(
        'name' => __( '製品' ),
        'singular_name' => __( '製品' )
      ),
      'public' => true,
      'supports' => array( 'title' ),
      // 'menu_position' =>5,
//      'rewrite' => false,
      'has_archive' => false
    )
  );
   
//カスタムタクソノミー、カテゴリタイプ - 製品のカテゴリー
  register_taxonomy(
    'products-cat', 
    'products', 
    array(
      'hierarchical' => true, 
      'update_count_callback' => '_update_post_term_count',
      'label' => '製品のカテゴリー',
      'singular_label' => '製品のカテゴリー',
      'public' => true,
      'show_ui' => true
    )
  );
}

// カスタム投稿 ラインナップ
add_action( 'init', 'lineup_post_type' );
function lineup_post_type() {
  register_post_type( 'lineup', /* post-type */
    array(
      'labels' => array(
        'name' => __( 'ラインナップ' ),
        'singular_name' => __( 'ラインナップ' )
      ),
      'public' => true,
      'supports' => array( 'title' ),
      // 'menu_position' =>6,
      'has_archive' => false
    )
  );
}



// カスタム投稿 加盟店・取扱店
add_action( 'init', 'shop_post_type' );
function shop_post_type() {
  register_post_type( 'shop', /* post-type */
    array(
      'labels' => array(
        'name' => __( '加盟店・取扱店' ),
        'singular_name' => __( '加盟店・取扱店' )
      ),
      'public' => true,
      'supports' => array( 'title' ),
      'rewrite' => false,
      // 'menu_position' =>7,
      'has_archive' => false
    )
  );
   
//カスタムタクソノミー、カテゴリタイプ - 加盟店・取扱店のカテゴリー
  register_taxonomy(
    'shop-cat', 
    'shop', 
    array(
      'hierarchical' => true, 
      'update_count_callback' => '_update_post_term_count',
      'label' => '加盟店・取扱店の種類',
      'singular_label' => '加盟店・取扱店の種類',
      'public' => true,
      'show_ui' => true
    )
  );

  register_taxonomy(
    'shop-pref', 
    'shop', 
    array(
      'hierarchical' => true, 
      'update_count_callback' => '_update_post_term_count',
      'label' => '加盟店・取扱店の都道府県',
      'singular_label' => '加盟店・取扱店の都道府県',
      'public' => true,
      'show_ui' => true
    )
  );
}


// カスタム投稿 サポート
add_action( 'init', 'support_post_type' );
function support_post_type() {
  register_post_type( 'support', /* post-type */
    array(
      'labels' => array(
        'name' => __( 'サポート' ),
        'singular_name' => __( 'サポート' )
      ),
      'public' => true,
      'supports' => array( 'title' ),
      // 'menu_position' =>7,
      'has_archive' => false
    )
  );
   
//カスタムタクソノミー、カテゴリタイプ - サポートのカテゴリー
  register_taxonomy(
    'support-cat', 
    'support', 
    array(
      'hierarchical' => true, 
      'update_count_callback' => '_update_post_term_count',
      'label' => 'サポートのカテゴリー',
      'singular_label' => 'サポートのカテゴリー',
      'public' => true,
      'show_ui' => true
    )
  );
}

// カスタム投稿 取替商品
add_action( 'init', 'exchange_post_type' );
function exchange_post_type() {
  register_post_type( 'exchange', /* post-type */
    array(
      'labels' => array(
        'name' => __( '取替商品' ),
        'singular_name' => __( '取替商品' )
      ),
      'public' => true,
      'supports' => array( 'title' ),
      // 'menu_position' =>7,
      'has_archive' => false
    )
  );
}


// カスタム投稿 採用情報
add_action( 'init', 'recruit_post_type' );
function recruit_post_type() {
  register_post_type( 'recruit', /* post-type */
    array(
      'labels' => array(
        'name' => __( '採用情報' ),
        'singular_name' => __( '採用情報' )
      ),
      'public' => true,
      'supports' => array( 'title' ),
      // 'menu_position' =>8,
      'has_archive' => false
    )
  );
}


// カスタム投稿 お知らせ
add_action( 'init', 'news_post_type' );
function news_post_type() {
  register_post_type( 'news', /* post-type */
    array(
      'labels' => array(
        'name' => __( 'お知らせ' ),
        'singular_name' => __( 'お知らせ' )
      ),
      'public' => true,
      'supports' => array( 'title','editor','excerpt','thumbnail' ),
      // 'menu_position' =>9,
//      'rewrite' => false,
      'has_archive' => true
    )
  );
   
//カスタムタクソノミー、カテゴリタイプ - お知らせのカテゴリー
  register_taxonomy(
    'news-cat', 
    'news', 
    array(
      'hierarchical' => true, 
      'update_count_callback' => '_update_post_term_count',
      'label' => 'お知らせのカテゴリー',
      'singular_label' => 'お知らせのカテゴリー',
      'public' => true,
      'show_ui' => true
    )
  );
}

//カスタム投稿 導入事例
add_action( 'init', 'case_study_post_type' );
function case_study_post_type() {
    register_post_type( 'case_study', /* post-type */
                       array(
                           'labels' => array(
                               'name' => __( '導入事例' ),
                               'singular_name' => __( '導入事例' )
                           ),
                           'public' => true,
                           'supports' => array( 'title' ),
                           // 'menu_position' =>5,
                           //      'rewrite' => false,
                           'has_archive' => false
                       )
                      );

    //カスタムタクソノミー、カテゴリタイプ - お知らせのカテゴリー
    register_taxonomy(
        'case_study-cat', 
        'case_study', 
        array(
            'hierarchical' => true, 
            'update_count_callback' => '_update_post_term_count',
            'label' => '導入事例のカテゴリー',
            'singular_label' => '導入事例のカテゴリー',
            'public' => true,
            'show_ui' => true
        )
    );
}


// 管理画面設定 -----------------------------------------------

// 編集者権限のサイドバーメニュー非表示
if (!current_user_can('edit_users')) {
  function remove_menus () {
    global $menu;
    $restricted = array(
      __('投稿'),
      __('コメント'),
      // __('固定ページ'),
      __('ツール'),
      __('プロフィール')
    );
    end ($menu);
    while (prev($menu)){
      $value = explode(' ',$menu[key($menu)][0]);
      if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){
        unset($menu[key($menu)]);
      }
    }
  }
  add_action('admin_menu', 'remove_menus');
}


// 編集者権限の管理バーのメニュー非表示
function remove_admin_bar_menu( $wp_admin_bar ) {
  if (current_user_can('editor')){
    $wp_admin_bar->remove_menu('updates'); // 更新
    $wp_admin_bar->remove_menu('comments'); // コメント
    $wp_admin_bar->remove_menu('new-post'); // 新規のドロップタウン内の投稿
    $wp_admin_bar->remove_menu('new-media'); // 新規のドロップタウン内のメディア
    $wp_admin_bar->remove_menu('new-page'); // 新規のドロップタウン内の固定ページ
    // $wp_admin_bar->remove_menu('edit-profile'); // マイアカウントのドロップタウン内のプロフィール編集
  }
}
add_action( 'admin_bar_menu', 'remove_admin_bar_menu', 201 );



// 製品の投稿作成画面でタイトル・カテゴリを必須に（空欄ならJavaScriptのアラート）
add_action( 'admin_head-post-new.php', 'products_post_edit_required' ); // 新規投稿画面でフック
add_action( 'admin_head-post.php', 'products_post_edit_required' );     // 投稿編集画面でフック
function products_post_edit_required() {
?>
<script type="text/javascript">
jQuery(document).ready(function($){
  if( 'products' == $('#post_type').val() ){ // post_type 判定。例は投稿と固定ページ。カスタム投稿タイプは適宜追加
    $("#post").submit(function(e){ // 更新あるいは下書き保存を押したとき
      if('' == $('#title').val()) { // タイトル欄の場合
        alert('タイトルを入力してください。');
        $('.spinner').hide(); // spinnerアイコンを隠す
        $('#publish').removeClass('button-primary-disabled'); // #publishからクラス削除
        $('#title').focus(); // 入力欄にフォーカス
        return false;
      }

    });
  }
});
</script>
<?php
}

// ラインナップの投稿作成画面でタイトルを必須に（空欄ならJavaScriptのアラート）
add_action( 'admin_head-post-new.php', 'lineup_post_edit_required' ); // 新規投稿画面でフック
add_action( 'admin_head-post.php', 'lineup_post_edit_required' );     // 投稿編集画面でフック
function lineup_post_edit_required() {
?>
<script type="text/javascript">
jQuery(document).ready(function($){
  if( 'lineup' == $('#post_type').val() ){ // post_type 判定。例は投稿と固定ページ。カスタム投稿タイプは適宜追加
    $("#post").submit(function(e){ // 更新あるいは下書き保存を押したとき
      if('' == $('#title').val()) { // タイトル欄の場合
        alert('タイトルを入力してください。');
        $('.spinner').hide(); // spinnerアイコンを隠す
        $('#publish').removeClass('button-primary-disabled'); // #publishからクラス削除
        $('#title').focus(); // 入力欄にフォーカス
        return false;
      }
    });
  }
});
</script>
<?php
}



?>
