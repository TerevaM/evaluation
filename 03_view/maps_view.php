<?php ob_start(); ?>
<div class="container my-5 py-5 bg-secondary cards_heroes">
    <div class="row d-flex justify-content-around ">
<?php
foreach($maps as $value) {
?>

<div class="card col-4 m-1" style="width: 18rem; height:25rem">
  <!-- <img src="..." class="card-img-top" alt="..."> -->
  <div class="card-body position-relative">
    <h3 class="card-title bg-primary p-2 text-center text-white"><?= $value->getName(); ?></h3>
    <span class="text-uppercase">Category : <?= $value->getType(); ?></span><br>
    <div class="d-flex justify-content-around position-absolute fixed-bottom py-2">
        <a href="<?= URL ?>maps/edit/<?= $value->getId() ?>" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i></a>
        <form action="<?= URL ?>maps/delete/<?= $value->getId() ?>" method="POST"
        onsubmit=" return confirm('Etes-vous certain de vouloir supprimer cet hero ?')">
            <button class="btn btn-primary" type="submit"><i class="fa-solid fa-trash"></i></button>
        </form>
    </div>
  </div>
</div>

<?php
}

if(isset($_SESSION) && $_SESSION['rang'] == 'admin'):
?>

<div class="card col-4 m-1" style="width: 18rem;">
  <div class="card-body d-flex justify-content-center align-items-center flex-column">
    <h5 class="card-title bg-primary p-2 text-center text-white">New Map</h5>
    <a class="btn btn-primary" href="<?= URL ?>maps/add">+</a>
  </div>
</div>
<?php 
endif;
?>
</div>
</div>
<?php
$content = ob_get_clean();
require_once "base_html.php";