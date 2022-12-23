<?php ob_start();
?>
<div class="container my-5 py-5 bg-primary">
<form method="POST" action="<?= URL ?>login/connect" class="container p-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-white">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php
$content = ob_get_clean();
require_once "base_html.php";

?>