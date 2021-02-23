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