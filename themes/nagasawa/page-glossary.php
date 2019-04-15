<?php
/*
Template Name: 用語集
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
    <h2 class="pageTit__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/<?php echo $slug ?>/tit.png" alt="<?php the_title(); ?>"></h2>
  </div>

  <div class="mainArea">

  <form>
  <ul class="search">
    <li class="item item__input"><input type="text" id="js-formText"></li>
    <li class="item item__submit"><input type="image" src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/btn_search.png" alt="用語検索" class="op"></li>
  </ul>
  </form>

  <ul class="index">
  <!-- off-->
    <li class="item"><a href="#A" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/a_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#I" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/i_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#U" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/u_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#E" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/e_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#O" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/o_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#KA" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/ka_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#KI" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/ki_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#KU" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/ku_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#KE" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/ke_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#KO" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/ko_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#SA" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/sa_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#SI" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/si_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#SU" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/su_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#SE" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/se_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#SO" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/so_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#TA" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/ta_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#TI" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/ti_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#TU" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/tu_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#TE" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/te_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#TO" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/to_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#NA" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/na_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#NI" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/ni_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#NU" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/nu_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#NE" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/ne_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#NO" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/no_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#HA" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/ha_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#HI" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/hi_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#HU" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/hu_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#HE" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/he_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#HO" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/ho_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#MA" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/ma_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#MI" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/mi_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#MU" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/mu_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#ME" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/me_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#MO" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/mo_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#YA" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/ya_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#YU" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/yu_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#YO" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/yo_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#RA" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/ra_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#RI" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/ri_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#RU" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/ru_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#RE" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/re_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#RO" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/ro_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#WA" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/wa_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#WO" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/wo_off.png" class="notRoll" alt=""></a></li>
    <li class="item"><a href="#N" data-diff="20" ><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/nn_off.png" class="notRoll" alt=""></a></li>
  </ul>

  <ul class="indexList">
    <li class="item" id="A">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/A.png" alt=""></h3>
      <ul class="mainArea__list">
        <li class="sub_item">アールフロント
          <div class="explainBox">
            <h4 class="explainBox__tit">アールフロント</h4>
            <p class="explainBox__text">
              錠の部品で、四隅がR形状になっているフロン板のことです。標準は四隅が角形状となっています。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure4.jpg"></div>
          </div>
        </li>
      </ul>
    </li>

    <li class="item" id="I">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/I.png" alt=""></h3>
      <ul class="mainArea__list">
        <li class="sub_item">インテグラロック
          <div class="explainBox">
            <h4 class="explainBox__tit">インテグラロック</h4>
            <p class="explainBox__text">
              ノブの中にビンタンブラーまたはディスクタンブラーのシリンダーを収めた錠で、ラッチボルトとデッドボルトの両方をもったもの。上の本体は彫込錠と同じ箱型で、外観は円筒錠と類似しています。
            </p>
            <div style="width:400;height:400;background-color:#000000;"></div>
          </div>
        </li>
      </ul>
    </li>
    <li class="item" id="U">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/U.png" alt=""></h3>
      <ul class="mainArea__list">
        <li class="sub_item">受座（受け座）
          <div class="explainBox">
            <h4 class="explainBox__tit">受座（受け座）</h4>
            <p class="explainBox__text">
              ラッチボルト（デッドボルト）を受け入れる孔がある箱状の金具のことです。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure1.jpg"></div>
          </div>
        </li>
        <li class="sub_item">受箱（うけばこ）
          <div class="explainBox">
            <h4 class="explainBox__tit">受箱（うけばこ）</h4>
            <p class="explainBox__text">
              枠側に取り付けられる箱状の金具のことです。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure3.jpg"></div>
          </div>
        </li>
        <li class="sub_item">内開き扉
          <div class="explainBox">
            <h4 class="explainBox__tit">内開き扉（うちびらきとびら）</h4>
            <p class="explainBox__text">
              室内側に開く扉のことです。
            </p>
          </div>
        </li>
      </ul>
    </li>
    <li class="item" id="E">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/E.png" alt=""></h3>
      <ul class="mainArea__list">
        <li class="sub_item">エアタイト
          <div class="explainBox">
            <h4 class="explainBox__tit">エアタイト</h4>
            <p class="explainBox__text">
              気密性や防水性を高めるためにゴムパッキンが取り付けられている扉のことです。
            </p>
          </div>
        </li>
      </ul>
    </li>
    <li class="item" id="O">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/O.png" alt=""></h3>
      <ul class="mainArea__list">
        <li class="sub_item">
          親子扉（おやことびら）
          <div class="explainBox">
            <h4 class="explainBox__tit">親子扉（おやことびら）</h4>
            <p class="explainBox__text">
              大きなサイズの親扉と、小さなサイズの小扉の組合わせで、観音開きにした扉のことです。
            </p>
          </div>
        </li>
      </ul>
    </li>
    <li class="item" id="KA">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/KA.png" alt=""></h3>
      <ul class="mainArea__list">
        <li class="sub_item">ガードフロント
          <div class="explainBox">
            <h4 class="explainBox__tit">ガードフロント</h4>
            <p class="explainBox__text">
              扉と枠の隙間からデッドボルトやラッチボルトが見えないように取付ける保護板のことです。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure5.jpg"></div>
          </div>
        </li>
        <li class="sub_item">解錠（かいじょう）
          <div class="explainBox">
            <h4 class="explainBox__tit">解錠（かいじょう）</h4>
            <p class="explainBox__text">
              鍵をあけることです。
            </p>
          </div>
        </li>
        <li class="sub_item">鍵付（かぎつき）
          <div class="explainBox">
            <h4 class="explainBox__tit">鍵付（かぎつき）</h4>
            <p class="explainBox__text">
              キーレックスでは、キーでも解錠ができるように、キーレックス本体にシリンダーが組込まれているタイプ（キー２本付）をいいます。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure1.jpg"></div>
          </div>
        </li>

        <li class="sub_item">角芯棒（かくしんぼう）
          <div class="explainBox">
            <h4 class="explainBox__tit">角芯棒（かくしんぼう）</h4>
            <p class="explainBox__text">
              キーレックス本体についている角状の棒で、錠に通してラッチボルトを作動させます。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure1.jpg"></div>
          </div>
        </li>
        <li class="sub_item">角座
          <div class="explainBox">
            <h4 class="explainBox__tit">角座</h4>
            <p class="explainBox__text">
              扉の表面に取付ける角型のプレートのことです。
            </p>
          </div>
        </li>
        <li class="sub_item">勝手（かって）
          <div class="explainBox">
            <h4 class="explainBox__tit">勝手（かって）</h4>
            <p class="explainBox__text">
              キーレックスでは引き戸の開く向きを説明するときに使います。室外側から戸に向かい、戸袋が右にある場合を右勝手と呼びます。
            </p>
          </div>
        </li>
        <li class="sub_item">框扉（かまちとびら）
          <div class="explainBox">
            <h4 class="explainBox__tit">框扉（かまちとびら）</h4>
            <p class="explainBox__text">
              框にガラス、鋼製やアルミニウム合金パネルなどをはめ込んだ扉のことです。
            </p>
          </div>
        </li>

        <li class="sub_item">
          框扉対応玉座
          <div class="explainBox">
            <h4 class="explainBox__tit">框扉対応玉座（かまちとびらたいおうたまざ）</h4>
            <p class="explainBox__text">インテグラルロックのことです。</p>
          </div>
        </li>

        <li class="sub_item">
          カム送り
          <div class="explainBox">
            <h4 class="explainBox__tit">カム送り</h4>
            <p class="explainBox__text">特殊な工具を使用し、キーがなくても解錠できる方法のことです。</p>
          </div>
        </li>
      </ul>
    </li>

    <li class="item" id="KI">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/KI.png" alt=""></h3>
      <ul class="mainArea__list">
        <li class="sub_item">
          切欠穴
          <div class="explainBox">
            <h4 class="explainBox__tit">切欠穴（きりかきあな）</h4>
            <p class="explainBox__text">キーレックスを扉に取り付けるために、扉にあけられた穴をいいます。</p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure1.jpg"></div>
          </div>
        </li>

        <li class="sub_item">
          切欠図
          <div class="explainBox">
            <h4 class="explainBox__tit">切欠図（きりかきず）</h4>
            <p class="explainBox__text">キーレックスを扉に取り付けるための穴加工図面です。</p>
          </div>
        </li>
      </ul>
    </li>


    <li class="item" id="KU">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/KU.png" alt=""></h3>
      <ul class="mainArea__list">
        <li class="sub_item">
          空錠
          <div class="explainBox">
            <h4 class="explainBox__tit">空錠</h4>
            <p class="explainBox__text">レバーまたはノブなどと、ラッチボルトだけを備えた錠のことです。施錠機能はありません。</p>
          </div>
        </li>

        <li class="sub_item">
          空錠切替機能
          <div class="explainBox">
            <h4 class="explainBox__tit">空錠切替機能（くうじょう・そらじょうきりかえきのう）</h4>
            <p class="explainBox__text">キーレックスで、記憶番号を押さずに扉を開けることができる機能のことです。</p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure2.jpg"></div>
          </div>
        </li>

        <li class="sub_item">
          空転装置
          <div class="explainBox">
            <h4 class="explainBox__tit">空転装置（くうてんそうち）</h4>
            <p class="explainBox__text">
                キーレックスをノブ・レバーハンドルで無理にあけようとすると、ノブ・レバーハンドルだけが力をかけた方向に回るように作られています。この安全機能が空転装置です。無理な力をノブ・レバーハンドルで食い止める（逃がす）ことで、キーレックス本体・錠の破壊を防ぎます。
            </p>
          </div>
        </li>
      </ul>
    </li>
    <li class="item" id="KE">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/KE.png" alt=""></h3>

      <ul class="mainArea__list">

        <li class="sub_item">
            玄関錠
            <div class="explainBox">
                <h4 class="explainBox__tit">玄関錠</h4>
                <p class="explainBox__text">
                    住宅の玄関に使用される錠の総称です。
                </p>
            </div>
        </li>

        <li class="sub_item">
          ケースロック錠
          <div class="explainBox">
            <h4 class="explainBox__tit">ケースロック錠</h4>
            <p class="explainBox__text">
                デッドボルト、ラッチボルトを操作し施解錠ができる錠のことです。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure5.jpg"></div>
          </div>
        </li>

      </ul>
    </li>

    <li class="item" id="KO">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/KO.png" alt=""></h3>
            <ul class="mainArea__list">

              <li class="sub_item">
                  小判座
                  <div class="explainBox">
                      <h4 class="explainBox__tit">小判座</h4>
                      <p class="explainBox__text">
                          扉の表面に取付ける小判型のプレートのことです。
                      </p>
                  </div>
              </li>

            </ul>
    </li>

    <li class="item" id="SA">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/SA.png" alt=""></h3>
      <ul class="mainArea__list">

        <li class="sub_item">
          サグリ（読み取り）防止装置
          <div class="explainBox">
            <h4 class="explainBox__tit">サグリ（読み取り）防止装置（さぐりよみとりぼうしそうち）</h4>
            <p class="explainBox__text">
                記憶番号の不正読み取りを防ぐ機能のことです。
            </p>
          </div>
        </li>


        <li class="sub_item">
          サムターン
          <div class="explainBox">
            <h4 class="explainBox__tit">サムターン（さむたーん）</h4>
            <p class="explainBox__text">
                キーを使わず施解錠させるツマミのこと。キーレックスでは本締錠の室内側に取り付けられています。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure3.jpg"></div>
          </div>
        </li>

        <li class="sub_item">
          サムラッチ(サムラッチハンドル)
          <div class="explainBox">
            <h4 class="explainBox__tit">サムラッチ(サムラッチハンドル)</h4>
            <p class="explainBox__text">
                ハンドル上側についている指掛けを操作し、ラッチボルトを作動させる錠のことです。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure6.jpg"></div>
          </div>
        </li>
      </ul>
    </li>



    <li class="item" id="SI">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/SI.png" alt=""></h3>
      <ul class="mainArea__list">

        <li class="sub_item">
          自動施錠
          <div class="explainBox">
            <h4 class="explainBox__tit">自動施錠（じどうせじょう）</h4>
            <p class="explainBox__text">
                扉を閉めると自動的に施錠されることです（オートロック）。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure1.jpg"></div>
          </div>
        </li>


        <li class="sub_item">
          錠
          <div class="explainBox">
            <h4 class="explainBox__tit">錠（じょう）</h4>
            <p class="explainBox__text">
                ラッチボルトを操作する機能を、金属製の箱におさめ、施解錠できる部品のことです。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure1.jpg"></div>
          </div>
        </li>

        <li class="sub_item">
          シリンダー
          <div class="explainBox">
            <h4 class="explainBox__tit">シリンダー（しりんだー）</h4>
            <p class="explainBox__text">
                錠を施解錠するとき、デッドボルトの状態を制御する機構。キーで操作します。
            </p>
          </div>
        </li>

        <li class="sub_item">
          シリンダー切替
          <div class="explainBox">
            <h4 class="explainBox__tit">シリンダー切替（しりんだーきりかえ）</h4>
            <p class="explainBox__text">
                キーレックス4000シリーズで、キーを使い記憶番号を変更できるタイプです。
            </p>
          </div>
        </li>
      </ul>
    </li>


    <li class="item" id="SU">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/SU.png" alt=""></h3>
      <ul class="mainArea__list">

        <li class="sub_item">
          スペーサー
          <div class="explainBox">
            <h4 class="explainBox__tit">スペーサー（すぺーさー）</h4>
            <p class="explainBox__text">
                キーレックス面付本締錠で、デッドボルト作動面と受側の高さを合わせるときに使います。
            </p>
          </div>
        </li>

        <li class="sub_item">
          スペーシング
          <div class="explainBox">
            <h4 class="explainBox__tit">スペーシング</h4>
            <p class="explainBox__text">
                レバーまたはノブの回転中心とシリンダーなどの施解錠操作部の中心間の距離のことです。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure5.jpg"></div>
          </div>
        </li>
      </ul>
    </li>


    <li class="item" id="SE">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/SE.png" alt=""></h3>
      <ul class="mainArea__list">

        <li class="sub_item">
          施錠
          <div class="explainBox">
            <h4 class="explainBox__tit">施錠（せじょう）</h4>
            <p class="explainBox__text">
                鍵をかけることです。
            </p>
          </div>
        </li>
      </ul>
    </li>

    <li class="item" id="SO">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/SO.png" alt=""></h3>
      <ul class="mainArea__list">

        <li class="sub_item">
          外開き扉
          <div class="explainBox">
            <h4 class="explainBox__tit">外開き扉（そとびらきとびら）</h4>
            <p class="explainBox__text">
                室外側に開く扉のことです。
            </p>
          </div>
        </li>
      </ul>
    </li>


    <li class="item" id="TA">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/TA.png" alt=""></h3>
      <ul class="mainArea__list">

        <li class="sub_item">
          ダブルスローテッドラッチ
          <div class="explainBox">
            <h4 class="explainBox__tit">ダブルスローテッドラッチ（だぶるすろーてっどらっち）</h4>
            <p class="explainBox__text">
                扉が閉まるとさらに飛び出し、防犯性能を高めます。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure1.jpg"></div>
          </div>
        </li>
      </ul>
    </li>


    <li class="item" id="TI">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/TI.png" alt=""></h3>
      <ul class="mainArea__list">

        <li class="sub_item">
          チューブラ錠
          <div class="explainBox">
            <h4 class="explainBox__tit">チューブラ錠</h4>
            <p class="explainBox__text">
                錠本体部分が筒状になっている錠のことです。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure4.jpg"></div>
          </div>
        </li>

        <li class="sub_item">
          チューブラ本締錠
          <div class="explainBox">
            <h4 class="explainBox__tit">チューブラ本締錠（ちゅーぶらほんじまりじょう）</h4>
            <p class="explainBox__text">
                錠の機構がチューブ状のケースに収められている本締錠のことです。
            </p>
          </div>
        </li>

        <li class="sub_item">
          丁番
          <div class="explainBox">
            <h4 class="explainBox__tit">丁番（ちょうばん・ちょうつがい）</h4>
            <p class="explainBox__text">
                開き扉や家具の扉などの吊元に取り付けられる金物。扉を支え、これを軸にして扉の開閉をおこないます。
            </p>
          </div>
        </li>

      </ul>
    </li>


    <li class="item" id="TU">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/TU.png" alt=""></h3>
      <ul class="mainArea__list">

        <li class="sub_item">
          吊元
          <div class="explainBox">
            <h4 class="explainBox__tit">吊元（つりもと）</h4>
            <p class="explainBox__text">
                開き戸（ドア）の回転軸側。キーレックスでは室外側から扉に向かい、丁番が右にある場合を右吊元と呼びます。
            </p>
          </div>
        </li>
      </ul>
    </li>



    <li class="item" id="TE">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/TE.png" alt=""></h3>
      <ul class="mainArea__list">

        <li class="sub_item">
          ディンプルキー
          <div class="explainBox">
            <h4 class="explainBox__tit">ディンプルキー</h4>
            <p class="explainBox__text">
                表面に深さや大きさの異なる凹みをつけてあるキーのことです。
            </p>
          </div>
        </li>

        <li class="sub_item">
          デッドボルト
          <div class="explainBox">
            <h4 class="explainBox__tit">デッドボルト（でっどぼると）</h4>
            <p class="explainBox__text">
                扉を施錠するためのボルト（かんぬき）のことです。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure3.jpg"></div>
          </div>
        </li>

        <li class="sub_item">
          デッドロック機能
          <div class="explainBox">
            <h4 class="explainBox__tit">デッドロック機能（でっどろっくきのう）</h4>
            <p class="explainBox__text">
                キーレックスで、解錠をシリンダーのキー操作のみにする機能。店舗など営業中はボタン操作で解錠し、閉店後デッドロックへ切り替えるとキーを持った方だけしか解錠できなくなります。入退室を制限したいときに有効です。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure2.jpg"></div>
          </div>
        </li>

      </ul>
    </li>


    <li class="item" id="TO">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/TO.png" alt=""></h3>
      <ul class="mainArea__list">

        <li class="sub_item">
          戸襖錠
          <div class="explainBox">
            <h4 class="explainBox__tit">戸襖錠</h4>
            <p class="explainBox__text">
                和室の出入り口扉に取付けする錠で、廊下側(洋室側)はレバーがつき、和室側は和風デザインの襖用レバーがつきます。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure7.jpg"></div>
          </div>
        </li>


        <li class="sub_item">
          トリガー／トリガーボルト
          <div class="explainBox">
            <h4 class="explainBox__tit">トリガー／トリガーボルト（とりがー・とりがーぼると）</h4>
            <p class="explainBox__text">
                錠のフロント面についていて、扉を閉めると錠ケース内に入り、ラット（デッド）ボルトがさらに飛び出し施錠状態になります。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure1.jpg"></div>
          </div>
        </li>
      </ul>
    </li>


    <li class="item" id="NA">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/NA.png" alt=""></h3>
    </li>


    <li class="item" id="NI">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/NI.png" alt=""></h3>
    </li>

    <li class="item" id="NU">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/NU.png" alt=""></h3>
    </li>

    <li class="item" id="NE">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/NE.png" alt=""></h3>
    </li>

    <li class="item" id="NO">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/NO.png" alt=""></h3>
    </li>

    <li class="item" id="HA">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/HA.png" alt=""></h3>
      <ul class="mainArea__list">

        <li class="sub_item">
          バックセット
          <div class="explainBox">
            <h4 class="explainBox__tit">バックセット（ばっくせっと）</h4>
            <p class="explainBox__text">
                錠のフロント面から、ノブ・レバーハンドルの回転軸中心までの長さをいいます。
            </p>
          </div>
        </li>
      </ul>
    </li>


    <li class="item" id="HI">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/HI.png" alt=""></h3>
      <ul class="mainArea__list">

        <li class="sub_item">
          ビスピッチ
          <div class="explainBox">
            <h4 class="explainBox__tit">ビスピッチ</h4>
            <p class="explainBox__text">
                取付けビスの中心間の距離のことです。
            </p>
          </div>
        </li>

        <li class="sub_item">
          ピッキング
          <div class="explainBox">
            <h4 class="explainBox__tit">ピッキング（ぴっきんぐ）</h4>
            <p class="explainBox__text">
                鍵穴に専用工具を差し込んで施錠を開き、住居に侵入する手口のことです。
            </p>
          </div>
        </li>

        <li class="sub_item">
          表示錠
          <div class="explainBox">
            <h4 class="explainBox__tit">表示錠</h4>
            <p class="explainBox__text">
                室外あるいは廊下側に施解錠状態を示す表示部があるレバーハンドルまたはノブセットのことです。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure8.jpg"></div>
          </div>
        </li>

      </ul>
    </li>

    <li class="item" id="HU">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/HU.png" alt=""></h3>
      <ul class="mainArea__list">

        <li class="sub_item">
          フェイルセーフ機能
          <div class="explainBox">
            <h4 class="explainBox__tit">フェイルセーフ機能（ふぇいるせーふきのう）</h4>
            <p class="explainBox__text">
                キーレックスで使用しているADS錠・ARS錠の機能の一つ。万が一錠のダブルスローテッドラッチが破断しても扉を開閉できる安全設計になっています。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure1.jpg"></div>
          </div>
        </li>

        <li class="sub_item">
          プラグ切替
          <div class="explainBox">
            <h4 class="explainBox__tit">プラグ切替（ぷらぐきりかえ）</h4>
            <p class="explainBox__text">
                キーレックス4000シリーズで、コイン等を使い記憶番号を変更できるタイプのことです。
            </p>
          </div>
        </li>

        <li class="sub_item">
          フロント板
          <div class="explainBox">
            <h4 class="explainBox__tit">フロント板（ふろんとばん）</h4>
            <p class="explainBox__text">
                錠のフロント面に取り付けられ、見た目もよくする化粧版のことです。
            </p>
          </div>
        </li>

      </ul>
    </li>

    <li class="item" id="HE">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/HE.png" alt=""></h3>
    </li>

    <li class="item" id="HO">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/HO.png" alt=""></h3>
      <ul class="mainArea__list">

        <li class="sub_item">
          ボタン錠
          <div class="explainBox">
            <h4 class="explainBox__tit">ボタン錠（ぼたんじょう）</h4>
            <p class="explainBox__text">
                キーの代わりに、ボタン操作で数字等を入力し解錠する鍵のことです。
            </p>
          </div>
        </li>

        <li class="sub_item">
          彫込本締錠
          <div class="explainBox">
            <h4 class="explainBox__tit">彫込本締錠（ほりこみほんじまりじょう）</h4>
            <p class="explainBox__text">
                キーレックスでは扉に本締錠を埋め込むタイプをいいます。
            </p>
          </div>
        </li>

        <li class="sub_item">
          本締錠
          <div class="explainBox">
            <h4 class="explainBox__tit">本締錠（ほんじまりじょう）</h4>
            <p class="explainBox__text">
                ラッチボルトがない、デッドボルトのみの錠のことです。
            </p>
          </div>
        </li>

      </ul>
    </li>

    <li class="item" id="MA">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/MA.png" alt=""></h3>
      <ul class="mainArea__list">

        <li class="sub_item">
          間仕切錠
          <div class="explainBox">
            <h4 class="explainBox__tit">間仕切錠</h4>
            <p class="explainBox__text">
                室内側からツマミで施解錠でき、非常時に室外側からコインなどで解錠ができる機能があるレバーハンドルまたはノブセットのことです。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure8.jpg"></div>
          </div>

        </li>

        <li class="sub_item">
          マスターキー
          <div class="explainBox">
            <h4 class="explainBox__tit">マスターキー（ますたーきー）</h4>
            <p class="explainBox__text">
                個別キーを持つ複数の錠を、すべて施解錠できるキーのことです。
            </p>
          </div>
        </li>

        <li class="sub_item">
          丸座
          <div class="explainBox">
            <h4 class="explainBox__tit">丸座（まるざ）</h4>
            <p class="explainBox__text">
                キーレックスを固定する丸型の台座のことです。
            </p>
          </div>
        </li>
      </ul>
    </li>


    <li class="item" id="MI">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/MI.png" alt=""></h3>
    </li>

    <li class="item" id="MU">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/MU.png" alt=""></h3>
    </li>


    <li class="item" id="ME">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/ME.png" alt=""></h3>
      <ul class="mainArea__list">

        <li class="sub_item">
          面付引戸鎌錠
          <div class="explainBox">
            <h4 class="explainBox__tit">面付引戸鎌錠（めんつけひきどかまじょう）</h4>
            <p class="explainBox__text">
                引き戸に取り付けられる面付タイプのキーレックス。錠の先端が鎌状になっています。
            </p>
          </div>
        </li>

        <li class="sub_item">
          面付本締錠
          <div class="explainBox">
            <h4 class="explainBox__tit">面付本締錠（めんつけほんじまりじょう）</h4>
            <p class="explainBox__text">
                キーレックスでは、扉にキーレックス本体と室内座で挟むように取り付けるタイプをいいます。室内側にデッドボルトがついています。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure3.jpg"></div>
          </div>
        </li>
      </ul>
    </li>

    <li class="item" id="MO">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/MO.png" alt=""></h3>
    </li>

    <li class="item" id="YA">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/YA.png" alt=""></h3>
    </li>

    <li class="item" id="YU">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/YU.png" alt=""></h3>
    </li>


    <li class="item" id="YO">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/YO.png" alt=""></h3>
      <ul class="mainArea__list">

        <li class="sub_item">
          横框
          <div class="explainBox">
            <h4 class="explainBox__tit">横框（よこかまち）</h4>
            <p class="explainBox__text">
                框は建具のまわりを構成する部材のこと。横に取り付けられたものを『横框』、縦に取り付けられたものを『縦框』といいます。
            </p>
          </div>
        </li>
      </ul>
    </li>


    <li class="item" id="RA">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/RA.png" alt=""></h3>
      <ul class="mainArea__list">

        <li class="sub_item">
          ラッチ／ラッチボルト
          <div class="explainBox">
            <h4 class="explainBox__tit">ラッチ／ラッチボルト（らっち・らっちぼると）</h4>
            <p class="explainBox__text">
                錠のフロント面についていて、ノブ・レバーハンドルを操作すると、錠ケース内に引き込まれ、扉を開くことができます。
            </p>
          </div>
        </li>
      </ul>
    </li>

    <li class="item" id="RI">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/RI.png" alt=""></h3>
        <ul class="mainArea__list">

          <li class="sub_item">
            両開き扉
            <div class="explainBox">
              <h4 class="explainBox__tit">両開き扉</h4>
              <p class="explainBox__text">
                  扉の開閉形態のひとつで、2枚の扉を開閉できる扉のことです。
              </p>
              <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure9.jpg"></div>
            </div>
          </li>
        </ul>
    </li>

    <li class="item" id="RU">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/RU.png" alt=""></h3>
    </li>

    <li class="item" id="RE">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/RE.png" alt=""></h3>
    </li>

    <li class="item" id="RO">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/RO.png" alt=""></h3>
      <ul class="mainArea__list">

        <li class="sub_item">
          ロックターン
          <div class="explainBox">
            <h4 class="explainBox__tit">ロックターン（ろっくたーん）</h4>
            <p class="explainBox__text">
                キーレックスでは本締錠に付くノブのこと。回して施解錠します。
            </p>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure3.jpg"></div>
          </div>
        </li>
      </ul>
    </li>

    <li class="item" id="WA">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/WA.png" alt=""></h3>
        <ul class="mainArea__list">

          <li class="sub_item">
            ワンタッチレバー
            <div class="explainBox">
              <h4 class="explainBox__tit">ワンタッチレバー</h4>
              <p class="explainBox__text">
                  取付する際に、角芯棒にレバーを差込むだけで固定できる機能を持つレバーのことです。
              </p>
              <div><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/figure10.jpg"></div>
            </div>
          </li>
        </ul>

    </li>


    <li class="item" id="WO">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/WO.png" alt=""></h3>
    </li>

    <li class="item" id="N">
      <h3 class="mainArea__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/glossary/N.png" alt=""></h3>
    </li>



  </ul>
    
  </div><!-- /.mainArea -->

  
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
  
</div><!-- /#container -->

<?php get_footer(); ?>
