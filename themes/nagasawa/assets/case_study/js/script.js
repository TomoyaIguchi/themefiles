// // ===================================================================
// // モーダル
// // ===================================================================

// $(function(){

//   var $target = $('.imgBox__item'),
//       $bg = $('.modalBg'),
//       $box = $bg.find('.modalBox'),
//       $wrap = $bg.find('.imgWrap'),
//       $img = $bg.find('.modalImg'),

//       ml,
//       mt,

//       isVisual;

//   function modal_toggle(e) {
          
//     if (!$(e.target).hasClass('modalBg') && !$(e.target).hasClass('close')) {

//       var num = $(this).attr('data-num');
//       isVisual = $(this).hasClass('left');

//       if (num == -1) return;

//       // ビジュアルと、設計図の判定
//       if (isVisual) {
//         src = modalImgList[num][0][2];
//       } else {
//         src = modalImgList[num][1][2];
//       }

//       $img
//         .css('opacity', '0')
//         .attr('src', src);

//     } else {

//       bgToggle();

//     }


//     return false;
//   }

//   function imgLoad() {

//       setSizeBox($(this));

//       bgToggle();

//       // boxレイアウト調整
//       ml = $box.width() / 2;
//       mt = $box.height() / 2;

//       $box
//         .css({
//           'margin-left': -ml,
//           'margin-top': -mt
//         });          

//       // imgレイアウト調整
//       // var set = new jp.co.nagasawa.setCenter($wrap,$(this));

//       $(this)
//         .css({
//           'opacity':'1',
//         });
  
//   }

//   function bgToggle() {
//     $bg.toggleClass('is-none');
//     $('html').toggleClass('is-hidden');
//   }


//   function setEvents() {

//     // load
//     $img.on('load', imgLoad);
//     // click
//     $target.add('.modalBg, .modalBg .close').on('click', modal_toggle);
//     // click
//     $img.on('click', function(event) {event.stopPropagation();});
//     $wrap.on('click', function(event) {event.stopPropagation();});
//     $box.on('click', function(event) {event.stopPropagation();});

//   }

//   setEvents();

// });

$(function(){

    // ===================================================================
    // モーダル
    // ===================================================================

    var $target = $('.caseStudy__imgList_wrap').find('span'),
        $bg = $('.modalBg'),
        $box = $bg.find('.modalBox'),
        $wrap = $bg.find('.imgWrap'),
        $img = $bg.find('.modalImg'),

        ml,
        mt;

    function modal_toggle(e) {

      // loadingを消す
      $('.spinner__wrap')
        .css('opacity', '1')
        // .removeClass('is-none');

      if (!$(e.target).hasClass('modalBg') && !$(e.target).hasClass('close')) {

        var src = $(this).prev().attr('src');

          src = $(this).prev().data('big');//src.replace( /_s\./g , "_b\." );

        $img
          // .css('opacity', '0')
          .attr('src', src);

      } else {

        bgToggle();

      }

      return false;
    }

    function imgLoad() {

        setSizeBox($(this));

        bgToggle();

        $('.spinner__wrap').animate({opacity:0}, 500, 'easeOutQuad',function(){
            $(this).addClass('is-none');
        });

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
      $target.add('.modalBg, .close').on('click', modal_toggle);
      // click
      $img.on('click', function(event) {
        event.stopPropagation();
      });

    }

    setEvents();

});



$(function(){

  // ===================================================================
  // hover effect
  // ===================================================================

  var $item = $('.caseStudy__imgList_wrap .item');

  // ホバーエフェクト
  function hoverDirection (event) {
      var $overlay = $(this).find('.over'),
          side = getMouseDirection(event),
          animateTo,
          positionIn = {
              top:  '0%',
              left: '0%'
          },
          positionOut = (function () {
              switch (side) {
                  // case 0: top, case 1: right, case 2: bottom, default: left
                  case 0:  return { top: '-100%', left:    '0%' }; break; // top
                  case 1:  return { top:    '0%', left:  '100%' }; break; // right
                  case 2:  return { top:  '100%', left:    '0%' }; break; // bottom
                  default: return { top:    '0%', left: '-100%' }; break; // left
              }
          })(),

          dur = 350,
          ease = 'easeOutQuart';

      if (event.type === 'mouseenter') {
          animateTo = positionIn;
          $overlay.css(positionOut);
      } else {
          animateTo = positionOut;
      }
      $overlay.stop(true).animate(animateTo, dur, ease);
  }

  // マウスの方向を検出する関数
  // http://stackoverflow.com/a/3647634
  function getMouseDirection (event) {
      var $el = $(event.currentTarget),
          offset = $el.offset(),
          w = $el.outerWidth(),
          h = $el.outerHeight(),
          x = (event.pageX - offset.left - w / 2) * ((w > h)? h / w: 1),
          y = (event.pageY - offset.top - h / 2) * ((h > w)? w / h: 1),
          direction = Math.round((Math.atan2(y, x) * (180 / Math.PI) + 180) / 90  + 3) % 4;
      return direction;
  }

  // setEvents mouseenter_leave
  $item.on('mouseenter mouseleave', hoverDirection);


});



$(function(){
    // ===================================================================
    // slider
    // ===================================================================

    var $slider = $('.slider'),
        $slideBox = $slider.find('.caseStudy__imgList_wrap'),
        $slide = $slider.find('.item'),
        $nav = $slider.find('.btn img'),
        $btnLeft = $slider.find('.left'),
        $btnRight = $slider.find('.right'),

        slideW,
        slideCnt = $slide.length,
        mrCnt = slideCnt - 1,
        defaultCnt = 5,
        lastCnt = slideCnt - defaultCnt,
        currentIndex = 0,   

        dur = 330,              
        ease = 'easeInOutQuad',

        w = $slide.width(),
        mr = parseInt($slide.css('margin-right'));

    function slideReady(){

      var slideDefCnt = 5,
          mrDefCnt = 4;

          slideW = w * slideDefCnt + mr * mrDefCnt;
          slideBoxW = w * slideCnt + mr * mrCnt;

      $('.slider__inner').width(slideW);
      $slideBox.width(slideBoxW);

    }

    function setButton() {

      var mlL,
          mlR,
          objW = $btnLeft.width(),
          wrapW = slideW,
          marginL = -27.5,
          marginR = 27.5;

          objW = objW / 2;
          wrapW = wrapW / 2;

          mlL = -objW + (-wrapW) + marginL;
          mlR = -objW + (wrapW) + marginR;

      $btnLeft.css('margin-left', mlL);
      $btnRight.css('margin-left', mlR);

      // スライダーのarrow.leftを自動計算する方法
      // 基準点:中央
      // 左: -objectW(要素幅) / 2 + (-blockW(枠幅)) + margin(余白)
      // 右:blockW(枠幅)+margin(余白)

    }

    function goToSlide (index) {

        $slideBox.stop().animate({ left: - (w + mr) * index + 'px' }, dur, ease);

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
        if (currentIndex === lastCnt) {
            $navNext.addClass('disabled');
        } else {
            $navNext.removeClass('disabled');
        }

    }

    function clickHandler() {
        if ($(this).hasClass('left')) {
            goToSlide(currentIndex - 1);
        } else {
            goToSlide(currentIndex + 1);
        } 
    }

// インベントの登録
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

    function setEvents() {
      // ready
      slideReady();
      // ready 最初の処理
      goToSlide(currentIndex);
      // load
      $(window).on('load', setButton);
      // click
      $nav.on('click', clickHandler);

    }

    setEvents();

});