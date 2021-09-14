<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment($name){
        return 'Menampilkan ama '.$name 'pesan '.$what;
    }
}
