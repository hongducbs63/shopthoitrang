<!-- T0320 -->
<!DOCTYPE html>
<html lang="vi-VN" data-nhanh.vn-template="T0320">
<head>
@include('head')
</head>

<body class="tp_background tp_text_color">

    <div id="wrapper_sec">
    
        <div id="header__desktop">
            <div id="topbar" class="topbar hidden-sm hidden-xs tp_header">
                <div class="container">
                    <div class="row">
                        <div class="topbar-left col-md-4">
                            <ul>
                                <li class="header-hotline"><a href="tel:" class="load-scale">Hotline: 0325616898
                                        <b></b></a><b><a href="tel:" style="color: #cc0101;"></a></b>
                                </li>
                            </ul>
                        </div>
                        <div class="topbar-right col-md-8">
                            <div class="header-wrap-icon">
                                <div class="search-box hidden-sm hidden-xs wpo-wrapper-search hidden">
                                    <form id="searchauto" action="/search"
                                        class="searchform searchform-categoris ultimate-search navbar-form">

                                        <div class="wpo-search-inner form-group">
                                            <input id="inputSearchAuto" name="q" maxlength="40"
                                                autocomplete="off" class="searchinput input-search search-input"
                                                type="text" size="20" placeholder="Tìm kiếm sản phẩm">
                                        </div>
                                        <button type="submit" class="icon-search btn" id="search-header-btn">
                                            <span class="search-menu" aria-hidden="true">
                                                <img src="https://web.nvnstatic.net/tp/T0320/img/icon-header-3.png?v=3"
                                                    alt="cart">
                                            </span>
                                        </button>
                                    </form>
                                </div>
                                <div class="group-icon right_header">
                                    <div class="hidden-xs hidden-sm group-icon">
                                        <div id="site-search-handle" class="icon-search" aria-label="Open search"
                                            title="Tìm kiếm">
                                            <div class="header_search search_form">
                                                <form class="input-group search-bar search_form" action="/search"
                                                    method="get" role="search">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary icon-fallback-text">
                                                            <i class="fas fa-search"></i>
                                                        </button>
                                                    </span>
                                                    <input type="search" name="q" value=""
                                                        placeholder="Tìm kiếm sản phẩm"
                                                        class="input-group-field st-default-search-input search-text auto-search">
                                                </form>
                                                <div class="searchFolding searchFolding-pc"></div>
                                            </div>
                                        </div>
                                        <div id="site-account-handle" class="icon-account" aria-label="Open account"
                                            title="Tài khoản">
                                            <a href="/user/signin" title="Đăng nhập"><span class="account-menu"
                                                    aria-hidden="true"><img
                                                        src="https://web.nvnstatic.net/tp/T0320/img/icon-header-1.png?v=3"
                                                        alt="cart">Đăng nhập</span></a><a href="/user/signup"
                                                title="Đăng ký"><span class="account-menu" aria-hidden="true">Đăng
                                                    ký</span></a>
                                        </div>
                                        @include('giohang')
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('header')
        </div>

    </div>

    <section class="bannercategory">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                    <div class="box-sport-content mb-3">
                        <a href="/giay-adidas-pc569763.html">
                            <img class="lazyload" data-sizes="auto"
                                src="https://web.nvnstatic.net/img/lazyLoading.gif?v=2"
                                data-src="https://pos.nvncdn.net/5a10ca-97757/bn/20220316_maOThyFeQVCy9WgImsF1tmZK.jpg"
                                title="Giày Adidas" alt="Giày Adidas">
                        </a>
                        <a href="/giay-adidas-pc569763.html" class="more">Giày Adidas</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                    <div class="box-sport-content mb-3">
                        <a href="javascript:void(0);">
                            <img class="lazyload" data-sizes="auto"
                                src="https://web.nvnstatic.net/img/lazyLoading.gif?v=2"
                                data-src="https://pos.nvncdn.net/5a10ca-97757/bn/20220316_VtbDb9uV0gGgwqKgFgZpPZ3p.jpg"
                                title="Giày Nike" alt="Giày Nike">
                        </a>
                        <a href="javascript:void(0);" class="more">Giày Nike</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                    <div class="box-sport-content mb-3">
                        <a href="javascript:void(0);">
                            <img class="lazyload" data-sizes="auto"
                                src="https://web.nvnstatic.net/img/lazyLoading.gif?v=2"
                                data-src="https://pos.nvncdn.net/5a10ca-97757/bn/20220316_V7cBJz6hxjJNuxzlKswECtjz.jpg"
                                title="Phụ kiện quần áo" alt="Phụ kiện quần áo">
                        </a>
                        <a href="javascript:void(0);" class="more">Phụ kiện quần áo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-products-hight home-page clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-main text-center">
                        <h1 class="title-hd"><a href="#">Sản phẩm nổi bật</a></h1>
                        <span class="text-title">Khuyến mãi cuối tuần</span>
                    </div>
                </div>
            </div>
            <div class="list-menu-top text-center">
                <div class="tabs ">                  
                    @include('product.list')
                </div>
            </div>
        </div>
        <div class="col-xs-12 text-center mb-5">
            <a href="/product" class="btn tp_button xt-products">Xem thêm các sản phẩm khác</a>
        </div>
    </section>

    {{-- <section class="main-products-content">
    </section>
    <section id="loadcategory">
    </section> --}}



    <section class="main-news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-main text-center">
                        <h2 class="title-hd">
                            <a href="/news">TIN TỨC NỔI BẬT</a>
                        </h2>
                        <span class="text-title">Tin tức mới nhất và thú vị nhất</span>
                    </div>
                </div>
                <div class="col-md-7 hidden-xs hidden-sm">

                    <div class="box-news">
                        <div class="img-top">
                            <a href="/nike-adapt-bb-doi-giay-cong-nghe-den-tu-tuong-lai-n98709.html">
                                <img class="w-100"
                                    src="https://pos.nvncdn.net/5a10ca-97757/art/20220316_iDBb0JCM1rsdgVj4xPCm5O3a.jpg"
                                    alt=""></a>
                        </div>
                        <div class="date">
                            <span>16/03</span>
                            <span><b>2022</b></span>
                        </div>
                        <div class="text-bottom">
                            <h3><a href="/nike-adapt-bb-doi-giay-cong-nghe-den-tu-tuong-lai-n98709.html">NIKE ADAPT BB
                                    – ĐÔI GIÀY CÔNG NGHỆ ĐẾN TỪ TƯƠNG LAI</a></h3>
                            <p href="/nike-adapt-bb-doi-giay-cong-nghe-den-tu-tuong-lai-n98709.html"
                                class="title-category">Nike luôn khẳng định được vị thế của mình trong làng thời trang
                                giày khi liên tục đưa ra những mẫu giày thời trang độc đáo cũng như những mẫu giày công
                                nghệ cực đỉnh. Mới đây nhất chính là mẫu Nike Adapt BB với công nghệ tự thắt dây mới.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-5 col-xs-12 col-sm-12">
                    <div class="box-news-container">
                        <div class="row">
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <div class="box-news">
                                    <div class="img-top">
                                        <a
                                            href="/giai-ma-suc-hut-cua-doi-giay-co-dien-adidas-supercourt-x-blackpink-n98708.html">
                                            <img class="w-100 lazyload"
                                                src="https://web.nvnstatic.net/img/lazyLoading.gif?v=2"
                                                data-src="https://pos.nvncdn.net/5a10ca-97757/art/20220316_xzUSjmtnTZhF7VgHkcTrXiA3.jpg "
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="date">
                                        <span>16/03</span>
                                        <span><b>2022</b></span>
                                    </div>
                                    <div class="text-bottom">
                                        <h3><a
                                                href="/giai-ma-suc-hut-cua-doi-giay-co-dien-adidas-supercourt-x-blackpink-n98708.html">GIẢI
                                                MÃ SỨC HÚT CỦA ĐÔI GIÀY CỔ ĐIỂN ADIDAS SUPERCOURT X BLACKPINK</a>
                                        </h3>

                                        <p href="/tin-tuc-chung-nc103834.html" class="title-category">Dạo gần đây,
                                            Adidas cho ra mắt mẫu giày Adidas Supercourt kết hợp với Blackpink khiến
                                            những tín đồ thời trang điên đảo. Vậy lý do gì khiến đôi giày vô cùng đơn
                                            giản này lại “hot” đến vậy? Hãy cùng Deestore.vn tìm hiểu nhé.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <div class="box-news">
                                    <div class="img-top">
                                        <a
                                            href="/bo-suu-tap-dang-mong-doi-nhat-cua-adidas-home-of-classic-n98706.html">
                                            <img class="w-100 lazyload"
                                                src="https://web.nvnstatic.net/img/lazyLoading.gif?v=2"
                                                data-src="https://pos.nvncdn.net/5a10ca-97757/art/20220316_qFejW2uWJg3bv5BtgikYk0ys.jpg "
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="date">
                                        <span>16/03</span>
                                        <span><b>2022</b></span>
                                    </div>
                                    <div class="text-bottom">
                                        <h3><a
                                                href="/bo-suu-tap-dang-mong-doi-nhat-cua-adidas-home-of-classic-n98706.html">BỘ
                                                SƯU TẬP ĐÁNG MONG ĐỢI NHẤT CỦA ADIDAS – “HOME OF CLASSIC”</a>
                                        </h3>

                                        <p href="/tin-tuc-chung-nc103834.html" class="title-category">Có thể nói đây
                                            là một trong những BST được mong đợi và đáng chú ý của nhà Adidas trong năm
                                            2022. Bằng việc tung ra 10 mẫu giày với phong cách cực “đỉnh”, Adidas đã
                                            không hề làm các fan thất vọng.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <div class="box-news">
                                    <div class="img-top">
                                        <a href="/lieu-xu-huong-sneaker-nao-se-thong-tri-nam-2022-n98705.html">
                                            <img class="w-100 lazyload"
                                                src="https://web.nvnstatic.net/img/lazyLoading.gif?v=2"
                                                data-src="https://pos.nvncdn.net/5a10ca-97757/art/20220316_DvVxQ2FuX4MIP4vmI2LTyltS.png "
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="date">
                                        <span>16/03</span>
                                        <span><b>2022</b></span>
                                    </div>
                                    <div class="text-bottom">
                                        <h3><a href="/lieu-xu-huong-sneaker-nao-se-thong-tri-nam-2022-n98705.html">LIỆU
                                                XU HƯỚNG SNEAKER NÀO SẼ THỐNG TRỊ NĂM 2022</a>
                                        </h3>

                                        <p href="/tin-tuc-chung-nc103834.html" class="title-category">Nếu như năm
                                            2019 qua đi với những đôi “giày của bố” hay những đôi giày mang phong cách
                                            cổ điển làm khuynh đảo giới sneaker thì liệu 2022 sẽ là gì đây. Dựa vào nhận
                                            định của giám đốc điều hành Diadora – Enrico Polegato, Nia Jones – đồng sáng
                                            lập và Giám đốc sáng tạo của một thương hiệu sneaker nổi tiếng cũng như ứng
                                            dụng tìm kiếm thời trang Lyst đã đưa ra xu hướng sneaker năm 2022.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <div class="box-news">
                                    <div class="img-top">
                                        <a
                                            href="/nhung-lam-tuong-ma-hau-het-nguoi-viet-nam-van-nghi-ve-giay-authentic-n98704.html">
                                            <img class="w-100 lazyload"
                                                src="https://web.nvnstatic.net/img/lazyLoading.gif?v=2"
                                                data-src="https://pos.nvncdn.net/5a10ca-97757/art/20220316_TRS7IIj04ozEzixetR9adfIR.jpg "
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="date">
                                        <span>16/03</span>
                                        <span><b>2022</b></span>
                                    </div>
                                    <div class="text-bottom">
                                        <h3><a
                                                href="/nhung-lam-tuong-ma-hau-het-nguoi-viet-nam-van-nghi-ve-giay-authentic-n98704.html">NHỮNG
                                                LẦM TƯỞNG MÀ HẦU HẾT NGƯỜI VIỆT NAM VẪN NGHĨ VỀ GIÀY AUTHENTIC</a>
                                        </h3>

                                        <p href="/tin-tuc-chung-nc103834.html" class="title-category">Không thể phủ
                                            nhận được độ chịu chơi của những sneakerhead khi mạnh tay chi rất nhiều tiền
                                            cho những đôi giày chính hãng (hay còn được gọi là giày Auth). Tuy vậy, một
                                            số vẫn có những nhận định sai lầm về giày auth. Nhanhvn cũng đã gặp rất
                                            nhiều trường hợp khách hiểu lầm như vậy và phải giải thích lại. Từ những
                                            kinh nghiệm “xương máu”, Nhanhvn xin chia sẻ cho các bạn những lầm tưởng mà
                                            hầu hết các bạn đều mắc phải về giày auth.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')
</body>

</html>
