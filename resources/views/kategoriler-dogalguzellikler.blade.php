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
                    <img src="https://images.pexels.com/photos/16494060/pexels-photo-16494060/free-photo-of-evler-orman-ev-gol.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Abant gölü">
                    <div class="image-baslik">
                        <h3>Abant Gölü: Bolu'nun Doğal Cenneti </h3>
                        <div class="image-aciklama">
                            <p>Bolu'nun mistik ve doğal güzelliklerinden biri olan Abant Gölü, Türkiye'nin kuzeybatısındaki Bolu ilinin, merkezine yaklaşık 33 kilometre uzaklıkta yer alır. Yıl boyunca doğaseverlerin ve turistlerin ilgisini çeken bu muazzam göl, sakin atmosferi, temiz havası ve etkileyici manzaralarıyla ünlüdür.<a href="abantgolu.blade.php" class="devam-link">Devamı...</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="list">
            <div class="container">
                    <div class="content">
                        <div class="image"><img src= "https://images.pexels.com/photos/20113971/pexels-photo-20113971/free-photo-of-kent-simgesi-gorulecek-yer-sahil-kiyi.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  alt="Van Gölü">
                            <div class="image-baslik-efes">
                                    <h3>Van Gölü </h3>
                                        <div class="image-aciklama"><p>Türkiye'nin en büyük gölleri arasında yer alan Van Gölü, ülkenin doğusunda, Van ilinin merkezinde bulunur. Bu doğal harika, hem yerel halkın hem de ziyaretçilerin hayranlıkla izlediği bir manzaradır. Yüzölçümü bakımından Türkiye'nin en büyük gölü olan Van Gölü, tarih boyunca çeşitli medeniyetlere ev sahipliği yapmıştır ve bölgenin ekonomik ve kültürel hayatında önemli bir rol oynamıştır.<a href="vangolu.blade.php" class="devam-link">Devamı...</a></p></div>
                            </div> 
                        </div>
                </div>
            </div>
        </div>
        <div class="list">
            <div class="container">
                    <div class="content">
                        <div class="image"><img src= "https://media.istockphoto.com/id/459973023/tr/foto%C4%9Fraf/lake-in-the-forest.jpg?s=612x612&w=0&k=20&c=zKbopIi0z0WaWFEWbqNvmO_rabNj62YoI_ramvyx6t8="  alt="YediGöller">
                        <div class="image-baslik">
                                    <h3>YediGöller </h3>
                                        <div class="image-aciklama"><p>Türkiye'nin doğal güzellikleriyle ünlü bölgelerinden biri olan Yedigöller Milli Parkı, Bolu ilinin kuzeyinde, Bolu Dağları'nın eteklerinde yer alır. İsminden de anlaşılacağı gibi, Yedigöller, birbirinden güzel yedi gölden oluşur ve her biri kendine özgü bir manzaraya sahiptir. Bu doğal cennet, ziyaretçilerine sessizlik, huzur ve doğanın içinde geçen keyifli vakitler sunar.<a href="yedigoller.blade.php" class="devam-link">Devamı...</a></p></div>
                            </div> 
                    </div>
                </div>
            </div>
        </div>
        
      
</body>
</html>