$(document).ready(function() {
	var winheight = screen.height();
	var winwidth = screen.width();
	var height = screen.availHeight();
	var width = screen.availWidth();
	var feedWidth = 0;
	var tabsbarWidth = 0;
	if (winwidth >= winheight) {
		feedWidth = winwidth * 0.3;
		tabsbarWidth = winwidth * 0.05;
	}
	else {
		feedWidth = winwidth * 0.5;
		tabsbarWidth = winwidth * 0.1;
	}
	$(".feed").css("width", feedWidth);
	$(".tabsbar").css("width", tabsbarWidth);
});