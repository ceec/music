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


        $b = new Album;
        $b->band_id = $request->input('band_id');
        $b->name = $request->input('name');
        $b->recorded_date = $recorded_date;
        $b->release_date = $release_date;
        $b->number_of_tracks = $number_of_tracks;
        $b->label = $request->input('label');
        $b->producer = $request->input('producer');
        $b->genre = $request->input('genre');                        
        $b->save();


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


        $b = Album::find($request->input('album_id'));
        $b->band_id = $request->input('band_id');
        $b->name = $request->input('name');
        $b->recorded_date = $recorded_date;
        $b->release_date = $release_date;
        $b->number_of_tracks = $number_of_tracks;
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
