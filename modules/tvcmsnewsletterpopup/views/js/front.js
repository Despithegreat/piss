var fnTvcmsNewsLetterPopupStatus=true;jQuery(document).ready(function(b){if(b.cookie("tvcmsnewsletterpopup")!="true"){var c=b(document).find("#tvnewsletter-email-subscribe");var a=function(){var d=b(window).scrollTop();if(d>49&&fnTvcmsNewsLetterPopupStatus){fnTvcmsNewsLetterPopupStatus=false;setTimeout(function(){b("#tvcmsNewsLetterPopup").modal({show:true})},3000)}};b(window).scroll(function(){a()});themevoltyCallEventsPush(a);b("#tvnewsletter-email-subscribe").click(function(){var d=b("#tvcmsnewsletterpopupnewsletter-input").val();b.ajax({type:"POST",headers:{"cache-control":"no-cache"},async:false,url:ajax_path,data:"name=marek&email="+d,success:function(e){if(e){b(".tvcmsnewsletterpopupAlert").text(e)}}})});b("#tvcmsnewsletterpopupnewsletter-input").keypress(function(f){var d=(f.keyCode?f.keyCode:f.which);if(d=="13"){var e=b("#tvcmsnewsletterpopupnewsletter-input").val();b.ajax({type:"POST",headers:{"cache-control":"no-cache"},async:false,url:ajax_path,data:"name=marek&email="+e,success:function(g){if(g){b(".tvcmsnewsletterpopupAlert").text(g)}}});f.preventDefault()}});b("#tvcmsnewsletterpopup_newsletter_dont_show_again").prop("checked")==false}b(document).on("click",".tvcmsnewsletterpopup_newsletter_dont_show_again",function(){b.cookie("tvcmsnewsletterpopup","true");b("#tvcmsNewsLetterPopup").css("display","none");b("#tvcmsNewsLetterPopup").removeClass("in");b(".modal-backdrop.fade.in").remove();b("body").removeClass("modal-open")})});