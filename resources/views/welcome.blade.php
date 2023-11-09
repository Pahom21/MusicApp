<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/gif" href="{{asset('Images/wave.gif')}}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" class="stylesheet">

</head>
<body style="min-width: 350px">
    <main>
        {{--Start of Nav Bar--}}
        <nav class="main-nav navbar navbar-expand-lg bg-dark border-bottom border-body shadow-sm" data-bs-theme="dark">
            <div class="container-fluid">
                 <a class="navbar-brand" href="#"><i class="bi bi-soundwave"></i>Vooze Music
                    <div style="font-size:13px">
                         All you can listen
                    </div>
                </a>
                <div>
                    <div class="input-group ">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text text-dark bg-light border-0" id="basic-addon2">
                            <i class="bi bi-search"></i>
                        </span>
                      </div>
                </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="#">Discover</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Genre
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Pop</a></li>
                          <li><a class="dropdown-item" href="#">Rap</a></li>
                          <li><a class="dropdown-item" href="#">Afrobeats</a></li>
                          <li><a class="dropdown-item" href="#">HipHop</a></li>
                        </ul>
                     </li>

                      <li class="nav-item dropdown ">
                           <a class="nav-link dropdown-toggle" href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hi,User
                          </a>
                         <ul class="dropdown-menu dropdown-menu-end">
                           <li><a class="dropdown-item" href="{{route('login')}}">Login</a></a></li>
                           <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                           <li><hr class="dropdown-divider"></li>
                           <li><a class="dropdown-item" href="#">Premium</a></li>
                         </ul>
                      </li>
                      <img class="rounded-circle"src="{{asset('Images/wave.gif')}}" alt="Image of a user" style="width:40px;height:40px"/>
                </form>
              </div>
            </div>
          </nav>
        {{--End Of Nav Bar--}}

        {{--Start Hero Area--}}
        <div class="heroarea text-white p-2">
            <ul class=" hero-nav nav nav-pills ms-2 mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="text-white nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Featured</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="text-white nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Trending</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="text-white nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">New Release</button>
                </li>
          </ul>

          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                {{--Song item--}}
              <div class="song-small m-2 ms-4 col-md-6 row align-items-center">
                <div class="col-1 h3">01</div>
                <div class="col d-flex">
                    <img class="song-small-img rounded m-1" src="{{asset('Images/apple-music.svg')}}" alt="Album Art"/>
                    <div class="ms-1 pt-3">
                       <div>
                        Song Title |
                        <small>Song Artist</small>
                       </div>
                    </div>
                </div>
                <div class="col-2">05:00
                    <i class="bi bi-play"></i>
                </div>
              </div>
              {{--End of song item--}}
               {{--Song item--}}
               <div class="song-small m-2 ms-4 col-md-6 row align-items-center">
                <div class="col-1 h3">02</div>
                <div class="col d-flex">
                    <img class="song-small-img rounded m-1" src="{{asset('Images/apple-music.svg')}}" alt="Album Art"/>
                    <div class="ms-1 pt-3">
                       <div>
                        Song Title |
                        <small>Song Artist</small>
                       </div>
                    </div>
                </div>
                <div class="col-2">05:00
                    <i class="bi bi-play"></i>
                </div>
              </div>
              {{--End of song item--}}
               {{--Song item--}}
               <div class="song-small m-2 ms-4 col-md-6 row align-items-center">
                <div class="col-1 h3">03</div>
                <div class="col d-flex">
                    <img class="song-small-img rounded m-1" src="{{asset('Images/apple-music.svg')}}" alt="Album Art"/>
                    <div class="ms-1 pt-3">
                       <div>
                        Song Title |
                        <small>Song Artist</small>
                       </div>
                    </div>
                </div>
                <div class="col-2">05:00
                    <i class="bi bi-play"></i>
                </div>
              </div>
              {{--End of song item--}}
               {{--Song item--}}
               <div class="song-small m-2 ms-4 col-md-6 row align-items-center">
                <div class="col-1 h3">04</div>
                <div class="col d-flex">
                    <img class="song-small-img rounded m-1" src="{{asset('Images/apple-music.svg')}}" alt="Album Art"/>
                    <div class="ms-1 pt-3">
                       <div>
                        Song Title |
                        <small>Song Artist</small>
                       </div>
                    </div>
                </div>
                <div class="col-2">05:00
                    <i class="bi bi-play"></i>
                </div>
              </div>
              {{--End of song item--}}
            </div>

            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                {{--Song item--}}
              <div class="song-small m-2 ms-4 col-md-6 row align-items-center">
                <div class="col-1 h3">07</div>
                <div class="col d-flex">
                    <img class="song-small-img rounded m-1" src="{{asset('Images/apple-music.svg')}}" alt="Album Art"/>
                    <div class="ms-1 pt-3">
                       <div>
                        Song Title |
                        <small>Song Artist</small>
                       </div>
                    </div>
                </div>
                <div class="col-2">05:00
                    <i class="bi bi-play"></i>
                </div>
              </div>
              {{--End of song item--}}
               {{--Song item--}}
               <div class="song-small m-2 ms-4 col-md-6 row align-items-center">
                <div class="col-1 h3">08</div>
                <div class="col d-flex">
                    <img class="song-small-img rounded m-1" src="{{asset('Images/apple-music.svg')}}" alt="Album Art"/>
                    <div class="ms-1 pt-3">
                       <div>
                        Song Title |
                        <small>Song Artist</small>
                       </div>
                    </div>
                </div>
                <div class="col-2">05:00
                    <i class="bi bi-play"></i>
                </div>
              </div>
              {{--End of song item--}}
            </div>

            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">

                {{--Song item--}}
              <div class="song-small m-2 ms-4 col-md-6 row align-items-center">
                <div class="col-1 h3">09</div>
                <div class="col d-flex">
                    <img class="song-small-img rounded m-1" src="{{asset('Images/apple-music.svg')}}" alt="Album Art"/>
                    <div class="ms-1 pt-3">
                       <div>
                        Song Title |
                        <small>Song Artist</small>
                       </div>
                    </div>
                </div>
                <div class="col-2">05:00
                    <i class="bi bi-play"></i>
                </div>
              </div>
              {{--End of song item--}}
               {{--Song item--}}
               <div class="song-small m-2 ms-4 col-md-6 row align-items-center">
                <div class="col-1 h3">10</div>
                <div class="col d-flex">
                    <img class="song-small-img rounded m-1" src="{{asset('Images/apple-music.svg')}}" alt="Album Art"/>
                    <div class="ms-1 pt-3">
                       <div>
                        Song Title |
                        <small>Song Artist</small>
                       </div>
                    </div>
                </div>
                <div class="col-2">05:00
                    <i class="bi bi-play"></i>
                </div>
              </div>
              {{--End of song item--}}
            </div>
          </div>

        </div>

        {{--End Hero Area--}}

    </main>{{--End Main Area--}}
    {{--scripts--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
