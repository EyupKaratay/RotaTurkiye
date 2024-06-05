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
                                          <img src="https://cdn1.ntv.com.tr/gorsel/nmu1wb2hFk2yJEn2ANsO_Q.jpg?width=1000&mode=both&scale=both&v=1603455076359" width="1000"  >
                                          
                                        </div>

                                        <div class="mySlides">
                                          <div class="numbertext">2 / 3</div>
                                          <img src="https://live.staticflickr.com/620/22698141011_410f957959_b.jpg"  width="800">
                                          
                                        </div>

                                        <div class="mySlides">
                                          <div class="numbertext">3 / 3</div>
                                          <img src="https://www.kulturportali.gov.tr/contents/images/20171103134354731_ELAZIG%20113%20HARPUT%20KALESI%20SERVET%20UYGUN.jpg" width="1000" alt="Harput Kalesi">

                                          
                                        </div>

                            
                            
                            
                            <div class="image-baslik">
                                        <h3>Harput Kalesi</h3>
                                            <div class="image-aciklama"><p>Harput Kalesi, Elazığ'ın tarihi Harput Mahallesi'nde yer alan ve M.Ö. 8. yüzyıla kadar uzanan bir geçmişe sahip olan önemli bir tarihi yapıdır.<br><br>


Kalenin inşa tarihi kesin olarak bilinmemekle birlikte, Urartular dönemine kadar uzandığı tahmin edilmektedir. Kale, Persler, Romalılar, Bizanslılar, Araplar, Selçuklular ve Osmanlılar gibi çeşitli medeniyetlerin kontrolüne geçmiştir.<br><br>


Kalenin yapısı, doğal kaya formasyonlarına uyum sağlayacak şekilde inşa edilmiştir. İç ve dış kale olarak iki bölümden oluşur. Surları, dönem dönem yapılan restorasyonlarla güçlendirilmiştir.<br><br>


Harput Kalesi, Elazığ'ın önemli turistik noktalarından biridir. Kaleye çıkarak Elazığ ve çevresinin muhteşem manzarasını izlemek mümkündür.</p></div>
                                </div> 
                        </div>

                    

                    </div>
                </div>
            </div>
     
                    </div>
                </div>



            <div class="googlemaps"  style="margin-top:20px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3113.5954618040614!2d39.25473447506818!3d38.704135758085776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4076c74b4d0f46cd%3A0xf8249460d930ef5b!2sHarput%20Kalesi!5e0!3m2!1str!2str!4v1716491911276!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </body>
</html>
