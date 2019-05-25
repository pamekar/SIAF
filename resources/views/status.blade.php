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
        <div class="hero-static d-flex align-items-center">
            <div class="w-100">
                <div class="content content-full bg-white">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-4 py-4">
                            <div class="text-center mb-5">
                                <p class="mb-2">
                                    <i class="fa fa-2x fa-circle-notch text-primary"></i>
                                </p>
                                <h1 class="h4 mb-1">
                                    Status Page
                                </h1>
                                <h2 class="h6 font-w400 text-muted mb-3">
                                    Check out how we are doing
                                </h2>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-lg btn-secondary" href="/">
                                    <i class="fa fa-arrow-left mr-1"></i> Home
                                </a>
                                <a class="btn btn-lg btn-success" href="javascript:void(0)">
                                    <i class="fa fa-rss"></i> <span class="d-none d-sm-inline-block ml-1">Subscribe</span>
                                </a>
                            </div>
                            <hr>
                            <div class="alert alert-warning" role="alert">
                                <p class="mb-0">Payments are currently under maintenance, please stay tuned.</p>
                            </div>
                            <div class="alert alert-danger" role="alert">
                                <p class="mb-0">Our frontend is experiencing some issues but we are on it!</p>
                            </div>
                            <ul class="list-group push">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Backend
                                    <span class="badge badge-pill badge-success">Operational</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Frontend
                                    <span class="badge badge-pill badge-danger">Down</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    API
                                    <span class="badge badge-pill badge-success">Operational</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Payments
                                    <span class="badge badge-pill badge-warning">Maintenance</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Helpdesk
                                    <span class="badge badge-pill badge-success">Operational</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="font-size-sm text-center text-muted py-3">
                    <strong>{{setting('site.title')}}</strong> &copy; <span data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
    </main>
</div>
<script src="{{$public}}/js/oneui.core.min-4.2.js"></script>
<script src="{{$public}}/js/oneui.app.min-4.2.js"></script>
</body>

</html>