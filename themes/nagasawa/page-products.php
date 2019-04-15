<?php
/*
Template Name: 製品一覧
*/
?>
<?php get_header(); ?>

<div id="container">
  <div class="pageTit">
    <h2 class="pageTit__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/products/tit.png" height="46" width="94" alt="製品一覧 PRODUCTS"></h2>
  </div>

  <ul class="mainArea">
    <li class="item">
        <div class="imgBlock imgBlock01">
            <a href="<?php echo home_url(); ?>/products/keylex/" style="cursor:pointer" class="link">
                <div class="imgBlockChild">
                    <div class="imgBlock__textWrap">
                        <p class="imgBlock__text">
                        記憶番号で解錠できる「キーレックス」なら、<br>
                        オフィスや倉庫、店舗など、屋内外を問わず取り付けられます。<br>
                        通用口、更衣室など特定多数の出入りがある場合でも<br>
                        鍵の管理は不要になり、記憶番号の変更だけで<br>
                        安全性が維持できます。<br>
                        また、電気を使わないので停電時にも作動します。
                        </p>
                        <span class="imgBlock__textBottom">商品トップページへ</span>
                    </div>
                </div>
            </a>
        </div>

    </li>
    <li class="item">
        <div class="imgBlock imgBlock02">
            <a href="<?php echo home_url(); ?>/products/handle/" class="link">
                <div class="imgBlockChild">
                    <div class="imgBlock__textWrap">
                        <p class="imgBlock__text">
                        新規取り付けはもちろん、交換にも対応し、<br>
                        癒しやユニバーサルデザインにも配慮した豊富なバリエーション。<br>
                        組み合わせる錠は、耐久性に優れた箱錠と、 <br>取り付けが簡単なチューブラ錠。<br>
                        フェイルセーフ設計を取り入れた錠と座のロック機構は、<br>
                        安全安心を多方面から支えます。
                        </p>
                        <span class="imgBlock__textBottom">商品トップページへ</span>
                    </div>
                </div>
            </a>
        </div>


    </li>
    <li class="item">
        <div class="imgBlock imgBlock03">
            <a href="<?php echo home_url(); ?>/products/kodai/" class="link">
                <div class="imgBlockChild">
                    <div class="imgBlock__textWrap">
                        <p class="imgBlock__text">
                        特殊鍍金によってもたらされている美しい色調を<br>
                        特長としています。<br>
                        熟練した職人がひとつひとつの製品に手間を惜しまず<br>
                        長きに渡り大切に造り続けています。
                        </p>
                        <span class="imgBlock__textBottom">商品トップページへ</span>
                    </div>
                </div>
            </a>
        </div>

    </li>
  </ul>
  
</div><!-- /#container -->

<?php get_footer(); ?>
