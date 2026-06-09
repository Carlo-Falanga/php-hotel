<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
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



    $parkingFilter = isset($_GET["parking"]);
    $hotelToShow = $hotels;

    if ($parkingFilter) {
        $hotelToShow = [];
        foreach ($hotels as $hotel) {
            if ($hotel["parking"]) {
                $hotelToShow[] = $hotel;
            }
        }
    }
    ?>



<div class="container mt-5">

<h1 class="pb-4">Hotels</h1>

    <div class="row">
        <div class="col">
            <form method="GET">
                <input type="checkbox" name="parking">
                <label for="parking">Parcheggio</label>
                <button class="btn btn-primary mb-4 ms-3">Invio</button>
            </form>
        </div>
    </div>



    <div class="row">
        <div class="col-12">
            <table class="table table-light table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Parking</th>
                        <th>Vote</th>
                        <th>Distance to center</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hotelToShow as $hotel) { ?>

                        <tr>
                            <td><?php echo $hotel["name"] ?></td>
                            <td><?php echo $hotel["description"] ?></td>
                            <td><?php echo $hotel["parking"] ? "Si" : "No" ?></td>
                            <td><?php echo $hotel["vote"] ?></td>
                            <td><?php echo $hotel["distance_to_center"] ?></td>
                        </tr>


                    <?php } ?>

                </tbody>
            </table>

        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>