<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Otika - Admin Dashboard Template</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('assets/img/favicon.ico') }}' />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn">
                                <i data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                        <li>
                            <form class="form-inline mr-auto">
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                        data-width="200">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
                            <span class="badge headerBadge1">
                                1 </span> </a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                            <div class="dropdown-header">
                                Messages
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-message">
                                <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                        <img alt="image" src="{{ asset('assets/img/users/user-2.png') }}"
                                            class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                                            Smith</span> <span class="time messege-text">Client Requirements</span>
                                        <span class="time">2 Days Ago</span>
                                    </span>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                            <div class="dropdown-header">
                                Notifications
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                                <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-icon bg-danger text-white"> <i
                                            class="fas fa-exclamation-triangle"></i>
                                    </span> <span class="dropdown-item-desc"> Low disk space. Let's
                                        clean it! <span class="time">17 Hours Ago</span>
                                    </span>
                                </a>
                                <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-icon bg-info text-white"> <i
                                            class="fas
												fa-bell"></i>
                                    </span> <span class="dropdown-item-desc"> Welcome to Otika
                                        template! <span class="time">Yesterday</span>
                                    </span>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                                src="{{ asset('assets/img/user.png') }}" class="user-img-radious-style"> <span
                                class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <div class="dropdown-title">Hello Sarah Smith</div>

                            <div class="dropdown-divider"></div>
                            <a href="" class="dropdown-item has-icon text-danger"> <i
                                    class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html"> <img alt="image" src="{{ asset('assets/img/logo.png') }}"
                                class="header-logo" />
                            <span class="logo-name">Otika</span>
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>
                        <li class="dropdown active">
                            <a href="{{ route('dashboard') }}" class="nav-link"><i
                                    data-feather="monitor"></i><span>Dashboard</span></a>
                        </li>
                        <li class="menu-header">Inventory</li>

                        <li><a class="nav-link" href="{{ route('products.index') }}">
                                <i data-feather="file"></i>
                                <span>Products</span>
                            </a>
                        </li>
                        <li><a class="nav-link" href="{{ route('sizes.index') }}">
                                <i data-feather="file"></i>
                                <span>Size</span>
                            </a>
                        </li>
                        <li><a class="nav-link" href="{{ route('categories.index') }}">
                                <i data-feather="file"></i>
                                <span>Categories</span>
                            </a>
                        </li>
                        <li><a class="nav-link" href="{{ route('brands.index') }}">
                                <i data-feather="file"></i>
                                <span>Brands</span>
                            </a>
                        </li>
                        <li><a class="nav-link" href="{{ route('colours.index') }}">
                                <i data-feather="file"></i>
                                <span>Colours</span>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="briefcase"></i><span>Widgets</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="widget-chart.html">Chart Widgets</a></li>
                                <li><a class="nav-link" href="widget-data.html">Data Widgets</a></li>
                            </ul>
                        </li>
                        {{-- <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="command"></i><span>Apps</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="chat.html">Chat</a></li>
                                <li><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                                <li><a class="nav-link" href="blog.html">Blog</a></li>
                                <li><a class="nav-link" href="calendar.html">Calendar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="mail"></i><span>Email</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="email-inbox.html">Inbox</a></li>
                                <li><a class="nav-link" href="email-compose.html">Compose</a></li>
                                <li><a class="nav-link" href="email-read.html">read</a></li>
                            </ul>
                        </li>
                        <li class="menu-header">UI Elements</li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="copy"></i><span>Basic
                                    Components</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="alert.html">Alert</a></li>
                                <li><a class="nav-link" href="badge.html">Badge</a></li>
                                <li><a class="nav-link" href="breadcrumb.html">Breadcrumb</a></li>
                                <li><a class="nav-link" href="buttons.html">Buttons</a></li>
                                <li><a class="nav-link" href="collapse.html">Collapse</a></li>
                                <li><a class="nav-link" href="dropdown.html">Dropdown</a></li>
                                <li><a class="nav-link" href="checkbox-and-radio.html">Checkbox &amp; Radios</a></li>
                                <li><a class="nav-link" href="list-group.html">List Group</a></li>
                                <li><a class="nav-link" href="media-object.html">Media Object</a></li>
                                <li><a class="nav-link" href="navbar.html">Navbar</a></li>
                                <li><a class="nav-link" href="pagination.html">Pagination</a></li>
                                <li><a class="nav-link" href="popover.html">Popover</a></li>
                                <li><a class="nav-link" href="progress.html">Progress</a></li>
                                <li><a class="nav-link" href="tooltip.html">Tooltip</a></li>
                                <li><a class="nav-link" href="flags.html">Flag</a></li>
                                <li><a class="nav-link" href="typography.html">Typography</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="shopping-bag"></i><span>Advanced</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="avatar.html">Avatar</a></li>
                                <li><a class="nav-link" href="card.html">Card</a></li>
                                <li><a class="nav-link" href="modal.html">Modal</a></li>
                                <li><a class="nav-link" href="sweet-alert.html">Sweet Alert</a></li>
                                <li><a class="nav-link" href="toastr.html">Toastr</a></li>
                                <li><a class="nav-link" href="empty-state.html">Empty State</a></li>
                                <li><a class="nav-link" href="multiple-upload.html">Multiple Upload</a></li>
                                <li><a class="nav-link" href="pricing.html">Pricing</a></li>
                                <li><a class="nav-link" href="tabs.html">Tab</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link" href="blank.html"><i data-feather="file"></i><span>Blank
                                    Page</span></a></li>
                        <li class="menu-header">Otika</li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="layout"></i><span>Forms</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="basic-form.html">Basic Form</a></li>
                                <li><a class="nav-link" href="forms-advanced-form.html">Advanced Form</a></li>
                                <li><a class="nav-link" href="forms-editor.html">Editor</a></li>
                                <li><a class="nav-link" href="forms-validation.html">Validation</a></li>
                                <li><a class="nav-link" href="form-wizard.html">Form Wizard</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="chevrons-down"></i><span>Multilevel</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Menu 1</a></li>
                                <li class="dropdown">
                                    <a href="#" class="has-dropdown">Menu 2</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Child Menu 1</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="has-dropdown">Child Menu 2</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Child Menu 1</a></li>
                                                <li><a href="#">Child Menu 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"> Child Menu 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                </aside>
            </div>
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    @yield('content')
                </section>
                <div class="settingSidebar">
                    <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                    </a>
                    <div class="settingSidebar-body ps-container ps-theme-default">
                        <div class=" fade show active">
                            <div class="setting-panel-header">Setting Panel
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Select Layout</h6>
                                <div class="selectgroup layout-color w-50">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="1"
                                            class="selectgroup-input-radio select-layout" checked>
                                        <span class="selectgroup-button">Light</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="2"
                                            class="selectgroup-input-radio select-layout">
                                        <span class="selectgroup-button">Dark</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                                <div class="selectgroup selectgroup-pills sidebar-color">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="1"
                                            class="selectgroup-input select-sidebar">
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="2"
                                            class="selectgroup-input select-sidebar" checked>
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Color Theme</h6>
                                <div class="theme-setting-options">
                                    <ul class="choose-theme list-unstyled mb-0">
                                        <li title="white" class="active">
                                            <div class="white"></div>
                                        </li>
                                        <li title="cyan">
                                            <div class="cyan"></div>
                                        </li>
                                        <li title="black">
                                            <div class="black"></div>
                                        </li>
                                        <li title="purple">
                                            <div class="purple"></div>
                                        </li>
                                        <li title="orange">
                                            <div class="orange"></div>
                                        </li>
                                        <li title="green">
                                            <div class="green"></div>
                                        </li>
                                        <li title="red">
                                            <div class="red"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox"
                                            class="custom-switch-input" id="mini_sidebar_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Mini Sidebar</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox"
                                            class="custom-switch-input" id="sticky_header_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Sticky Header</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                    <i class="fas fa-undo"></i> Restore Default
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    <a href="templateshub.net">Templateshub</a></a>
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
    <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/index.js') }}"></script>
    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>
