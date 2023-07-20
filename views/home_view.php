<?php include_once 'includes/header.php';?>

<main class="container">
    <?php foreach ($values as $value) {?>
        <h1>Bienvenue  <?=$value['firstname'] . ' ' . $value['lastname']?></h1>
    <?php }?>
</main>
<?php include_once 'includes/footer.php';?>