<!DOCTYPE html>
<html class="rtl" lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/template/favicon.svg">
    <link href="assets/css/style.css?v=2.1" rel="stylesheet">
    <title>Ecom - Ecom Marketplace Template</title>
{{--    @livewireStyles--}}
</head>
<body>
{{--<livewire:header/>--}}

{{--{{$slot}}--}}

{{--<livewire:footer/>--}}
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="text-center"><img class="mb-10" src="assets/imgs/template/favicon.svg" alt="Ecom">
                <div class="preloader-dots"></div>
            </div>
        </div>
    </div>
</div>
<div class="topbar">
    <div class="container-topbar">
        <div class="menu-topbar-left d-none d-xl-block">
            <ul class="nav-small">
                <li><a class="font-xs" href="page-about-us.html">About Us</a></li>
                <li><a class="font-xs" href="page-careers.html">Careers</a></li>
                <li><a class="font-xs" href="page-register.html">Open a shop</a></li>
            </ul>
        </div>
        <div class="info-topbar text-center d-none d-xl-block"><span class="font-xs color-brand-3">Free shipping for all orders over</span><span
                class="font-sm-bold color-success"> $75.00</span></div>
        <div class="menu-topbar-right"><span class="font-xs color-brand-3">Need help? Call Us:</span><span
                class="font-sm-bold color-success"> + 1800 900</span>
            <div class="dropdown dropdown-language">
                <button class="btn dropdown-toggle" id="dropdownPage" type="button" data-bs-toggle="dropdown"
                        aria-expanded="true" data-bs-display="static"><span
                        class="dropdown-right font-xs color-brand-3"><img src="assets/imgs/template/en.svg" alt="Ecom"> English</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownPage" data-bs-popper="static">
                    <li><a class="dropdown-item" href="#"><img src="assets/imgs/template/flag-en.svg" alt="Ecom">
                            English</a></li>
                    <li><a class="dropdown-item" href="#"><img src="assets/imgs/template/flag-fr.svg" alt="Ecom">
                            Français</a></li>
                    <li><a class="dropdown-item" href="#"><img src="assets/imgs/template/flag-es.svg" alt="Ecom">
                            Español</a></li>
                    <li><a class="dropdown-item" href="#"><img src="assets/imgs/template/flag-pt.svg" alt="Ecom">
                            Português</a></li>
                    <li><a class="dropdown-item" href="#"><img src="assets/imgs/template/flag-cn.svg" alt="Ecom"> 中国人</a>
                    </li>
                </ul>
            </div>
            <div class="dropdown dropdown-language">
                <button class="btn dropdown-toggle" id="dropdownPage2" type="button" data-bs-toggle="dropdown"
                        aria-expanded="true" data-bs-display="static"><span
                        class="dropdown-right font-xs color-brand-3">USD</span></button>
                <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownPage2"
                    data-bs-popper="static">
                    <li><a class="dropdown-item active" href="#">USD</a></li>
                    <li><a class="dropdown-item" href="#">EUR</a></li>
                    <li><a class="dropdown-item" href="#">AUD</a></li>
                    <li><a class="dropdown-item" href="#">SGP</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

{{--@livewireScripts--}}
</body>
</html>
