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
        
        return view('bandCreate');
    }


    /**
     * Create a album
     *
     * @return \Illuminate\Http\Response
     */
    public function albumCreate(){
        
        return view('albumCreate');
    }

}
