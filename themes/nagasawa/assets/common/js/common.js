if(jp === undefined) var jp = {'co': {'nagasawa': {}}};
// ===================================================================
// global navi hover
// ===================================================================
$(function(){

	var $area = $('.header__nav'),
   		$target01 = $('.header__nav_block .item:nth-child(1)'),
		$target02 = $('.header__nav_block .item:nth-child(2)'),
		$target03 = $('.header__nav_block .item:nth-child(3)'),
		$target04 = $('.header__nav_block .item:nth-child(4)'),
		$target05 = $('.header__nav_block .item:nth-child(5)'),
		$target06 = $('.header__nav_block .item:nth-child(6)'); 
    
	var menuBtn = [
		[$target01,false],
		[$target02,false],
		[$target03,false],
		[$target04,false],
		[$target05,false]
	]

	var len = menuBtn.length,
		lowPageNth = -1,
		// ホバーしたメニュー以外が開いているかどうかflag
		isFlag = false,
		// マウスがエリア内かどうかflag
		isAreaFlag = false,
		isLowerLayer = false,
		// 法人の皆様へいホバーしているかどうかflag
		isCompanyFlag = false,
		id = $('body').attr('id'),

		dur = 380,
		ease = 'easeOutQuart',

		Timeout;

    function open($obj,selector) {

    	var src = $obj.find('img').attr('src');

    	if ( src.indexOf('Current') != -1 ) {

    		$obj
    		.css('z-index', '2')
    		.find('img').attr('src', src.replace('Current_on', '_on'));

		} else {

			$obj
			.css('z-index', '2')
			.find('img').attr('src', src.replace('_off', '_on'));

		}

       $('.header__subNav')
	       	.stop().css({'height':0,'display': 'block'})
	       	.animate({height:40},dur,ease)
	       	.find('.header__subNav_block').css('display', 'none')
	       	.parent().children(selector).css({'display': 'block'});

	       	isFlag = false;

    }

    function open_css($obj,selector) {

		var src = $obj.find('img').attr('src');

		if ( src.indexOf('Current') != -1 ) {

			$obj
			.css('z-index', '2')
			.find('img').attr('src', src.replace('Current_on', '_on'));

		} else {

			$obj
			.css('z-index', '2')
			.find('img').attr('src', src.replace('_off', '_on'));

		}

       $('.header__subNav')
	       	.stop().css({'height':40,'display': 'block'})
	       	.find('.header__subNav_block').css('display', 'none')
	       	.parent().children(selector).css({'display': 'block'});

	       	isFlag = false;

    }

    function open_css_caseStudy($obj,selector) {

		var src = $obj.find('img').attr('src');

		if ( src.indexOf('Current') != -1 ) {

			$obj
			.css('z-index', '2')
			.find('img').attr('src', src.replace('Current_on', '_on'));

		} else {

			$obj
			.css('z-index', '2')
			.find('img').attr('src', src.replace('_off', '_on'));

		}

	    isFlag = false;

    }

    function open_current($obj) {

       $obj
		.css('z-index', '2')
		.find('img').attr('src', $obj.find('img').attr('src').replace('_off', 'Current_on'));

    }

    function close() {

		for (var i = 0; i < len; i++) {
			if (i != lowPageNth) {
				menuBtn[i][0]
					.css('z-index', '1')
					.find('img').attr('src', menuBtn[i][0].find('img').attr('src').replace('_on', '_off'));
			}
			if (i == lowPageNth) {

				var src = menuBtn[i][0].find('img').attr('src');
				if ( src.indexOf('Current') != -1 ) {
				} else {
					menuBtn[i][0]
						.css('z-index', '1')
						.find('img').attr('src', src.replace('_on', 'Current_on'));
				}

			}
		};

		setOpenInit();

	    $('.header__subNav')
	    	.stop()
	    	.animate({height:0},dur,ease,function(){
	    		$(this)
	    			.css('display', 'none')
	    			.find('.header__subNav_block')
	    			.css('display', 'none');

	    		for (var i = 0; i < len; i++) {
	    			menuBtn[i][1] = false;
	    		};

	    	});

    }

    function close_css_caseStudy() {

    	for (var i = 0; i < len; i++) {
    		if (i != lowPageNth) {
    			menuBtn[i][0]
    				.css('z-index', '1')
    				.find('img').attr('src', menuBtn[i][0].find('img').attr('src').replace('_on', '_off'));
    		}
    		if (i == lowPageNth) {

    			var src = menuBtn[i][0].find('img').attr('src');
    			if ( src.indexOf('Current') != -1 ) {
    			} else {
    				menuBtn[i][0]
    					.css('z-index', '1')
    					.find('img').attr('src', src.replace('_on', 'Current_on'));
    			}

    		}
    	};

		setOpenInit();

		$('.header__subNav')
			.stop()
			.animate({height:0},dur,ease,function(){
				$(this)
					.css('display', 'none')
					.find('.header__subNav_block')
					.css('display', 'none');

				for (var i = 0; i < len; i++) {
					menuBtn[i][1] = false;
				};

			});

    }

    function judgeLowerLayer() {

    	if (id == 'productList' || id == 'support' || id == 'case_study' || id == 'company' || id == 'recruit') {
    		isLowerLayer = true;
    	}
    }

    // 下の階層で最初から開いているように
    function setOpenLowLayerEvent() {

    	switch(id){
			case 'productList':
				$target01.on('setOpen',  function(event) {
					open($target01,'.product');
					menuBtn[0][1] = true;
				});

			break;
			case 'support':
				$target02.on('setOpen',  function(event) {
					open($target02,'.support');
					menuBtn[1][1] = true;
				});    	  	   

			break;
			case 'case_study':
			  	$target03.on('setOpen',  function(event) {
			  		open($target03,'.casestudy');
			  		menuBtn[2][1] = true;
			  		isFlag = false;
			  	});

			break;

			case 'company':
				$target04.on('setOpen',  function(event) {
					open($target04,'.company');
					menuBtn[3][1] = true;
				});    	  	   

			break;
			case 'recruit':
				$target05.on('setOpen',  function(event) {
					open($target05,'.recruit');
					menuBtn[4][1] = true;
				});    	  	  
			break;
    	}

    	isFlag = false;
    	isAreaFlag = true;

    }

    function setOpenInit() {

    	switch(id){
			case 'productList':
				open_current($target01);
				lowPageNth = 0;
			break;
			case 'support':
				open_current($target02);
				lowPageNth = 1;
			break;
			case 'case_study':
				open_current($target03);
				lowPageNth = 2;
			break;
			case 'company':
				open_current($target04);
				lowPageNth = 3;
			break;
			case 'recruit':
				open_current($target05);
				lowPageNth = 4;
			break;
    	}

    }

    function setOpenLowLayerTrigger() {

		clearTimeout(Timeout);

    	switch(id){
			case 'productList':
				setIsFlag(0);
	    		if (isFlag) {
		    		close();
					Timeout = setTimeout(function(){
						$target01.trigger('setOpen');
					},380);	 
				}   	
			break;
			case 'support':
				setIsFlag(1);
	    		if (isFlag) {
		    		close();
					Timeout = setTimeout(function(){
						$target02.trigger('setOpen');
					},380);	 
				}   		

			break;
			case 'case_study':
  				setIsFlag(2);
  	    		if (isFlag) {
  		    		close();
  					Timeout = setTimeout(function(){
  						$target03.trigger('setOpen');
  					},380);	 
  				}   	 	

			break;

			case 'company':
				setIsFlag(3);
	    		if (isFlag) {
		    		close();
					Timeout = setTimeout(function(){
						$target04.trigger('setOpen');
					},380);	 
				}   	   	

			break;
			case 'recruit':
				setIsFlag(4);
	    		if (isFlag) {
		    		close();
					Timeout = setTimeout(function(){
						$target05.trigger('setOpen');
					},380);	 
				}   	  	

			break;
			default : 
				close();
			break;
    	}

    }

    // ホバーしたメニュー以外のサブメニューが開いていたら
    function setIsFlag(nth) {
    	for (var i = 0; i < len; i++) {
    		if (menuBtn[i][1] && i != nth) {
    			menuBtn[i][1] = false;
    			isFlag = true;
    			break;
    		}		    		
    	};
    }

    function setEvents() {

    	// if (!isLowerLayer) {
	    	$area
	    		.on('mouseenter', function(){
	    			isAreaFlag = true;
	    		})
	    		.on('mouseleave', function(){
	    			isAreaFlag = false;
	    		})
		// } else {
		// 	$target06
		// 		.on('mouseenter', function(){
		// 			isCompanyFlag = true;
		// 		});
		// }

    	// over
	    $target01
	    	.on('mouseenter', function(){

	    		// ホバーメニューが閉じてたら
	    		if (!menuBtn[0][1]) {
					menuBtn[0][1] = true;

					open($target01,'.product');
			    }

			    setIsFlag(0);
			    if (isFlag) {

			    	close();

			    	if (isAreaFlag) {
			    		open_css($target01,'.product');
			    	} else {
			    		open($target01,'.product');
			    	}

			    };

	    	})

	    // over
	    $target02
	    	.on('mouseenter', function(){

	    		if (!menuBtn[1][1]) {
					menuBtn[1][1] = true;
	       
	    			open($target02,'.support');

			    }

			    setIsFlag(1);
			    if (isFlag) {

			    close();

			    	if (isAreaFlag) {
			    		open_css($target02,'.support');
			    	} else {
			    		open($target02,'.support');
			    	}
			    	
			    }

	    	})

	    // over
	    $target03
	    	.on('mouseenter', function(){
            	if (!menuBtn[2][1]) {
					menuBtn[2][1] = true;
                    
                    open($target03,'.casestudy');
			    }

                setIsFlag(2);
                if (isFlag) {

                    close();

                    if (isAreaFlag) {
                        open_css($target03,'.casestudy');
                    } else {
                        open($target03,'.casestudy');
                    }

                }

	    	})

	    // over
	    $target04
	    	.on('mouseenter', function(){

	    		if (!menuBtn[3][1]) {
					menuBtn[3][1] = true;
	       
	    			open($target04,'.company');

			    }

			    setIsFlag(3);
			    if (isFlag) {

			    	close();

			    	if (isAreaFlag) {
			    		open_css($target04,'.company');
			    	} else {
			    		open($target04,'.company');
			    	}
			    	
			    }

	    	})

	    // over
	    $target05
	    	.on('mouseenter', function(){

	    		if (!menuBtn[4][1]) {
					menuBtn[4][1] = true;
	       
	    			open($target05,'.recruit');

			    }

			    setIsFlag(4);
			    if (isFlag) {

			    	close();

			    	if (isAreaFlag) {
			    		if (isCompanyFlag) {
			    			open($target05,'.recruit');
			    		} else {
			    			open_css($target05,'.recruit');
			    		}
			    		isCompanyFlag = false;
			    	} else {
			    		open($target05,'.recruit');
			    	}
			    	
			    }

	    	})

	    $target06.on('mouseenter', function(){

	    	close();
	    	// isFlag = true;

	    });

	    // leave
	    // $('nav').on('mouseenter', function(){

	    // 	clearTimeout(Timeout);

	    // });

	    // leave
	    $('nav').on('mouseleave', function(){

	    	close();
	    	// setOpenLowLayerTrigger();

	    });

    }

    // 下層ページかどうか判定
    judgeLowerLayer();
    // ホバーイベント実行
    setEvents();
    // 下層ページの最初から開いておく処理のイベント設定
    // setOpenLowLayerEvent();
    // 一度目の処理
    setOpenInit();


});

// ===================================================================
// セレクトボックス UIカスタマイズ
// ===================================================================
$(function(){

	// ドロップダウンを表示
	function show(e){

		var $listWrap = $(this).find('.selectBoxArea__listWrap');
		$listWrap.toggleClass('is-block');

		// イベント伝搬stop
		e.stopPropagation();

	}

	// セレクトボックス以外を選択したときに、ドロップダウンエリアを非表示
	function hide(){

		var $listWrap = $(this).find('.selectBoxArea__listWrap');
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

	function setEvents(){

		// click
		$('.selectBoxArea').on('click', show);
		// click
		$('html').on('click', hide);
		// click
		$('.selectBoxArea__listItem').on('click', select);

	}

	setEvents();

	
});

// ===================================================================
// チェックボックス画像変更
// ===================================================================
$(function(){

  $("input[type='checkbox']").change(function(event) {

    var $target = $(this).parent();

    if ($target.hasClass('checked')) {

      $target
        .removeClass('checked')
        .css('background-position', 'left -20px');  

    } else {

      $target
        .addClass('checked')
        .css('background-position', 'left -1px');  

    }
    
  });

});

// ===================================================================
// ie11 transition bug
// ===================================================================
$(function(){

	if (browser.type == 'ie11') {
		$('.op').css('transition', 'none');

	}

})


// ===================================================================
// setCenter
// ===================================================================
$(function(){

	var setCenter = function($Wrap,$Target) {

	  this.$wrap = $Wrap;
	  this.$target = $Target;

	  this.W = this.$wrap.width();
	  this.H = this.$wrap.height();
	  this.targetW;
	  this.targetH;
	  this.ratioW;
	  this.ratio;
	  this.ml;
	  this.mt;

	  this.init();

	}

	setCenter.prototype = {

	  getSize:function() {

	    this.W = this.$wrap.width();
	    this.H = this.$wrap.height(); 

	    this.targetW = this.$target.width();
	    this.targetH = this.$target.height();

	    this.ratioW = this.H / this.W;
	    this.ratio = this.targetH / this.targetW,

	    this.ml = - (this.targetW * (this.H / this.targetH)) / 2;
	    this.mt = - (this.targetH * (this.W / this.targetW)) / 2;

	  },

	  setPos:function(){

	      if (this.ratioW < this.ratio) {

	          this.$target
	            .css({'height': this.H})
	            .css({'margin-top': 0,'margin-left': this.ml,'top':0,'left':'50%','width':'auto'});

	      } else if ( this.ratioW > this.ratio) {

	          this.$target
	            .css({'width': this.W})
	            .css({'margin-top': this.mt,'margin-left': 0,'top':'50%','left':0,'height':'auto'});

	      }

	  },

	  init:function() {

	    this.getSize();
	    this.setPos();

	  }

	}

	jp.co.nagasawa.setCenter = setCenter;

})
