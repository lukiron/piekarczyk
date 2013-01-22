<!DOCTYPE html>
<html>
    <head>               
        <meta charset="utf-8">
        <style>
            article,
            aside,
            details,
            figcaption,
            figure,
            footer,
            header,
            hgroup,
            nav,
            section {
              display: block; }

            audio,
            canvas,
            video {
              display: inline-block;
              *display: inline;
              *zoom: 1; }

            audio:not([controls]) {
              display: none; }

            html {
              font-size: 100%;
              -webkit-text-size-adjust: 100%;
              -ms-text-size-adjust: 100%; }

            a:focus {
              outline: thin dotted #333;
              outline: 5px auto -webkit-focus-ring-color;
              outline-offset: -2px; }

            a:hover,
            a:active {
              outline: 0; }

            sub,
            sup {
              position: relative;
              font-size: 75%;
              line-height: 0;
              vertical-align: baseline; }

            sup {
              top: -0.5em; }

            sub {
              bottom: -0.25em; }

            img {
              max-width: 100%;
              vertical-align: middle;
              border: 0;
              -ms-interpolation-mode: bicubic; }

            #map_canvas img {
              max-width: none; }

            button,
            input,
            select,
            textarea {
              margin: 0;
              font-size: 100%;
              vertical-align: middle; }

            button,
            input {
              *overflow: visible;
              line-height: normal; }

            button::-moz-focus-inner,
            input::-moz-focus-inner {
              padding: 0;
              border: 0; }

            button,
            input[type="button"],
            input[type="reset"],
            input[type="submit"] {
              cursor: pointer;
              -webkit-appearance: button; }

            input[type="search"] {
              -webkit-box-sizing: content-box;
              -moz-box-sizing: content-box;
              box-sizing: content-box;
              -webkit-appearance: textfield; }

            input[type="search"]::-webkit-search-decoration,
            input[type="search"]::-webkit-search-cancel-button {
              -webkit-appearance: none; }

            textarea {
              overflow: auto;
              vertical-align: top; }

            html {
              height: 100%; }

            body {
              margin: 0;
              font-family: "trebuchet ms", sans-serif;
              font-size: 12px;
              line-height: 16px;                                      
              width: 100%;
              background-color: transparent; }

            a, a:hover {
              color: #ffffff;
              text-decoration: none; }

            .top-bar-holder {
              background-color: #000;
              width: 100%; }
              .top-bar-holder .top-bar {
                width: 947px;
                margin: 0 auto;
                *zoom: 1;
                font-family: "trebuchet ms",sans-serif;
                font-style: normal;}
                .top-bar-holder .top-bar:before, .top-bar-holder .top-bar:after {
                  display: table;
                  content: ""; }
                .top-bar-holder .top-bar:after {
                  clear: both; }
                .top-bar-holder .top-bar .top-bar-link a {
                  border-left: 1px solid #5f5f5f;
                  display: block;
                  float: left;
                  position: relative; }
                  .top-bar-holder .top-bar .top-bar-link:last-child a {
                      border-right: none;}
                  .top-bar-holder .top-bar .top-bar-link:first-child a {
                      border-left: none;}
                  .top-bar-holder .top-bar .top-bar-link a:hover {
                    color: #ffffff;                    
                    text-decoration: none; }
                  .top-bar-holder .top-bar .top-bar-link a .link-text {
                    padding: 4px 8px;
                    width: 141px;
                    color: white; }
                  .top-bar-holder .top-bar .top-bar-link a .link-img {
                    width: 157px;
                    height: 95px;
                    display: none;
                    position: absolute;
                    top: 24px;
                    left: -1px;
                    border-left: 1px solid #ccc;
                    border-right: 1px solid #ccc;
                    border-bottom: 1px solid #ccc; }
        </style>        
    </head>
    <body>
        <div class="top-bar-holder">
            <div class="top-bar">  
                <div class="top-bar-link">
                    <a href="http://www.silesiafilm.com" target="_blank" >
                        <div class="link-text">SILESIA FILM</div>
                        <!-- <div class="link-img"><img src="http://beta.silesiafilm.com/public/front/img/topbar/baltyk.jpg"></div> -->
                    </a>
                </div>         
                <div class="top-bar-link">
                    <a href="http://www.csf.katowice.pl" target="_blank">
                        <div class="link-text">Kino Kosmos</div>
                        <div class="link-img"><img src="http://beta.silesiafilm.com/public/front/img/topbar/kosmos.jpg"></div>
                    </a>
                </div>
                <div class="top-bar-link">
                    <a href="http://rialto.katowice.pl" target="_blank">                
                        <div class="link-text">Kinoteatr Rialto</div>
                        <div class="link-img"><img src="http://beta.silesiafilm.com/public/front/img/topbar/rialto-001.jpg"></div>
                    </a>
                </div>
                <div class="top-bar-link">
                    <a href="http://www.swiatowid.katowice.pl" target="_blank">             
                        <div class="link-text">Kino Światowid</div>
                        <div class="link-img"><img src="http://beta.silesiafilm.com/public/front/img/topbar/swiatowid.jpg"></div>
                    </a>
                </div>
                <div class="top-bar-link">
                    <a href="http://www.kinojanosik.pl" target="_blank">
                        <div class="link-text">Kino Janosik</div>
                        <div class="link-img"><img src="http://beta.silesiafilm.com/public/front/img/topbar/janosik.jpg"></div>
                    </a>
                </div>
                <div class="top-bar-link">
                    <a href="http://www.kinobaltyk.pl" target="_blank" >
                        <div class="link-text">Kino Bałtyk</div>
                        <div class="link-img"><img src="http://beta.silesiafilm.com/public/front/img/topbar/baltyk.jpg"></div>
                    </a>
                </div>                
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('http://beta.silesiafilm.com/public/front/js/libs/jquery-1.8.2.min.js"><\/script>')</script>  

        <script type="text/javascript">     

            $.extend({
              getUrlVars: function(){
                var vars = [], hash;
                var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
                for(var i = 0; i < hashes.length; i++)
                {
                  hash = hashes[i].split('=');
                  vars.push(hash[0]);
                  vars[hash[0]] = hash[1];
                }
                return vars;
              },
              getUrlVar: function(name){
                return $.getUrlVars()[name];
              }
            });            

            /*
             * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
             *
             * Uses the built in easing capabilities added In jQuery 1.1
             * to offer multiple easing options
             *
             * TERMS OF USE - jQuery Easing
             * 
             * Open source under the BSD License. 
             * 
             * Copyright ÂŠ 2008 George McGinley Smith
             * All rights reserved.
             * 
             * Redistribution and use in source and binary forms, with or without modification, 
             * are permitted provided that the following conditions are met:
             * 
             * Redistributions of source code must retain the above copyright notice, this list of 
             * conditions and the following disclaimer.
             * Redistributions in binary form must reproduce the above copyright notice, this list 
             * of conditions and the following disclaimer in the documentation and/or other materials 
             * provided with the distribution.
             * 
             * Neither the name of the author nor the names of contributors may be used to endorse 
             * or promote products derived from this software without specific prior written permission.
             * 
             * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
             * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
             * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
             *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
             *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
             *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
             * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
             *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
             * OF THE POSSIBILITY OF SUCH DAMAGE. 
             *
            */

            // t: current time, b: begInnIng value, c: change In value, d: duration
            jQuery.easing['jswing'] = jQuery.easing['swing'];

            jQuery.extend( jQuery.easing,
            {
                def: 'easeOutQuad',
                swing: function (x, t, b, c, d) {
                    //alert(jQuery.easing.default);
                    return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
                },
                easeInQuad: function (x, t, b, c, d) {
                    return c*(t/=d)*t + b;
                },
                easeOutQuad: function (x, t, b, c, d) {
                    return -c *(t/=d)*(t-2) + b;
                },
                easeInOutQuad: function (x, t, b, c, d) {
                    if ((t/=d/2) < 1) return c/2*t*t + b;
                    return -c/2 * ((--t)*(t-2) - 1) + b;
                },
                easeInCubic: function (x, t, b, c, d) {
                    return c*(t/=d)*t*t + b;
                },
                easeOutCubic: function (x, t, b, c, d) {
                    return c*((t=t/d-1)*t*t + 1) + b;
                },
                easeInOutCubic: function (x, t, b, c, d) {
                    if ((t/=d/2) < 1) return c/2*t*t*t + b;
                    return c/2*((t-=2)*t*t + 2) + b;
                },
                easeInQuart: function (x, t, b, c, d) {
                    return c*(t/=d)*t*t*t + b;
                },
                easeOutQuart: function (x, t, b, c, d) {
                    return -c * ((t=t/d-1)*t*t*t - 1) + b;
                },
                easeInOutQuart: function (x, t, b, c, d) {
                    if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
                    return -c/2 * ((t-=2)*t*t*t - 2) + b;
                },
                easeInQuint: function (x, t, b, c, d) {
                    return c*(t/=d)*t*t*t*t + b;
                },
                easeOutQuint: function (x, t, b, c, d) {
                    return c*((t=t/d-1)*t*t*t*t + 1) + b;
                },
                easeInOutQuint: function (x, t, b, c, d) {
                    if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
                    return c/2*((t-=2)*t*t*t*t + 2) + b;
                },
                easeInSine: function (x, t, b, c, d) {
                    return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
                },
                easeOutSine: function (x, t, b, c, d) {
                    return c * Math.sin(t/d * (Math.PI/2)) + b;
                },
                easeInOutSine: function (x, t, b, c, d) {
                    return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
                },
                easeInExpo: function (x, t, b, c, d) {
                    return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
                },
                easeOutExpo: function (x, t, b, c, d) {
                    return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
                },
                easeInOutExpo: function (x, t, b, c, d) {
                    if (t==0) return b;
                    if (t==d) return b+c;
                    if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
                    return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
                },
                easeInCirc: function (x, t, b, c, d) {
                    return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
                },
                easeOutCirc: function (x, t, b, c, d) {
                    return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
                },
                easeInOutCirc: function (x, t, b, c, d) {
                    if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
                    return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
                },
                easeInElastic: function (x, t, b, c, d) {
                    var s=1.70158;var p=0;var a=c;
                    if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
                    if (a < Math.abs(c)) { a=c; var s=p/4; }
                    else var s = p/(2*Math.PI) * Math.asin (c/a);
                    return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
                },
                easeOutElastic: function (x, t, b, c, d) {
                    var s=1.70158;var p=0;var a=c;
                    if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
                    if (a < Math.abs(c)) { a=c; var s=p/4; }
                    else var s = p/(2*Math.PI) * Math.asin (c/a);
                    return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
                },
                easeInOutElastic: function (x, t, b, c, d) {
                    var s=1.70158;var p=0;var a=c;
                    if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
                    if (a < Math.abs(c)) { a=c; var s=p/4; }
                    else var s = p/(2*Math.PI) * Math.asin (c/a);
                    if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
                    return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
                },
                easeInBack: function (x, t, b, c, d, s) {
                    if (s == undefined) s = 1.70158;
                    return c*(t/=d)*t*((s+1)*t - s) + b;
                },
                easeOutBack: function (x, t, b, c, d, s) {
                    if (s == undefined) s = 1.70158;
                    return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
                },
                easeInOutBack: function (x, t, b, c, d, s) {
                    if (s == undefined) s = 1.70158; 
                    if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
                    return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
                },
                easeInBounce: function (x, t, b, c, d) {
                    return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
                },
                easeOutBounce: function (x, t, b, c, d) {
                    if ((t/=d) < (1/2.75)) {
                        return c*(7.5625*t*t) + b;
                    } else if (t < (2/2.75)) {
                        return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
                    } else if (t < (2.5/2.75)) {
                        return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
                    } else {
                        return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
                    }
                },
                easeInOutBounce: function (x, t, b, c, d) {
                    if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
                    return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
                }
            });

            /*
             *
             * TERMS OF USE - EASING EQUATIONS
             * 
             * Open source under the BSD License. 
             * 
             * Copyright ÂŠ 2001 Robert Penner
             * All rights reserved.
             * 
             * Redistribution and use in source and binary forms, with or without modification, 
             * are permitted provided that the following conditions are met:
             * 
             * Redistributions of source code must retain the above copyright notice, this list of 
             * conditions and the following disclaimer.
             * Redistributions in binary form must reproduce the above copyright notice, this list 
             * of conditions and the following disclaimer in the documentation and/or other materials 
             * provided with the distribution.
             * 
             * Neither the name of the author nor the names of contributors may be used to endorse 
             * or promote products derived from this software without specific prior written permission.
             * 
             * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
             * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
             * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
             *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
             *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
             *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
             * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
             *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
             * OF THE POSSIBILITY OF SUCH DAMAGE. 
             *
             */

            /**
            * hoverIntent r6 // 2011.02.26 // jQuery 1.5.1+
            * <http://cherne.net/brian/resources/jquery.hoverIntent.html>
            * 
            * @param  f  onMouseOver function || An object with configuration options
            * @param  g  onMouseOut function  || Nothing (use configuration options object)
            * @author    Brian Cherne brian(at)cherne(dot)net
            */
            (function($){$.fn.hoverIntent=function(f,g){var cfg={sensitivity:7,interval:100,timeout:0};cfg=$.extend(cfg,g?{over:f,out:g}:f);var cX,cY,pX,pY;var track=function(ev){cX=ev.pageX;cY=ev.pageY};var compare=function(ev,ob){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t);if((Math.abs(pX-cX)+Math.abs(pY-cY))<cfg.sensitivity){$(ob).unbind("mousemove",track);ob.hoverIntent_s=1;return cfg.over.apply(ob,[ev])}else{pX=cX;pY=cY;ob.hoverIntent_t=setTimeout(function(){compare(ev,ob)},cfg.interval)}};var delay=function(ev,ob){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t);ob.hoverIntent_s=0;return cfg.out.apply(ob,[ev])};var handleHover=function(e){var ev=jQuery.extend({},e);var ob=this;if(ob.hoverIntent_t){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t)}if(e.type=="mouseenter"){pX=ev.pageX;pY=ev.pageY;$(ob).bind("mousemove",track);if(ob.hoverIntent_s!=1){ob.hoverIntent_t=setTimeout(function(){compare(ev,ob)},cfg.interval)}}else{$(ob).unbind("mousemove",track);if(ob.hoverIntent_s==1){ob.hoverIntent_t=setTimeout(function(){delay(ev,ob)},cfg.timeout)}}};return this.bind('mouseenter',handleHover).bind('mouseleave',handleHover)}})(jQuery);

            var linkBgColor = $.getUrlVar('linkBgColor');
            linkBgColor = '#'+linkBgColor;  

            var linkConfig = {    
                sensitivity: 10, // number = sensitivity threshold (must be 1 or higher)    
                interval: 0,  // number = milliseconds for onMouseOver polling interval    
                over: linkOpen,   // function = onMouseOver callback (REQUIRED)    
                timeout: 0,   // number = milliseconds delay before onMouseOut    
                out: linkClose    // function = onMouseOut callback (REQUIRED)    
            };

            function linkOpen() {
                $(this).addClass("hover");        
                $(this).css('background-color', linkBgColor);
                $('.link-img',this).stop().slideDown('500', 'easeInOutCirc');                
            }

            function linkClose() {
                $(this).removeClass("hover");        
                $(this).css('background-color', '#000');
                $('.link-img',this).stop().slideUp('500', 'easeInOutCirc');
            }

            $(".top-bar-link a").hoverIntent(linkConfig); 
                                
        </script>
    </body>
</html>