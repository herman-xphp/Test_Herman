<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function soalSatu()
    {
        $input =  "aaabbcccddeddbzaa";
        // $output = "a5b3c3d4ez";



        $output = "";


        return view('soal1', compact('output'));
    }
    public function soalDua()
    {
        $ar = [9,3,7,8,2,6,1,4,10,2,2,3];

        while ($i = 0 <= $ar.length()) {
            # code...
        }


        $output = [];

        return view('soal2', compact('output'));
    }
    public function soalTiga()
    {
        return view('soal3');
    }

    public function proses(Request $request)
    {
        $tipeBarang = $request->tipe_barang;
        $jml_barang = $request->jml_barang;

        if($tipeBarang = 'A')
        {
            $harga = 99900;

            if($jml_barang > 50)
            {
                $disc = 100 * 00.5;
                $total = $harga - $disc;
            }


        }

        return view('soal3', );
    }
}
