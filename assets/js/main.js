(function($) {
        $(document).ready(function() {
            setActive($);
            $(window).resize(function(e) {
                setActive($);
            });
        });

        $('.equal-height').on('setActiveClass', function(e) {
            $(this).addClass('active');
        });

        $('.equal-height').on('setActiveClass', function(e) {
            $(this).removeClass('active');
        });

        $('.equal-height.active').matchHeight();


}) (jQuery);

function setActive($) {
    $('.equal-height').each(function(i, item) {
        if ($(window).width() > 991) {
            $(item).trigger('setActiveClass');
        } else {
            $(item).trigger('removeActiveClass');
        }
    });
}