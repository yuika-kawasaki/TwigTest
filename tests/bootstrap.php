<?php
ob_start();
require __DIR__ . '/../public_html/index.php';
$GLOBALS['index_output'] = ob_get_clean();
