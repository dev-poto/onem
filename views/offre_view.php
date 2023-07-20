<?php include_once 'includes/header.php';?>

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Offres</h1>
                <a class="btn btn-primary text-white" href="?page=registerOffre">Ajouter</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nom Poste</th>
                        <th scope="col">nom Domaine</th>
                        <th scope="col">Etude Realise</th>
                        <th scope="col">appropos</th>
                        <th scope="col">objectifs</th>
                        <th scope="col">competences</th>
                        <th scope="col">type Contrat</th>
                        <th scope="col">lieu Depot</th>
                        <th scope="col">date FinDepot</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($offres as $d) { ?>
                        <tr>
                            <th scope="row"><?= $d['id'] ?></th>
                            <td><?= $d['nomPoste'] ?></td>
                            <td><?= $d['nomDomaine'] ?></td>
                            <td><?= $d['EtudeRealise'] ?></td>
                            <td><?= $d['approps'] ?></td>
                            <td><?= $d['objectifs'] ?></td>
                            <td><?= $d['competences'] ?></td>
                            <td><?= $d['typeContrat'] ?></td>
                            <td><?= $d['lieuDepot'] ?></td>
                            <td><?= $d['dateFinDepot'] ?></td>
                            <td>
                                <a class="btn btn-danger text-white" href="?page=removeoffre&id=<?=$d['id'] ?>">Supprimer</a>
                                <a class="btn btn-info text-white" href="?page=updateoffre&id=<?=$d['id'] ?>">Modifier</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php include_once 'includes/footer.php';?>