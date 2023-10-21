<?php
include_once 'includes/header.php';?>

<div class="album py-5 bg-light">
    <div class="container mt-5">
        <form method="POST" name="office" action="" enctype="multipart/form-data">
            <h1 class="text-center p-3 border rounded p-2">Valider une offre</h1>
            <div class="row ">
                <div class="col-lg-6">
                    <img class="w-100" src="assets/img/exams.svg" alt="" >
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="published">Valider une offre</label>
                        <select class="form-control" name="published">
                            <?php foreach (["on", "off"] as $published) { 
                                    echo "<option value=" .  $published . ">". $published . "</option>";
                                } 
                            ?>
                        </select>
                    </div>
                    
                </div>
            </div>
            <button type="submit" class="btn btn-dark container">Valider une offre</button>
        </form>
    </div>
</div>
<?php
    
    include_once 'includes/footer.php';
?>