<?php
/*
Template Name: 会社概要＞会社情報
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
    

    <p class="mainImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/info/img_company.jpg" height="316" width="950" alt=""></p>

    <ul class="listBlock listBlock__shopList">
      <li class="item op"><a href="#companyArea" data-diff="20"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/info/btn_company.png" height="33" width="293" alt="会社概要・事業所紹介"></a></li>
      <li class="item op"><a href="#historyArea" data-diff="20"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/info/btn_history.png" height="33" width="293" alt="沿革"></a></li>
      <li class="item op"><a href="#policyArea" data-diff="20"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/info/btn_policy.png" height="33" width="293" alt="経営理念"></a></li>
    </ul>

    <h3 class="mainArea__tit" id="companyArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/info/tit_company.png" height="19" width="199" alt="会社概要・事業所紹介"></h3>
    <table class="table">
      <tr class="table__tr">
        <td class="table__td">商号</td>
        <td class="table__td">株式会社　長沢製作所</td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">創業</td>
        <td class="table__td">
          1916年9月10日　 (大正5年9月10日)
        </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">設立</td>
        <td class="table__td">
          1951年12月　(昭和26年12月)
        </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">資本金</td>
        <td class="table__td">
          5,000万円
        </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">代表者</td>
        <td class="table__td">
          代表取締役社長　長沢昌幸
        </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">事業内容</td>
          <td class="table__td">
              自社ブランド建築金物の製造販売<br>
              <img src="/cms/wp-content/themes/nagasawa/assets/common/img/common/table__td.png" alt="長沢製作所 KEYLEX 古代"><br>
              ハウスメーカー、ドアメーカー、建材メーカー様等へのOEM製造販売
          </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">製品内容</td>
          <td class="table__td">
              機械式ボタン錠 KEYLEX、玄関錠、室内レバーハンドル錠、装飾玄関錠・室内錠・本締錠、その他建築金物
          </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">取引銀行</td>
        <td class="table__td">
          <span class="adjust-padding">埼玉りそな銀行（東松山支店）</span>　武蔵野銀行（東松山支店）<br>
          <span class="adjust-padding">埼玉県信用金庫（嵐山支店）</span>　　三菱東京UFJ銀行（川越支店）
        </td>
      </tr>
<!--
      <tr class="table__tr">
        <td class="table__td ac" colspan="2">
           商品のお問い合わせ等は、支店・出張所へお願いします。
        </td>
      </tr>
-->
      <tr class="table__tr">
        <td class="table__td bgColor">本社／工場</td>
        <td class="table__td">
          <ul class="table__td_list">
            <li class="item"><div id="map01" class="map"></div></li>
            <li class="item">
                <span style=" width: 300px;">
                    〒355-0204<br>
                    埼玉県比企郡嵐山町花見台11-3<br>
                    TEL.0493-63-1151（総務部）<br>
                    FAX.0493-61-1074<br><br>
                    ※商品のお問い合わせ等は、最寄りの営業部/各支店・出張所へお願いします。本社/工場へのお問い合わせはご遠慮ください。</span>
            </li>
          </ul>
        </td>
      </tr>
      <tr class="table__tr">
          <td class="table__td bgColor">営業部<br>東京支店</td>
          <td class="table__td">
          <ul class="table__td_list">
            <li class="item"><div id="map02" class="map"></div></li>
            <li class="item">
                <span>
                    〒175-0094<br>
                    東京都板橋区成増1-31-10<br>
                    あいおいニッセイ同和損保成増ビル6F<br>
                    TEL.03-5383-1811（代）<br>
                    FAX.03-5967-3103<br>
                    <a href="https://www.nagasawa-mfg.co.jp/inquiry/"><span class="list-type-arrow link"> 商品のお問い合わせ等はこちら</span></a>                </span>
            </li>
          </ul>
        </td>
      </tr>
      <tr class="table__tr">
          <td class="table__td bgColor">営業部<br>大阪支店</td>
          <td class="table__td">
          <ul class="table__td_list">
            <li class="item"><div id="map03" class="map"></div></li>
            <li class="item">
                <span>
                    〒577-0045<br>
                    東大阪市西堤本通東1-1-1大発ビル412-1<br>
                    TEL.06-6783-5091（代）<br>
                    FAX.06-6783-5092<br>
                    <a href="https://www.nagasawa-mfg.co.jp/inquiry/"><span class="list-type-arrow link"> 商品のお問い合わせ等はこちら</span></a>
                </span>
            </li>
          </ul>
        </td>
      </tr>      
      <tr class="table__tr">
          <td class="table__td bgColor">営業部<br>福岡出張所</td>
          <td class="table__td lhAdjust">
              〒810-0001<br>
              福岡市中央区天神2-3-10<br>
              天神パインクレストビル1019<br>
              TEL.092-524-7031（代）<br>
              FAX.092-524-7032<br>
              <a href="https://www.nagasawa-mfg.co.jp/inquiry/"><span class="list-type-arrow link"> 商品のお問い合わせ等はこちら</span></a>          </td>
      </tr>
    </table>

    <h3 class="mainArea__tit" id="historyArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/info/tit_history.png" height="19" width="44" alt="沿革"></h3>
    <table class="table table__history">
      <tr class="table__tr">
        <td class="table__td">1916年</td>
        <td class="table__td">埼玉県川越市において創業　手作りによる箪笥金具の製造を開始</td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">1951年</td>
        <td class="table__td">
          資本金100万円、株式会社長沢製作所に改称、改組（設立）<br>
          引戸用戸締り金具「鬼締め」発売
        </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">1954年</td>
        <td class="table__td">洋家具用取手「コロナ1号」発売</td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">1967年</td>
        <td class="table__td">
          家具金物から徐々に建築金物の生産に移行　先駆けとして固定型ドアハンドルを「Corona」ブランドで発売
        </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">1972年</td>
        <td class="table__td">
          チューブ型の錠前「チューブラ空錠」を考案<br>
          当時流行りであった唐草模様が特徴的な「古代1号」「古代2号」同時発売
        </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">1973年</td>
        <td class="table__td">
          国内初のサムラッチ式装飾錠「プレジデント301」発売<br>
          大手ドアメーカー、ハウスメーカーからの引き合いが多く、直接取引を開始<br>
          輸出事業を開始
        </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">1978年</td>
        <td class="table__td">大阪営業所開設</td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">1980年</td>
        <td class="table__td">
          資本金3000万円に増資
        </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">1981年</td>
        <td class="table__td">国内初の機械式ボタン錠「キーレックス1000」発売 (国内及び海外の特許取得)</td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">1983年</td>
        <td class="table__td">シンプル調室内錠　トータルコーディネートデザインの「リヴィエール」発売　グッドデザイン賞を受賞</td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">1984年</td>
        <td class="table__td">オートロック機能を搭載した「キーレックス2000」発売　翌年、第一回埼玉県工業技術大賞を受賞</td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">1987年</td>
        <td class="table__td">
          東京営業所開設          
        </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">1994年</td>
        <td class="table__td">
          「キーレックスニュー1000」発売<br>
          「パルム」発売
        </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">1996年</td>
        <td class="table__td">
          創業80周年を機に埼玉県川越市から埼玉県比企郡嵐山町花見台工業団地に本社工場を新築し移転
        </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">1997年</td>
        <td class="table__td">EU向けにユーロ錠対応の「キーレックス700」発売　キーレックスの輸出業務が本格的に稼働</td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">1998年</td>
        <td class="table__td">
          細框でも取り付けられるスリムな「キーレックス800」発売
        </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">2000年</td>
        <td class="table__td">
          コンパクトでシンプルな補助錠「キーレックス500」発売<br>
          ヘアライン仕上のレバーハンドル「GM」発売<br>
          キーレックスサービスショップ（KSS）加盟店制度発足
        </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">2003年</td>
        <td class="table__td">
          イヌとネコのシルエットをモチーフとしたレバーハンドル「わんにゃん」発売
        </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">2004年</td>
        <td class="table__td">キーレックスシリーズ最小、ボタン複数回押しの「キーレックス047」発売</td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">2006年</td>
        <td class="table__td">
          資本金5000万円に増資<br>
          装飾玄関錠取替対応の「古代サムラッチ取替錠」発売
        </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">2007年</td>
        <td class="table__td">
          ISO9001、ISO14001認定取得<br>
          モダンクラシック装飾錠の「NEO-DÉCOR」発売
        </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">2008年</td>
        <td class="table__td">
          「キーレックスMr-Ⅱ」発売<br>
          レバー操作角度わずか10度のショートストローク錠を採用した「NEXES」発売　グッドデザイン賞を受賞
        </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">2009年</td>
        <td class="table__td">業界初のフェイルセーフ機能(閉じ込め防止機能付)を搭載したキーレックスオートロック錠の「ADS錠」「ARS錠｣開発</td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">2010年</td>
        <td class="table__td">
          扉から取り外さなくても記憶番号が瞬時に変更できる「キーレックス4000」発売<br>
          「Disney　Hardwear　Collection」発売
        </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">2012年</td>
        <td class="table__td">
          コンパクトサイズのチューブラ錠にフェイルセーフ機能(閉じ込め防止機能付)を搭載した「TXS錠」開発<br>
          室内レバーハンドル取替対応の「TOMFU」発売
        </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">2013年</td>
        <td class="table__td">
          フェイルセーフ機能(閉じ込め防止機能付)搭載のケースロック錠CTS錠を採用した「古代サムラッチケースロック取替錠」発売
        </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">2014年</td>
        <td class="table__td">
          史上初となる引違い戸向けの「キーレックス引違い戸自動施錠」発売<br>
          JLMA試験所「㈱長沢製作所　製品性能試験センター」認定
        </td>
      </tr>
      <tr class="table__tr">
        <td class="table__td">2015年</td>
        <td class="table__td">
          モダンクラシック装飾錠の「古代NEO」玄関錠・室内錠　発売<br>
          「キーレックス800引違い戸自動施錠」　板橋製品技術大賞　審査委員長賞を受賞
        </td>
      </tr>
              <tr class="table__tr">
            <td class="table__td">2016年</td>
            <td class="table__td">
                創業100周年を迎え、新たな経営理念を確立<br>
                引戸用 面付タイプの自動施錠「キーレックス面付引戸自動施錠」発売<br>
                長住協仕様のCJS錠(閉じ込め防止機能付)を採用した「CJKネクセス」発売
            </td>
        </tr>
    </table>

        <h3 class="mainArea__tit" id="policyArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/info/tit_policy.png" height="19" width="81" alt="経営理念"></h3>
    <p class="policy__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/company/info/img_policy.png" height="571" width="950" alt="経営理念　継続 創造 誠意 未来　株式会社長沢製作所　代表取締役社長 長沢 昌幸"></p>

  </div><!-- /.mainArea -->

  
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
  
</div><!-- /#container -->

<?php get_footer(); ?>
