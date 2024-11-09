<?php

namespace Azuriom\Plugin\Dynmap\Controllers;

use Azuriom\Http\Controllers\Controller;
use Azuriom\Plugin\Dynmap\Models\Dynmap;

class DynmapHomeController extends Controller
{
    /**
     * Show the home plugin page.
     */
    public function index()
    {
        $url = Dynmap::find(1)->url ?? '';

        return view('dynmap::index', compact('url'));
    }
}
