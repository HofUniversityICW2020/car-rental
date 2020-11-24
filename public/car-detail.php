<?php
require_once './database.php';

class CarDetail
{
    public function getCar($vin): array
    {
        $database = new Database();
        $connection = $database->connect();
        // @todo: Carefully... good, in case you spotted something here
        $statement = $connection->prepare(
            'SELECT * FROM `car` WHERE `vin` = "' . $vin . '";'
        );
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}
$carDetail = new CarDetail();
$car = $carDetail->getCar($_GET['vin']);
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="res/bootstrap/css/bootstrap.min.css">

    <title>Car List - Car Rental Inc.</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/">Car Rental Inc.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/car-list.php">Cars <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact.php">Contact</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3"><?php echo $car['brand'] . ' ' . $car['model']; ?></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquet cursus blandit. Mauris aliquet leo
                nulla, quis egestas magna feugiat nec. Curabitur iaculis convallis ex, non lobortis diam dignissim eu.
                Cras lectus lacus, egestas et hendrerit sed, condimentum sed eros. Proin ultricies dui ipsum, id ornare
                libero euismod elementum. Proin viverra nulla a elit accumsan imperdiet. Praesent viverra eleifend
                vulputate.</p>
            <!-- @todo Carefully... watch `origin` query parameter -->
            <p><a class="btn btn-primary btn-sm" href="/<?php echo $_GET['origin']; ?>.php" role="button">&laquo; back</a></p>
        </div>
    </div>

    <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="rounded-sm img-thumbnail" src="res/car/<?php echo $car['vin']; ?>.jpg">
                </div>
                <div class="col-md-8">
                    <h4>
                        <?php echo $car['model']; ?>
                    </h4>
                    <p>
                        Brand: <?php echo $car['brand'];?>
                    </p>
                    <p>
                        Engine: <?php echo $car['engine_name'];?>
                        (<?php echo sprintf('%.2f', $car['engine_size']); ?> cbm, <?php echo $car['engine_power']; ?> hp)
                    </p>
                    <p>
                        Price: <?php echo sprintf('%.2f', $car['price']); ?> € per day
                    </p>
                    <p>
                        <span class="border" style="display: inline-block; width: 5rem; height: 5rem; background: #<?php echo $car['color']; ?>"><i></i></span>
                    </p>
                </div>
            </div>
            <hr>
    </div>
</main>

<footer class="container">
    <p>&copy; Car Rental Inc. 2020</p>
</footer>
</body>
</html>
