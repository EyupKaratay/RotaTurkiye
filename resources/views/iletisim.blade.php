<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8"> <!-- Türkçe karakter desteği için -->
        <link rel="stylesheet" href="{{ asset('asset/css/iletisim.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div class="header"><!-- Navbar -->
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

            

            <div class="iletisimicerik">
                <div class="container">
                        <div class="content">
                            <div class="">
                                
                                <p>Telefon numarası:536-268-33-81</p>
                                <p>E-posta:rotaturkiye@gmail.com</p>
                                        
                                 
                            </div>
                        </div>
                </div>
            </div>


            <div class="container3">
                <!--Kullanıcı mesjı kısmı-->
                <div class="form">
                    <form name="kullaniciformu" action="mail_gonder.php" onsubmit="return validateForm()" method="post">
                        <input type="text" id="ad" name="ad" placeholder="Adınız" required><br>
                        <input type="text" id="soyad" name="soyad" placeholder="Soyadınız" required><br>
                        <input type="email" id="email" name="email" placeholder="E-posta Adresiniz" required><br>
                        <textarea name="mesaj" id="mesaj" placeholder="Mesajınızı buraya yazın" required></textarea><br>
                        <button type="button" onclick="veriGonder()">Gönder</button>
                    </form>
                </div>
                
                

                
           
            <script>
                function validateForm() 
                {
                    var valueInput , result ,   message;
                    valueInput=document.getElementById('ad')
                    result=document.getElementById('result');
                    result.style.display="block";
                    if(valueInput.checkValidity()==false)
                        {
                            message = valueInput.validationMessage;
                        }
                }
             </script>
                    <script>
                    function veriGonder() {
                        var ad = document.getElementById('ad').value;
                        var soyad = document.getElementById("soyad").value;
                        var email = document.getElementById("email").value;
                        var mesaj = document.getElementById("mesaj").value;

                            // E-posta adresinin doğruluğunu kontrol etmek için bir regex kullanabiliriz
                        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        if (!emailRegex.test(email)) {
                            alert("Lütfen geçerli bir e-posta adresi girin.");
                            return;
                        }

                        console.log("Ad: " + ad);
                        console.log("Soyad: " + soyad);
                        console.log("E-posta: " + email);
                        console.log("Mesaj: " + mesaj);

                                function validateForm() {
                                var ad = document.getElementById('ad').value;
                                if (ad == "") {
                                    alert("Geçersiz isim");
                                    return false;
                                }
                            }


                    }
                </script>




            </div>


            <!-- <form>
                <div class="form group">
                    <label >Ad-Soyad</label>
                    <input type="text" class="form-control" name="yourname">
                    <small class="form-text  text muted ">Bu alan zorunlu</small>
                </div>
                <div class="form group">
                    <label >E-Posta</label>
                    <input type="text" class="form-control" name="email">
                    <small class="form-text  text muted ">Bu alan zorunlu</small>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Gönder</button>
            </form> -->
        
        
        
    </body>
</html>