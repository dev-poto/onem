<?php include_once 'includes/header.php';?>

<main role="main" class="container p-3">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4 ">
            <h1 class="text-center border rounded p-3 mt-5">Contact</h1>
            <form action="" method="post">
                <?=isset($_POST['btnContact']) ? ($error ? '<p class="text-info text-center">' . $error . '<p/>' : '<p class="text-info text-center">' . 'Identifiant invalide' . '<p/>') : ""?>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@email.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Fullname</label>
                    <input type="text" name="fullname" class="form-control" id="exampleFormControlSelect2" placeholder="felicien mukamba">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="2" placeholder="Mon message..."></textarea>
                </div>
                <button type="submit" class="btn btn-dark mb-2 container py-2" name="btnContact">Envoyer mon message</button>
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>

    

</main>



<?php include_once 'includes/footer.php';?>