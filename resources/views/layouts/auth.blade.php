<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title') - {{setting('site.title')}}</title>
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta property="og:title" content="{{setting('site.title')}}">
    <meta property="og:site_name" content="{{setting('site.title')}}">
    <meta property="og:description" content="{{setting('site.description')}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" href="{{$public}}/png/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{$public}}/png/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{$public}}/png/apple-touch-icon-180x180.png">
    <link rel="stylesheet" href="{{$public}}/css/css1969.css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="{{$public}}/css/oneui.min-4.2.css">
    <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','js/analytics.js','ga');ga('create', 'UA-16158021-6', 'auto');ga('send', 'pageview');</script>
</head>
<body>
<div id="page-container">
    <main id="main-container">
        <div class="bg-image" style="background-image: url('{{$public}}/jpg/photo6%402x.jpg');">
            <div class="hero-static bg-white-95">
                <div class="content">
                    @yield('content')
                </div>
                <div class="content content-full font-size-sm text-muted text-center">
                    <strong>{{setting('site.title')}}</strong> &copy; <span data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
    </main>
</div>
<script src="{{$public}}/js/oneui.core.min-4.2.js"></script>
<script src="{{$public}}/js/oneui.app.min-4.2.js"></script>
<script src="{{$public}}/js/jquery.validate.min.js"></script>
@yield('scripts')
</body>

</html>
