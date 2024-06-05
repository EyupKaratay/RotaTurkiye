<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome.blade.php', function () { // nu satırda tırnak içerisine dosya adını yazacaksın
    return view('welcome');  //bu satırda tırnak içerisine dosya adının blade'den önceki kısmı yazılır.
})->name('welcome');   //bu satırada linkli yazının link kısmında ne yazacağını belirliyosun

Route::get('iletisim.blade.php', function () { // nu satırda tırnak içerisine dosya adını yazacaksın
    return view('iletisim'); //bu satırda tırnak içerisine dosya adının blade'den önceki kısmı yazılır.
})->name('iletisim');

Route::get('ayasofya.blade.php', function () { // nu satırda tırnak içerisine dosya adını yazacaksın
    return view('ayasofya');  //bu satırda tırnak içerisine dosya adının blade'den önceki kısmı yazılır.
})->name('ayasofya');   //bu satırada linkli yazının link kısmında ne yazacağını belirliyosun

Route::get('efesantikkenti.blade.php', function () { // nu satırda tırnak içerisine dosya adını yazacaksın
    return view('efesantikkenti');  //bu satırda tırnak içerisine dosya adının blade'den önceki kısmı yazılır.
})->name('efesantikkenti');   //bu satırada linkli yazının link kısmında ne yazacağını belirliyosun

Route::get('istanbulbogazi.blade.php', function () { // nu satırda tırnak içerisine dosya adını yazacaksın
    return view('istanbulbogazi');  //bu satırda tırnak içerisine dosya adının blade'den önceki kısmı yazılır.
})->name('istanbulbogazi');   //bu satırada linkli yazının link kısmında ne yazacağını belirliyosun

Route::get('login', function () { // nu satırda tırnak içerisine dosya adını yazacaksın
    return view('login');  //bu satırda tırnak içerisine dosya adının blade'den önceki kısmı yazılır.
})->name('login');   //bu satırada linkli yazının link kısmında ne yazacağını belirliyosun

Route::get('registerdas.blade.php', function () { // nu satırda tırnak içerisine dosya adını yazacaksın
    return view('registerad');  //bu satırda tırnak içerisine dosya adının blade'den önceki kısmı yazılır.
})->name('registerdas');   //bu satırada linkli yazının link kısmında ne yazacağını belirliyosun


Route::get('kategoriler.blade.php', function () { // nu satırda tırnak içerisine dosya adını yazacaksın
    return view('kategoriler');  //bu satırda tırnak içerisine dosya adının blade'den önceki kısmı yazılır.
})->name('kategoriler');   //bu satırada linkli yazının link kısmında ne yazacağını belirliyosun


Route::get('kategoriler-camiler.blade.php', function () { // bu satırda tırnak içerisine dosya adını yazacaksın
    return view('kategoriler-camiler');  //bu satırda tırnak içerisine dosya adının blade'den önceki kısmı yazılır.
})->name('kategoriler-camiler');   //bu satırada linkli yazının link kısmında ne yazacağını belirliyosun

Route::get('kategoriler-dogalguzellikler.blade.php', function () { // bu satırda tırnak içerisine dosya adını yazacaksın
    return view('kategoriler-dogalguzellikler');  //bu satırda tırnak içerisine dosya adının blade'den önceki kısmı yazılır.
})->name('kategoriler-dogalguzellikler');   //bu satırada linkli yazının link kısmında ne yazacağını belirliyosun

Route::get('kategoriler-tarihiyerler.blade.php', function () { // bu satırda tırnak içerisine dosya adını yazacaksın
    return view('kategoriler-tarihiyerler');  //bu satırda tırnak içerisine dosya adının blade'den önceki kısmı yazılır.
})->name('kategoriler-tarihiyerler');   //bu satırada linkli yazının link kısmında ne yazacağını belirliyosun

Route::get('suleymaniyecami.blade.php', function () { // bu satırda tırnak içerisine dosya adını yazacaksın
    return view('suleymaniyecami');  //bu satırda tırnak içerisine dosya adının blade'den önceki kısmı yazılır.
})->name('suleymaniyecami');   //bu satırada linkli yazının link kısmında ne yazacağını belirliyosun

Route::get('fatihcami.blade.php', function () { // bu satırda tırnak içerisine dosya adını yazacaksın
    return view('fatihcami');  //bu satırda tırnak içerisine dosya adının blade'den önceki kısmı yazılır.
})->name('fatihcami');   //bu satırada linkli yazının link kısmında ne yazacağını belirliyosun

Route::get('abantgolu.blade.php', function () { // bu satırda tırnak içerisine dosya adını yazacaksın
    return view('abantgolu');  //bu satırda tırnak içerisine dosya adının blade'den önceki kısmı yazılır.
})->name('abantgolu');   //bu satırada linkli yazının link kısmında ne yazacağını belirliyosun

Route::get('vangolu.blade.php', function () { // bu satırda tırnak içerisine dosya adını yazacaksın
    return view('vangolu');  //bu satırda tırnak içerisine dosya adının blade'den önceki kısmı yazılır.
})->name('vangolu');   //bu satırada linkli yazının link kısmında ne yazacağını belirliyosun

Route::get('yedigoller.blade.php', function () { // bu satırda tırnak içerisine dosya adını yazacaksın
    return view('yedigoller');  //bu satırda tırnak içerisine dosya adının blade'den önceki kısmı yazılır.
})->name('yedigoller');   //bu satırada linkli yazının link kısmında ne yazacağını belirliyosun


Route::get('harputkalesi.blade.php', function () { // bu satırda tırnak içerisine dosya adını yazacaksın
    return view('harputkalesi');  //bu satırda tırnak içerisine dosya adının blade'den önceki kısmı yazılır.
})->name('harputkalesi');   //bu satırada linkli yazının link kısmında ne yazacağını belirliyosun

Route::get('gobeklitepe.blade.php', function () { // bu satırda tırnak içerisine dosya adını yazacaksın
    return view('gobeklitepe');  //bu satırda tırnak içerisine dosya adının blade'den önceki kısmı yazılır.
})->name('gobeklitepe');   //bu satırada linkli yazının link kısmında ne yazacağını belirliyosun


Route::get('aspendos.blade.php', function () { // bu satırda tırnak içerisine dosya adını yazacaksın
    return view('aspendos');  //bu satırda tırnak içerisine dosya adının blade'den önceki kısmı yazılır.
})->name('aspendos');   //bu satırada linkli yazının link kısmında ne yazacağını belirliyosun


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');//home yazılıydı

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');
});


//sonradan bulup ekledim
// Route::middleware(['auth'])->group(function () {
//     // Bu grup içindeki tüm route'lar için auth middleware'i uygulanır
//     Route::get('/profile', 'App\Http\Controllers\ProfileController@show');
// });



