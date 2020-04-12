// NAVBAR SCROLLED
$(window).scroll(function(){
	if ($(this).scrollTop()) {
		$("nav.navbar").addClass("scrolled");
		$("nav.navbar.navbar-2").removeClass("nav-color");
	}else{
		$("nav.navbar").removeClass("scrolled");
		$("nav.navbar.navbar-2").addClass("nav-color");
	}
});

// NAVBAR TOGGLE RESPONSIVE
$(document).ready(function(){
	$(".navbar-burger").click(function(){
		$(".navbar-burger").toggleClass("is-active");
		$(".navbar-menu").slideToggle("is-active");
	});
});

// NAVBAR DROPDOWN RESPONSIVE
if ($(window).width() < 1024) {
	$(".navbar-dropdown").css("display","none");
	$(".navbar-item.has-dropdown").click(function(){
		$(this).children(".navbar-dropdown").slideToggle();
	});
}

// NAVBAR DROPDOWN FLEX
if ($(window).width() >= 1024) {
	$(".navbar-dropdown").addClass("flexed");
}

// SLIDER HOME
$(".slider-home").slick({
	arrows: true,
	dots: true,
	infinite:true,
	slidesToShow: 1,
	slidesToScroll: 1,
	autoplay: true,
	fade: true
});