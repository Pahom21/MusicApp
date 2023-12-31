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
                        <form class="row g-3" action=<?php echo e(route('music.upload')); ?> method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="col-md-6">
                                <label for="artistName" class="form-label">Artist Name</label>
                                <input type="text" name="artist" class="form-control" id="artistName" required placeholder="Metro Booming">
                                <p>
                                    <?php if($errors->has('artist')): ?>
                                    <?php echo e($errors->first('artist')); ?>

                                    <?php endif; ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <label for="songTitle" class="form-label">Song Title</label>
                                <input type="text" name="title" class="form-control" id="songTitle" required placeholder="Superheroes">
                                <p>
                                    <?php if($errors->has('title')): ?>
                                    <?php echo e($errors->first('title')); ?>

                                    <?php endif; ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <label for="songGenre" class="form-label">Genre</label>
                                <input type="text" name = "genre" class="form-control" id="songGenre" placeholder="Hiphop/Rap" required>
                                <p>
                                    <?php if($errors->has('genre')): ?>
                                    <?php echo e($errors->first('genre')); ?>

                                    <?php endif; ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <label for="albumName" class="form-label">Album Name</label>
                                <input type="text" name="albumname" class="form-control" id="albumName" placeholder="Superheroes & Villains" required>
                                <p>
                                    <?php if($errors->has('albumname')): ?>
                                    <?php echo e($errors->first('albumname')); ?>

                                    <?php endif; ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <label for="audioFile" class="form-label">Audio File</label>
                                <input type="file" name="audio" class="form-control" id="audioFile" accept="audio/*" required>
                                <p>
                                    <?php if($errors->has('audio')): ?>
                                    <?php echo e($errors->first('audio')); ?>

                                    <?php endif; ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <label for="coverImage" class="form-label">Cover Image</label>
                                <input type="file" name="albumart" class="form-control" id="coverImage" accept="image/*" required>
                                <p>
                                    <?php if($errors->has('albumart')): ?>
                                    <?php echo e($errors->first('albumart')); ?>

                                    <?php endif; ?>
                                </p>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
          
        </section>

        
        <?php echo $__env->make('admin.layouts.tailsection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php /**PATH C:\xampp\htdocs\Loginverification\resources\views/admin/musicreate.blade.php ENDPATH**/ ?>