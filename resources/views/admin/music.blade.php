

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
                <a href="{{route('admin.analytics')}}">
                  <i class='bx bxs-analyse'></i>
                  <span class="text">Analytics</span>
                </a>
              </li>
            </ul>
            @include('admin.layouts.navsection')

          {{--Main Section--}}
          <main>
            @if ($message = Session::get('success'))
                <div class = "alert alert-success">
                    <p><i class='bx bx-check-circle'></i> {{ $message }}</p>
                </div>
            @elseif ($message = Session::get('error'))
                <div>
                    <p><i class='bx bx-x-circle'></i> {{ $message }}</p>
                </div>
            @endif
            <div class="head-title">
				<div class="left">
					<h1>Music Dash</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="{{route('music.create')}}" class="btn-download">
					<i class='bx bx-plus'></i>
					<span class="text">Create Song</span>
				</a>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
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
                        <div class="head">
                            <h3>Recent Music</h3>
                            {{-- <a href=""><i class='bx bx-search' ></i></a>
                            <i class='bx bx-filter' ></i> --}}
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Song Title</th>
                                    <th>Artist</th>
                                    <th>Album</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as  $row)
                                <tr>
                                    <td>
                                        <p>{{$row->title}}</p>
                                    </td>

                                    <td>
                                        <p>{{$row->artist}}</p>
                                    </td>

                                    <td>
                                        <p>{{$row->albumname}}</p>
                                    </td>
                                    <td>
                                        <a href="{{route('music.edit',['id'=>$row->song_id])}}"><i class='bx bx-edit-alt'></i></a>
                                        &nbsp;
                                        <span class="text">
                                            <a href="{{route('music.delete',['songId'=>$row->song_id])}}" onclick="return confirm('Are you sure you want to delete this record?')">
                                                <i class='bx bx-folder-minus'></i>
                                            </a>
                                        </span>
                                    </td>

                                </tr>
                                @endforeach
						</tbody>
					</table>
				</div>
			</div>
		</main>
          {{--End Of Main Section--}}
        </section>

        {{--End Of Content Section--}}
        @include('admin.layouts.tailsection')



