@extends('layouts.main')

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Contact</h1>
            <h5>
                University of Applied Sciences Hof
            </h5>
            <p>
                Master Software Engineering<br>
                Independent Course Work I WS 2020/2021
            </p>
            <p>
                Alfons-Goppel-Platz 1<br>
                95028 Hof<br>
                Germany
            </p>
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
