<?php
include_once 'includes/header.php';?>

<div class="album py-5 bg-light">
    <div class="container mt-5">
        
        <form method="POST" name="office" action="" enctype="multipart/form-data">
            <h1 class="text-center p-3 border rounded p-2">Create demandeur</h1>
            <div class="row ">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="firstname">firstname</label>
                        <input type="text" class="form-control" required name="firstname" require>
                    </div>
                    <div class="form-group">
                        <label for="lastname">lastname</label>
                        <input type="text" class="form-control" required name="lastname" require>
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" class="form-control" required name="email" require>
                    </div>
                    <div class="form-group">
                        <label for="telephone">telephone</label>
                        <input type="tel" class="form-control" required name="telephone" require>
                    </div>
                    <div class="form-group">
                        <label for="date_naissance">date_naissance</label>
                        <input type="date" class="form-control" required name="date_naissance" require>
                    </div>
                    <div class="form-group">
                        <label for="lieu_naissance">lieu_naissance</label>
                        <input type="text" class="form-control" required name="lieu_naissance" require>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="sexe">Sexe</label>
                        <select class="form-control" required name="sexe">
                            <?php foreach (['HOMME', 'FEMME'] as $c) { 
                                    echo "<option value=" .  $c . ">". $c . "</option>";
                                } 
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nationalite">nationalite</label>
                        <input type="text" class="form-control" required name="nationalite" require>
                    </div>
                    <div class="form-group">
                        <label for="adresse">adresse</label>
                        <input type="text" class="form-control" required name="adresse" require>
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="password" class="form-control" required name="password" require>
                    </div>
                    <div class="form-group">
                        <label for="viseur_id">viseur_id</label>
                        <input type="number" class="form-control" required name="viseur_id" value="1">
                    </div>
                </div> 
            </div>
            <button type="submit" class="btn btn-dark container">Create</button>
        </form>
    </div>
</div>
<?php
    
    include_once 'includes/footer.php';
?>