@include('admin.layouts.headsection')
    <body>
        <section id = "sidebar">
            <a href = "#" class = "brand">
              <i class='bx bx-smile'></i>
              <span class="text">Vooze Admin</span>
            </a>
            {{--Side Bar Section--}}
            <ul class="side-menu top">
              <li class="active">
                <a href="#">
                  <i class='bx bxs-dashboard'></i>
                  <span class="text">Dashboard</span>
                </a>
              </li>
              <li>
                <a href="{{route('music.dashboard')}}">
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
             <div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
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
				{{-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> --}}
			 </div>

             <ul class="box-info">
                <li>
                    <i class='bx bx-user'></i>
                    <span class="text">
                    <h3>{{\App\Models\User::distinct('email')->count()}}</h3>
                    <p>Users</p>
                    </span>
                </li>
                <li>
                    <i class='bx bx-library'></i>
                    <span class="text">
                    <h3>{{\App\Models\song::distinct('title')->count()}}</h3>
                    <p>Songs</p>
                    </span>
                </li>
                <li>
                    <i class='bx bx-dollar-circle'></i>
                    <span class="text">
                    <h3>{{\App\Models\Invoice::distinct('invoicesId')->count()}}</h3>
                    <p>Total Invoices</p>
                    </span>
                </li>
                {{-- <li>
                    <i class='bx bx-dollar-circle'></i>
                    <span class="text">
                    <h3>{{\App\Models\Invoice::where('status','pending')->count()}}</h3>
                    <p>Invoices Pending</p>
                    </span>
                </li> --}}
             </ul>

                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Recent Users</h3>
                            {{-- <i class='bx bx-search' ></i>
                            <i class='bx bx-filter' ></i> --}}
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($scnddata as $user)
                                <tr>
                                    <td>
                                        <p>{{$user->name}}</p>
                                    </td>
                                    <td>{{$user->email }}</td>
								    <td>@if ($user->role == 'Admin')
                                        <span class="status Admin">Admin</span>
                                    @elseif ($user->role == 'User')
                                        <span class="status User">User</span>
                                    @endif</td>
                                @endforeach
						    </tbody>
					    </table>
				    </div>
			    </div>
		    </main>
          {{--End Of Main Section--}}
        </section>

        {{--End Of Content Section--}}

        <script src = "{{asset('js/script.js',true)}} ">

        </script>
  </body>
 </html>

