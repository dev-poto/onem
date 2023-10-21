<?php include_once 'includes/header.php';?>

<div class="album py-5 bg-light">
    <div class="container py-5">
        <div class="row">
        <div class="col-lg-4 border rounded">
                <h4 class="text-center">Details sur l'offre</h4>
                <a style="text-decoration: none; color: inherit" class="" href="offre?id=<?=$offre['id'] ?>">
					<div class="offre border">
						<p class="">Poste : <?= $offre['poste'] ?></p>
						<p class="">Type contrat : <?= $offre['category'] ?></p>
						<p class="">Profil recherché : <?= $offre['profil'] ?></p>
						<p class="">Date limite depot : <?= $offre['limite'] ?></p>
					</div>
				</a>
            </div>
            <div class="col-lg-4">
                <h1>Envoyez vos dossiers</h1>
                <form method="POST" name="offre" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="file">Votre dossier</label>
                        <input type="file" class="form-control" name="file">
                    </div>
                    <button type="submit" class="btn btn-dark container">Postuler</button>
               </form>
            </div>

            <div class="col-lg-4 border rounded">
                <h4 class="text-center">Details sur Entreprise</h4>
                <a style="text-decoration: none; color: inherit" class="" href="entreprise?id=<?=$offre['entreprise_id'] ?>">
                    <div class="offre border">
                        <p>Nom : <?= $entreprise['name'] ?></p>
                        <p>Adresse mail : <?= $entreprise['email'] ?></p>
                        <p>Adresse : <?= $entreprise['adresse'] ?></p>
                        <p>Numero de telephone : <?= $entreprise['telephone'] ?></p>
                        <p>Numero BP : <?= $entreprise['BP'] ?></p>
                        <p>Numero INSS : <?= $entreprise['numero_inss'] ?></p>
                        <p>Numero RCCM : <?= $entreprise['numero_rccm'] ?></p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<?php include_once 'includes/footer.php';?>