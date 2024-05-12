<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $var = " ini function didalam homecontroller";
        echo $var;
    }

    public function tambah($var1, $var2){
        $total = $var1+$var2;
        echo 'hasilnya adalah :'.$total;
    }
}
