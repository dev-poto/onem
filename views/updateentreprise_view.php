<?php
include_once 'includes/header.php';?>

<div class="album py-5 bg-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center p-3 border rounded p-2">Update a entreprise</h1>
                <form method="POST" name="demandeur" action="" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">name</label>
                                <input type="text" class="form-control" name="name" value=<?=$data->name?>>
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" class="form-control" name="email" value=<?=$data->email?>>
                            </div>
                            <div class="form-group">
                                <label for="adresse">adresse</label>
                                <input type="textearea" class="form-control" name="adresse" value=<?=$data->adresse?>>
                            </div>
                            <div class="form-group">
                                <label for="telephone">telephone</label>
                                <input type="tel" class="form-control" name="telephone" value=<?=$data->telephone?>>
                            </div>
                            <div class="form-group">
                                <label for="BP">BP</label>
                                <input type="text" class="form-control" name="BP" value=<?=$data->BP?>>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="numero_inss">numero_inss</label>
                                <input type="text" class="form-control" name="numero_inss" value=<?=$data->numero_inss?>>
                            </div>
                            <div class="form-group">
                                <label for="numero_rccm">numero_rccm</label>
                                <input type="text" class="form-control" name="numero_rccm" value=<?=$data->numero_rccm?>>
                            </div>
                            <div class="form-group">
                                <label for="numero_onem">numero_onem</label>
                                <input type="text" class="form-control" name="numero_onem" value=<?=$data->numero_onem?>>
                            </div>
                            <div class="form-group">
                                <label for="activite">activite</label>
                                <input type="text" class="form-control" name="activite" value=<?=$data->activite?>>
                            </div>
                            <div class="form-group">
                                <label for="created">created</label>
                                <input type="date" class="form-control" name="created" value=<?=$data->created?>>
                            </div>
                            <div class="form-group">
                                <label for="password">password</label>
                                <input type="password" class="form-control" name="password" value=<?=$data->password?>>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark container">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    
    include_once 'includes/footer.php';
?>