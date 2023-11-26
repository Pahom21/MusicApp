 
 <ul class = "side-menu">
    <li>
      <a href="<?php echo e(route('dashboard')); ?>">
          <i class='bx bx-door-open'></i>
          <span class="text">User Side</span>
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
    <img src="<?php echo e(asset('Images/wave.gif',true)); ?>" alt="Admin Image" style="width:40px;height:40px"/>
  </a>
</nav>

<?php /**PATH C:\xampp\htdocs\Loginverification\resources\views/admin/layouts/navsection.blade.php ENDPATH**/ ?>