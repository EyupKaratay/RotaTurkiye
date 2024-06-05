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
                                          <img src="https://images.pexels.com/photos/11850208/pexels-photo-11850208.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  >
                                          <!-- <div class="text">Açıklama Bir</div> -->
                                        </div>

                                        <div class="mySlides">
                                          <div class="numbertext">2 / 3</div>
                                          <img src="https://images.pexels.com/photos/13385857/pexels-photo-13385857.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" >
                                          <!-- <div class="text">Açıklama İki</div> -->
                                        </div>

                                        <div class="mySlides">
                                          <div class="numbertext">3 / 3</div>
                                          <img src="https://images.pexels.com/photos/15349389/pexels-photo-15349389/free-photo-of-kent-sehir-seyahat-yolculuk.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  >
                                          <!-- <div class="text">Açıklama Üç</div> -->
                                        </div>

                            
                            
                            
                            <div class="image-baslik">
                                        <h3>Fatih Cami </h3>
                                            <div class="image-aciklama"><p>Fatih Camii, İstanbul'un tarihî yarımadasında bulunan ve Osmanlı İmparatorluğu'nun ilk büyük camilerinden biridir. II. Mehmed (Fatih Sultan Mehmed) tarafından 15. yüzyılın sonlarında inşa ettirilmiştir. Cami, İstanbul'un fethinden sonra Bizans İmparatorluğu'nun merkezi olan Ayasofya'nın yakınında yer alır.<br>
<br>
Fatih Camii, Osmanlı mimarisinin önemli bir örneğidir. Geniş avlusu, devasa kubbesi ve dört minaresiyle dikkat çeker. İç mekanındaki süslemeler ve mihrap, dönemin sanatının zarafetini yansıtır.<br>
<br>
Caminin etrafındaki çeşme ve türbe kompleksi, Osmanlı döneminin sosyal ve dini yaşamına dair önemli bir iz bırakır. Fatih Camii, İstanbul'un tarihî ve kültürel mirasının ayrılmaz bir parçasıdır ve ziyaretçiler için önemli bir turistik noktadır.</p></div>
                                </div> 
                        </div>

                    

                    </div>
                </div>
            </div>


                                
                    </div>
                </div>



            <div class="googlemaps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12041.024306432902!2d28.939619017382807!3d41.019653200000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caba21ca2b1031%3A0xbcb8746d3c867663!2sFatih%20Camii!5e0!3m2!1str!2str!4v1716464788841!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </body>
</html>
