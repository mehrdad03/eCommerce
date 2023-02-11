<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="/admin/assets/imgs/theme/favicon.svg">
    <link href="/admin/assets/css/style.css?v=1.0.0" rel="stylesheet">
    <title>Ecom - Marketplace Dashboard Template</title>
    @livewireStyles
</head>
<body>
<div class="screen-overlay"></div>

<aside class="navbar-aside" id="offcanvas_aside">
    <div class="aside-top"><a class="brand-wrap" href="/admin/index"><img class="logo" src="//assets/imgs/theme/logo.svg" alt="Evara Dashboard">
        </a>
        <div>
            <button class="btn btn-icon btn-aside-minimize"><i class="text-muted material-icons md-menu_open"></i>
            </button>
        </div>
    </div>
    <nav>
        <ul class="menu-aside">
            <li class="menu-item active"><a class="menu-link" href="/admin/index"><i class="icon material-icons md-home"></i>
                    <span class="text">Dashboard</span></a></li>
            <li class="menu-item has-submenu"><a class="menu-link" href="#">
                    <i class="icon material-icons md-shopping_bag"></i>
                    <span class="text">Products</span></a>
                <div class="submenu">
                    <a href="/admin/products/index">Product List</a><a
                        href="/admin/products/add">Product grid</a>
                    <a href="/admin/products/category">Product grid 2</a>

                </div>
            </li>

            <li class="menu-item has-submenu"><a class="menu-link" href="page-orders-1.html"><i
                        class="icon material-icons md-shopping_cart"></i><span class="text">Orders</span></a>
                <div class="submenu"><a href="/admin/orders/index">Order list 1</a><a href="/admin/orders/invoice">Order
                        list 2</a><a href="/admin/orders/tracking">Order detail</a><a href="/admin/orders/detail">Order tracking</a>
                </div>
            </li>

            <li class="menu-item has-submenu"><a class="menu-link" href="page-orders-1.html"><i
                        class="icon material-icons md-shopping_cart"></i><span class="text">colors</span></a>
                <div class="submenu"><a href="/admin/colors/index">Order list 1</a><a href="/admin/colors/create">Order
                        list 2</a><a href="/admin/colors/edit">Order detail</a>
                </div>
            </li>
            <li class="menu-item has-submenu"><a class="menu-link" href="page-orders-1.html"><i
                        class="icon material-icons md-shopping_cart"></i><span class="text">sizes</span></a>
                <div class="submenu"><a href="/admin/sizes/index">Order list 1</a><a href="/admin/sizes/create">Order
                        list 2</a><a href="/admin/sizes/edit">Order detail</a>
                </div>
            </li>
            <li class="menu-item has-submenu"><a class="menu-link" href="page-orders-1.html"><i
                        class="icon material-icons md-shopping_cart"></i><span class="text">brands</span></a>
                <div class="submenu"><a href="/admin/brands/index">Order list 1</a><a href="/admin/brands/create">Order
                        list 2</a><a href="/admin/brands/edit">Order detail</a>
                </div>
            </li>




            <li class="menu-item has-submenu"><a class="menu-link" href="page-sellers-cards.html"><i
                        class="icon material-icons md-store"></i><span class="text">Sellers</span></a>
                <div class="submenu"><a href="/admin/sellers/card">Sellers cards</a><a
                        href="/admin/sellers/profile">Sellers list</a></div>
            </li>

{{--            <li class="menu-item has-submenu"><a class="menu-link" href="page-form-product-1.html"><i--}}
{{--                        class="icon material-icons md-add_box"></i><span class="text">Add product</span></a>--}}
{{--                <div class="submenu"><a href="page-form-product-1.html">Add product 1</a><a--}}
{{--                        href="page-form-product-2.html">Add product 2</a><a href="page-form-product-3.html">Add product--}}
{{--                        3</a><a href="page-form-product-4.html">Add product 4</a></div>--}}
{{--            </li>--}}

            <li class="menu-item has-submenu"><a class="menu-link" href="page-transactions-1.html"><i
                        class="icon material-icons md-monetization_on"></i><span class="text">Transactions</span></a>
                <div class="submenu"><a href="/admin/transactions/detail">Transaction 1</a><a
                        href="/admin/transactions/index">Transaction 2</a>
                </div>
            </li>

            <li class="menu-item has-submenu"><a class="menu-link" href="#"><i
                        class="icon material-icons md-person"></i><span class="text">profile</span></a>
                <div class="submenu"><a href="/admin/profile/index">User login</a></div>
            </li>

            <li class="menu-item"><a class="menu-link" href="/admin/review/index"><i
                        class="icon material-icons md-comment"></i><span class="text">Reviews</span></a></li>
            <li class="menu-item"><a class="menu-link" href="#"><i
                        class="icon material-icons md-stars"></i><span class="text">Brands</span></a></li>
            <li class="menu-item"><a class="menu-link" disabled="" href="#"><i
                        class="icon material-icons md-pie_chart"></i><span class="text">Statistics</span></a></li>
        </ul>
        <hr>
        <ul class="menu-aside">
            <li class="menu-item has-submenu"><a class="menu-link" href="#"><i
                        class="icon material-icons md-settings"></i><span class="text">Settings</span></a>
                <div class="submenu"><a href="page-settings-1.html">Setting sample 1</a><a href="page-settings-2.html">Setting
                        sample 2</a></div>
            </li>
            <li class="menu-item"><a class="menu-link" href="page-blank.html"><i
                        class="icon material-icons md-local_offer"></i><span class="text"> Starter page</span></a></li>
        </ul>
    </nav>
</aside>
<main class="main-wrap">
    <livewire:admin.layouts.header/>

    @yield('content')

    {{--{{$slot}}--}}
    <livewire:admin.layouts.footer/>

</main>

<script src="/admin/assets/js/vendors/jquery-3.6.0.min.js"></script>
<script src="/admin/assets/js/vendors/bootstrap.bundle.min.js"></script>
<script src="/admin/assets/js/vendors/select2.min.js"></script>
<script src="/admin/assets/js/vendors/perfect-scrollbar.js"></script>
<script src="/admin/assets/js/vendors/jquery.fullscreen.min.js"></script>
<script src="/admin/assets/js/vendors/chart.js"></script>
<script src="/admin/assets/js/main.js?v=1.0.0"></script>
<script src="/admin/assets/js/custom-chart.js" type="text/javascript"></script>
@livewireScripts
</body>
</html>
