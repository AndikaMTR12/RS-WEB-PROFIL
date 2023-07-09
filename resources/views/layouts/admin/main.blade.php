<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>{{ $title }}</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/admin/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
    <!-- Js -->
    <!--
    --- Head Part - Use Jquery anywhere at page.
    --- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
    -->
    <script>
        (function(w, d, u) {
            w.readyQ = [];
            w.bindReadyQ = [];

            function p(x, y) {
                if (x == "ready") {
                    w.bindReadyQ.push(y);
                } else {
                    w.readyQ.push(x);
                }
            };
            var a = {
                ready: p,
                bind: p
            };
            w.$ = w.jQuery = function(f) {
                if (f === d || f === u) {
                    return a
                } else {
                    p(f)
                }
            }
        })(window, document)
    </script>
</head>

<body class="light">
    <!-- Pre loader -->
    <div id="loader" class="loader">
        <div class="plane-container">
            <div class="preloader-wrapper small active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="app">
        <aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
            <section class="sidebar">
                <div class="w-80px mt-3 mb-3 ml-3">
                    <img src="assets/admin/img/basic/logo.png" alt="">
                </div>
                <div class="relative">
                    <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false" aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm absolute fab-right-bottom fab-top btn-primary shadow1 ">
                        <i class="icon icon-cogs"></i>
                    </a>
                    <div class="user-panel p-3 light mb-2">
                        <div>
                            <div class="float-left image">
                                <img class="user_avatar" src="assets/admin/img/dummy/u2.png" alt="User Image">
                            </div>
                            <div class="float-left info">
                                <h6 class="font-weight-light mt-2 mb-1">{{ auth()->user()->username }}</h6>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="collapse multi-collapse" id="userSettingsCollapse">
                            <div class="list-group mt-3 shadow">
                                <a href="index.html" class="list-group-item list-group-item-action ">
                                    <i class="mr-2 icon-umbrella text-blue"></i>Profile
                                </a>
                                <a href="#" class="list-group-item list-group-item-action"><i class="mr-2 icon-cogs text-yellow"></i>Settings</a>
                                <a href="#" class="list-group-item list-group-item-action"><i class="mr-2 icon-security text-purple"></i>Change Password</a>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="sidebar-menu">
                    <li class="header"><strong>MAIN NAVIGATION</strong></li>
                    <li class="treeview"><a href="/dashboard">
                            <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="treeview"><a href="/berita">
                            <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Berita</span>
                        </a>
                    </li>
                    <li class="treeview"><a href="/publikasi">
                            <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Publikasi</span>
                        </a>
                    </li>
                </ul>
            </section>
        </aside>
        <!--Sidebar End-->
        <div class="has-sidebar-left">
            <div class="pos-f-t">
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
                        <div class="search-bar">
                            <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text" placeholder="start typing...">
                        </div>
                        <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
                    </div>
                </div>
            </div>
            <div class="sticky">
                <div class="navbar navbar-expand navbar-dark d-flex justify-content-between bd-navbar blue accent-3">
                    <div class="relative">
                        <a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle">
                            <i></i>
                        </a>
                    </div>
                    <!--Top Menu Start -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Notifications -->
                            <li class="dropdown custom-dropdown notifications-menu">
                                <a href="#" class=" nav-link" data-toggle="dropdown" aria-expanded="false">
                                    <i class="icon-notifications "></i>
                                    <span class="badge badge-danger badge-mini rounded-circle">4</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="header">You have 10 notifications</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-data_usage text-success"></i> 5 new members joined today
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-data_usage text-danger"></i> 5 new members joined today
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-data_usage text-yellow"></i> 5 new members joined today
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer p-2 text-center"><a href="#">View all</a></li>
                                </ul>
                            </li>
                            <!-- User Account-->
                            <li class="dropdown custom-dropdown user user-menu ">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <img src="assets/admin/img/dummy/u8.png" class="user-image" alt="User Image">
                                    <i class="icon-more_vert "></i>
                                </a>
                                <div class="dropdown-menu p-4 dropdown-menu-right">
                                    <div class="row box justify-content-between my-4">
                                        <div class="col">
                                            <a href="#">
                                                <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                                                <div class="pt-1">Apps</div>
                                            </a>
                                        </div>
                                        <div class="col"><a href="#">
                                                <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                                                <div class="pt-1">Profile</div>
                                            </a></div>
                                        <div class="col">
                                            <a href="#">
                                                <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                                                <div class="pt-1">Settings</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row box justify-content-between my-4">
                                        <div class="col">
                                            <a href="#">
                                                <i class="icon-star light-green lighten-1 avatar  r-5"></i>
                                                <div class="pt-1">Favourites</div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="#">
                                                <i class="icon-save2 orange accent-1 avatar  r-5"></i>
                                                <div class="pt-1">Saved</div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="#">
                                                <i class="icon-perm_data_setting grey darken-3 avatar  r-5"></i>
                                                <div class="pt-1">Settings</div>
                                            </a>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row box justify-content-between my-4">
                                        <div class="col">
                                            <a href="#">
                                                <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                                                <div class="pt-1">Apps</div>
                                            </a>
                                        </div>
                                        <div class="col"><a href="#">
                                                <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                                                <div class="pt-1">Profile</div>
                                            </a></div>
                                        <div class="col">
                                            <a href="#">
                                                <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                                                <div class="pt-1">Settings</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page has-sidebar-left height-full">
            <header class="blue accent-3 relative nav-sticky">
                <div class="container-fluid text-white">
                    <div class="row p-t-b-10 ">
                        <div class="col">
                            <h4>
                                {{ $title }}
                            </h4>
                        </div>
                    </div>
                </div>
            </header>
            <div class="container-fluid relative animatedParent animateOnce">
                @yield('container')
            </div>
        </div>
        <div class="control-sidebar-bg shadow white fixed"></div>
    </div>
    <!--/#app -->
    <script src="assets/admin/js/app.js"></script>




    <!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
    <script>
        (function($, d) {
            $.each(readyQ, function(i, f) {
                $(f)
            });
            $.each(bindReadyQ, function(i, f) {
                $(d).bind("ready", f)
            })
        })(jQuery, document)
    </script>
</body>

</html>