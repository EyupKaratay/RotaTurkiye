<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('asset/css/register.css') }}">
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
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label>Adınız:</label>
                <input type="text" id="name" name="name" placeholder="Adınız" required><br>
            </div>
            <div>
                <label>Soyadınız:</label>
                <input type="text" id="surname" name="surname" placeholder="Soyadınız" required><br>
            </div>

            <div>
                <label>Email:</label>
                <input type="email" id="email" name="email" placeholder="E-posta Adresiniz" required><br>
            </div>
            <div>
                <label>Şifreniz:</label>
                <input type="text" id="password" name="password" placeholder="Şifreniz" required><br>
            </div>
           

            
            <button type="submit">Kayıt Ol</button>
            </a>

        </form>
        </div>
</body>
</html>