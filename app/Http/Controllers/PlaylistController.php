<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

class PlaylistController extends Controller
{
    public function index()
    {
        $playlists = Playlist::orderBy('id', 'asc')->get();
        $tracks = Track::orderBy('id', 'asc')->get();

        return view('playlists.index', [
            'pageTitle' => 'Playlists',
            'pageID' => 'playlists',
            'playlists' => $playlists,
            'tracks' => $tracks,
        ]);
    }

    public function view($id)
    {
        $playlist = Playlist::find($id);
    
        $tracks = $playlist->tracks; // Ensure you load the tracks relationship
    
        return view('playlists.index', [
            'pageTitle' => 'View - ' . ucwords($playlist->name),
            'pageID' => 'playlists',
            'playlist' => $playlist,
            'tracks' => $tracks,
        ]);
    }

    public function get_playlist(Request $request)
    {
        $playlist = Playlist::find($request->input('id'));
        $tracks = '';
        $countTracks = 0;

        if ($playlist->tracks->count() > 0) {
            $i = 1;
            foreach ($playlist->tracks as $track) {
                $tracks .= '<tr id="' . $track->id . '">';
                $tracks .= '<td>' . $i . '</td>';
                $tracks .= '<td>' . $track->title . '</td>';
                $tracks .= '<td>' . $track->artist_names . '</td>';
                $tracks .= '<td><button class="btn btn-warning btn-xs" data-content="' . $request->input('id') . '" value="' . $track->id . '" onclick="removeTrackFromPlaylist(this);"  title="Remove ' . $track->title . ' from ' . $playlist->name . ' "><i class="fa fa-ban"></i></button></td>';
                $i++;
                $countTracks++;
            }
        } else {
            $tracks .= '<tr>';
            $tracks .= '<td colspan="4"><div class="alert alert-default text-center"><i class="fa fa-ban"></i> ' . $playlist->name . ' has no tracks yet!</div></td>';
            $tracks .= '</tr>';
        }

        $data = [
            'id' => $playlist->id,
            'name' => $playlist->name,
            'countTracks' => $countTracks,
            'tracks' => $tracks,
        ];

        return response()->json($data);
    }

    public function create(Request $request)
    {
        $data = [];

        $validation = Validator::make($request->all(), [
            'name' => 'required|string|min:3|max:255',
            // Add additional validation rules for other fields
        ]);

        if ($validation->fails()) {
            $errors = $validation->errors()->all();
            $data['errors'] = $errors;
            $data['success'] = false;
        } else {
            $playlist = Playlist::create([
                'name' => $request->name,
                // Add additional fields from your form
            ]);

            $checked = $request->tracks;

            if ($playlist && $checked) {
                foreach ($checked as $each) {
                    $track = Track::find($each);
                    if ($track) {
                        $track->playlists()->attach($playlist->id);
                    }
                }

                $message = $playlist->name . ' has been created!';
                $data['message'] = $message;
                $data['success'] = true;
            } else {
                $data['errors'] = 'Form Error!';
                $data['success'] = false;
            }
        }

        return response()->json($data);
    }

    public function showPlaylist($playlistId)
    {
        $playlist = Playlist::find($playlistId);
    
        return view('playlists.index', ['playlists' => $playlist]);
    }
    
}
