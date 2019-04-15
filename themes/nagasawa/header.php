<!DOCTYPE html>
<html>
<!-- ogp -->
<!-- <html lang="ja" prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml"> -->
<head>
  <meta charset="utf-8">

  <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
  <meta name="description" content="<?php wp_title( '|', true, 'right' ); bloginfo('description'); ?>">
  <meta name="keywords" content="キーレックス,施錠,ドアノブ,鍵,カギ,ドアハンドル,KSS,長沢製作所">

  <!-- <meta name="robots" content="index, follow"> -->
  <!-- <meta name="format-detection" content="telephone=yes,email=yes"> -->

  <!-- IE互換表示対策 -->
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"/> -->

  <!-- viewport  -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- ogp -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php bloginfo('name'); ?>" />
  <meta property="og:description" content="<?php bloginfo('description'); ?>" />
  <meta property="og:url" content="<?php echo home_url(); ?>" />
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/sns.gif" />

  <!-- Stylesheets Start -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/common.css" rel="stylesheet">

  <style type="text/css">
    input[type="text"].wpcf7c-conf,
    textarea.wpcf7c-conf {
      background-color: #fff !important;
      color: inherit !important;
      border: 0 !important;
      outline: none;
    }
    input[type="text"].wpcf7c-conf:-webkit-autofill {
      background-color: #fff !important;
      -webkit-box-shadow: 0 0 0px 1000px white inset;
    }
    input[name="image_conf"].wpcf7c-conf {
      display: block;
      width: 100%;
    }
    textarea.wpcf7c-conf::-webkit-input-placeholder {
      color: #fff !important;
    }
    textarea.wpcf7c-conf::-moz-placeholder {
      color: #fff !important;
    }
    textarea.wpcf7c-conf:-ms-input-placeholder {
      color: #fff !important;
    }
    textarea.wpcf7c-conf:-moz-placeholder {
      color: #fff !important;
    }
    select.wpcf7c-conf {
      background-color: #fff !important;
      border: none !important;
      -webkit-appearance: none !important;
      -moz-appearance: none !important;
      appearance: none !important;
      padding-left: 10px;
    }
    .wpcf7-not-valid-tip {
      margin-top: 5px !important;
      font-size: .625rem !important;
    }
  </style>

<?php if (is_home()): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/top.css?171005" rel="stylesheet">

<?php elseif (is_page('products')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/products.css" rel="stylesheet">

  <?php elseif (is_page('case_study')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/index_case_study.css" rel="stylesheet">
  <?php elseif (is_singular('case_study')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/case_study.css" rel="stylesheet">

  <?php elseif (is_page(array('keylex','handle','kodai'))): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/product_list.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/products/css/ie.css" media="all" />
<?php elseif (is_singular('products')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/product_detail.css" rel="stylesheet">

<?php elseif (is_page('news') || is_post_type_archive('news')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/news.css" rel="stylesheet">
<?php elseif (is_singular('news')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/news_detail.css" rel="stylesheet">

<?php elseif (is_page('support')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/support.css" rel="stylesheet">
<?php elseif (is_singular('support') && is_single('faq') ): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/faq.css" rel="stylesheet">
<?php elseif (is_singular('support') && is_single('trouble') ): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/trouble.css" rel="stylesheet">
<?php elseif (is_singular('support') && is_single('info') ): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/support_info.css" rel="stylesheet">

<?php elseif (is_page('shop')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/shop.css" rel="stylesheet">
<?php elseif ((is_parent_slug() == 'shop') && is_page('detail')) : ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/shop_detail.css" rel="stylesheet">

<?php elseif (is_page('case_study')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/case_study.css" rel="stylesheet">

<?php elseif (is_page('glossary')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/glossary.css" rel="stylesheet">

<?php elseif (is_page('privacy_policy')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/privacy_policy.css" rel="stylesheet">

<?php elseif (is_page('sitemap')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/sitemap.css" rel="stylesheet">

<?php elseif (is_page('catalog')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/catalog.css" rel="stylesheet">

<?php elseif (is_page('inquiry')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/inquiry.css" rel="stylesheet">
<?php elseif (is_page('inquiry2')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/inquiry.css" rel="stylesheet">
  <style>
    .mainArea .table .table__tr_productImg .file {
      display: inline !important;
    }
    .selectBox {
      display: inline !important;
    }
  </style>

<?php elseif (is_page('document_request')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/request.css" rel="stylesheet">
<?php elseif (is_page('document_request2')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/request.css" rel="stylesheet">
  <style>
    .selectBox {
      display: inline !important;
    }
  </style>

<?php elseif (is_page('thanks')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/request.css" rel="stylesheet">

<?php elseif (is_singular('recruit') && is_single('new_graduates')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/new_graduates.css" rel="stylesheet">
<?php elseif (is_singular('recruit') && is_single('mid_career')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/mid_career.css" rel="stylesheet">
<?php elseif (is_singular('recruit') && is_single('parttime')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/parttime.css" rel="stylesheet">

<?php elseif ((is_parent_slug() == 'company') && is_page('info')) : ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/info.css" rel="stylesheet">
<?php elseif ((is_parent_slug() == 'company') && is_page('business')) : ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/business.css" rel="stylesheet">
<?php elseif ((is_parent_slug() == 'company') && is_page('csr')) : ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/csr.css" rel="stylesheet">

<?php else : ?>
<?php endif; ?>
  <!-- favicon -->
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/favicon.ico">
  <!-- <link rel="shortcut icon" href="./favicon.ico" type="image/vnd.microsoft.icon"> -->
  <!-- sp home icon -->
  <!-- <link rel="apple-touch-icon" href="/img/index/icon.png"> -->
 
  <!--[if IE]>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/common/js/lib/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>

    <!--Google Analytics-->
    <script>

        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new
        Date();a=s.createElement(o),

            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a
                                                                                       ,m)

                                })(window,document,'script','https://www.google-analytics.com/analytics.js',
                                   'ga');

        ga('create', 'UA-81141203-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<?php
// global $template;
// echo $template;
?>

<?php if (is_page(array('keylex','handle','kodai'))): ?>
<body id="productList" class="<?php echo get_post($wp_query->post->ID)->post_name; ?>">
<?php elseif (is_page('products')): ?>
<body id="productList">

<?php elseif (is_page('support')): ?>
<body id="support">

<?php elseif (is_singular('recruit')): ?>
<body id="recruit">

<?php elseif (is_page('case_study')): ?>
<body id="case_study">

<?php elseif (is_parent_slug() == 'company'): ?>
<body id="company">

<?php else : ?>
<body>
<?php endif; ?>

<?php if (is_singular('news')): ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.4&appId=1420044928294331";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php endif; ?>

<header id="header" class="header">
  <div class="header__block_wrap">
  <div class="header__block_inner">
  <div class="header__block_inner02 l-header">
  <div class="header__block">
    <h1 class="header__block_tit"><a href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/logo.png" height="40" width="272" alt="株式会社 長沢製作所"></a></h1>
    <ul class="header__block_menu">
      <li class="item op">
        <code>
        <!--
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/subMenu_search.png" height="22" width="108" alt="検索"></a>
        -->
        </code>
      </li>
      <li class="item op"><a href="/ekeylex/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/subMenu_en.png" height="22" width="107" alt="english"></a></li>
      <li class="item op"><a href="/ckeylex/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/subMenu_ch.png" height="22" width="84" alt="中文"></a></li>
    </ul>
    <p class="header__block_request"><a href="<?php echo home_url(); ?>/document_request/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/request.png" height="50" width="100" alt="資料請求" class="vb op"></a><a href="<?php echo home_url(); ?>/inquiry/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/inquiry.png" height="50" width="129" alt="お問い合わせ" class="vb op"></a></p>
    <a href="https://www.facebook.com/nagasawa.mfg/" target="_blank" class="sns fb op" style="position:absolute; top: 17.5px; right: 5px;"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/icon_Facebook.png" height="25" width="25" alt="facebook"></a>
    <a href="https://www.instagram.com/nagasawa_manufacturing/" target="_blank" class="sns fb op" style="position:absolute; top: 17.5px; right: 45px;"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/icon_Instagram.png" height="25" width="25" alt="instagram"></a>
    <a href="https://www.youtube.com/channel/UCwQnXzBPaFcMMzVIG2a-gYw#" target="_blank" class="sns fb op" style="position:absolute; top: 17.5px; right: 85px;"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/icon_YouTube.png" height="25" width="25" alt="youtube"></a>
  </div>
  </div>
  </div>
  </div>
  <?php include(TEMPLATEPATH . '/nav.php'); ?>

<?php if (!is_home()): ?>
  <?php include(TEMPLATEPATH . '/breadcrumbs.php'); ?>
<?php endif; ?>

</header>