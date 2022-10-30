<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function landing()
    {
        $jumlahberita = DB::table('posts')->paginate(4);
        return view('landing', ['jumlahberita' => $jumlahberita]);
    }

    public function menuberita()
    {
        $jumlahberita = DB::table('posts')->paginate(12);
        return view('menuberita', ['jumlahberita' => $jumlahberita]);
    }
    public function showberita($id)
    {
        $berita = DB::table('posts')->where('id', $id)->first();
        return view('showberita', ['berita'=>$berita]);
    }
}
