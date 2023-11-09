{{--@include('admin.layouts.headsection')
  <body>

    @include('admin.layouts.svgs')

    @include('admin.layouts.screenmode')

    @include('admin.layouts.navsection')


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
            <svg class="bi"><use xlink:href="#calendar3"/></svg>
            This week
          </button>
        </div>
      </div>

      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

      <h2>Music Titles</h2>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Artist</th>
              <th scope="col">Song Title</th>
              <th scope="col">Genre</th>
              <th scope="col">Album Name</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
@include('admin.layouts.tailsection')--}}


  <!DOCTYPE html>
  <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{--Icons Import--}}
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        {{--My custom css--}}
        <link rel="stylesheet" href="{{asset('css/admdash.css')}}">
        <title>{{ config('app.name', 'Laravel') }} Admin</title>
    </head>
    <body>
        <section id = "sidebar">
            <a href = "#" class = "brand">
              <i class='bx bx-smile'></i>
              <span class="text">Admin Hub</span>
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
                <a href="#">
                  <i class='bx bxl-deezer'></i>
                  <span class="text">Music Operations</span>
                </a>
              </li>
              <li>
                <a href="#">
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
              {{--Logout Section--}}
            <ul class = "side-menu">
              <li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			  </li>
              <li>
                <a href="#" class="logout">
                  <i class='bx bxs-log-out'></i>
                  <span class="text">Logout</span>
                </a>
              </li>
            </ul>

        </section>
        {{--End Side Bar--}}


        {{--Content Section--}}
        <section id="content">
          {{--NAVBAR--}}
          <nav>
            <i class='bx bx-menu'></i>
            <a href="" class="nav-link">Categories</a>
            <form action="">
              <div class="form-input">
                <input type="search" name="search" id="search" placeholder="Search...">
                <button type="submit" class="search-btn"><i class='bx bx-search-alt-2'></i></button>
              </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
            <a href="" class="notification">
              <i class='bx bxs-bell'></i>
              <span class="num">8</span>
            </a>
            <a href="" class="profile">
              <img src="{{asset('Images/wave.gif')}}" alt="Admin Image" style="width:40px;height:40px"/>
            </a>
          </nav>
          {{--End Of NAVBAR--}}

          {{--Main Section--}}
          <main>
            <div class="head-title">
              <div class="left">
                <h1>Dashboard</h1>
                  <ul class="breadcrumb">
                    <li>
                      <a href="">Dashboard</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i></li>
                    <li>
                      <a href="" class="active">Home</a>
                    </li>
                  </ul>
              </div>
              <a href="" class="btn-download">
                <i class='bx bx-cloud-download'></i>
                <span class="text">Download PDF</span>
              </a>
            </div>
            <ul class="box-info">
              <li>
                <i class='bx bx-user'></i>
                <span class="text">
                  <h3>10</h3>
                  <p>Users</p>
                </span>
              </li>
              <li>
                <i class='bx bx-library'></i>
                <span class="text">
                  <h3>1200</h3>
                  <p>Songs</p>
                </span>
              </li>
              <li>
                <i class='bx bx-dollar-circle'></i>
                <span class="text">
                  <h3>10</h3>
                  <p>Invoices</p>
                </span>
              </li>
            <ul>

            <div class="table-data">
              <div class="order">
                <div class="head">
                  <h3>Users</h3>
                </div>
              </div>
            </div>
          </main>

          {{--End OfMain Section--}}
        </section>

        {{--End Of Content Section--}}

        <script src = "{{asset('js/script.js')}} ">

        </script>
  </body>
 </html>

