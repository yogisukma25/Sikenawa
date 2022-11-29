@extends('admin.layouts.app')

@section('main-content')


<header id="home" class="header-area">
    <div class="navigation fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">   

                    @include('admin.layouts.partials.navbar')
                    
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navigation -->
</header>



    @include('admin.layouts.partials.footer')        
@endsection                    