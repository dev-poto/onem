<?php include_once 'includes/header.php';?>

<main role="main" class="container">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4 pt-2">
            <h1 class="text-center">Create personalité</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="exampleFormControlInput1">date_obtention</label>
                    <input type="date" required name="date_obtention" class="form-control" id="exampleFormControlInput1" placeholder="date_obtention">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">demain</label>
                    <input type="text" required name="demain" class="form-control" id="exampleFormControlInput1" placeholder="demain">
                </div>
                <div class="form-group">
                  <label for="">reference</label>
                  <textarea class="form-control" required name="reference" id="" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-dark mb-2 container py-2" required name="submit">Create</button>
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>

    
</main>



<?php include_once 'includes/footer.php';?>