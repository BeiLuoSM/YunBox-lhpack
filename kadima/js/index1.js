


$(function () {

    function sizeChange(){
        var width = document.documentElement.clientWidth;
        $("html").css("fontSize",12/320*width + "px");
    }
    sizeChange();
    window.onresize = function(){
        sizeChange()
    }

    function getScrollTop()
    {
        var scrollTop=0;
        if(document.documentElement&&document.documentElement.scrollTop)
        {
            scrollTop=document.documentElement.scrollTop;
        }
        else if(document.body)
        {
            scrollTop=document.body.scrollTop;
        }
        return scrollTop;
    }
    window.onscroll=function () {
        var w = document.documentElement.clientWidth;
        var scrollTop = getScrollTop();
        if(w>=1200){
            if(scrollTop>=80){
                $(".navbar-brand h2").hide();
                $(".navbar-brand img").attr("src","http://localhost/wrd-lh/wp-content/themes/lh/images/h-logo1.png").css("width","70px").css("margin-top","22px");
                $(".nav-phone").hide();
                $(".navigation_menu").addClass("navbar-fixed-top");
                $(".navbar-nav").css("padding-left","0").css("margin-top","46px").css("padding-right","0");
                $(".search-img").hide();
            }else{
                $(".navbar-brand h2").show();
                $(".navbar-brand img").attr("src","http://localhost/wrd-lh/wp-content/themes/lh/images/h-logo.gif").css("width","132px").css("margin-top","");
                $(".nav-phone").show();
                $(".navigation_menu").removeClass("navbar-fixed-top");
                $(".navbar-nav").css("padding-left","330px").css("margin-top","34px").css("padding-right","44px");
                $(".search-img").show();
            }
        }
    }

    function tab() {
        var adL = $(".advantage-left li");
        var adR = $(".advantage-right li");
        adL.eq(0).addClass('advantage-left-active');
        adR.eq(0).addClass('advantage-right-active');
        for(let i=0;i<adL.length;i++){
            adL.eq(i).click(function(){
                for(var j=0;j<adL.length;j++){
                    adL.removeClass('advantage-left-active');
                    adR.removeClass('advantage-right-active');
                }
                $(this).addClass('advantage-left-active');
                adR.eq(i).addClass('advantage-right-active');
            })
        }
    }

    tab();

    (function () {
        onoff = true;
        var w = document.documentElement.clientWidth;
        $(".navbar-collapse img").click(function () {
            if(onoff){
                    $(this).attr("src","http://localhost/wrd-lh/wp-content/themes/lh/images/close.png");
                    $("#searchform").css("margin-top","156px").css("opacity","1");
                    if(w<767){
                        $("#searchform").css("margin-top","10px").css("opacity","1").css("left","0");
                    }
            }else{
                $(this).attr("src","http://localhost/wrd-lh/wp-content/themes/lh/images/search.gif");
                $("#searchform").css("margin-top","156px").css("opacity","0");
            }
            onoff = !onoff;
        })
    })()

    function adToBig(c,w,h){
        var fs = parseInt($("html").css("fontSize"));
        $(c).mouseover(function () {
            $(this).css("marginTop","-5px").css("marginLeft","-5px").css("width",w/71.362*fs*1.03+"px").css("height",h/71.362*fs*1.03+"px");
        }).mouseout(function () {
            $(this).css("marginTop","0px").css("marginLeft","0px").css("width",w/71.362*fs+"px").css("height",h/71.362*fs+"px");
        })
    }
    adToBig(".advantage-exterior-left",588,386);
    adToBig(".advantage-exterior-right",350,386);

    (function () {
        for(let i =0 ;i<$(".advantage-mechanical").length;i++){
            $(".advantage-mechanical").eq(i).mouseover(function () {
                $(".advantage-mechanical span").eq(i).css("opacity","0");
                $(this).find("img").css("marginTop","-5px").css("marginLeft","-5px").css("width","102%");
            }).mouseout(function () {
                $(".advantage-mechanical span").eq(i).css("opacity","0.6");
                $(this).find("img").css("width","100%").css("marginTop","0px").css("marginLeft","0px");

            })
        }
    })()

    // var myPlayer = videojs('example_video_1');
    // videojs("example_video_1").ready(function(){
    //     var myPlayer = this;
    //     myPlayer.play();
    // });

})
