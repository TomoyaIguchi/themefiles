<?php
/*
Template Name: KSS加盟店・取扱店情報
*/
?>
<?php get_header(); ?>

<div id="container">

  <div class="pageTit">
    <h2 class="pageTit__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/tit.png" height="46" width="262" alt="KSS加盟店・取扱店情報"></h2>
  </div>

  <div class="mainArea">
    
    <ul class="listBlock listBlock__shopList">
      <li class="item op"><a href="<?php echo home_url(); ?>/shop/detail/<?php the_custom_term_id("KSS代理店", "shop-cat"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/shopList01.png" height="33" width="293" alt="KSS代理店"></a></li>
      <li class="item op"><a href="<?php echo home_url(); ?>/shop/detail/<?php the_custom_term_id("KSS特約店", "shop-cat"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/shopList02.png" height="33" width="293" alt="KSS特約店"></a></li>
      <li class="item op"><a href="<?php echo home_url(); ?>/shop/detail/<?php the_custom_term_id("KSS加盟店", "shop-cat"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/shopList03.png" height="33" width="293" alt="KSS加盟店"></a></li>
      <li class="item op"><a href="<?php echo home_url(); ?>/shop/detail/<?php the_custom_term_id("代理店", "shop-cat"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/shopList04.png" height="33" width="293" alt="代理店"></a></li>
      <li class="item op"><a href="<?php echo home_url(); ?>/shop/detail/<?php the_custom_term_id("金物店", "shop-cat"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/shopList05.png" height="33" width="293" alt="金物店"></a></li>
      <li class="item op"><a href="<?php echo home_url(); ?>/shop/detail/<?php the_custom_term_id("コンシューマールート", "shop-cat"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/shopList06.png" height="33" width="293" alt="コンシューマールート"></a></li>
    </ul>

    <ul class="block block__shopList">
      <li class="block__list">
        <ul class="block__list_inner">
          <li class="block__list_item"><span class="bg">KSS代理店</span></li>
          <li class="block__list_item">ＫＳＳ向けのNAGASAWA製品を取扱う商社（個人への小売りはしていません）</li>
        </ul>
      </li>
      <li class="block__list">
        <ul class="block__list_inner">
          <li class="block__list_item"><span class="bg">KSS特約店</span></li>
          <li class="block__list_item">NAGASAWA製品を施工・販売する鍵店（取付工事も可能です）で、<a href="http://www.nagasawa-mfg.co.jp/news/kss/2869/" class="under">長沢製作所の講習会</a>を受講して<br>認定を受けている鍵店</li>
        </ul>
      </li>
      <li class="block__list">
        <ul class="block__list_inner">
          <li class="block__list_item"><span class="bg">KSS加盟店</span></li>
          <li class="block__list_item">NAGASAWA製品を施工・販売する鍵店（取付工事も可能です）</li>
        </ul>
      </li>
      <li class="block__list">
        <ul class="block__list_inner">
          <li class="block__list_item"><span class="bg">代理店</span></li>
          <li class="block__list_item">全てのNAGASAWA製品を取扱う商社（個人への小売りはしていません）</li>
        </ul>
      </li>
      <li class="block__list">
        <ul class="block__list_inner">
          <li class="block__list_item"><span class="bg">金物店</span></li>
          <li class="block__list_item">NAGASAWA製品を販売するお店（一部、個人への小売りはしない店舗もあります）</li>
        </ul>
      </li>
      <li class="block__list">
        <ul class="block__list_inner">
          <li class="block__list_item"><span class="bg">コンシューマールート</span></li>
          <li class="block__list_item">NAGASAWA製品をホームセンター等へ卸す商社（個人への小売りはしていません）</li>
        </ul>
      </li>

    </ul>

    <p class="para">商品のご購入、取付工事、修理・交換をご依頼いただく場合はこちらから検索ください</p>

    <ul class="listBlock actionList">
      <li class="item op"><a href="<?php echo home_url("/shop/detail/ability/sell") ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/actionList01.png" height="51" width="293" alt="商品のご購入"></a></li>
      <li class="item op"><a href="<?php echo home_url("/shop/detail/ability/construction") ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/actionList02.png" height="51" width="293" alt="取付工事のご依頼"></a></li>
      <li class="item op"><a href="<?php echo home_url("/shop/detail/ability/repair") ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/shop/actionList03.png" height="51" width="293" alt="修理・交換のご依頼"></a></li>
    </ul>

    <ul class="block">
      <li class="block__list">
        <ul class="block__list_inner">
          <li class="block__list_item"><span class="bg">商品のご購入</span></li>
          <li class="block__list_item">製品の購入のみを希望される場合</li>
        </ul>
      </li>
      <li class="block__list">
        <ul class="block__list_inner">
          <li class="block__list_item"><span class="bg">取付工事のご依頼</span></li>
          <li class="block__list_item">製品の購入と取付工事を希望される場合</li>
        </ul>
      </li>
      <li class="block__list">
        <ul class="block__list_inner">
          <li class="block__list_item"><span class="bg">修理・交換のご依頼</span></li>
          <li class="block__list_item">ご使用中の製品の修理もしくは交換を希望される場合</li>
        </ul>
      </li>

    </ul>
  </div><!-- /.mainArea -->
  
</div><!-- /#container -->

<?php get_footer(); ?>
