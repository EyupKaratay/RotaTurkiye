<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8"> <!-- Türkçe karakter desteği için -->
    <link rel="stylesheet" href="{{ asset('asset/css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header"><!-- Navbar -->
        <div class="container">
            <div class="header-content">
                <div>
                    <h1>Rota Türkiye</h1>
                </div>
                <div class="menu"> 
                    <ul>
                        <!-- <li><a href="{{ url('/') }}">Anasayfa</a></li> -->
                        <!-- <li class="dropbtn">
                            <a href="#">Kategoriler</a>
                            <div class="submenu mega-menu">
                                <div class="mega-menu-content">
                                    <div class="mega-menu-column">
                                        <h3>Kategori 1</h3>
                                        <ul>
                                            <li><a href="kategori1.html">Dini Yerler</a></li>
                                            <li><a href="kategori2.html">Doğal Güzellikler</a></li>
                                            <li><a href="kategori3.html">Tarihi Yerler</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu-column">
                                        <h3>Kategori 2</h3>
                                        <ul>
                                            <li><a href="#">Alt Kategori 1</a></li>
                                            <li><a href="#">Alt Kategori 2</a></li>
                                            <li><a href="#">Alt Kategori 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li> -->

                        <li><a href="welcome.blade.php">Anasayfa</a></li>
                        <li><a href="kategoriler.blade.php">Kategoriler</a></li>                   
                        <li><a href="iletisim.blade.php">İletişim</a></li>
                                
                        
                        @if (Auth::check())
                            <li><a href="{{ url('/profile') }}"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a></li>
                            <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                   Çıkış Yap
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <li><a href="{{ url('/register') }}"><i class="fa fa-user"></i> Giriş Yap</a></li>
                        @endif
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

    <div class="list">
        <div class="container">
            <div class="content">
                <div class="image">
                    <img src="https://images.pexels.com/photos/10309102/pexels-photo-10309102.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Ayasofya">
                    <div class="image-baslik">
                        <h3>Ayasofya İstanbulun İhtişamı ve Tarihi Mirası</h3>
                        <div class="image-aciklama">
                            <p>6.yüzyılda Bizans İmparatoru I. Justinianus tarafından inşa ettirilen Ayasofya, uzun yıllar boyunca Doğu Ortodoks Kilisesi olarak hizmet vermiştir. Orijinal yapının mimari detayları ve etkileyici kubbesi, mimarlık tarihinde dönüm noktası olarak kabul edilir.<a href="ayasofya.blade.php" class="devam-link">Devamı...</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="list">
            <div class="container">
                    <div class="content">
                        <div class="image"><img src= "https://images.pexels.com/photos/15336397/pexels-photo-15336397/free-photo-of-isik-parlak-acik-hafif.jpeg"  alt="Süleymaniye Cami">
                            <div class="image-baslik-efes">
                                    <h3>Süleymaniye Cami </h3>
                                        <div class="image-aciklama"><p>İstanbul'da bulunan Süleymaniye Camii, Osmanlı Sultanı Kanuni Sultan Süleyman tarafından 16. yüzyılda Mimar Sinan'a yaptırılmıştır. Mimari açıdan büyük bir öneme sahiptir.<a href="suleymaniyecami.blade.php" class="devam-link">Devamı...</a></p></div>
                            </div> 
                        </div>
                </div>
            </div>
        </div>
        <div class="list">
            <div class="container">
                    <div class="content">
                        <div class="image"><img src= "https://images.pexels.com/photos/13399109/pexels-photo-13399109.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  alt="Fatih Cami">
                        <div class="image-baslik">
                                    <h3>Fatih Cami </h3>
                                        <div class="image-aciklama"><p>İstanbul'un Fatih semtinde bulunan bu cami, Osmanlı Sultanı II. Mehmed tarafından yaptırılmıştır. Şehrin en eski ve en önemli camilerinden biridir.<a href="fatihcami.blade.php" class="devam-link">Devamı...</a></p></div>
                            </div> 
                    </div>
                </div>
            </div>
        </div>
        
        
        

    
</body>
</html>