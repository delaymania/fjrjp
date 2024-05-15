/**
 * jquery.fullImage.js
 *
 * Copyright (c) 2012 Toshihiko Nii(mellowdown.net)
 * Licensed under the MIT License:
 * http://www.opensource.org/licenses/mit-license.php
 */

(function(jQuery) {

	var windowResize = function(event) {
		var wrap;
		var options;
		if (event.data == null) {
			wrap = event.wrap;
			options = event.options;
		} else {
			wrap = event.data.wrap;
			options = event.data.options;
		}

		var windowWidth = jQuery(window).width();
		var windowHeight = jQuery(window).height();
		wrap.width(windowWidth).height(windowHeight);

		var ratioX =windowWidth / options.defaultWidth;
		var ratioY = windowHeight / options.defaultHeight;
		var fixRatio = Math.max(ratioX, ratioY);

		wrap.find("img").each(function() {
			var w = jQuery(this).width(); // これないとIE6で動かない。なんで？
			var newW = Math.ceil(fixRatio * options.defaultWidth);
			var newH = Math.ceil(fixRatio * options.defaultHeight);
			jQuery(this).width(newW).height(newH);

			if (options.centerPosition) {
				var dx = (newW > windowWidth) ? Math.ceil((newW - windowWidth) / 2) : 0;
				var dy = (newH > windowHeight) ? Math.ceil((newH - windowHeight) / 2) : 0;
				jQuery(this).css({"marginLeft": -dx, "marginTop": -dy});
			}
		});
	};

	var init = function(wrap, options) {
		jQuery("body").css({"overflow": "hidden"});
		wrap.css({"overflow": "hidden"});

		var param = {
			wrap: wrap,
			options: options
		};

		jQuery(window).bind(
			"resize",
			param,
			windowResize
		);
		windowResize(param);
	};

	jQuery.fn.FullImage = function(options) {
		this.each(function() {
			options = jQuery.extend({}, jQuery.fn.FullImage.defaults, options);
			init(jQuery(this), options);
		});
	};

	jQuery.fn.FullImage.defaults = {
		defaultWidth: 1300,
		defaultHeight: 900,
		centerPosition: true
	};

} )(jQuery);
