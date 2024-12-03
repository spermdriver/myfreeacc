<?php
if (file_exists('logs.txt')) {
    echo "<pre>" . htmlspecialchars(file_get_contents('logs.txt')) . "</pre>";
} else {
    echo "Log file not found.";
}
?>
