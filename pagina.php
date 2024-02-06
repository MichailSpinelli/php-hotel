<?php
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
</head>
<body>
    <div>
        <h1 class="text-center">
            Hotels
        </h1>
        <div class="container">
            <ul>
                <?php
            foreach($hotels as $hotel) {
                echo "<li> <strong>Nome Hotel:  " . $hotel['name'] . "</li> </strong>";
                echo "<li class ='m-3'>Voto: " . $hotel['vote'] . "</li>";
                    if ($hotel['parking'] == true) {
                        echo "<li>c'è parcheggio!</li>";
                    }
                    else {
                        echo "<li class ='m-3'>non c'è parcheggio </li>";
                    }
                    
            }
        ?>
            </ul>
        </div>
        
    </div>
</body>
</html>