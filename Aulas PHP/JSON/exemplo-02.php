<?php

$json = '[{"nome":"Guilherme","idade":29},{"nome":"Jo\u00e3o","idade":17}]';

$data = json_decode($json, true);

var_dump($data);

?>