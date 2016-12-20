<?php

namespace App\Http\Controllers;

use App\Band;
use App\Album;


class PageController extends Controller
{


    /**
     * Display all the bands
     *
     * @return \Illuminate\Http\Response
     */
    public function bands(){
        $bands = Band::all();

        return view('bands')
            ->with('bands',$bands);
    }

    /**
     * Display all the albumns
     *
     * @return \Illuminate\Http\Response
     */
    public function albums(){
        $albums = Album::all();
        
        return view('albums')
            ->with('albums',$albums);
    }


    /**
     * Create a band
     *
     * @return \Illuminate\Http\Response
     */
    public function bandCreate(){
        
        $create = true;
        $band = new Band;

        return view('bandCreate')
            ->with('create',$create)
            ->with('band',$band);
    }


    /**
     * Edit a band
     *
     * @return \Illuminate\Http\Response
     */
    public function bandEdit($band_id){
        
        $create = false;
        $band = Band::find($band_id);

        return view('bandCreate')
            ->with('create',$create)
            ->with('band',$band);
    }

    /**
     * Create a album
     *
     * @return \Illuminate\Http\Response
     */
    public function albumCreate(){
        //list of all bands
        $bands = Band::pluck('name','id');

        $create = true;
        $album = new Album;

        return view('albumCreate')
            ->with('create',$create)
            ->with('album',$album)
            ->with('bands',$bands);
    }


    /**
     * Edit a album
     *
     * @return \Illuminate\Http\Response
     */
    public function albumEdit($album_id){
        //list of all bands
        $bands = Band::pluck('name','id');

        $create = false;
        $album = Album::find($album_id);


        return view('albumCreate')
            ->with('create',$create)
            ->with('album',$album)
            ->with('bands',$bands);
    }    

}
