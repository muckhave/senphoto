//ハンバーガーメニュー
var windowSizeFlg = window.innerWidth > 1000;
(function(){
	$(window).resize(function() {
		windowSizeFlg = window.innerWidth > 1000;
			if(windowSizeFlg){
				$('body').addClass('hbg__open');
				$('.nav__item').css({'opacity':'100',paddingLeft : '0'});
			}else{
				$('body').removeClass('hbg__open');
				$('.nav__item').css({'opacity':'0',paddingLeft : '30px'});
			}
	});
}())
$(function(){
				$('.header__hbgBtn').click(function(){
					var $body = $('body');
					if(!$body.hasClass('hbg__open')){
						$body.addClass('hbg__open');
						$('.nav__item').each(function(i){
							$(this).delay(80 * i).animate({
									opacity: 1.0,    // 透明度0.25へ
									paddingLeft: '0', 
							}, 400);
						});
					}else {
						$body.removeClass('hbg__open');
						$('.nav__item').css({
								'opacity' : '0',
								'paddingLeft' : '30px'
						});
					}
				})
});
if(!$('#toggle_area').hasClass('open')){
            $('#toggle_area').addClass('open');
            $('#hed_nav li').each(function(i) {
        		$(this).delay(30 * i).animate({
                    opacity: 1.0,    // 透明度0.25へ
                    paddingLeft: '0', 
                  }, 400);
            });
        }else{
            $('#toggle_area').removeClass('open');
            $('#hed_nav li').css({
              'opacity' : '0',
              'paddingLeft' : '30px'
            });
        }
//アニメーションエフェクト
function animeEffect(el,num1,num2){
				$(el).css("opacity","0");
				$(window).scroll(function (){
								$(el).each(function(){
												var imgPos = $(this).offset().top;    
												var scroll = $(window).scrollTop();
												var windowHeight = $(window).height();
												if (scroll > imgPos - windowHeight + windowHeight/8){
																$(this).css("opacity","1" );
																$(this).css({ 
																				"-webkit-transform": "translate(0, 0)",
																				"transform": "translate(0, 0)"
																});
												} else {
																$(this).css("opacity","0" );
																$(this).css({ 
																"-webkit-transform": "translate(" + num1 + ","  +num2 + ")",
																"transform": "translate(" + num1 + ","  +num2 + ")"
																});
												}
								});
				});
}

animeEffect('.effect','0','20%');
animeEffect('.effect2','-20%','0');
animeEffect('.effect3','20%','0');

$(function(){
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 'auto',
      loop: true,
      centeredSlides: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
});
