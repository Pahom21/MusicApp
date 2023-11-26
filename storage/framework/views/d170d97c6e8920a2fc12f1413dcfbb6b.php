

<?php echo $__env->make('admin.layouts.headsection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <body>
        <section id = "sidebar">
            <a href = "#" class = "brand">
              <i class='bx bx-smile'></i>
              <span class="text">Vooze Admin</span>
            </a>
            
            <ul class="side-menu top">
                <li>
                    <a href="<?php echo e(route('admin.dashboard')); ?>">
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
                <a href="<?php echo e(route('invoice.dash')); ?>">
                  <i class='bx bxs-bank'></i>
                  <span class="text">Invoices</span>
                </a>
              </li>
              <li>
                <a href="<?php echo e(route('admin.analytics')); ?>">
                  <i class='bx bxs-analyse'></i>
                  <span class="text">Analytics</span>
                </a>
              </li>
            </ul>
            <?php echo $__env->make('admin.layouts.navsection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          
          <main>
            <?php if($message = Session::get('success')): ?>
                <div class = "alert alert-success">
                    <p><i class='bx bx-check-circle'></i> <?php echo e($message); ?></p>
                </div>
            <?php elseif($message = Session::get('error')): ?>
                <div>
                    <p><i class='bx bx-x-circle'></i> <?php echo e($message); ?></p>
                </div>
            <?php endif; ?>
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
				<a href="<?php echo e(route('music.create')); ?>" class="btn-download">
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
                        <h3><?php echo e(\App\Models\song::distinct('artist')->count()); ?></h3>
                        <p>Artists</p>
                        </span>
                    </li>
                    <li>
                        <i class='bx bx-library'></i>
                        <span class="text">
                        <h3><?php echo e(\App\Models\song::distinct('title')->count()); ?></h3>
                        <p>Songs</p>
                        </span>
                    </li>
                </ul>

                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Recent Music</h3>
                            <a href=""><i class='bx bx-search' ></i></a>
                            <i class='bx bx-filter' ></i>
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
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <p><?php echo e($row->title); ?></p>
                                    </td>

                                    <td>
                                        <p><?php echo e($row->artist); ?></p>
                                    </td>

                                    <td>
                                        <p><?php echo e($row->albumname); ?></p>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('music.edit',['id'=>$row->songId])); ?>"><i class='bx bx-edit-alt'></i></a>
                                        &nbsp;
                                        <span class="text">
                                            <a href="<?php echo e(route('music.delete',['songId'=>$row->songId])); ?>" onclick="return confirm('Are you sure you want to delete this record?')">
                                                <i class='bx bx-folder-minus'></i>
                                            </a>
                                        </span>
                                    </td>

                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
				</div>
			</div>
		</main>
          
        </section>

        
        <?php echo $__env->make('admin.layouts.tailsection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php /**PATH C:\xampp\htdocs\Loginverification\resources\views/admin/music.blade.php ENDPATH**/ ?>