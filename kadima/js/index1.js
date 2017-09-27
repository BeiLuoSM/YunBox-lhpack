jQuery(document).ready(function($) {
    $(function() {

        function sizeChange() {
            var width = document.documentElement.clientWidth;
            $("html").css("fontSize", 12 / 320 * width + "px");
        }
        sizeChange();
        window.onresize = function() {
            sizeChange()
        }

        function getScrollTop() {
            var scrollTop = 0;
            if (document.documentElement && document.documentElement.scrollTop) {
                scrollTop = document.documentElement.scrollTop;
            } else if (document.body) {
                scrollTop = document.body.scrollTop;
            }
            return scrollTop;
        }
        window.onscroll = function() {
            var w = document.documentElement.clientWidth;
            var scrollTop = getScrollTop();
            if (w >= 1200) {
                if (scrollTop >= 80) {
                    $(".navbar-brand").css("padding", "15px 7px");
                    // $(".navbar-brand h2").hide();
                    $(".navbar-brand h2").css("fontSize", "18px").css("line-height", "24px").css("margin-top", "8px");
                    $(".navbar-brand img").attr("src", "http://www.lhpack.com/wp-content/themes/kadima/images/h-logo1.png").css("width", "70px");
                    $(".nav-phone").hide();
                    $(".navigation_menu").addClass("navbar-fixed-top");
                    $(".navbar-nav").css("padding-left", "0").css("padding-right", "0");
                    $(".search-img").hide();
                } else {
                    $(".navbar-brand").css("padding", "15px 15px");
                    // $(".navbar-brand h2").show();
                    $(".navbar-brand h2").css("fontSize", "36px").css("line-height", "44px").css("margin-top", "20px");
                    $(".navbar-brand img").attr("src", "http://www.lhpack.com/wp-content/themes/kadima/images/h-logo.gif").css("width", "132px");
                    $(".nav-phone").show();
                    $(".navigation_menu").removeClass("navbar-fixed-top");
                    $(".navbar-nav").css("padding-left", "330px").css("margin-top", "34px").css("padding-right", "44px");
                    $(".search-img").show();
                }
            }
        }

        function adToBig(c, w, h) {
            var fs = parseInt($("html").css("fontSize"));
            $(c).mouseover(function() {
                $(this).css("marginTop", "-5px").css("marginLeft", "-5px").css("width", w / 71.362 * fs * 1.03 + "px").css("height", h / 71.362 * fs * 1.03 + "px");
            }).mouseout(function() {
                $(this).css("marginTop", "0px").css("marginLeft", "0px").css("width", w / 71.362 * fs + "px").css("height", h / 71.362 * fs + "px");
            })
        }
        adToBig(".advantage-exterior-left", 588, 386);
        adToBig(".advantage-exterior-right", 350, 386);

        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            spaceBetween: 30,
            effect: 'fade',
            loop : true,
            autoplay: 3000,
            autoplayDisableOnInteraction: false
        });
    });

    function newsChange(){
        for(var i=0;i<$(".category-news").length;i++){
            if((i)%2){
                $(".category-news").eq(i+1).find(".kadima_blog_thumb_wrapper_showcase").before($(".category-news").eq(i+1).find(".kadima_fuul_blog_detail_padding"));
            }
        }
    }
    newsChange();

});