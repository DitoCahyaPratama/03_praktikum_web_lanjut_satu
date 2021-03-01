<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir(){
        return view('pages.programs.karir');
    }

    public function magang(){
        return view('pages.programs.magang');
    }

    public function kunjunganIndustri(){
        return view('pages.programs.kunjungan-industri');
    }
}
