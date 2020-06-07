<?php

namespace App\Http\Controllers;

use App\Divice;
use App\DiviceData;
use Illuminate\Http\Request;

class DiviceControll extends Controller
{
   public function DiviceData(Request $request){


        $card=new Divice();
        $infoo = $request->json()->all();

        // var_dump($data);
        // die;
        // $distance = $data['distance'];
        // $gas1 = $data['gas1'];
        // $gas2 = $data['gas2'];
        // $gas3 = $data['gas3'];
        $date = date('y/m/d');

        dd($infoo);
        if (!empty($infoo)) {
        $card->DevID = $infoo;

		// $card->distance = $distance;
		// $card->gas1 = $gas1;
        // $card->gas2 = $gas2;
        // $card->gas3 = $gas3;
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
