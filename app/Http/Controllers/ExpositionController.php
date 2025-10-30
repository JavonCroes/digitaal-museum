<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exposition;

class ExpositionController extends Controller
{
    // Algemene geschiedenis
    public function showHistory()
    {
        $expositions = Exposition::where('category', 'geschiedenis')->get();
        return view('expositions.geschiedenis', compact('expositions'));
    }

    // Historische figuren
    public function showFigures()
    {
        $expositions = Exposition::where('category', 'figuren')->get();
        return view('expositions.figuren', compact('expositions'));
    }

    // Gevechten / Slagen
    public function showBattles()
    {
        $expositions = Exposition::where('category', 'gevechten')->get();
        return view('expositions.gevechten', compact('expositions'));
    }

    // Individuele expositie
    public function show($id)
    {
        $exposition = Exposition::findOrFail($id);
        return view('expositions.show', compact('exposition'));
    }
}
