var storage,langId=document.getElementsByTagName("html")[0].getAttribute("lang"),currentCatProdModule=tvthemename+"_catprod_"+langId,url=gettvcmscategoryproductlink;jQuery(document).ready((function(f){function b(a){return""+storage.get(currentCatProdModule+a)}storage=f.localStorage,function(){var c=f(".tvtabcategory-product-sub-title-block li").size();c-=2;var l=7;if((document.body.clientWidth>=992&&document.body.clientWidth<=1199||document.body.clientWidth>=768&&document.body.clientWidth<=991)&&(l=6),c>l){function m(n,p){var q=1;f(".tvtabcategory-product-sub-title-block li").each((function(){q>p&&f(this).addClass("hide"),q+=1}))}function i(){f(".tvtabcategory-hide").addClass("hide"),f(".tvtabcategory-product-sub-title-block .tvtabcategory-show").removeClass("hide")}m(c,l),i(),f(".tvtabcategory-product-sub-title-block .tvtabcategory-show").on("click",(function(e){f(".tvtabcategory-product-sub-title-block li").each((function(){f(this).removeClass("hide")})),f(".tvtabcategory-product-sub-title-block .show-hide").addClass("hide"),f(".tvtabcategory-product-sub-title-block .tvtabcategory-hide").removeClass("hide"),e.stopPropagation()})),f(".tvtabcategory-product-sub-title-block .tvtabcategory-hide").on("click",(function(a){m(c,l),i(),a.stopPropagation()}))}}(),f(".tvtabcategory-product-sub-title-block ul").children("li:first-child").addClass("active");var h=f(".tvtabcategory-product-sub-title-block li.active a").attr("data-category-id"),j=f(".tvtabcategory-product-sub-title-block li.active a").attr("data-num-prod");f(".tvtabcategory-product-sub-title-block li").on("click",(function(c){if(c.preventDefault(),f(this).hasClass("show-hide")){return !0}f(".tvtabcategory-product-sub-title-block li").each((function(){f(this).removeClass("active")})),f(this).addClass("active");var i=f(this).find("a").attr("data-category-id"),l=f(this).find("a").attr("data-num-prod");g=!0,k({url:url,category_id:i,num_of_prod:l}),f(".tvtabcategory-all-product-wrapper .ajaxData").fadeOut(150),f(".tvtabcategory-all-product-wrapper .load"+$category_id).fadeIn(580)}));var g=!0,k=function(a){if(f("body").hasClass("page-index")&&g){$url=a.url,$category_id=a.category_id,$num_of_prod=a.num_of_prod,g=!1;var c=""+b(a.category_id);f(".tvtabcategory-all-product-wrapper").hasClass("load"+a.category_id)||"null"!=c&&(f(".tvtabcategory-all-product-wrapper").addClass("load"+a.category_id),f(".tvtabcategory-all-product-wrapper").append(c),d(),productTime()),f.ajax({type:"POST",url:$url,data:"category_id="+a.category_id+"&num_of_prod="+$num_of_prod+"&token="+static_token,success:function(n){var i,p,e=""+b(a.category_id),m="<div class='ajaxData load"+a.category_id+"'>"+n+"</div>";i=a.category_id,p=m,storage.set(currentCatProdModule+i,p),"null"===e&&(f(".tvtabcategory-all-product-wrapper").addClass("load"+a.category_id),f(".tvtabcategory-all-product-wrapper").append(m),d())},error:function(l,i,m){console.log(i,m)}})}};function d(){f(".tvcmstabcategory-product-slider-main-title-wrapper .tvtabcategory-product-pagination").remove(),f(".tvtabcategory-all-product-content-box .tvtabcategory-all-product-slider").owlCarousel({loop:!1,dots:!1,nav:!1,smartSpeed:tvMainSmartSpeed,responsive:{0:{items:1},320:{items:1,slideBy:1},330:{items:2,slideBy:1},400:{items:2,slideBy:1},480:{items:2,slideBy:1},650:{items:2,slideBy:1},767:{items:2,slideBy:1},768:{items:2,slideBy:1},992:{items:3,slideBy:1},1023:{items:3,slideBy:1},1024:{items:3,slideBy:1},1200:{items:3,slideBy:1},1350:{items:3,slideBy:1},1660:{items:4,slideBy:1},1800:{items:4,slideBy:1}}}),f(".tvtabcategory-product-prev").click((function(c){c.preventDefault(),f(".tvtabcategory-all-product-content-box .tvtabcategory-all-product-slider .owl-nav .owl-prev").trigger("click")})),f(".tvtabcategory-product-next").click((function(c){c.preventDefault(),f(".tvtabcategory-all-product-content-box .tvtabcategory-all-product-slider .owl-nav .owl-next").trigger("click")})),f(".tvcmstabcategory-product-slider .tvtabcategory-product-pagination").insertAfter(".tvcmstabcategory-product-slider .tvcmsmain-title-wrapper")}themevoltyCallEventsPush(k,{url:url,category_id:h,num_of_prod:j})}));