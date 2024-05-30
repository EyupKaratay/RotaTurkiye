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
                        <div class="image"><img src= "https://images.pexels.com/photos/5865865/pexels-photo-5865865.jpeg"  alt="Efes Antik Kenti">
                            <div class="image-baslik-efes">
                                    <h3>Efes Antik Kenti</h3>
                                        <div class="image-aciklama"><p>Efes Antik Kenti, Türkiye'nin İzmir ilinde bulunan tarihi bir yerleşimdir. Antik çağda önemli bir liman şehri olan Efes, Helenistik ve Roma dönemlerinde Anadolu'nun en önemli kentlerinden biriydi. Artemis Tapınağı, Celsus Kütüphanesi, Büyük Tiyatro ve Agora gibi birçok tarihi yapıya ev sahipliği yapar. Efes, Hristiyanlık inancının önemli merkezlerinden biri olan Aziz Pavlus'un burada bulunduğu rivayet edilen Aziz Yuhanna Bazilikası'na da ev sahipliği yapar. Bu nedenle tarih ve kültür meraklıları için görülmesi gereken önemli bir yerdir.<a href="efesantikkenti.blade.php" class="devam-link">Devamı...</a></p></div>
                            </div> 
                        </div>
                </div>
            </div>
        </div>
        <div class="list">
            <div class="container">
                    <div class="content">
                        <div class="image"><img src= "https://images.pexels.com/photos/18035417/pexels-photo-18035417/free-photo-of-gun-batimi-seyahat-yolculuk-altin-saat.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  alt="İstanbul Boğazı">
                        <div class="image-baslik">
                                    <h3>İstanbul Boğazı:</h3>
                                        <div class="image-aciklama"><p>İstanbul Boğazı, Türkiye'nin İstanbul şehrinde bulunan ve Avrupa ile Asya'yı birbirinden ayıran, tarih boyunca stratejik öneme sahip olan bir su yoludur. Boğaz, Marmara Denizi'ni Karadeniz'le birleştirir ve yaklaşık 30 kilometre uzunluğundadır. Tarihi boyunca ticaretin ve kültürel etkileşimin önemli bir merkezi olmuştur. Üzerinde köprüler ve deniz trafiği için önemli bir rota olan İstanbul Boğazı, şehrin sembollerinden biridir ve ziyaretçiler için muhteşem manzaralar sunar.<a href="istanbulbogazi.blade.php" class="devam-link">Devamı...</a></p></div>
                            </div> 
                    </div>
                </div>
            </div>
        </div>
        
        
        

    
</body>
</html>