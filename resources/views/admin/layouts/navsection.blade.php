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
