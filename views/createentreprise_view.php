<?php
include_once 'includes/header.php';?>

<div class="album py-5 bg-light">
    <div class="container mt-5">
        
        <form method="POST" name="office" action="" enctype="multipart/form-data">
            <h1 class="text-center p-3 border rounded p-2">Create entreprise</h1>
            <div class="row ">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" class="form-control" required name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" class="form-control" required name="email">
                    </div>
                    <div class="form-group">
                        <label for="adresse">adresse</label>
                        <input type="textearea" class="form-control" required name="adresse">
                    </div>
                    <div class="form-group">
                        <label for="telephone">telephone</label>
                        <input type="tel" class="form-control" required name="telephone">
                    </div>
                    <div class="form-group">
                        <label for="BP">BP</label>
                                <input type="text" class="form-control" required name="BP">
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="password" class="form-control" required name="password">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="numero_inss">numero_inss</label>
                        <input type="text" class="form-control" required name="numero_inss">
                    </div>
                    <div class="form-group">
                        <label for="numero_rccm">numero_rccm</label>
                        <input type="text" class="form-control" required name="numero_rccm">
                    </div>
                    <div class="form-group">
                        <label for="numero_onem">numero_onem</label>
                        <input type="text" class="form-control" required name="numero_onem">
                    </div>
                    <div class="form-group">
                        <label for="activite">activite</label>
                        <input type="text" class="form-control" required name="activite">
                    </div>
                    <div class="form-group">
                        <label for="created">created</label>
                        <input type="date" class="form-control" required name="created">
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