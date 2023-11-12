<?php

namespace App\Http\Controllers;

use App\Models\song;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function musicupload(Request $request){
        $request->validate([
            'artist'=>'required|string|max:255',
            'title'=>'required|string|unique:songs,title',
            'albumname'=>'required|string|max:255',
            'genre'=>'required|string',
            'audio'=>'required|mimes:mp3,wav,ogg',
            'albumart'=>'mimes:jpeg,jpg,png',
        ]);

        //Audio processing
        $file = $request->file('audio');
        $filename = $file->getClientOriginalName();
        $file->move('upload', $filename);
        $file_name =  $file->getClientOriginalName();

        //Image Processing
        $scndfile = $request->file('albumart');
        $scndfilename = $scndfile->getClientOriginalName();
        $scndfile->move('upload', $scndfilename);
        $file_name2 = $scndfile->getClientOriginalName();

        //Database feeding
        $insert =new song;
        $insert->artist = $request->artist;
        $insert->title = $request->title;
        $insert->albumname = $request->albumname;
        $insert->genre = $request->genre;
        $insert->audiopath = $file_name;
        $insert->albumart = $file_name2;
        $insert->save();
        return redirect('/music');
    }
}
