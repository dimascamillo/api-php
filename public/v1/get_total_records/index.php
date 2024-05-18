<?php

require_once __DIR__ . '/../../../api_core/config.php';
require_once __DIR__ . '/../../../api_core/response.php';

$data = require_once __DIR__ . '/../../../api_core/data.php';

$totalRecords = ['total_records' => count($data)];

echo Response::json(200, 'success', $totalRecords);
