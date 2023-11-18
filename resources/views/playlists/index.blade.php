@extends('layouts.app') 

@section('content')

    <div class="container">
        <h1>Playlists</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('playlists.create') }}" class="btn btn-primary">Create Playlist</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $playlist)
                    <tr>
                        <td>{{ $playlist->id }}</td>
                        <td>{{ $playlist->name }}</td>
                        <td>
                            <a href="{{ route('playlists.edit', $playlist->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('playlists.destroy', $playlist->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No playlists available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection

