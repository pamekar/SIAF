<!doctype html>
<html lang="en">

<!-- Mirrored from demo.pixelcave.com/oneui-remastered/be_pages_dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Apr 2019 08:09:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <!--











    THIS IS THE DEMO VERSION OF OneUI FRAMEWORK!
    COMMENTS ARE REMOVED, CODE IS COMPRESSED AND CODE STYLE IS ALTERED!

    IN THE FULL VERSION
        THE CODE IS INDENTED CORRECTLY AND WELL COMMENTED!
        YOU GET AN EXTENSIVE DOCUMENTATION TO GET YOU STARTED!
        YOU GET THE PHP VERSION (ALONG WITH THE HTML VERSION) WHICH HAS EXTRA FEATURES!
        YOU GET THE LARAVEL STARTER KIT TO HELP YOU BUILD YOUR WEB APP WITH LARAVEL
        YOU GET THE ES6 FILES OF THE UI FRAMEWORK
        YOU GET THE SASS FILES OF THE UI FRAMEWORK
        YOU GET A GULPFILE WITH LOTS OF AUTOMATIONS
        YOU GET ACCESS TO FRAMEWORK UPDATES WITH NEW FEATURES AND PLUGIN UPGRADES
        WE CAN PROVIDE SUPPORT IF YOU NEED IT :-)

    THANK YOU FOR HAVING A LOOK!

    ** A LICENSE MUST BE ACQUIRED FOR LEGAL USE -> LINK: https://1.envato.market/xWy **
    ** PLEASE SUPPORT US IF YOU LIKE OUR WORK, IT HELPS US CONTINUE, THANK YOU VERY MUCH! **











    -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>OneUI - Bootstrap 4 Admin Template &amp; UI Framework | DEMO</title>
    <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest | This is the demo of OneUI! You need to purchase a license for legal use! | DEMO">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework | DEMO">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest | This is the demo of OneUI! You need to purchase a license for legal use! | DEMO">
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
<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
    <aside id="side-overlay" class="font-size-sm">
        <div class="content-header border-bottom">
            <a class="img-link mr-1" href="javascript:void(0)">
                <img class="img-avatar img-avatar32" src="{{$public}}/jpg/avatar10.jpg" alt="">
            </a>
            <div class="ml-2">
                <a class="link-fx text-dark font-w600" href="javascript:void(0)">Adam McCoy</a>
            </div>
            <a class="ml-auto btn btn-sm btn-dual" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                <i class="fa fa-fw fa-times text-danger"></i>
            </a>
        </div>
        <div class="content-side">
            <div class="block block-transparent pull-x pull-t">
                <ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#so-overview">
                            <i class="fa fa-fw fa-coffee text-gray mr-1"></i> Overview
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#so-sales">
                            <i class="fa fa-fw fa-chart-line text-gray mr-1"></i> Sales
                        </a>
                    </li>
                </ul>
                <div class="block-content tab-content overflow-hidden">
                    <div class="tab-pane pull-x fade fade-left show active" id="so-overview" role="tabpanel">
                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Recent Activity</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <ul class="nav-items mb-0">
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="si si-wallet text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale ($15)</div>
                                                <div class="text-success">Admin Template</div>
                                                <small class="text-muted">3 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="si si-pencil text-info"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">You edited the file</div>
                                                <div class="text-info">
                                                    <i class="fa fa-file-text"></i> Documentation.doc
                                                </div>
                                                <small class="text-muted">15 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="si si-close text-danger"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Project deleted</div>
                                                <div class="text-danger">Line Icon Set</div>
                                                <small class="text-muted">4 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Online Friends</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <ul class="nav-items mb-0">
                                    <li>
                                        <a class="media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                <img class="img-avatar img-avatar48" src="{{$public}}/jpg/avatar3.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Amber Harvey</div>
                                                <div class="font-w400 text-muted">Copywriter</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                <img class="img-avatar img-avatar48" src="{{$public}}/jpg/avatar11.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Thomas Riley</div>
                                                <div class="font-w400 text-muted">Web Developer</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                <img class="img-avatar img-avatar48" src="{{$public}}/jpg/avatar4.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Andrea Gardner</div>
                                                <div class="font-w400 text-muted">Web Designer</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                <img class="img-avatar img-avatar48" src="{{$public}}/jpg/avatar8.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Carol Ray</div>
                                                <div class="font-w400 text-muted">Photographer</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                <img class="img-avatar img-avatar48" src="{{$public}}/jpg/avatar14.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">David Fuller</div>
                                                <div class="font-w400 text-muted">Graphic Designer</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="block mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Quick Settings</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <form action="https://demo.pixelcave.com/oneui-remastered/be_pages_dashboard.html" method="POST" onsubmit="return false;">
                                    <div class="form-group">
                                        <p class="font-w600 mb-2">
                                            Online Status
                                        </p>
                                        <div class="custom-control custom-switch mb-1">
                                            <input type="checkbox" class="custom-control-input" id="so-settings-check1" name="so-settings-check1" checked>
                                            <label class="custom-control-label" for="so-settings-check1">Show your status to all</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <p class="font-w600 mb-2">
                                            Auto Updates
                                        </p>
                                        <div class="custom-control custom-switch mb-1">
                                            <input type="checkbox" class="custom-control-input" id="so-settings-check2" name="so-settings-check2" checked>
                                            <label class="custom-control-label" for="so-settings-check2">Keep up to date</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <p class="font-w600 mb-1">
                                            Application Alerts
                                        </p>
                                        <div class="custom-control custom-switch mb-1">
                                            <input type="checkbox" class="custom-control-input" id="so-settings-check3" name="so-settings-check3" checked>
                                            <label class="custom-control-label" for="so-settings-check3">Email Notifications</label>
                                        </div>
                                        <div class="custom-control custom-switch mb-1">
                                            <input type="checkbox" class="custom-control-input" id="so-settings-check4" name="so-settings-check4" checked>
                                            <label class="custom-control-label" for="so-settings-check4">SMS Notifications</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <p class="font-w600 mb-1">
                                            API
                                        </p>
                                        <div class="custom-control custom-switch mb-1">
                                            <input type="checkbox" class="custom-control-input" id="so-settings-check5" name="so-settings-check5" checked>
                                            <label class="custom-control-label" for="so-settings-check5">Enable access</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane pull-x fade fade-right" id="so-sales" role="tabpanel">
                        <div class="block mb-0">
                            <div class="block-content">
                                <div class="row items-push pull-t">
                                    <div class="col-6">
                                        <div class="font-w700 text-uppercase">Sales</div>
                                        <a class="link-fx font-size-h3 font-w300" href="javascript:void(0)">22.030</a>
                                    </div>
                                    <div class="col-6">
                                        <div class="font-w700 text-uppercase">Balance</div>
                                        <a class="link-fx font-size-h3 font-w300" href="javascript:void(0)">$4.589,00</a>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <div class="row">
                                    <div class="col-6">
                                        <span class="font-w600 text-uppercase">Today</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="ext-muted">$996</span>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <ul class="nav-items push">
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $249</div>
                                                <small class="text-muted">3 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $129</div>
                                                <small class="text-muted">50 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $119</div>
                                                <small class="text-muted">2 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $499</div>
                                                <small class="text-muted">3 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <div class="row">
                                    <div class="col-6">
                                        <span class="font-w600 text-uppercase">Yesterday</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="text-muted">$765</span>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <ul class="nav-items push">
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $249</div>
                                                <small class="text-muted">26 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-danger"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Product Purchase - $50</div>
                                                <small class="text-muted">28 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $119</div>
                                                <small class="text-muted">29 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-danger"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Paypal Withdrawal - $300</div>
                                                <small class="text-muted">37 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $129</div>
                                                <small class="text-muted">39 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $119</div>
                                                <small class="text-muted">45 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $499</div>
                                                <small class="text-muted">46 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="text-center">
                                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                        <i class="fa fa-arrow-down mr-1"></i> Load More..
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <nav id="sidebar" aria-label="Main Navigation">
        <div class="content-header bg-white-5">
            <a class="font-w600 text-dual" href="index-3.html">
                <i class="fa fa-circle-notch text-primary"></i>
                <span class="smini-hide">
                <span class="font-w700 font-size-h5">ne</span> <span class="font-w400">4.2</span>
            </span>
            </a>
            <div>
                <div class="dropdown d-inline-block ml-3">
                    <a class="text-dual font-size-sm" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="si si-drop"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="default" href="#">
                            <span>Default</span>
                            <i class="fa fa-circle text-default"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/amethyst.min-4.2.css" href="#">
                            <span>Amethyst</span>
                            <i class="fa fa-circle text-amethyst"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/city.min-4.2.css" href="#">
                            <span>City</span>
                            <i class="fa fa-circle text-city"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/flat.min-4.2.css" href="#">
                            <span>Flat</span>
                            <i class="fa fa-circle text-flat"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/modern.min-4.2.css" href="#">
                            <span>Modern</span>
                            <i class="fa fa-circle text-modern"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/smooth.min-4.2.css" href="#">
                            <span>Smooth</span>
                            <i class="fa fa-circle text-smooth"></i>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_light" href="#">
                            <span>Sidebar Light</span>
                        </a>
                        <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                            <span>Sidebar Dark</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" data-toggle="layout" data-action="header_style_light" href="#">
                            <span>Header Light</span>
                        </a>
                        <a class="dropdown-item" data-toggle="layout" data-action="header_style_dark" href="#">
                            <span>Header Dark</span>
                        </a>
                    </div>
                </div>
                <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="be_pages_dashboard.html">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-main-heading">User Interface</li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-energy"></i>
                        <span class="nav-main-link-name">Blocks</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_blocks_styles.html">
                                <span class="nav-main-link-name">Styles</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_blocks_options.html">
                                <span class="nav-main-link-name">Options</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_blocks_forms.html">
                                <span class="nav-main-link-name">Forms</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_blocks_themed.html">
                                <span class="nav-main-link-name">Themed</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_blocks_api.html">
                                <span class="nav-main-link-name">API</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-badge"></i>
                        <span class="nav-main-link-name">Elements</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_grid.html">
                                <span class="nav-main-link-name">Grid</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_typography.html">
                                <span class="nav-main-link-name">Typography</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_icons.html">
                                <span class="nav-main-link-name">Icons</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_buttons.html">
                                <span class="nav-main-link-name">Buttons</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_buttons_groups.html">
                                <span class="nav-main-link-name">Button Groups</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_dropdowns.html">
                                <span class="nav-main-link-name">Dropdowns</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_tabs.html">
                                <span class="nav-main-link-name">Tabs</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_navigation.html">
                                <span class="nav-main-link-name">Navigation</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_progress.html">
                                <span class="nav-main-link-name">Progress</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_alerts.html">
                                <span class="nav-main-link-name">Alerts</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_tooltips.html">
                                <span class="nav-main-link-name">Tooltips</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_popovers.html">
                                <span class="nav-main-link-name">Popovers</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_modals.html">
                                <span class="nav-main-link-name">Modals</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_images.html">
                                <span class="nav-main-link-name">Images Overlay</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_timeline.html">
                                <span class="nav-main-link-name">Timeline</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_ribbons.html">
                                <span class="nav-main-link-name">Ribbons</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_animations.html">
                                <span class="nav-main-link-name">Animations</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_color_themes.html">
                                <span class="nav-main-link-name">Color Themes</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-grid"></i>
                        <span class="nav-main-link-name">Tables</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_tables_styles.html">
                                <span class="nav-main-link-name">Styles</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_tables_responsive.html">
                                <span class="nav-main-link-name">Responsive</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_tables_helpers.html">
                                <span class="nav-main-link-name">Helpers</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_tables_pricing.html">
                                <span class="nav-main-link-name">Pricing</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_tables_datatables.html">
                                <span class="nav-main-link-name">DataTables</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-note"></i>
                        <span class="nav-main-link-name">Forms</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_forms_elements.html">
                                <span class="nav-main-link-name">Elements</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_forms_custom_controls.html">
                                <span class="nav-main-link-name">Custom Controls</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_forms_layouts.html">
                                <span class="nav-main-link-name">Layouts</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_forms_input_groups.html">
                                <span class="nav-main-link-name">Input Groups</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_forms_plugins.html">
                                <span class="nav-main-link-name">Plugins</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_forms_editors.html">
                                <span class="nav-main-link-name">Editors</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_forms_validation.html">
                                <span class="nav-main-link-name">Validation</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_forms_wizard.html">
                                <span class="nav-main-link-name">Wizard</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-heading">Develop</li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-wrench"></i>
                        <span class="nav-main-link-name">Components</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_loaders.html">
                                <span class="nav-main-link-name">Loaders</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_image_cropper.html">
                                <span class="nav-main-link-name">Image Cropper</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_appear.html">
                                <span class="nav-main-link-name">Appear</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_charts.html">
                                <span class="nav-main-link-name">Charts</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_calendar.html">
                                <span class="nav-main-link-name">Calendar</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_sliders.html">
                                <span class="nav-main-link-name">Sliders</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_syntax_highlighting.html">
                                <span class="nav-main-link-name">Syntax Highlighting</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_rating.html">
                                <span class="nav-main-link-name">Rating</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_maps_google.html">
                                <span class="nav-main-link-name">Google Maps</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_maps_vector.html">
                                <span class="nav-main-link-name">Vector Maps</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_dialogs.html">
                                <span class="nav-main-link-name">Dialogs</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_notifications.html">
                                <span class="nav-main-link-name">Notifications</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_gallery.html">
                                <span class="nav-main-link-name">Gallery</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-magic-wand"></i>
                        <span class="nav-main-link-name">Layout</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <span class="nav-main-link-name">Page</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_page_default.html">
                                        <span class="nav-main-link-name">Default</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_page_flipped.html">
                                        <span class="nav-main-link-name">Flipped</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_page_native_scrolling.html">
                                        <span class="nav-main-link-name">Native Scrolling</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <span class="nav-main-link-name">Main Content</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_content_main_full_width.html">
                                        <span class="nav-main-link-name">Full Width</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_content_main_narrow.html">
                                        <span class="nav-main-link-name">Narrow</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_content_main_boxed.html">
                                        <span class="nav-main-link-name">Boxed</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <span class="nav-main-link-name">Header</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-heading">Fixed</li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_header_fixed_light.html">
                                        <span class="nav-main-link-name">Light</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_header_fixed_dark.html">
                                        <span class="nav-main-link-name">Dark</span>
                                    </a>
                                </li>
                                <li class="nav-main-heading">Static</li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_header_static_light.html">
                                        <span class="nav-main-link-name">Light</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_header_static_dark.html">
                                        <span class="nav-main-link-name">Dark</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <span class="nav-main-link-name">Sidebar</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_sidebar_mini.html">
                                        <span class="nav-main-link-name">Mini</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_sidebar_light.html">
                                        <span class="nav-main-link-name">Light</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_sidebar_dark.html">
                                        <span class="nav-main-link-name">Dark</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_sidebar_hidden.html">
                                        <span class="nav-main-link-name">Hidden</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <span class="nav-main-link-name">Side Overlay</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_side_overlay_visible.html">
                                        <span class="nav-main-link-name">Visible</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_side_overlay_mode_hover.html">
                                        <span class="nav-main-link-name">Hover Mode</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_side_overlay_no_page_overlay.html">
                                        <span class="nav-main-link-name">No Page Overlay</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_api.html">
                                <span class="nav-main-link-name">API</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-puzzle"></i>
                        <span class="nav-main-link-name">Multi Level Menu</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="#">
                                <span class="nav-main-link-name">Link 1-1</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="#">
                                <span class="nav-main-link-name">Link 1-2</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <span class="nav-main-link-name">Sub Level 2</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="#">
                                        <span class="nav-main-link-name">Link 2-1</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="#">
                                        <span class="nav-main-link-name">Link 2-2</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                        <span class="nav-main-link-name">Sub Level 3</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="#">
                                                <span class="nav-main-link-name">Link 3-1</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="#">
                                                <span class="nav-main-link-name">Link 3-2</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                                <span class="nav-main-link-name">Sub Level 4</span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="#">
                                                        <span class="nav-main-link-name">Link 4-1</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="#">
                                                        <span class="nav-main-link-name">Link 4-2</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Sub Level 5</span>
                                                    </a>
                                                    <ul class="nav-main-submenu">
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link" href="#">
                                                                <span class="nav-main-link-name">Link 5-1</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link" href="#">
                                                                <span class="nav-main-link-name">Link 5-2</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Sub Level 6</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">Link 6-1</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">Link 6-2</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-heading">Pages</li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-layers"></i>
                        <span class="nav-main-link-name">Generic</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_generic_blank.html">
                                <span class="nav-main-link-name">Blank</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_generic_blank_block.html">
                                <span class="nav-main-link-name">Blank (Block)</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_generic_search.html">
                                <span class="nav-main-link-name">Search</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_generic_profile.html">
                                <span class="nav-main-link-name">Profile</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_generic_inbox.html">
                                <span class="nav-main-link-name">Inbox</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_generic_invoice.html">
                                <span class="nav-main-link-name">Invoice</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_generic_faq.html">
                                <span class="nav-main-link-name">FAQ</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_generic_team.html">
                                <span class="nav-main-link-name">Team</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_generic_contact.html">
                                <span class="nav-main-link-name">Contact</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_generic_support.html">
                                <span class="nav-main-link-name">Support</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_generic_upgrade_plan.html">
                                <span class="nav-main-link-name">Upgrade Plan</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_maintenance.html">
                                <span class="nav-main-link-name">Maintenance</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_status.html">
                                <span class="nav-main-link-name">Status</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_coming_soon.html">
                                <span class="nav-main-link-name">Coming Soon</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-layers"></i>
                        <span class="nav-main-link-name"><span class="sidebar-mini-hide">Page Packs</span></span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-bubbles"></i>
                                <span class="nav-main-link-name">Forum</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_forum_categories.html">
                                        <span class="nav-main-link-name">Categories</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_forum_topics.html">
                                        <span class="nav-main-link-name">Topics</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_forum_discussion.html">
                                        <span class="nav-main-link-name">Discussion</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-pencil"></i>
                                <span class="nav-main-link-name">Blog</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_blog_classic.html">
                                        <span class="nav-main-link-name">Classic</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_blog_list.html">
                                        <span class="nav-main-link-name">List</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_blog_grid.html">
                                        <span class="nav-main-link-name">Grid</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_blog_story.html">
                                        <span class="nav-main-link-name">Story</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_blog_story_cover.html">
                                        <span class="nav-main-link-name">Story Cover</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-graduation"></i>
                                <span class="nav-main-link-name">e-Learning</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_elearning_courses.html">
                                        <span class="nav-main-link-name">Courses</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_elearning_course.html">
                                        <span class="nav-main-link-name">Course</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_elearning_lesson.html">
                                        <span class="nav-main-link-name">Lesson</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-lock"></i>
                        <span class="nav-main-link-name">Authentication</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_auth_all.html">
                                <span class="nav-main-link-name">All</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_auth_signin.html">
                                <span class="nav-main-link-name">Sign In</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_auth_signin2.html">
                                <span class="nav-main-link-name">Sign In 2</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_auth_signup.html">
                                <span class="nav-main-link-name">Sign Up</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_auth_signup2.html">
                                <span class="nav-main-link-name">Sign Up 2</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_auth_lock.html">
                                <span class="nav-main-link-name">Lock Screen</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_auth_lock2.html">
                                <span class="nav-main-link-name">Lock Screen 2</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_auth_reminder.html">
                                <span class="nav-main-link-name">Pass Reminder</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_auth_reminder2.html">
                                <span class="nav-main-link-name">Pass Reminder 2</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-fire"></i>
                        <span class="nav-main-link-name">Error Pages</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_error_all.html">
                                <span class="nav-main-link-name">All</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_error_400.html">
                                <span class="nav-main-link-name">400</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_error_401.html">
                                <span class="nav-main-link-name">401</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_error_403.html">
                                <span class="nav-main-link-name">403</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_error_404.html">
                                <span class="nav-main-link-name">404</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_error_500.html">
                                <span class="nav-main-link-name">500</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_error_503.html">
                                <span class="nav-main-link-name">503</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <header id="page-header">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                    <i class="fa fa-fw fa-ellipsis-v"></i>
                </button>
                <button type="button" class="btn btn-sm btn-dual mr-2" data-toggle="modal" data-target="#one-modal-apps">
                    <i class="si si-grid"></i>
                </button>
                <button type="button" class="btn btn-sm btn-dual d-sm-none" data-toggle="layout" data-action="header_search_on">
                    <i class="si si-magnifier"></i>
                </button>
                <form class="d-none d-sm-inline-block" action="https://demo.pixelcave.com/oneui-remastered/be_pages_generic_search.html" method="POST">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2">
                        <div class="input-group-append">
                        <span class="input-group-text bg-body border-0">
                            <i class="si si-magnifier"></i>
                        </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="d-flex align-items-center">
                <div class="dropdown d-inline-block ml-2">
                    <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded" src="{{$public}}/jpg/avatar10.jpg" alt="Header Avatar" style="width: 18px;">
                        <span class="d-none d-sm-inline-block ml-1">Adam</span>
                        <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                        <div class="p-3 text-center bg-primary">
                            <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{$public}}/jpg/avatar10.jpg" alt="">
                        </div>
                        <div class="p-2">
                            <h5 class="dropdown-header text-uppercase">User Options</h5>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                                <span>Inbox</span>
                                <span>
                                <span class="badge badge-pill badge-primary">3</span>
                                <i class="si si-envelope-open ml-1"></i>
                            </span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_profile.html">
                                <span>Profile</span>
                                <span>
                                <span class="badge badge-pill badge-success">1</span>
                                <i class="si si-user ml-1"></i>
                            </span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span>Settings</span>
                                <i class="si si-settings"></i>
                            </a>
                            <div role="separator" class="dropdown-divider"></div>
                            <h5 class="dropdown-header text-uppercase">Actions</h5>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_lock.html">
                                <span>Lock Account</span>
                                <i class="si si-lock ml-1"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_signin.html">
                                <span>Log Out</span>
                                <i class="si si-logout ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="dropdown d-inline-block ml-2">
                    <button type="button" class="btn btn-sm btn-dual" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="si si-bell"></i>
                        <span class="badge badge-primary badge-pill">6</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-2 bg-primary text-center">
                            <h5 class="dropdown-header text-uppercase text-white">Notifications</h5>
                        </div>
                        <ul class="nav-items mb-0">
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mr-2 ml-3">
                                        <i class="fa fa-fw fa-check-circle text-success"></i>
                                    </div>
                                    <div class="media-body pr-2">
                                        <div class="font-w600">You have a new follower</div>
                                        <small class="text-muted">15 min ago</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mr-2 ml-3">
                                        <i class="fa fa-fw fa-plus-circle text-info"></i>
                                    </div>
                                    <div class="media-body pr-2">
                                        <div class="font-w600">1 new sale, keep it up</div>
                                        <small class="text-muted">22 min ago</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mr-2 ml-3">
                                        <i class="fa fa-fw fa-times-circle text-danger"></i>
                                    </div>
                                    <div class="media-body pr-2">
                                        <div class="font-w600">Update failed, restart server</div>
                                        <small class="text-muted">26 min ago</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mr-2 ml-3">
                                        <i class="fa fa-fw fa-plus-circle text-info"></i>
                                    </div>
                                    <div class="media-body pr-2">
                                        <div class="font-w600">2 new sales, keep it up</div>
                                        <small class="text-muted">33 min ago</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mr-2 ml-3">
                                        <i class="fa fa-fw fa-user-plus text-success"></i>
                                    </div>
                                    <div class="media-body pr-2">
                                        <div class="font-w600">You have a new subscriber</div>
                                        <small class="text-muted">41 min ago</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mr-2 ml-3">
                                        <i class="fa fa-fw fa-check-circle text-success"></i>
                                    </div>
                                    <div class="media-body pr-2">
                                        <div class="font-w600">You have a new follower</div>
                                        <small class="text-muted">42 min ago</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="p-2 border-top">
                            <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                <i class="fa fa-fw fa-arrow-down mr-1"></i> Load More..
                            </a>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-sm btn-dual ml-2" data-toggle="layout" data-action="side_overlay_toggle">
                    <i class="fa fa-fw fa-list-ul fa-flip-horizontal"></i>
                </button>
            </div>
        </div>
        <div id="page-header-search" class="overlay-header bg-white">
            <div class="content-header">
                <form class="w-100" action="https://demo.pixelcave.com/oneui-remastered/be_pages_generic_search.html" method="POST">
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <button type="button" class="btn btn-danger" data-toggle="layout" data-action="header_search_off">
                                <i class="fa fa-fw fa-times-circle"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                    </div>
                </form>
            </div>
        </div>
        <div id="page-header-loader" class="overlay-header bg-white">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                </div>
            </div>
        </div>
    </header>
    <main id="main-container">
        <div class="bg-image overflow-hidden" style="background-image: url('{{$public}}/jpg/photo3%402x.jpg');">
            <div class="bg-primary-dark-op">
                <div class="content content-narrow content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-5 mb-2 text-center text-sm-left">
                        <div class="flex-sm-fill">
                            <h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">Dashboard</h1>
                            <h2 class="h4 font-w400 text-white-75 mb-0 invisible" data-toggle="appear" data-timeout="250">Welcome Administrator</h2>
                        </div>
                        <div class="flex-sm-00-auto mt-3 mt-sm-0 ml-sm-3">
                    <span class="d-inline-block invisible" data-toggle="appear" data-timeout="350">
                        <a class="btn btn-primary px-4 py-2" data-toggle="click-ripple" href="javascript:void(0)">
                            <i class="fa fa-hands-helping mr-1"></i> Contribute
                        </a>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content content-narrow">
            <div class="row">
                <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                    <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Resolved</div>
                            <div class="font-size-h2 font-w400 text-dark">120,580</div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                    <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Pending</div>
                            <div class="font-size-h2 font-w400 text-dark">150</div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                    <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Contribution</div>
                            <div class="font-size-h2 font-w400 text-dark">$3,200</div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                    <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Expenses</div>
                            <div class="font-size-h2 font-w400 text-dark">$21</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="block block-rounded block-mode-loading-oneui">
                        <div class="block-header">
                            <h3 class="block-title">Earnings in $</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option">
                                    <i class="si si-settings"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content p-0 bg-body-light text-center">
                            <div class="pt-3" style="height: 360px;"><canvas class="js-chartjs-dashboard-earnings"></canvas></div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push text-center py-3">
                                <div class="col-6 col-xl-3">
                                    <i class="fa fa-wallet fa-2x text-muted"></i>
                                    <div class="text-muted mt-3">$148,000</div>
                                </div>
                                <div class="col-6 col-xl-3">
                                    <i class="fa fa-angle-double-up fa-2x text-muted"></i>
                                    <div class="text-muted mt-3">+9% Earnings</div>
                                </div>
                                <div class="col-6 col-xl-3">
                                    <i class="fa fa-ticket-alt fa-2x text-muted"></i>
                                    <div class="text-muted mt-3">+20% Tickets</div>
                                </div>
                                <div class="col-6 col-xl-3">
                                    <i class="fa fa-users fa-2x text-muted"></i>
                                    <div class="text-muted mt-3">+46% Clients</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="block block-rounded block-mode-loading-oneui">
                        <div class="block-header">
                            <h3 class="block-title">Sales</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option">
                                    <i class="si si-settings"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content p-0 bg-body-light text-center">
                            <div class="pt-3" style="height: 360px;"><canvas class="js-chartjs-dashboard-sales"></canvas></div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push text-center py-3">
                                <div class="col-6 col-xl-3">
                                    <i class="fab fa-wordpress fa-2x text-muted"></i>
                                    <div class="text-muted mt-3">+20% Themes</div>
                                </div>
                                <div class="col-6 col-xl-3">
                                    <i class="fa fa-font fa-2x text-muted"></i>
                                    <div class="text-muted mt-3">+25% Fonts</div>
                                </div>
                                <div class="col-6 col-xl-3">
                                    <i class="fa fa-archive fa-2x text-muted"></i>
                                    <div class="text-muted mt-3">-10% Icons</div>
                                </div>
                                <div class="col-6 col-xl-3">
                                    <i class="fa fa-paint-brush fa-2x text-muted"></i>
                                    <div class="text-muted mt-3">+8% Graphics</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-deck">
                <div class="col-lg-6">
                    <div class="block block-mode-loading-oneui">
                        <div class="block-header border-bottom">
                            <h3 class="block-title">Latest Customers</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option">
                                    <i class="si si-settings"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm mb-0">
                                <thead class="thead-dark">
                                <tr class="text-uppercase">
                                    <th class="font-w700" style="width: 80px;">ID</th>
                                    <th class="d-none d-sm-table-cell font-w700 text-center" style="width: 100px;">Photo</th>
                                    <th class="font-w700">Name</th>
                                    <th class="d-none d-sm-table-cell font-w700 text-center" style="width: 80px;">Orders</th>
                                    <th class="font-w700 text-center" style="width: 60px;"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <span class="font-w600">#01368</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <img class="img-avatar img-avatar32" src="avatar13.html" alt="">
                                    </td>
                                    <td class="font-w600">
                                        Justin Hunt                                </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <a class="link-fx font-w600" href="javascript:void(0)">5</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">#01368</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <img class="img-avatar img-avatar32" src="{{$public}}/jpg/avatar7.jpg" alt="">
                                    </td>
                                    <td class="font-w600">
                                        Judy Ford                                </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <a class="link-fx font-w600" href="javascript:void(0)">14</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">#01368</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <img class="img-avatar img-avatar32" src="{{$public}}/jpg/avatar14.jpg" alt="">
                                    </td>
                                    <td class="font-w600">
                                        Carl Wells                                </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <a class="link-fx font-w600" href="javascript:void(0)">15</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">#01368</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <img class="img-avatar img-avatar32" src="{{$public}}/jpg/avatar4.jpg" alt="">
                                    </td>
                                    <td class="font-w600">
                                        Judy Ford                                </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <a class="link-fx font-w600" href="javascript:void(0)">36</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">#01368</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <img class="img-avatar img-avatar32" src="{{$public}}/jpg/avatar10.jpg" alt="">
                                    </td>
                                    <td class="font-w600">
                                        Jose Mills                                </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <a class="link-fx font-w600" href="javascript:void(0)">3</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">#01368</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <img class="img-avatar img-avatar32" src="{{$public}}/jpg/avatar8.jpg" alt="">
                                    </td>
                                    <td class="font-w600">
                                        Carol Ray                                </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <a class="link-fx font-w600" href="javascript:void(0)">1</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">#01368</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <img class="img-avatar img-avatar32" src="avatar9.html" alt="">
                                    </td>
                                    <td class="font-w600">
                                        Jeffrey Shaw                                </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <a class="link-fx font-w600" href="javascript:void(0)">12</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="block block-mode-loading-oneui">
                        <div class="block-header border-bottom">
                            <h3 class="block-title">Latest Orders</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option">
                                    <i class="si si-settings"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm mb-0">
                                <thead class="thead-dark">
                                <tr class="text-uppercase">
                                    <th class="font-w700">ID</th>
                                    <th class="d-none d-sm-table-cell font-w700">Date</th>
                                    <th class="font-w700">State</th>
                                    <th class="d-none d-sm-table-cell font-w700 text-right" style="width: 120px;">Price</th>
                                    <th class="font-w700 text-center" style="width: 60px;"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <span class="font-w600">#07835</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-muted">today</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-warning">Pending..</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right">
                                        $999,99
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">#07834</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-muted">today</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-warning">Pending..</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right">
                                        $2.299,00
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">#07833</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-muted">today</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right">
                                        $1200,00
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">#07832</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-muted">today</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-danger">Cancelled</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right">
                                        $399,00
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">#07831</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-muted">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right">
                                        $349,00
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">#07830</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-muted">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right">
                                        $999,00
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">#07829</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-muted">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right">
                                        $39,99
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">#07828</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-muted">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right">
                                        $499,00
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">#07827</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-muted">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right">
                                        $325,00
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer id="page-footer" class="bg-body-light">
        <div class="content py-3">
            <div class="row font-size-sm">
                <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                </div>
                <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                    <a class="font-w600" href="https://1.envato.market/xWy" target="_blank">OneUI 4.2</a> &copy; <span data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade" id="one-modal-apps" tabindex="-1" role="dialog" aria-labelledby="one-modal-apps" aria-hidden="true">
        <div class="modal-dialog modal-dialog-top modal-sm" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Apps</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row gutters-tiny">
                            <div class="col-6">
                                <a class="block block-rounded block-themed bg-default" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-speedometer fa-2x text-white-75"></i>
                                        <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                            CRM
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="block block-rounded block-themed bg-danger" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-rocket fa-2x text-white-75"></i>
                                        <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                            Products
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="block block-rounded block-themed bg-success mb-0" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-plane fa-2x text-white-75"></i>
                                        <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                            Sales
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="block block-rounded block-themed bg-warning mb-0" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-wallet fa-2x text-white-75"></i>
                                        <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                            Payments
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{$public}}/js/oneui.core.min-4.2.js"></script>
<script src="{{$public}}/js/oneui.app.min-4.2.js"></script>
<script src="{{$public}}/js/chart.bundle.min.js"></script>
<script src="{{$public}}/js/be_pages_dashboard.min.js"></script>
</body>

<!-- Mirrored from demo.pixelcave.com/oneui-remastered/be_pages_dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Apr 2019 08:09:32 GMT -->
</html>
