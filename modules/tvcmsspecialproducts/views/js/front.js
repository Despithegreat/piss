var storage;var langId=document.getElementsByTagName("html")[0].getAttribute("lang");var currentSpecialModule=tvthemename+"_special_"+langId;jQuery(document).ready(function(e){storage=e.localStorage;function f(g){return""+storage.get(currentSpecialModule+g)}function b(g,h){storage.set(currentSpecialModule+g,h)}function a(g){storage.remove(currentSpecialModule+g)}var d=function(){if(e(".tvcmsspecial-product").length){var g=f("");if(g!="null"){e(".tvcmsspecial-product").html(g);c();productTime()}e.ajax({type:"POST",url:gettvcmsspecialproductslink,success:function(i){var h=f("");b("",i);if(h==="null"){e(".tvcmsspecial-product").html(i);c();customImgLazyLoad(".tvcmsspecial-product")}},error:function(h,j,i){console.log(j,i)}})}};themevoltyCallEventsPush(d,null);function c(){var g=[[".tvcmsspecial-product .tvspecial-product-wrapper",".tvcmsspecial-next",".tvcmsspecial-prev",".tvcmsspecial-product"]];for(var h=0;h<g.length;h++){if(e(g[h][0]).attr("data-has-image")=="true"){e(g[h][0]).owlCarousel({loop:false,dots:false,nav:false,smartSpeed:tvMainSmartSpeed,responsive:{0:{items:1},320:{items:1,slideBy:1},330:{items:2,slideBy:1},400:{items:2,slideBy:1},480:{items:2,slideBy:1},650:{items:2,slideBy:1},767:{items:2,slideBy:1},768:{items:2,slideBy:1},992:{items:3,slideBy:1},1023:{items:3,slideBy:1},1024:{items:3,slideBy:1},1200:{items:3,slideBy:1},1350:{items:3,slideBy:1},1660:{items:4,slideBy:1},1800:{items:4,slideBy:1}}})}else{e(g[h][0]).owlCarousel({loop:false,dots:false,nav:false,smartSpeed:tvMainSmartSpeed,responsive:{0:{items:1},320:{items:1,slideBy:1},330:{items:2,slideBy:1},400:{items:2,slideBy:1},480:{items:2,slideBy:1},650:{items:3,slideBy:1},767:{items:3,slideBy:1},768:{items:3,slideBy:1},992:{items:4,slideBy:1},1023:{items:4,slideBy:1},1024:{items:4,slideBy:1},1200:{items:4,slideBy:1},1350:{items:4,slideBy:1},1660:{items:5,slideBy:1},1800:{items:5,slideBy:1}}})}e(g[h][1]).on("click",function(i){i.preventDefault();e("."+e(this).attr("data-parent")+" .owl-nav .owl-next").trigger("click")});e(g[h][2]).on("click",function(i){i.preventDefault();e("."+e(this).attr("data-parent")+" .owl-nav .owl-prev").trigger("click")});e(g[h][3]+" .tv-pagination-wrapper").insertAfter(g[h][3]+" .tvcmsmain-title-wrapper")}}});