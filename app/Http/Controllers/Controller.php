<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    

    public function register(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect()->route('anasayfa'); // Kayıt başarılıysa anasayfaya yönlendir
    }
}

/*public function register(Request $request)
{
    $user = new User;
    $user->name = $request->input('name');
    $user->surname = $request->input('surname');
    $user->email = $request->input('email');
    $user->password = bcrypt($request->input('password'));
    $user->save();

    return redirect()->route('anasayfa'); // Kayıt başarılıysa anasayfaya yönlendir
}*/



namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


