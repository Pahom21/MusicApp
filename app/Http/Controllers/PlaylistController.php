<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;

class PlaylistController extends Controller
{
    public function index()
    {
        $playlists = Playlist::all();
        return view('playlists.index', ['data' => $playlists]);
    }

    public function create()
    {
        return view('playlists.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Playlist::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('playlists.index')->with('success', 'Playlist created successfully.');
    }

    public function edit(Playlist $playlist)
    {
        return view('playlists.edit', compact('playlist'));
    }

    public function update(Request $request, Playlist $playlist)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $playlist->update([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('playlists.index')->with('success', 'Playlist updated successfully.');
    }

    public function destroy(Playlist $playlist)
    {
        $playlist->delete();

        return redirect()->route('playlists.index')->with('success', 'Playlist deleted successfully.');
    }
}
