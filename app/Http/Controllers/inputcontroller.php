<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inputcontroller extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function kalkulator()
    {
        return view('kalkulator.kalkulator');
    }

    public function input(Request $request){
        $a=$request->angka1;
        $b=$request->angka2;
        $opr=$request->operator;
        $hasil = $request->hasil;

        if($opr == "kali"){
            $hasil = $a*$b;
        }
        elseif($opr == "bagi"){
            if($a == 0){
                $hasil = "error";
            }
            elseif($b == 0){
                $hasil = "error";
            }
            else{
                $hasil = $a/$b;
            }
        }
        elseif($opr == "tambah"){
            $hasil = $a+$b;
        }
        elseif($opr == "kurang"){
            $hasil = $a-$b;
        }
        else{
            $hasil == "";
            return redirect()->route('kalkulator');
        }

        return view('kalkulator.count', compact('hasil'));
    }

    public function manual(){
        return view('kalkulator.kalkulatorjs');
    }
}
