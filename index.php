<?php
$name = $_GET['name'] ?? 'world';

// Create http response content infos
header('Content-type: text/html; charset=utf-8 ');

// Protect from Internet security issue, XSS (Cross-Site Scripting)
printf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8'));
