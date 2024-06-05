<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8"> <!-- Türkçe karakter desteği için -->
    <link rel="stylesheet" href="{{ asset('asset/css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="header" margin="10px"><!-- Navbar -->
        <div class="container"margin="10px">
            <div class="header-content">
                <div class="rotaturkiyebaslik" style="font: strong;">
                    <h1>Rota Türkiye</h1>
                </div>
                <div class="menu"  style="margin-top:4%;"> 
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

    
        
                    
        

    <div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 mt-4" style="width: 18rem;">
                <img class="card-img-top" src="https://images.pexels.com/photos/4587335/pexels-photo-4587335.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" ><a href="kategoriler-camiler.blade.php">Camiler</a></p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4  mt-4" style="width: 18rem;">
                <img class="card-img-top" src="https://images.pexels.com/photos/16494060/pexels-photo-16494060/free-photo-of-evler-orman-ev-gol.jpeg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text"><a href="kategoriler-dogalguzellikler.blade.php">Doğal Güzellikler</a></p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 mt-4" style="width: 18rem;">
                <img class="card-img-top" src="https://images.pexels.com/photos/15977394/pexels-photo-15977394/free-photo-of-kent-sehir-seyahat-yolculuk.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text"><a href="kategoriler-tarihiyerler.blade.php">Tarihi Yerler</a></p>
                </div>
            </div>
        </div>
    </div>

                    <!-- <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4 mt-4" style="width: 18rem;">
                                <img class="card-img-top" src="https://images.pexels.com/photos/4587335/pexels-photo-4587335.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-4 mt-4" style="width: 18rem;">
                                <img class="card-img-top" src="https://images.pexels.com/photos/4587335/pexels-photo-4587335.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-4 mt-4" style="width: 18rem;">
                                <img class="card-img-top" src="https://images.pexels.com/photos/4587335/pexels-photo-4587335.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->


            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>