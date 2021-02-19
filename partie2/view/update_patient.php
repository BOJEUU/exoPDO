<?php
require_once "../controller/update_patient_controller.php"
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
    <div class="d-flex col-12 justify-content-center">
        <?php foreach ($detailPatient as $patient) { ?>
            <div class="opacity bg-white rounded p-5 mt-2">
                <form method="POST" action="../view/update_patient.php?id=<?= $_GET['id'] ?>">
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Prénom:</label>
                        <input type="text" class="form-control" name="firstname" value="<?php echo $patient["lastname"] ?>">
                        <p class="text-danger"><?= isset($errors["firstname"]) ? $errors['firstname'] : "" ?></p>
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Nom:</label>
                        <input type="text" class="form-control" name="lastname" value="<?php echo $patient["firstname"] ?>">
                        <p class="text-danger"><?= isset($errors["lastname"]) ? $errors['lastname'] : "" ?></p>
                    </div>
                    <div class="mb-3">
                        <label for="birth" class="form-label">Date de naissance:</label>
                        <input type="date" class="form-control" name="birthdate" value="<?php echo $patient["birthdate"] ?>">
                        <p class="text-danger"><?= isset($errors["birthdate"]) ? $errors['birthdate'] : "" ?></p>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Téléphone:</label>
                        <input type="number" class="form-control" name="phone" value="<?php echo $patient["phone"] ?>">
                        <p class="text-danger"><?= isset($errors["phone"]) ? $errors['phone'] : "" ?></p>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="mail" value="<?php echo $patient["mail"] ?>">
                        <p class="text-danger"><?= isset($errors["mail"]) ? $errors['mail'] : "" ?></p>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">modifier</button>
                    <p class="text-danger"><?= isset($message["update"]) ? $message['update'] : "" ?></p>
                    <td><a href="../view/profil_patient.php?id=<?php echo $patient["id"] ?>"><button type="button" class="btn btn-primary ">Retour</button></a></td>
                </form>
            </div>
        <?php } ?>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>