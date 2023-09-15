<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportagesController extends Controller
{
    public function getHome(){
        $format = '%A %D %B %Y %H:%M:%S';
        $datum = strftime($format);
        return view('home')->with('datum', $datum);
    }

    public function getKlimaatcrisis(){
        $format = '%H';
        $uur = strftime($format);
        return view('klimaatcrisis')->with('uur', $uur);
    }

    public function getCo2uitstoot(){
        $format = '%H';
        $uur = strftime($format);
        return view('co2uitstoot')->with('uur', $uur);
    }
}
