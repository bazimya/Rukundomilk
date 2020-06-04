<?php

namespace App\Http\Controllers;

use App\DiviceData;
use Illuminate\Http\Request;

class DiviceControll extends Controller
{
   public function DiviceData(Request $request){


        $card=new DiviceData();
        $DevID=$request->DevID;
        $distance=$request->distance;
        $gas1=$request->gas1;
        $gas2=$request->gas2;



        if (!empty($DevID)) {
            return response($DevID)->header('Content-Type', 'text/plain');
        }
       else{

            return response('There Divice Or Dairt ')->header('Content-Type', 'text/plain');
        }
    }

}
