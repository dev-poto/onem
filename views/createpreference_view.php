<?php include_once 'includes/header.php';?>

<main role="main" class="container">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4 pt-2">
            <h1 class="text-center">Create preference</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="nom">Name</label>
                    <select class="form-control" required name="nom">
                        <?php foreach ($postes as $poste) { 
                            echo "<option value=" .  $poste['poste'] . ">". $poste['poste'] . "</option>";
                        } 
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nom">Name</label>
                    input
                    <select class="form-control" required name="nom">
                        <?php foreach ($postes as $poste) { 
                            echo "<option value=" .  $poste['poste'] . ">". $poste['poste'] . "</option>";
                        } 
                        ?>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-dark mb-2 container py-2">Create</button>
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>

    
</main>



<?php include_once 'includes/footer.php';?>