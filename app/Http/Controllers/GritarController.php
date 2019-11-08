<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GritarController extends Controller
{
    public function gritar()
    {
        // return 'Gritaar !!!';
        return view('gritar.index');
    }
    public function gritarMultiplo($numero)
    {
        $conts = str_repeat('a',$numero);
        // return "Grit{$conts}r !!!";
        return view('gritar.index',compact('conts'));
    }
}
