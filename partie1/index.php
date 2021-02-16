<?php require_once "controller/index_controller.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <title>exo PDO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1>exo1</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientArray as $client) { ?>
                <tr>
                    <th><?php echo $client['id'] ?></th>
                    <td><?php echo $client["lastname"] ?></td>
                    <td><?php echo $client["firstname"] ?></td>
                </tr>
            <?php } ?>


        </tbody>
    </table>
    <h1>exo2</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">type</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($showTypeArray as $show) { ?>
                <tr>
                    <th><?php echo $show['id'] ?></th>
                    <td><?php echo $show["type"] ?></td>

                </tr>
            <?php } ?>


        </tbody>
    </table>
    <h1>exo3</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($client20Array as $client) { ?>
                <tr>
                    <th><?php echo $client['id'] ?></th>
                    <td><?php echo $client["lastname"] ?></td>
                    <td><?php echo $client["firstname"] ?></td>
                </tr>
            <?php } ?>


        </tbody>
    </table>
    <h1>exo4</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Numéro de carte</th>
                <th scope="col">Type de fidélité</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientCardArray as $client) { ?>
                <tr>
                    <th><?php echo $client['id'] ?></th>
                    <td><?php echo $client["lastname"] ?></td>
                    <td><?php echo $client["cardNumber"] ?></td>
                    <td><?php echo $client["type"] ?></td>
                </tr>
            <?php } ?>


        </tbody>
    </table>
    <h1>exo5</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientmArray as $client) { ?>
                <tr>
                    <th><?php echo $client['id'] ?></th>
                    <td><?php echo $client["lastname"] ?></td>
                    <td><?php echo $client["firstname"] ?></td>
                </tr>
            <?php } ?>


        </tbody>
    </table>
    <h1>exo6</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientmArray as $client) { ?>
                <tr>
                    <th><?php echo $client['id'] ?></th>
                    <td><?php echo $client["lastname"] ?></td>
                    <td><?php echo $client["firstname"] ?></td>
                </tr>
            <?php } ?>


        </tbody>
    </table>
    <h1>exo7</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientAllArray as $client) { ?>
                <tr>
                    <th><?php echo $client['id'] ?></th>
                    <td><?php echo $client["lastname"] ?></td>
                    <td><?php echo $client["firstname"] ?></td>
                    <td><?php echo $client["birthdate"] ?></td>

                    <td><?php if ($client["card"] == 1) {
                            echo "oui";
                        } else {
                            echo "non";
                        }
                        ?></td>
                    <td><?php echo $client["cardNumber"] ?></td>

                </tr>
            <?php } ?>


        </tbody>
    </table>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>