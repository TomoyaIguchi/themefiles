<?php
/*
Template Name: 製品一覧 - レバーハンドル
*/
?>
<?php get_header(); ?>

<div id="container">

  <div class="mainImg" id="slider">
    <p class="mainImg__main">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/mainImg01.jpg" height="380" width="950" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/mainImg02.jpg" height="380" width="950" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/mainImg03.jpg" height="380" width="950" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/mainImg04.jpg" height="380" width="950" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/mainImg05.jpg" height="380" width="950" alt="">
    </p>
    <ul class="mainImg__imgList">
      <li class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/subImg01.jpg" height="51" width="86" alt="" class="op"><span class="bg on"></span></li>
      <li class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/subImg02.jpg" alt="" class="op" width="86" height="51"><span class="bg"></span></li>
      <li class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/subImg03.jpg" alt="" class="op" width="86" height="51"><span class="bg"></span></li>
      <li class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/subImg04.jpg" alt="" class="op" width="86" height="51"><span class="bg"></span></li>
      <li class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/subImg05.jpg" alt="" class="op" width="86" height="51"><span class="bg"></span></li>
    </ul>
    <div class="mainImg__bg mainImg__bg01"></div>
    <div class="mainImg__bg mainImg__bg02"></div>
    <div class="mainImg__bg mainImg__bg03"></div>
    <div class="mainImg__bg mainImg__bg04"></div>
    <div class="mainImg__bg mainImg__bg05"></div>
  </div><!-- /.mainImg -->

  <div class="titleBlock">
    <h2 class="titleBlock__tit mb30"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/tit_handle.png" alt="handle" height="30" width="220"></h2>
    <p class="titleBlock__text mb15">
      新規取り付けはもちろん、交換にも対応し、癒しやユニバーサルデザインにも配慮した豊富なバリエーション。<br>組み合わせる錠は、耐久性に優れた箱錠と、取り付けが簡単なチューブラ錠。<br>
      閉じ込め事故を防ぐフェイルセーフ設計を取り入れた錠と座のロック機構は、安全安心を多方面から支えます。 
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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/keyword_img01.jpg" height="428" width="950" alt="">
        <span class="shadow"></span>
      </div>
      <div class="keywordBlock__list">
        <h4 class="keywordBlock__list_tit"><span class="icon iconReplace">取替・交換OK</span></h4>
        <p>今取り付けてあるドアノブ・円筒状・錠（ラッチ）から交換できる商品があります。</p>
        <p>お取り換えの場合（対象商品：&nbsp;<a href="<?php echo home_url(); ?>/products/handle/tomfu/" class="under">TOMFU</a>・<a href="<?php echo home_url(); ?>/products/handle/wannyan/" class="under">わんにゃん</a>・<a href="<?php echo home_url(); ?>/products/handle/re/" class="under">re</a>）</p>
      </div>
      <p class="keywordBlock__tit_open"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/keyword_tit01_open.png" height="28" width="88" alt="利便性"></p>
      <p class="keywordBlock__btn_detail op"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/detail.png" height="37" width="233" alt="詳しく見る"></p>
    </div>

    <div class="keywordBlock__wrap keywordBlock__wrap_design">
      <h3 class="keywordBlock__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/keyword_tit02.png" height="28" width="124" alt="技術設計"></h3>
      <p class="keywordBlock__text"><img class="op" src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/close.png" height="37" width="233" alt="閉じる"></p>
      <div class="keywordBlock__imgWrap">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/keyword_img02.jpg" height="428" width="950" alt="">
        <span class="shadow"></span>
      </div>
      <ul class="keywordBlock__list">
        <li class="item">
          <h4 class="keywordBlock__list_tit"><span class="icon iconSafe">フェイルセーフ設計<br>閉じ込め防止機能付</span></h4>
          <p class="keywordBlock__list_text">
            一般に室内用チューブラ錠は同じ室内用箱錠と比較すると耐久性が劣るといわれています。そこで錠に異常がおこると、安全に機能するフェイルセーフ設計をチューブラ錠に取り入れました。<br>
            詳しくはこちら → <a href="https://www.youtube.com/watch?v=OlCkSZKGV6I" class="under" target="_blank">TXS錠ムービー</a>（外部サイトへ遷移します）
          </p>

        </li>
        <li class="item">
          <h4 class="keywordBlock__list_tit"><span class="icon iconTouch">ワンタッチレバー</span></h4>
          <p class="keywordBlock__list_text">
            固定ねじ不要。レバーを角芯棒に差し込むだけで取付OK。<br>
            レバー作動時のガタツキもありません。取り外しは、マイナスドライバーで簡単に。<br>
            詳しくはこちら → <a href="https://www.youtube.com/watch?v=RgrB5009wig" class="under" target="_blank">TOMFUムービー</a>（外部サイトへ遷移します）
          </p>

        </li>
      </ul>
      <p class="keywordBlock__tit_open"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/keyword_tit02_open.png" height="28" width="124" alt="技術設計"></p>
      <p class="keywordBlock__btn_detail op"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/detail.png" height="37" width="233" alt="詳しく見る"></p>
    </div>

    <div class="keywordBlock__wrap keywordBlock__wrap_safe">
      <h3 class="keywordBlock__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/keyword_tit03.png" height="28" width="119" alt="安全安心"></h3>
      <p class="keywordBlock__text"><img class="op" src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/close.png" height="37" width="233" alt="閉じる"></p>
      <div class="keywordBlock__imgWrap">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/keyword_img03.jpg" height="428" width="950" alt="">
        <span class="shadow"></span>
      </div>
      <ul class="keywordBlock__list">
        <li class="item">
          <h4 class="keywordBlock__list_tit"><span class="icon iconSafe">閉じ込め事故防止機能</span></h4>
          <p class="keywordBlock__list_text pb45">
            万が一、錠が破損してもラッチボルトが引き込まれたまま固定されます。扉が開かなくなるなどの重大事故を防ぐので安心です。ラッチボルトが引き込まれたままになったら交換のサインです。<br>
            詳しくはこちら→<a href="https://www.youtube.com/watch?v=OlCkSZKGV6I" class="under" target="_blank">TXS錠ムービー</a>（外部サイトへ遷移します）
          </p>
          <p class="keywordBlock__list_text ac adjustW">
            対象商品<br>
            <a href="<?php echo home_url(); ?>/products/handle/tomfu/" class="under">TOMFU</a>･<a href="<?php echo home_url(); ?>/products/handle/wannyan/" class="under">わんにゃん</a><br>
            <a href="<?php echo home_url(); ?>/products/handle/re/" class="under">re</a>･<a href="<?php echo home_url(); ?>/products/handle/fm/" class="under">FM</a>･<a href="<?php echo home_url(); ?>/products/handle/rocaille/" class="under">ROCALLEⅡ</a>･<a href="<?php echo home_url(); ?>/products/handle/gm/" class="under">GM</a>･<a href="<?php echo home_url(); ?>/products/handle/palm/" class="under">Palm</a><br>
          </p>
        </li>
        <li class="item">
          <h4 class="keywordBlock__list_tit"><span class="icon iconBarrier">バリアフリー</span></h4>
          <p class="keywordBlock__list_text">
            ショートストローク・LG錠はレバーの操作角度が10度。<br>「手を添えるただけ」の感覚で扉を開けられます。
          </p>
          <p class="keywordBlock__list_text ac">
            対象商品<br>
            <a href="<?php echo home_url(); ?>/products/handle/nexes/" class="under">NEXES</a>･<a href="<?php echo home_url(); ?>/products/kodai/neo_in/" class="under">古代NEO 室内錠</a>
          </p>
        </li>
        <li class="item">
          <h4 class="keywordBlock__list_tit">ユニバーサルデザイン</h4>
          <p class="keywordBlock__list_text">
            従来の商品よりも大きな表示窓とサムターンツマミ。<br>施解錠状態の確認や鍵の開け閉めが容易なので、どなたにも使いやすい設計になっています。
          </p>
          <p class="keywordBlock__list_text ac">
            対象商品<br>
            <a href="<?php echo home_url(); ?>/products/handle/tomfu/" class="under">TOMFU（R･N座に採用）</a>
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
        下記一覧より、お客様のニーズにあったレバーハンドル製品をご確認ください。
      </p>
    </div>

    <ul class='lineupBlock productBlock'>
      <li class="item">
        <a href="<?php echo home_url(); ?>/products/handle/tomfu/" class="op">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/img_handleTOMFU.jpg" height="200" width="276" alt="" class="lineupBlock__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/tit_handleTOMFU.png" height="50" width="276" alt="キーレックス4000" class="lineupBlock__img_tit">
        </a>
        <p class="lineupBlock__text">
          5つの機能を搭載した、取替レバーハンドル。特大座はほとんどの既存金物の取付穴、日焼け跡まで隠せる大きさで、幅広い交換に対応できる商品です。
        </p>
        <ul class="lineupBlock__supply">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_material_zinc.png" height="53" width="90" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_30_40.png" height="53" width="90" alt=""></li>
        </ul>
        <ul class="lineupBlock__icon">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon01.png" height="42" width="42" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon02.png" height="42" width="42" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon03.png" height="42" width="42" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon04.png" height="42" width="42" alt=""></li>
        </ul>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/products/handle/nexesflat/" class="op">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/img_handleNEXESflat.jpg" height="200" width="276" alt="" class="lineupBlock__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/tit_handleNEXESflat.png" height="50" width="276" alt="NEXESフラットレバー" class="lineupBlock__img_tit">
        </a>
        <p class="lineupBlock__text">
          レバーの出っ張りによる事故を軽減し、大きな荷物の出し入れ時にスペースを確保できる可動式レバーハンドルです。
        </p>
        <ul class="lineupBlock__supply">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_material_zinc.png" height="53" width="90" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_33.png" height="53" width="90" alt="標準扉厚：33mm（特注扉厚 30mm／36mm）"></li>
        </ul>
        <ul class="lineupBlock__icon">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon02.png" height="42" width="42" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon04.png" height="42" width="42" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon10.png" height="42" width="42" alt=""></li>
        </ul>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/products/handle/wannyan/" class="op">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/img_handleWannyan.jpg" height="200" width="276" alt="" class="lineupBlock__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/tit_handleWannyan.png" height="50" width="276" alt="キーレックス1100" class="lineupBlock__img_tit">
        </a>
        <p class="lineupBlock__text">
          犬と猫の尻尾がレバーハンドルになったわんにゃん。バックセット違いに対応できる2サイズ展開で、円筒錠（ドアノブ）からの交換も可能です。
        </p>
        <ul class="lineupBlock__supply">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_material_zinc.png" height="53" width="90" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_30_36.png" height="53" width="90" alt=""></li>
        </ul>
        <ul class="lineupBlock__icon">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon01.png" height="42" width="42" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon02.png" height="42" width="42" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon03.png" height="42" width="42" alt=""></li>
        </ul>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/products/handle/re/" class="op">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/img_handleRe.jpg" height="200" width="276" alt="" class="lineupBlock__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/tit_handleRe.png" height="50" width="276" alt="キーレックス800" class="lineupBlock__img_tit">
        </a>
        <p class="lineupBlock__text">
          円筒錠（ドアノブ）からの取替に最適なre。座とレバーのヘアライン仕上げは取替用レバーでは唯一です。
        </p>
        <ul class="lineupBlock__supply">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_material_zinc.png" height="53" width="90" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_30_40.png" height="53" width="90" alt=""></li>
        </ul>
        <ul class="lineupBlock__icon">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon01.png" height="42" width="42" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon02.png" height="42" width="42" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon03.png" height="42" width="42" alt=""></li>
        </ul>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/products/handle/fm/" class="op">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/img_handleFM.jpg" height="200" width="276" alt="" class="lineupBlock__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/tit_handleFM.png" height="50" width="276" alt="キーレックス700" class="lineupBlock__img_tit">
        </a>
        <p class="lineupBlock__text">
          ブナ天然木を使用した木製レバーと鏡面仕上の金属部が調和したFM。対応する座も、丸座・小判座・W 座を設定し、欲しい一品を探せます。
        </p>
        <ul class="lineupBlock__supply">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_material_zinc.png" height="53" width="90" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_30_36.png" height="53" width="90" alt=""></li>
        </ul>
        <ul class="lineupBlock__icon">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon02.png" height="42" width="42" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon03.png" height="42" width="42" alt=""></li>
        </ul>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/products/handle/rocaille/" class="op">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/img_handleRocaille.jpg" height="200" width="276" alt="" class="lineupBlock__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/tit_handleRocaille.png" height="50" width="276" alt="キーレックス500" class="lineupBlock__img_tit">
        </a>
        <p class="lineupBlock__text">
          レバーの曲線が印象的なロカイユⅡは貝殻からオマージュ。上品さをさらに引き立たせる鏡面仕上げです。
        </p>
        <ul class="lineupBlock__supply">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_16384.png" height="53" width="90" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_30_36.png" height="53" width="90" alt=""></li>
        </ul>
        <ul class="lineupBlock__icon">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon02.png" height="42" width="42" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon03.png" height="42" width="42" alt=""></li>
        </ul>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/products/handle/gm/" class="op">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/img_handleGM.jpg" height="200" width="276" alt="" class="lineupBlock__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/tit_handleGM.png" height="50" width="276" alt="キーレックス047" class="lineupBlock__img_tit">
        </a>
        <p class="lineupBlock__text">
          ヘアライン仕上げのGM。長沢製作所のスタンダード仕様です。
        </p>
        <ul class="lineupBlock__supply">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_material_zinc.png" height="53" width="90" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_30_36.png" height="53" width="90" alt=""></li>
        </ul>
        <ul class="lineupBlock__icon">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon02.png" height="42" width="42" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon10.png" height="42" width="42" alt=""></li>
        </ul>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/products/handle/palm/" class="op">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/img_handlePalm.jpg" height="200" width="276" alt="" class="lineupBlock__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/tit_handlePalm.png" height="50" width="276" alt="キーレックス047" class="lineupBlock__img_tit">
        </a>
        <p class="lineupBlock__text">
          ￼抗菌剤入の特殊塗料仕上により、レバーに抗菌効果を持たせています。(MS・ MU・MG)
        </p>
        <ul class="lineupBlock__supply">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_material_zinc.png" height="53" width="90" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_28_36.png" height="53" width="90" alt=""></li>
        </ul>
        <ul class="lineupBlock__icon">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon02.png" height="42" width="42" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon10.png" height="42" width="42" alt=""></li>
        </ul>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/products/handle/nexes/" class="op">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/img_handleNexes.jpg" height="200" width="276" alt="" class="lineupBlock__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/tit_handleNexes.png" height="50" width="276" alt="他社製品取替" class="lineupBlock__img_tit">
        </a>
        <p class="lineupBlock__text">
          操作角度わずか10 度のUD ストロークは、『手を添えればあけられる』ほどやさしいハンドルです。クロムフリー対応商品で環境にもやさしい商品です。
        </p>
        <ul class="lineupBlock__supply">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_material_zinc.png" height="53" width="90" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_30_40.png" height="53" width="90" alt=""></li>
        </ul>
        <ul class="lineupBlock__icon">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon04.png" height="42" width="42" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon03.png" height="42" width="42" alt=""></li>
        </ul>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/products/kodai/neo_in/" class="op">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/img_handleKodai.jpg" height="200" width="276" alt="" class="lineupBlock__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/tit_handleKodai.png" height="50" width="276" alt="古代NEO 室内錠" class="lineupBlock__img_tit">
        </a>
        <p class="lineupBlock__text">
          植物の蔓からデザインされたアールヌーボータイプと、幾何学模様をアレンジしたアールデコタイプ。
        </p>
        <ul class="lineupBlock__supply">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_material_zinc.png" height="53" width="90" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_30_40.png" height="53" width="90" alt=""></li>
        </ul>
        <ul class="lineupBlock__icon">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon03.png" height="42" width="42" alt=""></li>
        </ul>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/products/handle/riviere/" class="op">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/img_handleRiviere.jpg" height="200" width="276" alt="" class="lineupBlock__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/tit_handleRiviere.png" height="50" width="276" alt="キーレックス047" class="lineupBlock__img_tit">
        </a>
        <p class="lineupBlock__text">
          レバーハンドルは5タイプのカラーバリエーションで、インテリアに応じたカラーコーディネイトが可能です。
        </p>
        <ul class="lineupBlock__supply">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_material_zinc.png" height="53" width="90" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_30_40.png" height="53" width="90" alt=""></li>
        </ul>
        <ul class="lineupBlock__icon">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon03.png" height="42" width="42" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon10.png" height="42" width="42" alt=""></li>
        </ul>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/products/handle/cjknexes/" class="op">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/img_handlecjkNEXES.jpg" height="200" width="276" alt="" class="lineupBlock__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/tit_handlecjkNEXES.png" height="50" width="276" alt="CJK NEXES" class="lineupBlock__img_tit">
        </a>
        <p class="lineupBlock__text">
          ネクセスシリーズのCJK対応部材です。長住協共通仕様に、長沢独自の機能を追加しています。
        </p>
        <ul class="lineupBlock__supply">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_material_zinc.png" height="53" width="90" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/label_30_40.png" height="53" width="90" alt=""></li>
        </ul>
        <ul class="lineupBlock__icon">
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon02.png" height="42" width="42" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon03.png" height="42" width="42" alt=""></li>
          <li class="sub_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon04.png" height="42" width="42" alt=""></li>
        </ul>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/products/handle/l_lock/" class="op">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/img_handleHonjime.jpg" height="200" width="276" alt="" class="lineupBlock__img" style="padding-bottom:30px;">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/tit_handleHonjime.png" height="50" width="276" alt="引戸対応" class="lineupBlock__img_tit">
        </a>
        <p class="lineupBlock__text">
          各種レバーハンドルと組み合わせて使用できる本締錠です。
        </p>
        <ul class="lineupBlock__supply">
        </ul>
        <ul class="lineupBlock__icon">
        </ul>
      </li>
      <li class="item">
        <a href="<?php echo home_url(); ?>/products/handle/l_slide/" class="op">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/img_handleHikido.jpg" height="230" width="276" alt="" class="lineupBlock__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/tit_handleHikido.png" height="50" width="276" alt="他社製品取替" class="lineupBlock__img_tit">
        </a>
        <p class="lineupBlock__text">
          引戸に取付られます。
        </p>
        <ul class="lineupBlock__supply">
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
        <a href="<?php echo home_url(); ?>/products/handle/l_parts/" class="op">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/img_handleParts.jpg" height="200" width="276" alt="" class="lineupBlock__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/handle/tit_handleParts.png" height="50" width="276" alt="パーツ(錠・受座・他)" class="lineupBlock__img_tit">
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
      <li class="item" style="height: 67px;">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon07.png" height="42" width="42" alt="デッド" class="left">
        <p class="right">キーレックス本体のボタン操作を不能にし、鍵（キー）操作のみで解錠できる機能です。</p>
      </li>
      <li class="item" style="height: 67px;">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon08.png" height="42" width="42" alt="両面" class="left">
        <p class="right">キーレックスで外部、内部の両面がボタン錠のタイプです。別々の番号を記憶させられるので内外ともに施解錠を制限したい場所に最適です。</p>
      </li>
      <li class="item" style="height: 67px;">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon09.png" height="42" width="42" alt="カバー" class="left">
        <p class="right">キーレックス本体に取り付けできるカバー（別売）です。屋外での使用におすすめです。</p>
      </li>
      <li class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/keylex/icon10.png" height="42" width="42" alt="ねじ固定レバー" class="left">
        <p class="right">ねじで固定するレバーハンドルです。</p>
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
