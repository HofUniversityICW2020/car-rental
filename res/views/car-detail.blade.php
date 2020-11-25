@extends('layouts.main')

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3"><?php echo $car->model->brand->name . ' ' . $car->model->name; ?></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquet cursus blandit. Mauris aliquet leo
                nulla, quis egestas magna feugiat nec. Curabitur iaculis convallis ex, non lobortis diam dignissim eu.
                Cras lectus lacus, egestas et hendrerit sed, condimentum sed eros. Proin ultricies dui ipsum, id ornare
                libero euismod elementum. Proin viverra nulla a elit accumsan imperdiet. Praesent viverra eleifend
                vulputate.</p>
            <p><a class="btn btn-primary btn-sm" href="/{{ $origin }}.php" role="button">&laquo; back</a></p>
        </div>
    </div>
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="rounded-sm img-thumbnail" src="res/car/<?php echo $car->vin; ?>.jpg">
            </div>
            <div class="col-md-8">
                <h4>
                    <?php echo $car->model->name; ?>
                </h4>
                <p>
                    Brand: <?php echo $car->model->brand->name;?>
                </p>
                <p>
                    Engine: <?php echo $car->engine->name;?>
                    (<?php echo sprintf('%.2f', $car->engine->size); ?> cbm, <?php echo $car->engine->power; ?> hp)
                </p>
                <p>
                    Price: <?php echo sprintf('%.2f', $car->price); ?> € per day
                </p>
                <p>
                    <span class="border" style="display: inline-block; width: 5rem; height: 5rem; background: #<?php echo $car->color->hex; ?>"><i></i></span>
                </p>
            </div>
        </div>
    </div>
@endsection
