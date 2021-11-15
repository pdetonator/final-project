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
    <div class="container-fluid form-container">
        <div class="user__form">
            <div class="form__links">
                <ul>
                    <li class="tab__link">
                        <a href="./giris-yap">Giriş Yap</a>
                    </li>
                    <li class="tab__link active">
                        <a href="./uye-ol">Üye Ol</a>
                    </li>
                </ul>
            </div>
            <div class="forms">
                <?php if (isset($errors) && !is_null($errors)) : ?>
                <div class="user__errors">
                    <ul>
                        <?=$errors;?>
                    </ul>
                </div>
                <?php endif; ?>
                <div class="register__form form__user">
                    <form method="post">
                        <div class="input__group">
                            <label for="user-name">İsim Soyisim</label>
                            <input type="text" name="user-fullName" id="user-name" placeholder="ad.soyad@example.com" required>
                        </div>
                        <div class="input__group">
                            <label for="user-mail">E-Mail</label>
                            <input type="email" name="user-email" id="user-mail" placeholder="ad.soyad@example.com" required>
                        </div>
                        <div class="input__group">
                            <label for="user-password">Şifre</label>
                            <div class="show__input">
                                <input type="password" name="user-password" id="user-password" placeholder="****" required>
                                <i class="fa fa-eye show-password" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="input__group">
                            <label for="user-tryPassword">Şifre(Tekrar)</label>
                            <div class="show__input">
                                <input type="password" name="user-tryPassword" id="user-tryPassword" placeholder="****" required>
                                <i class="fa fa-eye show-password" aria-hidden="true"></i>
                            </div>
                        </div>
                        <button type="submit" id="register-btn" name="register-btn">KAYIT OL</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="assets/js/index.js"></script>
<script>
    let showPass = document.querySelectorAll('.show__input i');

    showPass.forEach(icon => {
        icon.addEventListener('click',e => {
            let thisInput = e.target.closest('.show__input').children[0];

            if (thisInput.getAttribute('type') === 'text') thisInput.setAttribute('type', 'password');
            else thisInput.setAttribute('type', 'text');
        })
    });
</script>
</body>
</html>