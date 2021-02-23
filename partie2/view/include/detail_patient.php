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