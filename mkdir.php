<?php
require 'include/flatfile.inc.php';
require 'include/manage.inc.php';
for ($i=1; $i<=29; $i++){
  saveEntry('answers', $i, $data);
}
?>