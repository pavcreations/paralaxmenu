/*
 *	Plugin Name: Paralax Menu
 *  Author: Pawel Gasiorowski
 *  Version: 1.0
 *
 */

(function($) {

    $.fn.paralaxmenu = function(options) {

        // Default options
        $.fn.paralaxmenu.defaults = {
            container 	: '',
            wrappers    : ['img']
        };

        options = $.extend($.fn.paralaxmenu.defaults, options);

        return this.each(function() {

            var $this = $(this);

            // Setting up the main menu
            $this.parent().append($this.clone());
            $this.wrapInner("<div class='proper'></div>");
            $this.parent().find("div:nth-child(2)").addClass('sub-brochure-menu-ontop').removeAttr('id');
            $this.parent().find("div:nth-child(2)").wrapInner("<div class='ontop'></div>");

            // For getting the absolute top margin for the scrolling
            menuMarginTop = parseInt($("div.sub-brochure-menu-ontop").offset().top - $(document).scrollTop());
            menuMarginLeft = parseInt($("div.sub-brochure-menu-ontop").offset().left);
            menuWidth = $("div.sub-brochure-menu-ontop").width() + 10;

            // Going through all wrappers and setting them up
            // Initial Setup
            for(var i=0;i<options.wrappers.length;i++) {

                // Initial setup
                var curWrapper = options.wrappers[i];
                var curWrapperType = $(curWrapper).prop('tagName');

                if(curWrapperType == 'IMG') {
                    jQuery(options.container).find(options.wrappers[i]).each(function() {
                        var curImg = jQuery(this);
                        curImg.wrap( "<div style='overflow:hidden !important;position:relative;' class='new-brochure'></div>" );
                        curImg.parent().append($this.clone());
                        curImg.siblings('div#' + $this.attr('id')).addClass('sub-brochure-menu-white').removeAttr('id');
                        curImg.siblings('div.sub-brochure-menu-white').css({width: menuWidth + "px", position: "absolute", top: "0", left:"0"});
                    });
                } else if(curWrapperType == 'DIV') {
                    jQuery(options.container).find(options.wrappers[i]).each(function() {
                        var curWrapper = jQuery(this);
                        curWrapper.css({overflow: 'hidden', position: 'relative'});
                        curWrapper.append($this.clone());
                        curWrapper.find('div#' + $this.attr('id')).addClass('sub-brochure-menu-white').removeAttr('id');
                        curWrapper.find('div.sub-brochure-menu-white').css({width: menuWidth + "px", position: "absolute", top: "0", left:"0"});
                    });
                }

            }

            function rePosMenu() {
                // Get container scroll position
                var scrollTop = jQuery(document).scrollTop();

                for(var i=0;i<options.wrappers.length;i++) {

                    // Initial setup
                    var curWrapper = options.wrappers[i];
                    var curWrapperType = $(curWrapper).prop('tagName');

                    if(curWrapperType == 'IMG') {
                        $(options.container).find(options.wrappers[i]).each(function() {
                            var topOff = jQuery(this).offset().top;
                            var leftOff = jQuery(this).offset().left;
                            var calculationTop = topOff - scrollTop;
                            jQuery(this).siblings('div.sub-brochure-menu-white').css({top: ((0 - calculationTop) + menuMarginTop) + "px", left: (0 - leftOff) + menuMarginLeft + "px"});
                        });
                    } else if(curWrapperType == 'DIV') {
                        $(options.container).find(options.wrappers[i]).each(function() {
                            var topOff = jQuery(this).offset().top;
                            var leftOff = jQuery(this).offset().left;
                            var calculationTop = topOff - scrollTop;
                            jQuery(this).find('div.sub-brochure-menu-white').css({top: ((0 - calculationTop) + menuMarginTop) + "px", left: (0 - leftOff) + menuMarginLeft + "px"});
                        });
                    }

                }
            }

            // Bind to on page load
            $(document).ready(function() {
                rePosMenu();
            });

            // Bind to scroll
            $(window).on('scroll', function() {
                rePosMenu();
            });

            // Bind to resize
            $(window).on('resize', function() {
                rePosMenu();
            });

        });

    }
})(jQuery);