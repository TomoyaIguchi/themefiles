<?php
/*
Template Name: 会社概要＞社会貢献活動
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
    <h2 class="pageTit__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/<?php echo $slug ?>/tit.png" alt="<?php the_title(); ?>"></h2>
  </div>

  <div class="mainArea">

    <p class="para">
      <span>長沢製作所は1998年から、インテリアデザイン専門学校「<a href="http://www.space-design.co.jp/" target="blank" class="link">スペースデザインカレッジ</a>」東京校の学生と一緒に企業演習を行っています。<br>
      企業演習では長沢製作所の設備で生産できる製品を提案してもらい、優れた作品は製品化まで検討する実践的な演習です。</span>
      学生には教室の勉強だけでなく、より実践的なテーマに取り組むことで新たな発見を見出すキッカケになればと考えています。長沢製作所は優れた作品の製品化まで行うことを視野に、また製品化まで至らなくてもデザインの訴求ポイントを汲み取り、新商品開発・営業活動に活かせるよう活動を進めています。
    </p>

    <div class="para-block">
      <h3 class="para-block__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/csr/subTit.png" height="19" width="80" alt="活動内容"></h3>
      <ul class="para-block__list">
        <li class="item">
          <h4 class="para-block__list_tit">工場見学</h4>
          <ul class="para-block__list_img-ist">
            <li class="sub-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/csr/img01.jpg" height="141" width="212" alt=""></li>
            <li class="sub-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/csr/img02.jpg" alt="" width="212" height="141"></li>
            <li class="sub-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/csr/img03.jpg" alt="" width="212" height="141"></li>
            <li class="sub-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/csr/img04.jpg" alt="" width="212" height="141"></li>
          </ul>
          <p class="para-block__text">工場見学を行ってもらい、長沢製作所の一貫生産のものつくり現場を肌で実感してもらいます。案内は長沢製作所の営業部、開発部員が担当し、活発な質疑応答を行います。</p>
        </li>
        <li class="item">
          <h4 class="para-block__list_tit">プレゼン</h4>
          <ul class="para-block__list_img-ist">
            <li class="sub-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/csr/img05.jpg" alt="" width="212" height="141"></li>
            <li class="sub-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/csr/img06.jpg" alt="" width="212" height="141"></li>
            <li class="sub-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/csr/img07.jpg" alt="" width="212" height="141"></li>
            <li class="sub-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/csr/img08.jpg" alt="" width="212" height="141"></li>
          </ul>
          <p class="para-block__text">
            中間プレゼンは紙ベースでのデザインを発表し、最終プレゼンでは中間プレゼンを発展させたプロトタイプを製作、より具体的な発表が行われます。<br>
            出来あがった作品は長沢製作所本社食堂に展示し、社員にアンケートを実施します。視点が変わると違う意見が見出され、それらを吸い上げて新商品開発に活かすことが大切であると考えています。
          </p>
        </li>
        <code>
        <!--
        <li class="item">
          <h4 class="para-block__list_tit">最終プレゼン</h4>
          <ul class="para-block__list_img-ist">
            <li class="sub-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/csr/img09.jpg" alt="" width="212" height="141"></li>
            <li class="sub-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/csr/img10.jpg" alt="" width="212" height="141"></li>
          </ul>
          <p class="para-block__text">最終プレゼンで、中間プレゼンから発展させた内容のモデル発表までを行ってもらいます。今年は、中間・最終と1グループで2つのモデルを提示がありました。出来上がった作品は、長沢製作所本社食堂に展示し、社員の方々に見ていただくと共に、アンケートを実施しています。視点が変わると違う意見が必ずあり、それらを吸い上げ生かすことが大切だと考えています。</p>
        </li>
        -->
        </code>
      </ul>
    </div>
    
  </div><!-- /.mainArea -->

  
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
  
</div><!-- /#container -->

<?php get_footer(); ?>
