<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function manage()
    {
        return view('/Artikel/manage'); 
    }
}
