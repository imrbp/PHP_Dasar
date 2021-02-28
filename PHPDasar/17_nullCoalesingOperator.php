<?php
// isset($variable)

$data = [
    "action" => "run"
];

// if (isset($data["action"])) {
//     $action = $data["action"];
// } else {
//     $action = "Nothing";
// }

$action = $data["action"] ?? "Nothing";

echo $action . PHP_EOL;
