<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('asset/css/login.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="header"><!-- Navbar -->
                <div class="container">
                    <div class="header-content">
                        <div class="">
                            <h1>Rota Türkiye</h1>
                        </div>
                        <div class="menu">
                            <ul>
                                <li><a href="{{ route('anasayfa') }}">Anasayfa</a></li>
                                <li><a href="hakkımızda.html">Kategoriler</a></li>
                                <li><a href="{{ route('iletisim') }}">İletişim</a></li> 
                            </ul>
                        </div>
                        <div class="social-media">
                            <ul>
                                <li>
                                    <!-- <a href="https://www.instagram.com/accounts/login/">Instagram</a>
                                    <a href="https://twitter.com/"></a>
                                    <a href="https://www.facebook.com/?locale=tr_TR">Facebook</a> -->
                                    <a href="https://www.instagram.com/accounts/login/" class="fa fa-instagram"></a>
                                    <a href="https://twitter.com/" class="fa fa-twitter"></a>
                                    <a href="https://www.facebook.com/?locale=tr_TR" class="fa fa-facebook"></a>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>



    <div class="container3">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label>Email:</label>
                <input type="email" id="email" name="email" placeholder="E-posta Adresiniz" required><br>
            </div>
            <div>
                <label>Şifreniz:</label>
                <input type="text" id="password" name="password" placeholder="Şifreniz" required><br>
            </div>
            <button type="submit">Giriş Yap</button><br><br><br><br><br><br>
            <!-- buton type'ı submit olunca sadece veri gönderiliyo -->
            <p><strong>Kayıt Olmadıysanız Kayıt Ol Butonuna Tıklayın ve Kayıt Olun</strong></p>

            <a href="register.blade.php">
                <button type="button">Kayıt Ol</button>
                <!-- buton type'ı button  olunca sadece sayfaya yönlendiriyo -->
            </a>

        </form>
        </div>
</body>
</html>