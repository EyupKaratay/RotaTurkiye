<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8"> <!-- Türkçe karakter desteği için -->
        <link rel="stylesheet" href="{{ asset('asset/css/efesantikkenti.css') }}">
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
                                          <img src="https://images.pexels.com/photos/17127267/pexels-photo-17127267/free-photo-of-insanlar-yaz-dag-kalintilar.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  >
                                          <!-- <div class="text">Açıklama Bir</div> -->
                                        </div>

                                        <div class="mySlides">
                                          <div class="numbertext">2 / 3</div>
                                          <img src="https://images.pexels.com/photos/15233628/pexels-photo-15233628/free-photo-of-kent-simgesi-gorulecek-yer-seyahat-yolculuk.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" >
                                          <!-- <div class="text">Açıklama İki</div> -->
                                        </div>

                                        <div class="mySlides">
                                          <div class="numbertext">3 / 3</div>
                                          <img src="https://images.pexels.com/photos/17127268/pexels-photo-17127268/free-photo-of-insanlar-kent-simgesi-gorulecek-yer-anit.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  >
                                          <!-- <div class="text">Açıklama Üç</div> -->
                                        </div>

                            
                            
                            <!-- <img src= "https://images.pexels.com/photos/18035417/pexels-photo-18035417/free-photo-of-gun-batimi-seyahat-yolculuk-altin-saat.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  alt="İstanbul Boğazı"> -->
                                                <div class="image-baslik">
                                                            <h3>Efes Anntik Kenti :</h3>
                                                                <div class="image-aciklama"><p>

                    <strong>Efes Antik Kenti </strong>, İzmir'in Selçuk ilçesinde yer alan, tarih ve kültür açısından zengin bir antik şehir olup, dünyanın en önemli arkeolojik alanlarından biridir. Efes, MÖ 10. yüzyılda Yunanlılar tarafından kurulmuş, Roma İmparatorluğu döneminde ise Asya eyaletinin başkenti olarak büyük bir ticaret ve kültür merkezi olmuştur.<br>

                    Efes'in en bilinen yapılarından biri, muhteşem mimarisiyle öne çıkan Celsus Kütüphanesi'dir. 135 yılında tamamlanan bu yapı, dönemin en büyük kütüphanelerinden biri olarak inşa edilmiştir. Ayrıca, Büyük Tiyatro, 25.000 kişilik kapasitesiyle Roma döneminin en büyük açık hava tiyatrolarından biridir ve antik çağda gladyatör dövüşlerine ve tiyatro oyunlarına ev sahipliği yapmıştır.

                    Efes'te yer alan Artemis Tapınağı, dünyanın yedi harikasından biri olarak kabul edilmiştir. Ne yazık ki, günümüzde tapınaktan geriye sadece birkaç kalıntı kalmıştır. Ancak, bu kalıntılar bile, tapınağın büyüklüğünü ve ihtişamını gözler önüne sermektedir.

                    Kent, aynı zamanda Hristiyanlık tarihinde de önemli bir yere sahiptir. İsa'nın annesi Meryem'in Efes'te yaşadığına inanılır ve Meryem Ana Evi, bugün önemli bir hac merkezi olarak ziyaret edilmektedir.

                    Efes Antik Kenti, tarih boyunca çeşitli medeniyetlerin izlerini taşıyan eşsiz bir kültürel miras olarak, her yıl binlerce turist tarafından ziyaret edilmektedir. Bu antik şehir, ziyaretçilerine tarihin derinliklerine yolculuk yapma fırsatı sunar.</p></div>
                                                    </div> 
                                            </div>
                    </div>
                </div>
            </div>
        <div class="googlemaps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3146.550490116648!2d27.338882975027026!3d37.94093050257278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bead48f0b30447%3A0xd0fbf18a0924b6f8!2sEfes%20Antik%20Kenti!5e0!3m2!1str!2str!4v1716278828331!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </body>
</html>
