<?php ob_start();
?>
<h1 class="px-5">Nouveau héro</h1>
<div class="container my-5 py-5 bg-primary">
<form method="POST" action="<?= URL ?>heros/gvalid" class="container p-5">
  <div class="mb-3">
    <label for="name" class="form-label text-white">Nom</label>
    <input name="name" type="text" class="form-control">
 </div>
  <div class="mb-3">
    <label for="category" class="form-label text-white">categorie</label>
    <input name="category" type="text" class="form-control">
  </div>
  <div class="mb-3">
    <label for="life" class="form-label text-white">life</label>
    <input name="life" type="number" class="form-control">
  </div>
  <div class="mb-3">
    <label for="attack" class="form-label text-white">attack</label>
    <input name="attack" type="number" class="form-control">
  </div>
  <div class="mb-3">
    <label for="first_cap" class="form-label text-white">first cap</label>
    <input name="first_cap" type="text" class="form-control">
  </div>
  <div class="mb-3">
    <label for="second_cap" class="form-label text-white">second cap</label>
    <input name="second_cap" type="text" class="form-control">
  </div>
  <div class="mb-3">
    <label for="passif" class="form-label text-white">passif</label>
    <input name="passif" type="text" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php

$content = ob_get_clean();
require_once "base_html.php";

?>