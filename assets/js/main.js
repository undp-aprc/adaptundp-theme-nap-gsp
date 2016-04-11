(function($) {
        $(document).ready(function() {
            setActive($);
            $(window).resize(function(e) {
                setActive($);
            });
        });

}) (jQuery);

function setActive($) {
    $('.equal-height').each(function(i, item) {
        if ($(window).width() > 991) {
            $(item).addClass('active');
        } else {
            $(item).removeClass('active');
        }
    });
}