jQuery(document).ready(function(b){b(".tvcmstestimonial .tvtestimonial-content-box").owlCarousel({loop:false,dots:true,nav:false,autoplay:true,autoplayTimeout:5000,autoplayHoverPause:false,smartSpeed:tvMainSmartSpeed,responsive:{0:{items:1},320:{items:1,slideBy:1},400:{items:1,slideBy:1},768:{items:1,slideBy:1},992:{items:1,slideBy:1},1200:{items:1,slideBy:1},1600:{items:1,slideBy:1},1800:{items:1,slideBy:1}}});b(".tvcmstestimonial .tvtestimonial-prev").on("click",function(){b(".tvcmstestimonial .owl-nav .owl-prev").trigger("click")});b(".tvcmstestimonial .tvtestimonial-next").on("click",function(){b(".tvcmstestimonial .owl-nav .owl-next").trigger("click")});b(".tvcmstestimonial .tvcms-testimonial-pagination-wrapper").insertAfter(".tvcmstestimonial .tvtestimonial-slider-inner");function a(){b(".tvcms-left-testimonial .tvtestimonial-content-box").owlCarousel({loop:false,dots:false,nav:false,smartSpeed:tvMainSmartSpeed,responsive:{0:{items:1},320:{items:1,slideBy:1},400:{items:1,slideBy:1},768:{items:1,slideBy:1},992:{items:1,slideBy:1},1200:{items:1,slideBy:1},1600:{items:1,slideBy:1},1800:{items:1,slideBy:1}}});b(".tvcms-left-testimonial .tvtestimonial-prev").on("click",function(){b(".tvcms-left-testimonial .owl-nav .owl-prev").trigger("click")});b(".tvcms-left-testimonial .tvtestimonial-next").on("click",function(){b(".tvcms-left-testimonial .owl-nav .owl-next").trigger("click")})}a();b(window).resize(function(){a()})});