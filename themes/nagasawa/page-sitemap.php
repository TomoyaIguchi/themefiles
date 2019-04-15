<?php
/*
Template Name: サイトマップ
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
    <h2 class="pageTit__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/<?php echo $slug ?>/tit.png" height="48" width="147" alt="<?php the_title(); ?>"></h2>
  </div>

  <ul class="mainArea">
    <li class="item">
      <h3 class="mainArea__tit op"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sitemap/home.png" height="18" width="60" alt="ホーム"><a href=""></h3>
    </li>
    <li class="item itemH100">
      <h3 class="mainArea__tit op"><a href="<?php echo home_url(); ?>/products/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sitemap/product.png" height="19" width="84" alt="製品一覧"></a></h3>
      <ul class="mainArea__list">
        <li class="sub_item"><a href="<?php echo home_url(); ?>/products/keylex/" class="link">キーレックス</a></li>
        <li class="sub_item"><a href="<?php echo home_url(); ?>/products/handle/" class="link">レバーハンドル</a></li>
        <li class="sub_item"><a href="<?php echo home_url(); ?>/products/kodai/" class="link">古代・古代NEO</a></li>
      </ul>
    </li>
    <li class="item itemH100">
      <h3 class="mainArea__tit op"><a href="<?php echo home_url(); ?>/support/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sitemap/support.png" height="20" width="80" alt="サポート"></a></h3>
      <ul class="mainArea__list">
        <li class="sub_item"><a href="<?php echo home_url(); ?>/support/faq/" class="link">よくあるご質問</a></li>
        <li class="sub_item"><a href="<?php echo home_url(); ?>/support/trouble/" class="link">困ったときは</a></li>
        <li class="sub_item"><a href="<?php echo home_url(); ?>/support/info/" class="link">廃番品・取替商品情報</a></li>
      </ul>
    </li>
    <li class="item itemH100">
      <h3 class="mainArea__tit op"><a href="<?php echo home_url(); ?>/company/info/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sitemap/company.png" height="19" width="84" alt="会社概要"></a></h3>
      <ul class="mainArea__list">
        <li class="sub_item"><a href="<?php echo home_url(); ?>/company/info/" class="link">会社情報</a></li>
        <li class="sub_item"><a href="<?php echo home_url(); ?>/company/business/" class="link">事業内容</a></li>
        <li class="sub_item"><a href="<?php echo home_url(); ?>/company/csr/" class="link">社会貢献活動</a></li>
      </ul>
    </li>
    <li class="item">
      <h3 class="mainArea__tit op"><a href="<?php echo home_url(); ?>/case_study/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sitemap/casestudy.png" height="19" width="83" alt="導入事例"></a></h3>
<!--       <ul class="mainArea__list">
        <li class="sub_item"><a href="<?php echo home_url(); ?>/products/keylex/" class="link">キーレックス</a></li>
        <li class="sub_item"><a href="<?php echo home_url(); ?>/products/handle/" class="link">レバーハンドル</a></li>
        <li class="sub_item"><a href="<?php echo home_url(); ?>/products/kodai/" class="link">古代・古代NEO</a></li>
      </ul> -->
    </li>
    <li class="item itemH100">
      <h3 class="mainArea__tit op"><a href="<?php echo home_url(); ?>/recruit/new_graduates/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sitemap/recruit.png" height="19" width="85" alt="採用情報"></a></h3>
      <ul class="mainArea__list">
        <li class="sub_item mrAdjust80"><a href="<?php echo home_url(); ?>/recruit/new_graduates/" class="link">新卒採用情報</a></li>
        <li class="sub_item mrAdjust80"><a href="<?php echo home_url(); ?>/recruit/mid_career/" class="link">中途採用情報</a></li>
        <li class="sub_item mrAdjust80"><a href="<?php echo home_url(); ?>/recruit/parttime/" class="link">パート採用情報</a></li>
      </ul>
    </li>
    <li class="item">
      <h3 class="mainArea__tit op"><a href="<?php echo home_url(); ?>/inquiry/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sitemap/inquiry.png" height="19" width="126" alt="お問い合わせ"></a></h3>
    </li>
    <li class="item">
      <h3 class="mainArea__tit op"><a href="<?php echo home_url(); ?>/document_request/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sitemap/request.png" height="19" width="84" alt="資料請求"></a></h3>
    </li>
    <li class="item itemH100">
      <h3 class="mainArea__tit op"><a href="<?php echo home_url(); ?>/shop/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sitemap/kss.png" height="19" width="233" alt="KSS加盟店・金物情報"></a></h3>
      <ul class="mainArea__list">
        <li class="sub_item"><a href="<?php echo home_url(); ?>/shop/" class="link">販売&nbsp;取付工事&nbsp;修理・交換&nbsp;対応店情報</a></li>
      </ul>
    </li>
    <li class="item">
      <h3 class="mainArea__tit op"><a href="<?php echo home_url(); ?>/catalog/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sitemap/catalog.png" height="20" width="204" alt="カタログダウンロード"></a></h3>
    </li>
    <li class="item">
      <h3 class="mainArea__tit op"><a href="<?php echo home_url(); ?>/glossary/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sitemap/words.png" height="19" width="63" alt="用語集"></a></h3>
    </li>
    <li class="item">
      <h3 class="mainArea__tit op"><a href="<?php echo home_url(); ?>/news/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sitemap/news.png" height="19" width="125" alt="お知らせ一覧"></a></h3>
      <code>
      <!--
      <ul class="mainArea__list">
        <li class="sub_item"><a href="<?php echo home_url(); ?>/news/" class="link">お知らせ詳細</a></li>
      </ul>
      -->
      </code>
    </li>
    <li class="item">
      <h3 class="mainArea__tit op"><a href="<?php echo home_url(); ?>/privacy_policy/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sitemap/privacypolicy.png" height="20" width="289" alt="プライバシーポリシーについて"></a></h3>
    </li>
    <li class="item">
      <h3 class="mainArea__tit op"><a href="<?php echo home_url(); ?>/sitemap/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sitemap/sitemap.png" height="20" width="120" alt="サイトマップ"></a></h3>
    </li>
    <li class="item itemH100">
      <h3 class="mainArea__tit op"><a href="http://www.jlma.org/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sitemap/lock.png" height="19" width="268" alt="日本ロック工業会・JLMA "></a></h3>
      <ul class="mainArea__list">
        <li class="sub_item"><a href="http://www.jalose.org/" target="_blank" class="link outerLink">日本ロックセキュリティ協同組合</a></li>
        <li class="sub_item"><a href="http://www.chojukyo.jp/" target="_blank" class="link outerLink">長期住宅使用部材標準化推進協議会（長住協）</a></li>
        <li class="sub_item last"><a href="http://www.jha-net.or.jp/gyoumu.htm" target="_blank" class="link outerLink">東京建築金物工業協同組合</a></li>
      </ul>
    </li>
    <li class="item">
      <h3 class="mainArea__tit op"><a href="<?php echo home_url(); ?>/ekeylex/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sitemap/english.png" height="17" width="126" alt="ENGLISH"></a></h3>
    </li>
    <li class="item">
      <h3 class="mainArea__tit op"><a href="<?php echo home_url(); ?>/ckeylex/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sitemap/chinese.png" height="17" width="129" alt="CHINESE"></a></h3>
    </li>
<!--     <li class="item">
      <h3 class="mainArea__tit op"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/sitemap/corporation.png" height="19" width="128" alt="法人の皆様へ"></a></h3>
    </li> -->
  </ul><!-- /.mainArea -->
  
  
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
  
</div><!-- /#container -->

<?php get_footer(); ?>
