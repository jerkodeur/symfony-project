<?php
$name = $request->query->get('name', 'word');
?>

<h1>Hello <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></h1>