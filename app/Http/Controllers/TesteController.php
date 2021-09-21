<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TesteController extends Controller
{

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('home');
    }

    /**
     * @return RedirectResponse
     */
    public function about(): RedirectResponse
    {
        return redirect()->route('about');
    }

    /**
     * @return Application|Factory|View
     */
    public function isabout()
    {
        return view('about');
    }
}
