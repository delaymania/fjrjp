/*
 * Cloud 9 Carousel 2.2.0
 *
 * Pseudo-3D carousel plugin for jQuery/Zepto focused on performance.
 *
 * Based on the original CloudCarousel by R. Cecco.
 *
 * See the demo and download the latest version:
 *   http://specious.github.io/cloud9carousel/
 *
 * Copyright (c) 2017 by Ildar Sagdejev ( http://specious.github.io )
 * Copyright (c) 2011 by R. Cecco ( http://www.professorcloud.com )
 *
 * MIT License
 *
 * Please retain this copyright header in all versions of the software
 *
 * Requires:
 *  - jQuery >= 1.3.0 or Zepto >= 1.1.1
 *
 * Optional (jQuery only):
 *  - Reflection support via reflection.js plugin by Christophe Beyls
 *     http://www.digitalia.be/software/reflectionjs-for-jquery
 *  - Mousewheel support via mousewheel plugin
 *     http://plugins.jquery.com/mousewheel/
 */

;(function($) {
  //
  // Detect CSS transform support
  //
  var transform = (function() {
    var vendors = ['webkit', 'moz', 'ms'];
    var style   = document.createElement( "div" ).style;
    var trans   = 'transform' in style ? 'transform' : undefined;

    for( var i = 0, count = vendors.length; i < count; i++ ) {
      var prop = vendors[i] + 'Transform';
      if( prop in style ) {
        trans = prop;
        break;
      }
    }

    return trans;
  })();

  var Item = function( element, options ) {
    element.item = this;
    this.element = element;

    if( element.tagName === 'IMG' ) {
      this.fullWidth = element.width;
      this.fullHeight = element.height;
    } else {
      element.style.display = "inline-block";
      this.fullWidth = element.offsetWidth;
      this.fullHeight = element.offsetHeight;
    }

    element.style.position = 'absolute';

    if( options.mirror && this.element.tagName === 'IMG' ) {
      // Wrap image in a div together with its generated reflection
      this.reflection = $(element).reflect( options.mirror ).next()[0];

      var $reflection = $(this.reflection);
      this.reflection.fullHeight = $reflection.height();
      $reflection.css( 'margin-top', options.mirror.gap + 'px' );
      $reflection.css( 'width', '100%' );
      element.style.width = "100%";

      // The item element now contains the image and reflection
      this.element = this.element.parentNode;
      this.element.item  = this;
      this.element.alt   = element.alt;
      this.element.title = element.title;
    }

    if( transform && options.transforms )
      this.element.style[transform + "Origin"] = "0 0";

    this.moveTo = function( x, y, scale ) {
      this.width = this.fullWidth * scale;
      this.height = this.fullHeight * scale;
      this.x = x;
      this.y = y;
      this.scale = scale;

      var style = this.element.style;
      style.zIndex = "" + (scale * 100) | 0;
      if (scale < 0.5) {
        style.opacity = scale * 2;
      } else {
        style.opacity = 1;
      }
      

      if( transform && options.transforms ) {
        style[transform] = "translate(" + x + "px, " + y + "px) scale(" + scale + ")";
      } else {
        // Manually resize the gap between the image and its reflection
        if( options.mirror && this.element.tagName === 'IMG' )
          this.reflection.style.marginTop = (options.mirror.gap * scale) + "px";

        style.width = this.width + "px";
        style.left = x + "px";
        style.top = y + "px";
        
      }
    }
  }

  var time = !window.performance || !window.performance.now ?
    function() { return +new Date() } :
    function() { return performance.now() };

  //
  // Detect requestAnimationFrame() support
  //
  // Support legacy browsers:
  //   http://www.paulirish.com/2011/requestanimationframe-for-smart-animating/
  //
  var cancelFrame = window.cancelAnimationFrame || window.cancelRequestAnimationFrame;
  var requestFrame = window.requestAnimationFrame;

  (function() {
    var vendors = ['webkit', 'moz', 'ms'];

    for( var i = 0, count = vendors.length; i < count && !cancelFrame; i++ ) {
      cancelFrame = window[vendors[i]+'CancelAnimationFrame'] || window[vendors[i]+'CancelRequestAnimationFrame'];
      requestFrame = requestFrame && window[vendors[i]+'RequestAnimationFrame'];
    }
  }());

  var Carousel = function( element, options ) {
    var self = this;
    var $container = $(element);
    this.items = [];
    this.xOrigin = (options.xOrigin === null) ? $container.width()  * 0.5 : options.xOrigin;
    this.yOrigin = (options.yOrigin === null) ? $container.height() * 0.1 : options.yOrigin;
    this.xRadius = (options.xRadius === null) ? 1920  / 2.3 : options.xRadius;
    this.yRadius = (options.yRadius === null) ? $container.height() / 6 : options.yRadius;
    this.zoomScale = ($container.width() / 1600) * 0.35;
    this.farScale = options.farScale;
    this.rotation = this.destRotation = Math.PI/2; // start with the first item positioned in front
    this.speed = options.speed;
    this.smooth = options.smooth;
    this.fps = options.fps;
    this.timer = 0;
    this.autoPlayAmount = options.autoPlay;
    this.autoPlayDelay = options.autoPlayDelay;
    this.autoPlayTimer = 0;
    this.frontItemClass = options.frontItemClass;
    this.onLoaded = options.onLoaded;
    this.onRendered = options.onRendered;
    this.onAnimationFinished = options.onAnimationFinished;
    
    // 自動スライド用の追加オプション
    this.slideSpeed = options.slideSpeed;
    this.autoSlide = options.autoSlide;
    this.autoSlideDelay = options.autoSlideDelay;
    
    this.itemOptions = {
      transforms: options.transforms
    }

    if( options.mirror ) {
      this.itemOptions.mirror = $.extend( { gap: 2 }, options.mirror );
    }

    $container.css( { position: 'relative', overflow: 'hidden' } );

    // Rotation:
    //  *      0 : right
    //  *   Pi/2 : front
    //  *   Pi   : left
    //  * 3 Pi/2 : back
    this.renderItem = function( itemIndex, rotation ) {
      var item = this.items[itemIndex];
      var sin = Math.sin(rotation);
      var farScale = this.farScale;
      var zoomScale = this.zoomScale;
      var scale = farScale + ((1 - farScale) * (sin + 1) * zoomScale);

      item.moveTo(
        this.xOrigin + (scale * ((Math.cos(rotation) * this.xRadius) - (item.fullWidth * 0.5))),
        this.yOrigin + (scale * sin * this.yRadius),
        scale
      );

      return item;
    }

    this.render = function() {
      var count = this.items.length;
      var spacing = 2 * Math.PI / count;
      var radians = this.rotation;
      var nearest = this.nearestIndex();

      for( var i = 0; i < count; i++ ) {
        var item = this.renderItem( i, radians );

        if( i === nearest )
          $(item.element).addClass( this.frontItemClass );
        else
          $(item.element).removeClass( this.frontItemClass );

        radians += spacing;
      }

      if( typeof this.onRendered === 'function' )
        this.onRendered( this );
    }

    this.playFrame = function() {
      var rem = self.destRotation - self.rotation;
      var now = time();
      var dt = (now - self.lastTime) * 0.002;
      self.lastTime = now;

      if( Math.abs(rem) < 0.003 ) {
        self.rotation = self.destRotation;
        self.pause();

        if( typeof self.onAnimationFinished === 'function' )
          self.onAnimationFinished();
      } else {
        // Asymptotically approach the destination
        self.rotation = self.destRotation - rem / (1 + (self.speed * dt));
        self.scheduleNextFrame();
      }

      self.render();
    }

    // this.slideFrame = function() {
    //   var rem = self.destRotation - self.rotation;
    //   var now = time();
    //   var dt = (now - self.lastTime) * 0.002;
    //   self.lastTime = now;

    //   if( Math.abs(rem) < 0.003 ) {
    //     self.rotation = self.destRotation;
    //     self.pause();

    //     if( typeof self.onAnimationFinished === 'function' )
    //       self.onAnimationFinished();
    //   } else {
    //     // Asymptotically approach the destination
    //     self.rotation = self.destRotation - rem / (1 + (self.slideSpeed * dt));
    //     self.scheduleNextSlideFrame();
    //   }

    //   self.render();
    // }

    this.scheduleNextFrame = function() {
      this.lastTime = time();

      this.timer = this.smooth && cancelFrame ?
        requestFrame( self.playFrame ) :
        setTimeout( self.playFrame, 1000 / this.fps );
    }

    // this.scheduleNextSlideFrame = function() {
    //   this.lastTime = time();

    //   this.timer = this.smooth && cancelFrame ?
    //     requestFrame( self.slideFrame ) :
    //     setTimeout( self.slideFrame, 1000 / this.fps );
    // }

    this.itemsRotated = function() {
      return this.items.length * ((Math.PI/2) - this.rotation) / (2*Math.PI);
    }

    this.floatIndex = function() {
      var count = this.items.length;
      var floatIndex = this.itemsRotated() % count;

      // Make sure float-index is positive
      return (floatIndex < 0) ? floatIndex + count : floatIndex;
    }

    this.nearestIndex = function() {
      return Math.round( this.floatIndex() ) % this.items.length;
    }

    this.nearestItem = function() {
      return this.items[this.nearestIndex()];
    }

    this.play = function() {
      if( this.timer === 0 )
        this.scheduleNextFrame();
    }

    // this.slowPlay = function() {
    //   if( this.timer === 0 )
    //     this.scheduleNextSlideFrame();
    // }

    this.pause = function() {
      this.smooth && cancelFrame ? cancelFrame( this.timer ) : clearTimeout( this.timer );
      this.timer = 0;
    }

    //
    // Spin the carousel by (+-) count items
    //
    this.go = function( count ) {
      this.destRotation += (2 * Math.PI / this.items.length) * count;
      this.play();
    }


    // this.slowGo = function (count) {
    //   this.destRotation += (2 * Math.PI / this.items.length) * count;

    //   // this.play()
    //   this.slowPlay();
    // }

    this.goTo = function( index ) {
      var count = this.items.length;

      // Find the shortest way to rotate item to front
      var diff = index - (this.floatIndex() % count);

      if( 2 * Math.abs(diff) > count )
        diff -= (diff > 0) ? count : -count;

      // Halt any rotation already in progress
      this.destRotation = this.rotation;

      // Spin the opposite way to bring item to front
      this.go(-diff);

      // 改造：テキスト変更
      $('.current').text(index + 1);
      
      // 改造：カルーセルバー変更
      $('li.slick-dots-arc-item').removeClass("active");
      $($('li.slick-dots-arc-item')[index]).addClass("active");

      // Return rotational distance (in items) to the target
      return diff;
    }

    this.deactivate = function() {
      this.pause();
      clearInterval( this.autoPlayTimer );
      if( options.buttonLeft ) options.buttonLeft.off( 'click' );
      if( options.buttonRight ) options.buttonRight.off( 'click' );
      $container.off( '.cloud9' );
    }

    this.autoPlay = function() {
      this.autoPlayTimer = setInterval(
        function() { self.go( self.autoPlayAmount ) },
        this.autoPlayDelay
      );
    }

    this.enableAutoPlay = function() {
      // Stop auto-play on mouse over
      $container.on('mouseover.cloud9', function () {
        console.log("clear interval")
        clearInterval( self.autoPlayTimer );
      } );

      // Resume auto-play when mouse leaves the container
      $container.on( 'mouseout.cloud9', function() {
        self.autoPlay();
      } );

      this.autoPlay();
    }

    this.bindControls = function() {
      if( options.buttonLeft ) {
        options.buttonLeft.on( 'click', function() {
          let index = $("#cloud9-carousel").data("carousel").nearestIndex();
          $('#cloud9-carousel').find('.cloud9-item').removeClass('active');
          $('#cloud9-carousel').find('.cloud9-item').eq(index - 1).addClass('active');
          
          let index_text = $('#cloud9-carousel').find('.cloud9-item.active').data('index');
          $('.current').text(index_text);
          self.go(1);
          // $('li.slick-dots-arc-item').removeClass("active");
          // $($('li.slick-dots-arc-item')[index_text-1]).addClass("active");
          return false;
        } );
      }

      if( options.buttonRight ) {
        options.buttonRight.on( 'click', function() {
          var index = $("#cloud9-carousel").data("carousel").nearestIndex(),
              len = $("#cloud9-carousel .cloud9-item").length;
          if(index == len - 1 ){
            index = 0;
          }else{
            index++
          }
          $('#cloud9-carousel').find('.cloud9-item').removeClass('active');
          $('#cloud9-carousel').find('.cloud9-item').eq(index).addClass('active');

          let index_text = $('#cloud9-carousel').find('.cloud9-item.active').data('index');
          $('.current').text(index_text);
          self.go(-1);

          // 改造：カルーセルバー変更
          $('li.slick-dots-arc-item').removeClass("active");
          $($('li.slick-dots-arc-item')[index_text-1]).addClass("active");
          return false;
        } );
      }

      let position;
      let initial_position;
      let next_start_position;
      let diff;

      if( options.mouseWheel ) {
        $container.on( 'mousewheel.cloud9', function( event, delta ) {
          self.go( (delta > 0) ? 1 : -1 );
          return false;
        } );
      }
      
      $container.on( 'mousedown', function( event ) {
        if (!$(this).hasClass('mouseDown')){
          $(this).addClass('mouseDown')
          console.log('mousedown');
          initial_position = {
            'x': event.clientX,
            'y': event.clientY,
          }
          next_start_position = initial_position;
          console.log(initial_position);
        }
        return false;
      });
      $container.on('mousemove', function (event) {
        if ($(this).hasClass('mouseDown')) {
          if ($(this).hasClass('mouseDragging')) {
            $(this).addClass('mouseDragging');
          }
          console.log('mousedragging');
          position = {
            'x': event.clientX,
            'y': event.clientY,
          }
          diff = {
            'x': position['x'] - next_start_position['x'],
            'y': position['y'] - next_start_position['y'],
          }
          self.go((-1) * diff['x'] / 200);
          next_start_position = position;
          let index = Math.round(self.floatIndex()) + 1;
          if (index > items.length) {
            index = 1;
          }
          $('.current').text(index);
          $('li.slick-dots-arc-item').removeClass("active");
          $($('li.slick-dots-arc-item')[index-1]).addClass("active");
          return false;
        }
      });
      $container.on('mouseup', function (event) {
        $(this).removeClass('mouseDown');
        $(this).removeClass('mouseDragging')
        let index = Math.round(self.floatIndex()) + 1;
        if (index > items.length) {
          index = 1;
        }
        $('.current').text(index);
        $('li.slick-dots-arc-item').removeClass("active");
        $($('li.slick-dots-arc-item')[index - 1]).addClass("active");
        self.goTo(index-1);
        return false;
      });
      $container.mouseleave(function (event) {
        if ($(this).hasClass('mouseDragging') || $(this).hasClass('mouseDown') ){
          $(this).removeClass('mouseDown');
          $(this).removeClass('mouseDragging')
          let index = Math.round(self.floatIndex()) + 1;
          if (index > items.length) {
            index = 1;
          }
          $('.current').text(index);
          $('li.slick-dots-arc-item').removeClass("active");
          $($('li.slick-dots-arc-item')[index - 1]).addClass("active");
          self.goTo(index-1);
        }
        console.log('mouseleave');
        return false;
      });

      if( options.bringToFront ) {
        $container.on( 'click.cloud9', function( event ) {
          var hits = $(event.target).closest( '.' + options.itemClass );

          if( hits.length !== 0 ) {
            clearInterval( self.autoPlayTimer );
            var diff = self.goTo( self.items.indexOf( hits[0].item ) );

            // Suppress default browser action if the item isn't roughly in front
            if( Math.abs(diff) > 0.5 )
              event.preventDefault();
          }
        } );
      }

      $('li.slick-dots-arc-item').on('click', function () {
        let index = $(this).index('li.slick-dots-arc-item');
        self.goTo(index);
      })



      if(window.IntersectionObserver){// IntersectionObserver が未実装のブラウザ用のガード
        let i = 0;
        const observer = new IntersectionObserver((entries) => {
          // entriesは監視対象すべてが入っているリストです
          // @see https://developer.mozilla.org/ja/docs/Web/API/IntersectionObserverEntry  
          for(const e of entries) {
            // isIntersecting プロパティに内、外の情報が入っています
            i++;
            if (e.isIntersecting) {
              this.autoPlay();
              console.log(i + '回発火 現在:IN');
            }else{
              clearInterval(self.autoPlayTimer);
              console.log(i + '回発火 現在:OUT');
            }
          }
        });
        // オブザーバインスタンスのobserve メソッドに監視対象要素を引数として渡すことで監視がされるようになります
        observer.observe(
          document.getElementById('cloud9-carousel')
        )
      }
    }

    var items = $container.find( '.' + options.itemClass );

    this.finishInit = function() {
      //
      // Wait until all images have completely loaded
      //
      for( var i = 0; i < items.length; i++ ) {
        var item = items[i];
        if( (item.tagName === 'IMG') &&
            ((item.width === undefined) || ((item.complete !== undefined) && !item.complete)) )
          return;
      }

      clearInterval( this.initTimer );

      // Init items
      for( i = 0; i < items.length; i++ )
        this.items.push( new Item( items[i], this.itemOptions ) );

      // Disable click-dragging of items
      $container.on( 'mousedown onselectstart', function() { return false } );

      if( this.autoPlayAmount !== 0 ) this.enableAutoPlay();
      this.bindControls();
      this.render();

      if( typeof this.onLoaded === 'function' )
        this.onLoaded( this );
    };

    this.initTimer = setInterval( function() { self.finishInit() }, 50 );
  }

  //
  // The jQuery plugin
  //
  $.fn.Cloud9Carousel = function( options ) {
    return this.each( function() {
      /* For full list of options see the README */
      options = $.extend( {
        xOrigin: null,        // null: calculated automatically
        yOrigin: null,
        xRadius: null,
        yRadius: null,
        farScale: 0.5,        // scale of the farthest item
        transforms: true,     // enable CSS transforms
        smooth: true,         // enable smooth animation via requestAnimationFrame()
        fps: 30,              // fixed frames per second (if smooth animation is off)
        speed: 5,             // positive number
        autoPlay: 0,          // [ 0: off | number of items (integer recommended, positive is clockwise) ]
        // autoPlayDelay: 10000,
        bringToFront: true,
        itemClass: 'cloud9-item',
        frontItemClass: null,
        handle: 'carousel',
        mouseWheel: false,

        // 自動スライドオプション
        // slideSpeed: 0,
      }, options );

      $(this).data( options.handle, new Carousel( this, options ) );
    } );
  }
})( window.jQuery || window.Zepto );


jQuery(function() {
  // $('#cloud9-carousel_sp').addClass('is_slick').slick({
  //     dots: true,
  //     arrows:false,
  //     autoplay:false,
  //     slidesToShow: 1,
  //     slidesToScroll: 1,
  //     infinite: false,
  //     centerMode: true,
  //     variableWidth: true,
  //   });
  jQuery("#cloud9-carousel").Cloud9Carousel( {
      xOrigin: null,       
      yOrigin: 75,
      xRadius: null,
      yRadius: 150,
      farScale: 0.2, 
      itemClass: "cloud9-item",
      buttonLeft: jQuery(".cloud9-nav.left"),
      buttonRight: jQuery(".cloud9-nav.right"),
      bringToFront: true,
      autoPlay: 0,
      autoPlayDelay: 0,
      // autoPlayDelay: perspec3d_carousel_options.sliderDelay,
      onLoaded: function() {
        {
          var i = 1;
          $('#cloud9-carousel').find('.cloud9-item').each(function(){
            $(this).attr('data-index',i);
            i++;
          });
          $('#cloud9-carousel').find('.cloud9-item').eq($("#cloud9-carousel").data("carousel").nearestIndex()).addClass('active');
          $('.current').text($('#cloud9-carousel').find('.cloud9-item.active').data('index'));
          $('.total').text($("#cloud9-carousel .cloud9-item").length);
          if($(window).width() < 1320){
            $("#cloud9-carousel").width('1320px');
          }else{
            $("#cloud9-carousel").width($(window).width());
          }
        }
      },
    } );
  


  //
  // Simulate physical button click effect
  //
  jQuery('.nav').on('click', function( e ) {
    var b = jQuery(e.target).addClass( 'down' )
    setTimeout( function() { b.removeClass( 'down' ) }, 80 )
  } );

  jQuery(document).on('keydown', function( e ) {
    //
    // More codes: http://www.javascripter.net/faq/keycodes.htm
    //
    switch( e.keyCode ) {
      /* left arrow */
      case 37:
        jQuery('.nav.left').click()
        break

      /* right arrow */
      case 39:
        jQuery('.nav.right').click()
    }
  });

  // カルーセルのドラッグを有効化する
  jQuery.prototype.mousedragscrollable = function () {
    let target;
    $(this).each(function (i, e) {
      $(e).mousedown(function (event) {
        event.preventDefault();
        target = $(e);
        $(e).data({
          down: true,
          move: false,
          x: event.clientX,
          y: event.clientY,
          scrollleft: $(e).scrollLeft(),
          scrolltop: $(e).scrollTop(),
        });
        return false;
      });
      $(e).click(function (event) {
        if ($(e).data("move")) {
          return false;
        }
      });
    });
    $(document)
      .mousemove(function (event) {
        if ($(target).data("down")) {
          event.preventDefault();
          let move_x = $(target).data("x") - event.clientX;
          let move_y = $(target).data("y") - event.clientY;
          if (move_x !== 0 || move_y !== 0) {
            $(target).data("move", true);
          } else {
            return;
          }
          $(target).scrollLeft($(target).data("scrollleft") + move_x);
          $(target).scrollTop($(target).data("scrolltop") + move_y);
          return false;
        }
      })
      .mouseup(function (event) {
        $(target).data("down", false);
        return false;
      });
  };
});

