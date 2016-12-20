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

        $start_date = $request->input('start_date');

        //check for empty dates
        if ($start_date == '') {
            $start_date = null;
        }


        $b = new Band;
        $b->name = $request->input('name');
        $b->start_date = $start_date;
        $b->website = $request->input('website');
        $b->still_active = $request->input('still_active');
        $b->save();


         return redirect('/');   

    }

    /**
     * Edit band
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request){
        
        $this->validate($request, [
            'name' => 'required'
        ]);

        $start_date = $request->input('start_date');

        //check for empty dates
        if ($start_date == '') {
            $start_date = null;
        }


        $b = Band::find($request->input('band_id'));
        $b->name = $request->input('name');
        $b->start_date = $start_date;
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
    public function delete($band_id){
        //clean band_id
        if (intval($band_id) < 1) {
            return redirect('/');  
        }

        //delete band and all albums tied to the band
        $b = Band::find($band_id);
    
        //delete albums
        $b->albums()->delete();

        //delete band
        $b->delete();

        return redirect('/');   

    }







}
