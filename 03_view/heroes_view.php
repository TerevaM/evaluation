<?php ob_start(); ?>
<p>Héros</p>
<div class="container my-5 py-5 bg-primary">
<?php
var_dump($heroes);
foreach($heroes as $value) {
?>

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $value->getName(); ?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


<?php
}
?>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">New Hero</h5>
    <a class="btn btn-primary" href="<?= URL ?>heros/add">+</a>
  </div>
</div>

</div>
<?php
$content = ob_get_clean();
require_once "base_html.php";