<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{setting('site.title')}}</title>
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="author" content="">
    <meta property="og:title" content="{{setting('site.title')}}">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="{{setting('site.description')}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{config('app.url')}}">
    <meta property="og:image" content="">
    <link rel="apple-touch-icon" sizes="180x180" href="{{$public}}/png/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{$public}}/png/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{$public}}/png/favicon-16x16.png">
    <link rel="manifest" href="{{$public}}/site.webmanifest">
    <link rel="mask-icon" href="{{$public}}/svg/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet"
          href="{{$public}}/css/css1969.css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="{{$public}}/css/oneui.min-4.2.css">
    <script>
        window.countDownTime= "2019/6/24";
    </script>
</head>
<body>
<div id="page-container">
    <main id="main-container">
        <div class="bg-image" style="background-image: url('{{$public}}/jpg/photo6%402x.jpg');">
            <div class="hero bg-primary-dark-op">
                <div class="hero-inner">
                    <div class="content content-full bg-black-50">
                        <div class="row justify-content-center">
                            <div class="col-md-6 py-3 text-center">
                                <div class="push">
                                    <a class="link-fx font-w700 font-size-h1" href="/">
                                        <span class="text-white">{{setting('site.title')}}</span>
                                    </a>
                                    <p class="font-size-sm text-white-75">Stay tuned! We are working on it and it is coming soon!</p>
                                </div>
                                <div class="js-countdown"></div>
                                <form class="push" action="#" method="POST" onsubmit="return false;">
                                    <div class="form-group row justify-content-center">
                                        <div class="col-md-10 col-xl-6">
                                            <div class="input-group mb-2">
                                                <input type="email" class="form-control border-0" placeholder="Enter your email..">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-primary">Subscribe</button>
                                                </div>
                                            </div>
                                            <div class="font-size-sm text-white-50">
                                                Don't worry, we hate spam.
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <a class="btn btn-sm btn-light" href="{{url()->previous()}}">
                                    <i class="fa fa-arrow-left mr-1"></i> Go Back
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<script src="{{$public}}/js/oneui.core.min-4.2.js"></script>
<script src="{{$public}}/js/oneui.app.min-4.2.js"></script>
<script src="{{$public}}/js/jquery.countdown.min.js"></script>
<script src="{{$public}}/js/op_coming_soon.min.js"></script>
</body>

</html>