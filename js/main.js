jQuery(document).ready(function ($) {
    $('.jqui-select > select').selectmenu();

    $('.overlayElementTrigger').on('click', function () {
        var price_id = $(this).data('id');
        $('#of-price').find('option[value="' + price_id + '"]').attr('selected', 'selected');
        $('.jqui-select > select').selectmenu('refresh');
        if ($('.overlay-forms').is(':visible')) {
            $('.of-form').stop().fadeOut();
        } else {
            $('.overlay-forms').stop().fadeIn();
        }

        $('.' + $(this).data('selector')).stop().fadeIn();
    });

    $('.form-overlay').on('click', function () {
        $('.of-form').stop().fadeOut();
        $('.overlay-forms').stop().fadeOut();
        if ($('.popup.youtube').length) {
            $('.youtube .video-container').find('iframe').attr('src', '');
            $('.popup.youtube').hide();
        }
    });

    $('.of-close').on('click', function () {
        $('.of-form').stop().fadeOut();
        $('.overlay-forms').stop().fadeOut();
        if ($('.popup.youtube').length) {
            $('.youtube .video-container').find('iframe').attr('src', '');
            $('.popup.youtube').hide();
        }
    });


    var slide = $("#slider");
    slide.owlCarousel({
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        items: 1,
        singleItem: true,
        responsive: true,
        responsiveRefreshRate: 1,
        pagination: true,
        navigationText: false,
        autoPlay: 5000,
        transitionStyle: "fade"
    });
    $("#transitionType").change(function () {
        var newValue = $(this).val();

        //TransitionTypes is owlCarousel inner method.
        slide.data("owlCarousel").transitionTypes(newValue);
        slide.trigger("owl.play");
    });

    var footerHeight = $("footer").outerHeight();

    $("footer").css({'margin-top': -footerHeight});
    $(".clearfix-footer").css({'height': footerHeight});

    $(".of-submit").click(function () {
        var name = $(this).parents().children(".of-input_name");
        if ($.trim(name.val()) == "") {
            name.addClass("form_error");
            return false;
        }
        else {
            name.removeClass("form_error");
        }

        var phone = $(this).parents().children(".of-input_phone");
        if ($.trim(phone.val()) == "") {
            phone.addClass("form_error");
            return false;
        }
        else {
            phone.removeClass("form_error");
        }

        var email = $(this).parents().children(".of-input_email");
        if ($.trim(email.val()) == "") {
            email.addClass("form_error");
            return false;
        }
        else {
            email.removeClass("form_error");
        }

        var price = $(this).parent().find('.jqui-select select');
        var text = $(this).parents().children(".of-form__textarea");

        if (price.length) {
            $.ajax({
                url: '/site/order',
                method: 'post',
                data: 'data[name]=' + name.val()
                + '&data[tel]=' + phone.val()
                + '&data[email]=' + email.val()
                + '&data[price_id]=' + price.val()
                + '&data[text]=' + text.val()
            });
        } else {
            $.ajax({
                url: '/site/ask',
                method: 'post',
                data: 'data[name]=' + name.val()
                + '&data[tel]=' + phone.val()
                + '&data[email]=' + email.val()
                + '&data[text]=' + text.val()
            });
        }

        if ($('.overlay-forms').is(':visible')) {
            $('.form-order').hide();
            phone.val("");
            name.val("");
            email.val("");
            text.val("");
            $('.form-thanks').show();
        }
        else {
            $('.overlay-forms').show();
            phone.val("");
            name.val("");
            email.val("");
            text.val("");
            $('.form-thanks').show();
        }

    });
    $(".phone_mask").mask("(999) 999-99-99");

    $('a[href^="#"]').click(function () {
        var el = $(this).attr('href');
        $('body').animate({
            scrollTop: $(el).offset().top
        }, 2000);
        return false;
    });

    $('.fancybox').fancybox({
        closeClick: false,
        tpl: {
            wrap: '<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>',
            image: '<img class="fancybox-image" src="{href}" alt="" />',
            iframe: '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0"></iframe>',
            error: '<p class="fancybox-error">The requested content cannot be loaded.<br/>Please try again later.</p>',
            closeBtn: '<a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a>',
            next: '<a title="Next" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',
            prev: '<a title="Previous" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'
        },
        maxWidth: '1200',
        maxHeight: '800',
        openEffect: 'none',
        closeEffect: 'none',

        beforeShow: function () {
            //$('.fancybox-outer').append('<div class="blog-item__soc">
            // <a href="" class="blog-item__soc__item blog-item__soc__item_fb"><span></span></a>
            // <a href="" class="blog-item__soc__item blog-item__soc__item_ins"><span></span></a>
            // <a href="" class="blog-item__soc__item blog-item__soc__item_vk"><span></span></a>
            // <a href="" class="blog-item__soc__item blog-item__soc__item_pin"><span></span></a>
            // </div>');
        },
        afterLoad: function () {

        }
    });

    $('.fancybox-overlay').on('click', function () {
        $('.fancybox-close').click();
    });

    $('#album-more').on('click', function () {
        var category = $(this).data('category');
        var page = $(this).data('page');
        $.ajax({
            url: '/portfolio/ajaxindex/' + category + '?page=' + page,
            success: function (data) {
                if ('' == data) {
                    $('#album-more').remove();
                } else {
                    $('#inner').append(data);
                    page++;
                    $('#album-more').data('page', page);
                }
                slides();
            }
        })
    });

    $('#photo-more').on('click', function () {
        var id = $(this).data('id');
        var page = $(this).data('page');
        $.ajax({
            url: '/portfolio/ajaxview/' + id + '?page=' + page,
            success: function (data) {
                if ('' == data) {
                    $('#photo-more').remove();
                } else {
                    $('#inner').append(data);
                    page++;
                    $('#photo-more').data('page', page);
                }
                slides();
            }
        })
    });

    slides();
});

function slides() {
    $('.slides').cycle({
        fx:     'none',
        speed:   1,
        timeout: 1000
    }).cycle("pause");

    $('.link').hover(function(){
        $(this).find('.slides').addClass('active').cycle('resume');
    }, function(){
        $(this).find('.slides').removeClass('active').cycle('pause');
    });
}