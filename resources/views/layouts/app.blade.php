<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
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
        window.public_= "{{$public}}";
    </script>
</head>
<body>
{{-- drg >> App location for VueJS--}}
<div id="app"></div>

<script src="{{$public}}/js/oneui.core.min-4.2.js"></script>
<script src="{{$public}}/js/oneui.app.min-4.2.js"></script>
<script src="{{$public}}/js/chart.bundle.min.js"></script>
<script src="{{$public}}/js/be_pages_dashboard.min.js"></script>
<script src="{{$public}}/js/bootstrap-notify.min.js"></script>
<script src="{{$public}}/js/bootstrap-maxlength.min.js"></script>
<script>jQuery(function(){ One.helpers(['notify','maxlength']); });</script>
<script src="{{$public}}/js/app.js"></script>
</body>
</html>
