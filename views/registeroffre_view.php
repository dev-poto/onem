<?php include_once 'includes/header.php';?>

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <h1>Cree un compte</h1>
            <div class="col-lg-12">
                <form method="POST" name="office" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nomPoste">nomPoste</label>
                        <input type="text" class="form-control" name="nomPoste">
                    </div>
                    <div class="form-group">
                        <label for="nomDomaine">nomDomaine</label>
                        <input type="text" class="form-control" name="nomDomaine">
                    </div>
                    <div class="form-group">
                        <label for="EtudeRealise">EtudeRealise</label>
                        <input type="textearea" class="form-control" name="EtudeRealise">
                    </div>
                    <div class="form-group">
                        <label for="approps">approps</label>
                        <input type="textearea" class="form-control" name="approps">
                    </div>
                    <div class="form-group">
                        <label for="objectifs">objectifs</label>
                        <input type="textearea" class="form-control" name="objectifs">
                    </div>
                    <div class="form-group">
                        <label for="competences">competences</label>
                        <input type="textearea" class="form-control" name="competences">
                    </div>
                    <div class="form-group">
                        <label for="typeContrat">typeContrat</label>
                        <select class="form-control" name="typeContrat">
                            <?php foreach (['DD', 'DI'] as $c) { 
                                    echo "<option value=" .  $c . ">". $c . "</option>";
                                } 
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lieuDepot">lieuDepot</label>
                        <input type="text" class="form-control" name="lieuDepot">
                    </div>
                    <div class="form-group">
                        <label for="dateFinDepot">dateFinDepot</label>
                        <input type="date" class="form-control" name="dateFinDepot">
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