<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;


class AlbumController extends Controller
{

    /**
     * Create band
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        
        $b = new Album;
        $b->band_id = $request->input('band_id');
        $b->name = $request->input('name');
        $b->recorded_date = $request->input('recorded_date');
        $b->release_date = $request->input('release_date');
        $b->number_of_tracks = $request->input('number_of_tracks');
        $b->label = $request->input('label');
        $b->producer = $request->input('producer');
        $b->genre = $request->input('genre');                        
        $b->save();


         return redirect('/albums');   

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
