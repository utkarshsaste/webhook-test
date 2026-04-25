<?php
$data = file_get_contents("php://input");
file_put_contents("log.txt", $data);

echo "<pre>";
print_r(json_decode($data, true));
echo "</pre>";
?>