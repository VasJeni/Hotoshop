<?php
if (isset($_POST["link"]) && isset($_POST["email"])) {
    $fileName = 'text.txt';
    $file = fopen($fileName, 'a') or die("cannot open file");
    fwrite($file, sprintf('%s %s%s', sanitizeString($_POST['link']), sanitizeString($_POST['email']), PHP_EOL));
    fclose($file);
    echo "data is saved";
} else {
    echo "invalid data";
}
function sanitizeString(string $string): string
{
    return stripslashes(htmlentities(strip_tags($string)));
}
