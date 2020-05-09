@extends('layouts.app')

@section('content')

<h2>Recomendadas</h2>

<!-- partial:index.partial.html -->
<div class="slider-content" id="slider-content">
    <div class="slider">
        <div class="item" id="pelicula-1">
            <img id="imagen-1" class="img-fluid z-depth-1"
                src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg" alt="video" data-toggle="modal"
                data-target="#modalYT">
        </div>
        <div class="item" id="pelicula-2">
            <img id="imagen-2" class="img-fluid z-depth-1"
                src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg" alt="video">
        </div>
        <div class="item" id="pelicula-3">
            <img id="imagen-3" class="img-fluid z-depth-1"
                src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg" alt="video">
        </div>
        <div class="item" id="pelicula-4">
            <img id="imagen-4" class="img-fluid z-depth-1"
                src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg" alt="video">
        </div>
        <div class="item" id="pelicula-5">
            <img id="imagen-5" class="img-fluid z-depth-1"
                src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg" alt="video">
        </div>
    </div>
</div>
<!-- partial -->

<!-- Button trigger modal-->


<!--Modal: modalYT-->
<div class="modal fade" id="modalYT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

            <!--Body-->
            <div class="modal-body mb-0 p-0">

                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A3PDXmYoF5U"
                        allowfullscreen></iframe>
                </div>

            </div>

            <!--Footer-->
            <div class="modal-footer flex-column flex-md-row">
                <span class="mr-4">Spread the word!</span>
                <div>
                    <a type="button" class="btn-floating btn-sm btn-fb">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <!--Twitter-->
                    <a type="button" class="btn-floating btn-sm btn-tw">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <!--Google +-->
                    <a type="button" class="btn-floating btn-sm btn-gplus">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    <!--Linkedin-->
                    <a type="button" class="btn-floating btn-sm btn-ins">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <button type="button" class="btn btn-modal btn-modal-ver" data-dismiss="modal">ver</button>
                <button type="button" class="btn btn-modal btn-modal-info" data-dismiss="modal">+info</button>
                <button type="button" class="btn btn-modal btn-modal-volver" data-dismiss="modal">volver</button>


            </div>

        </div>
        <!--/.Content-->

    </div>
</div>
<!--Modal: modalYT-->

@stop