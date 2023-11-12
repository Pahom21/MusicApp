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
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
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
                            <h3>Recent Users</h3>
                            <i class='bx bx-search' ></i>
                            <i class='bx bx-filter' ></i>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Date Registered</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>John Doe</p>
                                    </td>
                                    <td>01-10-2021</td>
                                    <td><span class="status completed">User</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Elvis Makara</p>
                                    </td>
                                    <td>01-10-2021</td>
								<td><span class="status pending">Admin</span></td>
							</tr>
							<tr>
								<td>
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">User</span></td>
							</tr>
							<tr>
								<td>
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">User</span></td>
							</tr>
							<tr>
								<td>
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">User</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>
          {{--End Of Main Section--}}
        </section>

        {{--End Of Content Section--}}

        <script src = "{{asset('js/script.js')}} ">

        </script>
  </body>
 </html>

