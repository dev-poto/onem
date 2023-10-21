<?php
include_once 'includes/header.php';?>

<div class="album py-5 bg-light">
    <div class="container mt-5">
        
        <form method="POST" name="office" action="" enctype="multipart/form-data">
            <h1 class="text-center p-3 border rounded p-2">Create un offre</h1>
            <div class="row ">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="poste">poste</label>
                        <input type="text" class="form-control" name="poste">
                    </div>
                    <div class="form-group">
                        <label for="category">category</label>
                        <select class="form-control" name="category">
                            <?php foreach (['DD', 'DI'] as $c) { 
                                    echo "<option value=" .  $c . ">". $c . "</option>";
                                } 
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="profil">profil</label>
                        <textarea class="form-control" id="profil" rows="3" name="profil"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="objectif">objectif</label>
                        <textarea class="form-control" id="objectif" rows="3" name="objectif"></textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="condition">condition</label>
                        <textarea class="form-control" id="condition" rows="3" name="condition"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="processus">processus</label>
                        <textarea type="textearea" class="form-control" rows="3" name="processus"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="limite">limite</label>
                        <input type="date" class="form-control" name="limite">
                    </div>
                    <?php if (isset($_SESSION["logged"]) && $_SESSION["logged"]==true && $_SESSION['role'] == "admin"){?>
                    <div class="form-group">
                        <label for="entreprise_id">entreprise_id</label>
                        <select class="form-control" name="entreprise_id">
                            <?php foreach ($entreprises as $entreprise) { 
                                    echo "<option value=" .  $entreprise['id'] . ">". $entreprise['name'] . "</option>";
                                } 
                            ?>
                        </select>
                    </div>
                    <?php }?>                    
                </div>
            </div>
            <button type="submit" class="btn btn-dark container">Create</button>
        </form>
    </div>
</div>
<?php
    
    include_once 'includes/footer.php';
?>