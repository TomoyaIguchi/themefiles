//--------------------------------------------------
//
//  namespace
//
//--------------------------------------------------
/**
 * @namespace top
 */

// ===================================================================
// Slideshow
// ===================================================================
$(window).load(function() {
  var img = $(".slide-item"),
    num = img.length,
    count = 0,
    interval = 6500;
  
  img.eq(0).addClass("show");
  showAnimation();
  
  setTimeout(slide, interval);
  
  function slide() {
    img.eq(count).removeClass("show");
    count++;
    if(count >= num) {
      count = 0;
    }
    img.eq(count).addClass("show");
    showAnimation();
    setTimeout(slide, interval);
  }

  function showAnimation(){
    TweenMax.to($(".slide-item:not(.show)") , .8 , {opacity: "0"});

    var $showItem = $(".slide-item.show");
    TweenMax.to($showItem , 2.5 , { ease: Power1.easeOut, opacity: "1"});
  }

});

// ===================================================================
// movie 中央
// ===================================================================
$(function(){

    /**
   * description:<br>
   * videoのレイアウト
   * <br>
   * event：jquery ready
   * 
   * @memberof top
   */
  var setPosVideo = function(){  

    var $wrap = $('.mainImg'),
        $target = $('video'),

        W = $wrap.width(),
        H = $wrap.height(),
        targetW,
        targetH,
        ratioW,
        ratio,
        ml,
        mt;

    function setStyle() {
      $wrap.addClass('is-relative');
      $target
        .addClass('is-absolute is-unvisible');
    }

    function setPos(){

        if (ratioW > ratio) {

            $target
              .css({'height': H})
              .css({'margin-top': 0,'margin-left': ml,'top':0,'left':'50%','width':'auto'});

        } else if ( ratioW < ratio) {

            $target
              .css({'width': W})
              .css({'margin-top': mt,'margin-left': 0,'top':'50%','left':0,'height':'auto'});

        }

    }

    function getSize() {

      targetW = $target.width();
      targetH = $target.height();

    }

    function update() {
        W = $wrap.width();
        H = $wrap.height(); 

        ratioW = H / W;
        ratio = targetH / targetW,

        ml = - (targetW * (H / targetH)) / 2;
        mt = - (targetH * (W / targetW)) / 2;
    }

    function setEvents() {

      //ready
      setStyle();

      // resize
      $(window).on('resize', function(){
          update();
          setPos();
      });

      // canplaythrough
      $target.on('canplaythrough',function() {
          
          setTimeout(function(){

            // videoのサイズ調整
            getSize();
            $(window).trigger('resize');          
            $target.removeClass('is-unvisible');

            // loadingを消す
            $('.spinner__wrap').animate({opacity:0}, 1000, function(){
                $(this).addClass('is-none');
            });

          },500);

      });
      

    }

    setEvents();

  }

  setPosVideo();

})

// ===================================================================
// no-video
// ===================================================================
$(function(){

  if (!Modernizr.video) $('.mainImg').addClass('bg');

})