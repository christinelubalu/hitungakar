<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CalculatorController extends Controller
{
    public function calculate(Request $request)
    {
        // Validasi input
        $request->validate([
            'number' => 'required|numeric|max:1000',
        ], [
            'number.required' => 'Harap masukkan angka.',
            'number.numeric' => 'Input harus berupa angka.',
            'number.max' => 'Nilai tidak boleh lebih dari 1000.',
        ]);

        // Ambil nilai dari input
        $number = $request->input('number');

        // Hitung nilai akar kuadrat
        $result = sqrt($number);

        return view('calculator')->with(['result' => $result]);
    }
}
