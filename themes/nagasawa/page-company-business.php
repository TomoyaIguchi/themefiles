<?php
/*
Template Name: 会社概要＞事業内容
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
    
    <p class="para">株式会社長沢製作所は企画・生産・販売・アフターメンテナンスの一貫したラインを構築しています。</p>
    <p class="mainImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/business/img01.jpg" width="950" alt="ビジネススキーム"></p>
    <div class="process">
      <div class="process__inner">
        <h3 class="process__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/business/subTit01.png" height="19" width="201" alt="一貫生産工程について"></h3>
        <div class="process__block">
          <ul class="process__block_list">
            <li class="item">
              <h4><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/business/img06.png" height="180" width="303" alt=""></h4>
              <p class="fwb">鋳造工程</p>
              <p>ダイカストマシンでの部品成形を行います。</p>
            </li>
            <li class="item">
              <h4><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/business/img07.png" alt=""></h4>
              <p class="fwb">トリミング工程</p>
              <p>プレス機で不要な部分を取り除きます。</p>
            </li>
            <li class="item">
              <h4><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/business/img08.png" alt=""></h4>
              <p class="fwb">生地研磨工程</p>
              <p>表面処理に適した磨き作業を行います。</p>
            </li>
          </ul>
        </div>
        <div class="process__block">
          <ul class="process__block_list">
            <li class="item">
              <h4><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/business/img09.png" height="180" width="303" alt=""></h4>
              <p class="fwb">表面処理工程 (メッキ)</p>
              <p>金属を被膜し、表面硬度や質感を向上させます。</p>
            </li>
            <li class="item">
              <h4><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/business/img10.png" alt=""></h4>
              <p class="fwb">表面処理工程 (仕上研磨)</p>
              <p>バフでヘアライン研磨や色調合せを行います。</p>
            </li>
            <li class="item">
              <h4><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/business/img11.png" alt=""></h4>
              <p class="fwb">表面処理工程 (静電塗装)</p>
              <p>塗装ロボットで細部まで均等膜厚での塗装を行います。</p>
            </li>
          </ul>
        </div>
        <div class="process__block">
          <ul class="process__block_list">
            <li class="item">
              <h4><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/business/img12.png" height="180" width="303" alt=""></h4>
              <p class="fwb">表面処理工程 (電着塗装)</p>
              <p>素材の金属光沢を生かしたカラー塗装を行います。</p>
            </li>
            <li class="item">
              <h4><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/business/img13.png" alt=""></h4>
              <p class="fwb">組立工程</p>
              <p>部品のアセンブリ及び作動検査を行います。</p>
            </li>
            <li class="item">
              <h4><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/business/img14.png" alt=""></h4>
              <p class="fwb">製品の完成</p>
              <p>製品と付属部品、説明書を梱包します。</p>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="para-block">
      <h3 class="para-block__tit" id="policy" data-diff="20"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/business/subTit.png" height="19" width="181" alt="品質方針と環境方針"></h3>
      <ul class="para-block__list">
        <li class="item">
          <h4 class="para-block__list_tit">品質方針</h4>
          <p class="para-block__text mb10">株式会社長沢製作所における全ての業務遂行に際しては、経営理念である「常に時代に先駆け、エンドユーザーが安全かつ安心でき、使い易い品格あるオリジナル製品を作り続ける」の精神に則ることが原則である。</p>
          <p class="para-block__text mb10">このため製品開発・製造・販売・サービスにわたる業務全般において、常に品質向上を目指す。</p>
          <p class="para-block__text mb10">また「社外クレームゼロ」を最大の目標とし、より魅力的品質を確保するため、製造力の強化、技術力の強化向上に努めるとともに、問題の再発防止、未然防止を徹底する。</p>
          <p class="para-block__text">
          【適用規格】ISO 9001：2008，JIS Q 9001：2008<br>
          【認証取得】2007/04/06<br>
          【認証事業所】本社，東京支店，大阪支店<br>
          【認証範囲】建築金物設計・製造・販売</p>
        </li>
        <li class="item">
          <h4 class="para-block__list_tit">環境方針</h4>
          <h5 class="para-block__list_subTit mb15">基本理念</h5>
          <p class="para-block__text mb15">
            株式会社長沢製作所は、自然と共生する地球環境保全が、現在から未来への地球規模での最重要課題の一つと認識し、製品の開発・製造・販売にわたる事業活動を通じて環境負荷の軽減を推進し、地球環境保全に努めます。
          </p>
          <h5 class="para-block__list_subTit mb15">行動指針</h5>
          <ul class="content__list">
            <li class="item">環境に関連する法規制・業界団体等規制・お客様や近隣地域との協定等を順守します。</li>
            <li class="item">環境保全活動・環境汚染の予防を推進するため、ISO14001に準拠した環境マネジメントシステムを構築し、継続的に改善を行います。</li>
            <li class="item">環境保全・環境汚染予防のため省エネルギー・省資源・資源リサイクルを推進します。</li>
            <li class="item last">この環境方針を推進するため、適切な環境目的・目標を設定し、計画的かつ継続的に見直し・改善を行います。</li>
          </ul>
          <p class="para-block__text">
        【適用規格】ISO 14001：2004，JIS Q 14001：2004<br>
        【認証取得】2007/05/01<br>
        【認証事業所】本社，東京支店，大阪支店<br>
        【認証範囲】建築金物設計・製造・販売</p>


        </li>
      </ul>
      <!-- <p class="para-block__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/business/img03.jpg" height="325" width="837" alt=""></p> -->
    </div>
    
    <div class="para-block mt50">
      <h3 class="para-block__tit" id="policy" data-diff="20"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/business/subTit02.png" height="19" width="280" alt="実用性能認定制度JLMA試験所"></h3>
      <p class="para-block__text mb10">当社が加盟している日本ロック工業会（ＪＬＭＡ）は、製品の品質標準化と使用条件に対して適切な製品選択が可能となる｢実用性能認定制度｣の運用に努めています。</p>
      <p class="para-block__text mb20">2014年には、製造・販売する製品性能がＪＩＳ規格に準拠し、品質グレードを満たしているかを常に監視監督・評価が行えるよう試験所を設立し、厳しい審査を経て「製品性能試験センター」として認定承認を得ました、製品性能試験センターの運用に当たり、設備管理、試験要員の教育も強化し、安心・安全を基とした更なる高品質の安定供給に役立てております。</p>
      <p class="para-block__img" style="text-align:center !important;"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/business/img05.png" height="360" width="238" alt=""></p>
    </div>
    
  </div><!-- /.mainArea -->

  
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
  
</div><!-- /#container -->

<?php get_footer(); ?>
