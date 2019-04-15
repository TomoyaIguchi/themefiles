<?php
/*
Template Name: プライバシーポリシー
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
    <h2 class="pageTit__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/<?php echo $slug ?>/tit.png" height="48" width="340" alt="<?php the_title(); ?>"></h2>
  </div>

  <div class="mainArea">
    
    <div class="content">
      <p class="content__para">株式会社長沢製作所(以下、当社といいます)は、当ウェブサイトをご利用いただく皆さまの個人情報保護の重要性を認識し、お取り扱いについて下記の通り考え、実行いたします。</p>
      <ul class="content__list">
        <li class="item">当社は、ウェブサイト上で個人の意見、写真などを公開する場合、必ず本人の同意を得た上で、個人情報保護方針に照らし、妥当性のある情報のみを掲載します。 </li>
        <li class="item">当社は、お問い合わせの受付け、アンケートや電子メールの配信、通信販売、各種懸賞、ウェブサイト上の会員サービスなどを実施するために、ウェブサイトを通じて個人情報を収集することがあります。</li>
        <li class="item">当社は、情報を収集する場合、利用目的を特定し明示いたします。また、収集する情報の範囲は目的を達成するために必要な限度を超えないものといたします。</li>
        <li class="item">当社は、ウェブサイト既定の入力フォームなどで個人情報をご提供いただく場合、通信には、原則として適切なる暗号化を行い、受発信時の漏洩等を防ぐよう努めます。</li>
        <li class="item">当社は、ウェブサイトを経由してご提供いただいた情報を業務の委託先に提供することがあります。また、当社ウェブサイトを通じて頂戴したお問い合わせを、当該事業の承継先に提供することがあります。その場合は、業務委託先、事業承継先には、契約などにより当社同様の個人情報保護を徹底し漏洩防止を図ります。</li>
        <li class="item">当社は、ウェブサイトでCookieによる個人の利用動向の情報取得は行っていません。サイトへのアクセスログは取得しておりますが、これらの情報はウェブサイト運用上の統計資料、不正アクセス等の原因調査以外で利用することはありません。</li>
        <li class="item last">当社は、当社ウェブサイトのご利用中にリンクにより第三者法人・個人の運営によるサイトに移動した場合、リンク先での個人情報保護については当社の責任範囲外と考えます。</li>
      </ul>
    </div>

    <div class="policy">
      <h3 class="policy__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/privacy_policy/policy.png" height="20" width="146" alt="著作権ポリシー"></h3>
      <p class="policy__para">
        このサイトにある全てのコンテンツ及び著作物は、お客様が個人的に利用する目的で提供されています。<br>
        それ以外の目的による利用は著作権者の許諾が必要です。<br>
        このサイトにある全ての著作物を、その一部でも、著作権者の許諾なしに、複製、改変、インターネット上の提供、公衆に送信することは法律により固く禁止されています。
      </p>
      <p>もし、弊社サイトのコンテンツなどを、貴サイトにて再配信したい等のご要望があれば、<a href="mailto:tokyo@nagasawa-mfg.co.jp" class="under">tokyo@nagasawa-mfg.co.jp</a>まで、ご連絡ください。お電話でのお問い合わせはご遠慮ください。趣旨等を読んだ上で、メールにてご返答させて頂きます。</p>
    </div>
    
  </div><!-- /.mainArea -->

  
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
  
</div><!-- /#container -->

<?php get_footer(); ?>
