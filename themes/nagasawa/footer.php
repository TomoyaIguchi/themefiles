<footer id="footer" class="footer">
  <div class="footer__bigMenu">
    <ul class="footer__bigMenu_block">
      <li class="item op">
        <a href="<?php echo home_url(); ?>/shop/">
        <div class="footer__bigMenu_inner">
        <h3 class="footer__bigMenu_tit footer__bigMenu_marker_style">KSS加盟店・取扱店情報</h3>
        <p class="footer__bigMenu_para">
          ユーザーの皆様へのより細やかなサービスの提供を目的に、<br>
          全国的ネットワークで組織された長沢製作所独自の加盟店情報です。
        </p>
        </div>
        </a>
      </li>
      <li class="item op">
        <a href="<?php echo home_url(); ?>/shop/detail/ability/sell/">
        <div class="footer__bigMenu_inner">
        <h3 class="footer__bigMenu_tit footer__bigMenu_marker_style">ご購入・取付・メンテナンスのご依頼</h3>
        <p class="footer__bigMenu_para">
          商品のご購入や取付、メンテナンスについてのご依頼はこちらから。
        </p>
        </div>
        </a>
      </li>
      <li class="item op">
        <a href="<?php echo home_url(); ?>/catalog/">
        <div class="footer__bigMenu_inner">
        <h3 class="footer__bigMenu_tit footer__bigMenu_marker_style">カタログダウンロード</h3>
        <p class="footer__bigMenu_para">
          NAGASAWA製品の商品カタログのご案内です。<br>
          PDFファイルカタログをダウンロードできます。
        </p>
        </div>
        </a>
      </li>
      <li class="item op">
        <a href="<?php echo home_url(); ?>/glossary/">
        <div class="footer__bigMenu_inner">
        <h3 class="footer__bigMenu_tit footer__bigMenu_marker_style">用語集</h3>
        <p class="footer__bigMenu_para">
          商品説明に関連した、基礎用語や専門用語を解説しています。
        </p>
        </div>
        </a>
      </li>
    </ul>
  </div>
  <ul class="footer__subMenu">
    <li class="item"><a href="<?php echo home_url(); ?>/privacy_policy/" class="link">プライバシーポリシー</a></li>
    <li class="item"><a href="<?php echo home_url(); ?>/sitemap/" class="link">サイトマップ</a></li>
    <li class="item"><a href="http://www.jalose.org/" class="footer__icon_style link" target="_blank">日本ロックセキュリティ協同組合</a></li>
    <li class="item"><a href="http://www.chojukyo.jp/" class="footer__icon_style link" target="_blank">長期住宅使用部材標準化推進協議会（長住協）</a></li>
    <li class="item"><a href="http://www.jha-net.or.jp/gyoumu.htm" class="footer__icon_style link" target="_blank">東京建築金物工業協同組合</a></li>
  </ul>
  <p class="footer__copy">COPYRIGHT © 2016 NAGASAWA MANUFACTURING CO.,LTD. ALL RIGHTS RESERVED.</p>
</footer>
<!-- Scripts Start -->
  
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/common/js/lib/jquery.js"></script>  
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/common/js/lib/setup.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/common/js/browserCheck.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/common/js/common.js"></script>

<?php if (is_home()): ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/common/js/lib/modernizr.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/common/js/top.js?171005"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js?171005"></script>
<script>
  
  // ===================================================================
  // news部分切り替え
  // ===================================================================
  $(function(){

    var $item = $('.news_title'),
        $date = $item.find('.date'),
        $title = $item.find('.title'),
        $link = $item.find('a'),

        $next = $('.next'),
        $prev = $('.prev'),

        index = 0,
        list = [

        <?php // トップお知らせ
          query_posts(array(
            'post_type' =>'news',
            'posts_per_page'=> 5,
            'offset' => 0
          ));
          if(have_posts()): while(have_posts()): the_post(); ?>

          {'date':'<?php the_time('Y/m/d'); ?>','title':'<?php the_title(); ?>','link':'<?php the_permalink(); ?>'},

        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>

        ],
        len = list.length;

    function next() {

      index++;
      if (index == len) index = 0;

    }

    function prev() {

      index--;
      if (index == -1) index = len - 1;

    }

    function set() {

      $date.text(list[index].date);
      $title.text(list[index].title);
      $link.attr('href', list[index].link);

    }


    function nextArticle() {

      next();
      set();

    }

    function prevArticle() {

      prev();
      set();

    }

    $next.on('click', nextArticle);
    $prev.on('click', prevArticle);

  })
</script>
<?php elseif (is_singular('products')): ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/products/js/detail.js"></script>
<script type="text/javascript">

$(document).on('ready', function(event) {
  
  $(window).on('load', function(event) {
    
    var $box = $('.imgBox__item');

    // imgレイアウト調整
    $box.each(function(index, el) {

        $wrap = $(this);
        $target = $wrap.find('img');
        
        var size = new jp.co.nagasawa.setCenter_r($wrap,$target);
        size.init();
        size.run();
      
    });

  });

});
// ===================================================================
// slider
// ===================================================================

$(function(){

    $('.sliderBox').each(function (boxIndex) {

        var $slider = $(this),
            $slideWrap = $slider.find('.sliderBox__inner'),
            $slideBox = $slider.find('.sliderBox__list'),
            $slide = $slider.find('.sliderBox__list_item'),
            $nav = $slider.find('.nextprevBox img'),
            $indicator = $slider.find('.currentBox'),
            $indicatorItem,
            $imgBox = $slider.prev(),

            slideCnt = $slide.length,
            mrCnt = slideCnt - 1,
            defaultCnt = 5,              
            len = Math.floor(slideCnt / defaultCnt),
            currentIndex = 0,
            indicatorHTML = '',

            dur = 330,              
            ease = 'easeInOutQuad',

            slideW,
            w = $slide.find('.thumbnail img').width(),
            mr = parseInt($slide.css('margin-right'));

        function slideReady(){

          // widthが小数点なのを補正
          $slide.width(Math.floor($slide.find('.thumbnail img').width()));

          var slideDefCnt = 5,
              mrDefCnt = 4,
              slideBoxW;

              slideW = w * slideDefCnt + mr * mrDefCnt;
              slideBoxW = w * slideCnt + mr * mrCnt;

          $slideWrap.width(slideW);
          $slideBox.width(slideBoxW);

        }

        function indicatorReady() {
            // lenの調整
            if (slideCnt == defaultCnt) len = 0;

            for (var i = 0; i <= len; i++) {
              indicatorHTML += '<li class="currentBox__box"></li>';
            };
              
          // インジケーターにコンテンツを挿入
          $indicator.html(indicatorHTML);

          // onクラス追加
          $('.currentBox__box:first-child').addClass('on');
          $indicatorItem = $indicator.find('.currentBox__box');
        }

        function goToSlide (index) {

            $slideBox.stop().animate({ left: - (slideW + mr) * index + 'px' }, dur, ease);

            currentIndex = index;

            updateNav();
        }

        function updateNav () {
            var $navPrev = $slider.find('.left'), // Prev (戻る) リンク
                $navNext = $slider.find('.right'); // Next (進む) リンク
            // もし最初のスライドなら Prev ナビゲーションを無効に
            if (currentIndex === 0) {
                $navPrev.addClass('disabled');
            } else {
                $navPrev.removeClass('disabled');
            }
            // もし最後のスライドなら Next ナビゲーションを無効に
            if (currentIndex === len) {
                $navNext.addClass('disabled');
            } else {
                $navNext.removeClass('disabled');
            }

            // 現在のスライドのインジケーターを無効に
            $indicatorItem
              .removeClass('on')
              .eq(currentIndex)
              .addClass('on');

        }

        function clickHandler() {
            if ($(this).hasClass('left')) {
                goToSlide(currentIndex - 1);
            } else {
                goToSlide(currentIndex + 1);
            } 
        }

        function clickHandler_indicator() {
            if (!$(this).hasClass('on')) {
                goToSlide($(this).index());
            }
        }

        function clickHandler_slideMainVisual(e) {

            var $visual,
                $spec,

                index = $slide.index(this),
                num = $(this).data('thumbnail');

            // frame変更
            if (!$(this).hasClass('on')) {
                $slide.find('.bg')
                  .stop().animate({'border-width': 0} ,dur ,ease ,function(){
                    $slide.find('.bg')
                      .removeClass('on')
                      .eq(index)
                      .addClass('on')
                      .stop().animate({'border-width': '3px'},dur ,ease);
                  });
            }

            // 画像変更
            // if (e.data.index % 2 == 0) {
                $visual = $imgBox.find('.left img');
                $spec = $imgBox.find('.right img');
            // } else {
            //     $visual = $imgBox.find('.right img');
            //     $spec = $imgBox.find('.left img');
            // }

            var src = $(this).find('.thumbnail img').attr('src');

            // サムネイルがnoimageかどうかで判定
            if ( src.indexOf('imgSno') != -1 ) {

              $visual
                .attr('src', '/common/img/products/keylex_detail/imgBno.jpg');
              $spec
                .attr('src', '/common/img/products/keylex_detail/imgBno.jpg');

              // モーダル用にimgBox__itemのdata-numを書き換え
              $(this).closest('.row__item').find('.imgBox__item').attr('data-num',-1);

            } else {

              $visual
                .attr('src', modalImgList[num][0][1]);
              $spec
                .attr('src', modalImgList[num][1][1]);

              // モーダル用にimgBox__itemのdata-numを書き換え
              $(this).closest('.row__item').find('.imgBox__item').attr('data-num',num);

            }

        }

    // インベントの登録
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

        function setEvents() {

          // ready
          indicatorReady();
          slideReady();
          goToSlide(currentIndex);

          // click
          $nav.on('click', clickHandler);
          $indicatorItem.on('click', clickHandler_indicator);
          $slide.on('click', {index:boxIndex}, clickHandler_slideMainVisual);

        }

        setEvents();

    });

});

// ===================================================================
// モーダル_slide
// ===================================================================

$(function(){

  var $target = $('.imgBox__item'),
      $bg = $('.modalBg'),
      $box = $bg.find('.modalBox'),
      $wrap = $bg.find('.imgWrap'),
      $img = $bg.find('.modalImg'),

      ml,
      mt,

      isVisual;

  function modal_toggle(e) {
          
    if (!$(e.target).hasClass('modalBg') && !$(e.target).hasClass('close')) {

      var num = $(this).attr('data-num');
      isVisual = $(this).hasClass('left');

      if (num == -1) return;

      // ビジュアルと、設計図の判定
      if (isVisual) {
        src = modalImgList[num][0][2];
      } else {
        src = modalImgList[num][1][2];
      }

      $img
        .css('opacity', '0')
        .attr('src', src);

    } else {

      bgToggle();

    }


    return false;
  }

  function imgLoad() {

      setSizeBox($(this));

      bgToggle();

      // boxレイアウト調整
      ml = $box.width() / 2;
      mt = $box.height() / 2;

      $box
        .css({
          'margin-left': -ml,
          'margin-top': -mt
        });          

      // imgレイアウト調整
      // var set = new jp.co.nagasawa.setCenter($wrap,$(this));

      $(this)
        .css({
          'opacity':'1',
        });
  
  }

  function bgToggle() {
    $bg.toggleClass('is-none');
    $('html').toggleClass('is-hidden');
  }

  function setSizeBox($obj) {

    var w,h,W,H,
        ratio = 0.8;

    w = $obj.get(0).width;
    h = $obj.get(0).height;
    W = $(window).width() * ratio;
    H = $(window).height() * ratio;

    if (W < 800) W = 800;
    if (H < 600) H = 600;

    ratioW = h / w;
    ratio = H / W;

    if (w > W) {

      if (h > H) {

        // 縦長
        if (ratio > ratioW) {

          $box
            .width(W)
            .height(h * (W / w));
          $wrap
            .width(W - 70)
            .height(h * (W / w) - 30);
          $obj
            .width(W - 70)
            .height(h * (W / w) - 30);


        } else {

          $box
            .width(w * (H / h))
            .height(H - 40);
          $wrap
            .width(w * (H / h) - 70)
            .height(H - 70);
          $obj
            .width(w * (H / h) - 70)
            .height(H - 70);


        }

      } else {

        $box
          .width(W)
          .height(h * (W / w));
        $wrap
          .width(W - 70)
          .height(h * (W / w) - 30);
        $obj
          .width(W - 70)
          .height(h * (W / w) - 30);


      }


    } else {


      if (h > H) {

        $box
          .width(w * (H / h))
          .height(H - 40);
        $wrap
          .width(w * (H / h) - 70)
          .height(H - 70);
        $obj
          .width(w * (H / h) - 70)
          .height(H - 70);


      } else {


          $box
            .width(w + 70)
            .height(h + 30);
          $wrap
            .width(w)
            .height(h);
          $obj
            .width(w)
            .height(h);


      }

    }

    var ml,mt;

    ml = $obj.width() / 2;
    mt = $obj.height() / 2;

    $obj
      .css({
        'margin-left': -ml,
        'margin-top': -mt
      }); 

  }


  function setEvents() {

    // load
    $img.on('load', imgLoad);
    // click
    $target.add('.modalBg, .modalBg .close').on('click', modal_toggle);
    // click
    $img.on('click', function(event) {event.stopPropagation();});
    $wrap.on('click', function(event) {event.stopPropagation();});
    $box.on('click', function(event) {event.stopPropagation();});

  }

  setEvents();

});

// ===================================================================
// モーダル_side_spec
// ===================================================================

$(function(){

  var $target = $('.row__item_list').find('li'),
      $bg = $('.modalBg__spec'),
      $box = $bg.find('.modalBox'),
      $wrap = $bg.find('.imgWrap'),
      $img = $bg.find('.modalImg'),

      ml,
      mt,

      isLeft;

  function modal_toggle(e) {
          
    if (!$(e.target).hasClass('modalBg__spec') && !$(e.target).hasClass('close')) {

      var num = $(this).attr('data-num');
      if (num == -1) return;

      isLeft = $(this).hasClass('left');

      if (isLeft) {
        src = side_modalImgList[num][0][1];
      } else {
        src = side_modalImgList[num][1][1];
      }

      $img
        .css('opacity', '0')
        .attr('src', src);

    } else {

      bgToggle();

    }

    return false;
  }

  function imgLoad() {

      setSizeBox($(this));

      bgToggle();

      // boxレイアウト調整
      ml = $box.width() / 2;
      mt = $box.height() / 2;

      $box
        .css({
          'margin-left': -ml,
          'margin-top': -mt
        });          

      // var set = new jp.co.nagasawa.setCenter($wrap,$(this));

      $(this)
        .css({
          'opacity':'1',
        });
  
  }

  function bgToggle() {
    $bg.toggleClass('is-none');
    $('html').toggleClass('is-hidden');
  }

  function setSizeBox($obj) {

    var w,h,W,H,
        ratio = 0.8;

    w = $obj.get(0).width;
    h = $obj.get(0).height;
    W = $(window).width() * ratio;
    H = $(window).height() * ratio;

    if (W < 800) W = 800;
    if (H < 600) H = 600;

    ratioW = h / w;
    ratio = H / W;

    if (w > W) {

      if (h > H) {

        // 縦長
        if (ratio > ratioW) {

          $box
            .width(W)
            .height(h * (W / w));
          $wrap
            .width(W - 70)
            .height(h * (W / w) - 30);
          $obj
            .width(W - 70)
            .height(h * (W / w) - 30);


        } else {

          $box
            .width(w * (H / h))
            .height(H - 40);
          $wrap
            .width(w * (H / h) - 70)
            .height(H - 70);
          $obj
            .width(w * (H / h) - 70)
            .height(H - 70);


        }

      } else {

        $box
          .width(W)
          .height(h * (W / w));
        $wrap
          .width(W - 70)
          .height(h * (W / w) - 30);
        $obj
          .width(W - 70)
          .height(h * (W / w) - 30);


      }


    } else {


      if (h > H) {

        $box
          .width(w * (H / h))
          .height(H - 40);
        $wrap
          .width(w * (H / h) - 70)
          .height(H - 70);
        $obj
          .width(w * (H / h) - 70)
          .height(H - 70);


      } else {


          $box
            .width(w + 70)
            .height(h + 30);
          $wrap
            .width(w)
            .height(h);
          $obj
            .width(w)
            .height(h);


      }

    }

    var ml,mt;

    ml = $obj.width() / 2;
    mt = $obj.height() / 2;

    $obj
      .css({
        'margin-left': -ml,
        'margin-top': -mt
      }); 

  }


  function setEvents() {

    // click
    $target.add('.modalBg__spec, .modalBg__spec .close').on('click', modal_toggle);
    // click
    $img.on('click', function(event) {event.stopPropagation();});
    $wrap.on('click', function(event) {event.stopPropagation();});
    $box.on('click', function(event) {event.stopPropagation();});
    // load
    $img.on('load', imgLoad);

  }

  setEvents();


});

$(function(){

  var h = $('.basicBlock__table').height();
  $('.basicBlock__table').find('.item:first-child').height(h);

})

</script>
<?php elseif (is_page(array('keylex','handle','kodai'))): ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/products/js/script.js"></script>
<?php //elseif (is_page('news')): ?>
<?php elseif (( get_post_type() == 'news')): ?>
<script type="text/javascript">
  // ===================================================================
  // カテゴリーページへ遷移
  // ===================================================================
  $(function(){

    var $list = $('.selectBoxArea__list'),
        $item = $list.find('.selectBoxArea__listItem'),

        url,
        urlList = [
          '<?php echo home_url(); ?>/news/kss/',
          '<?php echo home_url(); ?>/news/event/',
          '<?php echo home_url(); ?>/news/other/',
          '<?php echo home_url(); ?>/news/new_product/',
          '<?php echo home_url(); ?>/news/shop/'
        ];


    $item.on('click', function(event) {

      var index = $item.index(this);

      url = urlList[index];

      location.href = url;

    }); 

  })
</script>
<?php elseif (is_page('support')): ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/support/js/script.js"></script>
<?php elseif (is_singular('support') && is_single(array('faq','trouble')) ): ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/support/js/script.js"></script>
<script>

$(window).on('load', function(event) {
  
  var url = location.href,
      param = {};

  if (url.indexOf('?') != -1) {

    var query = url.split('?')[1];

    var queryItems = query.split('&');

    for( var i = 0, length = queryItems.length; i<length; i++ ){
        queryItem = queryItems[i].split('=');
        param[queryItem[0]] = queryItem[1];

    }

    if (param.id == 1) {

      $('.tabList').eq(1).trigger('click');
      toScroll_trouble();

    }

  }
  
  function toScroll_trouble() {

      var target,
          position,
          dif = 0,
          
          dur = 600,
          ease = 'easeOutExpo';

      // 差分取得
      if ($(this).data('diff')) dif = $(this).data('diff');

      target = $('#1');
      console.log(target);

      position = target.offset().top;
      position = position - dif;

      console.log(position);

      $('body,html').stop().animate({scrollTop:position}, dur, ease);

      return false;

  }

});


</script>
<?php elseif (is_singular('support') && is_single('info') ): ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/support/js/script.js"></script>
<script type="text/javascript">

  // ===================================================================
  // コンテンツモーダル
  // ===================================================================  

  $(function(){

    //--------------------------------------------------
    //
    //  keylex用モーダル
    //
    //--------------------------------------------------

    var $openKeykex = $('#tab__keylex .modalOpen');

    $openKeykex.each(function(index) {

      var id = $(this).closest('.blockWrap').data('id');

      var $target = $('.modalKeylex .modalBg' + id).find('.modalWrap');

          H = $(window).height(),
          h = $target.height();

      function setMt() {

        var mT;

        H = $(window).height();
        h = $target.height();

        mT = H - h;
        mT = mT / 2;

        if (mT < 50) {
          mT = 50;
        }

        $target.css('margin-top', mT);

        $('.modalKeylex .modalBg' + id).removeClass('is-unvisible');
      }


      function modal_toggle() {

        $('.modalKeylex .modalBg' + id)
          .addClass('is-unvisible')
          .toggleClass('is-none');

        setMt();

        $('html').toggleClass('is-hidden');

        return false;
      }

      function setEvents() {

        // click
        $openKeykex.eq(index).on('click', modal_toggle);
        $('.modalKeylex .modalBg' + id).find('.close').on('click', modal_toggle);
        $('.modalKeylex .modalBg' + id).on('click', modal_toggle);
        $target.on('click', function(event) {
          event.stopPropagation();
        });

        // resize
        $(window).on('resize', setMt);

      }

      setEvents();

    });

    //--------------------------------------------------
    //
    //  handle用モーダル
    //
    //--------------------------------------------------

    var $openHandle = $('#tab__handle .modalOpen');

    $openHandle.each(function(index) {

      var id = $(this).closest('.blockWrap').data('id');

      var $target = $('.modalHandle .modalBg' + id).find('.modalWrap');

          H = $(window).height(),
          h = $target.height();

      function setMt() {

        var mT;

        H = $(window).height();
        h = $target.height();

        mT = H - h;
        mT = mT / 2;

        if (mT < 50) {
          mT = 50;
        }

        $target.css('margin-top', mT);

        $('.modalHandle .modalBg' + id).removeClass('is-unvisible');
      }


      function modal_toggle() {

        $('.modalHandle .modalBg' + id)
          .addClass('is-unvisible')
          .toggleClass('is-none');

        setMt();

        $('html').toggleClass('is-hidden');

        return false;
      }

      function setEvents() {

        // click
        $openHandle.eq(index).on('click', modal_toggle);
        $('.modalHandle .modalBg' + id).find('.close').on('click', modal_toggle);
        $('.modalHandle .modalBg' + id).on('click', modal_toggle);
        $target.on('click', function(event) {
          event.stopPropagation();
        });

        // resize
        $(window).on('resize', setMt);

      }

      setEvents();

    });

    //--------------------------------------------------
    //
    //  handle用モーダル
    //
    //--------------------------------------------------

    var $openKodai = $('#tab__kodai .modalOpen');

    $openKodai.each(function(index) {

      var id = $(this).closest('.blockWrap').data('id');

      var $target = $('.modalKodai .modalBg' + id).find('.modalWrap');

          H = $(window).height(),
          h = $target.height();

      function setMt() {

        var mT;

        H = $(window).height();
        h = $target.height();

        mT = H - h;
        mT = mT / 2;

        if (mT < 50) {
          mT = 50;
        }

        $target.css('margin-top', mT);

        $('.modalKodai .modalBg' + id).removeClass('is-unvisible');
      }


      function modal_toggle() {

        $('.modalKodai .modalBg' + id)
          .addClass('is-unvisible')
          .toggleClass('is-none');

        setMt();

        $('html').toggleClass('is-hidden');

        return false;
      }

      function setEvents() {

        // click
        $openKodai.eq(index).on('click', modal_toggle);
        $('.modalKodai .modalBg' + id).find('.close').on('click', modal_toggle);
        $('.modalKodai .modalBg' + id).on('click', modal_toggle);
        $target.on('click', function(event) {
          event.stopPropagation();
        });

        // resize
        $(window).on('resize', setMt);

      }

      setEvents();

    });


  })

  // ===================================================================
  // 画像モーダル　normal
  // ===================================================================

  $(function(){

      var $bg = $('.modalBgSupport'),
          $box = $bg.find('.modalBox'),
          $wrap = $bg.find('.imgWrap'),
          $img = $bg.find('.modalImg'),

          ml,
          mt,

          isVisual;

      function modal_toggle(e) {
        if (!$(e.target).hasClass('modalBgSupport') && !$(e.target).hasClass('close')) {

          var num = $(this).data('num');

          src = imgList_normal[e.data][num];

          $img
            .css('opacity', '0')
            .attr('src', src);

        } else {

          bgToggle();

        }


        return false;
      }

      function imgLoad() {

          setSizeBox($(this));

          bgToggle();

          // boxレイアウト調整
          ml = $box.width() / 2;
          mt = $box.height() / 2;

          $box
            .css({
              'margin-left': -ml,
              'margin-top': -mt
            });          

          // imgレイアウト調整
          // var set = new jp.co.nagasawa.setCenter($wrap,$(this));

          $(this)
            .css({
              'opacity':'1',
            });
      
      }

      function bgToggle() {
        $bg.toggleClass('is-none');
        $('html').toggleClass('is-hidden');
      }

      function setSizeBox($obj) {

        var w,h,W,H,
            ratio = 0.8;

        w = $obj.get(0).width;
        h = $obj.get(0).height;
        W = $(window).width() * ratio;
        H = $(window).height() * ratio;

        if (W < 800) W = 800;
        if (H < 600) H = 600;

        ratioW = h / w;
        ratio = H / W;

        if (w > W) {

          if (h > H) {

            // 縦長
            if (ratio > ratioW) {

              $box
                .width(W)
                .height(h * (W / w));
              $wrap
                .width(W - 70)
                .height(h * (W / w) - 30);
              $obj
                .width(W - 70)
                .height(h * (W / w) - 30);


            } else {

              $box
                .width(w * (H / h))
                .height(H - 40);
              $wrap
                .width(w * (H / h) - 70)
                .height(H - 70);
              $obj
                .width(w * (H / h) - 70)
                .height(H - 70);


            }

          } else {

            $box
              .width(W)
              .height(h * (W / w));
            $wrap
              .width(W - 70)
              .height(h * (W / w) - 30);
            $obj
              .width(W - 70)
              .height(h * (W / w) - 30);


          }


        } else {


          if (h > H) {

            $box
              .width(w * (H / h))
              .height(H - 40);
            $wrap
              .width(w * (H / h) - 70)
              .height(H - 70);
            $obj
              .width(w * (H / h) - 70)
              .height(H - 70);


          } else {


              $box
                .width(w + 70)
                .height(h + 30);
              $wrap
                .width(w)
                .height(h);
              $obj
                .width(w)
                .height(h);


          }

        }

        var ml,mt;

        ml = $obj.width() / 2;
        mt = $obj.height() / 2;

        $obj
          .css({
            'margin-left': -ml,
            'margin-top': -mt
          }); 

      }


      function setEvents() {

        // load
        $img.on('load', imgLoad);

        // click
        // open
        var $block = $('.contentsArea .blockWrap');
        $block.each(function(index, el) {
          var $target = $block.eq(index).find('.block__list_item img');
          $target.on('click', index ,modal_toggle);
        });
        // close
        $('.modalBgSupport, .modalBgSupport .close').on('click', modal_toggle);

        // click
        $img.on('click', function(event) {event.stopPropagation();});
        $wrap.on('click', function(event) {event.stopPropagation();});
        $box.on('click', function(event) {event.stopPropagation();});

      }

      setEvents();

    });

  // ===================================================================
  // 画像モーダル　modal
  // ===================================================================

  $(function(){

      var $bg = $('.modalBgSupport__modal'),
          $box = $bg.find('.modalBox'),
          $wrap = $bg.find('.imgWrap'),
          $img = $bg.find('.modalImg'),

          ml,
          mt,

          isVisual;

      function modal_toggle(e) {
              
        if (!$(e.target).hasClass('modalBgSupport__modal') && !$(e.target).hasClass('close')) {

          var num = $(this).data('num');

          src = imgList_modal[e.data][num];

          $img
            .css('opacity', '0')
            .attr('src', src);

        } else {

          bgToggle();

        }


        return false;
      }

      function imgLoad() {

          setSizeBox($(this));

          bgToggle();

          // boxレイアウト調整
          ml = $box.width() / 2;
          mt = $box.height() / 2;

          $box
            .css({
              'margin-left': -ml,
              'margin-top': -mt
            });          

          // imgレイアウト調整
          // var set = new jp.co.nagasawa.setCenter($wrap,$(this));

          $(this)
            .css({
              'opacity':'1',
            });
      
      }

      function bgToggle() {
        $bg.toggleClass('is-none');
        // $('html').toggleClass('is-hidden');
      }

      function setSizeBox($obj) {

        var w,h,W,H,
            ratio = 0.8;

        w = $obj.get(0).width;
        h = $obj.get(0).height;
        W = $(window).width() * ratio;
        H = $(window).height() * ratio;

        if (W < 800) W = 800;
        if (H < 600) H = 600;

        ratioW = h / w;
        ratio = H / W;

        if (w > W) {

          if (h > H) {

            // 縦長
            if (ratio > ratioW) {

              $box
                .width(W)
                .height(h * (W / w));
              $wrap
                .width(W - 70)
                .height(h * (W / w) - 30);
              $obj
                .width(W - 70)
                .height(h * (W / w) - 30);


            } else {

              $box
                .width(w * (H / h))
                .height(H - 40);
              $wrap
                .width(w * (H / h) - 70)
                .height(H - 70);
              $obj
                .width(w * (H / h) - 70)
                .height(H - 70);


            }

          } else {

            $box
              .width(W)
              .height(h * (W / w));
            $wrap
              .width(W - 70)
              .height(h * (W / w) - 30);
            $obj
              .width(W - 70)
              .height(h * (W / w) - 30);


          }


        } else {


          if (h > H) {

            $box
              .width(w * (H / h))
              .height(H - 40);
            $wrap
              .width(w * (H / h) - 70)
              .height(H - 70);
            $obj
              .width(w * (H / h) - 70)
              .height(H - 70);


          } else {


              $box
                .width(w + 70)
                .height(h + 30);
              $wrap
                .width(w)
                .height(h);
              $obj
                .width(w)
                .height(h);


          }

        }

        var ml,mt;

        ml = $obj.width() / 2;
        mt = $obj.height() / 2;

        $obj
          .css({
            'margin-left': -ml,
            'margin-top': -mt
          }); 

      }


      function setEvents() {

        // load
        $img.on('load', imgLoad);

        // click
        // open
        var $block = $('.modalProduct .blockWrap');
        $block.each(function(index, el) {

          var $target = $block.eq(index).find('.block__list_item img');
          $target.on('click', index ,modal_toggle);
        });
        // close
        $('.modalBgSupport__modal, .modalBgSupport__modal .close').on('click', modal_toggle);

        // click
        $img.on('click', function(event) {event.stopPropagation();});
        $wrap.on('click', function(event) {event.stopPropagation();});
        $box.on('click', function(event) {event.stopPropagation();});

      }

      setEvents();
 
  });

</script>
<?php elseif (is_singular('case_study')): ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/case_study/js/script.js"></script>
<?php elseif ((is_parent_slug() == 'company') && is_page('info')) : ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBl8XhZTVUjPcrN7A9reDKHf44nSAxeZSU"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/company/js/info.js"></script>
<?php elseif ((is_parent_slug() == 'company') && is_page('business')) : ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/common/js/business.js"></script>
<?php elseif (is_page('catalog')): ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/catalog/js/script.js"></script>
<?php elseif (is_page('glossary')): ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/glossary/js/script.js"></script>
<?php elseif ((is_parent_slug() == 'shop') && is_page('detail')) : ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/common/js/shop_detail.js"></script>
<script>
  // ===================================================================
  // select box 選択都道府県
  // ===================================================================
  $(function() {

    var $displayPre = $('#prefecture .selectBoxArea__display'),
        $displayArea = $('#area .selectBoxArea__display'),
        $preWrap = $('#prefecture'),
        $prefecture = $('#prefecture .selectBoxArea__list'),
        $preList = $prefecture.find('.selectBoxArea__listItem'),
        $preOpt = $('#prefecture .selectBox option'),
        $area = $('#area .selectBoxArea__list'),
        $areaList = $area.find('.selectBoxArea__listItem'),
        $areaOptG = $('#area .selectBox optgroup'),
        $areaOpt = $areaOptG.find('option'),

        preID = false,
        cityID = false,

        index,
        temp;

    function getID() {

      var query = (location.href).split('/'),
          num = query[query.length-2];

      $areaOptG.each(function(index) {
        
        if ($(this).data('parent-id') == num) preID = num;

      });

      $areaOpt.each(function(index) {
        
        if ($(this).data('id') == num) {

          cityID = num;
          preID = $(this).closest('optgroup').data('parent-id');

        }

      });

    }

    function jumpPre() {

      index = $preList.index(this);
      var num = $preOpt.eq(index).val();

      location.href = '/shop/detail/' + shopUrl + '/' + num;

    }

    function jumpCity() {

      var i = $area.find('.selectBoxArea__listItem').index(this),
          num;

      $areaOptG.each(function(index, el) {

        if ($(this).data('parent-id') == preID) {

          num = $(this).find('option').eq(i).data('id');
        };      
      });

      location.href = '/shop/detail/' + shopUrl + '/' + preID + '/' + num;

    }

    function set() {

      var dom = '';

      for (var i = 0; i < areaList[index].length; i++) {
        dom += areaList[index][i];
      };

      $area.html(dom);

    }

    function transferParam() {

      // 都道府県
      var preText = $preWrap.find('[value="'+ preID +'"]').text();
      if (preText == '') preText = '以下から選択して下さい';
      else $prefecture.prepend('<li class="selectBoxArea__listItem reset"><span class="hoverArea">以下から選択して下さい</span></li>');

      $displayPre.text(preText);

      // 都道府県
      var cityText = $areaOptG.find('[data-id="'+ cityID +'"]').text();
      if (cityText == '') cityText = '以下から選択して下さい';
        
      $displayArea.text(cityText);


      // イベント設定
      $('.reset').off();
      $('.reset').on('click', function(event) {
        location.href = '<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"]; ?>' + '/shop/detail/' + shopUrl;

      });
    }

    function setCity() {

      var $optG = $('#area .selectBox optgroup'),

          len,
          textList = [],

          dom = '';

      $optG.each(function(index) {

        var id = $(this).data('parent-id')
        
        if (id == preID) {

          len = $(this).find('option').length;

          for (var i = 0; i < len; i++) {

            var text = $(this).find('option').eq(i).text();
            textList.push(text)

          };

        }      

      });

      // liタグの整形
      for (var i = 0; i < len; i++) {
        dom += '<li class="selectBoxArea__listItem" data-parent-id="'+ preID +'">' +
                  '<span class="hoverArea">'+ textList[i] +'</span>' +
                '</li>'
      };

      // 出力
      $area.html(dom);

      // イベント設定
      $area.find('.selectBoxArea__listItem').on('click', jumpCity);

    }

    function setEvents() {

      // ready
      getID();

      $preList.on('click', jumpPre);
      setCity();
      transferParam();

    }

    setEvents();

  });

</script>
<?php elseif (is_page('inquiry')): ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/inquiry/js/script.js"></script>
<?php elseif (is_page('document_request')): ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/document_request/js/script.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/document_request/js/jquery.mousewheel.min.js"></script>
<?php else : ?>

<?php endif; ?>

<?php wp_footer(); ?> 
</body>
</html>