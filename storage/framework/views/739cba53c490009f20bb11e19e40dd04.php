<?php echo $__env->make('admin.layouts.headsection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <body>
        <section id = "sidebar">
            <a href = "#" class = "brand">
              <i class='bx bx-smile'></i>
              <span class="text">Vooze Admin</span>
            </a>
            
            <ul class="side-menu top">
              <li class="active">
                <a href="#">
                  <i class='bx bxs-dashboard'></i>
                  <span class="text">Dashboard</span>
                </a>
              </li>
              <li>
                <a href="<?php echo e(route('music.dashboard')); ?>">
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
              
            <ul class = "side-menu">
              <li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			  </li>
              <li>
                <a href="<?php echo e(route('admin.logout')); ?>" class="logout">
                  <i class='bx bxs-log-out'></i>
                  <span class="text">Logout</span>
                </a>
              </li>
            </ul>

        </section>
        


        
        <section id="content">
          
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
              <img src="<?php echo e(asset('Images/wave.gif')); ?>" alt="Admin Image" style="width:40px;height:40px"/>
            </a>
          </nav>
          

          
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
                    <h3><?php echo e(count(collect($scnddata)->pluck('email')->unique())); ?></h3>
                    <p>Users</p>
                    </span>
              </li>
              <li>
                    <i class='bx bx-library'></i>
                    <span class="text">
                    <h3><?php echo e(count(collect($data)->pluck('title')->unique())); ?></h3>
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
            </ul>

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
                                    <th>Email</th>
                                    <th>Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $scnddata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <p><?php echo e($user['name']); ?></p>
                                    </td>
                                    <td><?php echo e($user['email']); ?></td>
								    <td><?php if($user['role'] == 'Admin'): ?>
                                        <span class="status Admin">Admin</span>
                                    <?php elseif($user['role'] == 'User'): ?>
                                        <span class="status User">User</span>
                                    <?php endif; ?></td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
				</div>
			</div>
		</main>
          
        </section>

        

        <script src = "<?php echo e(asset('js/script.js')); ?> ">

        </script>
  </body>
 </html>

<?php /**PATH C:\xampp\htdocs\Loginverification\resources\views/admin/admindash.blade.php ENDPATH**/ ?>