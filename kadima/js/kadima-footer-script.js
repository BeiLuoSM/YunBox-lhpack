/* scroll js */

/* photobos js */
jQuery('.kadima_photo_gallery').photobox('.photobox_a');
jQuery('.kadima_photo_gallery').photobox('.photobox_a:first', { thumbs:false, time:0 }, imageLoaded);
function imageLoaded(){
	console.log('image has been loaded...');
}
var $nav=jQuery('.prolist');
$nav.children('li').mouseenter(function(){
	jQuery(this).addClass("cur").siblings().removeClass("cur");
})
$nav.children('li').eq(0).mouseenter();
/* Scrolling Animations */
jQuery('.scrollimation').waypoint(function(){
	jQuery(this).addClass('in');
},{offset:'100%'});

