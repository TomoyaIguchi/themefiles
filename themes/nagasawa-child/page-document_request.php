<?php
/*
Template Name: SP＞資料請求
*/
?>
<!DOCTYPE html>
<html id="sp">
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
  <style>
    .selectBox {
      display: block !important;
      width: 100%;
    }
    #sp input[type="checkbox"] {
      -webkit-appearance: checkbox;
      -moz-appearance: checkbox;
      appearance: checkbox;
    }
    .checkBoxArea .wpcf7-list-item {
      display: block;
    }
    #sp .checkBoxArea .wpcf7-list-item.last {
      border: 0 !important;
    }
    .screen-reader-response {
      display: none;
    }
    .wpcf7-not-valid-tip {
      color: red;
      padding-top: 10px;
      font-size: .75rem;
    }
    input[type="text"].wpcf7c-conf,
    textarea.wpcf7c-conf {
      background-color: #fff !important;
      color: inherit !important;
      border: 0 !important;
      outline: none;
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
    
  </style>
  <!-- favicon -->
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/favicon.ico">
  <!-- <link rel="shortcut icon" href="./favicon.ico" type="image/vnd.microsoft.icon"> -->
  <!-- sp home icon -->
  <!-- <link rel="apple-touch-icon" href="/img/index/icon.png"> -->
 
  <!--[if IE]>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/common/js/lib/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>
<body>

<div class="h1__wrap">
	<h1><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sp/request/logo.png" height="25" alt=""></h1>
</div>

<div id="container" class="request">

<?php if (have_posts()): while (have_posts()): the_post();?>

  <div class="pageTit">
    <h2 class="pageTit__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sp/request/tit.png" height="30" alt="資料請求はこちら"></h2>
  </div>

  <div class="mainArea">
  	<?php the_content(); ?>
  </div><!-- /.mainArea -->

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

</div><!-- /#container -->

<footer>
  <p>
    Copyright © <?php the_time('Y'); ?>.Nagasawa Manufacturing Co.Ltd;<br>
    All rights reserved..
  </p>
</footer>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/common/js/lib/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/sp/document_request/js/script.js"></script>
<script type="text/javascript">

// ===================================================================
// form error
// ===================================================================

$(function(){

    var $send = $('.btnArea__inquiry-wrap').find('img:first-child'),
        $tr = $('.table__tr'),
        $td = $('.mainArea__input_text'),
        $name_company = $tr.filter(':nth-child(1)').find('.error'),
        $name = $tr.filter(':nth-child(2)').find('.error'),
        $name_frigana = $tr.filter(':nth-child(3)').find('.error'),
        $name_team = $tr.filter(':nth-child(4)').find('.error'),
        $tel = $tr.filter(':nth-child(9)').find('.error'),
        $mail = $tr.filter(':nth-child(11)').find('.error'),

        name_company,
        name,
        name_frigana,
        name_team,
        tel,
        mail,

        isInput01,isInput02,isInput03,isInput04,isInput05,isInput06,
        isFrigana,
        isMail,
        isTel;

    function setStyle() {

        $('.error').addClass('is-none');

    }

    function getVal() {

        name_company = $tr.filter(':nth-child(1)').find('input').val();
        name = $tr.filter(':nth-child(2)').find('input').val();
        name_frigana = $tr.filter(':nth-child(3)').find('input').val();
        name_team = $tr.filter(':nth-child(4)').find('input').val();
        tel = $tr.filter(':nth-child(9)').find('input').val();
        mail = $tr.filter(':nth-child(11)').find('input').val();

    }

    function validate() {

        getVal();
        inputCheck();

        isFrigana = furiganaCheck();
        isMail = mailCheck();
        isTel = telCheck();

        show_error();

    }

    function inputCheck() {

        if (name_company == '') isInput01 = true
        else isInput01 = false;
        if (name == '') isInput02 = true
        else isInput02 = false;
        if (name_frigana == '') isInput03 = true
        else isInput03 = false;
        if (name_team == '') isInput04 = true
        else isInput04 = false;
        if (tel == '') isInput05 = true
        else isInput05 = false;
        if (mail == '') isInput06 = true
        else isInput06 = false;

    }
    function furiganaCheck() {
       if( name_frigana.match( /^[ァ-ン]+$/ ) ) return true;
       else return false;
    }
    function mailCheck() {
       if( mail.match( /^([a-zA-Z0-9])+([a-zA-Z0-9¥._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9¥._-]+)+$/ ) ) return true;
       else return false;
    }
    function telCheck() {
       if( tel.match( /^[0-9]+$/ ) ) return true;
       else return false;

    }

    function show_error() {

        if (isInput01) $name_company.removeClass('is-none');
        if (isInput02) $name.removeClass('is-none');
        if (isInput03 || !isFrigana) $name_frigana.removeClass('is-none');
        if (isInput04) $name_team.removeClass('is-none');
        if (isInput05 || !isTel) $tel.removeClass('is-none');
        if (isInput06 || !isMail) $mail.removeClass('is-none');

    }

    function hide_error() {

        $(this).next().addClass('is-none');        

    }

    function setEvents() {

      // ready
      setStyle();

      // click
      $send.on('touchend',validate);

      // forcus
      $td.on('focus',hide_error);

    }

    setEvents();

})

</script>

<?php wp_footer(); ?> 
</body>
</html>

