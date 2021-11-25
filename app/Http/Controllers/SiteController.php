<?php

namespace App\Http\Controllers;

use App\Models\Dark;
use App\Http\Controllers\Controller;
use Hexadog\ThemesManager\Facades\ThemesManager;

class SiteController extends Controller
{
    public function __construct()
    {
        $theme = Config('themes-manager.theme_active');
        ThemesManager::set($theme);
    }

    public function home()
    {
        $themes = Dark::all();

        return view('home', compact('themes'));
    }
}
