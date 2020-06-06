<?php

namespace App\Http\Controllers;

use App\Divice;
use App\DiviceData;
use Illuminate\Http\Request;

class DiviceControll extends Controller
{
   public function DiviceData(Request $request){


        $card=new Divice();
        $DevID=$request->DevID;
        $distance=$request->distance;
        $gas1=$request->gas1;
        $gas2=$request->gas2;
        $gas3=$request->gas3;
        $date=date("Y/m/d");



        if (!empty($DevID)) {
        $card->DevID = $DevID;
		$card->distance = $distance;
		$card->gas1 = $gas1;
        $card->gas2 = $gas2;
        $card->gas3 = $gas3;
		$card->date = $date;
		$card->save();
            return response($card)->header('Content-Type', 'text/plain');
        }
       else{

            return response('There is Error In the Divice')->header('Content-Type', 'text/plain');
        }
    }
    public function welcome(){
        $date=date("Y/m/d");
        $allinfom =Divice::where('date', '=', $date)->get()->last();


        return view('admin/index',compact('allinfom'));

    }

}
