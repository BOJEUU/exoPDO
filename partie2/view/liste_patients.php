<?php
require_once "../controller/liste_patient_controller.php"
?>
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
    <h1 class="d-flex justify-content-center">Liste des patients</h1>
    <div class="row d-flex justify-content-center">
        <table class="table col-8 bg-white">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">date de naissance</th>


                </tr>
            </thead>
            <tbody>
                <?php foreach ($patientArray as $patient) { ?>
                    <tr>
                        <th><?php echo $patient['id'] ?></th>
                        <td><?php echo $patient["lastname"] ?></td>
                        <td><?php echo $patient["firstname"] ?></td>
                        <td><?php echo $patient["birthdate"] ?></td>
                        <td><a href="../view/profil_patient.php?id=<?php echo $patient["id"] ?>"><button type="button" class="btn btn-primary btn-lg">Détails</button></a></td>
                        <form method="POST" action="../view/liste_patients.php">
                        <td><button type="submit" name="id" value="<?php echo $patient['id'] ?>" class="btn btn-danger btn-lg">Supprimer</button></td>
                        </form>
                    </tr>
                <?php } ?>


            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-around">
        <div ><a href="../view/ajout_patient.php"><button type="button" class="btn btn-primary btn-lg">Ajouter Patients</button></a></div>
        <div ><a href="../index.php"><button type="button" class="btn btn-primary btn-lg">Accueil</button></a></div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>