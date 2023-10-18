<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Breaking Bad',
            'Game of Thrones',
            'Better Call Saul'
        ];
        $html = "<ul>";
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }
        $html .= "</ul>";

        return $html;
    }
}
