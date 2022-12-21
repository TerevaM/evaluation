<?php ob_start(); ?>
<p>Héros</p>
<?php
$content = ob_get_clean();
require_once "base_html.php";

?>