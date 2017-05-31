


$(function () {

    function sizeChange(){
        var width = document.documentElement.clientWidth;
        $("html").css("fontSize",12/320*width + "px");
    }
    sizeChange();
    window.onresize = function(){
        sizeChange()
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
                    $("#searchform").css("margin-top","190px").css("opacity","1");
                    if(w<767){
                        $("#searchform").css("margin-top","10px").css("opacity","1").css("left","0");
                    }
            }else{
                $("#searchform").css("margin-top","180px").css("opacity","0");
            }
            onoff = !onoff;
        })
    })()


    function advantageHover(){
        var fs = parseInt($("html").css("fontSize"));
            function adToBig(c,w,h,num){
                $(c).mouseover(function () {
                    $(".advantage-exterior-cover").eq(num).css("opacity","0");
                    $(this).css("marginTop","-5px").css("marginLeft","-5px").css("width",w/71.362*fs*1.03+"px").css("height",h/71.362*fs*1.03+"px");
                }).mouseout(function () {
                    $(".advantage-exterior-cover").eq(num).css("opacity","0.6");
                    $(this).css("marginTop","0px").css("marginLeft","0px").css("width",w/71.362*fs+"px").css("height",h/71.362*fs+"px");
                })
            }
            adToBig(".advantage-exterior-left",588,386,0);
            adToBig(".advantage-exterior-right",350,386,1);
    }
    advantageHover();

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

})
