<!DOCTYPE html>
<html>
<head>
    <title>Classes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg-success">
<div class="container text-center py-4 mt-4 mx-auto bg-light">

    <h3 class="mb-4">Vehicles Constructor</h3>

    <?php
        class vehicles
        {
            public $name;
            public $model;
            public $makeYear;
            public $color;
            public $fuelType;

            function __construct($name, $model, $makeYear, $color, $fuelType)
            {
                $this->name  = $name;
                $this->model = $model;
                $this->makeYear = $makeYear;
                $this->color = $color;
                $this->fuelType = $fuelType;
            }
            public function getdetails()
            {
            return
              'Name of the car is: ' .$this->name . ' and the model is: ' . $this->model.'.';
               
            }
        }
        $vehicle1 = new vehicles( 'Mercedes', 'E-class', 2019, 'black','diesel');
        $result1 = $vehicle1->getdetails();
        echo '<h3 class="mb-4 text-info">'.$result1.'</h3>';

        $vehicle2 = new vehicles( 'Audi', 'A5', 2019, 'black','diesel');
        $result2 = $vehicle2->getdetails();
        echo '<h3 class="mb-4 text-info">'.$result2.'</h3>';

        $vehicle3 = new vehicles( 'Bmw', 'Serie-5', 2019, 'black','diesel');
        $result3 = $vehicle3->getdetails();
        echo '<h3 class="mb-4 text-info">'.$result3.'</h3>';

        echo "<hr><hr>";  
        class ships extends vehicles
        {
            public $weight;

            function __construct($name, $model, $makeYear, $color, $fuelType, $weight)
            {
                $this->name  = $name;
                $this->model = $model;
                $this->makeYear = $makeYear;
                $this->color = $color;
                $this->fuelType = $fuelType;
                $this->weight = $weight;
            }
            public function getship()
            {
            return
              'Name of the ship is: ' .$this->name . ' and the model is: ' . $this->model.' , weight: '. $this->weight;
               
            }
        }
        $ships1 = new ships( 'Yacht-1', 'small', 2019, 'black', 'diesel', '200');
        $result1 = $ships1->getship();
        echo '<h3 class="mb-4 text-info">'.$result1.'</h3>';

        $ships2= new ships( 'Yacht-2', 'medium', 2019, 'black','diesel', '300');
        $result2 = $ships2->getship();
        echo '<h3 class="mb-4 text-info">'.$result2.'</h3>';

        $ships3= new ships( 'Yacht-3', 'large', 2019, 'black','diesel', '400');
        $result3 = $ships3->getship();
        echo '<h3 class="mb-4 text-info">'.$result3.'</h3>';
    ?>

</div>
</body>
</html>