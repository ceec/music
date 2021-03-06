<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        
        //list of all bands
        $bands = Band::orderBy('name','ASC')->pluck('name','id');

        return view('albums')
            ->with('bands',$bands)
            ->with('albums',$albums);
    }


    /**
     * Display all the albumns with filter
     *
     * @return \Illuminate\Http\Response
     */
    public function albumsFilter(Request $request){
        $band_id = $request->input('band_id');

        $albums = Album::where('band_id','=',$band_id)->get();
        
        //list of all bands
        $bands = Band::orderBy('name','ASC')->pluck('name','id');

        return view('albums')
            ->with('bands',$bands)
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
        //clean band_id
        if (intval($band_id) < 1) {
            return redirect('/');  
        }

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
        $bands = Band::orderBy('name','ASC')->pluck('name','id');

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
        //clean album_id
        if (intval($album_id) < 1) {
            return redirect('/albums');  
        }

        //list of all bands
        $bands = Band::orderBy('name','ASC')->pluck('name','id');

        $create = false;
        $album = Album::find($album_id);


        return view('albumCreate')
            ->with('create',$create)
            ->with('album',$album)
            ->with('bands',$bands);
    }    

}
