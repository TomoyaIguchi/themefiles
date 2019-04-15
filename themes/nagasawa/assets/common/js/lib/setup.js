
//--------------------------------------------------
//
//  namespace
//
//--------------------------------------------------
/**
 * @namespace setup
 */

$(function(){

// ===================================================================
// rollover
// ===================================================================
function smartRollover() {  
        var $images = $('img').not('.header__nav img, .notRoll');
        for(var i=0; i < $images.length; i++) {  
            if($images.eq(i).get(0).getAttribute("src").match("_off."))  
            {  
                $images.eq(i).get(0).onmouseover = function() {  
                    this.setAttribute("src", this.getAttribute("src").replace("_off.", "_on."));  
                }  
                $images.eq(i).get(0).onmouseout = function() {  
                    this.setAttribute("src", this.getAttribute("src").replace("_on.", "_off."));  
                }  
            }  
        }  
}  
if(window.addEventListener) {  
    window.addEventListener("load", smartRollover, false);  
}  
else if(window.attachEvent) {  //for IE
    window.attachEvent("load", smartRollover, false);  
}

/*===========================================================
    page scroll Module #で始まるアンカーをクリックした場合に処理
===========================================================*/

function toScroll(boolean) {

    var isHashInUrl = boolean,

        href,
        target,
        position,
        dif = 0,
        
        dur = 600,
        ease = 'easeOutExpo';

    // 差分取得
    if ($(this).data('diff')) dif = $(this).data('diff');

    href = $(this).attr("href");
    target = $(href == "#" || href == "" ? 'html' : href);

    if(target.offset()){
        position = target.offset().top;
        position = position - dif;
        $('body,html').stop().animate({scrollTop:position}, dur, ease);
    }

    return false;

}

function setEvents() {

    //ready
    // toScroll(true);
    // click
    $('a[href^=#]').not('.noScroll').on('click',toScroll);

}

setEvents();

});