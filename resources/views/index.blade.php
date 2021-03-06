
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Produkta - Responsive Product Showcase</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        {{-- CSS --}}
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="{{asset('produkta/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('produkta/prettyPhoto/css/prettyPhoto.css')}}">
        <link rel="stylesheet" href="{{asset('produkta/font-awesome/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('produkta/css/social-icons.css')}}">
        <link rel="stylesheet" href="{{asset('produkta/css/ebook-style.css')}}">

        {{-- HTML5 shim, for IE6-8 support of HTML5 elements --}}
        {{--[if lt IE 9]--}}
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        {{--[endif]--}}

        {{-- Favicon and touch icons --}}
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('produkta/ico/apple-touch-icon-144-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('produkta/ico/apple-touch-icon-114-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('produkta/ico/apple-touch-icon-72-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" href="{{asset('produkta/ico/apple-touch-icon-57-precomposed.png')}}">

    </head>

    <body>

        {{{-- Header --}}
        <div class="container">
            <div class="header row">
                <div class="logo span4">
                    <h2><a href="">Produkta</a></h2>
                </div>
                <div class="tel-skype span8">
                    <p><i class="icon-phone-sign"></i> Phone: 0039 123 45 679 <span class="pipe">|</span> <i class="icon-user"></i> Skype: hello@domain.com</p>
                </div>
            </div>
        </div>

        {{--Product Showcase --}}
        <div class="product-showcase">
            <div class="product-showcase-pattern">
                <div class="container">
                    <div class="row">
                        <div class="span12 product-background">
                            <div class="row">
                                <div class="span5 product-image">
                                    <img src="{{asset('produkta/img/ebook.png')}}" alt="">
                                </div>
                                <div class="span7 product-title">
                                    <h1>The <strong>HTML5</strong> easy guide for beginners is now ready!</h1>
                                    <div class="product-description">
                                        <p>Our new ebook, <strong>"HTML5 Easy Guide for Beginners"</strong> is now ready. Enter your email in the form below and start learning right now.</p>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <form action="{{asset('produkta/subscribe.php')}}" method="post" class="subscribe">
                                            <input type="text" name="email" class="email" placeholder="Enter your email">
                                            <button type="submit">Get it now!</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Content --}}
        <div class="container">

            <div class="row">
                <div class="span12">
                    {{-- features --}}
                    <div class="features_2">
                        <h3>What's Inside</h3>
                        <div class="row">
                            <div class="span4 single-feature features-left-span">
                                <div class="feature-icon">
                                    <i class="icon-cloud"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Duis Aute Irure</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                                </div>
                            </div>
                            <div class="span4 single-feature">
                                <div class="feature-icon">
                                    <i class="icon-ok"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Voluptate Velit</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                                </div>
                            </div>
                            <div class="span4 single-feature">
                                <div class="feature-icon">
                                    <i class="icon-twitter"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Sunt In Culpa</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span4 single-feature features-left-span single-feature-bottom">
                                <div class="feature-icon">
                                    <i class="icon-fire"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Velit Esse</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                                </div>
                            </div>
                            <div class="span4 single-feature single-feature-bottom">
                                <div class="feature-icon">
                                    <i class="icon-magic"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Cillum Dolore</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                                </div>
                            </div>
                            <div class="span4 single-feature single-feature-bottom">
                                <div class="feature-icon">
                                    <i class="icon-flag"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Fugiat Nulla</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> {{-- end row --}}

            <div class="row">
                <div class="span12">
                    {{-- gallery --}}
                    <div class="gallery_2">
                        <h3>Preview</h3>
                        <h5>1. Introduction to HTML5</h5>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                        <h5>2. Differences from HTML 4.01</h5>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                        <h5>3. Main features and examples</h5>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                        <div class="gallery-images">
                            <div class="img-wrapper">
                                <a href="{{asset('produkta/img/gallery/1-big.jpg')}}" rel="prettyPhoto[pp_gal]">
                                    <img src="{{asset('produkta/img/gallery/1.jpg')}}" alt="">
                                    <span class="img-background"><i class="icon-plus"></i></span>
                                </a>
                            </div>
                            <div class="img-wrapper">
                                <a href="{{asset('produkta/img/gallery/2-big.jpg')}}" rel="prettyPhoto[pp_gal]">
                                    <img src="{{asset('produkta/img/gallery/2.jpg')}}" alt="">
                                    <span class="img-background"><i class="icon-plus"></i></span>
                                </a>
                            </div>
                            <div class="img-wrapper">
                                <a href="{{asset('produkta/img/gallery/3-big.jpg')}}" rel="prettyPhoto[pp_gal]">
                                    <img src="{{asset('produkta/img/gallery/3.jpg')}}" alt="">
                                    <span class="img-background"><i class="icon-plus"></i></span>
                                </a>
                            </div>
                            <div class="img-wrapper">
                                <a href="{{asset('produkta/gallery/4-big.jpg')}}" rel="prettyPhoto[pp_gal]">
                                    <img src="{{asset('produkta/img/gallery/4.jpg')}}" alt="">
                                    <span class="img-background"><i class="icon-plus"></i></span>
                                </a>
                            </div>
                            <div class="img-wrapper">
                                <a href="{{asset('produkta/img/gallery/1-big.jpg')}}" rel="prettyPhoto[pp_gal]">
                                    <img src="{{asset('produkta/img/gallery/1.jpg')}}" alt="">
                                    <span class="img-background"><i class="icon-plus"></i></span>
                                </a>
                            </div>
                            <div class="img-wrapper">
                                <a href="{{asset('produkta/img/gallery/2-big.jpg')}}" rel="prettyPhoto[pp_gal]">
                                    <img src="{{asset('produkta/img/gallery/2.jpg')}}"  alt="">
                                    <span class="img-background"><i class="icon-plus"></i></span>
                                </a>
                            </div>
                            <div class="img-wrapper">
                                <a href="{{asset('produkta/img/gallery/3-big.jpg')}}" rel="prettyPhoto[pp_gal]">
                                    <img src="{{asset('produkta/img/gallery/3.jpg')}}" alt="">
                                    <span class="img-background"><i class="icon-plus"></i></span>
                                </a>
                            </div>
                            <div class="img-wrapper">
                                <a href="{{asset('produkta/img/gallery/4-big.jpg')}}" rel="prettyPhoto[pp_gal]">
                                    <img src="{{asset('produkta/img/gallery/4.jpg')}}" alt="">
                                    <span class="img-background"><i class="icon-plus"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> {{-- end row --}}

            <div class="row">
                <div class="span12">
                    {{-- about us --}}
                    <div class="about-us_2">
                        <h3>About Us</h3>
                        <h5>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div> {{-- end row --}}

            <div class="row">
                {{-- as seen on --}}
                <div class="span12 using-this">
                    <h3>As Seen On</h3>
                    <div class="using-this-container">
                        <a class="using-this-google" href="#"></a>
                        <a class="using-this-pinterest" href="#"></a>
                        <a class="using-this-youtube" href="#"></a>
                        <a class="using-this-google" href="#"></a>
                        <a class="using-this-pinterest" href="#"></a>
                    </div>
                </div>
            </div> {{-- end row --}}

        </div> {{--  end container --}}

        <footer>
            <div class="container">
                <div class="row">
                    <div class="span4 from-twitter">
                        <h3>From Twitter</h3>
                        <div class="show-tweet"></div>
                    </div>
                    <div class="span4 testimonials">
                        <h3>Testimonials</h3>
                        <p>" Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit. "</p>
                        <div class="test-author">
                            <img src="{{asset('produkta/img/testimonials/3.jpg')}}" alt="">
                            <p><span>Jane Ipsum Doe</span><br>Produkta Inc.</p>
                        </div>
                    </div>
                    <div class="span4 contact-us">
                        <h3>Contact Us</h3>
                        <form action="{{asset('produkta/contact.php')}}" method="post">
                            <input type="text" name="name" class="name" placeholder="Name">
                            <input type="text" name="email" class="email" placeholder="Email">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div> {{-- end row --}}
                <div class="row">
                    <div class="span12">
                        <div class="social-links">
                            <a class="facebook" href="#"></a>
                            <a class="twitter" href="#"></a>
                            <a class="dribbble" href="#"></a>
                            <a class="pinterest" href="#"></a>
                            <a class="googleplus" href="#"></a>
                            <a class="skype" href="#"></a>
                            <a class="youtube" href="#"></a>
                            <a class="vimeo" href="#"></a>
                            <a class="forrst" href="#"></a>
                            <a class="email" href="#"></a>
                        </div>
                    </div>
                </div> {{-- end row --}}
                <div class="row">
                    <div class="span12 copyright">
                        <p>Copyright &copy; 2013 - Produkta - Template by <a href="http://azmind.com" target="_blank">Azmind.com</a></p>
                    </div>
                </div> {{-- end row --}}
            </div> {{-- end container --}}
        </footer>


        {{-- Javascript --}}
        <script src="{{asset('produkta/js/jquery-1.8.2.min.js')}}"></script>
        <script src="{{asset('produkta/js/jquery.backstretch.min.js')}}"></script>
        <script src="{{asset('produkta/js/jquery.tweet.js')}}"></script>
        <script src="{{asset('produkta/prettyPhoto/js/jquery.prettyPhoto.js')}}"></script>
        <script src="{{asset('produkta/js/ebook-scripts.js')}}"></script>

    </body>

</html>

