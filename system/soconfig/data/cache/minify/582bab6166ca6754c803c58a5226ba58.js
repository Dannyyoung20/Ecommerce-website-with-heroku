
$(document).ready(function(){$("#close-posmotion-header").click(function(){$('.promotion-top').toggleClass('hidden-promotion');$('body').toggleClass('hidden-promotion-body');if($(".promotion-top").hasClass("hidden-promotion")){$.cookie("open",0);}else{$.cookie("open",1);}});if($.cookie("open")==0){$('.promotion-top').addClass('hidden-promotion');$('body').addClass('hidden-promotion-body');}
$('.list-msg').owlCarousel2({pagination:false,center:false,nav:false,dots:false,loop:true,slideBy:1,autoplay:true,margin:30,autoplayTimeout:4500,autoplayHoverPause:true,autoplaySpeed:1200,startPosition:0,responsive:{0:{items:1},480:{items:1},768:{items:1},1200:{items:1}}});$('.horizontal').on('mouseenter',function(){$(".select_category select").blur();});$('.cate-content-home5').owlCarousel2({pagination:false,center:false,nav:false,dots:false,loop:true,slideBy:1,autoplay:true,margin:30,autoplayTimeout:4500,autoplayHoverPause:true,autoplaySpeed:1200,startPosition:0,responsive:{0:{items:1},480:{items:2},768:{items:3},1200:{items:4}}});$('.slider-img-cate').owlCarousel2({pagination:false,center:false,nav:false,loop:true,dots:false,slideBy:1,autoplay:true,margin:0,autoplayTimeout:4500,autoplayHoverPause:true,autoplaySpeed:1200,startPosition:0,responsive:{0:{items:1},480:{items:1},768:{items:1},1200:{items:1}}});$('.slider-clients-say').owlCarousel2({pagination:false,center:false,nav:false,loop:true,slideBy:1,autoplay:true,margin:0,autoplayTimeout:4500,autoplayHoverPause:true,autoplaySpeed:1200,startPosition:0,responsive:{0:{items:1},480:{items:1},768:{items:1},1200:{items:1}}});});