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
                                          <img src="https://images.pexels.com/photos/14079249/pexels-photo-14079249.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  >
                                          <!-- <div class="text">Açıklama Bir</div> -->
                                        </div>

                                        <div class="mySlides">
                                          <div class="numbertext">2 / 3</div>
                                          <img src="https://images.pexels.com/photos/10020088/pexels-photo-10020088.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" >
                                          <!-- <div class="text">Açıklama İki</div> -->
                                        </div>

                                        <div class="mySlides">
                                          <div class="numbertext">3 / 3</div>
                                          <img src="https://images.pexels.com/photos/23731591/pexels-photo-23731591/free-photo-of-kent-sehir-sanat-bina.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  >
                                          <!-- <div class="text">Açıklama Üç</div> -->
                                        </div>

                            
                            
                            <!-- <img src= "https://images.pexels.com/photos/18035417/pexels-photo-18035417/free-photo-of-gun-batimi-seyahat-yolculuk-altin-saat.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  alt="İstanbul Boğazı"> -->
                            <div class="image-baslik">
                                        <h3>Ayasofya Cami :</h3>
                                            <div class="image-aciklama"><p>Ayasofya: Tarihin Işığında Bir Mimarlık Harikası

İstanbul’un kalbinde yer alan Ayasofya, dünya tarihinin en önemli yapılarından biridir. 537 yılında Bizans İmparatoru I. Justinianus tarafından kilise olarak inşa edilen yapı, zamanla cami ve müze olarak kullanılmış, 2020 yılında tekrar cami olarak ibadete açılmıştır.<br>
<strong>Mimari ve Sanatsal Özellikler:</strong>

Ayasofya'nın en dikkat çekici özelliği devasa kubbesidir. 55,6 metre yüksekliğindeki bu kubbe, yapının üzerinde adeta bir taç gibi durur. İç mekan süslemeleri arasında yer alan mozaikler, Bizans sanatının en güzel örneklerini sunar.<br>
<strong>Tarihi ve Kültürel Önemi:</strong>

1453 yılında İstanbul’un fethiyle camiye dönüştürülen Ayasofya, Osmanlı döneminde önemli bir ibadet merkezi olmuştur. 1935 yılında müze olarak ziyaretçilere açılan yapı, 2020 yılında yeniden cami olarak kullanılmaya başlanmıştır.<br>
<strong>Ziyaret Bilgileri:</strong>

Sultanahmet Meydanı'nda yer alan Ayasofya, Topkapı Sarayı ve Sultanahmet Camii gibi diğer tarihi yapılarla yan yanadır. Sabah erken saatlerde ziyaret etmek kalabalıktan kaçınmayı sağlar.<br>
<strong>Sonuç:</strong>

Ayasofya, mimarisi ve tarihiyle İstanbul’un en önemli kültürel miraslarından biridir. Bu eşsiz yapıyı ziyaret ederek geçmişin derinliklerinde bir yolculuğa çıkabilirsiniz.</p></div>
                                </div> 
                        </div>

                    

                    </div>
                </div>
            </div>


                                
                    </div>
                </div>



            <div class="googlemaps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.761778116486!2d28.97760007518382!3d41.00858701940725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab9be92011c27%3A0x236e6f6f37444fae!2sAyasofya-i%20Kebir%20Cami-i%20%C5%9Eerifi!5e0!3m2!1str!2str!4v1716229731990!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </body>
</html>
