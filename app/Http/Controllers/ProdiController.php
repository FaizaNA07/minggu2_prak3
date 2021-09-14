<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function mi(){
        return 'Manajemen Informatika';
    }

    public function ti(){
        return 'Teknik Informatika';
    }
}
