<?php

namespace Azuriom\Plugin\Dynmap\Controllers\Admin;

use Azuriom\Http\Controllers\Controller;
use Azuriom\Plugin\Dynmap\Models\Dynmap;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Show the home admin page of the plugin.
     */
    public function index()
    {
        $currentUrl = Dynmap::find(1)->url ?? '';

        return view('dynmap::admin.index', compact('currentUrl'));
    }

    /**
     * Update the URL in the dynmap table.
     */
    public function update(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
        ]);

        Dynmap::updateOrCreate(
            ['id' => 1],
            ['url' => $request->input('url')]
        );

        return redirect()->back()->with('success', 'URL updated successfully.');
    }
    public function reset()
    {
        $dynmap = Dynmap::find(1);
        $dynmap->url = null;
        $dynmap->save();

        return redirect()->back()->with('success', 'URL reset successfully.');
    }
}
