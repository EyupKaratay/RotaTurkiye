<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8"> <!-- Türkçe karakter desteği için -->
        <link rel="stylesheet" href="{{ asset('asset/css/ayasofya.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            
            
           
        </style>
    </head>

    <body>
        <div class="header"><!-- Menü Çubuğu -->
                <div class="container">
                    <div class="header-content">
                        <div class="">
                            <h1>Rota Türkiye</h1>
                        </div>
                        <div class="menu">
                            <ul>
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
        
        

                       

        <!-- Önceki ve Sonraki düğmeleri -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        

        <script>
        let slideIndex = 1;

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n); // Burada `slideIndex` değişkenine `n` değerini atayarak, doğru slaytı göstermek için kullanıyoruz.
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  // Tüm slaytları gizle
    }
    slides[slideIndex - 1].style.display = "block";  // Seçilen slaytı göster
}

// Sayfa yüklendiğinde ilk slaytı göster
document.addEventListener("DOMContentLoaded", function() {
    showSlides(slideIndex);
});
                
        </script> 

                

            <div class="list">
                <div class="container">
                        <div class="content">
                            <div class="image">
                            <!-- Slider konteynerı -->
                                  <div class="slideshow-container">

                                         <!-- Tam genişlikte resimler ve sayı/caption metni -->
                                         <div class="mySlides">
                                          <div class="numbertext">1 / 3</div>
                                          <img src="https://images.pexels.com/photos/19004827/pexels-photo-19004827/free-photo-of-peyzaj-manzara-kent-simgesi-gorulecek-yer.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="1000"  >
                                          
                                        </div>

                                        <div class="mySlides">
                                          <div class="numbertext">2 / 3</div>
                                          <img src="https://images.pexels.com/photos/17365836/pexels-photo-17365836/free-photo-of-kent-simgesi-gorulecek-yer-bina-yapi.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  width="1000">
                                          
                                        </div>

                                        <div class="mySlides">
                                          <div class="numbertext">3 / 3</div>
                                          <img src="https://images.pexels.com/photos/165173/pexels-photo-165173.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="1000" >

                                          
                                        </div>

                            
                            
                            
                            <div class="image-baslik">
                                        <h3>Aspendos Tiyatrosu</h3>
                                            <div class="image-aciklama"><p>Aspendos Tiyatrosu, antik çağın muhteşem yapılarından biri olarak günümüze ulaşmış nadir eserlerden biridir. Antalya'nın Serik ilçesinde bulunan bu tarihi tiyatro, Roma İmparatorluğu döneminde inşa edilmiş olup, bugün hala etkileyici mimarisiyle ziyaretçilerini büyülemektedir. <br>

İnşa edildiği dönemde yaklaşık 15.000 kişi kapasitesiyle oldukça büyük bir yapı olan Aspendos Tiyatrosu, sahne sanatlarına ev sahipliği yapmak için kullanılmıştır. Tiyatronun mimarisi, olağanüstü bir akustik sağlamak amacıyla dikkatlice tasarlanmıştır. Bu sayede, sahnedeki seslerin tüm seyircilere eşit bir şekilde ulaşması sağlanmıştır. Günümüzde bile yapılan konser ve etkinliklerle bu eşsiz akustik özellik deneyimlenebilmektedir. <br>

Aspendos Tiyatrosu'nun mimari yapısı da oldukça etkileyicidir. Büyük bir özenle işlenmiş taşlarla inşa edilmiş olan tiyatro, o dönemin ustalığını ve zanaatkarlığını yansıtmaktadır. Tiyatronun oturma kısmı, farklı toplum katmanlarına ayrılmıştır ve bu da o dönemdeki sosyal yapı hakkında ipuçları sunmaktadır. <br>

Günümüzde Aspendos Tiyatrosu, yerli ve yabancı turistlerin ilgisini çeken önemli bir turistik mekandır. Antik çağın izlerini günümüze taşıyan bu muhteşem yapı, ziyaretçilerine hem tarihi bir yolculuk hem de etkileyici bir görsel şölen sunmaktadır. Antalya'nın zengin tarihine ışık tutan Aspendos Tiyatrosu, kesinlikle görülmeye değer bir destinasyondur. <br></p></div>
                                </div> 
                        </div>

                    

                    </div>
                </div>
            </div>
     
                    </div>
                </div>



            <div class="googlemaps"  style="margin-top:30px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3188.9767444243043!2d31.169957174974066!3d36.93872295988019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c49e7638f76edd%3A0x82aaad9ddfd636b6!2sAspendos%20Antik%20Tiyatrosu!5e0!3m2!1str!2str!4v1716494715445!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </body>
</html>
