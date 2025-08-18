jQuery(document).ready(function($) {
    var header = $('#site-header'); // Replace #site-header with your header's ID or class
    var stickyClass = 'sticky-header';
    var headerOffset = header.offset().top;

    $(window).scroll(function() {
        if ($(window).scrollTop() > headerOffset) {
            header.addClass(stickyClass);
        } else {
            header.removeClass(stickyClass);
        }
    });
});