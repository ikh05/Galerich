
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="/">
        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 512.000000 512.000000"preserveAspectRatio="xMidYMid meet">
            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#fff" stroke="none">
                <path d="M2726 5110 c-953 -86 -1659 -543 -2027 -1315 -181 -381 -269 -803 -269 -1294 1 -1364 735 -2269 1996 -2461 574 -87 1231 -27 1821 166 298 98 386 171 423 349 7 34 10 402 8 1106 l-3 1055 -38 76 c-41 83 -88 131 -166 170 l-46 23 -860 3 c-633 2 -871 0 -902 -9 -56 -15 -114 -78 -142 -155 -51 -135 -51 -463 0 -601 27 -72 88 -136 144 -152 26 -7 180 -11 448 -11 l407 0 0 -474 0 -474 -52 -21 c-195 -78 -475 -104 -723 -66 -564 86 -946 460 -1075 1053 -16 72 -24 92 -50 114 -35 32 -70 35 -111 11 -48 -28 -56 -63 -35 -162 23 -117 86 -303 140 -414 217 -451 604 -729 1116 -802 139 -19 402 -19 516 0 195 34 402 111 449 167 l25 30 0 579 c0 629 1 622 -55 647 -19 9 -150 12 -484 12 l-458 0 -12 28 c-23 49 -36 233 -24 345 6 56 16 114 22 130 l11 27 826 0 c922 0 861 5 907 -70 l22 -35 3 -1033 c1 -681 -1 -1046 -8 -1071 -22 -84 -72 -115 -303 -190 -624 -203 -1335 -245 -1911 -115 -1037 233 -1626 1042 -1626 2234 0 472 90 880 273 1246 286 570 799 954 1469 1098 606 132 1387 56 1863 -179 113 -56 183 -109 212 -160 12 -22 27 -75 33 -123 21 -145 0 -482 -29 -482 -3 0 -38 18 -76 41 -340 200 -748 337 -1095 368 -475 44 -874 -49 -1192 -275 -108 -78 -258 -228 -335 -337 -140 -198 -283 -550 -283 -695 0 -56 37 -92 95 -92 65 0 86 28 118 156 50 195 145 400 251 540 191 252 484 429 816 491 130 24 490 24 635 -1 282 -47 590 -158 850 -306 142 -80 181 -94 246 -88 94 9 156 78 186 207 14 61 18 119 18 291 -1 233 -11 304 -59 398 -106 210 -596 413 -1179 488 -144 18 -577 27 -721 14z"/>
                <path d="M1490 2663 c-30 -11 -60 -47 -66 -79 -17 -93 99 -153 167 -85 48 49 35 126 -26 156 -34 16 -49 17 -75 8z"/>
            </g>
        </svg>
        Galerich
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ $title == 'Home' ? 'active' : ''}}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $title == 'Gallery' ? 'active' : ''}}" href="/gallery">Gallery</a>
        </li>
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link {{ $title == 'Album' ? 'active' : ''}}" href="/album">Album</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $title == 'About' ? 'active' : ''}}" href="/about">About</a>
        </li>
      </ul>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
        <li class="nav-item ms-2 mb-1 mb-lg-0">
          <form class="d-flex" role="search" action="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="s">
            <button class="btn btn-outline-warning disabled" type="submit"><i class="bi bi-search"></i></button>
          </form>
        </li>
        
        <li class="nav-item ms-2">
          <a class="btn btn-outline-info disabled" href="/login"><i class="bi bi-box-arrow-in-right"></i> <span class="d-inline d-lg-none">Login</span></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle disabled" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-moon-stars-fill"></i>
            <i class="bi bi-brightness-high-fill d-none"></i>
          </a>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item active" ><i class="bi bi-moon-stars-fill"></i> Dark</button></li>
            <li><button class="dropdown-item"><i class="bi bi-brightness-high-fill"></i> Ligth</button></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>



<script type="text/javascript">
  const search = document.querySelector('form[role=search] input');
  search.addEventListener('input', (e)=>{
    // console.log(e.target.value)
    if(e.target.value !== '') e.target.nextElementSibling.classList.remove('disabled');
    else e.target.nextElementSibling.classList.add('disabled');
  })
</script>