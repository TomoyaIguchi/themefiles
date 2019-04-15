$(function(){

  var $list01 = [],
      $list02 = [],
      $list03 = [],
      $list04 = [],
      $list05 = [],
      $list06 = [];
      $list07 = [];
      $list08 = [];
      $list09 = [];
      $list10 = [];
      $list11 = [];

  function heightLineReady(){
    for (var i = 0; i < 3; i++) {
        $list01[i] = $('.mainArea .item').eq(i);
        $list02[i] = $('.mainArea .item__text').eq(i+3);
        $list03[i] = $('.mainArea .item__text').eq(i+6);
        $list04[i] = $('.mainArea .item__text').eq(i+9);
        $list05[i] = $('.mainArea .item__text').eq(i+12);
        $list06[i] = $('.mainArea .item__text').eq(i+15);
        $list07[i] = $('.mainArea .item__text').eq(i+18);
        $list08[i] = $('.mainArea .item__text').eq(i+21);
        $list09[i] = $('.mainArea .item__text').eq(i+24);
        $list10[i] = $('.mainArea .item__text').eq(i+27);
        $list11[i] = $('.mainArea .item__text').eq(i+30);
    };
    // for (var i = 0; i < 2; i++) {
    //     $list03[i] = $('.mainArea .item__text').eq(i+6);
    // };    
  }

  function heightLine($obj){

    var h = [],maxH;

    $.each($obj,function(i) {
        h.push($(this).height());
    });

    // 最大値取得
    maxH = Math.max.apply(null, h);

    $.each($obj,function(i) {
        $(this).css('height', maxH);
    });

  }

  function setEvents() {
    // ready
    heightLineReady();

    // ready
    heightLine($list01);
    heightLine($list02);
    heightLine($list03);
    heightLine($list04);
    heightLine($list05);
    heightLine($list06);
    heightLine($list07);
    heightLine($list08);
    heightLine($list09);
    heightLine($list10);
    heightLine($list11);

  }

  setEvents();

});