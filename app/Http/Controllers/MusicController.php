<?php

namespace App\Http\Controllers;

use App\Models\song;
use Illuminate\Http\Request;
use App\Http\Controllers\Exception;
use App\Http\Controllers\File;

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
        try{
        $insert =new song;
        $insert->artist = $request->artist;
        $insert->title = $request->title;
        $insert->albumname = $request->albumname;
        $insert->genre = $request->genre;
        $insert->audiopath = $file_name;
        $insert->albumart = $file_name2;
        $insert->save();
        return redirect('/music')->with('success','Success adding record.');
        }
        catch(\Exception $e){
            return redirect('/music')->with('error','Failed to add record.');
        }
    }

    public function musicedit($songId){
        $data = song::latest()->paginate(10);
        $music = song::where('songId',$songId)->first();
        return view('admin.edit',compact('music','songId'));
    }
    public function musicupdate(Request $request, $songId)
    {
        try {
            //Form Validation
            $request->validate([
                'artist'=>'required|string|max:255',
                'title'=>'required|string|unique:songs,title,' . $songId .',songId' ,
                'albumname'=>'required|string|max:255',
                'genre'=>'required|string',
                'audio'=>'mimes:mp3,wav,ogg',
                'albumart'=>'mimes:jpeg,jpg,png',
            ]);

            $music = song::findOrFail($songId);

            //Update Song Details
            $music->artist = $request->input('artist');
            $music->title = $request->input('title');
            $music->albumname = $request->input('albumname');
            $music->genre = $request->input('genre');

            // Check if a new audio file is provided
            if ($request->hasFile('audio')) {
                // Process the new audio file
                $audioFile = $request->file('audio');
                $audioFileName = $audioFile->getClientOriginalName();
                $audioFile->move('upload', $audioFileName);
                $music->audiofile = $audioFileName;
            }

            // Check if a new album art file is provided
            if ($request->hasFile('albumart')) {
                // Process the new album art file
                $albumArtFile = $request->file('albumart');
                $albumArtFileName = $albumArtFile->getClientOriginalName();
                $albumArtFile->move('upload', $albumArtFileName);
                $music->albumart = $albumArtFileName;
            }

            $music->save();

            return redirect('/music')->with('success', 'Record updated successfully.');
        } catch (\Exception $e) {
            return redirect('/music')->with('error', 'Failed to update record.Error: ' . $e->getMessage());
        }
    }

    public function musicdelete($songId)
{
    try {
        $music = song::findOrFail($songId);

        // Delete audio file
        if (File::exists('upload/' . $music->audiofile)) {
            File::delete('upload/' . $music->audiofile);
        }

        // Delete album art file
        if (File::exists('upload/' . $music->albumart)) {
            File::delete('upload/' . $music->albumart);
        }

        $music->delete();

        return redirect('/music')->with('success', 'Record deleted successfully.');
    } catch (\Exception $e) {
        return redirect('/music')->with('error', 'Failed to delete record.');
    }
}
}


