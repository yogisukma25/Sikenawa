
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="index.html">
        <img src="assets/images/logo.png" alt="Logo">
    </a> <!-- Logo -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active"><a class="page-scroll" href="#home">Home</a></li>
            <li class="nav-item"><a class="page-scroll" href="#service">Peta Penyakit</a></li>
            <li class="nav-item"><a class="page-scroll" href="#work">Status</a></li>
            <li class="nav-item"><a class="page-scroll" href="#about">Pengaduan</a></li>
        </ul>
        <div class="m-lauto">
            <a href="{{ route('authenticate') }}">
                <div class="btn btn-success btn-sm"> Masuk</div>
            </a>
            <div class="btn btn-primary btn-sm">Pusat Bantuan</div>
            
        </div>
    </div> <!-- navbar collapse -->
</nav> <!-- navbar -->
