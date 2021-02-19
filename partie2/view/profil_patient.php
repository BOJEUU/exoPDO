<?php
require_once "../controller/liste_patient_controller.php" ?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body class="bg">
    <div class="row h-100 d-flex align-content-center justify-content-center">
                <?php foreach ($detailPatient as $patient) { ?>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Nom: <?php echo $patient["lastname"] ?></h5>
                            <p class="card-text">Prénom: <?php echo $patient["firstname"] ?></p>
                            <p class="card-text">Id: <?php echo $patient['id'] ?></p>
                            <p class="card-text">Date de naissance: <?php echo $patient['birthdate'] ?></p>
                            <p class="card-text">Téléhpone: <?php echo $patient['phone'] ?></p>
                            <p class="card-text">Email: <?php echo $patient['mail'] ?></p>
                            <a href="../view/update_patient.php?id=<?php echo $patient["id"] ?>" class="btn btn-primary">modifier le patient</a>
                            <a href="../view/liste_patients.php" class="btn btn-primary mt-1">retour</a>
                        </div>
                    </div>
                <?php } ?>
                
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>