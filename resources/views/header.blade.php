<header id="site-header" class="main-header tp_header">
    <div class="container">
        <div class="header-top wrap-flex-align">
            <div class="wrap-logo hidden-xs hidden-sm">
                <a href="/" title="Logo">
                    <img style="max-width: 120px" alt="Logo" src="https://img.freepik.com/premium-vector/shoes-shop-logo-template-design_316488-452.jpg" />
                </a>
            </div>
            <div class="hidden-xs hidden-sm">
                <div id="nav-menu">
                    <nav role="navigation" class="main-nav-menu">
                        <ul class="menu__list menu__list--top tp_menu">
                            {{-- <li class="menu__item mega tp_menu_item"><a href="/giay-nike-pc569762.html"
                                    title="Giày Nike" class="menu__link">Giày Nike<span
                                        class="nav-next"><label></label></span> </a>
                                        
                                        <div class="menu__content">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="menu-flex">
                                                        <ul class="menu__list menu__list--second">
                                                            <h2 class="hidden-md hidden-lg h2-menu">Giày Nike</h2>
                                                            <li class="nav-back nav-back-c hidden-md hidden-lg"><a
                                                                    href="#">Back<span></span></a></li>
                                                            <li class="menu__item third ">
                                                                <a href="/nike-jordan-pc569807.html"
                                                                    class="menu__link">Nike Jordan </a>
                                                            </li>
                                                            <li class="menu__item third ">
                                                                <a href="/nike-low-pc569808.html"
                                                                    class="menu__link">Nike Low </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </li> --}}
                            {!! \App\Helpers\Helper::menus($menus) !!}

                           
                            <li class="menu__item mega tp_menu_item"><a
                                    href="/tin-tuc-chung-nc103834.html" title="Tin tức chung"
                                    class="menu__link">Tin tức </a></li>
                            <li class="menu__item mega tp_menu_item"><a href="/lien-he" title="Liên hệ"
                                    class="menu__link">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="header-wrap-icon">
                <div class="search-box hidden-sm hidden-xs wpo-wrapper-search hidden">
                    <form action="/search"
                        class="searchform searchform-categoris ultimate-search navbar-form">

                        <div class="wpo-search-inner form-group">
                            <input name="q" maxlength="40" autocomplete="off"
                                class="searchinput input-search search-input" type="text"
                                size="20" placeholder="Tìm kiếm sản phẩm">

                        </div>
                        <button type="submit" class="icon-search btn">
                            <span class="search-menu" aria-hidden="true">
                                <img src="https://web.nvnstatic.net/tp/T0320/img/icon-header-3.png?v=3"
                                    alt="carts">
                            </span>
                        </button>
                    </form>
                </div>
                <div class="group-icon">
                    <div class="col-sm-12 col-xs-12 hidden-lg hidden-md header_mobile">
                        <div class="row">
                            <div class="col-sm-4 col-xs-3 group-icon iconLogo">
                                <img src="https://web.nvnstatic.net/tp/T0320/img/menu-bar.png?v=3"
                                    alt="menu bar">
                            </div>
                            <div class="col-sm-4 col-xs-6" style="text-align: center;">
                                <div class="wrap-logo">
                                    <a href="/" title="Logo">
                                        <img style="max-width: 130px" alt="Logo"
                                            src="https://www.shutterstock.com/image-vector/shoes-shop-logo-vector-store-260nw-1718721763.jpg" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-3 group-icon iconSearch">
                                <span id="site-cart-handle" class="icon-cart" aria-label="Open cart"
                                    title="Giỏ hàng">
                                    <a href="/carts">
                                        <span class="cart-menu" aria-hidden="true">
                                            <span class="count-holder">
                                                <span class="count">3</span>
                                            </span>
                                        </span>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>