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

            dur = 300,              
            ease = 'easeInOutCubic',

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

        setEvents();

    });

});

// ===================================================================
// モーダル
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
      ml = $(this).width() / 2;
      mt = $(this).height() / 2;

      $(this)
        .css({
          'opacity':'1',
          'margin-left': -ml,
          'margin-top': -mt
        });
  
  }

  function bgToggle() {
    $bg.toggleClass('is-none');
    $('html').toggleClass('is-hidden');
  }

  function setEvents() {

    // load
    $img.on('load', imgLoad);
    // click
    $target.add('.modalBg, .close').on('click', modal_toggle);
    // click
    $img.on('click', function(event) {
      event.stopPropagation();
    });

  }

  setEvents();

});