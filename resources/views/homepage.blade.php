<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="icon" href="music.jpg">
    <title>Music App</title>
</head>
<body>
<header>
    <div class="menu_side">
        <h1>Playlist</h1>
        <div class="playlist">
            <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i> Playlist</h4>
            <h4 ><span></span><i class="bi bi-music-note-beamed"></i> Last Listening</h4>
            <h4 ><span></span><i class="bi bi-music-note-beamed"></i> Recommended</h4>
        </div>
        <div class="menu_song">
            <li class="songItem">
                <span>01</span>
                <img src="{{ asset('mg/1.jpg')}}" alt="Alan">
                <h5>
                    On My Way
                    <div class="subtitle">Alan Walker</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
            </li>
            <li class="songItem">
                <span>02</span>
                <img src="img/Gunna-rodeo-dr.webp" alt="Alan">
                <h5>
                    Rodeo dr
                    <div class="subtitle">Gunna</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
            </li>
            <li class="songItem">
                <span>03</span>
                <img src="img/metro 2.webp" alt="Alan">
                <h5>
                    Dreamchaser
                    <div class="subtitle">Metrobomin</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
            </li>
            <li class="songItem">
                <span>04</span>
                <img src="img/Wiz_Khalifa.jpg" alt="Alan">
                <h5>
                    Promises
                    <div class="subtitle">Wiz Khalifa</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
            </li>
            <li class="songItem">
                <span>05</span>
                <img src="img/psot malone.jpeg" alt="Alan">
                <h5>
                    Pycho
                    <div class="subtitle">Post Malone</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
            </li>
            <li class="songItem">
                <span>06</span>
                <img src="img/no type.jpeg" alt="Alan">
                <h5>
                    No type
                    <div class="subtitle">Rae Scremmurd</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
            </li>
            <li class="songItem">
                <span>07</span>
                <img src="img/Mnike.jpg" alt="Alan">
                <h5>
                    Mnike
                    <div class="subtitle">Mnike</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
            </li>
            <li class="songItem">
                <span>08</span>
                <img src="img/lil-baby-gunna-laksana-cager.jpg" alt="Alan">
                <h5>
                    Laksa Cager
                    <div class="subtitle">Lil baby</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
            </li>
        </div>
    </div>


    <div class="song_side">
        <nav>
            <ul>
                <li>PREMIUM<span></span></li>
                <li>MY LIBRARY</li>
                <li>MY ACCOUNT</li>
            </ul>
            <div class="search">
                <i class="bi bi-search"></i>
                <input type="text" placeholder="Search Music...">
            </div>
        </nav>
        <div class="content">
            <h1> Musify</h1>
            <p>
                You were the shadow to my light Did you feel us Another start You fade 
                <br>
                Away afraid our aim is out of sight Wanna see us Alive
            </p>
            <div class="buttons">
                <button>PLAY </button>
                <button>FOLLOW</button>
            </div>
        </div>
        <div class="popular_song">
            <div class="h4">
                <h4>Popular Song</h4>
                <div class="btn_s">
                    <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                    <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="pop_song">
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/I_Never_Liked_You_(Future).png" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
                    </div>
                    <h5>I never liked you
                        <br>
                        <div class="subtitle">Future</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/gunna.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                    </div>
                    <h5>Dollars on my head
                        <br>
                        <div class="subtitle">Gunna</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/Kendrick_Lamar_-_Damn.png" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
                    </div>
                    <h5>Damn
                        <br>
                        <div class="subtitle">Kendrick Lamar</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/travis.png" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
                    </div>
                    <h5>Astroworld
                        <br>
                        <div class="subtitle">Travis</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/cole.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
                    </div>
                    <h5>Wet Dreamz
                        <br>
                        <div class="subtitle">Jcole</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/Wiz_Khalifa.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
                    </div>
                    <h5>Roll Up
                        <br>
                        <div class="subtitle">Wiz Khalifa</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/psot malone.jpeg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
                    </div>
                    <h5>Goodbyes
                        <br>
                        <div class="subtitle">Post Malone</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/Mnike.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="16"></i>
                    </div>
                    <h5>Jaggermeister
                        <br>
                        <div class="subtitle">Mnike</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/amapiano.png" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="17"></i>
                    </div>
                    <h5>Tanzania
                        <br>
                        <div class="subtitle">Uncle waffles</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/no type.jpeg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="18"></i>
                    </div>
                    <h5>Black beatles
                        <br>
                        <div class="subtitle">Rae Scremmurd</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/Wiz_Khalifa.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="19"></i>
                    </div>
                    <h5>We dem doyz
                        <br>
                        <div class="subtitle">Wiz khalifa</div>
                    </h5>
                </li>
            </div>
        </div>
        <div class="popular_artists">
            <div class="h4">
                <h4>Popular Artists</h4>
                <div class="btn_s">
                    <i id="left_scrolls" class="bi bi-arrow-left-short"></i>
                    <i id="right_scrolls" class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="item">
                <li>
                    <img src="img/sauti soul.jpg" alt="Travis scott" title="travis">
                </li>
                <li>
                    <img src="img/alan.jpg" alt="Alan Walker" title="Alan Walker">
                </li>
                <li>
                    <img src="img/drake.webp" alt="drake" title="drake">
                </li>
                <li>
                    <img src="img/cole.jpg" alt="j.cole" title="j cole">
                </li>
                <li>
                    <img src="img/gunna1.webp" alt="Gunna" title="Gunna">
                </li>
                <li>
                    <img src="img/young thug.webp" alt="young thug" title="Young thug">
                </li>
                <li>
                    <img src="img/wiz.jpg" alt="wiz khalifa" title="wiz khalifa">
                </li>
                <li>
                    <img src="img/lil-baby-gunna-laksana-cager.jpg" alt="lil babey" title="lil baby">
                </li>
                <li>
                    <img src="img/megan.jpg" alt="meghan " title="stalion">
                </li>
                <li>
                    <img src="img/metro 2.webp" alt="metro boomin" title="metrobomin">
                </li>
                <li>
                    <img src="img/post.jpeg" alt="post" title="psoy malone">
                </li>
                
            </div>
        </div>
    </div>


    <div class="master_play">
        <div class="wave">
            <div class="wave1"></div>
            <div class="wave1"></div>
            <div class="wave1"></div>
        </div>
        <img src="img/drake.webp" alt="Alan" id="poster_master_play">
        <h5 id="title">In my feelings<br>
            <div class="subtitle">drake</div>
        </h5>
        <div class="icon">
            <i class="bi bi-skip-start-fill" id="back"></i>
            <i class="bi bi-play-fill" id="masterPlay"></i>
            <i class="bi bi-skip-end-fill" id="next"></i>
        </div>
        <span id="currentStart">0:00</span>
        <div class="bar">
            <input type="range" id="seek" aria-valuemin="0" aria-valuenow="100" aria-valuemax="100" aria-valuetext="100.0%"style="--value:100%;">
            <div class="bar2" id="bar2"></div>
            <div class="dot"></div>
        </div>
        <span id="currentEnd">0:00</span>

        <div class="vol">
            <i class="bi bi-volume-down-fill" id="vol_icon"></i>
            <input type="range" id="vol" min="0" value="30" max="100">
            <div class="vol_bar"></div>
            <div class="dot" id="vol_dot"></div>
        </div>
    </div>
</header>
    <script src="{{asset('resources/js/app.js')}}"></script>
</body>

</html>
