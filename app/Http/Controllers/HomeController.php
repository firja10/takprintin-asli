<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infokampus;
use App\Models\Infojurusan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('landing');
    }

    public function dashboard()
    {
        # code...
        return view('dashboard');
    }

        public function pendataan()
    {
        # code...
        return view('pendataan');
    }

    public function infokampus()
    {
          //
          $infokampuses = Infokampus::all();
          # code...
          return view('infokampusjurusan.infokampus',compact('infokampuses'));
    }

    public function adminHome()
    {
        # code...
        return view('admin.home');
    }


    public function forminfokampus()
    {
        # code...
        return view('admin.forminfokampus');
    }



}
