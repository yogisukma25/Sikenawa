
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand text-dark" href="{{ route('home.user')}}">
        <img src="{{ asset('assets/images/logo/logo.jpeg')}}" width="50px"  alt="Logo"> <b> SIKENAWA </b>
    </a> <!-- Logo -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="page-scroll" href="{{ route('home.user')}}">Home</a></li>
            <li class="nav-item"><a class="page-scroll" href="#service">Peta Penyakit</a></li>
            <li class="nav-item"><a class="page-scroll" href="#work">Status</a></li>
            <li class="nav-item"><a class="page-scroll" href="{{ route('complaint.user')}}">Pengaduan</a></li>
        </ul>
        <div class="m-lauto"><div class="btn-group">
            <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" data-display="static" aria-expanded="false">
              Developer
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
              <button class="dropdown-item" type="button">Log out</button>

            </div>
          </div>
            
        </div>
    </div> <!-- navbar collapse -->
</nav> <!-- navbar -->
