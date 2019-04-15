// ===================================================================
// popup
// ===================================================================
$(function(){
    function trace() {
        if(window.console && console.log && console.log.apply) console.log.apply(console, arguments);
    };

    $("form").submit(function (event) {
        search($("#js-formText").val());
        return false;
    });

    function search(val){
        $(".indexList .item").each(function(i){
            var $item = $(this);
            var $li = $item.find(".sub_item");
            var cnt = 0;

            $li.each(function(j){
                var $self = $(this);
                var text = $self.text();

                if(text.indexOf(val)>=0) {
                    $self.show();
                    cnt++;
                }else {
                    $self.hide();
                }
            });

            var $index = $(".index .item a").eq(i);
            if(cnt === 0) {
                $item.hide();
                $index.addClass("off");
                $index.removeClass("on");
            }else {
                $item.show();
                $index.addClass("op");
                $index.removeClass("off");
            }
        });
    }

    search("");

    $(".index .item a").each(function(i){
        var $obj = $(this);
        var hash = $obj.attr("href");

        if($(hash).find("li").length === 0){
            $obj.addClass("off");
        }else{
            $obj.addClass("op");
        }
    });

    var $target = $('.sub_item');
    $target
      .on('mouseenter', function() {

        var $box = $(this).find('.explainBox'),
            
            w,
            h,
            padding = 10;

            w = $box.width() - $(this).width();
            w = w / 2;

            h = $box.height() + padding;

        $box
            .stop(true).css({'left': -3,'top': 27, 'opacity':0, 'z-index':1})
//            .stop(true).css({'left': -3,'top': -h, 'opacity':0})
//          .css({'left': -w,'top': -h})
          .addClass('is-block').animate({opacity:1}, 300, "easeOutQuart");

      })
      .on('mouseleave',function(event) {

        var $box = $(this).find('.explainBox');

        $box
          .css({'z-index':0}).removeClass('is-block');

      });
});