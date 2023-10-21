<?php include_once 'includes/header.php';?>

<main role="main" class="container p-5">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4 pt-2">
            <h1 class="text-center">Create Competence</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="exampleFormControlInput1">nom</label>
                    <input type="text" required name="nom" class="form-control" id="exampleFormControlInput1" placeholder="Creatif">
                </div>
                <div class="form-group">
                    <label for="niveau">Niveau</label>
                    <select class="form-control" required name="niveau">
                        <?php foreach (['Avance', 'Intermediaire', 'debutant'] as $niveau) { 
                                echo "<option value=" .  $niveau . ">". $niveau . "</option>";
                            } 
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark mb-2 container py-2" required name="submit">Create</button>
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>

    
</main>



<?php include_once 'includes/footer.php';?>