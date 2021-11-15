<?php
    use UNLCE\Http\Controller;

    require dirname(__DIR__) . '/Http/Cart.php'; 
    
    $cart = new Cart();

    $controller = new Controller;
    $categories = $controller -> model('mdlCategories');
    $allCategories = $categories -> getAll();
?>
<header id="header">
    <div class="container">
        <div class="header-wrapper">
            <div class="header__toggler">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
            </div>
            <div class="header__brand">
                <a href="./">
                    <img src="https://www.vatanbilgisayar.com/assets/dist/images/vatanlogo.svg" alt="">
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
                        <a href="<?php if (isset($_SESSION['user']['login'])) echo './uye-bilgilerim'; else echo './giris-yap'; ?>">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>HESAP</span>
                        </a>
                    </li>
                    <li>
                        <a href="./sepet">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <span>SEPET</span>
                            <div class="total__basket"><?php if (isset($_SESSION['user']['login'])) echo $cart -> getTotalCount($_SESSION['user']['id']); else echo '0'; ?></div>
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
                    <?php foreach ($allCategories as $categories) : ?>
                    <li>
                        <a href="./kategori/"><?=$categories['category_name'];?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</nav>