<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;

class MainController extends Controller
{
    public function write1()
	{

        $first = Request::input('first');
        $second = Request::input('second');
        $operator = Request::input('operator');
        $result="";
        if(is_numeric($first)&&is_numeric($second)){
            switch($operator){
                case "足し算":
                $result=$first+$second;
                break;
                case "引き算":
                $result=$first-$second;
                break;
                case "掛け算":
                $result=$first*$second;
                break;
                case "割り算":
                $result=$first/$second;
            }
        }
	    return view('calc.testform',compact('first','second','result'));
	}
}
