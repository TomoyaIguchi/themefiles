<?php
/*
Template Name: SP＞資料請求＞完了
*/
?>
<!DOCTYPE html>
<html id="sp" class="sp_thanks">
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
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

  <!-- ogp -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php bloginfo('name'); ?>" />
  <meta property="og:description" content="<?php bloginfo('description'); ?>" />
  <meta property="og:url" content="<?php echo home_url(); ?>" />
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/sns.gif" />

  <!-- Stylesheets Start -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/common.css" rel="stylesheet"> 
  <link href="<?php echo get_template_directory_uri(); ?>/assets/common/css/request.css" rel="stylesheet">
  <!-- favicon -->
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/favicon.ico">
  <!-- <link rel="shortcut icon" href="./favicon.ico" type="image/vnd.microsoft.icon"> -->
  <!-- sp home icon -->
  <!-- <link rel="apple-touch-icon" href="/img/index/icon.png"> -->
 
  <!--[if IE]>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/common/js/lib/html5.js"></script>
  <![endif]-->
</head>
<body>

<div class="h1__wrap">
  <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sp/request/logo.png" height="25" alt=""></h1>
</div>

<div id="container">
  <div class="pageTit">
    <h2 class="pageTit__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sp/request/tit.png" height="30" alt="資料請求はこちら"></h2>
  </div>

  <div class="mainArea">

    <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sp/request/subTit.png" height="13" alt=""></h3>
    <p class="text">
      フォームにご入力頂いた内容を送信いたしました。<br>
      ※お問合せや質問の内容等によっては、弊社からの回答を数日から約1週間ほどお待ちいただく場合も御座います。予めご了承ください。
    </p>
    
    <div class="btnArea">
      <p class="btnArea__inquiry-wrap">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sp/request/btn_back_to_top.png" width="314" alt="戻る" class="op"></a>
      </p>
    </div>

  </div>

</div>

<footer>
  <p>
    Copyright © <?php the_time('Y'); ?>.Nagasawa Manufacturing Co.Ltd;<br>
    All rights reserved..
  </p>
</footer>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/common/js/lib/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/sp/document_request/js/script.js"></script>
<script type="text/javascript">

</script>

</body>
</html>





