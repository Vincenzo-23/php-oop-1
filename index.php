<?php

class Production {

    public $title;
    public $language;
    public $vote;

    public function setVote(){
        return $this->vote = rand(1, 10);
    }

    function __construct($_title, $_language){
        $this->title = $_title;
        $this->language = $_language;
        $this->setVote();

    }

}

$matrix = new Production ('Matrix', 'English');

// var_dump($matrix);


$inception = new Production ('Inception', 'English');

// var_dump($inception);

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
    <div class="container p-5 text-center">
        <span class="fs-1 fw-bold text-warning">Movie Production</span>
    </div>
    <div class="container p-5">
        <div class="row justify-content-around">
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
    
</body>
</html>