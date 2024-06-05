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
                    <img src="https://media.istockphoto.com/id/1212422182/tr/foto%C4%9Fraf/harput-castle-in-artuklu-mesopotamia.jpg?s=612x612&w=0&k=20&c=NcfTIi_y0jqJogv_JUl2Im6psNIpIla9cXGLpeoYT5Y=" alt="Harput Kalesi">
                    <div class="image-baslik">
                        <h3>Elazığ Harput Kalesi</h3>
                        <div class="image-aciklama">
                            <p>Harput Kalesi, Elazığ'ın tarihi Harput Mahallesi'nde yer alan ve M.Ö. 8. yüzyıla kadar uzanan bir geçmişe sahip olan önemli bir tarihi yapıdır.<a href="harputkalesi.blade.php" class="devam-link">Devamı...</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="list">
            <div class="container">
                    <div class="content">
                        <div class="image"><img src= "https://www.muzedenal.com/gobeklitepenin-cozulemeyen-sirri-ve-buyuk-gizemi-12-blog.jpg"  alt="Göbeklitepe">
                            <div class="image-baslik-efes">
                                    <h3>GöbekliTepe </h3>
                                        <div class="image-aciklama"><p>Göbeklitepe, Türkiye’nin Güneydoğu Anadolu Bölgesi’ndeki Şanlıurfa ilinin 18 km kuzeydoğusunda, Haliliye ilçesine bağlı Örencik köyü yakınlarında yer alan Neolitik bir arkeolojik sit alanıdır. MÖ 9600–9500 civarına tarihlenen Göbeklitepe, dünyanın şu ana kadar bilinen en eski tarihî yapısıdır. Yapıt, dünyanın bilinen en eski megalitleri olan taş sütunlarla, bir dizi büyük dairesel yapıdan oluşmaktadır.<a href="gobeklitepe.blade.php" class="devam-link">Devamı...</a></p></div>
                            </div> 
                        </div>
                </div>
            </div>
        </div>
        <div class="list">
            <div class="container">
                    <div class="content">
                        <div class="image"><img src= "https://images.pexels.com/photos/19004827/pexels-photo-19004827/free-photo-of-peyzaj-manzara-kent-simgesi-gorulecek-yer.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  alt="Aspendos">
                        <div class="image-baslik">
                                    <h3>Aspendos Tiyatrosu </h3>
                                        <div class="image-aciklama"><p>Aspendos Tiyatrosu, antik çağın muhteşem yapılarından biri olarak günümüze ulaşmış nadir eserlerden biridir. Antalya'nın Serik ilçesinde bulunan bu tarihi tiyatro, Roma İmparatorluğu döneminde inşa edilmiş olup, bugün hala etkileyici mimarisiyle ziyaretçilerini büyülemektedir.<a href="aspendos.blade.php" class="devam-link">Devamı...</a></p></div>
                            </div> 
                    </div>
                </div>
            </div>
        </div>
        
        
</body>
</html>