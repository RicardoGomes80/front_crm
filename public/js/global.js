$(document).ready(() => {
    setTimeout(function() {
        $(".vertical-nav-menu").metisMenu()
    }, 100), 
    $(".search-icon").click(function() {
        $(this).parent().parent().addClass("active")
    }), $(".search-wrapper .close").click(function() {
        $(this).parent().removeClass("active")
    }), $('[data-toggle="popover-custom-content"]').each(function(e, t) {
        $(this).popover({
            html: !0,
            placement: "auto",
            template: '<div class="popover popover-custom" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
            content: function() {
                var e = $(this).attr("popover-id");
                return $("#popover-content-" + e).html()
            }
        })
    }), $(".dropdown-menu").on("click", function(e) {
        var t = $._data(document, "events") || {};
        t = t.click || [];
        for (var o = 0; o < t.length; o++) t[o].selector && ($(e.target).is(t[o].selector) && t[o].handler.call(e.target, e), $(e.target).parents(t[o].selector).each(function() {
            t[o].handler.call(this, e)
        }));
        e.stopPropagation()
    }), $('[data-toggle="popover-custom-bg"]').each(function(e, t) {
        var o = $(this).attr("data-bg-class");
        $(this).popover({
            trigger: "focus",
            placement: "top",
            template: '<div class="popover popover-bg ' + o + '" role="tooltip"><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        })
    }), $(function() {
        $('[data-toggle="popover"]').popover()
    }), $('[data-toggle="popover-custom"]').each(function(e, t) {
        $(this).popover({
            html: !0,
            container: $(this).parent().find(".rm-max-width"),
            content: function() {
                return $(this).next(".rm-max-width").find(".popover-custom-content").html()
            }
        })
    }), $("body").on("click", function(e) {
        $('[rel="popover-focus"]').each(function() {
            $(this).is(e.target) || 0 !== $(this).has(e.target).length || 0 !== $(".popover").has(e.target).length || $(this).popover("hide")
        })
    }), $(".header-megamenu.nav > li > .nav-link").on("click", function(e) {
        $('[data-toggle="popover-custom"]').each(function() {
            $(this).is(e.target) || 0 !== $(this).has(e.target).length || 0 !== $(".popover").has(e.target).length || $(this).popover("hide")
        })
    }), $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    }), $(function() {
        $('[data-toggle="tooltip-light"]').tooltip({
            template: '<div class="tooltip tooltip-light"><div class="tooltip-inner"></div></div>'
        })
    })
    , $(".open-right-drawer").click(function() {
        $(this).addClass("is-active"), $(".app-drawer-wrapper").addClass("drawer-open"), $(".app-drawer-overlay").removeClass("d-none")
    }), $(".drawer-nav-btn").click(function() {
        $(".app-drawer-wrapper").removeClass("drawer-open"), $(".app-drawer-overlay").addClass("d-none"), $(".open-right-drawer").removeClass("is-active")
    }), $(".app-drawer-overlay").click(function() {
        $(this).addClass("d-none"), $(".app-drawer-wrapper").removeClass("drawer-open"), $(".open-right-drawer").removeClass("is-active")
    }), $(".mobile-toggle-nav").click(function() {
        $(this).toggleClass("is-active"), $(".app-container").toggleClass("sidebar-mobile-open")
    }), $(".mobile-toggle-header-nav").click(function() {
        $(this).toggleClass("active"), $(".app-header__content").toggleClass("header-mobile-open")
    }), $(".mobile-app-menu-btn").click(function() {
        $(".hamburger", this).toggleClass("is-active"), $(".app-inner-layout").toggleClass("open-mobile-menu")
    });
    var e = function() {
        document.body.clientWidth < 1250 ? $(".app-container").addClass("closed-sidebar-mobile closed-sidebar") : $(".app-container").removeClass("closed-sidebar-mobile closed-sidebar")
    };
    $(window).on("resize", function() {
        e()
    }), e()

    $('button#limpar-form').on('click',function(e) {
        $(':input', 'form')
        .not(':button, :submit, :reset, :hidden')
        .val('');
    });

    $('body').on('click', function (e) {
        $('[data-toggle=popover]').each(function () {
            // hide any open popovers when the anywhere else in the body is clicked
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                $(this).popover('hide');
            }
        });
    });
});