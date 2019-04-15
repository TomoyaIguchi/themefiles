<?php
/*
Template Name: 製品一覧 - 古代・古代NEO
*/
?>
<?php get_header(); ?>

<div id="container">

  <div class="mainImg" id="slider">
    <p class="mainImg__main">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/mainImg01.jpg" height="380" width="950" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/mainImg02.jpg" height="380" width="950" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/mainImg03.jpg" height="380" width="950" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/mainImg04.jpg" height="380" width="950" alt="">
    </p>
    <ul class="mainImg__imgList">
      <li class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/subImg01.jpg" height="51" width="86" alt="" class="op"><span class="bg on"></span></li>
      <li class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/subImg02.jpg" alt="" class="op"><span class="bg"></span></li>
      <li class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/subImg03.jpg" alt="" class="op"><span class="bg"></span></li>
      <li class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/subImg04.jpg" alt="" class="op"><span class="bg"></span></li>
    </ul>
    <div class="mainImg__bg mainImg__bg01"></div>
    <div class="mainImg__bg mainImg__bg02"></div>
    <div class="mainImg__bg mainImg__bg03"></div>
    <div class="mainImg__bg mainImg__bg04"></div>
  </div><!-- /.mainImg -->

  <div class="titleBlock">
    <h2 class="titleBlock__tit mb30"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/tit_kodai.png" alt="kodai" height="46" width="372"></h2>
    <p class="titleBlock__text mb15">
      特殊鍍金によってもたらされる美しい色調を特長としています。<br>
      自社工場において鋳造から表面処理、組立、出荷に至るまでの全行程を担い、熟練した<br>
      マイスター達が、ひとつひとつの製品に手間を惜しまず長きに渡り大切に造り続けて来ました。
    </p>
    <p class="titleBlock__toLineUp">
      <a href="#lineup" class="link" data-diff="20"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/btn_lineup.png" height="33" width="293" alt=""></a>
    </p>
  </div><!-- /.titleBlock -->

  <div class="keywordBlock">
    <div class="keywordBlock__wrap keywordBlock__wrap_useful">
      <h3 class="keywordBlock__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/keyword_tit01.png" height="28" width="88" alt="利便性"></h3>
      <p class="keywordBlock__text"><img class="op" src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/close.png" height="37" width="233" alt="閉じる"></p>
      <div class="keywordBlock__imgWrap">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/keyword_img01.jpg" height="428" width="950" alt="">
        <span class="shadow"></span>
      </div>
      <div class="keywordBlock__list">
        <h4 class="keywordBlock__list_tit"><span class="icon iconReplace">取替・交換OK</span></h4>
        <p class="keywordBlock__list_text adjustW">
          古くなった玄関錠を取替できます。<br>
          切欠穴を隠す取替プレートがセットされていますので、<br>
          既存サムラッチからの交換が可能です。
        </p>
        <p class="keywordBlock__list_text ac">
          対象商品<br>
          <a href="<?php echo home_url(); ?>/products/kodai/neo_out/" class="under">古代NEO玄関錠</a>･<a href="<?php echo home_url(); ?>/products/kodai/k_change/" class="under">取替錠シリーズ</a>
        </p>
      </div>
      <p class="keywordBlock__tit_open"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/keyword_tit01_open.png" height="28" width="88" alt="利便性"></p>
      <p class="keywordBlock__btn_detail op"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/detail.png" height="37" width="233" alt="詳しく見る"></p>
    </div>

    <div class="keywordBlock__wrap keywordBlock__wrap_design">
      <h3 class="keywordBlock__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/keyword_tit02.png" height="28" width="124" alt="技術設計"></h3>
      <p class="keywordBlock__text"><img class="op" src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/close.png" height="37" width="233" alt="閉じる"></p>
      <div class="keywordBlock__imgWrap">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/keyword_img02.jpg" height="428" width="950" alt="">
        <span class="shadow"></span>
      </div>
      <ul class="keywordBlock__list">
        <li class="item">
          <h4 class="keywordBlock__list_tit"><span class="icon iconSafe">フェイルセーフ設計<br>閉じ込め防止機能付</span></h4>
          <p class="keywordBlock__list_text">
            CTS錠はフェイルセーフ設計。錠に過度の負荷が加えられたときや、経年劣化による錠の故障をお知らせします。万が一、錠の内部部分が破損しても安全装置が働き、通常操作で施解錠ができます。
          </p>
          <p class="keywordBlock__list_text ac adjustW">
            対象商品<br>
            <a href="<?php echo home_url(); ?>/products/kodai/k_change/" class="under">古代サムラッチケースロック取替錠</a><br>
            <a href="<?php echo home_url(); ?>/products/kodai/k_change/" class="under">古代ツーロックケースロック取替錠</a>･<a href="<?php echo home_url(); ?>/products/kodai/neo_out/" class="under">古代NEO玄関錠</a><br>
          </p>
        </li>
        <li class="item">
          <h4 class="keywordBlock__list_tit">古代特有の表面処理</h4>
          <p class="keywordBlock__list_text">
            長沢製作所の代名詞とも言われる“古代”は、特殊鍍金によってもたらされる美しい色調が特長です。
          </p>
          <!-- <p class="keywordBlock__list_text ac adjustW">
            対象商品<br>
            <a href="" class="under">全古代商品GB（ジャーマンブロンズ）</a>･<a href="" class="under">AB（アンティックプラス）</a>
          </p> -->

        </li>
      </ul>
      <p class="keywordBlock__tit_open"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/keyword_tit02_open.png" height="28" width="124" alt="技術設計"></p>
      <p class="keywordBlock__btn_detail op"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/detail.png" height="37" width="233" alt="詳しく見る"></p>
    </div>

    <div class="keywordBlock__wrap keywordBlock__wrap_safe">
      <h3 class="keywordBlock__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/keyword_tit03.png" height="28" width="119" alt="安全安心"></h3>
      <p class="keywordBlock__text"><img class="op" src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/close.png" height="37" width="233" alt="閉じる"></p>
      <div class="keywordBlock__imgWrap">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/keyword_img03.jpg" height="428" width="950" alt="">
        <span class="shadow"></span>
      </div>
      <ul class="keywordBlock__list">
        <li class="item">
          <h4 class="keywordBlock__list_tit"><span class="icon iconSafe">フェイルセーフ設計<br>閉じ込め防止機能付</span></h4>
          <p class="keywordBlock__list_text">
            フェイルセーフ設計のCTS錠は、錠内部の破損が扉から取り出さずに確認できます。ラッチボルトの赤いラインが見えたらお取替サインです。
          </p>
          <p class="keywordBlock__list_text ac adjustW">
            対象商品<br>
            <a href="<?php echo home_url(); ?>/products/kodai/k_change/" class="under">古代サムラッチケースロック取替錠</a><br>
            <a href="<?php echo home_url(); ?>/products/kodai/k_change/" class="under">古代ツーロックケースロック取替錠</a>･<a href="<?php echo home_url(); ?>/products/kodai/neo_out/" class="under">古代NEO玄関錠</a>
          </p>
        </li>
        <li class="item">
          <h4 class="keywordBlock__list_tit"><span class="icon iconBarrier">ディンブルキー</span></h4>
          <p class="keywordBlock__list_text">
            より高いセキュリティを目指して、防犯性の高いディンプルシリンダーを採用しています。
          </p>
        </li>
      </ul>
      <p class="keywordBlock__tit_open"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/keyword_tit03_open.png" height="28" width="119" alt="安全安心"></p>
      <p class="keywordBlock__btn_detail op"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/detail.png" height="37" width="233" alt="詳しく見る"></p>
    </div>

  </div><!-- /.keywordBlock -->



  <div class="mainArea">

    <div class="pageTit">
      <h3 class="pageTit__tit" id="lineup"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/tit_lineup.png" height="48" width="192" alt="製品ラインナップ LINE UP"></h3>
      <p class="para">
        製品毎に様々な機能・特長があります。<br>
        下記一覧より、お客様のニーズにあった製品をご確認ください。
      </p>
    </div>

    <ul class='lineupBlock'>
      <li class="item">
        <a href="<?php echo home_url(); ?>/products/kodai/neo_out/" class="op">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/img_kodaiGenkan.jpg" height="200" width="276" alt="" class="lineupBlock__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/tit_kodaiGenkan.png" height="50" width="276" alt="キーレックス4000" class="lineupBlock__img_tit">
        </a>
        <p class="lineupBlock__text">
          アールヌーボー・アールデコがモチーフとなっている古代NEO 玄関錠。近代デザインの先駆となった装飾様式を現代の感覚でアレンジしました。
        </p>
        <ul class="lineupBlock__supply">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_material_zinc.png" height="53" width="90" alt=""></li>
        </ul>
        <ul class="lineupBlock__icon">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon01.png" height="42" width="42" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon02.png" height="42" width="42" alt=""></li>
        </ul>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/products/kodai/neo_in/" class="op">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/img_kodaiSitsunai.jpg" height="200" width="276" alt="" class="lineupBlock__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/tit_kodaiSitsunai.png" height="50" width="276" alt="キーレックス2100" class="lineupBlock__img_tit">
        </a>
        <p class="lineupBlock__text">
          アールヌーボー・アールデコのデザインを取り入れた古代NEO 室内錠。他にはない装飾性で、空間に優雅さと深みを与えます。
        </p>
        <ul class="lineupBlock__supply">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_material_zinc.png" height="53" width="90" alt=""></li>
        </ul>
        <ul class="lineupBlock__icon">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon03.png" height="42" width="42" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon04.png" height="42" width="42" alt=""></li>
        </ul>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/products/kodai/k_change/" class="op">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/img_kodaiTorikae.jpg" height="200" width="276" alt="" class="lineupBlock__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/tit_kodaiTorikae.png" height="50" width="276" alt="キーレックス1100" class="lineupBlock__img_tit">
        </a>
        <p class="lineupBlock__text">
          古くなった玄関錠を取替できます。切欠穴を隠す取替プレートがセットされていますので、既存サムラッチからの交換が可能です。フェイルセーフ機能がついたCTS錠にも対応し、より安全安心になっています。
        </p>
        <ul class="lineupBlock__supply">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_material_zinc.png" height="53" width="90" alt=""></li>
        </ul>
        <ul class="lineupBlock__icon">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon01.png" height="42" width="42" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon02.png" height="42" width="42" alt=""></li>
        </ul>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/products/kodai/k_out/" class="op">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/img_kodaiSoushokuGe.jpg" height="200" width="276" alt="" class="lineupBlock__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/tit_kodaiSoushokuGe.png" height="50" width="276" alt="キーレックス800" class="lineupBlock__img_tit">
        </a>
        <p class="lineupBlock__text">
          繊細で優雅な彫刻による装飾と、特殊鍍金によってもたらされる美しい色調が特徴です。
        </p>
        <ul class="lineupBlock__supply">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_material_zinc.png" height="53" width="90" alt=""></li>
        </ul>
        <ul class="lineupBlock__icon">
        </ul>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/products/kodai/k_mono/" class="op">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/img_kodaiSoushokuKu.jpg" height="200" width="276" alt="" class="lineupBlock__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/tit_kodaiSoushokuKu.png" height="50" width="276" alt="キーレックス700" class="lineupBlock__img_tit">
        </a>
        <p class="lineupBlock__text">
          室内用に、装飾玄関錠と統一感をもたらします。
        </p>
        <ul class="lineupBlock__supply">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_material_zinc.png" height="53" width="90" alt=""></li>
        </ul>
        <ul class="lineupBlock__icon">
        </ul>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/products/kodai/k_lock/" class="op">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/img_kodaiSoushokuHo.jpg" height="200" width="276" alt="" class="lineupBlock__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/tit_kodaiSoushokuHo.png" height="50" width="276" alt="キーレックス500" class="lineupBlock__img_tit">
        </a>
        <p class="lineupBlock__text">
          装飾空錠と組み合わせて使用できる本締錠です。
        </p>
        <ul class="lineupBlock__supply">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_material_zinc.png" height="53" width="90" alt=""></li>
        </ul>
        <ul class="lineupBlock__icon">
        </ul>
      </li>
    </ul>
      
    <div class="pageTit pageTit__others">
      <h3 class="pageTit__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/tit_others.png" height="48" width="217" alt=""></h3>
      <p class="para"></p>
    </div>

    <ul class="othersBlock lineupBlock">
      <li class="item">
        <a href="<?php echo home_url(); ?>/products/kodai/k_parts/" class="op">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/img_kodaiParts.jpg" height="200" width="276" alt="" class="lineupBlock__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/kodai/tit_kodaiParts.png" height="50" width="276" alt="パーツ(錠・受座・他)" class="lineupBlock__img_tit">
        </a>
        <p class="lineupBlock__text">
          メンテナンス・交換用の部品です。
        </p>
      </li>
    </ul>      

    <ul class="iconBlock">
      <li class="item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon01.png" height="42" width="42" alt="取替OK" class="left">
        <p class="right">今取り付けてあるドアノブ・円筒錠・錠（ラッチ）・玄関錠から取替・交換ができる製品です。</p>
      </li>
      <li class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon02.png" height="42" width="42" alt="フェイルセーフ" class="left">
        <p class="right">閉じ込め防止機能付。異常がおこると、安全側に機能するフェイルセーフ設計を取り入れた製品です。</p>
      </li>
      <li class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon03.png" height="42" width="42" alt="ワンタッチ方式 レバーハンドル" class="left">
        <p class="right">レバーの取り付けは差し込み押さえるだけで取付OK。固定ねじ不要で、ガタつきなく、誰でも簡単に固定できます。</p>
      </li>
      <li class="item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon04.png" height="42" width="42" alt="バリアフリー" class="left">
        <p class="right">ユニバーサルデザイン仕上げの製品は、お使いいただいてこそわかる使いやすさです。</p>
      </li>
      <li class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon05.png" height="42" width="42" alt="鍵なし" class="left">
        <p class="right">キーレックス本体に鍵（キー）がつかないタイプです。キーレックスのスタンダードタイプです。</p>
      </li>
      <li class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon06.png" height="42" width="42" alt="鍵つき" class="left">
        <p class="right">キーレックス本体に鍵（キー）がついたタイプです。鍵（キー）操作時は記憶番号を押さずに解錠できます。</p>
      </li>
      <li class="item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon07.png" height="42" width="42" alt="デッド" class="left">
        <p class="right">キーレックス本体のボタン操作を不能にし、鍵（キー）操作のみで解錠できる機能です。</p>
      </li>
      <li class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon08.png" height="42" width="42" alt="両面" class="left">
        <p class="right">キーレックスで外部、内部の両面がボタン錠のタイプです。別々の番号を記憶させられるので内外ともに施解錠を制限したい場所に最適です。</p>
      </li>
      <li class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon09.png" height="42" width="42" alt="カバー" class="left">
        <p class="right">キーレックス本体に取り付けできるカバー（別売）です。屋外での使用におすすめです。</p>
      </li>
    </ul>      

    <div class="pageTit">
      <h3 class="pageTit__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/support/tit.png" height="47" width="90" alt="サポート SUPPORT"></h3>
    </div>
    <ul class="mainArea__block mainArea__block_support">
      <li class="item">
        <a href="<?php echo home_url(); ?>/support/faq/" class="linkArea">
        <div class="item__inner">
        <p class="item__thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/support_qa.png" height="162" width="162" alt=""></p>
        <p class="item__tit"><span class="list-type-arrow link">よくあるご質問</span></p>
        </div>
        </a>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/support/trouble/" class="linkArea">
        <div class="item__inner">
        <p class="item__thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/support_trouble.png" height="164" width="162" alt=""></p>
        <p class="item__tit"><span class="list-type-arrow link">困ったときは</span></p>
        </div>
        </a>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/support/info/" class="linkArea">
        <div class="item__inner">
        <p class="item__thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/support_info.png" height="162" width="162" alt=""></p>
        <p class="item__tit"><span class="list-type-arrow link">廃番品/取替商品情報</span></p>
        </div>
        </a>
      </li>
    </ul>

  </div><!-- /.mainArea -->
  
</div><!-- /#container -->

<?php get_footer(); ?>
