<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Store</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./styles/index.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./styles/home.css" />
</head>



<body>
    <header class="header">
        <div class="header__content">
            <div class="header__logo">
                <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/logo/fahasa_logo.png" alt="">

            </div>

            <div class="header__center">
                <div class="header__center__category">
                    <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/ico_menu.svg" alt="">
                    <span class="header__category_icon">
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </span>
                </div>
                <div class="header__center__search">
                    <input type="text" class="header__search__input"
                        placeholder="Tìm kiếm sản phẩm mong muốn..."></input>
                    <button class="header__search_button">
                        <span class="header__search_icon">
                            <ion-icon name="search-outline"></ion-icon>
                        </span>
                    </button>
                </div>
            </div>
            <ul class="header__menu-nav">
                <li class="header__menu-nav_item">
                    <ion-icon name="notifications-outline"></ion-icon> <span class="menu-nav__item__text">Thông
                        báo</span>
                </li>
                <li class="header__menu-nav_item">
                    <ion-icon name="cart-outline"></ion-icon> <span class="menu-nav__item__text">Giỏ hàng</span>
                </li>
                <li class="header__menu-nav_item">
                    <ion-icon name="person-outline"></ion-icon> <span class="menu-nav__item__text">Tài khoản</span>
                </li>
            </ul>
        </div>
    </header>
    <div class="wrapper">
        <div class="container">

            <div class="slide">
                <div class="slide__image-advertising">
                    <div class="slide-images">
                        <div class="slide__image-advertising__images">
                            <img class="image-slide"
                                src="https://cdn0.fahasa.com/media/magentothem/banner7/FahasaT1_mainbanner_01_Slide_840x320.jpg"
                                alt="">
                            <img class="image-slide"
                                src="https://cdn0.fahasa.com/media/magentothem/banner7/Megasale_Mainbanner_Slide_840x320_1.jpg"
                                alt="">
                            <img class="image-slide"
                                src="https://cdn0.fahasa.com/media/magentothem/banner7/VPP_Main_banner_T10_840x320.jpg"
                                alt="">
                            <img class="image-slide"
                                src="https://cdn0.fahasa.com/media/magentothem/banner7/Megasale_Mainbanner_Slide_840x320_1.jpg"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="slide__image-advertising-static">
                    <div class="slide__image-advertising-static__image"></div>
                    <div class="slide__image-advertising-static__image"></div>
                </div>
            </div>

            <div class="products">
                <div class="products__title">
                    <span class="title">
                        Xu hướng mua sắm mới nhất
                    </span>
                </div>

                <div class="products__books">
                    <div class="options">
                        <button>Xu Hướng theo ngày</button>
                    </div>
                    <div class="all-items-book">
                        <div class="item__book">
                            <div class="card-item-book">
                                <div class="label-pro-sale">
                                    <span class="p-sale-label">
                                        5%
                                    </span>
                                </div>
                                <div class="image-book">
                                    <img src="https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_31594.jpg"
                                        alt="">
                                </div>
                                <div class="item-title">
                                    <span class="title">
                                        Pele Cuộc đời và thời đại
                                    </span>
                                </div>
                                <div class="item-price">
                                    <span class="price-special">
                                        175.000đ
                                    </span>
                                    <span class="price-old">
                                        175.000đ
                                    </span>
                                </div>
                                <div class="item-rating">
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>

                                <div class="quantity-sold-item">

                                    <span class="quantity"> Đã bán 0</span>
                                </div>

                            </div>
                        </div>
                        <div class="item__book">
                            <div class="card-item-book">
                                <div class="label-pro-sale">
                                    <span class="p-sale-label">
                                        5%
                                    </span>
                                </div>
                                <div class="image-book">
                                    <img src="https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_31594.jpg"
                                        alt="">
                                </div>
                                <div class="item-title">
                                    <span class="title">
                                        Pele Cuộc đời và thời đại
                                    </span>
                                </div>
                                <div class="item-price">
                                    <span class="price-special">
                                        175.000đ
                                    </span>
                                    <span class="price-old">
                                        175.000đ
                                    </span>
                                </div>
                                <div class="item-rating">
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>

                                <div class="quantity-sold-item">

                                    <span class="quantity"> Đã bán 0</span>
                                </div>

                            </div>
                        </div>
                        <div class="item__book">
                            <div class="card-item-book">
                                <div class="label-pro-sale">
                                    <span class="p-sale-label">
                                        5%
                                    </span>
                                </div>
                                <div class="image-book">
                                    <img src="https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_31594.jpg"
                                        alt="">
                                </div>
                                <div class="item-title">
                                    <span class="title">
                                        Pele Cuộc đời và thời đại
                                    </span>
                                </div>
                                <div class="item-price">
                                    <span class="price-special">
                                        175.000đ
                                    </span>
                                    <span class="price-old">
                                        175.000đ
                                    </span>
                                </div>
                                <div class="item-rating">
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>

                                <div class="quantity-sold-item">

                                    <span class="quantity"> Đã bán 0</span>
                                </div>

                            </div>
                        </div>
                        <div class="item__book">
                            <div class="card-item-book">
                                <div class="label-pro-sale">
                                    <span class="p-sale-label">
                                        5%
                                    </span>
                                </div>
                                <div class="image-book">
                                    <img src="https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_31594.jpg"
                                        alt="">
                                </div>
                                <div class="item-title">
                                    <span class="title">
                                        Pele Cuộc đời và thời đại
                                    </span>
                                </div>
                                <div class="item-price">
                                    <span class="price-special">
                                        175.000đ
                                    </span>
                                    <span class="price-old">
                                        175.000đ
                                    </span>
                                </div>
                                <div class="item-rating">
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>

                                <div class="quantity-sold-item">

                                    <span class="quantity"> Đã bán 0</span>
                                </div>

                            </div>
                        </div>
                        <div class="item__book">
                            <div class="card-item-book">
                                <div class="label-pro-sale">
                                    <span class="p-sale-label">
                                        5%
                                    </span>
                                </div>
                                <div class="image-book">
                                    <img src="https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_31594.jpg"
                                        alt="">
                                </div>
                                <div class="item-title">
                                    <span class="title">
                                        Pele Cuộc đời và thời đại
                                    </span>
                                </div>
                                <div class="item-price">
                                    <span class="price-special">
                                        175.000đ
                                    </span>
                                    <span class="price-old">
                                        175.000đ
                                    </span>
                                </div>
                                <div class="item-rating">
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>

                                <div class="quantity-sold-item">

                                    <span class="quantity"> Đã bán 0</span>
                                </div>

                            </div>
                        </div>
                        <div class="item__book">
                            <div class="card-item-book">
                                <div class="label-pro-sale">
                                    <span class="p-sale-label">
                                        5%
                                    </span>
                                </div>
                                <div class="image-book">
                                    <img src="https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_31594.jpg"
                                        alt="">
                                </div>
                                <div class="item-title">
                                    <span class="title">
                                        Pele Cuộc đời và thời đại
                                    </span>
                                </div>
                                <div class="item-price">
                                    <span class="price-special">
                                        175.000đ
                                    </span>
                                    <span class="price-old">
                                        175.000đ
                                    </span>
                                </div>
                                <div class="item-rating">
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>

                                <div class="quantity-sold-item">

                                    <span class="quantity"> Đã bán 0</span>
                                </div>

                            </div>
                        </div>
                        <div class="item__book">
                            <div class="card-item-book">
                                <div class="label-pro-sale">
                                    <span class="p-sale-label">
                                        5%
                                    </span>
                                </div>
                                <div class="image-book">
                                    <img src="https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_31594.jpg"
                                        alt="">
                                </div>
                                <div class="item-title">
                                    <span class="title">
                                        Pele Cuộc đời và thời đại
                                    </span>
                                </div>
                                <div class="item-price">
                                    <span class="price-special">
                                        175.000đ
                                    </span>
                                    <span class="price-old">
                                        175.000đ
                                    </span>
                                </div>
                                <div class="item-rating">
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>

                                <div class="quantity-sold-item">

                                    <span class="quantity"> Đã bán 0</span>
                                </div>

                            </div>
                        </div>
                        <div class="item__book">
                            <div class="card-item-book">
                                <div class="label-pro-sale">
                                    <span class="p-sale-label">
                                        5%
                                    </span>
                                </div>
                                <div class="image-book">
                                    <img src="https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_31594.jpg"
                                        alt="">
                                </div>
                                <div class="item-title">
                                    <span class="title">
                                        Pele Cuộc đời và thời đại
                                    </span>
                                </div>
                                <div class="item-price">
                                    <span class="price-special">
                                        175.000đ
                                    </span>
                                    <span class="price-old">
                                        175.000đ
                                    </span>
                                </div>
                                <div class="item-rating">
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>

                                <div class="quantity-sold-item">

                                    <span class="quantity"> Đã bán 0</span>
                                </div>

                            </div>
                        </div>
                        <div class="item__book">
                            <div class="card-item-book">
                                <div class="label-pro-sale">
                                    <span class="p-sale-label">
                                        5%
                                    </span>
                                </div>
                                <div class="image-book">
                                    <img src="https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_31594.jpg"
                                        alt="">
                                </div>
                                <div class="item-title">
                                    <span class="title">
                                        Pele Cuộc đời và thời đại
                                    </span>
                                </div>
                                <div class="item-price">
                                    <span class="price-special">
                                        175.000đ
                                    </span>
                                    <span class="price-old">
                                        175.000đ
                                    </span>
                                </div>
                                <div class="item-rating">
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>

                                <div class="quantity-sold-item">

                                    <span class="quantity"> Đã bán 0</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="products__button">
                    <button class="btn-see-more">Xem thêm</button>
                </div>
            </div>
            <footer class="footer">
                <div class="footer__container">
                    <div class="footer__container__mail">
                        <span class="footer__container__mail__title">
                            Đăng ký nhận bản tin
                        </span>
                        <div class="footer__container__mail__input">
                            <input type="text" placeholder="Nhập địa chỉ email của bạn">
                            <button class="btn-email">
                                Đăng ký
                            </button>
                        </div>
                    </div>
                    <div class="footer__container__info__contact">
                        <div class="footer__container__info__contact__left">
                            <div class="logo__store">
                                <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/logo/fahasa_logo.png"
                                    alt="">
                            </div>
                            <div class="address-store">
                                <span class="address-title">
                                    Lầu 5, 387-389 Hai Bà Trưng Quận 3 TP HCM </br> Công Ty Cổ Phần Phát Hành Sách TP
                                    HCM -
                                    FAHASA</br>60 - 62 Lê Lợi, Quận 1, TP. HCM, Việt Nam</br>
                                </span>
                                <span class="note-store">
                                    Fahasa.com nhận đặt hàng trực tuyến và giao hàng tận nơi. KHÔNG hỗ trợ đặt mua và
                                    nhận hàng
                                    trực tiếp tại văn phòng cũng như tất cả Hệ Thống Fahasa trên toàn quốc.
                                </span>
                            </div>
                            <div class="logo__noticed">
                                <img src="https://cdn0.fahasa.com/media/wysiwyg/Logo-NCC/logo-bo-cong-thuong-da-thong-bao1.png"
                                    alt="">
                            </div>
                            <div class="socials-store">
                                <a target="_blank" href="https://www.facebook.com/fahasa/" title="Facebook">
                                    <img alt="Facebook"
                                        src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/footer/Facebook-on.png">
                                </a>
                                <a target="_blank" href="https://www.instagram.com/fahasa_official/" title="Instagram">
                                    <img alt="Instagram"
                                        src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images//footer/Insta-on.png">
                                </a>
                                <a target="_blank" href="https://www.youtube.com/channel/UCUZcVOLSxK1q6RfgzQ9-HYQ"
                                    title="Youtube">
                                    <img alt="Youtube"
                                        src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images//footer/Youtube-on.png">
                                </a>
                                <a target="_blank" href="https://fahasa-blog.tumblr.com/" title="Tumblr">
                                    <img alt="Tumblr"
                                        src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images//footer/tumblr-on.png">
                                </a>
                                <a target="_blank" href="https://twitter.com/Fahasa_com" title="Twitter">
                                    <img alt="Twitter"
                                        src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images//footer/twitter-on.png">
                                </a>
                                <a target="_blank" href="https://www.pinterest.com/fahasaVN/" title="Pinterest">
                                    <img alt="Pinterest"
                                        src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images//footer/pinterest-on.png">
                                </a>
                            </div>
                            <div class="platform-install">
                                <div class="col-sm-6 col-md-6 col-xs-6" style="text-align: right;">
                                    <a href="https://play.google.com/store/apps/details?id=com.fahasa.android.fahasa">
                                        <img alt="FAHASA.COM"
                                            src="https://cdn0.fahasa.com/media/wysiwyg/Logo-NCC/android1.png"
                                            style="max-width: 110px;">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-6 col-xs-6" style="padding-left: 5px;">
                                    <a href="https://itunes.apple.com/app/id1227597830?mt=8">
                                        <img alt="FAHASA.COM"
                                            src="https://cdn0.fahasa.com/media/wysiwyg/Logo-NCC/appstore1.png"
                                            style="max-width: 110px;">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="footer__container__info__contact__right">
                            <div class="footer__container__info__contact__right__info">
                                <div class="item-info service">
                                    <div class="item-info-title">
                                        <span class="title">
                                            Dịch vụ
                                        </span>
                                    </div>
                                    <ul class="nav-item">
                                        <li class="first"><a href="https://www.fahasa.com/dieu-khoan-su-dung">Điều khoản
                                                sử
                                                dụng</a></li>
                                        <li><a href="https://www.fahasa.com/chinh-sach-bao-mat">Chính sách bảo mật thông
                                                tin cá
                                                nhân</a></li>
                                        <li><a href="https://www.fahasa.com/chinh-sach-bao-mat-thanh-toan">Chính sách
                                                bảo mật
                                                thanh toán</a></li>
                                        <li><a href="https://www.fahasa.com/gioi-thieu-fahasa">Giới thiệu Fahasa</a>
                                        </li>
                                        <li class="last"><a href="https://www.fahasa.com/he-thong-trung-tam-nha-sach">Hệ
                                                thống
                                                trung
                                                tâm -
                                                nhà sách</a></li>
                                    </ul>
                                </div>
                                <div class="item-info support">
                                    <div class="item-info-title">
                                        <span class="title">
                                            Hổ trợ
                                        </span>
                                    </div>
                                    <ul class="nav-item">
                                        <li class="first"><a href="https://www.fahasa.com/doi-tra-hang">Chính sách đổi -
                                                trả -
                                                hoàn tiền</a></li>
                                        <li><a href="https://www.fahasa.com/chinh-sach-bao-hanh-boi-hoan">Chính sách bảo
                                                hành -
                                                bồi hoàn</a></li>
                                        <li><a href="https://www.fahasa.com/phuong-thuc-van-chuyen">Chính sách vận
                                                chuyển</a>
                                        </li>
                                        <li><a href="https://www.fahasa.com/chinh-sach-khach-si">Chính sách khách sỉ</a>
                                        </li>
                                        <li class="last"><a
                                                href="https://www.fahasa.com/huong-dan-thanh-toan-va-xuat-hd">Phương
                                                thức thanh
                                                toán và xuất HĐ</a></li>
                                    </ul>
                                </div>
                                <div class="item-info my-account">
                                    <div class="item-info-title">
                                        <span class="title">
                                            Tài khoản của tôi
                                        </span>
                                    </div>
                                    <ul class="nav-item">
                                        <li class="first footer_login_link"><a
                                                href="https://www.fahasa.com/index.php/customer/account/login"
                                                onclick="return false;">Đăng
                                                nhập/Tạo mới tài khoản</a></li>
                                        <li><a href="https://www.fahasa.com/index.php/customer/address">Thay đổi địa chỉ
                                                khách hàng</a></li>
                                        <li><a href="https://www.fahasa.com/index.php/customer/account">Chi tiết tài
                                                khoản</a></li>
                                        <li class="last"><a
                                                href="https://www.fahasa.com/index.php/sales/order/history">Lịch
                                                sử mua
                                                hàng
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer__container__info__contact__right__store">
                                <div class="footer__container__info__contact__right__store__title">
                                    <span class="title">Liên hệ</span>
                                    <div class="detail-address" style="margin: 5px -5px;">
                                        <div class="col-md-4">
                                            <ion-icon name="location"></ion-icon>62 Lê Lợi, Q.1, TP. HCM
                                        </div>
                                        <div class="col-md-4">
                                            <ion-icon name="mail"></ion-icon>
                                            cskh@fahasa.com.vn
                                        </div>
                                        <div class="col-md-4">
                                            <ion-icon name="call"></ion-icon>1900636467
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer__container__info__contact__right__method">
                                <div class="footer-image-container">
                                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Logo-NCC/vnpost1.png" width="100px">
                                </div>
                                <div class="footer-image-container">
                                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Logo-NCC/ahamove_logo3.png"
                                        width="160px">
                                </div>
                                <div class="footer-image-container">
                                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Logo-NCC/icon_giao_hang_nhanh1.png"
                                        width="150px">
                                </div>
                                <div class="footer-image-container">
                                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Logo-NCC/icon_snappy1.png"
                                        width="150px">
                                </div>
                                <div class="footer-image-container">

                                    <img style="max-width: 120px;  "
                                        src="https://cdn0.fahasa.com/media//wysiwyg/Logo-NCC/vnpay_logo.png">
                                </div>
                                <div class="footer-image-container">
                                    <img style="max-width: 120px;  "
                                        src="https://cdn0.fahasa.com/media//wysiwyg/Logo-NCC/ZaloPay-logo-130x83.png">
                                </div>
                                <div class="footer-image-container">
                                    <img style="height: 50px; "
                                        src="https://cdn0.fahasa.com/media//wysiwyg/Logo-NCC/momopay.png">
                                </div>
                                <div class="footer-image-container">
                                    <img style="height: 44px;  "
                                        src="https://cdn0.fahasa.com/media//wysiwyg/Logo-NCC/shopeepay_logo1.png">
                                </div>
                                <div class="footer-image-container">
                                    <img style="height: 65px; "
                                        src="https://cdn0.fahasa.com/media//wysiwyg/Logo-NCC/logo_moca_120.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./scripts/home.js"></script>
</body>

</html>