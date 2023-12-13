<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\barang;

class ViewController extends Controller
{
    public $id;
    public function barang_id($id)
    {
        $this->id = $id;
    }
    public function indexAbout()
    {
        if (Auth::check()) {
            return view('afterlogin.about-us');
        } else {
            return view('beforelogin.about-us');
        }
    }
    public function indexJualBarang()
    {

        if (Auth::check()) {
            return view('afterlogin.jual-barang');
        } else {
            return redirect('/indexLogin');
        }
    }
}
