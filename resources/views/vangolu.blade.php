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
                                          <img src="https://images.pexels.com/photos/18610068/pexels-photo-18610068/free-photo-of-peyzaj-manzara-kent-simgesi-gorulecek-yer.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  >
                                          <!-- <div class="text">Açıklama Bir</div> -->
                                        </div>

                                        <div class="mySlides">
                                          <div class="numbertext">2 / 3</div>
                                          <img src="https://images.pexels.com/photos/9793024/pexels-photo-9793024.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" >
                                          <!-- <div class="text">Açıklama İki</div> -->
                                        </div>

                                        <div class="mySlides">
                                          <div class="numbertext">3 / 3</div>
                                          <img src="https://images.pexels.com/photos/9793020/pexels-photo-9793020.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  >
                                          <!-- <div class="text">Açıklama Üç</div> -->
                                        </div>

                            
                            <div class="image-baslik">
                                        <h3>Van Gölü</h3>
                                            <div class="image-aciklama"><p>Türkiye'nin en büyük gölleri arasında yer alan Van Gölü, ülkenin doğusunda, Van ilinin merkezinde bulunur. Bu doğal harika, hem yerel halkın hem de ziyaretçilerin hayranlıkla izlediği bir manzaradır. Yüzölçümü bakımından Türkiye'nin en büyük gölü olan Van Gölü, tarih boyunca çeşitli medeniyetlere ev sahipliği yapmıştır ve bölgenin ekonomik ve kültürel hayatında önemli bir rol oynamıştır.<br>
<br>
Van Gölü, sadece boyutlarıyla değil, aynı zamanda çevresindeki doğal güzelliklerle de ünlüdür. Eşsiz manzarası, berrak suyu ve çevresindeki dağların etkileyici görüntüsü, ziyaretçileri kendine çeken başlıca özellikleridir. Ayrıca göl, çevresindeki kuş türlerinin çeşitliliğiyle de dikkat çeker ve kuş gözlemcileri için önemli bir destinasyondur.<br>
<br>
Tarihi ve kültürel açıdan da zengin olan Van Gölü çevresinde, birçok tarihi eser ve doğal güzellik bulunmaktadır. Özellikle Akdamar Adası, tarihi kilisesi ve etkileyici manzarasıyla ziyaretçilerin ilgisini çeker.<br>
<br>
Van Gölü, ziyaretçilerine görsel bir şölen sunarken aynı zamanda çevresindeki yerleşim birimleriyle de bölgenin ekonomik ve kültürel hayatına katkıda bulunur. Van Gölü çevresindeki şehirler ve köyler, yöresel kültürlerini ve geleneklerini koruyarak ziyaretçilere benzersiz deneyimler sunar.<br>
<br>
Van Gölü, Türkiye'nin önemli doğal ve kültürel miraslarından biri olup, her yıl binlerce yerli ve yabancı turisti kendine çekmeye devam etmektedir.</p></div>
                                </div> 
                        </div>

                    

                    </div>
                </div>
            </div>


                                
                    </div>
                </div>



            <div class="googlemaps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d797622.3419517706!2d42.31285139739712!3d38.655495694098946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400d8136f75278af%3A0x39e5e8e9d714610a!2zVmFuIEfDtmzDvA!5e0!3m2!1str!2str!4v1716468817319!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </body>
</html>
