<?php
/*
Template Name: サポート
*/
?>
<?php get_header(); ?>

<div id="container">

  <div class="pageTit">
    <h2 class="pageTit__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/tit.png" height="47" width="90" alt="サポート"></h2>
  </div>

  <div class="mainArea">
    
    <ul class="mainArea__block mainArea__block_support">
      <li class="item">
        <a href="<?php echo home_url(); ?>/support/faq/" class="linkArea">
        <div class="item__inner">
        <p class="item__thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/support_qa.png" height="162" width="162" alt=""></p>
        <p class="item__tit"><span class="list-type-arrow link">よくあるご質問</span></p>
        </a>
        <p class="item__text">お客さまからお問い合わせの多い疑問・トラブルについてご確認いただけます。<br>解決できない場合は、<a href="<?php echo home_url(); ?>/inquiry/" class="under">こちら</a>よりお問い合わせください。</p>
        </div>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/support/trouble/" class="linkArea">
        <div class="item__inner">
        <p class="item__thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/support_trouble.png" height="164" width="162" alt=""></p>
        <p class="item__tit"><span class="list-type-arrow link">困ったときは</span></p>
        </a>
        <p class="item__text mb15">
          弊社製品の故障、修理・交換のお問い合わせはこちらからご確認いただけます。型番がわからない場合は、写真添付にて対応いたします。
        </p>
        <p class="item__text">
          お問い合わせやご質問の内容等によっては、弊社からの回答を数日から約1週間ほどお待ちいただく場合も御座います。予めご了承下さい。
        </p>
        </div>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/support/info/" class="linkArea">
        <div class="item__inner">
        <p class="item__thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/support_info.png" height="162" width="162" alt=""></p>
        <p class="item__tit"><span class="list-type-arrow link">廃番品/取替商品情報</span></p>
        </a>
        <p class="item__text">廃番品・お取り替えする商品でお困りの際はこちらをまずご覧ください。</p>
        </div>
      </li>
    </ul>

  </div><!-- /.mainArea -->
  
</div><!-- /#container -->

<?php get_footer(); ?>
