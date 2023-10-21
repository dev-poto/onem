<?php include_once 'includes/header.php';?>

<div class="album py-5 bg-light">
    <div class="container p-5">
        <h1 class="text-center  border rounded p-3">Entreprise Details</h1>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <p>Nom : <?= $entreprise['name'] ?></p>
                <p>Adresse mail : <?= $entreprise['email'] ?></p>
                <p>Adresse : <?= $entreprise['adresse'] ?></p>
                <p>Numero de telephone : <?= $entreprise['telephone'] ?></p>
                <p>Numero BP : <?= $entreprise['BP'] ?></p>
                <p>Numero INSS : <?= $entreprise['numero_inss'] ?></p>
                <p>Numero RCCM : <?= $entreprise['numero_rccm'] ?></p>
                <p>Numero ONEM : <?= $entreprise['numero_onem'] ?></p>
                <p>Activite : <?= $entreprise['activite'] ?></p>

            </div>
            <div class="col-lg-5">
                <img class="w-100" src="assets/img/exams.svg" alt="" >
                <?php if (isset($_SESSION["logged"]) && $_SESSION["logged"]==true && $_SESSION['role'] == "entreprise"){?>
					<a class="mt-5 w-100 btn btn-light text-dark border" href="updateentreprise?id=<?=$entreprise['id'] ?>">Modifier</a>
                <?php }?>
                
            </div>
            <div class="col-lg-1"></div>
        </div>
        <div class="row">
            <div class="col-lg border rounded p-3 m-3 container">
                <h4 class="text-center">Offres</h4>
                <?php foreach ($entreprise_details as $offre) { ?>  
                <a style="text-decoration: none; color: inherit" class="" href="offre?id=<?=$offre['id'] ?>">
					<div class="offre border">
						<p class="">Poste : <?= $offre['poste'] ?></p>
						<p class="">Type contrat : <?= $offre['category'] ?></p>
						<p class="">Profil recherché : <?= $offre['profil'] ?></p>
						<p class="">Date limite depot : <?= $offre['limite'] ?></p>
					</div>
				</a>
                <?php } ?>
            </div>
        </div>
    </div>
<?php include_once 'includes/footer.php';?>