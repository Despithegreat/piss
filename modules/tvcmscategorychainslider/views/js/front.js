jQuery(document).ready(function(b){var a=false;if(b("body").hasClass("lang-rtl")){var a=true}b(".tvcmscategory-chain-slider .tvcategory-chain-slider-content-box").owlCarousel({loop:false,dots:false,nav:false,smartSpeed:tvMainSmartSpeed,rtl:a,responsive:{0:{items:1},320:{items:1,slideBy:1},400:{items:1,slideBy:1},768:{items:2,slideBy:1},992:{items:2,slideBy:1},1200:{items:3,slideBy:1},1600:{items:3,slideBy:1},1800:{items:3,slideBy:1}}});b(".tvcategory-chain-slider-prev").click(function(c){c.preventDefault();b(".tvcmscategory-chain-slider .owl-nav .owl-prev").trigger("click")});b(".tvcategory-chain-slider-next").click(function(c){c.preventDefault();b(".tvcmscategory-chain-slider .owl-nav .owl-next").trigger("click")});b(".tvcmscategory-chain-slider .tvcategory-chain-slider-pagination-wrapper").insertAfter(".tvcmscategory-chain-slider .tvcms-main-title");b(".tvcmscategory-chain-slider .tvleft-right-title-toggle").on("click",function(c){c.preventDefault();if(document.body.clientWidth<=1199){if(b(this).hasClass("open")){b(this).removeClass("open");b(this).parent().parent().find(".tvcategory-chain-slider-inner-info-box").removeClass("open").stop(false).slideUp(500,"swing")}else{b(this).addClass("open");b(this).parent().parent().find(".tvcategory-chain-slider-inner-info-box").addClass("open").stop(false).slideDown(500,"swing")}}c.stopPropagation()})});