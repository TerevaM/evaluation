<?php ob_start();

var_dump($users);
?>
<div class="container">
  <div class="row d-flex flex-row">
    <div class="col-sm-12">
      <h1 class="px-5 text-white">Connect User</h1>
      <div class="container my-5 py-5 bg-primary">
        <form method="POST" action="<?= URL ?>login/connectvalid" class="container p-5">
        <div class="mb-3">
        <label for="email" class="form-label text-white">Email</label>
        <input name="email" type="text" class="form-control">
        </div>
        <div class="mb-3">
        <label for="password" class="form-label text-white">Password</label>
        <input name="password" type="password" class="form-control">
        </div>
      <button type="submit" class="btn btn-secondary">Submit</button>
      </form>
    </div>
  </div>
  <div class="col-sm-12">
    <h1 class="px-5 text-white">New User</h1>
    <div class="container my-5 py-5 bg-primary">
      <form method="POST" action="<?= URL ?>login/inscvalid" class="container p-5">
        <div class="mb-3">
        <label for="firstname" class="form-label text-white">Prenom</label>
        <input name="firstname" type="text" class="form-control">
        </div>
        <div class="mb-3">
        <label for="lastname" class="form-label text-white">Nom</label>
        <input name="lastname" type="text" class="form-control">
        </div>
        <div class="mb-3">
        <label for="sexe" class="form-label text-white">Sexe</label>
        <input name="sexe" type="text" class="form-control">
        </div>
        <div class="mb-3">
        <label for="email" class="form-label text-white">Email</label>
        <input name="email" type="text" class="form-control">
        </div>
        <div class="mb-3">
        <label for="password" class="form-label text-white">Password</label>
        <input name="password" type="text" class="form-control">
        </div>
      <button type="submit" class="btn btn-secondary">Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php
$content = ob_get_clean();
require_once "base_html.php";
?>