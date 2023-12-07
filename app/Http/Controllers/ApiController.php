<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
public function postAPI(Request $request){
 //dd($request->bilangan);
 $start_time = microtime(true); 
 $request->validate([
 'bilangan' => 'required|numeric|min:0',
 ]);
 Http::post('http://127.0.0.1:8000/api/hitung-akar',[
 'number' => $request->bilangan,
 ]);
 
 $end_time = microtime(true); // Selesai mengukur waktu 
proses
 $execution_time = ($end_time - $start_time); 
 $response = Akar::latest('id')->first();
 $response->waktu = $execution_time;
 
 $response->update();
 
 
 return redirect('/akar-kuadrat');
 }
 public function postPLSQL(Request $request){
 $start_time = microtime(true); 
 
 $request->validate([
 'bilangan1' => 'required|numeric|min:0',
 ]);
 //dd($request->bilangan1);
 
 DB::select('CALL hitungAkar(?)', array($request-
>bilangan1));
 $end_time = microtime(true); // Selesai mengukur waktu 
proses
 $execution_time = ($end_time - $start_time); 
 $response = Akar::latest('id')->first();
 $response->waktu = $execution_time;
13
 
 $response->update();
 
 return redirect('/akar-kuadrat')
 }