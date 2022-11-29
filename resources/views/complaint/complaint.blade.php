@extends('layouts.app')


@section('content')

<header id="home" class="header-area">
    <div class="navigation fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">   

                    @include('layouts.partials.navbar')
                    
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navigation -->
</header>
        

<div class="background-image" style="background-image: url('{{ asset('assets/images/sapi/background.jpeg') }}">
    <div class="container-fluid">
        <div class="row pt-150 pb-100" style="justify-content:center;">
            <div class="col-5 align-self-center">
                <div class="auth-page">
                    <div class="card auth-card shadow-lg">
                        <div class="card-body">
                            <div class="px-3">
                                
                                <div class="text-center auth-logo-text">
                                    <h4 class="text-muted mb-0">Pengaduan Hewan Ternak</h4>  
                                </div> <!--end auth-logo-text-->  
    
                                
                                <form class="form-horizontal auth-form my-4" action="">

                                    <div class="form-group">
                                        <label for="username">Nama</label>
                                        <div class="input-group mb-3">                                                                                                             
                                            <input type="text" class="form-control" id="username" placeholder="Masukan Nama" required>
                                        </div>                                    
                                    </div><!--end form-group--> 

                                    <div class="form-group">
                                        <label for="username">Lokasi</label>
                                        <div class="input-group mb-3">                                                                                                             
                                            <input type="text" class="form-control" id="username" placeholder="Masukan Lokasi" required>
                                        </div>                                    
                                    </div><!--end form-group--> 

                                    <div class="form-group">
                                        <label for="username">Email</label>
                                        <div class="input-group mb-3">                                                                                                             
                                            <input type="text" class="form-control" id="username" placeholder="Masukan Email" required>
                                        </div>                                    
                                    </div><!--end form-group--> 

                                    <div class="form-group">
                                        <label for="username">Alamat</label>
                                        <div class="input-group mb-3">                                                                                                             
                                            <input type="text" class="form-control" id="username" placeholder="Masukan Alamat" required>
                                        </div>                                    
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label for="username">Keterangan</label>
                                        <div class="input-group mb-3">
                                            <textarea type="text" class="form-control" id="username" placeholder="Enter username" required rows="5"> </textarea>
                                        </div>                                    
                                    </div><!--end form-group--> 

                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2">
                                            <button class="btn btn-success btn-round btn-block waves-effect waves-light" type="submit">Masuk <i class="fas fa-sign-in-alt ml-1"></i></button>
                                        </div><!--end col--> 
                                    </div> <!--end form-group-->                           
                                </form><!--end form-->
    
                            </div><!--end /div-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end auth-page-->
            </div><!--end col-->           
        </div><!--end row-->
    </div>

</div>

@include('layouts.partials.footer')

@endsection
    