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

    /* For NAPs Training Page */
    /* Custom JS for NAP project page */
    var pageHeight = $('#main .page-width').height();
    $('#sidebar-first').height(pageHeight);

    /* Init jquery tabs on groups page */
    $('#contentTabsEnglish').tabs();
    $('#contentTabsFrench').tabs();

    $('.switch-language').click(function(event) {
        var data = $(this).data();
        $('.switch-language').removeClass('active');
        $(this).addClass('active');
        switch (data.language) {
            case 'english':
                $('.contentTabs').removeClass('show');
                $('#contentTabsEnglish').addClass('show');
                break;
            case 'french':
                $('.contentTabs').removeClass('show');
                $('#contentTabsFrench').addClass('show');
        }
    });

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