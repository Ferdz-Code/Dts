<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function document() { return view('document'); }
    public function received() { return view('received'); }
    public function outgoing() { return view('outgoing'); }
    public function internal() { return view('internal'); }
    public function closed()   { return view('closed');   }

    public function mydocument() { return view('mydocument'); }
    public function myreceived() { return view('myreceived'); }
    public function myoutgoing() { return view('myoutgoing'); }
    public function myinternal() { return view('myinternal'); }
    public function myclosed()   { return view('myclosed');   }

    public function report() { return view('report'); }
    public function user() { return view('user'); }
    public function role() { return view('role'); }

    public function faqs() { return view('faqs'); }
    public function downloadable() { return view('downloadable'); }
    public function settings() { return view('settings'); }

    public function tab_received() { return view('tab_received'); }
    public function tab_myreceived() { return view('tab_myreceived'); }

    public function tab_account() { return view('tab_account'); }
    public function tab_help() { return view('tab_help'); }

    public function reply() { return view('reply'); }
}
