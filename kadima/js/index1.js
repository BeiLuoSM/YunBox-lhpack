


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
                    $("#searchform").css("margin-top","200px").css("opacity","1");
                    if(w<767){
                        $("#searchform").css("margin-top","240px").css("opacity","1");
                    }
            }else{
                $("#searchform").css("margin-top","180px").css("opacity","0");
            }
            onoff = !onoff;
        })
    })()


})
