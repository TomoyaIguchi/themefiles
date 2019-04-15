//--------------------------------------------------
//
//  tab
//
//--------------------------------------------------
$(function(){

  // tab
  var $tabList = $('.tabList'),
      $tabPanel = $('.tabPanel');

  function clickHandler(e){
    // リンクのクリックに対するデフォルトの動作をキャンセル
    e.preventDefault();

    var $this = $(this),
        $target = $($this.attr('href')),

        h;

    if ($target.hasClass('active')) {
        return;
    }

    h = $target.height();
    $('.mainArea').height(h);

    $tabPanel
      .removeClass('active')
      .hide();

    $target
      .addClass('active')
      .show();

  }

  function setEvents() {

    // click
    $tabList.on('click', clickHandler);

    // ready 最初のタブを選択状態に
    $tabList.eq(0).trigger('click');

    // load
    $(window).load(function() {
      $('html').removeClass('is-unvisible');
    });

  }

  // イベント登録
  setEvents();

});
//--------------------------------------------------
//
//  3行
//
//--------------------------------------------------
$(function(){

  var $list = [];

  for (var i = 0; i < 3; i++) {
      $list[i] = $('.mainArea .item').eq(i);
  };

  heightLine($list);

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

});