<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header id="header">
        <div class="container">
            <div class="header-wrapper">
                <div class="header__toggler">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                    <div class="line-3"></div>
                </div>
                <div class="header__brand">
                    <a href="#">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/20/BEAT_Cycling_logo.png" alt="">
                    </a>
                </div>
                <div class="search__bar">
                    <form action="" method="get">
                        <input type="text" name="search-bar" id="search-bar" placeholder="Aramak istediğiniz ürünü yazınız.">
                        <button type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
                <div class="user__items">
                    <ul>
                        <li class="active">
                            <a href="#">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span>HESAP</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>SEPET</span>
                                <div class="total__basket">0</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <nav id="navbar">
        <div class="container">
            <div class="navbar__wrapper">
                <div class="close__nav">
                    <div class="login__in">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>Giriş Yap</span>
                        </a>
                    </div>
                    <div class="close">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="nav__items">
                    <ul>
                        <li>
                            <a href="#">Telefon</a>
                        </li>
                        <li>
                            <a href="#">Bilgisayar</a>
                        </li>
                        <li>
                            <a href="#">Tv, Ev Elektroniği</a>
                        </li>
                        <li>
                            <a href="#">Bilgisayar Parçaları</a>
                        </li>
                        <li>
                            <a href="#">Foto, Kamera</a>
                        </li>
                        <li>
                            <a href="#">Tv, Ev Elektroniği</a>
                        </li>
                        <li>
                            <a href="#">Bilgisayar Parçaları</a>
                        </li>
                        <li>
                            <a href="#">Foto, Kamera</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="body">
        <section id="slider" class="py-4">
            <div class="container">
                <div class="swiper thumbs-gallery">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://cdn.vatanbilgisayar.com/Upload/BANNER//yeni-tasarim/anasayfa/10-2021/asus-notebook-1-11-ILAN_WEB.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://cdn.vatanbilgisayar.com/Upload/BANNER//yeni-tasarim/anasayfa/10-2021/philips-20-10-ILAN_WEB.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://cdn.vatanbilgisayar.com/Upload/BANNER//yeni-tasarim/anasayfa/10-2021/1336x380-Vatan.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://cdn.vatanbilgisayar.com/Upload/BANNER//yeni-tasarim/anasayfa/10-2021/Vatan_iPad_mini_Web.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://cdn.vatanbilgisayar.com/Upload/BANNER//yeni-tasarim/anasayfa/10-2021/asus-notebook-1-11-ILAN_WEB.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://cdn.vatanbilgisayar.com/Upload/BANNER//yeni-tasarim/anasayfa/10-2021/philips-20-10-ILAN_WEB.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://cdn.vatanbilgisayar.com/Upload/BANNER//yeni-tasarim/anasayfa/10-2021/1336x380-Vatan.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://cdn.vatanbilgisayar.com/Upload/BANNER//yeni-tasarim/anasayfa/10-2021/Vatan_iPad_mini_Web.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-pagination-mb"></div>
                </div>
            </div>
        </section>
        <section id="products" style="padding: 50px 0;">
            <div class="container">
                <div class="product__list">
                    <span>Günün Fırsatları</span>
                    <div class="all__products">
                        <a href="#">TÜM FIRSAT ÜRÜNLERİ
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="products">
                    <div class="product">
                        <div class="product__header">
                            <div class="product__image">
                                <a href="#">
                                    <img src="https://cdn.vatanbilgisayar.com/Upload/PRODUCT/asus/thumb/127301-3_small.jpg" alt="">
                                </a>
                            </div>
                            <div class="product__code">
                                <a href="#">PFOEFO-3XR4</a>
                            </div>
                            <div class="product__title">
                                <a href="#">Xiaomi Poco X3 PRO 128 Gb Akıllı Telefon Mavi</a>
                            </div>
                        </div>
                        <div class="product__bottom">
                            <div class="product__price">
                                <p>17.999<span>TL</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__header">
                            <div class="product__image">
                                <a href="#">
                                    <img src="https://cdn.vatanbilgisayar.com/Upload/PRODUCT/asus/thumb/127301-3_small.jpg" alt="">
                                </a>
                            </div>
                            <div class="product__code">
                                <a href="#">PFOEFO-3XR4</a>
                            </div>
                            <div class="product__title">
                                <a href="#">Xiaomi Poco X3 PRO 128 Gb Akıllı Telefon Mavi</a>
                            </div>
                        </div>
                        <div class="product__bottom">
                            <div class="product__price">
                                <p>17.999<span>TL</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__header">
                            <div class="product__image">
                                <a href="#">
                                    <img src="https://productimages.hepsiburada.net/s/54/1500/11187115819058.jpg" alt="">
                                </a>
                            </div>
                            <div class="product__code">
                                <a href="#">PFOEFO-3XR4</a>
                            </div>
                            <div class="product__title">
                                <a href="#">
                                    HUAWEI MATEBOOK D15I CORE İ5 10210U 1.6GHZ-8GB-256GBSSD-15.6"-INT-SPACEGREY</a>
                            </div>
                        </div>
                        <div class="product__bottom">
                            <div class="product__price">
                                <p>17.999<span>TL</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__header">
                            <div class="product__image">
                                <a href="#">
                                    <img src="https://cdn.vatanbilgisayar.com/Upload/PRODUCT/asus/thumb/127301-3_small.jpg" alt="">
                                </a>
                            </div>
                            <div class="product__code">
                                <a href="#">PFOEFO-3XR4</a>
                            </div>
                            <div class="product__title">
                                <a href="#">Xiaomi Poco X3 PRO 128 Gb Akıllı Telefon Mavi</a>
                            </div>
                        </div>
                        <div class="product__bottom">
                            <div class="product__price">
                                <p>17.999<span>TL</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__header">
                            <div class="product__image">
                                <a href="#">
                                    <img src="https://cdn.vatanbilgisayar.com/Upload/PRODUCT/asus/thumb/127301-3_small.jpg" alt="">
                                </a>
                            </div>
                            <div class="product__code">
                                <a href="#">PFOEFO-3XR4</a>
                            </div>
                            <div class="product__title">
                                <a href="#">Xiaomi Poco X3 PRO 128 Gb Akıllı Telefon Mavi</a>
                            </div>
                        </div>
                        <div class="product__bottom">
                            <div class="product__price">
                                <p>17.999<span>TL</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__header">
                            <div class="product__image">
                                <a href="#">
                                    <img src="https://cdn.vatanbilgisayar.com/Upload/PRODUCT/asus/thumb/127301-3_small.jpg" alt="">
                                </a>
                            </div>
                            <div class="product__code">
                                <a href="#">PFOEFO-3XR4</a>
                            </div>
                            <div class="product__title">
                                <a href="#">Xiaomi Poco X3 PRO 128 Gb Akıllı Telefon Mavi</a>
                            </div>
                        </div>
                        <div class="product__bottom">
                            <div class="product__price">
                                <p>17.999<span>TL</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__header">
                            <div class="product__image">
                                <a href="#">
                                    <img src="https://cdn.vatanbilgisayar.com/Upload/PRODUCT/asus/thumb/127301-3_small.jpg" alt="">
                                </a>
                            </div>
                            <div class="product__code">
                                <a href="#">PFOEFO-3XR4</a>
                            </div>
                            <div class="product__title">
                                <a href="#">Xiaomi Poco X3 PRO 128 Gb Akıllı Telefon Mavi</a>
                            </div>
                        </div>
                        <div class="product__bottom">
                            <div class="product__price">
                                <p>17.999<span>TL</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__header">
                            <div class="product__image">
                                <a href="#">
                                    <img src="https://cdn.vatanbilgisayar.com/Upload/PRODUCT/asus/thumb/127301-3_small.jpg" alt="">
                                </a>
                            </div>
                            <div class="product__code">
                                <a href="#">PFOEFO-3XR4</a>
                            </div>
                            <div class="product__title">
                                <a href="#">Xiaomi Poco X3 PRO 128 Gb Akıllı Telefon Mavi</a>
                            </div>
                        </div>
                        <div class="product__bottom">
                            <div class="product__price">
                                <p>17.999<span>TL</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__header">
                            <div class="product__image">
                                <a href="#">
                                    <img src="https://cdn.vatanbilgisayar.com/Upload/PRODUCT/asus/thumb/127301-3_small.jpg" alt="">
                                </a>
                            </div>
                            <div class="product__code">
                                <a href="#">PFOEFO-3XR4</a>
                            </div>
                            <div class="product__title">
                                <a href="#">Xiaomi Poco X3 PRO 128 Gb Akıllı Telefon Mavi</a>
                            </div>
                        </div>
                        <div class="product__bottom">
                            <div class="product__price">
                                <p>17.999<span>TL</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__header">
                            <div class="product__image">
                                <a href="#">
                                    <img src="https://cdn.vatanbilgisayar.com/Upload/PRODUCT/asus/thumb/127301-3_small.jpg" alt="">
                                </a>
                            </div>
                            <div class="product__code">
                                <a href="#">PFOEFO-3XR4</a>
                            </div>
                            <div class="product__title">
                                <a href="#">Xiaomi Poco X3 PRO 128 Gb Akıllı Telefon Mavi</a>
                            </div>
                        </div>
                        <div class="product__bottom">
                            <div class="product__price">
                                <p>17.999<span>TL</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__header">
                            <div class="product__image">
                                <a href="#">
                                    <img src="https://cdn.vatanbilgisayar.com/Upload/PRODUCT/asus/thumb/127301-3_small.jpg" alt="">
                                </a>
                            </div>
                            <div class="product__code">
                                <a href="#">PFOEFO-3XR4</a>
                            </div>
                            <div class="product__title">
                                <a href="#">
                                    HUAWEI MATEBOOK D15I CORE İ5 10210U 1.6GHZ-8GB-256GBSSD-15.6"-INT-SPACEGREY</a>
                            </div>
                        </div>
                        <div class="product__bottom">
                            <div class="product__price">
                                <p>17.999<span>TL</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__header">
                            <div class="product__image">
                                <a href="#">
                                    <img src="https://cdn.vatanbilgisayar.com/Upload/PRODUCT/asus/thumb/127301-3_small.jpg" alt="">
                                </a>
                            </div>
                            <div class="product__code">
                                <a href="#">PFOEFO-3XR4</a>
                            </div>
                            <div class="product__title">
                                <a href="#">Xiaomi Poco X3 PRO 128 Gb Akıllı Telefon Mavi</a>
                            </div>
                        </div>
                        <div class="product__bottom">
                            <div class="product__price">
                                <p>17.999<span>TL</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__header">
                            <div class="product__image">
                                <a href="#">
                                    <img src="https://cdn.vatanbilgisayar.com/Upload/PRODUCT/asus/thumb/127301-3_small.jpg" alt="">
                                </a>
                            </div>
                            <div class="product__code">
                                <a href="#">PFOEFO-3XR4</a>
                            </div>
                            <div class="product__title">
                                <a href="#">Xiaomi Poco X3 PRO 128 Gb Akıllı Telefon Mavi</a>
                            </div>
                        </div>
                        <div class="product__bottom">
                            <div class="product__price">
                                <p>17.999<span>TL</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__header">
                            <div class="product__image">
                                <a href="#">
                                    <img src="https://cdn.vatanbilgisayar.com/Upload/PRODUCT/asus/thumb/127301-3_small.jpg" alt="">
                                </a>
                            </div>
                            <div class="product__code">
                                <a href="#">PFOEFO-3XR4</a>
                            </div>
                            <div class="product__title">
                                <a href="#">Xiaomi Poco X3 PRO 128 Gb Akıllı Telefon Mavi</a>
                            </div>
                        </div>
                        <div class="product__bottom">
                            <div class="product__price">
                                <p>17.999<span>TL</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__header">
                            <div class="product__image">
                                <a href="#">
                                    <img src="https://cdn.vatanbilgisayar.com/Upload/PRODUCT/asus/thumb/127301-3_small.jpg" alt="">
                                </a>
                            </div>
                            <div class="product__code">
                                <a href="#">PFOEFO-3XR4</a>
                            </div>
                            <div class="product__title">
                                <a href="#">Xiaomi Poco X3 PRO 128 Gb Akıllı Telefon Mavi</a>
                            </div>
                        </div>
                        <div class="product__bottom">
                            <div class="product__price">
                                <p>17.999<span>TL</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__header">
                            <div class="product__image">
                                <a href="#">
                                    <img src="https://cdn.vatanbilgisayar.com/Upload/PRODUCT/asus/thumb/127301-3_small.jpg" alt="">
                                </a>
                            </div>
                            <div class="product__code">
                                <a href="#">PFOEFO-3XR4</a>
                            </div>
                            <div class="product__title">
                                <a href="#">Xiaomi Poco X3 PRO 128 Gb Akıllı Telefon Mavi</a>
                            </div>
                        </div>
                        <div class="product__bottom">
                            <div class="product__price">
                                <p>17.999<span>TL</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="best-seller">
            <div class="container">
                <div class="title">
                    <p>En Çok Satan Ürünler</p>
                </div>
                <div class="best__seller">
                    <div class="swiper top-seller">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product__image">
                                        <a href="#">
                                            <img src="https://www.vatanbilgisayar.com/UPLOAD/PRODUCT/samsung/thumb/121933_small.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product__title">
                                        <p>Xiaomi Redmi 9c 128 Gb Akıllı Telefon Mavi</p>
                                    </div>
                                    <div class="product__price">
                                        <p>9.999<span>TL</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product__image">
                                        <a href="#">
                                            <img src="https://www.vatanbilgisayar.com/UPLOAD/PRODUCT/samsung/thumb/121933_small.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product__title">
                                        <p>Xiaomi Redmi 9c 128 Gb Akıllı Telefon Mavi</p>
                                    </div>
                                    <div class="product__price">
                                        <p>9.999<span>TL</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="assets/js/index.js"></script>
    <script>
        const bestSeller = new Swiper('.swiper.top-seller', {
            direction: 'horizontal',
            loop: true,
            slidesPerView: 'auto',
            spaceBetween: 20,
        });
    </script>
</body>
</html>