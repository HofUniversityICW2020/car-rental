@extends('layouts.main')

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Car Rental Inc.</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquet cursus blandit. Mauris aliquet leo
                nulla, quis egestas magna feugiat nec. Curabitur iaculis convallis ex, non lobortis diam dignissim eu.
                Cras lectus lacus, egestas et hendrerit sed, condimentum sed eros. Proin ultricies dui ipsum, id ornare
                libero euismod elementum. Proin viverra nulla a elit accumsan imperdiet. Praesent viverra eleifend
                vulputate.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
    </div>
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Top Cars</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                    mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
                    mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Top Offers</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                    mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
                    mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Newsletter</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                    porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                    ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
        </div>

        <hr>

    </div>
@endsection
