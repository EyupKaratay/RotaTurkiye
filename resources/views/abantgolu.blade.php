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
                                          <img src="https://images.pexels.com/photos/16494060/pexels-photo-16494060/free-photo-of-evler-orman-ev-gol.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  >
                                          <!-- <div class="text">Açıklama Bir</div> -->
                                        </div>

                                        <div class="mySlides">
                                          <div class="numbertext">2 / 3</div>
                                          <img src="https://images.pexels.com/photos/20281801/pexels-photo-20281801/free-photo-of-soguk-alginligi-soguk-evler-orman.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" >
                                          <!-- <div class="text">Açıklama İki</div> -->
                                        </div>

                                        <div class="mySlides">
                                          <div class="numbertext">3 / 3</div>
                                          <img src="https://images.pexels.com/photos/19070824/pexels-photo-19070824/free-photo-of-peyzaj-manzara-daglar-kent-simgesi.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  >
                                          <!-- <div class="text">Açıklama Üç</div> -->
                                        </div>

                            
                            
                            
                            <div class="image-baslik">
                                        <h3>Abant Gölü </h3>
                                            <div class="image-aciklama"><p>Bolu'nun mistik ve doğal güzelliklerinden biri olan Abant Gölü, Türkiye'nin kuzeybatısındaki Bolu ilinin, merkezine yaklaşık 33 kilometre uzaklıkta yer alır. Yıl boyunca doğaseverlerin ve turistlerin ilgisini çeken bu muazzam göl, sakin atmosferi, temiz havası ve etkileyici manzaralarıyla ünlüdür.<br>
<br>
Abant Gölü, etrafını saran ormanlar, yemyeşil doğası ve serin suyuyla adeta bir doğal cennet gibidir. Göl, Abant Tabiat Parkı'nın bir parçası olarak korunmaktadır ve çevresindeki doğal yaşamın zenginliğiyle bilinir. Burada yürüyüş yapabilir, piknik yapabilir ve kuş gözlemi yapabilirsiniz. Gölün etrafında dolaşırken, çam ağaçlarının kokusu ve kuşların cıvıltısı size eşlik eder.<br>
<br>
Abant Gölü, her mevsimde ayrı bir güzelliğe sahiptir. Yaz aylarında serin sularında yüzme imkanı bulabilir ve çevresindeki yürüyüş parkurlarında doğanın tadını çıkarabilirsiniz. Sonbaharda ise göl çevresindeki ağaçların renk cümbüşü, fotoğraf tutkunlarını cezbeder. Kış mevsiminde ise göl ve çevresi bembeyaz bir örtüyle kaplanır, kış sporları yapmak için ideal bir mekandır.<br>
<br>
Abant Gölü, sadece doğal güzellikleriyle değil, aynı zamanda çevresindeki konaklama tesisleri, restoranlar ve aktivite olanaklarıyla da ziyaretçilerine keyifli bir deneyim sunar. Göl kenarında bulunan otellerde konaklayarak, doğanın tadını çıkarma fırsatını kaçırmayabilirsiniz.<br>
<br>
Bolu'nun bu doğal hazine noktası, şehir hayatının stresinden uzaklaşmak ve temiz hava almak isteyen herkes için mükemmel bir kaçış noktasıdır. Abant Gölü, Türkiye'nin en güzel doğal alanlarından biri olup, her ziyaretçisine unutulmaz anılar sunar.</p></div>
                                </div> 
                        </div>

                    

                    </div>
                </div>
            </div>


                                
                    </div>
                </div>



            <div class="googlemaps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12116.231262826637!2d31.273485190648234!3d40.60654802499731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409d66c499de5db3%3A0x69d6b4eaa695b309!2zQWJhbnQgR8O2bMO8!5e0!3m2!1str!2str!4v1716466275868!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </body>
</html>
