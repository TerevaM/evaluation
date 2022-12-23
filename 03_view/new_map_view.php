<?php ob_start();
?>
<h1 class="px-5 text-white">Nouvelle map</h1>
<div class="container my-5 py-5 bg-primary">
<form method="POST" action="<?= URL ?>maps/gvalid" class="container p-5">
    <div class="mb-3">
        <label for="name" class="form-label text-white">Nom</label>
        <input name="name" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label text-white">Type</label>
        <input name="type" type="text" class="form-control">
    </div>
    <button type="submit" class="btn btn-secondary">Submit</button>
</form>
</div>
<?php

$content = ob_get_clean();
require_once "base_html.php";

?>