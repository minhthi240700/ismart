<!DOCTYPE html>
<html>

<head>
    <title>ISMART STORE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= home_url() ?>/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= home_url() ?>/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= home_url() ?>/reset.css" rel="stylesheet" type="text/css" />
    <link href="<?= home_url() ?>/css/carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="<?= home_url() ?>/css/carousel/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="<?= home_url() ?>/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= home_url() ?>/style.css" rel="stylesheet" type="text/css" />
    <link href="<?= home_url() ?>/responsive.css" rel="stylesheet" type="text/css" />

    <script src="<?= home_url() ?>/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="<?= home_url() ?>/js/elevatezoom-master/jquery.elevatezoom.js" type="text/javascript"></script>
    <script src="<?= home_url() ?>/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= home_url() ?>/js/carousel/owl.carousel.js" type="text/javascript"></script>
    <script src="<?= home_url() ?>/js/main.js" type="text/javascript"></script>
</head>

<body>
    <div id="site">
        <div id="container">
            <div id="header-wp">
                <div id="head-top" class="clearfix">
                    <div class="wp-inner">
                        <a href="" title="" id="payment-link" class="fl-left">Hình thức thanh toán</a>
                        <div id="main-menu-wp" class="fl-right">
                            <ul id="main-menu" class="clearfix">
                                <li>
                                    <a href="/" title="">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="/san-pham" title="">Sản phẩm</a>
                                </li>
                                <li>
                                    <a href="/tin-tuc" title="">Blog</a>
                                </li>
                                <li>
                                    <a href="/gioi-thieu" title="">Giới thiệu</a>
                                </li>
                                <li>
                                    <a href="/lien-he" title="">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="head-body" class="clearfix">
                    <div class="wp-inner">
                        <a href="/" title="" id="logo" class="fl-left"><img src="<?= home_url() ?>/images/logo.png" /></a>
                        <div id="search-wp" class="fl-left">
                            <form method="POST" action="">
                                <input type="text" name="s" id="s" placeholder="Nhập từ khóa tìm kiếm tại đây!">
                                <button type="submit" id="sm-s">Tìm kiếm</button>
                            </form>
                        </div>
                        <div id="action-wp" class="fl-right">
                            <div id="advisory-wp" class="fl-left">
                                <span class="title">Tư vấn</span>
                                <span class="phone">0987.654.321</span>
                            </div>
                            <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="true"></i></div>
                            <a href="/gio-hang" title="giỏ hàng" id="cart-respon-wp" class="fl-right">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span id="num">2</span>
                            </a>
                            <div id="cart-wp" class="fl-right">
                                <div id="btn-cart">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span id="num">2</span>
                                </div>
                                <div id="dropdown">
                                    <p class="desc">Có <span>2 sản phẩm</span> trong giỏ hàng</p>
                                    <ul class="list-cart">
                                        <li class="clearfix">
                                            <a href="" title="" class="thumb fl-left">
                                                <img src="<?= home_url() ?>/images/img-pro-11.png" alt="">
                                            </a>
                                            <div class="info fl-right">
                                                <a href="" title="" class="product-name">Sony Express X6</a>
                                                <p class="price">6.250.000đ</p>
                                                <p class="qty">Số lượng: <span>1</span></p>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="" title="" class="thumb fl-left">
                                                <img src="<?= home_url() ?>/images/img-pro-23.png" alt="">
                                            </a>
                                            <div class="info fl-right">
                                                <a href="" title="" class="product-name">Laptop Lenovo 10</a>
                                                <p class="price">16.250.000đ</p>
                                                <p class="qty">Số lượng: <span>1</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="total-price clearfix">
                                        <p class="title fl-left">Tổng:</p>
                                        <p class="price fl-right">18.500.000đ</p>
                                    </div>
                                    <dic class="action-cart clearfix">
                                        <a href="/gio-hang" title="Giỏ hàng" class="view-cart fl-left">Giỏ hàng</a>
                                        <a href="/thanh-toan" title="Thanh toán" class="checkout fl-right">Thanh toán</a>
                                    </dic>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>