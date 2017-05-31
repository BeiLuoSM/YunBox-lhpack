var $nav=jQuery('.prolist');
$nav.children('li').mouseenter(function(){
	jQuery(this).addClass("cur").siblings().removeClass("cur");
})
$nav.children('li').eq(0).mouseenter();
/* Scrolling Animations */
jQuery('.scrollimation').waypoint(function(){
	jQuery(this).addClass('in');
},{offset:'100%'});

