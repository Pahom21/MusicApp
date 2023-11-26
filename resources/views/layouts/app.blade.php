<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
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
                                <img src="{{ asset('images/1.jpg')}}" alt="Alan">
                                <h5>
                                    On My Way
                                    <div class="subtitle">Alan Walker</div>
                                </h5>
                                    <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                            </li>
                            <li class="songItem">
                                <span>02</span>
                                <img src="{{asset('images/Gunna-rodeo-dr.webp')}}" alt="Alan">
                                <h5>
                                    Dollaz on my head
                                    <div class="subtitle">Gunna</div>
                                </h5>
                                    <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
                            </li>
                            <li class="songItem">
                                <span>03</span>
                                <img src="{{asset('images/metro 2.webp')}}" alt="Alan">
                                <h5>
                                    Too Many Nights
                                    <div class="subtitle">Metrobomin</div>
                                </h5>
                                    <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                            </li>
                            <li class="songItem">
                                <span>04</span>
                                <img src="{{asset('images/Wiz_Khalifa.jpg')}}" alt="Alan">
                                <h5>
                                    We Dem Boyz
                                    <div class="subtitle">Wiz Khalifa</div>
                                </h5>
                                    <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
                            </li>
                            <li class="songItem">
                                <span>05</span>
                                <img src="{{asset('images/psot malone.jpeg')}}" alt="Alan">
                                <h5>
                                    Pycho
                                    <div class="subtitle">Post Malone</div>
                                </h5>
                                    <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
                            </li>
                            <li class="songItem">
                                <span>06</span>
                                <img src="{{asset('images/no type.jpeg')}}" alt="Alan">
                                <h5>
                                    No Type
                                    <div class="subtitle">Rae Sremmurd</div>
                                </h5>
                                    <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
                            </li>
                            <li class="songItem">
                                <span>07</span>
                                <img src="{{asset('images/Mnike.jpg')}}" alt="Alan">
                                <h5>
                                    Mnike
                                    <div class="subtitle">Tyler ICU</div>
                                </h5>
                                    <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                            </li>
                            <li class="songItem">
                                <span>08</span>
                                <img src="{{asset('images/lil-baby-gunna-laksana-cager.jpg')}}" alt="Alan">
                                <h5>
                                    Life goes on
                                    <div class="subtitle">Lil Baby</div>
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
                            <h1> VoozeMusic</h1>
                            <p>
                                You were the shadow to my light Did you feel us Another start You fade 
                                <br>
                                Away afraid our aim is out of sight Wanna see us Alive
                            </p>
                            <div class="buttons">
                                <button>PLAY</button>
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
                                        <img src="{{asset('images/I_Never_Liked_You_(Future).png')}}" alt="alan">
                                        <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
                                    </div>
                                    <h5>On My Way
                                        <br>
                                        <div class="subtitle">Alan Walker</div>
                                    </h5>
                                </li>
                                <li class="songItem">
                                    <div class="img_play">
                                        <img src="{{asset('images/gunna.jpg')}}" alt="alan">
                                        <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                                    </div>
                                    <h5>Pushin P
                                        <br>
                                        <div class="subtitle">Gunna</div>
                                    </h5>
                                </li>
                                <li class="songItem">
                                    <div class="img_play">
                                        <img src="{{asset('images/Kendrick_Lamar_-_Damn.png')}}" alt="alan">
                                        <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
                                    </div>
                                    <h5>Damn
                                        <br>
                                        <div class="subtitle">Kendrick Lamar</div>
                                    </h5>
                                </li>
                                <li class="songItem">
                                    <div class="img_play">
                                        <img src="{{asset('images/travis.png')}}" alt="alan">
                                        <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
                                    </div>
                                    <h5>Outwest
                                        <br>
                                        <div class="subtitle">Jack boys</div>
                                    </h5>
                                </li>
                                <li class="songItem">
                                    <div class="img_play">
                                        <img src="{{asset('images/cole.jpg')}}" alt="alan">
                                        <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
                                    </div>
                                    <h5>No Role Modelz
                                        <br>
                                        <div class="subtitle">J.Cole</div>
                                    </h5>
                                </li>
                                <li class="songItem">
                                    <div class="img_play">
                                        <img src="{{asset('images/Wiz_Khalifa.jpg')}}" alt="alan">
                                        <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
                                    </div>
                                    <h5>So High
                                        <br>
                                        <div class="subtitle">Wiz Khalifa</div>
                                    </h5>
                                </li>
                                <li class="songItem">
                                    <div class="img_play">
                                        <img src="{{asset('images/psot malone.jpeg')}}" alt="alan">
                                        <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
                                    </div>
                                    <h5>Congratulations
                                        <br>
                                        <div class="subtitle">Post Malone</div>
                                    </h5>
                                </li>
                                <li class="songItem">
                                    <div class="img_play">
                                        <img src="{{asset('images/Mnike.jpg')}}" alt="alan">
                                        <i class="bi playListPlay bi-play-circle-fill" id="16"></i>
                                    </div>
                                    <h5>Mnike
                                        <br>
                                        <div class="subtitle">Tyler ICU</div>
                                    </h5>
                                </li>
                                <li class="songItem">
                                    <div class="img_play">
                                        <img src="{{asset('images/amapiano.png')}}" alt="alan">
                                        <i class="bi playListPlay bi-play-circle-fill" id="17"></i>
                                    </div>
                                    <h5>Amapioano Breakfast
                                        <br>
                                        <div class="subtitle">Dj Dabila</div>
                                    </h5>
                                </li>
                                <li class="songItem">
                                    <div class="img_play">
                                        <img src="{{asset('images/no type.jpeg')}}" alt="alan">
                                        <i class="bi playListPlay bi-play-circle-fill" id="18"></i>
                                    </div>
                                    <h5>No type
                                        <br>
                                        <div class="subtitle">Rae Scremurd</div>
                                    </h5>
                                </li>
                                <li class="songItem">
                                    <div class="img_play">
                                        <img src="{{asset('images/Wiz_Khalifa.jpg')}}" alt="alan">
                                        <i class="bi playListPlay bi-play-circle-fill" id="19"></i>
                                    </div>
                                    <h5>Promises
                                        <br>
                                        <div class="subtitle">Wiz Khalifa</div>
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
                                    <img src="{{asset('images/sauti soul.jpg')}}" alt="Travis scott" title="travis">
                                </li>
                                <li>
                                    <img src="{{asset('images/alan.jpg')}}" alt="Alan Walker" title="Alan Walker">
                                </li>
                                <li>
                                    <img src="{{asset('images/drake.webp')}}" alt="drake" title="drake">
                                </li>
                                <li>
                                    <img src="{{asset('images/cole.jpg')}}" alt="j.cole" title="j cole">
                                </li>
                                <li>
                                    <img src="{{asset('images/gunna1.webp')}}" alt="Gunna" title="Gunna">
                                </li>
                                <li>
                                    <img src="{{asset('images/young thug.webp')}}" alt="young thug" title="Young thug">
                                </li>
                                <li>
                                    <img src="{{asset('images/wiz.jpg')}}" alt="wiz khalifa" title="wiz khalifa">
                                </li>
                                <li>
                                    <img src="{{asset('images/lil-baby-gunna-laksana-cager.jpg')}}" alt="lil babey" title="lil baby">
                                </li>
                                <li>
                                    <img src="{{asset('images/megan.jpg')}}" alt="meghan " title="stalion">
                                </li>
                                <li>
                                    <img src="{{asset('images/metro 2.webp')}}" alt="metro boomin" title="metrobomin">
                                </li>
                                <li>
                                    <img src="{{asset('images/post.jpeg')}}" alt="post" title="psoy malone">
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
                        <img src="{{asset('images/drake.webp')}}" alt="Alan" id="poster_master_play">
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
            </main>
        </div>
    </body>
</html>
