var mobileViewSize=991;var storage;var langId=document.getElementsByTagName("html")[0].getAttribute("lang");var currentFtrProdModule=tvthemename+"_ftrprod_"+langId;jQuery(document).ready(function(e){storage=e.localStorage;function g(h){return""+storage.get(currentFtrProdModule+h)}function b(h,i){storage.set(currentFtrProdModule+h,i)}function a(h){storage.remove(currentFtrProdModule+h)}var c=true;function d(){var h=[[".tvcmsfooter-featured-product .tvmain-featured-product-wrapper-info-box",".tvfooter-featured-product-next",".tvfooter-featured-product-prev"],[".tvcmsfooter-new-product .tvmain-new-product-wrapper-info-box",".tvfooter-new-product-next",".tvfooter-new-product-prev"],[".tvcmsfooter-best-seller-product .tvmain-new-product-wrapper-info-box",".tvfooter-best-seller-product-next",".tvfooter-best-seller-product-prev"]];for(var j=0;j<h.length;j++){if(e(h[j][0]).length){e(h[j][0]).owlCarousel({loop:false,dots:false,nav:false,smartSpeed:tvMainSmartSpeed,responsive:{0:{items:1},320:{items:1,slideBy:1},576:{items:1,slideBy:1},768:{items:1,slideBy:1},992:{items:1,slideBy:1},1200:{items:1,slideBy:1},1600:{items:2,slideBy:1},1800:{items:2,slideBy:1}}});e(h[j][1]).on("click",function(i){i.preventDefault();e("."+e(this).attr("data-parent")+" .owl-nav .owl-next").trigger("click")});e(h[j][2]).on("click",function(i){i.preventDefault();e("."+e(this).attr("data-parent")+" .owl-nav .owl-prev").trigger("click")})}}}var f=function(){if(c&&e(".tvfooter-product-box-layout").length){var h=g("");if(h!="null"){e(".tvfooter-product-box-layout").html(h);d()}c=false;e.ajax({type:"POST",url:gettvcmsfooterproductlink,success:function(j){var i=g("");b("",j);if(i==="null"){e(".tvfooter-product-box-layout").html(j);d();customImgLazyLoad(".tvfooter-product-box-layout")}},error:function(i,k,j){console.log(k,j)}})}};themevoltyCallEventsPush(f,null)});