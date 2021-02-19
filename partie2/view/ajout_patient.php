<?php
require_once "../controller/ajout_patient_controller.php";
?>
<!doctype html>
<html lang="fr">

<head>
    <title>ajout client</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="bg">
    <h1 class="d-flex mt-2 justify-content-center">Ajout Patient</h1>
    <div class="d-flex col-12 justify-content-center">
        <div class="opacity bg-white rounded p-5 mt-2">
            <form method="POST" action="ajout_patient.php">
                <div class="mb-3">
                    <label for="firstname" class="form-label">Prénom</label>
                    <input type="text" class="form-control" name="firstname" value="<?= isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : '' ?>">
                    <p class="text-danger"><?= isset($errors["firstname"]) ? $errors['firstname'] : "" ?></p>
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="lastname" value="<?= isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : '' ?>">
                    <p class="text-danger"><?= isset($errors["lastname"]) ? $errors['lastname'] : "" ?></p>
                </div>
                <div class="mb-3">
                    <label for="birth" class="form-label">Date de naissance</label>
                    <input type="date" class="form-control" name="birthdate" value="<?= isset($_POST['birthdate']) ? htmlspecialchars($_POST['birthdate']) : '' ?>">
                    <p class="text-danger"><?= isset($errors["birthdate"]) ? $errors['birthdate'] : "" ?></p>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Téléphone</label>
                    <input type="text" class="form-control" name="phone" value="<?= isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '' ?>">
                    <p class="text-danger"><?= isset($errors["phone"]) ? $errors['phone'] : "" ?></p>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Addresse mail</label>
                    <input type="email" class="form-control" name="mail" value="<?= isset($_POST['mail']) ? htmlspecialchars($_POST['mail']) : '' ?>">
                    <p class="text-danger"><?= isset($errors["mail"]) ? $errors['mail'] : "" ?></p>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
                    <p class="text-danger"><?= isset($messages["addPatient"]) ? $messages['addPatient'] : "" ?></p>
                    
                </div>
            </form>
        </div>
    </div>
   <div class="d-flex justify-content-center mt-3"><a href="../index.php"><button type="submit" name="submit" class="btn btn-primary ">Accueil</button></a></div> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>