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
    <?php site_view('header-nav'); ?>
    <div class="body">
        <div class="container">
            <div class="product__inner">
                <div class="inner_left">
                    <div class="swiper inner-product">
                        <div class="swiper-wrapper">
                        <?php foreach ($images as $image) : ?>
                        <div class="swiper-slide">
                            <img src="assets/uploads/<?=$image['path'];?>" alt="Product Image">
                        </div>
                        <?php endforeach; ?>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="inner_right">
                    <div class="product__code">
                        <p><?=$product['id'] * 32;?></p>
                    </div>
                    <div class="product__title">
                        <p><?=$product['product_name'];?></p>
                    </div>
                    <div class="product__price">
                        <p><?=number_format($product['product_price'], 0, ',', '.')?><span>TL</span></p>
                    </div>
                    <?php if ($options && !is_null($options)) : ?>
                    <div class="product__options">
                        <?php foreach ($options as $key => $option) : ?>
                        <div class="option">
                            <input type="checkbox" class="selection__product" name="option-<?=$option['option_value']?>" id="option-<?=$option['option_value']?>" value="<?=$option['option_value']?>" <?php if ($key === 0) echo 'checked'; ?> >
                            <label for="option-<?=$option['option_value']?>"><?=$option['option_value']?></label>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php else : ?>
                    <div class="my-5"></div>
                    <?php endif; ?>
                    <div class="add-to__basket">
                        <button type="button" id="add-to-basket">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <span>SEPETE EKLE</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="assets/js/index.js"></script>
    <script>
        
        const productImages = document.querySelectorAll('.swiper-slide > img');
        let imagesArr = [],
            productOptions = document.querySelectorAll('.selection__product');

        function unselected(items) {
            productOptions.forEach(option => {
                option.checked = false;
            });
        }    

        productOptions.forEach(option => {
            option.addEventListener('click', e => {
                unselected(productOptions);
                e.target.checked = true;
            });
        });

        productImages.forEach((item, key) => {
            imagesArr[key] = {
                src: item.getAttribute('src'),
                alt: item.getAttribute('alt')
            }
        });

        const bestSeller = new Swiper('.swiper.top-seller', {
            direction: 'horizontal',
            loop: true,
            slidesPerView: 'auto',
            spaceBetween: 20,
        });
        const innerSwiper = new Swiper('.swiper.inner-product', {
            direction: 'horizontal',
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + '"><img src="' + imagesArr[index].src + '" alt="' + imagesArr[index].alt + '"></img></span>'
                }
            },
            autoplay: {
                delay: 5000,
            },
        });
    </script>
</body>
</html>