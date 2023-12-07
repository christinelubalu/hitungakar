<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AkarKuadratController extends Controller
{
    public function index()
    {
        return view('akarkuadrat.index');
    }

    public function hitungAkarKuadrat(Request $request)
    {
        $request->validate([
            'angka' => 'required|numeric|between:0,1000',
        ]);

        $angka = $request->input('angka');
        $akarKuadrat = sqrt($angka);

        return response()->json(['hasil' => $akarKuadrat]);
    }
}
