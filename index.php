<?php

require_once __DIR__ . "/./Models/Production.php";
require_once __DIR__ . "/./Models/Movie.php";
require_once __DIR__ . "/./Models/TVSerie.php";

$matrix = new Production ('Matrix', 'English');
$inception = new Production ('Inception', 'English');

$spaceJam = new Movie ('Space Jam', 'English', '€100 Mil', '2 Hours');

$lost = new TVSerie ('Lost', 'English', 6);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-info">
    <header class="container p-5 text-center">
        <span class="fs-1 fw-bold text-warning">Movies and Series Production</span>
    </header>
    <div class="container p-5">
        <div class="row justify-content-around">
            <h1 class="text-center mb-5 pb-5 text-danger">PRODUCTIONS</h1>
            <div class="col-auto">
                <div class="card text-center">
                    <img src="https://www.gloriarebecchi.com/wp-content/uploads/2021/01/matrix_2.jpg" class="card-img-top" alt="Movie cover picture" style="height: 507px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $matrix->title ?></h5>
                        <p class="mb-2"><strong>Language: </strong><?php echo $matrix->language ?></p>
                        <p class="mb-2"><strong>Vote: </strong><?php echo $matrix->vote ?></p>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="card text-center">
                    <img src="https://www.ibs.it/images/5051891020825_0_464_0_75.jpg" class="card-img-top" alt="Movie cover picture" style="height: 507px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $inception->title ?></h5>
                        <p class="mb-2"><strong>Language: </strong><?php echo $inception->language ?></p>
                        <p class="mb-2"><strong>Vote: </strong><?php echo $inception->vote ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="container p-5">   
        <div class="row justify-content-around">  
        <h1 class="text-center mb-5 pb-5 text-danger">MOVIES</h1>  
            <div class="col-auto">
                <div class="card text-center">
                    <img src="https://i.pinimg.com/736x/14/73/51/14735131dbfc9239d1095d331be30fde.jpg" class="card-img-top" alt="Movie cover picture" style="height: 507px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $spaceJam->title ?></h5>
                        <p class="mb-2"><strong>Language: </strong><?php echo $spaceJam->language ?></p>
                        <p class="mb-2"><strong>Vote: </strong><?php echo $spaceJam->vote ?></p>
                        <p class="mb-2"><strong>Profits: </strong><?php echo $spaceJam->profits ?></p>
                        <p class="mb-2"><strong>Length: </strong><?php echo $spaceJam->length ?></p>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <div class="container p-5">   
        <div class="row justify-content-around">      
        <h1 class="text-center mb-5 pb-5 text-danger">TV SERIES</h1>       
            <div class="col-auto">
                <div class="card text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWo6OQnji4C4MOruf1v0xCTtpi6UPIe8aX2WWTp5IPkA&s" class="card-img-top" alt="Movie cover picture" style="height: 507px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $lost->title ?></h5>
                        <p class="mb-2"><strong>Language: </strong><?php echo $lost->language ?></p>
                        <p class="mb-2"><strong>Vote: </strong><?php echo $lost->vote ?></p>
                        <p class="mb-2"><strong>Number of Seasons: </strong><?php echo $lost->seasonNum ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>