
 var MOBILE_WIDTH = 640;

// START "Variables, Functions" NAVIGATION

var Nav = (function(){
    var s,
    Module = {
        settings: {
            htmlTag: $("html"),
            header: $(".header"),
            headerStickyClass: "header--sticky",
            menuLink: $(".menu-link"),
            selectedMenuItem: $(".selected-menu-item"),
            activeClass: "menu-open",
            mainNav: $(".main-nav"),
            mainNavAnimateClass: "main-nav-animate",
            navToggle: $(".menu-toggle"),
            navWrapper: $(".menu-overlay"),
            ns: ".nav",
            LogoContainer: $(".logo-container"),
            LogoMenu: "show-logo-in-menu"
        },
 
        init: function(){
            s = this.settings;
            this.bindUIActions();
            this.scrollHandler();
            s.header.addClass("header--visible");
        },

        bindUIActions: function(){
            s.menuLink.click(function(event){
                Module.menuClickHandler(event);
            });

            s.selectedMenuItem.click(function(event){
                Module.menuClickHandler(event);
            });

            $(document).on("scroll", function(event) {
        Module.scrollHandler();
      });

            $(document).on("touchmove", function(event) {
                Module.scrollHandler();
            });

            $(window).on('resize',function(event) {
                Module.resizeHandler();
            });
        },

        menuClickHandler: function(event){

        // START Local Storage
        localStorage.setItem('learnMenu', 'learned');
        checkMenuPulseState();
        // END Local Storage

            event.preventDefault();
            if(s.htmlTag.hasClass(s.activeClass)){
                Module.close();
            }else{                    
                Module.open();
            }
        },

        scrollHandler:function(event){
            if($(window).scrollTop() <= 20){
                s.header.removeClass(s.headerStickyClass);
            }else{
                s.header.addClass(s.headerStickyClass);
            }
        },

        clickHandler:function(event){
            var inTarget = false;
            if($.contains(s.navWrapper[0], event.target ) || s.navWrapper[0] == event.target || 
                $.contains(s.header[0], event.target ) || s.header[0] == event.target){
                inTarget = true;
            }
            if(!inTarget){
                Module.close();
            }
        },

        open:function(){
            s.htmlTag.addClass(s.activeClass);
            setTimeout(function(){
                s.mainNav.addClass(s.mainNavAnimateClass);
                s.navWrapper.addClass(s.activeClass);
                s.LogoContainer.addClass(s.LogoMenu);
                s.navToggle.addClass(s.activeClass);
                $(document).on("click"+s.ns,Module.clickHandler);
            },10);    
        },

        close:function(){
            s.htmlTag.removeClass(s.activeClass);
            s.navWrapper.removeClass(s.activeClass);
            s.navToggle.removeClass(s.activeClass);
            s.LogoContainer.removeClass(s.LogoMenu);
            s.mainNav.removeClass(s.mainNavAnimateClass);
            $(document).off("click"+s.ns);
        },

        resizeHandler: function(){
             if($(window).width() > MOBILE_WIDTH ){
            //     s.htmlTag.removeClass(s.activeClass);
                s.menuLink.addClass(s.navMenuClass);
             }
        }
    };

    return Module;
}());


// END "Variables, Functions" NAVIGATION


var Helpers = (function(){
    var s,
    Module = {
        settings:{

        },

        init: function(){
            s = this.settings;
        },

        resizeVideoEle: function(videoEle){
            var newW = $(window).width();
            var newH = 360/640*newW;
            var newL = 0;
            var newT = $(window).height()/2-newH/2;
            if(newH<$(window).height()) {
                newH = $(window).height();
                newW = 640/360*newH;
                newL = $(window).width()/2-newW/2;
                newT = 0;
            }
            videoEle.css(
                {
                    'width': newW+'px',
                    'height': newH+'px',
                    'left': newL+'px',
                    'top': newT+'px'
                }
            ).addClass('is-initialized');
        },

        getPageTitle: function(){
            return $(document).find("title").text().split(" | ")[0];
        },


        isInTheScreen: function( $ct, $ele, optionOffset ) {
            var is_ct_window  = $ct[0] === window,
                ct_offset  = (is_ct_window ? { top:0, left:0 } : $ct.offset()),
                ct_top     = ct_offset.top + ( is_ct_window ? $ct.scrollTop() : 0),
                ct_left    = ct_offset.left + ( is_ct_window ? $ct.scrollLeft() : 0),
                ct_right   = ct_left + $ct.width(),
                ct_bottom  = ct_top + $ct.height(),
                ele_offset = $ele.offset(),
                ele_width = $ele.width(),
                ele_height = $ele.height();

            return (ct_top - optionOffset) <= (ele_offset.top + ele_height) &&
                (ct_bottom + optionOffset) >= ele_offset.top &&
                    (ct_left - optionOffset)<= (ele_offset.left + ele_width) &&
                        (ct_right + optionOffset) >= ele_offset.left;
        }
    };
    return Module;
}());


// START "Variables, Functions" VIDEOFILL

var VideoFill = (function(){
    var s,
    Module = {
        settings: {
            videoContainer: "",
            videoID: "",
            videoSrc: "",
            html5Videos: $(".video-element_html5"),
            vimeoVideos: $(".video-element_vimeo"),
            videoContainers: []
        },

        init: function(options){
            s = this.settings;
            for(var prop in options) {
                if(options.hasOwnProperty(prop)){
                    s[prop] = options[prop];
                }
            }
            this.bindUIActions();
            this.initVariables();
            setTimeout(function(){
                Module.loadVimeoVideos();
                Module.handleHTML5Videos();
            },500);
        },    

        initVariables: function(){
            s.html5Videos.each(function(){
                s.videoContainers.push($(this).parent().get(0));
            });
        },

        bindUIActions: function(){
            $(document).on("scroll", function(event) {
                Module.handleHTML5Videos();
            });
            $(window).on('resize',function(event) {
                Module.handleHTML5Videos();
            });            
        },

        handleHTML5Videos: function() {
            $.each(s.videoContainers,function(index){
                if(Helpers.isInTheScreen($(window),$(this),200)){
                    if(Modernizr.video){
                        Module.loadHTML5Video($(this),$(s.html5Videos[index]));    
                    }else{
                        Module.setFallbackImg($(this),$(s.html5Videos[index]));
                    }
                }else{
                    Module.unloadHTML5Video($(this),$(s.html5Videos[index]));
                }
            });
        },

        loadHTML5Video: function(videoContainer,ele){
            if(!videoContainer.hasClass("video-loaded")){
                var videoURL = "";
                if(Modernizr.video && Modernizr.video.h264) {
                    videoURL = ele.attr("data-video")+".mp4";
                } else if(Modernizr.video && Modernizr.video.webm) {
                    videoURL = ele.attr("data-video")+".webm";
                } else if(Modernizr.video && Modernizr.video.ogg) {
                    videoURL = ele.attr("data-video")+".ogv";
                }    

                var posterImg = ele.attr("data-video")+".jpg";
                videoContainer.addClass("video-loaded").html("<div class='video-wrapper'><video data-autoplay='true' poster='"+posterImg+"' loop='true' src='"+videoURL+"' preload='auto' class='' /></div>");
                if(ele.attr("data-autoplay") == "false" || Modernizr.touch){
                    videoContainer.find("video").attr("data-autoplay","false");
                }
                if(Modernizr.touch == true || ele.attr("data-controls") == "true"){
                    videoContainer.find("video").attr("controls",true);
                }
                if (videoContainer.find("video").attr("data-autoplay") == "true") {
                    videoContainer.find("video").get(0).play();
                }
            }else if(videoContainer.find("video").get(0).paused){
                if (videoContainer.find("video").attr("data-autoplay") == "true") {
                    videoContainer.find("video").get(0).play();
                }
            }
        },

        setFallbackImg: function(videoContainer,ele){
            videoContainer.addClass("detail-img-fallback").html("<img src='"+ele.attr("data-fallback-img")+"' alt='' />");
        },

        unloadHTML5Video: function(videoContainer,ele){
            if(videoContainer.hasClass("video-loaded") && !videoContainer.find("video").get(0).paused){
                videoContainer.find("video").get(0).pause();
            }
        },

        loadVimeoVideos: function(){
            s.vimeoVideos.each(function(){
                s.videoContainer = $(this).parent();
                console.log(s.videoContainer.attr("class"));
                console.log($(this).attr("data-src"));
                $.getJSON("http://www.vimeo.com/api/oembed.json?url=http://vimeo.com/"+encodeURIComponent($(this).attr("data-video")) + "&api=1&callback=?", function(e) {
                    s.videoContainer.html(e.html);
                });
            });            
        },

     };
     return Module;
}());

// END "Variables, Functions" VIDEOFILL


// START "Variables, Functions" PICTUREFILL

var PictureFill = (function(){
    var s,
    Module = {
        settings: {
            matchedImageCounter: 0,
            isImagesChanged: false,
            breakpoints: [["small","640px"]],
            currentBreakpoint: "",
            detailImgContainer: $(".picturefill-img"),
            backgroundImages: [],
            matchedImageCounter: 0,
            isImagesChanged: false
        },

        init: function(options){
            s = this.settings;
            for(var prop in options) {
                if(options.hasOwnProperty(prop)){
                    s[prop] = options[prop];
                }
            }

            s.detailImgContainer.each(function(){
                s.backgroundImages.push(JSON.parse($(this).attr("data-images")));
            });
            this.bindUIActions();
            this.getCurrentBreakPoint();
            this.pictureFillAsImage();
        },

        getCurrentBreakPoint: function(){
            var newBreakpoint = "large";
            for(var i = 0; i < s.breakpoints.length; i++){
                if (window.matchMedia && window.matchMedia("(max-width: " + s.breakpoints[i][1] + ")").matches) {
                  newBreakpoint = s.breakpoints[i][0];
                }
            }
            if(newBreakpoint !== s.currentBreakpoint){
                s.currentBreakpoint = newBreakpoint;
                Module.loadImage();
            }
        },

        pictureFillAsImage: function(){
            var ps = window.document.getElementsByTagName( "span" );
            s.isImagesChanged = false;
            // Loop the pictures
            for( var i = 0, il = ps.length; i < il; i++ ){
                if( ps[ i ].getAttribute( "data-picture" ) !== null ){

                    var sources = ps[ i ].getElementsByTagName( "span" ),
                        matches = [];

                    // See if which sources match
                    for( var j = 0, jl = sources.length; j < jl; j++ ){
                        var media = sources[ j ].getAttribute( "data-media" );
                        // if there's no media specified, OR w.matchMedia is supported 
                        if( !media || ( window.matchMedia && window.matchMedia( media ).matches ) ){
                            matches.push( sources[ j ] );
                        }
                    }

                    // Find any existing img element in the picture element
                    var picImg = ps[ i ].getElementsByTagName( "img" )[ 0 ];

                    if( matches.length ){
                        var matchedEl = matches.pop();
                        if( !picImg || picImg.parentNode.nodeName === "NOSCRIPT" ){
                            picImg = window.document.createElement( "img" );
                            picImg.alt = ps[ i ].getAttribute( "data-alt" );
                        }
                        else if( matchedEl === picImg.parentNode ){
                            // Skip further actions if the correct image is already in place
                            continue;
                        }
                        s.isImagesChanged = true;
                        picImg.src =  matchedEl.getAttribute( "data-src" );
                        picImg.id = "picturefill-img-"+s.matchedImageCounter;
                        matchedEl.appendChild( picImg );
                        picImg.removeAttribute("width");
                        picImg.removeAttribute("height");
                    }
                    else if( picImg ){
                        picImg.parentNode.removeChild( picImg );
                    }
                    s.matchedImageCounter++;    
                }
            }
        },

        loadImage: function(){
            s.detailImgContainer.each(function(i){                
                var $img = $(this);
                $img.get(0).style.backgroundImage = "url(" + s.backgroundImages[i][s.currentBreakpoint]+")";
            
                setTimeout(function() {
                    $img.addClass('is-image-loaded');
                }, 0);
            })
        },


        bindUIActions: function(){
            $(window).on('resize',function(event) {
                Module.getCurrentBreakPoint();
                Module.pictureFillAsImage();
            });
        }
    };

    return Module;
}());

// END "Variables, Functions" PICTUREFILL

// START "Variables, Functions" DETAIL

var Detail = (function(){
    var s,
    Module = {
        settings: {
            workContainer: $(".detail-content--work"),
            headerContainer: $(".detail-header--work"),
            projectYear: $(".detail-content__header__year"),
            backgroundProportion: 2.7,
            breakPoint: 960,
            backgroundTopPos:0,
            newHeight:0,
            workContainerMarginTop:0,
            hasVideo: true,
            videoEle: $(".video-container #vid"),
            headerArrow: $(".detail-header__arrow"),
        },

        init: function(){
            s = this.settings;
            this.bindUIActions();
            if(s.headerContainer.length>0){
                this.resizeHandler();
            }

            if(!Modernizr.video || Modernizr.touch 
                || $(".picturefill").length > 0 || s.videoEle.length === 0){
                s.hasVideo = false;
                PictureFill.init();
            }

            if(s.hasVideo){
                Module.resizeHandler();
            }

            $('.js-lazy').jail({
                offset: '200'
            });
            
        },

        bindUIActions: function(){
            $(window).on('resize',function(event) {
                Module.resizeHandler();
            });
            s.headerArrow.on('click',function(event){
                event.preventDefault();
                Module.scrollToContent();
            });                
        },

        scrollToContent: function(){
            $("html,body").animate({scrollTop: window.innerHeight}, 400, "swing")
        },        

        resizeHandler: function(){
            if(s.hasVideo){
                Helpers.resizeVideoEle(s.videoEle);
            }
        }
    };
    return Module;
}());

// END "Variables, Functions" DETAIL


// START Viewport Reveal
var ViewportReveal = (function() {
    var s,
    Module = {
        settings:{
        },

        init : function(){
            s = this.settings;

            var options = {
                rootMargin: '0px',
                threshold: 0.10 // how much should be visible until class is added. between 0-1
            };

            var callback = function(entries, observer) { 

                for (var i = 0; i < entries.length; i++) {
                    (function() {
                        var entry = entries[i];

                        setTimeout(function() {
                            entry.target.classList.add('is-visible'); // Class will be added to trigger CSS Animation
                        }, i * 200);  // Delay for next transition in Miliseconds
                    }());
                }
            };

            observer = new IntersectionObserver(callback, options);
    
            var $elements = $('.js-vp_reveal');

            Module.observe($elements);
        },

        observe : function($elements) {
            for (var i = 0, len = $elements.length; i < len; i++) {
                observer.observe($elements[i]);
            }
        }
    };
    return Module;
}());

// END show on scroll

var Visibility = (function(){
    function isVisible(element){
        var t          = element,
            vpWidth    = window.innerWidth,
            vpHeight   = window.innerHeight,
            direction  = 'vertical',
            partial    = true;

        var rec  = t.getBoundingClientRect(),
        tViz     = rec.top    >= 0 && rec.top    <  vpHeight,
        bViz     = rec.bottom >  0 && rec.bottom <= vpHeight,
        lViz     = rec.left   >= 0 && rec.left   <  vpWidth,
        rViz     = rec.right  >  0 && rec.right  <= vpWidth,
        vVisible = partial ? tViz || bViz : tViz && bViz,
        hVisible = partial ? lViz || rViz : lViz && rViz;

        if (direction === 'both')
            return vVisible && hVisible;
        else if (direction === 'vertical')
            return vVisible;
        else if (direction === 'horizontal')
            return hVisible;
    }

    function isScrollVisible(element, margin){
        if (!margin) {
            margin = 0;
        }

        var t          = element,
            vpHeight   = window.innerHeight,
            minY = - margin,
            maxY = vpHeight + margin;

        var rec  = t.getBoundingClientRect(),
            partiallyVisible     = rec.bottom    > minY && rec.top    <  maxY,
            vVisible = partiallyVisible;

        return vVisible;
    }

    return {
        isVisible: isVisible,
        isScrollVisible: isScrollVisible
    };
}());

// START Load More on Scroll
var LoadMore = (function() {
    var s,
    Module = {
        settings: {
            $el: $('.js-tumblr--loadMore'),
            $win: $(window),
            autoload: true
        },
        init: function() {
            var self = this;

            s = $.extend({}, this.settings);

            // let's wait a little to give JS some time for layouting and things like that
            this.autoloadTimeout = setTimeout(function() {
            this._handleScroll = this.handleScroll.bind(this);
        
            document.addEventListener('scroll', this._handleScroll, true);
                this._handleScroll();
            }.bind(this), 2000);
        },
        
        handleScroll: function(event){
            if (!this.isLoading && Visibility.isScrollVisible(s.$el.get(0), s.$win.height())) {
                this.load();
            }
        },

        load: function(){
            var self = this;

            this.isLoading = true;
            $('.js-tumblr--loadMore').trigger('click');


            setTimeout(function() {
                self.isLoading = false;
            }, 1000);
        }
    }

    return Module;
}());

// END Load More on Scroll

// START GetTumblr (merdar)

var GetTumblr = (function(){
    var s,
    Module = {
        settings: {
        },
        init : function() {
            Module.loadTumblr('https://michelluarasi.tumblr.com/api/read/json');
        
            $('.js-tumblr--loadMore').on('click', function(e) {
              e.preventDefault();
              var $target = $(e.currentTarget);
              
              var href = $target.attr('href');
              var start = $target.data('start');
              var endpoint = href + "?start=" + start;
              $target.data('start', start + $target.data('num'));
              
              Module.loadTumblr(endpoint);
            });
        },

        loadTumblr : function(url) {
          var $list = $('.js-tumblr--list');

          $.ajax({
            type: 'GET',
            url: url,
            async: true,
            contentType: 'application/json',
            dataType: 'jsonp',
            success: function(json) {
              var tumblr = json.posts;
              var $temp = $('<div>');

              for (var i = 0; i < tumblr.length; i++) {
                var $img = $('<img class="reverie-img js-vp_reveal js-slide_up" alt="">');
                
                $img.attr('src', tumblr[i]['photo-url-1280']);
                $temp.append($img);
              }
              
              $list.append($temp.html());

              setTimeout(function() {
                ViewportReveal.observe($list.find('.js-vp_reveal:not(.is-visible)'));
              }, 30);
            },
            error: function(e) {
              $('.js-tumblr--loadMore').remove();
            }
          });
        }
    }

    return Module;
}());

// END Get Tumblr (merdar)



// START Fade out Elements (klasev)

$('.js-fade_in.is-visible').each(function(index) {
    var el = this;
    setTimeout(function() {$(el).removeClass('is-visible').addClass('is-out');}, 50 * index);
});

// END Fade out Elements (klasev)



// START Local Storage

  // To clean your local storage
  localStorage.removeItem('learnMenu');
  
  //check if menu-pulses are required
  function checkMenuPulseState() {
    if(localStorage.getItem('learnMenu') == 'learned') {
      var $menuPulse = $('.menu-pulse');
      $menuPulse.addClass('is-learned');
    }
  }
  checkMenuPulseState();

// END Local Storage



// START Stuff for WebGL (bouado)

var incrValue = 0.001; 
var isPressing = false; 

function onParticleScreenClick() {
    var $win = $(window);
    $win.on('mousedown', function(){
        isPressing = true; 
    });

    $win.on('mouseup', function(){
            isPressing = false; 
    })
}

// END Stuff for WebGL (bouado)



// START Fade In Home, Image Header, Video Header
// Init all Modules
$(window).load(function(){
    Helpers.init();
    
    FastClick.attach(document.body);
    Nav.init();

    ViewportReveal.init();

    if($(".js-tumblr--list").length) {
        GetTumblr.init();
        LoadMore.init();
    }

    if($(".video-element").length) {
        VideoFill.init();
    }

    $('body').addClass('is-loaded');

});

// END Fade In Home, Image Header, Video Header



