<?php

namespace App\Http\Controllers;

use App\Divice;
use App\DiviceData;
use Illuminate\Http\Request;

class DiviceControll extends Controller
{
   public function DiviceData($deviceId,$distance, $gas1, $gas2, $gas3){

        $card=new Divice();

     $date = date("Y/m/d");
        if (!empty($deviceId)) {
        $card->DevID = $deviceId;
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
        if (!empty($allinfom)) {
            return view('admin/index',compact('allinfom'));
        }else{
            $allinfom =Divice::all()->last();

            return view('admin/index',compact('allinfom'));
        }




    }

}
