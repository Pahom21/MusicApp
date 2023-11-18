@include('admin.layouts.headsection')
    <body>
        <section id = "sidebar">
            <a href = "#" class = "brand">
              <i class='bx bx-smile'></i>
              <span class="text">Vooze Admin</span>
            </a>
            {{--Side Bar Section--}}
            <ul class="side-menu top">
                <li>
                    <a href="{{route('admin.dashboard')}}">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                    </a>
              </li>
              <li>
                <a href="#">
                  <li class="active">
                  <i class='bx bxl-deezer'></i>
                  <span class="text">Music Operations</span>
                </a>
              </li>
              <li>
                <a href="{{route('invoice.dash')}}">
                  <i class='bx bxs-bank'></i>
                  <span class="text">Invoices</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class='bx bxs-analyse'></i>
                  <span class="text">Analytics</span>
                </a>
              </li>
            </ul>
            @include('admin.layouts.navsection')

          {{--Main Section--}}
          <main>
            <div class="head-title">
				<div class="left">
					<h1>Music Dash</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Create</a>
						</li>
					</ul>
				</div>
			</div>

                <ul class="box-info">
                    <li>
                        <i class='bx bx-user'></i>
                        <span class="text">
                        <h3>{{\App\Models\song::distinct('artist')->count()}}</h3>
                        <p>Artists</p>
                        </span>
                    </li>
                    <li>
                        <i class='bx bx-library'></i>
                        <span class="text">
                        <h3>{{\App\Models\song::distinct('title')->count()}}</h3>
                        <p>Songs</p>
                        </span>
                    </li>
                </ul>

                <div class="table-data">
                    <div class="order">
                        <form class="row g-3" action={{ route('music.upload')}} method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <label for="artistName" class="form-label">Artist Name</label>
                                <input type="text" name="artist" class="form-control" id="artistName" required placeholder="Metro Booming">
                                <p>
                                    @if ($errors->has('artist'))
                                    {{ $errors->first('artist')}}
                                    @endif
                                </p>
                            </div>
                            <div class="col-md-6">
                                <label for="songTitle" class="form-label">Song Title</label>
                                <input type="text" name="title" class="form-control" id="songTitle" required placeholder="Superheroes">
                                <p>
                                    @if ($errors->has('title'))
                                    {{ $errors->first('title')}}
                                    @endif
                                </p>
                            </div>
                            <div class="col-md-6">
                                <label for="songGenre" class="form-label">Genre</label>
                                <input type="text" name = "genre" class="form-control" id="songGenre" placeholder="Hiphop/Rap" required>
                                <p>
                                    @if ($errors->has('genre'))
                                    {{ $errors->first('genre')}}
                                    @endif
                                </p>
                            </div>
                            <div class="col-md-6">
                                <label for="albumName" class="form-label">Album Name</label>
                                <input type="text" name="albumname" class="form-control" id="albumName" placeholder="Superheroes & Villains" required>
                                <p>
                                    @if ($errors->has('albumname'))
                                    {{ $errors->first('albumname')}}
                                    @endif
                                </p>
                            </div>
                            <div class="col-md-6">
                                <label for="audioFile" class="form-label">Audio File</label>
                                <input type="file" name="audio" class="form-control" id="audioFile" accept="audio/*" required>
                                <p>
                                    @if ($errors->has('audio'))
                                    {{ $errors->first('audio')}}
                                    @endif
                                </p>
                            </div>
                            <div class="col-md-6">
                                <label for="coverImage" class="form-label">Cover Image</label>
                                <input type="file" name="albumart" class="form-control" id="coverImage" accept="image/*" required>
                                <p>
                                    @if ($errors->has('albumart'))
                                    {{ $errors->first('albumart')}}
                                    @endif
                                </p>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
          {{--End Of Main Section--}}
        </section>

        {{--End Of Content Section--}}
        @include('admin.layouts.tailsection')



