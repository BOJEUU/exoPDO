<div class="opacity bg-white rounded p-5 mt-2">
    <form method="POST" action="../view/update_Patient.php">
        <div class="mb-3">
            <label for="lastname" class="form-label">Prénom:</label>
            <input type="text" class="form-control" name="firstname" value="<?php echo $detailPatient["lastname"] ?>">
            <p class="text-danger"><?= isset($errors["firstname"]) ? $errors['firstname'] : "" ?></p>
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Nom:</label>
            <input type="text" class="form-control" name="lastname" value="<?php echo $detailPatient["firstname"] ?>">
            <p class="text-danger"><?= isset($errors["lastname"]) ? $errors['lastname'] : "" ?></p>
        </div>
        <div class="mb-3">
            <label for="birth" class="form-label">Date de naissance:</label>
            <input type="date" class="form-control" name="birthdate" value="<?php echo $detailPatient["birthdate"] ?>">
            <p class="text-danger"><?= isset($errors["birthdate"]) ? $errors['birthdate'] : "" ?></p>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Téléphone:</label>
            <input type="number" class="form-control" name="phone" value="<?php echo $detailPatient["phone"] ?>">
            <p class="text-danger"><?= isset($errors["phone"]) ? $errors['phone'] : "" ?></p>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="mail" value="<?php echo $detailPatient["mail"] ?>">
            <p class="text-danger"><?= isset($errors["mail"]) ? $errors['mail'] : "" ?></p>
        </div>
        <div class="mb-3">
            <input type="number" class="form-control d-none" name="id" value="<?php echo $detailPatient["id"] ?>">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">modifier</button>
        <p class="text-danger"><?= isset($message["update"]) ? $message['update'] : "" ?></p>
        <td><a href="../view/profil_patient.php?id=<?php echo $detailPatient["id"] ?>"><button type="button" class="btn btn-primary ">Retour</button></a></td>
    </form>
</div>