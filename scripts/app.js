function  checkhash(){
    $.urlParam = function(name){
	    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	    if (results==null){
	       return null;
	    }
	    else{
	       return results[1] || 0;
	    }
    };
        if ( ($.urlParam('success')!='2') && (window.location.hash == '#consultModal')){
        	console.log("consultModal");
             $(".page-heading button").click();
        }
        else if ( ($.urlParam('success')!='3') && (window.location.hash == '#pavelModal')){
             $('.pavel-info button').click();
        }
         else {
            if ( $.isNumeric($.urlParam('success'))){
                $('#btn_success').click();
            }
        }
}

$(document).ready(function() {
    
        $('input[name="sended"]').val('ok3');
    
		$('form').on('submit', function(e) {

			 var $formId = $(this);
			 $('input').removeClass('error');
			 console.log($('input[name="formtype"]',$formId).val())
			 $('.required',$formId).each(function(){
			 	var inputVal = $(this).val();
            	if(inputVal == ''){
	                  $(this).addClass('error');
	            }
			 })
			 if ($('.error').length > 0) {
			 	 e.preventDefault();
	            return false;
	        }
	        else {
	        	var formtype = $('input[name="formtype"]',$formId).val();
	        	yaCounter20935111.reachGoal(formtype);
	        }
		})
        $('.case-item-more').unwrap();

	  if((window.location.href=="http://xn----8sbgjoysfj1l.xn--p1ai/otzyivyi.html") || (window.location.href=="http://xn----8sbgjoysfj1l.xn--p1ai/otzyivyi"))  {
	  		$('.page-nav ul > li:nth-child(3)').addClass("act");
	  }
	  if((window.location.href=="http://xn----8sbgjoysfj1l.xn--p1ai/news.html") || (window.location.href=="http://xn----8sbgjoysfj1l.xn--p1ai/news"))  {
	  		$('.page-nav ul > li:nth-child(4)').addClass("act");
	  }

    $('.service-box-image').hover(
		    function(){
		        current_h = $('img', this)[0].height;
		        current_w = $('img', this)[0].width;
		        current_top = $('img', this).css( "top" );
		        current_left = $('img', this).css( "left" );
		        $('img', this).stop(true, false).animate({width: 427, height: 246, top: 0, left: 0}, 10);
		    },
		    function(){
		        $('img', this).stop(true, false).animate({width: current_w + 'px', height: current_h + 'px', top: current_top, left: current_left}, 10);
		    }
		);

		if(window.location.pathname == '/uslugi/'){
		    $('.catalog-box:first-child').addClass('col-lg-offset-3');
		}
		


	$('.page-nav ul > li:first-child ul').attr('id','serviceAll4');
	$('.page-nav ul > li:nth-child(2) ul').attr('id','serviceAll7');
	//position popup
	//$("a.myfancy").fancybox();
	
	
   
    $(window).resize(function(){
        $('.modal-dialog').each(function(){
            var wid = ($(window).width() - $(this).outerWidth())/2
            var heig = ($(window).height() - $(this).height())/2
            console.log ($(window).height()+' '+$(this).height())
            $(this).css({
                'margin-top': heig,
            });
        });
    });
    $(window).resize();
    
    
    $('button').click(function(){
    	setTimeout(function(){$(window).resize(); }, 300);
    	
    })

	checkhash();

	//Прибить к верху при скролле
	function fixNav() {
		if ($(window).scrollTop() > 220) {
			$('.page-nav').addClass('nav-fixed');
		} else {
			$('.page-nav').removeClass('nav-fixed');
		}
	}
	
	$(window).scroll(fixNav);
	fixNav();

	
	//Увеличение картинок на десктопе
	if ($(window).width() > 1200) {
		var current_h = null;
		var current_w = null;
		$('.catalog-box').hover(
		    function(){
		        current_h = $('img', this)[0].height;
		        current_w = $('img', this)[0].width;
		        current_top = $('img', this).css( "top" );
		        current_left = $('img', this).css( "left" );
		        $('img', this).stop(true, false).animate({width: 210, height: 210, top: 0, left: 0}, 200);
		        $('.catalog-box-name', this).hide;
		    },
		    function(){
		        $('img', this).stop(true, false).animate({width: current_w + 'px', height: current_h + 'px', top: current_top, left: current_left}, 200);
		        $('.catalog-box-name', this).show;
		    }
		);
	}

	//Добавить текст в блоках практик
	$(".case-item-more").click(function(event) {
		event.preventDefault();
		$(this).siblings(".case-item-hidden").fadeIn(300);
		$(this).hide();
			$('.practice-group-practises').masonry();
		$('.practice-block .row').masonry();
	    $('.nav-tabs').masonry();
	});

	//Нужно  больше текста 
	$('.service-more').click(function() {
		$('.service-text-addition').fadeIn(500);
		$('.service-more').hide();
	});

	//Отзывы показать
	$(".service-opinion").hide();
	var showNumber = 2;
	feedbacks = $(".service-opinion").size();
	x=showNumber;
	$('.service-opinion:lt('+x+')').show();
	$('.more-opinions').click(function () {
		x= (x+showNumber <= feedbacks) ? x+showNumber : feedbacks;
		$('.service-opinion:lt('+x+')').fadeIn(350);
		if(x == feedbacks){
			$('.more-opinions').hide();
		}
		return false;
	});

	//Практики показать
	$(".practice-block .case-box").hide();
	$("#all-deal").hide();
	$(".practice-nav > ul > li:first-child a").click();
	var showNumber = 2;
	feedbacks = $(".practice-block .case-box").size();
	x=showNumber;
	$('.practice-block .case-box:lt('+x+')').show();
	$('.more-practice').click(function () {
		x= (x+showNumber <= feedbacks) ? x+showNumber : feedbacks;
		$('.practice-block .case-box:lt('+x+')').fadeIn(350);
		if(x == feedbacks){
			$('.more-practice').hide();
		}
		return false;
	});

	$('.btn-more-pr').click(function  () {
		var showNumber = 4;
		feedbacks = $(".practice-block .case-box").size();
		x=showNumber;
		$('.practice-block .case-box:lt('+x+')').fadeIn(500);
		$("#all-deal").fadeIn(500);
		$('.practice-block .row').masonry();
		$(this).fadeOut(500)
	})
	//Табы для услуг

	$('#myTabs a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	})

	//Скролл к услугам 

	$('.practice-nav a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	});
	    
    $('.practice-nav a').on('click', function (e) {
        var href = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(href).offset().top - 60
        }, 'slow');
        e.preventDefault();
    	$('.practice-group-practises').masonry();
    });
	$('.practice-group-practises').masonry();
	$('.practice-block .row').masonry();
    $('.nav-tabs').masonry();


    $(".pn-fixed").hide();
     $(window).scroll(function() {
        $(this).scrollTop() > 600 ? $(".pn-fixed").fadeIn() : $(".pn-fixed").fadeOut()
    });
     $(".pn-fixed a").click(function() {
        return $("body,html").animate({
            scrollTop: 0
        }, 800), !1
    });

})
	

