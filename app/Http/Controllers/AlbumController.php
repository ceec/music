<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;


class AlbumController extends Controller
{

    /**
     * Create Album
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        
        $this->validate($request, [
            'band_id' => 'required',
            'name' => 'required'

        ]);


        $recorded_date = $request->input('recorded_date');
        $release_date = $request->input('release_date');
        $number_of_tracks = $request->input('number_of_tracks');

        //check for empty dates
        if ($recorded_date == '') {
            $recorded_date = null;
        }

        if ($release_date == '') {
            $release_date = null;
        }

        if ($number_of_tracks == '') {
            $number_of_tracks = 0;
        }


        $a = new Album;
        $a->band_id = $request->input('band_id');
        $a->name = $request->input('name');
        $a->recorded_date = $recorded_date;
        $a->release_date = $release_date;
        $a->number_of_tracks = $number_of_tracks;
        $a->label = $request->input('label');
        $a->producer = $request->input('producer');
        $a->genre = $request->input('genre');                        
        $a->save();


         return redirect('/albums');   
    }


    /**
     * Edit Album
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request){
        
        $this->validate($request, [
            'band_id' => 'required',
            'name' => 'required'

        ]);


        $recorded_date = $request->input('recorded_date');
        $release_date = $request->input('release_date');
        $number_of_tracks = $request->input('number_of_tracks');

        //check for empty dates
        if ($recorded_date == '') {
            $recorded_date = null;
        }

        if ($release_date == '') {
            $release_date = null;
        }

        if ($number_of_tracks == '') {
            $number_of_tracks = 0;
        }


        $a = Album::find($request->input('album_id'));
        $a->band_id = $request->input('band_id');
        $a->name = $request->input('name');
        $a->recorded_date = $recorded_date;
        $a->release_date = $release_date;
        $a->number_of_tracks = $number_of_tracks;
        $a->label = $request->input('label');
        $a->producer = $request->input('producer');
        $a->genre = $request->input('genre');                        
        $a->save();


         return redirect('/albums');   
    }


    /**
     * Delete band
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($album_id){
        //clean album_id
        if (intval($album_id) < 1) {
            return redirect('/albums');  
        }

        //delete
        $a = Album::find($album_id);
        $a->delete();

         return redirect('/albums');  

    }

}
