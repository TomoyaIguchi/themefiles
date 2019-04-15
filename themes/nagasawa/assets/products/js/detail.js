// ===================================================================
// slider
// ===================================================================

$(function(){

    // slide visual
    var slideMainImg = {
        visual:[
          'imgBvisual01',
          'imgBvisual02',
          'imgBvisual03',
          'imgBvisual04',
          'imgBvisual05',
          'imgBvisual06',
          'imgBvisual07',
          'imgBvisual08'
        ],
        spec:[
          'imgBdesign01',
          'imgBdesign02',
          'imgBdesign03',
          'imgBdesign04',
          'imgBdesign05',
          'imgBdesign06',
          'imgBdesign07',
          'imgBdesign08'
        ]
    }

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
            w = $slide.width(),
            mr = parseInt($slide.css('margin-right'));

        function slideReady(){

          // widthが小数点なのを補正
          $slide.width(Math.floor($slide.width()));

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

                index = $slide.index(this);

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
            if (e.data.index % 2 == 0) {
                $visual = $imgBox.find('.left img');
                $spec = $imgBox.find('.right img');
            } else {
                $visual = $imgBox.find('.right img');
                $spec = $imgBox.find('.left img');
            }

            $visual
              .attr('src', '../../common/img/products/keylex_detail/' + slideMainImg.visual[index] + '.jpg');
            $spec
              .attr('src', '../../common/img/products/keylex_detail/' + slideMainImg.spec[index] + '.jpg');

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

        // setEvents();

    });

});

// ===================================================================
// モーダル_slide
// ===================================================================

$(function(){

  var $target = $('.imgBox__item').find('img'),
      $bg = $('.modalBg'),
      $box = $bg.find('.modalBox'),
      $wrap = $bg.find('.imgWrap'),
      $img = $bg.find('.modalImg'),

      ml,
      mt;

  function modal_toggle(e) {
          
    if (!$(e.target).hasClass('modalBg') && !$(e.target).hasClass('close')) {

      var src = $(this).attr('src'),
          index = src.slice(-6),
          index = index.slice(0,2);

      // ビジュアルと、設計図の判定
      if ( src.indexOf('visual') != -1 ) {
        src = '../../common/img/products/keylex_detail/imgMvisual' + index + '.jpg';
      } else {
        src = '../../common/img/products/keylex_detail/imgMdesign' + index + '.jpg';
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
            .height(H);
          $wrap
            .width(w * (H / h) - 70)
            .height(H - 30);
          $obj
            .width(w * (H / h) - 70)
            .height(H - 30);

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
          .height(H);
        $wrap
          .width(w * (H / h) - 70)
          .height(H - 30);
        $obj
          .width(w * (H / h) - 70)
          .height(H - 30);

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
    $img.on('click', function(event) {
      event.stopPropagation();
    });

  }

  // setEvents();

});

// ===================================================================
// モーダル_side_spec
// ===================================================================

$(function(){

  var $target = $('.row__item_list').find('img'),
      $bg = $('.modalBg__spec'),
      $box = $bg.find('.modalBox'),
      $wrap = $bg.find('.imgWrap'),
      $img = $bg.find('.modalImg'),

      ml,
      mt;

  function modal_toggle(e) {
          
    if (!$(e.target).hasClass('modalBg__spec') && !$(e.target).hasClass('close')) {

      var src = $(this).attr('src'),
          index = src.slice(-6),
          index = index.slice(0,2);

      // ビジュアルと、設計図の判定
        src = '../../common/img/products/keylex_detail/imgSpec' + index + '.jpg';

      $img
        .css('opacity', '0')
        .attr('src', src);

    } else {

      bgToggle();

    }

    return false;
  }

  function imgLoad() {

      bgToggle();

      // boxレイアウト調整
      ml = $box.width() / 2;
      mt = $box.height() / 2;

      $box
        .css({
          'margin-left': -ml,
          'margin-top': -mt
        });          

      var set = new jp.co.nagasawa.setCenter($wrap,$(this));

      $(this)
        .css({
          'opacity':'1',
        });
  
  }

  function bgToggle() {
    $bg.toggleClass('is-none');
    $('html').toggleClass('is-hidden');
  }

  function setEvents() {

    // click
    $target.add('.modalBg__spec, .modalBg__spec .close').on('click', modal_toggle);
    // click
    $img.on('click', function(event) {
      event.stopPropagation();
    });
    // load
    $img.on('load', imgLoad);

  }

  // setEvents();


});

//--------------------------------------------------
//
//  popup
//
//--------------------------------------------------

$(function(){

  var $target = $('.row__item_icon span'),

      text = [
        '今取り付けてあるドアノブ・円筒錠・錠（ラッチ）・玄関錠から取替・交換ができる製品です。',
        '閉じ込め防止機能付。異常がおこると、安全側に機能するフェイルセーフ設計を取り入れた製品です。',
        'レバーの取り付けは差し込み押さえるだけで取付OK。固定ねじ不要で、ガタつきなく、誰でも簡単に固定できます。',
        'ユニバーサルデザイン仕上げの製品は、お使いいただいてこそわかる使いやすさです。',
        'キーレックス本体に鍵（キー）がつかないタイプです。キーレックスのスタンダードタイプです。',
        'キーレックス本体に鍵（キー）がついたタイプです。鍵（キー）操作時は記憶番号を押さずに解錠できます。',
        'キーレックス本体のボタン操作を不能にし、鍵（キー）操作のみで解錠できる機能です。',
        'キーレックスで外部、内部の両面がボタン錠のタイプです。別々の番号を記憶させられるので内外ともに施解錠を制限したい場所に最適です。',
        'キーレックス本体に取り付けできるカバー（別売）です。屋外での使用におすすめです。'
      ];

  function enter() {

    var num = $(this).find('img').attr('class');
        num = Number(num);

    // text変更
    var src = '<div class="tip">' +
                '<div class="text">'+ text[num] +'</div>' +
                '<span class="triangle"></span>' +
                '<span class="triangle02"></span>' +
              '</div>';

    // 追加
    $(this).append(src);

    // 位置調整
    adjustPos();

  }

  function leave() {

    $(this).find('.tip').remove();

  }

  function adjustPos() {

    var rightEdge = $('.lineupBlock__list').offset().left + $('.lineupBlock__list').width();
    var rightEdge02 = $('.tip').offset().left + $('.tip .text').width();

    var diff = rightEdge02 - rightEdge;

    if (rightEdge < rightEdge02) $('.tip .text').css('left', '-=' + diff + 'px');

  }

  $target.on('mouseenter', enter);
  $target.on('mouseleave', leave);

})
