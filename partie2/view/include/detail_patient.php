
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Nom: <?php echo $detailPatient["lastname"] ?></h5>
            <p class="card-text">Prénom: <?php echo $detailPatient["firstname"] ?></p>
            <p class="card-text">Id: <?php echo $detailPatient['id'] ?></p>
            <p class="card-text">Date de naissance: <?php echo $detailPatient['birthdate'] ?></p>
            <p class="card-text">Téléhpone: <?php echo $detailPatient['phone'] ?></p>
            <p class="card-text">Email: <?php echo $detailPatient['mail'] ?></p>
            <form action="update_patient.php" method="POST">
                <button type="submit" class="btn btn-sm btn-dark" name="id" value="<?= $detailPatient["id"] ?>">Modifier</button>

            </form>

            <a href="../view/liste_patients.php" class="btn btn-primary mt-1">retour</a>
        </div>
    </div>
