
// ===================================================================
// セレクトボックス UIカスタマイズ
// ===================================================================
$(function(){

	var startPosY = 0,
		startTime,
		stopTime,
		T;

	// ドロップダウンを表示
	function show(e){

		var $listWrap = $(this).find('.selectBoxArea__listWrap');
		$listWrap.toggleClass('is-block');

		// イベント伝搬stop
		e.stopPropagation();

	}

	// セレクトボックス以外を選択したときに、ドロップダウンエリアを非表示
	function hide(){

		var $listWrap = $('.selectBoxArea__listWrap');

			$listWrap.removeClass('is-block');

	}

	// ドロップダウン内項目を選択
	function select(){

		var $display = $(this).closest('.selectBoxArea__listWrap').prev(),
	    	$selectBox = $(this).closest('.selectBoxArea').next(),

	    	index,
	        text;

	        index = $(this).index();
	        text = $(this).parent().find('.selectBoxArea__listItem').eq(index).html();

	    // displayに表示
	    $display.html(text);
	    // selectboxを選択
	    $selectBox.find('option')
	      .removeAttr('selected')
	      .eq(index).attr('selected', 'selected');

	  
	}

	function stopEvent() {

		$('.selectBoxArea__listWrap').on('touchstart', function(e) {
			e.stopPropagation();
		});

	}
 
	function setEvents(){

		// touchstart
		$('.selectBoxArea').on('touchstart', show);
		// touchstart
		$('html').on('touchstart', hide);

		// touchstart
		$('.selectBoxArea__listItem').on('touchstart', select);

	}

	stopEvent();
	setEvents();
	
});

// ===================================================================
// チェックボックス画像変更
// ===================================================================
$(function(){

	$("label").on('touchstart',function(event) {

		var $target = $(this);
			$input = $target.next();

		if ($target.hasClass('checked')) {

		  $target
		    .removeClass('checked')
		    .css('background-position', 'left -117px');  

		  $input.removeAttr('checked');

		} else {

		  $target
		    .addClass('checked')
		    .css('background-position', 'left 6px');  

		  $input.attr('checked', 'checked');

		}

	});

});
