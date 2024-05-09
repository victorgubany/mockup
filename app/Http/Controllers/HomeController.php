<?php

namespace App\Http\Controllers;

use App\Models\ServicesModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home (Request $request){
        if($request->method()=='GET'){
            $servicos_Obras = ServicesModel::where('segmento',"Obras")->get();
            $servicos_Logistica = ServicesModel::where('segmento',"Logistica")->get();
            $servicos_Escritorio = ServicesModel::where('segmento',"Escritório")->get();
            $servicos_Industria = ServicesModel::where('segmento','Indústria')->get();
            $servicos_Eventos = ServicesModel::where('segmento',"Eventos")->get();
            // dd($servicos_Escritorio);
            return view('home',['obras'=>$servicos_Obras, 'logistica'=>$servicos_Logistica, 'escritorio'=>$servicos_Escritorio,'industria'=>$servicos_Industria,'eventos'=>$servicos_Eventos]);
            
        }
        
    }
}