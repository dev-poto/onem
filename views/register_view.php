<?php include_once 'includes/header.php';?>

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <h1>Cree un demandeur</h1>
            <div class="col-lg-12">
                <form method="POST" name="offre" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="firstname">firstname</label>
                        <input type="text" class="form-control" name="firstname">
                    </div>
                    <div class="form-group">
                        <label for="lastname">lastname</label>
                        <input type="text" class="form-control" name="lastname">
                    </div>
                    <div class="form-group">
                        <label for="sexe">Sexe</label>
                        <select class="form-control" name="sexe">
                            <?php foreach (['HOMME', 'FEMME'] as $c) { 
                                    echo "<option value=" .  $c . ">". $c . "</option>";
                                } 
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tel">numero de telephone</label>
                        <input type="tel" class="form-control" name="tel">
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse mail</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="login">login</label>
                        <input type="text" class="form-control" name="login">
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    
    include_once 'includes/footer.php';
?>