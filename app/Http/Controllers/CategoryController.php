<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function edugames(){
        return view('pages.categories.marbel-edu-games');
    }

    public function kidsgames(){
        return view('pages.categories.marbel-and-friends-kids-games');
    }

    public function storybooks(){
        return view('pages.categories.riri-story-books');
    }

    public function kidsongs(){
        return view('pages.categories.kolak-kids-songs');
    }
}
