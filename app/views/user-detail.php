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
    <div class="body pt-1 pt-xl-0">
        <div class="container my-5">
            <div class="user__detail">
                <div class="detail__tabs">
                    <ul>
                        <li class="active">
                            <a href="#">Üyelik Bilgilerim</a>
                        </li>
                        <li>
                            <a href="#">Adres Bilgilerim</a>
                        </li>
                        <li>
                            <a href="#">Siparişlerim</a>
                        </li>
                        <li>
                            <a href="<?php echo get_url('cikis-yap'); ?>">Çıkış Yap</a>
                        </li>
                    </ul>
                </div>
                <div class="detail__contents">
                    <div class="detail__title">
                        <h1>Üyelik Bilgilerim</h1>
                    </div>
                    <div class="detail__form">
                        <?php if (isset($error)) : ?>
                        <div class="bg-danger w-100 text-white p-3 my-3 rounded"><?=$error;?></div>
                        <?php elseif (isset($ok)) : ?>
                        <div class="bg-success w-100 text-white p-3 my-3 rounded"><?=$ok;?></div>
                        <?php endif; ?>
                        <form method="post">
                            <div class="group__flex">
                                <div class="input__group">
                                    <label for="">İsim Soyisim</label>
                                    <input type="text" name="user-fullName" value="<?=$user['user_fullName'];?>" required>
                                </div>
                                <div class="input__group">
                                    <label for="">E-Mail</label>
                                    <input type="text" value="<?=$user['user_email'];?>" disabled>
                                </div>
                            </div>
                            <button type="submit" name="change-info">BİLGİLERİMİ KAYDET</button>
                        </form>
                        <form method="post">
                            <div class="group__flex">
                                <div class="input__group">
                                    <label for="">Eski Şifreniz</label>
                                    <input type="password" name="user_old_password" placeholder="Eski Şifreniz" required>
                                </div>
                                <div class="input__group">
                                    <label for="">Yeni Şifreniz</label>
                                    <input type="password" name="user_new_password" placeholder="Yeni Şifreniz" required>
                                </div>
                            </div>
                            <button type="submit" name="change-password">ŞİFRE DEĞİŞTİR</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="assets/js/index.js"></script>
</body>
</html>