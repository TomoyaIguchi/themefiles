<?php
/*
Template Name: カタログダウンロード
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


                <ul class="mainArea__block">
                    <!--1-->
                    <li class="item">
                        <div class="item__inner">
                            <p class="item__thumbnail"><span class="item__span"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_keylex.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img01.jpg" height="189" width="134" alt=""></a></span></p>
                            <h2 class="item__tit"><span class="item__span">【キーレックス製品カタログ】</span></h2>
                            <p class="item__text">防犯対策に有効で使い易くて便利な機械式ボタン錠のシリーズカタログです。他社製品からの取替に対応した商品も掲載しています。</p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_keylex.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--2-->
                    <li class="item">
                        <div class="item__inner">
                            <p class="item__thumbnail"><span class="item__span"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_handle.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img02.jpg" height="189" width="134" alt=""></a></span></p>
                            <p class="item__tit"><span class="item__span">【レバーハンドル製品カタログ】</span></p>
                            <p class="item__text">室内専用レバーハンドルを中心としたスタンダード・プロダクト・カタログです。豊富なバリエーションの中からお選びいただけます。</p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_handle.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--3-->
                    <li class="item">
                        <div class="item__inner">
                            <p class="item__thumbnail"><span class="item__span"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_kodai.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img03.jpg" height="189" width="134" alt=""></a></span></p>
                            <p class="item__tit"><span class="item__span">【古代製品カタログ】</span></p>
                            <p class="item__text">長年ご愛顧頂いているクラシックな趣きの装飾錠「古代」と、新しい感覚でアレンジしたノスタルジックな雰囲気が漂う「古代ＮＥＯ」のカタログです。</p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_kodai.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--4-->
                    <li class="item">
                        <div class="item__inner">
                            <p class="item__thumbnail"><span class="item__span"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/keylex_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img17.jpg" height="189" width="134" alt=""></a></span></p>
                            <p class="item__tit"><span class="item__span">【キーレックス価格表】</span></p>
                            <p class="item__text">キーレックスシリーズの価格表となります。価格表は不定期に、更新および追加されますので、定期的にご確認ください。<br><br></p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/keylex_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--5-->
                    <li class="item">
                        <div class="item__inner">
                            <p class="item__thumbnail"><span class="item__span"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/leverhandle_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img05-06.jpg" height="189" width="134" alt=""></a></span></p>
                            <p class="item__tit"><span class="item__span">【レバーハンドル価格表】</span></p>
                            <p class="item__text">レバーハンドルカタログの価格表となります。価格表は不定期に、更新および追加されますので、定期的にご確認ください。</p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/leverhandle_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--6-->
                    <li class="item">
                        <div class="item__inner">
                            <p class="item__thumbnail"><span class="item__span"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/kodai_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/kodai_pricelist-3.jpg" height="189" width="134" alt=""></a></span></p>
                            <p class="item__tit"><span class="item__span">【古代製品価格表】</span></p>
                            <p class="item__text">古代製品の価格表となります。価格表は不定期に、更新および追加されますので、定期的にご確認ください。</p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/kodai_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--7-->
                    <li class="item">
                        <div class="item__inner" style="border-right: none;">
                            <p class="item__thumbnail"><span class="item__span"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_keylex_500_LSP.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img05-02-1.jpg" height="189" width="134" alt=""></a></span></p>
                            <p class="item__tit"><span class="item__span">【MIWA LSP対応キーレックス】</span></p>
                            <p class="item__text">現在ご使用の【MIWA】LSPタイプの錠をそのまま利用して、シリンダー部分をキーレックス500に取り替えできます。新規に取り付ける場合は、当該製品の錠・受座・サムターン・ハンドルをあらかじめご用意ください。</p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_keylex_500_LSP.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--8 hidden-->
                    <li class="item">
                        <div class="item__inner" style=" visibility:hidden ">
                            <p class="item__thumbnail"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img17.jpg" height="189" width="134" alt=""></span></p>
                            <p class="item__tit"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/keylex.png" alt=""></span></p>
                            <p class="item__text">キーレックスシリーズの価格表となります。価格表は不定期に、更新および追加されますので、定期的にご確認ください。<br><br></p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/keylex_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--9-->
                    <li class="item">
                        <div class="item__inner">
                            <p class="item__thumbnail"><span class="item__span"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_kodai_K.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img06.jpg" height="189" width="134" alt=""></a></span></p>
                            <p class="item__tit"><span class="item__span">【K錠対応取替錠】</span></p>
                            <p class="item__text">新感覚の装飾錠「古代ＮＥＯ」に長沢製Ｋ錠に対応した取替錠を用意しました。Ｋ錠に合わせたフロントサイズで簡単に取替が可能です。</p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_kodai_K.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--10-->
                    <li class="item">
                        <div class="item__inner" style="border-right: none;">
                            <p class="item__thumbnail"><span class="item__span"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_keylex_4000_Emergency unlocking.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img05-02-2.jpg" height="189" width="134" alt=""></a></span></p>
                            <p class="item__tit"><span class="item__span">【非常解装置付キーレックス】</span></p>
                            <p class="item__text">非常時には、キーレックス本体下部に取り付けられているカバーを割り、解錠レバーを操作するだけで解錠できます。</p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_keylex_4000_Emergency unlocking.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--11-->
                    <li class="item">
                        <div class="item__inner" style=" visibility:hidden ">
                            <p class="item__thumbnail"><span class="item__span"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/leverhandle_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img05-06.jpg" height="189" width="134" alt=""></a></span></p>
                            <p class="item__tit"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/standard.png" height="26" width="136" alt=""></span></p>
                            <p class="item__text">レバーハンドルカタログの価格表となります。価格表は不定期に、更新および追加されますので、定期的にご確認ください。</p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/leverhandle_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--12-->
                    <li class="item">
                        <div class="item__inner">
                            <p class="item__thumbnail"><span class="item__span"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_kodai_neo.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img09.jpg" height="189" width="134" alt=""></a></span></p>
                            <p class="item__tit"><span class="item__span">【古代NEO 玄関錠/室内錠】</span></p>
                            <p class="item__text">新感覚でデザインされたノスタルジックな装飾錠のシリーズです。重厚な趣きのある長座は他社製品からの取替にも最適です。</p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_kodai_neo.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--13-->
                    <li class="item">
                        <div class="item__inner" style="border-right: none;">
                            <p class="item__thumbnail"><span class="item__span"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_keylex_800_slide_Other_company.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img05-02-3.jpg" height="189" width="134" alt=""></a></span></p>
                            <p class="item__tit"><span class="item__span">【引戸用他社シリンダー組込対応商品】</span></p>
                            <p class="item__text">他社製品のシリンダーをキーレックス800【引戸用】に組込むことができます。引戸でもキーレックスでマスターキー対応が実現しました。</p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_keylex_800_slide_Other_company.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--14 hidden-->
                    <li class="item">
                        <div class="item__inner" style=" visibility:hidden ">
                            <p class="item__thumbnail"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img17.jpg" height="189" width="134" alt=""></span></p>
                            <p class="item__tit"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/keylex.png" alt=""></span></p>
                            <p class="item__text">キーレックスシリーズの価格表となります。価格表は不定期に、更新および追加されますので、定期的にご確認ください。<br><br></p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/keylex_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--15-->
                    <li class="item">
                        <div class="item__inner">
                            <p class="item__thumbnail"><span class="item__span"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_kodai_CTS.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img12.jpg" height="189" width="134" alt=""></a></span></p>
                            <p class="item__tit"><span class="item__span">【サムラッチケースロック取替錠】</span></p>
                            <p class="item__text">他社製装飾錠からの取替に安全・安心なケースロック錠ＣＴＳ錠で対応しました。取替プレートもセットされ、ディンプルシリンダーも採用しています。</p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_kodai_CTS.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--16-->
                    <li class="item">
                        <div class="item__inner" style="border-right: none;">
                            <p class="item__thumbnail"><span class="item__span"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_KL800_auto_slide.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img18.jpg" height="189" width="134" alt=""></a></span></p>
                            <p class="item__tit"><span class="item__span">【面付引戸自動施錠】</span></p>
                            <p class="item__text">引戸戸先に取付られる面付タイプの自動施錠。多様な取付環境に対応できるパーツが同梱されています。</p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_KL800_auto_slide.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--17 hidden-->
                    <li class="item">
                        <div class="item__inner" style=" visibility:hidden ">
                            <p class="item__thumbnail"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img17.jpg" height="189" width="134" alt=""></span></p>
                            <p class="item__tit"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/keylex.png" alt=""></span></p>
                            <p class="item__text">キーレックスシリーズの価格表となります。価格表は不定期に、更新および追加されますので、定期的にご確認ください。<br><br></p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/keylex_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--18-->
                    <li class="item">
                        <div class="item__inner" style=" visibility:hidden ">
                            <p class="item__thumbnail"><span class="item__span"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_kodai_CTS.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img12.jpg" height="189" width="134" alt=""></a></span></p>
                            <p class="item__tit"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/kodai.png" height="32" width="147" alt=""></span></p>
                            <p class="item__text">他社製装飾錠からの取替に安全・安心なケースロック錠ＣＴＳ錠で対応しました。取替プレートもセットされ、ディンプルシリンダーも採用しています。</p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_kodai_CTS.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--19-->
                    <li class="item">
                        <div class="item__inner" style="border-right: none;">
                            <p class="item__thumbnail"><span class="item__span"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_keylex_500_key_Other_company.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img20.jpg" height="189" width="134" alt=""></a></span></p>
                            <p class="item__tit"><span class="item__span">【キーレックス500鍵付 他社製品取替商品】</span></p>
                            <p class="item__text">現在ご使用の他社製品をそのまま利用して、シリンダー部分をキーレックス500に取り替えできます。ボタン操作だけでなく鍵でも解錠できますので、幅広い運用管理が可能です。新規に取り付ける場合は、当該製品の錠・受座・サムターン・ハンドルをあらかじめご用意ください。</p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_keylex_500_key_Other_company.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--20 hidden-->
                    <li class="item">
                        <div class="item__inner" style=" visibility:hidden ">
                            <p class="item__thumbnail"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img17.jpg" height="189" width="134" alt=""></span></p>
                            <p class="item__tit"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/keylex.png" alt=""></span></p>
                            <p class="item__text">キーレックスシリーズの価格表となります。価格表は不定期に、更新および追加されますので、定期的にご確認ください。<br><br></p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/keylex_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--21 hidden-->
                    <li class="item">
                        <div class="item__inner" style=" visibility:hidden ">
                            <p class="item__thumbnail"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img17.jpg" height="189" width="134" alt=""></span></p>
                            <p class="item__tit"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/keylex.png" alt=""></span></p>
                            <p class="item__text">キーレックスシリーズの価格表となります。価格表は不定期に、更新および追加されますので、定期的にご確認ください。<br><br></p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/keylex_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--22-->
                    <li class="item">
                        <div class="item__inner" style="border-right: none;">
                            <p class="item__thumbnail"><span class="item__span"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_keylex_500_Poste.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img19.jpg" height="189" width="134" alt=""></a></span></p>
                            <p class="item__tit"><span class="item__span">【MIWA POSTE対応キーレックス】</span></p>
                            <p class="item__text">現在ご使用の【MIWA】POSTEをそのまま利用して、シリンダー部分をキーレックス500に取り替えできます。新規に取り付ける場合は、POSTEの錠・受座・サムターンをあらかじめご用意ください。</p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_keylex_500_Poste.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--23 hidden-->
                    <li class="item">
                        <div class="item__inner" style=" visibility:hidden ">
                            <p class="item__thumbnail"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img17.jpg" height="189" width="134" alt=""></span></p>
                            <p class="item__tit"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/keylex.png" alt=""></span></p>
                            <p class="item__text">キーレックスシリーズの価格表となります。価格表は不定期に、更新および追加されますので、定期的にご確認ください。<br><br></p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/keylex_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--24 hidden-->
                    <li class="item">
                        <div class="item__inner" style=" visibility:hidden ">
                            <p class="item__thumbnail"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img17.jpg" height="189" width="134" alt=""></span></p>
                            <p class="item__tit"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/keylex.png" alt=""></span></p>
                            <p class="item__text">キーレックスシリーズの価格表となります。価格表は不定期に、更新および追加されますので、定期的にご確認ください。<br><br></p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/keylex_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--25-->
                    <li class="item">
                        <div class="item__inner" style="border-right: none;">
                            <p class="item__thumbnail"><span class="item__span"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_keylex_500_key.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img04.jpg" height="189" width="134" alt=""></a></span></p>
                            <p class="item__tit"><span class="item__span">【キーレックス500 鍵付商品】</span></p>
                            <p class="item__text">リーズナブルなサブキーモデルに鍵付仕様を設定しました。ボタン操作だけでなく鍵でも解錠できますので、幅広い運用管理が可能です。</p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_keylex_500_key.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--26 hidden-->
                    <li class="item">
                        <div class="item__inner" style=" visibility:hidden ">
                            <p class="item__thumbnail"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img17.jpg" height="189" width="134" alt=""></span></p>
                            <p class="item__tit"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/keylex.png" alt=""></span></p>
                            <p class="item__text">キーレックスシリーズの価格表となります。価格表は不定期に、更新および追加されますので、定期的にご確認ください。<br><br></p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/keylex_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--27 hidden-->
                    <li class="item">
                        <div class="item__inner">
                            <div style="visibility:hidden">
                            <p class="item__thumbnail"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img17.jpg" height="189" width="134" alt=""></span></p>
                            <p class="item__tit"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/keylex.png" alt=""></span></p>
                            <p class="item__text">キーレックスシリーズの価格表となります。価格表は不定期に、更新および追加されますので、定期的にご確認ください。<br><br></p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/keylex_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                            </div>
                        </div>
                    </li>
                    <!--28-->
                    <li class="item">
                        <div class="item__inner" style="border-right: none;">
                            <p class="item__thumbnail"><span class="item__span"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_keylex_800_double_sliding_door.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img07.jpg" height="189" width="134" alt=""></a></span></p>
                            <p class="item__tit"><span class="item__span">【引違い戸自動施錠】</span></p>
                            <p class="item__text">キーレックス800シリーズに業界初の引違い戸自動施錠が誕生しました。引違い戸にも「安全・安心・快適生活」をお約束します。</p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_keylex_800_double_sliding_door.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--29 hidden-->
                    <li class="item">
                        <div class="item__inner" style=" visibility:hidden ">
                            <p class="item__thumbnail"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img17.jpg" height="189" width="134" alt=""></span></p>
                            <p class="item__tit"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/keylex.png" alt=""></span></p>
                            <p class="item__text">キーレックスシリーズの価格表となります。価格表は不定期に、更新および追加されますので、定期的にご確認ください。<br><br></p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/keylex_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--30 hidden-->
                    <li class="item">
                        <div class="item__inner" style=" visibility:hidden ">
                            <p class="item__thumbnail"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img17.jpg" height="189" width="134" alt=""></span></p>
                            <p class="item__tit"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/keylex.png" alt=""></span></p>
                            <p class="item__text">キーレックスシリーズの価格表となります。価格表は不定期に、更新および追加されますので、定期的にご確認ください。<br><br></p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/keylex_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--31-->
                    <li class="item">
                        <div class="item__inner" style="border-right: none;">
                            <p class="item__thumbnail"><span class="item__span"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_keylex_047_One_side.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img10.jpg" height="189" width="134" alt=""></a></span></p>
                            <p class="item__tit"><span class="item__span">【キーレックス047 片面仕様】</span></p>
                            <p class="item__text">コンパクトなサブキーモデルのキーレックス047に扱いやすい片面ボタンタイプが登場しました。<br><br></p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_keylex_047_One_side.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--32 hidden-->
                    <li class="item">
                        <div class="item__inner" style=" visibility:hidden ">
                            <p class="item__thumbnail"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img17.jpg" height="189" width="134" alt=""></span></p>
                            <p class="item__tit"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/keylex.png" alt=""></span></p>
                            <p class="item__text">キーレックスシリーズの価格表となります。価格表は不定期に、更新および追加されますので、定期的にご確認ください。<br><br></p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/keylex_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--33 hidden-->
                    <li class="item">
                        <div class="item__inner" style=" visibility:hidden ">
                            <p class="item__thumbnail"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img17.jpg" height="189" width="134" alt=""></span></p>
                            <p class="item__tit"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/keylex.png" alt=""></span></p>
                            <p class="item__text">キーレックスシリーズの価格表となります。価格表は不定期に、更新および追加されますので、定期的にご確認ください。<br><br></p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/keylex_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--34-->
                    <li class="item">
                        <div class="item__inner" style="border-right: none;">
                            <p class="item__thumbnail"><span class="item__span"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_keylex_cover.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/catalog_keylex_cover-1.png" height="189" width="134" alt=""></a></span></p>
                            <p class="item__tit"><span class="item__span">【キーレックスカバー】</span></p>
                            <p class="item__text">外部使用の際、キーレックスを保護するカバーです。</p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/catalog_keylex_cover.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--35 hidden-->
                    <li class="item">
                        <div class="item__inner" style=" visibility:hidden ">
                            <p class="item__thumbnail"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img17.jpg" height="189" width="134" alt=""></span></p>
                            <p class="item__tit"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/keylex.png" alt=""></span></p>
                            <p class="item__text">キーレックスシリーズの価格表となります。価格表は不定期に、更新および追加されますので、定期的にご確認ください。<br><br></p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/keylex_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                    <!--36 hidden-->
                    <li class="item">
                        <div class="item__inner" style=" visibility:hidden ">
                            <p class="item__thumbnail"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/img17.jpg" height="189" width="134" alt=""></span></p>
                            <p class="item__tit"><span class="item__span"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/keylex.png" alt=""></span></p>
                            <p class="item__text">キーレックスシリーズの価格表となります。価格表は不定期に、更新および追加されますので、定期的にご確認ください。<br><br></p>
                            <p class="item__btn"><a href="<?php echo get_template_directory_uri(); ?>/assets/catalog/pdf/keylex_pricelist.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/catalog/btn_download.png" height="47" width="280" alt="ダウンロード" class="op"></a></p>
                        </div>
                    </li>
                </ul>

                <!--
    <div class="mainArea__subBlock_wrap">
      <ul class="mainArea__block mainArea__subBlock">
      </ul>
    </div>
-->
            </div>
            <!-- /.mainArea -->


            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>

    </div>
    <!-- /#container -->

    <?php get_footer(); ?>
