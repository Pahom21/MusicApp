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
                <a href="<?php echo e(route('invoice.dash')); ?>">
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
            <?php echo $__env->make('admin.layouts.navsection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          
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
                    <h3><?php echo e(\App\Models\User::distinct('email')->count()); ?></h3>
                    <p>Users</p>
                    </span>
                </li>
                <li>
                    <i class='bx bx-library'></i>
                    <span class="text">
                    <h3><?php echo e(\App\Models\song::distinct('title')->count()); ?></h3>
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
                                        <p><?php echo e($user->name); ?></p>
                                    </td>
                                    <td><?php echo e($user->email); ?></td>
								    <td><?php if($user->role == 'Admin'): ?>
                                        <span class="status Admin">Admin</span>
                                    <?php elseif($user->role == 'User'): ?>
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