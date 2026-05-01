<?php
$files = glob("*.php");
foreach ($files as $file) {
    if ($file == "update_includes.php") continue;
    $content = file_get_contents($file);
    $content = str_replace("'/includes/", "'/../includes/", $content);
    $content = str_replace('"assets/', '"../assets/', $content); // For assets in index.php
    file_put_contents($file, $content);
}
echo "Done";
