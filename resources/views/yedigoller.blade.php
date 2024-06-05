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
                                          <img src="https://yedigoller.com/wp-content/uploads/2024/01/yedigoller-national-park_7-1024x680.jpg"  >
                                          <!-- <div class="text">Açıklama Bir</div> -->
                                        </div>

                                        <div class="mySlides">
                                          <div class="numbertext">2 / 3</div>
                                          <img src="https://cdn1.ntv.com.tr/gorsel/erswn3v1GUS2RiPyjXnx6w.jpg?width=1000&mode=crop&scale=both" >
                                          <!-- <div class="text">Açıklama İki</div> -->
                                        </div>

                                        <div class="mySlides">
                                          <div class="numbertext">3 / 3</div>
                                          <img src="https://cdn.pixabay.com/photo/2021/01/10/11/08/lake-5904762_1280.jpg"  >
                                          <!-- <div class="text">Açıklama Üç</div> -->
                                        </div>

                            
                            <div class="image-baslik">
                                        <h3>YediGöller </h3>
                                            <div class="image-aciklama"><p>Türkiye'nin doğal güzellikleriyle ünlü bölgelerinden biri olan Yedigöller Milli Parkı, Bolu ilinin kuzeyinde, Bolu Dağları'nın eteklerinde yer alır. İsminden de anlaşılacağı gibi, Yedigöller, birbirinden güzel yedi gölden oluşur ve her biri kendine özgü bir manzaraya sahiptir. Bu doğal cennet, ziyaretçilerine sessizlik, huzur ve doğanın içinde geçen keyifli vakitler sunar.<br>
<br>
Yedigöller'in etrafı çam, kayın ve köknar ağaçlarıyla kaplıdır ve göller arasında yürüyüş yapmak için ideal bir ortam sunar. Yürüyüş parkurları boyunca ilerlerken, kuş sesleri eşliğinde göl manzaralarının tadını çıkarabilirsiniz. Göl kenarlarında piknik yapabilir, temiz havanın keyfini çıkarabilir ve suyun serinletici etkisiyle dinlenebilirsiniz.<br>
<br>
Yedigöller'in en ünlü gölleri arasında Büyükgöl, Sazlıgöl, İncegöl ve Deringöl bulunur. Her biri kendine özgü bir atmosfere sahip olan bu göller, ziyaretçilere doğanın renklerini ve seslerini keşfetme fırsatı sunar. Özellikle sonbaharda, göllerin etrafını saran ağaçların renk cümbüşü, fotoğraf tutkunlarını cezbetmektedir.<br>
<br>
Yedigöller, sadece doğal güzellikleriyle değil, aynı zamanda çeşitli faaliyet olanaklarıyla da dikkat çeker. Burada kamp yapabilir, doğa yürüyüşleri düzenleyebilir, bisiklet sürerek çevreyi keşfedebilir ve yaban hayatını gözlemleyebilirsiniz. Ayrıca, milli parkta bulunan tesislerde konaklayabilir ve yöresel lezzetleri tatma fırsatı bulabilirsiniz.<br>
<br>
Yedigöller Milli Parkı, şehir hayatının stresinden uzaklaşmak ve doğanın kollarında huzurlu bir kaçış yaşamak isteyen herkes için mükemmel bir destinasyondur. Doğal güzellikleriyle ve etkileyici atmosferiyle Yedigöller, ziyaretçilere unutulmaz bir deneyim sunar.</p></div>
                                </div> 
                        </div>

                    

                    </div>
                </div>
            </div>


                                
                    </div>
                </div>



            <div class="googlemaps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12057.092316205784!2d31.725533550946427!3d40.93168190296681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409d1f0cb103cebf%3A0xf012ab7b32a4f9cc!2sYedig%C3%B6ller!5e0!3m2!1str!2str!4v1716470403247!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </body>
</html>
