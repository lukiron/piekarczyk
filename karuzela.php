<html>
    <head>               
        <style>
            .side-gallery {
                overflow: hidden;
                width: 160px;
                position: fixed;
                height:100%;
                left: 20px;
                display: block;
            }

            .karuzela a {
                display: block; 
                width: 140px;  
                border-top: 5px solid #fff;    
                border-bottom: 5px solid #fff;  
                border-left: 10px solid #fff;  
                border-right: 10px solid #fff;  
                /*padding: 0 0 5px;*/

            }

            .karuzela img {
                display: block; 
                width: 140px;       
                opacity: 0.8;
            }

            .side-gallery img:hover {
                opacity: 1;
            }

            .side-gallery #next, .side-gallery #prev {
                display: block !important;
                height: 30px;    
                width: 160px;
                position: absolute;
                text-decoration: none;
                color: #fff;
                text-align: center;
                opacity: 0.8;
                z-index: 900;
                text-indent: -9999px;
            }

            .side-gallery #next:hover, .side-gallery #prev:hover {
                background-color: #7A1364;
            }

            .side-gallery #next {
                top: 0;    
                background-color: #aaa;
                background-image: url('http://inicjatywa.home.pl/yes-projekt/wp-content/themes/bones/library/images/up_arrow.png');
                background-repeat: no-repeat;
                background-position: center;
            }

            .side-gallery #prev {
                bottom: 0;   
                background-color: #aaa;
                background-image: url('http://inicjatywa.home.pl/yes-projekt/wp-content/themes/bones/library/images/down_arrow.png');
                background-repeat: no-repeat;
                background-position: center;
            }

            .side-gallery .wrapper { 
                position: absolute;
                height:100%;
            /*    top:5%;    */
            }
        </style>
    </head>
    <body>
        <div class="side-gallery">
            <a href="#" id="next">W gore</a>
            <a href="#" id="prev">W dol</a>
            <div class="wrapper">
                <div class="karuzela">
                    <a href="http://inicjatywa.home.pl/yes-projekt/wp-content/uploads/2012/03/13.jpg" rel="side-gallery"><img src="http://inicjatywa.home.pl/yes-projekt/wp-content/uploads/2012/03/13.jpg"/></a>
                    <a href="http://inicjatywa.home.pl/yes-projekt/wp-content/uploads/2012/03/14.jpg" rel="side-gallery"><img src="http://inicjatywa.home.pl/yes-projekt/wp-content/uploads/2012/03/14.jpg"/></a>
                    <a href="http://inicjatywa.home.pl/yes-projekt/wp-content/uploads/2012/03/25.jpg" rel="side-gallery"><img src="http://inicjatywa.home.pl/yes-projekt/wp-content/uploads/2012/03/25.jpg"/></a>
                    <a href="http://inicjatywa.home.pl/yes-projekt/wp-content/uploads/2012/03/34.jpg" rel="side-gallery"><img src="http://inicjatywa.home.pl/yes-projekt/wp-content/uploads/2012/03/34.jpg"/></a>
                    <a href="http://inicjatywa.home.pl/yes-projekt/wp-content/uploads/2012/03/48.jpg" rel="side-gallery"><img src="http://inicjatywa.home.pl/yes-projekt/wp-content/uploads/2012/03/48.jpg"/></a>
                    <a href="http://inicjatywa.home.pl/yes-projekt/wp-content/uploads/2012/03/56.jpg" rel="side-gallery"><img src="http://inicjatywa.home.pl/yes-projekt/wp-content/uploads/2012/03/56.jpg"/></a>
                    <a href="http://inicjatywa.home.pl/yes-projekt/wp-content/uploads/2012/03/64.jpg" rel="side-gallery"><img src="http://inicjatywa.home.pl/yes-projekt/wp-content/uploads/2012/03/64.jpg"/></a>
                    <a href="http://inicjatywa.home.pl/yes-projekt/wp-content/uploads/2012/03/77.jpg" rel="side-gallery"><img src="http://inicjatywa.home.pl/yes-projekt/wp-content/uploads/2012/03/77.jpg"/></a>
                    <a href="http://inicjatywa.home.pl/yes-projekt/wp-content/uploads/2012/03/85.jpg" rel="side-gallery"><img src="http://inicjatywa.home.pl/yes-projekt/wp-content/uploads/2012/03/85.jpg"/></a>
                    <a href="http://inicjatywa.home.pl/yes-projekt/wp-content/uploads/2012/03/120.jpg" rel="side-gallery"><img src="http://inicjatywa.home.pl/yes-projekt/wp-content/uploads/2012/03/120.jpg"/></a>
                    <a href="http://inicjatywa.home.pl/yes-projekt/wp-content/uploads/2012/03/129.jpg" rel="side-gallery"><img src="http://inicjatywa.home.pl/yes-projekt/wp-content/uploads/2012/03/129.jpg"/></a>
                </div>
            </div>
        </div>          
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
        <script src="http://inicjatywa.home.pl/yes-projekt/wp-content/themes/bones/library/js/jquery.carouFredSel-5.5.4-packed.js"></script>
        <script type="text/javascript">
                    $(document).ready(function() {                                                                  

                        $('.karuzela').carouFredSel({
                            height: '100%',                            
                            items: {
                                visible: '+1',
                                height: 'variable',
                                start: 'random'
                            },
                            scroll: {
                                items: 3,
                    //            mousewheel: 3,
                                easing: 'swing',
                                duration: 1500,
                                pauseOnHover: true
                            },
                            auto: {
                                play: true,
                                items: 3,
                                pauseDuration: 2000        
                            },
                            prev: '#prev',
                            next: '#next',
                            direction: 'up'
                        });
                        
                        $('.karuzela').trigger("synchronise");

                       


//                        $('.karuzela a').fancybox({
//                            'onStart': function(){
//                                $(".karuzela").trigger("pause");            
//                            },
//                            'onClosed': function(){
//                                $(".karuzela").trigger("resume");            
//                            }
//                        });                       

                    }); /* end of as page load scripts */
                </script>
    </body>
</html>