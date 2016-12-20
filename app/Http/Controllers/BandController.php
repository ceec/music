<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Band;
use App\Album;


class BandController extends Controller
{

    /**
     * Create band
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        
        $this->validate($request, [
            'name' => 'required'
        ]);

        
        $b = new Band;
        $b->name = $request->input('name');
        $b->start_date = $request->input('start_date');
        $b->website = $request->input('website');
        $b->still_active = $request->input('still_active');
        $b->save();


         return redirect('/');   

    }


    /**
     * Delete band
     *
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request){
        $band_id = $request->input('band_id');

        //

         echo json_encode(array('test'=>$band_id));

    }







}
