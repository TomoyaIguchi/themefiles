// ===================================================================
// lineheight 横3つずつ
// ===================================================================
$(function(){

  function lineHeight3Col($obj) {

    var $item = $obj;

    var list = [],
        len = $item.length,
        num = 3,
        times,
        rest;

        // ループ回数算出
        times = Math.floor(len / num);
        // 余り算出
        rest = len % num;

    // 通常ループ
    for (var i = 0; i < times; i++) {
        for (var j = i * num; j < i * num + num; j++) {
          list.push($item.eq(j));
        };      
        heightLine(list);
        list = [];
    };

    // 余りループ
    for (var k = num * times; k < num * times + rest; k++) {
        list.push($item.eq(k));
        heightLine(list);
    };



  }

  function heightLine(list){

    var h = [],maxH;

    $.each(list, function(i) {
        h.push($(this).height());
    });

    // 最大値取得
    maxH = Math.max.apply(null, h);

    $.each(list, function(i) {
        $(this).css('height', maxH);
    });

  }
  
  lineHeight3Col($('.lineupBlock__text'));
  lineHeight3Col($('.lineupBlock__supply'));
  lineHeight3Col($('.lineupBlock__icon'));

});


// ===================================================================
// imgChange
// ===================================================================
$(function(){

      var $slider = $('#slider'),
          $slides = $slider.find('.mainImg__main img'),
          $indicator = $slider.find('.item'),
          $frames = $indicator.find('.bg'),
          slideCnt = $slides.length,

          currentIndex = 0,
          interval = 7500,
          timer,

          dur = 900,
          ease = 'easeOutQuart',

          isAnimation = true;

      // 次のスライドを表示する関数
      function showNextSlide () {

          var dur = 900,
              ease = 'easeOutQuart';

          if (isAnimation) {
            isAnimation = false;

            // 次に表示するスライドのインデックス
            // (もし最後のスライドなら最初に戻る)
            var nextIndex = (currentIndex + 1) % slideCnt;

            // indicatorのフレーム変更
            frameChange(nextIndex);

            // 現在のスライドをフェードアウト
            $slides.eq(currentIndex).fadeOut(dur,ease,function(){isAnimation = true;});
            // 次のスライドをフェードイン
            $slides.eq(nextIndex).fadeIn(dur,ease,function(){isAnimation = true;});

            // 現在のスライドのインデックスを更新
            currentIndex = nextIndex;

          }

      }

      function slideChange(){

        var dur = 900,
            ease = 'easeOutQuart';

        if (isAnimation) {
          isAnimation = false;

          var nextIndex = $(this).index();

          if ($(this).find('.bg').hasClass('on')) {
            isAnimation = true;
            return;
          }

          // indicatorのフレーム変更
          frameChange(nextIndex);

          // メインビジュアルフェード
          $slides.eq(currentIndex).fadeOut(dur,ease,function(){isAnimation = true;});
          $slides.eq(nextIndex).fadeIn(dur,ease,function(){isAnimation = true;});

          currentIndex = nextIndex;

          stopInterval();
          startInterval();

        }

      }

      function frameChange(index) {
        var dur = 0,
            ease = '';

        $frames
          .stop().animate({'border-width': 0} ,dur ,function(){
            $frames
              .removeClass('on')
              .eq(index)
              .addClass('on')
              .stop().animate({'border-width': '4px'},dur);
          });

      }

      function startInterval() {
        timer = setInterval(showNextSlide, interval);
      }

      function stopInterval() {
        clearInterval(timer);
      }


      function setEvents() {

        // ready 1番目のスライドをフェードインで表示
        $slides.eq(currentIndex).fadeIn(dur,ease);
        // click
        $indicator.on('click', slideChange);
        // interval
        startInterval();

      }

      setEvents();

});



// ===================================================================
// accordion
// ===================================================================
$(function(){

  var $container = $('.keywordBlock__wrap'),
      $title = $container.find('.keywordBlock__tit'),
      $title_front = $container.find('.keywordBlock__tit_open'),
      $btnOpen = $container.find('.keywordBlock__btn_detail'),
      $btnClose = $container.find('.keywordBlock__text'),
      $imgWrap = $container.find('.keywordBlock__imgWrap'),
      $img = $imgWrap.find('img'),
      $shadow = $container.find('.shadow'),

      containerHList = [],
      imgWrapMargin = [-120,-200,-185],
      index = 0,
      len = $('.keywordBlock__wrap').length,

      Open = {},
      Close = {};

  Open = {
      title_back:function () {
        $title.eq(index).css('opacity', '1');
      },
      title_front:function () {
          $title_front.eq(index).css({
            'opacity': '0',
            'display': 'none'
          });
      },
      title_front:function () {
          $title_front.eq(index).css({
            'opacity': '0',
            'display': 'none'
          });
      },
      btnOpen:function () {
          $btnOpen.eq(index).addClass('is-unvisible');
      },
      btnClose:function () {
          $btnClose.eq(index).css('opacity', '1');
      },
      imgWrap:function () {
        var dur = 800,
            ease = 'easeOutQuart';

          $imgWrap.eq(index).animate({top: 0}, dur, ease);
      },
      img:function () {
        var dur = 800,
            ease = 'easeOutQuart';

          $img.eq(index).animate({top: 0}, dur, ease);
      },
      containerH:function () {
        var dur = 800,
            ease = 'easeOutQuart';

          $container.eq(index).animate({height: containerHList[index]}, dur, ease);
      },
      shadow:function () {
        $shadow.eq(index).css({
          'opacity': '0',
          'display': 'none'
        });
      }
  }

  Close = {
      // close処理
      title_back:function(i) {
        $title.eq(i).css('opacity', '0');
      },
      title_front:function(i) {
        $title_front.eq(i).css({
          'opacity': '1',
          'display': 'block'
        });
      },
      btnOpen:function(i) {
        $btnOpen.eq(i).removeClass('is-unvisible');
      },
      btnClose:function(i) {
        $btnClose.eq(i).css('opacity', '0');
      },
      imgWrap:function(i) {
        var dur = 800,
            ease = 'easeOutQuart';

          $imgWrap.eq(i).animate({top: imgWrapMargin[i]}, dur, ease);
      },
      img:function(i) {
        var dur = 800,
            ease = 'easeOutQuart';

          $img.eq(i).animate({top: -80}, dur, ease);
      },
      containerH:function(i) {
        var dur = 800,
            ease = 'easeOutQuart';

          $container.eq(i).animate({height: 210}, dur, ease);
      },
      shadow:function(i) {
        var dur = 800,
            ease = 'easeOutQuart';

        $shadow.eq(i)
          .css({
            'display': 'block'
          })
          .animate({top: 0, opacity: 1}, dur, ease);

      }

  }


  function ready() {
    $('.keywordBlock__wrap').each(function() {
      var h = $(this).height();

      containerHList.push(h);
    });
  
    // 閉じる
    $('.keywordBlock__wrap').css('height', '210px');

  }

  function setObject() {

    index = $('.keywordBlock__btn_detail').index(this);

    setClose();
    open();

  }

  function open() {

    Open.title_back();
    Open.title_front();
    Open.btnOpen();
    Open.imgWrap();
    Open.img();
    Open.containerH();
    Open.btnClose();
    Open.shadow();

  }

  function close() {

    for (var i = 0; i < len; i++) {

      Close.title_back(i);
      Close.title_front(i);
      Close.btnOpen(i);
      Close.imgWrap(i);
      Close.img(i);
      Close.containerH(i);
      Close.btnClose(i);
      Close.shadow(i);

    };

  }

  function setClose() {

    for (var i = 0; i < len; i++) {

      if (i !== index) {

        Close.title_back(i);
        Close.title_front(i);
        Close.btnOpen(i);
        Close.imgWrap(i);
        Close.img(i);
        Close.containerH(i);
        Close.btnClose(i);
        Close.shadow(i);
      }

    }

  }

  function setEvents() {
    // load
    $(window).on('load', ready);

    // click
    $btnOpen.on('click', setObject);
    $btnClose.on('click', close);

  }

  setEvents();

});