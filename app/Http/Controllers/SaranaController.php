<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function news($id){
        return 'Menampilkan daftar sarana'.$id;
    }
}
