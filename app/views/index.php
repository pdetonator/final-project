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
    <link rel="stylesheet" href="<?php echo get_url('assets/css/style.css'); ?>">
</head>
<body>
    <?php site_view('header-nav'); ?>
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
                <?php foreach ($products as $key => $product) : ?>
                <div class="product">
                    <div class="product__header">
                        <div class="product__image">
                            <a href="<?php echo get_url($product['product_url']); ?>">
                                <img src="<?php echo get_url('assets/uploads/' . $model -> matchImages($product['id'])); ?>" alt="">
                            </a>
                        </div>
                        <div class="product__code my-2">
                            <a href="<?php echo get_url($product['product_url']); ?>"><?=$product['id'] * 32;?></a>
                        </div>
                        <div class="product__title">
                            <a href="<?php echo get_url($product['product_url']); ?>"><?=$product['product_name'];?></a>
                        </div>
                    </div>
                    <div class="product__bottom">
                        <div class="product__price">
                            <p><?=number_format($product['product_price'], 0, ',', '.');?><span>TL</span></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
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
    <script src="<?php echo get_url('assets/js/index.js'); ?>"></script>
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