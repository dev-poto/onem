<?php include_once 'includes/header.php';?>

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Demandeurs</h1>
                <a class="btn btn-primary text-white" href="?page=register">Ajouter</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">firstname</th>
                        <th scope="col">lastname</th>
                        <th scope="col">sexe</th>
                        <th scope="col">tel</th>
                        <th scope="col">email</th>
                        <th scope="col">login</th>
                        <th scope="col">password</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($demandeurs as $d) { ?>
                        <tr>
                            <th scope="row"><?= $d['id'] ?></th>
                            <td><?= $d['firstname'] ?></td>
                            <td><?= $d['lastname'] ?></td>
                            <td><?= $d['sexe'] ?></td>
                            <td><?= $d['tel'] ?></td>
                            <td><?= $d['email'] ?></td>
                            <td><?= $d['login'] ?></td>
                            <td><?= $d['password'] ?></td>
                            <td>
                                <a class="btn btn-danger text-white" href="?page=removedemandeur&id=<?=$d['id'] ?>">Supprimer</a>
                                <a class="btn btn-info text-white" href="?page=updatedemandeur&id=<?=$d['id'] ?>">Modifier</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php include_once 'includes/footer.php';?>